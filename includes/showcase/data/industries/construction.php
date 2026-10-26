<?php
return [
    'h2' => ['Every project, on budget.', 'Or flagged before it is not.'],
    'features' => [
        ['budget', 'Budget against actual', 'Spend by project and head as it happens, so overruns are caught mid-project.'],
        ['site', 'Material at every site', 'Site stores, indents and transfers between sites in one record.'],
        ['labour', 'Labour on site', 'Geo-fenced attendance for each site, ready for wages and payroll.'],
    ],
    'cards' => [
        ['type' => 'bars', 'span' => 4, 'for' => 'budget', 'title' => 'Tower B, Kharadi · spent vs budget', 'rows' => [['Cement', 72, 65, 'warn', '₹1.12 Cr'], ['Steel', 58, 65, 'ok', '₹2.04 Cr'], ['Labour', 69, 65, 'warn', '₹86 L'], ['Equipment hire', 41, 65, 'ok', '₹22 L']]],
        ['type' => 'kpi', 'span' => 2, 'for' => 'budget', 'title' => 'Project spend', 'prefix' => '₹', 'value' => 4.24, 'dec' => 2, 'suffix' => ' Cr', 'sub' => 'of ₹6.80 Cr budget', 'spark' => [20, 28, 35, 41, 48, 52, 57, 62]],
        ['type' => 'rings', 'span' => 3, 'for' => 'labour', 'title' => 'Present on site today', 'items' => [['Kharadi', 92, '138 of 150'], ['Wakad', 84, '76 of 90'], ['Hinjewadi', 79, '41 of 52']]],
        ['type' => 'list', 'span' => 3, 'for' => 'site', 'title' => 'Site indents', 'rows' => [['TMT 12 mm · Wakad', '8 t', 'Approval', 'blue'], ['OPC 53 · Kharadi', '400 bags', 'PO sent', 'ok'], ['Shuttering ply · Hinjewadi', '120 sheets', 'Over budget', 'bad']]],
        ['type' => 'alert', 'span' => 6, 'for' => 'budget site', 'head' => 'Operations Agent', 'text' => 'Cement at Tower B has used 72% of its budget with 58% of slab work done. Indent IN-604 sent to the project manager with this note.', 'icon' => 'flow', 'meta' => [['Indent', '300 bags'], ['Budget left', '₹31 L']], 'primary' => 'Send for approval', 'done' => 'Sent to PM'],
    ],
];
