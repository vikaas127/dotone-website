<?php
$page = [
    'path' => '/industries/engineering',
    'title' => 'ERP for Engineering and Fabrication Companies | DotOne',
    'description' => 'ERP for engineering, machining and fabrication companies in India: enquiry to quotation, multi-level BOMs, job cards, outside job work, QC records and job costing.',
    'breadcrumbs' => [['Industries', '/industries'], ['Engineering', '/industries/engineering']],
    'name' => 'Engineering',
    'icon' => 'factory',
    'h1' => 'ERP Software for Engineering and Fabrication Companies',
    'intro' => 'DotOne runs machine builders, precision machining shops and heavy fabricators. Every order is planned from its bill of materials, tracked through job cards and outside processes, and costed from the material it actually used.',
    'challenges' => [
        ['doc', 'Engineer-to-order work', 'Each order has its own drawing and BOM, so estimates are made in spreadsheets and never compared with actuals.'],
        ['cart', 'Long-lead bought-out items', 'Motors, bearings and castings arrive late and hold up assembly, because purchase started after production did.'],
        ['users', 'Outside processes', 'Heat treatment, plating and machining go to vendors. Parts lying outside are tracked on paper challans.'],
        ['rupee', 'Unknown job profit', 'Material, job work and rework are booked in different places, so margin per job is known only at year-end.'],
    ],
    'workflow' => [
        ['Enquiry and quotation', 'Enquiries are logged in CRM and quoted, with follow-ups until the order is won.'],
        ['BOM and purchase', 'The multi-level BOM lists manufactured and bought-out parts, and purchase orders go out against the shortfall.'],
        ['Job cards', 'Job cards move parts through cutting, machining, welding and assembly.'],
        ['Job work and QC', 'Material sent for outside processes is tracked until it returns, and inspections are recorded at each stage.'],
        ['Dispatch and bill', 'The finished job is dispatched and invoiced with GST, and the job cost is compared with the quote.'],
    ],
    'modules' => ['crm', 'production-management', 'purchase-management', 'inventory-management', 'quality-management', 'finance-management'],
    'uses' => [
        ['Multi-level BOMs', 'Assemblies, sub-assemblies and bought-out parts in one structure.'],
        ['Job-wise material issue', 'Material issued against each job card, so job cost comes from real consumption.'],
        ['Outside job work', 'Challans out and receipts in for every outside process.'],
        ['Inspection records', 'Stage and final inspections stored against the job.'],
    ],
    'faq' => [
        ['Does DotOne suit engineer-to-order businesses?', 'Yes. Each order can carry its own BOM and job cards, so planning, purchase and costing are done for that order.'],
        ['Can we track parts sent out for machining or plating?', 'Yes. Material issued to a job worker and parts received back are both recorded. See [production management](/production-management).'],
        ['Can we see profit per job?', 'Yes. Material issued, job work and sales value sit against the same order, so job-wise cost and margin can be reported.'],
        ['How is this different from the metal industry page?', 'The [metal and steel](/industries/metal) page covers stock by weight and grade for steel products and trading. This page covers order-based engineering and fabrication.'],
    ],
    'cta_heading' => 'See an engineering job in DotOne',
    'cta_text' => 'In a 30-minute demo we take an order from quotation to BOM, purchase, job cards and dispatch, and show its job cost.',
];
include dirname(__DIR__) . '/includes/templates/industry.php';
