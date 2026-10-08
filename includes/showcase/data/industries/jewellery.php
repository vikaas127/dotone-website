<?php
return [
    'h2' => ['Every piece, every gram.', 'Wherever it is.'],
    'features' => [
        ['stock', 'Stock by purity and weight', 'Pieces and metal by purity and net weight, in the vault and the showroom.'],
        ['karigar', 'Metal with karigars', 'What each karigar holds, and the loss against the allowance.'],
        ['approval', 'Pieces on approval', 'What is out with customers or branches, and since when.'],
    ],
    'cards' => [
        ['type' => 'table', 'span' => 4, 'for' => 'stock', 'title' => 'Stock by purity', 'cols' => ['Pieces', 'Net wt'], 'rows' => [['22K gold', [['1,284', '', ''], ['8.42 kg', '▲ 0.3', 'up']]], ['18K gold', [['612', '', ''], ['2.17 kg', '', '']]], ['Silver 925', [['2,940', '', ''], ['46.8 kg', '▼ 1.1', 'down']]]]],
        ['type' => 'kpi', 'span' => 2, 'for' => 'stock', 'title' => 'Fine gold in stock', 'value' => 9.36, 'dec' => 2, 'suffix' => ' kg', 'sub' => 'Vault + 2 showrooms', 'spark' => [70, 72, 69, 74, 73, 71, 75, 74]],
        ['type' => 'bars', 'span' => 3, 'for' => 'karigar', 'title' => 'Loss vs allowance', 'rows' => [['Ramesh · bangles', 62, 70, 'ok', '1.24%'], ['Salim · chains', 84, 70, 'warn', '1.68%'], ['Gopal · rings', 55, 70, 'ok', '1.10%']]],
        ['type' => 'list', 'span' => 3, 'for' => 'approval', 'title' => 'Out on approval', 'rows' => [['Mehta family · necklace set', '42.6 g', '3 days', 'blue'], ['Andheri branch · 14 rings', '61.2 g', '6 days', 'warn'], ['Shah & Sons · bangles', '88.0 g', '11 days', 'bad']]],
        ['type' => 'alert', 'span' => 6, 'for' => 'karigar stock', 'head' => 'Production Agent', 'text' => 'Salim has 186.4 g of 22K gold issued against order KO-219 and has returned 142.1 g of pieces. Loss is above the allowance on two lots. Review drafted.', 'icon' => 'spark', 'meta' => [['Balance due', '41.7 g'], ['Allowance', '1.4%']], 'primary' => 'Send review', 'done' => 'Sent to owner'],
    ],
];
