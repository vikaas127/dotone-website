<?php
require_once dirname(__DIR__) . '/includes/site.php';
$page = [
    'path' => '/integrations/tally',
    'title' => 'Tally Prime Integration: Two-Way Sync | DotOne',
    'description' => 'Sync masters, vouchers and stock between DotOne and Tally Prime or ERP 9. Setup steps, mapping, error handling and FAQs.',
    'eyebrow' => 'Integration',
    'h1' => 'Tally Integration for DotOne',
    'intro' => 'Run production, inventory and sales in DotOne, and push vouchers to Tally Prime automatically. Your accountant gets clean vouchers, and nobody re-keys invoices at month-end.',
    'blocks' => [
        ['heading' => 'What syncs, and in which direction', 'text' => 'Each document type is switched on separately, so you can sync everything or only what your accountant needs.', 'list' => [
            ['Sales invoice and credit note', 'Posted as Sales and Credit Note vouchers with GST breakup. DotOne to Tally.'],
            ['Purchase invoice and debit note', 'Posted as Purchase and Debit Note vouchers. DotOne to Tally.'],
            ['Payments and receipts', 'Posted as Payment and Receipt vouchers. DotOne to Tally.'],
            ['Journal entries', 'Expenses and adjustments posted as Journal vouchers. DotOne to Tally.'],
            ['Material issue and finished goods receipt', 'Optional. Posted as stock journals so stock value in Tally reflects the shop floor. DotOne to Tally.'],
            ['Customer, vendor, item and ledger masters', 'Ledgers and stock items kept aligned. Two-way.'],
        ]],
        ['heading' => 'Setting up the connector', 'text' => 'A small connector on a Windows PC or server on the same network as Tally talks to Tally over ODBC/XML, while DotOne stays in the cloud. Tally must be open, or running as a service, with remote access enabled. Setup is usually done in one working session with your CA present.', 'list' => [
            ['1. Prepare Tally', 'Check that Tally Prime is licensed, the company has the right GST registration and the financial year is open. Export the chart of accounts for mapping.'],
            ['2. Install the connector', 'Install it on a machine that stays on during business hours and can reach both Tally (port 9000) and the internet.'],
            ['3. Link DotOne and Tally', 'Sign in with your DotOne API key, pick the Tally company by its exact name and run the connection test.'],
            ['4. Map ledgers and taxes', 'Match DotOne accounts to Tally ledgers for sales, purchase, GST input and output, round-off and bank, and map HSN/SAC and tax rates.'],
            ['5. Sync masters', 'Import masters from Tally or push them from DotOne, depending on which is the source, and clear duplicates first.'],
            ['6. Trial sync and sign-off', 'Post a few test invoices and payments. Once your CA has checked narration, GST and stock in Tally, switch on scheduled sync.'],
        ]],
        ['heading' => 'Settings you configure once', 'text' => 'After go-live these rarely change.', 'list' => [
            ['Sync schedule', 'In real time on approval, every 15 minutes, or as a nightly batch.'],
            ['GST and HSN mapping', 'DotOne tax templates are linked to Tally duty ledgers, with CGST, SGST and IGST matched to your registration.'],
            ['Error handling', 'Failed vouchers wait in a retry queue with the reason, such as a missing ledger. Fix it and re-push; nothing posts twice.'],
            ['Audit log', 'Every sync attempt is logged with voucher number, Tally reference, time and user, and can be exported.'],
        ]],
    ],
    'faq' => [
        ['Does the connector work with Tally.ERP 9 or only Tally Prime?', 'Both. Tally Prime is recommended for current GST features. ERP 9 needs release 6.6 or later with GST enabled.'],
        ['Can we sync more than one Tally company?', 'Yes. Each DotOne company or warehouse can be mapped to its own Tally company, so each legal entity keeps separate books.'],
        ['What happens if a voucher fails to sync?', 'It stays in the error queue with a reason, such as a missing ledger or a date in a locked period. Fix the cause and retry. The same invoice never posts twice.'],
        ['Is Tally integration included in all plans?', 'The connector is available on Professional and Enterprise plans. Setup and ledger mapping are scoped as part of implementation. See [pricing](/pricing).'],
    ],
    'cta_heading' => 'Connect DotOne to Tally',
    'cta_text' => 'Keep production, inventory and sales in DotOne and clean books in Tally. Book a demo to see a voucher go from approval to Tally.',
];
include dirname(__DIR__) . '/includes/templates/hub.php';
