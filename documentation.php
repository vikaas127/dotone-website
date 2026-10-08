<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DotOne Documentation | DotOne</title>
    <meta name="description" content="Product documentation for DotOne modules, setup, configuration and administration.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=JetBrains+Mono:wght@400&display=swap">
    <link rel="stylesheet" href="/css/main.css?v=20261017">
    <script src="/js/header-nav.js?v=20261017" defer></script>
    <link rel="canonical" href="https://dotone.biz/documentation">
    <link rel="icon" href="/favicon.ico" sizes="48x48"><link rel="icon" type="image/png" sizes="32x32" href="/public/favicon-32.png"><link rel="icon" type="image/png" sizes="16x16" href="/public/favicon-16.png"><link rel="apple-touch-icon" href="/public/apple-touch-icon.png"><link rel="manifest" href="/public/manifest.json"><meta name="theme-color" content="#0096EE">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Dotone">
    <meta property="og:title" content="DotOne Documentation | DotOne">
    <meta property="og:description" content="Product documentation for DotOne modules, setup, configuration and administration.">
    <meta property="og:url" content="https://dotone.biz/documentation">
    <meta property="og:image" content="https://dotone.biz/assets/og-image.jpg?v=2">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="DotOne: ERP, AI agents and automation in one platform">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="DotOne Documentation | DotOne">
    <meta name="twitter:description" content="Product documentation for DotOne modules, setup, configuration and administration.">
    <meta name="twitter:image" content="https://dotone.biz/assets/og-image.jpg?v=2">
</head>

<body class="bg-background">

<div id="header"><?php include __DIR__ . '/includes/header.php'; ?></div>

<!-- HERO -->
<!-- HERO -->
<section class="pt-32 pb-24">
    <div class="container-custom text-center space-y-8">

        <span class="inline-block px-4 py-2 bg-primary-100 text-primary-700 rounded-full text-sm font-semibold">
            Product & Developer Documentation
        </span>

        <h1 class="text-5xl md:text-6xl font-display font-bold">DotOne Documentation</h1>

        <p class="text-xl text-text-secondary max-w-4xl mx-auto">
            Everything you need to deploy, configure, integrate, and scale
            Dotone’s manufacturing automation, Industry 4.0, Vision AI,
            inventory automation, and production monitoring solutions.
        </p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#getting-started" class="btn-primary">
                Get Started
            </a>
            <a href="/api-reference" class="btn-secondary">
                API Reference
            </a>
        </div>

    </div>
</section>


<!-- GETTING STARTED -->
<section id="getting-started" class="section">
    <div class="container-custom max-w-6xl">
        <div class="grid md:grid-cols-2 gap-12 items-center">

            <div>
                <h2 class="text-3xl font-display font-bold mb-4">
                    Getting Started
                </h2>
                <p class="text-text-secondary mb-6">
                    Dotone is designed for rapid deployment in manufacturing environments.
                    Whether you are an IT team, system integrator, or plant manager,
                    you can start using Dotone in days—not months.
                </p>

                <ul class="space-y-3 text-text-secondary">
                    <li>• Cloud or on-premise deployment</li>
                    <li>• Works with existing CCTV & machines</li>
                    <li>• Secure role-based access</li>
                    <li>• ERP & MES integration ready</li>
                </ul>
            </div>

            <div class="card p-6 bg-slate-900 text-white text-sm overflow-x-auto">
<pre>
Step 1: Create Dotone Account
Step 2: Configure Plant & Lines
Step 3: Connect Cameras / Machines
Step 4: Enable Modules
Step 5: Go Live 🚀
</pre>
            </div>

        </div>
    </div>
</section>

