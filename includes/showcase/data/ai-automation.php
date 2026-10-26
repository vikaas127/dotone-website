<?php
return [
    'h2' => ['Routine work, done for you.', 'Within the rules you set.'],
    'features' => [
        ['auto', 'What gets automated', 'Reorder indents, follow-up reminders, MIS reports and approval routing run without anyone chasing them.'],
        ['approve', 'Act with approval', 'Agents prepare the indent, reminder or report. A person approves it before it goes out.'],
        ['levels', 'You choose the level', 'For each task, decide whether the agent informs, recommends, acts with approval or acts within rules.'],
    ],
    'cards' => [
        ['type' => 'list', 'span' => 3, 'tall' => true, 'for' => 'auto', 'title' => 'Done today', 'rows' => [['2 reorder indents drafted', '', 'Inventory', 'blue'], ['5 quotation follow-ups', '', 'Sales', 'blue'], ['3 payment reminders', '', 'Finance', 'warn'], ['Weekly MIS shared', '', 'Reporting', 'ok'], ['PO-2087 escalated', '', 'Operations', 'warn']]],
        ['type' => 'alert', 'span' => 3, 'for' => 'approve', 'head' => 'Inventory Agent', 'text' => 'Masterbatch Blue: 150 kg left, 400 kg needed this week. Indent drafted.', 'icon' => 'box', 'primary' => 'Approve', 'done' => 'Sent to purchase'],
        ['type' => 'steps', 'span' => 3, 'for' => 'approve auto', 'title' => 'Reorder, automated', 'steps' => [['Stock falls below level', 'Workflow rule', 'done'], ['Indent drafted', 'Inventory Agent', 'done'], ['Approval', 'Stores head', 'now'], ['PO to vendor', 'Purchase', 'todo']]],
        ['type' => 'table', 'span' => 6, 'for' => 'levels', 'title' => 'Autonomy by task', 'cols' => ['Level', 'Approver'], 'rows' => [
            ['Reorder indents', [['Act with approval', '', ''], ['Stores head', '', '']]],
            ['Payment reminders', [['Act with approval', '', ''], ['Accounts', '', '']]],
            ['Vendor choice', [['Recommend', '', ''], ['Purchase head', '', '']]],
            ['Weekly MIS', [['Act within rules', '', ''], ['None', '', '']]],
        ]],
    ],
];
