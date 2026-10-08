<?php
return [
    'h2' => ['Money in, money out.', 'Always in sync with Tally.'],
    'features' => [
        ['recv', 'Receivables you can act on', 'See who owes what and for how long, with ageing built from your live invoices.'],
        ['gst', 'GST worked out for you', 'Tax calculated from item and HSN setup on every invoice, with a GST summary by rate.'],
        ['tally', 'Two-way Tally sync', 'Masters, vouchers and stock flow between DotOne and Tally, so your accountant keeps working as before.'],
    ],
    'cards' => [
        ['type' => 'bars', 'span' => 3, 'for' => 'recv', 'title' => 'Receivables ageing', 'rows' => [['0–30 days', 78, null, 'ok', '₹24.6 L'], ['31–60 days', 42, null, '', '₹11.2 L'], ['61–90 days', 22, null, 'warn', '₹5.8 L'], ['90+ days', 14, null, 'warn', '₹3.1 L']]],
        ['type' => 'kpi', 'span' => 3, 'for' => 'recv', 'title' => 'Collected this month', 'prefix' => '₹', 'value' => 41.8, 'dec' => 1, 'suffix' => ' L', 'delta' => '▲ 14%', 'sub' => 'Outstanding: ₹44.7 L', 'spark' => [30, 36, 44, 40, 52, 58, 62, 70]],
        ['type' => 'donut', 'span' => 3, 'for' => 'gst', 'title' => 'GST by rate', 'center' => '₹11.3 L', 'center_sub' => 'this month', 'segments' => [['18%', 62], ['12%', 21], ['5%', 12], ['28%', 5]]],
        ['type' => 'steps', 'span' => 3, 'for' => 'tally', 'title' => 'Tally sync', 'steps' => [['Ledgers and items', 'Synced 10:42', 'done'], ['Sales vouchers', '48 pushed', 'done'], ['Purchase vouchers', '21 pushed', 'done'], ['Next sync', 'In 15 minutes', 'now']]],
        ['type' => 'list', 'span' => 6, 'for' => 'recv', 'title' => 'Overdue customers', 'rows' => [['Metro Pipes', '₹3.1 L', '96 days', 'bad'], ['Apex Agro', '₹2.4 L', '72 days', 'warn'], ['Nova Plast', '₹1.6 L', '64 days', 'warn']]],
    ],
];
