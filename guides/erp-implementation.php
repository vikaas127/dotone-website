<?php
$page = [
    'path' => '/guides/erp-implementation',
    'title' => 'ERP Implementation: Steps and Best Practices | DotOne',
    'description' => 'ERP implementation in 6 steps, a realistic timeline, data migration, change management, and the mistakes that stall projects, with a go-live checklist.',
    'breadcrumbs' => [['Guides', '/guides'], ['ERP Implementation', '/guides/erp-implementation']],
    'article' => ['published' => '2026-10-27'],
    'eyebrow' => 'ERP Guide',
    'read_time' => '10 min',
    'h1' => 'ERP Implementation: Steps, Timeline and Best Practices',
    'intro' => 'Most ERP projects that fail do not fail because of the software. They fail because the scope keeps growing, the data is not ready, or the people who will use it were never brought along. This guide covers how to implement ERP so it actually goes live and stays used.',
    'sections' => [
        ['what', 'What is ERP implementation?', '
<p><strong>ERP implementation</strong> is the project of taking an ERP from contract to daily use: mapping your processes, configuring the system, moving your data, training your people and switching over. For a small or mid-sized manufacturer on a cloud ERP, it is usually weeks, not years, if the scope is kept tight.</p>
'],
        ['steps', 'The 6 steps of ERP implementation', '
<ol>
    <li><strong>Discovery.</strong> Map how orders, purchase, stores, production, quality, dispatch and accounts work today, and list the reports management needs.</li>
    <li><strong>Scope and design.</strong> Agree what goes live first (phase 1) and what waits (phase 2). Write it down and freeze it.</li>
    <li><strong>Configuration.</strong> Set up items, BOMs, warehouses, approval rules, user roles and document formats in the ERP.</li>
    <li><strong>Data migration.</strong> Clean and load masters (items, customers, vendors, BOMs) and opening balances (stock, receivables, payables).</li>
    <li><strong>Testing and training.</strong> Run real transactions end to end, then train each person on the screens they will use.</li>
    <li><strong>Go-live and support.</strong> Switch over on a fixed date, run the old and new side by side only where you must, and support users through the first month-end.</li>
</ol>
'],
        ['timeline', 'How long does ERP implementation take?', '
<div class="guide-table-wrap"><table>
    <thead><tr><th>Business</th><th>Typical scope</th><th>Typical time</th></tr></thead>
    <tbody>
        <tr><td>Small trading or service business</td><td>Sales, stock, purchase, billing</td><td>3 to 6 weeks</td></tr>
        <tr><td>Single-plant manufacturer</td><td>Adds BOM, production, quality</td><td>4 to 10 weeks</td></tr>
        <tr><td>Multi-plant manufacturer</td><td>Adds inter-plant transfers, HR, payroll, integrations</td><td>2 to 4 months, in phases</td></tr>
        <tr><td>Large enterprise on an on-premise suite</td><td>Heavy customisation, many integrations</td><td>6 to 18 months</td></tr>
    </tbody>
</table></div>
<p>The biggest factors are not the software: they are how clean your masters are, how quickly decisions get made, and how much customisation you insist on before go-live.</p>
'],
        ['data', 'Data migration: what to move and what to leave', '
<ul>
    <li><strong>Move:</strong> item master with units, HSN and reorder levels; BOMs; customers and vendors with GSTINs; open sales and purchase orders; opening stock by location; open receivables and payables.</li>
    <li><strong>Leave behind:</strong> years of closed transactions. Keep the old system or exports for reference instead of migrating history.</li>
    <li><strong>Clean first:</strong> remove duplicate items and parties before loading. See our <a href="/guides/master-data-management">master data management guide</a>.</li>
</ul>
'],
        ['change', 'Change management: getting people to use it', '
<ul>
    <li><strong>Name one owner</strong> inside the business with the authority to make decisions, not just a coordinator.</li>
    <li><strong>Involve the people who do the work</strong> (stores, supervisors, accounts) in testing, not only managers.</li>
    <li><strong>Switch off the old way.</strong> If the Excel sheet keeps running in parallel, the ERP will not be trusted.</li>
    <li><strong>Train by role,</strong> on real transactions, and give each person a one-page guide for their daily screens.</li>
    <li><strong>Review weekly</strong> for the first month and fix friction quickly.</li>
</ul>
'],
        ['mistakes', 'Common ERP implementation mistakes', '
<ul>
    <li><strong>Scope creep.</strong> New requests added mid-project push go-live out by months. Park them for phase 2.</li>
    <li><strong>Customising before using.</strong> Run the standard process first; customise only what still does not fit.</li>
    <li><strong>Dirty data.</strong> Loading duplicates and wrong units breaks stock and costing from day one.</li>
    <li><strong>No decision-maker.</strong> A coordinator without authority cannot unblock decisions.</li>
    <li><strong>Training too early.</strong> Training six weeks before go-live is forgotten by go-live.</li>
</ul>
'],
        ['checklist', 'Go-live checklist', '
<ul>
    <li>Phase 1 scope signed off, phase 2 list written down</li>
    <li>Masters cleaned and loaded; BOMs checked against one real batch</li>
    <li>Opening stock counted and loaded by location (see <a href="/guides/stocktaking">stocktaking</a>)</li>
    <li>Approval rules and user roles tested</li>
    <li>Invoice, PO and challan formats approved</li>
    <li>Every user trained on their screens</li>
    <li>Cut-over date fixed and the old process switched off after it</li>
</ul>
'],
        ['in-dotone', 'How DotOne implementation works', '
<p>DotOne implementations run in four stages: we map your workflows and reporting needs; configure BOMs, production, inventory and user roles; migrate master data and connect shop-floor systems; then go live with training and ongoing support. Using fit-to-standard templates and a dedicated onboarding team, most customers are live in 4 to 6 weeks. Scope is agreed as phase 1 and phase 2, and anything new after sign-off goes through a change request, so go-live dates hold.</p>
'],
    ],
    'faq' => [
        ['How long does ERP implementation take?', 'For a small or mid-sized business on a cloud ERP, usually 4 to 10 weeks. Multi-plant rollouts take a few months in phases. Large on-premise projects can take a year or more.'],
        ['What are the steps of ERP implementation?', 'Discovery, scope and design, configuration, data migration, testing and training, then go-live and support.'],
        ['Why do ERP implementations fail?', 'Most often because of scope creep, poor-quality master data, too much customisation before go-live, and no decision-maker on the business side.'],
        ['Should we migrate all our old data?', 'Usually not. Move masters, open documents and opening balances. Keep old transaction history in the old system or as exports for reference.'],
        ['How long does DotOne take to go live?', 'Most DotOne customers go live in 4 to 6 weeks using fit-to-standard templates and a dedicated onboarding team. See [ERP software](/erp-software).'],
    ],
    'related' => [
        ['How to Choose an ERP', '/guides/how-to-choose-erp', 'Requirements, shortlisting, demos and pricing.'],
        ['Master Data Management', '/guides/master-data-management', 'Clean masters before you load them.'],
        ['ERP for Small Business', '/erp-for-small-business', 'Start small and go live in weeks.'],
    ],
    'cta_heading' => 'Plan your go-live with us',
    'cta_text' => 'In a 30-minute call we map your phase 1 scope and give you a realistic go-live date.',
];
include __DIR__ . '/../includes/templates/guide.php';
