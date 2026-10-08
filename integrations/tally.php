<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tally Prime Integration: Two-Way Sync | DotOne</title>
    <meta name="description" content="Sync masters, vouchers and stock between DotOne and Tally Prime or ERP 9. Setup steps, mapping, error handling and FAQs.">
    <meta name="keywords" content="tally integration, tally connector, erp tally sync, dotone tally, manufacturing erp accounting">
    <link rel="canonical" href="https://dotone.biz/integrations/tally">
    <link rel="icon" href="/public/favicon.ico">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Dotone">
    <meta property="og:title" content="Tally Prime Integration: Two-Way Sync | DotOne">
    <meta property="og:description" content="Sync masters, vouchers and stock between DotOne and Tally Prime or ERP 9. Setup steps, mapping, error handling and FAQs.">
    <meta property="og:url" content="https://dotone.biz/integrations/tally">
    <meta property="og:image" content="https://dotone.biz/assets/og-image.jpg?v=2">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="DotOne: ERP, AI agents and automation in one platform">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Tally Prime Integration: Two-Way Sync | DotOne">
    <meta name="twitter:description" content="Sync masters, vouchers and stock between DotOne and Tally Prime or ERP 9. Setup steps, mapping, error handling and FAQs.">
    <meta name="twitter:image" content="https://dotone.biz/assets/og-image.jpg?v=2">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=JetBrains+Mono:wght@400&display=swap">
    <link rel="stylesheet" href="/css/main.css?v=20261015">
    <script src="/js/header-nav.js?v=20261015" defer></script>
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
            <a href="/guides?category=implementation">Implementation</a>
            <span class="guide-breadcrumb-sep" aria-hidden="true">/</span>
            <span class="text-text-primary">Tally Connector</span>
        </nav>
        <div class="guide-hero-grid">
            <div class="text-center lg:text-left space-y-6">
                <span class="section-label bg-primary-50 text-primary-600 px-4 py-1.5 rounded-full">Integration Guide · 11 min read</span>
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-display font-bold leading-tight">Tally Integration for DotOne</h1>
                <p class="text-lg md:text-xl text-text-secondary max-w-xl mx-auto lg:mx-0">
                    Run production, inventory, and sales in Dotone — push vouchers to Tally Prime automatically. No duplicate data entry, no month-end reconciliation panic.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start pt-2">
                    <a href="#how-it-works" class="btn-primary">Read Guide</a>
                    <a href="/contact" class="btn-secondary">Request Tally Setup</a>
                </div>
            </div>
            <div class="guide-bom-viz" id="hero-sync-viz" aria-hidden="true">
                <div class="guide-bom-viz-glow"></div>
                <svg class="guide-bom-svg" viewBox="0 0 400 260" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line class="guide-bom-line guide-bom-line--1" x1="120" y1="130" x2="175" y2="130" stroke="#0096EE" stroke-width="2" stroke-linecap="round"/>
                    <line class="guide-bom-line guide-bom-line--2" x1="225" y1="130" x2="280" y2="130" stroke="#0096EE" stroke-width="2" stroke-linecap="round"/>
                    <line class="guide-bom-line guide-bom-line--3" x1="200" y1="155" x2="200" y2="195" stroke="#10b981" stroke-width="2" stroke-linecap="round" stroke-dasharray="4 3"/>
                    <g class="guide-bom-node guide-bom-node--1">
                        <rect x="20" y="100" width="100" height="60" rx="12" fill="url(#syncGrad)" opacity="0.15"/>
                        <rect x="20" y="100" width="100" height="60" rx="12" stroke="#0096EE" stroke-width="2"/>
                        <text x="70" y="125" text-anchor="middle" fill="#0f172a" font-size="10" font-weight="700">Dotone ERP</text>
                        <text x="70" y="142" text-anchor="middle" fill="#64748b" font-size="8">Sales · PO · WO</text>
                    </g>
                    <g class="guide-bom-node guide-bom-node--2">
                        <rect x="175" y="108" width="50" height="44" rx="10" fill="#f0f9ff" stroke="#0096EE" stroke-width="1.5"/>
                        <text x="200" y="128" text-anchor="middle" fill="#0096EE" font-size="8" font-weight="600">Connector</text>
                        <text x="200" y="142" text-anchor="middle" fill="#64748b" font-size="7">Auto sync</text>
                    </g>
                    <g class="guide-bom-node guide-bom-node--3">
                        <rect x="280" y="100" width="100" height="60" rx="12" fill="#ecfdf5" stroke="#10b981" stroke-width="2"/>
                        <text x="330" y="125" text-anchor="middle" fill="#065f46" font-size="10" font-weight="700">Tally Prime</text>
                        <text x="330" y="142" text-anchor="middle" fill="#64748b" font-size="8">Books · GST · Ledgers</text>
                    </g>
                    <g class="guide-bom-node guide-bom-node--4">
                        <rect x="130" y="195" width="140" height="44" rx="10" fill="#fffbeb" stroke="#f59e0b" stroke-width="1.5"/>
                        <text x="200" y="215" text-anchor="middle" fill="#92400e" font-size="9" font-weight="600">Sales Invoice · Payment · Stock Journal</text>
                        <text x="200" y="228" text-anchor="middle" fill="#64748b" font-size="8">Posted as Tally vouchers</text>
                    </g>
                    <defs>
                        <linearGradient id="syncGrad" x1="0" y1="0" x2="1" y2="1">
                            <stop stop-color="#0096EE"/>
                            <stop offset="1" stop-color="#0096EE"/>
                        </linearGradient>
                    </defs>
                </svg>
                <p class="text-xs text-center text-text-secondary mt-4">Manufacturing in Dotone → accounting in Tally</p>
            </div>
        </div>
    </div>
