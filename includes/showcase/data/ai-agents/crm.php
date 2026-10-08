<?php
return [
    'label' => 'Watch the agent work',
    'h2' => ['It keeps the pipeline clean.', 'Your team keeps selling.'],
    'features' => [
        ['stale', 'Finds forgotten leads', 'Flags leads with no follow-up and drafts reminders for their owners.'],
        ['clean', 'Cleans up the data', 'Spots duplicate contacts and incomplete leads so your pipeline stays trustworthy.'],
        ['next', 'Suggests the next step', 'Recommends the next action for each lead and routes new leads by your rules.'],
    ],
    'cards' => [
        ['type' => 'alert', 'span' => 3, 'for' => 'stale', 'head' => '12 leads without follow-up', 'text' => 'No activity in 7 days. Reminders drafted for 4 salespeople.', 'icon' => 'users', 'primary' => 'Send reminders', 'done' => 'Reminders sent'],
        ['type' => 'rings', 'span' => 3, 'for' => 'clean', 'title' => 'Pipeline health', 'items' => [['Complete', 86, 'leads'], ['Unique', 97, 'contacts'], ['Followed up', 74, 'this week']]],
        ['type' => 'list', 'span' => 4, 'for' => 'next', 'title' => 'Suggested next steps', 'rows' => [['Shree Polymers · quote opened twice', '', 'Call today', 'blue'], ['Apex Agro · demo done', '', 'Send quote', 'ok'], ['Nova Plast · new enquiry', '', 'Assign to Priya', 'grey']]],
        ['type' => 'list', 'span' => 2, 'for' => 'clean', 'title' => 'Duplicates found', 'rows' => [['Om Ind. / Om Industries', '', 'Merge', 'warn'], ['R. Shah ×2', '', 'Merge', 'warn']]],
    ],
];
