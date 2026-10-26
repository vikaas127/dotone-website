<?php
// Field sales feature stories. All names, places and numbers are demo data.
return [
    'label' => 'In the field',
    'h2' => ['Built for a working day', 'on the road'],
    'intro' => 'Salespeople use the Android app through the day. Managers see the same day unfold on the web dashboard.',
    'cards' => [
        [
            'size' => 'lg',
            'title' => 'Live GPS tracking',
            'text' => 'See where each sales executive is, who they are visiting and how long anyone has been idle.',
            'mock' => [
                'type' => 'radar',
                'rings' => ['2 km', '5 km', '10 km'],
                'people' => [['RK', 'Ravi K.', 'On a visit', 'ok'], ['SM', 'Sunita M.', 'Idle 25 min', 'warn'], ['AS', 'Arjun S.', 'Travelling', 'ok']],
                'screen' => 'Team today',
                'note' => 'Ravi checked in at Sharma Traders',
                'note_sub' => '2 minutes ago',
                'icon' => 'pin',
            ],
        ],
        [
            'size' => 'lg',
            'tone' => 'soft',
            'title' => 'Geo-fenced attendance',
            'text' => 'Punch in and out works only inside approved offices, areas or customer sites, so attendance is real.',
            'mock' => [
                'type' => 'phone',
                'screen' => 'Punch in',
                'map' => true,
                'site' => 'Approved area',
                'me' => 'You are here',
                'alert' => 'You are 1.4 km outside the approved area. Punch-in is disabled.',
            ],
        ],
        [
            'size' => 'sm',
            'title' => 'Route history',
            'text' => 'Every executive’s route for the day, with distance covered and visits made.',
            'mock' => ['type' => 'route', 'stats' => [['Distance today', '18 km'], ['Visits', '5']]],
        ],
        [
            'size' => 'sm',
            'tone' => 'blue',
            'title' => 'Beat plans and follow-ups',
            'text' => 'Each executive starts the day with a beat plan and gets follow-ups on the phone.',
            'mock' => [
                'type' => 'notify',
                'icon' => 'bell',
                'notes' => [['Today’s beat: 6 customers', 'Sector 18 and Sector 22'], ['Follow-up due at 3:00 PM', 'Mehta Industries']],
            ],
        ],
        [
            'size' => 'sm',
            'title' => 'Manager dashboard',
            'text' => 'Attendance, visits and orders for the whole team on one live web dashboard.',
            'mock' => [
                'type' => 'table',
                'cols' => ['Executive', 'Visits', 'Orders'],
                'rows' => [['Ravi K.', '7', '4'], ['Sunita M.', '5', '2'], ['Arjun S.', '6', '3']],
            ],
        ],
    ],
    'split' => [
        'label' => 'On every visit',
        'h2' => ['From the first visit', 'to the last order'],
        'items' => [
            [
                'title' => 'Today’s beat on a map',
                'text' => 'The day’s planned customers on a map, in visiting order, with the next visit one tap away.',
                'side' => [['Visit 1', 'Sharma Traders', 'Done, 10:20 AM'], ['Visit 2', 'Mehta Industries', 'Next, 18 min away'], ['Visit 3', 'Gupta Plastics', 'Planned, 2:30 PM']],
                'screen' => ['type' => 'nearby', 'title' => 'Today’s beat', 'pins' => [['Mehta Industries', '18 min away'], ['Gupta Plastics', '32 min away']], 'next' => ['Next: Mehta Industries', 'Sector 22, planned for 12:00 PM'], 'button' => 'Check in'],
            ],
            [
                'title' => 'Works without signal',
                'text' => 'Visits and orders can be logged offline. They sync as soon as the phone is back online.',
                'screen' => ['type' => 'form', 'title' => 'New order', 'badge' => 'Offline', 'fields' => [['Customer', 'Mehta Industries'], ['Item', 'PVC pipe, 40 mm'], ['Quantity', '500 m']], 'toast' => 'Saved on the phone. It will sync when you are back online.'],
            ],
            [
                'title' => 'Visit notes and follow-ups',
                'text' => 'Notes and the next follow-up are logged before the executive leaves the customer.',
                'screen' => ['type' => 'form', 'dark' => true, 'done' => 'Visit completed', 'title' => 'Visit notes', 'fields' => [['Customer', 'Mehta Industries'], ['Notes', 'Wants a quote for 2,000 m by Friday'], ['Follow-up', 'Friday, 11:00 AM']]],
            ],
            [
                'title' => 'Expense claims',
                'text' => 'Travel and allowances are claimed from the phone and go to the manager for approval.',
                'screen' => ['type' => 'form', 'title' => 'Expense claim', 'fields' => [['Travel', 'Bike, 18 km'], ['Amount', '₹216'], ['Status', 'Sent for approval']], 'toast' => 'Your manager has been notified.'],
            ],
        ],
    ],
    'cta_chart' => [
        'title' => 'Field activity',
        'sub' => 'Visits by outcome, last 9 months',
        'kpis' => [['Visits', '1,284', '12%'], ['Orders booked', '412', '9%'], ['Visit to order', '32%', '3 pts']],
        'legend' => ['Order booked', 'Follow-up', 'No order'],
        'bars' => [['Jan', 30, 40, 50], ['Feb', 34, 42, 46], ['Mar', 40, 44, 48], ['Apr', 36, 40, 44], ['May', 46, 46, 42], ['Jun', 50, 48, 44], ['Jul', 56, 50, 40], ['Aug', 60, 52, 42], ['Sep', 64, 54, 40]],
    ],
];
