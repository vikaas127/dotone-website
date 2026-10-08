<?php
require_once dirname(__DIR__) . '/includes/site.php';
$cards = [];
foreach (['inventory-management', 'warehouse-management', 'purchase-management', 'production-management'] as $slug) {
    $m = MODULES[$slug];
    $cards[] = ['/' . $slug, $m['name'], $m['icon'], $m['summary']];
}
$cards[] = ['/ai-agents/inventory', AGENTS['inventory']['name'], AGENTS['inventory']['icon'], AGENTS['inventory']['summary']];
$cards[] = ['/manufacturing-erp', 'Manufacturing ERP', 'factory', 'Production, inventory, quality, purchase and sales for the whole plant.'];
$page = [
    'path' => '/solutions/inventory-automation',
    'title' => 'Inventory automation software | DotOne',
    'description' => 'Automate inventory work in DotOne: rules, approvals and AI agents remove the manual steps between your ERP modules.',
    'eyebrow' => 'Solutions',
    'h1' => 'Inventory automation software',
    'intro' => 'Automate inventory tracking across raw material, WIP and finished goods. Stock, consumption and reorders update from the work itself, without manual entries or spreadsheets, and you still approve what gets bought.',
    'blocks' => [
        ['heading' => 'What gets automated', 'text' => 'Every stock movement is recorded where it happens, so the numbers stay right without a separate reconciliation.', 'list' => [
            ['Raw material', 'Receipts, consumption and balance tracked in real time.'],
            ['Work in progress', 'Material followed across production stages.'],
            ['Finished goods', 'Stock updates from production and dispatch, and consumption is posted from production automatically.'],
            ['Barcode and QR', 'Scan-based stock movement, with batch, lot and serial tracking.'],
            ['Reorder and alerts', 'Below reorder level, an indent is drafted for approval. Unusual consumption and late deliveries are flagged.'],
            ['Reports', 'Stock valuation, ageing, slow-moving items and consumption.'],
        ]],
        ['heading' => 'Connected to the rest of DotOne', 'text' => 'Inventory automation works across purchase, production and the warehouse, with one record of stock for the whole business.', 'cards' => $cards],
        ['heading' => 'Who it helps', 'text' => 'Any manufacturing business where stock is hard to keep accurate by hand.', 'list' => [
            ['Raw material heavy units', 'Track consumption, cut wastage and prevent shortages.'],
            ['High SKU manufacturers', 'Manage thousands of items with reorder levels and alerts.'],
            ['MSME manufacturers', 'Replace manual stock registers with system records.'],
            ['Multi-plant businesses', 'One view of stock across warehouses, plants and locations.'],
        ]],
    ],
    'faq' => [
        ['What is inventory automation?', 'Using software, scanning and ERP links to track material movement, stock levels, consumption and replenishment automatically, instead of through manual entries and spreadsheets.'],
        ['Will DotOne buy stock without our approval?', 'No. When an item falls below its reorder level, an indent is drafted and sent to the right person. Only approved indents become RFQs and purchase orders.'],
        ['Is material consumption recorded automatically?', 'Yes. Consumption is posted from production, and finished goods stock updates from production and dispatch.'],
        ['How long does it take to set up?', 'Setup runs in four steps: assessing your current process, configuring items, BOMs and warehouses, connecting purchase and production, then training and go-live. See [inventory management](/inventory-management).'],
    ],
    'cta_heading' => 'See stock that reorders itself',
    'cta_text' => 'Book a demo and we will set up a few of your items, drop one below its reorder level and follow it through approval to purchase.',
];
include dirname(__DIR__) . '/includes/templates/hub.php';
