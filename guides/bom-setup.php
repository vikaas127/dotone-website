<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How to Set Up a Bill of Materials | DotOne</title>
    <meta name="description" content="How to Set Up a Bill of Materials: practical, India-specific guidance from the DotOne team, with examples and checklists.">
    <link rel="canonical" href="https://dotone.biz/guides/bom-setup">
    <link rel="icon" href="/public/favicon.ico">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Dotone">
    <meta property="og:title" content="How to Set Up a Bill of Materials | DotOne">
    <meta property="og:description" content="How to Set Up a Bill of Materials: practical, India-specific guidance from the DotOne team, with examples and checklists.">
    <meta property="og:url" content="https://dotone.biz/guides/bom-setup">
    <meta property="og:image" content="https://dotone.biz/assets/og-image.jpg?v=2">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="DotOne: ERP, AI agents and automation in one platform">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Set Up a Bill of Materials | DotOne">
    <meta name="twitter:description" content="How to Set Up a Bill of Materials: practical, India-specific guidance from the DotOne team, with examples and checklists.">
    <meta name="twitter:image" content="https://dotone.biz/assets/og-image.jpg?v=2">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,400;14..32,500;14..32,600;14..32,700&family=JetBrains+Mono:wght@400&display=swap">
    <link rel="stylesheet" href="/css/main.css?v=20261011">
    <script src="/js/header-nav.js?v=20261011" defer></script>
</head>

<body class="bg-background">

<div id="header"><?php include __DIR__ . '/../includes/header.php'; ?></div>

<!-- HERO -->
<section class="relative pt-32 pb-16 md:pb-20 overflow-hidden" data-scroll="off">
    <div class="absolute inset-0 hero-tint" aria-hidden="true"></div>
    <div class="container-custom relative z-10 max-w-6xl mx-auto">
        <nav class="guide-breadcrumb" aria-label="Breadcrumb">
            <a href="/guides">Guides</a>
            <span class="guide-breadcrumb-sep" aria-hidden="true">/</span>
            <a href="/guides?category=production">Production</a>
            <span class="guide-breadcrumb-sep" aria-hidden="true">/</span>
            <span class="text-text-primary">BOM Setup</span>
        </nav>
        <div class="guide-hero-grid">
            <div class="text-center lg:text-left space-y-6">
                <span class="section-label bg-primary-50 text-primary-600 px-4 py-1.5 rounded-full">Production Guide · 12 min read</span>
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-display font-bold leading-tight">How to Set Up a Bill of Materials</h1>
                <p class="text-lg md:text-xl text-text-secondary max-w-xl mx-auto lg:mx-0">
                    Master product variants, pack sizes, flavors, materials, and attribute scaling — so production planning, costing, and inventory stay accurate in Dotone.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start pt-2">
                    <a href="#golden-rule" class="btn-primary">Read Guide</a>
                    <a href="/contact" class="btn-secondary">Talk to an Expert</a>
                </div>
            </div>
            <div class="guide-bom-viz" id="hero-bom-viz" aria-hidden="true">
                <div class="guide-bom-viz-glow"></div>
                <svg class="guide-bom-svg" viewBox="0 0 400 280" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line class="guide-bom-line guide-bom-line--1" x1="200" y1="72" x2="200" y2="108" stroke="#0096EE" stroke-width="2" stroke-linecap="round"/>
                    <line class="guide-bom-line guide-bom-line--2" x1="200" y1="108" x2="100" y2="168" stroke="#0096EE" stroke-width="2" stroke-linecap="round"/>
                    <line class="guide-bom-line guide-bom-line--3" x1="200" y1="108" x2="300" y2="168" stroke="#0096EE" stroke-width="2" stroke-linecap="round"/>
                    <line class="guide-bom-line guide-bom-line--4" x1="200" y1="108" x2="200" y2="228" stroke="#0096EE" stroke-width="2" stroke-linecap="round"/>
                    <g class="guide-bom-node guide-bom-node--1">
                        <rect x="130" y="20" width="140" height="52" rx="12" fill="url(#bomGrad)" opacity="0.15"/>
                        <rect x="130" y="20" width="140" height="52" rx="12" stroke="#0096EE" stroke-width="2"/>
                        <text x="200" y="44" text-anchor="middle" fill="#0f172a" font-size="11" font-weight="700">Engine Oil Bulk</text>
                        <text x="200" y="58" text-anchor="middle" fill="#64748b" font-size="9">Parent BOM · 1 Recipe</text>
                    </g>
                    <g class="guide-bom-node guide-bom-node--2">
                        <rect x="155" y="100" width="90" height="36" rx="8" fill="#f0f9ff" stroke="#0096EE" stroke-width="1.5" stroke-dasharray="4 3"/>
                        <text x="200" y="122" text-anchor="middle" fill="#0096EE" font-size="9" font-weight="600">Packing Step</text>
                    </g>
                    <g class="guide-bom-node guide-bom-node--3">
                        <rect x="40" y="168" width="120" height="44" rx="10" fill="#ecfdf5" stroke="#10b981" stroke-width="1.5"/>
                        <text x="100" y="188" text-anchor="middle" fill="#065f46" font-size="10" font-weight="600">Engine Oil 5L</text>
                        <text x="100" y="202" text-anchor="middle" fill="#64748b" font-size="8">SKU · Pack Material</text>
                    </g>
                    <g class="guide-bom-node guide-bom-node--4">
                        <rect x="240" y="168" width="120" height="44" rx="10" fill="#ecfdf5" stroke="#10b981" stroke-width="1.5"/>
                        <text x="300" y="188" text-anchor="middle" fill="#065f46" font-size="10" font-weight="600">Engine Oil 1L</text>
                        <text x="300" y="202" text-anchor="middle" fill="#64748b" font-size="8">SKU · Pack Material</text>
                    </g>
                    <g class="guide-bom-node guide-bom-node--5">
                        <rect x="140" y="228" width="120" height="40" rx="10" fill="#ecfdf5" stroke="#10b981" stroke-width="1.5"/>
                        <text x="200" y="248" text-anchor="middle" fill="#065f46" font-size="10" font-weight="600">Engine Oil 500ml</text>
                        <text x="200" y="260" text-anchor="middle" fill="#64748b" font-size="8">Multi Variant Packing</text>
                    </g>
                    <defs>
                        <linearGradient id="bomGrad" x1="0" y1="0" x2="1" y2="1">
                            <stop stop-color="#0096EE"/>
                            <stop offset="1" stop-color="#0096EE"/>
                        </linearGradient>
                    </defs>
                </svg>
                <p class="text-xs text-center text-text-secondary mt-4">One bulk recipe → multiple packed SKUs</p>
            </div>
        </div>
    </div>
