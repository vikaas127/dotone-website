<?php
$page = [
    'path' => '/tools/payslip-generator',
    'title' => 'Free Payslip Generator India: Salary Slip PDF | DotOne',
    'description' => 'Free payslip generator for India. Create a salary slip with earnings, PF, ESI, professional tax and TDS, pro-rated for days paid, and download it as a PDF.',
    'breadcrumbs' => [['Free Tools', '/tools'], ['Payslip Generator', '/tools/payslip-generator']],
    'h1' => 'Payslip Generator',
    'intro' => 'Create a salary slip for one employee. Enter the monthly salary structure and days paid; earnings are pro-rated, PF and ESI can be worked out for you, and the net pay is written out in words. Download the payslip as a PDF or print it.',
    'script' => ['/js/tools/doc-export.js', '/js/tools/payslip-generator.js'],
    'tool' => '
<div data-slip>
    <div class="tool-grid">
        <div class="tool-fields">
            <p class="tool-label">Company</p>
            <div class="tool-field"><label for="ps-c-name">Company name</label><input id="ps-c-name" value="Shree Ganesh Industries"></div>
            <div class="tool-field"><label for="ps-c-addr">Address</label><input id="ps-c-addr" value="Plot 14, GIDC Estate, Vatva, Ahmedabad 382445"></div>
            <div class="tool-row">
                <div class="tool-field"><label for="ps-month">Pay month</label><input id="ps-month" type="month"></div>
                <div class="tool-field"><label for="ps-days">Days paid / days in month</label><div class="tool-row"><input id="ps-paid" type="number" min="0" step="0.5" value="30" aria-label="Days paid"><input id="ps-total" type="number" min="1" step="1" value="30" aria-label="Days in month"></div></div>
            </div>
            <p class="tool-label">Employee</p>
            <div class="tool-row">
                <div class="tool-field"><label for="ps-e-name">Name</label><input id="ps-e-name" value="Rakesh Sharma"></div>
                <div class="tool-field"><label for="ps-e-code">Employee code</label><input id="ps-e-code" value="SGI-0142"></div>
            </div>
            <div class="tool-row">
                <div class="tool-field"><label for="ps-e-desig">Designation</label><input id="ps-e-desig" value="Machine Operator"></div>
                <div class="tool-field"><label for="ps-e-dept">Department</label><input id="ps-e-dept" value="Production"></div>
            </div>
            <div class="tool-row">
                <div class="tool-field"><label for="ps-e-uan">UAN (optional)</label><input id="ps-e-uan" value="101234567890"></div>
                <div class="tool-field"><label for="ps-e-pan">PAN (optional)</label><input id="ps-e-pan" value="ABCPS1234K" maxlength="10"></div>
            </div>
        </div>
        <div class="tool-fields">
            <p class="tool-label">Monthly earnings (full month)</p>
            <div class="tool-row">
                <div class="tool-field"><label for="ps-basic">Basic + DA (₹)</label><input id="ps-basic" type="number" min="0" step="any" value="10000"></div>
                <div class="tool-field"><label for="ps-hra">HRA (₹)</label><input id="ps-hra" type="number" min="0" step="any" value="4000"></div>
            </div>
            <div class="tool-row">
                <div class="tool-field"><label for="ps-special">Special allowance (₹)</label><input id="ps-special" type="number" min="0" step="any" value="3500"></div>
                <div class="tool-field"><label for="ps-other">Overtime / other (₹)</label><input id="ps-other" type="number" min="0" step="any" value="1200"><span class="tool-hint">Not pro-rated.</span></div>
            </div>
            <p class="tool-label">Deductions</p>
            <label class="tool-check"><input id="ps-pf" type="checkbox" checked> Work out PF at 12% of earned basic (up to ₹15,000)</label>
            <label class="tool-check"><input id="ps-esi" type="checkbox" checked> Work out ESI at 0.75% when gross is ₹21,000 or less</label>
            <div class="tool-row">
                <div class="tool-field"><label for="ps-pt">Professional tax (₹)</label><input id="ps-pt" type="number" min="0" step="any" value="200"></div>
                <div class="tool-field"><label for="ps-tds">TDS (₹)</label><input id="ps-tds" type="number" min="0" step="any" value="0"></div>
            </div>
            <div class="tool-field"><label for="ps-adv">Advance or loan recovery (₹)</label><input id="ps-adv" type="number" min="0" step="any" value="0"></div>
        </div>
    </div>
    <div class="tool-actions">
        <button type="button" class="tool-btn" data-download>Download PDF</button>
        <button type="button" class="tool-btn tool-btn--ghost" data-print>Print</button>
    </div>
    <div class="inv-preview" data-preview aria-live="polite"></div>
</div>',
    'sections' => [
        ['what', 'What a payslip should show', '
<ul>
    <li>Company name and address, and the month the pay is for.</li>
    <li>Employee name, code, designation and department, and UAN and PAN where applicable.</li>
    <li>Days paid out of the days in the month.</li>
    <li>Each earning: basic and DA, HRA, allowances, overtime and arrears.</li>
    <li>Each deduction: PF, ESI, professional tax, TDS and any loan or advance recovery.</li>
    <li>Gross earnings, total deductions and net pay, with net pay in words.</li>
</ul>
'],
        ['prorate', 'How pro-rating works', '
<p>When an employee is paid for fewer days than the month has, for example after unpaid leave or joining mid-month, each fixed earning is reduced in the same proportion:</p>
<div class="guide-callout"><p><strong>Earned amount = monthly amount × days paid ÷ days in the month</strong></p></div>
<p>Basic of ₹10,000 with 26 of 30 days paid gives ₹8,667. PF is then worked out on the earned basic, not the full-month figure. Employers differ on whether they divide by calendar days, 26 or 30; use your company\'s rule.</p>
'],
        ['example', 'Worked example', '
<p>With the default figures, a full month paid: gross earnings are ₹18,700 (basic ₹10,000, HRA ₹4,000, special allowance ₹3,500, overtime ₹1,200). PF is 12% of ₹10,000 = ₹1,200. Gross is under ₹21,000, so ESI applies at 0.75% = ₹140.25, rounded up to ₹141. With ₹200 professional tax, total deductions are ₹1,541 and net pay is <strong>₹17,159</strong>.</p>
<p>For a whole team, payroll software is faster and safer than one slip at a time. See our guide to the <a href="/guides/payroll-management-system">payroll management system</a>.</p>
'],
    ],
    'faq' => [
        ['Is this payslip generator free?', 'Yes. It is free, needs no sign-up and runs in your browser. No employee data is sent to us or stored.'],
        ['How do I download the salary slip?', 'Click "Download PDF". The payslip downloads as an A4 PDF named after the employee code and month.'],
        ['How is PF calculated on a payslip?', 'Usually 12% of earned basic and DA, on wages up to ₹15,000 a month unless the employer contributes on higher wages.'],
        ['When is ESI deducted?', 'When the employee\'s gross monthly wages are ₹21,000 or less, at 0.75% from the employee, in establishments covered by the ESI Act. ESI contributions are rounded up to the next rupee.'],
        ['Can payslips be sent to employees automatically?', 'Yes. [DotOne Payroll](/payroll) generates payslips for everyone in one run and publishes them to the employee app.'],
    ],
    'related' => [
        ['CTC to In-Hand Salary Calculator', '/tools/salary-calculator', 'Take-home pay after PF, ESI, PT and income tax.'],
        ['CTC and Salary Structure', '/guides/ctc-salary-structure', 'Every salary component explained.'],
        ['Payroll Software for India', '/payroll', 'Payslips for the whole team in one run.'],
    ],
    'cta_heading' => 'Payslips for the whole team in one run',
    'cta_text' => 'DotOne calculates salaries from attendance with PF, ESI, PT and TDS, and publishes payslips to employees\' phones.',
];
include dirname(__DIR__) . '/includes/templates/tool.php';
