<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>CRM & Sales Automation for Manufacturing | Dotone</title>

  <meta name="description"
        content="Dotone CRM & Sales Automation helps manufacturing companies manage leads, track sales pipelines, automate follow-ups, and integrate ERP & AI insights for higher conversions.">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/main.css">
    <script src="/js/header-nav.js" defer></script>
    <link rel="canonical" href="https://dotoneforbusiness.in/crm">
</head>

<body class="bg-background">

<!-- Header -->
<div id="header"><?php include __DIR__ . '/includes/header.php'; ?></div>

<!-- ================= HERO ================= -->


<!-- ================= WHY DOTONE CRM ================= -->

<section class="relative pt-32 pb-24 overflow-hidden">
  <div class="absolute inset-0 hero-tint" aria-hidden="true"></div>

  <div class="container-custom relative z-10 max-w-5xl mx-auto text-center space-y-6">
    <h1 class="text-5xl md:text-6xl font-display font-bold">
      CRM & Sales Automation for
      <span class="text-gradient">Manufacturing Businesses</span>
    </h1>

    <p class="text-xl text-text-secondary">
      Manage leads, track opportunities, forecast revenue,
      and align sales with production — all in one intelligent CRM.
    </p>

    <div class="flex justify-center gap-4 mt-8">
      <a href="/contact" class="btn-primary">Request Demo</a>
      <a href="#features" class="btn-secondary">Explore Features</a>
    </div>
  </div>
</section>

<section class="section-sm bg-surface" id="crm-metrics-section">
  <div class="container-custom">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-8">

      <div class="text-center space-y-2">
        <div class="metric" data-type="percent" data-target="32">0%</div>
        <div class="metric-label">Higher Lead Conversion</div>
      </div>

      <div class="text-center space-y-2">
        <div class="metric" data-type="percent" data-target="45">0%</div>
        <div class="metric-label">Sales Cycle Reduction</div>
      </div>

      <div class="text-center space-y-2">
        <div class="metric" data-type="currency" data-target="3.6">₹0 Cr</div>
        <div class="metric-label">Revenue Visibility</div>
      </div>

      <div class="text-center space-y-2">
        <div class="metric" data-type="percent" data-target="99.5">0%</div>
        <div class="metric-label">Follow-Up Accuracy</div>
      </div>

    </div>
  </div>
</section>
<script>
function animateMetric(el, duration = 1500) {
  const target = parseFloat(el.dataset.target);
  const type = el.dataset.type;
  const startTime = performance.now();

  function format(value) {
    switch (type) {
      case "plus":
        return `${Math.round(value)}+`;
      case "percent":
        return `${value.toFixed(Number.isInteger(target) ? 0 : 1)}%`;
      case "currency":
        return `₹${value.toFixed(1)} Cr`;
      default:
        return value;
    }
  }

  function update(currentTime) {
    const progress = Math.min((currentTime - startTime) / duration, 1);
    const value = progress * target;
    el.textContent = format(value);

    if (progress < 1) {
      requestAnimationFrame(update);
    } else {
      el.textContent = format(target);
    }
  }

  requestAnimationFrame(update);
}

// Observe CRM Metrics Section
const crmObserver = new IntersectionObserver(
  entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.querySelectorAll(".metric[data-target]").forEach(el => {
          if (!el.classList.contains("animated")) {
            animateMetric(el);
            el.classList.add("animated");
          }
        });
        crmObserver.disconnect();
      }
    });
  },
  { threshold: 0.4 }
);

