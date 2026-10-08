<?php
return [
    'h2' => ['Your ERP on the phone.', 'For the field and the floor.'],
    'features' => [
        ['att', 'Attendance from the phone', 'Staff mark attendance with geo-fencing, and it flows into HRMS and payroll.'],
        ['field', 'Field visits and orders', 'Sales staff check in at the customer with GPS, log the visit and record the order.'],
        ['approve', 'Approvals and dashboards', 'Managers approve requests and check sales and stock numbers while away from the office.'],
    ],
    'cards' => [
        ['type' => 'grid', 'span' => 3, 'for' => 'att', 'title' => 'Attendance · A. Kulkarni', 'cells' => 'iiiiioiiiliooiiiiiooiiiiiooi', 'legend' => [['i', 'Present'], ['l', 'Leave'], ['o', 'Weekly off']]],
        ['type' => 'kpi', 'span' => 3, 'for' => 'att approve', 'title' => 'Checked in today', 'value' => 138, 'suffix' => ' / 142', 'sub' => '4 on leave', 'spark' => [88, 92, 90, 95, 93, 97, 96]],
        ['type' => 'list', 'span' => 3, 'for' => 'field', 'title' => 'Visits today · R. Sharma', 'rows' => [['Shree Polymers, Vapi', '10:15', 'Order taken', 'ok'], ['Om Industries, Silvassa', '12:40', 'Follow-up', 'blue'], ['Nova Plast, Daman', '15:30', 'Planned', 'grey']]],
        ['type' => 'alert', 'span' => 3, 'for' => 'approve field', 'head' => 'Approval request', 'text' => 'R. Sharma asks for 4% discount on an order from Shree Polymers.', 'icon' => 'phone', 'meta' => [['Order value', '₹3.6 L'], ['Item', 'HDPE Granules']], 'ghost' => 'Reject', 'primary' => 'Approve', 'done' => 'Approved'],
        ['type' => 'bars', 'span' => 6, 'for' => 'field approve', 'title' => 'Field orders this week', 'rows' => [['R. Sharma', 82, null, 'ok', '₹11.2 L'], ['P. Desai', 64, null, '', '₹8.7 L'], ['S. Iyer', 41, null, '', '₹5.6 L'], ['M. Khan', 18, null, 'warn', '₹2.4 L']]],
    ],
];
