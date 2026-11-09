<?php
// Keyword landing page. Facts mirror the module and agent pages it links to.
$page = [
    'path' => '/batch-tracking-software',
    'title' => 'Batch Tracking Software for Pharma and Food | DotOne',
    'description' => 'Batch tracking software: trace every batch from raw material to customer, with QC hold and release, expiry dates and batch records.',
    'breadcrumbs' => [['Solutions', '/solutions'], ['Batch tracking software', '/batch-tracking-software']],
    'eyebrow' => 'Batch tracking',
    'h1' => 'Batch Tracking Software',
    'intro' => 'Know where every batch came from and where it went. DotOne ties each receipt, issue, production stage, inspection and dispatch to a batch, so you can answer an auditor or a customer complaint in minutes instead of days.',
    'highlights' => ['Raw material to customer', 'QC hold and release', 'Expiry dates', 'Batch records'],
    'capabilities_heading' => 'Batch tracking across the whole flow',
    'capabilities_intro' => 'Batches are not a separate register. They are part of every stock movement your team already records.',
    'capabilities' => [
        ['box', 'Batch-wise stock', 'Stock by batch with manufacturing and expiry dates, in every warehouse.'],
        ['shield', 'Quarantine and release', 'Material and finished goods move to usable stock only after the inspection result is recorded.'],
        ['flow', 'Forward and backward trace', 'Trace a finished batch back to the raw material batches, job cards and checks behind it, and forward to the invoices it left on.'],
        ['factory', 'Dispense to the batch', 'Material is issued against the batch BOM, first-expiry-first-out, and recorded on the job card.'],
        ['doc', 'Records for audits', 'Inspection results, rejections and approvals are kept with the user and date.'],
        ['eye', 'Scan to verify', 'Scan batches on receipt, issue and dispatch so the system matches what is on the shelf.'],
    ],
    'workflow_intro' => 'How a batch moves through DotOne.',
    'workflow' => [
        ['Receive', 'Material is received against the PO with batch and expiry, and held for incoming QC.'],
        ['Dispense', 'Material is issued to the batch, first-expiry-first-out.'],
        ['Make', 'Each stage is logged on the job card with in-process checks.'],
        ['Release', 'Finished goods stay on hold until final inspection passes.'],
        ['Dispatch', 'Invoices and challans carry batch and expiry details.'],
    ],
    'reports' => ['Batch history from receipt to dispatch', 'Stock by batch and expiry', 'Batches on hold and released', 'Batch yield and losses', 'Customers who received a batch', 'Rejections by batch and supplier'],
    'connected_intro' => 'Batch tracking runs through these modules.',
    'connected' => ['inventory-management', 'quality-management', 'production-management', 'warehouse-management'],
    'agent' => 'quality',
    'agent_questions' => ['Which customers received batch B-2291?', 'Which batches are on QC hold?', 'Trace this complaint to its raw material.'],
    'faq' => [
        ['What is batch tracking software?', 'Software that records a batch or lot number on every stock movement, so you can trace a product back to its raw materials and forward to the customers who received it.'],
        ['Which industries need batch tracking?', 'Pharma, food and beverage, dairy, chemicals and any plant that must recall or audit by lot. See [pharma ERP](/industries/pharma), [food and beverage](/industries/food-beverage) and [chemicals](/industries/chemical).'],
        ['Can we hold a batch until QC passes?', 'Yes. Finished goods and incoming material stay on hold until the inspection result is recorded.'],
        ['Can we trace a complaint to the raw material?', 'Yes. Batch tracking links finished goods to the jobs and raw material batches used.'],
    ],
    'cta_heading' => 'Trace a batch in DotOne',
    'cta_text' => 'In a 30-minute demo we receive a sample raw material, hold it for QC, issue it to a batch and trace it to the customer.',
];
include __DIR__ . '/includes/templates/module.php';
