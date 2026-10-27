<?php
$page = [
    'path' => '/tools/emi-calculator',
    'title' => 'EMI Calculator for Business and Machinery Loans | DotOne',
    'description' => 'Free EMI calculator. Work out the monthly EMI, total interest and year-by-year repayment schedule for a business, machinery, vehicle or home loan.',
    'breadcrumbs' => [['Free Tools', '/tools'], ['EMI Calculator', '/tools/emi-calculator']],
    'h1' => 'EMI Calculator',
    'intro' => 'Enter the loan amount, interest rate and tenure to see the monthly EMI, the total interest you will pay, and how each year\'s payments split between principal and interest.',
    'script' => '/js/tools/emi-calculator.js',
    'tool' => '
<div data-emi>
    <div class="tool-grid">
        <div class="tool-fields">
            <div class="tool-field">
                <label for="emi-amount">Loan amount (₹)</label>
                <input id="emi-amount" type="number" inputmode="decimal" min="0" step="any" value="2500000">
            </div>
            <div class="tool-row">
                <div class="tool-field">
                    <label for="emi-rate">Interest rate (% a year)</label>
                    <input id="emi-rate" type="number" inputmode="decimal" min="0" step="any" value="10.5">
                </div>
                <div class="tool-field">
                    <label for="emi-tenure">Tenure</label>
                    <input id="emi-tenure" type="number" inputmode="numeric" min="1" step="1" value="5">
                </div>
            </div>
            <div class="tool-field">
                <span class="tool-label">Tenure in</span>
                <div class="tool-seg" role="group" aria-label="Tenure in">
                    <button type="button" class="is-active" data-unit="years">Years</button>
                    <button type="button" data-unit="months">Months</button>
                </div>
            </div>
        </div>
        <div class="tool-result" aria-live="polite">
            <p class="tool-result-label">Monthly EMI</p>
            <p class="tool-result-main" data-main>—</p>
            <div class="tool-lines" data-lines></div>
        </div>
    </div>
    <div class="guide-table-wrap" style="margin-top:1.5rem"><table class="tool-table" data-schedule></table></div>
</div>',
    'sections' => [
        ['formula', 'How EMI is calculated', '
<div class="guide-callout"><p><strong>EMI = P × r × (1 + r)<sup>n</sup> ÷ ((1 + r)<sup>n</sup> − 1)</strong><br>P = loan amount · r = monthly interest rate (annual rate ÷ 12 ÷ 100) · n = number of monthly instalments</p></div>
<p>Example: a ₹25 lakh machinery loan at 10.5% a year for 5 years. r = 10.5 ÷ 12 ÷ 100 = 0.00875 and n = 60. The EMI comes to about <strong>₹53,735</strong>, and total interest over the loan is about <strong>₹7.24 lakh</strong>.</p>
'],
        ['how-it-splits', 'How each EMI splits between interest and principal', '
<p>Every EMI is the same amount, but its make-up changes. Early on, most of it is interest, because interest is charged on the full outstanding balance. As the balance falls, more of each EMI goes to principal. The schedule above shows this year by year.</p>
<p>That is why a part-prepayment early in the loan saves far more interest than the same prepayment near the end.</p>
'],
        ['business', 'EMIs and business cash flow', '
<ul>
    <li><strong>Match the tenure to the asset.</strong> A machine that earns for 10 years can be financed over 5 to 7. Financing working capital over long tenures hides a cash problem.</li>
    <li><strong>Check the EMI against monthly cash flow,</strong> not just profit. A profitable business can still struggle with fixed monthly repayments. See <a href="/guides/working-capital">working capital</a>.</li>
    <li><strong>Interest is a business expense;</strong> principal repayment is not. Your CA will show them separately in the accounts and the <a href="/guides/cash-flow-statement">cash flow statement</a>.</li>
</ul>
'],
    ],
    'faq' => [
        ['What is the EMI formula?', 'EMI = P × r × (1 + r)^n ÷ ((1 + r)^n − 1), where P is the loan amount, r is the monthly interest rate and n is the number of months.'],
        ['What is the EMI on a ₹25 lakh loan at 10.5% for 5 years?', 'About ₹53,735 a month, with total interest of about ₹7.24 lakh over the 60 months.'],
        ['Does a longer tenure reduce EMI?', 'Yes, but it increases the total interest paid, because the balance stays outstanding for longer.'],
        ['Does this calculator include processing fees or insurance?', 'No. It calculates the EMI on the loan amount and rate only. Add any fees, insurance or GST on charges separately.'],
        ['Is the EMI calculator free?', 'Yes. It is free, needs no sign-up and runs entirely in your browser.'],
    ],
    'related' => [
        ['Break-Even Calculator', '/tools/break-even-calculator', 'Units and sales needed to cover your costs.'],
        ['What Is Working Capital?', '/guides/working-capital', 'How much cash the business needs day to day.'],
        ['Cash Flow Statement', '/guides/cash-flow-statement', 'Where loan repayments show up in your accounts.'],
    ],
    'cta_heading' => 'Know your cash position every day',
    'cta_text' => 'DotOne shows receivables, payables and funds from live data, so loan repayments never catch you short.',
];
include dirname(__DIR__) . '/includes/templates/tool.php';
