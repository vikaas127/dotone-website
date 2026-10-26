<?php
// Inventory feature stories. All names and numbers are demo data.
return [
    'label' => 'On the shelf',
    'h2' => ['Stock you can trust,', 'in every location'],
    'intro' => 'What the system shows matches what is on the shelf, because every movement is scanned and recorded.',
    'cards' => [
        [
            'size' => 'lg',
            'title' => 'Stock across every warehouse',
            'text' => 'See stock by store, warehouse and location, and move it between sites with a document trail.',
            'mock' => [
                'type' => 'radar',
                'rings' => ['', '', ''],
                'people' => [['MS', 'Main store', '4,820 items', 'ok'], ['P2', 'Plant 2 store', '1,960 items', 'ok'], ['DY', 'Dispatch yard', '320 items', 'warn']],
                'screen' => 'Stock transfers',
                'note' => 'Transfer ST-118 received at Plant 2',
                'note_sub' => '12 minutes ago',
                'icon' => 'box',
            ],
        ],
        [
            'size' => 'lg',
            'tone' => 'soft',
            'title' => 'Scan to verify',
            'text' => 'Items are scanned on receipt, issue and dispatch, so differences show up immediately.',
            'mock' => [
                'type' => 'phone',
                'screen' => 'Goods receipt',
                'rows' => [['Purchase order', 'PO-2231', false], ['Item', 'HDPE granules', false], ['Ordered', '2,000 kg', false], ['Scanned', '1,960 kg', true]],
                'alert' => 'Received quantity is 40 kg short. The GRN is flagged for the purchase team.',
            ],
        ],
        [
            'size' => 'sm',
            'title' => 'Low stock and auto indents',
            'text' => 'When an item falls below its reorder level, DotOne raises the purchase indent.',
            'mock' => ['type' => 'table', 'cols' => ['Item', 'Stock', 'Reorder'], 'rows' => [['PVC resin', '1,240 kg', '2,000 kg'], ['Copper wire', '85 m', '200 m'], ['Packing film', '12 rolls', '30 rolls']]],
        ],
        [
            'size' => 'sm',
            'tone' => 'blue',
            'title' => 'Alerts that act',
            'text' => 'Low stock and held batches reach the right person, with the next step ready.',
            'mock' => ['type' => 'notify', 'icon' => 'bell', 'notes' => [['Indent raised: PVC resin', 'Below reorder level'], ['Batch B-2291 on hold', 'Waiting for quality check']]],
        ],
        [
            'size' => 'sm',
            'title' => 'Stock valuation',
            'text' => 'Live inventory value by item, category and warehouse, ready for month-end.',
            'mock' => ['type' => 'table', 'cols' => ['Warehouse', 'Items', 'Value'], 'rows' => [['Main store', '4,820', '₹1.9 Cr'], ['Plant 2 store', '1,960', '₹0.9 Cr'], ['Dispatch yard', '320', '₹0.3 Cr']]],
        ],
    ],
    'split' => [
        'label' => 'On the floor',
        'h2' => ['Every movement,', 'scanned and recorded'],
        'items' => [
            [
                'title' => 'Receive against the PO',
                'text' => 'Smart GRN records quantities and quality checks and updates stock in one step.',
                'screen' => ['type' => 'form', 'title' => 'Smart GRN', 'fields' => [['Purchase order', 'PO-2231'], ['Received', '1,960 kg'], ['Quality', 'Passed']], 'toast' => 'Stock updated in the main store.'],
            ],
            [
                'title' => 'Transfer between sites',
                'text' => 'Moves between stores carry a document on both sides, so nothing goes missing in transit.',
                'screen' => ['type' => 'form', 'title' => 'Stock transfer ST-118', 'fields' => [['From', 'Main store'], ['To', 'Plant 2 store'], ['Items', 'PVC resin, 500 kg']], 'toast' => 'Received and confirmed at Plant 2.'],
            ],
            [
                'title' => 'Trace a batch',
                'text' => 'Follow a batch or serial number from receipt to the customer in seconds.',
                'screen' => ['type' => 'form', 'dark' => true, 'done' => 'Batch traced', 'title' => 'Batch B-2291', 'fields' => [['Received', '3 Oct, PO-2231'], ['Used in', 'Job card JC-554'], ['Shipped to', 'Mehta Industries']]],
            ],
        ],
    ],
    'cta_chart' => [
        'title' => 'Stock value',
        'sub' => 'Inventory value by warehouse, last 9 months',
        'kpis' => [['Stock value', '₹3.1 Cr', '4%'], ['Transfers on time', '97%', '2 pts'], ['Transfers', '148', '9%']],
        'legend' => ['Main store', 'Plant 2 store', 'Dispatch yard'],
        'bars' => [['Jan', 40, 20, 8], ['Feb', 42, 20, 8], ['Mar', 44, 22, 9], ['Apr', 41, 21, 8], ['May', 45, 22, 9], ['Jun', 46, 23, 9], ['Jul', 47, 23, 10], ['Aug', 48, 24, 10], ['Sep', 49, 24, 10]],
    ],
];
