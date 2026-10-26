<?php
return [
    'h2' => ['Know where your field team is.', 'And what they closed.'],
    'features' => [
        ['visits', 'Visits with GPS check-in', 'Every visit is checked in with location and time, so the day plan matches the day.'],
        ['orders', 'Orders from the field', 'Reps take orders on their phone and they reach sales immediately.'],
        ['att', 'Field attendance', 'Attendance for people who never come to the office, marked from where they start.'],
    ],
    'cards' => [
        ['type' => 'steps', 'span' => 3, 'tall' => true, 'for' => 'visits', 'title' => 'Today · Amit S.', 'steps' => [['Checked in', '9:12 · Andheri', 'done'], ['Shree Polymers', '10:05 · order taken', 'done'], ['Kiran Packaging', '11:40 · follow-up', 'done'], ['Om Industries', '1:30 · in visit', 'now'], ['Metro Pipes', '3:30 · planned', 'todo']]],
        ['type' => 'kpi', 'span' => 3, 'for' => 'orders', 'title' => 'Orders from the field', 'prefix' => '₹', 'value' => 9.6, 'dec' => 1, 'suffix' => ' L', 'delta' => '▲ 11%', 'sub' => 'Today, 6 reps', 'spark' => [20, 34, 28, 46, 40, 58, 64, 72]],
        ['type' => 'rings', 'span' => 3, 'for' => 'visits att', 'title' => 'Plan completed', 'items' => [['Amit', 75, '3 of 4'], ['Priya', 100, '5 of 5'], ['Rahul', 60, '3 of 5']]],
        ['type' => 'list', 'span' => 6, 'for' => 'orders att', 'title' => 'Live from the field', 'rows' => [['Priya · order ₹1.8 L · Apex Agro', '2 min ago', 'Order', 'ok'], ['Rahul · checked in · Nova Plast', '9 min ago', 'Visit', 'blue'], ['Neha · started day · Thane', '8:58', 'Attendance', 'grey']]],
    ],
];
