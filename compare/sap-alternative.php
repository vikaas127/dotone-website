<?php
require_once dirname(__DIR__) . '/includes/site.php';
$page = [
    'path' => '/compare/sap-alternative',
    'title' => 'SAP Alternative for Manufacturing SMEs in India | DotOne',
    'description' => 'SAP Business One alternative for Indian manufacturers: cloud ERP with published INR pricing, Tally sync and go-live in 4 to 6 weeks.',
    'breadcrumbs' => [['SAP alternative', '/compare/sap-alternative']],
    'eyebrow' => 'Compare',
    'h1' => 'An SAP Alternative for Manufacturing SMEs',
    'intro' => 'SAP is built for large, multi-country enterprises. Many Indian manufacturers with 10 to 500 people need something smaller: an ERP that runs the plant, stores, sales, payroll and accounts, keeps Tally for the books if they want, and goes live in weeks. DotOne is built for that.',
    'blocks' => [
        ['heading' => 'When DotOne is the better fit', 'text' => 'DotOne suits manufacturers and distributors who want one system for the whole business without an enterprise-sized project.', 'list' => [
            ['Indian MSMEs', 'Built around GST invoicing, e-way bills, Tally, and payroll with PF, ESI and TDS.'],
            ['Published pricing', 'A free Starter plan and paid plans from ₹15,000 a month, listed on the pricing page in INR.'],
            ['Live in weeks', 'A standard implementation of discovery, setup, training and go-live takes most teams 4 to 6 weeks.'],
            ['Shop floor included', 'Multi-level BOMs, job cards, OEE, quality checks and Vision AI on existing CCTV, in the same system as stock and sales.'],
            ['AI agents on every module', 'Agents for inventory, purchase, sales, production, HR and more read live data, flag exceptions and draft actions for your approval.'],
        ]],
        ['heading' => 'When SAP may suit you better', 'text' => 'An honest comparison helps you choose faster. SAP is often the safer choice if one of these applies.', 'list' => [
            ['Global group reporting', 'Many legal entities across countries and currencies that must consolidate in one system.'],
            ['An existing SAP landscape', 'Your parent company or key customers already run SAP and require you to connect to it directly.'],
            ['Very large operations', 'Thousands of users and complex global supply chains with dedicated in-house ERP teams.'],
        ]],
        ['heading' => 'DotOne and SAP Business One at a glance', 'text' => 'SAP Business One is SAP\'s ERP for smaller businesses and is sold and implemented through SAP partners. Get a written quote from your partner to compare costs on equal terms.', 'list' => [
            ['How you buy', 'DotOne: monthly plans bought directly, with prices published in INR. SAP Business One: licences and implementation quoted by a partner.'],
            ['Time to go live', 'DotOne: 4 to 6 weeks for a standard rollout. SAP Business One: set by your partner\'s project plan and scope.'],
            ['Accounting', 'DotOne: built-in accounts with GST, or two-way sync with Tally Prime so your accountant keeps working in Tally.'],
            ['Manufacturing', 'DotOne: BOMs, job cards, OEE and quality are standard modules. With SAP Business One, check which features need a partner add-on.'],
            ['AI', 'DotOne: an AI agent for each module on the Enterprise AI plan, working within the permissions you set.'],
        ]],
        ['heading' => 'Moving to DotOne', 'text' => 'Switching from SAP, Tally or spreadsheets follows the same steps.', 'list' => [
            ['1. Discover', 'We map your current process, masters and reports.'],
            ['2. Set up', 'Items, BOMs, customers, vendors and opening stock are imported, and approval rules are configured.'],
            ['3. Train', 'Each team is trained on its own screens: stores, production, sales, HR and accounts.'],
            ['4. Go live', 'You run on DotOne with our team on call, then add modules as you grow.'],
        ]],
    ],
    'cards' => [
        ['/manufacturing-erp', 'Manufacturing ERP', 'factory', 'Everything DotOne runs on the plant floor, from BOM to dispatch.'],
        ['/pricing', 'Cloud ERP pricing', 'rupee', 'Compare plans, modules and limits in INR.'],
        ['/integrations/tally', 'Tally integration', 'link', 'Keep your books in Tally while operations run in DotOne.'],
    ],
    'faq' => [
        ['Is DotOne a good SAP alternative for small manufacturers?', 'For most Indian manufacturers with 10 to 500 people, yes. DotOne covers production, inventory, quality, purchase, sales, HR, payroll and accounts in one cloud system, with published pricing and a 4 to 6 week rollout. Large multi-country groups may still be better served by SAP.'],
        ['How does DotOne pricing compare with SAP Business One?', 'DotOne plans are monthly and published on the [pricing page](/pricing), from a free Starter plan to ₹35,000 a month for Enterprise AI. SAP Business One is priced through partners, so ask your partner for a written quote covering licences, implementation and support.'],
        ['Can we keep Tally if we move to DotOne?', 'Yes. DotOne pushes vouchers to Tally Prime with [two-way sync](/integrations/tally), so your accountant keeps working in Tally while operations run in DotOne.'],
        ['Can you migrate our data from SAP?', 'Yes. Masters such as items, BOMs, customers and vendors, and opening balances, are exported from your current system and imported during setup. Open transactions are usually closed out or re-entered at go-live.'],
    ],
    'cta_heading' => 'See DotOne run your plant',
    'cta_text' => 'Book a 30-minute demo and we will walk one of your orders from enquiry to dispatch.',
];
include dirname(__DIR__) . '/includes/templates/hub.php';
