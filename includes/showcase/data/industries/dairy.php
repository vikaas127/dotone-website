<?php
return [
    'h2' => ['Milk in by route.', 'Product out by morning.'],
    'features' => [
        ['collect', 'Collection by route', 'Litres, fat and SNF by route and centre, recorded as the milk arrives.'],
        ['plant', 'Processing and yield', 'Milk issued to each batch against the product made, by shift.'],
        ['dispatch', 'Cold room to dispatch', 'Packs by batch and date, so the oldest leave first on the morning routes.'],
    ],
    'cards' => [
        ['type' => 'table', 'span' => 4, 'for' => 'collect', 'title' => 'Collection today', 'note' => 'morning shift', 'cols' => ['Litres', 'Fat %', 'SNF %'], 'rows' => [['Route 1 · Karad', [['8,420', '▲ 3%', 'up'], ['4.3', '', ''], ['8.6', '', '']]], ['Route 2 · Satara', [['6,910', '▼ 2%', 'down'], ['4.1', '', ''], ['8.5', '', '']]], ['Route 3 · Wai', [['5,280', '▲ 1%', 'up'], ['4.4', '', ''], ['8.7', '', '']]]]],
        ['type' => 'kpi', 'span' => 2, 'for' => 'collect', 'title' => 'Total received', 'value' => 20610, 'suffix' => ' L', 'delta' => '▲ 1.2%', 'tone' => 'up', 'sub' => '3 routes · 46 centres', 'spark' => [60, 64, 62, 66, 65, 68, 66, 70]],
        ['type' => 'bars', 'span' => 3, 'for' => 'plant', 'title' => 'Yield vs standard', 'rows' => [['Paneer', 78, 85, 'warn', '18.6%'], ['Curd', 92, 85, 'ok', '96.4%'], ['Ghee', 88, 85, 'ok', '4.9%']]],
        ['type' => 'list', 'span' => 3, 'for' => 'dispatch', 'title' => 'Cold room · dispatch first', 'rows' => [['Toned milk 500 ml · B-1012', '2,400 packs', 'Today', 'warn'], ['Curd 400 g · B-1009', '860 cups', 'Today', 'warn'], ['Paneer 200 g · B-1006', '310 packs', '2 days', 'grey']]],
        ['type' => 'alert', 'span' => 6, 'for' => 'plant collect', 'head' => 'Production Agent', 'text' => 'Paneer yield on batch B-1011 is below standard for the third shift in a row. Route 2 fat is also down. Review drafted for the plant head.', 'icon' => 'factory', 'primary' => 'Send review', 'done' => 'Sent to plant head'],
    ],
];
