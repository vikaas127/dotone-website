<?php
return [
    'h2' => ['Every store, one screen.', 'Stock where it sells.'],
    'features' => [
        ['sales', 'Store-wise sales', 'Daily sales for each store side by side, so head office knows which branch is ahead and which is slipping.'],
        ['stock', 'Stock in every store', 'Store stock against reorder level, with transfers from the warehouse planned before shelves go empty.'],
        ['move', 'Transfers you can trace', 'Every warehouse-to-store transfer is recorded at both ends, with goods in transit visible.'],
    ],
    'cards' => [
        ['type' => 'table', 'span' => 6, 'for' => 'sales', 'title' => 'Sales by store', 'note' => 'this week', 'cols' => ['Sales', 'Bills', 'Avg bill'], 'rows' => [['Andheri', [['₹8.4 L', '▲ 6%', 'up'], ['2,140', '', ''], ['₹392', '', '']]], ['Thane', [['₹6.1 L', '▼ 4%', 'down'], ['1,720', '', ''], ['₹355', '', '']]], ['Vashi', [['₹5.7 L', '▲ 2%', 'up'], ['1,480', '', ''], ['₹385', '', '']]]]],
        ['type' => 'bars', 'span' => 3, 'for' => 'stock', 'title' => 'Thane store · stock vs reorder', 'rows' => [['Basmati 5 kg', 22, 40, 'warn', 'Low'], ['Sunflower oil 1 L', 58, 35, 'ok', 'OK'], ['Detergent 2 kg', 31, 45, 'warn', 'Low'], ['Tea 500 g', 66, 30, 'ok', 'OK']]],
        ['type' => 'steps', 'span' => 3, 'for' => 'move', 'title' => 'Transfer TR-318 · Thane', 'steps' => [['Picked at warehouse', '46 items', 'done'], ['Dispatched', 'Van 2 · 11:20', 'done'], ['In transit', 'ETA 1:30 pm', 'now'], ['Received at store', 'Store manager', 'todo']]],
        ['type' => 'alert', 'span' => 6, 'for' => 'stock move', 'head' => 'Inventory Agent', 'text' => 'Detergent 2 kg is low in Thane and has 9 weeks of cover in Vashi. Store transfer drafted.', 'icon' => 'box', 'meta' => [['From', 'Vashi store'], ['Quantity', '120 packs']], 'primary' => 'Approve transfer', 'done' => 'Transfer raised'],
    ],
];
