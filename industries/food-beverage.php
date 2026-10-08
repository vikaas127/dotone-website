<?php
$page = [
    'path' => '/industries/food-beverage',
    'title' => 'Food Processing ERP Software | DotOne',
    'description' => 'Food processing ERP for Indian snack, spice, beverage and packaged food makers: recipes, batch costing, best-before dates, distributor orders and GST invoices.',
    'breadcrumbs' => [['Industries', '/industries'], ['Food & Beverage', '/industries/food-beverage']],
    'name' => 'Food & Beverage',
    'icon' => 'box',
    'h1' => 'Food Processing ERP Software',
    'intro' => 'DotOne runs food and beverage plants from ingredient buying to distributor dispatch, with recipes, batches and best-before dates built in. You see what each batch used, what it cost and where it was sold.',
    'challenges' => [
        ['doc', 'Recipes in a notebook', 'The recipe and its variations live with the production head. Ingredient use per batch is guessed, not measured.'],
        ['box', 'Seasonal ingredients', 'Spices, fruit and grains are bought in season at the right price, then stored for months without a clear view of what is left.'],
        ['rupee', 'Cost per SKU unclear', 'With many pack sizes and frequent price changes in ingredients, nobody is sure which SKUs actually make money.'],
        ['shield', 'Recall readiness', 'If a batch has a problem, finding which distributors received it means going through invoices one by one.'],
    ],
    'workflow' => [
        ['Buy ingredients and packing', 'Purchase orders for ingredients and packing material, received with batch and best-before dates.'],
        ['Check on arrival', 'Incoming checks are recorded at goods receipt before material is accepted into the store.'],
        ['Make to recipe', 'Each production batch draws ingredients against the recipe BOM, with actual use and wastage recorded.'],
        ['Pack by SKU', 'The batch is packed into pack sizes and moved to finished stock with its batch code and date.'],
        ['Sell through distributors', 'Distributor orders are dispatched batch-wise with GST invoices, so every carton is traceable.'],
    ],
    'modules' => ['production-management', 'inventory-management', 'quality-management', 'purchase-management', 'sales-management', 'business-analytics'],
    'uses' => [
        ['Recipe BOMs and batch costing', 'Recipes as multi-level BOMs, with the cost of each batch from actual ingredient use.'],
        ['Best-before tracking', 'Ingredient and finished stock by batch and date, with older stock issued and dispatched first.'],
        ['Batch-to-distributor trail', 'Each finished batch links to the invoices it went out on, ready if you ever need to recall.'],
        ['SKU and channel margins', 'Sales and cost by SKU, pack size and distributor, to see which lines earn their shelf space.'],
    ],
    'faq' => [
        ['Can DotOne manage recipes with several stages?', 'Yes. Recipes are set up as layered BOMs, for example a base mix that goes into several finished products. Our [BOM setup guide](/guides/bom-setup) shows how it works.'],
        ['Does DotOne track best-before dates?', 'Yes. Batches carry manufacturing and best-before dates, and reports show stock that is close to its date so it moves first.'],
        ['Does DotOne connect to FSSAI systems?', 'No. DotOne does not file with or connect to FSSAI. It keeps batch, inspection and dispatch records that you can use when your licence or an audit calls for them.'],
        ['Can we find every distributor who received a batch?', 'Yes. Batch tracking runs through to the invoice, so a report lists every party and quantity for a given batch.'],
    ],
    'cta_heading' => 'Cost one of your recipes in DotOne',
    'cta_text' => 'In a 30-minute demo we set up one of your recipes, run a sample batch and show its cost and the distributors it went to.',
];
include dirname(__DIR__) . '/includes/templates/industry.php';
