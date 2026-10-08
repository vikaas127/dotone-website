<?php
return [
    'label' => 'Watch the agent work',
    'h2' => ['It finds what is stuck.', 'Work keeps moving.'],
    'features' => [
        ['stuck', 'Finds stuck approvals', 'Reads approvals in every module and flags what has waited past your limit.'],
        ['handoff', 'Watches the hand-offs', 'Spots work waiting between teams, such as an order waiting on stock or an indent waiting on approval.'],
        ['nudge', 'Nudges the owner', 'Drafts a nudge to the person holding each item and sends a daily operations summary.'],
    ],
    'cards' => [
        ['type' => 'list', 'span' => 3, 'for' => 'stuck', 'title' => 'Waiting on approval', 'rows' => [['IND-618 · Purchase head', '3 days', 'Overdue', 'bad'], ['PO-3322 · Director', '2 days', 'Overdue', 'warn'], ['Leave · Plant 2 HR', '1 day', 'Pending', 'grey']]],
        ['type' => 'funnel', 'span' => 3, 'for' => 'handoff', 'title' => 'SO-1061 · Om Industries', 'steps' => [['Order confirmed', '8 Oct', 100], ['Waiting on stock', '2 days', 78], ['Production', 'Not started', 56], ['Dispatch', 'Due 15 Oct', 34]]],
        ['type' => 'alert', 'span' => 3, 'for' => 'nudge stuck', 'head' => '4 nudges drafted', 'text' => 'Items waiting longer than your set limits.', 'icon' => 'flow', 'meta' => [['Purchase head', '2 items'], ['Stores', '2 items']], 'primary' => 'Send nudges', 'done' => 'Nudges sent'],
        ['type' => 'steps', 'span' => 3, 'for' => 'nudge handoff', 'title' => 'Daily summary · 18:00', 'steps' => [['Read all modules', '6 departments', 'done'], ['Stuck approvals', '5 items', 'done'], ['Delayed hand-offs', '3 items', 'done'], ['Summary sent', 'Plant head, owners', 'now']]],
    ],
];
