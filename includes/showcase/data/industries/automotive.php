<?php
return [
    'h2' => ['Parts, jobs and rentals.', 'On one counter.'],
    'features' => [
        ['parts', 'Parts in stock', 'Fast movers against reorder level and slow parts tying up cash.'],
        ['bay', 'Workshop jobs', 'Every job card with its parts, labour and status, from bay to invoice.'],
        ['rent', 'Units out on rent', 'Which units are out, which are due back and which are free today.'],
    ],
    'cards' => [
        ['type' => 'list', 'span' => 3, 'tall' => true, 'for' => 'bay', 'title' => 'Workshop today', 'rows' => [['JC-881 · MH12 KT 4410', 'Periodic service', 'Done', 'ok'], ['JC-882 · MH14 BR 2096', 'Brake job', 'In bay', 'blue'], ['JC-883 · MH12 PL 7731', 'Clutch', 'Parts due', 'warn'], ['JC-884 · MH04 ZX 1188', 'Washing', 'Waiting', 'grey'], ['JC-885 · MH12 DV 5523', 'AC check', 'In bay', 'blue']]],
        ['type' => 'bars', 'span' => 3, 'for' => 'parts', 'title' => 'Parts vs reorder level', 'rows' => [['Oil filter OF-22', 26, 40, 'warn', 'Low'], ['Brake pad set BP-7', 64, 35, 'ok', 'OK'], ['Clutch plate CP-3', 12, 30, 'warn', 'Low']]],
        ['type' => 'donut', 'span' => 3, 'for' => 'rent', 'title' => 'Rental fleet', 'center' => '36', 'center_sub' => 'units', 'segments' => [['On rent', 64], ['Available', 22], ['Due back today', 8], ['In service', 6]]],
        ['type' => 'alert', 'span' => 6, 'for' => 'parts bay', 'head' => 'Inventory Agent', 'text' => 'Clutch plate CP-3 is below reorder level and job JC-883 is waiting for it. Indent drafted to the usual supplier.', 'icon' => 'box', 'meta' => [['Quantity', '12 sets'], ['Supplier', 'Auto Spares, Pune']], 'primary' => 'Approve indent', 'done' => 'Sent to purchase'],
    ],
];
