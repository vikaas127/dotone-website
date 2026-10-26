<?php
return [
    'label' => 'Watch the agent work',
    'h2' => ['It checks attendance.', 'Payroll runs clean.'],
    'features' => [
        ['attend', 'Flags attendance exceptions', 'Finds late marks, missed punches and check-ins outside the geo-fence each day.'],
        ['leave', 'Spots leave clashes', 'Checks leave requests against shift cover and alerts the supervisor before a shift runs short.'],
        ['payroll', 'Pre-checks payroll', 'Lists missing attendance and overtime spikes before the monthly run so HR can fix them.'],
    ],
    'cards' => [
        ['type' => 'grid', 'span' => 3, 'for' => 'attend leave', 'title' => 'Shift B · Extruder line', 'note' => 'This week', 'cols' => 7, 'cells' => 'iiiiioo' . 'iixiioo' . 'iilliio' . 'iiiixoo', 'legend' => [['i', 'Present'], ['l', 'Leave'], ['x', 'Absent'], ['o', 'Off']]],
        ['type' => 'list', 'span' => 3, 'for' => 'attend', 'title' => 'Today\'s exceptions', 'rows' => [['R. Patil · missed out-punch', '', 'Missed punch', 'warn'], ['S. Khan · in at 9:42', '', 'Late', 'warn'], ['A. Yadav · checked in 2 km away', '', 'Outside geo-fence', 'bad']]],
        ['type' => 'alert', 'span' => 3, 'for' => 'leave', 'head' => 'Leave clash on 16 Oct', 'text' => 'Two operators on leave leaves Shift B one short.', 'icon' => 'id', 'meta' => [['Extruder 1', 'Shift B'], ['Cover needed', '1 operator']], 'ghost' => 'View roster', 'primary' => 'Notify supervisor', 'done' => 'Supervisor notified'],
        ['type' => 'steps', 'span' => 3, 'for' => 'payroll', 'title' => 'Payroll pre-check · Sept', 'steps' => [['Read attendance', '186 employees', 'done'], ['Missing days found', '7 employees', 'done'], ['Overtime spikes', '3 employees', 'done'], ['HR to review', 'Before 28 Sept', 'now']]],
    ],
];
