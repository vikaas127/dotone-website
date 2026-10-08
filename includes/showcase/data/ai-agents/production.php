<?php
return [
    'label' => 'Watch the agent work',
    'h2' => ['It watches the shop floor.', 'You keep orders on time.'],
    'features' => [
        ['plan', 'Tracks jobs against plan', 'Reads job cards each shift and flags jobs falling behind and orders at risk.'],
        ['machines', 'Spots downtime early', 'Watches machine status and OEE, and alerts the supervisor when a machine dips.'],
        ['material', 'Checks material first', 'Matches each job\'s BOM against stock before it starts and drafts a request for gaps.'],
    ],
    'cards' => [
        ['type' => 'bars', 'span' => 3, 'for' => 'plan', 'title' => 'Jobs against plan', 'note' => 'Plant 2', 'rows' => [['JC-881 Pipes', 92, 100, 'ok', '9,200 m'], ['JC-882 Film', 58, 100, 'warn', '2,900 kg'], ['JC-883 Caps', 76, 100, '', '38,000'], ['JC-884 Sheets', 41, 100, 'warn', '820']]],
        ['type' => 'gauge', 'span' => 3, 'for' => 'machines', 'title' => 'OEE · Extruder 1', 'note' => 'Today', 'pct' => 64, 'center' => '64%', 'min' => '0', 'max' => 'Target 80%'],
        ['type' => 'alert', 'span' => 3, 'for' => 'material plan', 'head' => 'JC-886 short of material', 'text' => 'BOM needs more Masterbatch than the plant store holds.', 'icon' => 'factory', 'meta' => [['Masterbatch Blue', '45 kg short'], ['Job starts', 'Tomorrow, 6:00']], 'primary' => 'Raise request', 'done' => 'Sent to stores'],
        ['type' => 'steps', 'span' => 3, 'for' => 'machines plan', 'title' => 'Agent run · end of shift', 'steps' => [['Read job cards', '14 jobs', 'done'], ['Logged downtime', 'Extruder 1, 52 min', 'done'], ['Flagged jobs behind', '2 jobs', 'done'], ['Alerted supervisor', 'Shift B', 'now']]],
        ['type' => 'list', 'span' => 6, 'for' => 'plan', 'title' => 'Orders at risk', 'rows' => [['SO-1052 · Om Industries · due 14 Oct', '', 'Film behind plan', 'bad'], ['SO-1055 · Shree Polymers · due 16 Oct', '', 'Material short', 'warn'], ['SO-1058 · Metro Pipes · due 18 Oct', '', 'On track', 'ok']]],
    ],
];
