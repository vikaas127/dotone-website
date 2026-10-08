<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>API Reference: REST Endpoints | DotOne</title>
    <meta name="description" content="REST API reference for DotOne: authentication, endpoints, request and response examples, and webhooks to connect DotOne with your other systems.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=JetBrains+Mono:wght@400&display=swap">
    <link rel="stylesheet" href="/css/main.css?v=20261019">
    <script src="/js/header-nav.js?v=20261019" defer></script>
    <link rel="canonical" href="https://dotone.biz/api-reference">
    <link rel="icon" href="/favicon.ico" sizes="48x48"><link rel="icon" type="image/png" sizes="32x32" href="/public/favicon-32.png"><link rel="icon" type="image/png" sizes="16x16" href="/public/favicon-16.png"><link rel="apple-touch-icon" href="/public/apple-touch-icon.png"><link rel="manifest" href="/public/manifest.json"><meta name="theme-color" content="#0096EE">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="DotOne">
    <meta property="og:title" content="API Reference: REST Endpoints | DotOne">
    <meta property="og:description" content="REST API reference for DotOne: authentication, endpoints, request and response examples, and webhooks to connect DotOne with your other systems.">
    <meta property="og:url" content="https://dotone.biz/api-reference">
    <meta property="og:image" content="https://dotone.biz/assets/og-image.jpg?v=2">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="DotOne: ERP, AI agents and automation in one platform">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="API Reference: REST Endpoints | DotOne">
    <meta name="twitter:description" content="REST API reference for DotOne: authentication, endpoints, request and response examples, and webhooks to connect DotOne with your other systems.">
    <meta name="twitter:image" content="https://dotone.biz/assets/og-image.jpg?v=2">
</head>

<body class="bg-background">

<div id="header"><?php include __DIR__ . '/includes/header.php'; ?></div>

<!-- HERO -->
<section class="relative pt-32 pb-16 md:pt-40 md:pb-20 overflow-hidden">
    <div class="absolute inset-0 hero-tint" aria-hidden="true"></div>
    <div class="container-custom relative z-10 text-center max-w-3xl mx-auto">
        <span class="section-label">Developers</span>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-display font-semibold text-text-primary leading-tight mb-6">DotOne API Reference</h1>
        <p class="text-lg md:text-xl text-text-secondary leading-relaxed mb-8">
            REST APIs to connect DotOne inventory, production, quality and Vision AI data with your ERP, MES and BI tools.
        </p>
        <div class="flex flex-col sm:flex-row gap-3 justify-center">
            <a href="#authentication" class="btn-hero-glow-lg">Get started</a>
            <a href="/contact" class="btn-ghost-lg">Request API access</a>
        </div>
    </div>
</section>

<!-- AUTHENTICATION -->
<section id="authentication" class="section bg-white">
    <div class="container-custom grid lg:grid-cols-2 gap-12 items-center">
        <div>
            <h2 class="text-3xl md:text-4xl font-display font-semibold mb-4">Authentication</h2>
            <p class="text-lg text-text-secondary mb-4">
                Every request uses JSON and a Bearer token in the request header.
                Tokens can be rotated, revoked or restricted by IP for enterprise deployments.
            </p>
            <p class="text-text-secondary">Base URL: <code>https://api.dotone.biz/v1/</code></p>
        </div>
        <div class="card p-6 bg-slate-900 text-white text-sm overflow-x-auto">
<pre>
Authorization: Bearer YOUR_API_KEY
Content-Type: application/json
</pre>
        </div>
    </div>
</section>