</section>

<!-- WHAT IS A BOM -->
<section class="section-sm bg-surface">
    <div class="container-custom max-w-5xl mx-auto">
        <div class="grid lg:grid-cols-2 gap-10 items-center">
            <div>
                <h2 class="text-3xl md:text-4xl font-display font-bold mb-5">What is a BOM in manufacturing?</h2>
                <div class="guide-prose-block">
                    <p>A <strong>Bill of Materials (BOM)</strong> is the complete recipe for making a product — every raw material, sub-assembly, quantity, and operation step needed from input to finished goods.</p>
                    <p>In Dotone, a BOM connects to your <strong>routing</strong> (production steps), <strong>work orders</strong>, <strong>inventory consumption</strong>, and <strong>costing</strong>. Getting the BOM structure right upfront saves weeks of rework later.</p>
                    <p>MSME manufacturers often struggle with variants: same liquid in 5L and 1L bottles, tiles in two sizes, or juices in different flavors. The golden rule below tells you when to split or keep one BOM.</p>
                </div>
            </div>
            <div class="guide-stat-grid">
                <div class="guide-stat-card scroll-reveal-scale">
                    <span class="guide-stat-value" data-target="40" data-suffix="%">0%</span>
                    <span class="guide-stat-label">Less BOM duplication with parent + packing model</span>
                </div>
                <div class="guide-stat-card scroll-reveal-scale">
                    <span class="guide-stat-value" data-target="3" data-suffix="×">0×</span>
                    <span class="guide-stat-label">Faster MRP when recipe is defined once</span>
                </div>
                <div class="guide-stat-card scroll-reveal-scale">
                    <span class="guide-stat-value" data-target="99" data-suffix="%">0%</span>
                    <span class="guide-stat-label">Cost accuracy per SKU when structure is correct</span>
                </div>
                <div class="guide-stat-card scroll-reveal-scale">
                    <span class="guide-stat-value" data-prefix="<" data-target="2" data-suffix=" wks">0</span>
                    <span class="guide-stat-label">Typical go-live for BOM + routing setup</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- COMPARE VISUAL -->
