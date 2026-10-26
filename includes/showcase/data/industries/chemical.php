<?php
return [
    'h2' => ['Every lot tested.', 'Every batch accounted for.'],
    'features' => [
        ['reactor', 'Batches by reactor', 'What each reactor is running, how far the batch has got and its expected output.'],
        ['yield', 'Yield and losses', 'Input against output by batch, so losses show up the same day.'],
        ['lab', 'Lab results by lot', 'Test results against every lot, with off-spec material held.'],
    ],
    'cards' => [
        ['type' => 'rings', 'span' => 3, 'for' => 'reactor', 'title' => 'Reactors running', 'items' => [['R-101', 70, 'Resin B-77'], ['R-102', 35, 'Binder B-78'], ['R-201', 90, 'Solvent mix']]],
        ['type' => 'table', 'span' => 3, 'for' => 'yield', 'title' => 'Batch yield', 'cols' => ['Input', 'Yield'], 'rows' => [['B-74 · Resin', [['4,200 kg', '', ''], ['96.1%', '', '']]], ['B-75 · Binder', [['3,800 kg', '', ''], ['92.4%', '▼ 2.6', 'down']]], ['B-76 · Resin', [['4,200 kg', '', ''], ['97.0%', '▲ 0.9', 'up']]]]],
        ['type' => 'list', 'span' => 4, 'for' => 'lab', 'title' => 'Lab results · today', 'rows' => [['Lot B-74 · viscosity, solids', 'Within spec', 'Passed', 'ok'], ['Lot B-75 · acid value', '14.2 vs max 12', 'Off-spec', 'bad'], ['Lot RM-311 · toluene purity', 'Sampled', 'Testing', 'blue']]],
        ['type' => 'gauge', 'span' => 2, 'for' => 'yield', 'title' => 'Plant yield · week', 'pct' => 95, 'min' => '0%', 'center' => '95.2%', 'max' => '100%'],
        ['type' => 'alert', 'span' => 6, 'for' => 'lab yield', 'head' => 'Quality Agent', 'text' => 'Lot B-75 is off-spec on acid value and its yield is below standard. Lot held from stock and a reprocess order drafted.', 'icon' => 'shield', 'meta' => [['Quantity', '3,510 kg'], ['Reactor', 'R-102']], 'primary' => 'Approve reprocess', 'done' => 'Reprocess started'],
    ],
];
