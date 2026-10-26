<?php
// Workflow automation flow map. All names and numbers are demo data.
return [
    'flow' => [
        'label' => 'Approval workflow',
        'h2' => ['From a rule', 'to the next step'],
        'intro' => 'A purchase moves through the same rules every time, so no step waits on someone remembering it.',
        'aria' => 'Approval workflow: an item falls below its reorder level, an indent is raised, the PO is routed to the approver set for its amount, escalated if it waits too long, then sent to the vendor with stores told what to expect.',
        'start' => ['Stock below reorder', 'Rule checked on save'],
        'quotes' => [
            'initials' => 'IN',
            'title' => 'Purchase indent',
            'steps' => [['Indent raised', true], ['Buyers notified', true], ['PO being prepared', false]],
        ],
        'po' => ['title' => 'Routed by amount', 'initials' => 'PO', 'line1' => 'PO-2231, ₹1,84,000', 'line2' => 'To role: Plant head'],
        'approval' => [
            'title' => 'Approval chain',
            'stages' => ['Plant head', 'Escalated', 'Director', 'Approved'],
            'note' => 'Waiting too long? It moves to the next approver you have set.',
        ],
        'approved' => 'Approved',
        'end' => [
            'title' => 'Handed off',
            'pct' => 75,
            'legend' => ['Approved in time', 'After escalation'],
            'rows' => [['PO sent to vendor', true], ['Stores told to expect', true], ['Delivery due 21 Nov', false]],
        ],
    ],
    'cta_chart' => [
        'title' => 'Approvals',
        'sub' => 'Approvals by outcome, last 9 months',
        'kpis' => [['Approved in time', '88%', '6 pts'], ['Auto indents', '164', '12%'], ['Hand-offs closed', '96%', '3 pts']],
        'legend' => ['Approved in time', 'After escalation', 'Sent back'],
        'bars' => [['Jan', 30, 12, 6], ['Feb', 32, 12, 6], ['Mar', 35, 11, 6], ['Apr', 34, 10, 5], ['May', 38, 10, 5], ['Jun', 40, 9, 5], ['Jul', 43, 8, 4], ['Aug', 45, 8, 4], ['Sep', 48, 7, 4]],
    ],
];
