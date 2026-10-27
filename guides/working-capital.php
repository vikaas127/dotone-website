<?php
$page = [
    'path' => '/guides/working-capital',
    'title' => 'What Is Working Capital? Formula, Cycle and Example | DotOne',
    'description' => 'What is working capital? The formula, the working capital cycle in days with a manufacturing example, a good ratio, and how to free up cash.',
    'breadcrumbs' => [['Guides', '/guides'], ['What Is Working Capital?', '/guides/working-capital']],
    'article' => ['published' => '2026-10-27'],
    'eyebrow' => 'Finance Guide',
    'read_time' => '8 min',
    'h1' => 'What Is Working Capital? Formula, Cycle and Example',
    'intro' => 'Working capital is the money a business needs to run day to day: to buy material, hold stock and wait for customers to pay. For most manufacturers it is where cash gets stuck, and where it can be freed fastest.',
    'sections' => [
        ['definition', 'What is working capital?', '
<p><strong>Working capital</strong> is the difference between what a business owns in the short term and what it owes in the short term:</p>
<div class="guide-callout"><p><strong>Working capital = current assets − current liabilities</strong></p></div>
<ul>
    <li><strong>Current assets:</strong> cash and bank, trade receivables (money customers owe you), inventory (raw material, WIP and finished goods) and short-term advances.</li>
    <li><strong>Current liabilities:</strong> trade payables (money you owe vendors), short-term borrowings such as cash credit, and statutory dues and other expenses payable.</li>
</ul>
<p>Positive working capital means short-term assets cover short-term dues. Too little is a cash crunch waiting to happen. Too much usually means cash is sitting idle in stock or with customers.</p>
'],
        ['ratio', 'Working capital ratio', '
<div class="guide-callout"><p><strong>Current ratio = current assets ÷ current liabilities</strong></p></div>
<p>A ratio between about 1.2 and 2 is often seen as comfortable for a manufacturer, but the right level depends on the industry and how quickly stock and receivables turn into cash. Banks look at it closely when setting cash credit limits.</p>
'],
        ['cycle', 'The working capital cycle in days', '
<p>The <strong>working capital cycle</strong> (or cash conversion cycle) shows how many days cash is tied up, from paying for material to collecting from the customer:</p>
<div class="guide-callout"><p><strong>Cycle = inventory days + receivable days − payable days</strong></p></div>
<p>A manufacturer with annual sales of ₹12 crore and material and production cost of ₹9 crore:</p>
<div class="guide-table-wrap"><table>
    <thead><tr><th>Item</th><th class="num">Balance (₹ lakh)</th><th>Formula</th><th class="num">Days</th></tr></thead>
    <tbody>
        <tr><td>Inventory</td><td class="num">150</td><td>150 ÷ 900 × 365</td><td class="num">61</td></tr>
        <tr><td>Trade receivables</td><td class="num">200</td><td>200 ÷ 1,200 × 365</td><td class="num">61</td></tr>
        <tr><td>Trade payables</td><td class="num">100</td><td>100 ÷ 900 × 365</td><td class="num">41</td></tr>
        <tr class="total"><td>Working capital cycle</td><td class="num"></td><td>61 + 61 − 41</td><td class="num">81</td></tr>
    </tbody>
</table></div>
<p>Each rupee spent on material comes back about 81 days later. Cutting the cycle by 20 days frees roughly 20 days of costs: about ₹49 lakh (900 ÷ 365 × 20) in this business, without borrowing a rupee.</p>
'],
        ['free-cash', 'How to free up working capital', '
<h3>Inventory</h3>
<ul>
    <li>Set reorder levels from real consumption, and stop buying slow movers.</li>
    <li>Find and clear dead stock: items with no movement in 6 to 12 months.</li>
    <li>Buy against the production plan, not on habit. See <a href="/guides/what-is-mrp">what is MRP</a>.</li>
</ul>
<h3>Receivables</h3>
<ul>
    <li>Invoice the day goods are dispatched.</li>
    <li>Review receivables ageing every week and follow up before due dates.</li>
    <li>Set credit limits per customer and hold new orders for accounts that are overdue.</li>
</ul>
<h3>Payables</h3>
<ul>
    <li>Negotiate credit terms that match how long your own cycle takes.</li>
    <li>Pay on the due date, not earlier, unless there is an early-payment discount worth taking.</li>
</ul>
'],
        ['in-dotone', 'Watching working capital in DotOne', '
<p>DotOne puts the three working capital levers in one place: stock value by item and warehouse in <a href="/inventory-management">inventory</a>, customer outstanding and receivables ageing, and vendor payables by due date in <a href="/accounting">accounting</a>, built from live sales, purchase and stock data while your books stay in Tally. For how working capital shows up in your accounts, see <a href="/guides/cash-flow-statement">what is a cash flow statement</a>.</p>
'],
    ],
    'faq' => [
        ['What is working capital in simple words?', 'The money a business needs to run day to day, measured as current assets such as cash, stock and receivables minus current liabilities such as payables and short-term loans.'],
        ['What is the working capital formula?', 'Working capital = current assets − current liabilities. The working capital cycle in days = inventory days + receivable days − payable days.'],
        ['What is a good working capital ratio?', 'A current ratio of roughly 1.2 to 2 is often seen as comfortable for manufacturers, though it varies by industry.'],
        ['Why does a profitable business run out of cash?', 'Because profit can be tied up in stock and unpaid customer invoices. If the working capital cycle grows, cash runs short even while profits rise.'],
        ['How can a manufacturer reduce working capital?', 'Hold less stock, collect from customers faster, and agree payment terms with vendors that match your cycle. See [Inventory Management](/inventory-management).'],
    ],
    'related' => [
        ['What Is a Cash Flow Statement?', '/guides/cash-flow-statement', 'Why profit and cash are not the same.'],
        ['Cloud Accounting Software', '/accounting', 'Receivables, payables and a funds view, synced to Tally.'],
        ['Inventory Management', '/inventory-management', 'Reorder levels and stock valuation by warehouse.'],
    ],
    'cta_heading' => 'See where your working capital is tied up',
    'cta_text' => 'In a 30-minute demo we show stock value, receivables ageing and payables by due date from live data.',
];
include __DIR__ . '/../includes/templates/guide.php';