</section>

<!-- WHY TALLY CONNECTOR -->
<section id="how-it-works" class="section-sm bg-surface">
    <div class="container-custom max-w-5xl mx-auto">
        <div class="grid lg:grid-cols-2 gap-10 items-center">
            <div>
                <h2 class="text-3xl md:text-4xl font-display font-bold mb-5">Why connect Dotone with Tally?</h2>
                <div class="guide-prose-block">
                    <p>Most Indian MSME manufacturers run <strong>operations in an ERP</strong> but keep <strong>statutory books in Tally</strong>. Without a connector, teams re-key every sales invoice, purchase bill, and payment — causing delays, GST mismatches, and stock that never matches the ledger.</p>
                    <p>The <strong>Dotone Tally Connector</strong> pushes approved transactions from Dotone to Tally Prime (and Tally.ERP 9) on a schedule or in real time. Your CA gets clean vouchers; your plant team stays in one operational system.</p>
                    <p>Production events — material issue, finished goods receipt, subcontracting — can post as <strong>stock journals</strong> so inventory value in Tally reflects shopfloor activity.</p>
                </div>
            </div>
            <div class="guide-stat-grid">
                <div class="guide-stat-card scroll-reveal-scale">
                    <span class="guide-stat-value" data-target="90" data-suffix="%">0%</span>
                    <span class="guide-stat-label">Less manual voucher entry after go-live</span>
                </div>
                <div class="guide-stat-card scroll-reveal-scale">
                    <span class="guide-stat-value" data-target="15" data-suffix=" min">0</span>
                    <span class="guide-stat-label">Typical sync interval for high-volume plants</span>
                </div>
                <div class="guide-stat-card scroll-reveal-scale">
                    <span class="guide-stat-value" data-target="2" data-suffix=" way">0</span>
                    <span class="guide-stat-label">Master sync — ledgers &amp; items stay aligned</span>
                </div>
                <div class="guide-stat-card scroll-reveal-scale">
                    <span class="guide-stat-value" data-prefix="<" data-target="5" data-suffix=" days">0</span>
                    <span class="guide-stat-label">Standard connector setup with Dotone support</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- WHAT SYNCS -->
<section class="section-sm">
    <div class="container-custom max-w-5xl mx-auto">
        <div class="text-center mb-10">
            <h2 class="text-3xl md:text-4xl font-display font-bold">What syncs between Dotone and Tally</h2>
            <p class="text-base md:text-lg text-text-secondary mt-3 max-w-2xl mx-auto">Configure each document type independently — sync everything or only what your accountant needs.</p>
        </div>
        <div class="guide-table-wrap scroll-reveal">
            <table class="guide-table">
                <thead>
                    <tr>
                        <th>Dotone document</th>
                        <th>Tally voucher</th>
                        <th>Direction</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Sales Invoice / Credit Note</td>
                        <td>Sales · Credit Note with GST breakup</td>
                        <td><span class="guide-badge guide-badge--good">Dotone → Tally</span></td>
                    </tr>
                    <tr>
                        <td>Purchase Invoice / Debit Note</td>
                        <td>Purchase · Debit Note</td>
                        <td><span class="guide-badge guide-badge--good">Dotone → Tally</span></td>
                    </tr>
                    <tr>
                        <td>Payment &amp; Receipt</td>
                        <td>Payment / Receipt voucher</td>
                        <td><span class="guide-badge guide-badge--good">Dotone → Tally</span></td>
                    </tr>
                    <tr>
                        <td>Journal Entry (expenses, adjustments)</td>
                        <td>Journal voucher</td>
                        <td><span class="guide-badge guide-badge--good">Dotone → Tally</span></td>
                    </tr>
                    <tr>
                        <td>Material issue / FG receipt (optional)</td>
                        <td>Stock journal</td>
                        <td><span class="guide-badge guide-badge--good">Dotone → Tally</span></td>
                    </tr>
                    <tr>
                        <td>Customer, vendor, item, ledger masters</td>
                        <td>Ledgers &amp; stock items</td>
                        <td><span class="guide-badge guide-badge--warn">Two-way sync</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- ARCHITECTURE -->
