<?php
$page = [
    'path' => '/industries/chemical',
    'title' => 'Chemical Manufacturing ERP Software | DotOne',
    'description' => 'Chemical manufacturing ERP for Indian plants: formulations as BOMs, batch production with yield, lot-wise QC, drum and tank stock, and dispatch by lot.',
    'breadcrumbs' => [['Industries', '/industries'], ['Chemical', '/industries/chemical']],
    'name' => 'Chemical',
    'icon' => 'shield',
    'h1' => 'Chemical Manufacturing ERP',
    'intro' => 'DotOne runs chemical plants from raw material lots to finished drums: formulations, batch production, lab results and dispatch. Each lot carries its test results and history, so the plant and the sales desk work from the same facts.',
    'challenges' => [
        ['doc', 'Formulations with many grades', 'The same product is made in several grades and concentrations, each with its own formula, and changes are passed on by word of mouth.'],
        ['chart', 'Batch yield and losses', 'Reactor batches lose material to evaporation, spillage and off-spec output, but the loss per batch is rarely recorded.'],
        ['shield', 'Lab results not linked to lots', 'Test reports are typed separately, so a customer asking for the analysis of a lot waits while someone finds the file.'],
        ['box', 'Stock in tanks, drums and bags', 'Liquid stock in tanks and solids in bags and drums are counted in different units, and conversions are done by hand.'],
    ],
    'workflow' => [
        ['Receive raw material lots', 'Raw materials are received against the PO by lot, sampled and held until the incoming test passes.'],
        ['Plan the batch', 'The batch is planned against the formulation BOM, with raw material availability checked before charging.'],
        ['Run and record', 'Charging, reaction and filtration stages are logged on the job card, with in-process tests at each stage.'],
        ['Test and grade', 'The finished lot is tested and graded. Off-spec material is held or sent for reprocessing.'],
        ['Pack and dispatch', 'Approved lots are packed in drums, carboys or bags and dispatched with the invoice and lot details.'],
    ],
    'modules' => ['production-management', 'quality-management', 'inventory-management', 'purchase-management', 'sales-management', 'reports-analytics'],
    'uses' => [
        ['Formulation BOMs', 'Each grade has its own BOM, so every batch is charged from the same written formula.'],
        ['Batch yield', 'Input against output for each batch, by reactor and shift, with losses visible in reports.'],
        ['Lot-wise QC', 'Incoming, in-process and final test results stored against the lot they belong to.'],
        ['Units of measure', 'Stock kept in kg, litres, drums or bags, with conversions set per item.'],
    ],
    'faq' => [
        ['Can one product have several grades with different formulas?', 'Yes. Each grade can be its own item with its own BOM. Layered BOMs also cover intermediates that go into several products. See the [BOM setup guide](/guides/bom-setup).'],
        ['Can we hold or rework off-spec batches?', 'Yes. Failed lots are held from saleable stock, and rework is recorded with a clear trail of what was done and what passed after. See [quality management](/quality-management).'],
        ['Does DotOne produce safety data sheets or handle hazardous goods rules?', 'No. DotOne does not create SDS documents or check regulatory rules. Your team keeps preparing them as today, using the lot and test records held in DotOne.'],
        ['Can stock be held in litres and sold in drums?', 'Yes. Items can have more than one unit of measure, with the conversion set per item, so stock and sales stay in step.'],
    ],
    'cta_heading' => 'Run a sample batch in DotOne',
    'cta_text' => 'In a 30-minute demo we set up one of your formulations, charge a sample batch, record its tests and dispatch the lot.',
];
include dirname(__DIR__) . '/includes/templates/industry.php';