<section class="section-sm">
    <div class="container-custom max-w-5xl mx-auto">
        <div class="text-center mb-10">
            <h2 class="text-3xl md:text-4xl font-display font-bold">Two ways to structure variants</h2>
            <p class="text-text-secondary mt-3 max-w-2xl mx-auto">Same bulk product, different outcomes — choose the model that matches how your recipe actually changes.</p>
        </div>
        <div class="guide-compare-grid">
            <div class="guide-compare-panel guide-compare-panel--good scroll-reveal-left">
                <span class="guide-badge guide-badge--good mb-4">Recommended · One Parent BOM</span>
                <h3 class="text-xl font-display font-semibold mb-2">Pack size / label / dimension only</h3>
                <p class="text-sm text-text-secondary mb-2">One manufacturing recipe. Variants created at the packing step.</p>
                <div class="guide-mini-tree">
                    <div class="guide-mini-tree-row"><span class="guide-mini-tree-dot"></span><strong>Engine Oil Bulk</strong> — Base materials + blending</div>
                    <div class="guide-mini-tree-child">→ Packing operation</div>
                    <div class="guide-mini-tree-child">→ 5L Bottle (pack material + label)</div>
                    <div class="guide-mini-tree-child">→ 1L Bottle (pack material + label)</div>
                    <div class="guide-mini-tree-child">→ 500ml Pouch (pack material)</div>
                </div>
            </div>
            <div class="guide-compare-panel guide-compare-panel--warn scroll-reveal-left" style="--scroll-delay: 120ms">
                <span class="guide-badge guide-badge--warn mb-4">Separate BOMs required</span>
                <h3 class="text-xl font-display font-semibold mb-2">Recipe / flavor / material changes</h3>
                <p class="text-sm text-text-secondary mb-2">Each variant needs its own BOM because inputs or process differ.</p>
                <div class="guide-mini-tree">
                    <div class="guide-mini-tree-row"><span class="guide-mini-tree-dot"></span><strong>Mango Juice BOM</strong> — Mango pulp, sugar, water</div>
                    <div class="guide-mini-tree-row mt-3"><span class="guide-mini-tree-dot"></span><strong>Lemon Juice BOM</strong> — Lemon concentrate, sugar, water</div>
                    <div class="guide-mini-tree-row mt-3"><span class="guide-mini-tree-dot"></span><strong>SS304 Valve BOM</strong> — Different raw material grade</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- GOLDEN RULE -->
<section id="golden-rule" class="section-sm bg-surface">
    <div class="container-custom max-w-4xl mx-auto">
        <h2 class="text-3xl md:text-4xl font-display font-bold mb-6">The Golden Rule</h2>
        <div class="guide-rule-card">
            <h3 class="text-xl font-display font-semibold text-text-primary mb-4">Does the manufacturing recipe change?</h3>
            <div class="space-y-4 text-text-secondary leading-relaxed">
                <p>If the <strong class="text-text-primary">raw materials, percentages, routing steps, or manufacturing process</strong> changes → create a <strong class="text-text-primary">Separate BOM</strong> (or separate parent product).</p>
                <p>If only <strong class="text-text-primary">packaging, labels, pack sizes, colors, or physical dimensions</strong> change → use <strong class="text-text-primary">One Parent BOM</strong> with Multi Variant Packing or Attribute Scaling.</p>
            </div>
        </div>
        <div class="guide-prose-block mt-8 max-w-3xl">
            <p><strong>Routing matters too.</strong> If blending takes 2 hours but packing takes 20 minutes, keep blending on the parent BOM and add a dedicated packing operation. Packaging materials (bottle, cap, label, carton) attach to the packing step — not duplicated across every SKU's recipe.</p>
        </div>
    </div>
</section>

