<?php
// Sales feature stories. All names and numbers are demo data.
return [
    'label' => 'Quote to cash',
    'h2' => ['Every order,', 'from quote to invoice'],
    'intro' => 'Quotations, orders, dispatch and GST invoices in one flow, linked to stock and production.',
    'cards' => [
        [
            'size' => 'lg',
            'title' => 'Quotations with controls',
            'text' => 'Quotes are built from your pricing. A discount above the limit needs approval before it goes out.',
            'mock' => [
                'type' => 'phone',
                'screen' => 'Quotation Q-1051',
                'rows' => [['Customer', 'Mehta Industries', false], ['PVC pipe, 40 mm, 2,000 m', '₹3,10,000', false], ['Discount', '14%', true], ['Limit', '10%', false]],
                'alert' => 'Discount is above the limit. Sent to the sales head for approval.',
            ],
        ],
        [
            'size' => 'lg',
            'tone' => 'soft',
            'title' => 'Dispatch and delivery',
            'text' => 'Plan dispatch against the order, generate delivery challans and record proof of delivery.',
            'mock' => ['type' => 'route', 'stats' => [['Out for delivery', '6 orders'], ['Delivered today', '14']]],
        ],
        [
            'size' => 'sm',
            'title' => 'Order to invoice',
            'text' => 'An accepted quote becomes a sales order, then a GST invoice, without keying it again.',
            'mock' => ['type' => 'table', 'cols' => ['Order', 'Status', 'Invoice'], 'rows' => [['SO-1182', 'Dispatched', 'INV-882'], ['SO-1183', 'Packed', 'Pending'], ['SO-1184', 'Confirmed', 'Pending']]],
        ],
        [
            'size' => 'sm',
            'tone' => 'blue',
            'title' => 'Customer portal',
            'text' => 'Customers check their quotes and orders themselves, so fewer calls reach your team.',
            'mock' => ['type' => 'notify', 'icon' => 'users', 'notes' => [['Order SO-1182 dispatched', 'Visible to Mehta Industries'], ['Quotation Q-1051 viewed', 'Gupta Plastics']]],
        ],
        [
            'size' => 'sm',
            'title' => 'Stock check on every order',
            'text' => 'A confirmed order checks stock and can feed a production plan for the shortfall.',
            'mock' => ['type' => 'table', 'cols' => ['Item', 'Ordered', 'In stock'], 'rows' => [['PVC pipe, 40 mm', '2,000 m', '1,450 m'], ['Elbow, 40 mm', '300', '520'], ['Solvent cement', '40 L', '64 L']]],
        ],
    ],
    'split' => [
        'label' => 'One order',
        'h2' => ['Follow a sale', 'from start to finish'],
        'items' => [
            [
                'title' => 'Order confirmed',
                'text' => 'The accepted quote becomes a sales order, with stock checked straight away.',
                'screen' => ['type' => 'form', 'title' => 'Sales order SO-1184', 'fields' => [['Customer', 'Mehta Industries'], ['Value', '₹2,66,600'], ['Stock', '1,450 of 2,000 m available']], 'toast' => 'Shortfall of 550 m sent to the production plan.'],
            ],
            [
                'title' => 'Dispatched',
                'text' => 'The delivery challan is generated and dispatch is recorded against the order.',
                'screen' => ['type' => 'form', 'title' => 'Delivery challan', 'fields' => [['Order', 'SO-1184'], ['Vehicle', 'PB 10 AB 1234'], ['Dispatched', '2,000 m, 2 lots']]],
            ],
            [
                'title' => 'Invoiced',
                'text' => 'A GST invoice is raised from the order, ready for your accounts team.',
                'screen' => ['type' => 'form', 'dark' => true, 'done' => 'Invoice raised', 'title' => 'Invoice INV-891', 'fields' => [['Customer', 'Mehta Industries'], ['Taxable value', '₹2,66,600'], ['GST', '18%']]],
            ],
        ],
    ],
    'cta_chart' => [
        'title' => 'Sales',
        'sub' => 'Order value by status, last 9 months',
        'kpis' => [['Order value', '₹2.4 Cr', '10%'], ['On-time dispatch', '93%', '4 pts'], ['Quotes won', '38%', '3 pts']],
        'legend' => ['Invoiced', 'Dispatched', 'Open'],
        'bars' => [['Jan', 36, 14, 10], ['Feb', 38, 16, 12], ['Mar', 44, 16, 12], ['Apr', 40, 14, 10], ['May', 46, 18, 12], ['Jun', 50, 18, 14], ['Jul', 54, 20, 14], ['Aug', 56, 22, 16], ['Sep', 60, 22, 16]],
    ],
];
