<?php
$page = [
    'path' => '/guides/erp-modules',
    'title' => 'ERP Modules and Features: A Complete List | DotOne',
    'description' => 'ERP modules explained: what each core module does, the features to look for, types of ERP systems, and which modules a manufacturer needs first.',
    'breadcrumbs' => [['Guides', '/guides'], ['ERP Modules and Features', '/guides/erp-modules']],
    'article' => ['published' => '2026-10-27'],
    'eyebrow' => 'ERP Guide',
    'read_time' => '9 min',
    'h1' => 'ERP Modules and Features: What Each Module Does',
    'intro' => 'An ERP is made of modules, one for each part of the business, all sharing the same data. This guide explains the core ERP modules, the features to look for in each, the main types of ERP system, and which modules a manufacturer usually starts with.',
    'sections' => [
        ['modules', 'The core ERP modules', '
<div class="guide-table-wrap"><table>
    <thead><tr><th>Module</th><th>What it does</th><th>Key features</th></tr></thead>
    <tbody>
        <tr><td><a href="/crm">CRM</a></td><td>Leads and customers</td><td>Pipeline, follow-ups, quotations</td></tr>
        <tr><td><a href="/sales-management">Sales</a></td><td>Order to cash</td><td>Sales orders, GST invoices, dispatch, receivables</td></tr>
        <tr><td><a href="/purchase-management">Purchase</a></td><td>Procure to pay</td><td>Requests, RFQs, approved POs, goods receipt</td></tr>
        <tr><td><a href="/inventory-management">Inventory</a></td><td>Stock control</td><td>Multi-warehouse, batches, reorder levels, valuation</td></tr>
        <tr><td><a href="/production-management">Production</a></td><td>Making goods</td><td>BOMs, job cards, material issue, output, OEE</td></tr>
        <tr><td><a href="/quality-management">Quality</a></td><td>Inspection and control</td><td>Incoming, in-process and final checks, holds</td></tr>
        <tr><td><a href="/accounting">Accounting</a></td><td>Books and tax</td><td>Ledgers, GST, bank reconciliation, financial reports</td></tr>
        <tr><td><a href="/hrms">HRMS</a> and <a href="/payroll">payroll</a></td><td>People</td><td>Attendance, leave, salaries, PF, ESI, TDS</td></tr>
        <tr><td><a href="/reports-analytics">Reports and analytics</a></td><td>Decisions</td><td>Dashboards, MIS, KPIs across modules</td></tr>
    </tbody>
</table></div>
<p>Many ERPs add modules such as <a href="/maintenance-management">maintenance</a>, <a href="/fleet-management">fleet</a>, <a href="/recruitment">recruitment</a> and <a href="/field-sales-tracking">field sales</a>. What makes it an ERP rather than a set of apps is that every module works on the same items, customers, vendors and employees.</p>
'],
        ['features', 'Features every ERP should have', '
<ul>
    <li><strong>One database:</strong> a sale reduces stock, raises a receivable and updates reports, with nothing typed twice.</li>
    <li><strong>Role-based access</strong> and an <strong>audit trail</strong> of who changed what.</li>
    <li><strong>Approvals</strong> for purchase orders, discounts, leave and payments.</li>
    <li><strong>Real-time reports</strong> and dashboards from live data.</li>
    <li><strong>Mobile access</strong> for approvals, the shop floor and field staff.</li>
    <li><strong>Integrations and an API</strong> to connect accounting, e-commerce or machines. See <a href="/guides/erp-integration">ERP integration</a>.</li>
    <li><strong>Local compliance:</strong> in India, GST invoices, e-way bills and statutory payroll.</li>
</ul>
'],
        ['types', 'Types of ERP systems', '
<ul>
    <li><strong>By deployment:</strong> cloud (SaaS), on-premise, or hybrid. See <a href="/guides/what-is-cloud-erp">cloud vs on-premise ERP</a>.</li>
    <li><strong>By scope:</strong> general ERP for any business, or industry ERP for manufacturing, distribution, retail or services.</li>
    <li><strong>By size:</strong> enterprise suites for large groups, and mid-market or small business ERPs priced and sized for SMEs.</li>
    <li><strong>By manufacturing style:</strong> discrete (assembled items such as machines or furniture) or process (formulas and batches such as chemicals, food or adhesives).</li>
</ul>
'],
        ['which-first', 'Which modules should a manufacturer start with?', '
<ol>
    <li><strong>Inventory, purchase and sales first.</strong> They fix stock accuracy and billing, and everything else depends on them.</li>
    <li><strong>Production and quality next,</strong> once items and BOMs are clean.</li>
    <li><strong>Accounts</strong> in the ERP, or connected to Tally.</li>
    <li><strong>HR and payroll</strong> when attendance and salaries are a monthly headache.</li>
    <li><strong>Maintenance, fleet and analytics</strong> once the core is running.</li>
</ol>
<p>Phasing modules like this keeps go-live fast. See <a href="/guides/erp-implementation">ERP implementation</a>.</p>
'],
    ],
    'faq' => [
        ['What are the main modules of ERP?', 'CRM, sales, purchase, inventory, production, quality, accounting, HR and payroll, and reports. Many ERPs add maintenance, fleet, recruitment and field sales.'],
        ['What are the features of an ERP system?', 'One shared database, role-based access with an audit trail, approvals, real-time reports, mobile access, integrations and an API, and local compliance such as GST.'],
        ['What are the types of ERP?', 'By deployment (cloud, on-premise, hybrid), by scope (general or industry-specific), by size (enterprise or SME) and, for manufacturers, by style (discrete or process).'],
        ['Can we buy only some ERP modules?', 'Usually yes. Most cloud ERPs let you start with a few modules and add more. See DotOne [pricing](/pricing) for what each plan includes.'],
        ['How many modules does DotOne have?', 'DotOne covers CRM, sales, purchase, inventory, warehouse, production, quality, accounting, HR, payroll, recruitment, leave, maintenance, fleet, field sales and analytics. See [all modules](/modules).'],
    ],
    'related' => [
        ['What Is ERP?', '/guides/what-is-erp', 'A plain-English guide to ERP.'],
        ['All DotOne Modules', '/modules', 'Every module, with what it does.'],
        ['How to Choose an ERP', '/guides/how-to-choose-erp', 'Selection steps, cost and a scoring sheet.'],
    ],
    'cta_heading' => 'See the modules working together',
    'cta_text' => 'In a 30-minute demo we follow one order through sales, stock, production, quality and accounts.',
];
include __DIR__ . '/../includes/templates/guide.php';
