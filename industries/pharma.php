<?php
$page = [
    'path' => '/industries/pharma',
    'title' => 'Pharma ERP Software for Manufacturers | DotOne',
    'description' => 'Pharma ERP for Indian formulation and API makers: batch-wise stock with expiry, QC before release, batch production records, traceability and Tally sync.',
    'breadcrumbs' => [['Industries', '/industries'], ['Pharma & Life Sciences', '/industries/pharma']],
    'name' => 'Pharma & Life Sciences',
    'icon' => 'shield',
    'h1' => 'Pharma ERP Software',
    'intro' => 'DotOne runs material, production, quality and dispatch for pharma and life sciences makers, with every movement tied to a batch and its expiry date. QC results decide what can be used and what can be sold.',
    'challenges' => [
        ['shield', 'Batches released on paper', 'Test results sit in the QC lab register. Stores cannot see whether a batch is approved, on hold or rejected.'],
        ['box', 'Expiry caught too late', 'Near-expiry raw material and finished stock is found during a count, not months earlier when it could still be used or sold.'],
        ['doc', 'Batch records pieced together', 'When an auditor or customer asks about a batch, the team pulls dispensing slips, job records and test reports from three places.'],
        ['cart', 'Approved vendors only', 'Material from a vendor that is not on the approved list can still be received when nobody checks at the gate.'],
    ],
    'workflow' => [
        ['Receive and quarantine', 'Raw and packing material is received against the PO with batch and expiry, and held until incoming QC passes it.'],
        ['Dispense to the batch', 'Material is issued against the batch BOM, first-expiry-first-out, and recorded on the job card.'],
        ['Make and check in process', 'Each stage of the batch is logged on the job card with in-process checks at the points you define.'],
        ['QC release', 'Finished goods stay on hold until the final inspection passes, then move to saleable stock.'],
        ['Dispatch with batch details', 'Invoices and challans carry batch and expiry, so a complaint can be traced back through the batch history.'],
    ],
    'modules' => ['inventory-management', 'quality-management', 'production-management', 'purchase-management', 'sales-management', 'reports-analytics'],
    'uses' => [
        ['Batch and expiry tracking', 'Stock by batch with manufacturing and expiry dates, and reports of what expires in the next 30, 60 or 90 days.'],
        ['Quarantine, hold and release', 'Material and finished goods move to usable stock only after the inspection result is recorded.'],
        ['Batch traceability', 'Trace a finished batch back to the raw material batches, job cards and checks behind it.'],
        ['Records for audits', 'Inspection results, rejections and approvals are kept with the user and date, as records you keep for audits.'],
    ],
    'faq' => [
        ['Can DotOne block a batch until QC approves it?', 'Yes. Received material and finished goods can be held until the inspection is recorded as passed. Rejected material does not enter usable stock. See [quality management](/quality-management).'],
        ['Does DotOne track expiry dates?', 'Yes. Batches carry manufacturing and expiry dates, and stock reports show what is close to expiry so it can be used or sold first.'],
        ['Is DotOne certified for GMP or 21 CFR Part 11?', 'DotOne does not hold such certifications. It keeps dated, user-wise records of receipts, inspections, approvals and batch movement that your quality team can use for audits. Your validation needs should be discussed with us before you start.'],
        ['Can we trace a market complaint to its raw material?', 'Yes. Batch tracking links the finished batch to its job cards and the raw material batches issued to it, so the source can be found quickly.'],
    ],
    'cta_heading' => 'Walk one batch through DotOne',
    'cta_text' => 'In a 30-minute demo we receive a sample raw material, hold it for QC, issue it to a batch and release the finished goods.',
];
include dirname(__DIR__) . '/includes/templates/industry.php';