crmObserver.observe(document.getElementById("crm-metrics-section"));
</script>
<section class="section bg-surface">
  <div class="container-custom">
    <div class="text-center space-y-4 mb-16">
      <h2 class="text-4xl md:text-5xl font-display font-bold">
        Calculate Your <span class="text-gradient">CRM & Sales ROI</span>
      </h2>
      <p class="text-xl text-text-secondary max-w-3xl mx-auto">
        Measure the financial impact of structured sales processes,
        automation, and real-time sales visibility
      </p>
    </div>

    <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-12 items-start">

      <!-- INPUT PANEL -->
      <div class="card p-8">
        <h3 class="text-2xl font-display font-semibold mb-6">
          Sales & CRM Inputs
        </h3>

        <div class="space-y-5">
          <div>
            <label class="block text-sm font-medium mb-1">
              Annual Revenue (₹)
            </label>
            <input type="number" id="crmRevenue" class="input" placeholder="e.g. 50000000">
          </div>

          <div>
            <label class="block text-sm font-medium mb-1">
              Annual Lead Leakage / Lost Revenue (₹)
            </label>
            <input type="number" id="leadLoss" class="input" placeholder="e.g. 12000000">
          </div>

          <div>
            <label class="block text-sm font-medium mb-1">
              Sales Team Cost / Year (₹)
            </label>
            <input type="number" id="salesCost" class="input" placeholder="e.g. 18000000">
          </div>

          <div>
            <label class="block text-sm font-medium mb-1">
              Manual Follow-up & Admin Cost (₹)
            </label>
            <input type="number" id="adminCost" class="input" placeholder="e.g. 6000000">
          </div>

          <button onclick="calculateCrmROI()" class="btn-primary w-full mt-4">
            Calculate ROI
          </button>
        </div>
      </div>

      <!-- RESULT PANEL -->
      <div class="card p-8 bg-gradient-to-br from-primary-50 to-white">
        <h3 class="text-2xl font-display font-semibold mb-6">
          Estimated Annual Benefits
        </h3>

        <div class="space-y-6 text-lg">
          <div class="flex justify-between">
            <span>Revenue Growth from Better Conversions</span>
            <span class="font-semibold text-primary-500" id="crmRevenueGain">₹0</span>
          </div>

          <div class="flex justify-between">
            <span>Recovered Lost Leads</span>
            <span class="font-semibold text-primary-500" id="leadRecovery">₹0</span>
          </div>

          <div class="flex justify-between">
            <span>Sales Team Productivity Gain</span>
            <span class="font-semibold text-primary-500" id="salesEfficiency">₹0</span>
          </div>

          <div class="flex justify-between">
            <span>Admin & Follow-up Automation Savings</span>
            <span class="font-semibold text-primary-500" id="adminSavings">₹0</span>
          </div>

          <hr>

          <div class="flex justify-between text-xl font-display font-bold">
            <span>Total Estimated ROI / Year</span>
            <span class="text-gradient" id="totalCrmROI">₹0</span>
          </div>
        </div>

        <p class="text-sm text-text-secondary mt-6">
          * ROI is calculated using conservative CRM & sales automation benchmarks.
          Actual results may vary based on team size, deal value, and sales maturity.
        </p>
      </div>

    </div>
  </div>
</section>
<script>
function calculateCrmROI() {
  const revenue = Number(document.getElementById("crmRevenue").value) || 0;
  const leadLoss = Number(document.getElementById("leadLoss").value) || 0;
  const salesCost = Number(document.getElementById("salesCost").value) || 0;
  const adminCost = Number(document.getElementById("adminCost").value) || 0;

  // Conservative CRM benchmarks
  const revenueGain = revenue * 0.08;        // 8% conversion improvement
  const leadRecovery = leadLoss * 0.4;       // 40% lead leakage reduction
  const salesEfficiency = salesCost * 0.25;  // 25% productivity gain
  const adminSavings = adminCost * 0.5;      // 50% automation savings

  const totalROI =
    revenueGain +
    leadRecovery +
    salesEfficiency +
    adminSavings;

  document.getElementById("crmRevenueGain").innerText =
    "₹" + revenueGain.toLocaleString();
  document.getElementById("leadRecovery").innerText =
    "₹" + leadRecovery.toLocaleString();
  document.getElementById("salesEfficiency").innerText =
    "₹" + salesEfficiency.toLocaleString();
  document.getElementById("adminSavings").innerText =
    "₹" + adminSavings.toLocaleString();
  document.getElementById("totalCrmROI").innerText =
    "₹" + totalROI.toLocaleString();
}
</script>
<!-- ================= IMPLEMENTATION ================= -->

