<?php
$page = [
    'path' => '/guides/stocktaking',
    'title' => 'Stocktaking: How to Do a Physical Stock Count | DotOne',
    'description' => 'What is stocktaking? Full counts vs cycle counts, a step-by-step physical stock count, how to handle variances with a worked example, and common mistakes.',
    'breadcrumbs' => [['Guides', '/guides'], ['Stocktaking', '/guides/stocktaking']],
    'article' => ['published' => '2026-10-27'],
    'eyebrow' => 'Inventory Guide',
    'read_time' => '8 min',
    'h1' => 'Stocktaking: How to Do a Physical Stock Count',
    'intro' => 'Stocktaking means counting what is physically on your shelves and comparing it with what your books say you have. Done well, it catches losses early, keeps reorder levels honest and makes year-end valuation straightforward.',
    'sections' => [
        ['what', 'What is stocktaking?', '
<p><strong>Stocktaking</strong> (or a <strong>physical stock count</strong>) is the process of counting every item in a store or warehouse and comparing the count with the book stock, the quantity your inventory records show. The difference between the two is the <strong>stock variance</strong>.</p>
<p>Variances come from unrecorded issues, wrong receipts, damage, theft, unit mix-ups and simple data-entry errors. A count finds them; fixing the cause stops them coming back.</p>
'],
        ['types', 'Full count vs cycle count', '
<div class="guide-table-wrap"><table>
    <thead><tr><th></th><th>Full physical count</th><th>Cycle count</th></tr></thead>
    <tbody>
        <tr><td>What is counted</td><td>Every item in the location</td><td>A few items at a time, on a rota</td></tr>
        <tr><td>How often</td><td>Once or twice a year, often at year-end</td><td>Daily or weekly</td></tr>
        <tr><td>Disruption</td><td>Store usually stops movements during the count</td><td>Little or none</td></tr>
        <tr><td>Best for</td><td>Year-end valuation and audit</td><td>Keeping high-value and fast-moving items accurate all year</td></tr>
    </tbody>
</table></div>
<p>Many manufacturers combine the two: cycle-count A items (the few that make up most of the stock value) every month, and do one full count a year. See ABC classes in our <a href="/guides/inventory-formulas">inventory formulas guide</a>.</p>
'],
        ['steps', 'How to do a physical stock count, step by step', '
<ol>
    <li><strong>Fix a cut-off.</strong> Choose the date and time, and finish posting all receipts, issues and dispatches up to that moment.</li>
    <li><strong>Freeze movements</strong> for a full count, or count a location when nothing is moving in it.</li>
    <li><strong>Tidy and label.</strong> Group like items, separate damaged or rejected stock, and make sure bins and racks are labelled.</li>
    <li><strong>Count blind.</strong> Give counters a count sheet without the book quantity, so they count what is there, not what they expect.</li>
    <li><strong>Count in the stock unit.</strong> If an item is stocked in kg, weigh it; if in pieces, count pieces. Unit confusion is a top cause of false variances.</li>
    <li><strong>Recount the big differences.</strong> A second person recounts any item whose variance is above your threshold.</li>
    <li><strong>Investigate, then approve.</strong> Look for missing entries before writing anything off, then approve the adjustment.</li>
    <li><strong>Post the adjustment</strong> so book stock matches the shelf, and record the reason.</li>
</ol>
'],
        ['variance', 'Worked example: handling variances', '
<div class="guide-table-wrap"><table>
    <thead><tr><th>Item</th><th class="num">Book</th><th class="num">Counted</th><th class="num">Variance</th><th class="num">Unit cost (₹)</th><th class="num">Value (₹)</th><th>Finding</th></tr></thead>
    <tbody>
        <tr><td>MS sheet 2 mm (kg)</td><td class="num">4,200</td><td class="num">4,050</td><td class="num">−150</td><td class="num">68</td><td class="num">−10,200</td><td>Issue to job card not posted</td></tr>
        <tr><td>Welding rods (boxes)</td><td class="num">120</td><td class="num">112</td><td class="num">−8</td><td class="num">950</td><td class="num">−7,600</td><td>Genuine shortage</td></tr>
        <tr><td>Paint (litres)</td><td class="num">300</td><td class="num">310</td><td class="num">+10</td><td class="num">310</td><td class="num">+3,100</td><td>Receipt booked short</td></tr>
    </tbody>
</table></div>
<p>The sheet variance is not a loss: the missing issue is posted against the job card, so the job cost is right too. The paint receipt is corrected. Only the welding rods are a real shortage of ₹7,600, which is written off with a reason and investigated.</p>
'],
        ['mistakes', 'Common stocktaking mistakes', '
<ul>
    <li><strong>Counting while goods move,</strong> so the count matches neither the before nor the after.</li>
    <li><strong>Showing counters the book quantity,</strong> which turns counting into ticking.</li>
    <li><strong>Writing off every variance</strong> instead of first looking for the missing entry.</li>
    <li><strong>Ignoring work in progress</strong> and material lying on the shop floor.</li>
    <li><strong>Counting once a year only,</strong> so errors pile up for twelve months.</li>
</ul>
'],
        ['in-dotone', 'Stock takes in DotOne', '
<p>In <a href="/inventory-management">DotOne Inventory Management</a>, a stock take records the physical count of a warehouse against its book stock. Nothing moves until the stock take is approved; on approval, the differences are posted against live stock. Daily counts work the same way, and approved shortfalls open a loss adjustment, so every write-off has a record and an approver.</p>
'],
    ],
    'faq' => [
        ['What is stocktaking?', 'Counting the stock physically present in a store or warehouse and comparing it with the stock shown in your records, then correcting the records for any differences.'],
        ['How often should stocktaking be done?', 'At least once a year for a full count, usually at year-end. Many businesses also cycle-count their most valuable and fastest-moving items every week or month.'],
        ['What is a stock variance?', 'The difference between the quantity counted and the quantity in the books. It can be a shortage (negative) or an excess (positive).'],
        ['What is the difference between stocktaking and a cycle count?', 'Stocktaking usually means a full count of everything at once. A cycle count checks a few items at a time on a rota, so the whole stock is covered over the year without stopping work.'],
        ['Can stock adjustments be approved before they post?', 'Yes. In DotOne, a stock take only changes stock once it is approved, and shortfalls open a loss adjustment. See [Inventory Management](/inventory-management).'],
    ],
    'related' => [
        ['Inventory Management System', '/inventory-management', 'Stock takes, loss adjustments and live valuation.'],
        ['Inventory Formulas', '/guides/inventory-formulas', 'Safety stock, EOQ, turnover and valuation.'],
        ['What Is a WMS?', '/guides/what-is-a-warehouse-management-system', 'Locations, picking and dispatch in the warehouse.'],
    ],
    'cta_heading' => 'Make every write-off traceable',
    'cta_text' => 'In a 30-minute demo we run a stock take, approve the variance and show the loss adjustment in DotOne.',
];
include __DIR__ . '/../includes/templates/guide.php';
