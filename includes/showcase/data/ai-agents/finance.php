<?php
return [
    'label' => 'Watch the agent work',
    'h2' => ['It follows the money.', 'You decide who to call.'],
    'features' => [
        ['ageing', 'Ages every receivable', 'Matches receipts against invoices and flags customers past their payment terms.'],
        ['remind', 'Drafts the reminders', 'Prepares payment reminders for overdue customers and waits for your approval.'],
        ['cash', 'Shows where cash stands', 'Reads live sales and purchase data to show cash in, payables due and the position ahead.'],
    ],
    'cards' => [
        ['type' => 'donut', 'span' => 3, 'for' => 'ageing', 'title' => 'Receivables ageing', 'center' => '₹1.84 Cr', 'center_sub' => 'outstanding', 'segments' => [['0-30 days', 52], ['31-60 days', 26], ['61-90 days', 14], ['90+ days', 8]]],
        ['type' => 'alert', 'span' => 3, 'for' => 'remind', 'head' => '6 payment reminders drafted', 'text' => 'Customers more than 60 days overdue.', 'icon' => 'rupee', 'meta' => [['Om Industries', '₹8.4 L'], ['Apex Agro', '₹3.2 L']], 'primary' => 'Send reminders', 'done' => 'Reminders sent'],
        ['type' => 'kpi', 'span' => 3, 'for' => 'cash', 'title' => 'Cash position', 'note' => 'Month end, expected', 'prefix' => '₹', 'value' => 42.6, 'dec' => 1, 'suffix' => ' L', 'sub' => 'After ₹31.5 L payables due', 'spark' => [48, 52, 45, 58, 54, 60, 56]],
        ['type' => 'steps', 'span' => 3, 'for' => 'ageing remind', 'title' => 'Agent run · Monday 9:00', 'steps' => [['Read open invoices', '214 invoices', 'done'], ['Matched receipts', '38 this week', 'done'], ['Flagged overdue', '6 customers', 'done'], ['Reminders waiting', 'Accounts manager', 'now']]],
        ['type' => 'list', 'span' => 6, 'for' => 'cash', 'title' => 'Payables due next week', 'rows' => [['Shree Polymers · PVC Resin', '₹12.4 L', 'Due Tue', 'warn'], ['Om Industries · HDPE', '₹9.8 L', 'Due Thu', 'blue'], ['Plant 2 power bill', '₹2.1 L', 'Due Fri', 'grey']]],
    ],
];
