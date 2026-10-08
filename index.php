<?php require_once __DIR__ . "/includes/site.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ERP, AI agents and intelligent automation in one platform. Run inventory, sales, production, HR and finance with AI that works on your ERP data.">
    <title>DotOne | AI-Powered Business Management Platform</title>
    <link rel="canonical" href="https://dotone.biz/">
    <link rel="icon" href="/public/favicon.ico">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Dotone">
    <meta property="og:title" content="DotOne | AI-Powered Business Management Platform">
    <meta property="og:description" content="ERP, AI agents and intelligent automation in one platform. Run inventory, sales, production, HR and finance with AI that works on your ERP data.">
    <meta property="og:url" content="https://dotone.biz/">
    <meta property="og:image" content="https://dotone.biz/assets/og-image.jpg?v=2">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="DotOne: ERP, AI agents and automation in one platform">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="DotOne | AI-Powered Business Management Platform">
    <meta name="twitter:description" content="ERP, AI agents and intelligent automation in one platform. Run inventory, sales, production, HR and finance with AI that works on your ERP data.">
    <meta name="twitter:image" content="https://dotone.biz/assets/og-image.jpg?v=2">
    <script type="application/ld+json">{"@context":"https://schema.org","@graph":[{"@type":"Organization","@id":"https://dotone.biz/#organization","name":"Dotone","url":"https://dotone.biz/","logo":"https://dotone.biz/assets/dotone-logo-blue.png","parentOrganization":{"@type":"Organization","name":"TechDotBit Pvt Ltd","url":"https://techdotbit.com"},"sameAs":["https://www.linkedin.com/products/techdotbit-dotone-business-suite/"]},{"@type":"WebSite","@id":"https://dotone.biz/#website","url":"https://dotone.biz/","name":"Dotone","publisher":{"@id":"https://dotone.biz/#organization"},"inLanguage":"en-IN"}]}</script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=JetBrains+Mono:wght@400&display=swap">
    <link rel="stylesheet" href="/css/main.css?v=20261015">
</head>
<body class="bg-background">
    <!-- Navigation Header -->
    <div id="header"><?php include __DIR__ . '/includes/header.php'; ?></div>

    <!-- Dark Hero -->
    <section class="hero-light" data-scroll="off">
        <div class="container-custom relative z-10">
            <div class="hero-split">
                <div class="hero-split-copy">
                    <span class="hero-badge hero-anim" style="--d: 0ms"><span class="hero-badge-dot"></span>ERP &middot; AI Agents &middot; Automation</span>
                    <h1 class="hero-light-title hero-anim" style="--d: 120ms">
                        Run Your Entire Business. <span class="text-gradient-shimmer">One Connected Platform.</span>
                    </h1>
                    <p class="hero-light-sub hero-anim" style="--d: 240ms">
                        DotOne connects sales, CRM, purchase, inventory, production, quality, HR, finance, reporting and AI automation in one intelligent business platform.
                    </p>
                    <div class="hero-light-ctas hero-anim" style="--d: 360ms">
                        <a href="/demo" class="btn-hero-glow-lg group">
                            <span>Book a Demo</span>
                            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                        </a>
                        <a href="#platform" class="btn-ghost-lg group">
                            Explore DotOne
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                        </a>
                    </div>
                </div>

                <div class="cc hero-anim" style="--d: 300ms" data-cc aria-hidden="true">
                    <div class="cc-glow"></div>
                    <svg class="cc-lines cc-depth" data-depth="6" viewBox="0 0 600 600" preserveAspectRatio="none">
                        <defs>
                            <linearGradient id="ccLine" gradientUnits="userSpaceOnUse" x1="0" y1="0" x2="600" y2="600">
                                <stop offset="0" stop-color="#B3E3FC"/>
                                <stop offset="1" stop-color="#0096EE"/>
                            </linearGradient>
                        </defs>
                        <path id="cc-p-inventory" d="M95 150 Q 190 170 300 235"/>
                        <path id="cc-p-sales" d="M215 60 Q 240 160 300 235"/>
                        <path id="cc-p-purchase" d="M385 60 Q 360 160 300 235"/>
                        <path id="cc-p-production" d="M505 150 Q 410 170 300 235"/>
                        <path id="cc-p-hrms" d="M75 330 Q 180 300 300 235"/>
                        <path id="cc-p-finance" d="M525 330 Q 420 300 300 235"/>
                        <path id="cc-p-out" class="cc-out" d="M300 300 L 300 392"/>
                        <g class="cc-packets">
                            <circle r="3"><animateMotion dur="3s" repeatCount="indefinite" begin="0s"><mpath href="#cc-p-inventory"/></animateMotion></circle>
                            <circle r="3"><animateMotion dur="3.4s" repeatCount="indefinite" begin="0.6s"><mpath href="#cc-p-sales"/></animateMotion></circle>
                            <circle r="3"><animateMotion dur="3.2s" repeatCount="indefinite" begin="1.2s"><mpath href="#cc-p-purchase"/></animateMotion></circle>
                            <circle r="3"><animateMotion dur="3.6s" repeatCount="indefinite" begin="0.3s"><mpath href="#cc-p-production"/></animateMotion></circle>
                            <circle r="3"><animateMotion dur="3.1s" repeatCount="indefinite" begin="1.8s"><mpath href="#cc-p-hrms"/></animateMotion></circle>
                            <circle r="3"><animateMotion dur="3.5s" repeatCount="indefinite" begin="0.9s"><mpath href="#cc-p-finance"/></animateMotion></circle>
                            <circle r="3.5" class="cc-packet-out"><animateMotion dur="1.6s" repeatCount="indefinite"><mpath href="#cc-p-out"/></animateMotion></circle>
                        </g>
                    </svg>

                    <div class="cc-core cc-depth" data-depth="14">
                        <svg class="cc-rings" viewBox="0 0 200 200">
                            <circle class="cc-ring cc-ring--1" cx="100" cy="100" r="92"/>
                            <circle class="cc-ring cc-ring--2" cx="100" cy="100" r="76"/>
                            <circle class="cc-ring cc-ring--3" cx="100" cy="100" r="60"/>
                        </svg>
                        <div class="cc-core-disc">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="<?= ICONS['spark'] ?>"/></svg>
                            <span>DotOne Agent</span>
                        </div>
                    </div>

<?php foreach ([['inventory', 'Inventory', 'box', 15.8, 25], ['sales', 'Sales &amp; CRM', 'trend', 35.8, 10], ['purchase', 'Purchase', 'cart', 64.2, 10], ['production', 'Production', 'factory', 84.2, 25], ['hrms', 'HRMS', 'id', 12.5, 55], ['finance', 'Finance', 'rupee', 87.5, 55]] as [$k, $label, $ico, $x, $y]): ?>
                    <div class="cc-node cc-depth" data-depth="20" data-mod="<?= $k ?>" style="left: <?= $x ?>%; top: <?= $y ?>%;">
                        <span class="cc-node-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="<?= ICONS[$ico] ?>"/></svg></span>
                        <span class="cc-node-label"><?= $label ?></span>
                    </div>