<section class="section-sm bg-surface">
    <div class="container-custom max-w-4xl mx-auto">
        <div class="text-center mb-8 md:mb-10">
            <h2 class="text-3xl md:text-4xl font-display font-bold">How the connector works</h2>
            <p class="text-base md:text-lg text-text-secondary mt-3">A lightweight agent on your network talks to Tally via ODBC/XML — Dotone stays in the cloud.</p>
        </div>
        <div class="guide-flow guide-flow-animated">
            <div class="guide-flow-step">
                <div class="guide-flow-box guide-flow-box--primary">Transaction approved in Dotone</div>
                <span class="guide-flow-arrow" aria-hidden="true">↓</span>
                <div class="guide-flow-box">Connector queues voucher with mapped ledgers &amp; GST</div>
                <span class="guide-flow-arrow" aria-hidden="true">↓</span>
                <div class="guide-flow-box guide-flow-box--success">Posted to Tally company · Sync log updated</div>
                <span class="guide-flow-arrow" aria-hidden="true">↓</span>
                <div class="guide-flow-box">CA runs GST returns &amp; P&amp;L from Tally — no re-entry</div>
            </div>
        </div>
        <div class="guide-prose-block mt-8 max-w-3xl mx-auto text-center">
            <p>The connector runs on a <strong>Windows PC or server</strong> on the same LAN as Tally. It requires Tally to be open (or running as a service) with remote access enabled. Dotone support helps with firewall rules and company selection during onboarding.</p>
        </div>
    </div>
</section>

<!-- SETUP STEPS -->
<section class="section bg-background">
    <div class="container-custom max-w-4xl mx-auto">
        <div class="text-center mb-10">
            <h2 class="text-3xl md:text-4xl font-display font-bold">Step-by-Step Tally Connector Setup</h2>
            <p class="text-base md:text-lg text-text-secondary mt-3 max-w-2xl mx-auto">Follow this sequence for a clean first sync — usually completed in one working session with your CA present.</p>
        </div>
        <div class="guide-steps-track">
            <div class="guide-steps-line" aria-hidden="true"></div>
            <div class="guide-steps-line-fill" aria-hidden="true"></div>
            <div class="guide-step-item">
                <span class="guide-step-num">1</span>
                <h3 class="guide-step-title">Prepare Tally company &amp; GST setup</h3>
                <p class="guide-step-desc">Confirm Tally Prime is licensed, company is created with correct GST registration, and financial year is open. Export your chart of accounts so Dotone can map ledgers.</p>
            </div>
            <div class="guide-step-item">
                <span class="guide-step-num">2</span>
                <h3 class="guide-step-title">Install the Dotone Connector agent</h3>
                <p class="guide-step-desc">Download the connector installer from Dotone support. Install on a machine that stays on during business hours and can reach both Tally (port 9000) and the internet.</p>
            </div>
            <div class="guide-step-item">
                <span class="guide-step-num">3</span>
                <h3 class="guide-step-title">Link Dotone tenant &amp; Tally company</h3>
                <p class="guide-step-desc">Sign in with your Dotone API key, select the Tally company name exactly as shown in Tally, and run the connection test. Fix ODBC driver issues before proceeding.</p>
            </div>
            <div class="guide-step-item">
                <span class="guide-step-num">4</span>
                <h3 class="guide-step-title">Map ledgers, taxes &amp; voucher types</h3>
                <p class="guide-step-desc">Match Dotone accounts to Tally ledgers — sales, purchase, GST input/output, round-off, and bank accounts. Map HSN/SAC and tax rates for each item group.</p>
            </div>
            <div class="guide-step-item">
                <span class="guide-step-num">5</span>
                <h3 class="guide-step-title">Sync masters (customers, vendors, items)</h3>
                <p class="guide-step-desc">Run an initial master import from Tally or push from Dotone, depending on which system is source of truth. Resolve duplicates before transactional sync.</p>
            </div>
            <div class="guide-step-item">
                <span class="guide-step-num">6</span>
                <h3 class="guide-step-title">Trial sync &amp; sign-off</h3>
                <p class="guide-step-desc">Post 3–5 test invoices and payments. Your CA verifies voucher narration, GST breakup, and stock impact in Tally. Enable scheduled sync after sign-off.</p>
            </div>
        </div>
    </div>
