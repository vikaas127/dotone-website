<?php
define('DOTONE', 1);
require __DIR__ . '/common.php';
start_session();

if (isset($_GET['logout'])) {
    $_SESSION = []; session_destroy();
    header('Location: ./'); exit;
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['user'])) {
    if (login_blocked()) {
        $error = 'Too many wrong passwords. Try again in 15 minutes.';
    } else {
        $u = strtolower(trim($_POST['user'] ?? ''));
        $p = (string)($_POST['pass'] ?? '');
        if ($u !== '' && array_key_exists($u, $USERS) && hash_equals((string)$USERS[$u], $p)) {
            login_ok();
            session_regenerate_id(true);
            $_SESSION['user'] = $u;
            header('Location: ./'); exit;
        }
        login_failed();
        $error = 'Name or password is wrong.';
    }
}

if (!current_user()) { ?>
<!DOCTYPE html>
<html lang="en"><head>
<link rel="icon" href="/favicon.ico" sizes="48x48"><link rel="icon" type="image/png" sizes="32x32" href="/public/favicon-32.png"><link rel="apple-touch-icon" href="/public/apple-touch-icon.png"><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sign in · DotOne Implementation</title>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;700&display=swap" rel="stylesheet">
<style>
body{margin:0;min-height:100vh;display:grid;place-items:center;background:#081C4B;font-family:Outfit,system-ui,Arial,sans-serif;color:#081C4B}
form{background:#fff;padding:32px 28px;border-radius:14px;width:min(360px,90vw);box-sizing:border-box}
.b{display:flex;align-items:center;gap:10px;font-weight:700;font-size:20px;margin-bottom:4px}
.d{width:22px;height:22px;border-radius:50%;background:conic-gradient(#00FEC0 0 50%,#0096EE 50% 100%)}
p{color:#4F5E7B;margin:0 0 20px;font-size:15px}
label{display:block;font-size:14px;color:#4F5E7B;margin:12px 0 5px}
input{width:100%;box-sizing:border-box;padding:11px 12px;border:1px solid #D6E0EC;border-radius:8px;font:inherit}
input:focus{outline:3px solid #0096EE;outline-offset:1px}
button{margin-top:20px;width:100%;padding:12px;border:0;border-radius:8px;background:#0096EE;color:#fff;font:inherit;font-weight:600;cursor:pointer}
.e{color:#D6334B;font-size:14px;margin-top:12px}
</style></head><body>
<form method="post" autocomplete="on">
  <div class="b"><span class="d"></span>DotOne Implementation</div>
  <p>Sign in to open the playbook and tracker.</p>
  <label for="u">Name</label><input id="u" name="user" autocomplete="username" required autofocus>
  <label for="pw">Password</label><input id="pw" name="pass" type="password" autocomplete="current-password" required>
  <button type="submit">Sign in</button>
  <?php if ($error) echo '<div class="e" role="alert">' . htmlspecialchars($error) . '</div>'; ?>
</form></body></html>
<?php exit; }

$file = __DIR__ . '/playbook.html';
if (!is_file($file)) {
    echo '<h2>Almost there</h2><p>Upload your playbook HTML file into this folder and rename it to <b>playbook.html</b>, then reload.</p>';
    exit;
}
header('Cache-Control: no-cache');
$html = file_get_contents($file);
$inject = '<script src="dotone-sync.js?v=' . filemtime(__DIR__ . '/dotone-sync.js') . '"></script>';
if (strpos($html, 'dotone-sync.js') === false) {
    $html = preg_match('/<head[^>]*>/i', $html) ? preg_replace('/<head[^>]*>/i', "$0\n" . $inject, $html, 1) : $inject . $html;
}
echo $html;
