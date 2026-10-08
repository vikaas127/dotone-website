<?php
return [
    'label' => 'Watch the agent work',
    'h2' => ['It checks the stock.', 'You approve the order.'],
    'features' => [
        ['scan', 'Scans every warehouse', 'Reads stock, reorder levels and open purchase orders across all your warehouses.'],
        ['find', 'Finds what will run short', 'Flags items below reorder level and unusual consumption before production stops.'],
        ['draft', 'Drafts the indent for you', 'Prepares the indent with quantities from consumption trends and waits for your approval.'],
    ],
    'cards' => [
        ['type' => 'steps', 'span' => 3, 'tall' => true, 'for' => 'scan find draft', 'title' => 'Agent run · 9:00', 'steps' => [['Read 3 warehouses', '1,284 items', 'done'], ['Compared reorder levels', '4 items short', 'done'], ['Checked open POs', '2 already ordered', 'done'], ['Drafted indents', '2 items', 'done'], ['Waiting for approval', 'Purchase manager', 'now']]],
        ['type' => 'bars', 'span' => 3, 'for' => 'find', 'title' => 'Below reorder level', 'rows' => [['PVC Resin', 38, 55, 'warn', '1,240 kg'], ['Masterbatch', 24, 40, 'warn', '62 kg'], ['Ink Black', 44, 50, 'warn', '18 kg'], ['Labels', 30, 35, 'warn', '4,000']]],
        ['type' => 'alert', 'span' => 3, 'for' => 'draft', 'head' => 'Indent IND-560 drafted', 'text' => 'Based on 90-day consumption.', 'icon' => 'box', 'meta' => [['PVC Resin Grade A', '2,000 kg'], ['Masterbatch Blue', '150 kg']], 'primary' => 'Approve', 'done' => 'Sent to purchase'],
        ['type' => 'list', 'span' => 6, 'for' => 'scan find', 'title' => 'Also flagged', 'rows' => [['Old blue pigment · no issue in 142 days', '', 'Slow moving', 'warn'], ['HDPE consumption 30% above normal', '', 'Unusual use', 'bad'], ['Packing Film, Plant 2 has extra', '', 'Transfer', 'blue']]],
    ],
];
