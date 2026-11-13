<?php
// Shared protection for public form handlers: bot trap, rate limit and field length caps.

// A hidden "website" field that people never see; bots fill it in.
function form_is_bot()
{
    return trim($_POST['website'] ?? '') !== '';
}

// Allow $max submissions per IP in $window seconds. Uses a small file in the system temp folder.
function form_rate_limited($bucket, $max = 5, $window = 600)
{
    $ip = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
    $file = sys_get_temp_dir() . '/dotone-form-' . preg_replace('/[^a-z0-9_-]/i', '', $bucket) . '.json';
    $now = time();
    $fh = @fopen($file, 'c+');
    if (!$fh) return false;
    flock($fh, LOCK_EX);
    $data = json_decode(stream_get_contents($fh) ?: '{}', true) ?: [];
    foreach ($data as $k => $times) {
        $data[$k] = array_values(array_filter($times, function ($t) use ($now, $window) { return $t > $now - $window; }));
        if (!$data[$k]) unset($data[$k]);
    }
    $key = hash('sha256', $ip);
    $limited = count($data[$key] ?? []) >= $max;
    if (!$limited) $data[$key][] = $now;
    ftruncate($fh, 0);
    rewind($fh);
    fwrite($fh, json_encode($data));
    flock($fh, LOCK_UN);
    fclose($fh);
    return $limited;
}

// Trimmed POST value cut to a maximum length, with control characters removed.
function form_field($name, $max = 255)
{
    $v = $_POST[$name] ?? '';
    if (is_array($v)) return '';
    $v = preg_replace('/[\x00-\x08\x0B\x0C\x0E-\x1F\x7F]/u', '', trim((string) $v));
    return mb_substr($v, 0, $max);
}

// Settings from the server's .env file (loaded by config.php). A missing or broken .env must not stop a form.
function form_env($key, $default = '')
{
    static $loaded = false;
    if (!$loaded) {
        $loaded = true;
        try {
            $file = dirname(__DIR__) . '/config.php';
            if (is_file($file)) require_once $file;
        } catch (Throwable $e) {
            error_log('Form settings: config not loaded: ' . $e->getMessage());
        }
    }
    $value = trim((string) ($_ENV[$key] ?? ''), " \t\"'");
    return $value === '' ? $default : $value;
}

// Email a submission to the sales inbox, so a lead still arrives if the database is down.
// Visitor input goes in the body only; the reply-to is used only when it is a valid address.
//
// With SMTP_USER and SMTP_PASS in .env the message is sent through that mailbox (reliable).
// Without them it falls back to PHP mail(), which many hosts drop when the sender is not a real mailbox.
// Optional .env lines: LEADS_EMAIL (who receives enquiries), SMTP_HOST (default smtp.hostinger.com), SMTP_PORT (default 465).
function form_notify($subject, array $fields, $replyTo = '')
{
    $lines = [];
    foreach ($fields as $label => $value) {
        if ($value === '' || $value === null) continue;
        $lines[] = $label . ': ' . $value;
    }
    $body = implode("\n", $lines) . "\n";
    $to = form_env('LEADS_EMAIL', 'sales@techdotbit.com');
    $subject = trim(preg_replace('/[\r\n]+/', ' ', (string) $subject));
    if ($replyTo !== '' && !filter_var($replyTo, FILTER_VALIDATE_EMAIL)) $replyTo = '';

    $user = form_env('SMTP_USER');
    $pass = form_env('SMTP_PASS');
    if ($user !== '' && $pass !== '') {
        $error = form_smtp_send($user, $pass, $to, $subject, $body, $replyTo);
        if ($error === '') return true;
        error_log('Form email: SMTP failed: ' . $error);
    }

    $from = $user !== '' ? $user : 'no-reply@dotone.in';
    $headers = ['From: DotOne website <' . $from . '>', 'Content-Type: text/plain; charset=UTF-8'];
    if ($replyTo !== '') $headers[] = 'Reply-To: ' . $replyTo;
    return @mail($to, $subject, $body, implode("\r\n", $headers), '-f' . $from);
}

