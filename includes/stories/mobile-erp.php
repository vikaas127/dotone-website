<?php
// Mobile ERP split story. All names and numbers are demo data.
return [
    'split' => [
        'label' => 'A day on the app',
        'h2' => ['The ERP,', 'wherever the work happens'],
        'items' => [
            [
                'title' => 'Attendance from the phone',
                'text' => 'Staff punch in from their phone, with geo-fencing where you need it. It flows into HRMS and payroll.',
                'screen' => ['type' => 'form', 'title' => 'Punch in', 'fields' => [['Location', 'Plant 2, main gate'], ['Time', '09:02 AM'], ['Area check', 'Inside approved area']], 'toast' => 'Attendance marked for today.'],
            ],
            [
                'title' => 'Orders during the visit',
                'text' => 'Sales staff check in with GPS and record the order while they are with the customer.',
                'side' => [['Visit 1', 'Sharma Traders', 'Order booked'], ['Visit 2', 'Mehta Industries', 'Next, 18 min away']],
                'screen' => ['type' => 'nearby', 'title' => 'Today’s visits', 'pins' => [['Mehta Industries', '18 min away'], ['Gupta Plastics', '32 min away']], 'next' => ['Next: Mehta Industries', 'Sector 22, planned for 12:00 PM'], 'button' => 'Check in'],
            ],
            [
                'title' => 'Approvals on the go',
                'text' => 'Managers approve purchase orders, quotations and leave from the phone, wherever they are.',
                'screen' => ['type' => 'form', 'dark' => true, 'done' => 'Approved', 'title' => 'Purchase order PO-2231', 'fields' => [['Vendor', 'ABC Industries'], ['Amount', '₹1,84,000'], ['Requested by', 'Stores team']]],
            ],
        ],
    ],
    'cta_chart' => [
        'title' => 'Done on the app',
        'sub' => 'Actions taken from phones, last 9 months',
        'kpis' => [['Approvals', '2,140', '18%'], ['Orders', '612', '11%'], ['Punch-ins', '9,830', '6%']],
        'legend' => ['Punch-ins', 'Orders', 'Approvals'],
        'bars' => [['Jan', 50, 16, 20], ['Feb', 52, 18, 22], ['Mar', 54, 20, 26], ['Apr', 53, 19, 24], ['May', 56, 22, 28], ['Jun', 57, 24, 30], ['Jul', 58, 25, 33], ['Aug', 60, 27, 35], ['Sep', 61, 29, 38]],
    ],
];