<!-- DOCUMENTATION SECTIONS -->
<section class="section bg-surface">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-display font-bold">
                Documentation <span class="text-gradient">Sections</span>
            </h2>
            <p class="text-xl text-text-secondary max-w-3xl mx-auto">
                Structured guides for every stage of your manufacturing automation journey
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Deployment -->
            <div class="card p-8 hover-lift">
                <h3 class="text-xl font-display font-semibold mb-3">
                    Deployment Guide
                </h3>
                <p class="text-text-secondary mb-4">
                    Step-by-step instructions to deploy Dotone in cloud or on-premise environments.
                </p>
                <ul class="text-sm text-text-secondary space-y-1">
                    <li>• System requirements</li>
                    <li>• Network & security setup</li>
                    <li>• Environment configuration</li>
                </ul>
            </div>

            <!-- Inventory -->
            <div class="card p-8 hover-lift">
                <h3 class="text-xl font-display font-semibold mb-3">
                    Inventory Automation
                </h3>
                <p class="text-text-secondary mb-4">
                    Configure raw material, WIP, finished goods, and inventory workflows.
                </p>
                <ul class="text-sm text-text-secondary space-y-1">
                    <li>• Material masters</li>
                    <li>• Stock movements</li>
                    <li>• Batch & lot tracking</li>
                </ul>
            </div>

            <!-- Production -->
            <div class="card p-8 hover-lift">
                <h3 class="text-xl font-display font-semibold mb-3">
                    Production Monitoring
                </h3>
                <p class="text-text-secondary mb-4">
                    Monitor machines, lines, shifts, downtime, and OEE in real time.
                </p>
                <ul class="text-sm text-text-secondary space-y-1">
                    <li>• Line configuration</li>
                    <li>• Production targets</li>
                    <li>• Performance dashboards</li>
                </ul>
            </div>

            <!-- Vision AI -->
            <div class="card p-8 hover-lift">
                <h3 class="text-xl font-display font-semibold mb-3">
                    Vision AI Setup
                </h3>
                <p class="text-text-secondary mb-4">
                    Enable AI-based safety, quality inspection, and activity tracking using CCTV.
                </p>
                <ul class="text-sm text-text-secondary space-y-1">
                    <li>• Camera onboarding</li>
                    <li>• AI model selection</li>
                    <li>• Alerts & events</li>
                </ul>
            </div>

            <!-- Industry 4.0 -->
            <div class="card p-8 hover-lift">
                <h3 class="text-xl font-display font-semibold mb-3">
                    Industry 4.0 Modules
                </h3>
                <p class="text-text-secondary mb-4">
                    Smart factory analytics, predictive insights, and automation workflows.
                </p>
                <ul class="text-sm text-text-secondary space-y-1">
                    <li>• KPI definitions</li>
                    <li>• Data analytics</li>
                    <li>• Automation rules</li>
                </ul>
            </div>

            <!-- Integrations -->
            <div class="card p-8 hover-lift">
                <h3 class="text-xl font-display font-semibold mb-3">
                    Integrations & APIs
                </h3>
                <p class="text-text-secondary mb-4">
                    Integrate Dotone with ERP, MES, BI tools, and third-party systems.
                </p>
                <ul class="text-sm text-text-secondary space-y-1">
                    <li>• REST APIs</li>
                    <li>• Webhooks</li>
                    <li>• ERP sync</li>
                </ul>
            </div>

        </div>
    </div>
</section>

<section class="section">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-display font-bold">
                Industries Using <span class="text-gradient">AI-Based Quality Inspection</span>
            </h2>
            <p class="text-xl text-text-secondary max-w-3xl mx-auto">
                Trusted across diverse industries to improve quality,
                compliance, and operational efficiency
            </p>
        </div>

        <div class="grid md:grid-cols-3 lg:grid-cols-4 gap-8 text-center">

            <div class="card p-6 hover-lift">Aerospace & Defence</div>
            <div class="card p-6 hover-lift">Agribusiness</div>
            <div class="card p-6 hover-lift">Automotive</div>
            <div class="card p-6 hover-lift">Banking</div>

            <div class="card p-6 hover-lift">Chemicals</div>
            <div class="card p-6 hover-lift">Consumer Products</div>
            <div class="card p-6 hover-lift">Construction & Real Estate</div>
            <div class="card p-6 hover-lift">Defence & Security</div>

            <div class="card p-6 hover-lift">Government</div>
            <div class="card p-6 hover-lift">High Tech</div>
            <div class="card p-6 hover-lift">Education & Research</div>
            <div class="card p-6 hover-lift">Industrial Manufacturing</div>

            <div class="card p-6 hover-lift">Insurance</div>
            <div class="card p-6 hover-lift">Life Sciences & Healthcare</div>
            <div class="card p-6 hover-lift">Media, Sports & Entertainment</div>
            <div class="card p-6 hover-lift">Mill Products</div>

            <div class="card p-6 hover-lift">Mining</div>
            <div class="card p-6 hover-lift">Oil, Gas & Energy</div>
            <div class="card p-6 hover-lift">Professional Services</div>
            <div class="card p-6 hover-lift">Retail</div>

            <div class="card p-6 hover-lift">Telecommunications</div>
            <div class="card p-6 hover-lift">Travel & Transportation</div>
            <div class="card p-6 hover-lift">Utilities</div>
            <div class="card p-6 hover-lift">Wholesale Distribution</div>

        </div>
    </div>
