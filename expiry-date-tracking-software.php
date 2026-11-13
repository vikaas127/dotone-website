<?php
// Keyword landing page. Facts mirror the module and agent pages it links to.
$page = [
    'path' => '/expiry-date-tracking-software',
    'title' => 'Expiry Date Inventory Tracking Software | DotOne',
    'description' => 'Track inventory by expiry and best-before date: first-expiry-first-out issue, near-expiry reports for 30, 60 or 90 days, and batch-wise dispatch.',
    'breadcrumbs' => [['Solutions', '/solutions'], ['Expiry date tracking', '/expiry-date-tracking-software']],
    'eyebrow' => 'Expiry tracking',
    'h1' => 'Expiry Date Inventory Tracking',
    'intro' => 'Find near-expiry stock months before it becomes a write-off. DotOne records expiry and best-before dates on every batch at receipt, issues the oldest stock first, and shows what expires in the next 30, 60 or 90 days.',
    'highlights' => ['Expiry on every batch', 'First-expiry-first-out', '30/60/90-day reports', 'Batch-wise dispatch'],
    'capabilities_heading' => 'Expiry control from receipt to dispatch',
    'capabilities_intro' => 'Dates are captured once, at goods receipt, and follow the batch everywhere after that.',
    'capabilities' => [
        ['doc', 'Dates at goods receipt', 'Raw and packing material is received against the PO with its batch and expiry or best-before date.'],
        ['flow', 'First-expiry-first-out', 'Material is issued and dispatched oldest-expiry first, so nothing is left behind to expire.'],
        ['bell', 'Near-expiry reports', 'See what expires in the next 30, 60 or 90 days while it can still be used or sold.'],
        ['box', 'Stock by batch and date', 'Ingredient, raw material and finished stock by batch and date, in every warehouse.'],
        ['truck', 'Batch-wise dispatch', 'Invoices and challans carry batch and expiry details, so every carton is traceable.'],
        ['shield', 'Hold and release', 'Material that fails inspection is held from usable stock.'],
    ],
    'workflow_intro' => 'How expiry dates move through DotOne.',
    'workflow' => [
        ['Receive', 'Batch and expiry recorded at GRN.'],
        ['Store', 'Stock kept by batch and location.'],
        ['Issue', 'Oldest expiry issued first.'],
        ['Review', 'Near-expiry stock reported in advance.'],
        ['Dispatch', 'Batch and expiry printed on dispatch documents.'],
    ],
    'reports' => ['Stock expiring in 30, 60, 90 days', 'Stock by batch and expiry', 'Slow-moving stock by age', 'Batch-wise dispatch history', 'Batches on QC hold', 'Stock by warehouse and batch'],
    'connected_intro' => 'Expiry tracking uses these modules.',
    'connected' => ['inventory-management', 'warehouse-management', 'quality-management', 'sales-management'],
    'agent' => 'inventory',
    'agent_questions' => ['What expires in the next 60 days?', 'Which near-expiry items can we use in production this week?', 'Which supplier sends the shortest shelf life?'],
    'faq' => [
        ['How does expiry date tracking work in DotOne?', 'Expiry or best-before dates are captured at goods receipt for each batch. Stock is then issued oldest-expiry first and reported by days to expiry.'],
        ['Does it support first-expiry-first-out?', 'Yes. Material is issued and dispatched first-expiry-first-out.'],
        ['Can we see near-expiry stock in advance?', 'Yes. Reports show what expires in the next 30, 60 or 90 days.'],
        ['Which industries use it?', 'Pharma, food and beverage, dairy and chemicals. See [batch tracking software](/batch-tracking-software) for full traceability.'],
    ],
    'cta_heading' => 'See expiry tracking on sample stock',
    'cta_text' => 'Book a 30-minute demo and we will receive a batch with an expiry date and follow it to dispatch.',
];
include __DIR__ . '/includes/templates/module.php';
