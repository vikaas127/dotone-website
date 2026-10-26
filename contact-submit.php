<?php
require_once __DIR__ . '/includes/form-guard.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'error' => 'Method not allowed']);
    exit;
}

// Bots fill the hidden field: pretend it worked and store nothing
if (form_is_bot()) {
    echo json_encode(['success' => true]);
    exit;
}

if (form_rate_limited('contact', 5, 600)) {
    http_response_code(429);
    echo json_encode(['success' => false, 'error' => 'Too many requests. Please try again in a few minutes or email sales@techdotbit.com.']);
    exit;
}

require_once __DIR__ . '/db.php';

$conn->query("
CREATE TABLE IF NOT EXISTS contact_submissions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(50),
    job_title VARCHAR(100),
    inquiry_type VARCHAR(100),
    company_name VARCHAR(255),
    industry VARCHAR(100),
    company_size VARCHAR(50),
    number_of_plants INT NULL,
    number_of_workers INT NULL,
    current_systems TEXT,
    solutions TEXT,
    implementation_timeline VARCHAR(100),
    budget VARCHAR(100),
    message TEXT,
    newsletter TINYINT(1) DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4
");

$firstName = form_field('firstName', 100);
$lastName = form_field('lastName', 100);
$email = form_field('email', 255);
$phone = form_field('phone', 50);
$jobTitle = form_field('jobTitle', 100);
$inquiryType = form_field('inquiryType', 100);
$companyName = form_field('companyName', 255);
$industry = form_field('industry', 100);
$companySize = form_field('companySize', 50);
$numberOfPlants = max(0, min(10000, (int) form_field('numberOfPlants', 10)));
$numberOfWorkers = max(0, min(10000000, (int) form_field('numberOfWorkers', 10)));
$currentSystems = form_field('currentSystems', 2000);
$implementationTimeline = form_field('implementationTimeline', 100);
$budget = form_field('budget', 100);
$message = form_field('message', 5000);
$newsletter = isset($_POST['newsletter']) ? 1 : 0;

$solutions = $_POST['solutions'] ?? [];
if (!is_array($solutions)) {
    $solutions = [$solutions];
}
$solutionsStr = mb_substr(implode(', ', array_filter(array_map(function ($v) { return is_string($v) ? trim($v) : ''; }, $solutions))), 0, 1000);

// Name, email, phone and company are always needed; the rest is optional (the demo form keeps extra details optional)
if (!$firstName || !$email || !$phone || !$companyName) {
    http_response_code(400);
    echo json_encode(['success' => false, 'error' => 'Please fill in all required fields.']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'error' => 'Please enter a valid email address.']);
    exit;
}

$stmt = $conn->prepare("
    INSERT INTO contact_submissions (
        first_name, last_name, email, phone, job_title, inquiry_type,
        company_name, industry, company_size, number_of_plants, number_of_workers,
        current_systems, solutions, implementation_timeline, budget, message, newsletter
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
");

$stmt->bind_param(
    'sssssssssiiissssi',
    $firstName,
    $lastName,
    $email,
    $phone,
    $jobTitle,
    $inquiryType,
    $companyName,
    $industry,
    $companySize,
    $numberOfPlants,
    $numberOfWorkers,
    $currentSystems,
    $solutionsStr,
    $implementationTimeline,
    $budget,
    $message,
    $newsletter
);

if (!$stmt->execute()) {
    error_log('Contact form insert failed: ' . $stmt->error);
    http_response_code(500);
    echo json_encode(['success' => false, 'error' => 'Unable to save your request. Please try again or email sales@techdotbit.com.']);
    $stmt->close();
    exit;
}

$stmt->close();
echo json_encode(['success' => true]);
