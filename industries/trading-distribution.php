<?php
$page = [
    'path' => '/industries/trading-distribution',
    'title' => 'Distribution ERP Software for Traders | DotOne',
    'description' => 'Distribution ERP for Indian traders and distributors: dealer orders, godown stock, dispatch, salesman beats, party outstanding and GST invoices in Tally.',
    'breadcrumbs' => [['Industries', '/industries'], ['Trading & Distribution', '/industries/trading-distribution']],
    'name' => 'Trading & Distribution',
    'icon' => 'truck',
    'h1' => 'Distribution ERP Software',
    'intro' => 'DotOne runs the daily cycle of a trading or distribution business: orders from dealers and retailers, godown stock, dispatch, collections and the salesmen on the road. Every order, invoice and receipt sits against the same party ledger.',
    'challenges' => [
        ['chat', 'Orders on WhatsApp and calls', 'Salesmen send orders as messages and photos. Office staff re-type them, and some never reach the godown.'],
        ['rupee', 'Credit limits that are not checked', 'Fresh orders go out to parties who are already past their credit days, because outstanding is checked only when someone remembers.'],
        ['box', 'Godown stock nobody trusts', 'Brands, pack sizes and schemes multiply, and the godown count never quite matches the register.'],
        ['pin', 'No view of the beat', 'The owner cannot tell which retailers were visited today, which were skipped and which placed an order.'],
    ],
    'workflow' => [
        ['Book the order', 'Salesmen book orders from the mobile app during the visit, with the party, items and rates picked from masters.'],
        ['Check credit and stock', 'The order is checked against the party credit limit and available stock before it is confirmed.'],
        ['Pick and dispatch', 'The godown picks against the order and goods leave with a delivery challan and GST invoice.'],
        ['Collect payment', 'Receipts are recorded against invoices, and overdue parties are flagged to the salesman and accounts.'],
        ['Reorder from principals', 'Items below reorder level raise purchase indents, and POs go to the principal or supplier for approval.'],
    ],
    'modules' => ['sales-management', 'field-sales-tracking', 'inventory-management', 'warehouse-management', 'purchase-management', 'finance-management'],
    'uses' => [
        ['Party-wise orders and outstanding', 'Every dealer and retailer has one record with open orders, invoices, receipts and ageing.'],
        ['Salesman beats and visits', 'GPS check-ins and visit reports show which outlets were covered and what each visit produced.'],
        ['Multi-godown stock', 'Stock by godown, brand and pack size, with transfers between godowns recorded on both sides.'],
        ['Purchase from principals', 'Indents, POs and goods receipt against each principal, with purchase bills pushed to Tally.'],
    ],
    'faq' => [
        ['Can salesmen book orders from their phone?', 'Yes. The field app records the visit with a GPS check-in and lets the salesman book the order there. See [field sales tracking](/field-sales-tracking).'],
        ['Can DotOne stop orders for parties over their credit limit?', 'Orders can be routed for approval when a party is over its limit or past its credit days. The approval rules are set up with you during onboarding.'],
        ['We run more than one godown. Is that supported?', 'Yes. Each godown keeps its own stock, and transfers between them are recorded on both sides with a document trail.'],
        ['How do we follow up on overdue payments?', 'Receivables ageing comes from your live invoices and receipts. The [Finance AI Agent](/ai-agents/finance) flags overdue parties and drafts reminders for your team to send.'],
    ],
    'cta_heading' => 'Run your next order through DotOne',
    'cta_text' => 'In a 30-minute demo we take a sample dealer order from the salesman\'s phone through credit check, dispatch, invoice and receipt.',
];
include dirname(__DIR__) . '/includes/templates/industry.php';
