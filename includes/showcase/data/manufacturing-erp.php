<?php
return [
    'h2' => ['From order to dispatch.', 'One system for the whole plant.'],
    'features' => [
        ['plan', 'Plan from the sales order', 'Orders become job cards with BOM and material checked, before production starts.'],
        ['floor', 'Run the floor live', 'Job progress, machine OEE and quality checks recorded as the work happens.'],
        ['ship', 'Ship and bill on time', 'Finished goods move to dispatch and GST invoice, with stock updated automatically.'],
    ],
    'cards' => [
        ['type' => 'steps', 'span' => 3, 'tall' => true, 'for' => 'plan floor ship', 'title' => 'SO-1044 · Om Industries', 'steps' => [['Sales order', '12,000 pcs', 'done'], ['BOM and material', 'Reserved from stock', 'done'], ['Job cards', 'Extrusion and printing', 'now'], ['Quality check', 'Final inspection', 'todo'], ['Dispatch and invoice', 'Planned 12 Oct', 'todo']]],
        ['type' => 'bars', 'span' => 3, 'for' => 'plan', 'title' => 'Material for SO-1044', 'rows' => [['HDPE', 100, null, 'ok', 'Ready'], ['Masterbatch', 100, null, 'ok', 'Ready'], ['Ink', 64, null, 'warn', 'Short 18 kg']]],
        ['type' => 'gauge', 'span' => 3, 'for' => 'floor', 'title' => 'Plant OEE today', 'pct' => 81, 'min' => '0%', 'center' => '81% OEE', 'max' => '100%'],
        ['type' => 'rings', 'span' => 3, 'for' => 'floor ship', 'title' => 'Today', 'items' => [['On-time', 96, 'dispatch'], ['First pass', 94, 'quality'], ['Capacity', 78, 'used']]],
        ['type' => 'kpi', 'span' => 3, 'for' => 'ship', 'title' => 'Dispatched this month', 'prefix' => '₹', 'value' => 1.42, 'dec' => 2, 'suffix' => ' Cr', 'delta' => '▲ 8%', 'sub' => '84 invoices', 'spark' => [40, 48, 44, 56, 62, 58, 70, 76]],
    ],
];
