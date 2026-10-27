<?php
$page = [
    'path' => '/industries/plywood',
    'title' => 'ERP Software for the Plywood Industry | DotOne',
    'description' => 'Plywood ERP for Indian manufacturers: sheets by size, thickness and grade, square-foot pricing, hot-press job cards, thickness QC, dealer orders and Tally sync.',
    'breadcrumbs' => [['Industries', '/industries'], ['Plywood', '/industries/plywood']],
    'name' => 'Plywood',
    'icon' => 'box',
    'h1' => 'ERP Software for the Plywood Industry',
    'intro' => 'DotOne runs plywood plants from veneer to dispatch. Sheets are stocked by size, thickness and grade, sold by the piece or by the square foot, and checked for thickness before they leave the press line.',
    'challenges' => [
        ['box', 'One product, hundreds of SKUs', 'Every grade comes in many thicknesses and sizes, so 8x4 and 7x4 sheets in a dozen thicknesses quickly become hundreds of items.'],
        ['rupee', 'Priced by the square foot', 'Dealers ask for a rate per square foot, but invoices go out per sheet. Converting by hand on every order invites mistakes.'],
        ['check', 'Thickness that drifts', 'A 12 mm sheet that comes out of the press at 11.4 mm is a complaint waiting to happen, and tolerances differ by thickness.'],
        ['truck', 'Dealer and distributor orders', 'Orders arrive from dealers, distributors and contractors, each with their own price list and credit terms.'],
    ],
    'workflow' => [
        ['Quote the dealer', 'Quotations and orders take a rate per square foot, and DotOne works out the sheet rate from each size.'],
        ['Plan the press', 'Confirmed orders become job cards for hot pressing, cutting and bundling.'],
        ['Check thickness', 'Quality checks record measured thickness against a tolerance set for each item\'s own thickness.'],
        ['Stock by size and grade', 'Finished sheets go into stock by grade, thickness and size, in sheets and square feet.'],
        ['Dispatch and bill', 'Bundles are dispatched against the order, invoiced with GST and synced to Tally.'],
    ],
    'modules' => ['production-management', 'inventory-management', 'sales-management', 'quality-management', 'crm', 'accounting'],
    'uses' => [
        ['Sheet stock in sheets and sq ft', 'Units for sheets, square metres, square feet and feet, with sizes such as 8x4 and 7x4 and grade and thickness attributes.'],
        ['Rate per square foot', 'Enter a square-foot rate on the order line and the sheet rate is filled in from the sheet area.'],
        ['Thickness QC by item', 'Tolerances follow each item\'s thickness, so a 6 mm and an 18 mm sheet are checked against their own limits.'],
        ['Dealer and distributor groups', 'Customer groups for plywood trade partners, with group-specific price lists and credit terms.'],
    ],
    'faq' => [
        ['Can DotOne price plywood per square foot?', 'Yes. Sales lines can take a rate per square foot, and DotOne fills the rate per sheet from the sheet\'s length and width.'],
        ['How are different sizes and thicknesses handled?', 'Sheets are set up with size, grade and thickness attributes and stocked in sheets and square feet, so you see stock for each combination without a separate spreadsheet.'],
        ['Can we check plywood thickness in quality control?', 'Yes. Thickness checks use a tolerance centred on each item\'s own thickness. See [quality management](/quality-management).'],
        ['Does it work with Tally?', 'Yes. Invoices, receipts and masters sync with Tally Prime through the [Tally connector](/integrations/tally).'],
    ],
    'cta_heading' => 'See a plywood order in DotOne',
    'cta_text' => 'In a 30-minute demo we price a dealer order per square foot, run it through the press and dispatch it with a GST invoice.',
];
include dirname(__DIR__) . '/includes/templates/industry.php';
