<?php
return [
    'h2' => ['AI that works on your data.', 'You stay in control.'],
    'features' => [
        ['watch', 'Agents watch the numbers', 'Inventory, sales, CRM and reporting agents read your live ERP data and spot what needs attention.'],
        ['draft', 'They draft, you decide', 'An agent prepares the indent, reminder or report. Nothing important moves without your approval.'],
        ['ask', 'Ask in plain language', 'Ask a question about your business and get the answer with the numbers behind it.'],
    ],
    'cards' => [
        ['type' => 'list', 'span' => 3, 'tall' => true, 'for' => 'watch', 'title' => 'Agent activity', 'note' => 'last hour', 'rows' => [['4 items below reorder level', '', 'Inventory', 'blue'], ['Order SO-1044 may miss dispatch', '', 'Sales', 'warn'], ['12 leads without follow-up', '', 'CRM', 'blue'], ['Weekly MIS ready', '', 'Reporting', 'ok'], ['₹6.2 L overdue past 60 days', '', 'Finance', 'bad']]],
        ['type' => 'alert', 'span' => 3, 'for' => 'draft', 'head' => 'Inventory Agent', 'text' => 'PVC Resin Grade A: 1,240 kg left, need 2,000 kg. Indent drafted.', 'icon' => 'box', 'primary' => 'Approve', 'done' => 'Sent to purchase'],
        ['type' => 'steps', 'span' => 3, 'for' => 'draft watch', 'title' => 'How an agent works', 'steps' => [['Reads ERP data', 'Stock, POs, orders', 'done'], ['Finds the issue', 'Below reorder level', 'done'], ['Drafts the action', 'Purchase indent', 'done'], ['Waits for you', 'Approve or reject', 'now']]],
        ['type' => 'table', 'span' => 6, 'for' => 'ask', 'title' => '"Which customers are overdue more than 30 days?"', 'cols' => ['Amount', 'Days', 'Last paid'], 'rows' => [
            ['Metro Pipes', [['₹3.1 L', '', ''], ['96', '', 'down'], ['4 Jul', '', '']]],
            ['Apex Agro', [['₹2.4 L', '', ''], ['72', '', ''], ['28 Jul', '', '']]],
            ['Nova Plast', [['₹1.6 L', '', ''], ['64', '', ''], ['5 Aug', '', '']]],
        ]],
    ],
];
