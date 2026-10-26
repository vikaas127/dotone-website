<?php
$page = [
    'path' => '/industries/construction',
    'title' => 'Construction ERP Software for Contractors | DotOne',
    'description' => 'Construction ERP for Indian contractors and builders: project budget vs actual, site indents, site stores, labour attendance by site and client billing.',
    'breadcrumbs' => [['Industries', '/industries'], ['Construction & Building', '/industries/construction']],
    'name' => 'Construction & Building',
    'icon' => 'factory',
    'h1' => 'Construction ERP Software',
    'intro' => 'DotOne runs projects for contractors and builders: budgets, material to site, site stores, labour and billing to the client. Head office sees each project\'s spend against its budget while the work is still going on.',
    'challenges' => [
        ['chart', 'Budgets checked after the fact', 'Cement, steel and labour are booked as they come. The overrun on a project shows up only when the final bills are added up.'],
        ['truck', 'Material lost between sites', 'Material is shifted from one site to another on a phone call, and the site stores register never quite matches.'],
        ['id', 'Labour attendance at remote sites', 'Supervisors keep attendance for workers and subcontractor gangs on paper, and wages are disputed every fortnight.'],
        ['flow', 'Indents stuck for approval', 'A site waits for steel while the indent sits unsigned in someone\'s inbox at head office.'],
    ],
    'workflow' => [
        ['Set the project budget', 'Each project gets a budget by head, such as material, labour, equipment hire and subcontract.'],
        ['Raise site indents', 'Site engineers raise indents from the phone, routed for approval against the remaining budget.'],
        ['Buy and deliver to site', 'POs go to vendors with the site as the delivery point, and the site store receives against the PO.'],
        ['Issue and record work', 'Material issued at site is booked to the project, and labour attendance is marked at the site location.'],
        ['Bill the client', 'GST invoices to the client are raised against the project, and receivables are tracked alongside project spend.'],
    ],
    'modules' => ['purchase-management', 'inventory-management', 'hrms', 'finance-management', 'workflow-automation', 'mobile-erp'],
    'uses' => [
        ['Project budget vs actual', 'Spend by project and budget head as POs, issues and labour costs are recorded, not at month-end.'],
        ['Site stores', 'Each site is a stock location, with receipts, issues and site-to-site transfers recorded.'],
        ['Geo-fenced site attendance', 'Workers and staff mark attendance within the site boundary, feeding wages and payroll.'],
        ['Indent approvals on the phone', 'Project managers approve indents and POs from the mobile app, with budget left in view.'],
    ],
    'faq' => [
        ['Can DotOne show budget against actual for each project?', 'Yes. Budgets are set by project and expense head, and actual spend from purchases, issues and payroll is compared as it is recorded. See [finance management](/finance-management).'],
        ['Can each site have its own store?', 'Yes. Each site is set up as a separate stock location, and transfers between sites or from a central yard are recorded on both sides.'],
        ['How is attendance marked at a site without a biometric machine?', 'Supervisors or workers mark attendance on the [mobile app](/mobile-erp) within a geo-fence around the site. The records feed [payroll](/payroll).'],
        ['Does DotOne handle RERA filings?', 'No. DotOne does not file with RERA or other regulators. It keeps project-wise records of spend, purchases and billing that your team can use when preparing such reports.'],
    ],
    'cta_heading' => 'Put one project on DotOne',
    'cta_text' => 'In a 30-minute demo we set up a sample project with a budget, raise a site indent, approve it and show the effect on budget vs actual.',
];
include dirname(__DIR__) . '/includes/templates/industry.php';
