<?php
return [
    'h2' => ['Every job costed.', 'Every reel accounted for.'],
    'features' => [
        ['jobs', 'Jobs on the machines', 'Which customer job is on which machine, and how far along it is.'],
        ['waste', 'Wastage against the quote', 'Material used against what the quote allowed, by job and stage.'],
        ['reels', 'Reel stock by GSM', 'Paper and film by size and GSM, ready for the next jobs.'],
    ],
    'cards' => [
        ['type' => 'rings', 'span' => 3, 'for' => 'jobs', 'title' => 'Machines now', 'items' => [['Corrugator', 66, 'JB-5512'], ['Flexo printer', 40, 'JB-5509'], ['Die-cutter', 85, 'JB-5504']]],
        ['type' => 'table', 'span' => 3, 'for' => 'waste', 'title' => 'Wastage by job', 'cols' => ['Allowed', 'Actual'], 'rows' => [['JB-5504 · 5-ply', [['4.0%', '', ''], ['3.6%', '', '']]], ['JB-5507 · 3-ply', [['3.5%', '', ''], ['5.2%', '▲ 1.7', 'down']]], ['JB-5509 · printed', [['5.0%', '', ''], ['4.8%', '', '']]]]],
        ['type' => 'bars', 'span' => 4, 'for' => 'reels', 'title' => 'Kraft reels vs reorder level', 'rows' => [['120 GSM · 54"', 34, 45, 'warn', '6.2 t'], ['150 GSM · 48"', 71, 40, 'ok', '11.8 t'], ['180 GSM · 54"', 22, 40, 'warn', '3.1 t'], ['Duplex 300 GSM', 58, 35, 'ok', '4.4 t']]],
        ['type' => 'kpi', 'span' => 2, 'for' => 'jobs', 'title' => 'Boxes dispatched', 'value' => 1.42, 'dec' => 2, 'suffix' => ' L', 'delta' => '▲ 6%', 'tone' => 'up', 'sub' => 'this week · 38 jobs', 'spark' => [48, 55, 52, 60, 58, 63, 61, 66]],
        ['type' => 'alert', 'span' => 6, 'for' => 'waste jobs', 'head' => 'Production Agent', 'text' => 'Job JB-5507 for Sunrise Foods ran 1.7 points over its wastage allowance at the corrugator. Two set-ups were repeated on shift B. Note drafted for the plant head.', 'icon' => 'factory', 'primary' => 'Send note', 'done' => 'Sent'],
    ],
];
