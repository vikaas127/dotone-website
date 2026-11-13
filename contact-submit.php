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

// The sales team gets every request by email too, so nothing is lost if the database is unavailable
$isDemo = stripos($inquiryType, 'demo') !== false;
$mailed = form_notify(($isDemo ? 'New demo request: ' : 'New enquiry: ') . trim($firstName . ' ' . $lastName) . ', ' . $companyName, [
    'Name' => trim($firstName . ' ' . $lastName), 'Email' => $email, 'Phone' => $phone, 'Company' => $companyName,
    'Job title' => $jobTitle, 'Enquiry type' => $inquiryType, 'Industry' => $industry, 'Company size' => $companySize,
    'Interested in' => $solutionsStr, 'Timeline' => $implementationTimeline, 'Budget' => $budget,
    'Current systems' => $currentSystems, 'Message' => $message,
], $email);

// The person who filled in the form gets a thank-you email
form_confirm_visitor($email, $firstName, $isDemo ? 'demo' : 'enquiry');

// ... and it goes to DotOne CRM as a lead when the CRM form address is set in config.php
$details = array_filter([
    'Enquiry type' => $inquiryType, 'Industry' => $industry, 'Company size' => $companySize,
    'Interested in' => $solutionsStr, 'Timeline' => $implementationTimeline, 'Budget' => $budget,
    'Current systems' => $currentSystems, 'Message' => $message,
], 'strlen');
$inCrm = form_push_to_crm([
    'name' => trim($firstName . ' ' . $lastName), 'email' => $email, 'phonenumber' => $phone,
    'company' => $companyName, 'title' => $jobTitle,
    'description' => "Website enquiry\n" . implode("\n", array_map(function ($k, $v) { return $k . ': ' . $v; }, array_keys($details), $details)),
]);
$mailed = $mailed || $inCrm;

$dbFailed = function () use ($mailed) {
    error_log('Contact form: database unavailable, enquiry ' . ($mailed ? 'sent by email only' : 'NOT saved'));
    if (!headers_sent()) {
        header('Content-Type: application/json');
        http_response_code($mailed ? 200 : 500);
    }
    echo json_encode($mailed ? ['success' => true] : ['success' => false, 'error' => 'We could not save your request. Please email sales@techdotbit.com and we will get back to you.']);
};
form_db_guard($dbFailed);

try {
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
        throw new RuntimeException('insert failed: ' . $stmt->error);
    }
    $stmt->close();
} catch (Throwable $e) {
    error_log('Contact form: ' . $e->getMessage());
    form_db_done();
    $dbFailed();
    exit;
}

form_db_done();
echo json_encode(['success' => true]);