<!-- DECISION FLOW -->
<section class="section-sm">
    <div class="container-custom max-w-4xl mx-auto">
        <div class="text-center mb-8 md:mb-10">
            <h2 class="text-3xl md:text-4xl font-display font-bold">Quick Decision Flow</h2>
            <p class="text-text-secondary mt-3">Use this every time you add a new product, pack size, or variant.</p>
        </div>
        <div class="guide-flow guide-flow-animated">
            <div class="guide-flow-step">
                <div class="guide-flow-box guide-flow-box--primary">New Product / Variant</div>
                <span class="guide-flow-arrow" aria-hidden="true">↓</span>
                <div class="guide-flow-box">Does the recipe change?<br><span class="text-xs font-normal text-text-secondary">Materials · % · Routing · Process</span></div>
                <span class="guide-flow-arrow" aria-hidden="true">↓</span>
                <div class="guide-flow-branch">
                    <div class="guide-flow-step">
                        <span class="text-xs font-semibold uppercase tracking-wide text-text-secondary mb-1">No</span>
                        <div class="guide-flow-box guide-flow-box--success">One Parent BOM<br><span class="text-xs font-normal opacity-80">+ Packing / Scaling</span></div>
                    </div>
                    <div class="guide-flow-step">
                        <span class="text-xs font-semibold uppercase tracking-wide text-text-secondary mb-1">Yes</span>
                        <div class="guide-flow-box guide-flow-box--warning">Separate BOM<br><span class="text-xs font-normal opacity-80">Per recipe / material</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ONE PARENT BOM TABLE -->
<section class="section bg-surface">
    <div class="container-custom max-w-5xl mx-auto">
        <div class="text-center mb-8 md:mb-10">
            <h2 class="text-3xl md:text-4xl font-display font-bold">When to Use One Parent BOM</h2>
            <p class="text-text-secondary mt-3">Same recipe — different packaging or scaling only.</p>
        </div>
        <div class="guide-table-wrap scroll-reveal">
            <div class="overflow-x-auto">
                <table class="guide-table">
                    <thead>
                        <tr><th>Scenario</th><th>Example</th><th>Recommended Setup</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>Pack Size</td><td>5L, 2L, 500ml engine oil</td><td><span class="guide-badge guide-badge--good">Parent BOM + Multi Variant Packing</span></td></tr>
                        <tr><td>Pack Type</td><td>Pouch vs Bottle</td><td><span class="guide-badge guide-badge--good">Parent BOM + Packaging Materials</span></td></tr>
                        <tr><td>Size Scaling</td><td>600×600 vs 300×300 tile</td><td><span class="guide-badge guide-badge--good">Attribute Scaling on area</span></td></tr>
                        <tr><td>Thickness</td><td>8mm vs 12mm sheet</td><td><span class="guide-badge guide-badge--good">Attribute Scaling on thickness</span></td></tr>
                        <tr><td>Color / Label</td><td>Red vs Blue label, white-label brand</td><td><span class="guide-badge guide-badge--good">Packaging Variants on packing step</span></td></tr>
                        <tr><td>UOM Conversion</td><td>Bulk kg → retail grams</td><td><span class="guide-badge guide-badge--good">Packing targets + conversion factor</span></td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<!-- SEPARATE BOM TABLE -->
<section class="section-sm">
    <div class="container-custom max-w-5xl mx-auto">
        <div class="text-center mb-8 md:mb-10">
            <h2 class="text-3xl md:text-4xl font-display font-bold">When to Create Separate BOMs</h2>
            <p class="text-text-secondary mt-3">Different recipe, material, or formula — always split.</p>
        </div>
        <div class="guide-table-wrap scroll-reveal">
            <div class="overflow-x-auto">
                <table class="guide-table">
                    <thead>
                        <tr><th>Scenario</th><th>Example</th><th>Action</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>Flavor</td><td>Mango vs Lemon juice — different inputs</td><td><span class="guide-badge guide-badge--warn">Separate BOM per flavor</span></td></tr>
                        <tr><td>Material Grade</td><td>SS304 vs MS components</td><td><span class="guide-badge guide-badge--warn">Separate parent product + BOM</span></td></tr>
                        <tr><td>Model / SKU family</td><td>Completely different part lists</td><td><span class="guide-badge guide-badge--warn">Separate BOM</span></td></tr>
                        <tr><td>Formula change</td><td>Reformulation with new additives</td><td><span class="guide-badge guide-badge--warn">New BOM version or product</span></td></tr>
                        <tr><td>Make-to-order config</td><td>Customer-specific recipe each time</td><td><span class="guide-badge guide-badge--warn">Configurable BOM / variant rules</span></td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<!-- STEP BY STEP -->
