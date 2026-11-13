<?php
// Keyword landing page. Facts mirror the module and agent pages it links to.
$page = [
    'path' => '/business-automation-software',
    'title' => 'Integrated Business Automation Software | DotOne',
    'description' => 'Integrated business automation software: approvals, alerts, auto indents and AI agents across sales, purchase, stock, production and HR in one ERP.',
    'breadcrumbs' => [['Solutions', '/solutions'], ['Business automation', '/business-automation-software']],
    'eyebrow' => 'Business automation',
    'h1' => 'Integrated Business Automation Software',
    'intro' => 'Automate the routine work between departments without stitching tools together. DotOne combines workflow rules and AI agents inside one ERP, so an order, an indent or a leave request moves to the next person the moment a step is done.',
    'highlights' => ['One approvals inbox', 'Auto indents', 'AI agents per module', 'No code'],
    'capabilities_heading' => 'What integrated automation covers',
    'capabilities_intro' => 'Because every module shares one database, automation can cross departments instead of stopping at the edge of one app.',
    'capabilities' => [
        ['check', 'Approval chains', 'Purchase orders, quotations, leave, expenses and payroll runs go to the approver set for each module, in one inbox.'],
        ['bell', 'Alerts', 'The right people hear when stock is low, an order is late or a quality check fails.'],
        ['box', 'Automatic indents', 'Items below their reorder level get a purchase indent drafted for the buying team.'],
        ['flow', 'Hand-offs', 'A confirmed order moves to stores for picking, production for planning and accounts for billing.'],
        ['spark', 'AI agents', 'Agents read live data, spot what needs action and prepare the next step for a person to approve.'],
        ['chart', 'Scheduled reports', 'The weekly or monthly MIS is built from live data and shared with the people you choose.'],
    ],
    'workflow_intro' => 'A typical automated flow from sales to dispatch.',
    'workflow' => [
        ['Order confirmed', 'A sales order is confirmed and stock is checked.'],
        ['Plan', 'Production is planned against the BOM and material is reserved.'],
        ['Buy', 'Shortages raise indents, routed for approval.'],
        ['Make and check', 'Job cards and quality checks run on the shop floor.'],
        ['Dispatch and bill', 'Goods leave with the challan, GST invoice and e-way bill.'],
    ],
    'reports' => ['Pending approvals by approver', 'Escalated tasks', 'Indents raised automatically', 'Late orders and dispatches', 'Agent actions and approvals', 'Time from order to dispatch'],
    'connected_intro' => 'Automation runs across these modules.',
    'connected' => ['workflow-automation', 'purchase-management', 'sales-management', 'production-management'],
    'agent' => 'operations',
    'agent_questions' => ['Which approvals have been waiting more than two days?', 'Where are orders getting stuck this week?', 'Who should approve this PO?'],
    'faq' => [
        ['What is integrated business automation software?', 'Software that automates routine steps across departments, such as approvals, indents and hand-offs, using one shared system instead of separate tools joined by spreadsheets or email.'],
        ['Do we need to write code?', 'No. Workflows are set up as rules on documents and roles, and our onboarding team helps you set up the first ones.'],
        ['Will AI change data on its own?', 'Only if you allow it. You choose, task by task, whether an agent informs, recommends or acts, and any change can be set to need approval. See [AI automation](/ai-automation).'],
        ['What should we automate first?', 'Work that repeats every day: reorder indents, purchase approvals, follow-up reminders and the weekly MIS.'],
    ],
    'cta_heading' => 'See your workflows automated',
    'cta_text' => 'Book a 30-minute demo and we will set up a purchase approval and a low-stock indent on sample data.',
];
include __DIR__ . '/includes/templates/module.php';
