<?php
$page = [
    'path' => '/guides/proforma-invoice',
    'title' => 'Multiple Final Invoices From One Proforma Invoice | DotOne',
    'description' => 'How to raise multiple final invoices from one proforma invoice: partial dispatch, GST rules, a worked example, and tracking what is still to be billed.',
    'breadcrumbs' => [['Guides', '/guides'], ['Proforma Invoice to Final Invoice', '/guides/proforma-invoice']],
    'article' => ['published' => '2026-10-27'],
    'eyebrow' => 'Sales Guide',
    'read_time' => '8 min',
    'h1' => 'How to Raise Multiple Final Invoices From One Proforma Invoice',
    'intro' => 'Indian businesses often agree one proforma invoice with a customer and then dispatch the order in parts. Each dispatch needs its own tax invoice, and the hard part is knowing what is still left to bill. This guide covers the rules, a worked example and how to keep the numbers straight.',
    'sections' => [
        ['what-is-a-proforma-invoice', 'What is a proforma invoice?', '
<p>A <strong>proforma invoice (PI)</strong> is a document you send a buyer before the sale: the items, quantities, rates, taxes and terms you are offering. It works like a firm quotation. The buyer uses it to approve the purchase, arrange funds, open a letter of credit or pay an advance.</p>
<p>A proforma invoice is <strong>not a tax invoice</strong>. It does not record a sale in your books and it does not create a GST liability by itself. The sale happens when you raise the final tax invoice, normally at the time of dispatch.</p>
'],
        ['format', 'Proforma invoice format', '
<p>There is no single prescribed format for a proforma invoice, but a clear one looks like a tax invoice and is plainly marked as a proforma. Include:</p>
<div class="guide-table-wrap"><table>
    <thead><tr><th>Section</th><th>What to show</th></tr></thead>
    <tbody>
        <tr><td>Heading</td><td>"Proforma Invoice", so nobody mistakes it for a tax invoice</td></tr>
        <tr><td>Numbers and dates</td><td>PI number from its own series, PI date and validity date</td></tr>
        <tr><td>Seller</td><td>Name, address, GSTIN, contact details</td></tr>
        <tr><td>Buyer</td><td>Name, billing and shipping address, GSTIN if registered, place of supply</td></tr>
        <tr><td>Items</td><td>Description, HSN or SAC code, quantity, unit, rate, discount, taxable value</td></tr>
        <tr><td>Tax</td><td>GST rate and the expected CGST and SGST, or IGST</td></tr>
        <tr><td>Terms</td><td>Delivery schedule, payment terms and advance required, bank details, freight and packing</td></tr>
    </tbody>
</table></div>
<p>To lay out the final tax invoice once goods are dispatched, you can use our free <a href="/tools/gst-invoice-generator">GST invoice generator</a>.</p>
'],
        ['why-split', 'Why one proforma invoice becomes several final invoices', '
<p>One PI turning into several tax invoices is normal, not an exception. Common reasons:</p>
<ul>
    <li><strong>Partial dispatch.</strong> You produce or receive stock in batches and ship what is ready.</li>
    <li><strong>Scheduled delivery.</strong> The customer wants the order delivered month by month.</li>
    <li><strong>Transport limits.</strong> The order does not fit on one truck, and each consignment needs its own invoice and e-way bill.</li>
    <li><strong>Different delivery locations.</strong> Parts of the order go to different sites of the same customer.</li>
    <li><strong>Payment milestones.</strong> The customer pays in stages and you dispatch against each payment.</li>
</ul>
'],
        ['gst-rules', 'GST rules to keep in mind', '
<p>Each final invoice is a full tax invoice in its own right. That means:</p>
<ul>
    <li>Every final invoice gets its <strong>own invoice number</strong> from your normal series. Do not reuse the PI number. Quote the PI number on each invoice as a reference instead.</li>
    <li>GST is charged on <strong>what that invoice covers</strong>, not on the whole PI.</li>
    <li>If you are required to generate e-invoices, <strong>each final invoice needs its own IRN</strong>.</li>
    <li>Each consignment that needs an e-way bill gets <strong>its own e-way bill</strong>, against the invoice that goes with it.</li>
    <li>Advances: for goods, GST is generally not payable when you receive the advance. It becomes payable on the invoice. For services, GST is payable on the advance, so you issue a receipt voucher and adjust it against the final invoices. Confirm the treatment for your business with your CA.</li>
</ul>
'],
        ['worked-example', 'Worked example: one PI billed in three invoices', '
<p>A plywood manufacturer sends a distributor <strong>PI-118</strong> for three items. The order is dispatched over three weeks.</p>
<div class="guide-table-wrap"><table>
    <thead><tr><th>PI-118 line</th><th class="num">Ordered</th><th class="num">INV-2041</th><th class="num">INV-2057</th><th class="num">INV-2069</th><th class="num">Remaining</th></tr></thead>
    <tbody>
        <tr><td>18 mm BWP plywood (sheets)</td><td class="num">600</td><td class="num">250</td><td class="num">200</td><td class="num">150</td><td class="num">0</td></tr>
        <tr><td>12 mm MR plywood (sheets)</td><td class="num">400</td><td class="num">400</td><td class="num">0</td><td class="num">0</td><td class="num">0</td></tr>
        <tr><td>6 mm flexi ply (sheets)</td><td class="num">300</td><td class="num">0</td><td class="num">120</td><td class="num">100</td><td class="num">80</td></tr>
        <tr class="total"><td>PI status after each invoice</td><td class="num"></td><td class="num">Partial</td><td class="num">Partial</td><td class="num">Partial</td><td class="num">80 to bill</td></tr>
    </tbody>
</table></div>
<p>After three invoices, 80 sheets of flexi ply are still open. The PI stays <strong>partially billed</strong> until those sheets go out, or until you and the customer agree to close the balance.</p>
<p>The second invoice did not include any 12 mm sheets, because that line was fully billed on the first. An invoice only carries the lines and quantities that are still open.</p>
'],
        ['tracking', 'How to track what is still to be billed', '
<p>Spreadsheets work for one or two orders. They break when you have dozens of open PIs. Wherever you track it, the rules are the same:</p>
<ol>
    <li><strong>Link every final invoice to its PI</strong>, line by line, not just by a reference in the notes.</li>
    <li><strong>Work out the balance from live invoices.</strong> Remaining quantity = ordered quantity minus what the linked invoices bill.</li>
    <li><strong>Cancelled invoices free their quantity.</strong> If you cancel an invoice, its quantity goes back to the PI to be billed again.</li>
    <li><strong>Count drafts.</strong> A draft invoice holds the quantity it was raised for, so two people cannot bill the same sheets at once.</li>
    <li><strong>Never bill more than ordered</strong> without a revised PI. If the customer wants more, revise the PI or raise a new one.</li>
</ol>
'],
        ['in-dotone', 'Billing a proforma invoice in parts in DotOne', '
<p>In DotOne, a proforma invoice and its final invoices stay linked:</p>
<ul>
    <li>When you create an invoice, you can pick one of the customer\'s <strong>accepted proforma invoices</strong> from a dropdown.</li>
    <li>DotOne loads the PI\'s lines with <strong>only the quantity still to be billed</strong>. You can drop lines or lower quantities to match the dispatch.</li>
    <li>The saved invoice is linked to the PI. The next invoice for the same PI is offered only what is left.</li>
    <li>The PI shows as <strong>Partial</strong> until every line is billed. The PI screen lists its linked invoices and the ordered, invoiced and remaining quantity for each line.</li>
    <li>Editing, cancelling or deleting an invoice frees its quantity automatically, because the balance is worked out from the live invoices.</li>
    <li>If one invoice covers the whole PI, <strong>Convert to Invoice</strong> does it in one step.</li>
</ul>
<p>Invoices then sync to Tally as sales vouchers through the <a href="/integrations/tally">DotOne Tally connector</a>, so your accountant sees each invoice without entering it again.</p>
'],
    ],
    'faq' => [
        ['Can one proforma invoice have more than one final invoice?', 'Yes. A proforma invoice is an offer, not a sale. You can raise as many tax invoices against it as you have dispatches, as long as the total billed does not go beyond what the PI covers.'],
        ['What is the format of a proforma invoice?', 'It looks like a tax invoice but is headed "Proforma Invoice": PI number and validity date, seller and buyer details with GSTIN, items with HSN codes, quantities, rates and expected GST, and delivery and payment terms.'],
        ['Should the final invoice use the proforma invoice number?', 'No. Each final invoice takes the next number in your tax invoice series. Quote the PI number on the invoice as a reference so the customer can match it.'],
        ['Is GST charged on a proforma invoice?', 'A proforma invoice does not create a GST liability. GST is charged on the tax invoices you raise against it. For services, GST may already be due on any advance you received. Check the treatment with your CA.'],
        ['What happens to the balance if the customer cancels the rest of the order?', 'Agree the closure with the customer, then close or revise the PI so the remaining quantity no longer shows as open. Do not leave it open, or it will keep appearing in your pending reports.'],
        ['Does DotOne support partial invoicing of a proforma invoice?', 'Yes. Pick the accepted PI on the invoice form, bill the lines and quantities you are dispatching, and DotOne tracks what is left. See [Sales Management](/sales-management) for the full sales flow.'],
    ],
    'related' => [
        ['Sales Management', '/sales-management', 'Quotations, proforma invoices, orders and invoices in one flow.'],
        ['Cloud Accounting Software', '/accounting', 'GST invoicing, receivables and two-way Tally sync.'],
        ['DotOne Tally Connector', '/integrations/tally', 'Push invoices to Tally Prime without entering them twice.'],
    ],
    'cta_heading' => 'See partial billing in a live demo',
    'cta_text' => 'We raise a proforma invoice, bill it in two dispatches and show the balance update, in 30 minutes.',
];
include __DIR__ . '/../includes/templates/guide.php';
