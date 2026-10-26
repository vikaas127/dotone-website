<?php
return [
    'h2' => ['See why a number moved.', 'Not just that it did.'],
    'features' => [
        ['trend', 'Trends over time', 'Follow sales, margins and stock value week by week, and see where the line turned.'],
        ['compare', 'Compare plants and periods', 'Put two plants, or this quarter and last, side by side on the same measures.'],
        ['drill', 'Drill into the detail', 'Open a total to find the customers, items or orders behind the change.'],
    ],
    'cards' => [
        ['type' => 'kpi', 'span' => 3, 'for' => 'trend', 'title' => 'Sales · last 12 weeks', 'prefix' => '₹', 'value' => 3.42, 'dec' => 2, 'suffix' => ' Cr', 'delta' => '▲ 8%', 'tone' => 'up', 'sub' => 'vs previous 12 weeks', 'spark' => [52, 55, 50, 58, 61, 57, 63, 66, 62, 70, 72, 76]],
        ['type' => 'table', 'span' => 3, 'for' => 'compare', 'title' => 'Plant 1 vs Plant 2', 'note' => 'this quarter', 'cols' => ['Plant 1', 'Plant 2'], 'rows' => [
            ['Output (t)', [['412', '▲ 5%', 'up'], ['286', '▼ 3%', 'down']]],
            ['On-time dispatch', [['94%', '', ''], ['81%', '▼', 'down']]],
            ['Rejection', [['1.8%', '', ''], ['3.2%', '▲', 'down']]],
        ]],
        ['type' => 'bars', 'span' => 4, 'for' => 'compare trend', 'title' => 'Sales by product group', 'note' => 'marker = last quarter', 'rows' => [['PVC pipes', 78, 70, 'ok', '₹1.4 Cr'], ['HDPE containers', 54, 62, 'warn', '₹96 L'], ['Packaging film', 46, 44, 'ok', '₹72 L'], ['Masterbatch', 22, 20, 'ok', '₹30 L']]],
        ['type' => 'kpi', 'span' => 2, 'for' => 'trend', 'title' => 'Gross margin', 'value' => 21.4, 'dec' => 1, 'suffix' => '%', 'delta' => '▼ 1.2 pts', 'tone' => 'down', 'sub' => 'This quarter', 'spark' => [74, 72, 73, 70, 68, 69, 66, 64]],
        ['type' => 'list', 'span' => 6, 'for' => 'drill', 'title' => 'Behind the dip in HDPE containers', 'note' => 'drill-down', 'rows' => [['Om Industries', '− ₹9.6 L', 'Fewer orders', 'warn'], ['Shree Polymers', '− ₹4.1 L', 'Lower price', 'warn'], ['Nova Plast', '+ ₹2.2 L', 'New item', 'ok']]],
    ],
];
