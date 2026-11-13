<?php
// Keyword landing page. Facts mirror the module and agent pages it links to.
$page = [
    'path' => '/qr-code-inventory-system',
    'title' => 'QR Code Warehouse Inventory System | DotOne',
    'description' => 'QR code inventory system for warehouses: scan on receipt, put-away, picking, transfer and dispatch, with batch and serial tracking across every location.',
    'breadcrumbs' => [['Solutions', '/solutions'], ['QR code inventory system', '/qr-code-inventory-system']],
    'eyebrow' => 'QR inventory',
    'h1' => 'QR Code Warehouse Inventory System',
    'intro' => 'Make the system match the shelf. DotOne lets your team scan QR codes at every step, from goods receipt and put-away to picking, transfers and dispatch, so stock counts stay right without long reconciliations.',
    'highlights' => ['Scan-to-verify', 'Batch and serial', 'Storage locations', 'Multi-warehouse'],
    'capabilities_heading' => 'Scanning at every movement',
    'capabilities_intro' => 'Each scan updates the same stock record used by purchase, production and sales.',
    'capabilities' => [
        ['eye', 'Scan-to-verify', 'Scan items on receipt, put-away, picking and dispatch so the system matches the shelf.'],
        ['doc', 'Receive against the PO', 'Goods are received with a GRN that records quantities and quality checks.'],
        ['pin', 'Storage locations', 'Record the rack, bin or area for each item and batch.'],
        ['box', 'Picking and packing', 'Pick against a sales order or issue request, then pack and mark ready for dispatch.'],
        ['truck', 'Transfers between sites', 'Move stock between warehouses and plants with a document on both sides.'],
        ['flow', 'Batch, lot and serial', 'Scan-based stock movement with batch, lot and serial tracking.'],
    ],
    'workflow_intro' => 'A scanned flow from gate to dispatch.',
    'workflow' => [
        ['Inward', 'Scan material at the gate against the PO.'],
        ['Put away', 'Scan the item and its storage location.'],
        ['Pick', 'Scan items for the order or issue.'],
        ['Pack', 'Scan cartons as they are packed.'],
        ['Outward', 'Scan out with the challan; stock updates at once.'],
    ],
    'reports' => ['Stock by location and batch', 'Stock by warehouse', 'Transfers in transit', 'Picked versus ordered', 'Stock count variance', 'Dispatch by carton'],
    'connected_intro' => 'QR scanning works across these modules.',
    'connected' => ['warehouse-management', 'inventory-management', 'sales-management', 'purchase-management'],
    'agent' => 'inventory',
    'agent_questions' => ['Where is batch B-2291 stored?', 'Which transfers are still in transit?', 'Which items had count variances this month?'],
    'faq' => [
        ['What is a QR code inventory system?', 'A system where items, batches or locations carry QR codes that staff scan at each movement, so stock records update from the scan instead of manual entry.'],
        ['Can we generate barcodes and QR labels?', 'Yes. Our free [barcode generator](/tools/barcode-generator) and [SKU generator](/tools/sku-generator) help you get started.'],
        ['Does it work across several warehouses?', 'Yes. Each warehouse has its own stock, and transfers are recorded on both sides.'],
        ['Does scanning work with batch tracking?', 'Yes. Scans carry batch, lot and serial numbers. See [batch tracking software](/batch-tracking-software).'],
    ],
    'cta_heading' => 'Scan a shipment in DotOne',
    'cta_text' => 'Book a 30-minute demo and we will receive, store, pick and dispatch a sample order by scanning.',
];
include __DIR__ . '/includes/templates/module.php';
