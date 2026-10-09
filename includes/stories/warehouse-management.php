<?php
// Warehouse feature stories. All names and numbers are demo data.
return [
    'label' => 'Gate to dispatch bay',
    'h2' => ['Every rack and bay,', 'recorded as it happens'],
    'intro' => 'Inward, put-away, picking and dispatch are recorded step by step, so the system matches what is on the racks.',
    'cards' => [
        [
            'size' => 'lg',
            'title' => 'Transfers between sites',
            'text' => 'Move stock between warehouses and plants with a document on both sides, so nothing is lost in transit.',
            'mock' => ['type' => 'route', 'stats' => [['In transit', '3 transfers'], ['Received today', '5']]],
        ],
        [
            'size' => 'lg',
            'tone' => 'soft',
            'title' => 'A place for every item',
            'text' => 'Received goods are assigned to a rack, bin or area, so the team knows where each batch is kept.',
            'mock' => [
                'type' => 'radar',
                'rings' => ['', '', ''],
                'people' => [['R4', 'Rack R4, bin 2', 'HDPE, 1,960 kg', 'ok'], ['R2', 'Rack R2, bin 5', 'Elbows, 520', 'ok'], ['YD', 'Yard area', 'Put-away pending', 'warn']],
                'screen' => 'Put-away',
                'note' => 'GRN-774 put away in rack R4, bin 2',
                'note_sub' => '4 minutes ago',
                'icon' => 'pin',
            ],
        ],
        [
            'size' => 'sm',
            'title' => 'Pick with a scan',
            'text' => 'Items are scanned as they are picked, so the wrong item is caught before it is packed.',
            'mock' => [
                'type' => 'phone',
                'screen' => 'Pick list PL-306',
                'rows' => [['Sales order', 'SO-1184', false], ['Pick', 'Elbow, 40 mm', false], ['Location', 'Rack R2, bin 5', false], ['Scanned', 'Elbow, 32 mm', true]],
                'alert' => 'Scanned item does not match the pick list. Check the bin and rescan.',
            ],
        ],
        [
            'size' => 'sm',
            'tone' => 'blue',
            'title' => 'Packed and dispatched',
            'text' => 'Packed orders are marked ready, and stock reduces the moment goods leave with a challan.',
            'mock' => ['type' => 'notify', 'icon' => 'truck', 'notes' => [['SO-1184 packed', 'Ready for dispatch'], ['Challan DC-562 raised', 'Stock reduced at main store']]],
        ],
        [
            'size' => 'sm',
            'title' => 'Stock by location',
            'text' => 'See stock by warehouse and storage location, down to the rack and bin.',
            'mock' => ['type' => 'table', 'cols' => ['Location', 'Item', 'Qty'], 'rows' => [['R4, bin 2', 'HDPE granules', '1,960 kg'], ['R2, bin 5', 'Elbow, 40 mm', '520'], ['R7, bin 1', 'Packing film', '30 rolls']]],
        ],
    ],
    'split' => [
        'label' => 'One shipment',
        'h2' => ['Follow a shipment', 'through the warehouse'],
        'items' => [
            [
                'title' => 'Received at the gate',
                'text' => 'Material is received against the PO with a GRN that records quantity and quality checks.',
                'screen' => ['type' => 'form', 'title' => 'GRN-774', 'fields' => [['Purchase order', 'PO-2231'], ['Received', '1,960 kg'], ['Quality', 'Passed']], 'toast' => 'Stock updated. Ready for put-away.'],
            ],
            [
                'title' => 'Put away',
                'text' => 'The storekeeper scans the goods into a rack and bin, and the location is saved.',
                'screen' => ['type' => 'form', 'title' => 'Put-away', 'fields' => [['GRN', 'GRN-774'], ['Location', 'Rack R4, bin 2'], ['Scan', 'QR verified']], 'toast' => 'Location saved for HDPE granules.'],
            ],
            [
                'title' => 'Dispatched',
                'text' => 'Goods leave against the sales order with a delivery challan, and stock updates straight away.',
                'screen' => ['type' => 'form', 'dark' => true, 'done' => 'Dispatched', 'title' => 'Delivery challan DC-562', 'fields' => [['Order', 'SO-1184'], ['Vehicle', 'MH 12 AB 4521'], ['Stock', 'Reduced at main store']]],
            ],
        ],
    ],
    'cta_chart' => [
        'title' => 'Warehouse movements',
        'sub' => 'Movements by type, last 9 months',
        'kpis' => [['Dispatched on time', '95%', '3 pts'], ['GRNs recorded', '412', '6%'], ['Pick accuracy', '99.2%', '0.6 pts']],
        'legend' => ['Inward', 'Outward', 'Transfers'],
        'bars' => [['Jan', 30, 26, 6], ['Feb', 31, 27, 6], ['Mar', 34, 30, 7], ['Apr', 32, 28, 6], ['May', 35, 31, 7], ['Jun', 36, 33, 8], ['Jul', 38, 34, 8], ['Aug', 39, 35, 9], ['Sep', 41, 37, 9]],
    ],
];
