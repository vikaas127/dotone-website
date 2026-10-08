<?php
return [
    'h2' => ['See your shop floor.', 'Without walking it.'],
    'features' => [
        ['jobs', 'Job cards that update live', 'Every job card shows its stage, quantity and machine as the floor records progress.'],
        ['oee', 'OEE for every machine', 'Availability, performance and quality per machine, so you know where output is lost.'],
        ['plan', 'Plan against orders', 'Link production to sales orders and BOMs, and see what is due before it is late.'],
    ],
    'cards' => [
        ['type' => 'rings', 'span' => 3, 'for' => 'jobs', 'title' => 'Jobs running', 'items' => [['Extruder 1', 78, 'JC-221'], ['Moulding 3', 45, 'JC-222'], ['Printing 2', 92, 'JC-223']]],
        ['type' => 'gauge', 'span' => 3, 'for' => 'oee', 'title' => 'Plant OEE today', 'pct' => 81, 'min' => '0%', 'center' => '81% OEE', 'max' => '100%'],
        ['type' => 'bars', 'span' => 3, 'for' => 'oee', 'title' => 'OEE by machine', 'note' => 'vs 85% goal', 'rows' => [['Extruder 1', 86, 85], ['Extruder 2', 72, 85, 'warn'], ['Moulding 3', 81, 85], ['Printing 2', 89, 85]]],
        ['type' => 'steps', 'span' => 3, 'for' => 'plan jobs', 'title' => 'SO-1044 · 12,000 pcs', 'steps' => [['BOM checked', 'All material in stock', 'done'], ['Extrusion', '12,000 done', 'done'], ['Printing', '7,200 of 12,000', 'now'], ['Packing and QC', '', 'todo']]],
        ['type' => 'table', 'span' => 6, 'for' => 'plan oee', 'title' => 'Output today', 'cols' => ['Shift A', 'Shift B', 'Shift C'], 'rows' => [
            ['Planned', [['4,000', '', ''], ['4,000', '', ''], ['3,000', '', '']]],
            ['Actual', [['4,120', '▲ 3%', 'up'], ['3,640', '▼ 9%', 'down'], ['2,960', '▼ 1%', 'down']]],
            ['Downtime', [['18 min', '', ''], ['52 min', '', ''], ['24 min', '', '']]],
        ]],
    ],
];
