<?php
require_once __DIR__ . '/includes/site.php';
$page = [
    'path' => '/ai',
    'title' => 'AI for Business Operations: Agents, Vision, GenAI | DotOne',
    'description' => 'How DotOne applies AI agents, generative AI, Vision AI and automation to everyday business operations, using your own ERP data.',
    'eyebrow' => 'AI in DotOne',
    'h1' => 'AI for Business Operations',
    'intro' => 'DotOne puts agents, vision and automation to work on your own ERP data. They watch the numbers, prepare the next step and leave the decision with you.',
    'blocks' => [
        ['heading' => 'Works on your data, you stay in control', 'text' => 'Every tool reads the same live records your team already keeps in DotOne.', 'list' => [
            ['Agents watch the numbers', 'Inventory, sales, CRM and reporting agents read live ERP data and spot what needs attention.'],
            ['They draft, you decide', 'An agent prepares the indent, reminder or report. Nothing important moves without your approval.'],
            ['Ask in plain language', 'Ask a question about your business and get the answer with the numbers behind it.'],
            ['One place for the results', 'Findings from agents, cameras and field teams land in the same dashboards and records.'],
        ]],
        ['heading' => 'Where it is used', 'text' => 'Pick the area that matters most to you and start there.', 'cards' => [
            ['/ai-agents', 'AI Agents', 'spark', 'Agents for inventory, sales, CRM, reporting and more that find exceptions and recommend the next step.'],
            ['/vision-ai', 'Vision AI', 'eye', 'Uses your existing CCTV for safety checks, floor activity and quality inspection.'],
            ['/generative-ai', 'Generative AI', 'chat', 'Plain-language questions and drafted reports, built from your ERP data.'],
            ['/ai-automation', 'AI Automation', 'flow', 'Reorder indents, reminders and approval routing, with your approval at each step.'],
            ['/field-sales-tracking', 'Field Sales Tracking', 'pin', 'GPS check-ins, visits and performance for field teams.'],
            ['/ai-powered-erp', 'AI-Powered ERP', 'chart', 'How ERP data, agents and analytics fit together in one system.'],
        ]],
        ['heading' => 'How it fits together', 'text' => 'The tools share one flow from data to decision.', 'list' => [
            ['Collect', 'Cameras, field apps and ERP transactions gather data from across the business.'],
            ['Analyse', 'Agents look for patterns and exceptions and suggest what to do.'],
            ['Act', 'You review the suggestion on the dashboard and approve, change or reject it.'],
        ]],
    ],
    'faq' => [
        ['Do we need new software alongside our ERP?', 'No. The agents, Vision AI and automation work inside DotOne on the same data as your inventory, sales and production records.'],
        ['Can the AI act without our approval?', 'Agents draft indents, reminders and reports. Anything important waits for a person to approve it.'],
        ['Can we start with one area?', 'Yes. Most businesses start with one agent or one camera use case and add more once they are comfortable.'],
        ['How long does it take to get started?', 'A rollout runs through planning, setup and integration, training and testing, then go-live with ongoing support. We agree the timeline with you after the first consultation.'],
    ],
    'cta_heading' => 'See it working on your data',
    'cta_text' => 'Book a demo and we will show the agents, Vision AI and automation on the kind of data your team handles every day.',
];
include __DIR__ . '/includes/templates/hub.php';