// Minimal SMTP client (implicit TLS on 465, STARTTLS otherwise). Returns '' on success or a short error.
function form_smtp_send($user, $pass, $to, $subject, $body, $replyTo = '')
{
    $host = form_env('SMTP_HOST', 'smtp.hostinger.com');
    $port = (int) form_env('SMTP_PORT', '465');
    $secure = form_env('SMTP_SECURE', $port === 465 ? 'ssl' : 'tls');
    $fp = @stream_socket_client(($secure === 'ssl' ? 'ssl://' : 'tcp://') . $host . ':' . $port, $errno, $errstr, 8);
    if (!$fp) return 'connect: ' . $errstr;
    stream_set_timeout($fp, 10);

    $read = function () use ($fp) {
        $reply = '';
        while (($line = fgets($fp, 1024)) !== false) {
            $reply .= $line;
            if (strlen($line) < 4 || $line[3] === ' ') break;
        }
        return $reply;
    };
    $cmd = function ($line, $expect) use ($fp, $read) {
        if ($line !== null) fwrite($fp, $line . "\r\n");
        $reply = $read();
        if (strpos($reply, (string) $expect) === 0) return '';
        return trim(substr($reply, 0, 120)) ?: 'no reply';
    };
    $fail = function ($step, $error) use ($fp) { fclose($fp); return $step . ': ' . $error; };

    $name = 'dotone.in';
    if ($e = $cmd(null, 220)) return $fail('greeting', $e);
    if ($e = $cmd('EHLO ' . $name, 250)) return $fail('EHLO', $e);
    if ($secure === 'tls') {
        if ($e = $cmd('STARTTLS', 220)) return $fail('STARTTLS', $e);
        if (!@stream_socket_enable_crypto($fp, true, STREAM_CRYPTO_METHOD_TLS_CLIENT)) return $fail('STARTTLS', 'TLS failed');
        if ($e = $cmd('EHLO ' . $name, 250)) return $fail('EHLO', $e);
    }
    if ($e = $cmd('AUTH LOGIN', 334)) return $fail('AUTH', $e);
    if ($e = $cmd(base64_encode($user), 334)) return $fail('AUTH user', $e);
    if ($e = $cmd(base64_encode($pass), 235)) return $fail('AUTH password', $e);
    if ($e = $cmd('MAIL FROM:<' . $user . '>', 250)) return $fail('MAIL FROM', $e);
    if ($e = $cmd('RCPT TO:<' . $to . '>', 250)) return $fail('RCPT TO', $e);
    if ($e = $cmd('DATA', 354)) return $fail('DATA', $e);

    $headers = [
        'Date: ' . date('r'),
        'From: DotOne website <' . $user . '>',
        'To: <' . $to . '>',
        'Subject: =?UTF-8?B?' . base64_encode($subject) . '?=',
        'Message-ID: <' . bin2hex(random_bytes(12)) . '@dotone.in>',
        'MIME-Version: 1.0',
        'Content-Type: text/plain; charset=UTF-8',
        'Content-Transfer-Encoding: base64',
    ];
    if ($replyTo !== '') $headers[] = 'Reply-To: <' . $replyTo . '>';
    $message = implode("\r\n", $headers) . "\r\n\r\n" . chunk_split(base64_encode($body), 76, "\r\n");
    if ($e = $cmd(rtrim($message, "\r\n") . "\r\n.", 250)) return $fail('message', $e);
    $cmd('QUIT', 221);
    fclose($fp);
    return '';
}

// db.php stops the script when the database cannot be reached. Call this before requiring it:
// if the script ends before form_db_done(), $onFail runs with whatever was printed thrown away.
function form_db_guard(callable $onFail)
{
    $GLOBALS['form_db_done'] = false;
    ob_start();
    register_shutdown_function(function () use ($onFail) {
        if (!empty($GLOBALS['form_db_done'])) return;
        while (ob_get_level() > 0) ob_end_clean();
        $onFail();
    });
}

function form_db_done()
{
    $GLOBALS['form_db_done'] = true;
    if (ob_get_level() > 0) ob_end_flush();
}

// Send a submission to DotOne CRM as a lead, through the CRM's web-to-lead form.
// The form address is one line in the server's .env file (not in Git), next to the database settings:
//     CRM_LEAD_URL=https://dotone.techdotbit.in/api/v1/forms/wtl/FORM_KEY
// Returns true when the CRM accepted the lead, false when it did not or nothing is configured.
function form_push_to_crm(array $lead)
{
    $url = form_env('CRM_LEAD_URL');
    if ($url === '' || !preg_match('#^https://#i', $url) || !function_exists('curl_init')) return false;

    // The form key is the last part of the address; the CRM also expects it as a field
    $lead['key'] = basename(parse_url($url, PHP_URL_PATH));
    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $lead,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CONNECTTIMEOUT => 4,
        CURLOPT_TIMEOUT => 8,
        CURLOPT_HTTPHEADER => ['X-Requested-With: XMLHttpRequest', 'Accept: application/json'],
    ]);
    $body = curl_exec($ch);
    $code = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $error = curl_error($ch);
    curl_close($ch);

    $json = is_string($body) ? json_decode($body, true) : null;
    $ok = $code >= 200 && $code < 300 && is_array($json) && !empty($json['success']);
    if (!$ok) error_log('CRM lead push failed: HTTP ' . $code . ' ' . $error . ' ' . substr((string) $body, 0, 200));
    return $ok;
}