<!-- API MODULES -->
<section class="section bg-white">
    <div class="container-custom">
        <div class="max-w-2xl mb-10">
            <h2 class="text-3xl md:text-4xl font-display font-semibold mb-4">Core API modules</h2>
            <p class="text-lg text-text-secondary">One API per area of the factory, all on the same base URL and token.</p>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="card p-6">
                <h3 class="text-lg font-display font-semibold mb-2">Inventory automation API</h3>
                <p class="text-text-secondary text-[0.95rem] mb-4">Track raw material, WIP and finished goods in real time.</p>
                <code class="block text-sm bg-surface p-3 rounded">GET /inventory/items<br>POST /inventory/issue<br>POST /inventory/receive</code>
            </div>
            <div class="card p-6">
                <h3 class="text-lg font-display font-semibold mb-2">Production monitoring API</h3>
                <p class="text-text-secondary text-[0.95rem] mb-4">Live production data, OEE metrics and downtime events.</p>
                <code class="block text-sm bg-surface p-3 rounded">GET /production/status<br>GET /production/oee</code>
            </div>
            <div class="card p-6">
                <h3 class="text-lg font-display font-semibold mb-2">Vision AI API</h3>
                <p class="text-text-secondary text-[0.95rem] mb-4">Safety alerts, quality checks and activity recognition.</p>
                <code class="block text-sm bg-surface p-3 rounded">POST /vision/events<br>GET /vision/alerts</code>
            </div>
            <div class="card p-6">
                <h3 class="text-lg font-display font-semibold mb-2">Quality inspection API</h3>
                <p class="text-text-secondary text-[0.95rem] mb-4">Capture defects, inspections and quality analytics.</p>
                <code class="block text-sm bg-surface p-3 rounded">POST /quality/inspect<br>GET /quality/reports</code>
            </div>
            <div class="card p-6">
                <h3 class="text-lg font-display font-semibold mb-2">Industry 4.0 API</h3>
                <p class="text-text-secondary text-[0.95rem] mb-4">Smart factory KPIs, analytics and insights.</p>
                <code class="block text-sm bg-surface p-3 rounded">GET /industry/kpis<br>GET /industry/insights</code>
            </div>
            <div class="card p-6">
                <h3 class="text-lg font-display font-semibold mb-2">ERP integration API</h3>
                <p class="text-text-secondary text-[0.95rem] mb-4">Sync DotOne with SAP, Oracle, Tally or custom ERPs.</p>
                <code class="block text-sm bg-surface p-3 rounded">POST /erp/sync<br>GET /erp/status</code>
            </div>
        </div>
    </div>
</section>

<!-- EXAMPLE -->
<section class="section bg-white">
    <div class="container-custom">
        <div class="max-w-2xl mb-10">
            <h2 class="text-3xl md:text-4xl font-display font-semibold mb-4">Example request and response</h2>
            <p class="text-lg text-text-secondary">Fetch real-time stock levels from the inventory API.</p>
        </div>
        <div class="grid lg:grid-cols-2 gap-6">
            <div class="card p-6 bg-slate-900 text-white text-sm overflow-x-auto">
<pre>
curl -X GET https://api.dotone.biz/v1/inventory/items \
-H "Authorization: Bearer YOUR_API_KEY"
</pre>
            </div>
            <div class="card p-6 bg-slate-900 text-white text-sm overflow-x-auto">
<pre>
{
  "status": "success",
  "data": [
    {
      "item_code": "RM-1023",
      "quantity": 1200,
      "unit": "kg",
      "location": "Plant-1"
    }
  ]
}
</pre>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="section">
    <div class="container-custom">
        <div class="relative rounded-3xl overflow-hidden cta-frame px-8 py-14 md:px-16 md:py-20 text-center">
            <h2 class="text-3xl md:text-4xl font-display font-semibold text-text-primary mb-4">Build smarter manufacturing systems</h2>
            <p class="text-lg text-text-secondary max-w-2xl mx-auto mb-8">Start integrating DotOne APIs into your factory, ERP or analytics platform.</p>
            <div class="flex flex-col sm:flex-row gap-3 justify-center">
                <a href="/contact" class="btn-hero-glow-lg">Request API access</a>
                <a href="/documentation" class="btn-ghost-lg">View documentation</a>
            </div>
        </div>
    </div>
</section>

<div id="footer"><?php include __DIR__ . '/includes/footer.php'; ?></div>


</body>
</html>
