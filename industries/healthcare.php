<?php
$page = [
    'path' => '/industries/healthcare',
    'title' => 'ERP for Hospitals and Healthcare Providers | DotOne',
    'description' => 'Back-office ERP for hospitals, clinics and diagnostic centres in India: medical stores with batch and expiry, purchase, staff rosters, payroll and upkeep.',
    'breadcrumbs' => [['Industries', '/industries'], ['Healthcare', '/industries/healthcare']],
    'name' => 'Healthcare',
    'icon' => 'shield',
    'h1' => 'ERP for Hospitals and Healthcare Providers',
    'intro' => 'DotOne runs the back office of hospitals, clinics and diagnostic centres: medical and general stores, purchasing, staff attendance and payroll, equipment maintenance and accounts. It works alongside your hospital information system rather than replacing it.',
    'challenges' => [
        ['box', 'Expiry in the stores', 'Medicines and consumables expire on the shelf when stock is issued without looking at dates.'],
        ['cart', 'Urgent, unplanned buying', 'Departments indent at the last minute, so items are bought in a hurry at whatever price is offered.'],
        ['users', 'Shifts round the clock', 'Nurses, technicians and support staff work rotating shifts, and attendance for payroll is pieced together by hand.'],
        ['cog', 'Equipment downtime', 'Scanners, analysers and generators miss their service dates until one of them stops.'],
    ],
    'workflow' => [
        ['Indent', 'Wards and departments raise indents for medicines, consumables and general items.'],
        ['Purchase', 'Approved indents become purchase orders, with vendor quotes compared.'],
        ['Receive', 'Goods are received with batch and expiry dates and put away by store.'],
        ['Issue', 'Stock is issued to departments, oldest expiry first, and consumption is recorded per department.'],
        ['Account', 'Vendor bills, payments and department-wise costs flow to accounts.'],
    ],
    'modules' => ['inventory-management', 'purchase-management', 'hrms', 'payroll', 'maintenance-management', 'accounting'],
    'uses' => [
        ['Batch and expiry tracking', 'Every batch carries its expiry date, with near-expiry stock reported in advance.'],
        ['Department-wise consumption', 'What each ward or department drew from stores, by item and value.'],
        ['Shift rosters and attendance', 'Biometric attendance and shifts feeding payroll with PF and ESI.'],
        ['Equipment maintenance', 'Preventive maintenance schedules and work orders for medical and utility equipment.'],
    ],
    'faq' => [
        ['Does DotOne replace our hospital information system?', 'No. DotOne covers stores, purchase, HR, payroll, maintenance and accounts. Patient registration, billing and clinical records stay in your hospital information system.'],
        ['Can we track expiry dates for medicines and consumables?', 'Yes. Batch and expiry are recorded at receipt and stock is issued oldest-expiry first. See [expiry date tracking](/expiry-date-tracking-software).'],
        ['Can it handle rotating shifts and night duty?', 'Yes. Shifts, rosters and biometric attendance are part of [HRMS](/hrms), and feed [payroll](/payroll).'],
        ['Can several branches or units be managed together?', 'Yes. Each unit has its own stores and staff, with reports for each unit and for the whole group.'],
    ],
    'cta_heading' => 'See hospital stores and HR in DotOne',
    'cta_text' => 'In a 30-minute demo we receive a batch with an expiry date, issue it to a department and run a shift roster through payroll.',
];
include dirname(__DIR__) . '/includes/templates/industry.php';
