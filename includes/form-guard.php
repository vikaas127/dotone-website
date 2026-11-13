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
    $fields = array_filter($fields, function ($v) { return $v !== '' && $v !== null; });
    $lines = [];
    foreach ($fields as $label => $value) $lines[] = $label . ': ' . $value;
    $body = implode("\n", $lines) . "\n";
    $to = form_env('LEADS_EMAIL', 'sales@techdotbit.com');
    $subject = trim(preg_replace('/[\r\n]+/', ' ', (string) $subject));
    if ($replyTo !== '' && !filter_var($replyTo, FILTER_VALIDATE_EMAIL)) $replyTo = '';
    $html = form_email_html($subject, $fields, $replyTo);
    return form_send_email($to, $subject, $body, $html, $replyTo);
}

// Send one email: through the SMTP mailbox in .env when set, otherwise PHP mail()
function form_send_email($to, $subject, $body, $html = '', $replyTo = '')
{
    $user = form_env('SMTP_USER');
    $pass = form_env('SMTP_PASS');
    if ($user !== '' && $pass !== '') {
        $error = form_smtp_send($user, $pass, $to, $subject, $body, $replyTo, $html);
        if ($error === '') return true;
        error_log('Form email: SMTP failed: ' . $error);
    }

    $from = $user !== '' ? $user : 'no-reply@dotone.in';
    [$contentType, $content] = form_email_mime($body, $html);
    $headers = ['From: DotOne <' . $from . '>', 'MIME-Version: 1.0', 'Content-Type: ' . $contentType];
    if ($replyTo !== '') $headers[] = 'Reply-To: ' . $replyTo;
    return @mail($to, '=?UTF-8?B?' . base64_encode($subject) . '?=', $content, implode("\r\n", $headers), '-f' . $from);
}

// Thank-you email to the person who filled in a form. $kind is 'demo', 'webinar' or 'enquiry'.
// Nothing the visitor typed is repeated in it except a plain first name, so the form
// cannot be used to send someone else's text to an address of the sender's choosing.
function form_confirm_visitor($email, $firstName, $kind = 'enquiry')
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) return false;
    $firstName = trim((string) $firstName);
    $hello = preg_match('/^[\p{L}][\p{L} .\'-]{0,39}$/u', $firstName) ? 'Dear ' . $firstName . ',' : 'Hello,';
    $sales = form_env('LEADS_EMAIL', 'sales@techdotbit.com');

    $copy = [
        'demo' => ['We have received your demo request', 'Thank you for requesting a demo of DotOne.',
            'A DotOne specialist will contact you within one working day to confirm a time. The demo is a free 30-minute walkthrough built around one real process from your business.'],
        'webinar' => ['You are registered for the DotOne webinar', 'Thank you for registering for the DotOne webinar.',
            'Your seat is reserved. Details of the session are on the webinar page, and our team will be in touch if anything changes.'],
        'enquiry' => ['We have received your enquiry', 'Thank you for contacting DotOne.',
            'Our team has your message and will get back to you within one working day.'],
    ];
    [$subject, $thanks, $next] = $copy[$kind] ?? $copy['enquiry'];
    $link = $kind === 'webinar' ? ['https://dotone.in/webinar', 'Webinar details'] : ['https://dotone.in/walkthrough', 'See how an order flows through DotOne'];

    $text = $hello . "\n\n" . $thanks . ' ' . $next . "\n\n"
        . 'If you need anything sooner, reply to this email or write to ' . $sales . ".\n\n"
        . $link[1] . ': ' . $link[0] . "\n\nRegards,\nThe DotOne team\nTechDotBit Pvt Ltd\nhttps://dotone.in\n";

    $h = function ($v) { return htmlspecialchars((string) $v, ENT_QUOTES, 'UTF-8'); };
    $html = '<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>' . $h($subject) . '</title></head>'
        . '<body style="margin:0;padding:0;background:#f1f5f9;font-family:-apple-system,BlinkMacSystemFont,\'Segoe UI\',Roboto,Arial,sans-serif;">'
        . '<table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background:#f1f5f9;"><tr><td align="center" style="padding:24px 12px;">'
        . '<table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="max-width:600px;background:#ffffff;border-radius:12px;overflow:hidden;border:1px solid #e2e8f0;">'
        . form_email_header('', $subject)
        . '<tr><td style="padding:18px 28px 8px;font-size:15px;line-height:1.65;color:#0f172a;">'
        . '<p style="margin:0 0 14px;">' . $h($hello) . '</p>'
        . '<p style="margin:0 0 14px;">' . $h($thanks) . ' ' . $h($next) . '</p>'
        . '<p style="margin:0 0 20px;">If you need anything sooner, reply to this email or write to <a href="mailto:' . $h($sales) . '" style="color:#0077c2;text-decoration:none;">' . $h($sales) . '</a>.</p>'
        . '<a href="' . $h($link[0]) . '" style="display:inline-block;padding:11px 20px;border-radius:8px;background:#0096ee;color:#ffffff;font-size:14px;font-weight:600;text-decoration:none;">' . $h($link[1]) . '</a>'
        . '</td></tr>'
        . '<tr><td style="padding:22px 28px 26px;font-size:14px;line-height:1.6;color:#0f172a;">Regards,<br><strong>The DotOne team</strong></td></tr>'
        . form_email_footer('DotOne is built by TechDotBit Pvt Ltd. You are receiving this because this address was entered in a form on dotone.in. If that was not you, please ignore this email.')
        . '</table></td></tr></table></body></html>';

    return form_send_email($email, $subject, $text, $html, $sales);
}

