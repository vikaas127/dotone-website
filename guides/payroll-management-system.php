<?php
$page = [
    'path' => '/guides/payroll-management-system',
    'title' => 'Payroll Management System: How Payroll Works in India | DotOne',
    'description' => 'What is a payroll management system? The monthly payroll process in India, a salary calculation example with PF and ESI, common mistakes and what to look for.',
    'breadcrumbs' => [['Guides', '/guides'], ['Payroll Management System', '/guides/payroll-management-system']],
    'article' => ['published' => '2026-10-27'],
    'eyebrow' => 'HR Guide',
    'read_time' => '9 min',
    'h1' => 'Payroll Management System: How Payroll Works in India',
    'intro' => 'A payroll management system calculates what each employee is paid every month, deducts statutory contributions and taxes, produces payslips and records it all for compliance. This guide walks through the monthly payroll process and a worked salary example.',
    'sections' => [
        ['definition', 'What is a payroll management system?', '
<p>A <strong>payroll management system</strong> is software that turns attendance, leave and salary structures into net pay. It applies earnings and deductions, works out statutory contributions such as PF and ESI, deducts professional tax and TDS, and produces payslips, bank transfer files and compliance reports.</p>
<p>Done by hand or in spreadsheets, payroll is slow and error-prone, and errors cost money: under-deducted TDS, late PF deposits, or an unhappy employee who was paid short.</p>
'],
        ['process', 'The monthly payroll process', '
<ol>
    <li><strong>Close attendance.</strong> Lock the month\'s attendance, leave, overtime and late marks.</li>
    <li><strong>Apply changes.</strong> New joiners, exits, increments, arrears, bonuses and loan or advance recoveries.</li>
    <li><strong>Calculate gross pay.</strong> Earnings for the days payable, plus overtime and allowances.</li>
    <li><strong>Calculate deductions.</strong> Employee PF and ESI, professional tax, TDS and other recoveries.</li>
    <li><strong>Review and approve.</strong> Check variances against last month before anything is paid.</li>
    <li><strong>Pay and publish.</strong> Bank transfer, payslips to employees, and salary entries to accounts.</li>
    <li><strong>File and deposit.</strong> Deposit PF, ESI, PT and TDS by their due dates and file the returns.</li>
</ol>
'],
        ['example', 'Worked example: one employee\'s salary', '
<p>An employee on a monthly structure of ₹25,000, all days present. The figures follow the common rules: PF at 12 percent of basic, and ESI at 0.75 percent (employee) and 3.25 percent (employer) of gross for employees earning up to ₹21,000 a month. Professional tax varies by state; ₹200 is used here.</p>
<div class="guide-table-wrap"><table>
    <thead><tr><th>Component</th><th class="num">₹</th></tr></thead>
    <tbody>
        <tr><td>Basic and DA</td><td class="num">12,500</td></tr>
        <tr><td>HRA</td><td class="num">5,000</td></tr>
        <tr><td>Other allowances</td><td class="num">7,500</td></tr>
        <tr class="total"><td>Gross salary</td><td class="num">25,000</td></tr>
        <tr><td>Less: employee PF (12% of 12,500)</td><td class="num">(1,500)</td></tr>
        <tr><td>Less: employee ESI (gross is above ₹21,000, so not applicable)</td><td class="num">0</td></tr>
        <tr><td>Less: professional tax</td><td class="num">(200)</td></tr>
        <tr><td>Less: TDS (as per declared investments)</td><td class="num">0</td></tr>
        <tr class="total"><td>Net pay</td><td class="num">23,300</td></tr>
    </tbody>
</table></div>
<p>The employer also contributes 12 percent of basic (₹1,500) to PF, split between the provident fund and the pension scheme, so the cost to company for the month is at least ₹26,500. Statutory rates and ceilings change, so confirm the current ones with your CA or payroll consultant.</p>
'],
        ['mistakes', 'Common payroll mistakes', '
<ul>
    <li><strong>Attendance changes after payroll is run,</strong> so the month has to be re-done.</li>
    <li><strong>Wrong professional tax slabs</strong> for employees in another state.</li>
    <li><strong>Missing a joiner or exit date,</strong> paying a full month instead of a part month.</li>
    <li><strong>Loan and advance recoveries tracked outside the payroll,</strong> and then forgotten.</li>
    <li><strong>No approval step,</strong> so a wrong figure goes straight to the bank.</li>
    <li><strong>Late deposits</strong> of PF, ESI and TDS, which attract interest and penalties.</li>
</ul>
'],
        ['choose', 'What to look for in payroll software', '
<ol>
    <li><strong>Attendance in the same system,</strong> so payable days are never re-typed.</li>
    <li><strong>Configurable salary components</strong> and structures by grade or department.</li>
    <li><strong>Indian statutory rules built in:</strong> PF, ESI, professional tax by state, and TDS.</li>
    <li><strong>An approval step</strong> and an audit trail of every change.</li>
    <li><strong>Loans and advances</strong> recovered automatically through payroll.</li>
    <li><strong>Payslips on the phone</strong> through employee self-service.</li>
    <li><strong>Salary entries to accounts</strong> without re-entry.</li>
</ol>
<p><a href="/payroll">DotOne Payroll</a> calculates salaries from attendance, applies PF, ESI, PT and TDS, recovers loans, routes the run for approval with an audit trail, and produces payslips, registers and Excel exports, with full and final settlement for exits.</p>
'],
    ],
    'faq' => [
        ['What is a payroll management system?', 'Software that calculates employee pay each month from attendance and salary structures, applies statutory deductions and taxes, and produces payslips, payments and compliance reports.'],
        ['What are the steps in payroll processing?', 'Close attendance, apply joiners, exits and changes, calculate gross pay, calculate deductions, review and approve, pay and publish payslips, then deposit and file statutory dues.'],
        ['How is PF calculated?', 'Commonly 12 percent of basic and DA from the employee and a matching 12 percent from the employer, subject to the applicable wage ceiling and rules. Confirm current rates with your CA.'],
        ['Who has to pay ESI?', 'ESI applies to employees whose gross pay is within the ESI wage limit, currently ₹21,000 a month, in establishments covered by the ESI Act.'],
        ['Can payroll software handle professional tax for different states?', 'Good Indian payroll software applies each state\'s professional tax slabs to employees based on where they work. See [DotOne Payroll](/payroll).'],
    ],
    'related' => [
        ['Payroll Software for India', '/payroll', 'PF, ESI, PT and TDS worked out in one run.'],
        ['What Is HRMS?', '/guides/what-is-hrms', 'HRMS vs HRIS vs HCM, and the core modules.'],
        ['DotOne HRMS', '/hrms', 'Attendance, leave and payroll on one employee record.'],
    ],
    'cta_heading' => 'Run a payroll in DotOne',
    'cta_text' => 'In a 30-minute demo we close attendance, run payroll with statutory deductions, approve it and publish payslips.',
];
include __DIR__ . '/../includes/templates/guide.php';
