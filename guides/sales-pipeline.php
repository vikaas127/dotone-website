<?php
$page = [
    'path' => '/guides/sales-pipeline',
    'title' => 'What Is a Sales Pipeline? Stages and Funnel | DotOne',
    'description' => 'What is a sales pipeline? The stages for B2B sales, pipeline vs sales funnel, how to calculate pipeline value, and what a CRM dashboard should show.',
    'breadcrumbs' => [['Guides', '/guides'], ['Sales Pipeline', '/guides/sales-pipeline']],
    'article' => ['published' => '2026-10-27'],
    'eyebrow' => 'Sales Guide',
    'read_time' => '9 min',
    'h1' => 'What Is a Sales Pipeline? Stages, Funnel and CRM Dashboard',
    'intro' => 'A sales pipeline shows every open deal and the stage it has reached, from first enquiry to signed order. Managed well, it tells you how much business is coming, where deals get stuck and what your team should work on today.',
    'sections' => [
        ['definition', 'What is a sales pipeline?', '
<p>A <strong>sales pipeline</strong> is a visual view of all your open deals, arranged by the stage each has reached in your sales process. Each deal carries a value, an owner and an expected closing date.</p>
<p>In a CRM, the pipeline is usually a board with one column per stage. Salespeople move deal cards from left to right as they progress. Managers look at the whole board to see how much business is in play and where it is piling up.</p>
'],
        ['stages', 'Sales pipeline stages for B2B and manufacturing', '
<p>Stage names vary, but most B2B pipelines follow a pattern like this:</p>
<div class="guide-table-wrap"><table>
    <thead><tr><th>Stage</th><th>What has happened</th><th>Typical exit step</th></tr></thead>
    <tbody>
        <tr><td>1. New enquiry</td><td>A lead has come in from the website, a call, WhatsApp, a dealer or a trade show</td><td>First contact made</td></tr>
        <tr><td>2. Qualified</td><td>The buyer has a real need, budget and timeline</td><td>Requirement understood</td></tr>
        <tr><td>3. Requirement / sampling</td><td>Specs agreed, samples or trials sent if needed</td><td>Sample approved</td></tr>
        <tr><td>4. Quotation sent</td><td>A priced quotation is with the buyer</td><td>Buyer responds</td></tr>
        <tr><td>5. Negotiation</td><td>Price, payment terms and delivery are being agreed</td><td>Terms accepted</td></tr>
        <tr><td>6. Won / lost</td><td>Purchase order received, or the deal is closed as lost with a reason</td><td>Sales order created</td></tr>
    </tbody>
</table></div>
<div class="guide-callout"><p><strong>Tip:</strong> define each stage by something the buyer has done, not by what your salesperson hopes. "Sample approved" is a fact. "Customer seems interested" is not a stage.</p></div>
'],
        ['pipeline-vs-funnel', 'Sales pipeline vs sales funnel', '
<p>The two terms are often used as if they meant the same thing, but they look at sales from different sides:</p>
<ul>
    <li><strong>Sales pipeline:</strong> the seller\'s view. Which deals are open, at what stage, worth how much, and what the next action is.</li>
    <li><strong>Sales funnel:</strong> the conversion view. Out of 100 enquiries, how many qualify, how many get a quote and how many buy. It narrows at each stage, like a funnel.</li>
</ul>
<p>You use the pipeline to manage deals day to day, and the funnel to find where you lose buyers. If 60 percent of quotations never get a reply, the problem is at the quotation stage, not at lead generation.</p>
'],
        ['pipeline-value', 'How to calculate pipeline value', '
<p>The raw total of all open deals overstates what you will actually win. A <strong>weighted pipeline</strong> multiplies each deal\'s value by the probability of its stage:</p>
<div class="guide-table-wrap"><table>
    <thead><tr><th>Stage</th><th class="num">Open value (₹ lakh)</th><th class="num">Win probability</th><th class="num">Weighted (₹ lakh)</th></tr></thead>
    <tbody>
        <tr><td>Qualified</td><td class="num">80</td><td class="num">10%</td><td class="num">8</td></tr>
        <tr><td>Sample approved</td><td class="num">45</td><td class="num">30%</td><td class="num">13.5</td></tr>
        <tr><td>Quotation sent</td><td class="num">60</td><td class="num">40%</td><td class="num">24</td></tr>
        <tr><td>Negotiation</td><td class="num">30</td><td class="num">70%</td><td class="num">21</td></tr>
        <tr class="total"><td>Total</td><td class="num">215</td><td class="num"></td><td class="num">66.5</td></tr>
    </tbody>
</table></div>
<p>₹215 lakh is open, but the realistic expectation is about ₹66.5 lakh. Base the probabilities on your own past win rates by stage, and update them every quarter.</p>
'],
        ['dashboard', 'What a CRM pipeline dashboard should show', '
<ul>
    <li><strong>Pipeline by stage:</strong> number and value of deals in each stage.</li>
    <li><strong>Weighted forecast:</strong> expected revenue by month, based on closing dates and probabilities.</li>
    <li><strong>Conversion by stage:</strong> the funnel view, showing where deals drop out.</li>
    <li><strong>Stuck deals:</strong> deals that have not moved stage or had any activity for a set number of days.</li>
    <li><strong>Win rate and loss reasons:</strong> why deals are lost, by price, delivery, competitor or no decision.</li>
    <li><strong>By salesperson and region:</strong> so managers can coach, not just count.</li>
</ul>
'],
        ['manage', 'How to keep your pipeline healthy', '
<ol>
    <li><strong>Every deal has a next action and a date.</strong> A deal with no next step is a deal nobody is working on.</li>
    <li><strong>Review weekly.</strong> Go through deals by stage and clean out ones that are dead.</li>
    <li><strong>Close lost deals with a reason.</strong> Loss reasons are the cheapest market research you have.</li>
    <li><strong>Watch average deal age.</strong> Deals that sit far longer than your usual sales cycle rarely close.</li>
    <li><strong>Connect the pipeline to production.</strong> In manufacturing, a big order in negotiation is also a signal for material and capacity. See our guide on <a href="/guides/sales-and-operations-planning">sales and operations planning</a>.</li>
</ol>
<p><a href="/crm">DotOne CRM</a> shows leads and deals on kanban boards, supports more than one pipeline, and gives you pipeline, forecast and conversion reports. A won deal moves straight into a sales order and invoice.</p>
'],
    ],
    'faq' => [
        ['What is a sales pipeline in simple words?', 'It is a list of all your open deals, arranged by how far each has progressed in your sales process, with a value and expected closing date for each.'],
        ['What are the stages of a sales pipeline?', 'A common B2B set is: new enquiry, qualified, requirement or sampling, quotation sent, negotiation, and won or lost. Adjust the stages to match how your customers actually buy.'],
        ['What is the difference between a sales pipeline and a sales funnel?', 'The pipeline shows the deals you are working on and their stage. The funnel shows conversion rates between stages, so you can see where you lose buyers.'],
        ['How do you calculate weighted pipeline value?', 'Multiply each deal\'s value by the win probability of its stage and add them up. For example, a ₹60 lakh deal at a 40 percent stage counts as ₹24 lakh.'],
        ['What should a CRM dashboard include?', 'Pipeline by stage, weighted forecast, conversion by stage, stuck deals, win rate and loss reasons, and performance by salesperson. See [DotOne CRM](/crm).'],
    ],
    'related' => [
        ['Sales Process Steps', '/guides/sales-process', 'The steps behind the stages, and how to sell to B2B buyers.'],
        ['DotOne CRM', '/crm', 'Lead and deal boards, follow-ups, quotations and forecasting.'],
        ['Sales Management', '/sales-management', 'Quotation to sales order to invoice, in one flow.'],
    ],
    'cta_heading' => 'See your pipeline on one board',
    'cta_text' => 'In a 30-minute demo we set up your stages, move a deal to won and turn it into a sales order.',
];
include __DIR__ . '/../includes/templates/guide.php';
