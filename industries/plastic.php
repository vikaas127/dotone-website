<?php
$page = [
    'path' => '/industries/plastic',
    'title' => 'Plastic and Rubber Manufacturing ERP Software | DotOne',
    'description' => 'ERP for plastic moulding, extrusion and rubber products in India: granules in kg, machine-wise job cards, rejection and regrind tracking, QC and GST billing.',
    'breadcrumbs' => [['Industries', '/industries'], ['Plastic & Rubber', '/industries/plastic']],
    'name' => 'Plastic & Rubber',
    'icon' => 'cog',
    'h1' => 'ERP Software for Plastic and Rubber Manufacturers',
    'intro' => 'DotOne runs injection moulding, blow moulding, extrusion and rubber product units. Raw material is stocked in kilograms, production is recorded by machine and shift, and rejection and regrind are counted so the real cost of every part is known.',
    'challenges' => [
        ['box', 'Bought in kg, sold in pieces', 'Granules and compounds come in bags by weight while parts leave in numbers. Yield per kilogram is rarely measured.'],
        ['chart', 'Rejection and regrind', 'Short shots, flash and start-up scrap are reground and reused, but nobody records how much.'],
        ['cog', 'Machines and moulds', 'Output depends on which mould runs on which machine. Changeovers and breakdowns eat into the plan.'],
        ['bell', 'Schedules from OEM customers', 'Customers send monthly schedules and expect daily supplies. A missed dispatch stops their line.'],
    ],
    'workflow' => [
        ['Receive material', 'Granules, masterbatch and inserts are received by grade and lot, in kilograms.'],
        ['Plan by machine', 'Production is planned against customer orders, and job cards are issued machine-wise for each shift.'],
        ['Run and record', 'Good pieces, rejections and downtime are recorded against each job card.'],
        ['Inspect', 'Quality checks are logged per lot, with rejection reasons for analysis.'],
        ['Dispatch and bill', 'Parts are packed and dispatched with a GST invoice and e-way bill details.'],
    ],
    'modules' => ['production-management', 'inventory-management', 'quality-management', 'maintenance-management', 'purchase-management', 'sales-management'],
    'uses' => [
        ['Weight and piece units', 'Material in kilograms and finished parts in pieces, on the same item records.'],
        ['Machine and shift output', 'Target versus actual output for every machine and shift.'],
        ['Rejection by reason', 'Rejections logged with reasons, by machine, shift and part.'],
        ['Preventive maintenance', 'Maintenance schedules and work orders for machines.'],
    ],
    'faq' => [
        ['Can DotOne track production machine-wise?', 'Yes. Job cards are issued to machines and output, rejection and downtime are recorded against them. See [production management](/production-management).'],
        ['Can we record rejection and its reasons?', 'Yes. Rejections are logged with reasons in [quality management](/quality-management), so patterns by machine, shift or material show up in reports.'],
        ['Does it handle material in kg and parts in pieces?', 'Yes. Items can carry more than one unit, and the bill of materials records the material weight per piece.'],
        ['Can it schedule machine maintenance?', 'Yes. Preventive maintenance and work orders are part of [maintenance management](/maintenance-management).'],
    ],
    'cta_heading' => 'See a moulding job in DotOne',
    'cta_text' => 'In a 30-minute demo we issue granules to a machine, record good pieces and rejection for a shift, and dispatch the parts.',
];
include dirname(__DIR__) . '/includes/templates/industry.php';
