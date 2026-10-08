<?php
return [
    'h2' => ['Catch defects early.', 'Trace every batch.'],
    'features' => [
        ['inspect', 'Inspect at every stage', 'Incoming, in-process and final inspections recorded against GRNs and job cards.'],
        ['reject', 'Know why rejections happen', 'Rejections logged with reason by job, machine, shift and operator, so patterns show up.'],
        ['trace', 'Batch traceability', 'Trace a finished batch back to the raw material batches and checks behind it.'],
    ],
    'cards' => [
        ['type' => 'rings', 'span' => 3, 'for' => 'inspect', 'title' => 'First-pass yield', 'items' => [['Incoming', 97, 'GRN checks'], ['In-process', 94, 'Job cards'], ['Final', 98, 'Before dispatch']]],
        ['type' => 'donut', 'span' => 3, 'for' => 'reject', 'title' => 'Rejection reasons', 'center' => '186', 'center_sub' => 'pcs this week', 'segments' => [['Thickness', 42], ['Surface marks', 28], ['Colour', 18], ['Other', 12]]],
        ['type' => 'bars', 'span' => 3, 'for' => 'reject', 'title' => 'Rejection % by machine', 'rows' => [['Extruder 1', 32, null, 'warn', '3.2%'], ['Moulding 3', 14, null, '', '1.4%'], ['Printing 2', 9, null, '', '0.9%'], ['Extruder 2', 21, null, '', '2.1%']]],
        ['type' => 'alert', 'span' => 3, 'for' => 'inspect reject', 'head' => 'Batch B-2291 failed thickness', 'text' => 'Held from stock. Rework order drafted for approval.', 'icon' => 'shield', 'primary' => 'Approve rework', 'done' => 'Rework started'],
        ['type' => 'steps', 'span' => 6, 'for' => 'trace', 'title' => 'Trace FG batch FG-7731', 'steps' => [['Raw material batch RM-1180', 'HDPE, Vendor B, passed incoming check', 'done'], ['Job card JC-221', 'Extruder 1, shift A, 2 in-process checks', 'done'], ['Final inspection', 'Passed, inspector R. Patil', 'done'], ['Dispatched', 'Invoice INV-4410, Shree Polymers', 'now']]],
    ],
];
