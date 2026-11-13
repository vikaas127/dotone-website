<?php
$page = [
    'path' => '/industries/agriculture',
    'title' => 'ERP for Agribusiness and Agri-Input Companies | DotOne',
    'description' => 'ERP for agribusiness in India: seeds, fertilisers and agrochemicals with batch and expiry tracking, dealer orders, field sales, depot stock and GST billing.',
    'breadcrumbs' => [['Industries', '/industries'], ['Agriculture', '/industries/agriculture']],
    'name' => 'Agriculture',
    'icon' => 'trend',
    'h1' => 'ERP for Agribusiness and Agri-Input Companies',
    'intro' => 'DotOne runs seed, fertiliser and crop-protection companies, agro processors and farm-equipment dealers. Stock is tracked by batch and expiry, dealers are served by a field team on the mobile app, and seasonal demand is planned from real sales.',
    'challenges' => [
        ['bell', 'A short selling season', 'Most of the year\'s sales happen in a few weeks. Stock in the wrong place at that time is a lost season.'],
        ['shield', 'Batch and expiry rules', 'Seeds and agrochemicals carry lot numbers and expiry dates that must be traceable to the dealer.'],
        ['truck', 'Dealers in remote areas', 'Orders, collections and scheme details travel by phone and paper between field staff and the office.'],
        ['rupee', 'Credit that stretches', 'Dealers pay after harvest, so outstanding builds up and needs close follow-up.'],
    ],
    'workflow' => [
        ['Procure or produce', 'Material is bought or processed and packed, with a batch number and expiry date.'],
        ['Stock by location', 'Stock is held by warehouse and depot, visible batch by batch.'],
        ['Take dealer orders', 'Field staff book dealer orders and log visits from the mobile app.'],
        ['Dispatch and bill', 'Goods are dispatched oldest batch first with a GST invoice and e-way bill details.'],
        ['Collect', 'Dealer outstanding is tracked by age, and reminders are followed up.'],
    ],
    'modules' => ['inventory-management', 'sales-management', 'field-sales-tracking', 'purchase-management', 'production-management', 'finance-management'],
    'uses' => [
        ['Batch and expiry tracking', 'Lot numbers and expiry dates from receipt to the dealer invoice.'],
        ['Depot-wise stock', 'Stock at every warehouse and depot before the season starts.'],
        ['Field sales app', 'Dealer visits, orders and attendance with GPS check-ins.'],
        ['Dealer outstanding', 'Dues by dealer and age, in one report.'],
    ],
    'faq' => [
        ['Can DotOne trace a batch to the dealers who received it?', 'Yes. Batch numbers are carried on dispatch and invoice, so a batch can be traced to every dealer it went to. See [batch tracking](/batch-tracking-software).'],
        ['Can field staff book orders from villages with poor network?', 'Orders and visits are entered in the [field sales app](/field-sales-tracking). Ask us in the demo how it behaves on a weak connection in your area.'],
        ['Does it suit agro processing as well as trading?', 'Yes. Processors add production with recipes and batches. See [food and beverage](/industries/food-beverage).'],
        ['Does it handle GST invoices and e-way bills?', 'Yes. See [GST billing software](/gst-billing-software).'],
    ],
    'cta_heading' => 'See a season planned in DotOne',
    'cta_text' => 'In a 30-minute demo we receive a batch, book a dealer order from the mobile app and dispatch it with a GST invoice.',
];
include dirname(__DIR__) . '/includes/templates/industry.php';
