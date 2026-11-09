<?php
// Keyword landing page. Facts mirror the module and agent pages it links to.
$page = [
    'path' => '/sales-pipeline-automation',
    'title' => 'AI-Driven Sales Pipeline Automation | DotOne',
    'description' => 'AI-driven sales pipeline automation: follow-ups on leads and quotations, late order alerts, demand forecasts and task routing, inside your ERP.',
    'breadcrumbs' => [['Solutions', '/solutions'], ['Sales pipeline automation', '/sales-pipeline-automation']],
    'eyebrow' => 'Sales automation',
    'h1' => 'AI-Driven Sales Pipeline Automation',
    'intro' => 'Keep every lead and quotation moving without a spreadsheet of reminders. DotOne\'s CRM and Sales AI Agents watch the pipeline from first enquiry to dispatch, flag deals going cold, draft follow-ups and route tasks to the right salesperson.',
    'highlights' => ['Lead follow-ups', 'Quotation reminders', 'Demand forecasts', 'Order alerts'],
    'capabilities_heading' => 'Automation from lead to order',
    'capabilities_intro' => 'The CRM AI Agent looks after leads and the pipeline. The Sales AI Agent picks up from the quotation onward.',
    'capabilities' => [
        ['users', 'Lead follow-ups', 'Untouched leads get reminders drafted for their owner.'],
        ['doc', 'Quotation reminders', 'Quotations about to go cold are flagged and follow-ups drafted.'],
        ['trend', 'Demand forecasts', 'Demand is forecast from order history so production can plan ahead.'],
        ['truck', 'Late order alerts', 'Orders and dispatches running late are flagged to the right people.'],
        ['flow', 'Task routing', 'Tasks go to the right salesperson automatically.'],
        ['chart', 'Sales reports', 'Regular sales reports are built from live data.'],
    ],
    'workflow_intro' => 'How a deal moves through DotOne.',
    'workflow' => [
        ['Lead', 'A lead is captured and assigned.'],
        ['Follow up', 'Reminders keep it moving.'],
        ['Quote', 'A quotation is sent and tracked.'],
        ['Order', 'The confirmed order goes to stores and production.'],
        ['Dispatch', 'Late dispatches are flagged before the customer calls.'],
    ],
    'reports' => ['Pipeline by stage and value', 'Quotations going cold', 'Win rate by salesperson', 'Demand forecast by product', 'Late orders', 'Sales by customer and region'],
    'connected_intro' => 'Pipeline automation spans these modules.',
    'connected' => ['crm', 'sales-management', 'field-sales-tracking', 'reports-analytics'],
    'agent' => 'sales',
    'agent_questions' => ['Which quotations are about to go cold?', 'Which orders are running late?', 'What will next month likely look like?'],
    'faq' => [
        ['What is sales pipeline automation?', 'Using software to move leads and quotations forward automatically: reminders, follow-ups, task routing and alerts, instead of tracking them by hand.'],
        ['How is the CRM AI Agent different from the Sales AI Agent?', 'The [CRM AI Agent](/ai-agents/crm) handles leads and the pipeline before a deal is won. The [Sales AI Agent](/ai-agents/sales) picks up from the quotation onward.'],
        ['Will it send emails to customers by itself?', 'Only if you allow it. It can prepare drafts for a salesperson to check.'],
        ['Does it work with field sales?', 'Yes. [Field sales tracking](/field-sales-tracking) records visits and check-ins for the field team.'],
    ],
    'cta_heading' => 'See your pipeline on autopilot',
    'cta_text' => 'Book a 30-minute demo and see the agents flag stale quotations and draft follow-ups.',
];
include __DIR__ . '/includes/templates/module.php';
