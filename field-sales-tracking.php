<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Field Sales Tracking App | DotOne</title>
    <meta name="description" content="Track field sales teams with GPS check-ins, visit logs, attendance and expenses. Android app with a live web dashboard for managers.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,400;14..32,500;14..32,600;14..32,700&family=JetBrains+Mono:wght@400&display=swap">
    <link rel="stylesheet" href="/css/main.css?v=20261011">
    <script src="/js/header-nav.js?v=20261011" defer></script>
    <link rel="canonical" href="https://dotone.biz/field-sales-tracking">
    <link rel="icon" href="/public/favicon.ico">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Dotone">
    <meta property="og:title" content="Field Sales Tracking App | DotOne">
    <meta property="og:description" content="Track field sales teams with GPS check-ins, visit logs, attendance and expenses. Android app with a live web dashboard for managers.">
    <meta property="og:url" content="https://dotone.biz/field-sales-tracking">
    <meta property="og:image" content="https://dotone.biz/assets/og-image.jpg?v=2">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="DotOne: ERP, AI agents and automation in one platform">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Field Sales Tracking App | DotOne">
    <meta name="twitter:description" content="Track field sales teams with GPS check-ins, visit logs, attendance and expenses. Android app with a live web dashboard for managers.">
    <meta name="twitter:image" content="https://dotone.biz/assets/og-image.jpg?v=2">
</head>

<body class="bg-background">
<div id="header"><?php include __DIR__ . '/includes/header.php'; ?></div>

<!-- HERO -->
<section class="relative pt-32 pb-20 overflow-hidden">
    <div class="absolute inset-0 hero-tint" aria-hidden="true"></div>

    <div class="container-custom relative z-10">
        <div class="max-w-4xl mx-auto text-center space-y-6">
            <h1 class="text-5xl md:text-6xl font-display font-bold">Field Sales Tracking App</h1>
            <p class="text-xl text-text-secondary">
                Track, manage, and optimize your field sales force with real-time GPS tracking,
                visit monitoring, attendance automation, and performance analytics.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/demo" class="btn-primary">Watch Live Demo</a>
                <a href="/contact" class="btn-secondary">Schedule Consultation</a>
            </div>

            <!-- Trust -->
            <div class="flex flex-wrap justify-center gap-6 pt-8 text-sm text-text-secondary">
                <span>✔ Live GPS Tracking</span>
                <span>✔ Attendance with Geo-Fencing</span>
                <span>✔ Works on Any Android Device</span>
            </div>
        </div>
    </div>
</section>

<!-- METRICS -->
<section class="section-sm bg-surface">
    <div class="container-custom">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div>
                <div class="metric">500+</div>
                <div class="metric-label">Sales Teams Managed</div>
            </div>
            <div>
                <div class="metric">40%</div>
                <div class="metric-label">Productivity Increase</div>
            </div>
            <div>
                <div class="metric">25%</div>
                <div class="metric-label">Travel Cost Reduction</div>
            </div>
            <div>
                <div class="metric">99%</div>
                <div class="metric-label">Attendance Accuracy</div>
            </div>
        </div>
    </div>
</section>
<section class="section cta-light">
    <style>
        .store-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 8px 12px;
            border-radius: 12px;
            background: rgba(255, 255, 255, 0.12);
            transition: all 0.25s ease;
        }

        .store-btn:hover {
            background: rgba(255, 255, 255, 0.22);
            transform: translateY(-2px);
        }

        .store-btn img {
            height: 48px;
            width: auto;
        }
    </style>

    <div class="container-custom">
        <div class="grid md:grid-cols-2 gap-12 items-center">

            <!-- LEFT CONTENT -->
            <div class="space-y-6">
                <h2 class="text-4xl md:text-5xl font-display font-bold">
                    Sales Field Tracking <br>
                    <span class="text-text-secondary">Mobile App</span>
                </h2>

                <p class="text-xl text-text-secondary max-w-xl">
                    Empower your field sales team with a powerful mobile app for
                    GPS tracking, attendance, visit reporting, leads, and daily activity updates —
                    all in real time.
                </p>

                <ul class="space-y-3 text-text-secondary">
                    <li>✔ Live GPS & Route Tracking</li>
                    <li>✔ Geo-Fenced Attendance</li>
                    <li>✔ Visit Reports & Orders</li>
                    <li>✔ Offline Mode Support</li>
                    <li>✔ Works on Low-End Devices</li>
                </ul>

                <!-- STORE BUTTONS -->
                <div class="flex flex-wrap gap-4 pt-4">
                    <a href="https://play.google.com/store/apps/details?id=com.techdotbit.dotone" class="store-btn">
                        <img src="/assets/play-store.webp" alt="Download on Google Play" width="480" height="157" loading="lazy" decoding="async">
                    </a>

                    <a href="https://apps.apple.com/in/app/com-techdotbit-dotone/id545519333" class="store-btn">
                        <img src="/assets/app-store.webp" alt="Download on App Store" width="480" height="157" loading="lazy" decoding="async">
                    </a>
                </div>

                <p class="text-sm text-text-secondary">
                    * Available for Android & iOS. Admin controls via web dashboard.
                </p>
            </div>

            <!-- RIGHT VISUAL -->
           <div class="relative">
    <img loading="lazy" decoding="async" src="/assets/sales-tracking-app.webp"
         alt="Sales Field Tracking Mobile App" width="1200" height="800" fetchpriority="high"
         class="w-full max-w-lg md:max-w-xl lg:max-w-2xl mx-auto drop-shadow-2xl">
