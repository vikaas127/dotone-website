<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Dotone guides and articles for MSME manufacturers — ERP, Vision AI, production, inventory, HRMS, Industry 4.0, and shopfloor best practices.">
    <title>Guides &amp; Articles | Dotone</title>
    <link rel="canonical" href="https://dotoneforbusiness.in/guides">
    <link rel="stylesheet" href="css/main.css">
    <script src="/js/header-nav.js" defer></script>
</head>
<body class="bg-white">

<div id="header"><?php include __DIR__ . '/includes/header.php'; ?></div>

<section class="relative pt-32 pb-12 md:pt-40 md:pb-14 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-brand opacity-10"></div>
    <div class="container-custom relative z-10 text-center max-w-3xl mx-auto space-y-6">
        <span class="section-label bg-primary-50 text-primary-600 px-4 py-1.5 rounded-full">Guides &amp; Articles</span>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-display font-bold">
            Learn how to run a smarter <span class="text-gradient">factory</span>
        </h1>
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
            <a href="/support" class="btn-primary">Visit Support Center</a>
            <a href="/documentation" class="btn-secondary">Technical Documentation</a>
        </div>
    </div>
</section>

<div id="footer"><?php include __DIR__ . '/includes/footer.php'; ?></div>

<script src="/js/guides-articles.js"></script>
<script src="/js/guides-page.js" defer></script>
<script id="dhws-dataInjector" src="/public/dhws-data-injector.js"></script>
</body>
</html>
