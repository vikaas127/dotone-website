<?php
// Finance feature stories. All names and numbers are demo data.
return [
    'label' => 'Money in and out',
    'h2' => ['Know where the money is,', 'before the books close'],
    'intro' => 'Receivables, payables, cash flow and budgets, built from the invoices, bills and receipts your teams already save.',
    'cards' => [
        [
            'size' => 'lg',
            'title' => 'Receivables by customer',
            'text' => 'See what each customer owes and how long it has been due, updated as receipts are recorded.',
            'mock' => [
                'type' => 'radar',
                'rings' => ['', '', ''],
                'people' => [['MI', 'Mehta Ind.', '₹4.2L, 75 days', 'warn'], ['GP', 'Gupta Plastics', '₹1.8L, 20 days', 'ok'], ['RP', 'Rao Polymers', '₹2.6L, 48 days', 'warn']],
                'screen' => 'Receivables',
                'note' => 'Receipt recorded: Gupta Plastics, ₹1,80,000',
                'note_sub' => '10:24 AM',
                'icon' => 'rupee',
            ],
        ],
        [
            'size' => 'lg',
            'tone' => 'soft',
            'title' => 'Cash flow for the weeks ahead',
            'text' => 'Money due in and going out by week, from open invoices, purchase bills and committed purchase orders.',
            'mock' => ['type' => 'table', 'cols' => ['Week of', 'Money in', 'Money out'], 'rows' => [['17 Nov', '₹8.4L', '₹5.1L'], ['24 Nov', '₹6.2L', '₹7.3L'], ['1 Dec', '₹9.0L', '₹4.8L']]],
        ],
        [
            'size' => 'sm',
            'title' => 'Budgets vs actual',
            'text' => 'Set a budget by department or expense head and compare it with spend as it is recorded.',
            'mock' => [
                'type' => 'phone',
                'screen' => 'Budget: Maintenance',
                'rows' => [['Department', 'Plant 1', false], ['Budget, Q3', '₹6,00,000', false], ['Actual', '₹6,48,000', true], ['Variance', '₹48,000 over', false]],
                'alert' => 'Maintenance spend at Plant 1 is 8% above budget this quarter.',
            ],
        ],
        [
            'size' => 'sm',
            'tone' => 'blue',
            'title' => 'Overdue and due soon',
            'text' => 'Overdue customers and upcoming vendor payments are flagged, so follow-ups happen on time.',
            'mock' => ['type' => 'notify', 'icon' => 'bell', 'notes' => [['Mehta Industries, 75 days overdue', 'Reminder drafted for review'], ['Vendor payment due Friday', 'ABC Industries, ₹1,84,000']]],
        ],
        [
            'size' => 'sm',
            'title' => 'GST summary',
            'text' => 'Output and input GST by rate from your invoices and bills, ready for your accountant.',
            'mock' => ['type' => 'table', 'cols' => ['Rate', 'Output', 'Input'], 'rows' => [['18%', '₹4,86,000', '₹3,12,000'], ['12%', '₹64,800', '₹41,200'], ['5%', '₹9,600', '₹12,400']]],
        ],
    ],
    'split' => [
        'label' => 'One invoice',
        'h2' => ['Follow an invoice', 'until it is paid'],
        'items' => [
            [
                'title' => 'Invoice saved',
                'text' => 'A sales invoice saved in its module adds to the customer’s outstanding straight away.',
                'screen' => ['type' => 'form', 'title' => 'Invoice INV-874', 'fields' => [['Customer', 'Rao Polymers'], ['Amount', '₹2,60,000'], ['Due', '30 days, 22 Sep']], 'toast' => 'Added to receivables for Rao Polymers.'],
            ],
            [
                'title' => 'Overdue flagged',
                'text' => 'Once the due date passes, the invoice moves into the right ageing bucket and is flagged.',
                'screen' => ['type' => 'form', 'title' => 'Receivables ageing', 'fields' => [['Customer', 'Rao Polymers'], ['Invoice', 'INV-874, ₹2,60,000'], ['Bucket', '31 to 60 days']], 'toast' => 'Flagged as overdue for follow-up.'],
            ],
            [
                'title' => 'Reminder sent',
                'text' => 'The Finance AI Agent drafts a payment reminder, and your team reviews it and sends it.',
                'screen' => ['type' => 'form', 'dark' => true, 'done' => 'Reminder sent', 'title' => 'Payment reminder', 'fields' => [['Customer', 'Rao Polymers'], ['Overdue', '₹2,60,000, 48 days'], ['Reviewed by', 'Kavita J., accounts']]],
            ],
        ],
    ],
    'cta_chart' => [
        'title' => 'Collections',
        'sub' => 'Receipts against invoices by timing, last 9 months',
        'kpis' => [['Collected', '₹2.1 Cr', '9%'], ['Paid within terms', '84%', '5 pts'], ['Bills paid on time', '96%', '2 pts']],
        'legend' => ['Within terms', 'Up to 30 days late', 'Over 30 days late'],
        'bars' => [['Jan', 34, 14, 10], ['Feb', 36, 14, 9], ['Mar', 40, 15, 9], ['Apr', 38, 13, 8], ['May', 42, 14, 8], ['Jun', 45, 14, 7], ['Jul', 48, 13, 7], ['Aug', 50, 13, 6], ['Sep', 54, 12, 6]],
    ],
];
