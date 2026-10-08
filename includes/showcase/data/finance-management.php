<?php
return [
    'h2' => ['Know your money position.', 'Before month-end.'],
    'features' => [
        ['recv', 'Receivables and reminders', 'See who owes what and for how long. The Finance Agent drafts reminders for overdue customers.'],
        ['pay', 'Payables and due dates', 'Vendor bills and payments in one list, so you know what falls due this week.'],
        ['cash', 'Cash flow and budgets', 'Money expected in and out from live invoices, bills and POs, with spend compared to budget.'],
    ],
    'cards' => [
        ['type' => 'kpi', 'span' => 2, 'for' => 'recv', 'title' => 'Receivables', 'prefix' => '₹', 'value' => 44.7, 'dec' => 1, 'suffix' => ' L', 'delta' => '▼ 6%', 'tone' => 'up', 'sub' => '₹8.9 L past 60 days', 'spark' => [80, 76, 78, 72, 70, 68, 66, 62]],
        ['type' => 'table', 'span' => 4, 'for' => 'cash', 'title' => 'Cash flow', 'note' => 'next 4 weeks', 'cols' => ['In', 'Out', 'Net'], 'rows' => [
            ['Week 1', [['₹12.4 L', '', ''], ['₹9.8 L', '', ''], ['₹2.6 L', '▲', 'up']]],
            ['Week 2', [['₹8.1 L', '', ''], ['₹10.6 L', '', ''], ['− ₹2.5 L', '▼', 'down']]],
            ['Week 3', [['₹14.2 L', '', ''], ['₹7.3 L', '', ''], ['₹6.9 L', '▲', 'up']]],
            ['Week 4', [['₹9.6 L', '', ''], ['₹8.4 L', '', ''], ['₹1.2 L', '▲', 'up']]],
        ]],
        ['type' => 'list', 'span' => 3, 'for' => 'pay', 'title' => 'Vendor payments due', 'note' => 'this week', 'rows' => [['Sai Resins · PVC Resin', '₹4.8 L', 'Mon', 'blue'], ['Om Industries · Masterbatch', '₹1.2 L', 'Wed', 'blue'], ['Shree Packaging · Film', '₹68,000', 'Fri', 'grey']]],
        ['type' => 'alert', 'span' => 3, 'for' => 'recv', 'head' => 'Finance Agent', 'text' => '3 customers are overdue past 60 days. Payment reminders drafted.', 'icon' => 'rupee', 'meta' => [['Metro Pipes', '₹3.1 L · 96 days'], ['Apex Agro', '₹2.4 L · 72 days']], 'primary' => 'Send reminders', 'done' => 'Reminders sent'],
        ['type' => 'bars', 'span' => 6, 'for' => 'cash', 'title' => 'Budget vs actual', 'note' => 'October', 'rows' => [['Raw material', 82, 90, 'ok', '₹62 L of ₹68 L'], ['Power and fuel', 96, 85, 'warn', '₹7.4 L of ₹6.6 L'], ['Repairs and maintenance', 48, 80, 'ok', '₹1.9 L of ₹3.2 L'], ['Freight outward', 71, 75, 'ok', '₹2.8 L of ₹3 L']]],
    ],
];
