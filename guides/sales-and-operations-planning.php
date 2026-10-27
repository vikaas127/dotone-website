<?php
$page = [
    'path' => '/guides/sales-and-operations-planning',
    'title' => 'What Is S&OP? Sales and Operations Planning Guide | DotOne',
    'description' => 'What is S&OP? The monthly sales and operations planning process in five steps, a worked example for a manufacturer, S&OP vs IBP, and the KPIs to track.',
    'breadcrumbs' => [['Guides', '/guides'], ['Sales and Operations Planning', '/guides/sales-and-operations-planning']],
    'article' => ['published' => '2026-10-27'],
    'eyebrow' => 'Operations Guide',
    'read_time' => '9 min',
    'h1' => 'What Is S&OP? Sales and Operations Planning Explained',
    'intro' => 'Sales and operations planning (S&OP) is a monthly process that gets sales, production, purchase and finance to agree on one plan. It stops the familiar cycle of sales promising what the plant cannot make, and the plant making what nobody ordered.',
    'sections' => [
        ['definition', 'What is S&OP?', '
<p><strong>S&amp;OP (sales and operations planning)</strong> is a regular, usually monthly, planning cycle in which the business compares expected demand with its supply capacity, resolves the gaps, and agrees a single plan for the coming months.</p>
<p>The output is one agreed set of numbers: what we expect to sell, what we will make, what material we will buy, how much stock we will hold, and what it means for revenue and cash. Every department then works to the same plan.</p>
'],
        ['why', 'Why manufacturers need S&OP', '
<p>Without a joint plan, each department plans on its own assumptions:</p>
<ul>
    <li>Sales commits delivery dates without knowing the plant\'s load.</li>
    <li>Production runs what is easiest to make, not what is most needed.</li>
    <li>Purchase buys extra to protect against surprises, tying up cash.</li>
    <li>Finance finds out about the cash impact after the month has closed.</li>
</ul>
<p>The result is stock-outs and excess stock at the same time, missed delivery dates and expensive urgent purchases. S&amp;OP replaces those separate guesses with one shared plan.</p>
'],
        ['five-steps', 'The S&OP process in five steps', '
<ol>
    <li><strong>Data gathering.</strong> Pull last month\'s actual sales, current stock, open orders, the sales pipeline, production output and open purchase orders.</li>
    <li><strong>Demand review.</strong> Sales and marketing agree a demand forecast by product family for the next 3 to 12 months, based on history, confirmed orders and weighted pipeline.</li>
    <li><strong>Supply review.</strong> Production and purchase check the forecast against capacity, manpower and material lead times, and flag where supply falls short.</li>
    <li><strong>Pre-S&amp;OP meeting.</strong> The teams work out options for each gap: extra shifts, outsourcing, building stock ahead, or moving a customer\'s delivery.</li>
    <li><strong>Executive S&amp;OP meeting.</strong> Leadership decides between the options, signs off the plan and its financial impact, and the plan is released to everyone.</li>
</ol>
'],
        ['example', 'Worked example: one product family', '
<p>A tape manufacturer reviews its packaging tape family for the next quarter. Figures in rolls (thousands).</p>
<div class="guide-table-wrap"><table>
    <thead><tr><th></th><th class="num">Month 1</th><th class="num">Month 2</th><th class="num">Month 3</th></tr></thead>
    <tbody>
        <tr><td>Demand forecast</td><td class="num">120</td><td class="num">150</td><td class="num">180</td></tr>
        <tr><td>Production capacity (2 shifts)</td><td class="num">140</td><td class="num">140</td><td class="num">140</td></tr>
        <tr><td>Planned production (agreed)</td><td class="num">140</td><td class="num">160</td><td class="num">170</td></tr>
        <tr><td>Opening stock</td><td class="num">30</td><td class="num">50</td><td class="num">60</td></tr>
        <tr class="total"><td>Closing stock</td><td class="num">50</td><td class="num">60</td><td class="num">50</td></tr>
    </tbody>
</table></div>
<p>Demand in month 3 is far above two-shift capacity. Instead of discovering this when orders are late, the team decides in advance: run full capacity in month 1 to build 20 thousand rolls of stock, add a partial third shift in months 2 and 3, and have purchase confirm extra film and adhesive ahead of time. Every number in the plan is agreed before the quarter starts.</p>
'],
        ['sop-vs-ibp', 'S&OP vs IBP vs MRP', '
<ul>
    <li><strong>S&amp;OP</strong> balances demand and supply at the level of product families, monthly, for the next few months to a year.</li>
    <li><strong>IBP (integrated business planning)</strong> is a broader form of S&amp;OP that ties the plan more tightly to financial targets, strategy and longer horizons.</li>
    <li><strong>MRP (material requirements planning)</strong> works at item level. It takes the agreed production plan and works out exactly which materials to buy and when.</li>
</ul>
<p>S&amp;OP decides <em>how much</em> of each family to make. MRP and production planning decide the <em>exact items and dates</em>.</p>
'],
        ['kpis', 'S&OP KPIs to track', '
<div class="guide-table-wrap"><table>
    <thead><tr><th>KPI</th><th>What it tells you</th></tr></thead>
    <tbody>
        <tr><td>Forecast accuracy</td><td>How close the demand forecast was to actual sales</td></tr>
        <tr><td>Plan adherence</td><td>How closely production followed the agreed plan</td></tr>
        <tr><td>OTIF</td><td>Share of orders delivered on time and in full</td></tr>
        <tr><td>Days of inventory</td><td>Whether stock is staying within the agreed range</td></tr>
        <tr><td>Capacity utilisation</td><td>How fully the plant is loaded against the plan</td></tr>
    </tbody>
</table></div>
'],
        ['start', 'How to start S&OP in a growing business', '
<ol>
    <li><strong>Start small.</strong> One product family, one monthly meeting, one page of numbers.</li>
    <li><strong>Use one source of data.</strong> Sales, stock, production and purchase figures should come from the same system, so the meeting discusses decisions, not whose spreadsheet is right.</li>
    <li><strong>Plan in families, not items.</strong> Ten families are manageable in a meeting. Five hundred items are not.</li>
    <li><strong>Write down decisions and owners.</strong> Review them at the start of the next meeting.</li>
</ol>
<p>DotOne holds the inputs S&amp;OP needs in one ERP: the <a href="/crm">sales pipeline</a>, confirmed orders, <a href="/inventory-management">stock</a>, <a href="/production-management">production output</a> and <a href="/purchase-management">open purchase orders</a>.</p>
'],
    ],
    'faq' => [
        ['What does S&OP stand for?', 'Sales and operations planning: a regular process that brings sales, production, purchase and finance together to agree one plan for demand and supply.'],
        ['What are the steps of the S&OP process?', 'Data gathering, demand review, supply review, a pre-S&OP meeting to work out options, and an executive S&OP meeting that signs off the plan.'],
        ['How often should S&OP be done?', 'Monthly is the usual cycle, looking 3 to 12 months ahead. Fast-moving businesses sometimes review key families more often.'],
        ['What is the difference between S&OP and MRP?', 'S&OP balances demand and supply at product-family level for the coming months. MRP takes the agreed production plan and works out exact material requirements by item and date.'],
        ['Do small manufacturers need S&OP?', 'A simple version helps any manufacturer whose sales commitments and production capacity often clash. Start with one family and one monthly meeting. See [Production Management](/production-management).'],
    ],
    'related' => [
        ['Supply Chain Management', '/guides/supply-chain-management', 'The five stages, reorder points and supply chain KPIs.'],
        ['What Is a Sales Pipeline?', '/guides/sales-pipeline', 'Weighted pipeline value, an input to the demand review.'],
        ['Production Management', '/production-management', 'Plan and track production against capacity.'],
    ],
    'cta_heading' => 'Plan sales and production from one set of numbers',
    'cta_text' => 'In a 30-minute demo we show pipeline, stock, production and purchase data side by side in DotOne.',
];
include __DIR__ . '/../includes/templates/guide.php';
