<?php
$page = [
    'path' => '/industries/warehousing',
    'title' => 'Warehousing and Logistics ERP Software | DotOne',
    'description' => 'Warehousing and logistics ERP for Indian 3PLs and C&F agents: client-wise stock, inward and put-away, picking, dispatch, bin locations and billing.',
    'breadcrumbs' => [['Industries', '/industries'], ['Warehouse', '/industries/warehousing']],
    'name' => 'Warehouse',
    'icon' => 'truck',
    'h1' => 'Warehousing and Logistics ERP',
    'intro' => 'DotOne runs warehouses that hold and move goods for others: 3PL operators, C&F and carrying agents, and company depots. Inward, storage, picking and dispatch are recorded for each client, along with the staff and the monthly bill.',
    'challenges' => [
        ['box', 'Whose stock is it', 'Goods of several clients share the same building. Mixing them up on a pick list is a costly mistake.'],
        ['pin', 'Locations kept in heads', 'Only a few senior pickers know where things are stored. When they are on leave, picking slows down.'],
        ['truck', 'Dock delays', 'Trucks wait at the gate because inward and dispatch are not planned, and nobody can say how many orders are still to go out today.'],
        ['rupee', 'Client billing by hand', 'Storage, handling and dispatch charges are worked out from registers at month-end, and some activity is never billed.'],
    ],
    'workflow' => [
        ['Inward at the gate', 'Goods are received against the client\'s advance shipment or PO, counted, scanned and checked.'],
        ['Put away', 'Each pallet or carton is placed in a storage location and the location is recorded.'],
        ['Pick for orders', 'Dispatch instructions from clients become pick lists by location, for the shift team.'],
        ['Pack and dispatch', 'Packed goods leave with a delivery challan, and stock reduces for that client at once.'],
        ['Bill the client', 'Month-end invoices are raised from recorded activity, with GST, and sync to Tally.'],
    ],
    'modules' => ['warehouse-management', 'inventory-management', 'hrms', 'sales-management', 'reports-analytics', 'mobile-erp'],
    'uses' => [
        ['Client-wise stock', 'Each client\'s stock kept separate by item, batch and location, with its own reports.'],
        ['Location-based picking', 'Pick lists by storage location, so new pickers can find goods without asking.'],
        ['Scanning at every step', 'Scan on receipt, put-away, picking and dispatch so the system matches the shelf.'],
        ['Shift labour', 'Attendance and overtime for loaders and pickers, feeding payroll.'],
    ],
    'faq' => [
        ['Can DotOne keep stock separate for each client?', 'Yes. Each client\'s stock can be held separately, with its own items, batches and reports. The exact setup is agreed during onboarding, based on how you bill and report to clients.'],
        ['Does DotOne record storage locations?', 'Yes. Goods are put away to a recorded location, and pick lists show where each item is. See [warehouse management](/warehouse-management).'],
        ['Does DotOne track trucks on the road?', 'No. DotOne does not include fleet or vehicle tracking. It records inward and dispatch at the warehouse, with challans and documents for each movement.'],
        ['How are storage and handling charges billed?', 'Invoices are raised in DotOne with GST and sync to [Tally](/integrations/tally). How storage and handling rates are calculated from your activity is set up with you during onboarding.'],
    ],
    'cta_heading' => 'Walk one shipment through your warehouse',
    'cta_text' => 'In a 30-minute demo we receive a sample client shipment, put it away, pick an order from it and dispatch it with a challan.',
];
include dirname(__DIR__) . '/includes/templates/industry.php';