</section>

<section class="section bg-surface">
    <div class="container-custom">

        <!-- Section Heading -->
        <div class="text-center space-y-4 mb-16">
            <h2 class="text-4xl md:text-5xl font-display font-bold">
                Measurable <span class="text-gradient">Quality & Performance Impact</span>
            </h2>
            <p class="text-xl text-text-secondary max-w-3xl mx-auto">
                Real-world results achieved with AI-based quality inspection
                across manufacturing environments
            </p>
        </div>

        <!-- Metrics Grid -->
        <div class="grid md:grid-cols-4 gap-8 text-center">

            <div class="card p-6 hover-lift">
                <h3 class="text-4xl font-display font-bold text-gradient">99%</h3>
                <p class="text-text-secondary mt-2">Inspection Accuracy</p>
            </div>

            <div class="card p-6 hover-lift">
                <h3 class="text-4xl font-display font-bold text-gradient">40%</h3>
                <p class="text-text-secondary mt-2">Rejection Cost Reduction</p>
            </div>

            <div class="card p-6 hover-lift">
                <h3 class="text-4xl font-display font-bold text-gradient">3×</h3>
                <p class="text-text-secondary mt-2">Inspection Speed</p>
            </div>

            <div class="card p-6 hover-lift">
                <h3 class="text-4xl font-display font-bold text-gradient">24/7</h3>
                <p class="text-text-secondary mt-2">Fatigue-Free Inspection</p>
            </div>

        </div>

    </div>
</section>


<!-- IMPLEMENTATION PLAN -->
<section class="section bg-surface">
    <div class="container-custom">
        <div class="text-center space-y-4 mb-16">
            <h2 class="text-4xl md:text-5xl font-display font-bold">
                Implementation <span class="text-gradient">Plan</span>
            </h2>
            <p class="text-xl text-text-secondary max-w-3xl mx-auto">
                A structured, step-by-step approach to deploy
                Dotone automation solutions smoothly
            </p>
        </div>

        <div class="grid md:grid-cols-4 gap-8 max-w-6xl mx-auto">

            <div class="card hover-lift p-6">
                <h3 class="text-lg font-display font-semibold mb-2">
                    Phase 1: Assessment
                </h3>
                <p class="text-sm text-text-secondary">
                    Requirement analysis, plant walkthrough,
                    module selection, and success metrics definition.
                </p>
            </div>

            <div class="card hover-lift p-6">
                <h3 class="text-lg font-display font-semibold mb-2">
                    Phase 2: Configuration
                </h3>
                <p class="text-sm text-text-secondary">
                    Configure inventory, production lines,
                    machines, cameras, and workflows.
                </p>
            </div>

            <div class="card hover-lift p-6">
                <h3 class="text-lg font-display font-semibold mb-2">
                    Phase 3: Integration
                </h3>
                <p class="text-sm text-text-secondary">
                    ERP, MES, and API integrations with
                    validation and pilot execution.
                </p>
            </div>

            <div class="card hover-lift p-6">
                <h3 class="text-lg font-display font-semibold mb-2">
                    Phase 4: Go-Live
                </h3>
                <p class="text-sm text-text-secondary">
                    Full rollout, monitoring, optimization,
                    and continuous improvement.
                </p>
            </div>

        </div>
    </div>
