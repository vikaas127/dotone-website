<?php
return [
    'h2' => ['Built for the shop floor.', 'And the office behind it.'],
    'features' => [
        ['floor', 'Production you can see', 'Job cards, machines and shifts on one screen, updated as the floor works.'],
        ['stock', 'Material when you need it', 'Raw material checked against the BOM before a job starts, with reorders drafted early.'],
        ['quality', 'Quality on every batch', 'Inspections at receipt, in process and before dispatch, with full batch traceability.'],
    ],
    'cards' => [
        ['type' => 'rings', 'span' => 3, 'for' => 'floor', 'title' => 'Machines running', 'items' => [['Extruder 1', 78, 'JC-221'], ['Moulding 3', 45, 'JC-222'], ['Printing 2', 92, 'JC-223']]],
        ['type' => 'bars', 'span' => 3, 'for' => 'stock', 'title' => 'Stock vs reorder level', 'rows' => [['PVC Resin', 38, 55, 'warn', 'Low'], ['HDPE', 84, 50, 'ok', 'OK'], ['Masterbatch', 24, 40, 'warn', 'Low']]],
        ['type' => 'donut', 'span' => 3, 'for' => 'quality', 'title' => 'Rejection reasons', 'center' => '1.8%', 'center_sub' => 'rejection', 'segments' => [['Thickness', 42], ['Surface', 28], ['Colour', 18], ['Other', 12]]],
        ['type' => 'gauge', 'span' => 3, 'for' => 'floor', 'title' => 'Plant OEE today', 'pct' => 81, 'min' => '0%', 'center' => '81% OEE', 'max' => '100%'],
        ['type' => 'alert', 'span' => 6, 'for' => 'stock quality', 'head' => 'Inventory Agent', 'text' => 'Masterbatch Blue is below reorder level and needed for job JC-224 on Monday. Indent drafted.', 'icon' => 'box', 'primary' => 'Approve indent', 'done' => 'Sent to purchase'],
    ],
];
