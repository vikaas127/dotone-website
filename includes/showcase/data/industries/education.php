<?php
return [
    'h2' => ['Staff, salaries and spend.', 'For every campus.'],
    'features' => [
        ['att', 'Staff present today', 'Teaching and support staff attendance by campus, before the first period.'],
        ['pay', 'Payroll by grade', 'Salaries and deductions for every grade, ready for approval.'],
        ['spend', 'Spend against budget', 'Purchases by campus and head, compared with the year\'s budget.'],
    ],
    'cards' => [
        ['type' => 'rings', 'span' => 3, 'for' => 'att', 'title' => 'Staff present today', 'items' => [['Senior school', 95, '62 of 65'], ['Junior school', 91, '41 of 45'], ['College', 88, '53 of 60']]],
        ['type' => 'grid', 'span' => 3, 'for' => 'att', 'title' => 'October · A. Kulkarni', 'cells' => 'iiiiiioiiiliioiiiiiioiiiiio', 'legend' => [['i', 'Present'], ['l', 'Leave'], ['o', 'Holiday']]],
        ['type' => 'steps', 'span' => 3, 'for' => 'pay', 'title' => 'October payroll · 214 staff', 'steps' => [['Attendance locked', 'All campuses', 'done'], ['Salary calculated', 'PF and TDS included', 'done'], ['Trustee approval', 'Pending', 'now'], ['Payslips shared', 'On approval', 'todo']]],
        ['type' => 'bars', 'span' => 3, 'for' => 'spend', 'title' => 'Spend vs annual budget', 'rows' => [['Lab material', 68, 58, 'warn', '₹4.1 L'], ['Stationery', 52, 58, 'ok', '₹2.6 L'], ['Maintenance', 61, 58, 'warn', '₹7.3 L'], ['Sports', 34, 58, 'ok', '₹1.2 L']]],
        ['type' => 'alert', 'span' => 6, 'for' => 'pay att', 'head' => 'HR Agent', 'text' => '3 staff at the junior school have missed punches on 4 or more days this month. Payroll is held for them until the principal regularises.', 'icon' => 'id', 'meta' => [['Campus', 'Junior school'], ['Days', '14 in total']], 'primary' => 'Send to principal', 'done' => 'Sent'],
    ],
];
