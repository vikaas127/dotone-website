<?php
return [
    'h2' => ['ERP that tells you', 'what needs attention.'],
    'features' => [
        ['erp', 'A complete ERP underneath', 'Sales, stock, production, HR and finance on one database.'],
        ['agents', 'AI agents on top', 'Agents read that data, find problems and draft the fix.'],
        ['you', 'Your approval in between', 'You choose what agents may do on their own and what needs a yes.'],
    ],
    'cards' => [
        ['type' => 'steps', 'span' => 3, 'tall' => true, 'for' => 'erp agents you', 'title' => 'How it works', 'steps' => [['ERP data', 'Orders, stock, jobs', 'done'], ['AI finds the issue', 'Stock below level', 'done'], ['Agent drafts action', 'Purchase indent', 'done'], ['You approve', 'One tap', 'now'], ['Result', 'PO sent, stock safe', 'todo']]],
        ['type' => 'alert', 'span' => 3, 'for' => 'agents you', 'head' => 'Sales Agent', 'text' => 'SO-1044 may miss dispatch. Printing is 40% behind plan.', 'icon' => 'trend', 'primary' => 'Notify sales head', 'done' => 'Alert sent'],
        ['type' => 'rings', 'span' => 3, 'for' => 'erp', 'title' => 'Live today', 'items' => [['On-time', 96, 'dispatch'], ['OEE', 81, 'plant'], ['Present', 94, 'staff']]],
    ],
];
