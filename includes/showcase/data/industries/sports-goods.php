<?php
return [
    'h2' => ['Every model, every size.', 'Ready before the season.'],
    'features' => [
        ['stock', 'Stock by variant', 'Finished goods by model, size and grade against open orders.'],
        ['out', 'Material with job workers', 'What has gone out for stitching and finishing, and what has come back.'],
        ['season', 'Season demand', 'Orders by month and line, compared with last season.'],
    ],
    'cards' => [
        ['type' => 'table', 'span' => 4, 'for' => 'stock', 'title' => 'Leather balls · stock vs orders', 'cols' => ['Stock', 'Ordered'], 'rows' => [['Match ball 156 g', [['4,800', '', ''], ['6,200', '1,400 short', 'down']]], ['Practice ball 156 g', [['9,600', '', ''], ['7,100', '', '']]], ['Junior 135 g', [['3,250', '', ''], ['2,900', '', '']]]]],
        ['type' => 'gauge', 'span' => 2, 'for' => 'stock', 'title' => 'Orders ready to ship', 'pct' => 72, 'min' => '0%', 'center' => '72%', 'max' => '100%'],
        ['type' => 'list', 'span' => 3, 'for' => 'out', 'title' => 'With job workers', 'rows' => [['Stitching · Group A · practice', '2,400 balls', 'Due 16 Oct', 'blue'], ['Grip fitting · Kumar', '650 bats', 'Overdue', 'bad'], ['Polishing · Group C', '1,100 balls', 'Returned', 'ok']]],
        ['type' => 'kpi', 'span' => 3, 'for' => 'season', 'title' => 'Orders booked · Oct', 'prefix' => '₹', 'value' => 1.34, 'dec' => 2, 'suffix' => ' Cr', 'delta' => '▲ 18%', 'tone' => 'up', 'sub' => 'vs October last year', 'spark' => [30, 34, 38, 45, 52, 61, 70, 78]],
        ['type' => 'alert', 'span' => 6, 'for' => 'out stock', 'head' => 'Production Agent', 'text' => 'Match ball orders are 1,400 short and no match balls are with job workers. A job card for 1,400 more has been drafted for in-house stitching.', 'icon' => 'factory', 'primary' => 'Approve job card', 'done' => 'Job card raised'],
    ],
];