<section class="section bg-surface">
    <div class="container-custom max-w-4xl mx-auto">
        <div class="text-center mb-10">
            <h2 class="text-3xl md:text-4xl font-display font-bold">Step-by-Step BOM Setup in Dotone</h2>
            <p class="text-base md:text-lg text-text-secondary mt-3 max-w-2xl mx-auto">Follow this sequence for a parent BOM with multi-variant packing.</p>
        </div>
        <div class="guide-steps-track">
            <div class="guide-steps-line" aria-hidden="true"></div>
            <div class="guide-steps-line-fill" aria-hidden="true"></div>
            <div class="guide-step-item">
                <span class="guide-step-num">1</span>
                <h3 class="guide-step-title">Create the parent (bulk) product</h3>
                <p class="guide-step-desc">Define the item you manufacture in bulk — e.g. "Engine Oil Bulk" or "Tile Slurry". Leave product variant empty on the parent BOM.</p>
            </div>
            <div class="guide-step-item">
                <span class="guide-step-num">2</span>
                <h3 class="guide-step-title">Define routing &amp; operations</h3>
                <p class="guide-step-desc">Add blending/mixing/pressing steps first, then a dedicated <strong>Packing</strong> operation as the last step before finished goods.</p>
            </div>
            <div class="guide-step-item">
                <span class="guide-step-num">3</span>
                <h3 class="guide-step-title">Add raw materials to the BOM</h3>
                <p class="guide-step-desc">List base materials with quantities per unit of bulk output. Use scrap % and alternate items where needed.</p>
            </div>
            <div class="guide-step-item">
                <span class="guide-step-num">4</span>
                <h3 class="guide-step-title">Enable Multi Variant Packing</h3>
                <p class="guide-step-desc">Turn on packing for the parent BOM. Link each sellable SKU (5L, 1L, 500ml) as a packing target.</p>
            </div>
            <div class="guide-step-item">
                <span class="guide-step-num">5</span>
                <h3 class="guide-step-title">Add packaging materials</h3>
                <p class="guide-step-desc">Bottle, cap, label, shrink wrap — attach to the packing step. Use "Apply on Variants" to assign labels per SKU only.</p>
            </div>
            <div class="guide-step-item">
                <span class="guide-step-num">6</span>
                <h3 class="guide-step-title">Test work order &amp; costing</h3>
                <p class="guide-step-desc">Raise a trial work order for bulk qty, run packing to each SKU, and verify material issue + unit cost before go-live.</p>
            </div>
        </div>
    </div>
</section>

<!-- ATTRIBUTE SCALING -->
<section class="section-sm">
    <div class="container-custom max-w-5xl mx-auto">
        <div class="grid lg:grid-cols-2 gap-10 items-center">
            <div>
                <h2 class="text-3xl md:text-4xl font-display font-bold mb-5">Attribute Scaling explained</h2>
                <div class="guide-prose-block">
                    <p>For products where quantity scales with <strong>size, area, or thickness</strong> — like tiles, sheets, or panels — use Attribute Scaling instead of duplicating BOM lines.</p>
                    <p><strong>Formula:</strong> Scaled Qty = Base Qty × (New Attribute ÷ Base Attribute)</p>
                    <p>Example: A 600×600 tile uses 4× the raw material of a 300×300 tile (area ratio 4:1). Dotone calculates consumption automatically when you enter dimensions on the work order.</p>
                </div>
            </div>
            <div class="card p-6 md:p-8 guide-scaling-viz">
                <h3 class="text-sm font-semibold uppercase tracking-wide text-text-secondary mb-4">Material use by tile size</h3>
                <div class="guide-scaling-bar-wrap">
                    <div class="guide-scaling-row">
                        <div class="guide-scaling-label"><span>600 × 600 mm</span><span>100% (base)</span></div>
                        <div class="guide-scaling-bar"><div class="guide-scaling-fill guide-scaling-fill--600"></div></div>
                    </div>
                    <div class="guide-scaling-row">
                        <div class="guide-scaling-label"><span>300 × 300 mm</span><span>25% of base</span></div>
                        <div class="guide-scaling-bar"><div class="guide-scaling-fill guide-scaling-fill--300"></div></div>
                    </div>
                </div>
                <p class="text-xs text-text-secondary mt-4">Area ratio: (300×300) ÷ (600×600) = 0.25</p>
            </div>
        </div>
    </div>
</section>

