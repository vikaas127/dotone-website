<?php
$page = [
    'path' => '/industries/footwear',
    'title' => 'Footwear Manufacturing ERP Software | DotOne',
    'description' => 'ERP for footwear manufacturers in India: articles by size and colour, BOMs for uppers and soles, job work, carton packing, dealer orders and GST billing.',
    'breadcrumbs' => [['Industries', '/industries'], ['Footwear', '/industries/footwear']],
    'name' => 'Footwear',
    'icon' => 'trend',
    'h1' => 'ERP Software for Footwear Manufacturers',
    'intro' => 'DotOne runs shoe, sandal and slipper manufacturers who sell through dealers and distributors. Articles are tracked by size and colour, production follows the order through cutting, stitching and lasting, and dealers are billed with GST from the same system.',
    'challenges' => [
        ['box', 'Sizes multiply the stock', 'One article in eight sizes and four colours is thirty-two stock lines. A single wrong size fails the whole order.'],
        ['doc', 'Many materials per pair', 'Uppers, linings, soles, insoles, adhesives and laces all have different units and lead times.'],
        ['users', 'Stitching done outside', 'Uppers are often stitched by job workers. Pairs issued and received rarely match on paper.'],
        ['trend', 'Season and dealer pressure', 'Orders bunch up before the season and dealers expect full size sets, not part supplies.'],
    ],
    'workflow' => [
        ['Dealer order', 'Dealer and distributor orders are booked article-wise, by size and colour.'],
        ['Plan material', 'The BOM for each article lists upper, sole and component consumption per pair.'],
        ['Cut, stitch and last', 'Job cards move each lot through cutting, stitching, lasting and finishing, in-house or with job workers.'],
        ['Check and pack', 'Pairs are inspected and packed into cartons by size set.'],
        ['Dispatch and bill', 'Cartons are dispatched with a GST invoice, and dealer outstanding is tracked.'],
    ],
    'modules' => ['sales-management', 'production-management', 'inventory-management', 'purchase-management', 'quality-management', 'field-sales-tracking'],
    'uses' => [
        ['Size and colour attributes', 'One article with size and colour attributes, with stock visible for every combination.'],
        ['Job-worker balances', 'Material out and pairs in for every stitching unit.'],
        ['Dealer orders and outstanding', 'Orders, dispatches and dues for each dealer in one place.'],
        ['Field sales app', 'Sales staff book dealer orders and log visits from the phone.'],
    ],
    'faq' => [
        ['Can DotOne manage stock by size and colour?', 'Yes. Size and colour are item attributes, so orders, stock and reports show each combination.'],
        ['Can we track uppers sent to job workers?', 'Yes. Material issued and pairs received back are recorded for each job worker. See [production management](/production-management).'],
        ['Does it handle dealer and distributor orders?', 'Yes. Dealer orders, dispatches and outstanding are part of [sales management](/sales-management), and field staff can book orders from the [mobile app](/mobile-erp).'],
        ['Does it sync with Tally?', 'Yes. Invoices, purchases and masters sync with Tally Prime through the [Tally connector](/integrations/tally).'],
    ],
    'cta_heading' => 'See a footwear order in DotOne',
    'cta_text' => 'In a 30-minute demo we book a dealer order by size, run it through production and job work, and dispatch the cartons.',
];
include dirname(__DIR__) . '/includes/templates/industry.php';
