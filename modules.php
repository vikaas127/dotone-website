<?php
require_once __DIR__ . '/includes/site.php';
$cards = [];
foreach (MODULES as $slug => $m) $cards[] = ['/' . $slug, $m['name'], $m['icon'], $m['summary']];
$page = [
    'path' => '/modules',
    'title' => 'ERP Modules: Inventory, CRM, Production, HRMS | DotOne',
    'description' => 'Inventory, CRM, sales, purchase, production, quality, HRMS, payroll and accounting. Pick the modules you need and add more as you grow.',
    'eyebrow' => 'ERP',
    'h1' => 'All DotOne ERP Modules',
    'intro' => 'Every module shares one database. A sales order reserves stock, a job card consumes it and a purchase receipt brings it back, without exports, re-entry or month-end reconciliation.',
    'blocks' => [
        ['heading' => 'Pick what you need today', 'text' => 'Start with one or two modules and switch on the rest as your business grows. Your data, users and settings carry over.', 'cards' => $cards],
        ['heading' => 'Why one connected ERP beats separate tools', 'text' => 'Separate apps for stock, sales and HR each hold part of the truth. DotOne keeps one version of it.', 'list' => [
            ['One record, every team', 'Sales, stores, production and accounts see the same order, item and customer.'],
            ['No double entry', 'A transaction is entered once and flows to every module that needs it.'],
            ['Reports across departments', 'Profitability, delays and stock can be reported together because the data is already joined.'],
            ['AI agents with full context', 'Agents read across modules, so an answer about a late order can include stock, purchase and production status.'],
        ]],
    ],
    'faq' => [
        ['Can we start with just one module?', 'Yes. Many customers start with inventory, CRM or HRMS and add modules later. Existing data and users carry over.'],
        ['Does DotOne work with Tally?', 'Yes. The Tally connector syncs masters, vouchers and stock with Tally Prime or Tally ERP 9.'],
        ['Is there a mobile app?', 'Yes. Field sales, attendance and approvals work on Android, with full control from the web dashboard.'],
    ],
    'cta_heading' => 'Not sure which modules you need?',
    'cta_text' => 'Tell us how your business runs today and we will suggest the smallest set of modules to start with.',
];
include __DIR__ . '/includes/templates/hub.php';
