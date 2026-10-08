<?php
$page = [
    'path' => '/industries/facilities-management',
    'title' => 'Facility Management Software for Malls | DotOne',
    'description' => 'Facility management software for Indian malls and FM contractors: staff attendance across sites, payroll, consumables stock, tenant billing and approvals.',
    'breadcrumbs' => [['Industries', '/industries'], ['Mall & Facilities', '/industries/facilities-management']],
    'name' => 'Mall & Facilities',
    'icon' => 'factory',
    'h1' => 'Facility Management Software',
    'intro' => 'DotOne runs the people, stores and billing behind malls, commercial buildings and facility management contracts. Housekeeping, security and technical staff, the consumables they use and the invoices to tenants or clients sit in one system.',
    'challenges' => [
        ['id', 'Large teams across many sites', 'Housekeeping and security staff work shifts at different buildings, and attendance comes in from each site in its own format.'],
        ['rupee', 'Payroll with statutory deductions', 'Hundreds of staff on minimum wages with PF and ESI mean that one mistake in attendance becomes a dispute and a compliance worry.'],
        ['box', 'Consumables that disappear', 'Cleaning chemicals, tissue rolls and spares are issued to sites without a record of which site used how much.'],
        ['doc', 'Billing tenants and clients', 'Common area charges, utility recoveries and monthly contract bills are prepared by hand, and collections are tracked in a spreadsheet.'],
    ],
    'workflow' => [
        ['Roster the shifts', 'Staff are assigned to sites and shifts, with weekly offs and relievers planned in HRMS.'],
        ['Mark attendance on site', 'Biometric devices or geo-fenced mobile attendance record who reported at which site and when.'],
        ['Issue consumables', 'Cleaning material and spares are issued from the central store to each site and booked to it.'],
        ['Raise monthly bills', 'Invoices to tenants or FM clients are raised with GST, and receivables are tracked by party.'],
        ['Run payroll', 'Attendance flows into payroll with PF, ESI and other deductions, and payslips go out to every employee.'],
    ],
    'modules' => ['hrms', 'payroll', 'inventory-management', 'sales-management', 'finance-management', 'mobile-erp'],
    'uses' => [
        ['Site-wise attendance', 'Who is present at each site and shift today, with late and missed punches flagged.'],
        ['Payroll with PF and ESI', 'Salary from attendance with statutory deductions and the registers you need to file.'],
        ['Consumables by site', 'Store issues booked to each site, so usage per site can be compared month on month.'],
        ['Tenant and client billing', 'Monthly GST invoices and receivables ageing by tenant or client.'],
    ],
    'faq' => [
        ['Can staff mark attendance at client sites without a biometric device?', 'Yes. Staff can mark attendance on the [mobile app](/mobile-erp) within a geo-fence around each site. Biometric devices can be used where they are installed.'],
        ['Does payroll handle PF and ESI for a large workforce?', 'Yes. [Payroll](/payroll) works out PF, ESI and TDS from attendance for every employee and generates payslips in one run.'],
        ['Does DotOne manage maintenance tickets or building systems?', 'DotOne does not connect to building management systems. Service requests and their approvals can be set up as part of your workflow during onboarding, using [workflow automation](/workflow-automation).'],
        ['Can we see consumable usage by site?', 'Yes. Each issue from the store is booked to a site, so reports show usage and cost by site and item.'],
    ],
    'cta_heading' => 'Put one site on DotOne',
    'cta_text' => 'In a 30-minute demo we set up a sample site with shifts, mark attendance, issue consumables and run a sample payroll.',
];
include dirname(__DIR__) . '/includes/templates/industry.php';
