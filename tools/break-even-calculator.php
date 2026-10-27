<?php
$page = [
    'path' => '/tools/break-even-calculator',
    'title' => 'Break-Even Point Calculator: Units and Sales | DotOne',
    'description' => 'Free break-even calculator. Find how many units and how much sales you need to cover fixed costs, your contribution margin, and the units needed for a target profit.',
    'breadcrumbs' => [['Free Tools', '/tools'], ['Break-Even Calculator', '/tools/break-even-calculator']],
    'h1' => 'Break-Even Point Calculator',
    'intro' => 'Enter your fixed costs, selling price and variable cost per unit to see the break-even point in units and in sales value, your contribution margin, and what you need to sell to reach a target profit.',
    'script' => '/js/tools/break-even-calculator.js',
    'tool' => '
<div class="tool-grid" data-be>
    <div class="tool-fields">
        <div class="tool-field">
            <label for="be-fixed">Fixed costs for the period (₹)</label>
            <input id="be-fixed" type="number" inputmode="decimal" min="0" step="any" value="600000">
            <span class="tool-hint">Rent, salaries, loan EMIs, power base charges: costs that do not change with output.</span>
        </div>
        <div class="tool-row">
            <div class="tool-field">
                <label for="be-price">Selling price per unit (₹)</label>
                <input id="be-price" type="number" inputmode="decimal" min="0" step="any" value="450">
            </div>
            <div class="tool-field">
                <label for="be-var">Variable cost per unit (₹)</label>
                <input id="be-var" type="number" inputmode="decimal" min="0" step="any" value="300">
                <span class="tool-hint">Material, packing, piece-rate labour, freight.</span>
            </div>
        </div>
        <div class="tool-row">
            <div class="tool-field">
                <label for="be-target">Target profit (₹, optional)</label>
                <input id="be-target" type="number" inputmode="decimal" min="0" step="any" value="150000">
            </div>
            <div class="tool-field">
                <label for="be-actual">Expected sales (units, optional)</label>
                <input id="be-actual" type="number" inputmode="decimal" min="0" step="any" value="5000">
            </div>
        </div>
    </div>
    <div class="tool-result" aria-live="polite">
        <p class="tool-result-label">Break-even point</p>
        <p class="tool-result-main" data-main>—</p>
        <div class="tool-lines" data-lines></div>
    </div>
</div>',
    'sections' => [
        ['formula', 'The break-even formula', '
<div class="guide-callout"><p><strong>Break-even units = fixed costs ÷ (selling price − variable cost per unit)</strong><br>Break-even sales = break-even units × selling price</p></div>
<p>The gap between price and variable cost is the <strong>contribution</strong> each unit makes towards fixed costs. Example: fixed costs of ₹6,00,000, a price of ₹450 and a variable cost of ₹300 give a contribution of ₹150 a unit. Break-even = 6,00,000 ÷ 150 = <strong>4,000 units</strong>, or ₹18,00,000 of sales.</p>
'],
        ['target', 'Units needed for a target profit', '
<div class="guide-callout"><p><strong>Units for target profit = (fixed costs + target profit) ÷ contribution per unit</strong></p></div>
<p>For a profit of ₹1,50,000: (6,00,000 + 1,50,000) ÷ 150 = <strong>5,000 units</strong>.</p>
<p>The <strong>margin of safety</strong> is how far expected sales are above break-even. Selling 5,000 units against a break-even of 4,000 gives a margin of safety of 1,000 units, or 20%.</p>
'],
        ['use', 'Using break-even in a manufacturing business', '
<ul>
    <li><strong>Price a new product</strong> by checking the volume it must sell to cover the extra fixed cost it brings.</li>
    <li><strong>Judge a new machine:</strong> its EMI and running costs add to fixed costs. How many more units must you sell to stay at break-even? Use the <a href="/tools/emi-calculator">EMI calculator</a> for the repayment.</li>
    <li><strong>Watch variable cost.</strong> A rise in material prices cuts contribution and pushes break-even up. A 10% rise in variable cost in the example above raises break-even from 4,000 to 5,000 units.</li>
    <li><strong>Use real costs.</strong> Break-even is only as good as the variable cost you put in. Actual material use and scrap per job, recorded in your ERP, make it reliable.</li>
</ul>
'],
    ],
    'faq' => [
        ['What is the break-even point?', 'The level of sales at which total revenue equals total cost, so the business makes neither a profit nor a loss.'],
        ['How do you calculate break-even units?', 'Divide fixed costs by the contribution per unit, which is the selling price minus the variable cost per unit.'],
        ['What is contribution margin?', 'The selling price minus the variable cost per unit. As a percentage, it is that contribution divided by the selling price.'],
        ['What is the margin of safety?', 'How far expected sales are above the break-even point, in units, value or as a percentage of expected sales.'],
        ['Can an ERP give me real variable costs?', 'Yes. When material issues, scrap and output are recorded per job, the actual variable cost per unit is known. See [Production Management](/production-management).'],
    ],
    'related' => [
        ['EMI Calculator', '/tools/emi-calculator', 'Monthly EMI and repayment schedule for a loan.'],
        ['Inventory Formulas', '/guides/inventory-formulas', 'Safety stock, EOQ, carrying cost and turnover.'],
        ['Production Management', '/production-management', 'Actual material use and scrap by job.'],
    ],
    'cta_heading' => 'Know your real cost per unit',
    'cta_text' => 'DotOne records material issued, output and scrap on every job card, so your costs come from the shop floor, not estimates.',
];
include dirname(__DIR__) . '/includes/templates/tool.php';
