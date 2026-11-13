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

// Email a submission to the sales inbox, so a lead still arrives if the database is down.
// Visitor input goes in the body only; the reply-to is used only when it is a valid address.
function form_notify($subject, array $fields, $replyTo = '')
{
    $lines = [];
    foreach ($fields as $label => $value) {
        if ($value === '' || $value === null) continue;
        $lines[] = $label . ': ' . $value;
    }
    $headers = ['From: DotOne website <no-reply@dotone.in>', 'Content-Type: text/plain; charset=UTF-8'];
    if ($replyTo !== '' && filter_var($replyTo, FILTER_VALIDATE_EMAIL)) $headers[] = 'Reply-To: ' . $replyTo;
    return @mail('sales@techdotbit.com', $subject, implode("\n", $lines) . "\n", implode("\r\n", $headers));
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
    // config.php loads .env into $_ENV; a missing or broken .env must not stop the form
    try {
        $file = dirname(__DIR__) . '/config.php';
        if (is_file($file)) require_once $file;
    } catch (Throwable $e) {
        error_log('CRM lead push: config not loaded: ' . $e->getMessage());
    }
    $url = trim((string) ($_ENV['CRM_LEAD_URL'] ?? ''), " \t\"'");
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
