<?php
// Quality feature stories. All names and numbers are demo data.
return [
    'label' => 'At every check',
    'h2' => ['Catch defects', 'before they move on'],
    'intro' => 'Inspections, rejections and rework recorded against the receipts, job cards and batches your team already uses.',
    'cards' => [
        [
            'size' => 'lg',
            'title' => 'Inspection at goods receipt',
            'text' => 'Material received against a PO is checked before it is accepted into stock.',
            'mock' => [
                'type' => 'phone',
                'screen' => 'Incoming inspection',
                'rows' => [['Purchase order', 'PO-2231', false], ['Item', 'HDPE granules', false], ['Moisture', '0.4%, limit 0.2%', true], ['Vendor', 'ABC Industries', false]],
                'alert' => 'Lot failed inspection, so it does not enter usable stock.',
            ],
        ],
        [
            'size' => 'lg',
            'tone' => 'soft',
            'title' => 'Checks at every stage',
            'text' => 'Inspections are logged against the job card at each stage, so problems are found before the next operation.',
            'mock' => [
                'type' => 'radar',
                'rings' => ['', '', ''],
                'people' => [['EX', 'Extrusion', 'Passed', 'ok'], ['CO', 'Cooling', 'Passed', 'ok'], ['CU', 'Cutting', '3 rejected', 'warn']],
                'screen' => 'Job card JC-554',
                'note' => 'Cutting check: 3 pipes rejected',
                'note_sub' => 'Shift A, 11:20 AM',
                'icon' => 'factory',
            ],
        ],
        [
            'size' => 'sm',
            'title' => 'Rejection with a reason',
            'text' => 'Rejected quantities are logged with a reason, by job, machine, shift and item.',
            'mock' => ['type' => 'table', 'cols' => ['Reason', 'Rejected', 'Stage'], 'rows' => [['Wall thickness', '42', 'Extrusion'], ['Surface marks', '18', 'Cooling'], ['Length', '3', 'Cutting']]],
        ],
        [
            'size' => 'sm',
            'tone' => 'blue',
            'title' => 'Rework with a trail',
            'text' => 'Rejected items go for rework and are inspected again before they move on.',
            'mock' => ['type' => 'notify', 'icon' => 'flow', 'notes' => [['Sent for rework: 18 pipes', 'Surface marks, JC-554'], ['Rework passed: 16 of 18', 'Inspected again, moved on']]],
        ],
        [
            'size' => 'sm',
            'title' => 'Batch traceability',
            'text' => 'Trace a finished batch back to the jobs it went through and the raw material batch.',
            'mock' => ['type' => 'table', 'cols' => ['Finished', 'Job card', 'Raw batch'], 'rows' => [['FG-3108', 'JC-554', 'B-2291'], ['FG-3109', 'JC-556', 'B-2291'], ['FG-3110', 'JC-561', 'B-2304']]],
        ],
    ],
    'split' => [
        'label' => 'On the line',
        'h2' => ['Every check,', 'on the record'],
        'items' => [
            [
                'title' => 'Log a rejection',
                'text' => 'Supervisors record rejected quantities with a reason against the job card.',
                'screen' => ['type' => 'form', 'title' => 'Rejection', 'fields' => [['Job card', 'JC-554, Cutting'], ['Quantity', '3 pipes'], ['Reason', 'Length out of spec']], 'toast' => 'Logged against Shift A and Extruder 2.'],
            ],
            [
                'title' => 'Vision AI defects',
                'text' => 'Where Vision AI is in use, camera-detected defects feed the same quality records.',
                'screen' => ['type' => 'form', 'title' => 'Defect logged', 'badge' => 'Vision AI', 'fields' => [['Camera', 'Line 2, camera 3'], ['Defect', 'Surface mark'], ['Job card', 'JC-554']], 'toast' => 'Added to the rejection report for Line 2.'],
            ],
            [
                'title' => 'Trace a complaint',
                'text' => 'Follow a complaint from the finished batch back to its raw material.',
                'screen' => ['type' => 'form', 'dark' => true, 'done' => 'Source found', 'title' => 'Batch FG-3108', 'fields' => [['Job card', 'JC-554, Line 2'], ['Raw batch', 'B-2291, HDPE'], ['Received', 'PO-2231, 3 Oct']]],
            ],
        ],
    ],
    'cta_chart' => [
        'title' => 'Quality',
        'sub' => 'Inspected quantity by result, last 9 months',
        'kpis' => [['First-pass yield', '96%', '2 pts'], ['Rework passed', '89%', '4 pts'], ['Batches traced', '214', '12%']],
        'legend' => ['Passed first time', 'Passed after rework', 'Rejected'],
        'bars' => [['Jan', 50, 4, 3], ['Feb', 52, 4, 3], ['Mar', 54, 4, 3], ['Apr', 53, 3, 3], ['May', 56, 3, 2], ['Jun', 58, 3, 2], ['Jul', 59, 3, 2], ['Aug', 61, 3, 2], ['Sep', 63, 3, 2]],
    ],
];