// The enquiry as an HTML email: a header, the contact details with reply and call buttons, then the rest as a table.
// Built with tables and inline styles, which is what mail apps render reliably.
function form_email_html($title, array $fields, $replyTo = '')
{
    $h = function ($v) { return htmlspecialchars((string) $v, ENT_QUOTES, 'UTF-8'); };
    $name = $fields['Name'] ?? '';
    $company = $fields['Company'] ?? '';
    $phone = $fields['Phone'] ?? '';
    $tel = preg_replace('/[^0-9+]/', '', (string) $phone);

    $rows = '';
    foreach ($fields as $label => $value) {
        if ($label === 'Name' || $label === 'Company') continue;
        if ($label === 'Email') $cell = '<a href="mailto:' . $h($value) . '" style="color:#0077c2;text-decoration:none;">' . $h($value) . '</a>';
        elseif ($label === 'Phone' && $tel !== '') $cell = '<a href="tel:' . $h($tel) . '" style="color:#0077c2;text-decoration:none;">' . $h($value) . '</a>';
        else $cell = nl2br($h($value));
        $rows .= '<tr>'
            . '<td style="padding:10px 16px 10px 0;border-top:1px solid #e8edf3;font-size:13px;color:#64748b;vertical-align:top;white-space:nowrap;">' . $h($label) . '</td>'
            . '<td style="padding:10px 0;border-top:1px solid #e8edf3;font-size:14px;color:#0f172a;line-height:1.5;">' . $cell . '</td>'
            . '</tr>';
    }

    $button = function ($href, $text, $primary) use ($h) {
        $style = $primary ? 'background:#0096ee;color:#ffffff;border:1px solid #0096ee;' : 'background:#ffffff;color:#0077c2;border:1px solid #b9dcf5;';
        return '<a href="' . $h($href) . '" style="display:inline-block;padding:10px 18px;margin:0 8px 8px 0;border-radius:8px;font-size:14px;font-weight:600;text-decoration:none;' . $style . '">' . $h($text) . '</a>';
    };
    $buttons = '';
    if ($replyTo !== '') $buttons .= $button('mailto:' . $replyTo . '?subject=' . rawurlencode('Your DotOne enquiry'), 'Reply by email', true);
    if ($tel !== '') $buttons .= $button('tel:' . $tel, 'Call ' . $phone, false);

    return '<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>' . $h($title) . '</title></head>'
        . '<body style="margin:0;padding:0;background:#f1f5f9;font-family:-apple-system,BlinkMacSystemFont,\'Segoe UI\',Roboto,Arial,sans-serif;">'
        . '<table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background:#f1f5f9;"><tr><td align="center" style="padding:24px 12px;">'
        . '<table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="max-width:600px;background:#ffffff;border-radius:12px;overflow:hidden;border:1px solid #e2e8f0;">'
        . form_email_header('Website enquiry', $title)
        . '<tr><td style="padding:18px 28px 8px;">'
        . ($name !== '' ? '<div style="font-size:18px;font-weight:700;color:#0f172a;">' . $h($name) . '</div>' : '')
        . ($company !== '' ? '<div style="font-size:14px;color:#64748b;margin-top:2px;">' . $h($company) . '</div>' : '')
        . ($buttons !== '' ? '<div style="margin-top:16px;">' . $buttons . '</div>' : '')
        . '</td></tr>'
        . '<tr><td style="padding:8px 28px 24px;"><table role="presentation" width="100%" cellpadding="0" cellspacing="0">' . $rows . '</table></td></tr>'
        . form_email_footer('Sent from a form on dotone.in on ' . $h((new DateTime('now', new DateTimeZone('Asia/Kolkata')))->format('j M Y, g:i a')) . ' IST. Replying to this email goes straight to the person who filled in the form.')
        . '</table></td></tr></table></body></html>';
}

