<?php
$page = [
    'path' => '/tools/sku-generator',
    'title' => 'Free SKU Generator: Create Item Codes in Bulk | DotOne',
    'description' => 'Free SKU generator. Build consistent item codes from category, brand and attributes like size and colour, generate every variant at once and download them as CSV.',
    'breadcrumbs' => [['Free Tools', '/tools'], ['SKU Generator', '/tools/sku-generator']],
    'h1' => 'SKU Generator',
    'intro' => 'Create consistent SKUs (item codes) from a category, a product name and its attributes. List several values for an attribute, such as sizes or colours, and every combination is generated in one go, ready to download as a CSV.',
    'script' => '/js/tools/sku-generator.js',
    'tool' => '
<div data-sku>
    <div class="tool-grid">
        <div class="tool-fields">
            <div class="tool-row">
                <div class="tool-field"><label for="sku-cat">Category</label><input id="sku-cat" value="Plywood"></div>
                <div class="tool-field"><label for="sku-prod">Product or grade</label><input id="sku-prod" value="BWP"></div>
            </div>
            <div class="tool-row">
                <div class="tool-field"><label for="sku-a1">Attribute 1 values</label><input id="sku-a1" value="6mm, 12mm, 18mm"><span class="tool-hint">Separate values with commas.</span></div>
                <div class="tool-field"><label for="sku-a2">Attribute 2 values</label><input id="sku-a2" value="8x4, 7x4"></div>
            </div>
            <div class="tool-field"><label for="sku-a3">Attribute 3 values (optional)</label><input id="sku-a3" value=""></div>
            <div class="tool-row">
                <div class="tool-field"><label for="sku-len">Letters per word</label><select id="sku-len"><option value="2">2</option><option value="3" selected>3</option><option value="4">4</option><option value="0">Full word</option></select></div>
                <div class="tool-field"><label for="sku-sep">Separator</label><select id="sku-sep"><option value="-" selected>Hyphen (-)</option><option value="">None</option><option value="/">Slash (/)</option><option value="_">Underscore (_)</option></select></div>
            </div>
            <label class="tool-check"><input id="sku-seq" type="checkbox"> Add a running number at the end</label>
        </div>
        <div class="tool-result" aria-live="polite">
            <p class="tool-result-label">SKUs generated</p>
            <p class="tool-result-main" data-skucount>0</p>
            <div class="tool-actions">
                <button type="button" class="tool-btn" data-csv>Download CSV</button>
                <button type="button" class="tool-btn tool-btn--ghost" data-copy>Copy all</button>
            </div>
            <p class="tool-hint" data-msg></p>
        </div>
    </div>
    <div class="guide-table-wrap" style="margin-top:1.5rem;max-height:26rem;overflow:auto"><table class="tool-table" data-list></table></div>
</div>',
    'sections' => [
        ['what', 'What is an SKU?', '
<p>An <strong>SKU (stock keeping unit)</strong> is the code you give each distinct item you stock: every size, colour, grade or pack of a product gets its own SKU. Stores, purchase, sales and accounts all use it to mean exactly the same item.</p>
<p>A good SKU can be read by a person. <code>PLY-BWP-18M-8X4</code> tells anyone it is 18 mm BWP plywood in 8x4 sheets, while a random number tells them nothing.</p>
'],
        ['rules', 'Rules for good SKU codes', '
<ul>
    <li><strong>Go from general to specific:</strong> category, product, then attributes such as size and colour.</li>
    <li><strong>Keep the same order and length</strong> for every item, so codes sort and filter cleanly.</li>
    <li><strong>Use letters and numbers only,</strong> with one separator. Avoid spaces and symbols that break barcodes and spreadsheets.</li>
    <li><strong>Avoid look-alike characters</strong> such as O and 0, or I and 1, where they could be confused.</li>
    <li><strong>Never reuse a code</strong> for a different item, even after the old one is discontinued.</li>
    <li><strong>Do not put prices or supplier names in SKUs;</strong> they change, and the code should not.</li>
</ul>
<p>SKUs are part of your master data. See our guide on <a href="/guides/master-data-management">master data management</a> for keeping item masters clean.</p>
'],
        ['variants', 'SKUs for product variants', '
<p>When one product comes in many sizes, thicknesses or colours, each combination needs its own SKU, but they should clearly belong together. That is what the attribute fields above do: three thicknesses and two sizes give six related SKUs that share a prefix.</p>
<p>In an ERP, the same structure lets you keep one product with variants, so stock, prices and BOMs can be managed together. See the <a href="/guides/bom-setup">BOM setup guide</a> for variants in production.</p>
'],
    ],
    'faq' => [
        ['What is an SKU number?', 'A stock keeping unit code that uniquely identifies one item you stock, including its variant such as size, colour or pack.'],
        ['How do you create an SKU?', 'Combine short codes for the category, the product and each attribute, in a fixed order with one separator, for example PLY-BWP-18M-8X4.'],
        ['What is the difference between an SKU and a barcode?', 'The SKU is your internal item code. A barcode is a machine-readable image of a code, which can be the SKU itself or a global code such as an EAN. Create one with the [barcode and QR generator](/tools/barcode-generator).'],
        ['Should SKUs include the supplier?', 'Usually not. The same item can come from several suppliers. Keep supplier details in the item master instead.'],
        ['Can I import these SKUs into an ERP?', 'Yes. Download the CSV and use it when you set up item masters. DotOne item masters hold the SKU with its attributes, units, HSN and reorder levels.'],
    ],
    'related' => [
        ['Barcode and QR Generator', '/tools/barcode-generator', 'Turn SKUs into barcodes or QR codes.'],
        ['Master Data Management', '/guides/master-data-management', 'Keep item, customer and vendor masters clean.'],
        ['Inventory Management', '/inventory-management', 'Stock by SKU, batch and warehouse.'],
    ],
    'cta_heading' => 'Keep every SKU in one item master',
    'cta_text' => 'DotOne holds SKUs with their attributes, units, HSN and reorder levels, and syncs items with Tally.',
];
include dirname(__DIR__) . '/includes/templates/tool.php';
