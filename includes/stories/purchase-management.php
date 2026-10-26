<?php
// Purchase flow map. All names and numbers are demo data.
return [
    'flow' => [
        'label' => 'Procure to pay',
        'h2' => ['From low stock', 'to a paid bill'],
        'intro' => 'Every purchase follows one connected path, so nothing waits in an inbox and every step is on record.',
        'aria' => 'Purchase flow: low stock raises an indent, vendors quote, the purchase order is approved and sent, goods are received against it and the bill syncs to Tally.',
        'start' => ['Low stock alert', 'Indent raised automatically'],
        'quotes' => [
            'initials' => 'RFQ',
            'title' => 'Vendor quotes',
            'steps' => [['RFQ sent to 3', true], ['2 of 3 replied', false], ['Best quote picked', true]],
        ],
        'po' => ['title' => 'Purchase order', 'initials' => 'PO', 'line1' => 'PO-2231, ABC Industries', 'line2' => 'HDPE granules, 2,000 kg'],
        'approval' => [
            'title' => 'PO approval',
            'stages' => ['Draft', 'Over budget', 'Approved', 'Sent'],
            'note' => 'Over-budget POs go back for review. Approved ones go to the vendor.',
        ],
        'approved' => 'Approved',
        'end' => [
            'title' => 'Received and billed',
            'pct' => 70,
            'legend' => ['Paid to vendors', 'Still committed'],
            'rows' => [['GRN against the PO', true], ['Quality check', true], ['Bill synced to Tally', false]],
        ],
    ],
];
