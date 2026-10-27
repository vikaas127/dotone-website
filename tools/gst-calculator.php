<?php
$page = [
    'path' => '/tools/gst-calculator',
    'title' => 'GST Calculator: Add or Remove GST Online | DotOne',
    'description' => 'Free GST calculator for India. Add GST to a price or remove GST from a GST-inclusive amount, with the CGST, SGST and IGST split shown instantly.',
    'breadcrumbs' => [['Free Tools', '/tools'], ['GST Calculator', '/tools/gst-calculator']],
    'h1' => 'GST Calculator',
    'intro' => 'Add GST to a price, or take GST out of a GST-inclusive amount. The calculator shows the tax, the total and the CGST and SGST split for a sale within your state, or IGST for a sale to another state.',
    'script' => '/js/tools/gst-calculator.js',
    'tool' => '
<div class="tool-grid" data-gst>
    <div class="tool-fields">
        <div class="tool-field">
            <span class="tool-label">Calculation</span>
            <div class="tool-seg" role="group" aria-label="Calculation">
                <button type="button" class="is-active" data-mode="add">Add GST</button>
                <button type="button" data-mode="remove">Remove GST</button>
            </div>
        </div>
        <div class="tool-field">
            <label for="gst-amount" data-amount-label>Amount before GST (₹)</label>
            <input id="gst-amount" type="number" inputmode="decimal" min="0" step="any" value="10000">
        </div>
        <div class="tool-row">
            <div class="tool-field">
                <label for="gst-rate">GST rate (%)</label>
                <select id="gst-rate">
                    <option value="0">0%</option>
                    <option value="0.25">0.25%</option>
                    <option value="3">3%</option>
                    <option value="5">5%</option>
                    <option value="12">12%</option>
                    <option value="18" selected>18%</option>
                    <option value="28">28%</option>
                    <option value="40">40%</option>
                    <option value="custom">Other rate</option>
                </select>
            </div>
            <div class="tool-field" data-custom hidden>
                <label for="gst-custom">Other rate (%)</label>
                <input id="gst-custom" type="number" inputmode="decimal" min="0" step="any" value="18">
            </div>
        </div>
        <div class="tool-field">
            <span class="tool-label">Type of supply</span>
            <div class="tool-seg" role="group" aria-label="Type of supply">
                <button type="button" class="is-active" data-supply="intra">Within state</button>
                <button type="button" data-supply="inter">To another state</button>
            </div>
        </div>
    </div>
    <div class="tool-result" aria-live="polite">
        <p class="tool-result-label" data-main-label>Total including GST</p>
        <p class="tool-result-main" data-main>₹11,800.00</p>
        <div class="tool-lines" data-lines></div>
    </div>
</div>',
    'sections' => [
        ['how', 'How to calculate GST', '
<h3>Adding GST to a price</h3>
<div class="guide-callout"><p><strong>GST amount = price × GST rate ÷ 100</strong><br>Total = price + GST amount</p></div>
<p>Example: ₹10,000 at 18% GST. GST = 10,000 × 18 ÷ 100 = ₹1,800. Total = ₹11,800.</p>
<h3>Removing GST from a GST-inclusive amount</h3>
<div class="guide-callout"><p><strong>Price before GST = total × 100 ÷ (100 + GST rate)</strong><br>GST amount = total − price before GST</p></div>
<p>Example: ₹11,800 including 18% GST. Price before GST = 11,800 × 100 ÷ 118 = ₹10,000. GST = ₹1,800.</p>
'],
        ['cgst-sgst-igst', 'CGST, SGST and IGST', '
<ul>
    <li><strong>Sale within your state (intra-state):</strong> GST is split equally into <strong>CGST</strong> (central) and <strong>SGST</strong> (state). At 18%, that is 9% CGST and 9% SGST. In union territories without a legislature, UTGST takes the place of SGST.</li>
    <li><strong>Sale to another state (inter-state):</strong> the whole tax is charged as <strong>IGST</strong>. At 18%, that is 18% IGST.</li>
</ul>
<p>The total tax is the same either way. Only the split, and which government receives it, changes.</p>
'],
        ['rates', 'Which GST rate applies?', '
<p>The rate depends on the HSN code of the goods or the SAC code of the service. Following the GST rate changes that took effect on 22 September 2025, most goods and services fall under the <strong>5%</strong> or <strong>18%</strong> slab, with <strong>40%</strong> for a small list of luxury and sin goods, and special rates such as <strong>0.25%</strong> and <strong>3%</strong> for precious stones and metals. The calculator also keeps the older 12% and 28% rates for checking past invoices.</p>
<p>Rates change through GST Council notifications, so always confirm the current rate for your HSN or SAC code with your CA or on the official GST portal.</p>
'],
    ],
    'faq' => [
        ['How do I calculate 18% GST on an amount?', 'Multiply the amount by 0.18 to get the GST, then add it to the amount. For ₹10,000, GST is ₹1,800 and the total is ₹11,800.'],
        ['How do I remove GST from a total amount?', 'Divide the total by (1 + rate ÷ 100). For ₹11,800 at 18%, 11,800 ÷ 1.18 = ₹10,000 before GST, so the GST is ₹1,800.'],
        ['When is CGST and SGST charged instead of IGST?', 'CGST and SGST are charged when the supplier and the place of supply are in the same state. IGST is charged when they are in different states.'],
        ['Is this GST calculator free?', 'Yes. It is free, needs no sign-up, and runs entirely in your browser.'],
        ['Can I make a GST invoice from this?', 'Use the free [GST invoice generator](/tools/gst-invoice-generator) to create a printable GST invoice with CGST, SGST or IGST worked out per line.'],
    ],
    'related' => [
        ['GST Invoice Generator', '/tools/gst-invoice-generator', 'Create a printable GST invoice in your browser.'],
        ['Cloud Accounting Software', '/accounting', 'GST invoicing with two-way Tally sync.'],
        ['Proforma Invoice Guide', '/guides/proforma-invoice', 'Raise several final invoices from one proforma invoice.'],
    ],
    'cta_heading' => 'Stop working out GST by hand',
    'cta_text' => 'DotOne calculates GST from your item and HSN setup on every quotation and invoice, and syncs it to Tally.',
];
include dirname(__DIR__) . '/includes/templates/tool.php';