</section>

<!-- FIELD GUIDE -->
<section class="section-sm bg-surface">
    <div class="container-custom max-w-6xl mx-auto">
        <div class="text-center mb-10">
            <h2 class="text-3xl md:text-4xl font-display font-bold">Mapping settings explained</h2>
            <p class="text-base md:text-lg text-text-secondary mt-3 max-w-2xl mx-auto">Key connector fields you'll configure once — then rarely touch.</p>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="guide-field-card scroll-reveal">
                <div class="guide-field-icon" aria-hidden="true"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/></svg></div>
                <h3 class="text-lg font-display font-semibold mb-2">Sync direction</h3>
                <p class="guide-step-desc">Per document type: push from Dotone only, or two-way for masters. Most plants push transactions one-way and pull ledgers from Tally.</p>
            </div>
            <div class="guide-field-card scroll-reveal">
                <div class="guide-field-icon" aria-hidden="true"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                <h3 class="text-lg font-display font-semibold mb-2">Sync schedule</h3>
                <p class="guide-step-desc">Real-time on approval, every 15 minutes, or nightly batch. High invoice volume plants often use 15-minute intervals plus a nightly reconciliation run.</p>
            </div>
            <div class="guide-field-card scroll-reveal">
                <div class="guide-field-icon" aria-hidden="true"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg></div>
                <h3 class="text-lg font-display font-semibold mb-2">GST &amp; HSN mapping</h3>
                <p class="guide-step-desc">Links Dotone tax templates to Tally duty ledgers. CGST/SGST/IGST must match your registration type — interstate vs intrastate rules apply automatically.</p>
            </div>
            <div class="guide-field-card scroll-reveal">
                <div class="guide-field-icon" aria-hidden="true"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg></div>
                <h3 class="text-lg font-display font-semibold mb-2">Stock journal rules</h3>
                <p class="guide-step-desc">Optional: post material consumption and FG receipt from work orders. Map WIP and finished goods stock groups in Tally before enabling.</p>
            </div>
            <div class="guide-field-card scroll-reveal">
                <div class="guide-field-icon" aria-hidden="true"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg></div>
                <h3 class="text-lg font-display font-semibold mb-2">Error handling</h3>
                <p class="guide-step-desc">Failed vouchers land in a retry queue with reason codes (missing ledger, GST mismatch). Fix in Dotone or Tally, then re-push — nothing posts twice.</p>
            </div>
            <div class="guide-field-card scroll-reveal">
                <div class="guide-field-icon" aria-hidden="true"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div>
                <h3 class="text-lg font-display font-semibold mb-2">Audit log</h3>
                <p class="guide-step-desc">Every sync attempt is logged with voucher number, Tally reference, timestamp, and user. Export for statutory audit or internal review.</p>
            </div>
        </div>
    </div>
</section>

<!-- COMMON MISTAKES -->
<section class="section-sm">
    <div class="container-custom max-w-4xl mx-auto">
        <div class="text-center mb-10">
            <h2 class="text-3xl md:text-4xl font-display font-bold">Common Tally sync mistakes</h2>
            <p class="text-base md:text-lg text-text-secondary mt-3 max-w-2xl mx-auto">Avoid these — they cause duplicate vouchers, GST notices, and month-end fire drills.</p>
        </div>
        <div class="space-y-4">
            <div class="guide-mistake-card scroll-reveal">
                <h3 class="guide-step-title">Creating the same invoice manually in Tally</h3>
                <p class="guide-step-desc">If Dotone already pushed the voucher, a manual entry doubles revenue and GST. Train accounts to check the sync log before keying anything.</p>
            </div>
            <div class="guide-mistake-card scroll-reveal">
                <h3 class="guide-step-title">Mismatched item names between systems</h3>
                <p class="guide-step-desc">"Engine Oil 5L" in Dotone and "Eng Oil 5 Ltr" in Tally create duplicate stock items. Standardize naming during master sync.</p>
            </div>
            <div class="guide-mistake-card scroll-reveal">
                <h3 class="guide-step-title">Wrong default sales/purchase ledger</h3>
                <p class="guide-step-desc">Inter-state B2B invoices posted to a local sales ledger break GSTR-1. Map customer groups and tax types before bulk sync.</p>
            </div>
            <div class="guide-mistake-card scroll-reveal">
                <h3 class="guide-step-title">Connector PC sleeps or Tally is closed</h3>
                <p class="guide-step-desc">Queued vouchers pile up silently. Keep the connector machine awake and add Tally to startup — or use a dedicated server.</p>
            </div>
        </div>
    </div>
