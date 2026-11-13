<?php
// Keyword landing page. Facts mirror the module and agent pages it links to.
$page = [
    'path' => '/purchase-order-approval-software',
    'title' => 'Automated Purchase Order Approval Software | DotOne',
    'description' => 'Automated purchase order approvals: route POs to the right approver by amount, approve from one inbox or on mobile, and escalate requests that wait.',
    'breadcrumbs' => [['Solutions', '/solutions'], ['PO approval software', '/purchase-order-approval-software']],
    'eyebrow' => 'PO approvals',
    'h1' => 'Automated Purchase Order Approvals',
    'intro' => 'Stop chasing signatures. DotOne routes every purchase order to the right approver for its amount and department, shows all pending approvals in one inbox, and escalates anything that waits too long, so material arrives on time.',
    'highlights' => ['Rules by amount', 'One approvals inbox', 'Escalations', 'Approve on mobile'],
    'capabilities_heading' => 'Approval rules that run themselves',
    'capabilities_intro' => 'Set the rules once. Every PO follows them, with a full record of who approved what and when.',
    'capabilities' => [
        ['flow', 'Routing by amount', 'POs go to the approver set for that amount, with approvers set per module.'],
        ['check', 'One inbox', 'Approvers see purchase requests, orders and other documents in one list.'],
        ['shield', 'Escalations', 'If an approval waits too long, it moves to the next person you set.'],
        ['users', 'Role-based routing', 'Approvals go to roles, not just names, so work continues when someone is on leave.'],
        ['phone', 'Approve on the go', 'Approvals can be given from the mobile app.'],
        ['doc', 'Audit trail', 'Every approval is recorded with the user and time.'],
    ],
    'workflow_intro' => 'A PO from indent to vendor.',
    'workflow' => [
        ['Trigger', 'An item falls below its reorder level.'],
        ['Indent', 'A purchase indent is raised for the buying team.'],
        ['Route', 'The PO goes to the approver set for that amount.'],
        ['Escalate', 'If it waits too long, it goes to the next approver.'],
        ['Send', 'Once approved, it goes to the vendor and stores is told what to expect.'],
    ],
    'reports' => ['Pending approvals by approver', 'Average approval time', 'Escalated POs', 'POs by approver and amount', 'Rejected POs and reasons', 'Spend approved this month'],
    'connected_intro' => 'PO approvals connect these modules.',
    'connected' => ['purchase-management', 'workflow-automation', 'inventory-management', 'mobile-erp'],
    'agent' => 'operations',
    'agent_questions' => ['Which purchase orders have waited more than two days?', 'Who approved the most POs this month?', 'What is our average approval time?'],
    'faq' => [
        ['How do automated PO approvals work?', 'You set approvers per module and by amount. Each PO is routed automatically and is sent to the vendor only after it is approved.'],
        ['What if the approver is away?', 'Route approvals to roles and set escalations, so the PO moves to the next person if it waits too long.'],
        ['Do we need to write code?', 'No. Approval rules are set up on documents and roles. See [workflow automation](/workflow-automation).'],
        ['Can other documents use the same approvals?', 'Yes. Quotations, leave, expenses, loans and payroll runs can all use approval chains.'],
    ],
    'cta_heading' => 'Set up a PO approval rule',
    'cta_text' => 'Book a 30-minute demo and we will route a sample PO through a two-level approval.',
];
include __DIR__ . '/includes/templates/module.php';
