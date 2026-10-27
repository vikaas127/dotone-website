<?php
return [
    'h2' => ['Every sheet in stock.', 'Every thickness checked.'],
    'features' => [
        ['stock', 'Sheets by grade and size', 'Stock of each grade, thickness and size, in sheets and square feet.'],
        ['qc', 'Thickness against tolerance', 'Measured thickness from the press line, against each item\'s own limits.'],
        ['orders', 'Dealer orders to dispatch', 'Open dealer orders and what is ready to load today.'],
    ],
    'cards' => [
        ['type' => 'bars', 'span' => 4, 'for' => 'stock', 'title' => 'BWP sheets vs reorder level', 'rows' => [['18 mm · 8x4', 62, 40, 'ok', '1,840 sheets'], ['12 mm · 8x4', 31, 40, 'warn', '920 sheets'], ['9 mm · 8x4', 54, 35, 'ok', '1,210 sheets'], ['6 mm · 7x4', 24, 35, 'warn', '610 sheets']]],
        ['type' => 'kpi', 'span' => 2, 'for' => 'orders', 'title' => 'Dispatched this week', 'value' => 58.4, 'dec' => 1, 'suffix' => 'K sq ft', 'delta' => '▲ 9%', 'tone' => 'up', 'sub' => '26 dealer orders', 'spark' => [40, 46, 44, 52, 50, 57, 55, 61]],
        ['type' => 'table', 'span' => 3, 'for' => 'qc', 'title' => 'Thickness checks today', 'cols' => ['Target', 'Measured'], 'rows' => [['Batch P-2214 · 18 mm', [['18.0', '', ''], ['17.8', '', '']]], ['Batch P-2217 · 12 mm', [['12.0', '', ''], ['11.4', '▼ 0.6', 'down']]], ['Batch P-2219 · 9 mm', [['9.0', '', ''], ['9.1', '', '']]]]],
        ['type' => 'rings', 'span' => 3, 'for' => 'orders', 'title' => 'Press line now', 'items' => [['Hot press 1', 72, 'JC-1408'], ['Hot press 2', 45, 'JC-1411'], ['Cutting', 88, 'JC-1402']]],
        ['type' => 'alert', 'span' => 6, 'for' => 'qc stock', 'head' => 'Quality Agent', 'text' => 'Batch P-2217 of 12 mm BWP measured 11.4 mm, below tolerance. 140 sheets are on hold, and 12 mm stock is under its reorder level. Note drafted for the press supervisor.', 'icon' => 'shield', 'primary' => 'Send note', 'done' => 'Sent'],
    ],
];
