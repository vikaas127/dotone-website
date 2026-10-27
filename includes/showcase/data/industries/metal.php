<?php
return [
    'h2' => ['Every kilo accounted for.', 'Every job costed.'],
    'features' => [
        ['stock', 'Stock by grade and size', 'Material by grade, size and thickness, in kg and pieces.'],
        ['jobs', 'Material used by job', 'Material issued against output and scrap for each job.'],
        ['dispatch', 'Dispatch and billing', 'Tonnes dispatched and invoiced this week.'],
    ],
    'cards' => [
        ['type' => 'bars', 'span' => 4, 'for' => 'stock', 'title' => 'Plate stock vs reorder level', 'rows' => [['IS 2062 · 10 mm', 63, 40, 'ok', '24.6 MT'], ['IS 2062 · 6 mm', 28, 40, 'warn', '7.9 MT'], ['SS 304 · 2 mm', 51, 35, 'ok', '3.2 MT'], ['SS 316 · 3 mm', 19, 35, 'warn', '0.8 MT']]],
        ['type' => 'kpi', 'span' => 2, 'for' => 'dispatch', 'title' => 'Dispatched', 'value' => 86.5, 'dec' => 1, 'suffix' => ' MT', 'delta' => '▲ 8%', 'tone' => 'up', 'sub' => 'this week · 19 orders', 'spark' => [41, 45, 43, 50, 48, 54, 52, 57]],
        ['type' => 'table', 'span' => 3, 'for' => 'jobs', 'title' => 'Scrap by job', 'cols' => ['Allowed', 'Actual'], 'rows' => [['JC-6603 · brackets', [['6.0%', '', ''], ['5.4%', '', '']]], ['JC-6607 · base frames', [['5.0%', '', ''], ['8.1%', '▲ 3.1', 'down']]], ['JC-6610 · covers', [['7.0%', '', ''], ['6.6%', '', '']]]]],
        ['type' => 'rings', 'span' => 3, 'for' => 'jobs', 'title' => 'Shop floor now', 'items' => [['Laser cutting', 77, 'JC-6612'], ['Bending', 46, 'JC-6609'], ['Welding', 63, 'JC-6607']]],
        ['type' => 'alert', 'span' => 6, 'for' => 'jobs stock', 'head' => 'Production Agent', 'text' => 'Job JC-6607 for base frames used 8.1% scrap against 5% allowed, mostly at laser cutting. IS 2062 6 mm plate is below its reorder level. Note drafted for the shop floor in-charge.', 'icon' => 'factory', 'primary' => 'Send note', 'done' => 'Sent'],
    ],
];
