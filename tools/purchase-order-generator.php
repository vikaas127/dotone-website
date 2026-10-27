<?php
$states = require dirname(__DIR__) . '/includes/data/states.php';
$opts = function ($selected) use ($states) {
    $out = '';
    foreach ($states as $s) $out .= '<option' . ($s === $selected ? ' selected' : '') . '>' . $s . '</option>';
    return $out;
};
$page = [
    'path' => '/tools/purchase-order-generator',
    'title' => 'Free Purchase Order Generator with GST | DotOne',
    'description' => 'Free purchase order generator for India. Add vendor details, items with HSN, rates and GST, delivery date and terms, then download the purchase order as a PDF.',
    'breadcrumbs' => [['Free Tools', '/tools'], ['Purchase Order Generator', '/tools/purchase-order-generator']],
    'h1' => 'Purchase Order Generator',
    'intro' => 'Create a purchase order for a vendor: items with HSN codes, quantities, rates and GST, the delivery date and your terms. GST is split into CGST and SGST, or IGST, from the two states, and you can download the PO as a PDF.',
    'script' => ['/js/tools/doc-export.js', '/js/tools/purchase-order-generator.js'],
    'tool' => '
<div data-po>
    <div class="tool-grid">
        <div class="tool-fields">
            <p class="tool-label">Your business (buyer)</p>
            <div class="tool-field"><label for="po-b-name">Business name</label><input id="po-b-name" value="Shree Ganesh Industries"></div>
            <div class="tool-field"><label for="po-b-addr">Billing and delivery address</label><textarea id="po-b-addr" rows="2">Plot 14, GIDC Estate, Vatva, Ahmedabad 382445</textarea></div>
            <div class="tool-row">
                <div class="tool-field"><label for="po-b-gstin">GSTIN</label><input id="po-b-gstin" value="24ABCDE1234F1Z5" maxlength="15"></div>
                <div class="tool-field"><label for="po-b-state">State</label><select id="po-b-state">' . $opts('Gujarat') . '</select></div>
            </div>
        </div>
        <div class="tool-fields">
            <p class="tool-label">Vendor</p>
            <div class="tool-field"><label for="po-v-name">Vendor name</label><input id="po-v-name" value="Mehta Resins Pvt Ltd"></div>
            <div class="tool-field"><label for="po-v-addr">Address</label><textarea id="po-v-addr" rows="2">Survey 210, MIDC Taloja, Navi Mumbai 410208</textarea></div>
            <div class="tool-row">
                <div class="tool-field"><label for="po-v-gstin">GSTIN</label><input id="po-v-gstin" value="27LMNOP4321Q1Z8" maxlength="15"></div>
                <div class="tool-field"><label for="po-v-state">State</label><select id="po-v-state">' . $opts('Maharashtra') . '</select></div>
            </div>
        </div>
    </div>
    <div class="tool-row" style="margin-top:1rem">
        <div class="tool-field"><label for="po-no">PO number</label><input id="po-no" value="PO/2026-27/0087"></div>
        <div class="tool-field"><label for="po-date">PO date</label><input id="po-date" type="date"></div>
    </div>
    <div class="tool-row" style="margin-top:1rem">
        <div class="tool-field"><label for="po-delivery">Delivery by</label><input id="po-delivery" type="date"></div>
        <div class="tool-field"><label for="po-pay">Payment terms</label><input id="po-pay" value="30 days from receipt of goods and invoice"></div>
    </div>
    <p class="tool-label" style="margin-top:1.5rem">Items</p>
    <div class="inv-scroll">
        <table class="inv-items">
            <thead><tr><th style="min-width:12rem">Description</th><th style="min-width:6rem">HSN/SAC</th><th style="min-width:5rem">Qty</th><th style="min-width:5rem">Unit</th><th style="min-width:7rem">Rate (₹)</th><th style="min-width:5.5rem">GST %</th><th></th></tr></thead>
            <tbody data-rows></tbody>
        </table>
    </div>
    <div class="tool-field" style="margin-top:1rem"><label for="po-terms">Other terms (optional)</label><textarea id="po-terms" rows="2">Material to be supplied with test certificate. Rejected material will be returned at the vendor\'s cost. Please quote the PO number on your invoice.</textarea></div>
    <div class="tool-actions">
        <button type="button" class="tool-btn tool-btn--ghost" data-add>+ Add item</button>
        <button type="button" class="tool-btn" data-download>Download PDF</button>
        <button type="button" class="tool-btn tool-btn--ghost" data-print>Print</button>
    </div>
    <div class="inv-preview" data-preview aria-live="polite"></div>
</div>',
    'sections' => [
        ['what', 'What a purchase order should include', '
<ul>
    <li>Buyer and vendor names, addresses and GSTINs.</li>
    <li>A unique PO number and date, so the vendor can quote it on their invoice.</li>
    <li>Each item with its description, HSN code, quantity, unit, agreed rate and GST rate.</li>
    <li>Delivery date and delivery address.</li>
    <li>Payment terms, and terms for quality, test certificates and rejections.</li>
    <li>The signature of the person authorised to approve purchases.</li>
</ul>
'],
        ['why', 'Why every purchase needs a PO', '
<p>A purchase order is the buyer\'s written commitment to buy at an agreed price. It is the first of the three documents accounts matches before paying a vendor: the PO, the goods receipt note (GRN) and the vendor\'s invoice. Without a PO, there is nothing to check the bill against.</p>
<p>See our guide to <a href="/guides/procure-to-pay">procure to pay</a> for the full process, with a three-way matching example.</p>
'],
        ['gst', 'GST on a purchase order', '
<p>A PO does not create a GST liability; the vendor\'s tax invoice does. The GST shown on a PO is the expected tax, so both sides agree the landed cost upfront. When the vendor is in another state, the PO shows IGST; when in the same state, CGST and SGST.</p>
'],
    ],
    'faq' => [
        ['Is this purchase order generator free?', 'Yes. It is free, needs no sign-up and runs in your browser. Nothing you enter is sent to us.'],
        ['How do I download the purchase order?', 'Click "Download PDF". The PO downloads as an A4 PDF named after the PO number.'],
        ['What is the difference between a purchase order and an invoice?', 'The buyer issues a purchase order to place an order at agreed terms. The vendor issues an invoice to bill for what was supplied.'],
        ['Is GST charged on a purchase order?', 'No. The PO shows the expected GST so both sides agree the cost. GST is charged on the vendor\'s tax invoice.'],
        ['Can POs be raised automatically?', 'Yes. In [DotOne Purchase Management](/purchase-management), indents are raised from reorder levels and POs are generated from the chosen quote and routed for approval.'],
    ],
    'related' => [
        ['Procure to Pay', '/guides/procure-to-pay', 'From indent to vendor payment, with three-way matching.'],
        ['Purchase Management', '/purchase-management', 'RFQs, vendor comparison, approved POs and GRN.'],
        ['Vendor Management', '/guides/vendor-management', 'Vendor scorecards and KPIs.'],
    ],
    'cta_heading' => 'Raise approved POs in a few clicks',
    'cta_text' => 'DotOne generates POs from indents and quotes, routes them for approval and receives material against them.',
];
include dirname(__DIR__) . '/includes/templates/tool.php';
