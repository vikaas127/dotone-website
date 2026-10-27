<?php
$page = [
    'path' => '/tools',
    'title' => 'Free GST, Salary and Inventory Tools | DotOne',
    'description' => 'Free business tools for Indian companies: GST calculator, GST invoice generator, CTC to in-hand salary calculator, and EOQ and reorder point calculator.',
    'eyebrow' => 'Free Tools',
    'h1' => 'Free Tools for Indian Businesses',
    'intro' => 'Quick calculators and generators for GST, salaries and stock. They are free, need no sign-up and run entirely in your browser.',
    'blocks' => [
        ['heading' => 'Pick a tool', 'text' => 'Each tool explains the formula it uses, with a worked example.', 'cards' => [
            ['/tools/gst-calculator', 'GST Calculator', 'rupee', 'Add or remove GST, with the CGST, SGST and IGST split.'],
            ['/tools/gst-invoice-generator', 'GST Invoice Generator', 'doc', 'Create a GST tax invoice and print or save it as a PDF.'],
            ['/tools/salary-calculator', 'CTC to In-Hand Salary Calculator', 'users', 'Monthly take-home pay after PF, ESI, professional tax and income tax.'],
            ['/tools/eoq-calculator', 'EOQ and Reorder Point Calculator', 'box', 'How much to order, how much safety stock to hold and when to reorder.'],
        ]],
    ],
    'faq' => [
        ['Are these tools free?', 'Yes. All tools are free to use, with no sign-up and no limit on how often you use them.'],
        ['Is my data stored?', 'No. Every tool calculates in your browser. Nothing you enter is sent to DotOne or stored.'],
        ['Are the results accurate for tax and compliance?', 'They follow the published rules and show their formulas, but they are estimates for planning. Confirm tax, GST and payroll figures with your CA.'],
        ['Can DotOne do these calculations automatically?', 'Yes. DotOne works out GST on every invoice, PF, ESI, PT and TDS in payroll, and raises purchase indents at reorder levels. [Book a demo](/demo) to see it.'],
    ],
    'cta_heading' => 'Do this every day without the spreadsheets',
    'cta_text' => 'DotOne handles GST invoicing, payroll and stock planning in one cloud ERP. See it in a 30-minute demo.',
];
include __DIR__ . '/includes/templates/hub.php';
