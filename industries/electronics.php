<?php
$page = [
    'path' => '/industries/electronics',
    'title' => 'Electronics Manufacturing ERP Software | DotOne',
    'description' => 'Electronics manufacturing ERP for Indian EMS and OEM makers: multi-level BOMs, shortage checks, serial traceability, stage inspections and purchase.',
    'breadcrumbs' => [['Industries', '/industries'], ['High Tech & Electronics', '/industries/electronics']],
    'name' => 'High Tech & Electronics',
    'icon' => 'cog',
    'h1' => 'Electronics Manufacturing ERP',
    'intro' => 'DotOne runs electronics assembly from component buying to serialised finished units: multi-level BOMs, kitting, stage-wise testing and dispatch. Each unit can be traced back to the component lots and checks that went into it.',
    'challenges' => [
        ['box', 'One missing part stops the line', 'A board has hundreds of components. A single short resistor or IC holds up a whole build, and it is often found at kitting.'],
        ['cart', 'Long and shifting lead times', 'Imported chips and modules take weeks to arrive and prices move often, so buying late or buying too much both cost money.'],
        ['shield', 'Failures traced by guesswork', 'When units fail testing or come back from the field, nobody can quickly tell which component lot or build they came from.'],
        ['doc', 'BOM changes not followed', 'Engineering swaps a part or adds an alternate, but purchase and stores keep working from the old list.'],
    ],
    'workflow' => [
        ['Explode the BOM', 'Orders are checked against the multi-level BOM, from finished unit to sub-assemblies and components.'],
        ['Find shortages and buy', 'Shortages against stock and open POs are listed, and purchase orders go out for what is still short.'],
        ['Kit and issue', 'Components are picked and issued to the build as a kit, with the job card raised for the line.'],
        ['Assemble and test', 'Assembly and testing stages are logged on the job card, and each unit gets its serial number.'],
        ['Dispatch and support', 'Units are dispatched by serial, so a unit that comes back can be looked up by the same number.'],
    ],
    'modules' => ['production-management', 'inventory-management', 'purchase-management', 'quality-management', 'warehouse-management', 'business-analytics'],
    'uses' => [
        ['Multi-level BOMs', 'Finished units, PCB assemblies and components in one layered BOM, used by purchase, stores and the line.'],
        ['Shortage lists before kitting', 'Material is checked against the BOM before the job starts, so shortages are bought, not discovered.'],
        ['Serial-wise traceability', 'Each unit linked to its job card, tests and the component batches issued to it.'],
        ['Rejection by stage', 'Test failures logged by stage, line and component, so repeat faults stand out.'],
    ],
    'faq' => [
        ['Can DotOne handle BOMs with sub-assemblies?', 'Yes. Layered BOMs cover finished units, sub-assemblies and components. Material is checked against the full BOM before a job starts. See the [BOM setup guide](/guides/bom-setup).'],
        ['Can we trace a field failure to a component lot?', 'Yes. Each unit is tracked by serial number, linked to its build, tests and the batches of components issued to it.'],
        ['Does DotOne connect to our AOI or test machines?', 'Connection to specific machines is assessed case by case. Test results can always be recorded against the job card and serial number, and [Vision AI](/vision-ai) can add camera-based inspection where it fits.'],
        ['How does DotOne help with long lead-time parts?', 'Reorder levels and shortage lists show what needs buying early. The [Purchase AI Agent](/ai-agents/purchase) compares vendor quotes and flags late deliveries.'],
    ],
    'cta_heading' => 'Check one of your BOMs in DotOne',
    'cta_text' => 'In a 30-minute demo we load a sample multi-level BOM, run a shortage check against stock and raise the purchase orders.',
];
include dirname(__DIR__) . '/includes/templates/industry.php';
