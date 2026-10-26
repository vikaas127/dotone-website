<?php
// CRM feature stories. All names and numbers are demo data.
return [
    'label' => 'How it feels to use',
    'h2' => ['Every lead, every quote,', 'every follow-up'],
    'intro' => 'Your sales team works from one pipeline on the web and on the phone, linked to orders and invoices.',
    'cards' => [
        [
            'size' => 'lg',
            'title' => 'Leads from every channel',
            'text' => 'Website, WhatsApp, calls, distributors and field visits land in one structured pipeline.',
            'mock' => [
                'type' => 'radar',
                'rings' => ['', '', ''],
                'people' => [['W', 'Website', '3 new today', 'ok'], ['WA', 'WhatsApp', '5 new today', 'ok'], ['F', 'Field visit', '2 new today', 'ok']],
                'screen' => 'Leads',
                'note' => 'New lead from WhatsApp: Gupta Plastics',
                'note_sub' => 'Assigned to you',
                'icon' => 'users',
            ],
        ],
        [
            'size' => 'lg',
            'tone' => 'soft',
            'title' => 'Quotations with pricing control',
            'text' => 'Quotes follow your pricing rules. A discount above someone’s limit goes for approval first.',
            'mock' => [
                'type' => 'phone',
                'screen' => 'Quotation Q-1042',
                'rows' => [['Customer', 'Gupta Plastics', false], ['HDPE granules, 2,000 kg', '₹2,08,000', false], ['Discount', '12%', true], ['Your limit', '8%', false]],
                'alert' => 'Discount is above your limit. Sent to the sales head for approval.',
            ],
        ],
        [
            'size' => 'sm',
            'title' => 'Field visits on the record',
            'text' => 'GPS visit logs from salespeople on the road appear in the same customer record.',
            'mock' => ['type' => 'route', 'stats' => [['Visits this week', '4'], ['Last visit', 'Tuesday']]],
        ],
        [
            'size' => 'sm',
            'tone' => 'blue',
            'title' => 'Follow-up reminders',
            'text' => 'Reminders and tasks keep every conversation moving until the customer decides.',
            'mock' => [
                'type' => 'notify',
                'icon' => 'bell',
                'notes' => [['Follow-up due at 3:00 PM', 'Mehta Industries'], ['Quote viewed by customer', 'Gupta Plastics']],
            ],
        ],
        [
            'size' => 'sm',
            'title' => 'Pipeline by stage',
            'text' => 'Deal value and stage for every opportunity, so forecasts come from real deals.',
            'mock' => [
                'type' => 'table',
                'cols' => ['Stage', 'Deals', 'Value'],
                'rows' => [['Qualified', '18', '₹42 L'], ['Quoted', '11', '₹27 L'], ['Negotiation', '6', '₹15 L']],
            ],
        ],
    ],
    'split' => [
        'label' => 'On the move',
        'h2' => ['Your CRM,', 'in every salesperson’s pocket'],
        'items' => [
            [
                'title' => 'Customers on today’s route',
                'text' => 'Salespeople see the customers they plan to visit, and every visit is logged against the customer record.',
                'side' => [['Lead', 'Gupta Plastics', 'Qualified, 12 min away'], ['Customer', 'Mehta Industries', 'Quote sent, 18 min away'], ['Lead', 'Rao Polymers', 'New, 25 min away']],
                'screen' => ['type' => 'nearby', 'title' => 'Today’s visits', 'pins' => [['Gupta Plastics', '12 min away'], ['Mehta Industries', '18 min away']], 'next' => ['Next: Gupta Plastics', 'Discuss the revised quotation'], 'button' => 'Navigate'],
            ],
            [
                'title' => 'Capture a lead on the spot',
                'text' => 'A lead met at a site or a trade fair goes into the pipeline in seconds, with its source.',
                'screen' => ['type' => 'form', 'title' => 'New lead', 'fields' => [['Company', 'Rao Polymers'], ['Source', 'Trade fair'], ['Stage', 'New']], 'toast' => 'Lead added and assigned to you.'],
            ],
            [
                'title' => 'Meeting notes on the record',
                'text' => 'Notes and the next step are saved to the customer, so anyone can pick up the conversation.',
                'screen' => ['type' => 'form', 'dark' => true, 'done' => 'Meeting completed', 'title' => 'Meeting notes', 'fields' => [['Customer', 'Gupta Plastics'], ['Notes', 'Agreed on 8% discount, needs approval'], ['Next step', 'Send revised quote today']]],
            ],
        ],
    ],
    'cta_chart' => [
        'title' => 'Pipeline',
        'sub' => 'Won deals by source, last 9 months',
        'kpis' => [['Won value', '₹1.8 Cr', '14%'], ['Win rate', '27%', '4 pts'], ['Open deals', '96', '8%']],
        'legend' => ['Field sales', 'WhatsApp and calls', 'Website'],
        'bars' => [['Jan', 30, 22, 14], ['Feb', 34, 24, 16], ['Mar', 40, 28, 18], ['Apr', 36, 26, 16], ['May', 44, 30, 20], ['Jun', 48, 32, 22], ['Jul', 54, 34, 24], ['Aug', 58, 36, 26], ['Sep', 62, 40, 28]],
    ],
];
