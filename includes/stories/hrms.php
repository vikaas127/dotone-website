<?php
// HRMS feature stories. All names and numbers are demo data.
return [
    'label' => 'Day to day',
    'h2' => ['HR that runs', 'without the paperwork'],
    'intro' => 'Attendance, shifts, leave and hiring in one place, with the hand-off to payroll already done.',
    'cards' => [
        [
            'size' => 'lg',
            'title' => 'Attendance as it happens',
            'text' => 'Biometric punches arrive through the day, so you can see who is in at every site.',
            'mock' => [
                'type' => 'radar',
                'rings' => ['', '', ''],
                'people' => [['P1', 'Plant 1', '212 of 230 in', 'ok'], ['WH', 'Warehouse', '46 of 48 in', 'ok'], ['OF', 'Office', '31 of 35 in', 'warn']],
                'screen' => 'Attendance today',
                'note' => 'Biometric punch: Meena R. at Plant 1',
                'note_sub' => '08:58 AM',
                'icon' => 'id',
            ],
        ],
        [
            'size' => 'lg',
            'tone' => 'soft',
            'title' => 'Leave with the right approvals',
            'text' => 'Leave follows your policy and goes to the right manager, with clashes flagged before approval.',
            'mock' => [
                'type' => 'phone',
                'screen' => 'Leave request',
                'rows' => [['Employee', 'Arjun S.', false], ['Dates', '14 to 16 Nov', false], ['Balance', '6 days', false], ['Shift B', '2 others on leave', true]],
                'alert' => 'Two others in Shift B are on leave. Sent to the plant head to decide.',
            ],
        ],
        [
            'size' => 'sm',
            'title' => 'Shifts and overtime',
            'text' => 'Shift and overtime rules per team, so hours are counted the same way every month.',
            'mock' => ['type' => 'table', 'cols' => ['Shift', 'Staff', 'OT hours'], 'rows' => [['A', '82', '14'], ['B', '76', '22'], ['C', '64', '9']]],
        ],
        [
            'size' => 'sm',
            'tone' => 'blue',
            'title' => 'Hiring and onboarding',
            'text' => 'Track candidates and interviews, then onboard new joiners with a structured handover.',
            'mock' => ['type' => 'notify', 'icon' => 'users', 'notes' => [['Interview at 11:00 AM', 'Production supervisor, round 2'], ['Offer accepted', 'Joining on 1 December']]],
        ],
        [
            'size' => 'sm',
            'title' => 'Performance',
            'text' => 'Goals, KPIs and appraisal cycles, with manager feedback on record.',
            'mock' => ['type' => 'table', 'cols' => ['Employee', 'Goals met', 'Rating'], 'rows' => [['Meena R.', '5 of 6', '4.5'], ['Arjun S.', '4 of 6', '4.0'], ['Ravi K.', '6 of 6', '4.8']]],
        ],
    ],
    'split' => [
        'label' => 'On the phone',
        'h2' => ['Self-service', 'for every employee'],
        'items' => [
            [
                'title' => 'Punch in',
                'text' => 'Staff mark attendance from the phone, with geo-fencing where you need it.',
                'screen' => ['type' => 'form', 'title' => 'Punch in', 'fields' => [['Location', 'Plant 1, main gate'], ['Shift', 'A, 09:00 to 17:30'], ['Time', '08:58 AM']], 'toast' => 'Attendance marked for today.'],
            ],
            [
                'title' => 'Apply for leave',
                'text' => 'Employees see their balance and apply. The request goes to the right manager.',
                'screen' => ['type' => 'form', 'title' => 'Apply for leave', 'fields' => [['Type', 'Casual leave'], ['Dates', '14 to 16 Nov'], ['Balance after', '3 days']], 'toast' => 'Sent to your manager for approval.'],
            ],
            [
                'title' => 'Approve on the go',
                'text' => 'Managers approve leave and overtime from the phone, and it flows into payroll.',
                'screen' => ['type' => 'form', 'dark' => true, 'done' => 'Leave approved', 'title' => 'Leave request', 'fields' => [['Employee', 'Arjun S.'], ['Dates', '14 to 16 Nov'], ['Payroll', 'Updated for November']]],
            ],
        ],
    ],
    'cta_chart' => [
        'title' => 'Attendance',
        'sub' => 'Staff present by department, last 9 months',
        'kpis' => [['Attendance', '94%', '2 pts'], ['Overtime hours', '1,240', '5%'], ['Leave taken', '312', '3%']],
        'legend' => ['Production', 'Stores and dispatch', 'Office'],
        'bars' => [['Jan', 50, 16, 12], ['Feb', 52, 16, 12], ['Mar', 54, 17, 13], ['Apr', 51, 16, 12], ['May', 55, 18, 13], ['Jun', 56, 18, 13], ['Jul', 57, 19, 14], ['Aug', 58, 19, 14], ['Sep', 60, 20, 14]],
    ],
];
