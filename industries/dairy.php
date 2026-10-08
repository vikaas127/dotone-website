<?php
$page = [
    'path' => '/industries/dairy',
    'title' => 'Dairy ERP Software for Milk Processors | DotOne',
    'description' => 'Dairy ERP for Indian milk processors: collection by route, fat and SNF records, processing batches, short-shelf-life stock, distributor dispatch and dues.',
    'breadcrumbs' => [['Industries', '/industries'], ['Dairy', '/industries/dairy']],
    'name' => 'Dairy',
    'icon' => 'box',
    'h1' => 'Dairy ERP Software',
    'intro' => 'DotOne runs a dairy from milk collection to the morning dispatch: routes and centres, processing batches, products with a few days of shelf life, and distributor billing. Each day\'s numbers are in one place before the next collection starts.',
    'challenges' => [
        ['truck', 'Collection data arrives late', 'Route-wise quantities, fat and SNF readings come in on slips or spreadsheets, and the plant plans the day without them.'],
        ['box', 'Shelf life counted in days', 'Milk, curd and paneer have to move fast. Stock that sits a day too long in the cold room is a straight loss.'],
        ['rupee', 'Farmer and society payments', 'Payments depend on quantity and quality for every supplier, and working them out by hand each cycle takes days.'],
        ['chart', 'Yield not tracked', 'Litres in and kilograms of product out are rarely matched by batch, so losses in processing stay hidden.'],
    ],
    'workflow' => [
        ['Collect by route', 'Milk received from each route or centre is recorded with quantity, fat and SNF against the supplier.'],
        ['Test at the plant', 'Incoming milk is checked at the reception dock before it is accepted into the silo.'],
        ['Process in batches', 'Pasteurisation, curd, paneer or ghee runs are logged as batches against a BOM, with yield recorded.'],
        ['Pack and store cold', 'Finished packs go to the cold room by batch and date, oldest stock moved first.'],
        ['Dispatch and bill', 'Morning dispatch goes route by route to distributors, with GST invoices and dues tracked per party.'],
    ],
    'modules' => ['purchase-management', 'quality-management', 'production-management', 'inventory-management', 'sales-management', 'accounting'],
    'uses' => [
        ['Route and centre collection', 'Daily milk quantity and quality by route, centre and supplier, as the base for supplier payments.'],
        ['Batch yield', 'Milk issued against each batch and product made, so yield by product and shift can be compared.'],
        ['Short-life stock', 'Cold room stock by batch and date, with what must be dispatched today shown first.'],
        ['Distributor dues', 'Invoices, crates and receipts against each distributor, with ageing for the accounts team.'],
    ],
    'faq' => [
        ['Can DotOne record fat and SNF for each supplier?', 'Yes. Quality readings are recorded with each receipt, so they are available for supplier payment and for quality reports. How readings come in, by entry or from your existing testing setup, is agreed during onboarding.'],
        ['Does DotOne calculate payments to farmers or societies?', 'Payment rules based on quantity and quality can be set up as part of your workflow during onboarding. Bills and payments then post to accounts and can sync to [Tally](/integrations/tally).'],
        ['How does DotOne handle products with a short shelf life?', 'Every pack is stocked by batch and date. Stock reports show the oldest batches first, and items close to their use-by date are flagged.'],
        ['Can we see yield for each product?', 'Yes. Milk issued to a batch and the product received from it are both recorded, so yield by product, batch and shift shows in reports.'],
    ],
    'cta_heading' => 'Follow one day of milk through DotOne',
    'cta_text' => 'In a 30-minute demo we take a sample route collection through reception, a processing batch, cold room stock and the morning dispatch.',
];
include dirname(__DIR__) . '/includes/templates/industry.php';
