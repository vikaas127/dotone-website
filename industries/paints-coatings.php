<?php
$page = [
    'path' => '/industries/paints-coatings',
    'title' => 'ERP for Paint and Coatings Manufacturers | DotOne',
    'description' => 'ERP for paint, coatings and ink manufacturers in India: formulations, batch production, shades and pack sizes, stock in kg and litres, dealer orders and QC.',
    'breadcrumbs' => [['Industries', '/industries'], ['Paints & Coatings', '/industries/paints-coatings']],
    'name' => 'Paints & Coatings',
    'icon' => 'flow',
    'h1' => 'ERP for Paint and Coatings Manufacturers',
    'intro' => 'DotOne runs makers of decorative paints, industrial coatings, primers and inks. Formulations drive each batch, stock is kept by shade and pack size in kilograms or litres, and dealers are served from the same system.',
    'challenges' => [
        ['flow', 'Formulas by shade', 'Every shade has its own formula, and a tinter change must reach stores and production together.'],
        ['box', 'Shades times pack sizes', 'Hundreds of shades in five pack sizes make thousands of stock lines.'],
        ['shield', 'Batch-to-batch consistency', 'Viscosity, gloss and shade must match the standard on every batch.'],
        ['users', 'Dealer network', 'Dealers order small quantities of many shades and expect quick supply.'],
    ],
    'workflow' => [
        ['Formulate', 'The bill of materials holds the formula for each product and shade.'],
        ['Buy and receive', 'Pigments, resins, solvents and packing are received by batch, in kg or litres.'],
        ['Make the batch', 'Materials are issued to a batch job card against the formula.'],
        ['Test and adjust', 'Quality checks are recorded, with any adjustment logged against the batch.'],
        ['Fill, dispatch and bill', 'The batch is filled into pack sizes, dispatched to dealers and invoiced with GST.'],
    ],
    'modules' => ['production-management', 'inventory-management', 'quality-management', 'sales-management', 'field-sales-tracking', 'purchase-management'],
    'uses' => [
        ['Formulations as BOMs', 'One formula per product and shade, with quantities in kg or litres.'],
        ['Shade and pack attributes', 'Shade and pack size as item attributes, with stock for every combination.'],
        ['Batch records', 'Materials used and test results for each batch.'],
        ['Dealer orders', 'Orders, dispatches and outstanding for each dealer.'],
    ],
    'faq' => [
        ['Can DotOne keep stock in kilograms and litres?', 'Yes. Items can carry more than one unit, so raw materials and finished packs are each held in the unit that suits them.'],
        ['Can we record quality tests for each batch?', 'Yes. Inspection results are recorded against the batch in [quality management](/quality-management).'],
        ['How is this different from the chemical page?', 'The [chemical](/industries/chemical) page covers formulations and safe stock in general. This page adds shades, pack sizes and dealer sales.'],
        ['Can sales staff take dealer orders on the phone?', 'Yes. See [field sales tracking](/field-sales-tracking).'],
    ],
    'cta_heading' => 'See a paint batch in DotOne',
    'cta_text' => 'In a 30-minute demo we make a batch from a formula, record its tests, fill it into pack sizes and bill a dealer.',
];
include dirname(__DIR__) . '/includes/templates/industry.php';
