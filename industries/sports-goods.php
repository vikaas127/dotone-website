<?php
$page = [
    'path' => '/industries/sports-goods',
    'title' => 'Sports Goods Manufacturing ERP Software | DotOne',
    'description' => 'Sports goods manufacturing ERP for Indian makers of bats, balls, apparel and fitness gear: variant-wise stock, job work, labour wages and export orders.',
    'breadcrumbs' => [['Industries', '/industries'], ['Sports', '/industries/sports-goods']],
    'name' => 'Sports',
    'icon' => 'trend',
    'h1' => 'Sports Goods Manufacturing ERP',
    'intro' => 'DotOne runs sports goods units from raw material to packed cartons: willow and leather, rubber and synthetics, stitching and finishing, often with job workers in between. Every model and size is tracked through production, stock and dispatch.',
    'challenges' => [
        ['box', 'Many models and sizes', 'One bat or ball comes in several grades, weights and sizes, and stock by variant is kept only roughly.'],
        ['users', 'Work done outside the unit', 'Stitching and finishing are often done by job workers and home-based artisans, and material sent out is hard to reconcile.'],
        ['trend', 'Seasonal peaks', 'Demand rises before the cricket and football seasons and school sports days, and the plant either runs short or builds too much.'],
        ['shield', 'Rejects in finishing', 'Balls that fail weight or seam checks, or bats with grain defects, are found late and their cause is not recorded.'],
    ],
    'workflow' => [
        ['Book dealer and export orders', 'Orders from dealers, institutions and overseas buyers are booked by model, size and grade.'],
        ['Buy and stock material', 'Willow clefts, leather, rubber and fabric are bought and stocked by grade and batch.'],
        ['Make in-house or send out', 'Job cards cover each stage, and material sent to job workers is recorded until the finished pieces return.'],
        ['Check and grade', 'Finished goods are inspected and graded, with rejections logged by reason and stage.'],
        ['Pack and dispatch', 'Cartons are packed by model and size and dispatched against the order with GST invoices.'],
    ],
    'modules' => ['production-management', 'inventory-management', 'quality-management', 'sales-management', 'payroll', 'business-analytics'],
    'uses' => [
        ['Variant-wise stock', 'Stock by model, size and grade, from raw material to finished cartons.'],
        ['Job worker tracking', 'Material sent out and pieces received back for each job worker, with balances.'],
        ['Labour and wages', 'Attendance, overtime and wages for unit workers, with PF and ESI where they apply.'],
        ['Season planning', 'Sales trends by model and month, to plan production ahead of the season.'],
    ],
    'faq' => [
        ['Can DotOne track stock by size and grade?', 'Yes. Each model, size and grade can be its own item, tracked by batch, so stock and orders are clear down to the variant.'],
        ['Can we track material sent to job workers?', 'Yes. Material issued to an outside job worker and the finished pieces returned are both recorded, so the balance with each job worker is known. The exact steps are set up with you during onboarding.'],
        ['Can DotOne handle piece-rate wages?', 'Attendance-based salary and overtime are standard in [payroll](/payroll). Piece-rate calculation can be set up as part of your workflow during onboarding.'],
        ['Does DotOne help plan for the season?', 'Sales by model and month show which lines peak when. [Business analytics](/business-analytics) compares this year with last, so the plant can build stock early.'],
    ],
    'cta_heading' => 'Put one of your models on DotOne',
    'cta_text' => 'In a 30-minute demo we set up a sample model with sizes and grades, send material to a job worker and receive the finished pieces back.',
];
include dirname(__DIR__) . '/includes/templates/industry.php';
