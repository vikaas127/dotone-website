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

// The sales team gets every registration by email too, so nothing is lost if the database is unavailable
$mailed = form_notify('New webinar registration: ' . $name, ['Name' => $name, 'Email' => $email, 'Phone' => $phone, 'Company' => $company], $email);

form_confirm_visitor($email, strtok($name, ' '), 'webinar');
$inCrm = form_push_to_crm(['name' => $name, 'email' => $email, 'phonenumber' => $phone, 'company' => $company, 'description' => 'Webinar registration from dotone.in']);
$mailed = $mailed || $inCrm;

$dbFailed = function () use ($mailed) {
    error_log('Webinar registration: database unavailable, registration ' . ($mailed ? 'sent by email only' : 'NOT saved'));
    if ($mailed) {
        if (!headers_sent()) header('Location: /thank-you', true, 302);
    } else {
        if (!headers_sent()) http_response_code(500);
        echo 'We could not save your registration. Please email sales@techdotbit.com and we will add you.';
    }
};
form_db_guard($dbFailed);

try {
    require_once __DIR__ . '/db.php';

    $stmt = $conn->prepare("
        INSERT INTO webinar_registrations (name, email, phone, company)
        VALUES (?, ?, ?, ?)
    ");
    $stmt->bind_param("ssss", $name, $email, $phone, $company);
    if (!$stmt->execute()) {
        throw new RuntimeException('insert failed: ' . $stmt->error);
    }
    $stmt->close();
} catch (Throwable $e) {
    error_log('Webinar registration: ' . $e->getMessage());
    form_db_done();
    $dbFailed();
    exit;
}

form_db_done();
header("Location: /thank-you");
exit;
