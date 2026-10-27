<?php
$page = [
    'path' => '/guides/vendor-management',
    'title' => 'What Is Vendor Management? Process and KPIs | DotOne',
    'description' => 'What is vendor management? The vendor management process for manufacturers, a vendor scorecard with a worked example, the KPIs to track and common mistakes.',
    'breadcrumbs' => [['Guides', '/guides'], ['Vendor Management', '/guides/vendor-management']],
    'article' => ['published' => '2026-10-27'],
    'eyebrow' => 'Purchase Guide',
    'read_time' => '9 min',
    'h1' => 'Vendor Management: A Practical Guide for Manufacturers',
    'intro' => 'Your vendors decide a large part of your cost, your quality and whether you deliver on time. Vendor management is how you choose them, measure them and work with them, so that good vendors get more business and problems get fixed before they reach your customer.',
    'sections' => [
        ['definition', 'What is vendor management?', '
<p><strong>Vendor management</strong> is the process of selecting, onboarding, measuring and developing the suppliers who provide your materials and services. It covers everything from the first quotation to the long-term relationship.</p>
<p>Purchase raises the orders. Vendor management makes sure those orders go to the right vendors, on the right terms, and that each vendor\'s real performance is known, not guessed.</p>
'],
        ['process', 'The vendor management process', '
<ol>
    <li><strong>Identify needs.</strong> Decide what you buy, in what volumes, and what matters most for each category: price, quality, lead time or technical support.</li>
    <li><strong>Find and evaluate vendors.</strong> Ask for quotations from several vendors, check samples, capacity, certifications and references, and visit critical suppliers.</li>
    <li><strong>Onboard.</strong> Collect legal name, GSTIN, PAN, bank details and payment terms, verify them, and create a clean vendor master. See our guide on <a href="/guides/master-data-management">master data management</a>.</li>
    <li><strong>Agree terms.</strong> Prices, payment terms, delivery lead times, quality specifications and what happens when material is rejected.</li>
    <li><strong>Measure performance.</strong> Track every delivery for timeliness, quantity and quality, and keep a scorecard per vendor.</li>
    <li><strong>Review and develop.</strong> Share scorecards with vendors regularly, raise corrective actions for repeated problems, and give more business to the best performers.</li>
</ol>
'],
        ['scorecard', 'Vendor scorecard: a worked example', '
<p>A simple scorecard weights the things that matter most to your plant. Here, a manufacturer weights quality at 40 percent, delivery at 35 percent and price at 25 percent, and scores two resin vendors over a quarter:</p>
<div class="guide-table-wrap"><table>
    <thead><tr><th>Measure</th><th class="num">Weight</th><th class="num">Vendor A</th><th class="num">Vendor B</th></tr></thead>
    <tbody>
        <tr><td>Quality (lots accepted without rejection)</td><td class="num">40%</td><td class="num">98%</td><td class="num">90%</td></tr>
        <tr><td>Delivery (POs received on time)</td><td class="num">35%</td><td class="num">85%</td><td class="num">95%</td></tr>
        <tr><td>Price (score vs lowest quote)</td><td class="num">25%</td><td class="num">90%</td><td class="num">100%</td></tr>
        <tr class="total"><td>Weighted score</td><td class="num"></td><td class="num">91.45</td><td class="num">94.25</td></tr>
    </tbody>
</table></div>
<p>Vendor A: 0.40 × 98 + 0.35 × 85 + 0.25 × 90 = 91.45. Vendor B: 0.40 × 90 + 0.35 × 95 + 0.25 × 100 = 94.25.</p>
<p>Vendor B is cheaper and more punctual, but has more rejections. The scorecard does not just pick a winner. It tells you what to discuss with each vendor: delivery with A, quality with B.</p>
'],
        ['kpis', 'Vendor management KPIs', '
<div class="guide-table-wrap"><table>
    <thead><tr><th>KPI</th><th>How to measure it</th></tr></thead>
    <tbody>
        <tr><td>On-time delivery</td><td>POs received by the due date ÷ total POs received</td></tr>
        <tr><td>Rejection rate</td><td>Quantity rejected at goods receipt or in process ÷ quantity received</td></tr>
        <tr><td>Actual lead time</td><td>Average days from PO to goods receipt, by vendor and item</td></tr>
        <tr><td>Fill rate</td><td>Quantity received ÷ quantity ordered</td></tr>
        <tr><td>Price variance</td><td>Price paid vs agreed or last price</td></tr>
        <tr><td>Corrective actions</td><td>Number of open and closed corrective action requests per vendor</td></tr>
    </tbody>
</table></div>
'],
        ['mistakes', 'Common vendor management mistakes', '
<ul>
    <li><strong>Choosing on price alone.</strong> The cheapest vendor is expensive if material is rejected or arrives late and stops a line.</li>
    <li><strong>Measuring from memory.</strong> "Vendor X is usually on time" is not data. Record every receipt against its PO.</li>
    <li><strong>Depending on one vendor for critical items.</strong> Keep at least one approved alternate for anything that can stop production.</li>
    <li><strong>Not sharing performance.</strong> Vendors cannot fix problems they do not know about. Share scorecards every quarter.</li>
    <li><strong>Messy vendor masters.</strong> The same vendor created twice splits its history and hides its real performance.</li>
</ul>
'],
        ['in-dotone', 'Vendor management in DotOne', '
<p>In DotOne, vendor performance is recorded as part of normal purchase work, not in a separate spreadsheet:</p>
<ul>
    <li>Send RFQs to several vendors and <a href="/purchase-management">compare their quotes side by side</a>, with past purchase history in view.</li>
    <li>Receive material against the PO, record quantities and quality checks at goods receipt, and rate the supplier.</li>
    <li>Track vendor quality ratings and raise supplier corrective action requests through <a href="/quality-management">quality management</a>.</li>
    <li>Vendor masters sync with Tally, so purchase bills and payments match in both systems.</li>
</ul>
'],
    ],
    'faq' => [
        ['What is vendor management?', 'The process of selecting, onboarding, measuring and developing the suppliers who provide your materials and services, so you get the right quality, price and delivery.'],
        ['What are the steps of vendor management?', 'Identify needs, find and evaluate vendors, onboard them, agree terms, measure performance, and review and develop them over time.'],
        ['What is a vendor scorecard?', 'A regular report that scores each vendor on weighted measures such as quality, on-time delivery and price, so you can compare vendors and decide what to improve.'],
        ['What KPIs are used to measure vendors?', 'On-time delivery, rejection rate, actual lead time, fill rate, price variance and the number of open corrective actions.'],
        ['Can an ERP track vendor performance?', 'Yes. When every PO and goods receipt is recorded in the ERP, on-time delivery, lead time and rejections can be measured automatically. See [Purchase Management](/purchase-management).'],
    ],
    'related' => [
        ['Procurement and Purchase Management', '/purchase-management', 'RFQs, vendor comparison, approved POs and goods receipt.'],
        ['Quality Management', '/quality-management', 'Incoming inspection, vendor quality ratings and corrective actions.'],
        ['Supply Chain Management', '/guides/supply-chain-management', 'Reorder points, lead times and supply chain KPIs.'],
    ],
    'cta_heading' => 'Know which vendors you can rely on',
    'cta_text' => 'In a 30-minute demo we compare vendor quotes, receive material against a PO and show the vendor ratings in DotOne.',
];
include __DIR__ . '/../includes/templates/guide.php';
