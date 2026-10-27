<?php
$page = [
    'path' => '/guides/procure-to-pay',
    'title' => 'Procure to Pay (P2P) Process: Steps and Example | DotOne',
    'description' => 'What is procure to pay? The P2P process from indent to vendor payment, procurement vs purchasing, three-way matching, and how to cut purchase errors.',
    'breadcrumbs' => [['Guides', '/guides'], ['Procure to Pay', '/guides/procure-to-pay']],
    'article' => ['published' => '2026-10-27'],
    'eyebrow' => 'Purchase Guide',
    'read_time' => '8 min',
    'h1' => 'Procure to Pay: The P2P Process, Step by Step',
    'intro' => 'Procure to pay (P2P) is the full cycle of buying: from someone needing material, through quotations, purchase orders and goods receipt, to paying the vendor\'s bill. Run well, it stops over-buying, duplicate payments and material that arrives late or wrong.',
    'sections' => [
        ['definition', 'What is procure to pay?', '
<p><strong>Procure to pay (P2P)</strong> covers every step between identifying a need for goods or services and paying for them. It connects three teams: the department that needs the material, purchase, and accounts.</p>
'],
        ['procurement-vs-purchasing', 'Procurement vs purchasing', '
<ul>
    <li><strong>Procurement</strong> is the broader, strategic work: deciding what to buy, finding and evaluating vendors, negotiating terms and managing supplier relationships.</li>
    <li><strong>Purchasing</strong> is the transactional part: raising purchase orders, following up deliveries and getting bills paid.</li>
</ul>
<p>P2P includes both. See our guide on <a href="/guides/vendor-management">vendor management</a> for the supplier side.</p>
'],
        ['steps', 'The procure to pay process in 8 steps', '
<ol>
    <li><strong>Purchase requisition (indent).</strong> A department, or the stock system when an item falls below its reorder level, raises a request for material.</li>
    <li><strong>Approval.</strong> The indent is approved against budget or need.</li>
    <li><strong>Request for quotation (RFQ).</strong> Purchase asks several vendors for prices and terms.</li>
    <li><strong>Vendor selection.</strong> Quotes are compared on price, terms, lead time and past performance.</li>
    <li><strong>Purchase order (PO).</strong> A PO is raised to the chosen vendor, approved and sent.</li>
    <li><strong>Goods receipt (GRN).</strong> Material is received against the PO, counted and checked for quality.</li>
    <li><strong>Invoice matching.</strong> The vendor\'s bill is matched with the PO and the GRN.</li>
    <li><strong>Payment.</strong> The matched bill is paid on its due date and recorded in accounts.</li>
</ol>
'],
        ['three-way-match', 'Three-way matching, with an example', '
<p>Before paying, accounts checks that three documents agree: what was <strong>ordered</strong> (PO), what was <strong>received</strong> (GRN) and what was <strong>billed</strong> (vendor invoice).</p>
<div class="guide-table-wrap"><table>
    <thead><tr><th>Item</th><th class="num">PO</th><th class="num">GRN (accepted)</th><th class="num">Invoice</th><th>Result</th></tr></thead>
    <tbody>
        <tr><td>MS sheet 2 mm (kg)</td><td class="num">2,000 @ ₹68</td><td class="num">1,950</td><td class="num">2,000 @ ₹68</td><td>Pay for 1,950 kg only</td></tr>
        <tr><td>Welding rods (boxes)</td><td class="num">40 @ ₹950</td><td class="num">40</td><td class="num">40 @ ₹990</td><td>Rate mismatch: hold</td></tr>
        <tr><td>Paint (litres)</td><td class="num">120 @ ₹310</td><td class="num">120</td><td class="num">120 @ ₹310</td><td>Matched: pay</td></tr>
    </tbody>
</table></div>
<p>Without the match, this business would have paid for 50 kg of steel it never accepted and an unagreed price increase on welding rods.</p>
'],
        ['problems', 'Common P2P problems and fixes', '
<ul>
    <li><strong>Buying without a PO.</strong> Make the PO compulsory above a small limit, so every purchase is approved.</li>
    <li><strong>Material bought too late.</strong> Raise indents automatically from reorder levels instead of waiting for stores to notice.</li>
    <li><strong>Single quote, every time.</strong> Ask for at least three quotes for anything above a set value.</li>
    <li><strong>Bills entered twice.</strong> Match each bill to its GRN and PO so it can only be booked once.</li>
    <li><strong>Vendors chasing payment status.</strong> Give vendors a portal to see their orders and bills.</li>
</ul>
'],
        ['in-dotone', 'Procure to pay in DotOne', '
<p>In <a href="/purchase-management">DotOne Purchase Management</a>, indents are raised automatically when stock falls below its reorder level, RFQs go to several vendors and come back for side-by-side comparison, POs are routed for approval, and material is received against the PO with quality checks. Vendors can work through a vendor portal, and purchase bills and debit notes sync to Tally.</p>
'],
    ],
    'faq' => [
        ['What is procure to pay?', 'The full buying cycle, from a purchase requisition through quotations, purchase order and goods receipt to matching the vendor\'s invoice and paying it.'],
        ['What are the steps of the P2P process?', 'Requisition, approval, request for quotation, vendor selection, purchase order, goods receipt, invoice matching and payment.'],
        ['What is the difference between procurement and purchasing?', 'Procurement is the strategic side: choosing vendors and negotiating terms. Purchasing is the transactional side: raising orders and getting them delivered and paid.'],
        ['What is three-way matching?', 'Checking that the purchase order, the goods receipt and the vendor invoice agree on item, quantity and price before the bill is paid.'],
        ['Can P2P be automated?', 'Large parts can: indents from reorder levels, PO approvals, receipts against POs and bill matching. See [Purchase Management](/purchase-management).'],
    ],
    'related' => [
        ['Procurement and Purchase Management', '/purchase-management', 'Indents, RFQs, vendor comparison, POs and GRN.'],
        ['Vendor Management', '/guides/vendor-management', 'Vendor scorecards, KPIs and corrective actions.'],
        ['Working Capital', '/guides/working-capital', 'How purchase terms affect the cash tied up in the business.'],
    ],
    'cta_heading' => 'See procure to pay in DotOne',
    'cta_text' => 'In a 30-minute demo we raise an indent from low stock, compare quotes, approve a PO and receive the material.',
];
include __DIR__ . '/../includes/templates/guide.php';
