<?php
return [
    'h2' => ['Every roll traced.', 'Every lot checked.'],
    'features' => [
        ['reels', 'Jumbo to slit roll', 'Which logs and rolls came from each jumbo, and what is left.'],
        ['qc', 'QC before dispatch', 'Lots passed, held and waiting, with COAs ready to send.'],
        ['stock', 'Rolls by size', 'Finished rolls by width and length against reorder levels.'],
    ],
    'cards' => [
        ['type' => 'rings', 'span' => 3, 'for' => 'reels', 'title' => 'Jumbo usage', 'items' => [['JR-0841', 82, '6 logs'], ['JR-0844', 55, '4 logs'], ['JR-0847', 20, '1 log']]],
        ['type' => 'table', 'span' => 3, 'for' => 'qc', 'title' => 'Lots in QC', 'cols' => ['Status', 'COA'], 'rows' => [['Lot T-1192 · BOPP 48 mm', [['Passed', '', ''], ['Ready', '', '']]], ['Lot T-1195 · BOPP 72 mm', [['On hold', '▼ adhesion', 'down'], ['—', '', '']]], ['Lot T-1197 · masking 24 mm', [['Passed', '', ''], ['Ready', '', '']]]]],
        ['type' => 'bars', 'span' => 4, 'for' => 'stock', 'title' => 'Rolls vs reorder level', 'rows' => [['48 mm × 65 m', 66, 40, 'ok', '18,400 rolls'], ['72 mm × 65 m', 29, 40, 'warn', '5,100 rolls'], ['24 mm × 20 m', 52, 35, 'ok', '22,600 rolls'], ['36 mm × 50 m', 33, 35, 'warn', '6,800 rolls']]],
        ['type' => 'kpi', 'span' => 2, 'for' => 'reels', 'title' => 'Metres slit', 'value' => 3.8, 'dec' => 1, 'suffix' => ' lakh m', 'delta' => '▲ 5%', 'tone' => 'up', 'sub' => 'this week', 'spark' => [44, 48, 47, 53, 51, 56, 55, 59]],
        ['type' => 'alert', 'span' => 6, 'for' => 'qc stock', 'head' => 'Quality Agent', 'text' => 'Lot T-1195 of 72 mm BOPP failed the adhesion test and is on hold, so its 2,300 rolls cannot be dispatched. 72 mm stock is already below its reorder level. Note drafted for the coating supervisor.', 'icon' => 'shield', 'primary' => 'Send note', 'done' => 'Sent'],
    ],
];
