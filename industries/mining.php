<?php
$page = [
    'path' => '/industries/mining',
    'title' => 'ERP for Mining, Quarry and Mineral Companies | DotOne',
    'description' => 'ERP for mining, quarry and mineral companies in India: spares and consumables, machine maintenance, vehicles and fuel, site staff and dispatch by weight.',
    'breadcrumbs' => [['Industries', '/industries'], ['Mining & Minerals', '/industries/mining']],
    'name' => 'Mining & Minerals',
    'icon' => 'pin',
    'h1' => 'ERP for Mining, Quarry and Mineral Companies',
    'intro' => 'DotOne runs quarries, stone crushers, mineral processors and mining contractors. Spares and consumables are controlled at each site, machines and vehicles are maintained on schedule, and every load that leaves is weighed, billed and accounted for.',
    'challenges' => [
        ['cog', 'Machines that cannot stop', 'A crusher or excavator standing idle for want of a spare stops the whole site.'],
        ['rupee', 'Diesel and tyres', 'Fuel and tyres are the largest running costs and the hardest to control at remote sites.'],
        ['pin', 'Sites far from the office', 'Stock, attendance and dispatch records reach head office days later.'],
        ['truck', 'Sales by weight', 'Material leaves by the tonne on many trucks a day, and each load needs a challan and invoice.'],
    ],
    'workflow' => [
        ['Indent from site', 'Sites raise indents for spares, consumables and fuel.'],
        ['Purchase and receive', 'Approved indents become purchase orders, and goods are received at the site store.'],
        ['Issue to machines', 'Spares and fuel are issued against a machine or vehicle.'],
        ['Maintain', 'Preventive maintenance and breakdown work orders are recorded with their cost.'],
        ['Dispatch and bill', 'Loads are dispatched by weight with a challan, GST invoice and e-way bill details.'],
    ],
    'modules' => ['inventory-management', 'purchase-management', 'maintenance-management', 'fleet-management', 'hrms', 'sales-management'],
    'uses' => [
        ['Site-wise stores', 'Spares and consumables at each site, visible from head office.'],
        ['Maintenance by running hours', 'Service planned by calendar or running hours, with work orders and cost.'],
        ['Fuel per machine and vehicle', 'Fuel issued and consumed, by asset.'],
        ['Site attendance', 'Geo-fenced or biometric attendance for site staff, feeding payroll.'],
    ],
    'faq' => [
        ['Can maintenance be planned by running hours?', 'Yes. Preventive maintenance can be based on the calendar, running hours or cycles. See [maintenance management](/maintenance-management).'],
        ['Can we track fuel for each machine?', 'Yes. Fuel is logged per vehicle or machine, with consumption and cost in reports. See [fleet management](/fleet-management).'],
        ['Does it work for sites with several locations?', 'Yes. Each site has its own stores, staff and costs, with reports for each site and the whole business.'],
        ['Is there a page for oil and gas?', 'Yes. See [oil and gas](/industries/oil-gas).'],
    ],
    'cta_heading' => 'See a site store in DotOne',
    'cta_text' => 'In a 30-minute demo we issue spares and fuel to a machine, raise a maintenance work order and bill a load by weight.',
];
include dirname(__DIR__) . '/includes/templates/industry.php';
