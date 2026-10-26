<?php
return [
    'h2' => ['No build starts short.', 'Every unit traceable.'],
    'features' => [
        ['short', 'Shortages before kitting', 'Components short for the next builds, against stock and open POs.'],
        ['line', 'Stage-wise first pass yield', 'Pass and fail at each test stage, by line.'],
        ['serial', 'Unit history by serial', 'Build, tests and component lots behind every serial number.'],
    ],
    'cards' => [
        ['type' => 'list', 'span' => 3, 'for' => 'short', 'title' => 'Shortages · build WO-412', 'note' => '500 units', 'rows' => [['MCU STM32F030', '−180', 'PO due 14 Oct', 'warn'], ['LDO 3.3 V SOT-23', '−420', 'No PO', 'bad'], ['USB-C connector', '0', 'Covered', 'ok']]],
        ['type' => 'rings', 'span' => 3, 'for' => 'line', 'title' => 'First pass yield', 'items' => [['SMT', 98, 'Line 1'], ['ICT', 95, 'Line 1'], ['Functional', 91, 'Line 2']]],
        ['type' => 'steps', 'span' => 3, 'for' => 'serial', 'title' => 'Unit SN 24A-00873', 'steps' => [['Components issued', 'MCU lot 2433-K', 'done'], ['SMT and reflow', 'Line 1 · shift A', 'done'], ['Functional test', 'Passed', 'done'], ['Dispatched', 'INV-6172 · 9 Oct', 'done']]],
        ['type' => 'donut', 'span' => 3, 'for' => 'line', 'title' => 'Test failures', 'center' => '64', 'center_sub' => 'units', 'segments' => [['Solder bridge', 38], ['Wrong part', 24], ['Firmware', 22], ['Other', 16]]],
        ['type' => 'alert', 'span' => 6, 'for' => 'short', 'head' => 'Purchase Agent', 'text' => 'LDO 3.3 V is short by 420 for WO-412 starting Monday. Three vendor quotes compared and a PO drafted with the fastest delivery.', 'icon' => 'cart', 'meta' => [['Vendor', 'Vendor B · 4 days'], ['Rate', '₹6.80 each']], 'primary' => 'Approve PO', 'done' => 'PO sent'],
    ],
];
