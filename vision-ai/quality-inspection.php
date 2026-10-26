<?php
require_once dirname(__DIR__) . '/includes/site.php';
$page = [
    'path' => '/vision-ai/quality-inspection',
    'title' => 'AI Visual Quality Inspection Software | DotOne',
    'description' => 'Cameras on the line detect defects, Vision AI makes the quality call and every result is logged in DotOne quality records with rework routing.',
    'eyebrow' => 'Vision AI Quality Control',
    'h1' => 'AI Visual Quality Inspection',
    'intro' => 'Every piece inspected, not just a sample. Cameras check products as they move along the line, and each result goes into the same quality record as your manual inspections.',
    'blocks' => [
        ['heading' => 'What the cameras check', 'text' => 'Inspection runs on the line, on every product, without fatigue or shift-to-shift variation.', 'list' => [
            ['Surface defects', 'Scratches, cracks and dents.'],
            ['Dimensions', 'Dimensional and tolerance checks.'],
            ['Assembly', 'Verification that parts are present and fitted correctly.'],
            ['Labels and barcodes', 'Label position, print and barcode checks.'],
        ]],
        ['heading' => 'From camera to quality record', 'text' => 'Results are useful only when they reach the people who act on them.', 'list' => [
            ['See why parts fail', 'Each rejection is logged with the defect type, line and time, so causes show up quickly.'],
            ['One quality record', 'Camera results join manual inspections in DotOne Quality, batch by batch.'],
            ['Rework and alerts', 'Rejections trigger alerts and rework routing, and batches wait for approval before release to stock.'],
            ['Fewer false rejects', 'Models are tuned for false positives and negatives, then retrained as you collect more images.'],
        ]],
        ['heading' => 'Related', 'text' => 'Inspection data connects to the rest of DotOne.', 'cards' => [
            ['/quality-management', 'Quality Management', 'shield', 'Inspections, rejection logging, rework and Vision AI checks.'],
            ['/ai-agents/quality', 'Quality AI Agent', 'spark', 'Spots rejection patterns by machine, shift and vendor.'],
            ['/vision-ai', 'Vision AI', 'eye', 'Safety, floor activity and inspection on your existing cameras.'],
            ['/production-management', 'Production Management', 'factory', 'Job cards and WIP tracking linked to inspection results.'],
            ['/api-reference', 'API Reference', 'link', 'Sync inspection data with other ERP and quality systems.'],
        ]],
    ],
    'faq' => [
        ['Which industries is this suited to?', 'Any line with visible defects, such as automotive parts, FMCG and packaging labels, pharmaceuticals, electronics and PCBs, metal fabrication and textiles.'],
        ['Does it replace manual inspection?', 'It inspects every piece automatically. Manual sample checks can continue, and both results sit in the same quality record.'],
        ['How is it set up?', 'We assess your inspection points, defect types, cameras and lighting. Then we collect and label images, train and validate the model, connect it to the line and DotOne, and go live.'],
        ['Can it connect to our PLCs and other systems?', 'Yes. Inspection can be integrated with production lines and PLCs, and data can be synced to other systems through the API.'],
    ],
    'cta_heading' => 'Book a quality assessment',
    'cta_text' => 'We will review your inspection points and defect types and show how camera inspection would fit your line.',
];
include dirname(__DIR__) . '/includes/templates/hub.php';
