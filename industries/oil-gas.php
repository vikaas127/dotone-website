<?php
$page = [
    'path' => '/industries/oil-gas',
    'title' => 'ERP for Oil and Gas Operations | DotOne',
    'description' => 'ERP for Indian oil and gas service firms and site operators: critical spares by site, material issues, crew attendance, vendor POs and site issues.',
    'breadcrumbs' => [['Industries', '/industries'], ['Oil & Gas', '/industries/oil-gas']],
    'name' => 'Oil & Gas',
    'icon' => 'cog',
    'h1' => 'ERP for Oil and Gas Operations',
    'intro' => 'DotOne runs the supply and people side of oil and gas service companies and site operators: critical spares, site stores, purchase, crews and costs. Head office sees what each site holds, what it has asked for and what is holding it up.',
    'challenges' => [
        ['cog', 'Critical spares at remote sites', 'A missing seal, valve or pump part can idle a rig or a station, and the nearest stock may be hundreds of kilometres away.'],
        ['cart', 'Long, approval-heavy buying', 'Specialised spares come from a few vendors with long lead times, and each PO needs several sign-offs.'],
        ['users', 'Crews on rotation', 'Field crews work on rotation at distant sites, and their attendance, allowances and leave are tracked separately at each one.'],
        ['bell', 'Site issues lost in email', 'Problems reported from site travel by phone and email, and there is no single list of what is open and who owns it.'],
    ],
    'workflow' => [
        ['Hold spares by site', 'Each site and base is a stock location, with minimum levels set for critical spares.'],
        ['Raise a site request', 'Site in-charges raise material requests or report an issue from the mobile app.'],
        ['Approve and buy', 'Requests are routed through your approval chain, and POs go to approved vendors after sign-off.'],
        ['Receive and move to site', 'Material is received at the base against the PO, checked and transferred to the site with a document trail.'],
        ['Track costs and crews', 'Issues, purchases and crew payroll are booked to each site, so its running cost is visible.'],
    ],
    'modules' => ['inventory-management', 'purchase-management', 'warehouse-management', 'hrms', 'workflow-automation', 'mobile-erp'],
    'uses' => [
        ['Critical spares by site', 'Stock of each spare at every site and base, with alerts when it falls below the minimum.'],
        ['Multi-level approvals', 'Requests and POs routed to site, operations and finance heads, approved from the phone.'],
        ['Crew attendance at site', 'Geo-fenced attendance for crews on rotation, feeding allowances and payroll.'],
        ['Site issue tracking', 'Open issues by site with owner and age, so nothing reported from the field is lost.'],
    ],
    'faq' => [
        ['Can DotOne alert us when a critical spare runs low at a site?', 'Yes. Minimum levels are set per item and site. When stock falls below them, DotOne alerts the right people and can raise an indent. See [inventory management](/inventory-management).'],
        ['Can site issues be tracked to closure?', 'Issue reporting and its approval steps can be set up as part of your workflow during onboarding with [workflow automation](/workflow-automation). The [Operations AI Agent](/ai-agents/operations) flags items that are stuck.'],
        ['Does DotOne connect to SCADA or well monitoring systems?', 'No. DotOne does not read process or well data. It runs the stores, purchase, people and cost side of your operations.'],
        ['Can approvals happen when managers are travelling?', 'Yes. Requests and POs can be approved from the [mobile app](/mobile-erp), with the request details and stock position in view.'],
    ],
    'cta_heading' => 'Map one of your sites in DotOne',
    'cta_text' => 'In a 30-minute demo we set up a sample site with critical spares, raise a site request and take it through approval and transfer.',
];
include dirname(__DIR__) . '/includes/templates/industry.php';
