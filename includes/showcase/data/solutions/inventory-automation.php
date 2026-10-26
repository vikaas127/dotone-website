<?php
return [
    'h2' => ['Stock that reorders itself.', 'With you approving.'],
    'features' => [
        ['trigger', 'Reorder triggers', 'When an item falls below its reorder level, the indent is drafted automatically.'],
        ['approve', 'Approve in one tap', 'Indents go to the right person, and approved ones become RFQs and POs.'],
        ['watch', 'Alerts before shortages', 'Low stock, unusual consumption and late deliveries are flagged before they stop work.'],
    ],
    'cards' => [
        ['type' => 'bars', 'span' => 3, 'for' => 'trigger watch', 'title' => 'Reorder watch', 'rows' => [['PVC Resin', 38, 55, 'warn', 'Trigger'], ['HDPE', 84, 50, 'ok', 'OK'], ['Masterbatch', 24, 40, 'warn', 'Trigger'], ['Labels', 61, 35, 'ok', 'OK']]],
        ['type' => 'alert', 'span' => 3, 'for' => 'approve trigger', 'head' => '2 indents drafted', 'text' => 'Quantities from 90-day consumption.', 'icon' => 'box', 'meta' => [['PVC Resin Grade A', '2,000 kg'], ['Masterbatch Blue', '150 kg']], 'primary' => 'Approve', 'done' => 'RFQs sent'],
        ['type' => 'steps', 'span' => 3, 'for' => 'approve', 'title' => 'Automatic flow', 'steps' => [['Stock below level', 'Detected 9:00', 'done'], ['Indent drafted', 'Inventory Agent', 'done'], ['Approved', 'Purchase manager', 'now'], ['RFQ to vendors', '', 'todo']]],
        ['type' => 'list', 'span' => 3, 'for' => 'watch', 'title' => 'Alerts this week', 'rows' => [['HDPE use 30% above normal', '', 'Unusual', 'bad'], ['PO-889 delivery 2 days late', '', 'Late', 'warn'], ['Ink Black near reorder', '', 'Soon', 'blue']]],
    ],
];
