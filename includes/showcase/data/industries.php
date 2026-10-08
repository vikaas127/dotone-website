<?php
return [
    'h2' => ['One platform.', 'Shaped to your industry.'],
    'features' => [
        ['make', 'For businesses that make', 'Manufacturing, pharma, chemical, food and packaging run BOMs, batches and quality checks.'],
        ['move', 'For businesses that move goods', 'Trading, distribution, retail and warehouses run stock, orders and deliveries.'],
        ['run', 'For businesses that run sites', 'Construction, facilities and education run projects, staff and purchases.'],
    ],
    'cards' => [
        ['type' => 'steps', 'span' => 3, 'for' => 'make', 'title' => 'Manufacturing flow', 'steps' => [['Sales order', '', 'done'], ['BOM and job card', '', 'done'], ['Quality check', '', 'now'], ['Dispatch', '', 'todo']]],
        ['type' => 'steps', 'span' => 3, 'for' => 'move', 'title' => 'Distribution flow', 'steps' => [['Vendor quote', '', 'done'], ['Purchase order', '', 'done'], ['Warehouse', '', 'now'], ['Delivery', '', 'todo']]],
        ['type' => 'donut', 'span' => 3, 'for' => 'make move run', 'title' => 'Modules most used', 'center' => '45+', 'center_sub' => 'modules', 'segments' => [['Inventory', 34], ['Sales', 28], ['Production', 22], ['HR and payroll', 16]]],
        ['type' => 'steps', 'span' => 3, 'for' => 'run', 'title' => 'Project flow', 'steps' => [['Project budget', '', 'done'], ['Material indent', '', 'done'], ['Site issue', '', 'now'], ['Billing', '', 'todo']]],
    ],
];
