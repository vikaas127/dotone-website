<?php
return [
    'h2' => ['Every pack in stock.', 'Every market visited.'],
    'features' => [
        ['stock', 'Stock by SKU', 'Fast-moving packs against reorder levels.'],
        ['field', 'Field visits today', 'Visits logged by sales officers from the mobile app.'],
        ['channel', 'Sales by channel', 'Sales through super stockists and distributors this month.'],
    ],
    'cards' => [
        ['type' => 'bars', 'span' => 4, 'for' => 'stock', 'title' => 'Cases vs reorder level', 'rows' => [['Mango 200 ml', 61, 40, 'ok', '4,820 cases'], ['Mango 1 L', 26, 40, 'warn', '1,140 cases'], ['Lemon 200 ml', 48, 35, 'ok', '3,260 cases'], ['Cola 600 ml', 22, 35, 'warn', '980 cases']]],
        ['type' => 'kpi', 'span' => 2, 'for' => 'channel', 'title' => 'Cases sold', 'value' => 42.7, 'dec' => 1, 'suffix' => 'K', 'delta' => '▲ 11%', 'tone' => 'up', 'sub' => 'this month · 6 super stockists', 'spark' => [38, 44, 42, 49, 47, 53, 52, 58]],
        ['type' => 'table', 'span' => 3, 'for' => 'field', 'title' => 'Visits today', 'cols' => ['Planned', 'Done'], 'rows' => [['North zone', [['24', '', ''], ['21', '', '']]], ['West zone', [['18', '', ''], ['11', '▼ 7', 'down']]], ['South zone', [['20', '', ''], ['19', '', '']]]]],
        ['type' => 'rings', 'span' => 3, 'for' => 'stock', 'title' => 'Filling lines now', 'items' => [['Line 1 · 200 ml', 79, 'JC-3305'], ['Line 2 · 1 L', 52, 'JC-3308'], ['Blending', 66, 'JC-3310']]],
        ['type' => 'alert', 'span' => 6, 'for' => 'stock channel', 'head' => 'Inventory Agent', 'text' => 'Mango 1 L is at 1,140 cases, below its reorder level, and two distributors in the west zone have open orders for 600 cases. Line 2 can fill the gap in two shifts. Note drafted for the plant head.', 'icon' => 'box', 'primary' => 'Send note', 'done' => 'Sent'],
    ],
];
