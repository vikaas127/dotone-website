<?php
return [
    'h2' => ['Every design in stock.', 'Every batch checked.'],
    'features' => [
        ['stock', 'Stock by design and finish', 'Sheets of each design, finish and thickness, ready for dealer orders.'],
        ['qc', 'Batch thickness checks', 'Measured thickness against each item\'s tolerance, batch by batch.'],
        ['orders', 'Dealer orders', 'What is ordered, what is pressed and what ships today.'],
    ],
    'cards' => [
        ['type' => 'bars', 'span' => 4, 'for' => 'stock', 'title' => '1 mm sheets vs reorder level', 'rows' => [['Teak wood · suede', 58, 40, 'ok', '2,140 sheets'], ['Ivory · gloss', 27, 40, 'warn', '760 sheets'], ['Slate grey · matt', 49, 35, 'ok', '1,320 sheets'], ['Walnut · texture', 21, 35, 'warn', '540 sheets']]],
        ['type' => 'kpi', 'span' => 2, 'for' => 'orders', 'title' => 'Sheets dispatched', 'value' => 9.6, 'dec' => 1, 'suffix' => 'K', 'delta' => '▲ 7%', 'tone' => 'up', 'sub' => 'this week · 41 dealers', 'spark' => [42, 47, 45, 51, 49, 55, 53, 58]],
        ['type' => 'table', 'span' => 3, 'for' => 'qc', 'title' => 'Thickness by batch', 'cols' => ['Target', 'Measured'], 'rows' => [['L-3310 · 1.0 mm', [['1.00', '', ''], ['0.98', '', '']]], ['L-3312 · 0.8 mm', [['0.80', '', ''], ['0.71', '▼ 0.09', 'down']]], ['L-3315 · 1.25 mm', [['1.25', '', ''], ['1.24', '', '']]]]],
        ['type' => 'rings', 'span' => 3, 'for' => 'orders', 'title' => 'Presses now', 'items' => [['Press 1', 64, 'JC-2207'], ['Press 2', 38, 'JC-2210'], ['Trimming', 81, 'JC-2201']]],
        ['type' => 'alert', 'span' => 6, 'for' => 'qc stock', 'head' => 'Quality Agent', 'text' => 'Batch L-3312 of 0.8 mm Ivory gloss measured 0.71 mm, outside tolerance. 220 sheets are on hold, and Ivory gloss stock is below its reorder level. Note drafted for the press in-charge.', 'icon' => 'shield', 'primary' => 'Send note', 'done' => 'Sent'],
    ],
];
