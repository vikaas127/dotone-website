<?php
return [
    'h2' => ['Know your stock.', 'Before it runs out.'],
    'features' => [
        ['live', 'Live stock across warehouses', 'Every receipt, issue and transfer updates stock immediately, for each warehouse and in total.'],
        ['reorder', 'Reorder before it stops production', 'Items below reorder level are flagged, and the Inventory Agent drafts the indent for your approval.'],
        ['value', 'Stock value and slow movers', 'See what your stock is worth and which items have not moved, so cash is not stuck on shelves.'],
    ],
    'cards' => [
        ['type' => 'bars', 'span' => 4, 'for' => 'live reorder', 'title' => 'Stock vs reorder level', 'rows' => [['PVC Resin', 38, 55, 'warn', 'Low'], ['HDPE Granules', 84, 50, 'ok', 'OK'], ['Masterbatch', 24, 40, 'warn', 'Low'], ['Packing Film', 72, 45, 'ok', 'OK'], ['Labels', 61, 35, 'ok', 'OK']]],
        ['type' => 'kpi', 'span' => 2, 'for' => 'value', 'title' => 'Stock value', 'prefix' => '₹', 'value' => 84.6, 'dec' => 1, 'suffix' => ' L', 'delta' => '▼ 3%', 'tone' => 'up', 'sub' => 'Across 3 warehouses', 'spark' => [70, 74, 72, 78, 76, 73, 70, 68]],
        ['type' => 'alert', 'span' => 3, 'for' => 'reorder', 'head' => 'Inventory Agent', 'text' => '2 items are below reorder level. Indents drafted for approval.', 'icon' => 'box', 'meta' => [['PVC Resin Grade A', '2,000 kg'], ['Masterbatch Blue', '150 kg']], 'primary' => 'Approve indents', 'done' => 'Sent to purchase'],
        ['type' => 'donut', 'span' => 3, 'for' => 'live value', 'title' => 'Stock by warehouse', 'center' => '₹84.6 L', 'center_sub' => 'total', 'segments' => [['Main store', 48], ['Plant 2', 31], ['Finished goods', 21]]],
        ['type' => 'list', 'span' => 6, 'for' => 'value', 'title' => 'Slow-moving items', 'note' => 'no issue in 90 days', 'rows' => [['Old blue pigment', '₹1.8 L', '142 days', 'warn'], ['Spare die set', '₹96,000', '118 days', 'warn'], ['Kraft rolls 120 gsm', '₹54,000', '94 days', 'grey']]],
    ],
];