</section>

<!-- CHECKLIST -->
<section class="section bg-surface">
    <div class="container-custom max-w-4xl mx-auto">
        <div class="text-center mb-10">
            <h2 class="text-3xl md:text-4xl font-display font-bold">Go-live checklist</h2>
        </div>
        <div class="card p-6 md:p-8 scroll-reveal">
            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-lg font-display font-semibold mb-4 text-text-primary">Before first sync</h3>
                    <ul class="space-y-1">
                        <li class="guide-checklist-item"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Tally company &amp; GST verified</li>
                        <li class="guide-checklist-item"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Connector installed &amp; connection test passed</li>
                        <li class="guide-checklist-item"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Ledger &amp; tax mapping signed off by CA</li>
                        <li class="guide-checklist-item"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Master data deduplicated</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-display font-semibold mb-4 text-text-primary">After go-live</h3>
                    <ul class="space-y-1">
                        <li class="guide-checklist-item"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Daily sync log review for 2 weeks</li>
                        <li class="guide-checklist-item"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Sample GSTR-1 vs Dotone sales report</li>
                        <li class="guide-checklist-item"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Bank reconciliation spot-check</li>
                        <li class="guide-checklist-item"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Document sync SOP for accounts team</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="section-sm">
    <div class="container-custom max-w-3xl mx-auto">
        <div class="text-center mb-10">
            <h2 class="text-3xl md:text-4xl font-display font-bold">Frequently Asked Questions</h2>
        </div>
        <div class="card px-6 md:px-8 scroll-reveal">
            <div class="guide-faq-item">
                <button type="button" class="guide-faq-trigger" aria-expanded="false">Does the connector work with Tally.ERP 9 or only Tally Prime?<svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></button>
                <div class="guide-faq-body">Both are supported. Tally Prime is recommended for current GST features. ERP 9 requires release 6.6+ with GST enabled. Dotone support confirms compatibility during scoping.</div>
            </div>
            <div class="guide-faq-item">
                <button type="button" class="guide-faq-trigger" aria-expanded="false">Can I sync multiple Tally companies or branches?<svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></button>
                <div class="guide-faq-body">Yes. Map each Dotone company or warehouse to a Tally company. Multi-plant MSMEs often run one Dotone tenant with separate Tally books per legal entity.</div>
            </div>
            <div class="guide-faq-item">
                <button type="button" class="guide-faq-trigger" aria-expanded="false">What happens if a voucher fails to sync?<svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></button>
                <div class="guide-faq-body">It stays in the error queue with a reason (missing ledger, date in locked period, etc.). Fix the root cause and retry — the connector uses idempotent keys so the same invoice never posts twice.</div>
            </div>
            <div class="guide-faq-item">
                <button type="button" class="guide-faq-trigger" aria-expanded="false">Is Tally integration included in all Dotone plans?<svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></button>
                <div class="guide-faq-body">The connector is available on Professional and Enterprise plans. Initial setup and ledger mapping are scoped as part of implementation — see <a href="/pricing" class="text-primary-600 hover:text-primary-500 font-medium">pricing</a> or contact sales for a quote.</div>
            </div>
            <div class="guide-faq-item">
                <button type="button" class="guide-faq-trigger" aria-expanded="false">Can work order costing post to Tally automatically?<svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></button>
                <div class="guide-faq-body">Optional stock journals can reflect material consumption and FG receipt. Full standard costing journals depend on your chart of accounts — Dotone implementation teams configure this with your CA.</div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="section-sm pb-16">
    <div class="container-custom">
        <div class="guide-cta scroll-reveal-scale">
            <h2 class="text-2xl md:text-3xl font-display font-bold mb-4">Connect Dotone to Tally without the manual work</h2>
            <p class="text-text-secondary max-w-2xl mx-auto mb-8">Get production, inventory, and sales in one ERP — and keep your accountant happy with clean Tally books.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/contact" class="btn-primary">Schedule Tally Setup</a>
                <a href="/guides" class="btn-secondary">More Guides</a>
            </div>
        </div>
    </div>
</section>

<div id="footer"><?php include __DIR__ . '/../includes/footer.php'; ?></div>

<script src="/js/tally-guide.js?v=20261015" defer></script>
</body>
</html>
