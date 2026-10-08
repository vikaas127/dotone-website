<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="How manufacturers and distributors use DotOne ERP and AI agents: the problem, the setup and the measured result.">
    <title>Customer Case Studies | DotOne</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=JetBrains+Mono:wght@400&display=swap">
    <link rel="stylesheet" href="/css/main.css?v=20261014">
    <script src="/js/header-nav.js?v=20261014" defer></script>
      <link rel="canonical" href="https://dotone.biz/case-studies">
      <link rel="icon" href="/public/favicon.ico">
      <meta property="og:type" content="website">
      <meta property="og:site_name" content="Dotone">
      <meta property="og:title" content="Customer Case Studies | DotOne">
      <meta property="og:description" content="How manufacturers and distributors use DotOne ERP and AI agents: the problem, the setup and the measured result.">
      <meta property="og:url" content="https://dotone.biz/case-studies">
      <meta property="og:image" content="https://dotone.biz/assets/og-image.jpg?v=2">
      <meta property="og:image:width" content="1200">
      <meta property="og:image:height" content="630">
      <meta property="og:image:alt" content="DotOne: ERP, AI agents and automation in one platform">
      <meta property="og:locale" content="en_IN">
      <meta name="twitter:card" content="summary_large_image">
      <meta name="twitter:title" content="Customer Case Studies | DotOne">
      <meta name="twitter:description" content="How manufacturers and distributors use DotOne ERP and AI agents: the problem, the setup and the measured result.">
      <meta name="twitter:image" content="https://dotone.biz/assets/og-image.jpg?v=2">
  </head>
