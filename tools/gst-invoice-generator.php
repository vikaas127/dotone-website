<?php
$states = ['Andaman and Nicobar Islands', 'Andhra Pradesh', 'Arunachal Pradesh', 'Assam', 'Bihar', 'Chandigarh', 'Chhattisgarh', 'Dadra and Nagar Haveli and Daman and Diu', 'Delhi', 'Goa', 'Gujarat', 'Haryana', 'Himachal Pradesh', 'Jammu and Kashmir', 'Jharkhand', 'Karnataka', 'Kerala', 'Ladakh', 'Lakshadweep', 'Madhya Pradesh', 'Maharashtra', 'Manipur', 'Meghalaya', 'Mizoram', 'Nagaland', 'Odisha', 'Puducherry', 'Punjab', 'Rajasthan', 'Sikkim', 'Tamil Nadu', 'Telangana', 'Tripura', 'Uttar Pradesh', 'Uttarakhand', 'West Bengal'];
$opts = function ($selected) use ($states) {
    $out = '';
    foreach ($states as $s) $out .= '<option' . ($s === $selected ? ' selected' : '') . '>' . $s . '</option>';
    return $out;
};
$page = [
    'path' => '/tools/gst-invoice-generator',
    'title' => 'Free GST Invoice Generator: Create and Print | DotOne',
    'description' => 'Free GST invoice generator for India. Add your business and customer details and line items with HSN and GST rates, then print or save the GST invoice as PDF.',
    'breadcrumbs' => [['Free Tools', '/tools'], ['GST Invoice Generator', '/tools/gst-invoice-generator']],
    'h1' => 'Free GST Invoice Generator',
    'intro' => 'Fill in your business details, your customer and the items sold. The invoice works out CGST and SGST for a sale within your state, or IGST for a sale to another state, and you can print it or save it as a PDF.',
    'script' => '/js/tools/gst-invoice-generator.js',
    'tool' => '
<div data-inv>
    <div class="tool-grid">
        <div class="tool-fields">
            <p class="tool-label">Your business</p>
            <div class="tool-field"><label for="inv-s-name">Business name</label><input id="inv-s-name" value="Shree Ganesh Industries"></div>
            <div class="tool-field"><label for="inv-s-addr">Address</label><textarea id="inv-s-addr" rows="2">Plot 14, GIDC Estate, Vatva, Ahmedabad 382445</textarea></div>
            <div class="tool-row">
                <div class="tool-field"><label for="inv-s-gstin">GSTIN</label><input id="inv-s-gstin" value="24ABCDE1234F1Z5" maxlength="15"></div>
                <div class="tool-field"><label for="inv-s-state">State</label><select id="inv-s-state">' . $opts('Gujarat') . '</select></div>
            </div>
        </div>
        <div class="tool-fields">
            <p class="tool-label">Bill to</p>
            <div class="tool-field"><label for="inv-b-name">Customer name</label><input id="inv-b-name" value="Patel Traders"></div>
            <div class="tool-field"><label for="inv-b-addr">Address</label><textarea id="inv-b-addr" rows="2">22, Station Road, Surat 395003</textarea></div>
            <div class="tool-row">
                <div class="tool-field"><label for="inv-b-gstin">GSTIN</label><input id="inv-b-gstin" value="24PQRSX5678K1Z2" maxlength="15"></div>
                <div class="tool-field"><label for="inv-b-state">State (place of supply)</label><select id="inv-b-state">' . $opts('Gujarat') . '</select></div>
            </div>
        </div>
    </div>
    <div class="tool-row" style="margin-top:1rem">
        <div class="tool-field"><label for="inv-no">Invoice number</label><input id="inv-no" value="INV/2026-27/001"></div>
        <div class="tool-field"><label for="inv-date">Invoice date</label><input id="inv-date" type="date"></div>
    </div>
    <p class="tool-label" style="margin-top:1.5rem">Items</p>
    <div class="inv-scroll">
        <table class="inv-items">
            <thead><tr><th style="min-width:12rem">Description</th><th style="min-width:6rem">HSN/SAC</th><th style="min-width:5rem">Qty</th><th style="min-width:5rem">Unit</th><th style="min-width:7rem">Rate (₹)</th><th style="min-width:5.5rem">GST %</th><th></th></tr></thead>
            <tbody data-rows></tbody>
        </table>
    </div>
    <div class="tool-actions">
        <button type="button" class="tool-btn tool-btn--ghost" data-add>+ Add item</button>
        <button type="button" class="tool-btn" data-print>Print or save as PDF</button>
    </div>
    <div class="inv-preview" data-preview aria-live="polite"></div>
</div>',
    'sections' => [
        ['what-to-include', 'What a GST tax invoice must include', '
<p>Under the GST invoice rules, a tax invoice should show at least:</p>
<ul>
    <li>Supplier\'s name, address and GSTIN.</li>
    <li>A unique, consecutive invoice number of up to 16 characters, and the invoice date.</li>
    <li>Customer\'s name and address, and GSTIN if the customer is registered.</li>
    <li>Place of supply, with the state name, for inter-state supplies.</li>
    <li>HSN code for goods or SAC code for services.</li>
    <li>Description, quantity and unit, value, and taxable value after any discount.</li>
    <li>GST rate and amount, split into CGST and SGST, or IGST.</li>
    <li>Whether tax is payable on reverse charge, and the signature of the supplier or an authorised person.</li>
</ul>
<p>This generator covers the main fields. Check the full requirements for your business with your CA.</p>
'],
        ['e-invoice', 'When you need e-invoicing instead', '
<p>Businesses whose aggregate turnover crosses the e-invoicing threshold (currently ₹5 crore in any financial year) must generate e-invoices for B2B supplies by registering them on the Invoice Registration Portal to get an IRN and QR code. A printed invoice from a generator like this is not enough for them. Goods moved above the e-way bill limit also need an e-way bill.</p>
<p>If you raise many invoices, accounting software is faster and safer: invoice numbers, HSN codes, rates and customer details come from your masters instead of being typed every time.</p>
'],
    ],
    'faq' => [
        ['Is this GST invoice generator free?', 'Yes. It is free, needs no sign-up, and works entirely in your browser. Nothing you enter is sent to us.'],
        ['How do I save the invoice as a PDF?', 'Click "Print or save as PDF" and choose "Save as PDF" as the printer in the print dialog.'],
        ['When does the invoice show IGST instead of CGST and SGST?', 'When your state and the customer\'s state (the place of supply) are different. For a sale within the same state, GST is split equally into CGST and SGST.'],
        ['Can I use this for e-invoicing?', 'No. Businesses above the e-invoicing turnover threshold must register B2B invoices on the Invoice Registration Portal to get an IRN. Use accounting software that supports e-invoicing.'],
        ['Is there software that makes GST invoices automatically?', 'Yes. [DotOne accounting](/accounting) raises GST invoices from sales orders, with tax worked out from your item and HSN setup, and syncs them to Tally.'],
    ],
    'related' => [
        ['GST Calculator', '/tools/gst-calculator', 'Add or remove GST with the CGST, SGST and IGST split.'],
        ['Cloud Accounting Software', '/accounting', 'GST invoicing from sales orders, synced to Tally.'],
        ['Proforma Invoice Guide', '/guides/proforma-invoice', 'Bill one proforma invoice in several dispatches.'],
    ],
    'cta_heading' => 'Raise GST invoices from your sales orders',
    'cta_text' => 'DotOne turns orders into GST invoices with HSN and tax from your masters, and posts them to Tally. See it in a 30-minute demo.',
];
include dirname(__DIR__) . '/includes/templates/tool.php';