<section class="section">
  <div class="container-custom">
    <div class="text-center space-y-4 mb-16 animate-fade-in-up">
      <h2 class="text-4xl md:text-5xl font-display font-bold">
        CRM & Sales Automation
        <span class="text-gradient">Implementation Plan</span>
      </h2>
      <p class="text-xl text-text-secondary max-w-3xl mx-auto">
        Deploy a structured CRM and sales automation system
        to improve conversions, visibility, and revenue predictability
      </p>
    </div>

    <div class="max-w-5xl mx-auto">
      <div class="relative">

        <!-- Vertical Line -->
        <div class="absolute left-8 top-0 bottom-0 w-0.5 bg-gradient-brand"></div>

        <div class="space-y-12">

          <!-- Step 1 -->
          <div class="relative flex items-start space-x-6 animate-fade-in-up">
            <div class="w-16 h-16 bg-gradient-brand rounded-full flex items-center justify-center text-white font-display font-bold text-xl shadow-lg z-10">
              1
            </div>
            <div class="flex-1 card p-6 hover-lift">
              <h3 class="text-xl font-display font-semibold mb-3">
                Sales Process & Funnel Assessment
              </h3>
              <p class="text-text-secondary mb-4">
                Analyze current sales workflows, lead sources,
                approval structures, and conversion gaps.
              </p>
              <ul class="text-sm text-text-secondary space-y-2">
                <li>✔ Lead source & channel mapping</li>
                <li>✔ Sales stages & deal lifecycle</li>
                <li>✔ Role & access definition</li>
              </ul>
            </div>
          </div>

          <!-- Step 2 -->
          <div class="relative flex items-start space-x-6 animate-fade-in-up animation-delay-200">
            <div class="w-16 h-16 bg-gradient-brand rounded-full flex items-center justify-center text-white font-display font-bold text-xl shadow-lg z-10">
              2
            </div>
            <div class="flex-1 card p-6 hover-lift">
              <h3 class="text-xl font-display font-semibold mb-3">
                CRM Configuration & Data Setup
              </h3>
              <p class="text-text-secondary mb-4">
                Configure CRM modules, pipelines,
                pricing rules, and approval workflows.
              </p>
              <ul class="text-sm text-text-secondary space-y-2">
                <li>✔ Lead, account & opportunity setup</li>
                <li>✔ Pipeline stages & probability logic</li>
                <li>✔ Quotation & order workflows</li>
              </ul>
            </div>
          </div>

          <!-- Step 3 -->
          <div class="relative flex items-start space-x-6 animate-fade-in-up animation-delay-300">
            <div class="w-16 h-16 bg-gradient-brand rounded-full flex items-center justify-center text-white font-display font-bold text-xl shadow-lg z-10">
              3
            </div>
            <div class="flex-1 card p-6 hover-lift">
              <h3 class="text-xl font-display font-semibold mb-3">
                Automation, Integration & Field Sales
              </h3>
              <p class="text-text-secondary mb-4">
                Enable automation, ERP integration,
                communication workflows, and field tracking.
              </p>
              <ul class="text-sm text-text-secondary space-y-2">
                <li>✔ Follow-up & reminder automation</li>
                <li>✔ WhatsApp, email & ERP integration</li>
                <li>✔ GPS-based field sales tracking</li>
              </ul>
            </div>
          </div>

          <!-- Step 4 -->
          <div class="relative flex items-start space-x-6 animate-fade-in-up animation-delay-400">
            <div class="w-16 h-16 bg-gradient-brand rounded-full flex items-center justify-center text-white font-display font-bold text-xl shadow-lg z-10">
              4
            </div>
            <div class="flex-1 card p-6 hover-lift">
              <h3 class="text-xl font-display font-semibold mb-3">
                Go-Live, Training & Optimization
              </h3>
              <p class="text-text-secondary mb-4">
                Launch CRM for sales teams and
                optimize performance using analytics.
              </p>
              <ul class="text-sm text-text-secondary space-y-2">
                <li>✔ Sales team onboarding & training</li>
                <li>✔ Funnel & conversion analysis</li>
                <li>✔ Revenue forecasting & optimization</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
