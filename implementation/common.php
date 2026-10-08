<?php
// Shared code for index.php and api.php. No need to edit.
if (!defined('DOTONE')) { http_response_code(404); exit; }
require __DIR__ . '/config.php';

define('DATA_DIR', __DIR__ . '/data');
define('DATA_FILE', DATA_DIR . '/projects.php');
define('BACKUP_DIR', DATA_DIR . '/backups');
define('SESS_DIR', DATA_DIR . '/sessions');
define('GUARD', "<?php http_response_code(404); exit; ?>\n"); // makes data files unreadable from the web

foreach ([DATA_DIR, BACKUP_DIR, SESS_DIR] as $d) { if (!is_dir($d)) @mkdir($d, 0755, true); }

header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: DENY');
header('Referrer-Policy: same-origin');

function start_session() {
    global $LOGIN_DAYS;
    $life = max(1, (int)$LOGIN_DAYS) * 86400;
    $https = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || (($_SERVER['HTTP_X_FORWARDED_PROTO'] ?? '') === 'https');
    ini_set('session.gc_maxlifetime', (string)$life);
    ini_set('session.use_strict_mode', '1');
    session_save_path(SESS_DIR); // own folder, so shared hosting cleanup does not log people out early
    session_name('dotone_pb');
    session_set_cookie_params(['lifetime' => $life, 'path' => '/', 'secure' => $https, 'httponly' => true, 'samesite' => 'Lax']);
    session_start();
}
function current_user() {
    global $USERS;
    $u = $_SESSION['user'] ?? null;
    return ($u !== null && array_key_exists($u, $USERS)) ? $u : null; // removed users are logged out
}
function client_ip() { return $_SERVER['REMOTE_ADDR'] ?? 'unknown'; }

/* ----- data file ----- */
function read_raw() {
    // Decoded as objects (not arrays) so empty {} stays {} and never turns into []
    if (!is_file(DATA_FILE)) return (object)['version' => 0, 'projects' => new stdClass()];
    $s = file_get_contents(DATA_FILE);
    if (strpos($s, GUARD) === 0) $s = substr($s, strlen(GUARD));
    $d = json_decode($s);
    if (!is_object($d)) throw new Exception('Data file is damaged. Restore one from data/backups/.');
    if (!isset($d->projects) || !is_object($d->projects)) $d->projects = new stdClass();
    if (!isset($d->version)) $d->version = 0;
    return $d;
}
function with_lock(callable $fn) {
    $lock = fopen(DATA_DIR . '/.lock', 'c');
    flock($lock, LOCK_EX);
    try { return $fn(); } finally { flock($lock, LOCK_UN); fclose($lock); }
}
function write_store($d) {
    $json = json_encode($d, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    if ($json === false) throw new Exception('Could not encode data');
    $tmp = DATA_FILE . '.tmp';
    if (file_put_contents($tmp, GUARD . $json) === false) throw new Exception('Cannot write to the data folder. Check folder permissions (755).');
    rename($tmp, DATA_FILE);
    daily_backup();
}
function daily_backup() {
    global $BACKUP_KEEP_DAYS;
    @copy(DATA_FILE, BACKUP_DIR . '/projects-' . date('Y-m-d') . '.php');
    $files = glob(BACKUP_DIR . '/projects-*.php') ?: [];
    sort($files);
    while (count($files) > max(1, (int)$BACKUP_KEEP_DAYS)) @unlink(array_shift($files));
}

/* ----- wrong password limit: 10 tries, then 15 minutes wait ----- */
function fails_file() { return DATA_DIR . '/login-fails.php'; }
function fails_read() {
    $f = fails_file();
    if (!is_file($f)) return [];
    $d = json_decode(substr(file_get_contents($f), strlen(GUARD)), true);
    return is_array($d) ? $d : [];
}
function fails_write($d) {
    $now = time();
    foreach ($d as $ip => $r) if (($r['t'] ?? 0) < $now - 3600) unset($d[$ip]);
    file_put_contents(fails_file(), GUARD . json_encode($d), LOCK_EX);
}
function login_blocked() { $d = fails_read(); $r = $d[client_ip()] ?? null; return $r && ($r['until'] ?? 0) > time(); }
function login_failed() {
    $d = fails_read(); $ip = client_ip();
    $r = $d[$ip] ?? ['n' => 0, 'until' => 0];
    $r['n']++; $r['t'] = time();
    if ($r['n'] >= 10) { $r['until'] = time() + 900; $r['n'] = 0; }
    $d[$ip] = $r; fails_write($d);
}
function login_ok() { $d = fails_read(); unset($d[client_ip()]); fails_write($d); }
