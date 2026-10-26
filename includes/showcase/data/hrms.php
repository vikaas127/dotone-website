<?php
return [
    'h2' => ['Your people, organised.', 'Attendance without the paperwork.'],
    'features' => [
        ['att', 'Attendance that marks itself', 'Biometric and geo-fenced attendance flow straight into DotOne, shift by shift.'],
        ['leave', 'Leave and shifts in one place', 'Leave requests, approvals and shift rosters without spreadsheets or WhatsApp groups.'],
        ['team', 'Headcount at a glance', 'See who is in, who is on leave and how each department is staffed today.'],
    ],
    'cards' => [
        ['type' => 'rings', 'span' => 3, 'for' => 'att team', 'title' => 'Present today', 'items' => [['Shift A', 96, '48 of 50'], ['Shift B', 91, '41 of 45'], ['Office', 88, '22 of 25']]],
        ['type' => 'grid', 'span' => 3, 'for' => 'att leave', 'title' => 'October · R. Patil', 'cells' => 'iiiiioiiliioooiiiiiooiiiiioo', 'legend' => [['i', 'Present'], ['l', 'Leave'], ['o', 'Off']]],
        ['type' => 'alert', 'span' => 3, 'for' => 'leave', 'head' => 'Leave request', 'text' => 'Sneha K. · 14–15 Oct · Casual leave. Shift cover available.', 'icon' => 'id', 'meta' => [['Balance', '6 days'], ['Team on leave', '1 of 12']], 'primary' => 'Approve leave', 'done' => 'Approved'],
        ['type' => 'donut', 'span' => 3, 'for' => 'team', 'title' => 'Headcount', 'center' => '142', 'center_sub' => 'employees', 'segments' => [['Production', 58], ['Sales', 17], ['Stores', 13], ['Office', 12]]],
        ['type' => 'list', 'span' => 6, 'for' => 'att', 'title' => 'Exceptions today', 'rows' => [['3 late check-ins · Shift A', '', 'Review', 'warn'], ['2 missed punches · Plant 2', '', 'Regularise', 'blue'], ['1 outside geo-fence · Field team', '', 'Check', 'bad']]],
    ],
];
