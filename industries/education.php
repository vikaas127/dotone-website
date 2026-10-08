<?php
$page = [
    'path' => '/industries/education',
    'title' => 'ERP for Schools and Colleges | DotOne',
    'description' => 'ERP for Indian schools, colleges and education trusts: staff attendance across campuses, payroll with PF and TDS, purchase and stores, budgets and approvals.',
    'breadcrumbs' => [['Industries', '/industries'], ['Education', '/industries/education']],
    'name' => 'Education',
    'icon' => 'id',
    'h1' => 'ERP for Schools and Colleges',
    'intro' => 'DotOne runs the administration of schools, colleges and education trusts: teaching and non-teaching staff, payroll, purchase, stores and campus budgets. Trustees and principals see each campus clearly without asking the office for a fresh spreadsheet.',
    'challenges' => [
        ['id', 'Staff attendance by register', 'Teachers and support staff sign a register, and leave, late arrivals and substitutes are worked out by the office at month-end.'],
        ['rupee', 'Payroll with many pay scales', 'Different grades, allowances, PF and TDS for teaching, admin and contract staff make each month\'s salary run slow and error-prone.'],
        ['cart', 'Purchases without control', 'Lab material, stationery, furniture and maintenance are bought by different people, and spend against the annual budget is unclear.'],
        ['factory', 'Several campuses, one trust', 'A trust running many schools or colleges gets each campus\'s numbers in a different format, and comparison takes days.'],
    ],
    'workflow' => [
        ['Set up campuses and staff', 'Each campus is set up with its departments and staff, with pay structures and leave policies.'],
        ['Mark attendance', 'Staff mark attendance on biometric devices or the mobile app within the campus geo-fence.'],
        ['Approve leave', 'Leave requests are approved by the principal or head of department on the phone.'],
        ['Buy against budget', 'Department requests become purchase orders, approved against the campus budget, and stores receive the goods.'],
        ['Run payroll', 'Attendance and leave flow into payroll with PF, ESI and TDS, and payslips are shared with every staff member.'],
    ],
    'modules' => ['hrms', 'payroll', 'purchase-management', 'inventory-management', 'finance-management', 'workflow-automation'],
    'uses' => [
        ['Staff attendance and leave', 'Teaching and non-teaching attendance by campus, with leave balances and approvals.'],
        ['Payroll for every grade', 'Salary structures for each grade, with statutory deductions and payslips in one run.'],
        ['Campus purchase and stores', 'Requests, POs and stock of lab material, stationery and assets for each campus.'],
        ['Trust-level reports', 'Staff cost, spend against budget and payables compared across campuses.'],
    ],
    'faq' => [
        ['Does DotOne manage student admissions, timetables or exams?', 'No. DotOne is not a student management system. It runs staff, payroll, purchase, stores and finance for the institution, and can work alongside the student system you already use.'],
        ['Can staff mark attendance on their phone?', 'Yes. Staff can mark attendance on the [mobile app](/mobile-erp) within a geo-fence around the campus, or on biometric devices. See [HRMS](/hrms).'],
        ['Can payroll handle different grades and allowances?', 'Yes. Salary structures can be set by grade, with allowances, PF, ESI and TDS worked out from attendance. See [payroll](/payroll).'],
        ['Can a trust compare its campuses?', 'Yes. Each campus is set up separately, and reports show staff cost, purchases and spend against budget side by side.'],
    ],
    'cta_heading' => 'See one campus on DotOne',
    'cta_text' => 'In a 30-minute demo we set up a sample campus, mark staff attendance, approve a leave and run a sample payroll.',
];
include dirname(__DIR__) . '/includes/templates/industry.php';
