<?php
// Keyword landing page. Facts mirror the module and agent pages it links to.
$page = [
    'path' => '/multi-level-bom-software',
    'title' => 'Multi-Level BOM Software for Manufacturers | DotOne',
    'description' => 'Multi-level BOM software: sub-assemblies, formulations and recipes as layered BOMs, linked to production planning, material reservation and batch costing.',
    'breadcrumbs' => [['Solutions', '/solutions'], ['Multi-level BOM software', '/multi-level-bom-software']],
    'eyebrow' => 'Bill of materials',
    'h1' => 'Multi-Level BOM Software',
    'intro' => 'Products are built from parts that are built from other parts. DotOne holds each level as its own BOM, so sub-assemblies, base mixes and intermediates are planned, made and costed in the right order, and shortages show up before the line stops.',
    'highlights' => ['Sub-assemblies', 'Formulas and recipes', 'Material reservation', 'Batch costing'],
    'capabilities_heading' => 'BOMs that drive the whole plant',
    'capabilities_intro' => 'The BOM is not just a list. It decides what to buy, what to make first and what each batch costs.',
    'capabilities' => [
        ['flow', 'Layered BOMs', 'Sub-assemblies are made separately with their own routing, then issued as components into the parent BOM.'],
        ['factory', 'Discrete and process', 'Assembled products use multi-level BOMs and job cards; chemicals, food and adhesives use formula and recipe BOMs.'],
        ['box', 'Material check and reservation', 'Material is checked against the BOM and reserved from stock for each work order, so shortages show early.'],
        ['cart', 'Shortages show early', 'Shortages against the BOM show before work starts, and items below reorder level raise purchase indents.'],
        ['rupee', 'Batch costing', 'The cost of each batch is calculated from actual material use against the BOM.'],
        ['doc', 'Grades and variants', 'Each grade or variant can be its own item with its own BOM.'],
    ],
    'workflow_intro' => 'From BOM to finished goods.',
    'workflow' => [
        ['Define', 'Set up the BOM for each level, from raw material to finished product.'],
        ['Plan', 'Sales orders become the production plan.'],
        ['Reserve', 'Material is checked and reserved against each work order.'],
        ['Make', 'Lower levels are made first and issued into the parent.'],
        ['Cost', 'Actual use is compared with the BOM for each batch.'],
    ],
    'reports' => ['BOM explosion by order', 'Material shortage by work order', 'Planned versus actual consumption', 'Cost per batch', 'Where-used for each component', 'WIP by level'],
    'connected_intro' => 'BOMs connect these modules.',
    'connected' => ['production-management', 'inventory-management', 'purchase-management', 'quality-management'],
    'agent' => 'production',
    'agent_questions' => ['Which work orders are short of material?', 'Where is this component used?', 'Which batches used more material than the BOM?'],
    'faq' => [
        ['What is a multi-level BOM?', 'A bill of materials in layers: the finished product lists sub-assemblies, and each sub-assembly has its own BOM of parts or ingredients. Our [BOM setup guide](/guides/bom-setup) shows how to build one.'],
        ['Does it work for recipes and formulations?', 'Yes. Recipes and formulations are set up as layered BOMs, for example a base mix used in several products.'],
        ['Is the BOM linked to purchasing?', 'Yes. Material is checked and reserved against the BOM, shortages show early, and items below reorder level raise purchase indents.'],
        ['Can we cost each batch?', 'Yes. Batch cost is worked out from actual material use.'],
    ],
    'cta_heading' => 'Build a multi-level BOM in DotOne',
    'cta_text' => 'In a 30-minute demo we set up a two-level BOM and run a work order through it.',
];
include __DIR__ . '/includes/templates/module.php';
