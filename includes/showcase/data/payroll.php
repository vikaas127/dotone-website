<?php
return [
    'h2' => ['Payroll in one run.', 'Straight from attendance.'],
    'features' => [
        ['att', 'Attendance becomes salary', 'Days present, leave and overtime flow from HRMS into payroll. No re-typing from registers.'],
        ['stat', 'PF, ESI and TDS worked out', 'Statutory deductions calculated for every employee, with the registers you need to file.'],
        ['slip', 'Payslips for everyone', 'Generate and share payslips for the whole company in one run.'],
    ],
    'cards' => [
        ['type' => 'grid', 'span' => 3, 'for' => 'att', 'title' => 'Attendance · October', 'cells' => 'iiiiioiiiliooiiiiiooiiiiiooi', 'legend' => [['i', 'Present'], ['l', 'Leave'], ['o', 'Weekly off']]],
        ['type' => 'list', 'span' => 3, 'tall' => true, 'for' => 'stat slip', 'title' => 'Payslip · R. Patil', 'rows' => [['Basic + DA', '₹24,000'], ['HRA', '₹6,000'], ['Overtime (6 h)', '₹2,000'], ['PF', '− ₹1,800'], ['ESI', '− ₹240'], ['TDS', '− ₹1,150'], ['Net pay', '₹28,810']]],
        ['type' => 'steps', 'span' => 3, 'for' => 'att slip', 'title' => 'October payroll run', 'steps' => [['Attendance locked', '142 employees', 'done'], ['Salary calculated', 'Overtime included', 'done'], ['Approval', 'HR head', 'now'], ['Payslips shared', 'On approval', 'todo']]],
        ['type' => 'donut', 'span' => 3, 'for' => 'stat', 'title' => 'Deductions', 'center' => '₹4.6 L', 'center_sub' => 'this month', 'segments' => [['PF', 56], ['TDS', 31], ['ESI', 8], ['Other', 5]]],
        ['type' => 'kpi', 'span' => 3, 'for' => 'slip', 'title' => 'Net payroll · October', 'prefix' => '₹', 'value' => 38.4, 'dec' => 1, 'suffix' => ' L', 'delta' => '▲ 2.1%', 'tone' => 'up', 'sub' => '142 employees · paid on the 1st', 'spark' => [62, 64, 63, 66, 65, 68, 67, 70, 69, 72, 71, 74]],
    ],
];