<!-- FIELD GUIDE -->
<section class="section bg-surface">
    <div class="container-custom max-w-6xl mx-auto">
        <div class="text-center mb-10 md:mb-12">
            <h2 class="text-3xl md:text-4xl font-display font-bold">BOM Field Guide</h2>
            <p class="text-text-secondary mt-3">Key Dotone fields and when to use each one.</p>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="guide-field-card"><div class="guide-field-icon" aria-hidden="true"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg></div><h3 class="text-lg font-display font-semibold mb-2">Product</h3><p class="text-sm text-text-secondary">Parent product or bulk item that holds the core manufacturing recipe.</p></div>
            <div class="guide-field-card"><div class="guide-field-icon" aria-hidden="true"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"/></svg></div><h3 class="text-lg font-display font-semibold mb-2">Product Variant</h3><p class="text-sm text-text-secondary">Use only when the recipe itself differs — assign variant on a separate BOM.</p></div>
            <div class="guide-field-card"><div class="guide-field-icon" aria-hidden="true"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"/></svg></div><h3 class="text-lg font-display font-semibold mb-2">Multi Variant Packing</h3><p class="text-sm text-text-secondary">One bulk output packed into multiple sellable SKUs from a single work order.</p></div>
            <div class="guide-field-card"><div class="guide-field-icon" aria-hidden="true"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg></div><h3 class="text-lg font-display font-semibold mb-2">Packing Targets</h3><p class="text-sm text-text-secondary">Which finished SKUs can be produced from one bulk batch — with qty per pack.</p></div>
            <div class="guide-field-card"><div class="guide-field-icon" aria-hidden="true"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"/></svg></div><h3 class="text-lg font-display font-semibold mb-2">Attribute Scaling</h3><p class="text-sm text-text-secondary">Auto-scale material qty by length, width, thickness, or custom attributes.</p></div>
            <div class="guide-field-card"><div class="guide-field-icon" aria-hidden="true"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/></svg></div><h3 class="text-lg font-display font-semibold mb-2">Apply on Variants</h3><p class="text-sm text-text-secondary">Limit packaging materials to specific SKUs — e.g. premium label on 5L only.</p></div>
        </div>
    </div>
</section>

<!-- COMMON MISTAKES -->
<section class="section-sm">
    <div class="container-custom max-w-4xl mx-auto">
        <div class="text-center mb-10">
            <h2 class="text-3xl md:text-4xl font-display font-bold">Common BOM Mistakes</h2>
            <p class="text-base md:text-lg text-text-secondary mt-3 max-w-2xl mx-auto">Avoid these — they cause wrong costing, stock issues, and planning errors.</p>
        </div>
        <div class="space-y-4">
            <div class="guide-mistake-card scroll-reveal">
                <h3 class="guide-step-title">Duplicating the full BOM for every pack size</h3>
                <p class="guide-step-desc">Creates maintenance hell. Use one parent BOM + multi-variant packing instead.</p>
            </div>
            <div class="guide-mistake-card scroll-reveal">
                <h3 class="guide-step-title">Mixing flavors in one BOM</h3>
                <p class="guide-step-desc">Mango and lemon share a bottle but not a recipe — separate BOMs with shared packing materials if needed.</p>
            </div>
            <div class="guide-mistake-card scroll-reveal">
                <h3 class="guide-step-title">Forgetting the packing step in routing</h3>
                <p class="guide-step-desc">Packaging materials won't consume correctly. Always add packing as the final operation.</p>
            </div>
            <div class="guide-mistake-card scroll-reveal">
                <h3 class="guide-step-title">Not testing with a trial work order</h3>
                <p class="guide-step-desc">Validate material issue, WIP, and finished goods qty before enabling for production planners.</p>
            </div>
        </div>
    </div>
</section>

<!-- EXAMPLES -->
<section class="section bg-surface">
    <div class="container-custom max-w-6xl mx-auto">
        <div class="text-center mb-10 md:mb-12">
            <h2 class="text-3xl md:text-4xl font-display font-bold">Real Manufacturing Examples</h2>
        </div>
        <div class="grid md:grid-cols-3 gap-6">
            <div class="guide-example-card scroll-reveal-scale"><h3 class="text-lg font-display font-semibold mb-4">Lubricant Manufacturing</h3><ul class="guide-example-list"><li>Engine Oil Bulk (blending)</li><li>Engine Oil 5L / 1L / 500ml</li><li>Shared additives in parent BOM</li></ul><p class="guide-example-verdict">✓ One Parent BOM + Packing</p></div>
            <div class="guide-example-card scroll-reveal-scale"><h3 class="text-lg font-display font-semibold mb-4">Juice Manufacturing</h3><ul class="guide-example-list"><li>Mango Juice BOM</li><li>Lemon Juice BOM</li><li>Same bottle, different pulp inputs</li></ul><p class="guide-example-verdict">✓ Separate BOM per Flavor</p></div>
            <div class="guide-example-card scroll-reveal-scale"><h3 class="text-lg font-display font-semibold mb-4">Tile Manufacturing</h3><ul class="guide-example-list"><li>Single tile slurry recipe</li><li>600×600 and 300×300 sizes</li><li>Clay scales by area</li></ul><p class="guide-example-verdict">✓ Attribute Scaling</p></div>
        </div>
    </div>