<?php endforeach; ?>

                    <div class="cc-feed cc-depth" data-depth="28">
                        <div class="cc-card is-in" data-mod="inventory">
                            <span class="cc-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="<?= ICONS['box'] ?>"/></svg></span>
                            <div class="cc-card-body"><strong>4 items below reorder level</strong><span>Inventory &middot; indents drafted</span></div>
                            <span class="cc-card-pill">For approval</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hero-stats">
                <div class="hero-stat hero-anim" style="--d: 500ms">
                    <div class="hero-stat-value">4&ndash;6 weeks</div>
                    <div class="hero-stat-label">typical time to go live</div>
                </div>
                <div class="hero-stat hero-anim" style="--d: 600ms">
                    <div class="hero-stat-value"><span data-count="45" data-suffix="+">45+</span> modules</div>
                    <div class="hero-stat-label">from CRM to payroll, on one platform</div>
                </div>
                <div class="hero-stat hero-anim" style="--d: 700ms">
                    <div class="hero-stat-value"><span data-count="15">15</span> industries</div>
                    <div class="hero-stat-label">served with industry-specific workflows</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Brand Trust -->
    <?php $e3Logo = null; foreach (['webp', 'png', 'svg'] as $ext) { if (is_file(__DIR__ . "/images/clients/e3-group.$ext")) { $e3Logo = "/images/clients/e3-group.$ext"; break; } } ?>
    <section class="brand-trust-section" aria-labelledby="brand-trust-heading">
    <div class="container-custom">

        <p id="brand-trust-heading" class="brand-trust-heading">
            Brands that trust us
        </p>

        <div class="brand-trust-accent" aria-hidden="true"></div>

        <div class="brand-carousel" aria-label="Brands that trust us">
            <div class="brand-carousel-track">

                <!-- SET 1 -->
                <div class="brand-carousel-group">
                    <div class="brand-carousel-item">
                        <img decoding="async" src="/images/clients/metalpatti.webp" alt="Metal Patti" class="logo-dark-bg" loading="lazy">
                    </div>
                    <div class="brand-carousel-item">
                        <img decoding="async" src="/images/clients/newpack.png" alt="Newpack Plastics" loading="lazy">
                    </div>
                    <div class="brand-carousel-item">
                        <img decoding="async" src="/images/clients/mekr.png" alt="Mekr Technologies" loading="lazy">
                    </div>
                    <div class="brand-carousel-item">
                        <img decoding="async" src="/images/clients/agile.webp" alt="Agile Nuvo" loading="lazy">
                    </div>
                    <div class="brand-carousel-item">
                        <img decoding="async" src="/images/clients/virgo.webp" alt="Virgo Group" loading="lazy">
                    </div>
                    <div class="brand-carousel-item">
                        <img decoding="async" src="/images/clients/splice.png" alt="Splice" loading="lazy">
                    </div>
                    <div class="brand-carousel-item">
                        <img decoding="async" src="/images/clients/bhutan-tuff.png" alt="Bhutan Tuff" loading="lazy">
                    </div>
                    <div class="brand-carousel-item">
                        <img decoding="async" src="/images/clients/twintech.webp" alt="Twin Tech" loading="lazy">
                    </div>
                    <div class="brand-carousel-item">
                        <img decoding="async" src="/images/clients/savit.png" alt="Savit Group" loading="lazy">
                    </div>
                    <div class="brand-carousel-item">
                        <img src="/images/clients/anondita.webp" alt="Anondita Medicare" width="480" height="73" loading="lazy" decoding="async">
                    </div>
<?php if ($e3Logo): ?>
                    <div class="brand-carousel-item">
                        <img src="<?= $e3Logo ?>" alt="E3 Group" loading="lazy" decoding="async">
                    </div>
<?php endif; ?>
                </div>

                <!-- SET 2 - DUPLICATE FOR SEAMLESS CONTINUOUS LOOP -->
                <div class="brand-carousel-group" aria-hidden="true">
                    <div class="brand-carousel-item">
                        <img decoding="async" src="/images/clients/metalpatti.webp" alt="Metal Patti" class="logo-dark-bg" loading="lazy">
                    </div>
                    <div class="brand-carousel-item">
                        <img decoding="async" src="/images/clients/newpack.png" alt="Newpack Plastics" loading="lazy">
                    </div>
                    <div class="brand-carousel-item">
                        <img decoding="async" src="/images/clients/mekr.png" alt="Mekr Technologies" loading="lazy">
                    </div>
                    <div class="brand-carousel-item">
                        <img decoding="async" src="/images/clients/agile.webp" alt="Agile Nuvo" loading="lazy">
                    </div>
                    <div class="brand-carousel-item">
                        <img decoding="async" src="/images/clients/virgo.webp" alt="Virgo Group" loading="lazy">
                    </div>
                    <div class="brand-carousel-item">
                        <img decoding="async" src="/images/clients/splice.png" alt="Splice" loading="lazy">
                    </div>
                    <div class="brand-carousel-item">
                        <img decoding="async" src="/images/clients/bhutan-tuff.png" alt="Bhutan Tuff" loading="lazy">
                    </div>
                    <div class="brand-carousel-item">
                        <img decoding="async" src="/images/clients/twintech.webp" alt="Twin Tech" loading="lazy">
                    </div>
                    <div class="brand-carousel-item">
                        <img decoding="async" src="/images/clients/savit.png" alt="Savit Group" loading="lazy">
                    </div>
                    <div class="brand-carousel-item">
                        <img src="/images/clients/anondita.webp" alt="Anondita Medicare" width="480" height="73" loading="lazy" decoding="async">
                    </div>
<?php if ($e3Logo): ?>
                    <div class="brand-carousel-item">
                        <img src="<?= $e3Logo ?>" alt="E3 Group" loading="lazy" decoding="async">
                    </div>
<?php endif; ?>
                </div>

            </div>
        </div>

        <div class="brand-trust-cta">
            <a href="#customer-stories" class="brand-trust-link">
                Customer stories <span aria-hidden="true">›</span>
            </a>
        </div>

    </div>
