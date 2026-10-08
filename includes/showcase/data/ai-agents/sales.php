<?php
return [
    'label' => 'Watch the agent work',
    'h2' => ['It watches every order.', 'You keep customers happy.'],
    'features' => [
        ['risk', 'Spots orders at risk', 'Flags orders that may miss dispatch because of stock or production delays.'],
        ['money', 'Follows the money', 'Reads invoices and payments due, and reminds your team who to call.'],
        ['draft', 'Drafts quotes and orders', 'Prepares draft quotations and orders for your team to check and send.'],
    ],
    'cards' => [
        ['type' => 'alert', 'span' => 3, 'for' => 'risk', 'head' => 'SO-1044 may miss dispatch', 'text' => 'Printing is 40% behind plan. Customer: Om Industries.', 'icon' => 'trend', 'meta' => [['Due', '12 Oct'], ['Value', '₹6.3 L']], 'primary' => 'Notify sales head', 'done' => 'Alert sent'],
        ['type' => 'list', 'span' => 3, 'for' => 'risk', 'title' => 'Orders to watch', 'rows' => [['SO-1044 · Om Industries', '', 'At risk', 'bad'], ['SO-1045 · Metro Pipes', '', 'Awaiting stock', 'warn'], ['SO-1046 · Apex Agro', '', 'On track', 'ok']]],
        ['type' => 'bars', 'span' => 3, 'for' => 'money', 'title' => 'Payments due this week', 'rows' => [['Metro Pipes', 78, null, 'warn', '₹3.1 L'], ['Apex Agro', 60, null, '', '₹2.4 L'], ['Nova Plast', 40, null, '', '₹1.6 L']]],
        ['type' => 'steps', 'span' => 3, 'for' => 'draft', 'title' => 'Draft quotation', 'steps' => [['Read enquiry', 'Shree Polymers, 8,000 pcs', 'done'], ['Priced from last order', '₹6.10 per pc', 'done'], ['Draft ready', 'QT-2210', 'now'], ['Sales rep sends', '', 'todo']]],
    ],
];
