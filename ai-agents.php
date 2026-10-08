<?php
require_once __DIR__ . '/includes/site.php';
$cards = [];
foreach (AGENTS as $slug => $a) $cards[] = ['/ai-agents/' . $slug, $a['name'], $a['icon'], $a['summary']];
$page = [
    'path' => '/ai-agents',
    'title' => 'AI Agents for Business Operations | DotOne',
    'description' => 'AI agents for inventory, sales, CRM and reporting that read your ERP data, flag exceptions, build reports and act within the permissions you set.',
    'eyebrow' => 'AI Agents',
    'h1' => 'AI Agents for Business Operations',
    'intro' => 'A DotOne agent is assigned to one area of your business. It reads the live ERP data for that area, finds what needs attention and prepares the next step, so your team decides instead of digging through reports.',
    'blocks' => [
        ['heading' => 'Meet the agents', 'text' => 'Each agent works on the data of one module and can see related records in others.', 'cards' => $cards],
        ['heading' => 'What makes an agent different from a report', 'text' => 'A report shows you everything. An agent tells you the few things that matter and what to do about them.', 'list' => [
            ['It reads live ERP data', 'Answers come from your current stock, orders and customers, not from an export taken last week.'],
            ['It finds exceptions', 'Items below reorder level, quotations with no follow-up, orders running late.'],
            ['It prepares the action', 'An indent, a reminder, a report or an alert, ready for a person to approve.'],
            ['It respects permissions', 'An agent can only see and do what its role allows. Changes to data can require approval.'],
        ]],
    ],
    'faq' => [
        ['Do the agents change data on their own?', 'Only where you allow it. You set what each agent can see and do, and any change can be set to need a person\'s approval first.'],
        ['How do we talk to an agent?', 'Ask in plain language inside DotOne, for example "which products are below reorder level?". Alerts can also reach you on WhatsApp.'],
        ['Which agents are available?', 'Inventory, Sales, CRM and Reporting agents are listed on this page. More agents for purchase, HR and production are being added.'],
    ],
    'cta_heading' => 'See an agent work on your data',
    'cta_text' => 'In a 30-minute demo we load a sample of your data and ask the agents the questions your team asks every week.',
];
include __DIR__ . '/includes/templates/hub.php';