</section>

<!-- CHECKLIST -->
<section class="section-sm">
    <div class="container-custom max-w-4xl mx-auto">
        <div class="card p-8 md:p-10 scroll-reveal">
            <h2 class="text-3xl font-display font-bold mb-8">Go-Live Checklist</h2>
            <div class="grid md:grid-cols-2 gap-8 md:gap-12">
                <div>
                    <h3 class="text-lg font-display font-semibold mb-4 text-text-primary">Parent BOM</h3>
                    <ul class="space-y-1">
                        <li class="guide-checklist-item"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Product variant empty</li>
                        <li class="guide-checklist-item"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Routing linked with packing step</li>
                        <li class="guide-checklist-item"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Raw materials &amp; scrap % verified</li>
                        <li class="guide-checklist-item"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Multi variant packing enabled</li>
                        <li class="guide-checklist-item"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Trial work order passed</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-display font-semibold mb-4 text-text-primary">Variant BOM</h3>
                    <ul class="space-y-1">
                        <li class="guide-checklist-item"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Recipe differs from parent</li>
                        <li class="guide-checklist-item"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Variant assigned on BOM header</li>
                        <li class="guide-checklist-item"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Routing matches variant process</li>
                        <li class="guide-checklist-item"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Multi variant packing disabled</li>
                        <li class="guide-checklist-item"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Unit cost validated per variant</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="section bg-surface">
    <div class="container-custom max-w-3xl mx-auto">
        <div class="text-center mb-10">
            <h2 class="text-3xl md:text-4xl font-display font-bold">Frequently Asked Questions</h2>
        </div>
        <div class="card px-6 md:px-8 scroll-reveal">
            <div class="guide-faq-item">
                <button type="button" class="guide-faq-trigger" aria-expanded="false">Can I change from separate BOMs to one parent BOM later?<svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></button>
                <div class="guide-faq-body">Yes, if recipes are identical. Merge materials into a parent BOM, enable multi-variant packing, and migrate open work orders during a planned downtime window with Dotone support.</div>
            </div>
            <div class="guide-faq-item">
                <button type="button" class="guide-faq-trigger" aria-expanded="false">Where do packaging materials go — on BOM or packing step?<svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></button>
                <div class="guide-faq-body">On the packing operation within the BOM. Bottles, caps, labels, and cartons should consume when packing runs — not during bulk blending or machining.</div>
            </div>
            <div class="guide-faq-item">
                <button type="button" class="guide-faq-trigger" aria-expanded="false">How does attribute scaling work for non-area products?<svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></button>
                <div class="guide-faq-body">Define custom attributes (length, diameter, weight) on the item. Map each BOM line to scale by that attribute. Dotone recalculates qty when dimensions change on the work order.</div>
            </div>
            <div class="guide-faq-item">
                <button type="button" class="guide-faq-trigger" aria-expanded="false">Should sub-assemblies have their own BOMs?<svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></button>
                <div class="guide-faq-body">Yes — use multi-level BOMs. Sub-assemblies are manufactured separately with their own routing, then issued as components into the parent product BOM.</div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="section-sm pb-16">
    <div class="container-custom">
        <div class="guide-cta scroll-reveal-scale">
            <h2 class="text-2xl md:text-3xl font-display font-bold mb-4">Build better BOM structures</h2>
            <p class="text-text-secondary max-w-2xl mx-auto mb-8">Reduce BOM maintenance, simplify production planning, and manage product variants correctly with Dotone Manufacturing.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/contact" class="btn-primary">Schedule Consultation</a>
                <a href="/guides" class="btn-secondary">More Guides</a>
            </div>
        </div>
    </div>
</section>

<div id="footer"><?php include __DIR__ . '/../includes/footer.php'; ?></div>

<script src="/js/scroll-animate.js?v=20261011" defer></script>
<script src="/js/bom-guide.js?v=20261011" defer></script>
</body>
</html>
