<?php
return [
    'h2' => ['Every piece inspected.', 'Not just a sample.'],
    'features' => [
        ['detect', 'Defects caught on the line', 'Cameras check surface defects, dimensions, assembly and labels as products move.'],
        ['why', 'See why parts fail', 'Each rejection is logged with the defect type, line and time, so causes show up fast.'],
        ['link', 'One quality record', 'Camera results join the manual inspections in DotOne Quality, batch by batch.'],
    ],
    'cards' => [
        ['type' => 'gauge', 'span' => 3, 'for' => 'detect', 'title' => 'Pass rate · Line 1', 'pct' => 97, 'min' => '0%', 'center' => '97.4% passed', 'max' => '100%'],
        ['type' => 'kpi', 'span' => 3, 'for' => 'detect', 'title' => 'Inspected today', 'value' => 18240, 'sub' => '476 rejected automatically', 'spark' => [40, 55, 62, 58, 70, 74, 68, 80, 84]],
        ['type' => 'donut', 'span' => 3, 'for' => 'why', 'title' => 'Defect types', 'center' => '476', 'center_sub' => 'rejects', 'segments' => [['Surface', 46], ['Dimension', 27], ['Label', 17], ['Assembly', 10]]],
        ['type' => 'list', 'span' => 3, 'for' => 'why link', 'title' => 'Latest rejects', 'rows' => [['Scratch · Line 1 · 2:41', '', 'Surface', 'bad'], ['Label skew · Line 3 · 2:38', '', 'Label', 'warn'], ['Short by 0.4 mm · 2:31', '', 'Dimension', 'warn']]],
        ['type' => 'steps', 'span' => 6, 'for' => 'link', 'title' => 'Batch B-2291', 'steps' => [['Camera inspection', '12,000 checked, 1.8% rejected', 'done'], ['Manual sample check', 'Passed', 'done'], ['Quality record updated', 'In DotOne Quality', 'done'], ['Released to stock', 'Waiting for approval', 'now']]],
    ],
];
