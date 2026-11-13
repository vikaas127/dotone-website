<?php
$page = [
    'path' => '/industries/cosmetics',
    'title' => 'ERP for Cosmetics and Personal Care Manufacturers | DotOne',
    'description' => 'ERP for cosmetics and personal care manufacturers in India: formulations, batch production, expiry tracking, pack sizes, contract manufacturing and QC.',
    'breadcrumbs' => [['Industries', '/industries'], ['Cosmetics & Personal Care', '/industries/cosmetics']],
    'name' => 'Cosmetics & Personal Care',
    'icon' => 'spark',
    'h1' => 'ERP for Cosmetics and Personal Care Manufacturers',
    'intro' => 'DotOne runs makers of skin care, hair care, soaps and toiletries, including contract manufacturers. Each product has a formulation, each batch is traceable to its ingredients, and the same bulk is packed into many sizes without losing track of stock.',
    'challenges' => [
        ['flow', 'Formulations and versions', 'A small change in a formulation must reach purchase, production and costing at the same time.'],
        ['shield', 'Batch records', 'Regulators and brand owners expect to trace any pack back to its batch and raw materials.'],
        ['box', 'One bulk, many packs', 'The same cream goes into several pack sizes, each with its own tube, carton and label.'],
        ['bell', 'Shelf life', 'Raw materials and finished goods both expire, and old stock is found too late.'],
    ],
    'workflow' => [
        ['Formulate', 'The bill of materials holds the formulation for the bulk and the packing materials for each pack size.'],
        ['Receive and test', 'Raw and packing materials are received by batch with expiry dates and checked.'],
        ['Manufacture', 'A batch is made on a job card, with materials issued against the formulation.'],
        ['Fill and pack', 'Bulk is filled into pack sizes, each consuming its own packing material.'],
        ['Release and dispatch', 'The batch is released after quality checks and dispatched oldest expiry first, with a GST invoice.'],
    ],
    'modules' => ['production-management', 'inventory-management', 'quality-management', 'purchase-management', 'sales-management', 'accounting'],
    'uses' => [
        ['Formulations as multi-level BOMs', 'Bulk and finished pack as levels under one product.'],
        ['Batch traceability', 'From a finished batch back to the raw material lots used.'],
        ['Expiry tracking', 'Near-expiry raw materials and finished goods reported in advance.'],
        ['Batch-wise costing', 'Material cost for each batch from what was actually issued.'],
    ],
    'faq' => [
        ['Can DotOne manage formulations?', 'Yes. Formulations are held as multi-level bills of materials. See [multi-level BOM software](/multi-level-bom-software).'],
        ['Can we trace a batch back to its ingredients?', 'Yes. Batches link the finished goods to the job card and the material lots issued to it. See [batch tracking](/batch-tracking-software).'],
        ['Does it suit contract manufacturers?', 'Yes. Material received from a brand owner and goods made for them can be tracked batch by batch for each customer.'],
        ['Is there a page for pharma?', 'Yes. See [pharma and life sciences](/industries/pharma).'],
    ],
    'cta_heading' => 'See a batch made in DotOne',
    'cta_text' => 'In a 30-minute demo we set up a formulation, make a batch, pack it in two sizes and trace it back to its raw materials.',
];
include dirname(__DIR__) . '/includes/templates/industry.php';
