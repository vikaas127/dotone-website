<?php
$page = [
    'path' => '/industries/logistics',
    'title' => 'ERP for Logistics and Transport Companies | DotOne',
    'description' => 'ERP for logistics and transport companies in India: vehicles, drivers and documents, trips, fuel logs, maintenance work orders and running cost per vehicle.',
    'breadcrumbs' => [['Industries', '/industries'], ['Logistics & Transport', '/industries/logistics']],
    'name' => 'Logistics & Transport',
    'icon' => 'truck',
    'h1' => 'ERP for Logistics and Transport Companies',
    'intro' => 'DotOne runs fleet owners, transporters and logistics operators. Every vehicle has its documents, trips, fuel and maintenance in one record, drivers and staff are paid from attendance, and customers are billed with GST.',
    'challenges' => [
        ['doc', 'Documents that lapse', 'Insurance, permits, fitness and pollution certificates expire on different dates for every vehicle.'],
        ['rupee', 'Fuel is the biggest cost', 'Fuel slips are collected at month-end, so abnormal consumption is noticed weeks later.'],
        ['cog', 'Breakdowns on the road', 'Service is done when a vehicle fails, not when it is due.'],
        ['chart', 'Profit per vehicle unknown', 'Trip income, fuel, tyres, repairs and driver cost sit in different registers.'],
    ],
    'workflow' => [
        ['Register the fleet', 'Vehicles, drivers and their documents are recorded with renewal dates.'],
        ['Run trips', 'Trips are logged per vehicle with origin, destination and distance.'],
        ['Log fuel', 'Fuel is entered per vehicle, and consumption is worked out from the distance run.'],
        ['Maintain', 'Inspections and preventive maintenance raise work orders, with spares issued from stores.'],
        ['Bill and review', 'Customers are invoiced with GST, and running cost is reported per vehicle.'],
    ],
    'modules' => ['fleet-management', 'maintenance-management', 'inventory-management', 'hrms', 'payroll', 'accounting'],
    'uses' => [
        ['Renewal reminders', 'Insurance and document expiry dates for every vehicle in one report.'],
        ['Fuel and mileage', 'Fuel cost and consumption per vehicle.'],
        ['Maintenance work orders', 'Planned and breakdown jobs, with spares and cost recorded.'],
        ['Running cost per vehicle', 'Fuel, maintenance and other costs against each vehicle.'],
    ],
    'faq' => [
        ['Can DotOne remind us before vehicle documents expire?', 'Yes. Insurance and other documents carry expiry dates, and a renewal report shows what is due. See [fleet management](/fleet-management).'],
        ['Can we see fuel consumption for each vehicle?', 'Yes. Fuel is logged per vehicle, and consumption and fuel cost appear in reports.'],
        ['Does it cover warehousing as well?', 'Yes. Inward, storage and outward are covered on the [warehousing](/industries/warehousing) page.'],
        ['Can drivers and staff be paid from the same system?', 'Yes. Attendance, leave and salary run through [HRMS](/hrms) and [payroll](/payroll).'],
    ],
    'cta_heading' => 'See your fleet in DotOne',
    'cta_text' => 'In a 30-minute demo we add a vehicle, log a trip and fuel, raise a maintenance work order and show its running cost.',
];
include dirname(__DIR__) . '/includes/templates/industry.php';
