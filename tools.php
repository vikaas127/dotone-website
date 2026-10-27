<?php
$page = [
    'path' => '/tools',
    'title' => 'Free GST, Invoice, Salary and Inventory Tools | DotOne',
    'description' => 'Free tools for Indian businesses: GST invoice, PO, receipt and payslip generators, plus GST, salary, EMI, break-even, EOQ, SKU and barcode tools.',
    'eyebrow' => 'Free Tools',
    'h1' => 'Free Tools for Indian Businesses',
    'intro' => 'Calculators and document generators for GST, invoices, salaries, loans and stock. They are free, need no sign-up and run entirely in your browser.',
    'blocks' => [
        ['heading' => 'Documents', 'text' => 'Fill in the details, then download a PDF or print.', 'cards' => [
            ['/tools/gst-invoice-generator', 'GST Invoice Generator', 'doc', 'A GST tax invoice with CGST, SGST or IGST worked out per line.'],
            ['/tools/purchase-order-generator', 'Purchase Order Generator', 'cart', 'A purchase order with HSN codes, GST, delivery date and terms.'],
            ['/tools/receipt-generator', 'Payment Receipt Generator', 'check', 'A receipt for cash, UPI, cheque or bank payments, with the amount in words.'],
            ['/tools/payslip-generator', 'Payslip Generator', 'id', 'A salary slip with PF, ESI, professional tax and TDS, pro-rated for days paid.'],
        ]],
        ['heading' => 'Tax and salary', 'text' => 'Each calculator shows the formula it uses, with a worked example.', 'cards' => [
            ['/tools/gst-calculator', 'GST Calculator', 'rupee', 'Add or remove GST, with the CGST, SGST and IGST split.'],
            ['/tools/salary-calculator', 'CTC to In-Hand Salary and Income Tax Calculator', 'users', 'Monthly take-home pay after PF, ESI, professional tax and income tax.'],
        ]],
        ['heading' => 'Finance', 'text' => 'Plan loans and pricing with your own numbers.', 'cards' => [
            ['/tools/emi-calculator', 'EMI Calculator', 'trend', 'Monthly EMI, total interest and a year-by-year repayment schedule.'],
            ['/tools/break-even-calculator', 'Break-Even Calculator', 'chart', 'Units and sales needed to cover costs, and the margin of safety.'],
        ]],
        ['heading' => 'Inventory', 'text' => 'Codes and stock planning for stores and warehouses.', 'cards' => [
            ['/tools/eoq-calculator', 'EOQ and Reorder Point Calculator', 'box', 'How much to order, how much safety stock to hold and when to reorder.'],
            ['/tools/sku-generator', 'SKU Generator', 'flow', 'Consistent item codes for every variant, downloadable as CSV.'],
            ['/tools/barcode-generator', 'Barcode and QR Code Generator', 'eye', 'QR codes, Code 128 and EAN-13 barcodes as PNG or SVG.'],
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
