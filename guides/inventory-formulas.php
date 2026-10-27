<?php
$page = [
    'path' => '/guides/inventory-formulas',
    'title' => 'Inventory Formulas: Safety Stock, EOQ, Turnover | DotOne',
    'description' => 'Inventory formulas with worked examples: safety stock, reorder point, EOQ, carrying cost, inventory turnover, backorders, and FIFO vs weighted average valuation.',
    'breadcrumbs' => [['Guides', '/guides'], ['Inventory Formulas', '/guides/inventory-formulas']],
    'article' => ['published' => '2026-10-27'],
    'eyebrow' => 'Inventory Guide',
    'read_time' => '10 min',
    'h1' => 'Inventory Formulas Every Manufacturer Should Know',
    'intro' => 'Seven formulas answer most stock questions: how much safety stock to hold, when to reorder, how much to order, what stock costs to keep, how fast it turns, and how to value it. Each one below comes with a worked example.',
    'sections' => [
        ['safety-stock', '1. Safety stock', '
<p><strong>Safety stock</strong> is the extra stock you hold to cover late deliveries and demand spikes. There are two common ways to set it.</p>
<h3>Simple method: days of cover</h3>
<div class="guide-callout"><p><strong>Safety stock = average daily usage × safety days</strong></p></div>
<p>120 units a day × 4 days = <strong>480 units</strong>. Pick the safety days from how late your vendor has actually been.</p>
<h3>Statistical method: service level</h3>
<div class="guide-callout"><p><strong>Safety stock = Z × σ<sub>d</sub> × √L</strong><br>Z = service level factor · σ<sub>d</sub> = standard deviation of daily usage · L = lead time in days</p></div>
<p>For a 95% service level, Z ≈ 1.65. If daily usage varies with a standard deviation of 20 units and lead time is 10 days: 1.65 × 20 × √10 ≈ <strong>104 units</strong>. Use 2.33 for 99%.</p>
'],
        ['reorder-point', '2. Reorder point', '
<div class="guide-callout"><p><strong>Reorder point = average daily usage × lead time + safety stock</strong></p></div>
<p>120 × 10 + 480 = <strong>1,680 units</strong>. When stock falls to this level, raise the next purchase order.</p>
'],
        ['eoq', '3. Economic order quantity (EOQ)', '
<div class="guide-callout"><p><strong>EOQ = √(2 × D × S ÷ H)</strong><br>D = annual usage · S = cost per order · H = holding cost per unit per year</p></div>
<p>36,000 units a year, ₹1,500 per order and ₹24 a unit a year to hold: √(2 × 36,000 × 1,500 ÷ 24) ≈ <strong>2,121 units</strong> per order. Try your own figures in the <a href="/tools/eoq-calculator">EOQ and reorder point calculator</a>.</p>
'],
        ['carrying-cost', '4. Inventory carrying cost', '
<div class="guide-callout"><p><strong>Carrying cost = average inventory value × carrying cost %</strong><br>Carrying cost % = (cost of capital + storage + insurance + damage and obsolescence) ÷ average inventory value</p></div>
<p>A plant holds ₹40 lakh of stock on average. Interest on that money, warehouse space, insurance and write-offs together come to about 20% a year, so carrying cost is <strong>₹8 lakh a year</strong>. Cutting average stock by ₹10 lakh saves about ₹2 lakh a year, plus the cash it frees.</p>
'],
        ['turnover', '5. Inventory turnover and days of inventory', '
<div class="guide-callout"><p><strong>Inventory turnover = cost of goods sold ÷ average inventory</strong><br><strong>Days of inventory = 365 ÷ inventory turnover</strong></p></div>
<p>Cost of goods sold of ₹9 crore and average inventory of ₹1.5 crore give a turnover of <strong>6 times</strong> a year, or about <strong>61 days</strong> of stock. Compare it item by item: a few slow movers often hold most of the cash. See also <a href="/guides/working-capital">working capital</a>.</p>
'],
        ['backorder', '6. Backorders and fill rate', '
<p>A <strong>backorder</strong> is a customer order you accept but cannot ship in full right now because the item is out of stock. It stays open until stock arrives. Unlike a lost sale, the customer waits, but backorders delay revenue and strain the relationship.</p>
<div class="guide-callout"><p><strong>Fill rate = quantity shipped on time ÷ quantity ordered</strong></p></div>
<p>If customers ordered 5,000 units this month and 4,600 shipped on time, fill rate is <strong>92%</strong> and 400 units are on backorder. A falling fill rate is usually the first sign that safety stock or reorder points are too low.</p>
'],
        ['valuation', '7. Inventory valuation: FIFO vs weighted average', '
<p>Under Indian accounting standards (Ind AS 2 and AS 2), inventory is valued at the lower of cost and net realisable value, with cost worked out by <strong>FIFO</strong> or <strong>weighted average</strong>. LIFO is not permitted.</p>
<p>Example: opening stock of 100 units at ₹50, a purchase of 200 units at ₹56, and an issue of 150 units.</p>
<div class="guide-table-wrap"><table>
    <thead><tr><th></th><th class="num">FIFO</th><th class="num">Weighted average</th></tr></thead>
    <tbody>
        <tr><td>How the issue is costed</td><td class="num">100 @ ₹50 + 50 @ ₹56</td><td class="num">150 @ ₹54 (₹16,200 ÷ 300)</td></tr>
        <tr><td>Cost of the 150 units issued</td><td class="num">₹7,800</td><td class="num">₹8,100</td></tr>
        <tr class="total"><td>Value of the 150 units left</td><td class="num">₹8,400</td><td class="num">₹8,100</td></tr>
    </tbody>
</table></div>
<p>When prices are rising, FIFO shows a lower cost of goods sold and a higher closing stock value. Pick one method and apply it consistently.</p>
'],
        ['in-dotone', 'Putting the formulas to work', '
<p>Formulas only help if stock figures are right and someone acts on them. In <a href="/inventory-management">DotOne Inventory Management</a>, reorder levels are set per item, purchase indents are raised automatically when stock falls below them, and stock is valued in real time by item, category and warehouse, with batches and serial numbers traced from receipt to the customer.</p>
'],
    ],
    'faq' => [
        ['How do you calculate safety stock?', 'The simple way is average daily usage × the number of days of cover you want. The statistical way is Z × standard deviation of daily usage × √lead time, where Z is about 1.65 for a 95% service level.'],
        ['What is the reorder point formula?', 'Reorder point = average daily usage × lead time in days + safety stock.'],
        ['How is inventory turnover calculated?', 'Divide cost of goods sold by average inventory. Days of inventory is 365 divided by the turnover.'],
        ['What is a backorder?', 'A customer order that has been accepted but cannot be shipped in full because the item is out of stock. It is shipped when stock arrives.'],
        ['Is LIFO allowed in India?', 'No. Indian accounting standards allow FIFO and weighted average cost formulas for inventory, not LIFO.'],
    ],
    'related' => [
        ['EOQ and Reorder Point Calculator', '/tools/eoq-calculator', 'Work out EOQ, safety stock and reorder point.'],
        ['Inventory Management', '/inventory-management', 'Reorder levels, automatic indents and stock valuation.'],
        ['Supply Chain Management', '/guides/supply-chain-management', 'Lead times, vendor performance and supply chain KPIs.'],
    ],
    'cta_heading' => 'Let reorder levels do the watching',
    'cta_text' => 'DotOne raises purchase indents at reorder levels and values stock in real time. See it in a 30-minute demo.',
];
include __DIR__ . '/../includes/templates/guide.php';