<section class="section bg-surface">
    <div class="container-custom">
        <div class="text-center space-y-4 mb-16">
            <h2 class="text-4xl md:text-5xl font-display font-bold">
                Industries We <span class="text-gradient">Empower</span>
            </h2>
            <p class="text-xl text-text-secondary max-w-3xl mx-auto">
                Dotone’s AI-driven automation solutions are built to solve
                real-world challenges across diverse industries
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Automotive -->
            <div class="card p-8 hover-lift group">
                <div class="w-16 h-16 bg-gradient-brand rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M5 13l1-3h12l1 3M3 13h18M6 16h12"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-display font-semibold mb-3">Automotive</h3>
                <p class="text-text-secondary mb-6">
                    AI-based quality inspection, production monitoring,
                    and assembly verification for automotive plants.
                </p>
            </div>

            <!-- FMCG -->
            <div class="card p-8 hover-lift group">
                <div class="w-16 h-16 bg-gradient-brand rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 7h16M4 12h16M4 17h16"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-display font-semibold mb-3">FMCG & Packaging</h3>
                <p class="text-text-secondary mb-6">
                    Label inspection, inventory automation,
                    and real-time production analytics.
                </p>
            </div>

            <!-- Pharma -->
            <div class="card p-8 hover-lift group">
                <div class="w-16 h-16 bg-gradient-brand rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M10 3h4m-2 0v6m-4 6h8"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-display font-semibold mb-3">Pharmaceuticals</h3>
                <p class="text-text-secondary mb-6">
                    Compliance-ready quality inspection,
                    batch traceability, and audit automation.
                </p>
            </div>

            <!-- Electronics -->
            <div class="card p-8 hover-lift group">
                <div class="w-16 h-16 bg-gradient-brand rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 3h6v6H9zM4 15h16v6H4z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-display font-semibold mb-3">Electronics</h3>
                <p class="text-text-secondary mb-6">
                    PCB inspection, component verification,
                    and precision defect detection.
                </p>
            </div>

            <!-- Metal & Fabrication -->
            <div class="card p-8 hover-lift group">
                <div class="w-16 h-16 bg-gradient-brand rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6l8 6 8-6v12H4z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-display font-semibold mb-3">Metal & Fabrication</h3>
                <p class="text-text-secondary mb-6">
                    Surface defect detection, welding quality,
                    and productivity tracking.
                </p>
            </div>

            <!-- Textiles -->
            <div class="card p-8 hover-lift group">
                <div class="w-16 h-16 bg-gradient-brand rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M6 3l6 6 6-6v18H6z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-display font-semibold mb-3">Textiles & Apparel</h3>
                <p class="text-text-secondary mb-6">
                    Fabric defect inspection, roll tracking,
                    and production efficiency monitoring.
                </p>
            </div>

        </div>

        <div class="text-center mt-12">
            <a href="/manufacturing_solutions" class="btn-primary">
                Explore Industry Solutions
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                </svg>
            </a>
        </div>
    </div>
</section>



<section class="section bg-surface">
  <div class="container-custom max-w-6xl mx-auto">
    <div class="grid md:grid-cols-2 gap-12 items-center">

      <div>
        <h2 class="text-4xl font-display font-bold mb-6">
          Built for <span class="text-gradient">Manufacturing Sales</span>
        </h2>
        <ul class="space-y-3 text-text-secondary">
          <li>✔ Long and complex B2B sales cycles</li>
          <li>✔ BOM-based pricing & quotations</li>
          <li>✔ Dealer, distributor & channel sales</li>
          <li>✔ ERP, inventory & production linkage</li>
          <li>✔ Multi-location & field sales teams</li>
        </ul>
      </div>

      <div class="card p-8">
        <h3 class="font-semibold mb-3">Not a Generic CRM</h3>
        <p class="text-text-secondary">
          Dotone CRM is purpose-built for manufacturing,
          engineering, and industrial businesses —
          where pricing, approvals, production, and delivery
          matter as much as closing the deal.
        </p>
      </div>

    </div>
  </div>
</section>



