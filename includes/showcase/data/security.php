<?php
return [
    'label' => 'How it protects you',
    'h2' => ['Your data stays yours.', 'And stays safe.'],
    'features' => [
        ['roles', 'Role-based access', 'People see and change only what their role allows, down to individual reports.'],
        ['approve', 'Approvals on what matters', 'Sensitive changes can require approval, including anything an AI agent prepares.'],
        ['backup', 'Encrypted backups', 'Automated encrypted backups, so your data can be restored if something goes wrong.'],
    ],
    'cards' => [
        ['type' => 'table', 'span' => 6, 'for' => 'roles', 'title' => 'Access by role', 'cols' => ['Sales', 'Stock', 'Payroll'], 'rows' => [
            ['Sales rep', [['Own', '', ''], ['View', '', ''], ['No', '', '']]],
            ['Store keeper', [['No', '', ''], ['Edit', '', ''], ['No', '', '']]],
            ['HR head', [['No', '', ''], ['No', '', ''], ['Edit', '', '']]],
        ]],
        ['type' => 'alert', 'span' => 3, 'for' => 'approve', 'head' => 'Approval needed', 'text' => 'Price change on HDPE for ABC Industries: ₹96 to ₹104.', 'icon' => 'shield', 'primary' => 'Approve', 'done' => 'Approved'],
        ['type' => 'steps', 'span' => 3, 'for' => 'backup', 'title' => 'Backups', 'steps' => [['Last backup', 'Today 02:00, encrypted', 'done'], ['Previous', 'Yesterday 02:00', 'done'], ['Next backup', 'Tonight 02:00', 'now']]],
    ],
];
