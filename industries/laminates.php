<?php
$page = [
    'path' => '/industries/laminates',
    'title' => 'ERP Software for Laminates Manufacturers | DotOne',
    'description' => 'Laminates ERP for Indian manufacturers: sheets by design, finish, size and thickness, square-foot pricing, press job cards, thickness QC and dealer orders.',
    'breadcrumbs' => [['Industries', '/industries'], ['Laminates', '/industries/laminates']],
    'name' => 'Laminates',
    'icon' => 'doc',
    'h1' => 'ERP Software for Laminates Manufacturers',
    'intro' => 'DotOne runs decorative laminate and lamination plants: sheets by design, finish, size and thickness, priced per sheet or per square foot, pressed, checked and dispatched to dealers across the country.',
    'challenges' => [
        ['doc', 'Hundreds of designs', 'Every design comes in several finishes, sizes and thicknesses. Keeping stock and catalogues in step is a full-time job.'],
        ['rupee', 'Sheet rate vs square-foot rate', 'Dealers compare prices per square foot, while stock and invoices count sheets.'],
        ['check', 'Thickness and finish quality', 'A 1 mm sheet that comes out at 0.8 mm, or a finish that does not match the sample, ends up as a return.'],
        ['users', 'A large dealer network', 'Dealers and distributors each expect their own price list, schemes and credit terms.'],
    ],
    'workflow' => [
        ['Quote by square foot', 'Orders can take a rate per square foot, and DotOne fills the sheet rate from each size.'],
        ['Plan the press', 'Orders become job cards for pressing, trimming and packing, with paper and resin issued from stock.'],
        ['Check every batch', 'Thickness is checked against a tolerance set for each item\'s thickness, and the batch is passed or held.'],
        ['Stock by design', 'Finished sheets are stocked by design, finish, size and thickness, in sheets and square feet.'],
        ['Dispatch to dealers', 'Orders are dispatched with delivery challans, invoiced with GST and synced to Tally.'],
    ],
    'modules' => ['production-management', 'inventory-management', 'sales-management', 'quality-management', 'crm', 'accounting'],
    'uses' => [
        ['Sheet units and sizes', 'Sheets, square metres and square feet, with sizes, grade and thickness on every item.'],
        ['Rate per square foot', 'A square-foot rate on the sales line becomes the right sheet rate automatically.'],
        ['Thickness QC by item', 'Each item is checked against tolerances for its own thickness.'],
        ['Dealer and distributor groups', 'Customer groups for lamination trade partners, with their own price lists and terms.'],
    ],
    'faq' => [
        ['Can DotOne handle many laminate designs and finishes?', 'Yes. Designs, finishes, sizes and thicknesses are attributes of the item, so stock and orders show each combination without separate spreadsheets.'],
        ['Can we sell laminates per square foot?', 'Yes. Enter the rate per square foot on the order or invoice line and DotOne works out the sheet rate from the sheet area.'],
        ['Is this the same system as for plywood?', 'Yes. Plywood and laminates share the same industry setup in DotOne, so a company making both runs them in one system. See [plywood ERP](/industries/plywood).'],
        ['Does it sync with Tally?', 'Yes. Invoices, receipts and masters sync with Tally Prime through the [Tally connector](/integrations/tally).'],
    ],
    'cta_heading' => 'See a laminates order in DotOne',
    'cta_text' => 'In a 30-minute demo we take a dealer order by square foot, press and check a batch, and dispatch it.',
];
include dirname(__DIR__) . '/includes/templates/industry.php';
