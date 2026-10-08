<?php
require 'db.php';

$result = $conn->query("SELECT COUNT(*) as total FROM webinar_registrations");
$row = $result->fetch_assoc();

echo json_encode([
    "count" => (int)$row['total']
]);
