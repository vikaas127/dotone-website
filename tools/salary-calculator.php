<?php
$page = [
    'path' => '/tools/salary-calculator',
    'title' => 'CTC to In-Hand Salary Calculator India | DotOne',
    'description' => 'Free in-hand salary calculator for India. Convert CTC to monthly take-home pay with PF, ESI, professional tax and income tax under the new tax regime.',
    'breadcrumbs' => [['Free Tools', '/tools'], ['Salary Calculator', '/tools/salary-calculator']],
    'h1' => 'CTC to In-Hand Salary Calculator',
    'intro' => 'Enter an annual CTC to see the monthly take-home pay after employee PF, ESI, professional tax and income tax under the new tax regime, along with what the employer pays on top of gross salary.',
    'script' => '/js/tools/salary-calculator.js',
    'tool' => '
<div class="tool-grid" data-salary>
    <div class="tool-fields">
        <div class="tool-field">
            <label for="sal-ctc">Annual CTC (₹)</label>
            <input id="sal-ctc" type="number" inputmode="decimal" min="0" step="any" value="1200000">
        </div>
        <div class="tool-row">
            <div class="tool-field">
                <label for="sal-basic">Basic pay (% of CTC)</label>
                <input id="sal-basic" type="number" inputmode="decimal" min="0" max="100" step="any" value="50">
                <span class="tool-hint">Often 40–50% of CTC.</span>
            </div>
            <div class="tool-field">
                <label for="sal-pt">Professional tax (₹ a month)</label>
                <input id="sal-pt" type="number" inputmode="decimal" min="0" step="any" value="200">
                <span class="tool-hint">Varies by state. Enter 0 if none.</span>
            </div>
        </div>
        <label class="tool-check"><input id="sal-pfcap" type="checkbox" checked> Calculate PF on basic up to ₹15,000 a month (wage ceiling)</label>
        <label class="tool-check"><input id="sal-grat" type="checkbox"> CTC includes gratuity (4.81% of basic)</label>
    </div>
    <div class="tool-result" aria-live="polite">
        <p class="tool-result-label">Monthly in-hand salary</p>
        <p class="tool-result-main" data-main>—</p>
        <div class="tool-lines" data-lines></div>
    </div>
</div>',
    'sections' => [
        ['how', 'How CTC becomes in-hand salary', '
<p><strong>CTC (cost to company)</strong> is everything the employer spends on an employee in a year. Part of it never reaches the employee\'s bank account:</p>
<ol>
    <li><strong>Employer contributions</strong> come out of CTC first: employer PF, employer ESI where it applies, and gratuity if the employer includes it in CTC. What is left is <strong>gross salary</strong>.</li>
    <li><strong>Employee deductions</strong> come out of gross salary: employee PF, employee ESI, professional tax and income tax (TDS). What is left is <strong>in-hand (take-home) salary</strong>.</li>
</ol>
<p>Example with the default figures: CTC ₹12,00,000 and basic at 50%. Employer PF on the ₹15,000 ceiling is ₹1,800 a month, ₹21,600 a year, so gross salary is ₹11,78,400. Monthly gross is above ₹21,000, so ESI does not apply. Taxable income after the ₹75,000 standard deduction is ₹11,03,400, which is under ₹12 lakh, so the rebate brings income tax to nil. Take-home is ₹11,78,400 − ₹21,600 employee PF − ₹2,400 professional tax = ₹11,54,400 a year, or <strong>₹96,200 a month</strong>.</p>
'],
        ['rules', 'Rules this calculator uses', '
<ul>
    <li><strong>PF:</strong> 12% of basic from the employee and 12% from the employer, on basic up to ₹15,000 a month if the ceiling box is ticked, or on full basic if it is not.</li>
    <li><strong>ESI:</strong> applies when monthly gross is ₹21,000 or less, at 0.75% from the employee and 3.25% from the employer.</li>
    <li><strong>Gratuity:</strong> if included in CTC, 4.81% of basic, set aside by the employer. It is paid only on leaving after the qualifying service.</li>
    <li><strong>Income tax:</strong> new tax regime slabs from Budget 2025, a ₹75,000 standard deduction, the section 87A rebate up to ₹12 lakh of taxable income with marginal relief just above it, surcharge above ₹50 lakh, and 4% health and education cess. Old-regime deductions such as 80C and HRA are not applied.</li>
</ul>
<div class="guide-callout"><p>This is an estimate for planning. Actual pay depends on the salary structure, the state, the tax regime chosen and any changes in the latest Budget. Confirm with your employer or CA.</p></div>
'],
        ['slabs', 'New tax regime slabs used', '
<div class="guide-table-wrap"><table>
    <thead><tr><th>Taxable income</th><th class="num">Rate</th></tr></thead>
    <tbody>
        <tr><td>Up to ₹4,00,000</td><td class="num">Nil</td></tr>
        <tr><td>₹4,00,001 – ₹8,00,000</td><td class="num">5%</td></tr>
        <tr><td>₹8,00,001 – ₹12,00,000</td><td class="num">10%</td></tr>
        <tr><td>₹12,00,001 – ₹16,00,000</td><td class="num">15%</td></tr>
        <tr><td>₹16,00,001 – ₹20,00,000</td><td class="num">20%</td></tr>
        <tr><td>₹20,00,001 – ₹24,00,000</td><td class="num">25%</td></tr>
        <tr><td>Above ₹24,00,000</td><td class="num">30%</td></tr>
    </tbody>
</table></div>
<p>For a full explanation of salary components, see our guide to <a href="/guides/ctc-salary-structure">CTC and salary structure</a>.</p>
'],
    ],
    'faq' => [
        ['How is in-hand salary calculated from CTC?', 'Subtract employer contributions (employer PF, employer ESI and any gratuity) from CTC to get gross salary, then subtract employee PF, employee ESI, professional tax and income tax to get in-hand salary.'],
        ['What is the in-hand salary for 12 LPA?', 'With basic at 50% of CTC, PF on the ₹15,000 ceiling, ₹200 a month professional tax and the new tax regime, in-hand pay is about ₹96,200 a month. It changes with the salary structure and state.'],
        ['Is income up to ₹12 lakh tax-free?', 'Under the new tax regime from Budget 2025, the section 87A rebate brings tax to nil when taxable income is up to ₹12 lakh. Salaried employees also get a ₹75,000 standard deduction, so gross salary up to ₹12.75 lakh can be tax-free.'],
        ['When does ESI apply?', 'ESI applies to employees whose monthly gross wages are ₹21,000 or less, in establishments covered by the ESI Act.'],
        ['Can payroll software do this every month?', 'Yes. [DotOne Payroll](/payroll) works out PF, ESI, professional tax and TDS from attendance and salary structures in one payroll run.'],
    ],
    'related' => [
        ['CTC and Salary Structure', '/guides/ctc-salary-structure', 'What each salary component means and how CTC is built.'],
        ['Payroll Management System', '/guides/payroll-management-system', 'How a monthly payroll run works in India.'],
        ['Payroll Software for India', '/payroll', 'PF, ESI, PT and TDS in one payroll run.'],
    ],
    'cta_heading' => 'Run payroll without spreadsheets',
    'cta_text' => 'DotOne calculates salaries from attendance with PF, ESI, PT and TDS, and publishes payslips to employees\' phones.',
];
include dirname(__DIR__) . '/includes/templates/tool.php';