// Top of both emails: the DotOne logo on white, a blue rule, then the title.
// The logo is the PNG on the site, because mail apps do not show SVG images.
function form_email_header($label, $title)
{
    $h = function ($v) { return htmlspecialchars((string) $v, ENT_QUOTES, 'UTF-8'); };
    return '<tr><td style="padding:22px 28px 18px;background:#ffffff;">'
        . '<a href="https://dotone.in" style="text-decoration:none;"><img src="https://dotone.in/assets/dotone-wm-blue-tight.png" width="156" height="36" alt="DotOne" style="display:block;border:0;width:156px;height:36px;"></a>'
        . '</td></tr>'
        . '<tr><td style="height:3px;line-height:3px;font-size:0;background:#0096ee;">&nbsp;</td></tr>'
        . '<tr><td style="padding:22px 28px 0;">'
        . ($label !== '' ? '<div style="font-size:12px;letter-spacing:1.5px;text-transform:uppercase;color:#0096ee;font-weight:700;">' . $h($label) . '</div>' : '')
        . '<div style="font-size:20px;font-weight:700;margin-top:4px;line-height:1.3;color:#0f172a;">' . $h($title) . '</div>'
        . '</td></tr>';
}

// Bottom of both emails, matching the footer on documents downloaded from the site:
// the DotOne logo on the left, the "Endless clarity" tagline on the right, then a short note.
function form_email_footer($note)
{
    $h = function ($v) { return htmlspecialchars((string) $v, ENT_QUOTES, 'UTF-8'); };
    return '<tr><td style="padding:18px 28px;background:#f8fafc;border-top:1px solid #e8edf3;">'
        . '<table role="presentation" width="100%" cellpadding="0" cellspacing="0"><tr>'
        . '<td style="vertical-align:middle;"><a href="https://dotone.in" style="text-decoration:none;"><img src="https://dotone.in/assets/dotone-wm-blue-tight.png" width="104" height="24" alt="DotOne" style="display:block;border:0;width:104px;height:24px;"></a></td>'
        . '<td align="right" style="vertical-align:middle;font-size:13px;color:#0f172a;white-space:nowrap;">'
        . '<span style="font-weight:600;">Endless clarity</span><span style="color:#94a3b8;">&nbsp;&nbsp;&middot;&nbsp;&nbsp;</span><a href="https://dotone.in" style="color:#0096ee;text-decoration:none;font-weight:600;">dotone.in</a>'
        . '</td></tr></table>'
        . '<div style="margin-top:12px;padding-top:12px;border-top:1px solid #e8edf3;font-size:12px;color:#64748b;line-height:1.5;">' . $h($note) . '</div>'
        . '</td></tr>';
}

// Body and Content-Type for a message with a plain-text part and, when given, an HTML part
function form_email_mime($text, $html = '')
{
    $encode = function ($part) { return chunk_split(base64_encode($part), 76, "\r\n"); };
    if ($html === '') return ['text/plain; charset=UTF-8' . "\r\n" . 'Content-Transfer-Encoding: base64', $encode($text)];
    $boundary = 'dotone-' . bin2hex(random_bytes(12));
    $content = '--' . $boundary . "\r\nContent-Type: text/plain; charset=UTF-8\r\nContent-Transfer-Encoding: base64\r\n\r\n" . $encode($text)
        . '--' . $boundary . "\r\nContent-Type: text/html; charset=UTF-8\r\nContent-Transfer-Encoding: base64\r\n\r\n" . $encode($html)
        . '--' . $boundary . "--\r\n";
    return ['multipart/alternative; boundary="' . $boundary . '"', $content];
}

// Minimal SMTP client (implicit TLS on 465, STARTTLS otherwise). Returns '' on success or a short error.
function form_smtp_send($user, $pass, $to, $subject, $body, $replyTo = '', $html = '')
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

    [$contentType, $content] = form_email_mime($body, $html);
    $headers = [
        'Date: ' . date('r'),
        'From: ' . ($to === form_env('LEADS_EMAIL', 'sales@techdotbit.com') ? 'DotOne website' : 'DotOne') . ' <' . $user . '>',
        'To: <' . $to . '>',
        'Subject: =?UTF-8?B?' . base64_encode($subject) . '?=',
        'Message-ID: <' . bin2hex(random_bytes(12)) . '@dotone.in>',
        'MIME-Version: 1.0',
        'Content-Type: ' . $contentType,
    ];
    if ($replyTo !== '') $headers[] = 'Reply-To: <' . $replyTo . '>';
    $message = implode("\r\n", $headers) . "\r\n\r\n" . $content;
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
