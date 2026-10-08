<?php
return [
    'h2' => ['Start with the problem.', 'DotOne fits around it.'],
    'features' => [
        ['stock', 'Stock that runs out', 'Inventory automation reorders before shortages stop production.'],
        ['paper', 'Paper on the shop floor', 'Digital transformation moves job cards, registers and reports into one system.'],
        ['tally', 'Books in a separate system', 'Tally integration keeps accounts in sync with operations.'],
    ],
    'cards' => [
        ['type' => 'bars', 'span' => 3, 'for' => 'stock', 'title' => 'Reorder watch', 'rows' => [['PVC Resin', 38, 55, 'warn', 'Trigger'], ['HDPE', 84, 50, 'ok', 'OK'], ['Masterbatch', 24, 40, 'warn', 'Trigger']]],
        ['type' => 'rings', 'span' => 3, 'for' => 'paper', 'title' => 'Moved off paper', 'items' => [['Registers', 100, 'Stores'], ['Job cards', 70, 'Floor'], ['Reports', 45, 'MIS']]],
        ['type' => 'steps', 'span' => 6, 'for' => 'tally', 'title' => 'Tally sync', 'steps' => [['Ledgers and items', 'Synced 10:42', 'done'], ['Vouchers', '69 pushed', 'done'], ['Next sync', 'In 15 minutes', 'now']]],
    ],
];
