<?php
require_once __DIR__ . '/includes/site.php';
$cards = [];
foreach (AUTOMATION as $url => $s) $cards[] = [$url, $s['name'], $s['icon'], $s['summary']];
$page = [
    'path' => '/solutions',
    'title' => 'Business Automation Solutions | DotOne',
    'description' => 'Automate inventory, purchase and approvals with workflows and AI agents built on one ERP. Connect machines, teams and Tally in one platform.',
    'eyebrow' => 'Automation',
    'h1' => 'Automate Your Business Processes',
    'intro' => 'Most delays happen between departments: an indent waiting for approval, a dispatch waiting for a payment check, a supervisor waiting for a report. DotOne automates those handoffs.',
    'blocks' => [
        ['heading' => 'Automation solutions', 'text' => 'Ready-made automation for the processes Indian manufacturers ask about most.', 'cards' => $cards],
        ['heading' => 'Solutions by need', 'text' => 'Pages for the specific problems buyers search for.', 'cards' => [
            ['/cloud-erp', 'Cloud ERP platform', 'cog', 'One browser-based ERP for every department, with mobile apps.'],
            ['/business-automation-software', 'Business automation software', 'flow', 'Approvals, alerts, indents and AI agents across modules.'],
            ['/low-cost-manufacturing-software', 'Low-cost manufacturing software', 'rupee', 'Factory ERP on monthly INR plans, with no server costs.'],
            ['/batch-tracking-software', 'Batch tracking software', 'shield', 'Trace every batch from raw material to customer.'],
            ['/expiry-date-tracking-software', 'Expiry date tracking', 'bell', 'First-expiry-first-out and near-expiry reports.'],
            ['/multi-level-bom-software', 'Multi-level BOM software', 'factory', 'Sub-assemblies, formulas and recipes as layered BOMs.'],
            ['/oee-software', 'OEE machine monitoring', 'chart', 'Live OEE, machine status and downtime reasons.'],
            ['/qr-code-inventory-system', 'QR code inventory system', 'eye', 'Scan at receipt, put-away, picking and dispatch.'],
            ['/ai-inventory-forecasting', 'AI inventory forecasting', 'spark', 'Run-out dates and draft indents from live stock.'],
            ['/ai-procurement-software', 'AI procurement software', 'cart', 'Vendor comparison, rate alerts and draft POs.'],
            ['/purchase-order-approval-software', 'PO approval software', 'check', 'Route POs by amount, with escalations.'],
            ['/sales-pipeline-automation', 'Sales pipeline automation', 'trend', 'Follow-ups, reminders and demand forecasts.'],
            ['/predictive-supply-chain-software', 'Predictive supply chain', 'truck', 'Forecasts, run-out dates and lead times together.'],
        ]],
        ['heading' => 'What you can automate', 'text' => 'Built with the no-code workflow builder and the AI agents, on the same data as your ERP.', 'list' => [
            ['Approvals', 'Purchase orders, discounts, leave and expenses routed to the right person with limits you set.'],
            ['Alerts', 'Low stock, late orders and machine downtime sent in DotOne or on WhatsApp.'],
            ['Document flows', 'Indents become POs, POs become GRNs, orders become challans and invoices.'],
            ['Machine to ERP', 'IoT data from machines flows into production records and can trigger the next job.'],
        ]],
    ],
    'cta_heading' => 'Which process slows you down most?',
    'cta_text' => 'Tell us, and in the demo we will show it running automatically in DotOne.',
];
include __DIR__ . '/includes/templates/hub.php';
