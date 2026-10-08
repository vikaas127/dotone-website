<?php
return [
    'h2' => ['Orders in, goods out.', 'Money back on time.'],
    'features' => [
        ['orders', 'Orders from the beat', 'Orders booked by salesmen on the road reach the godown in minutes, with stock checked.'],
        ['collect', 'Outstanding by party', 'Ageing by dealer and retailer, so credit decisions are made before the next dispatch.'],
        ['field', 'Who covered which beat', 'Visits, check-ins and orders by salesman, compared with the day\'s plan.'],
    ],
    'cards' => [
        ['type' => 'kpi', 'span' => 2, 'for' => 'orders', 'title' => 'Orders today', 'value' => 214, 'delta' => '▲ 11%', 'tone' => 'up', 'sub' => '₹18.6 L booked', 'spark' => [52, 58, 55, 61, 64, 60, 68, 72]],
        ['type' => 'list', 'span' => 4, 'for' => 'orders', 'title' => 'Pending dispatch', 'note' => 'Bhiwandi godown', 'rows' => [['Laxmi Traders · SO-2261', '₹1.4 L', 'Picking', 'blue'], ['Sai Kirana · SO-2263', '₹38,500', 'Packed', 'ok'], ['Patel Agencies · SO-2266', '₹2.2 L', 'Credit hold', 'bad']]],
        ['type' => 'bars', 'span' => 3, 'for' => 'collect', 'title' => 'Receivables ageing', 'rows' => [['0–30 days', 74, null, 'ok', '₹42.8 L'], ['31–60 days', 38, null, '', '₹21.5 L'], ['61–90 days', 19, null, 'warn', '₹10.9 L'], ['90+ days', 11, null, 'warn', '₹6.2 L']]],
        ['type' => 'rings', 'span' => 3, 'for' => 'field', 'title' => 'Beat coverage today', 'items' => [['Suresh', 88, '22 of 25'], ['Imran', 70, '14 of 20'], ['Deepak', 95, '19 of 20']]],
        ['type' => 'alert', 'span' => 6, 'for' => 'collect orders', 'head' => 'Finance Agent', 'text' => 'Patel Agencies is 74 days overdue and has a new order of ₹2.2 L. Order held and a reminder drafted.', 'icon' => 'rupee', 'meta' => [['Outstanding', '₹3.8 L'], ['Credit days', '45']], 'primary' => 'Send reminder', 'done' => 'Reminder sent'],
    ],
];
