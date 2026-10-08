<?php
return [
    'label' => 'Watch the agent work',
    'h2' => ['It compares the quotes.', 'You approve the PO.'],
    'features' => [
        ['compare', 'Compares every quote', 'Puts price, payment terms and delivery side by side for each approved indent.'],
        ['watch', 'Watches rates and deliveries', 'Flags rates above the last purchase and POs past their delivery date.'],
        ['draft', 'Drafts the PO for you', 'Prepares the purchase order for the chosen vendor and waits for your approval.'],
    ],
    'cards' => [
        ['type' => 'table', 'span' => 6, 'for' => 'compare', 'title' => 'PVC Resin, 5,000 kg', 'note' => 'IND-612', 'cols' => ['Shree Polymers', 'Om Industries', 'Metro Chem'], 'rows' => [
            ['Rate / kg', [['₹92.50', '', ''], ['₹90.80', '', ''], ['₹94.00', '', '']]],
            ['Terms', [['45 days', '', ''], ['15 days', '', ''], ['30 days', '', '']]],
            ['Delivery', [['5 days', '', ''], ['12 days', '', ''], ['7 days', '', '']]],
        ]],
        ['type' => 'steps', 'span' => 3, 'tall' => true, 'for' => 'compare draft', 'title' => 'Agent run · 10:30', 'steps' => [['Read approved indent', 'IND-612, PVC Resin', 'done'], ['Collected quotes', '3 vendors', 'done'], ['Checked past deliveries', 'Last 6 months', 'done'], ['Drafted PO', 'Shree Polymers', 'done'], ['Waiting for approval', 'Purchase head', 'now']]],
        ['type' => 'alert', 'span' => 3, 'for' => 'draft', 'head' => 'PO-3318 drafted', 'text' => 'Shree Polymers: best terms and on-time record.', 'icon' => 'cart', 'meta' => [['PVC Resin Grade A', '5,000 kg'], ['Value', '₹4.63 L']], 'primary' => 'Approve PO', 'done' => 'Sent to vendor'],
        ['type' => 'list', 'span' => 3, 'for' => 'watch', 'title' => 'Rates and deliveries', 'rows' => [['HDPE granules · ₹4/kg above last PO', '', 'Price up', 'warn'], ['PO-3290 · Masterbatch, 3 days late', '', 'Late', 'bad'], ['PO-3301 · Packing Film', '', 'On time', 'ok']]],
    ],
];
