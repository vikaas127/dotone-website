<?php
return [
    'h2' => ['ERP your team will use.', 'Live in 4–6 weeks.'],
    'features' => [
        ['one', 'One system, not ten', 'Sales, stock, production, HR and accounts in one place instead of separate tools.'],
        ['live', 'Live numbers', 'Every module writes to the same data, so reports are current when you open them.'],
        ['go', 'Fast to go live', 'A dedicated onboarding team sets up DotOne around how you already work.'],
    ],
    'cards' => [
        ['type' => 'donut', 'span' => 3, 'for' => 'one', 'title' => 'Replaced by DotOne', 'center' => '7', 'center_sub' => 'tools', 'segments' => [['Excel sheets', 40], ['Separate CRM', 20], ['Stock register', 20], ['Payroll sheet', 20]]],
        ['type' => 'kpi', 'span' => 3, 'for' => 'live', 'title' => 'Sales this month', 'prefix' => '₹', 'value' => 1.86, 'dec' => 2, 'suffix' => ' Cr', 'delta' => '▲ 12%', 'sub' => 'Updated just now', 'spark' => [38, 52, 46, 60, 55, 70, 64, 78]],
        ['type' => 'steps', 'span' => 6, 'for' => 'go', 'title' => 'Go-live plan', 'steps' => [['Week 1–2', 'Masters, stock and purchase', 'done'], ['Week 3–4', 'Sales, production and quality', 'now'], ['Week 5–6', 'HR, payroll, reports and training', 'todo']]],
    ],
];
