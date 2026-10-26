<?php
require_once dirname(__DIR__) . '/includes/site.php';
$page = [
    'path' => '/solutions/digital-transformation',
    'title' => 'Digital transformation for manufacturing | DotOne',
    'description' => 'Automate digital transformation work in DotOne: rules, approvals and AI agents remove the manual steps between your ERP modules.',
    'eyebrow' => 'Solutions',
    'h1' => 'Digital transformation for manufacturing',
    'intro' => 'Move your factory from paper and Excel to connected, live data, one department at a time and without stopping the plant. Management sees the whole plant on one dashboard, not in next week\'s report.',
    'blocks' => [
        ['heading' => 'What a connected factory runs on', 'text' => 'Industry 4.0 means using ERP, machine data, cameras and automation together, so the plant is visible and under control.', 'cards' => [
            ['/manufacturing-erp', 'Manufacturing ERP', 'factory', 'Production planning, inventory, purchase, sales and finance in one system.'],
            ['/production-management', 'Production monitoring', 'chart', 'Output, downtime, efficiency and losses across machines and lines, in real time.'],
            ['/vision-ai', 'Vision AI and quality inspection', 'eye', 'Visual inspection and defect detection from cameras on the line.'],
            ['/workflow-automation', 'Workflow automation', 'flow', 'Rules and approvals that remove the manual steps between modules.'],
            ['/ai-agents', 'AI agents', 'spark', 'Agents that read ERP data, flag what needs attention and prepare the next step.'],
            ['/reports-analytics', 'Analytics and reports', 'trend', 'Dashboards and insights for performance and management decisions.'],
        ]],
        ['heading' => 'A phased rollout', 'text' => 'Each phase builds on the last, so the plant keeps running while it changes.', 'list' => [
            ['1. Readiness assessment', 'We review your shop floor, machines, current systems and data, and agree a roadmap and the KPIs to track.'],
            ['2. System design', 'We plan how ERP, production monitoring, machines and cameras connect, and how data flows between them.'],
            ['3. Deployment and integration', 'ERP and production monitoring go live, followed by quality inspection and machine data.'],
            ['4. Continuous improvement', 'Dashboards and KPI tracking show where to improve next, with ongoing support as you expand.'],
        ]],
    ],
    'faq' => [
        ['What is Industry 4.0?', 'Industry 4.0 is the digital transformation of manufacturing: using automation, machine data, cameras and live business data to give a factory visibility and control across its operations.'],
        ['Do we have to stop the plant to go digital?', 'No. Registers, job cards and reports move into DotOne one department at a time, so the plant keeps working throughout.'],
        ['Can DotOne connect to our machines?', 'Yes. Machines, PLCs, sensors and other systems can be connected so output and downtime are recorded as they happen.'],
        ['Do we need new cameras for Vision AI?', 'Vision AI works with your existing cameras. See [Vision AI](/vision-ai).'],
    ],
    'cta_heading' => 'Start your Industry 4.0 roadmap',
    'cta_text' => 'Book a demo and we will look at where your plant is today and which department to move first.',
];
include dirname(__DIR__) . '/includes/templates/hub.php';
