<?php
return [
    'h2' => ['Never lose a lead.', 'Close more of them.'],
    'features' => [
        ['pipe', 'A pipeline you can see', 'Every lead from enquiry to won, with value and stage, so you know what will close this month.'],
        ['follow', 'Follow-ups that happen', 'Reminders for every lead, and the CRM Agent flags leads nobody has touched.'],
        ['team', 'Team performance', 'Calls, visits and conversions by salesperson, from the same records.'],
    ],
    'cards' => [
        ['type' => 'funnel', 'span' => 3, 'for' => 'pipe', 'title' => 'Pipeline this month', 'steps' => [['Enquiries', 240, 100], ['Qualified', 162, 78], ['Quoted', 96, 58], ['Won', 41, 38]]],
        ['type' => 'kpi', 'span' => 3, 'for' => 'pipe team', 'title' => 'Pipeline value', 'prefix' => '₹', 'value' => 1.24, 'dec' => 2, 'suffix' => ' Cr', 'delta' => '▲ 18%', 'sub' => 'Expected to close: ₹46 L', 'spark' => [32, 40, 38, 50, 58, 54, 66, 74]],
        ['type' => 'alert', 'span' => 3, 'for' => 'follow', 'head' => 'CRM Agent', 'text' => '12 leads have no follow-up in 7 days. Reminders drafted for their owners.', 'icon' => 'users', 'primary' => 'Send reminders', 'done' => 'Reminders sent'],
        ['type' => 'list', 'span' => 3, 'for' => 'follow pipe', 'title' => 'Follow up today', 'rows' => [['Shree Polymers', '₹8.2 L', 'Quote sent', 'blue'], ['Om Industries', '₹5.6 L', 'Call back', 'warn'], ['Apex Agro', '₹3.9 L', 'Demo booked', 'ok'], ['Nova Plast', '₹2.7 L', 'New', 'grey']]],
        ['type' => 'bars', 'span' => 6, 'for' => 'team', 'title' => 'Conversion by salesperson', 'rows' => [['Rahul', 46, null, '', '46%'], ['Priya', 38, null, '', '38%'], ['Amit', 29, null, 'warn', '29%'], ['Neha', 52, null, '', '52%']]],
    ],
];
