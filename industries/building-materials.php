<?php
$page = [
    'path' => '/industries/building-materials',
    'title' => 'ERP for Building Materials Manufacturers and Dealers | DotOne',
    'description' => 'ERP for building materials in India: tiles, sanitaryware, pipes and cement products with dealer orders, batch and shade tracking, depot stock and dispatch.',
    'breadcrumbs' => [['Industries', '/industries'], ['Building Materials', '/industries/building-materials']],
    'name' => 'Building Materials',
    'icon' => 'factory',
    'h1' => 'ERP for Building Materials Manufacturers and Dealers',
    'intro' => 'DotOne runs makers and distributors of tiles, sanitaryware, pipes and fittings, cement products and paints. Dealers and projects are served from depots, stock is held by batch and shade, and every truck leaves with the right documents.',
    'challenges' => [
        ['box', 'Shade and batch mismatch', 'Tiles and paints from different batches do not match on the wall, so batches must not be mixed in one order.'],
        ['truck', 'Heavy goods, costly freight', 'Wrong loading or a part load wipes out the margin on the order.'],
        ['users', 'Dealers and projects together', 'Dealer orders and project supplies compete for the same stock.'],
        ['rupee', 'Schemes and credit', 'Dealer outstanding grows across many small invoices.'],
    ],
    'workflow' => [
        ['Take the order', 'Dealer and project orders are booked by sales staff, in the office or on the mobile app.'],
        ['Check stock', 'Stock is checked by depot, batch and shade before the order is confirmed.'],
        ['Plan dispatch', 'Orders are grouped for loading, and a delivery challan is made for each vehicle.'],
        ['Invoice', 'A GST invoice and e-way bill details are raised from the dispatch.'],
        ['Collect', 'Outstanding is tracked by dealer and age.'],
    ],
    'modules' => ['sales-management', 'inventory-management', 'warehouse-management', 'field-sales-tracking', 'purchase-management', 'finance-management'],
    'uses' => [
        ['Batch and shade tracking', 'One order served from one batch wherever stock allows.'],
        ['Depot-wise stock', 'Stock at every depot and warehouse on one screen.'],
        ['Field sales app', 'Dealer visits and orders from the phone, with GPS check-ins.'],
        ['Dealer outstanding', 'Dues by dealer and age, with reminders drafted for approval.'],
    ],
    'faq' => [
        ['Can DotOne keep one shade or batch per order?', 'Yes. Stock is tracked by batch, so dispatch can pick a single batch for an order when enough is available.'],
        ['Is this page for manufacturers or dealers?', 'Both. Dealers and distributors use sales, stock and collections. Manufacturers add [production](/production-management) and [quality](/quality-management).'],
        ['Do you have pages for plywood and laminates?', 'Yes. See [plywood](/industries/plywood), [laminates](/industries/laminates) and [ACP sheets](/industries/acp).'],
        ['Does it handle GST invoices and e-way bills?', 'Yes. See [GST billing software](/gst-billing-software).'],
    ],
    'cta_heading' => 'See a dealer order in DotOne',
    'cta_text' => 'In a 30-minute demo we book a dealer order, pick stock from one batch, dispatch it and raise the GST invoice.',
];
include dirname(__DIR__) . '/includes/templates/industry.php';
