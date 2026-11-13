<?php
$page = [
    'path' => '/industries/furniture',
    'title' => 'Furniture Manufacturing ERP Software | DotOne',
    'description' => 'ERP for furniture manufacturers in India: multi-level BOMs for boards, hardware and finishes, made-to-order job cards, site delivery, dealer orders and GST billing.',
    'breadcrumbs' => [['Industries', '/industries'], ['Furniture', '/industries/furniture']],
    'name' => 'Furniture',
    'icon' => 'box',
    'h1' => 'ERP Software for Furniture Manufacturers',
    'intro' => 'DotOne runs modular furniture, office furniture and made-to-order workshops. Each product carries a bill of materials for boards, laminates, hardware and finishes, every order becomes job cards, and delivery is tracked to the site or dealer.',
    'challenges' => [
        ['doc', 'Every order is slightly different', 'Sizes, finishes and fittings change from order to order, so standard costing rarely matches what was built.'],
        ['box', 'Boards, laminates and offcuts', 'Sheets are bought whole and used in panels. Offcuts pile up unrecorded and usable stock is unknown.'],
        ['cog', 'Hardware by the thousand', 'Hinges, channels and handles in many types run out without warning and hold up assembly.'],
        ['truck', 'Delivery and installation', 'Goods leave in many packages for one site. A missing panel means a second trip.'],
    ],
    'workflow' => [
        ['Quote and confirm', 'Quotations are made from the product BOM, with the finish and fittings the customer chose.'],
        ['Plan material', 'The multi-level BOM shows the boards, laminates and hardware needed against stock in hand.'],
        ['Cut, edge and assemble', 'Job cards move each order through cutting, edge banding, drilling, assembly and finishing.'],
        ['Check and pack', 'Quality checks are recorded before packing, with every package listed against the order.'],
        ['Deliver and bill', 'Delivery challans and GST invoices are raised from the dispatch, and receivables are tracked per customer.'],
    ],
    'modules' => ['sales-management', 'production-management', 'inventory-management', 'purchase-management', 'quality-management', 'accounting'],
    'uses' => [
        ['Multi-level BOMs', 'Carcass, shutters and drawers as sub-assemblies under one product.'],
        ['Order-wise job cards', 'Each customer order tracked stage by stage on the shop floor.'],
        ['Reorder alerts for hardware', 'Low-stock alerts on fast-moving fittings before assembly stops.'],
        ['Dealer and project orders', 'Dealer orders and site projects handled in the same sales flow.'],
    ],
    'faq' => [
        ['Can DotOne handle made-to-order furniture?', 'Yes. Each order gets its own job cards and material issue, so cost and progress are tracked for that order.'],
        ['Can we manage boards and laminates by sheet size and thickness?', 'Yes. Size, thickness, grade and finish are item attributes, the same way DotOne handles [plywood](/industries/plywood) and [laminates](/industries/laminates).'],
        ['Does it cover dealers as well as direct customers?', 'Yes. Dealer orders, dispatches and outstanding are handled in [sales management](/sales-management).'],
        ['Does it sync with Tally?', 'Yes. Invoices, purchases and masters sync with Tally Prime through the [Tally connector](/integrations/tally).'],
    ],
    'cta_heading' => 'See a furniture order in DotOne',
    'cta_text' => 'In a 30-minute demo we quote a wardrobe, plan its material, run the job cards and dispatch it to site.',
];
include dirname(__DIR__) . '/includes/templates/industry.php';
