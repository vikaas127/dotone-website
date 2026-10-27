<?php
$page = [
    'path' => '/guides/what-is-a-data-warehouse',
    'title' => 'What Is a Data Warehouse? vs Database and Data Lake | DotOne',
    'description' => 'What is a data warehouse? How it works, how it differs from a database, a data lake and a data mart, a manufacturing example, and when a business needs one.',
    'breadcrumbs' => [['Guides', '/guides'], ['What Is a Data Warehouse?', '/guides/what-is-a-data-warehouse']],
    'article' => ['published' => '2026-10-27'],
    'eyebrow' => 'Analytics Guide',
    'read_time' => '9 min',
    'h1' => 'What Is a Data Warehouse? A Plain-English Guide',
    'intro' => 'A data warehouse is a central store of business data, organised for reporting and analysis rather than for day-to-day transactions. This guide explains how it works, how it differs from a database and a data lake, and whether a growing business actually needs one.',
    'sections' => [
        ['definition', 'What is a data warehouse?', '
<p>A <strong>data warehouse</strong> is a database built to answer questions about the business. It collects data from systems such as your ERP, CRM, accounting software and spreadsheets, cleans it, puts it into a consistent shape, and keeps its history.</p>
<p>Your ERP is designed to <em>record</em> work: create an invoice, receive stock, close a job card. A data warehouse is designed to <em>analyse</em> that work: sales by region over five years, scrap rate by machine and shift, or margin by customer after discounts and returns.</p>
'],
        ['how-it-works', 'How a data warehouse works', '
<ol>
    <li><strong>Sources.</strong> Operational systems: ERP, CRM, HRMS, e-commerce, machines and spreadsheets.</li>
    <li><strong>ETL or ELT.</strong> Data is <em>extracted</em> from each source, <em>transformed</em> (cleaned, de-duplicated, mapped to common codes) and <em>loaded</em> into the warehouse, usually on a schedule. In ELT, raw data is loaded first and transformed inside the warehouse.</li>
    <li><strong>Storage.</strong> Data is stored in tables designed for fast reading of large volumes, often in a <strong>star schema</strong>: central <em>fact</em> tables surrounded by <em>dimension</em> tables.</li>
    <li><strong>Consumption.</strong> BI dashboards, reports, spreadsheets and data science tools query the warehouse.</li>
</ol>
'],
        ['star-schema', 'Example: a data warehouse for a manufacturer', '
<p>A manufacturer that wants to analyse sales might build a star schema like this:</p>
<div class="guide-table-wrap"><table>
    <thead><tr><th>Table</th><th>Type</th><th>What it holds</th></tr></thead>
    <tbody>
        <tr><td>fact_sales</td><td>Fact</td><td>One row per invoice line: date, customer, item, quantity, value, discount, tax</td></tr>
        <tr><td>dim_date</td><td>Dimension</td><td>Day, week, month, quarter, financial year</td></tr>
        <tr><td>dim_customer</td><td>Dimension</td><td>Customer, city, state, region, sales person, channel</td></tr>
        <tr><td>dim_item</td><td>Dimension</td><td>Item, category, brand, size, unit of measure</td></tr>
        <tr><td>dim_plant</td><td>Dimension</td><td>Plant or warehouse the goods shipped from</td></tr>
    </tbody>
</table></div>
<p>With this shape, a question like "sales of 18 mm plywood in Gujarat by quarter for the last three financial years" is a simple, fast query.</p>
'],
        ['vs-database', 'Data warehouse vs database', '
<div class="guide-table-wrap"><table>
    <thead><tr><th></th><th>Operational database (OLTP)</th><th>Data warehouse (OLAP)</th></tr></thead>
    <tbody>
        <tr><td>Purpose</td><td>Run daily transactions</td><td>Analyse and report</td></tr>
        <tr><td>Typical work</td><td>Many small reads and writes</td><td>Few large reads across millions of rows</td></tr>
        <tr><td>Data</td><td>Current state</td><td>History, often many years</td></tr>
        <tr><td>Sources</td><td>One application</td><td>Many systems combined</td></tr>
        <tr><td>Design</td><td>Normalised to avoid duplicates</td><td>Denormalised (star schema) for fast queries</td></tr>
    </tbody>
</table></div>
'],
        ['vs-data-lake', 'What is a data lake, and how is it different?', '
<p>A <strong>data lake</strong> is a store of raw data in its original form: database exports, log files, sensor readings, images, PDFs, CCTV video. Nothing has to be structured before it goes in. The structure is applied when someone reads the data.</p>
<ul>
    <li><strong>Data warehouse:</strong> structured, cleaned data with a fixed design. Best for business reporting that has to be right every time.</li>
    <li><strong>Data lake:</strong> everything, raw and cheap to store. Best for data science, machine learning and data you are not sure you need yet.</li>
    <li><strong>Lakehouse:</strong> a newer pattern that keeps data in a lake but adds warehouse-style tables and controls on top.</li>
</ul>
<p>A <strong>data mart</strong> is a smaller warehouse for one department, for example a sales mart or a finance mart.</p>
'],
        ['do-you-need-one', 'Does your business need a data warehouse?', '
<p>Many growing manufacturers do not, at least not yet. If most of your operations run in one ERP, its built-in reports and dashboards already cover sales, stock, production and purchase from a single source of truth.</p>
<p>A data warehouse starts to pay off when:</p>
<ul>
    <li>Data you need sits in <strong>several systems</strong> that do not talk to each other.</li>
    <li>You need <strong>years of history</strong> that your operational system no longer keeps or slows down on.</li>
    <li>Heavy reports are <strong>slowing down daily work</strong> in the ERP.</li>
    <li>You have analysts or a BI team who need a <strong>stable, documented model</strong> to build on.</li>
</ul>
<p>Whichever way you go, the quality of the warehouse depends on the quality of the master data feeding it. See our guide on <a href="/guides/master-data-management">master data management</a>.</p>
'],
    ],
    'faq' => [
        ['What is a data warehouse in simple terms?', 'It is a central database that collects data from your business systems, cleans it and keeps its history, so you can run reports and analysis without slowing down the systems people use every day.'],
        ['What is the difference between a data warehouse and a data lake?', 'A data warehouse holds structured, cleaned data designed for reporting. A data lake holds raw data of any type in its original form, which is cheaper to store but needs more work before it can be used for reporting.'],
        ['Is an ERP a data warehouse?', 'No. An ERP records day-to-day transactions. It has reports, but it is not designed to combine data from many systems or to hold long history for analysis. ERP data is usually one of the main sources for a data warehouse.'],
        ['What is ETL?', 'Extract, transform, load: the process of pulling data from source systems, cleaning and reshaping it, and loading it into the data warehouse.'],
        ['Do small businesses need a data warehouse?', 'Usually not at first. If your operations run in one ERP, start with its reports and dashboards. A warehouse becomes worthwhile when data is spread across many systems or you need deep historical analysis. See [Reports and Analytics](/reports-analytics).'],
    ],
    'related' => [
        ['Reports and Analytics', '/reports-analytics', 'Live reports across sales, stock, production and purchase.'],
        ['Business Analytics', '/business-analytics', 'Dashboards and KPIs for owners and plant heads.'],
        ['Master Data Management', '/guides/master-data-management', 'Clean masters are the foundation of any reporting.'],
    ],
    'cta_heading' => 'Get answers from your operations data',
    'cta_text' => 'See how DotOne reports and dashboards turn live ERP data into decisions, in a 30-minute demo.',
];
include __DIR__ . '/../includes/templates/guide.php';