</section>

    <!-- Why Dotone -->
    <section class="section unify-section">
        <div class="container-custom">
            <div class="text-center max-w-3xl mx-auto mb-12 md:mb-16">
                <span class="section-label">The problem</span>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-display font-semibold text-text-primary leading-tight mb-4">Your business shouldn&rsquo;t run across disconnected systems.</h2>
                <p class="text-lg text-text-secondary">Spreadsheets, chat groups and separate apps each hold part of the truth, and people fill the gaps by hand. DotOne turns them into one connected platform.</p>
            </div>

            <div class="unify-grid" data-unify>
                <div class="unify-tools">
                    <div class="unify-tool"><span class="unify-tool-icon" style="--c:#1D6F42">X</span><div><strong>Excel</strong><span>Stock counted by hand</span></div></div>
                    <div class="unify-tool"><span class="unify-tool-icon" style="--c:#25A55F">W</span><div><strong>WhatsApp</strong><span>Orders lost in chat</span></div></div>
                    <div class="unify-tool"><span class="unify-tool-icon" style="--c:#6B7280">C</span><div><strong>Separate CRM</strong><span>Sales cut off from stock</span></div></div>
                    <div class="unify-tool"><span class="unify-tool-icon" style="--c:#8A6D3B">I</span><div><strong>Separate inventory</strong><span>Two versions of stock</span></div></div>
                    <div class="unify-tool"><span class="unify-tool-icon" style="--c:#7C3AED">H</span><div><strong>Separate HR</strong><span>Attendance re-typed for payroll</span></div></div>
                    <div class="unify-tool"><span class="unify-tool-icon" style="--c:#2F6FB5">A</span><div><strong>Separate accounting</strong><span>Margins known at month-end</span></div></div>
                    <div class="unify-tool"><span class="unify-tool-icon" style="--c:#B45309">R</span><div><strong>Manual reports</strong><span>Days to compile an MIS</span></div></div>
                    <div class="unify-tool"><span class="unify-tool-icon" style="--c:#BE123C">M</span><div><strong>Manual approvals</strong><span>POs waiting on a signature</span></div></div>
                </div>

                <div class="unify-flow" aria-hidden="true">
                    <svg viewBox="0 0 160 360" preserveAspectRatio="none">
                        <defs>
                            <linearGradient id="unifyLine" gradientUnits="userSpaceOnUse" x1="0" y1="0" x2="160" y2="0">
                                <stop offset="0" stop-color="#B3E3FC"/>
                                <stop offset="1" stop-color="#0096EE"/>
                            </linearGradient>
                        </defs>
                        <path id="uf-1" d="M0 22 C 80 22, 80 180, 160 180"/>
                        <path id="uf-2" d="M0 67 C 80 67, 80 180, 160 180"/>
                        <path id="uf-3" d="M0 112 C 80 112, 80 180, 160 180"/>
                        <path id="uf-4" d="M0 157 C 80 157, 80 180, 160 180"/>
                        <path id="uf-5" d="M0 202 C 80 202, 80 180, 160 180"/>
                        <path id="uf-6" d="M0 247 C 80 247, 80 180, 160 180"/>
                        <path id="uf-7" d="M0 292 C 80 292, 80 180, 160 180"/>
                        <path id="uf-8" d="M0 337 C 80 337, 80 180, 160 180"/>
                        <g class="unify-pulses">
                            <circle r="3"><animateMotion dur="2.2s" repeatCount="indefinite" begin="0.0s"><mpath href="#uf-1"/></animateMotion></circle>
                            <circle r="3"><animateMotion dur="2.2s" repeatCount="indefinite" begin="0.3s"><mpath href="#uf-2"/></animateMotion></circle>
                            <circle r="3"><animateMotion dur="2.2s" repeatCount="indefinite" begin="0.6s"><mpath href="#uf-3"/></animateMotion></circle>
                            <circle r="3"><animateMotion dur="2.2s" repeatCount="indefinite" begin="0.9s"><mpath href="#uf-4"/></animateMotion></circle>
                            <circle r="3"><animateMotion dur="2.2s" repeatCount="indefinite" begin="1.2s"><mpath href="#uf-5"/></animateMotion></circle>
                            <circle r="3"><animateMotion dur="2.2s" repeatCount="indefinite" begin="1.5s"><mpath href="#uf-6"/></animateMotion></circle>
                            <circle r="3"><animateMotion dur="2.2s" repeatCount="indefinite" begin="1.8s"><mpath href="#uf-7"/></animateMotion></circle>
                            <circle r="3"><animateMotion dur="2.2s" repeatCount="indefinite" begin="2.1s"><mpath href="#uf-8"/></animateMotion></circle>
                        </g>
                    </svg>
                </div>

                <div class="unify-hub">
                    <div class="unify-hub-head">
                        <img src="/assets/dotone-wm-blue.png" alt="DotOne" width="102" height="48" loading="lazy" decoding="async">
                        <span class="hero-agent-live"><i></i>One source of truth</span>
                    </div>
                    <ul class="unify-answers">
                        <li><span class="unify-q">What is our stock?</span><span class="unify-a">Live, for every warehouse</span></li>
                        <li><span class="unify-q">Are we profitable?</span><span class="unify-a">Margin by order and customer</span></li>
                        <li><span class="unify-q">Where is the order?</span><span class="unify-a">Quote to dispatch, one timeline</span></li>
                        <li><span class="unify-q">Why are there duplicates?</span><span class="unify-a">Entered once, used everywhere</span></li>
                        <li><span class="unify-q">What needs my attention?</span><span class="unify-a">Agents flag the exceptions</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- What is DotOne: feature showcase -->
    <section class="section bg-white" id="platform">
        <div class="container-custom">
            <div class="text-center max-w-3xl mx-auto mb-10 md:mb-14">
                <span class="section-label">What is DotOne</span>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-display font-semibold text-text-primary">Everything your business needs. <span class="text-primary-500">Connected in one place.</span></h2>
            </div>
<?php
$showcase = [
    ['sales', 'trend', 'Every order, from quote to dispatch', 'Quotation, sales order, GST invoice and dispatch in one flow. Your team always knows where an order stands.', '/sales-management', 'Sales'],
    ['inventory', 'box', 'Stock that tells you before it runs out', 'Live stock across warehouses. The Inventory Agent drafts indents when items fall below reorder level.', '/inventory-management', 'Inventory'],
    ['production', 'factory', 'See your shop floor without walking it', 'Job cards, BOM and work in progress update as the floor works, with OEE for every machine.', '/production-management', 'Production'],
    ['payroll', 'rupee', 'Payroll straight from attendance', 'Biometric attendance flows into payroll with PF, ESI and TDS worked out. Payslips in one run.', '/payroll', 'Payroll'],
    ['reports', 'chart', 'Reports that are ready when you are', 'Sales, stock, production and finance in one dashboard. Ask a question and get the report.', '/reports-analytics', 'Reports'],
];
?>
            <div class="show" data-show>
                <div class="show-list" role="tablist" aria-label="DotOne features">
<?php foreach ($showcase as $i => [$k, $ico, $title, $text, $url, $label]): ?>
                    <div class="show-item<?= $i === 0 ? ' is-open' : '' ?>" data-show-item="<?= $k ?>">
                        <button type="button" class="show-head" role="tab" aria-selected="<?= $i === 0 ? 'true' : 'false' ?>" aria-controls="show-<?= $k ?>">
                            <span class="show-icon"><?= icon($ico, 'w-5 h-5') ?></span>
                            <span class="show-title"><?= $title ?></span>
                            <svg class="show-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6 6 6-6"/></svg>
                        </button>
                        <div class="show-body">
                            <div>
                                <p><?= $text ?></p>
                                <a href="<?= $url ?>" class="show-link">Explore <?= $label ?> &rarr;</a>
                            </div>
                        </div>
                        <span class="show-progress" aria-hidden="true"></span>
                    </div>
<?php endforeach; ?>
                    <a href="/modules" class="show-all">See all 45+ modules &rarr;</a>
                </div>

                <div class="show-stage" aria-live="polite">
                    <div class="show-chips" aria-hidden="true">
<?php foreach ([['users', 'CRM'], ['trend', 'Sales'], ['cart', 'Purchase'], ['box', 'Inventory'], ['factory', 'Production'], ['id', 'HRMS'], ['rupee', 'Finance']] as [$ico, $label]): ?>
                        <span class="show-chip" title="<?= $label ?>"><?= icon($ico, 'w-5 h-5') ?></span>
<?php endforeach; ?>
                        <svg class="show-wires" viewBox="0 0 700 60" preserveAspectRatio="none"><path d="M50 0 V30 H650 V0 M150 0 V30 M250 0 V30 M350 0 V30 M450 0 V30 M550 0 V30 M350 30 V60"/><circle r="4"><animateMotion dur="3s" repeatCount="indefinite" path="M50 0 V30 H350 V60"/></circle><circle r="4"><animateMotion dur="3s" begin="1.5s" repeatCount="indefinite" path="M650 0 V30 H350 V60"/></circle></svg>
                    </div>

                    <div class="show-app">
                        <aside class="show-rail" aria-hidden="true">
                            <span class="show-rail-logo">D</span>
