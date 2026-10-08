<?php
return [
    'h2' => ['Spares on site.', 'Issues closed on time.'],
    'features' => [
        ['spares', 'Critical spares by site', 'Stock of the parts that stop work, against the minimum for each site.'],
        ['issues', 'Open site issues', 'Everything reported from the field, with its owner and age.'],
        ['crew', 'Crew on site', 'Who is on rotation at each site today.'],
    ],
    'cards' => [
        ['type' => 'bars', 'span' => 3, 'for' => 'spares', 'title' => 'Site 3, Barmer · critical spares', 'rows' => [['Mud pump liner', 25, 40, 'warn', '2 nos'], ['Valve seat 3"', 60, 40, 'ok', '6 nos'], ['Mechanical seal', 15, 40, 'warn', '1 no'], ['Hydraulic hose', 70, 40, 'ok', '14 m']]],
        ['type' => 'list', 'span' => 3, 'tall' => true, 'for' => 'issues', 'title' => 'Open site issues', 'rows' => [['Generator 2 overheating · Site 3', '2 days', 'High', 'bad'], ['Seal leak on pump P-12 · Site 1', '1 day', 'High', 'bad'], ['Camp water tanker late · Site 2', '6 h', 'Medium', 'warn'], ['PPE stock count · Site 4', '3 days', 'Low', 'grey'], ['Diesel reconciliation · Site 3', '1 day', 'Medium', 'warn']]],
        ['type' => 'rings', 'span' => 3, 'for' => 'crew', 'title' => 'Crew on site today', 'items' => [['Site 1', 100, '24 of 24'], ['Site 2', 92, '22 of 24'], ['Site 3', 83, '20 of 24']]],
        ['type' => 'alert', 'span' => 6, 'for' => 'spares issues', 'head' => 'Inventory Agent', 'text' => 'Site 3 has one mechanical seal left, below its minimum of 3. The Jodhpur base holds 4. Transfer of 2 seals drafted.', 'icon' => 'cog', 'meta' => [['From', 'Jodhpur base'], ['Quantity', '2 nos']], 'primary' => 'Approve transfer', 'done' => 'Transfer raised'],
    ],
];
