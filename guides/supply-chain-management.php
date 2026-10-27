<?php
$page = [
    'path' => '/guides/supply-chain-management',
    'title' => 'Supply Chain Management and Optimization Guide | DotOne',
    'description' => 'Supply chain management and optimization for Indian manufacturers: the five stages, levers that cut cost and delays, reorder point maths and KPIs.',
    'breadcrumbs' => [['Guides', '/guides'], ['Supply Chain Management', '/guides/supply-chain-management']],
    'article' => ['published' => '2026-10-27'],
    'eyebrow' => 'Operations Guide',
    'read_time' => '11 min',
    'h1' => 'Supply Chain Management and Optimization: A Practical Guide',
    'intro' => 'Supply chain management is the work of getting material from suppliers, through your plant, to your customers, at the lowest cost and without running out. This guide covers what it involves, where manufacturers lose money, and the practical steps that optimise it.',
    'sections' => [
        ['what-is-scm', 'What is supply chain management?', '
<p><strong>Supply chain management (SCM)</strong> is the planning and control of everything that moves goods from raw material to the customer: forecasting demand, buying material, holding stock, producing, storing and delivering.</p>
<p>For a manufacturer, the supply chain decides three numbers that matter a great deal: how much cash is tied up in inventory, how often you promise a date and miss it, and how much you pay for urgent purchases and freight when plans go wrong.</p>
'],
        ['five-stages', 'The five stages of a supply chain', '
<p>Most frameworks, including the widely used SCOR model, break the supply chain into five stages:</p>
<ol>
    <li><strong>Plan:</strong> forecast demand and balance it against capacity, material and cash.</li>
    <li><strong>Source:</strong> select vendors, raise purchase orders and receive material.</li>
    <li><strong>Make:</strong> plan and run production, track work in progress and quality.</li>
    <li><strong>Deliver:</strong> store finished goods, pick, pack, dispatch and invoice.</li>
    <li><strong>Return:</strong> handle customer returns and rejected material back to vendors.</li>
</ol>
'],
        ['optimization', 'Supply chain optimization: where the savings are', '
<p><strong>Supply chain optimization</strong> means improving these stages so the chain delivers on time with less inventory and less cost. For most Indian MSME manufacturers, the biggest gains come from a few levers:</p>
<h3>1. Better demand planning</h3>
<p>Base purchase and production plans on actual order history and confirmed orders, not on guesswork. Even a simple monthly forecast by item, reviewed with sales, removes a lot of panic buying.</p>
<h3>2. Right-sized inventory</h3>
<p>Set a reorder point and safety stock for every important item instead of buying "when it looks low". This cuts stock-outs and excess stock at the same time.</p>
<h3>3. Vendor performance</h3>
<p>Measure each vendor\'s real lead time, on-time delivery and rejection rate. Plan with the lead time vendors actually achieve, not the one they quote.</p>
<h3>4. Production planned against material</h3>
<p>Release production orders only when material is available or due, so jobs do not stop halfway on the shopfloor.</p>
<h3>5. One version of the truth</h3>
<p>When sales, purchase, stores and production work from separate spreadsheets, each department buffers against the others. A shared system with live stock and order status removes those hidden buffers.</p>
'],
        ['reorder-point', 'Reorder point and safety stock, worked out', '
<p>The reorder point tells you when to raise a purchase order:</p>
<div class="guide-callout"><p><strong>Reorder point = average daily usage × lead time in days + safety stock</strong></p></div>
<p>Example: a plant uses <strong>120 kg</strong> of a resin a day. The vendor takes <strong>10 days</strong> to deliver, and you hold <strong>4 days</strong> of usage as safety stock for delays and demand spikes.</p>
<div class="guide-table-wrap"><table>
    <thead><tr><th>Item</th><th class="num">Quantity</th></tr></thead>
    <tbody>
        <tr><td>Usage during lead time (120 × 10)</td><td class="num">1,200 kg</td></tr>
        <tr><td>Safety stock (120 × 4)</td><td class="num">480 kg</td></tr>
        <tr class="total"><td>Reorder point</td><td class="num">1,680 kg</td></tr>
    </tbody>
</table></div>
<p>When stock falls to 1,680 kg, raise the PO. Review the numbers every quarter: when usage or lead time changes, the reorder point should change with it.</p>
'],
        ['kpis', 'Supply chain KPIs to track', '
<div class="guide-table-wrap"><table>
    <thead><tr><th>KPI</th><th>What it tells you</th></tr></thead>
    <tbody>
        <tr><td>Inventory turnover</td><td>How many times a year stock is used and replaced. Higher usually means less cash locked up.</td></tr>
        <tr><td>Days of inventory</td><td>How many days of usage you are holding.</td></tr>
        <tr><td>OTIF (on time, in full)</td><td>Share of customer orders delivered complete on the promised date.</td></tr>
        <tr><td>Vendor on-time delivery</td><td>Share of purchase orders received by the due date.</td></tr>
        <tr><td>Actual supplier lead time</td><td>Days from PO to goods receipt, by vendor and item.</td></tr>
        <tr><td>Stock-out incidents</td><td>How often production or dispatch waited for material.</td></tr>
        <tr><td>Cash-to-cash cycle</td><td>Days between paying vendors and collecting from customers.</td></tr>
    </tbody>
</table></div>
'],
        ['getting-started', 'How to start improving your supply chain', '
<ol>
    <li><strong>Get stock right.</strong> Do a physical count of your top items and fix the system figures. Nothing else works on wrong stock.</li>
    <li><strong>Classify items.</strong> Use ABC analysis. The 15 to 20 percent of items that make up most of your purchase value deserve the closest control.</li>
    <li><strong>Set reorder points</strong> for A and B items using real usage and real lead times.</li>
    <li><strong>Track vendors</strong> on lead time, on-time delivery and rejections, and share the numbers with them.</li>
    <li><strong>Connect the departments.</strong> Put sales orders, purchase, stores, production and dispatch on one system, so everyone plans from the same live data.</li>
</ol>
<p>DotOne connects <a href="/purchase-management">purchase</a>, <a href="/inventory-management">inventory</a>, <a href="/warehouse-management">warehouse</a> and <a href="/production-management">production</a> in one ERP, so stock, open orders and vendor deliveries are visible to every team.</p>
'],
    ],
    'faq' => [
        ['What is supply chain management in simple words?', 'It is managing the flow of material from suppliers, through production, to customers, so the right goods arrive at the right place on time at the lowest total cost.'],
        ['What is supply chain optimization?', 'Improving how the supply chain works so it delivers on time with less inventory, fewer urgent purchases and lower freight cost. Typical levers are demand planning, reorder points, vendor management and connected systems.'],
        ['What are the 5 stages of supply chain management?', 'Plan, source, make, deliver and return.'],
        ['How do you calculate the reorder point?', 'Multiply average daily usage by the supplier lead time in days, then add safety stock. For example, 120 kg a day × 10 days + 480 kg safety stock = 1,680 kg.'],
        ['What software is used for supply chain management?', 'Smaller and mid-sized manufacturers usually manage the supply chain inside their ERP, which links purchase, inventory, production and sales. See [Inventory Management](/inventory-management) and [Purchase Management](/purchase-management).'],
    ],
    'related' => [
        ['Procurement and Purchase Management', '/purchase-management', 'Indents, RFQs, vendor comparison and approved POs.'],
        ['Inventory Management', '/inventory-management', 'Multi-warehouse stock, reorder levels and low-stock alerts.'],
        ['Production Management', '/production-management', 'Plan and track production against material availability.'],
    ],
    'cta_heading' => 'See your supply chain on one screen',
    'cta_text' => 'In a 30-minute demo we follow an order from purchase to production to dispatch in DotOne.',
];
include __DIR__ . '/../includes/templates/guide.php';
