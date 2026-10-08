<?php
return [
    'h2' => ['DotOne and Tally.', 'Always in agreement.'],
    'features' => [
        ['sync', 'Two-way sync', 'Ledgers, items, sales and purchase vouchers move between DotOne and Tally automatically.'],
        ['stock', 'Stock that matches', 'Stock movements in DotOne reach Tally, so both show the same closing stock.'],
        ['check', 'Nothing lost in between', 'Every sync is logged, and anything that fails is flagged for your team to fix.'],
    ],
    'cards' => [
        ['type' => 'steps', 'span' => 3, 'for' => 'sync check', 'title' => 'Sync at 10:42', 'steps' => [['Ledgers and items', '12 updated', 'done'], ['Sales vouchers', '48 pushed', 'done'], ['Purchase vouchers', '21 pushed', 'done'], ['Next sync', 'In 15 minutes', 'now']]],
        ['type' => 'rings', 'span' => 3, 'for' => 'sync stock', 'title' => 'Matched today', 'items' => [['Vouchers', 100, '69 of 69'], ['Ledgers', 100, '412'], ['Stock items', 99, '1 to review']]],
        ['type' => 'kpi', 'span' => 2, 'for' => 'sync', 'title' => 'Vouchers synced', 'value' => 1846, 'sub' => 'This month', 'spark' => [40, 52, 48, 60, 58, 66, 72, 80]],
        ['type' => 'list', 'span' => 4, 'for' => 'check stock', 'title' => 'Sync log', 'rows' => [['INV-4410 · Shree Polymers', '10:42', 'Synced', 'ok'], ['PUR-2291 · Vendor B', '10:42', 'Synced', 'ok'], ['Item: Ink Black 1 kg', '10:42', 'Unit mismatch', 'warn']]],
    ],
];