<section id="features" class="section bg-surface">
  <div class="container-custom">
    <div class="text-center mb-16">
      <h2 class="text-4xl font-display font-bold">
        CRM & Sales <span class="text-gradient">Capabilities</span>
      </h2>
    </div>

    <div class="grid md:grid-cols-3 gap-8">

      <div class="card p-8">
        <h3 class="text-xl font-semibold mb-3">Lead & Opportunity Management</h3>
        <p class="text-text-secondary">
          Capture leads, qualify opportunities, track deal stages,
          and manage pipelines with full visibility.
        </p>
      </div>

      <div class="card p-8">
        <h3 class="text-xl font-semibold mb-3">Sales Pipeline & Forecasting</h3>
        <p class="text-text-secondary">
          Accurate revenue forecasts based on probability,
          historical performance, and AI insights.
        </p>
      </div>

      <div class="card p-8">
        <h3 class="text-xl font-semibold mb-3">Quotations & Pricing Control</h3>
        <p class="text-text-secondary">
          Generate quotations with approvals,
          discount rules, and margin protection.
        </p>
      </div>

      <div class="card p-8">
        <h3 class="text-xl font-semibold mb-3">Salesman & Field Tracking</h3>
        <p class="text-text-secondary">
          GPS-based field activity tracking,
          visit logs, and performance analytics.
        </p>
      </div>

      <div class="card p-8">
        <h3 class="text-xl font-semibold mb-3">Order → Invoice Flow</h3>
        <p class="text-text-secondary">
          Convert confirmed deals directly into sales orders,
          production plans, and invoices.
        </p>
      </div>

      <div class="card p-8">
        <h3 class="text-xl font-semibold mb-3">Sales Analytics & Dashboards</h3>
        <p class="text-text-secondary">
          Real-time dashboards for pipeline health,
          conversion rates, and team performance.
        </p>
      </div>

    </div>
  </div>
</section>




<!-- ================= FEATURES ================= -->
<section class="section bg-surface">
  <div class="container-custom">

    <!-- Header -->
    <div class="text-center space-y-4 mb-16">
      <h2 class="text-4xl md:text-5xl font-display font-bold">
        CRM & Sales <span class="text-gradient">Automation Features</span>
      </h2>
      <p class="text-xl text-text-secondary max-w-3xl mx-auto">
        End-to-end sales automation designed for manufacturing
        and B2B businesses — from lead capture to order execution.
      </p>
    </div>

    <!-- Features Grid -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">

      <!-- Lead Management -->
      <div class="card p-8 hover-lift">
        <h3 class="text-xl font-display font-semibold mb-3">
          Lead Management
        </h3>
        <p class="text-text-secondary leading-relaxed">
          Automatically capture and centralize leads from
          websites, WhatsApp, calls, distributors, and field sales
          into a single, structured pipeline.
        </p>
      </div>

      <!-- Sales Pipeline -->
      <div class="card p-8 hover-lift">
        <h3 class="text-xl font-display font-semibold mb-3">
          Sales Pipeline Tracking
        </h3>
        <p class="text-text-secondary leading-relaxed">
          Visual, stage-based pipelines with deal value,
          probability scoring, and expected closure dates
          for accurate forecasting.
        </p>
      </div>

      <!-- Quotation & Orders -->
      <div class="card p-8 hover-lift">
        <h3 class="text-xl font-display font-semibold mb-3">
          Quotation & Order Management
        </h3>
        <p class="text-text-secondary leading-relaxed">
          Generate quotations linked with BOMs, pricing rules,
          discount limits, and approval workflows —
          seamlessly converting deals into orders.
        </p>
      </div>

      <!-- Follow-Up Automation -->
      <div class="card p-8 hover-lift">
        <h3 class="text-xl font-display font-semibold mb-3">
          Follow-Up Automation
        </h3>
        <p class="text-text-secondary leading-relaxed">
          Automated reminders, emails, WhatsApp messages,
          and task assignments ensure no lead or opportunity
          is ever missed.
        </p>
      </div>

      <!-- Field Sales -->
      <div class="card p-8 hover-lift">
        <h3 class="text-xl font-display font-semibold mb-3">
          Field Sales Tracking
        </h3>
        <p class="text-text-secondary leading-relaxed">
          GPS-based salesman tracking, visit reports,
          customer activity logs, and performance analytics
          for complete field visibility.
        </p>
      </div>

      <!-- Analytics -->
      <div class="card p-8 hover-lift">
        <h3 class="text-xl font-display font-semibold mb-3">
          Sales Analytics & Reports
        </h3>
        <p class="text-text-secondary leading-relaxed">
          Conversion ratios, funnel leakage analysis,
          revenue forecasting, and team-wise performance
          dashboards for data-driven decisions.
        </p>
      </div>

    </div>
  </div>
</section>


<!-- ================= WHO NEEDS THIS ================= -->

