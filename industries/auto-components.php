<?php
$page = [
    'path' => '/industries/auto-components',
    'title' => 'ERP for Auto Component Manufacturers | DotOne',
    'description' => 'ERP for auto component manufacturers in India: customer schedules, multi-level BOMs, machine-wise job cards, batch traceability and inspection records.',
    'breadcrumbs' => [['Industries', '/industries'], ['Auto Components', '/industries/auto-components']],
    'name' => 'Auto Components',
    'icon' => 'cog',
    'h1' => 'ERP Software for Auto Component Manufacturers',
    'intro' => 'DotOne runs sheet-metal, machined, forged, rubber and plastic part makers who supply OEMs and tier-1 companies. Schedules drive production, every batch is traceable back to its material, and inspection records are ready when the customer asks.',
    'challenges' => [
        ['bell', 'Schedules change every week', 'Customers revise schedules often. Planning in spreadsheets means either excess stock or a missed supply.'],
        ['shield', 'Traceability on demand', 'When a part fails, the customer wants the batch, the material lot and the inspection report the same day.'],
        ['chart', 'Rejection eats the margin', 'Prices are fixed for the year, so every rejected piece comes straight out of profit.'],
        ['truck', 'Daily dispatches', 'Many small dispatches each day, each needing an invoice, a challan and e-way bill details.'],
    ],
    'workflow' => [
        ['Orders and schedules', 'Customer orders and schedules are entered in sales, with quantities due by date.'],
        ['Plan material', 'BOMs show the material needed, and purchase orders are raised for the shortfall.'],
        ['Produce by batch', 'Job cards run machine-wise, with output, rejection and downtime recorded per shift.'],
        ['Inspect and record', 'Incoming, in-process and final inspections are recorded against each batch.'],
        ['Dispatch and bill', 'Parts are dispatched against the schedule with a GST invoice and e-way bill details.'],
    ],
    'modules' => ['sales-management', 'production-management', 'quality-management', 'inventory-management', 'purchase-management', 'maintenance-management'],
    'uses' => [
        ['Batch traceability', 'From the finished batch back to the job card and the material lot used.'],
        ['Machine-wise OEE', 'Availability, performance and quality for each machine and line.'],
        ['Rejection analysis', 'Rejections by reason, machine, shift and vendor.'],
        ['Schedule versus dispatch', 'What was due, what went and what is pending, by customer.'],
    ],
    'faq' => [
        ['Can DotOne trace a part back to its raw material?', 'Yes. Batches link the finished goods to the job card and the material lot issued to it, so a batch can be traced in both directions.'],
        ['Does it record inspection reports?', 'Yes. Incoming, in-process and final inspections are recorded in [quality management](/quality-management), and [Vision AI](/vision-ai/quality-inspection) can add camera-based checks.'],
        ['Is this the same as the automotive page?', 'No. [Automotive and rental](/industries/automotive) covers vehicle dealers and rental businesses. This page is for manufacturers of parts and components.'],
        ['Can it show OEE for our machines?', 'Yes. OEE is calculated from the output and downtime recorded on the shop floor. See [production management](/production-management).'],
    ],
    'cta_heading' => 'See a component batch in DotOne',
    'cta_text' => 'In a 30-minute demo we plan a schedule, run a batch, record its inspection and trace it back to the material lot.',
];
include dirname(__DIR__) . '/includes/templates/industry.php';