</section>
<!-- TECHNICAL RESOURCES -->
<section class="section bg-surface">
    <div class="container-custom">
        <div class="text-center space-y-4 mb-16">
            <h2 class="text-4xl md:text-5xl font-display font-bold">
                Technical <span class="text-gradient">Resources</span>
            </h2>
            <p class="text-xl text-text-secondary max-w-3xl mx-auto">
                Documentation, architecture guides, and
                integration references for IT teams
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">

            <div class="card hover-lift p-6">
                <h3 class="text-lg font-display font-semibold mb-2">
                    System Architecture Guide
                </h3>
                <p class="text-sm text-text-secondary mb-4">
                    Platform architecture covering cloud,
                    on-premise, security, and scalability.
                </p>
                <a href="/documentation" class="text-primary-500 font-medium">
                    View Documentation
                </a>
            </div>

            <div class="card hover-lift p-6">
                <h3 class="text-lg font-display font-semibold mb-2">
                    Integration & API Reference
                </h3>
                <p class="text-sm text-text-secondary mb-4">
                    REST APIs, data models, webhooks,
                    and ERP integration workflows.
                </p>
                <a href="/api-reference" class="text-primary-500 font-medium">
                    View API Reference
                </a>
            </div>

            <div class="card hover-lift p-6">
                <h3 class="text-lg font-display font-semibold mb-2">
                    Best Practices & Guidelines
                </h3>
                <p class="text-sm text-text-secondary mb-4">
                    Proven practices for data accuracy,
                    performance optimization, and scaling.
                </p>
                <a href="/documentation" class="text-primary-500 font-medium">
                    Read Best Practices
                </a>
            </div>

        </div>
    </div>
</section>
<section class="section">
    <div class="container-custom">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-display font-bold">
                Quality <span class="text-gradient">Compliance & Standards</span>
            </h2>
        </div>

        <div class="max-w-4xl mx-auto card p-8">
            <ul class="grid md:grid-cols-2 gap-4 text-text-secondary text-sm">
                <li>✔ ISO 9001 – Quality Management</li>
                <li>✔ ISO 14001 – Environmental Compliance</li>
                <li>✔ GMP – Pharmaceutical Manufacturing</li>
                <li>✔ IATF 16949 – Automotive Quality</li>
                <li>✔ FDA & Regulatory Readiness</li>
                <li>✔ Audit-Ready Digital Records</li>
            </ul>
        </div>
    </div>
</section>
<section class="section bg-surface">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-display font-bold">
                Seamless <span class="text-gradient">System Integrations</span>
            </h2>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="card p-6 hover-lift">ERP Systems (SAP, Tally, Oracle, DOT ERP)</div>
            <div class="card p-6 hover-lift">MES & Production Systems</div>
            <div class="card p-6 hover-lift">PLC / SCADA Integration</div>
            <div class="card p-6 hover-lift">CCTV & Industrial Cameras</div>
            <div class="card p-6 hover-lift">Cloud & On-Prem Deployment</div>
            <div class="card p-6 hover-lift">REST APIs & Webhooks</div>
        </div>
    </div>
</section>

<!-- BEST PRACTICES -->
<section class="section bg-surface">
    <div class="container-custom">
        <div class="text-center space-y-4 mb-16">
            <h2 class="text-4xl md:text-5xl font-display font-bold">
                Best <span class="text-gradient">Practices</span>
            </h2>
            <p class="text-xl text-text-secondary max-w-3xl mx-auto">
                Proven guidelines to ensure smooth implementation,
                accurate data, and long-term success
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">

            <div class="card hover-lift p-6">
                <h3 class="text-lg font-display font-semibold mb-2">
                    Pilot Before Scaling
                </h3>
                <p class="text-sm text-text-secondary">
                    Start with a single production line or process
                    to validate workflows before full rollout.
                </p>
            </div>

            <div class="card hover-lift p-6">
                <h3 class="text-lg font-display font-semibold mb-2">
                    Role-Based Access
                </h3>
                <p class="text-sm text-text-secondary">
                    Assign permissions carefully for operators,
                    supervisors, and managers to avoid errors.
                </p>
            </div>

            <div class="card hover-lift p-6">
                <h3 class="text-lg font-display font-semibold mb-2">
                    Data Validation
                </h3>
                <p class="text-sm text-text-secondary">
                    Validate inventory, production, and quality
                    data during the first 30 days of operation.
                </p>
            </div>

            <div class="card hover-lift p-6">
                <h3 class="text-lg font-display font-semibold mb-2">
                    Automated Reporting
                </h3>
                <p class="text-sm text-text-secondary">
                    Automate daily and weekly reports to improve
                    management visibility and decision-making.
                </p>
            </div>

            <div class="card hover-lift p-6">
                <h3 class="text-lg font-display font-semibold mb-2">
                    AI Model Review
                </h3>
                <p class="text-sm text-text-secondary">
                    Regularly review AI model performance and
                    fine-tune thresholds for optimal accuracy.
                </p>
            </div>

        </div>
    </div>