</div>


        </div>
    </div>
</section>
<!-- WHAT IS SALES FIELD TRACKING -->
<section class="section bg-surface">
    <div class="container-custom grid md:grid-cols-2 gap-12 items-center">
        <div>
            <h2 class="text-4xl font-display font-bold mb-6">
                What Is <span class="text-gradient">Sales Field Tracking</span>?
            </h2>
            <p class="text-text-secondary">
                Sales Field Tracking is a digital system to monitor field executives in real time,
                track daily visits, routes, attendance, leads, and sales activities using GPS,
                mobile apps, and analytics dashboards.
            </p>
        </div>

        <div class="card p-8">
            <ul class="space-y-3 text-text-secondary">
                <li>✔ Real-Time GPS Tracking</li>
                <li>✔ Automated Attendance & Check-ins</li>
                <li>✔ Visit & Route Monitoring</li>
                <li>✔ Sales Activity Reporting</li>
                <li>✔ Performance Analytics</li>
            </ul>
        </div>
    </div>
</section>

<!-- CORE FEATURES -->
<section class="section">
    <div class="container-custom">
        <h2 class="text-4xl font-display font-bold text-center mb-16">
            Sales Field <span class="text-gradient">Capabilities</span>
        </h2>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="card p-8 hover-lift">
                <h3 class="text-xl font-semibold mb-3">Live GPS Tracking</h3>
                <p class="text-text-secondary">
                    Track real-time location of sales executives with route history and idle time.
                </p>
            </div>

            <div class="card p-8 hover-lift">
                <h3 class="text-xl font-semibold mb-3">Attendance & Geo-Fencing</h3>
                <p class="text-text-secondary">
                    Location-based punch-in/out with geo-fenced offices, areas, or clients.
                </p>
            </div>

            <div class="card p-8 hover-lift">
                <h3 class="text-xl font-semibold mb-3">Visit & Lead Tracking</h3>
                <p class="text-text-secondary">
                    Track customer visits, leads generated, orders booked, and follow-ups.
                </p>
            </div>

            <div class="card p-8 hover-lift">
                <h3 class="text-xl font-semibold mb-3">Sales Reporting</h3>
                <p class="text-text-secondary">
                    Daily activity reports, beat plans, visit summaries, and conversion ratios.
                </p>
            </div>

            <div class="card p-8 hover-lift">
                <h3 class="text-xl font-semibold mb-3">Expense Tracking</h3>
                <p class="text-text-secondary">
                    Capture travel expenses, allowances, and reimbursements with approvals.
                </p>
            </div>

            <div class="card p-8 hover-lift">
                <h3 class="text-xl font-semibold mb-3">Manager Dashboard</h3>
                <p class="text-text-secondary">
                    Real-time visibility into team performance, attendance, and sales KPIs.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- SALES ROI CALCULATOR -->