<?php foreach (['sales' => 'trend', 'inventory' => 'box', 'production' => 'factory', 'payroll' => 'rupee', 'reports' => 'chart'] as $k => $ico): ?>
                            <span class="show-rail-item" data-rail="<?= $k ?>"><?= icon($ico, 'w-4 h-4') ?></span>
<?php endforeach; ?>
                        </aside>
                        <div class="show-screens">

                            <!-- Sales -->
                            <div class="show-screen is-active" id="show-sales" data-screen="sales" role="tabpanel">
                                <div class="ss-head"><strong>Sales orders</strong><span class="ss-pill">This week</span></div>
                                <div class="ss-rows">
<?php foreach ([['SO-1042', 'Shree Polymers', '₹4.8 L', 'Dispatched', 'ok'], ['SO-1043', 'Kiran Packaging', '₹2.1 L', 'Invoiced', 'blue'], ['SO-1044', 'Om Industries', '₹6.3 L', 'In production', 'amber'], ['SO-1045', 'Metro Pipes', '₹1.7 L', 'Quotation', 'grey']] as $r => [$no, $cust, $amt, $st, $tone]): ?>
                                    <div class="ss-row" style="--r: <?= $r ?>">
                                        <span class="ss-avatar"><?= substr($cust, 0, 1) ?></span>
                                        <div class="ss-main"><b><?= $cust ?></b><span><?= $no ?></span></div>
                                        <span class="ss-amt"><?= $amt ?></span>
                                        <span class="ss-status ss-status--<?= $tone ?>"><?= $st ?></span>
                                    </div>
<?php endforeach; ?>
                                </div>
                                <div class="ss-track">
<?php foreach (['Quote', 'Order', 'Invoice', 'Dispatch'] as $s => $step): ?>
                                    <span style="--s: <?= $s ?>"><i></i><?= $step ?></span>
<?php endforeach; ?>
                                </div>
                            </div>

                            <!-- Inventory -->
                            <div class="show-screen" id="show-inventory" data-screen="inventory" role="tabpanel">
                                <div class="ss-head"><strong>Stock levels</strong><span class="ss-pill">3 warehouses</span></div>
                                <div class="ss-bars">
<?php foreach ([['PVC Resin Grade A', 62, true], ['HDPE Granules', 84, false], ['Masterbatch Blue', 38, true], ['Packing Film', 91, false]] as $r => [$item, $pct, $low]): ?>
                                    <div class="ss-bar<?= $low ? ' is-low' : '' ?>" style="--r: <?= $r ?>; --w: <?= $pct ?>%">
                                        <span><?= $item ?></span><div><i></i><em></em></div><b><?= $low ? 'Below reorder' : 'OK' ?></b>
                                    </div>
<?php endforeach; ?>
                                </div>
                                <div class="ss-toast">
                                    <span class="ss-toast-icon"><?= icon('spark', 'w-4 h-4') ?></span>
                                    <div><b>Inventory Agent</b><span>2 indents drafted. Waiting for your approval.</span></div>
                                    <span class="ss-toast-btn">Review</span>
                                </div>
                            </div>

                            <!-- Production -->
                            <div class="show-screen" id="show-production" data-screen="production" role="tabpanel">
                                <div class="ss-head"><strong>Shop floor</strong><span class="ss-pill ss-pill--live">Live</span></div>
                                <div class="ss-jobs">
<?php foreach ([['JC-221', 'Extruder 1', 78], ['JC-222', 'Moulding 3', 45], ['JC-223', 'Printing 2', 92]] as $r => [$jc, $m, $p]): ?>
                                    <div class="ss-job" style="--r: <?= $r ?>; --p: <?= $p ?>">
                                        <div class="ss-job-ring"><svg viewBox="0 0 40 40"><circle cx="20" cy="20" r="16"/><circle cx="20" cy="20" r="16" pathLength="100"/></svg><b><?= $p ?>%</b></div>
                                        <b><?= $m ?></b><span><?= $jc ?></span>
                                    </div>
<?php endforeach; ?>
                                </div>
                                <div class="ss-oee">
                                    <span>OEE today</span>
                                    <div class="ss-oee-bar"><i style="--w: 81%"></i></div>
                                    <b>81%</b>
                                </div>
                            </div>

                            <!-- Payroll -->
                            <div class="show-screen" id="show-payroll" data-screen="payroll" role="tabpanel">
                                <div class="ss-head"><strong>October payroll</strong><span class="ss-pill">142 employees</span></div>
                                <div class="ss-pay">
                                    <div class="ss-att">
                                        <span class="ss-sub">Attendance</span>
                                        <div class="ss-att-grid">
<?php for ($d = 0; $d < 28; $d++): $c = in_array($d, [5, 6, 12, 13, 19, 20, 26, 27]) ? 'off' : (in_array($d, [9, 17]) ? 'leave' : 'in'); ?>
                                            <i class="is-<?= $c ?>" style="--d: <?= $d ?>"></i>
<?php endfor; ?>
                                        </div>
                                    </div>
                                    <div class="ss-slip">
                                        <span class="ss-sub">Payslip</span>
<?php foreach ([['Gross', '₹32,000'], ['PF', '− ₹1,800'], ['ESI', '− ₹240'], ['TDS', '− ₹1,150']] as $r => [$l, $v]): ?>
                                        <div class="ss-slip-row" style="--r: <?= $r ?>"><span><?= $l ?></span><b><?= $v ?></b></div>
<?php endforeach; ?>
                                        <div class="ss-slip-net"><span>Net pay</span><b>₹28,810</b></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Reports -->
                            <div class="show-screen" id="show-reports" data-screen="reports" role="tabpanel">
                                <div class="ss-head"><strong>Monthly MIS</strong><span class="ss-pill">Auto-generated</span></div>
                                <div class="ss-rep">
                                    <div class="ss-chart">
<?php foreach ([46, 58, 52, 70, 64, 82, 76] as $r => $h): ?>
                                        <i style="--r: <?= $r ?>; --h: <?= $h ?>%"></i>
