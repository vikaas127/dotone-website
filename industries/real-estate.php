<?php
$page = [
    'path' => '/industries/real-estate',
    'title' => 'ERP for Real Estate Developers and Builders | DotOne',
    'description' => 'ERP for real estate developers and builders in India: lead to booking in CRM, site-wise material purchase and stock, contractor work, staff and project-wise cost.',
    'breadcrumbs' => [['Industries', '/industries'], ['Real Estate', '/industries/real-estate']],
    'name' => 'Real Estate',
    'icon' => 'factory',
    'h1' => 'ERP for Real Estate Developers and Builders',
    'intro' => 'DotOne runs developers and builders from the first enquiry to the handover. Sales teams work their leads and bookings in CRM, sites indent and receive material, and management sees cost and cash for every project.',
    'challenges' => [
        ['users', 'Leads from everywhere', 'Enquiries come from portals, brokers, site visits and calls, and follow-ups are missed between them.'],
        ['box', 'Material at many sites', 'Cement, steel and fittings sit at several sites, and nobody knows the stock without phoning the storekeeper.'],
        ['rupee', 'Cost against budget', 'Material, labour and contractor bills are booked late, so overruns are seen after the money is spent.'],
        ['doc', 'Collections on schedule', 'Payment milestones for each buyer are tracked in spreadsheets, and reminders go out late.'],
    ],
    'workflow' => [
        ['Lead to booking', 'Enquiries are captured in CRM, followed up and converted to bookings.'],
        ['Plan and indent', 'Sites raise indents for material against the project.'],
        ['Buy and receive', 'Purchase orders go to vendors and goods are received at the site store.'],
        ['Issue and record', 'Material is issued to work, and contractor and labour costs are booked to the project.'],
        ['Bill and collect', 'Invoices are raised as milestones fall due, and receivables are followed up.'],
    ],
    'modules' => ['crm', 'purchase-management', 'inventory-management', 'finance-management', 'hrms', 'accounting'],
    'uses' => [
        ['Lead pipeline', 'Every enquiry with its source, stage and next follow-up.'],
        ['Site-wise stores', 'Stock and consumption for each site, visible from head office.'],
        ['Project-wise cost', 'Material, labour and vendor bills reported against each project.'],
        ['Receivables follow-up', 'Dues by buyer and age, with reminders drafted for approval.'],
    ],
    'faq' => [
        ['How is this different from the construction page?', 'The [construction](/industries/construction) page is for contractors who build for clients. This page is for developers who also sell what they build, so it adds the sales pipeline and buyer collections.'],
        ['Can sales staff use it on the phone?', 'Yes. Leads, follow-ups and site visits can be handled from the [mobile app](/mobile-erp).'],
        ['Can we see cost for each project?', 'Yes. Purchases, material issues and bills are booked to a project, so cost can be compared with the budget.'],
        ['Does it sync with Tally?', 'Yes. Invoices, purchases and masters sync with Tally Prime through the [Tally connector](/integrations/tally).'],
    ],
    'cta_heading' => 'See a project in DotOne',
    'cta_text' => 'In a 30-minute demo we follow a lead to booking, buy material for a site and show the project cost.',
];
include dirname(__DIR__) . '/includes/templates/industry.php';
