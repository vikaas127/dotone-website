<?php
return [
    'label' => 'Watch the agent work',
    'h2' => ['Ask a question.', 'Get the report.'],
    'features' => [
        ['ask', 'Answers in plain language', 'Ask about sales, stock, production or payments and get the answer with the numbers behind it.'],
        ['mis', 'Builds the weekly MIS', 'Prepares recurring reports on schedule and sends them to the people who need them.'],
        ['export', 'Ready for banks and auditors', 'Exports the figures in the format your bank or auditor asks for.'],
    ],
    'cards' => [
        ['type' => 'table', 'span' => 6, 'for' => 'ask', 'title' => '"Compare output between our plants this week"', 'cols' => ['Plant 1', 'Plant 2', 'Plant 3'], 'rows' => [
            ['Output', [['18,240', '▲ 6%', 'up'], ['14,960', '▼ 4%', 'down'], ['16,100', '▲ 2%', 'up']]],
            ['OEE', [['86%', '', ''], ['72%', '', ''], ['81%', '', '']]],
        ]],
        ['type' => 'kpi', 'span' => 3, 'for' => 'mis', 'title' => 'Weekly MIS', 'prefix' => '₹', 'value' => 46.2, 'dec' => 1, 'suffix' => ' L sales', 'delta' => '▲ 7%', 'sub' => 'Sent Monday 8:00 to 6 people', 'spark' => [50, 56, 52, 60, 64, 62, 70]],
        ['type' => 'steps', 'span' => 3, 'for' => 'mis export', 'title' => 'Report schedule', 'steps' => [['Weekly MIS', 'Every Monday', 'done'], ['Stock statement', 'For bank, monthly', 'done'], ['Receivables ageing', 'Due today', 'now']]],
    ],
];
