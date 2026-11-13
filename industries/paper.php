<?php
$page = [
    'path' => '/industries/paper',
    'title' => 'ERP for Paper Mills and Paper Converters | DotOne',
    'description' => 'ERP for paper mills and converters in India: reels and sheets by GSM, size and grade, stock in kg and reams, slitting and sheeting job cards, QC and GST billing.',
    'breadcrumbs' => [['Industries', '/industries'], ['Paper', '/industries/paper']],
    'name' => 'Paper',
    'icon' => 'doc',
    'h1' => 'ERP for Paper Mills and Paper Converters',
    'intro' => 'DotOne runs paper mills, kraft and duplex board makers, and converters who slit, sheet and trade paper. Stock is held by GSM, size and grade, in reels, reams or kilograms, and every conversion job records what went in and what came out.',
    'challenges' => [
        ['box', 'Reels by weight, sold by ream', 'Paper is made and bought by weight but sold in reams, sheets or reels of a given width.'],
        ['doc', 'GSM, size and grade', 'A few products turn into hundreds of stock lines once GSM, deckle and grade are counted.'],
        ['chart', 'Trim and conversion loss', 'Slitting and sheeting leave trim that is seldom weighed, so the real yield is unknown.'],
        ['truck', 'Dispatch by reel number', 'Customers ask which reels they received, and complaints need tracing back to the batch.'],
    ],
    'workflow' => [
        ['Receive or produce', 'Reels are received or produced with a reel number, GSM, width and weight.'],
        ['Stock by attributes', 'Stock is held by GSM, size and grade, in kg, reels or reams.'],
        ['Convert', 'Job cards record reels issued to slitting or sheeting and the output and trim obtained.'],
        ['Check', 'Quality checks are recorded against the batch.'],
        ['Dispatch and bill', 'Goods are dispatched with reel or batch details, a GST invoice and e-way bill details.'],
    ],
    'modules' => ['inventory-management', 'production-management', 'quality-management', 'sales-management', 'purchase-management', 'accounting'],
    'uses' => [
        ['Attributes on every item', 'GSM, width, size and grade as item attributes.'],
        ['Weight and count units', 'Kilograms, reels, reams and sheets for the same paper.'],
        ['Yield per job', 'Input, output and trim for each conversion job.'],
        ['Batch traceability', 'From a dispatched batch back to the reel it was cut from.'],
    ],
    'faq' => [
        ['Can DotOne keep stock in kilograms and reams together?', 'Yes. Items can carry more than one unit, so purchase, stores and sales each use their own.'],
        ['Can we track each reel?', 'Yes. Reels are tracked as batches with their own numbers. See [batch tracking](/batch-tracking-software).'],
        ['Does it work for printing and publishing too?', 'Print runs and book distribution are covered on the [publication](/industries/publishing) page.'],
        ['Does it sync with Tally?', 'Yes. Invoices, purchases and masters sync with Tally Prime through the [Tally connector](/integrations/tally).'],
    ],
    'cta_heading' => 'See a reel converted in DotOne',
    'cta_text' => 'In a 30-minute demo we receive a reel by weight, slit it on a job card, record the trim and bill the output.',
];
include dirname(__DIR__) . '/includes/templates/industry.php';
