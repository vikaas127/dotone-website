<?php
// Payroll feature stories. All names and numbers are demo data.
return [
    'label' => 'Month end',
    'h2' => ['Payroll that runs', 'in one go'],
    'intro' => 'Salaries worked out from attendance, PF, ESIC, PT and TDS applied, and payslips for everyone in one run.',
    'cards' => [
        [
            'size' => 'lg',
            'title' => 'Salary from attendance',
            'text' => 'Paid days, overtime and leave come straight from HRMS, so HR only checks and approves.',
            'mock' => [
                'type' => 'phone',
                'screen' => 'Salary, November',
                'rows' => [['Employee', 'Meena R.', false], ['Paid days', '26 of 30', false], ['Overtime', '14 hours', false], ['Net pay change', '+₹4,200', true]],
                'alert' => 'Net pay is up from October because of overtime. Check before approval.',
            ],
        ],
        [
            'size' => 'lg',
            'tone' => 'soft',
            'title' => 'Employees in several states',
            'text' => 'Each site follows the labour law and Professional Tax rules of its own state.',
            'mock' => [
                'type' => 'radar',
                'rings' => ['', '', ''],
                'people' => [['MH', 'Pune plant', '182 staff', 'ok'], ['KA', 'Bengaluru', '41 staff', 'ok'], ['GJ', 'Vapi plant', '96 staff', 'ok']],
                'screen' => 'Payroll by state',
                'note' => 'Gujarat PT slabs applied at Vapi',
                'note_sub' => '96 employees',
                'icon' => 'pin',
            ],
        ],
        [
            'size' => 'sm',
            'title' => 'Statutory deductions',
            'text' => 'PF, ESIC, Professional Tax and TDS are applied automatically, with reports ready for filing.',
            'mock' => ['type' => 'table', 'cols' => ['Deduction', 'Employees', 'Amount'], 'rows' => [['PF', '319', '₹4.6 L'], ['ESIC', '212', '₹0.6 L'], ['TDS', '38', '₹2.1 L']]],
        ],
        [
            'size' => 'sm',
            'tone' => 'blue',
            'title' => 'Payslips in one run',
            'text' => 'Payslips and the payroll register are generated for the whole company in one run.',
            'mock' => ['type' => 'notify', 'icon' => 'doc', 'notes' => [['Payslips generated', '319 employees, November'], ['Payroll register ready', 'Waiting for HR approval']]],
        ],
        [
            'size' => 'sm',
            'title' => 'Posted to accounts',
            'text' => 'Salary entries sync to accounts, ready for payment and filing, with no re-keying.',
            'mock' => ['type' => 'table', 'cols' => ['Entry', 'Amount', 'Status'], 'rows' => [['Net salaries', '₹37.7 L', 'Posted'], ['PF payable', '₹4.6 L', 'Posted'], ['TDS payable', '₹2.1 L', 'Posted']]],
        ],
    ],
    'split' => [
        'label' => 'One payroll run',
        'h2' => ['From attendance', 'to payslip'],
        'items' => [
            [
                'title' => 'Close attendance',
                'text' => 'Attendance, overtime and leave for the month are finalised in HRMS first.',
                'screen' => ['type' => 'form', 'title' => 'Attendance, November', 'fields' => [['Employees', '319'], ['Attendance', 'Closed in HRMS'], ['Overtime', '1,240 hours']], 'toast' => 'Ready to calculate salaries.'],
            ],
            [
                'title' => 'Calculate and deduct',
                'text' => 'Gross pay is worked out from the salary structure, then statutory deductions are applied.',
                'screen' => ['type' => 'form', 'title' => 'Payroll, November', 'fields' => [['Gross pay', '₹45.6 L'], ['PF and ESIC', '₹5.2 L'], ['PT and TDS', '₹2.7 L']], 'toast' => 'Deductions applied for 319 employees.'],
            ],
            [
                'title' => 'Approve and post',
                'text' => 'Once HR approves, payslips go out and salary entries post to accounts.',
                'screen' => ['type' => 'form', 'dark' => true, 'done' => 'Payroll approved', 'title' => 'Payroll, November', 'fields' => [['Payslips', '319 generated'], ['Net pay', '₹37.7 L'], ['Accounts', 'Salary entries posted']]],
            ],
        ],
    ],
    'cta_chart' => [
        'title' => 'Payroll',
        'sub' => 'Gross pay by department in ₹ lakh, last 9 months',
        'kpis' => [['Employees paid', '319', '6%'], ['Attendance closed on time', '98%', '3 pts'], ['Payslips issued', '2,790', '5%']],
        'legend' => ['Production', 'Stores and dispatch', 'Office'],
        'bars' => [['Jan', 26, 8, 7], ['Feb', 26, 8, 7], ['Mar', 27, 8, 7], ['Apr', 27, 9, 7], ['May', 28, 9, 7], ['Jun', 28, 9, 8], ['Jul', 29, 9, 8], ['Aug', 29, 9, 8], ['Sep', 30, 9, 8]],
    ],
];
