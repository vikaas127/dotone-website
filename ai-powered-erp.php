<?php
require_once __DIR__ . '/includes/site.php';
$cards = [];
foreach (AGENTS as $slug => $a) $cards[] = ['/ai-agents/' . $slug, $a['name'], $a['icon'], $a['summary']];
$page = [
    'path' => '/ai-powered-erp',
    'title' => 'AI-Powered ERP Software | ERP + AI Agents | DotOne',
    'description' => 'ERP data, AI agents and analytics in one system. Ask questions in plain language, get exceptions flagged and reports generated from live ERP data.',
    'eyebrow' => 'AI-Powered ERP',
    'h1' => 'AI-Powered ERP Software for Modern Businesses',
    'intro' => 'Adding a chatbot to an ERP does not make it intelligent. In DotOne, AI agents work directly on your ERP data: they analyse it, find exceptions, build the report and recommend the next step, within the permissions you set.',
    'blocks' => [
        ['heading' => 'Three layers, one system', 'text' => 'AI-powered ERP only works when the AI can see clean, connected business data. DotOne keeps all three layers together.', 'list' => [
            ['ERP data', 'Inventory, purchase, production, quality, sales, HR and accounts in one database.'],
            ['AI agents', 'Agents for inventory, sales, CRM and reporting that read that data and act on it.'],
            ['Analytics', 'Reports, forecasts, insights and alerts generated from the same live records.'],
            ['Automation', 'Approvals, notifications and handoffs that turn an agent\'s recommendation into action.'],
        ]],
        ['heading' => 'Traditional ERP vs AI-powered ERP', 'text' => 'The difference is who does the analysis.', 'list' => [
            ['Traditional ERP', 'You open the inventory module, filter the data, build a report, analyse it and then decide what to do.'],
            ['DotOne', 'You ask the Inventory Agent. It analyses stock, finds the exceptions, generates the report and recommends or prepares the permitted action.'],
        ]],
        ['heading' => 'The agents', 'text' => 'Each agent is responsible for one area of the business and sees related records across modules.', 'cards' => $cards],
    ],
    'faq' => [
        ['What is AI-powered ERP?', 'An ERP where AI works on the business data itself: answering questions in plain language, spotting exceptions, forecasting and preparing actions, rather than only storing records for people to analyse.'],
        ['Is our data used to train public AI models?', 'Your ERP data stays in your DotOne account and is accessed only within the roles and permissions you set. See our security page for how data is protected.'],
        ['Can the AI make changes without us knowing?', 'No. Agents act only within the permissions you give them, and any change to data can be set to require a person\'s approval.'],
        ['Do we need a data science team?', 'No. Agents come ready for inventory, sales, CRM and reporting and use the data already in DotOne.'],
    ],
    'cta_heading' => 'See AI-powered ERP on your own data',
    'cta_text' => 'In a 30-minute demo we connect the agents to a sample of your data and ask the questions your managers ask every week.',
];
include __DIR__ . '/includes/templates/hub.php';
