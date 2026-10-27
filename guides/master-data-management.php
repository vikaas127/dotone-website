<?php
$page = [
    'path' => '/guides/master-data-management',
    'title' => 'What Is Master Data Management (MDM)? ERP Guide | DotOne',
    'description' => 'What is master data management? The master data a manufacturer runs on, why it goes wrong, the rules that keep it clean, and a checklist before ERP go-live.',
    'breadcrumbs' => [['Guides', '/guides'], ['Master Data Management', '/guides/master-data-management']],
    'article' => ['published' => '2026-10-27'],
    'eyebrow' => 'ERP Guide',
    'read_time' => '9 min',
    'h1' => 'Master Data Management: A Practical Guide for ERP Users',
    'intro' => 'Every invoice, purchase order and production entry is built from master data: items, customers, vendors, units, tax codes and BOMs. When the masters are wrong, everything built on them is wrong. This guide explains master data management and how to keep your masters clean.',
    'sections' => [
        ['definition', 'What is master data management?', '
<p><strong>Master data</strong> is the core reference data a business runs on, the records that change rarely but are used in almost every transaction. <strong>Master data management (MDM)</strong> is the set of rules, owners and processes that keep that data accurate, consistent and free of duplicates across every system and team.</p>
<p>Large enterprises buy dedicated MDM software. For most growing manufacturers, MDM is a discipline applied inside the ERP: clear naming rules, named owners and an approval step before a new master goes live.</p>
'],
        ['master-vs-transactional', 'Master data vs transactional data', '
<div class="guide-table-wrap"><table>
    <thead><tr><th></th><th>Master data</th><th>Transactional data</th></tr></thead>
    <tbody>
        <tr><td>What it is</td><td>Who and what the business deals with</td><td>What happened, and when</td></tr>
        <tr><td>Examples</td><td>Item, customer, vendor, BOM, ledger</td><td>Invoice, PO, GRN, job card, payment</td></tr>
        <tr><td>How often it changes</td><td>Rarely</td><td>Every day</td></tr>
        <tr><td>Impact of an error</td><td>Repeats in every transaction that uses it</td><td>Usually limited to one document</td></tr>
    </tbody>
</table></div>
'],
        ['types', 'The master data a manufacturer runs on', '
<ul>
    <li><strong>Item master:</strong> raw materials, components, consumables, semi-finished and finished goods, with codes, units, HSN, tax rate and reorder levels.</li>
    <li><strong>Units of measure:</strong> base units and conversions, such as a roll to metres or a box to pieces.</li>
    <li><strong>Bill of materials (BOM):</strong> what goes into each product, in what quantity, with expected scrap.</li>
    <li><strong>Customer master:</strong> legal name, GSTIN, billing and shipping addresses, credit terms, price list.</li>
    <li><strong>Vendor master:</strong> legal name, GSTIN, PAN, bank details, payment terms, approved items.</li>
    <li><strong>Chart of accounts and ledgers:</strong> the ledgers your vouchers post to, which must match your books in Tally.</li>
    <li><strong>Locations:</strong> plants, warehouses, bins and work centres.</li>
    <li><strong>Employees:</strong> codes, departments, salary structure and statutory details.</li>
</ul>
'],
        ['what-goes-wrong', 'Why master data goes wrong', '
<ul>
    <li><strong>Duplicates.</strong> The same item created as "MS Sheet 2mm", "M.S. sheet 2 mm" and "Mild steel sheet 2.0". Stock splits across three records and none of them is right.</li>
    <li><strong>No owner.</strong> Anyone can create a master, so everyone does, in their own style.</li>
    <li><strong>Wrong units.</strong> Bought in kg, issued in pieces, with no conversion set up, so stock and costing drift apart.</li>
    <li><strong>Missing tax details.</strong> Wrong HSN or GST rate on an item, or a wrong GSTIN on a customer, puts errors into every invoice and return.</li>
    <li><strong>Old records left active.</strong> Discontinued items and inactive vendors still show up in dropdowns and get used by mistake.</li>
</ul>
'],
        ['rules', 'Rules that keep master data clean', '
<ol>
    <li><strong>Name an owner for each master.</strong> For example: stores owns items, purchase owns vendors, accounts owns ledgers and customer tax details.</li>
    <li><strong>Agree a naming convention.</strong> For example: type, material, size, grade, in that order, with fixed abbreviations: "SHEET-MS-2.0MM-IS2062".</li>
    <li><strong>Use structured fields, not names, for attributes.</strong> Size, grade and colour belong in fields or variants, so reports can filter on them.</li>
    <li><strong>Search before you create.</strong> Make checking for an existing record a required step.</li>
    <li><strong>Approve new masters.</strong> A short approval step for new items and vendors stops most duplicates.</li>
    <li><strong>Validate tax data.</strong> Check GSTIN format and HSN codes when the record is created, not when the return is filed.</li>
    <li><strong>Deactivate, don\'t delete.</strong> Mark old records inactive so history stays intact but nobody can pick them by mistake.</li>
    <li><strong>Review quarterly.</strong> Run a duplicate and missing-field report and clean up.</li>
</ol>
'],
        ['go-live-checklist', 'Master data checklist before ERP go-live', '
<ul>
    <li>Item list de-duplicated, with codes, units, HSN and GST rates filled for every active item</li>
    <li>Unit conversions set up and tested on real purchase and issue examples</li>
    <li>BOMs entered and checked against one real production batch (see our <a href="/guides/bom-setup">BOM setup guide</a>)</li>
    <li>Customer and vendor GSTINs, addresses and payment terms verified</li>
    <li>Ledgers mapped to your Tally company, if your books stay in Tally</li>
    <li>Opening stock counted and loaded by location</li>
    <li>Owners and the approval rule for new masters agreed and written down</li>
</ul>
<p>DotOne syncs masters both ways with Tally through the <a href="/integrations/tally">Tally connector</a>, so customers, vendors, items and ledgers stay the same in both systems.</p>
'],
    ],
    'faq' => [
        ['What is master data management in simple terms?', 'It is keeping your core business records, such as items, customers, vendors and BOMs, accurate, consistent and free of duplicates, with clear rules about who creates and changes them.'],
        ['What are examples of master data?', 'Item master, units of measure, bills of materials, customer master, vendor master, chart of accounts, warehouses and employee records.'],
        ['What is the difference between master data and transactional data?', 'Master data describes who and what the business deals with and changes rarely. Transactional data records events such as invoices, purchase orders and payments, and is created every day using the masters.'],
        ['Do I need separate MDM software?', 'Most growing manufacturers do not. Clear ownership, naming rules and an approval step inside the ERP solve most master data problems. Dedicated MDM tools make sense when many separate systems hold the same masters.'],
        ['How do I stop duplicate items being created?', 'Give one team ownership of the item master, agree a naming convention, make searching for an existing item a required step, and add an approval for new items. See the [BOM setup guide](/guides/bom-setup) for item and variant structure.'],
    ],
    'related' => [
        ['BOM Setup Guide', '/guides/bom-setup', 'Structure BOMs and variants so costing and planning stay accurate.'],
        ['Inventory Management', '/inventory-management', 'Item masters, units and multi-warehouse stock.'],
        ['DotOne Tally Connector', '/integrations/tally', 'Two-way master sync between DotOne and Tally.'],
    ],
    'cta_heading' => 'Start your ERP with clean masters',
    'cta_text' => 'Our implementation team helps you clean and load items, BOMs, customers and vendors before go-live.',
];
include __DIR__ . '/../includes/templates/guide.php';