<?php endforeach; ?>
                                    </div>
                                    <div class="ss-kpis">
                                        <div><span>Revenue</span><b>₹1.86 Cr</b><em>&#9650; 12%</em></div>
                                        <div><span>Gross margin</span><b>24.6%</b><em>&#9650; 1.8 pts</em></div>
                                    </div>
                                </div>
                                <div class="ss-ask"><?= icon('spark', 'w-4 h-4') ?><span>Which customers are overdue more than 30 days?</span></div>
                            </div>

                        </div>
                    </div>
                    <span class="show-demo">Demo data</span>
                </div>
            </div>
        </div>
    </section>

    <!-- At a glance: floating cards -->
    <section class="section glance-section">
        <div class="container-custom">
            <div class="glance">
                <div class="glance-copy">
                    <span class="section-label">At a glance</span>
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-display font-semibold text-text-primary mb-5">Your whole business on <span class="text-primary-500">one screen.</span></h2>
                    <p class="text-lg text-text-secondary leading-relaxed mb-7">Orders, dispatch, stock, payroll dates and approvals sit side by side. You see what changed, what needs you and what the agents already handled.</p>
                    <ul class="glance-points">
                        <li><span><?= icon('trend', 'w-5 h-5') ?></span><div><b>Live numbers</b>Sales and dispatch update as your team works.</div></li>
                        <li><span><?= icon('spark', 'w-5 h-5') ?></span><div><b>Agents that flag, not decide</b>They spot low stock and draft the indent.</div></li>
                        <li><span><?= icon('shield', 'w-5 h-5') ?></span><div><b>You approve</b>Nothing important moves without a yes from you.</div></li>
                    </ul>
                </div>
                <div class="stack" data-stack aria-label="Demo view of the DotOne workspace">
                    <span class="stack-tag">Demo data</span>
                    <div class="stack-dots" aria-hidden="true"></div>

                    <!-- Agent card -->
                    <div class="sk sk-agent" style="--i: 0">
                        <div class="sk-avatar">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="<?= ICONS['spark'] ?>"/></svg>
                            <i class="sk-online"></i>
                        </div>
                        <strong>Inventory Agent</strong>
                        <span class="sk-agent-status" data-stack-status>Checking 3 warehouses</span>
                    </div>

                    <!-- Orders tile -->
                    <div class="sk sk-orders" style="--i: 1">
                        <span class="sk-title">Sales today</span>
                        <div class="sk-tile">
                            <svg class="sk-tile-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="<?= ICONS['cart'] ?>"/></svg>
                            <div class="sk-tile-num"><b data-stack-count="18">18</b><span>Orders</span></div>
                            <svg class="sk-spark" viewBox="0 0 120 32" preserveAspectRatio="none"><path pathLength="1" d="M0 26 L15 22 L30 24 L45 16 L60 18 L75 10 L90 13 L105 5 L120 7"/></svg>
                        </div>
                        <div class="sk-tile-foot"><span>&#8377;<b data-stack-count="12.4" data-dec="1">12.4</b> L booked</span><em>View orders</em></div>
                    </div>

                    <!-- Gauge -->
                    <div class="sk sk-gauge" style="--i: 2">
                        <span class="sk-title">On-time dispatch</span>
                        <div class="sk-ring">
                            <svg viewBox="0 0 100 100"><circle class="sk-ring-bg" cx="50" cy="50" r="40"/><circle class="sk-ring-fg" cx="50" cy="50" r="40" pathLength="100"/></svg>
                            <b><span data-stack-count="96">96</span><small>%</small></b>
                        </div>
                    </div>

                    <!-- Calendar -->
                    <div class="sk sk-cal" style="--i: 3">
                        <div class="sk-cal-head"><strong>October</strong></div>
                        <div class="sk-cal-grid">
<?php foreach (['Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa', 'Su'] as $d): ?>
                            <span class="sk-cal-dow"><?= $d ?></span>
<?php endforeach; ?>
<?php for ($i = 0; $i < 2; $i++): ?>
                            <span></span>
<?php endfor; ?>
<?php for ($day = 1; $day <= 26; $day++): ?>
                            <span class="<?= $day === 15 ? 'is-today' : ($day === 25 ? 'is-pay' : '') ?>"><?= $day ?></span>
<?php endfor; ?>
                        </div>
                        <span class="sk-cal-legend"><i></i>Payroll run on the 25th</span>
                    </div>

                    <!-- Approval -->
                    <div class="sk sk-approve" style="--i: 4" data-stack-approve>
                        <div class="sk-approve-head">
                            <span class="sk-approve-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="<?= ICONS['box'] ?>"/></svg></span>
                            <div><strong>Reorder PVC Resin</strong><span>1,240 kg left &middot; need 2,000 kg</span></div>
                        </div>
                        <div class="sk-approve-bar"><i></i></div>
                        <div class="sk-approve-actions">
                            <span class="sk-btn sk-btn--ghost">Review</span>
                            <span class="sk-btn sk-btn--primary"><em>Approve</em><em>Approved &#10003;</em></span>
                        </div>
                    </div>

                    <!-- Settings badge -->
                    <div class="sk sk-gear" style="--i: 5" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M19.4 13a7.6 7.6 0 0 0 0-2l2.1-1.6-2-3.5-2.5 1a7.4 7.4 0 0 0-1.7-1L15 3.3h-4l-.4 2.6a7.4 7.4 0 0 0-1.7 1l-2.5-1-2 3.5L6.6 11a7.6 7.6 0 0 0 0 2l-2.1 1.6 2 3.5 2.5-1a7.4 7.4 0 0 0 1.7 1l.4 2.6h4l.4-2.6a7.4 7.4 0 0 0 1.7-1l2.5 1 2-3.5zM13 15.5a3.5 3.5 0 1 1 0-7 3.5 3.5 0 0 1 0 7z" transform="translate(-1 0)"/></svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How DotOne AI works -->
    <section class="section pipeline-section">
        <div class="container-custom">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <span class="section-label">How DotOne AI works</span>
                <h2 class="text-3xl md:text-4xl font-display font-semibold text-text-primary mb-4">Make your business software intelligent</h2>
                <p class="text-lg text-text-secondary">DotOne AI is not a chatbot bolted onto an ERP. It works on your business data, inside your workflows, and a person approves what matters.</p>
            </div>
<?php
$pipe = [
    ['doc', 'ERP data', 'Orders, stock, jobs, people and invoices from every module.'],
    ['chart', 'Intelligence', 'Patterns, anomalies and forecasts found in that data.'],
    ['spark', 'AI agent', 'The agent responsible for that area takes ownership.'],
    ['bell', 'Recommendation', 'A specific next step, with the reasoning shown.'],
    ['users', 'Human approval', 'The right person reviews, approves or rejects.'],
    ['flow', 'Action', 'The approved workflow runs: indent, alert, update.'],
    ['trend', 'Business result', 'Less stock-outs, faster follow-ups, fewer surprises.'],
];
?>
            <ol class="pipeline" data-pipeline>
<?php foreach ($pipe as $i => [$ico, $t, $d]): ?>
                <li class="pipeline-step<?= $t === 'Human approval' ? ' pipeline-step--human' : '' ?>">
                    <span class="pipeline-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="<?= ICONS[$ico] ?>"/></svg></span>
                    <strong><?= $t ?></strong>
                    <span><?= $d ?></span>
                </li>
<?php endforeach; ?>
            </ol>
        </div>
    </section>

    <!-- AI command centre + human in the loop -->
    <section class="section command-section" id="command-centre">
        <div class="container-custom">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <span class="section-label">AI Command Center</span>
                <h2 class="text-3xl md:text-4xl font-display font-semibold text-text-primary mb-4">AI works. You stay in control.</h2>
                <p class="text-lg text-text-secondary">See every agent, what it is doing and what is waiting for you. Agents prepare the work; people approve anything that matters.</p>
            </div>

            <div class="console" data-console>
                <div class="console-bar">
                    <span class="hero-agent-window-dots"><i></i><i></i><i></i></span>
                    <span class="console-title">DotOne AI Command Center</span>
                    <span class="demo-badge">Demo data</span>
                </div>

                <div class="console-kpis">
<?php foreach ([['Active agents', 18, ''], ['Tasks completed', 2486, ''], ['Success rate', 96.8, '%'], ['Human reviews', 142, ''], ['Automated actions', 1934, ''], ['Time saved', 386, ' h']] as [$label, $n, $suf]): ?>
                    <div class="console-kpi"><span><?= $label ?></span><strong data-count="<?= $n ?>" data-suffix="<?= $suf ?>">0<?= $suf ?></strong></div>
<?php endforeach; ?>
                </div>

                <div class="console-grid">
                    <div class="console-card">
                        <div class="console-card-head"><h3>AI workforce</h3><span>Last 30 days</span></div>
                        <div class="workforce" role="table" aria-label="AI workforce (demo data)">
                            <div class="workforce-row workforce-row--head" role="row"><span role="columnheader">Agent</span><span role="columnheader">Status</span><span role="columnheader">Tasks</span><span role="columnheader">Success</span><span role="columnheader">Reviews</span><span role="columnheader">Last activity</span></div>
