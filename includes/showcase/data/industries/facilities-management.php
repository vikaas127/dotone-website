<?php
return [
    'h2' => ['Every site staffed.', 'Every bill raised.'],
    'features' => [
        ['staff', 'Staff on site today', 'Attendance by site and shift, with gaps visible before the shift starts.'],
        ['store', 'Consumables by site', 'What each site has drawn from the store this month.'],
        ['bill', 'Tenant billing and dues', 'Monthly invoices and what is still to be collected.'],
    ],
    'cards' => [
        ['type' => 'rings', 'span' => 3, 'for' => 'staff', 'title' => 'Present · morning shift', 'items' => [['Phoenix Mall', 94, '118 of 126'], ['Tech Park', 87, '61 of 70'], ['Hospital', 97, '38 of 39']]],
        ['type' => 'list', 'span' => 3, 'for' => 'staff', 'title' => 'Exceptions today', 'rows' => [['4 no-shows · Tech Park security', '', 'Reliever', 'bad'], ['6 late punches · Mall housekeeping', '', 'Review', 'warn'], ['2 outside geo-fence · Hospital', '', 'Check', 'blue']]],
        ['type' => 'bars', 'span' => 3, 'for' => 'store', 'title' => 'Consumables vs monthly budget', 'rows' => [['Phoenix Mall', 81, 75, 'warn', '₹2.4 L'], ['Tech Park', 62, 75, 'ok', '₹1.1 L'], ['Hospital', 70, 75, 'ok', '₹86,000']]],
        ['type' => 'kpi', 'span' => 3, 'for' => 'bill', 'title' => 'Billed this month', 'prefix' => '₹', 'value' => 1.86, 'dec' => 2, 'suffix' => ' Cr', 'delta' => '▲ 4%', 'tone' => 'up', 'sub' => 'Collected: ₹1.12 Cr · 214 tenants', 'spark' => [58, 60, 61, 63, 62, 66, 68, 70]],
        ['type' => 'alert', 'span' => 6, 'for' => 'staff bill', 'head' => 'HR Agent', 'text' => '4 security guards did not report at Tech Park. Two relievers from the Mall roster are free this shift. Reassignment drafted.', 'icon' => 'id', 'meta' => [['Shift', '8 am – 8 pm'], ['Relievers', 'R. Yadav, S. More']], 'primary' => 'Approve reassignment', 'done' => 'Reassigned'],
    ],
];