<section class="section bg-surface">
    <div class="container-custom">
        <div class="text-center space-y-4 mb-16">
            <h2 class="text-4xl md:text-5xl font-display font-bold">
                Calculate Your <span class="text-gradient">Sales Field ROI</span>
            </h2>
            <p class="text-xl text-text-secondary max-w-3xl mx-auto">
                See how much revenue you can unlock by improving field sales productivity,
                visit discipline, and route efficiency.
            </p>
        </div>

        <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-12 items-start">

            <!-- INPUTS -->
            <div class="card p-8">
                <h3 class="text-2xl font-display font-semibold mb-6">
                    Sales Team Inputs
                </h3>

                <div class="space-y-5">
                    <div>
                        <label class="block text-sm font-medium mb-1">
                            Number of Field Sales Executives
                        </label>
                        <input type="number" id="salesCount" class="input" placeholder="e.g. 25">
                    </div>

                    <div>
                        <label class="block text-sm font-medium mb-1">
                            Avg Sales per Executive per Month (₹)
                        </label>
                        <input type="number" id="avgSales" class="input" placeholder="e.g. 150000">
                    </div>

                    <div>
                        <label class="block text-sm font-medium mb-1">
                            Avg Monthly Travel Expense per Executive (₹)
                        </label>
                        <input type="number" id="travelCost" class="input" placeholder="e.g. 8000">
                    </div>

                    <div>
                        <label class="block text-sm font-medium mb-1">
                            Working Days per Month
                        </label>
                        <input type="number" id="workingDays" class="input" placeholder="e.g. 26">
                    </div>

                    <button onclick="calculateSalesROI()" class="btn-primary w-full mt-4">
                        Calculate Sales ROI
                    </button>
                </div>
            </div>

            <!-- RESULTS -->
            <div class="card p-8 bg-gradient-to-br from-primary-50 to-white">
                <h3 class="text-2xl font-display font-semibold mb-6">
                    Estimated Annual Benefits
                </h3>

                <div class="space-y-6 text-lg">
                    <div class="flex justify-between">
                        <span>Productivity Revenue Gain</span>
                        <span class="font-semibold text-primary-500" id="productivityRevenue">₹0</span>
                    </div>

                    <div class="flex justify-between">
                        <span>Travel Cost Savings</span>
                        <span class="font-semibold text-primary-500" id="travelSavings">₹0</span>
                    </div>

                    <div class="flex justify-between">
                        <span>Attendance & Time Leakage Control</span>
                        <span class="font-semibold text-primary-500" id="attendanceSavings">₹0</span>
                    </div>

                    <hr>

                    <div class="flex justify-between text-xl font-display font-bold">
                        <span>Total Estimated ROI / Year</span>
                        <span class="text-gradient" id="totalSalesROI">₹0</span>
                    </div>
                </div>

                <p class="text-sm text-text-secondary mt-6">
                    * ROI is calculated using conservative field sales benchmarks.
                    Actual results may vary by industry and team discipline.
                </p>

                <div class="mt-6 text-center">
                    <a href="/contact" class="btn-secondary">
                        Get Detailed Sales ROI Report
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
<script>
function calculateSalesROI() {
    const salesCount = Number(document.getElementById("salesCount").value) || 0;
    const avgSales = Number(document.getElementById("avgSales").value) || 0;
    const travelCost = Number(document.getElementById("travelCost").value) || 0;
    const workingDays = Number(document.getElementById("workingDays").value) || 0;

    // Conservative industry assumptions
    const productivityBoost = 0.15;     // 15% more sales via better visits & follow-ups
    const travelReduction = 0.25;       // 25% route & idle reduction
    const attendanceLeakage = 0.1;      // 10% time misuse control

    const annualSales = salesCount * avgSales * 12;
    const productivityRevenue = annualSales * productivityBoost;

    const annualTravelCost = salesCount * travelCost * 12;
    const travelSavings = annualTravelCost * travelReduction;

    const attendanceSavings = annualSales * attendanceLeakage;

    const totalROI = productivityRevenue + travelSavings + attendanceSavings;

    document.getElementById("productivityRevenue").innerText =
        "₹" + productivityRevenue.toLocaleString();

    document.getElementById("travelSavings").innerText =
        "₹" + travelSavings.toLocaleString();

    document.getElementById("attendanceSavings").innerText =
        "₹" + attendanceSavings.toLocaleString();

    const totalEl = document.getElementById("totalSalesROI");
    totalEl.innerText = "₹" + totalROI.toLocaleString();
    totalEl.classList.add("animate-pulse");

    setTimeout(() => totalEl.classList.remove("animate-pulse"), 1000);
}
</script>

<!-- BUSINESS BENEFITS -->
<section class="section bg-surface">
    <div class="container-custom text-center">
        <h2 class="text-4xl font-display font-bold mb-16">
            Business <span class="text-gradient">Benefits</span>
        </h2>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="card p-6 hover-lift">
                <h3 class="text-2xl font-bold text-gradient">↑ 40%</h3>
                <p class="text-text-secondary">Sales Team Productivity</p>
            </div>
            <div class="card p-6 hover-lift">
                <h3 class="text-2xl font-bold text-gradient">↓ 30%</h3>
                <p class="text-text-secondary">Travel & Time Wastage</p>
            </div>
            <div class="card p-6 hover-lift">
                <h3 class="text-2xl font-bold text-gradient">Real-Time</h3>
                <p class="text-text-secondary">Sales Visibility</p>
            </div>
        </div>
    </div>
</section>

