<?php
$page = [
    'path' => '/industries/hospitality',
    'title' => 'ERP for Hotels, Restaurants and Hospitality | DotOne',
    'description' => 'Back-office ERP for hotels, resorts and restaurant groups in India: stores and purchase, recipe-based consumption, staff rosters, payroll and upkeep.',
    'breadcrumbs' => [['Industries', '/industries'], ['Hospitality', '/industries/hospitality']],
    'name' => 'Hospitality',
    'icon' => 'users',
    'h1' => 'ERP for Hotels, Restaurants and Hospitality',
    'intro' => 'DotOne runs the back office of hotels, resorts, restaurant groups and caterers: stores, purchasing, kitchen consumption, staff and payroll, maintenance and accounts. Your front-desk and billing software stays as it is.',
    'challenges' => [
        ['box', 'Perishable stock', 'Food and beverage stock spoils quickly, and wastage is found only when the food cost is calculated at month-end.'],
        ['cart', 'Many small purchases', 'Daily buying from many vendors, often in cash, with rates that change every week.'],
        ['users', 'High staff turnover', 'Rotating shifts, split duties and frequent joiners and leavers make attendance and payroll slow.'],
        ['cog', 'Upkeep across the property', 'Kitchen equipment, air conditioning, lifts and rooms all need regular maintenance.'],
    ],
    'workflow' => [
        ['Indent', 'Kitchens, housekeeping and outlets raise indents on the central store.'],
        ['Purchase', 'Purchase orders go to approved vendors, and goods are received against them.'],
        ['Issue', 'Stock is issued to each kitchen or outlet, and recipes record what each dish should consume.'],
        ['Review', 'Actual consumption is compared with the recipe standard to find wastage.'],
        ['Account', 'Vendor bills, outlet-wise costs and payroll flow to accounts.'],
    ],
    'modules' => ['inventory-management', 'purchase-management', 'hrms', 'payroll', 'maintenance-management', 'accounting'],
    'uses' => [
        ['Recipes as bills of materials', 'Each dish lists its ingredients and quantities, so consumption has a standard.'],
        ['Outlet-wise stores', 'Separate stock and consumption for each kitchen, bar, outlet or property.'],
        ['Shifts and attendance', 'Rosters and biometric attendance feeding payroll.'],
        ['Maintenance schedules', 'Preventive maintenance and work orders for equipment and rooms.'],
    ],
    'faq' => [
        ['Does DotOne replace our hotel or restaurant billing software?', 'No. DotOne covers stores, purchase, HR, payroll, maintenance and accounts. Reservations, front desk and guest billing stay in your existing software.'],
        ['Can we control food cost?', 'Yes. Recipes hold the standard quantity of each ingredient, and reports compare it with what the kitchen actually drew from stores.'],
        ['Can we manage several outlets or properties?', 'Yes. Each has its own stores, staff and costs, with reports for each one and for the group.'],
        ['Does it handle expiry dates?', 'Yes. Batch and expiry dates are recorded at receipt. See [expiry date tracking](/expiry-date-tracking-software).'],
    ],
    'cta_heading' => 'See a kitchen store in DotOne',
    'cta_text' => 'In a 30-minute demo we raise an indent from a kitchen, buy and receive the goods, and compare consumption with the recipe.',
];
include dirname(__DIR__) . '/includes/templates/industry.php';