<?php foreach ([['Inventory Agent', 'box', 'active', 'Active', 612, 98.1, 21, '2 min ago'], ['Sales Agent', 'trend', 'active', 'Active', 488, 96.4, 34, '5 min ago'], ['Purchase Agent', 'cart', 'review', 'Needs review', 301, 95.2, 29, '8 min ago'], ['CRM Agent', 'users', 'active', 'Active', 395, 97.0, 18, '12 min ago'], ['HR Agent', 'id', 'idle', 'Idle', 166, 98.8, 6, '1 h ago'], ['Reporting Agent', 'chart', 'active', 'Active', 274, 99.3, 4, '15 min ago'], ['Production Agent', 'factory', 'active', 'Active', 158, 94.9, 22, '3 min ago'], ['Quality Agent', 'shield', 'review', 'Needs review', 92, 93.5, 8, '20 min ago']] as [$a, $ico, $st, $stLabel, $tasks, $succ, $rev, $last]): ?>
                            <div class="workforce-row" role="row">
                                <span role="cell" class="workforce-agent"><i><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="<?= ICONS[$ico] ?>"/></svg></i><?= $a ?></span>
                                <span role="cell"><b class="status status--<?= $st ?>"><?= $stLabel ?></b></span>
                                <span role="cell"><?= number_format($tasks) ?></span>
                                <span role="cell"><span class="success-bar"><i style="width: <?= $succ ?>%"></i></span><?= $succ ?>%</span>
                                <span role="cell"><?= $rev ?></span>
                                <span role="cell" class="workforce-last"><?= $last ?></span>
                            </div>
<?php endforeach; ?>
                        </div>
                    </div>

                    <div class="console-card">
                        <div class="console-card-head"><h3>Waiting for you</h3><span class="live-dot">Live</span></div>
                        <div class="approvals">
                            <div class="approval" data-approval>
                                <div class="approval-top"><span class="approval-agent">Inventory Agent</span><span class="approval-tag">Low stock</span></div>
                                <p class="approval-title">PVC Resin Grade A is below reorder level</p>
                                <dl class="approval-facts"><div><dt>Current stock</dt><dd>1,240 kg</dd></div><div><dt>Reorder level</dt><dd>2,000 kg</dd></div><div><dt>Recommendation</dt><dd>Create purchase request</dd></div></dl>
                                <div class="approval-actions"><button type="button" class="approval-btn approval-btn--approve" data-action="approve">Approve</button><button type="button" class="approval-btn" data-action="reject">Reject</button><button type="button" class="approval-btn approval-btn--ghost">View details</button></div>
                                <div class="approval-result" aria-live="polite"></div>
                            </div>
                            <div class="approval" data-approval>
                                <div class="approval-top"><span class="approval-agent">Purchase Agent</span><span class="approval-tag approval-tag--warn">Price variance</span></div>
                                <p class="approval-title">ABC Industries raised the price of HDPE granules</p>
                                <dl class="approval-facts"><div><dt>Previous</dt><dd>₹96 / kg</dd></div><div><dt>Current</dt><dd>₹104 / kg</dd></div><div><dt>Variance</dt><dd>+8.3%</dd></div></dl>
                                <div class="approval-actions"><button type="button" class="approval-btn approval-btn--approve" data-action="approve">Approve</button><button type="button" class="approval-btn" data-action="reject">Reject</button><button type="button" class="approval-btn approval-btn--ghost">Review</button></div>
                                <div class="approval-result" aria-live="polite"></div>
                            </div>
                            <div class="approval approval--compact">
                                <div class="approval-top"><span class="approval-agent">Quality Agent</span><span class="approval-tag approval-tag--warn">Exception</span></div>
                                <p class="approval-title">Batch B-2291 failed thickness test on 3 of 20 samples</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="demo-note">Figures in this section are demonstration data, not customer results.</p>
        </div>
    </section>

    <!-- Autonomy levels -->
    <section class="section bg-white">
        <div class="container-custom">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <span class="section-label">AI autonomy levels</span>
                <h2 class="text-3xl md:text-4xl font-display font-semibold text-text-primary mb-4">You decide how much the AI does</h2>
                <p class="text-lg text-text-secondary">Start with recommendations. Move a workflow up a level only when your team trusts the results.</p>
            </div>
<?php
$levels = [
    ['L1', 'Assist', 'AI analyses and recommends.', 25, 'Finds the 4 items below reorder level and tells you.', 'You decide whether to reorder and raise the indent yourself.'],
    ['L2', 'Copilot', 'AI prepares actions, a person approves.', 50, 'Drafts the purchase indents with quantities and vendors.', 'You review and approve each indent with one click.'],
    ['L3', 'Autopilot', 'AI runs predefined workflows with supervision.', 75, 'Raises indents automatically for approved items and vendors.', 'You get a summary and handle anything outside the rules.'],
    ['L4', 'Autonomous', 'AI works toward approved goals and escalates exceptions.', 90, 'Keeps stock between targets, adjusting reorder timing to demand.', 'You set the goals and limits, and deal only with exceptions.'],
];
?>
            <div class="autonomy" data-autonomy>
                <div class="autonomy-track" role="tablist" aria-label="Autonomy level">
<?php foreach ($levels as $i => [$code, $name, $line]): ?>
                    <button type="button" role="tab" class="autonomy-stop<?= $i === 1 ? ' is-active' : '' ?>" data-level="<?= $i ?>" aria-selected="<?= $i === 1 ? 'true' : 'false' ?>">
                        <span class="autonomy-code"><?= $code ?></span>
                        <strong><?= $name ?></strong>
                        <span><?= $line ?></span>
                    </button>
<?php endforeach; ?>
                    <span class="autonomy-progress" aria-hidden="true"><i></i></span>
                </div>
                <div class="autonomy-detail">
<?php foreach ($levels as $i => [$code, $name, $line, $ai, $aiDoes, $youDo]): ?>
                    <div class="autonomy-panel<?= $i === 1 ? ' is-active' : '' ?>" data-level-panel="<?= $i ?>"<?= $i === 1 ? '' : ' hidden' ?>>
                        <div class="autonomy-split" aria-hidden="true"><span class="autonomy-split-ai" style="width: <?= $ai ?>%">AI</span><span class="autonomy-split-you">You</span></div>
                        <div class="autonomy-cols">
                            <div><h4>What the AI does</h4><p><?= $aiDoes ?></p></div>
                            <div><h4>What you do</h4><p><?= $youDo ?></p></div>
                        </div>
                        <p class="autonomy-example">Example: inventory reordering at <?= $code ?> &middot; <?= $name ?></p>
                    </div>
<?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Ask DotOne AI -->
    <section class="section ask-section">
        <div class="container-custom">
            <div class="grid lg:grid-cols-[minmax(0,0.9fr)_minmax(0,1.1fr)] gap-12 items-center">
                <div>
                    <span class="section-label">Ask DotOne AI</span>
                    <h2 class="text-3xl md:text-4xl font-display font-semibold text-text-primary mb-4">Ask your business anything</h2>
                    <p class="text-lg text-text-secondary mb-6">Type a question in plain language. DotOne answers from your live ERP data and shows the records behind the answer.</p>
                    <div class="ask-chips" data-ask-chips>
