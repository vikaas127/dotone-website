<?php
require_once __DIR__ . '/includes/site.php';
$cards = [];
foreach (['inventory-management', 'sales-management', 'crm', 'purchase-management', 'production-management', 'hrms'] as $slug) {
    $m = MODULES[$slug];
    $cards[] = ['/' . $slug, $m['name'], $m['icon'], $m['summary']];
}
$page = [
    'path' => '/erp-software',
    'title' => 'ERP Software for Growing Businesses in India | DotOne',
    'description' => 'Cloud ERP for inventory, sales, purchase, production, HR and accounts, with GST billing and Tally integration. See DotOne ERP in action.',
    'eyebrow' => 'ERP Software',
    'h1' => 'ERP Software That Runs Your Whole Business',
    'intro' => 'DotOne is cloud ERP built for Indian manufacturers and distributors: inventory, sales, purchase, production, quality, HR and payroll in one system, with GST invoicing and two-way Tally sync.',
    'blocks' => [
        ['heading' => 'The core modules', 'text' => 'Every module shares one database, so information entered once is available everywhere.', 'cards' => $cards],
        ['heading' => 'Built for how Indian businesses work', 'text' => 'Not a global ERP translated for India. DotOne was designed around Indian tax, payroll and accounting practice from day one.', 'list' => [
            ['GST invoicing', 'GST-compliant invoices for registered Indian businesses, billed in INR.'],
            ['Tally stays your book of accounts', 'Two-way sync with Tally Prime or ERP 9, so your accountant keeps working the way they do today.'],
            ['Indian payroll', 'PF, ESI and TDS calculated from attendance, with payslips in one click.'],
            ['Live in weeks', 'Fit-to-standard templates and guided onboarding get most teams live in 4 to 6 weeks.'],
            ['Works on the shop floor', 'Mobile app for attendance, field sales and approvals; machine data through IoT.'],
            ['Grows with you', 'Start with one plant and a few modules, then add plants, users and modules without re-implementing.'],
        ]],
        ['heading' => 'ERP plus AI agents', 'text' => 'Because every module shares one database, DotOne AI agents can answer questions across the business: which items are below reorder level, which quotations need a follow-up, which orders will ship late.', 'list' => [
            ['Ask instead of filtering', 'Type a question and get the answer from live ERP data.'],
            ['Exceptions, not lists', 'Agents surface the few items that need a decision.'],
        ]],
    ],
    'faq' => [
        ['What is ERP software?', 'ERP (enterprise resource planning) software keeps inventory, sales, purchase, production, HR and accounts in one system, so every department works from the same data. Read our guide: [What is ERP?](/guides/what-is-erp)'],
        ['Is DotOne cloud or on-premise?', 'DotOne runs in the cloud. Enterprise plans can discuss on-premise or hybrid options.'],
        ['How long does implementation take?', 'Most teams go live in 4 to 6 weeks using fit-to-standard templates, with a dedicated onboarding team.'],
        ['Do we have to stop using Tally?', 'No. DotOne syncs with Tally Prime and Tally ERP 9, so your accounts stay in Tally.'],
    ],
    'cta_heading' => 'See DotOne ERP running your workflow',
    'cta_text' => 'Bring one real process, for example order to dispatch, and we will show it end to end in a 30-minute demo.',
];
include __DIR__ . '/includes/templates/hub.php';
