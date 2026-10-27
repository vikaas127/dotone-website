<?php
$page = [
    'path' => '/industries/fmcg',
    'title' => 'ERP Software for FMCG Companies in India | DotOne',
    'description' => 'FMCG ERP and distribution software: super stockist and distributor tiers, mobile field visits, pack sizes and flavours, blending, filling and dispatch.',
    'breadcrumbs' => [['Industries', '/industries'], ['FMCG', '/industries/fmcg']],
    'name' => 'FMCG',
    'icon' => 'truck',
    'h1' => 'ERP Software for FMCG Companies',
    'intro' => 'DotOne runs FMCG manufacturers and their distribution: products by pack size and flavour, blending and filling on the shop floor, and a channel of super stockists and distributors served by a field team on the mobile app.',
    'challenges' => [
        ['truck', 'A long distribution chain', 'Goods move from the plant to super stockists, distributors and retailers. Each tier has its own prices and terms.'],
        ['pin', 'A field team you cannot see', 'Sales officers visit markets, distributors and retailers every day, but visit reports arrive late or not at all.'],
        ['box', 'Many SKUs from one product', 'One product in five pack sizes and three flavours is fifteen SKUs to plan, stock and price.'],
        ['bell', 'Stock-outs cost sales', 'When a fast-moving pack runs out at the distributor, the retailer simply buys another brand.'],
    ],
    'workflow' => [
        ['Plan and produce', 'Blending and filling are planned from demand and run on job cards, by pack size and flavour.'],
        ['Stock by pack', 'Finished goods are stocked by SKU in cases, grams or millilitres.'],
        ['Sell through the channel', 'Super stockists and distributors are set up as customer tiers with their own price lists.'],
        ['Visit the market', 'Sales officers log area, distributor and retailer visits, demos and meetings from the mobile app.'],
        ['Dispatch and bill', 'Orders are dispatched, invoiced with GST and synced to Tally.'],
    ],
    'modules' => ['sales-management', 'field-sales-tracking', 'inventory-management', 'production-management', 'crm', 'mobile-erp'],
    'uses' => [
        ['Channel tiers', 'Super stockist and distributor customer groups, with prices and terms per tier.'],
        ['Mobile field visits', 'A fixed list of visit types, such as area, site and factory visits, demos and meetings, logged from the app.'],
        ['Pack sizes and flavours', 'Cases, grams and millilitres, with pack size, flavour and pack type on every SKU.'],
        ['Blending and filling', 'Work centres for blending and filling, with job cards and output by shift.'],
    ],
    'faq' => [
        ['Can DotOne manage super stockists and distributors?', 'Yes. Super stockists and distributors are set up as customer tiers, each with its own price list and terms.'],
        ['Can our field team log visits from their phone?', 'Yes. Sales officers log visits, demos and meetings from the mobile app, and managers see them the same day. See [field sales tracking](/field-sales-tracking).'],
        ['How are pack sizes and flavours handled?', 'Pack size, flavour and pack type are item attributes, and stock can be kept in cases, grams or millilitres.'],
        ['Does it handle FMCG manufacturing too?', 'Yes. Blending and filling run on production job cards, and finished goods go straight into stock for dispatch.'],
    ],
    'cta_heading' => 'See your FMCG channel in DotOne',
    'cta_text' => 'In a 30-minute demo we produce a batch, sell it through a super stockist and distributor, and log a field visit from the app.',
];
include dirname(__DIR__) . '/includes/templates/industry.php';
