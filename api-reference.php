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
<section class="relative pt-32 pb-20 overflow-hidden">
    <div class="absolute inset-0 hero-tint" aria-hidden="true"></div>

    <div class="container-custom relative z-10 text-center space-y-6">
        <h1 class="text-5xl md:text-6xl font-display font-bold">DotOne API Reference</h1>
        <p class="text-xl text-text-secondary max-w-3xl mx-auto">
            Secure, scalable APIs to integrate manufacturing automation, Industry 4.0, Vision AI,
            inventory management, and production monitoring into your systems.
        </p>

        <div class="flex justify-center gap-4 mt-6">
            <a href="#authentication" class="btn-primary">Get Started</a>
            <a href="/contact" class="btn-secondary">Request API Access</a>
        </div>
    </div>
</section>

<!-- OVERVIEW -->
<section class="section">
    <div class="container-custom max-w-6xl">
        <div class="grid md:grid-cols-2 gap-12 items-center">

            <div>
                <h2 class="text-3xl font-display font-bold mb-4">
                    Designed for modern manufacturing
                </h2>
                <p class="text-text-secondary mb-6">
                    DotOne APIs enable seamless integration between your factory floor,
                    ERP, MES, BI tools, and third-party systems.
                    Built to handle real-time data, automation workflows, and AI insights
                    at enterprise scale.
                </p>

                <ul class="space-y-3 text-text-secondary">
                    <li>• Plug into existing ERP / MES</li>
                    <li>• Stream real-time production data</li>
                    <li>• Automate inventory & quality workflows</li>
                    <li>• Build Industry 4.0 dashboards</li>
                </ul>
            </div>

            <div class="card p-6 bg-slate-900 text-white text-sm overflow-x-auto">
<pre>
Base URL:
https://api.dotone.biz/v1/

Format:
JSON

Auth:
Bearer Token
</pre>
            </div>

        </div>
    </div>
</section>

<!-- AUTH -->
<section id="authentication" class="section bg-surface">
    <div class="container-custom max-w-5xl">
        <h2 class="text-3xl font-display font-bold mb-6">
            Authentication
        </h2>

        <p class="text-text-secondary mb-6">
            All API requests require authentication using a secure API token.
            Include the token in the request header.
        </p>

        <div class="card p-6 bg-slate-900 text-white text-sm overflow-x-auto">
<pre>
Authorization: Bearer YOUR_API_KEY
Content-Type: application/json
</pre>
        </div>

        <p class="text-sm text-text-secondary mt-4">
            Tokens can be rotated, revoked, or restricted by IP for enterprise deployments.
        </p>
    </div>
</section>

<!-- API MODULES -->
<section class="section">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-display font-bold">
                Core <span class="text-gradient">API Modules</span>
            </h2>
            <p class="text-xl text-text-secondary max-w-3xl mx-auto">
                Modular APIs tailored for each layer of smart manufacturing
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Inventory -->
            <div class="card p-8 hover-lift">
                <h3 class="text-xl font-display font-semibold mb-3">
                    Inventory automation API
                </h3>
                <p class="text-text-secondary mb-4">
                    Track raw material, WIP, and finished goods with real-time accuracy.
                </p>
                <code class="block text-sm bg-surface p-3 rounded">
                    GET /inventory/items<br>
                    POST /inventory/issue<br>
                    POST /inventory/receive
                </code>
            </div>

            <!-- Production -->
            <div class="card p-8 hover-lift">
                <h3 class="text-xl font-display font-semibold mb-3">
                    Production monitoring API
                </h3>
                <p class="text-text-secondary mb-4">
                    Live production data, OEE metrics, downtime events.
                </p>
                <code class="block text-sm bg-surface p-3 rounded">
                    GET /production/status<br>
                    GET /production/oee
                </code>
            </div>

            <!-- Vision AI -->
            <div class="card p-8 hover-lift">
                <h3 class="text-xl font-display font-semibold mb-3">
                    Vision AI API
                </h3>
                <p class="text-text-secondary mb-4">
                    AI-based safety alerts, quality checks, and activity recognition.
                </p>
                <code class="block text-sm bg-surface p-3 rounded">
                    POST /vision/events<br>
                    GET /vision/alerts
                </code>
            </div>

            <!-- Quality -->
            <div class="card p-8 hover-lift">
                <h3 class="text-xl font-display font-semibold mb-3">
                    Quality inspection API
                </h3>
                <p class="text-text-secondary mb-4">
                    Capture defects, inspections, and quality analytics.
                </p>
                <code class="block text-sm bg-surface p-3 rounded">
                    POST /quality/inspect<br>
                    GET /quality/reports
                </code>
            </div>

            <!-- Industry 4.0 -->
            <div class="card p-8 hover-lift">
                <h3 class="text-xl font-display font-semibold mb-3">
                    Industry 4.0 API
                </h3>
                <p class="text-text-secondary mb-4">
                    Smart factory KPIs, analytics, and insights.
                </p>
                <code class="block text-sm bg-surface p-3 rounded">
                    GET /industry/kpis<br>
                    GET /industry/insights
                </code>
            </div>

            <!-- ERP -->
            <div class="card p-8 hover-lift">
                <h3 class="text-xl font-display font-semibold mb-3">
                    ERP integration API
                </h3>
                <p class="text-text-secondary mb-4">
                    Sync DotOne with SAP, Oracle, Tally, or custom ERPs.
                </p>
                <code class="block text-sm bg-surface p-3 rounded">
                    POST /erp/sync<br>
                    GET /erp/status
                </code>
            </div>

        </div>
    </div>
