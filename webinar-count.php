<?php
// Registration count for the webinar page. Always answers with JSON, even if the database is down.
header('Content-Type: application/json');
header('X-Robots-Tag: noindex');
header('Cache-Control: public, max-age=300');

$count = 0;
try {
    mysqli_report(MYSQLI_REPORT_OFF);
    if (is_file(__DIR__ . '/db.php')) {
        require __DIR__ . '/db.php';
        if (isset($conn) && $conn instanceof mysqli && !$conn->connect_errno) {
            $result = $conn->query("SELECT COUNT(*) AS total FROM webinar_registrations");
            if ($result) {
                $row = $result->fetch_assoc();
                $count = (int) ($row['total'] ?? 0);
            }
        }
    }
} catch (Throwable $e) {
    $count = 0;
}

echo json_encode(['count' => $count]);
