<?php
return [
    'h2' => ['Every order,', 'from quote to cash.'],
    'features' => [
        ['flow', 'Quote, order, invoice, dispatch', 'One flow from quotation to GST invoice and dispatch, so nobody re-types an order.'],
        ['status', 'Know where every order stands', 'See which orders are waiting on stock, production or dispatch before a customer calls.'],
        ['money', 'Revenue and collections', 'Booked, invoiced and collected amounts side by side, by customer and salesperson.'],
    ],
    'cards' => [
        ['type' => 'steps', 'span' => 3, 'for' => 'flow status', 'title' => 'Order SO-1044 · Om Industries', 'steps' => [['Quotation sent', '2 Oct', 'done'], ['Sales order', '4 Oct', 'done'], ['In production', 'Job JC-222, 60% done', 'now'], ['GST invoice', 'On dispatch', 'todo'], ['Dispatch', 'Planned 12 Oct', 'todo']]],
        ['type' => 'funnel', 'span' => 3, 'for' => 'flow', 'title' => 'This month', 'steps' => [['Quotations', 186, 100], ['Orders', 112, 74], ['Invoiced', 96, 58], ['Paid', 71, 44]]],
        ['type' => 'list', 'span' => 4, 'for' => 'status', 'title' => 'Open orders', 'rows' => [['Shree Polymers · SO-1042', '₹4.8 L', 'Dispatched', 'ok'], ['Kiran Packaging · SO-1043', '₹2.1 L', 'Invoiced', 'blue'], ['Om Industries · SO-1044', '₹6.3 L', 'In production', 'warn'], ['Metro Pipes · SO-1045', '₹1.7 L', 'Awaiting stock', 'bad']]],
        ['type' => 'kpi', 'span' => 2, 'for' => 'money', 'title' => 'Booked this month', 'prefix' => '₹', 'value' => 62.4, 'dec' => 1, 'suffix' => ' L', 'delta' => '▲ 9%', 'sub' => 'Collected: ₹41.8 L', 'spark' => [40, 46, 52, 48, 60, 66, 72, 80]],
        ['type' => 'bars', 'span' => 6, 'for' => 'money', 'title' => 'Sales by salesperson', 'note' => 'vs monthly target', 'rows' => [['Rahul', 88, 80, '', '₹18.2 L'], ['Priya', 72, 80, '', '₹15.0 L'], ['Amit', 64, 70, '', '₹13.1 L'], ['Neha', 93, 85, '', '₹16.1 L']]],
    ],
];
