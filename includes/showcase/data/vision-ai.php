<?php
return [
    'h2' => ['Your cameras already see it.', 'Now DotOne understands it.'],
    'features' => [
        ['safety', 'Safety on every shift', 'PPE and restricted-zone checks run on your existing CCTV, with an alert the moment something is missed.'],
        ['floor', 'Activity on the floor', 'See which stations are busy, idle or short-staffed, camera by camera.'],
        ['erp', 'Feeds straight into DotOne', 'Detections land in the same records as your production and quality data.'],
    ],
    'cards' => [
        ['type' => 'rings', 'span' => 3, 'for' => 'safety', 'title' => 'PPE compliance today', 'items' => [['Helmet', 96, 'Line 1–4'], ['Gloves', 89, 'Packing'], ['Vest', 93, 'Loading']]],
        ['type' => 'alert', 'span' => 3, 'for' => 'safety', 'head' => 'No helmet · Camera 07', 'text' => 'Loading bay, 2:14 pm. Snapshot saved to the incident log.', 'icon' => 'shield', 'primary' => 'Notify supervisor', 'done' => 'Supervisor notified'],
        ['type' => 'bars', 'span' => 3, 'for' => 'floor', 'title' => 'Station activity', 'note' => 'last hour', 'rows' => [['Line 1', 88, null, '', 'Busy'], ['Line 2', 46, null, 'warn', 'Idle 18 min'], ['Packing', 74, null, '', 'Busy'], ['Loading', 62, null, '', 'Normal']]],
        ['type' => 'list', 'span' => 3, 'for' => 'erp floor', 'title' => 'Sent to DotOne', 'rows' => [['Downtime logged · Line 2', '2:20', 'Production', 'blue'], ['Incident · Camera 07', '2:14', 'Safety', 'bad'], ['Headcount · Shift B', '2:00', 'HRMS', 'grey']]],
        ['type' => 'steps', 'span' => 6, 'for' => 'erp', 'title' => 'From camera to action', 'steps' => [['Existing CCTV feed', 'IP or analog cameras', 'done'], ['Vision AI detects', 'PPE, zones, activity', 'done'], ['Recorded in DotOne', 'Against shift and line', 'done'], ['Supervisor acts', 'Alert on the dashboard', 'now']]],
    ],
];
