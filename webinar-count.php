<?php
require __DIR__ . '/db.php';
header('Content-Type: application/json');
header('Cache-Control: public, max-age=300');

$result = $conn->query("SELECT COUNT(*) as total FROM webinar_registrations");
$row = $result->fetch_assoc();

echo json_encode([
    "count" => (int)$row['total']
]);
