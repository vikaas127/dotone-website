<?php
// Keyword landing page. Facts mirror the module and agent pages it links to.
$page = [
    'path' => '/oee-software',
    'title' => 'OEE Machine Monitoring Software | DotOne',
    'description' => 'OEE machine monitoring software: live availability, performance and quality by machine, line and plant, with downtime reasons, alerts and Vision AI on CCTV.',
    'breadcrumbs' => [['Solutions', '/solutions'], ['OEE software', '/oee-software']],
    'eyebrow' => 'OEE monitoring',
    'h1' => 'OEE Machine Monitoring Software',
    'intro' => 'See where production time goes while the shift is still running. DotOne calculates OEE from availability, performance and quality for every machine and line, records downtime with reasons, and alerts supervisors when output falls behind.',
    'highlights' => ['Live OEE', 'Downtime reasons', 'Machine status', 'Vision AI on CCTV'],
    'capabilities_heading' => 'From machine status to OEE',
    'capabilities_intro' => 'OEE is calculated from the same output and downtime your team records on job cards, or captured from machines.',
    'capabilities' => [
        ['chart', 'Live OEE', 'Availability, performance, quality and OEE by machine, line and plant.'],
        ['cog', 'Machine status', 'See which machines are running, idle, broken down or under maintenance.'],
        ['eye', 'Downtime analysis', 'Record downtime reasons and find the losses and bottlenecks behind them.'],
        ['link', 'Machine connections', 'Machines, PLCs and IoT sensors can be connected so output and status are captured without manual entry.'],
        ['bell', 'Alerts', 'Alerts go out for downtime, low output and delays.'],
        ['spark', 'Vision AI', 'DotOne Vision AI uses existing CCTV for line activity, defects and safety, with records sent to production.'],
    ],
    'workflow_intro' => 'How OEE is measured in DotOne.',
    'workflow' => [
        ['Plan', 'Job cards set the target for each machine and shift.'],
        ['Run', 'Output, cycle time and status are tracked as work progresses.'],
        ['Record losses', 'Downtime and its reasons are logged.'],
        ['Alert', 'Supervisors are told when output falls behind.'],
        ['Review', 'Shift and OEE reports show where time was lost.'],
    ],
    'reports' => ['OEE by machine, line and plant', 'Downtime by reason and machine', 'Target versus actual by shift', 'Machine utilisation and cycle time', 'Operator and shift reports', 'OEE trend by week'],
    'connected_intro' => 'OEE draws on these modules.',
    'connected' => ['production-management', 'maintenance-management', 'quality-management', 'reports-analytics'],
    'agent' => 'production',
    'agent_questions' => ['Which machines had the most downtime this week?', 'Why did OEE drop on line 2 yesterday?', 'Show target versus actual for today\'s shifts.'],
    'faq' => [
        ['How does DotOne calculate OEE?', 'From availability, performance and quality for each machine and line, using the output and downtime recorded on the shop floor.'],
        ['Can it connect to our machines?', 'Yes. Machines, PLCs and IoT sensors can be connected so output and machine status are captured without manual entry.'],
        ['Does it work for several plants?', 'Yes. Start with one plant and extend to others, with reports for each site and the whole business.'],
        ['How does Vision AI help?', 'It turns existing CCTV into records of line activity, defects and safety lapses. See [Vision AI](/vision-ai).'],
    ],
    'cta_heading' => 'See OEE on a sample line',
    'cta_text' => 'In a 30-minute demo we set up a sample line and walk through job cards, machine status, downtime and OEE.',
];
include __DIR__ . '/includes/templates/module.php';
