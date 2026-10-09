<?php
// Production feature stories. All names and numbers are demo data.
return [
    'label' => 'On the shopfloor',
    'h2' => ['Plan the job,', 'then watch it run'],
    'intro' => 'BOMs, job cards, machine status and OEE in one module, so target and actual are compared on the same numbers.',
    'cards' => [
        [
            'size' => 'lg',
            'title' => 'Machine status at a glance',
            'text' => 'See which machines are running, idle, broken down or under maintenance across every line.',
            'mock' => [
                'type' => 'radar',
                'rings' => ['', '', ''],
                'people' => [['EX2', 'Extruder 2', 'Running', 'ok'], ['EX4', 'Extruder 4', 'Broken down', 'warn'], ['MO1', 'Moulding 1', 'Running', 'ok']],
                'screen' => 'Line 2 status',
                'note' => 'Extruder 4 stopped: breakdown',
                'note_sub' => '10:42 AM',
                'icon' => 'cog',
            ],
        ],
        [
            'size' => 'lg',
            'tone' => 'soft',
            'title' => 'Target versus actual',
            'text' => 'Job cards carry targets for the shift, and an alert goes out when output falls behind.',
            'mock' => [
                'type' => 'phone',
                'screen' => 'Job card JC-554',
                'rows' => [['Item', 'HDPE pipe, 63 mm', false], ['Machine', 'Extruder 2', false], ['Shift A target', '1,200 m', false], ['Actual by 1 PM', '640 m', true]],
                'alert' => 'Output is behind plan for Shift A. The line supervisor has been alerted.',
            ],
        ],
        [
            'size' => 'sm',
            'title' => 'Multi-level BOMs',
            'text' => 'Plan production against orders with a BOM that goes from finished product down to raw material.',
            'mock' => ['type' => 'table', 'cols' => ['Level', 'Item', 'Per 1,000 m'], 'rows' => [['1', 'Pipe, 63 mm', '1,000 m'], ['2', 'HDPE compound', '620 kg'], ['3', 'HDPE granules', '600 kg']]],
        ],
        [
            'size' => 'sm',
            'tone' => 'blue',
            'title' => 'Downtime with reasons',
            'text' => 'Downtime is logged with its reason, and alerts go out for delays and low output.',
            'mock' => ['type' => 'notify', 'icon' => 'bell', 'notes' => [['Downtime logged: 95 min', 'Extruder 4, breakdown'], ['Low output alert', 'Line 2, Shift A']]],
        ],
        [
            'size' => 'sm',
            'title' => 'Live OEE',
            'text' => 'Availability, performance and quality give OEE for each machine, line and plant.',
            'mock' => ['type' => 'table', 'cols' => ['Machine', 'OEE', 'Downtime'], 'rows' => [['Extruder 2', '82%', '18 min'], ['Extruder 4', '61%', '95 min'], ['Moulding 1', '78%', '30 min']]],
        ],
    ],
    'split' => [
        'label' => 'One job card',
        'h2' => ['Follow a job', 'from plan to output'],
        'items' => [
            [
                'title' => 'Released to the line',
                'text' => 'The job card goes to a line and machine with its target for the shift.',
                'screen' => ['type' => 'form', 'title' => 'Job card JC-554', 'fields' => [['Line', 'Line 2, Extruder 2'], ['Target', '1,200 m, Shift A'], ['Material', 'HDPE compound, 744 kg']], 'toast' => 'Released to Line 2 for Shift A.'],
            ],
            [
                'title' => 'Losses recorded',
                'text' => 'Downtime is logged with a reason while the shift is still running.',
                'screen' => ['type' => 'form', 'title' => 'Downtime', 'fields' => [['Machine', 'Extruder 2'], ['Reason', 'Die change'], ['Duration', '18 minutes']], 'toast' => 'Added to the downtime report for Line 2.'],
            ],
            [
                'title' => 'Shift reviewed',
                'text' => 'Output and OEE for the shift are on record, ready for the shift report.',
                'screen' => ['type' => 'form', 'dark' => true, 'done' => 'Shift closed', 'title' => 'Job card JC-554', 'fields' => [['Output', '1,150 of 1,200 m'], ['OEE', '82%'], ['Operator', 'Ravi K., Shift A']]],
            ],
        ],
    ],
    'cta_chart' => [
        'title' => 'Output',
        'sub' => 'Output in tonnes by line, last 9 months',
        'kpis' => [['OEE', '78%', '4 pts'], ['Target met', '91%', '3 pts'], ['Output', '1,840 t', '6%']],
        'legend' => ['Line 1', 'Line 2', 'Line 3'],
        'bars' => [['Jan', 72, 60, 40], ['Feb', 74, 62, 40], ['Mar', 78, 64, 42], ['Apr', 75, 61, 41], ['May', 80, 66, 43], ['Jun', 82, 68, 44], ['Jul', 84, 70, 45], ['Aug', 86, 71, 46], ['Sep', 88, 73, 47]],
    ],
];