<section class="section bg-surface">
  <div class="container-custom">
    <div class="text-center space-y-4 mb-16">
      <h2 class="text-4xl md:text-5xl font-display font-bold">
        Sales CRM <span class="text-gradient">Technical Resources</span>
      </h2>
      <p class="text-xl text-text-secondary max-w-3xl mx-auto">
        Architecture, automation workflows, and implementation guides for
        modern sales and revenue operations
      </p>
    </div>

    <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">

      <!-- Resource 1 -->
      <div class="card hover-lift">
        <div class="p-6">
          <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center mb-4">
            <svg class="w-6 h-6 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
            </svg>
          </div>
          <h3 class="text-lg font-display font-semibold mb-2">
            CRM Architecture & Data Model
          </h3>
          <p class="text-sm text-text-secondary mb-4">
            Reference architecture covering lead capture, pipelines,
            accounts, opportunities, automation, and analytics.
          </p>
          <a href="/documentation"
             class="inline-flex items-center text-sm font-medium text-primary-500 hover:text-primary-600">
            View Documentation
          </a>
        </div>
      </div>

      <!-- Resource 2 -->
      <div class="card hover-lift">
        <div class="p-6">
          <div class="w-12 h-12 bg-secondary-100 rounded-lg flex items-center justify-center mb-4">
            <svg class="w-6 h-6 text-secondary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2
                   3 .895 3 2-1.343 2-3 2m0-10V4m0 14v2"/>
            </svg>
          </div>
          <h3 class="text-lg font-display font-semibold mb-2">
            Sales Automation & Security
          </h3>
          <p class="text-sm text-text-secondary mb-4">
            Role-based access, data security, audit logs,
            and compliance for sales, partners, and field teams.
          </p>
          <a href="/security"
             class="inline-flex items-center text-sm font-medium text-primary-500 hover:text-primary-600">
            Read Whitepaper
          </a>
        </div>
      </div>

      <!-- Resource 3 -->
      <div class="card hover-lift">
        <div class="p-6">
          <div class="w-12 h-12 bg-success-100 rounded-lg flex items-center justify-center mb-4">
            <svg class="w-6 h-6 text-success-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5
                   c-1.746 0-3.332.477-4.5 1.253v13
                   C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253"/>
            </svg>
          </div>
          <h3 class="text-lg font-display font-semibold mb-2">
            CRM Implementation Playbook
          </h3>
          <p class="text-sm text-text-secondary mb-4">
            Step-by-step guide to deploy CRM, onboard teams,
            automate workflows, and scale revenue operations.
          </p>
          <a href="/guides"
             class="inline-flex items-center text-sm font-medium text-primary-500 hover:text-primary-600">
            View Guide
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="section">
  <div class="container-custom">
    <div class="relative rounded-3xl overflow-hidden cta-frame">

      <div class="relative z-10 px-8 py-16 md:px-16 md:py-24 text-center">
        <h2 class="text-4xl md:text-5xl font-display font-bold text-text-primary mb-6">
          Build a High-Performance Sales Engine
        </h2>
        <p class="text-xl text-text-secondary max-w-3xl mx-auto mb-8">
          Unify leads, pipelines, field sales, and analytics into
          one intelligent CRM system that drives predictable revenue growth.
        </p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <a href="/demo_center"
             class="inline-flex items-center justify-center px-8 py-4 bg-primary-500 text-white font-display font-semibold rounded-lg hover:bg-primary-600 transition-all shadow-lg">
            Watch CRM Demo
          </a>

          <a href="/contact"
             class="inline-flex items-center justify-center px-8 py-4 bg-white text-text-primary font-display font-semibold rounded-lg border border-border hover:border-primary-300 transition-all">
            Get CRM Roadmap
          </a>
        </div>

        <div class="flex flex-wrap justify-center gap-6 mt-10 text-text-secondary text-sm">
          <span>✔ Lead-to-Revenue Automation</span>
          <span>✔ AI-Powered Sales Insights</span>
          <span>✔ Scalable Sales CRM Platform</span>
        </div>
      </div>
    </div>
  </div>
</section>






<!-- Footer -->
<div id="footer"><?php include __DIR__ . '/includes/footer.php'; ?></div>


<script id="dhws-dataInjector" src="/public/dhws-data-injector.js"></script>
</body>
</html>
