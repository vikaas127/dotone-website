<?php
return [
    'h2' => ['Every pallet recorded.', 'From gate to dispatch.'],
    'features' => [
        ['inward', 'Inward and put-away', 'Receive against the PO with a GRN, then record the rack or bin where each item is stored.'],
        ['pick', 'Pick, pack and dispatch', 'Pick against the sales order, pack and dispatch with a delivery challan. Stock updates as goods leave.'],
        ['move', 'Transfers between warehouses', 'Move stock between plants and warehouses with a document on both sides, so nothing goes missing in transit.'],
    ],
    'cards' => [
        ['type' => 'kpi', 'span' => 2, 'for' => 'inward', 'title' => 'GRNs today', 'value' => 14, 'sub' => '3 pending put-away', 'spark' => [40, 55, 48, 62, 58, 70, 66, 74]],
        ['type' => 'bars', 'span' => 4, 'for' => 'pick', 'title' => 'Pick progress', 'note' => 'today', 'rows' => [['SO-1044 · Shree Polymers', 100, null, 'ok', 'Packed'], ['SO-1047 · Om Industries', 65, null, '', '65%'], ['SO-1049 · Metro Pipes', 30, null, 'warn', '30%'], ['SO-1050 · Nova Plast', 10, null, '', 'Started']]],
        ['type' => 'list', 'span' => 3, 'for' => 'inward', 'title' => 'Storage locations', 'note' => 'Main warehouse', 'rows' => [['PVC Resin Grade A', 'Rack A-04', '4,200 kg', 'blue'], ['HDPE Granules', 'Rack B-11', '2,750 kg', 'blue'], ['Masterbatch Blue', 'Bin C-02', '150 kg', 'warn'], ['Packing Film', 'Area D', '86 rolls', 'grey']]],
        ['type' => 'steps', 'span' => 3, 'for' => 'pick', 'title' => 'SO-1044 · Shree Polymers', 'steps' => [['Picked', '24 bags HDPE', 'done'], ['Packed', '2 pallets', 'done'], ['Challan raised', 'DC-0918', 'done'], ['Dispatch', 'Truck at 4 pm', 'now']]],
        ['type' => 'table', 'span' => 6, 'for' => 'move', 'title' => 'Transfers in transit', 'cols' => ['From', 'To', 'Qty'], 'rows' => [
            ['PVC Resin Grade A', [['Main store', '', ''], ['Plant 2', '', ''], ['1,000 kg', '', '']]],
            ['Masterbatch Black', [['Plant 2', '', ''], ['Main store', '', ''], ['200 kg', '', '']]],
            ['Finished pipes 110 mm', [['Plant 1', '', ''], ['FG warehouse', '', ''], ['640 nos', '', '']]],
        ]],
    ],
];
