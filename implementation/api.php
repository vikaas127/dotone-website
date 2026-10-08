<?php
define('DOTONE', 1);
require __DIR__ . '/common.php';
start_session();
header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store');

function out($code, $data) { http_response_code($code); echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); exit; }

$user = current_user();
if (!$user) out(401, ['error' => 'Not signed in']);
session_write_close(); // do not block other requests from the same person

$action = $_GET['action'] ?? '';
$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'POST' && ($_SERVER['HTTP_X_DOTONE'] ?? '') !== '1') out(403, ['error' => 'Blocked']);

try {
    if ($action === 'health') out(200, ['ok' => true, 'user' => $user]);

    if ($action === 'list' && $method === 'GET') out(200, read_raw());

    if (($action === 'save' || $action === 'delete') && $method === 'POST') {
        $id = $_GET['id'] ?? '';
        if (!preg_match('/^[A-Za-z0-9_-]{1,64}$/', $id)) out(400, ['error' => 'Invalid id']);
        $doc = null;
        if ($action === 'save') {
            $body = file_get_contents('php://input');
            if (strlen($body) > 2 * 1024 * 1024) out(413, ['error' => 'Too large']);
            $doc = json_decode($body);
            if (!is_object($doc)) out(400, ['error' => 'Invalid data']);
            $doc->updatedBy = $user;
        }
        $version = with_lock(function () use ($action, $id, $doc) {
            $d = read_raw();
            if ($action === 'save') { $d->projects->{$id} = $doc; }
            else { if (!property_exists($d->projects, $id)) return $d->version; unset($d->projects->{$id}); }
            $d->version = (int)$d->version + 1;
            write_store($d);
            return $d->version;
        });
        out(200, ['ok' => true, 'version' => $version]);
    }

    out(404, ['error' => 'Unknown action']);
} catch (Throwable $e) {
    out(500, ['error' => $e->getMessage()]);
}
