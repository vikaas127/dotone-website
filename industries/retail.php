<?php
$page = [
    'path' => '/industries/retail',
    'title' => 'Retail ERP Software for Multi-Store Chains | DotOne',
    'description' => 'Retail ERP software for Indian store chains: store-wise stock, transfers from the central warehouse, purchase, GST invoicing, staff attendance and Tally sync.',
    'breadcrumbs' => [['Industries', '/industries'], ['Retail', '/industries/retail']],
    'name' => 'Retail',
    'icon' => 'cart',
    'h1' => 'Retail ERP Software',
    'intro' => 'DotOne runs the back office of a retail business: buying, the central warehouse, stock in every store, staff and accounts. Head office sees what each store has sold and what it needs next, without waiting for evening phone calls.',
    'challenges' => [
        ['cart', 'Stock that differs by store', 'One store runs out of a fast seller while another has a month of it on the shelf, and nobody finds out until a customer walks out.'],
        ['truck', 'Transfers without a trail', 'Goods leave the warehouse on a handwritten slip. When the store count is short, there is no record of where the gap started.'],
        ['users', 'Store staff on paper registers', 'Attendance for counter and floor staff sits in a register at each store, so salaries take days to work out at month-end.'],
        ['rupee', 'Margins seen too late', 'Purchase rates, discounts and store sales live in different places, so the real margin on a category only shows up after the month closes.'],
    ],
    'workflow' => [
        ['Buy for the chain', 'Purchase orders go to vendors from head office, based on what stores are selling and what is below reorder level.'],
        ['Receive at the warehouse', 'Goods are received against the PO with a GRN, checked and put away in the central warehouse.'],
        ['Send to stores', 'Store transfers are raised from the warehouse and received at the store, with the document recorded at both ends.'],
        ['Sell and bill', 'Store sales and GST invoices for bulk or business buyers are recorded against store stock.'],
        ['Close the books', 'Sales, purchase and stock journals sync to Tally, and head office reviews store-wise sales and stock.'],
    ],
    'modules' => ['inventory-management', 'warehouse-management', 'purchase-management', 'sales-management', 'hrms', 'accounting'],
    'uses' => [
        ['Store-wise stock and reorder', 'Each store is set up as its own location, with reorder levels per item so replenishment starts from data, not phone calls.'],
        ['Central warehouse to store transfers', 'Pick, pack and dispatch to stores with a transfer document, and see what is still in transit.'],
        ['Staff attendance across stores', 'Geo-fenced or biometric attendance at each store feeds payroll, including shift and weekly-off rules.'],
        ['Category and store reports', 'Sales, stock value and slow movers by store and category, ready for the weekly review.'],
    ],
    'faq' => [
        ['Can DotOne track stock separately for each store?', 'Yes. Each store and the central warehouse is a separate location with its own stock. Transfers between them are recorded on both sides. See [warehouse management](/warehouse-management).'],
        ['Does DotOne replace our billing counter software?', 'DotOne is not point-of-sale hardware. It runs purchase, warehouse, store stock, staff and accounts. How store sales come into DotOne is agreed during onboarding, based on how your counters bill today.'],
        ['Can head office see which items are slow in a store?', 'Yes. Slow-moving and non-moving stock reports run by store and category, so stock can be moved to a store where it sells before it ages.'],
        ['Will our accountant still use Tally?', 'Yes. Sales, purchase and stock entries sync to Tally Prime or Tally ERP 9 through the [Tally connector](/integrations/tally), so the books stay where they are.'],
    ],
    'cta_heading' => 'See your stores in one view',
    'cta_text' => 'In a 30-minute demo we set up two sample stores and a warehouse, and walk one item from purchase to store transfer to sale.',
];
include dirname(__DIR__) . '/includes/templates/industry.php';
