<?php
$page = [
    'path' => '/industries/acp',
    'title' => 'ERP Software for ACP Sheet Manufacturers | DotOne',
    'description' => 'ACP ERP for aluminium composite panel makers: coil batches and sq m yield, sheet cutting plans, shade-lot checks per project, samples, warranties and container loading.',
    'breadcrumbs' => [['Industries', '/industries'], ['ACP Sheets', '/industries/acp']],
    'name' => 'ACP Sheets',
    'icon' => 'factory',
    'h1' => 'ERP Software for ACP Sheet Manufacturers',
    'intro' => 'DotOne runs aluminium composite panel plants from coil to container: coil batches with their square-metre yield, sheet cutting plans, shade-lot checks for every project, sample development and warranty certificates.',
    'challenges' => [
        ['eye', 'Shade must match across a project', 'A building facade needs every panel from a matching shade lot. Mixing lots on one project means visible colour differences and site complaints.'],
        ['chart', 'Yield from every coil', 'Each coil should give a known area of panel. Without tracking yield and scrap per coil, losses stay hidden.'],
        ['doc', 'Samples before orders', 'Architects and contractors want colour and finish samples, and sample requests get lost between sales and the plant.'],
        ['shield', 'Warranties years later', 'Customers ask for warranty certificates, and claims can arrive long after the project is finished.'],
    ],
    'workflow' => [
        ['Develop the sample', 'A sample request moves through its stages, with the department head assigned and the status visible to sales.'],
        ['Price by area', 'Orders are priced per sheet from the sheet area, by core type, skin thickness and finish.'],
        ['Plan from coils', 'Coil batches are recorded with their square-metre yield, scrap and kg per square metre, and sheets are cut to plan.'],
        ['Check the shade lot', 'Every sheet on a project is checked against the project\'s shade lot before it is packed.'],
        ['Crate, load and certify', 'Sheets are packed into crates and loaded into containers, and a warranty certificate is issued for the project.'],
    ],
    'modules' => ['production-management', 'inventory-management', 'sales-management', 'quality-management', 'crm', 'reports-analytics'],
    'uses' => [
        ['Coil batches and yield', 'Coil batches with square-metre yield, scrap and kg per square metre.'],
        ['Cutting plans and area pricing', 'Sheet cutting plans, and per-sheet prices worked out from the sheet area.'],
        ['Shade-lot checks per project', 'Each project is held to one shade lot, so panels on a facade match.'],
        ['Samples, warranties and containers', 'Sample development requests, warranty certificates with a public form, crates and container loading.'],
    ],
    'faq' => [
        ['Can DotOne keep one shade lot across a project?', 'Yes. Sheets for a project are checked against the project\'s shade lot before packing, so a facade does not mix colours.'],
        ['Can we track yield from each aluminium coil?', 'Yes. Coil batches record square-metre yield, scrap and kg per square metre, so you can compare coils and suppliers.'],
        ['Does DotOne handle ACP sample requests?', 'Yes. Sample development requests move through defined stages with the department head assigned, so sales can see where each sample stands.'],
        ['Can we issue warranty certificates?', 'Yes. Warranty certificates can be issued per project, and customers can submit details through a public warranty form.'],
    ],
    'cta_heading' => 'See an ACP project in DotOne',
    'cta_text' => 'In a 30-minute demo we take a sample to an order, cut sheets from a coil, check the shade lot and issue the warranty.',
];
include dirname(__DIR__) . '/includes/templates/industry.php';
