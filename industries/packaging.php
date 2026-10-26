<?php
$page = [
    'path' => '/industries/packaging',
    'title' => 'Packaging Industry ERP Software | DotOne',
    'description' => 'Packaging industry ERP for Indian corrugated box, flexible and label makers: job-wise costing, reel and board stock, machine job cards, wastage and dispatch.',
    'breadcrumbs' => [['Industries', '/industries'], ['Packaging', '/industries/packaging']],
    'name' => 'Packaging',
    'icon' => 'box',
    'h1' => 'Packaging Industry ERP',
    'intro' => 'DotOne runs packaging plants that make to order: corrugated boxes, flexible laminates, labels and cartons. Each customer job is costed, scheduled on the machines and tracked from reel to finished bundle.',
    'challenges' => [
        ['doc', 'Every order is a new spec', 'Size, ply, GSM, print and lamination change from one customer job to the next, and quoting from memory leaves margins to chance.'],
        ['box', 'Reels and boards by size', 'Paper reels and film rolls are stocked by deckle, GSM and weight. Picking the wrong reel means trim waste or a delayed job.'],
        ['chart', 'Wastage nobody adds up', 'Set-up waste, trim and print rejects happen on every machine but are rarely compared with what the quote allowed.'],
        ['truck', 'Delivery dates tied to customers\' lines', 'FMCG and pharma buyers expect packaging just in time. A late job can hold up their filling line.'],
    ],
    'workflow' => [
        ['Quote from the spec', 'Quotations are built from the job spec and BOM: board or film, ink, adhesive and machine time.'],
        ['Plan the job', 'The confirmed order becomes a job card, with reels or boards reserved from stock by size and GSM.'],
        ['Run the machines', 'Corrugation, printing, lamination, slitting or die-cutting are logged stage by stage on the job card.'],
        ['Check and count', 'In-process and final checks are recorded, along with good output and wastage at each stage.'],
        ['Bundle and dispatch', 'Finished goods are bundled, dispatched against the order with a delivery challan and invoiced.'],
    ],
    'modules' => ['production-management', 'sales-management', 'inventory-management', 'quality-management', 'purchase-management', 'reports-analytics'],
    'uses' => [
        ['Spec-based quotations', 'Quotes built from your BOM and pricing rules, with discount approvals before they go out.'],
        ['Reel and roll stock', 'Paper and film stock by item, size and batch, so the right reel is picked for each job.'],
        ['Machine-wise job cards', 'Live status of each job on each machine, with output and downtime by shift.'],
        ['Wastage by job', 'Planned against actual material use on every job, to check that quotes match the floor.'],
    ],
    'faq' => [
        ['Can DotOne quote packaging jobs from their specification?', 'Yes. Quotations can be built from the job BOM and your pricing rules. Discounts above the limit go for approval. See [sales management](/sales-management).'],
        ['Can we track paper reels by size and GSM?', 'Yes. Reels and rolls can be set up as items with their size and GSM, tracked by batch, so stores can pick the right one for each job.'],
        ['Can DotOne show wastage for each job?', 'Yes. Material issued to the job card and good output are both recorded, so wastage by job, machine and stage shows in reports.'],
        ['Does it help us deliver on time?', 'Open orders, job status and pending dispatch are visible in one place. The [Production AI Agent](/ai-agents/production) flags delayed jobs and machine downtime early.'],
    ],
    'cta_heading' => 'Cost one of your jobs in DotOne',
    'cta_text' => 'In a 30-minute demo we quote a sample box or pouch from its spec, turn it into a job card and record output and wastage.',
];
include dirname(__DIR__) . '/includes/templates/industry.php';
