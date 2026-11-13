<?php
$page = [
    'path' => '/industries/solar-energy',
    'title' => 'ERP for Solar and Renewable Energy Companies | DotOne',
    'description' => 'ERP for solar EPC companies, installers and module makers in India: enquiry to quotation, project-wise material, serial-tracked modules and project cost.',
    'breadcrumbs' => [['Industries', '/industries'], ['Solar & Renewable Energy', '/industries/solar-energy']],
    'name' => 'Solar & Renewable Energy',
    'icon' => 'spark',
    'h1' => 'ERP for Solar and Renewable Energy Companies',
    'intro' => 'DotOne runs solar EPC contractors, rooftop installers, distributors and module manufacturers. Each project carries its own quotation, material list and cost, and modules and inverters are tracked by serial number from purchase to the site.',
    'challenges' => [
        ['users', 'Many enquiries, few conversions', 'Rooftop enquiries arrive in volume, and follow-ups are lost between site surveys and revised quotes.'],
        ['box', 'Material for each project', 'Modules, inverters, structures and cables are bought for a project and then borrowed by another.'],
        ['shield', 'Serial numbers for warranty', 'A warranty claim years later needs the serial numbers installed at that site.'],
        ['rupee', 'Margins on fixed-price jobs', 'Prices are fixed at quotation, and any overrun on material or labour comes out of profit.'],
    ],
    'workflow' => [
        ['Enquiry and survey', 'Leads are captured in CRM with the site details, and follow-ups are scheduled.'],
        ['Quote', 'A quotation is made from the material list for that system size.'],
        ['Buy', 'Purchase orders are raised for the project, and goods are received with serial numbers.'],
        ['Install', 'Material is issued to the site against the project, and the site team\'s attendance is recorded.'],
        ['Bill and close', 'Invoices are raised with GST, and the project cost is compared with the quotation.'],
    ],
    'modules' => ['crm', 'sales-management', 'purchase-management', 'inventory-management', 'field-sales-tracking', 'finance-management'],
    'uses' => [
        ['Lead pipeline', 'Every enquiry with source, stage and next follow-up.'],
        ['Serial number tracking', 'Modules and inverters traced from goods receipt to the site they went to.'],
        ['Project-wise material and cost', 'What was bought, issued and spent on each project.'],
        ['Site teams on mobile', 'GPS check-ins and attendance for survey and installation staff.'],
    ],
    'faq' => [
        ['Can DotOne track module and inverter serial numbers?', 'Yes. Items can be tracked by serial number from receipt to dispatch, so you can see which serials went to which site.'],
        ['Does it suit module manufacturers as well as installers?', 'Yes. Manufacturers add production with multi-level BOMs and quality checks. See [high tech and electronics](/industries/electronics).'],
        ['Can we see profit per project?', 'Yes. Material, purchases and bills are booked to the project, so cost can be compared with the quoted price.'],
        ['Can site staff use it on the phone?', 'Yes. Visits, attendance and approvals work on the [mobile app](/mobile-erp).'],
    ],
    'cta_heading' => 'See a solar project in DotOne',
    'cta_text' => 'In a 30-minute demo we take an enquiry to quotation, buy serial-tracked modules, issue them to a site and show the project cost.',
];
include dirname(__DIR__) . '/includes/templates/industry.php';
