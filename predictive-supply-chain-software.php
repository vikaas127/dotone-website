<?php
// Keyword landing page. Facts mirror the module and agent pages it links to.
$page = [
    'path' => '/predictive-supply-chain-software',
    'title' => 'Predictive Supply Chain Software for MSMEs | DotOne',
    'description' => 'Predictive supply chain software for MSMEs: demand forecasts, stock run-out dates, supplier lead times and late delivery alerts feed purchase and production.',
    'breadcrumbs' => [['Solutions', '/solutions'], ['Predictive supply chain', '/predictive-supply-chain-software']],
    'eyebrow' => 'Supply chain',
    'h1' => 'Predictive Supply Chain Software',
    'intro' => 'See supply problems before they reach the shop floor. DotOne connects demand forecasts, stock run-out dates, supplier lead times and open orders in one ERP, so purchase and production act on what is coming, not on last week\'s numbers.',
    'highlights' => ['Demand forecasts', 'Run-out dates', 'Lead times', 'Late delivery alerts'],
    'capabilities_heading' => 'Prediction across the supply chain',
    'capabilities_intro' => 'Each AI agent works on one part of the chain, on the same live data.',
    'capabilities' => [
        ['trend', 'Demand forecasts', 'The Sales AI Agent forecasts demand from order history.'],
        ['box', 'Stock run-out dates', 'The Inventory AI Agent projects when items will run out from consumption.'],
        ['truck', 'Supplier lead times', 'Run-out dates are compared with lead times and open purchase orders.'],
        ['bell', 'Late delivery alerts', 'Purchase orders past their due date are flagged for follow-up.'],
        ['factory', 'Production impact', 'Material shortages against the BOM show up before work orders start.'],
        ['chart', 'One view', 'Stock across warehouses, plants and locations in one place.'],
    ],
    'workflow_intro' => 'From demand to delivery.',
    'workflow' => [
        ['Forecast', 'Demand is forecast from order history.'],
        ['Plan', 'Sales orders become the production plan.'],
        ['Project', 'Material run-out is projected against lead times.'],
        ['Order', 'Indents are drafted for what will run short.'],
        ['Track', 'Late deliveries are flagged before they stop the line.'],
    ],
    'reports' => ['Demand forecast by product', 'Projected shortages', 'Open POs and due dates', 'Late deliveries by vendor', 'Stock across plants', 'Supplier delivery performance'],
    'connected_intro' => 'Prediction connects these modules.',
    'connected' => ['inventory-management', 'purchase-management', 'production-management', 'sales-management'],
    'agent' => 'inventory',
    'agent_questions' => ['Which materials will run short next month?', 'Which vendors deliver late most often?', 'What demand should we plan for next month?'],
    'faq' => [
        ['What is predictive supply chain software?', 'Software that uses demand forecasts, consumption and supplier data to flag shortages and delays before they happen, so purchase and production can act early.'],
        ['Which AI agents are involved?', 'The [Sales AI Agent](/ai-agents/sales) forecasts demand, the [Inventory AI Agent](/ai-agents/inventory) projects run-out dates and the [Purchase AI Agent](/ai-agents/purchase) tracks vendors and deliveries.'],
        ['Do we need a separate supply chain tool?', 'No. It runs inside DotOne, on the same data as purchase, stock and production.'],
        ['Will it buy stock on its own?', 'No. Indents are drafted and sent to the right person for approval.'],
    ],
    'cta_heading' => 'See shortages before they happen',
    'cta_text' => 'Book a 30-minute demo and see the agents forecast demand and flag shortages.',
];
include __DIR__ . '/includes/templates/module.php';
