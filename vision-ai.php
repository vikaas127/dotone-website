<?php
require_once __DIR__ . '/includes/site.php';
$page = [
    'path' => '/vision-ai',
    'title' => 'Vision AI and Computer Vision for Manufacturing | DotOne',
    'description' => 'Turn existing CCTV into a data source: defect detection, safety monitoring and line activity, recorded straight into your ERP.',
    'eyebrow' => 'Vision AI',
    'h1' => 'Vision AI for Business Operations',
    'intro' => 'Your cameras already see the shop floor. Vision AI reads the existing CCTV feeds, spots safety lapses, idle stations and defects, and records them in DotOne against the right shift and line.',
    'blocks' => [
        ['heading' => 'What it watches', 'text' => 'Detections land in the same records as your production, quality and HR data.', 'list' => [
            ['Safety on every shift', 'PPE and restricted-zone checks run on existing CCTV, with an alert when something is missed and a snapshot saved to the incident log.'],
            ['Activity on the floor', 'See which stations are busy, idle or short-staffed, camera by camera. Idle time can be logged as downtime in production.'],
            ['Defects on the line', 'Cameras check products for surface, dimension, assembly and label defects as they move.'],
            ['Trends over time', 'Stored history shows recurring patterns and bottlenecks, so supervisors can act before they affect output.'],
        ]],
        ['heading' => 'Works with the cameras you have', 'text' => 'No camera replacement is needed in most plants.', 'list' => [
            ['IP cameras', 'ONVIF-compatible IP and PTZ cameras connect directly.'],
            ['Analog cameras', 'Supported through a video encoder.'],
            ['NVR and DVR systems', 'Connected through RTSP stream access over your network.'],
            ['Cloud or on-premise', 'Choose where processing and data sit. Access is role-based, encrypted and logged.'],
        ]],
        ['heading' => 'Related', 'text' => 'Vision AI results flow into these parts of DotOne.', 'cards' => [
            ['/vision-ai/quality-inspection', 'Visual Quality Inspection', 'eye', 'Cameras inspect every piece and log each rejection in the quality record.'],
            ['/quality-management', 'Quality Management', 'shield', 'Inspections, rejection logging, rework and Vision AI checks in one place.'],
            ['/production-management', 'Production Management', 'factory', 'Job cards, WIP tracking and downtime, with line activity from the cameras.'],
            ['/ai-agents/quality', 'Quality AI Agent', 'spark', 'Spots rejection patterns by machine, shift and vendor.'],
            ['/security', 'Security', 'shield', 'How DotOne protects your data and controls access.'],
        ]],
    ],
    'faq' => [
        ['Do we need new cameras?', 'Usually not. Vision AI works with IP cameras, analog cameras through an encoder, and NVR or DVR systems with RTSP access.'],
        ['Where does the data go?', 'Detections are recorded in DotOne against the shift and line, alongside your production, quality and HR records. You can choose cloud or on-premise deployment.'],
        ['Who can see the camera data?', 'Access is role-based with audit logs, and data is encrypted. Retention periods can be configured to suit your policy.'],
        ['How does a rollout work?', 'We start by checking your cameras and network and agreeing the use cases. Then we connect the streams, calibrate for your site, train your team and set up alerts before go-live.'],
    ],
    'cta_heading' => 'See Vision AI on your floor',
    'cta_text' => 'Book a technical consultation to review your cameras and pick the first use case.',
];
include __DIR__ . '/includes/templates/hub.php';