</section>


<!-- USER ROLES & ACCESS CONTROL -->
<section class="section bg-surface">
    <div class="container-custom">
        <div class="text-center space-y-4 mb-16">
            <h2 class="text-4xl md:text-5xl font-display font-bold">
                User Roles & <span class="text-gradient">Access Control</span>
            </h2>
            <p class="text-xl text-text-secondary max-w-3xl mx-auto">
                Role-based permissions designed to ensure
                security, accountability, and operational efficiency
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">

            <!-- Admin -->
            <div class="card hover-lift p-6">
                <h3 class="text-lg font-display font-semibold mb-2">
                    Admin
                </h3>
                <p class="text-sm text-text-secondary mb-4">
                    Full system access including configuration,
                    integrations, security controls, and reporting.
                </p>
                <ul class="text-sm text-text-secondary space-y-1">
                    <li>• Platform configuration</li>
                    <li>• User & role management</li>
                    <li>• ERP & API integrations</li>
                </ul>
            </div>

            <!-- Manager -->
            <div class="card hover-lift p-6">
                <h3 class="text-lg font-display font-semibold mb-2">
                    Manager
                </h3>
                <p class="text-sm text-text-secondary mb-4">
                    Operational visibility with approval
                    authority and performance analytics.
                </p>
                <ul class="text-sm text-text-secondary space-y-1">
                    <li>• Production & inventory visibility</li>
                    <li>• Approval workflows</li>
                    <li>• KPI & analytics dashboards</li>
                </ul>
            </div>

            <!-- Operator -->
            <div class="card hover-lift p-6">
                <h3 class="text-lg font-display font-semibold mb-2">
                    Operator
                </h3>
                <p class="text-sm text-text-secondary mb-4">
                    Day-to-day execution of operations,
                    inspections, and data entry tasks.
                </p>
                <ul class="text-sm text-text-secondary space-y-1">
                    <li>• Production updates</li>
                    <li>• Inventory transactions</li>
                    <li>• Quality inspections</li>
                </ul>
            </div>

        </div>
    </div>
</section>


<!-- CTA -->
<!-- CTA -->
<section class="section">
    <div class="container-custom">
        <div class="relative rounded-3xl overflow-hidden cta-frame">
            

            <div class="relative z-10 px-8 py-16 md:px-16 md:py-24 text-center">
                <h2 class="text-4xl md:text-5xl font-display font-bold text-text-primary mb-6">
                    Deploy Manufacturing Automation Faster
                </h2>
                <p class="text-xl text-text-secondary max-w-3xl mx-auto mb-8">
                    Reduce implementation time, integrate seamlessly,
                    and scale confidently with Dotone.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/demo"
                       class="inline-flex items-center justify-center px-8 py-4 bg-primary-500 text-white font-display font-semibold rounded-lg hover:bg-primary-600 transition-all shadow-lg">
                        Watch Live Demo
                    </a>
                    <a href="/contact"
                       class="inline-flex items-center justify-center px-8 py-4 bg-white text-text-primary font-display font-semibold rounded-lg border border-border hover:border-primary-300 transition-all">
                        Schedule Consultation
                    </a>
                </div>

                <div class="flex flex-wrap justify-center gap-6 mt-10 text-text-secondary text-sm">
                    <span>✔ Rapid Deployment</span>
                    <span>✔ ERP Ready</span>
                    <span>✔ Enterprise Security</span>
                </div>
            </div>
        </div>
    </div>
</section>


<div id="footer"><?php include __DIR__ . '/includes/footer.php'; ?></div>


</body>
</html>
