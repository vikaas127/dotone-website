<?php
$page = [
    'path' => '/industries/cables-wires',
    'title' => 'ERP for Cable and Wire Manufacturers | DotOne',
    'description' => 'ERP for cable and wire manufacturers in India: metal by weight, coils and drums in metres, stage-wise job cards, scrap tracking, QC records and GST billing.',
    'breadcrumbs' => [['Industries', '/industries'], ['Cables & Wires', '/industries/cables-wires']],
    'name' => 'Cables & Wires',
    'icon' => 'flow',
    'h1' => 'ERP for Cable and Wire Manufacturers',
    'intro' => 'DotOne runs makers of house wires, power and control cables, and winding wires. Metal is bought by weight and sold by length, so every stage from drawing to sheathing records what it consumed, what it produced and what became scrap.',
    'challenges' => [
        ['rupee', 'Metal prices move daily', 'Copper and aluminium rates change every day, and a quote at an old rate can lose money.'],
        ['box', 'Bought in kg, sold in metres', 'Stock in weight must be reconciled with coils and drums in metres.'],
        ['chart', 'Scrap at every stage', 'Drawing, stranding and extrusion each leave scrap that has real value.'],
        ['shield', 'Tests on every lot', 'Customers and standards require test records for each lot dispatched.'],
    ],
    'workflow' => [
        ['Buy metal', 'Copper, aluminium and compounds are received by weight and lot.'],
        ['Draw and strand', 'Job cards record wire drawn and stranded, with input weight and output length.'],
        ['Insulate and sheath', 'Extrusion stages consume conductor and compound against the bill of materials.'],
        ['Test', 'Quality checks are recorded for each lot before it is released.'],
        ['Coil, dispatch and bill', 'Coils and drums are dispatched in metres with a GST invoice and e-way bill details.'],
    ],
    'modules' => ['production-management', 'inventory-management', 'quality-management', 'purchase-management', 'sales-management', 'accounting'],
    'uses' => [
        ['Weight and length units', 'Kilograms for metal and compounds, metres for coils and drums.'],
        ['Multi-level BOMs', 'Conductor, insulation and sheath as stages under one cable.'],
        ['Scrap by stage', 'Scrap recorded against each job card.'],
        ['Lot-wise test records', 'Inspection results stored with the lot.'],
    ],
    'faq' => [
        ['Can DotOne handle metal in kg and cable in metres?', 'Yes. Items can carry more than one unit, and the bill of materials records the metal weight per metre.'],
        ['Can we see scrap for each stage?', 'Yes. Material issued and output are recorded on each job card, so scrap by stage and by job is reported. See [production management](/production-management).'],
        ['Does it keep test results for each lot?', 'Yes. Inspections are recorded in [quality management](/quality-management) against the lot.'],
        ['Does it sync with Tally?', 'Yes. Invoices, purchases and masters sync with Tally Prime through the [Tally connector](/integrations/tally).'],
    ],
    'cta_heading' => 'See a cable job in DotOne',
    'cta_text' => 'In a 30-minute demo we issue copper to a job, record output in metres and scrap in kilograms, and dispatch the coils.',
];
include dirname(__DIR__) . '/includes/templates/industry.php';
