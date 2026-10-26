<?php
return [
    'h2' => ['Every title in stock.', 'Every print run costed.'],
    'features' => [
        ['titles', 'Stock by title', 'Copies in the godown for each title, with what is selling and what is not.'],
        ['print', 'Print runs in progress', 'Each job from paper issue to binding, with its cost building up.'],
        ['trade', 'Trade orders and returns', 'What has gone out to the trade and what is coming back.'],
    ],
    'cards' => [
        ['type' => 'list', 'span' => 4, 'for' => 'titles', 'title' => 'Stock by title', 'note' => 'main godown', 'rows' => [['Science Class 8 · 2026 ed.', '12,400 copies', 'Selling', 'ok'], ['Hindi Vyakaran Class 6', '8,150 copies', 'Selling', 'ok'], ['Marathi Kavita Sangrah', '2,960 copies', 'Slow', 'warn'], ['Accounts Class 11 · 2024 ed.', '1,870 copies', 'Old edition', 'grey']]],
        ['type' => 'kpi', 'span' => 2, 'for' => 'trade', 'title' => 'Returns this season', 'value' => 6.8, 'dec' => 1, 'suffix' => '%', 'delta' => '▼ 1.2', 'tone' => 'up', 'sub' => 'of copies supplied', 'spark' => [80, 76, 74, 70, 66, 64, 61, 58]],
        ['type' => 'steps', 'span' => 3, 'for' => 'print', 'title' => 'Print job PJ-208 · 15,000 copies', 'steps' => [['Paper issued', '70 GSM maplitho · 4.2 t', 'done'], ['Printing', '16 forms', 'done'], ['Folding and binding', '9,200 of 15,000', 'now'], ['Received in godown', 'Due 18 Oct', 'todo']]],
        ['type' => 'donut', 'span' => 3, 'for' => 'print', 'title' => 'Cost per copy · PJ-208', 'center' => '₹38.40', 'center_sub' => 'per copy', 'segments' => [['Paper', 54], ['Printing', 22], ['Binding', 16], ['Plates', 8]]],
        ['type' => 'alert', 'span' => 6, 'for' => 'trade titles', 'head' => 'Finance Agent', 'text' => 'Gyan Book Depot has ₹4.6 L due beyond 90 days and has just returned 640 copies. Credit note and a statement with a reminder drafted.', 'icon' => 'rupee', 'meta' => [['Credit note', '₹1.1 L'], ['Net due', '₹3.5 L']], 'primary' => 'Send statement', 'done' => 'Statement sent'],
    ],
];
