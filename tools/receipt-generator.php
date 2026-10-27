<?php
$page = [
    'path' => '/tools/receipt-generator',
    'title' => 'Free Payment Receipt Generator: Download PDF | DotOne',
    'description' => 'Free payment receipt generator. Create a receipt for cash, UPI, cheque or bank transfer payments, with the amount in words, and download it as a PDF.',
    'breadcrumbs' => [['Free Tools', '/tools'], ['Receipt Generator', '/tools/receipt-generator']],
    'h1' => 'Payment Receipt Generator',
    'intro' => 'Create a payment receipt in a minute: who paid, how much, how and against which invoice. The amount is written out in words, and you can download the receipt as a PDF or print it.',
    'script' => ['/js/tools/doc-export.js', '/js/tools/receipt-generator.js'],
    'tool' => '
<div data-rcpt>
    <div class="tool-grid">
        <div class="tool-fields">
            <p class="tool-label">Received by</p>
            <div class="tool-field"><label for="rc-s-name">Business name</label><input id="rc-s-name" value="Shree Ganesh Industries"></div>
            <div class="tool-field"><label for="rc-s-addr">Address</label><textarea id="rc-s-addr" rows="2">Plot 14, GIDC Estate, Vatva, Ahmedabad 382445</textarea></div>
            <div class="tool-field"><label for="rc-s-gstin">GSTIN (optional)</label><input id="rc-s-gstin" value="24ABCDE1234F1Z5" maxlength="15"></div>
        </div>
        <div class="tool-fields">
            <p class="tool-label">Payment</p>
            <div class="tool-row">
                <div class="tool-field"><label for="rc-no">Receipt number</label><input id="rc-no" value="RCPT/2026-27/014"></div>
                <div class="tool-field"><label for="rc-date">Date</label><input id="rc-date" type="date"></div>
            </div>
            <div class="tool-field"><label for="rc-from">Received from</label><input id="rc-from" value="Patel Traders"></div>
            <div class="tool-row">
                <div class="tool-field"><label for="rc-amount">Amount (₹)</label><input id="rc-amount" type="number" inputmode="decimal" min="0" step="any" value="147700"></div>
                <div class="tool-field"><label for="rc-mode">Payment mode</label><select id="rc-mode"><option>Bank transfer (NEFT/RTGS/IMPS)</option><option>UPI</option><option>Cheque</option><option>Cash</option><option>Card</option></select></div>
            </div>
            <div class="tool-row">
                <div class="tool-field"><label for="rc-ref">Transaction or cheque ref.</label><input id="rc-ref" value="UTR 4521 8873 1190"></div>
                <div class="tool-field"><label for="rc-inv">Against invoice (optional)</label><input id="rc-inv" value="INV/2026-27/001"></div>
            </div>
            <div class="tool-field"><label for="rc-note">Description (optional)</label><input id="rc-note" value="Full payment for 50 sheets of 18 mm BWP plywood"></div>
        </div>
    </div>
    <div class="tool-actions">
        <button type="button" class="tool-btn" data-download>Download PDF</button>
        <button type="button" class="tool-btn tool-btn--ghost" data-print>Print</button>
    </div>
    <div class="inv-preview" data-preview aria-live="polite"></div>
</div>',
    'sections' => [
        ['what', 'What to include on a payment receipt', '
<ul>
    <li>Your business name and address, and GSTIN if registered.</li>
    <li>A unique receipt number and the date the payment was received.</li>
    <li>Who paid, the amount in figures and in words, and the payment mode.</li>
    <li>The UTR, UPI reference or cheque number, so the payment can be traced.</li>
    <li>The invoice the payment is against, if any, and the signature of the person receiving it.</li>
</ul>
'],
        ['receipt-vs-invoice', 'Receipt vs invoice vs receipt voucher', '
<div class="guide-table-wrap"><table>
    <thead><tr><th>Document</th><th>Issued when</th><th>Purpose</th></tr></thead>
    <tbody>
        <tr><td>Tax invoice</td><td>Goods or services are supplied</td><td>Records the sale and the GST charged</td></tr>
        <tr><td>Payment receipt</td><td>Money is received</td><td>Confirms the customer has paid</td></tr>
        <tr><td>Receipt voucher (GST)</td><td>An advance is received before supply</td><td>Records the advance and any GST payable on it</td></tr>
    </tbody>
</table></div>
<p>For advances against services, GST rules require a receipt voucher showing the tax. Ask your CA which document applies, and use the <a href="/tools/gst-invoice-generator">GST invoice generator</a> for the invoice itself.</p>
'],
        ['cheque', 'Cheque payments', '
<p>For a cheque, a receipt is usually issued "subject to realisation", because the payment is final only once the cheque clears. Note the cheque number, bank and date in the reference field.</p>
'],
    ],
    'faq' => [
        ['Is this receipt generator free?', 'Yes. It is free, needs no sign-up and works in your browser. Nothing you enter is sent to us.'],
        ['How do I download the receipt?', 'Click "Download PDF". The receipt downloads as an A4 PDF named after the receipt number.'],
        ['Is a payment receipt the same as an invoice?', 'No. An invoice records a sale and asks for payment. A receipt confirms that payment has been received.'],
        ['Do I need to show GST on a payment receipt?', 'A receipt for payment against an invoice does not charge GST again. For advances against services, GST rules require a receipt voucher showing the tax. Check with your CA.'],
        ['Can software issue receipts automatically?', 'Yes. In [DotOne accounting](/accounting), receipts are recorded against invoices, update customer outstanding straight away and sync to Tally.'],
    ],
    'related' => [
        ['GST Invoice Generator', '/tools/gst-invoice-generator', 'Create a printable GST tax invoice.'],
        ['Cloud Accounting Software', '/accounting', 'Receipts, receivables and Tally sync.'],
        ['What Is Working Capital?', '/guides/working-capital', 'Why collecting faster frees up cash.'],
    ],
    'cta_heading' => 'Record receipts against invoices automatically',
    'cta_text' => 'DotOne updates customer outstanding the moment a receipt is recorded, and posts it to Tally.',
];
include dirname(__DIR__) . '/includes/templates/tool.php';