<?php foreach (['Which products are below reorder level?', 'Which customers have overdue payments?', 'What were our top-selling products this month?', 'Which purchase orders are delayed?', 'Why did inventory cost increase?', 'Which production orders are behind schedule?'] as $i => $q): ?>
                        <button type="button" class="ask-chip<?= $i === 0 ? ' is-active' : '' ?>" data-q="<?= $i ?>"><?= $q ?></button>
<?php endforeach; ?>
                    </div>
                </div>
                <div class="ask-window" data-ask>
                    <div class="ask-input"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="<?= ICONS['spark'] ?>"/></svg><span class="ask-input-text">Ask anything about your business&hellip;</span><span class="ask-send" aria-hidden="true">&rarr;</span></div>
                    <div class="ask-answer" aria-live="polite">
                        <p class="ask-answer-text"></p>
                        <div class="ask-table"></div>
                        <p class="ask-source"></p>
                    </div>
                    <span class="demo-badge demo-badge--corner">Demo data</span>
                </div>
            </div>
        </div>
    </section>

    <!-- AI reporting -->
    <section class="section bg-white">
        <div class="container-custom">
            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4 mb-10">
                <div class="max-w-2xl">
                    <span class="section-label">AI-powered reporting</span>
                    <h2 class="text-3xl md:text-4xl font-display font-semibold text-text-primary mb-3">Reports that come with the answer</h2>
                    <p class="text-lg text-text-secondary">The Reporting Agent writes the summary, the findings and the recommendation, not just the table.</p>
                </div>
                <a href="/ai-agents/reporting" class="explorer-link">See the Reporting Agent &rarr;</a>
            </div>
            <div class="reports-rail" tabindex="0" aria-label="Example AI reports (demo data)">
<?php foreach ([
    ['box', 'Inventory Health Report', 'Stock is healthy for 92% of items. 14 items are below reorder level and 31 have not moved in 90 days.', ['14 items below reorder level, 6 of them critical', 'Slow-moving stock worth ₹8.4 lakh in Warehouse 2'], 'Raise indents for the 6 critical items and review the 31 slow movers.'],
    ['trend', 'Sales Analysis', 'Sales grew 11% over last month, led by the North region. Two key accounts ordered less than usual.', ['Top 5 products made 46% of revenue', 'Order value from 2 key accounts down 30%'], 'Schedule follow-ups with the 2 accounts this week.'],
    ['cart', 'Purchase Variance', 'Purchase prices rose 3.2% overall. Three vendors account for most of the increase.', ['HDPE granules up 8.3% from ABC Industries', 'Two POs priced above the last approved rate'], 'Request revised quotes from alternate vendors.'],
    ['factory', 'Production Performance', 'Plant OEE was 84%. Line 2 lost 6 hours to changeovers.', ['Line 2 is 9% behind plan', 'Changeover time up 18% this week'], 'Review the Line 2 changeover sequence with the supervisor.'],
    ['rupee', 'Payroll Summary', 'Payroll cost rose 4.1%, mainly from overtime in the packing department.', ['Overtime hours up 22% in packing', '3 employees with unusual overtime'], 'Check the packing shift plan before the next cycle.'],
    ['shield', 'Quality Analysis', 'Rejection rate fell to 1.8%. Most defects came from one machine.', ['62% of defects from Machine M-04', 'Rework time down 12%'], 'Schedule maintenance for M-04.'],
    ['users', 'Customer Analysis', '4 customers have payments overdue past 60 days. Repeat orders rose 7%.', ['₹6.2 lakh overdue past 60 days', 'Repeat order rate up 7%'], 'Send reminders and pause credit for the oldest overdue account.'],
] as $i => [$ico, $title, $summary, $findings, $rec]): ?>
                <article class="report-card">
                    <div class="report-head"><span class="report-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="<?= ICONS[$ico] ?>"/></svg></span><div><h3><?= $title ?></h3><span>Generated by Reporting Agent &middot; <?= date('j M Y', strtotime('-' . $i . ' days')) ?></span></div></div>
                    <p class="report-summary"><?= $summary ?></p>
                    <h4>Key findings</h4>
                    <ul><?php foreach ($findings as $f): ?><li><?= $f ?></li><?php endforeach; ?></ul>
                    <h4>Recommendation</h4>
                    <p class="report-rec"><?= $rec ?></p>
                </article>
