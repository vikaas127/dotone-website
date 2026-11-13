<?php
// Keyword landing page. Facts mirror the module and agent pages it links to.
$page = [
    'path' => '/ai-inventory-forecasting',
    'title' => 'Automated Inventory Forecasting with AI | DotOne',
    'description' => 'Automated inventory forecasting: AI projects when each item runs out from consumption, compares it with supplier lead time and drafts indents for approval.',
    'breadcrumbs' => [['Solutions', '/solutions'], ['AI inventory forecasting', '/ai-inventory-forecasting']],
    'eyebrow' => 'AI forecasting',
    'h1' => 'Automated Inventory Forecasting with AI',
    'intro' => 'Know which items will run short before the next delivery arrives. The DotOne Inventory AI Agent reads live stock, open orders and recent consumption across every warehouse, projects when each item runs out, and drafts the indent for your team to approve.',
    'highlights' => ['Run-out dates', 'Open POs checked', 'Indents drafted', 'You approve'],
    'capabilities_heading' => 'How AI forecasting works in DotOne',
    'capabilities_intro' => 'The agent works on the same GRNs, issues, transfers and dispatches your team already records.',
    'capabilities' => [
        ['chart', 'Run-out projection', 'Each item\'s run-out date is projected from its consumption, so you see shortages days ahead.'],
        ['truck', 'Lead time aware', 'Run-out dates are set against supplier lead times and open purchase orders.'],
        ['box', 'Across warehouses', 'Stock is compared across stores and plants, with transfers suggested where one site has excess.'],
        ['cart', 'Indents drafted', 'Where a new order is needed, the agent drafts the indent for approval.'],
        ['eye', 'Slow movers flagged', 'Items with no issue for months and unusual consumption are flagged.'],
        ['shield', 'Your rules', 'The agent works within the roles, permissions and approval rules you set.'],
    ],
    'workflow_intro' => 'What the agent does on each run.',
    'workflow' => [
        ['Read', 'Reads stock in every warehouse.'],
        ['Compare', 'Compares stock with reorder levels and consumption.'],
        ['Check', 'Checks open purchase orders.'],
        ['Draft', 'Drafts indents for items that will run short.'],
        ['Wait', 'Waits for your approval before anything is sent.'],
    ],
    'reports' => ['Items running short before the next PO', 'Projected run-out dates', 'Suggested transfers between sites', 'Slow-moving items', 'Unusual consumption', 'Indents drafted and approved'],
    'connected_intro' => 'Forecasting draws on these modules.',
    'connected' => ['inventory-management', 'purchase-management', 'production-management', 'warehouse-management'],
    'agent' => 'inventory',
    'agent_questions' => ['Which raw materials will run short before the next purchase order arrives?', 'What is slow-moving across all warehouses?', 'Where should we move stock between plants?'],
    'faq' => [
        ['How does AI inventory forecasting work?', 'The Inventory AI Agent reads live stock, open orders and consumption, projects when each item will run out, and compares that with supplier lead times. See the [Inventory AI Agent](/ai-agents/inventory).'],
        ['Will it order stock on its own?', 'Only if you allow it. You can keep it to recommendations and draft indents, with anything that changes data needing approval.'],
        ['Does demand forecasting feed in?', 'Yes. The [Sales AI Agent](/ai-agents/sales) forecasts demand from order history so production and purchase can plan ahead.'],
        ['Do we need to change how we record stock?', 'No. The agent reads the records your team already creates in DotOne.'],
    ],
    'cta_heading' => 'Ask the agent about your stock',
    'cta_text' => 'Book a 30-minute demo and ask the Inventory AI Agent which items will run short.',
];
include __DIR__ . '/includes/templates/module.php';
