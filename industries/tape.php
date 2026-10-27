<?php
$page = [
    'path' => '/industries/tape',
    'title' => 'ERP Software for Adhesive Tape Manufacturers | DotOne',
    'description' => 'Adhesive tape ERP for Indian manufacturers: jumbo, log and slit reel tracking, one BOM for every roll size, rolls and metres in stock, QC holds and COAs.',
    'breadcrumbs' => [['Industries', '/industries'], ['Adhesive Tape', '/industries/tape']],
    'name' => 'Adhesive Tape',
    'icon' => 'flow',
    'h1' => 'ERP Software for Adhesive Tape Manufacturers',
    'intro' => 'DotOne follows tape from coating to carton: jumbo rolls, rewound logs and slit rolls are tracked with their lot and length, one BOM covers every roll size, and no roll ships before it passes QC.',
    'challenges' => [
        ['flow', 'Jumbo to log to slit roll', 'One jumbo roll becomes many logs and hundreds of finished rolls in different widths. Losing track of which roll came from which jumbo breaks traceability.'],
        ['doc', 'A BOM for every size', 'Width, length and micron change with every customer order. Keeping a separate BOM for each size is unmanageable.'],
        ['box', 'Rolls, metres, cartons and kg', 'Production counts metres, stores count rolls, dispatch counts cartons and purchase buys film in kg.'],
        ['check', 'Quality before dispatch', 'Customers ask for a certificate of analysis, and a roll from a failed lot must never reach a truck.'],
    ],
    'workflow' => [
        ['Coat the jumbo', 'Jumbo rolls are recorded with their lot and wound length as they come off the coater.'],
        ['Rewind into logs', 'A jumbo is rewound onto cores, and each log stays linked to its parent jumbo and lot.'],
        ['Slit to size', 'Each log is slit in its own mix of widths. Side strip goes back to stock, onto a log or to scrap.'],
        ['Check and release', 'QC checks the lot. Held lots cannot be dispatched, and a COA is produced for each lot or delivery.'],
        ['Pack and dispatch', 'Rolls are labelled, packed into cartons, dispatched and invoiced.'],
    ],
    'modules' => ['production-management', 'inventory-management', 'quality-management', 'sales-management', 'purchase-management', 'reports-analytics'],
    'uses' => [
        ['Reel tracking', 'Jumbo, log, slit and residual reels, each with its parent, lot and wound length.'],
        ['One BOM for every roll size', 'A single BOM scales material by roll width, length and micron.'],
        ['Several units per item', 'Rolls, metres, cartons and kg for the same item, with reel labels printed from the system.'],
        ['QC holds and COAs', 'QC templates, holds that block dispatch, and certificates of analysis per lot or delivery.'],
    ],
    'faq' => [
        ['Can DotOne trace a finished tape roll back to its jumbo roll?', 'Yes. Every log and slit roll keeps a link to the reel it came from, with its lot and wound length.'],
        ['Do we need a separate BOM for every tape size?', 'No. One BOM scales by roll width, length and micron, so a new size does not need a new BOM. See the [BOM setup guide](/guides/bom-setup).'],
        ['Can we issue a certificate of analysis to customers?', 'Yes. COAs can be produced for a lot or for a delivery, and lots on QC hold cannot be dispatched.'],
        ['How is stock counted in rolls and metres?', 'Each item can carry several units, such as rolls, metres, cartons and kg, so each team works in the unit it uses.'],
    ],
    'cta_heading' => 'See a jumbo roll become finished rolls',
    'cta_text' => 'In a 30-minute demo we rewind a jumbo, slit it into a size mix, pass QC and dispatch the cartons.',
];
include dirname(__DIR__) . '/includes/templates/industry.php';
