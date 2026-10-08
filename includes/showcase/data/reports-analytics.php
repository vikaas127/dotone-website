<?php
return [
    'h2' => ['Measure what matters.', 'Act on what changes.'],
    'features' => [
        ['live', 'Live dashboards', 'Sales, stock, production and purchase on one screen, updated the moment a transaction is saved.'],
        ['drill', 'Drill down to the detail', 'Open any total to see the plants, customers or orders behind it. No exporting to Excel to find out why.'],
        ['mis', 'MIS that builds itself', 'Monthly MIS for owners and department heads, ready on schedule without anyone compiling it.'],
    ],
    'cards' => [
        ['type' => 'gauge', 'span' => 3, 'for' => 'live mis', 'title' => 'Monthly sales target', 'pct' => 74, 'min' => '₹0', 'center' => '₹1.86 Cr of ₹2.5 Cr'],
        ['type' => 'bars', 'span' => 3, 'for' => 'live drill', 'title' => 'Output by plant', 'note' => 'vs target', 'axis' => true, 'rows' => [['Plant 1', 82, 90], ['Plant 2', 68, 75], ['Plant 3', 91, 85], ['Plant 4', 54, 70]]],
        ['type' => 'table', 'span' => 4, 'for' => 'drill mis', 'title' => 'This month vs last month', 'cols' => ['Sales', 'Purchase', 'Production'], 'rows' => [
            ['Orders', [['148', '▲ 12%', 'up'], ['96', '▲ 4%', 'up'], ['212', '▲ 9%', 'up']]],
            ['Pending', [['31', '▼ 18%', 'up'], ['14', '▲ 6%', 'down'], ['9', '▼ 25%', 'up']]],
            ['Delayed', [['6', '▲ 2', 'down'], ['3', '▼ 1', 'up'], ['4', '▲ 1', 'down']]],
        ]],
        ['type' => 'list', 'span' => 2, 'tall' => true, 'numbered' => true, 'for' => 'drill', 'title' => 'Top customers', 'rows' => [['Shree Polymers', '₹28.4 L'], ['Om Industries', '₹22.1 L'], ['Kiran Packaging', '₹18.7 L'], ['Metro Pipes', '₹15.2 L'], ['Apex Agro', '₹12.9 L'], ['Nova Plast', '₹10.4 L']]],
        ['type' => 'kpi', 'span' => 2, 'for' => 'live mis', 'title' => 'Revenue this month', 'prefix' => '₹', 'value' => 1.86, 'dec' => 2, 'suffix' => ' Cr', 'delta' => '▲ 12%', 'sub' => 'Last month: ₹1.66 Cr', 'spark' => [38, 52, 46, 60, 55, 70, 64, 78, 72, 88]],
        ['type' => 'funnel', 'span' => 2, 'for' => 'mis drill', 'title' => 'Enquiry to invoice', 'steps' => [['Enquiries', 420, 100], ['Quotations', 286, 78], ['Orders', 148, 56], ['Invoiced', 131, 44]]],
    ],
];