<?php endforeach; ?>
            </div>
            <p class="demo-note">Example reports with demonstration data.</p>
        </div>
    </section>

    <!-- Floating Ask Factory AI -->
    <a href="/demo" class="factory-ai-fab" aria-label="Ask Factory AI">
        <span class="text-sm font-semibold text-text-primary">Ask Factory AI</span>
        <span class="w-10 h-10 rounded-full bg-gradient-brand flex items-center justify-center flex-shrink-0">
            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
            </svg>
        </span>
    </a>

    <!-- Interactive ROI Calculator Section -->
    <section class="section roi-section" id="roi">
        <div class="container-custom">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="section-label">Savings estimate</span>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-display font-semibold text-text-primary leading-tight mb-4">What could DotOne save your plant?</h2>
                <p class="text-lg text-text-secondary">Move the sliders. The estimate updates as you go.</p>
            </div>

            <div class="roi-card" id="roi-calculator">
                <div class="roi-inputs">
                    <div class="roi-field">
                        <div class="roi-field-head"><label for="roi-workers">Shop floor workers</label><output id="roi-workers-out">250</output></div>
                        <input type="range" id="roi-workers" min="10" max="2000" step="10" value="250">
                    </div>
                    <div class="roi-field">
                        <div class="roi-field-head"><label for="roi-wage">Average hourly labour cost</label><output id="roi-wage-out">₹70</output></div>
                        <input type="range" id="roi-wage" min="30" max="400" step="5" value="70">
                    </div>
                    <div class="roi-field">
                        <div class="roi-field-head"><label for="roi-hours">Hours per worker per day</label><output id="roi-hours-out">9</output></div>
                        <input type="range" id="roi-hours" min="6" max="12" step="1" value="9">
                    </div>
                    <div class="roi-field">
                        <div class="roi-field-head"><label for="roi-eff">Current efficiency</label><output id="roi-eff-out">70%</output></div>
                        <input type="range" id="roi-eff" min="40" max="95" step="1" value="70">
                    </div>
                    <div class="roi-field">
                        <div class="roi-field-head"><label for="roi-imp">Lost time you expect to recover</label><output id="roi-imp-out">20%</output></div>
                        <input type="range" id="roi-imp" min="5" max="40" step="1" value="20">
                    </div>
                </div>

                <div class="roi-result">
                    <div class="roi-result-label">Estimated annual savings</div>
                    <div class="roi-result-value" id="roi-annual">₹28.4 lakh</div>
                    <div class="roi-result-sub">per year, from labour time recovered</div>

                    <div class="roi-bars" aria-hidden="true">
                        <div class="roi-bar"><span>Efficiency today</span><div class="roi-bar-track"><i id="roi-bar-before" style="width: 70%"></i></div><b id="roi-bar-before-val">70%</b></div>
                        <div class="roi-bar roi-bar--after"><span>With DotOne</span><div class="roi-bar-track"><i id="roi-bar-after" style="width: 76%"></i></div><b id="roi-bar-after-val">76%</b></div>
                    </div>

                    <dl class="roi-breakdown">
                        <div><dt>Per month</dt><dd id="roi-monthly">₹2.4 lakh</dd></div>
                        <div><dt>Hours recovered per year</dt><dd id="roi-hours-saved">40,500</dd></div>
                    </dl>

                    <a href="/contact" class="btn-hero-glow w-full mt-6">Get a detailed estimate for your plant</a>
                    <p class="roi-note">Estimate only, based on 300 working days and labour time recovered. Your actual result depends on your processes.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Industries -->
    <section class="section industries-section" data-scroll="off">
        <div class="container-custom">
            <div class="text-center max-w-4xl mx-auto mb-4">
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-display font-bold text-text-primary mb-4">
                    Make Your Business Run Easier With Dotone for <span class="text-gradient">18+ Industries</span>
                </h2>
                <p class="text-lg text-text-secondary">
                    Industry-specific Dotone solutions designed to integrate with your processes, compliance needs, and shopfloor best practices.
                </p>
            </div>
        </div>

        <div class="industries-scroll-track">
            <div class="industries-sticky">
                <div class="container-custom">
                    <div class="industries-grid">
                <a href="/industries" class="industry-card industry-seq-item is-active"><span class="industry-card-icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg></span><span>Manufacturing</span></a>
                <a href="/industries" class="industry-card industry-seq-item"><span class="industry-card-icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg></span><span>Retail</span></a>
                <a href="/field-sales-tracking" class="industry-card industry-seq-item"><span class="industry-card-icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/></svg></span><span>Trading &amp; Distribution</span></a>
                <a href="/vision-ai/quality-inspection" class="industry-card industry-seq-item"><span class="industry-card-icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg></span><span>Pharma &amp; Life Sciences</span></a>
                <a href="/industries" class="industry-card industry-seq-item"><span class="industry-card-icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg></span><span>Dairy</span></a>
                <a href="/industries" class="industry-card industry-seq-item"><span class="industry-card-icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"/></svg></span><span>Food &amp; Beverage</span></a>
                <a href="/industries" class="industry-card industry-seq-item"><span class="industry-card-icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg></span><span>Construction &amp; Building</span></a>
                <a href="/crm" class="industry-card industry-seq-item"><span class="industry-card-icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/></svg></span><span>Automotive &amp; Rental</span></a>
                <a href="/industries" class="industry-card industry-seq-item"><span class="industry-card-icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg></span><span>Chemical</span></a>
                <a href="/industries" class="industry-card industry-seq-item"><span class="industry-card-icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg></span><span>Gems &amp; Jewelry</span></a>
                <a href="/solutions/digital-transformation" class="industry-card industry-seq-item"><span class="industry-card-icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/></svg></span><span>High Tech &amp; Electronics</span></a>
                <a href="/industries" class="industry-card industry-seq-item"><span class="industry-card-icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg></span><span>Mall &amp; Facilities</span></a>
                <a href="/solutions/inventory-automation" class="industry-card industry-seq-item"><span class="industry-card-icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg></span><span>Packaging</span></a>
                <a href="/documentation" class="industry-card industry-seq-item"><span class="industry-card-icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg></span><span>Publication</span></a>
                <a href="/hrms" class="industry-card industry-seq-item"><span class="industry-card-icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/></svg></span><span>Education</span></a>
                <a href="/industries" class="industry-card industry-seq-item"><span class="industry-card-icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span>Sports</span></a>
                <a href="/solutions/digital-transformation" class="industry-card industry-seq-item"><span class="industry-card-icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></span><span>Oil &amp; Gas</span></a>
                <a href="/solutions/inventory-automation" class="industry-card industry-seq-item"><span class="industry-card-icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"/></svg></span><span>Warehouse</span></a>
                    </div>
                </div>
            </div>
            <div class="container-custom industries-cta-wrap">
                <div class="text-center">
                    <a href="/contact" class="btn-primary inline-flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                        Request a Quote
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Trust Signals & Certifications -->
    <section class="section-sm">
        <div class="container-custom">
            <div class="text-center space-y-4 mb-12">
                <h2 class="text-3xl md:text-4xl font-display font-bold">Security <span class="text-gradient">Built In</span></h2>
                <p class="text-lg text-text-secondary">
                    How Dotone protects your factory data. <a href="/security" class="text-primary-600 font-medium hover:underline">Read our security practices</a>
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 items-center">
                <div class="card p-6 text-center hover-lift">
                    <div class="w-16 h-16 bg-gradient-brand rounded-lg mx-auto mb-3 flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <div class="text-sm font-semibold text-text-primary">Encrypted data</div>
                    <div class="text-xs text-text-secondary mt-1">TLS 1.2+ in transit, AES at rest</div>
                </div>

                <div class="card p-6 text-center hover-lift">
                    <div class="w-16 h-16 bg-gradient-brand rounded-lg mx-auto mb-3 flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                        </svg>
                    </div>
                    <div class="text-sm font-semibold text-text-primary">Role-based access</div>
                    <div class="text-xs text-text-secondary mt-1">With admin audit logs</div>
                </div>

                <div class="card p-6 text-center hover-lift">
                    <div class="w-16 h-16 bg-gradient-brand rounded-lg mx-auto mb-3 flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>
                        </svg>
                    </div>
                    <div class="text-sm font-semibold text-text-primary">Automated backups</div>
                    <div class="text-xs text-text-secondary mt-1">Encrypted and monitored</div>
                </div>

                <div class="card p-6 text-center hover-lift">
                    <div class="w-16 h-16 bg-gradient-brand rounded-lg mx-auto mb-3 flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div class="text-sm font-semibold text-text-primary">Privacy by design</div>
                    <div class="text-xs text-text-secondary mt-1">Indian IT Act &amp; GDPR principles</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-light section">
        <div class="container-custom text-center max-w-4xl mx-auto">
            <span class="hero-badge mb-6 inline-block">Get Started Today</span>
            <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-display font-bold text-text-primary mb-6 leading-tight">
                Modern Manufacturing Starts with Dotone
            </h2>
            <p class="text-lg md:text-xl text-text-secondary max-w-2xl mx-auto mb-10">
                Built for manufacturers who want clarity, control, and confidence.
            </p>
            <a href="/demo" class="btn-hero-glow-lg">Get Started Free</a>
            <p class="text-sm text-text-tertiary mt-10 max-w-xl mx-auto">
                Meet Us Right Away — We're here to assist, answer and address any feedback.
            </p>
        </div>
    </section>

<div id="footer"><?php include __DIR__ . '/includes/footer.php'; ?></div>
<script src="/js/header-nav.js?v=20261015" defer></script>
<script src="/js/scroll-sequence.js?v=20261015" defer></script>
<script src="/js/industries-scroll.js?v=20261015" defer></script>
<script src="/js/command-centre.js?v=20261015" defer></script>
<script src="/js/glance-cards.js?v=20261015" defer></script>
<script src="/js/home-ai.js?v=20261015" defer></script>
<script src="/js/roi-calculator.js?v=20261015" defer></script>
    <!-- Footer -->
  

    <!-- JavaScript -->
    <script>
        // Animated Counter for Metrics
        function animateCounter(element, target, duration = 2000) {
            const start = 0;
            const increment = target / (duration / 16);
            let current = start;

            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    element.textContent = target;
                    clearInterval(timer);
                } else {
                    element.textContent = Math.floor(current);
                }
            }, 16);
        }

        // Intersection Observer for scroll animations — handled by /js/scroll-animate.js

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

    </script>

    
    
    
</body>
</html>