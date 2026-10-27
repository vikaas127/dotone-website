<?php
return [
    'h2' => ['Every coil measured.', 'Every facade matched.'],
    'features' => [
        ['coils', 'Coil yield', 'Square metres produced from each coil against what it should give.'],
        ['shade', 'Shade lots by project', 'Which projects are on which shade lot, and any sheet that does not match.'],
        ['samples', 'Samples in progress', 'Sample requests by stage, from request to approval.'],
    ],
    'cards' => [
        ['type' => 'table', 'span' => 3, 'for' => 'coils', 'title' => 'Coil yield', 'cols' => ['Expected', 'Actual'], 'rows' => [['Coil C-5521 · 0.5 mm', [['410 m²', '', ''], ['404 m²', '', '']]], ['Coil C-5524 · 0.3 mm', [['640 m²', '', ''], ['598 m²', '▼ 42', 'down']]], ['Coil C-5528 · 0.5 mm', [['410 m²', '', ''], ['412 m²', '', '']]]]],
        ['type' => 'rings', 'span' => 3, 'for' => 'shade', 'title' => 'Projects packed', 'items' => [['Tower A facade', 74, 'Lot SL-88'], ['Mall frontage', 41, 'Lot SL-91'], ['Hospital block', 90, 'Lot SL-86']]],
        ['type' => 'bars', 'span' => 4, 'for' => 'samples', 'title' => 'Sample requests by stage', 'rows' => [['Requested', 40, 30, 'ok', '8'], ['In development', 60, 30, 'ok', '12'], ['Sent to client', 35, 30, 'ok', '7'], ['Awaiting approval', 25, 30, 'warn', '5']]],
        ['type' => 'kpi', 'span' => 2, 'for' => 'coils', 'title' => 'Panels produced', 'value' => 18.2, 'dec' => 1, 'suffix' => 'K m²', 'delta' => '▲ 4%', 'tone' => 'up', 'sub' => 'this month', 'spark' => [46, 49, 48, 53, 52, 55, 54, 58]],
        ['type' => 'alert', 'span' => 6, 'for' => 'coils shade', 'head' => 'Production Agent', 'text' => 'Coil C-5524 yielded 598 m² against 640 m² expected, 6.6% short. Its sheets are allocated to the Mall frontage project on shade lot SL-91. Note drafted for purchase to raise with the coil supplier.', 'icon' => 'factory', 'primary' => 'Send note', 'done' => 'Sent'],
    ],
];
