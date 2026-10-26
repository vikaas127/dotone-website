<?php
return [
    'h2' => ['Work moves on its own.', 'You approve what matters.'],
    'features' => [
        ['approve', 'Approval chains', 'Documents go to the right approver by amount or department, and escalate if they wait too long.'],
        ['alert', 'Alerts and auto indents', 'Low stock raises an indent. Late orders and failed checks alert the people who need to know.'],
        ['handoff', 'Hand-offs between teams', 'A step finished in sales starts the next one in stores, production or accounts.'],
    ],
    'cards' => [
        ['type' => 'steps', 'span' => 3, 'for' => 'approve', 'title' => 'PO-2087 · ₹6.4 L', 'steps' => [['Raised by purchase', 'From indent IND-311', 'done'], ['Purchase head', 'Approved 11:20', 'done'], ['Plant head', 'Waiting 2 days', 'now'], ['Sent to vendor', 'On approval', 'todo']]],
        ['type' => 'alert', 'span' => 3, 'for' => 'approve handoff', 'head' => 'Operations Agent', 'text' => '3 approvals have waited more than 2 days. Escalation ready.', 'icon' => 'flow', 'meta' => [['PO-2087', 'Plant head'], ['QT-0562 discount', 'Sales head']], 'primary' => 'Escalate', 'done' => 'Escalated'],
        ['type' => 'kpi', 'span' => 2, 'for' => 'alert', 'title' => 'Auto indents', 'note' => 'this week', 'value' => 9, 'sub' => 'Raised from reorder levels', 'spark' => [30, 45, 40, 60, 50, 65, 70]],
        ['type' => 'list', 'span' => 4, 'for' => 'alert', 'title' => 'Alerts today', 'rows' => [['PVC Resin Grade A below reorder level', '', 'Indent raised', 'ok'], ['SO-1049 may miss dispatch date', '', 'Sales', 'warn'], ['Batch B-7712 failed inspection', '', 'Quality', 'bad']]],
        ['type' => 'table', 'span' => 6, 'for' => 'handoff', 'title' => 'Hand-offs waiting', 'cols' => ['From', 'To', 'Waiting'], 'rows' => [
            ['SO-1047 · Om Industries', [['Sales', '', ''], ['Stores', '', ''], ['4 h', '', '']]],
            ['JC-0388 finished', [['Production', '', ''], ['Quality', '', ''], ['1 h', '', '']]],
            ['DC-0918 dispatched', [['Stores', '', ''], ['Accounts', '', ''], ['1 day', '▲', 'down']]],
        ]],
    ],
];
