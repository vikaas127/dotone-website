<?php
require_once 'db.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'error' => 'Method not allowed']);
    exit;
}

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

$firstName = trim($_POST['firstName'] ?? '');
$lastName = trim($_POST['lastName'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$jobTitle = trim($_POST['jobTitle'] ?? '');
$inquiryType = trim($_POST['inquiryType'] ?? '');
$companyName = trim($_POST['companyName'] ?? '');
$industry = trim($_POST['industry'] ?? '');
$companySize = trim($_POST['companySize'] ?? '');
$numberOfPlants = ($_POST['numberOfPlants'] ?? '') !== '' ? (int) $_POST['numberOfPlants'] : 0;
$numberOfWorkers = ($_POST['numberOfWorkers'] ?? '') !== '' ? (int) $_POST['numberOfWorkers'] : 0;
$currentSystems = trim($_POST['currentSystems'] ?? '');
$implementationTimeline = trim($_POST['implementationTimeline'] ?? '');
$budget = trim($_POST['budget'] ?? '');
$message = trim($_POST['message'] ?? '');
$newsletter = isset($_POST['newsletter']) ? 1 : 0;

$solutions = $_POST['solutions'] ?? [];
if (!is_array($solutions)) {
    $solutions = [$solutions];
}
$solutionsStr = implode(', ', array_filter(array_map('trim', $solutions)));

if (!$firstName || !$lastName || !$email || !$phone || !$jobTitle || !$inquiryType || !$companyName || !$industry || !$companySize || !$implementationTimeline) {
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