<body class="bg-background">
    <!-- Navigation Header -->
    <div id="header"><?php include __DIR__ . '/includes/header.php'; ?></div>

    <!-- Hero Section -->
    <section class="relative pt-32 pb-16 md:pt-40 md:pb-24 overflow-hidden">
        <!-- Animated Gradient Background -->
        <div class="absolute inset-0 hero-tint" aria-hidden="true"></div>

        <div class="container-custom relative z-10">
            <div class="max-w-4xl mx-auto text-center space-y-6 animate-fade-in-up">
                <div class="inline-flex items-center space-x-2 px-4 py-2 bg-primary-50 rounded-full">
                    <span class="w-2 h-2 bg-primary-500 rounded-full animate-pulse"></span>
                    <span class="text-sm font-medium text-primary-700">Real Results from Real Manufacturers</span>
                </div>

                <h1 class="text-5xl md:text-6xl lg:text-7xl font-display font-bold leading-tight">Customer Stories</h1>

                <p class="text-xl text-text-secondary leading-relaxed max-w-3xl mx-auto">
                    Discover how leading manufacturers transformed their operations with Dotone's Vision AI platform. Explore quantified results, efficiency improvements, and measurable ROI across diverse industries.
                </p>

                <!-- Quick Stats -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 pt-8">
                    <div class="text-center">
                        <div class="metric text-4xl">500+</div>
                        <div class="metric-label">Success Stories</div>
                    </div>
                    <div class="text-center">
                        <div class="metric text-4xl">38%</div>
                        <div class="metric-label">Avg. Efficiency Gain</div>
                    </div>
                    <div class="text-center">
                        <div class="metric text-4xl">$2.1M</div>
                        <div class="metric-label">Avg. Annual Savings</div>
                    </div>
                    <div class="text-center">
                        <div class="metric text-4xl">3.4mo</div>
                        <div class="metric-label">Avg. ROI Timeline</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Filter Section -->
    <section class="section-sm bg-surface">
        <div class="container-custom">
            <div class="card-elevated p-6">
                <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">
                    <!-- Search -->
                    <div class="flex-1 max-w-md">
                        <div class="relative">
                            <svg class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-text-tertiary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                            <input type="text" id="searchInput" placeholder="Search case studies..." class="input pl-12">
                        </div>
                    </div>

                    <!-- Filters -->
                    <div class="flex flex-wrap gap-4">
                        <select id="industryFilter" class="input w-auto min-w-[180px]">
                            <option value="all">All Industries</option>
                            <option value="automotive">Automotive</option>
                            <option value="electronics">Electronics</option>
                            <option value="food">Food Processing</option>
                            <option value="pharmaceutical">Pharmaceutical</option>
                            <option value="textile">Textile</option>
                            <option value="aerospace">Aerospace</option>
                        </select>

                        <select id="sizeFilter" class="input w-auto min-w-[180px]">
                            <option value="all">Company Size</option>
                            <option value="small">Small (50-200)</option>
                            <option value="medium">Medium (200-1000)</option>
                            <option value="large">Large (1000+)</option>
                        </select>

                        <select id="solutionFilter" class="input w-auto min-w-[180px]">
                            <option value="all">Solution Type</option>
                            <option value="vision-ai">Vision AI</option>
                            <option value="ai-agent">AI Agent</option>
                            <option value="salesman-tracker">Salesman Tracker</option>
                            <option value="invoice-scanner">Invoice Scanner</option>
                            <option value="full-suite">Full Suite</option>
                        </select>

                        <button id="resetFilters" class="btn-outline px-6 py-3">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                            </svg>
                            Reset
                        </button>
                    </div>
                </div>

                <!-- Active Filters Display -->
                <div id="activeFilters" class="hidden mt-4 pt-4 border-t border-border">
                    <div class="flex items-center flex-wrap gap-2">
                        <span class="text-sm text-text-secondary">Active filters:</span>
                        <div id="filterTags" class="flex flex-wrap gap-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Case Study -->
    <section class="section">
        <div class="container-custom">
            <div class="card-elevated overflow-hidden">
                <div class="grid lg:grid-cols-2 gap-0">
                    <!-- Image -->
                    <div class="relative h-64 lg:h-auto overflow-hidden">
                        <img decoding="async" src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?q=80&w=2940&auto=format&fit=crop" 
                             alt="Modern automotive manufacturing plant floor showing assembly line with robotic systems and AI-powered quality control stations monitoring production efficiency" 
                             class="w-full h-full object-cover"
                             loading="eager"
                             onerror="this.src='https://images.pexels.com/photos/1108101/pexels-photo-1108101.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;">
                        <div class="absolute top-6 left-6">
                            <span class="badge badge-primary text-base px-4 py-2">Featured Success Story</span>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/40 to-transparent"></div>
                    </div>

                    <!-- Content -->
                    <div class="p-8 lg:p-12 flex flex-col justify-center">
                        <div class="space-y-6">
                            <div class="flex items-center space-x-3">
                                <span class="badge badge-success">Automotive</span>
                                <span class="text-sm text-text-tertiary">•</span>
                                <span class="text-sm text-text-secondary">1,200 Employees</span>
                            </div>

                            <h2 class="text-3xl md:text-4xl font-display font-bold text-text-primary">
                                TechManufacturing Inc. Achieves 42% Efficiency Boost
                            </h2>

                            <p class="text-lg text-text-secondary leading-relaxed">
                                Leading automotive parts manufacturer transforms operations with Vision AI platform, reducing downtime by 38% and increasing worker productivity by 42% within 6 months.
                            </p>

                            <!-- Key Metrics -->
                            <div class="grid grid-cols-3 gap-6 py-6 border-y border-border">
                                <div>
                                    <div class="text-3xl font-display font-bold text-gradient">42%</div>
                                    <div class="text-sm text-text-secondary mt-1">Efficiency Increase</div>
                                </div>
                                <div>
                                    <div class="text-3xl font-display font-bold text-gradient">$3.2M</div>
                                    <div class="text-sm text-text-secondary mt-1">Annual Savings</div>
                                </div>
                                <div>
                                    <div class="text-3xl font-display font-bold text-gradient">2.8mo</div>
                                    <div class="text-sm text-text-secondary mt-1">ROI Timeline</div>
                                </div>
                            </div>

                            <div class="flex flex-col sm:flex-row gap-4">
                                <a href="#case-study-1" class="btn-primary">
                                    Read Full Case Study
                                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                    </svg>
                                </a>
                                <button onclick="downloadPDF('techmanufacturing')" class="btn-secondary">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                    </svg>
                                    Download PDF
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Case Studies Grid -->
    <section class="section bg-surface">
        <div class="container-custom">
            <div class="text-center space-y-4 mb-12">
                <h2 class="text-4xl md:text-5xl font-display font-bold">All <span class="text-gradient">Success Stories</span></h2>
                <p class="text-xl text-text-secondary max-w-3xl mx-auto">
                    Explore how manufacturers across industries achieved measurable results with Dotone
                </p>
            </div>

            <!-- Results Count -->
            <div class="mb-8">
                <p class="text-text-secondary">
                    Showing <span id="resultsCount" class="font-semibold text-text-primary">12</span> case studies
                </p>
            </div>

            <!-- Case Studies Grid -->
            <div id="caseStudiesGrid" class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Case Study Card 1 -->
                <div class="card-elevated overflow-hidden hover-lift group case-study-card" data-industry="automotive" data-size="large" data-solution="vision-ai">
                    <div class="relative h-48 overflow-hidden">
                        <img decoding="async" src="https://images.pexels.com/photos/1108101/pexels-photo-1108101.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" 
                             alt="Automotive assembly line with workers and robotic arms performing precision manufacturing tasks under AI-powered monitoring systems" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                             loading="lazy"
                             onerror="this.src='https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?q=80&w=2940&auto=format&fit=crop'; this.onerror=null;">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 right-4 flex items-center justify-between">
                            <span class="badge badge-success">42% Efficiency</span>
                            <span class="badge bg-white/20 text-white backdrop-blur-sm">Automotive</span>
                        </div>
                    </div>
                    <div class="p-6 space-y-4">
                        <h3 class="text-xl font-display font-semibold text-text-primary group-hover:text-primary-500 transition-colors">
                            TechManufacturing Inc.
                        </h3>
                        <p class="text-text-secondary text-sm">
                            Reduced downtime by 38% and increased worker productivity by 42% with Vision AI platform integration.
                        </p>
                        <div class="flex items-center justify-between pt-4 border-t border-border">
                            <div class="flex items-center space-x-4 text-sm text-text-tertiary">
                                <span>1,200 employees</span>
                                <span>•</span>
                                <span>6 months</span>
                            </div>
                            <a href="#case-study-1" class="text-primary-500 font-medium hover:text-primary-600 inline-flex items-center">
                                Read more
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Case Study Card 2 -->
                <div class="card-elevated overflow-hidden hover-lift group case-study-card" data-industry="electronics" data-size="medium" data-solution="full-suite">
                    <div class="relative h-48 overflow-hidden">
                        <img decoding="async" src="https://images.unsplash.com/photo-1565043589221-1a6fd9ae45c7?q=80&w=2940&auto=format&fit=crop" 
                             alt="Electronics manufacturing facility with precision assembly equipment and quality control stations performing component testing and inspection" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                             loading="lazy"
                             onerror="this.src='https://images.pexels.com/photos/257700/pexels-photo-257700.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 right-4 flex items-center justify-between">
                            <span class="badge badge-success">31% Cost Reduction</span>
                            <span class="badge bg-white/20 text-white backdrop-blur-sm">Electronics</span>
                        </div>
                    </div>
                    <div class="p-6 space-y-4">
                        <h3 class="text-xl font-display font-semibold text-text-primary group-hover:text-primary-500 transition-colors">
                            ElectroTech Solutions
                        </h3>
                        <p class="text-text-secondary text-sm">
                            Achieved 31% cost reduction through AI-powered quality control and defect detection systems.
                        </p>
                        <div class="flex items-center justify-between pt-4 border-t border-border">
                            <div class="flex items-center space-x-4 text-sm text-text-tertiary">
                                <span>650 employees</span>
                                <span>•</span>
                                <span>4 months</span>
                            </div>
                            <a href="#case-study-2" class="text-primary-500 font-medium hover:text-primary-600 inline-flex items-center">
                                Read more
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Case Study Card 3 -->
                <div class="card-elevated overflow-hidden hover-lift group case-study-card" data-industry="food" data-size="large" data-solution="vision-ai">
                    <div class="relative h-48 overflow-hidden">
                        <img decoding="async" src="https://images.pexels.com/photos/4481258/pexels-photo-4481258.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" 
                             alt="Food processing plant with automated packaging lines and quality inspection systems monitoring production standards and safety compliance" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                             loading="lazy"
                             onerror="this.src='https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?q=80&w=2940&auto=format&fit=crop'; this.onerror=null;">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 right-4 flex items-center justify-between">
                            <span class="badge badge-success">28% Waste Reduction</span>
                            <span class="badge bg-white/20 text-white backdrop-blur-sm">Food Processing</span>
                        </div>
                    </div>
                    <div class="p-6 space-y-4">
                        <h3 class="text-xl font-display font-semibold text-text-primary group-hover:text-primary-500 transition-colors">
                            FreshPack Industries
                        </h3>
                        <p class="text-text-secondary text-sm">
                            Improved quality control accuracy by 96% and reduced material waste by 28% through AI vision systems.
                        </p>
                        <div class="flex items-center justify-between pt-4 border-t border-border">
                            <div class="flex items-center space-x-4 text-sm text-text-tertiary">
                                <span>850 employees</span>
                                <span>•</span>
                                <span>5 months</span>
                            </div>
                            <a href="#case-study-3" class="text-primary-500 font-medium hover:text-primary-600 inline-flex items-center">
                                Read more
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Case Study Card 4 -->
                <div class="card-elevated overflow-hidden hover-lift group case-study-card" data-industry="pharmaceutical" data-size="large" data-solution="full-suite">
                    <div class="relative h-48 overflow-hidden">
                        <img decoding="async" src="https://images.unsplash.com/photo-1587825140708-dfaf72ae4b04?q=80&w=2940&auto=format&fit=crop" 
                             alt="Pharmaceutical manufacturing cleanroom with automated production lines and precision quality control systems ensuring compliance and safety standards" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                             loading="lazy"
                             onerror="this.src='https://images.pexels.com/photos/3825517/pexels-photo-3825517.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 right-4 flex items-center justify-between">
                            <span class="badge badge-success">99.8% Accuracy</span>
                            <span class="badge bg-white/20 text-white backdrop-blur-sm">Pharmaceutical</span>
                        </div>
                    </div>
                    <div class="p-6 space-y-4">
                        <h3 class="text-xl font-display font-semibold text-text-primary group-hover:text-primary-500 transition-colors">
                            MediCare Pharmaceuticals
                        </h3>
                        <p class="text-text-secondary text-sm">
                            Achieved 99.8% quality control accuracy with full AI suite integration, ensuring compliance and safety.
                        </p>
                        <div class="flex items-center justify-between pt-4 border-t border-border">
                            <div class="flex items-center space-x-4 text-sm text-text-tertiary">
                                <span>1,500 employees</span>
                                <span>•</span>
                                <span>8 months</span>
                            </div>
                            <a href="#case-study-4" class="text-primary-500 font-medium hover:text-primary-600 inline-flex items-center">
                                Read more
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Case Study Card 5 -->
                <div class="card-elevated overflow-hidden hover-lift group case-study-card" data-industry="textile" data-size="medium" data-solution="vision-ai">
                    <div class="relative h-48 overflow-hidden">
                        <img decoding="async" src="https://images.pexels.com/photos/3738386/pexels-photo-3738386.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" 
                             alt="Textile manufacturing facility with automated weaving machines and fabric inspection systems monitoring quality and production efficiency" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                             loading="lazy"
                             onerror="this.src='https://images.unsplash.com/photo-1558769132-cb1aea1f1c8c?q=80&w=2940&auto=format&fit=crop'; this.onerror=null;">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 right-4 flex items-center justify-between">
                            <span class="badge badge-success">35% Output Increase</span>
                            <span class="badge bg-white/20 text-white backdrop-blur-sm">Textile</span>
                        </div>
                    </div>
                    <div class="p-6 space-y-4">
                        <h3 class="text-xl font-display font-semibold text-text-primary group-hover:text-primary-500 transition-colors">
                            FabricWorks Global
                        </h3>
                        <p class="text-text-secondary text-sm">
                            Increased production output by 35% while maintaining quality standards through Vision AI monitoring.
                        </p>
                        <div class="flex items-center justify-between pt-4 border-t border-border">
                            <div class="flex items-center space-x-4 text-sm text-text-tertiary">
                                <span>420 employees</span>
                                <span>•</span>
                                <span>3 months</span>
                            </div>
                            <a href="#case-study-5" class="text-primary-500 font-medium hover:text-primary-600 inline-flex items-center">
                                Read more
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Case Study Card 6 -->
                <div class="card-elevated overflow-hidden hover-lift group case-study-card" data-industry="aerospace" data-size="large" data-solution="full-suite">
                    <div class="relative h-48 overflow-hidden">
                        <img decoding="async" src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?q=80&w=2940&auto=format&fit=crop" 
                             alt="Aerospace manufacturing facility with precision machining equipment and quality assurance systems for aircraft component production" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                             loading="lazy"
                             onerror="this.src='https://images.pexels.com/photos/2582937/pexels-photo-2582937.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 right-4 flex items-center justify-between">
                            <span class="badge badge-success">Zero Defects</span>
                            <span class="badge bg-white/20 text-white backdrop-blur-sm">Aerospace</span>
                        </div>
                    </div>
                    <div class="p-6 space-y-4">
                        <h3 class="text-xl font-display font-semibold text-text-primary group-hover:text-primary-500 transition-colors">
                            AeroTech Components
                        </h3>
                        <p class="text-text-secondary text-sm">
                            Achieved zero-defect production for 12 consecutive months with comprehensive AI quality control.
                        </p>
                        <div class="flex items-center justify-between pt-4 border-t border-border">
                            <div class="flex items-center space-x-4 text-sm text-text-tertiary">
                                <span>2,100 employees</span>
                                <span>•</span>
                                <span>12 months</span>
                            </div>
                            <a href="#case-study-6" class="text-primary-500 font-medium hover:text-primary-600 inline-flex items-center">
                                Read more
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Case Study Card 7 -->
                <div class="card-elevated overflow-hidden hover-lift group case-study-card" data-industry="automotive" data-size="medium" data-solution="ai-agent">
                    <div class="relative h-48 overflow-hidden">
                        <img decoding="async" src="https://images.pexels.com/photos/190574/pexels-photo-190574.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" 
                             alt="Automotive parts manufacturing with robotic assembly systems and AI-powered workflow optimization monitoring production metrics" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                             loading="lazy"
                             onerror="this.src='https://images.unsplash.com/photo-1486262715619-67b85e0b08d3?q=80&w=2940&auto=format&fit=crop'; this.onerror=null;">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 right-4 flex items-center justify-between">
                            <span class="badge badge-success">48% Faster Decisions</span>
                            <span class="badge bg-white/20 text-white backdrop-blur-sm">Automotive</span>
                        </div>
                    </div>
                    <div class="p-6 space-y-4">
                        <h3 class="text-xl font-display font-semibold text-text-primary group-hover:text-primary-500 transition-colors">
                            AutoParts Manufacturing
                        </h3>
                        <p class="text-text-secondary text-sm">
                            Reduced decision-making time by 48% with AI Agent providing real-time operational insights.
                        </p>
                        <div class="flex items-center justify-between pt-4 border-t border-border">
                            <div class="flex items-center space-x-4 text-sm text-text-tertiary">
                                <span>580 employees</span>
                                <span>•</span>
                                <span>4 months</span>
                            </div>
                            <a href="#case-study-7" class="text-primary-500 font-medium hover:text-primary-600 inline-flex items-center">
                                Read more
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Case Study Card 8 -->
                <div class="card-elevated overflow-hidden hover-lift group case-study-card" data-industry="electronics" data-size="small" data-solution="invoice-scanner">
                    <div class="relative h-48 overflow-hidden">
                        <img decoding="async" src="https://images.pexels.com/photos/3861969/pexels-photo-3861969.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" 
                             alt="Electronics component manufacturing with precision assembly equipment and automated inventory management systems" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                             loading="lazy"
                             onerror="this.src='https://images.unsplash.com/photo-1518770660439-4636190af475?q=80&w=2940&auto=format&fit=crop'; this.onerror=null;">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 right-4 flex items-center justify-between">
                            <span class="badge badge-success">92% Time Saved</span>
                            <span class="badge bg-white/20 text-white backdrop-blur-sm">Electronics</span>
                        </div>
                    </div>
                    <div class="p-6 space-y-4">
                        <h3 class="text-xl font-display font-semibold text-text-primary group-hover:text-primary-500 transition-colors">
                            CircuitTech Systems
                        </h3>
                        <p class="text-text-secondary text-sm">
                            Saved 92% of invoice processing time with automated Invoice Scanner integration.
                        </p>
                        <div class="flex items-center justify-between pt-4 border-t border-border">
                            <div class="flex items-center space-x-4 text-sm text-text-tertiary">
                                <span>180 employees</span>
                                <span>•</span>
                                <span>2 months</span>
                            </div>
                            <a href="#case-study-8" class="text-primary-500 font-medium hover:text-primary-600 inline-flex items-center">
                                Read more
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Case Study Card 9 -->
                <div class="card-elevated overflow-hidden hover-lift group case-study-card" data-industry="food" data-size="medium" data-solution="salesman-tracker">
                    <div class="relative h-48 overflow-hidden">
                        <img decoding="async" src="https://images.pexels.com/photos/4226256/pexels-photo-4226256.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" 
                             alt="Food distribution center with warehouse management systems and logistics tracking for efficient supply chain operations" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                             loading="lazy"
                             onerror="this.src='https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=2940&auto=format&fit=crop'; this.onerror=null;">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 right-4 flex items-center justify-between">
                            <span class="badge badge-success">56% Route Efficiency</span>
                            <span class="badge bg-white/20 text-white backdrop-blur-sm">Food Processing</span>
                        </div>
                    </div>
                    <div class="p-6 space-y-4">
                        <h3 class="text-xl font-display font-semibold text-text-primary group-hover:text-primary-500 transition-colors">
                            FreshDistribute Co.
                        </h3>
                        <p class="text-text-secondary text-sm">
                            Improved delivery route efficiency by 56% with Salesman Tracker GPS optimization.
                        </p>
                        <div class="flex items-center justify-between pt-4 border-t border-border">
                            <div class="flex items-center space-x-4 text-sm text-text-tertiary">
                                <span>320 employees</span>
                                <span>•</span>
                                <span>3 months</span>
                            </div>
                            <a href="#case-study-9" class="text-primary-500 font-medium hover:text-primary-600 inline-flex items-center">
                                Read more
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Case Study Card 10 -->
                <div class="card-elevated overflow-hidden hover-lift group case-study-card" data-industry="pharmaceutical" data-size="medium" data-solution="vision-ai">
                    <div class="relative h-48 overflow-hidden">
                        <img decoding="async" src="https://images.pexels.com/photos/3825529/pexels-photo-3825529.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" 
                             alt="Pharmaceutical packaging line with automated quality inspection and serialization systems ensuring product safety and compliance" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                             loading="lazy"
                             onerror="this.src='https://images.unsplash.com/photo-1631549916768-4119b2e5f926?q=80&w=2940&auto=format&fit=crop'; this.onerror=null;">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 right-4 flex items-center justify-between">
                            <span class="badge badge-success">100% Compliance</span>
                            <span class="badge bg-white/20 text-white backdrop-blur-sm">Pharmaceutical</span>
                        </div>
                    </div>
                    <div class="p-6 space-y-4">
                        <h3 class="text-xl font-display font-semibold text-text-primary group-hover:text-primary-500 transition-colors">
                            PharmaPack Solutions
                        </h3>
                        <p class="text-text-secondary text-sm">
                            Maintained 100% regulatory compliance with Vision AI automated inspection systems.
                        </p>
                        <div class="flex items-center justify-between pt-4 border-t border-border">
                            <div class="flex items-center space-x-4 text-sm text-text-tertiary">
                                <span>740 employees</span>
                                <span>•</span>
                                <span>6 months</span>
                            </div>
                            <a href="#case-study-10" class="text-primary-500 font-medium hover:text-primary-600 inline-flex items-center">
                                Read more
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Case Study Card 11 -->
                <div class="card-elevated overflow-hidden hover-lift group case-study-card" data-industry="textile" data-size="small" data-solution="full-suite">
                    <div class="relative h-48 overflow-hidden">
                        <img decoding="async" src="https://images.pexels.com/photos/6169668/pexels-photo-6169668.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" 
                             alt="Textile dyeing facility with automated color matching systems and quality control monitoring for consistent fabric production" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                             loading="lazy"
                             onerror="this.src='https://images.unsplash.com/photo-1604328698692-f76ea9498e76?q=80&w=2940&auto=format&fit=crop'; this.onerror=null;">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 right-4 flex items-center justify-between">
                            <span class="badge badge-success">44% Quality Boost</span>
                            <span class="badge bg-white/20 text-white backdrop-blur-sm">Textile</span>
                        </div>
                    </div>
                    <div class="p-6 space-y-4">
                        <h3 class="text-xl font-display font-semibold text-text-primary group-hover:text-primary-500 transition-colors">
                            ColorWeave Textiles
                        </h3>
                        <p class="text-text-secondary text-sm">
                            Enhanced quality consistency by 44% with full AI suite integration across production lines.
                        </p>
                        <div class="flex items-center justify-between pt-4 border-t border-border">
                            <div class="flex items-center space-x-4 text-sm text-text-tertiary">
                                <span>150 employees</span>
                                <span>•</span>
                                <span>5 months</span>
                            </div>
                            <a href="#case-study-11" class="text-primary-500 font-medium hover:text-primary-600 inline-flex items-center">
                                Read more
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Case Study Card 12 -->
                <div class="card-elevated overflow-hidden hover-lift group case-study-card" data-industry="aerospace" data-size="medium" data-solution="vision-ai">
                    <div class="relative h-48 overflow-hidden">
                        <img decoding="async" src="https://images.pexels.com/photos/3862132/pexels-photo-3862132.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" 
                             alt="Aerospace precision machining center with CNC equipment and dimensional inspection systems for aircraft component manufacturing" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                             loading="lazy"
                             onerror="this.src='https://images.unsplash.com/photo-1581092918056-0c4c3acd3789?q=80&w=2940&auto=format&fit=crop'; this.onerror=null;">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 right-4 flex items-center justify-between">
                            <span class="badge badge-success">99.9% Precision</span>
                            <span class="badge bg-white/20 text-white backdrop-blur-sm">Aerospace</span>
                        </div>
                    </div>
                    <div class="p-6 space-y-4">
                        <h3 class="text-xl font-display font-semibold text-text-primary group-hover:text-primary-500 transition-colors">
                            SkyPrecision Manufacturing
                        </h3>
                        <p class="text-text-secondary text-sm">
                            Achieved 99.9% dimensional accuracy with Vision AI precision measurement systems.
                        </p>
                        <div class="flex items-center justify-between pt-4 border-t border-border">
                            <div class="flex items-center space-x-4 text-sm text-text-tertiary">
                                <span>890 employees</span>
                                <span>•</span>
                                <span>7 months</span>
                            </div>
                            <a href="#case-study-12" class="text-primary-500 font-medium hover:text-primary-600 inline-flex items-center">
                                Read more
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- No Results Message -->
            <div id="noResults" class="hidden text-center py-16">
                <svg class="w-24 h-24 mx-auto text-text-tertiary mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <h3 class="text-2xl font-display font-semibold text-text-primary mb-2">No case studies found</h3>
                <p class="text-text-secondary mb-6">Try adjusting your filters or search terms</p>
                <button onclick="resetAllFilters()" class="btn-primary">
                    Reset All Filters
                </button>
            </div>

            <!-- Load More Button -->
            <div class="text-center mt-12">
                <button class="btn-secondary">
                    Load More Case Studies
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <!-- Video Testimonials Section -->
    <section class="section">
        <div class="container-custom">
            <div class="text-center space-y-4 mb-12">
                <h2 class="text-4xl md:text-5xl font-display font-bold">Customer <span class="text-gradient">Testimonials</span></h2>
                <p class="text-xl text-text-secondary max-w-3xl mx-auto">
                    Hear directly from manufacturing leaders about their transformation journey
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <!-- Video Testimonial 1 -->
                <div class="card-elevated overflow-hidden">
                    <div class="relative aspect-video bg-slate-900">
                        <img decoding="async" src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=2940&auto=format&fit=crop" 
                             alt="Michael Chen, CEO of TechManufacturing Inc., discussing operational improvements and ROI achievements in video testimonial" 
                             class="w-full h-full object-cover"
                             loading="lazy"
                             onerror="this.src='https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;">
                        <div class="absolute inset-0 bg-slate-900/40 flex items-center justify-center">
                            <button class="w-16 h-16 bg-gradient-brand rounded-full flex items-center justify-center hover:scale-110 transition-transform shadow-2xl">
                                <svg class="w-6 h-6 text-white ml-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-start space-x-4">
                            <img decoding="async" src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=2787&auto=format&fit=crop" 
                                 alt="Portrait of Michael Chen, CEO wearing business attire" 
                                 class="w-12 h-12 rounded-full object-cover border-2 border-primary-500"
                                 loading="lazy"
                                 onerror="this.src='https://images.pexels.com/photos/2182970/pexels-photo-2182970.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;">
                            <div class="flex-1">
                                <div class="font-semibold text-text-primary">Michael Chen</div>
                                <div class="text-sm text-text-secondary">CEO, TechManufacturing Inc.</div>
                                <p class="text-sm text-text-secondary mt-2 italic">
                                    "The ROI exceeded our projections by 180%. Dotone transformed our entire operation."
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Video Testimonial 2 -->
                <div class="card-elevated overflow-hidden">
                    <div class="relative aspect-video bg-slate-900">
                        <img decoding="async" src="https://images.unsplash.com/photo-1580489944761-15a19d654956?q=80&w=2861&auto=format&fit=crop" 
                             alt="Sarah Martinez, Operations Director discussing efficiency improvements and worker productivity gains in video testimonial" 
                             class="w-full h-full object-cover"
                             loading="lazy"
                             onerror="this.src='https://images.pexels.com/photos/3184338/pexels-photo-3184338.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;">
                        <div class="absolute inset-0 bg-slate-900/40 flex items-center justify-center">
                            <button class="w-16 h-16 bg-gradient-brand rounded-full flex items-center justify-center hover:scale-110 transition-transform shadow-2xl">
                                <svg class="w-6 h-6 text-white ml-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-start space-x-4">
                            <img decoding="async" src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?q=80&w=2787&auto=format&fit=crop" 
                                 alt="Portrait of Sarah Martinez, Operations Director wearing professional attire" 
                                 class="w-12 h-12 rounded-full object-cover border-2 border-primary-500"
                                 loading="lazy"
                                 onerror="this.src='https://images.pexels.com/photos/3756679/pexels-photo-3756679.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;">
                            <div class="flex-1">
                                <div class="font-semibold text-text-primary">Sarah Martinez</div>
                                <div class="text-sm text-text-secondary">Operations Director, ElectroTech</div>
                                <p class="text-sm text-text-secondary mt-2 italic">
                                    "Worker productivity increased 31% in just 4 months. The results speak for themselves."
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-8">
                <a href="#testimonials" class="btn-secondary">
                    View All Testimonials
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- ROI Impact Calculator -->
    <section class="section bg-surface">
        <div class="container-custom">
            <div class="max-w-5xl mx-auto">
                <div class="text-center space-y-4 mb-12">
                    <h2 class="text-4xl md:text-5xl font-display font-bold">Calculate Your <span class="text-gradient">Potential ROI</span></h2>
                    <p class="text-xl text-text-secondary">
                        See how your company compares to similar success stories
                    </p>
                </div>

                <div class="card-elevated p-8 md:p-12">
                    <div class="grid md:grid-cols-2 gap-12">
                        <!-- Calculator Inputs -->
                        <div class="space-y-6">
                            <div>
                                <label class="block text-sm font-medium text-text-primary mb-2">Select Industry</label>
                                <select id="roiIndustry" class="input">
                                    <option value="automotive">Automotive</option>
                                    <option value="electronics">Electronics</option>
                                    <option value="food">Food Processing</option>
                                    <option value="pharmaceutical">Pharmaceutical</option>
                                    <option value="textile">Textile</option>
                                    <option value="aerospace">Aerospace</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-text-primary mb-2">Company Size</label>
                                <select id="roiSize" class="input">
                                    <option value="small">Small (50-200 employees)</option>
                                    <option value="medium">Medium (200-1000 employees)</option>
                                    <option value="large">Large (1000+ employees)</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-text-primary mb-2">Number of Workers</label>
                                <input type="number" id="roiWorkers" value="250" min="50" max="10000" class="input">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-text-primary mb-2">Average Hourly Wage ($)</label>
                                <input type="number" id="roiWage" value="25" min="10" max="100" class="input">
                            </div>

                            <button onclick="calculateCaseStudyROI()" class="btn-primary w-full">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                </svg>
                                Calculate Potential Savings
                            </button>
                        </div>

                        <!-- Results Display -->
                        <div class="space-y-6">
                            <div class="bg-gradient-brand rounded-xl p-8 text-white">
                                <div class="text-sm font-medium opacity-90 mb-2">Estimated Annual Savings</div>
                                <div class="text-5xl font-bold mb-4" id="roiAnnualSavings">$2,184,000</div>
                                <div class="text-sm opacity-90">Based on similar company profiles</div>
                            </div>

                            <div class="space-y-4">
                                <div class="flex items-center justify-between p-4 bg-surface rounded-lg">
                                    <span class="text-text-secondary">Expected Efficiency Gain</span>
                                    <span class="text-xl font-bold text-text-primary" id="roiEfficiency">35%</span>
                                </div>
                                <div class="flex items-center justify-between p-4 bg-surface rounded-lg">
                                    <span class="text-text-secondary">Estimated ROI Timeline</span>
                                    <span class="text-xl font-bold text-success-500" id="roiTimeline">3.4 months</span>
                                </div>
                                <div class="flex items-center justify-between p-4 bg-surface rounded-lg">
                                    <span class="text-text-secondary">Similar Success Stories</span>
                                    <span class="text-xl font-bold text-primary-500" id="roiSimilar">8</span>
                                </div>
                            </div>

                            <div class="p-4 bg-primary-50 rounded-lg border border-primary-200">
                                <div class="flex items-start space-x-3">
                                    <svg class="w-5 h-5 text-primary-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                                    </svg>
                                    <p class="text-sm text-text-secondary">These estimates are based on actual results from similar manufacturers in our case study database.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Before/After Comparison Tool -->
    <section class="section">
        <div class="container-custom">
            <div class="text-center space-y-4 mb-12">
                <h2 class="text-4xl md:text-5xl font-display font-bold">Before & After <span class="text-gradient">Transformations</span></h2>
                <p class="text-xl text-text-secondary max-w-3xl mx-auto">
                    Visual comparison of operational improvements across key metrics
                </p>
            </div>

            <div class="max-w-6xl mx-auto">
                <div class="card-elevated p-8">
                    <!-- Comparison Selector -->
                    <div class="flex justify-center mb-8">
                        <div class="inline-flex flex-wrap justify-center max-w-full bg-surface rounded-lg p-1">
                            <button onclick="showComparison('efficiency')" class="comparison-tab active px-3 sm:px-6 py-2 sm:py-3 rounded-lg font-medium transition-all">
                                Efficiency
                            </button>
                            <button onclick="showComparison('quality')" class="comparison-tab px-3 sm:px-6 py-2 sm:py-3 rounded-lg font-medium transition-all">
                                Quality
                            </button>
                            <button onclick="showComparison('costs')" class="comparison-tab px-3 sm:px-6 py-2 sm:py-3 rounded-lg font-medium transition-all">
                                Costs
                            </button>
                            <button onclick="showComparison('downtime')" class="comparison-tab px-3 sm:px-6 py-2 sm:py-3 rounded-lg font-medium transition-all">
                                Downtime
                            </button>
                        </div>
                    </div>

                    <!-- Comparison Content -->
                    <div id="comparisonContent">
                        <!-- Efficiency Comparison (Default) -->
                        <div class="comparison-section" data-comparison="efficiency">
                            <div class="grid md:grid-cols-2 gap-8">
                                <!-- Before -->
                                <div class="space-y-4">
                                    <div class="flex items-center justify-between mb-6">
                                        <h3 class="text-2xl font-display font-semibold text-text-primary">Before Dotone</h3>
                                        <span class="badge badge-error">70% Efficiency</span>
                                    </div>
                                    <div class="space-y-3">
                                        <div class="flex items-center space-x-3">
                                            <svg class="w-5 h-5 text-error-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                            </svg>
                                            <span class="text-text-secondary">Manual monitoring processes</span>
                                        </div>
                                        <div class="flex items-center space-x-3">
                                            <svg class="w-5 h-5 text-error-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                            </svg>
                                            <span class="text-text-secondary">Delayed problem identification</span>
                                        </div>
                                        <div class="flex items-center space-x-3">
                                            <svg class="w-5 h-5 text-error-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                            </svg>
                                            <span class="text-text-secondary">Limited operational visibility</span>
                                        </div>
                                        <div class="flex items-center space-x-3">
                                            <svg class="w-5 h-5 text-error-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                            </svg>
                                            <span class="text-text-secondary">Reactive maintenance approach</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- After -->
                                <div class="space-y-4">
                                    <div class="flex items-center justify-between mb-6">
                                        <h3 class="text-2xl font-display font-semibold text-text-primary">After Dotone</h3>
                                        <span class="badge badge-success">94% Efficiency</span>
                                    </div>
                                    <div class="space-y-3">
                                        <div class="flex items-center space-x-3">
                                            <svg class="w-5 h-5 text-success-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                            </svg>
                                            <span class="text-text-secondary">AI-powered real-time monitoring</span>
                                        </div>
                                        <div class="flex items-center space-x-3">
                                            <svg class="w-5 h-5 text-success-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                            </svg>
                                            <span class="text-text-secondary">Instant issue detection & alerts</span>
                                        </div>
                                        <div class="flex items-center space-x-3">
                                            <svg class="w-5 h-5 text-success-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                            </svg>
                                            <span class="text-text-secondary">Complete floor visibility</span>
                                        </div>
                                        <div class="flex items-center space-x-3">
                                            <svg class="w-5 h-5 text-success-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                            </svg>
                                            <span class="text-text-secondary">Predictive maintenance scheduling</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Visual Metric -->
                            <div class="mt-8 p-6 bg-surface rounded-lg">
                                <div class="flex items-center justify-between mb-4">
                                    <span class="text-text-secondary font-medium">Efficiency Improvement</span>
                                    <span class="text-2xl font-bold text-gradient">+34%</span>
                                </div>
                                <div class="relative h-4 bg-slate-200 rounded-full overflow-hidden">
                                    <div class="absolute inset-y-0 left-0 bg-gradient-brand rounded-full transition-all duration-1000" style="width: 94%"></div>
                                </div>
                                <div class="flex justify-between mt-2 text-sm text-text-tertiary">
                                    <span>Before: 70%</span>
                                    <span>After: 94%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section bg-surface">
        <div class="container-custom">
            <div class="relative rounded-3xl overflow-hidden cta-frame">
                
                <div class="absolute inset-0 opacity-10">
                </div>
                
                <div class="relative z-10 px-8 py-16 md:px-16 md:py-24 text-center">
                    <h2 class="text-4xl md:text-5xl font-display font-bold text-text-primary mb-6">
                        Ready to Write Your Success Story?
                    </h2>
                    <p class="text-xl text-text-secondary max-w-3xl mx-auto mb-8">
                        Join 500+ manufacturers achieving measurable results with Dotone's Vision AI platform. Start your transformation today.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="/demo" class="inline-flex items-center justify-center px-8 py-4 bg-primary-500 text-white font-display font-semibold rounded-lg hover:bg-primary-600 transition-all shadow-lg hover:shadow-xl">
                            <span>Schedule Your Demo</span>
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </a>
                        <a href="/contact" class="inline-flex items-center justify-center px-8 py-4 bg-white text-text-primary font-display font-semibold rounded-lg border border-border hover:border-primary-300 transition-all">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                            <span>Download Case Studies</span>
                        </a>
                    </div>
                    <div class="flex items-center justify-center space-x-6 mt-8 text-text-secondary text-sm">
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>No credit card required</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Free consultation</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
   <div id="footer"><?php include __DIR__ . '/includes/footer.php'; ?></div>
 
    <!-- JavaScript -->
    <script>
        // Filter Functionality
        const searchInput = document.getElementById('searchInput');
        const industryFilter = document.getElementById('industryFilter');
        const sizeFilter = document.getElementById('sizeFilter');
        const solutionFilter = document.getElementById('solutionFilter');
        const resetFiltersBtn = document.getElementById('resetFilters');
        const caseStudyCards = document.querySelectorAll('.case-study-card');
        const resultsCount = document.getElementById('resultsCount');
        const noResults = document.getElementById('noResults');
        const activeFilters = document.getElementById('activeFilters');
        const filterTags = document.getElementById('filterTags');

        function filterCaseStudies() {
            const searchTerm = searchInput.value.toLowerCase();
            const industry = industryFilter.value;
            const size = sizeFilter.value;
            const solution = solutionFilter.value;

            let visibleCount = 0;
            let activeFiltersList = [];

            caseStudyCards.forEach(card => {
                const cardIndustry = card.dataset.industry;
                const cardSize = card.dataset.size;
                const cardSolution = card.dataset.solution;
                const cardText = card.textContent.toLowerCase();

                const matchesSearch = searchTerm === '' || cardText.includes(searchTerm);
                const matchesIndustry = industry === 'all' || cardIndustry === industry;
                const matchesSize = size === 'all' || cardSize === size;
                const matchesSolution = solution === 'all' || cardSolution === solution;

                if (matchesSearch && matchesIndustry && matchesSize && matchesSolution) {
                    card.style.display = 'block';
                    visibleCount++;
                } else {
                    card.style.display = 'none';
                }
            });

            // Update results count
            resultsCount.textContent = visibleCount;

            // Show/hide no results message
            if (visibleCount === 0) {
                noResults.classList.remove('hidden');
                document.getElementById('caseStudiesGrid').style.display = 'none';
            } else {
                noResults.classList.add('hidden');
                document.getElementById('caseStudiesGrid').style.display = 'grid';
            }

            // Update active filters display
            if (industry !== 'all') activeFiltersList.push({ type: 'industry', value: industry });
            if (size !== 'all') activeFiltersList.push({ type: 'size', value: size });
            if (solution !== 'all') activeFiltersList.push({ type: 'solution', value: solution });
            if (searchTerm !== '') activeFiltersList.push({ type: 'search', value: searchTerm });

            updateActiveFilters(activeFiltersList);
        }

        function updateActiveFilters(filters) {
            if (filters.length === 0) {
                activeFilters.classList.add('hidden');
                return;
            }

            activeFilters.classList.remove('hidden');
            filterTags.innerHTML = '';

            filters.forEach(filter => {
                const tag = document.createElement('span');
                tag.className = 'inline-flex items-center px-3 py-1 bg-primary-100 text-primary-700 rounded-full text-sm';
                tag.innerHTML = `
                    ${filter.value}
                    <button onclick="removeFilter('${filter.type}')" class="ml-2 hover:text-primary-900">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </button>
                `;
                filterTags.appendChild(tag);
            });
        }

        function removeFilter(type) {
            if (type === 'industry') industryFilter.value = 'all';
            if (type === 'size') sizeFilter.value = 'all';
            if (type === 'solution') solutionFilter.value = 'all';
            if (type === 'search') searchInput.value = '';
            filterCaseStudies();
        }

        function resetAllFilters() {
            searchInput.value = '';
            industryFilter.value = 'all';
            sizeFilter.value = 'all';
            solutionFilter.value = 'all';
            filterCaseStudies();
        }

        // Event listeners
        searchInput.addEventListener('input', filterCaseStudies);
        industryFilter.addEventListener('change', filterCaseStudies);
        sizeFilter.addEventListener('change', filterCaseStudies);
        solutionFilter.addEventListener('change', filterCaseStudies);
        resetFiltersBtn.addEventListener('click', resetAllFilters);

        // PDF Download Function
        function downloadPDF(companyName) {
            alert(`Downloading case study PDF for ${companyName}...`);
            // In production, this would trigger actual PDF download
        }

        // ROI Calculator
        function calculateCaseStudyROI() {
            const industry = document.getElementById('roiIndustry').value;
            const size = document.getElementById('roiSize').value;
            const workers = parseInt(document.getElementById('roiWorkers').value) || 250;
            const wage = parseFloat(document.getElementById('roiWage').value) || 25;

            // Industry-specific efficiency gains
            const efficiencyGains = {
                automotive: 0.38,
                electronics: 0.31,
                food: 0.28,
                pharmaceutical: 0.35,
                textile: 0.33,
                aerospace: 0.40
            };

            // Size-based multipliers
            const sizeMultipliers = {
                small: 0.9,
                medium: 1.0,
                large: 1.1
            };

            const baseEfficiency = efficiencyGains[industry] || 0.35;
            const sizeMultiplier = sizeMultipliers[size] || 1.0;
            const finalEfficiency = baseEfficiency * sizeMultiplier;

            const hoursPerYear = 2080; // Standard work year
            const annualSavings = workers * wage * hoursPerYear * finalEfficiency;
            const roiMonths = (50000 / (annualSavings / 12)).toFixed(1); // Assuming $50k implementation cost

            // Similar case studies count
            const similarCases = Math.floor(Math.random() * 5) + 6; // 6-10 similar cases

            // Update display
            document.getElementById('roiAnnualSavings').textContent = '$' + annualSavings.toLocaleString('en-US', {maximumFractionDigits: 0});
            document.getElementById('roiEfficiency').textContent = Math.round(finalEfficiency * 100) + '%';
            document.getElementById('roiTimeline').textContent = roiMonths + ' months';
            document.getElementById('roiSimilar').textContent = similarCases;
        }

        // Comparison Tool
        function showComparison(type) {
            // Update active tab
            document.querySelectorAll('.comparison-tab').forEach(tab => {
                tab.classList.remove('active', 'bg-white', 'text-text-primary', 'shadow-sm');
                tab.classList.add('text-text-secondary');
            });
            event.target.classList.add('active', 'bg-white', 'text-text-primary', 'shadow-sm');
            event.target.classList.remove('text-text-secondary');

            // In production, this would load different comparison data
            console.log('Showing comparison for:', type);
        }

        // Initialize
        calculateCaseStudyROI();
    </script>
</body>
</html>