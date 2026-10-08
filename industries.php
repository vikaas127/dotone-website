<?php
require_once __DIR__ . '/includes/site.php';
$industries = [
    ['manufacturing', 'Manufacturing', 'factory', 'BOM, job cards, quality and dispatch.'],
    ['retail', 'Retail', 'cart', 'Store stock, billing and daily sales.'],
    ['trading-distribution', 'Trading & Distribution', 'truck', 'Buy, stock and deliver with margins visible.'],
    ['pharma', 'Pharma & Life Sciences', 'shield', 'Batch-wise control from material to release.'],
    ['dairy', 'Dairy', 'truck', 'Collection, processing and route delivery.'],
    ['food-beverage', 'Food & Beverage', 'box', 'Recipes, batches and shelf life.'],
    ['construction', 'Construction & Building', 'factory', 'Material, labour and cost per project.'],
    ['automotive', 'Automotive & Rental', 'cog', 'Leads, bookings, service and rentals.'],
    ['chemical', 'Chemical', 'flow', 'Formulations, batches and safe stock.'],
    ['jewellery', 'Gems & Jewellery', 'spark', 'Item-level tracking for high-value stock.'],
    ['electronics', 'High Tech & Electronics', 'cog', 'Multi-level BOMs and serial tracking.'],
    ['facilities-management', 'Mall & Facilities', 'users', 'Staff, upkeep and vendor work.'],
    ['packaging', 'Packaging', 'box', 'Job-wise runs from order to dispatch.'],
    ['publishing', 'Publication', 'doc', 'Print runs, stock and distribution.'],
    ['education', 'Education', 'id', 'Staff, payroll and purchases for campuses.'],
    ['sports-goods', 'Sports', 'trend', 'Production, stock and dealer orders.'],
    ['oil-gas', 'Oil & Gas', 'pin', 'Spares, site issues and field teams.'],
    ['warehousing', 'Warehouse', 'truck', 'Inward, storage and outward with live stock.'],
];
$cards = [];
foreach ($industries as [$slug, $name, $ico, $summary]) $cards[] = ['/industries/' . $slug, $name, $ico, $summary];
$page = [
    'path' => '/industries',
    'title' => 'Industry ERP: Plywood, Footwear, Metal, FMCG | DotOne',
    'description' => 'ERP workflows configured for plywood, tape, footwear, laminates, ACP, metal, FMCG, healthcare and service businesses.',
    'eyebrow' => 'Industries',
    'h1' => 'ERP and AI Built for Your Industry',
    'intro' => 'One platform, shaped to your industry. Businesses that make goods, move goods or run sites all work in DotOne, each with the workflow and modules that fit how they operate.',
    'blocks' => [
        ['heading' => 'Find your industry', 'text' => 'Each page shows how work flows through DotOne for that industry, and which modules it runs on.', 'cards' => $cards],
        ['heading' => 'Secure and audit-ready', 'text' => 'Production and business records are protected the same way in every industry.', 'list' => [
            ['Encrypted data', 'Encrypted in transit and at rest.'],
            ['Role-based access', 'People see only what their role allows, with admin audit logs.'],
            ['Audit trails', 'A record of changes for regulated and pharma production.'],
            ['Privacy by design', 'Built on Indian IT Act and GDPR principles.'],
        ]],
    ],
    'faq' => [
        ['Is each industry a separate product?', 'No. Every industry runs on the same DotOne platform. What changes is the workflow, the masters and the modules you switch on.'],
        ['My industry is not listed. Can DotOne still work for us?', 'Very likely. DotOne workflows are configured for many businesses, including plywood, tape, footwear, laminates, ACP, metal, FMCG, healthcare and services. [Talk to us](/contact) about your process.'],
        ['Can manufacturers use cameras for quality checks?', 'Yes. Vision AI connects to cameras on the line to spot defects and record them in DotOne. See [Vision AI](/vision-ai).'],
        ['How is our data kept secure?', 'Data is encrypted, access is role-based with audit logs, and changes are recorded. See our [security practices](/security).'],
    ],
    'cta_heading' => 'See DotOne set up for your industry',
    'cta_text' => 'Book a demo and we will walk through the workflow that fits your business, using your own items and steps.',
];
include __DIR__ . '/includes/templates/hub.php';
