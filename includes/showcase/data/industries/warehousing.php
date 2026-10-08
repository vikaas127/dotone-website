<?php
return [
    'h2' => ['Every client\'s stock.', 'In its place.'],
    'features' => [
        ['dock', 'Inward and dispatch today', 'Trucks received, orders picked and loads still to go, shift by shift.'],
        ['client', 'Stock by client', 'Each client\'s stock and space, kept separate.'],
        ['bin', 'Locations and put-away', 'What is waiting for put-away and how full each zone is.'],
    ],
    'cards' => [
        ['type' => 'funnel', 'span' => 3, 'for' => 'dock', 'title' => 'Dispatch today', 'steps' => [['Orders received', '186', 100], ['Picked', '142', 76], ['Packed', '118', 63], ['Dispatched', '97', 52]]],
        ['type' => 'donut', 'span' => 3, 'for' => 'client', 'title' => 'Pallets by client', 'center' => '3,420', 'center_sub' => 'pallets', 'segments' => [['Client A · FMCG', 41], ['Client B · Pharma', 27], ['Client C · Electricals', 19], ['Others', 13]]],
        ['type' => 'bars', 'span' => 4, 'for' => 'bin', 'title' => 'Zone occupancy', 'rows' => [['Zone A · racks', 92, 85, 'warn', '92%'], ['Zone B · racks', 74, 85, 'ok', '74%'], ['Zone C · floor', 58, 85, 'ok', '58%'], ['Cold room', 88, 85, 'warn', '88%']]],
        ['type' => 'kpi', 'span' => 2, 'for' => 'bin dock', 'title' => 'Pending put-away', 'value' => 46, 'suffix' => ' pallets', 'delta' => '▼ 12', 'tone' => 'up', 'sub' => 'from 4 GRNs', 'spark' => [80, 72, 66, 70, 58, 52, 48, 40]],
        ['type' => 'alert', 'span' => 6, 'for' => 'dock client', 'head' => 'Operations Agent', 'text' => '21 orders for Client A are picked but not packed, and their pickup is at 5 pm. Two loaders from Zone C are free this shift. Reassignment drafted.', 'icon' => 'truck', 'meta' => [['Client', 'Client A · FMCG'], ['Pickup', '5:00 pm']], 'primary' => 'Approve reassignment', 'done' => 'Team moved'],
    ],
];