<!-- IMPLEMENTATION -->
<section class="section">
    <div class="container-custom">
        <div class="text-center space-y-4 mb-16">
            <h2 class="text-4xl md:text-5xl font-display font-bold">
                Sales Field Tracking <span class="text-gradient">Implementation Plan</span>
            </h2>
            <p class="text-xl text-text-secondary max-w-3xl mx-auto">
                Deploy real-time sales tracking with minimal disruption,
                fast onboarding, and measurable productivity gains
            </p>
        </div>

        <div class="max-w-5xl mx-auto">
            <div class="relative">
                <div class="absolute left-8 top-0 bottom-0 w-0.5 bg-gradient-brand"></div>

                <div class="space-y-12">

                    <!-- Step 1 -->
                    <div class="relative flex items-start space-x-6">
                        <div class="w-16 h-16 bg-gradient-brand rounded-full flex items-center justify-center text-white font-display font-bold text-xl shadow-lg z-10">1</div>
                        <div class="flex-1 card p-6 hover-lift">
                            <h3 class="text-xl font-display font-semibold mb-3">
                                Sales Process & Field Assessment
                            </h3>
                            <p class="text-text-secondary mb-4">
                                Understand current sales workflows, field movement,
                                visit patterns, and reporting gaps.
                            </p>
                            <ul class="text-sm text-text-secondary space-y-2">
                                <li>✔ Sales beat & territory mapping</li>
                                <li>✔ Daily visit & route analysis</li>
                                <li>✔ KPI & reporting requirement definition</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="relative flex items-start space-x-6">
                        <div class="w-16 h-16 bg-gradient-brand rounded-full flex items-center justify-center text-white font-display font-bold text-xl shadow-lg z-10">2</div>
                        <div class="flex-1 card p-6 hover-lift">
                            <h3 class="text-xl font-display font-semibold mb-3">
                                Mobile App Setup & Configuration
                            </h3>
                            <p class="text-text-secondary mb-4">
                                Configure the sales tracking mobile app with
                                attendance rules, routes, and visit workflows.
                            </p>
                            <ul class="text-sm text-text-secondary space-y-2">
                                <li>✔ GPS tracking & geo-fencing setup</li>
                                <li>✔ Attendance & check-in configuration</li>
                                <li>✔ Lead, visit & follow-up workflows</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="relative flex items-start space-x-6">
                        <div class="w-16 h-16 bg-gradient-brand rounded-full flex items-center justify-center text-white font-display font-bold text-xl shadow-lg z-10">3</div>
                        <div class="flex-1 card p-6 hover-lift">
                            <h3 class="text-xl font-display font-semibold mb-3">
                                System Integration & Pilot Rollout
                            </h3>
                            <p class="text-text-secondary mb-4">
                                Integrate sales tracking with CRM or ERP
                                and run a controlled pilot with the field team.
                            </p>
                            <ul class="text-sm text-text-secondary space-y-2">
                                <li>✔ CRM / ERP data sync</li>
                                <li>✔ Live location & activity tracking</li>
                                <li>✔ Manager dashboards & alerts</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="relative flex items-start space-x-6">
                        <div class="w-16 h-16 bg-gradient-brand rounded-full flex items-center justify-center text-white font-display font-bold text-xl shadow-lg z-10">4</div>
                        <div class="flex-1 card p-6 hover-lift">
                            <h3 class="text-xl font-display font-semibold mb-3">
                                Go-Live & Performance Optimization
                            </h3>
                            <p class="text-text-secondary mb-4">
                                Launch full-scale tracking with continuous
                                performance monitoring and optimization.
                            </p>
                            <ul class="text-sm text-text-secondary space-y-2">
                                <li>✔ Real-time sales & visit reporting</li>
                                <li>✔ Productivity & route optimization</li>
                                <li>✔ Ongoing support & feature enhancement</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


<!-- WHO SHOULD USE -->
<section class="section bg-surface">
    <div class="container-custom">
        <h2 class="text-4xl font-display font-bold text-center mb-16">
            Who Should <span class="text-gradient">Use It</span>?
        </h2>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="card p-6">✔ FMCG Sales Teams</div>
            <div class="card p-6">✔ Pharma & Medical Reps</div>
            <div class="card p-6">✔ Real Estate Sales</div>
            <div class="card p-6">✔ Distribution & Channel Sales</div>
            <div class="card p-6">✔ Insurance & BFSI Agents</div>
            <div class="card p-6">✔ Service Sales Teams</div>
        </div>
    </div>
</section>




<!-- FINAL CTA -->
<section class="section cta-light">
    <div class="container-custom text-center">
        <h2 class="text-4xl font-display font-bold mb-6">
            Take Control of Your Field Sales Team
        </h2>
        <p class="text-xl mb-8">
            Track, manage, and grow your sales force with Dotone Sales Field Tracking Software.
        </p>
        <a href="/contact" class="btn-primary bg-primary-500 text-white">
            Talk to Sales Tracking Expert
        </a>
    </div>
</section>

<div id="footer"><?php include __DIR__ . '/includes/footer.php'; ?></div>


</body>
</html>
