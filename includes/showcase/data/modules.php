<?php
return [
    'h2' => ['45+ modules.', 'One set of data.'],
    'features' => [
        ['once', 'Enter it once', 'An order entered in Sales is the same record Production, Stores and Accounts see.'],
        ['flow', 'Work flows between teams', 'Each step hands off to the next module, without emails or re-typing.'],
        ['see', 'See the whole business', 'Reports read across every module, so the numbers always agree.'],
    ],
    'cards' => [
        ['type' => 'steps', 'span' => 3, 'tall' => true, 'for' => 'once flow', 'title' => 'One order, every module', 'steps' => [['CRM', 'Lead won', 'done'], ['Sales', 'Order SO-1044', 'done'], ['Inventory', 'Material reserved', 'done'], ['Production', 'Job cards running', 'now'], ['Accounts', 'Invoice on dispatch', 'todo']]],
        ['type' => 'rings', 'span' => 3, 'for' => 'see', 'title' => 'Today', 'items' => [['On-time', 96, 'dispatch'], ['Stock OK', 92, 'items'], ['Present', 94, 'staff']]],
        ['type' => 'list', 'span' => 3, 'for' => 'flow', 'title' => 'Handoffs today', 'rows' => [['Indent → Purchase', '6', '', ''], ['Order → Production', '9', '', ''], ['Dispatch → Invoice', '14', '', ''], ['Attendance → Payroll', '142', '', '']]],
    ],
];
