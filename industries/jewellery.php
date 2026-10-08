<?php
$page = [
    'path' => '/industries/jewellery',
    'title' => 'Jewellery ERP Software for Makers and Retailers | DotOne',
    'description' => 'Jewellery ERP for Indian manufacturers and showrooms: item-level stock by purity and weight, karigar issue and receipt, metal loss, approvals and GST invoicing.',
    'breadcrumbs' => [['Industries', '/industries'], ['Gems & Jewellery', '/industries/jewellery']],
    'name' => 'Gems & Jewellery',
    'icon' => 'spark',
    'h1' => 'Jewellery ERP Software',
    'intro' => 'DotOne runs jewellery making and selling with every piece tracked by tag, purity and weight: metal issued to karigars, pieces received back, showroom stock and sales. Owners can see where every gram of metal is at the end of the day.',
    'challenges' => [
        ['spark', 'Metal out with karigars', 'Gold and silver are issued to karigars and job workers by weight, and the balance due back is kept in a personal notebook.'],
        ['chart', 'Loss that nobody measures', 'Melting, filing and polishing losses vary by karigar and design, but the allowed loss is rarely compared with the actual.'],
        ['box', 'Pieces, not just quantities', 'Each piece has its own gross weight, net weight, purity and stones, so ordinary item-by-quantity stock does not fit.'],
        ['eye', 'Stock out on approval', 'Pieces sent to customers or other showrooms on approval are hard to track, and some are found missing only at the annual count.'],
    ],
    'workflow' => [
        ['Buy and assay metal', 'Bullion and old gold are received by weight and purity, and recorded as metal stock.'],
        ['Issue to karigar', 'Metal and stones are issued to a karigar or job worker against an order, with the weight recorded.'],
        ['Receive finished pieces', 'Pieces come back with their weights. The balance of metal and the loss against the allowance are worked out.'],
        ['Tag and stock', 'Each piece is tagged with gross weight, net weight, purity and stone details, and placed in the showroom or vault.'],
        ['Sell or send on approval', 'Pieces are sold with a GST invoice or sent on approval, and the stock updates in both cases.'],
    ],
    'modules' => ['inventory-management', 'production-management', 'sales-management', 'purchase-management', 'accounting', 'reports-analytics'],
    'uses' => [
        ['Tag-level stock', 'Every piece tracked by its tag number, with weight and purity, through the vault, showroom and sale.'],
        ['Karigar ledger', 'Metal issued, pieces received and the balance due from each karigar, in weight and purity.'],
        ['Metal loss review', 'Actual loss by karigar and design compared with the allowance you set.'],
        ['Approval memos', 'Pieces out on approval with the customer and date, until they are sold or returned.'],
    ],
    'faq' => [
        ['Can DotOne track each piece separately?', 'Yes. Pieces are tracked individually by tag or serial number, with weight and purity recorded, from making to sale. How your tag details are captured is set up during onboarding.'],
        ['Can we track gold given to karigars?', 'Yes. Metal issued and pieces received are recorded against each karigar or job worker, so the balance due back is always known. The format of your karigar ledger is agreed with you during onboarding.'],
        ['Is DotOne linked to BIS hallmarking?', 'No. DotOne does not connect to hallmarking centres or BIS systems. The HUID or hallmark details of a piece can be recorded with it, as records you keep for audits.'],
        ['Do jewellery invoices sync with Tally?', 'Yes. GST invoices sync to Tally Prime or Tally ERP 9 through the [Tally connector](/integrations/tally), so your accountant keeps working as before.'],
    ],
    'cta_heading' => 'Track a gram of gold through DotOne',
    'cta_text' => 'In a 30-minute demo we issue sample metal to a karigar, receive the pieces back, tag them and sell one, so you can see the balance at every step.',
];
include dirname(__DIR__) . '/includes/templates/industry.php';
