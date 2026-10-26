<?php
return [
    'h2' => ['Buy at the right price.', 'Without chasing approvals.'],
    'features' => [
        ['indent', 'From indent to purchase order', 'Indents from stores or the Inventory Agent move to RFQ, approval and PO in one trail.'],
        ['compare', 'Compare vendor quotes', 'Send one RFQ to several vendors and compare price and terms side by side.'],
        ['track', 'Track deliveries and spend', 'See pending deliveries, money committed to vendors and purchases by vendor.'],
    ],
    'cards' => [
        ['type' => 'table', 'span' => 4, 'for' => 'compare', 'title' => 'RFQ-318 · HDPE Granules, 5 t', 'cols' => ['Vendor A', 'Vendor B', 'Vendor C'], 'rows' => [
            ['Rate /kg', [['₹104', '', ''], ['₹98', 'Lowest', 'up'], ['₹101', '', '']]],
            ['Delivery', [['5 days', '', ''], ['9 days', '', ''], ['4 days', 'Fastest', 'up']]],
            ['Credit', [['30 days', '', ''], ['45 days', '', ''], ['30 days', '', '']]],
        ]],
        ['type' => 'alert', 'span' => 2, 'tall' => true, 'for' => 'indent compare', 'head' => 'PO ready for approval', 'text' => 'Vendor B, lowest landed cost.', 'icon' => 'cart', 'meta' => [['Quantity', '5,000 kg'], ['Amount', '₹4.9 L'], ['Saving vs last', '₹30,000']], 'primary' => 'Approve PO', 'done' => 'PO sent'],
        ['type' => 'steps', 'span' => 2, 'for' => 'indent', 'title' => 'Indent IND-552', 'steps' => [['Indent raised', 'Stores', 'done'], ['RFQ sent', '3 vendors', 'done'], ['Approval', 'Purchase head', 'now'], ['PO and delivery', '', 'todo']]],
        ['type' => 'kpi', 'span' => 2, 'for' => 'track', 'title' => 'Committed to vendors', 'prefix' => '₹', 'value' => 38.2, 'dec' => 1, 'suffix' => ' L', 'sub' => '14 open POs', 'spark' => [30, 42, 38, 50, 46, 58, 62, 55]],
        ['type' => 'list', 'span' => 6, 'for' => 'track', 'title' => 'Pending deliveries', 'rows' => [['PO-901 · Masterbatch Blue', 'Due today', 'On the way', 'blue'], ['PO-897 · Packing Film', 'Due 10 Oct', 'Confirmed', 'ok'], ['PO-889 · PVC Resin', '2 days late', 'Delayed', 'bad']]],
    ],
];
