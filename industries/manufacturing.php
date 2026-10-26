<?php
$page = [
    'path' => '/industries/manufacturing',
    'title' => 'Business Management Software for Manufacturers | DotOne',
    'description' => 'DotOne for manufacturing: raw material to purchase, inventory, production, quality, finished goods, dispatch and accounts, configured for your process.',
    'breadcrumbs' => [['Industries', '/industries'], ['Manufacturing', '/industries/manufacturing']],
    'name' => 'Manufacturing',
    'icon' => 'factory',
    'h1' => 'Business Management Software for Manufacturers',
    'intro' => 'DotOne runs the shop floor and the office behind it: raw material, purchase, inventory, production, quality, finished goods, dispatch and accounts, configured for your process.',
    'challenges' => [
        ['factory', 'Production tracked by hand', 'Job progress sits on paper and in phone calls, so nobody sees what is happening on the floor until the day is over.'],
        ['box', 'Stock that does not match', 'Material records drift from what is in the store, which leads to wastage, shortages and jobs that wait for material.'],
        ['shield', 'Rejection and rework', 'Defects are found late, and without the reasons recorded the same problems repeat on the next batch.'],
        ['chart', 'Data without insight', 'The numbers exist across registers and spreadsheets, but they are not in one place to act on.'],
    ],
    'workflow' => [
        ['Buy raw material', 'Material is checked against the BOM, and reorders are drafted before stock runs short.'],
        ['Receive and store', 'Goods are received against the purchase order and inspected at receipt.'],
        ['Produce', 'Job cards, machines and shifts are on one screen, updated as the floor works.'],
        ['Check quality', 'Inspections in process and before dispatch, with full batch traceability.'],
        ['Dispatch and account', 'Finished goods are dispatched and the entries flow through to accounts.'],
    ],
    'modules' => ['production-management', 'inventory-management', 'purchase-management', 'quality-management', 'hrms', 'accounting'],
    'uses' => [
        ['Job cards and machines on one screen', 'Production you can see by machine, job and shift, without walking the floor.'],
        ['Material before the job starts', 'Raw material is checked against the BOM, so shortages are caught before a job is released.'],
        ['Quality on every batch', 'Inspections at receipt, in process and before dispatch, with rejection reasons recorded.'],
        ['Labour on the same system', 'Attendance and shifts for floor staff sit alongside production, not in a separate register.'],
    ],
    'faq' => [
        ['Can DotOne be set up for the way our plant works?', 'Yes. Items, BOMs, stages, quality checks and approvals are configured for your process during onboarding.'],
        ['Can quality be checked with cameras?', 'Yes. Vision AI uses cameras on the line to spot defects and record them against the batch. See [Vision AI quality inspection](/vision-ai/quality-inspection).'],
        ['Do you have pages for specific kinds of manufacturing?', 'Yes. See [automotive](/industries/automotive), [electronics](/industries/electronics), [food and beverage](/industries/food-beverage) and [pharma](/industries/pharma), or browse all [industries](/industries).'],
        ['How is our factory data protected?', 'Data is encrypted in transit and at rest, access is role-based with audit logs, and backups are automated. See our [security practices](/security).'],
    ],
    'cta_heading' => 'See your plant in one view',
    'cta_text' => 'In a demo we take one of your products from raw material to job card, quality check and dispatch.',
];
include dirname(__DIR__) . '/includes/templates/industry.php';
