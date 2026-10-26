<?php
require_once __DIR__ . '/includes/form-guard.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Method not allowed');
}

// Bots fill the hidden field: send them to the thank-you page without storing anything
if (form_is_bot()) {
    header('Location: /thank-you');
    exit;
}

if (form_rate_limited('webinar', 5, 600)) {
    http_response_code(429);
    exit('Too many requests. Please try again in a few minutes.');
}

$name    = form_field('name', 150);
$email   = form_field('email', 255);
$phone   = form_field('phone', 50);
$company = form_field('company', 255);

if ($name === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    exit('Please go back and enter your name and a valid email address.');
}

require_once __DIR__ . '/db.php';

$stmt = $conn->prepare("
    INSERT INTO webinar_registrations (name, email, phone, company)
    VALUES (?, ?, ?, ?)
");

$stmt->bind_param("ssss", $name, $email, $phone, $company);
if (!$stmt->execute()) {
    error_log('Webinar registration insert failed: ' . $stmt->error);
}
$stmt->close();

header("Location: /thank-you");
exit;
