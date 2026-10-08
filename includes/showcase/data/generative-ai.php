<?php
return [
    'h2' => ['Ask, and get a draft.', 'Written from your own data.'],
    'features' => [
        ['ask', 'Questions in plain language', 'Ask about sales, stock or money and get the answer with the records behind it.'],
        ['draft', 'Quotations and reminders', 'Agents draft quotations and payment reminders. A person reviews them before they go out.'],
        ['report', 'Reports and summaries', 'Weekly MIS, customer summaries and stock notes written from live ERP data.'],
    ],
    'cards' => [
        ['type' => 'table', 'span' => 6, 'for' => 'ask', 'title' => '"Which items have the highest stock value?"', 'cols' => ['Qty', 'Value', 'Warehouse'], 'rows' => [
            ['PVC Resin Grade A', [['4,200 kg', '', ''], ['₹4.6 L', '', ''], ['Main store', '', '']]],
            ['HDPE Granules', [['2,750 kg', '', ''], ['₹3.3 L', '', ''], ['Plant 2', '', '']]],
            ['Finished pipes 110 mm', [['640 nos', '', ''], ['₹2.9 L', '', ''], ['FG warehouse', '', '']]],
        ]],
        ['type' => 'alert', 'span' => 3, 'for' => 'draft', 'head' => 'Sales Agent', 'text' => 'Quotation drafted for Shree Polymers from their last order and current prices.', 'icon' => 'doc', 'meta' => [['HDPE Granules', '2,000 kg'], ['Masterbatch Blue', '100 kg']], 'ghost' => 'Edit', 'primary' => 'Review and send', 'done' => 'Sent'],
        ['type' => 'list', 'span' => 3, 'for' => 'report', 'title' => 'Summary · Om Industries', 'rows' => [['Sales this quarter', '₹38.4 L'], ['Open orders', '2'], ['Overdue', '₹1.2 L'], ['Last visit', '2 Oct']]],
        ['type' => 'steps', 'span' => 3, 'for' => 'report', 'title' => 'Weekly MIS draft', 'steps' => [['Sales and orders', 'Read from sales', 'done'], ['Stock and production', 'Read from stores', 'done'], ['Summary written', '6 key changes', 'done'], ['Review', 'Before sharing', 'now']]],
        ['type' => 'list', 'span' => 3, 'for' => 'draft', 'title' => 'Reminders drafted', 'rows' => [['Metro Pipes · payment', '₹3.1 L', 'Draft', 'warn'], ['Apex Agro · payment', '₹2.4 L', 'Draft', 'warn'], ['Nova Plast · quotation', 'QT-0571', 'Draft', 'blue']]],
    ],
];
