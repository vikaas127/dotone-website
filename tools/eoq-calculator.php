<?php
$page = [
    'path' => '/tools/eoq-calculator',
    'title' => 'EOQ and Reorder Point Calculator | DotOne',
    'description' => 'Free EOQ calculator with reorder point and safety stock. Find the economic order quantity, how often to order and when to reorder, from your own numbers.',
    'breadcrumbs' => [['Free Tools', '/tools'], ['EOQ and Reorder Point Calculator', '/tools/eoq-calculator']],
    'h1' => 'EOQ and Reorder Point Calculator',
    'intro' => 'Work out how much to order each time (economic order quantity), how much safety stock to hold, and the stock level at which to place the next order. Enter your own figures; the results update as you type.',
    'script' => '/js/tools/eoq-calculator.js',
    'tool' => '
<div class="tool-grid" data-eoq>
    <div class="tool-fields">
        <div class="tool-row">
            <div class="tool-field">
                <label for="eoq-demand">Annual usage (units)</label>
                <input id="eoq-demand" type="number" inputmode="decimal" min="0" step="any" value="36000">
            </div>
            <div class="tool-field">
                <label for="eoq-days">Working days a year</label>
                <input id="eoq-days" type="number" inputmode="numeric" min="1" step="1" value="300">
            </div>
        </div>
        <div class="tool-row">
            <div class="tool-field">
                <label for="eoq-order">Cost per order (₹)</label>
                <input id="eoq-order" type="number" inputmode="decimal" min="0" step="any" value="1500">
                <span class="tool-hint">Raising the PO, freight, receiving and inspection.</span>
            </div>
            <div class="tool-field">
                <label for="eoq-price">Unit cost (₹)</label>
                <input id="eoq-price" type="number" inputmode="decimal" min="0" step="any" value="120">
            </div>
        </div>
        <div class="tool-row">
            <div class="tool-field">
                <label for="eoq-carry">Holding cost (% of unit cost per year)</label>
                <input id="eoq-carry" type="number" inputmode="decimal" min="0" step="any" value="20">
                <span class="tool-hint">Interest, storage, insurance, damage. 15–30% is common.</span>
            </div>
            <div class="tool-field">
                <label for="eoq-lead">Supplier lead time (days)</label>
                <input id="eoq-lead" type="number" inputmode="decimal" min="0" step="any" value="10">
            </div>
        </div>
        <div class="tool-field">
            <label for="eoq-safety">Safety stock (days of usage)</label>
            <input id="eoq-safety" type="number" inputmode="decimal" min="0" step="any" value="4">
        </div>
    </div>
    <div class="tool-result" aria-live="polite">
        <p class="tool-result-label">Economic order quantity</p>
        <p class="tool-result-main" data-main>—</p>
        <div class="tool-lines" data-lines></div>
    </div>
</div>',
    'sections' => [
        ['eoq-formula', 'The EOQ formula', '
<p><strong>Economic order quantity (EOQ)</strong> is the order size that keeps the combined cost of ordering and holding stock as low as possible. Order too little, too often, and ordering costs pile up. Order too much at once, and cash and space are tied up in stock.</p>
<div class="guide-callout"><p><strong>EOQ = √(2 × D × S ÷ H)</strong><br>D = annual usage in units · S = cost per order · H = holding cost per unit per year</p></div>
<p>With the default figures: D = 36,000 units, S = ₹1,500, and H = 20% of ₹120 = ₹24. EOQ = √(2 × 36,000 × 1,500 ÷ 24) = √4,500,000 ≈ <strong>2,121 units</strong>, or about 17 orders a year.</p>
'],
        ['reorder-point', 'Reorder point and safety stock', '
<div class="guide-callout"><p><strong>Reorder point = daily usage × lead time + safety stock</strong></p></div>
<p>Daily usage = 36,000 ÷ 300 = 120 units. With a 10-day lead time and 4 days of safety stock (480 units), the reorder point is 120 × 10 + 480 = <strong>1,680 units</strong>. When stock falls to 1,680, raise the next order for about 2,121 units.</p>
<p>Safety stock covers delays and demand spikes. Set it from experience: how often has this vendor been late, and by how much? For a worked walkthrough, see our <a href="/guides/supply-chain-management">supply chain management guide</a>.</p>
'],
        ['limits', 'When EOQ needs adjusting', '
<ul>
    <li><strong>Minimum order quantities and pack sizes.</strong> Round EOQ to what the vendor actually sells.</li>
    <li><strong>Quantity discounts.</strong> A bigger order at a lower price can beat EOQ. Compare the total cost at each price break.</li>
    <li><strong>Seasonal or lumpy demand.</strong> EOQ assumes steady usage. For order-driven items, plan from the production plan instead (see <a href="/guides/what-is-mrp">what is MRP</a>).</li>
    <li><strong>Shelf life.</strong> Never order more than you can use before it expires.</li>
</ul>
'],
    ],
    'faq' => [
        ['What is EOQ?', 'Economic order quantity: the order size that minimises the total of ordering costs and holding costs for an item with steady demand.'],
        ['What is the EOQ formula?', 'EOQ = √(2DS ÷ H), where D is annual demand, S is the cost per order and H is the holding cost per unit per year.'],
        ['How do you calculate the reorder point?', 'Multiply daily usage by the supplier lead time in days, then add safety stock. For example, 120 a day × 10 days + 480 safety stock = 1,680 units.'],
        ['What is a good holding cost percentage?', 'Many businesses use 15 to 30 percent of the unit cost per year, covering interest on the money tied up, storage, insurance, damage and obsolescence.'],
        ['Can an ERP raise orders at the reorder point automatically?', 'Yes. In DotOne, when an item falls below its reorder level, inventory raises a purchase indent automatically. See [Inventory Management](/inventory-management).'],
    ],
    'related' => [
        ['Inventory Management', '/inventory-management', 'Reorder levels and automatic purchase indents.'],
        ['Inventory Formulas Guide', '/guides/inventory-formulas', 'Safety stock, EOQ, carrying cost and valuation explained.'],
        ['Supply Chain Management', '/guides/supply-chain-management', 'Reorder points, lead times and supply chain KPIs.'],
    ],
    'cta_heading' => 'Let reorder levels raise the indent',
    'cta_text' => 'DotOne watches stock against reorder levels and raises purchase indents automatically. See it in a 30-minute demo.',
];
include dirname(__DIR__) . '/includes/templates/tool.php';
