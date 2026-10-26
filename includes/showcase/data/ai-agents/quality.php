<?php
return [
    'label' => 'Watch the agent work',
    'h2' => ['It finds the pattern.', 'You fix the cause.'],
    'features' => [
        ['pattern', 'Finds rejection patterns', 'Groups rejections by machine, shift, operator and vendor to show where they start.'],
        ['hold', 'Holds failed batches', 'Puts batches that fail inspection on hold so they are not issued or dispatched.'],
        ['act', 'Drafts the next step', 'Prepares rework orders and vendor complaints for your quality head to approve.'],
    ],
    'cards' => [
        ['type' => 'steps', 'span' => 3, 'tall' => true, 'for' => 'pattern hold act', 'title' => 'Agent run · 8:00', 'steps' => [['Read inspections', '326 entries', 'done'], ['Grouped rejections', 'By machine, shift, vendor', 'done'], ['Traced to raw material', 'Lot PR-0912', 'done'], ['Held batches', '3 batches', 'done'], ['Drafted vendor complaint', 'Waiting for approval', 'now']]],
        ['type' => 'bars', 'span' => 3, 'for' => 'pattern', 'title' => 'Rejection rate by machine', 'note' => 'This week', 'rows' => [['Extruder 1', 72, null, 'warn', '4.8%'], ['Extruder 2', 24, null, '', '1.6%'], ['Moulding 3', 30, null, '', '2.0%'], ['Printing 1', 18, null, '', '1.2%']]],
        ['type' => 'alert', 'span' => 3, 'for' => 'act', 'head' => 'Vendor complaint drafted', 'text' => 'PVC Resin lot PR-0912 linked to most Extruder 1 rejections.', 'icon' => 'shield', 'meta' => [['Vendor', 'Metro Chem'], ['Batches affected', '3']], 'primary' => 'Approve', 'done' => 'Sent to vendor'],
        ['type' => 'list', 'span' => 6, 'for' => 'hold', 'title' => 'Batches on hold', 'rows' => [['B-2291 · PVC Pipe 110 mm · Night shift', '', 'Hold', 'bad'], ['B-2294 · PVC Pipe 110 mm · Night shift', '', 'Hold', 'bad'], ['B-2297 · PVC Pipe 90 mm', '', 'Rework', 'warn']]],
    ],
];
