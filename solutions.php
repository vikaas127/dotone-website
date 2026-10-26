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