</section>
<section class="section bg-surface">
    <div class="container-custom">
        <div class="flex flex-wrap gap-4 justify-center text-sm">
            <a href="#inventory-api" class="badge badge-primary">Inventory API</a>
            <a href="#production-api" class="badge badge-primary">Production API</a>
            <a href="#vision-api" class="badge badge-primary">Vision AI API</a>
            <a href="#quality-api" class="badge badge-primary">Quality API</a>
            <a href="#erp-api" class="badge badge-primary">ERP API</a>
        </div>
    </div>
</section>
<section id="inventory-api" class="section">
    <div class="container-custom max-w-6xl">
        <h2 class="text-3xl font-display font-bold mb-6">
            Inventory automation API
        </h2>

        <div class="card overflow-x-auto">
            <table class="w-full text-sm">
                <thead class="bg-surface text-text-secondary">
                    <tr>
                        <th class="p-4 text-left">Method</th>
                        <th class="p-4 text-left">Endpoint</th>
                        <th class="p-4 text-left">Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-t">
                        <td class="p-4 font-semibold text-primary-500">GET</td>
                        <td class="p-4">/inventory/items</td>
                        <td class="p-4">Fetch real-time stock levels</td>
                    </tr>
                    <tr class="border-t">
                        <td class="p-4 font-semibold text-primary-500">POST</td>
                        <td class="p-4">/inventory/issue</td>
                        <td class="p-4">Issue raw material to production</td>
                    </tr>
                    <tr class="border-t">
                        <td class="p-4 font-semibold text-primary-500">POST</td>
                        <td class="p-4">/inventory/receive</td>
                        <td class="p-4">Receive finished goods or material</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<section class="section bg-surface">
    <div class="container-custom max-w-5xl">
        <h3 class="text-2xl font-display font-semibold mb-4">
            Example request
        </h3>

        <div class="card p-6 bg-slate-900 text-white text-sm overflow-x-auto">
<pre>
curl -X GET https://api.dotone.biz/v1/inventory/items \
-H "Authorization: Bearer YOUR_API_KEY"
</pre>
        </div>

        <h3 class="text-2xl font-display font-semibold mt-8 mb-4">
            Example response
        </h3>

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
</section>
<section id="vision-api" class="section">
    <div class="container-custom max-w-6xl">
        <h2 class="text-3xl font-display font-bold mb-6">
            Vision AI events API
        </h2>

        <div class="grid md:grid-cols-2 gap-8">
            <div class="card p-6">
                <h4 class="font-display font-semibold mb-2">Use Cases</h4>
                <ul class="text-text-secondary space-y-2">
                    <li>• Safety violation detection</li>
                    <li>• Quality defect alerts</li>
                    <li>• Worker activity tracking</li>
                </ul>
            </div>

            <div class="card p-6 bg-slate-900 text-white text-sm overflow-x-auto">
<pre>
POST /vision/events

{
  "camera_id": "CAM-12",
  "event_type": "NO_HELMET",
  "confidence": 0.94,
  "timestamp": "2026-01-04T10:30:00Z"
}
</pre>
            </div>
        </div>
    </div>
</section>


<!-- CTA -->
<section class="section">
    <div class="container-custom">
        <div class="relative rounded-3xl overflow-hidden cta-frame">
            

            <div class="relative z-10 px-8 py-16 text-center text-text-primary">
                <h2 class="text-4xl font-display font-bold mb-4">
                    Build smarter manufacturing systems
                </h2>
                <p class="text-xl text-text-secondary max-w-3xl mx-auto mb-8">
                    Start integrating DotOne APIs into your factory, ERP, or analytics platform today.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/contact" class="btn-primary bg-primary-500 text-white">
                        Request API Access
                    </a>
                    <a href="/documentation" class="btn-secondary border-border text-text-primary">
                        View Documentation
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="footer"><?php include __DIR__ . '/includes/footer.php'; ?></div>


</body>
</html>
