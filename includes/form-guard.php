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
