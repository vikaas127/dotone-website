<?php
return [
    'h2' => ['Go digital step by step.', 'Without stopping the plant.'],
    'features' => [
        ['paper', 'Paper and Excel, replaced', 'Job cards, registers and reports move into DotOne one department at a time.'],
        ['machines', 'Machines that report', 'Output and downtime from machines and lines, in real time.'],
        ['decide', 'Decisions on live data', 'Management sees the whole plant on one dashboard, not in next week’s report.'],
    ],
    'cards' => [
        ['type' => 'steps', 'span' => 3, 'tall' => true, 'for' => 'paper', 'title' => 'Rollout plan', 'steps' => [['Week 1–2', 'Masters, stock and purchase', 'done'], ['Week 3', 'Sales and dispatch', 'done'], ['Week 4', 'Production and quality', 'now'], ['Week 5–6', 'HR, payroll and reports', 'todo']]],
        ['type' => 'rings', 'span' => 3, 'for' => 'paper', 'title' => 'Moved off paper', 'items' => [['Registers', 100, 'Stores'], ['Job cards', 70, 'Floor'], ['Reports', 45, 'MIS']]],
        ['type' => 'gauge', 'span' => 3, 'for' => 'machines decide', 'title' => 'Plant OEE now', 'pct' => 81, 'min' => '0%', 'center' => '81% OEE', 'max' => '100%'],
        ['type' => 'table', 'span' => 3, 'for' => 'decide machines', 'title' => 'Before and after', 'cols' => ['Before', 'With DotOne'], 'rows' => [
            ['MIS ready', [['Day 7', '', ''], ['Same day', '', 'up']]],
            ['Stock count', [['Monthly', '', ''], ['Live', '', 'up']]],
            ['Downtime known', [['Next day', '', ''], ['In minutes', '', 'up']]],
        ]],
    ],
];
