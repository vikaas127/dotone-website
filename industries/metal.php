<?php
$page = [
    'path' => '/industries/metal',
    'title' => 'ERP Software for Steel and Metal Businesses | DotOne',
    'description' => 'ERP for steel, metal fabrication and metal trading in India: stock in kg, MT, metres and pieces, grades like IS 2062 and SS 304, job cards, QC and Tally sync.',
    'breadcrumbs' => [['Industries', '/industries'], ['Metal & Steel', '/industries/metal']],
    'name' => 'Metal & Steel',
    'icon' => 'cog',
    'h1' => 'ERP Software for Steel and Metal Businesses',
    'intro' => 'DotOne runs steel products, sheet metal fabrication, fasteners and metal trading businesses. Material is stocked by grade, size and thickness, in kilograms, tonnes, metres or pieces, and every job is costed from the material it actually used.',
    'challenges' => [
        ['box', 'Bought by weight, used by piece', 'Steel is bought in tonnes, cut in metres and sold in pieces or kilograms. Stock in one unit rarely matches the books in another.'],
        ['doc', 'Grades and sizes multiply', 'IS 2062, SS 304 and SS 316 in many sizes and thicknesses turn a short material list into hundreds of items.'],
        ['chart', 'Scrap and offcuts', 'Cutting and fabrication leave offcuts and scrap that are rarely weighed, so job costs are guesses.'],
        ['rupee', 'Prices that move every week', 'Steel prices change often, and quotes based on last month\'s rate eat into margins.'],
    ],
    'workflow' => [
        ['Buy and receive', 'Purchase orders and goods receipts record material by grade and size, in kg or MT, with the mill test details.'],
        ['Stock by grade and size', 'Stock is kept by grade, size and thickness, in kg, MT, metres or pieces, as bundles or loose.'],
        ['Plan the job', 'Fabrication or production orders become job cards, with material issued against each job.'],
        ['Check and record', 'Quality checks and the actual material used, including scrap, are recorded against the job.'],
        ['Dispatch and bill', 'Finished goods are dispatched, invoiced with GST and synced to Tally.'],
    ],
    'modules' => ['inventory-management', 'purchase-management', 'production-management', 'quality-management', 'sales-management', 'accounting'],
    'uses' => [
        ['Weight and length units', 'Kilograms, tonnes, metres and pieces for the same material.'],
        ['Grades and attributes', 'Grades such as IS 2062, SS 304 and SS 316, with size, thickness and material on every item.'],
        ['Bundles and loose stock', 'Pack types for bundled and loose material, so stores and dispatch count the same way.'],
        ['Job-wise material use', 'Material issued to each job card against output, so scrap and job cost are visible.'],
    ],
    'faq' => [
        ['Can DotOne track steel in kilograms and pieces at the same time?', 'Yes. Items can carry kilograms, tonnes, metres and pieces, so purchase, stores and sales each work in their own unit.'],
        ['Can we manage different grades like IS 2062 and SS 304?', 'Yes. Grade, size, thickness and material are item attributes, so stock and reports show each combination.'],
        ['Does it work for metal trading as well as fabrication?', 'Yes. Traders use purchase, stock and sales. Fabricators add production job cards and quality checks. See [manufacturing ERP](/manufacturing-erp).'],
        ['Does it sync with Tally?', 'Yes. Invoices, purchases and masters sync with Tally Prime through the [Tally connector](/integrations/tally).'],
    ],
    'cta_heading' => 'See a metal job costed in DotOne',
    'cta_text' => 'In a 30-minute demo we receive steel by weight, issue it to a fabrication job, record scrap and invoice the finished goods.',
];
include dirname(__DIR__) . '/includes/templates/industry.php';
