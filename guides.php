<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ERP and AI guides from the DotOne team: practical, India-specific advice on choosing ERP, BOM setup and going live, with examples and checklists.">
    <title>ERP and AI Guides | DotOne</title>
    <link rel="canonical" href="https://dotone.biz/guides">
    <link rel="icon" href="/favicon.ico" sizes="48x48"><link rel="icon" type="image/png" sizes="32x32" href="/public/favicon-32.png"><link rel="icon" type="image/png" sizes="16x16" href="/public/favicon-16.png"><link rel="apple-touch-icon" href="/public/apple-touch-icon.png"><link rel="manifest" href="/public/manifest.json"><meta name="theme-color" content="#0096EE">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Dotone">
    <meta property="og:title" content="ERP and AI Guides | DotOne">
    <meta property="og:description" content="ERP and AI guides from the DotOne team: practical, India-specific advice on choosing ERP, BOM setup and going live, with examples and checklists.">
    <meta property="og:url" content="https://dotone.biz/guides">
    <meta property="og:image" content="https://dotone.biz/assets/og-image.jpg?v=2">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="DotOne: ERP, AI agents and automation in one platform">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ERP and AI Guides | DotOne">
    <meta name="twitter:description" content="ERP and AI guides from the DotOne team: practical, India-specific advice on choosing ERP, BOM setup and going live, with examples and checklists.">
    <meta name="twitter:image" content="https://dotone.biz/assets/og-image.jpg?v=2">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=JetBrains+Mono:wght@400&display=swap">
    <link rel="stylesheet" href="/css/main.css?v=20261018">
    <script src="/js/header-nav.js?v=20261018" defer></script>
</head>
<body class="bg-white">

<div id="header"><?php include __DIR__ . '/includes/header.php'; ?></div>

<section class="relative pt-32 pb-12 md:pt-40 md:pb-14 overflow-hidden">
    <div class="absolute inset-0 hero-tint" aria-hidden="true"></div>
    <div class="container-custom relative z-10 text-center max-w-3xl mx-auto space-y-6">
        <span class="section-label bg-primary-50 text-primary-600 px-4 py-1.5 rounded-full">Guides &amp; Articles</span>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-display font-bold">ERP and AI Guides</h1>
        <p class="text-xl text-text-secondary">
            Practical guides on ERP, Vision AI, production, inventory, HRMS, and Industry 4.0 — written for Indian MSME manufacturers.
        </p>
    </div>
</section>

<section class="section-sm bg-surface border-y border-border">
    <div class="container-custom max-w-6xl mx-auto">
        <div class="guides-toolbar">
            <label class="guides-search-wrap" for="guides-search">
                <svg class="guides-search-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                <input type="search" id="guides-search" class="guides-search-input" placeholder="Search articles…" autocomplete="off">
            </label>
            <p id="guides-count" class="guides-count" aria-live="polite"></p>
        </div>
        <div id="guides-filters" class="guides-filters" role="tablist" aria-label="Filter by category"></div>
    </div>
</section>

<section class="section">
    <div class="container-custom max-w-6xl mx-auto">
        <div id="guides-grid" class="guides-grid"></div>
        <div id="guides-empty" class="guides-empty card p-10 text-center" hidden>
            <h2 class="text-xl font-display font-semibold mb-2">No articles found</h2>
            <p class="text-text-secondary text-sm">Try a different search term or category filter.</p>
        </div>
    </div>
</section>

<section class="section-sm bg-surface">
    <div class="container-custom max-w-3xl mx-auto text-center space-y-6">
        <h2 class="text-2xl font-display font-bold">Need hands-on help?</h2>
        <p class="text-text-secondary">Our support team and documentation cover setup, integrations, and rollout for every Dotone module.</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="mailto:support@techdotbit.com?subject=DotOne%20support" class="btn-primary">Email Support</a>
            <a href="/documentation" class="btn-secondary">Technical Documentation</a>
        </div>
    </div>
</section>

<div id="footer"><?php include __DIR__ . '/includes/footer.php'; ?></div>

<script src="/js/guides-articles.js?v=20261018" defer></script>
<script src="/js/guides-page.js?v=20261018" defer></script>
</body>
</html>
