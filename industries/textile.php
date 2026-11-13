<?php
$page = [
    'path' => '/industries/textile',
    'title' => 'Textile and Garment ERP Software | DotOne',
    'description' => 'ERP for textile mills and garment manufacturers in India: fabric in metres and kg, styles by size and colour, job work with stitching units, QC and GST billing.',
    'breadcrumbs' => [['Industries', '/industries'], ['Textile & Garments', '/industries/textile']],
    'name' => 'Textile & Garments',
    'icon' => 'flow',
    'h1' => 'ERP Software for Textile and Garment Manufacturers',
    'intro' => 'DotOne runs fabric processors, garment makers and home-textile units. Fabric is stocked by lot, shade and width in metres or kilograms, styles are tracked by size and colour, and material sent to job workers is accounted for until the pieces come back.',
    'challenges' => [
        ['box', 'One style, dozens of variants', 'Every style comes in several sizes and colours, so a short order book turns into hundreds of stock lines.'],
        ['doc', 'Fabric bought in metres, used in pieces', 'Rolls arrive in metres or kilograms and leave as cut pieces. Without consumption per style, wastage stays hidden.'],
        ['users', 'Work spread across job workers', 'Cutting, stitching, embroidery and washing often happen outside. Material lying with each unit is hard to reconcile.'],
        ['bell', 'Shade and lot mix-ups', 'Fabric from different dye lots looks alike on the rack and different on the garment.'],
    ],
    'workflow' => [
        ['Receive fabric and trims', 'Goods receipts record fabric by lot, shade and width, in metres or kg, along with trims and accessories.'],
        ['Plan the style', 'The bill of materials lists fabric and trim consumption per piece for each style.'],
        ['Cut and issue', 'Job cards issue fabric to cutting, and cut pieces move to stitching in-house or to a job worker.'],
        ['Track job work', 'Material issued to each job worker and pieces received back are recorded, so the balance is always known.'],
        ['Check, pack and bill', 'Finished pieces pass QC, are packed by size and colour, dispatched and invoiced with GST.'],
    ],
    'modules' => ['inventory-management', 'production-management', 'purchase-management', 'quality-management', 'sales-management', 'accounting'],
    'uses' => [
        ['Size and colour attributes', 'One style with size and colour as item attributes, instead of a separate item for every combination.'],
        ['Lot and shade tracking', 'Fabric is stocked by lot and shade, so one order is cut from one lot.'],
        ['Job-worker balances', 'Material out and pieces in for every stitching, embroidery or washing unit.'],
        ['Consumption against the BOM', 'Actual fabric used per job compared with the planned consumption.'],
    ],
    'faq' => [
        ['Can DotOne handle sizes and colours for each style?', 'Yes. Size and colour are item attributes, so stock, orders and reports show each combination without creating hundreds of separate items by hand.'],
        ['Can we track fabric sent to job workers?', 'Yes. Material issued to an outside unit and the pieces received back are both recorded, so the balance with each job worker is visible at any time.'],
        ['Does it work for fabric in both metres and kilograms?', 'Yes. Items can carry more than one unit, so purchase, stores and production each work in the unit they use.'],
        ['Does DotOne handle GST invoices and e-way bills?', 'Yes. GST invoices and e-way bill details are raised from the dispatch. See [GST billing software](/gst-billing-software).'],
    ],
    'cta_heading' => 'See a style move through DotOne',
    'cta_text' => 'In a 30-minute demo we set up a style with sizes and colours, issue fabric to a job worker and bill the finished pieces.',
];
include dirname(__DIR__) . '/includes/templates/industry.php';
