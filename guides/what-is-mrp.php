<?php
$page = [
    'path' => '/guides/what-is-mrp',
    'title' => 'What Is MRP? Material Requirements Planning Guide | DotOne',
    'description' => 'What is MRP (material requirements planning)? How MRP works, a worked BOM explosion example, MRP vs MRP II vs ERP, and the data you need for it to be right.',
    'breadcrumbs' => [['Guides', '/guides'], ['What Is MRP?', '/guides/what-is-mrp']],
    'article' => ['published' => '2026-10-27'],
    'eyebrow' => 'Production Guide',
    'read_time' => '8 min',
    'h1' => 'What Is MRP? Material Requirements Planning Explained',
    'intro' => 'Material requirements planning (MRP) works out what materials you need, how much and by when, to make what you plan to make. It replaces "we will buy when it runs out" with a plan driven by real orders and your bills of materials.',
    'sections' => [
        ['definition', 'What is MRP?', '
<p><strong>MRP (material requirements planning)</strong> takes three inputs and produces a list of what to buy or make:</p>
<ul>
    <li><strong>What you need to make:</strong> confirmed orders and the production plan.</li>
    <li><strong>What goes into it:</strong> the bill of materials (BOM) for each product.</li>
    <li><strong>What you already have:</strong> stock on hand and material already on order.</li>
</ul>
<p>The output is net requirements: for each material, the quantity still needed and the date it is needed by, after using up what is already in stock or on its way.</p>
'],
        ['how-it-works', 'How MRP works, step by step', '
<ol>
    <li><strong>Gross requirements.</strong> Explode the BOM: multiply each component by the quantity of finished goods planned.</li>
    <li><strong>Subtract what you have.</strong> Deduct stock on hand and open purchase orders due in time.</li>
    <li><strong>Net requirements.</strong> What is left is what you must buy or make.</li>
    <li><strong>Offset by lead time.</strong> Work back from the date the material is needed to the date the order must be placed.</li>
    <li><strong>Raise orders.</strong> Purchase indents for bought items and work orders for items you make yourself.</li>
</ol>
'],
        ['example', 'Worked example: exploding a BOM', '
<p>A furniture maker plans <strong>200 office chairs</strong>. The BOM for one chair needs 1 seat shell, 5 castors and 0.8 kg of foam.</p>
<div class="guide-table-wrap"><table>
    <thead><tr><th>Material</th><th class="num">Per chair</th><th class="num">Gross need</th><th class="num">In stock</th><th class="num">On order</th><th class="num">Net need</th></tr></thead>
    <tbody>
        <tr><td>Seat shell</td><td class="num">1</td><td class="num">200</td><td class="num">60</td><td class="num">50</td><td class="num">90</td></tr>
        <tr><td>Castor</td><td class="num">5</td><td class="num">1,000</td><td class="num">1,400</td><td class="num">0</td><td class="num">0</td></tr>
        <tr><td>Foam (kg)</td><td class="num">0.8</td><td class="num">160</td><td class="num">35</td><td class="num">0</td><td class="num">125</td></tr>
    </tbody>
</table></div>
<p>Castors need nothing: stock covers the plan. Seat shells and foam need orders. If foam takes 7 days to arrive and production starts on the 20th, the order must go out by the 13th.</p>
'],
        ['mrp-vs', 'MRP vs MRP II vs ERP', '
<ul>
    <li><strong>MRP</strong> plans materials: what to buy or make, how much and when.</li>
    <li><strong>MRP II (manufacturing resource planning)</strong> adds capacity: machines, labour and shifts, so the plan is one the plant can actually run.</li>
    <li><strong>ERP</strong> grew out of MRP II and extends it to the whole business: sales, purchase, finance, HR and more, all on one set of data.</li>
</ul>
'],
        ['data', 'Why MRP results go wrong', '
<p>MRP is simple arithmetic. When it gives wrong answers, the data is almost always the cause:</p>
<ul>
    <li><strong>Wrong BOMs.</strong> A missing component or an old quantity means every plan is wrong. See our <a href="/guides/bom-setup">BOM setup guide</a>.</li>
    <li><strong>Wrong stock.</strong> If the system shows 1,400 castors and the shelf has 400, MRP will not ask for any.</li>
    <li><strong>Wrong lead times.</strong> Use the lead times vendors actually achieve, not the ones they quote.</li>
    <li><strong>Unrecorded scrap.</strong> If 5 percent of foam is wasted, the BOM must allow for it.</li>
    <li><strong>Duplicate items.</strong> The same material under two codes splits stock. See <a href="/guides/master-data-management">master data management</a>.</li>
</ul>
'],
        ['in-dotone', 'Material planning in DotOne', '
<p>In <a href="/production-management">DotOne Production Management</a>, multi-level BOMs drive the raw-material requirement for every work order, with a reservation summary of what is set aside for each job and a material issue queue ordered by how urgent each job is. When stock of an item falls below its reorder level, <a href="/inventory-management">inventory</a> raises a purchase indent automatically.</p>
'],
    ],
    'faq' => [
        ['What does MRP stand for?', 'Material requirements planning: a method of working out which materials are needed, in what quantity and by when, to meet the production plan.'],
        ['What are the inputs of MRP?', 'The production plan or orders, the bill of materials for each product, and current stock and open purchase orders.'],
        ['What is the difference between MRP and ERP?', 'MRP plans materials for production. ERP covers the whole business, including sales, purchase, finance and HR, and includes material planning as one part.'],
        ['What is BOM explosion?', 'Multiplying the quantities in a bill of materials by the number of finished goods planned, through every level of the BOM, to get the total quantity of each component needed.'],
        ['Why does MRP give wrong results?', 'Usually because of wrong BOMs, wrong stock figures, unrealistic lead times or unrecorded scrap. Fix the data first. See [Production Management](/production-management).'],
    ],
    'related' => [
        ['BOM Setup Guide', '/guides/bom-setup', 'Structure BOMs and variants so plans and costs are right.'],
        ['What Is MES?', '/guides/what-is-mes', 'Track the plan as it is executed on the shop floor.'],
        ['What Is S&OP?', '/guides/sales-and-operations-planning', 'Agree the production plan that MRP works from.'],
    ],
    'cta_heading' => 'See material planning in DotOne',
    'cta_text' => 'In a 30-minute demo we explode a BOM for a work order, reserve material and raise an indent for the shortfall.',
];
include __DIR__ . '/../includes/templates/guide.php';
