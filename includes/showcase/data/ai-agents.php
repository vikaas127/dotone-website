<?php
return [
    'label' => 'Watch the agents work',
    'h2' => ['A team of AI agents.', 'You stay the boss.'],
    'features' => [
        ['watch', 'Each agent watches one area', 'Inventory, sales, CRM and reporting agents each read the data for their area.'],
        ['draft', 'They prepare the work', 'Indents, reminders, quotes and reports are drafted for your team.'],
        ['approve', 'Nothing moves without you', 'Any change can require approval, and agents only act within roles and permissions.'],
    ],
    'cards' => [
        ['type' => 'list', 'span' => 3, 'tall' => true, 'for' => 'watch', 'title' => 'Agents today', 'rows' => [['Inventory Agent', '4 alerts', 'Active', 'ok'], ['Sales Agent', '2 alerts', 'Active', 'ok'], ['CRM Agent', '12 leads', 'Active', 'ok'], ['Reporting Agent', 'MIS ready', 'Active', 'ok']]],
        ['type' => 'alert', 'span' => 3, 'for' => 'draft approve', 'head' => 'Inventory Agent', 'text' => 'PVC Resin below reorder level. Indent for 2,000 kg drafted.', 'icon' => 'box', 'primary' => 'Approve', 'done' => 'Sent to purchase'],
        ['type' => 'bars', 'span' => 3, 'for' => 'approve draft', 'title' => 'Drafts this week', 'rows' => [['Approved', 82, null, 'ok', '41'], ['Edited first', 24, null, '', '12'], ['Rejected', 8, null, 'warn', '4']]],
    ],
];
