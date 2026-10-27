<?php
$page = [
    'path' => '/tools/barcode-generator',
    'title' => 'Free Barcode and QR Code Generator | DotOne',
    'description' => 'Free barcode and QR code generator. Create QR codes, Code 128 and EAN-13 barcodes for products, SKUs, batches and bins, and download them as PNG or SVG.',
    'breadcrumbs' => [['Free Tools', '/tools'], ['Barcode and QR Generator', '/tools/barcode-generator']],
    'h1' => 'Barcode and QR Code Generator',
    'intro' => 'Turn an SKU, batch number, bin location or web link into a QR code or barcode. Choose QR, Code 128 or EAN-13, then download the image for labels, packaging or shelf tags.',
    'script' => '/js/tools/barcode-generator.js',
    'tool' => '
<div class="tool-grid" data-code>
    <div class="tool-fields">
        <div class="tool-field">
            <span class="tool-label">Type</span>
            <div class="tool-seg" role="group" aria-label="Code type">
                <button type="button" class="is-active" data-type="qr">QR code</button>
                <button type="button" data-type="CODE128">Code 128</button>
                <button type="button" data-type="EAN13">EAN-13</button>
            </div>
        </div>
        <div class="tool-field">
            <label for="code-text">Text or number</label>
            <input id="code-text" value="PLY-BWP-18M-8X4">
            <span class="tool-hint" data-hint>Any text or link. Longer text makes a denser QR code.</span>
        </div>
        <label class="tool-check" data-showtext hidden><input id="code-label" type="checkbox" checked> Print the text under the barcode</label>
        <div class="tool-actions">
            <button type="button" class="tool-btn" data-png>Download PNG</button>
            <button type="button" class="tool-btn tool-btn--ghost" data-svg>Download SVG</button>
        </div>
        <p class="tool-error" data-error role="alert"></p>
    </div>
    <div class="code-output" data-out aria-live="polite"></div>
</div>',
    'sections' => [
        ['which', 'Which code should you use?', '
<div class="guide-table-wrap"><table>
    <thead><tr><th>Type</th><th>Holds</th><th>Best for</th></tr></thead>
    <tbody>
        <tr><td>QR code</td><td>Text, numbers and links, up to a few hundred characters</td><td>Batch and lot labels, bin locations, links to documents, scanning with a phone camera</td></tr>
        <tr><td>Code 128</td><td>Letters, numbers and symbols</td><td>Internal SKUs, GRN and job card numbers, shipping labels</td></tr>
        <tr><td>EAN-13</td><td>12 digits plus a check digit</td><td>Retail products sold through shops and marketplaces</td></tr>
    </tbody>
</table></div>
<p>For retail, EAN-13 numbers must come from a GS1 registration so they are unique worldwide. Do not make up EAN numbers for products you sell to retailers. For internal use, such as SKUs, bins and batches, Code 128 and QR codes can carry your own codes.</p>
'],
        ['labels', 'Tips for printing barcodes', '
<ul>
    <li><strong>Print dark on light.</strong> Black on white scans best; avoid red bars, which many scanners cannot see.</li>
    <li><strong>Leave a quiet zone,</strong> a clear margin around the code, especially either side of a barcode.</li>
    <li><strong>Do not stretch the image.</strong> Scale it evenly. SVG stays sharp at any size.</li>
    <li><strong>Test with the scanner or phone your team will use</strong> before printing a full roll of labels.</li>
</ul>
'],
        ['in-dotone', 'Scanning in the warehouse', '
<p>Codes pay off when every movement is scanned. In <a href="/warehouse-management">DotOne Warehouse Management</a>, QR scan-to-verify works on receipt, put-away, picking and dispatch, so the system matches what is physically on the shelf. Make the SKUs first with the <a href="/tools/sku-generator">SKU generator</a>.</p>
'],
    ],
    'faq' => [
        ['Is this barcode generator free?', 'Yes. It is free, needs no sign-up and creates the codes in your browser.'],
        ['What is the difference between a barcode and a QR code?', 'A barcode stores a short code in one row of bars and is read by a barcode scanner. A QR code stores much more in a square grid and can be read by a phone camera.'],
        ['Can I make EAN-13 barcodes for my products?', 'You can create the image here, but EAN numbers for retail must be issued through GS1 India so they are unique. Numbers starting 20 to 29 are reserved for in-store use. Use Code 128 or QR for internal codes.'],
        ['Which format should I download?', 'SVG for printing and labels, because it stays sharp at any size. PNG for documents and websites.'],
        ['Does DotOne support barcode and QR scanning?', 'Yes. DotOne uses QR scan-to-verify on receipt, put-away, picking and dispatch. See [Warehouse Management](/warehouse-management).'],
    ],
    'related' => [
        ['SKU Generator', '/tools/sku-generator', 'Create consistent item codes in bulk.'],
        ['Warehouse Management', '/warehouse-management', 'QR scan-to-verify from receipt to dispatch.'],
        ['What Is a WMS?', '/guides/what-is-a-warehouse-management-system', 'How a warehouse management system works.'],
    ],
    'cta_heading' => 'Scan every movement, not just labels',
    'cta_text' => 'DotOne verifies stock by QR scan on receipt, put-away, picking and dispatch. See it in a 30-minute demo.',
];
include dirname(__DIR__) . '/includes/templates/tool.php';
