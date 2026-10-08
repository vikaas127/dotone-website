<?php
require_once 'db.php';

$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$phone   = trim($_POST['phone'] ?? '');
$company = trim($_POST['company'] ?? '');

if (!$name || !$email) {
    die("Invalid request");
}

$stmt = $conn->prepare("
    INSERT INTO webinar_registrations (name, email, phone, company)
    VALUES (?, ?, ?, ?)
");

$stmt->bind_param("ssss", $name, $email, $phone, $company);
$stmt->execute();
$stmt->close();

header("Location: /thank-you.html");
exit;
