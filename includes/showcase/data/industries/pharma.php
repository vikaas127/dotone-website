<?php
return [
    'h2' => ['Every batch accounted for.', 'From quarantine to release.'],
    'features' => [
        ['release', 'Batch release status', 'See which batches are in quarantine, under test, released or rejected, at a glance.'],
        ['expiry', 'Expiry ahead of time', 'Raw material and finished stock that expires soon, sorted by date and value.'],
        ['trace', 'Batch history on demand', 'One view from finished batch back to the material, stages and checks behind it.'],
    ],
    'cards' => [
        ['type' => 'donut', 'span' => 3, 'for' => 'release', 'title' => 'Finished batches', 'center' => '48', 'center_sub' => 'this month', 'segments' => [['Released', 71], ['Under test', 17], ['Quarantine', 8], ['Rejected', 4]]],
        ['type' => 'steps', 'span' => 3, 'tall' => true, 'for' => 'trace', 'title' => 'Batch PCM-2410 · Paracetamol 500', 'steps' => [['API batch RM-5521', 'Incoming QC passed', 'done'], ['Dispensing', '12 Oct · 210 kg', 'done'], ['Granulation and compression', 'In-process checks logged', 'done'], ['Final QC', 'Assay pending', 'now'], ['Release to stock', 'QA head', 'todo']]],
        ['type' => 'list', 'span' => 3, 'for' => 'expiry', 'title' => 'Expiring within 90 days', 'rows' => [['Lactose · RM-4870', '₹1.2 L', '34 days', 'warn'], ['Amox 250 · FG-3312', '₹2.6 L', '58 days', 'warn'], ['Blister foil · PM-901', '₹44,000', '81 days', 'grey']]],
        ['type' => 'alert', 'span' => 6, 'for' => 'release expiry', 'head' => 'Quality Agent', 'text' => 'Batch AMX-2398 failed dissolution at final QC. Held from saleable stock and an investigation note drafted.', 'icon' => 'shield', 'meta' => [['Quantity', '1.8 L tablets'], ['Stage', 'Final QC']], 'primary' => 'Confirm hold', 'done' => 'Batch on hold'],
    ],
];
