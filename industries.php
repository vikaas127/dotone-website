<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ERP workflows configured for plywood, tape, footwear, laminates, ACP, metal, FMCG, healthcare and service businesses.">
    <title>Industry ERP: Plywood, Footwear, Metal, FMCG | DotOne</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=JetBrains+Mono:wght@400&display=swap">
    <link rel="stylesheet" href="/css/main.css?v=20261016">
    <script src="/js/header-nav.js?v=20261016" defer></script>
      <link rel="canonical" href="https://dotone.biz/industries">
      <link rel="icon" href="/public/favicon.ico">
      <meta property="og:type" content="website">
      <meta property="og:site_name" content="Dotone">
      <meta property="og:title" content="Industry ERP: Plywood, Footwear, Metal, FMCG | DotOne">
      <meta property="og:description" content="ERP workflows configured for plywood, tape, footwear, laminates, ACP, metal, FMCG, healthcare and service businesses.">
      <meta property="og:url" content="https://dotone.biz/industries">
      <meta property="og:image" content="https://dotone.biz/assets/og-image.jpg?v=2">
      <meta property="og:image:width" content="1200">
      <meta property="og:image:height" content="630">
      <meta property="og:image:alt" content="DotOne: ERP, AI agents and automation in one platform">
      <meta property="og:locale" content="en_IN">
      <meta name="twitter:card" content="summary_large_image">
      <meta name="twitter:title" content="Industry ERP: Plywood, Footwear, Metal, FMCG | DotOne">
      <meta name="twitter:description" content="ERP workflows configured for plywood, tape, footwear, laminates, ACP, metal, FMCG, healthcare and service businesses.">
      <meta name="twitter:image" content="https://dotone.biz/assets/og-image.jpg?v=2">
  </head>
<body class="bg-background">
    <!-- Navigation Header -->
    <div id="header"><?php include __DIR__ . '/includes/header.php'; ?></div>
    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 md:pt-40 md:pb-32 overflow-hidden">
        <!-- Animated Gradient Background -->
        <div class="absolute inset-0 hero-tint" aria-hidden="true"></div>

        <div class="container-custom relative z-10">
            <div class="max-w-4xl mx-auto text-center space-y-8 animate-fade-in-up">
                <div class="inline-flex items-center space-x-2 px-4 py-2 bg-primary-50 rounded-full">
                    <span class="w-2 h-2 bg-primary-500 rounded-full animate-pulse"></span>
                    <span class="text-sm font-medium text-primary-700">Industry-Specific AI Solutions</span>
                </div>

                <h1 class="text-5xl md:text-6xl lg:text-7xl font-display font-bold leading-tight">ERP and AI Built for Your Industry</h1>

                <p class="text-xl text-text-secondary leading-relaxed max-w-3xl mx-auto">
                    Discover how Dotone's AI-powered platform transforms operations across automotive, electronics, food processing, and pharmaceutical manufacturing with proven ROI and efficiency gains.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#roi-calculator" class="btn-primary group">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                        </svg>
                        <span>Calculate Your ROI</span>
                    </a>
                    <a href="#industry-solutions" class="btn-secondary group">
                        <span>Explore Solutions</span>
                        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Industry Solutions Grid -->
    <section id="industry-solutions" class="section bg-surface">
        <div class="container-custom">
            <div class="text-center space-y-4 mb-16">
                <h2 class="text-4xl md:text-5xl font-display font-bold">Industry-Specific <span class="text-gradient">Solutions</span></h2>
                <p class="text-xl text-text-secondary max-w-3xl mx-auto">
                    Proven AI applications designed for your manufacturing vertical with measurable results
                </p>
            </div>

            <!-- Industry Tabs -->
            <div class="flex flex-wrap justify-center gap-4 mb-12">
                <button onclick="switchIndustry('automotive')" id="tab-automotive" class="industry-tab active px-6 py-3 font-display font-semibold rounded-lg transition-all">
                    Automotive
                </button>
                <button onclick="switchIndustry('electronics')" id="tab-electronics" class="industry-tab px-6 py-3 font-display font-semibold rounded-lg transition-all">
                    Electronics
                </button>
                <button onclick="switchIndustry('food')" id="tab-food" class="industry-tab px-6 py-3 font-display font-semibold rounded-lg transition-all">
                    Food Processing
                </button>
                <button onclick="switchIndustry('pharma')" id="tab-pharma" class="industry-tab px-6 py-3 font-display font-semibold rounded-lg transition-all">
                    Pharmaceutical
                </button>
            </div>

            <!-- Automotive Industry Content -->
            <div id="industry-automotive" class="industry-content">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="space-y-6">
                        <div class="inline-flex items-center space-x-2 px-4 py-2 bg-primary-50 rounded-full">
                            <svg class="w-5 h-5 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                            <span class="text-sm font-medium text-primary-700">Automotive Manufacturing</span>
                        </div>

                        <h3 class="text-3xl md:text-4xl font-display font-bold">Assembly Line Intelligence</h3>
                        
                        <p class="text-lg text-text-secondary leading-relaxed">
                            Transform your automotive assembly operations with AI-powered vision systems that monitor worker efficiency, detect quality issues in real-time, and optimize production flow across multiple stations.
                        </p>

                        <div class="space-y-4">
                            <div class="flex items-start space-x-3">
                                <div class="w-6 h-6 bg-success-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                    <svg class="w-4 h-4 text-success-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-semibold text-text-primary">Real-time Quality Control</div>
                                    <div class="text-text-secondary">AI vision detects defects at each assembly stage with 99.2% accuracy</div>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3">
                                <div class="w-6 h-6 bg-success-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                    <svg class="w-4 h-4 text-success-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-semibold text-text-primary">Worker Efficiency Tracking</div>
                                    <div class="text-text-secondary">Monitor assembly time per station and identify bottlenecks instantly</div>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3">
                                <div class="w-6 h-6 bg-success-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                    <svg class="w-4 h-4 text-success-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-semibold text-text-primary">Safety Compliance Monitoring</div>
                                    <div class="text-text-secondary">Automatic detection of safety violations and PPE compliance</div>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3">
                                <div class="w-6 h-6 bg-success-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                    <svg class="w-4 h-4 text-success-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-semibold text-text-primary">Predictive Maintenance</div>
                                    <div class="text-text-secondary">AI predicts equipment failures before they impact production</div>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-3 gap-4 pt-6">
                            <div class="text-center p-4 bg-white rounded-lg border border-border">
                                <div class="text-3xl font-bold text-gradient">42%</div>
                                <div class="text-sm text-text-secondary mt-1">Efficiency Gain</div>
                            </div>
                            <div class="text-center p-4 bg-white rounded-lg border border-border">
                                <div class="text-3xl font-bold text-gradient">38%</div>
                                <div class="text-sm text-text-secondary mt-1">Downtime Reduction</div>
                            </div>
                            <div class="text-center p-4 bg-white rounded-lg border border-border">
                                <div class="text-3xl font-bold text-gradient">$2.8M</div>
                                <div class="text-sm text-text-secondary mt-1">Annual Savings</div>
                            </div>
                        </div>

                        <div class="flex flex-col sm:flex-row gap-4 pt-4">
                            <a href="/case-studies" class="btn-primary">
                                View Case Study
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                </svg>
                            </a>
                            <a href="/demo" class="btn-secondary">
                                Request Demo
                            </a>
                        </div>
                    </div>

                    <div class="relative">
                        <div class="relative rounded-2xl overflow-hidden shadow-2xl border border-border">
                            <img decoding="async" src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?q=80&w=2940&auto=format&fit=crop" 
                                 alt="Modern automotive assembly line with robotic arms and workers collaborating on vehicle production with AI-powered quality control systems monitoring each station" 
                                 class="w-full h-auto object-cover"
                                 loading="lazy"
                                 onerror="this.src='https://images.pexels.com/photos/1108101/pexels-photo-1108101.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;">
                        </div>

                        <!-- Floating Stats Card -->
                        <div class="absolute -bottom-6 -left-6 glass p-6 rounded-xl shadow-lg max-w-xs">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-gradient-brand rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold text-gradient">99.2%</div>
                                    <div class="text-sm text-text-secondary">Quality Detection Rate</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Electronics Industry Content -->
            <div id="industry-electronics" class="industry-content hidden">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="space-y-6">
                        <div class="inline-flex items-center space-x-2 px-4 py-2 bg-secondary-50 rounded-full">
                            <svg class="w-5 h-5 text-secondary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>
                            </svg>
                            <span class="text-sm font-medium text-secondary-700">Electronics Manufacturing</span>
                        </div>

                        <h3 class="text-3xl md:text-4xl font-display font-bold">Precision Component Inspection</h3>
                        
                        <p class="text-lg text-text-secondary leading-relaxed">
                            Achieve microscopic-level quality control with AI vision systems that detect defects invisible to the human eye, ensuring zero-defect production in PCB assembly, component placement, and final product testing.
                        </p>

                        <div class="space-y-4">
                            <div class="flex items-start space-x-3">
                                <div class="w-6 h-6 bg-success-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                    <svg class="w-4 h-4 text-success-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-semibold text-text-primary">Microscopic Defect Detection</div>
                                    <div class="text-text-secondary">Identify solder defects, component misalignment, and micro-cracks with 99.7% accuracy</div>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3">
                                <div class="w-6 h-6 bg-success-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                    <svg class="w-4 h-4 text-success-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-semibold text-text-primary">Component Traceability</div>
                                    <div class="text-text-secondary">Track every component from placement to final assembly with AI-powered vision</div>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3">
                                <div class="w-6 h-6 bg-success-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                    <svg class="w-4 h-4 text-success-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-semibold text-text-primary">Automated Testing Integration</div>
                                    <div class="text-text-secondary">Seamless integration with AOI and functional testing equipment</div>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3">
                                <div class="w-6 h-6 bg-success-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                    <svg class="w-4 h-4 text-success-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-semibold text-text-primary">Production Yield Optimization</div>
                                    <div class="text-text-secondary">AI analytics identify patterns to improve first-pass yield rates</div>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-3 gap-4 pt-6">
                            <div class="text-center p-4 bg-white rounded-lg border border-border">
                                <div class="text-3xl font-bold text-gradient">31%</div>
                                <div class="text-sm text-text-secondary mt-1">Cost Reduction</div>
                            </div>
                            <div class="text-center p-4 bg-white rounded-lg border border-border">
                                <div class="text-3xl font-bold text-gradient">96%</div>
                                <div class="text-sm text-text-secondary mt-1">Quality Accuracy</div>
                            </div>
                            <div class="text-center p-4 bg-white rounded-lg border border-border">
                                <div class="text-3xl font-bold text-gradient">$1.9M</div>
                                <div class="text-sm text-text-secondary mt-1">Annual Savings</div>
                            </div>
                        </div>

                        <div class="flex flex-col sm:flex-row gap-4 pt-4">
                            <a href="/case-studies" class="btn-primary">
                                View Case Study
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                </svg>
                            </a>
                            <a href="/demo" class="btn-secondary">
                                Request Demo
                            </a>
                        </div>
                    </div>

                    <div class="relative">
                        <div class="relative rounded-2xl overflow-hidden shadow-2xl border border-border">
                            <img decoding="async" src="https://images.unsplash.com/photo-1565043589221-1a6fd9ae45c7?q=80&w=2940&auto=format&fit=crop" 
                                 alt="Electronics manufacturing facility showing PCB assembly line with precision component placement machines and AI-powered quality inspection systems examining circuit boards" 
                                 class="w-full h-auto object-cover"
                                 loading="lazy"
                                 onerror="this.src='https://images.pexels.com/photos/257700/pexels-photo-257700.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;">
                        </div>

                        <!-- Floating Stats Card -->
                        <div class="absolute -bottom-6 -left-6 glass p-6 rounded-xl shadow-lg max-w-xs">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-gradient-brand rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold text-gradient">99.7%</div>
                                    <div class="text-sm text-text-secondary">Defect Detection Rate</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Food Processing Industry Content -->
            <div id="industry-food" class="industry-content hidden">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="space-y-6">
                        <div class="inline-flex items-center space-x-2 px-4 py-2 bg-success-50 rounded-full">
                            <svg class="w-5 h-5 text-success-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span class="text-sm font-medium text-success-700">Food Processing</span>
                        </div>

                        <h3 class="text-3xl md:text-4xl font-display font-bold">Hygiene & Quality Assurance</h3>
                        
                        <p class="text-lg text-text-secondary leading-relaxed">
                            Ensure food safety compliance and quality standards with AI vision systems that monitor hygiene practices, detect contamination, and verify packaging integrity across your entire production line.
                        </p>

                        <div class="space-y-4">
                            <div class="flex items-start space-x-3">
                                <div class="w-6 h-6 bg-success-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                    <svg class="w-4 h-4 text-success-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-semibold text-text-primary">Hygiene Compliance Monitoring</div>
                                    <div class="text-text-secondary">Real-time detection of hygiene violations and PPE compliance in food handling areas</div>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3">
                                <div class="w-6 h-6 bg-success-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                    <svg class="w-4 h-4 text-success-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-semibold text-text-primary">Contamination Detection</div>
                                    <div class="text-text-secondary">AI vision identifies foreign objects and quality defects before packaging</div>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3">
                                <div class="w-6 h-6 bg-success-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                    <svg class="w-4 h-4 text-success-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-semibold text-text-primary">Packaging Integrity Verification</div>
                                    <div class="text-text-secondary">Automated inspection of seals, labels, and package completeness</div>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3">
                                <div class="w-6 h-6 bg-success-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                    <svg class="w-4 h-4 text-success-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-semibold text-text-primary">Waste Reduction Analytics</div>
                                    <div class="text-text-secondary">Track and minimize material waste throughout the production process</div>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-3 gap-4 pt-6">
                            <div class="text-center p-4 bg-white rounded-lg border border-border">
                                <div class="text-3xl font-bold text-gradient">28%</div>
                                <div class="text-sm text-text-secondary mt-1">Waste Reduction</div>
                            </div>
                            <div class="text-center p-4 bg-white rounded-lg border border-border">
                                <div class="text-3xl font-bold text-gradient">96%</div>
                                <div class="text-sm text-text-secondary mt-1">Quality Accuracy</div>
                            </div>
                            <div class="text-center p-4 bg-white rounded-lg border border-border">
                                <div class="text-3xl font-bold text-gradient">$1.6M</div>
                                <div class="text-sm text-text-secondary mt-1">Annual Savings</div>
                            </div>
                        </div>

                        <div class="flex flex-col sm:flex-row gap-4 pt-4">
                            <a href="/case-studies" class="btn-primary">
                                View Case Study
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                </svg>
                            </a>
                            <a href="/demo" class="btn-secondary">
                                Request Demo
                            </a>
                        </div>
                    </div>

                    <div class="relative">
                        <div class="relative rounded-2xl overflow-hidden shadow-2xl border border-border">
                            <img decoding="async" src="https://images.pexels.com/photos/4393021/pexels-photo-4393021.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" 
                                 alt="Food processing facility with automated packaging lines, workers in hygiene gear, and AI-powered quality inspection systems monitoring product quality and safety compliance" 
                                 class="w-full h-auto object-cover"
                                 loading="lazy"
                                 onerror="this.src='https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?q=80&w=2940&auto=format&fit=crop'; this.onerror=null;">
                        </div>

                        <!-- Floating Stats Card -->
                        <div class="absolute -bottom-6 -left-6 glass p-6 rounded-xl shadow-lg max-w-xs">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-gradient-brand rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold text-gradient">100%</div>
                                    <div class="text-sm text-text-secondary">Safety Compliance</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pharmaceutical Industry Content -->
            <div id="industry-pharma" class="industry-content hidden">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="space-y-6">
                        <div class="inline-flex items-center space-x-2 px-4 py-2 bg-secondary-50 rounded-full">
                            <svg class="w-5 h-5 text-secondary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                            <span class="text-sm font-medium text-secondary-700">Pharmaceutical Manufacturing</span>
                        </div>

                        <h3 class="text-3xl md:text-4xl font-display font-bold">GMP Compliance & Validation</h3>
                        
                        <p class="text-lg text-text-secondary leading-relaxed">
                            Meet stringent pharmaceutical manufacturing standards with AI-powered systems that ensure GMP compliance, validate production processes, and maintain complete traceability from raw materials to finished products.
                        </p>

                        <div class="space-y-4">
                            <div class="flex items-start space-x-3">
                                <div class="w-6 h-6 bg-success-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                    <svg class="w-4 h-4 text-success-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-semibold text-text-primary">GMP Compliance Monitoring</div>
                                    <div class="text-text-secondary">Continuous verification of cleanroom protocols and manufacturing procedures</div>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3">
                                <div class="w-6 h-6 bg-success-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                    <svg class="w-4 h-4 text-success-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-semibold text-text-primary">Batch Traceability</div>
                                    <div class="text-text-secondary">Complete tracking from raw materials through production to distribution</div>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3">
                                <div class="w-6 h-6 bg-success-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                    <svg class="w-4 h-4 text-success-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-semibold text-text-primary">Quality Control Validation</div>
                                    <div class="text-text-secondary">AI-powered inspection of tablets, capsules, and packaging for defects</div>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3">
                                <div class="w-6 h-6 bg-success-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                    <svg class="w-4 h-4 text-success-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-semibold text-text-primary">Regulatory Documentation</div>
                                    <div class="text-text-secondary">Automated generation of compliance reports and audit trails</div>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-3 gap-4 pt-6">
                            <div class="text-center p-4 bg-white rounded-lg border border-border">
                                <div class="text-3xl font-bold text-gradient">100%</div>
                                <div class="text-sm text-text-secondary mt-1">GMP Compliance</div>
                            </div>
                            <div class="text-center p-4 bg-white rounded-lg border border-border">
                                <div class="text-3xl font-bold text-gradient">99.9%</div>
                                <div class="text-sm text-text-secondary mt-1">Traceability</div>
                            </div>
                            <div class="text-center p-4 bg-white rounded-lg border border-border">
                                <div class="text-3xl font-bold text-gradient">$2.2M</div>
                                <div class="text-sm text-text-secondary mt-1">Annual Savings</div>
                            </div>
                        </div>

                        <div class="flex flex-col sm:flex-row gap-4 pt-4">
                            <a href="/case-studies" class="btn-primary">
                                View Case Study
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                </svg>
                            </a>
                            <a href="/demo" class="btn-secondary">
                                Request Demo
                            </a>
                        </div>
                    </div>

                    <div class="relative">
                        <div class="relative rounded-2xl overflow-hidden shadow-2xl border border-border">
                            <img decoding="async" src="https://images.pexels.com/photos/3825517/pexels-photo-3825517.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" 
                                 alt="Pharmaceutical manufacturing cleanroom with workers in full protective gear operating tablet production equipment with AI-powered quality control and GMP compliance monitoring systems" 
                                 class="w-full h-auto object-cover"
                                 loading="lazy"
                                 onerror="this.src='https://images.unsplash.com/photo-1585435557343-3b092031a831?q=80&w=2940&auto=format&fit=crop'; this.onerror=null;">
                        </div>

                        <!-- Floating Stats Card -->
                        <div class="absolute -bottom-6 -left-6 glass p-6 rounded-xl shadow-lg max-w-xs">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-gradient-brand rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold text-gradient">FDA</div>
                                    <div class="text-sm text-text-secondary">Validated System</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Interactive ROI Calculator -->
    <section id="roi-calculator" class="section">
        <div class="container-custom">
            <div class="max-w-6xl mx-auto">
                <div class="text-center space-y-4 mb-12">
                    <h2 class="text-4xl md:text-5xl font-display font-bold">Calculate Your <span class="text-gradient">ROI</span></h2>
                    <p class="text-xl text-text-secondary max-w-3xl mx-auto">
                        See how much you could save with Dotone's AI-powered manufacturing intelligence platform
                    </p>
                </div>

                <div class="card-elevated p-8 md:p-12">
                    <div class="grid md:grid-cols-2 gap-12">
                        <!-- Calculator Inputs -->
                        <div class="space-y-6">
                            <div>
                                <label class="block text-sm font-medium text-text-primary mb-2">Industry Vertical</label>
                                <select id="industry" class="input" onchange="updateIndustryDefaults()">
                                    <option value="automotive">Automotive Manufacturing</option>
                                    <option value="electronics">Electronics Manufacturing</option>
                                    <option value="food">Food Processing</option>
                                    <option value="pharma">Pharmaceutical</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-text-primary mb-2">Number of Workers</label>
                                <input type="number" id="workers" value="250" min="10" max="10000" class="input" oninput="calculateROI()">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-text-primary mb-2">Average Hourly Wage ($)</label>
                                <input type="number" id="wage" value="25" min="10" max="100" class="input" oninput="calculateROI()">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-text-primary mb-2">Current Efficiency (%)</label>
                                <input type="range" id="efficiency" value="70" min="40" max="95" class="w-full" oninput="updateEfficiencyValue(); calculateROI()">
                                <div class="flex justify-between text-sm text-text-secondary mt-2">
                                    <span>40%</span>
                                    <span id="efficiencyValue" class="font-semibold text-primary-500">70%</span>
                                    <span>95%</span>
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-text-primary mb-2">Operating Hours per Day</label>
                                <input type="number" id="hours" value="16" min="8" max="24" class="input" oninput="calculateROI()">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-text-primary mb-2">Expected Efficiency Improvement (%)</label>
                                <input type="range" id="improvement" value="35" min="20" max="50" class="w-full" oninput="updateImprovementValue(); calculateROI()">
                                <div class="flex justify-between text-sm text-text-secondary mt-2">
                                    <span>20%</span>
                                    <span id="improvementValue" class="font-semibold text-success-500">35%</span>
                                    <span>50%</span>
                                </div>
                            </div>
                        </div>

                        <!-- Results Display -->
                        <div class="space-y-6">
                            <div class="bg-gradient-brand rounded-xl p-8 text-white">
                                <div class="text-sm font-medium opacity-90 mb-2">Estimated Annual Savings</div>
                                <div class="text-5xl font-bold mb-4" id="annualSavings">$2,184,000</div>
                                <div class="text-sm opacity-90">Based on <span id="improvementDisplay">35%</span> efficiency improvement</div>
                            </div>

                            <div class="space-y-4">
                                <div class="flex items-center justify-between p-4 bg-surface rounded-lg">
                                    <span class="text-text-secondary">Monthly Savings</span>
                                    <span class="text-xl font-bold text-text-primary" id="monthlySavings">$182,000</span>
                                </div>
                                <div class="flex items-center justify-between p-4 bg-surface rounded-lg">
                                    <span class="text-text-secondary">Weekly Savings</span>
                                    <span class="text-xl font-bold text-text-primary" id="weeklySavings">$42,000</span>
                                </div>
                                <div class="flex items-center justify-between p-4 bg-surface rounded-lg">
                                    <span class="text-text-secondary">Daily Savings</span>
                                    <span class="text-xl font-bold text-text-primary" id="dailySavings">$8,400</span>
                                </div>
                                <div class="flex items-center justify-between p-4 bg-success-50 rounded-lg border border-success-200">
                                    <span class="text-success-700 font-medium">ROI Timeline</span>
                                    <span class="text-xl font-bold text-success-600" id="roiTimeline">3.2 months</span>
                                </div>
                            </div>

                            <div class="p-4 bg-primary-50 rounded-lg border border-primary-200">
                                <div class="flex items-start space-x-3">
                                    <svg class="w-5 h-5 text-primary-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                                    </svg>
                                    <p class="text-sm text-text-secondary">These calculations are based on industry averages for <span id="industryName">automotive manufacturing</span>. Actual results may vary based on your specific operations.</p>
                                </div>
                            </div>

                            <a href="/demo" class="btn-primary w-full justify-center">
                                Schedule ROI Consultation
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- AI Readiness Assessment Tool -->
    <section class="section bg-surface">
        <div class="container-custom">
            <div class="max-w-4xl mx-auto">
                <div class="text-center space-y-4 mb-12">
                    <h2 class="text-4xl md:text-5xl font-display font-bold">AI Readiness <span class="text-gradient">Assessment</span></h2>
                    <p class="text-xl text-text-secondary">
                        Evaluate your manufacturing facility's readiness for AI implementation
                    </p>
                </div>

                <div class="card-elevated p-8 md:p-12">
                    <div class="space-y-8">
                        <!-- Assessment Question 1 -->
                        <div class="space-y-3">
                            <label class="block text-lg font-semibold text-text-primary">
                                1. Do you have existing CCTV infrastructure on your manufacturing floor?
                            </label>
                            <div class="space-y-2">
                                <label class="flex items-center space-x-3 p-4 bg-surface rounded-lg cursor-pointer hover:bg-surface-hover transition-colors">
                                    <input type="radio" name="q1" value="10" class="w-5 h-5 text-primary-500" onchange="calculateReadiness()">
                                    <span class="text-text-primary">Yes, comprehensive coverage (10+ cameras)</span>
                                </label>
                                <label class="flex items-center space-x-3 p-4 bg-surface rounded-lg cursor-pointer hover:bg-surface-hover transition-colors">
                                    <input type="radio" name="q1" value="7" class="w-5 h-5 text-primary-500" onchange="calculateReadiness()">
                                    <span class="text-text-primary">Yes, partial coverage (5-10 cameras)</span>
                                </label>
                                <label class="flex items-center space-x-3 p-4 bg-surface rounded-lg cursor-pointer hover:bg-surface-hover transition-colors">
                                    <input type="radio" name="q1" value="3" class="w-5 h-5 text-primary-500" onchange="calculateReadiness()">
                                    <span class="text-text-primary">Limited coverage (1-4 cameras)</span>
                                </label>
                                <label class="flex items-center space-x-3 p-4 bg-surface rounded-lg cursor-pointer hover:bg-surface-hover transition-colors">
                                    <input type="radio" name="q1" value="0" class="w-5 h-5 text-primary-500" onchange="calculateReadiness()">
                                    <span class="text-text-primary">No existing CCTV infrastructure</span>
                                </label>
                            </div>
                        </div>

                        <!-- Assessment Question 2 -->
                        <div class="space-y-3">
                            <label class="block text-lg font-semibold text-text-primary">
                                2. How do you currently track worker efficiency and productivity?
                            </label>
                            <div class="space-y-2">
                                <label class="flex items-center space-x-3 p-4 bg-surface rounded-lg cursor-pointer hover:bg-surface-hover transition-colors">
                                    <input type="radio" name="q2" value="10" class="w-5 h-5 text-primary-500" onchange="calculateReadiness()">
                                    <span class="text-text-primary">Digital systems with real-time data</span>
                                </label>
                                <label class="flex items-center space-x-3 p-4 bg-surface rounded-lg cursor-pointer hover:bg-surface-hover transition-colors">
                                    <input type="radio" name="q2" value="7" class="w-5 h-5 text-primary-500" onchange="calculateReadiness()">
                                    <span class="text-text-primary">Manual tracking with digital records</span>
                                </label>
                                <label class="flex items-center space-x-3 p-4 bg-surface rounded-lg cursor-pointer hover:bg-surface-hover transition-colors">
                                    <input type="radio" name="q2" value="3" class="w-5 h-5 text-primary-500" onchange="calculateReadiness()">
                                    <span class="text-text-primary">Paper-based tracking systems</span>
                                </label>
                                <label class="flex items-center space-x-3 p-4 bg-surface rounded-lg cursor-pointer hover:bg-surface-hover transition-colors">
                                    <input type="radio" name="q2" value="0" class="w-5 h-5 text-primary-500" onchange="calculateReadiness()">
                                    <span class="text-text-primary">No formal tracking system</span>
                                </label>
                            </div>
                        </div>

                        <!-- Assessment Question 3 -->
                        <div class="space-y-3">
                            <label class="block text-lg font-semibold text-text-primary">
                                3. What is your organization's experience with AI/ML technologies?
                            </label>
                            <div class="space-y-2">
                                <label class="flex items-center space-x-3 p-4 bg-surface rounded-lg cursor-pointer hover:bg-surface-hover transition-colors">
                                    <input type="radio" name="q3" value="10" class="w-5 h-5 text-primary-500" onchange="calculateReadiness()">
                                    <span class="text-text-primary">Currently using AI in other operations</span>
                                </label>
                                <label class="flex items-center space-x-3 p-4 bg-surface rounded-lg cursor-pointer hover:bg-surface-hover transition-colors">
                                    <input type="radio" name="q3" value="7" class="w-5 h-5 text-primary-500" onchange="calculateReadiness()">
                                    <span class="text-text-primary">Piloting AI projects</span>
                                </label>
                                <label class="flex items-center space-x-3 p-4 bg-surface rounded-lg cursor-pointer hover:bg-surface-hover transition-colors">
                                    <input type="radio" name="q3" value="3" class="w-5 h-5 text-primary-500" onchange="calculateReadiness()">
                                    <span class="text-text-primary">Exploring AI possibilities</span>
                                </label>
                                <label class="flex items-center space-x-3 p-4 bg-surface rounded-lg cursor-pointer hover:bg-surface-hover transition-colors">
                                    <input type="radio" name="q3" value="0" class="w-5 h-5 text-primary-500" onchange="calculateReadiness()">
                                    <span class="text-text-primary">No AI experience</span>
                                </label>
                            </div>
                        </div>

                        <!-- Assessment Question 4 -->
                        <div class="space-y-3">
                            <label class="block text-lg font-semibold text-text-primary">
                                4. How would you rate your current network infrastructure?
                            </label>
                            <div class="space-y-2">
                                <label class="flex items-center space-x-3 p-4 bg-surface rounded-lg cursor-pointer hover:bg-surface-hover transition-colors">
                                    <input type="radio" name="q4" value="10" class="w-5 h-5 text-primary-500" onchange="calculateReadiness()">
                                    <span class="text-text-primary">Enterprise-grade with high bandwidth</span>
                                </label>
                                <label class="flex items-center space-x-3 p-4 bg-surface rounded-lg cursor-pointer hover:bg-surface-hover transition-colors">
                                    <input type="radio" name="q4" value="7" class="w-5 h-5 text-primary-500" onchange="calculateReadiness()">
                                    <span class="text-text-primary">Good infrastructure, some upgrades needed</span>
                                </label>
                                <label class="flex items-center space-x-3 p-4 bg-surface rounded-lg cursor-pointer hover:bg-surface-hover transition-colors">
                                    <input type="radio" name="q4" value="3" class="w-5 h-5 text-primary-500" onchange="calculateReadiness()">
                                    <span class="text-text-primary">Basic infrastructure, significant upgrades needed</span>
                                </label>
                                <label class="flex items-center space-x-3 p-4 bg-surface rounded-lg cursor-pointer hover:bg-surface-hover transition-colors">
                                    <input type="radio" name="q4" value="0" class="w-5 h-5 text-primary-500" onchange="calculateReadiness()">
                                    <span class="text-text-primary">Limited or outdated infrastructure</span>
                                </label>
                            </div>
                        </div>

                        <!-- Results Display -->
                        <div id="readinessResults" class="hidden space-y-6 pt-8 border-t border-border">
                            <div class="text-center">
                                <div class="text-6xl font-bold text-gradient mb-2" id="readinessScore">0</div>
                                <div class="text-xl font-semibold text-text-primary mb-4" id="readinessLevel">Complete Assessment</div>
                                <p class="text-text-secondary max-w-2xl mx-auto" id="readinessDescription">Answer all questions to see your AI readiness score</p>
                            </div>

                            <div class="grid md:grid-cols-3 gap-4">
                                <div class="text-center p-6 bg-white rounded-lg border border-border">
                                    <div class="text-3xl font-bold text-gradient mb-2" id="implementationTime">-</div>
                                    <div class="text-sm text-text-secondary">Implementation Timeline</div>
                                </div>
                                <div class="text-center p-6 bg-white rounded-lg border border-border">
                                    <div class="text-3xl font-bold text-gradient mb-2" id="investmentLevel">-</div>
                                    <div class="text-sm text-text-secondary">Investment Level</div>
                                </div>
                                <div class="text-center p-6 bg-white rounded-lg border border-border">
                                    <div class="text-3xl font-bold text-gradient mb-2" id="expectedROI">-</div>
                                    <div class="text-sm text-text-secondary">Expected ROI</div>
                                </div>
                            </div>

                            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                                <a href="/demo" class="btn-primary">
                                    Schedule Consultation
                                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                    </svg>
                                </a>
                                <button onclick="resetAssessment()" class="btn-secondary">
                                    Retake Assessment
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Implementation Timeline -->
    <section class="section">
        <div class="container-custom">
            <div class="text-center space-y-4 mb-16">
                <h2 class="text-4xl md:text-5xl font-display font-bold">Implementation <span class="text-gradient">Timeline</span></h2>
                <p class="text-xl text-text-secondary max-w-3xl mx-auto">
                    From consultation to full deployment in as little as 8 weeks
                </p>
            </div>

            <div class="max-w-5xl mx-auto">
                <div class="relative">
                    <!-- Timeline Line -->
                    <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-gradient-brand"></div>

                    <!-- Timeline Items -->
                    <div class="space-y-12">
                        <!-- Week 1-2 -->
                        <div class="relative grid md:grid-cols-2 gap-8 items-center">
                            <div class="md:text-right space-y-3">
                                <div class="inline-block px-4 py-2 bg-primary-50 rounded-full">
                                    <span class="text-sm font-semibold text-primary-700">Week 1-2</span>
                                </div>
                                <h3 class="text-2xl font-display font-bold">Discovery & Assessment</h3>
                                <p class="text-text-secondary">Comprehensive facility audit, infrastructure evaluation, and customized solution design</p>
                                <ul class="space-y-2 text-sm text-text-secondary">
                                    <li class="flex items-center md:justify-end space-x-2">
                                        <svg class="w-4 h-4 text-success-500" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                        <span>Site survey and infrastructure assessment</span>
                                    </li>
                                    <li class="flex items-center md:justify-end space-x-2">
                                        <svg class="w-4 h-4 text-success-500" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                        <span>Stakeholder interviews and requirements gathering</span>
                                    </li>
                                    <li class="flex items-center md:justify-end space-x-2">
                                        <svg class="w-4 h-4 text-success-500" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                        <span>Custom solution proposal and ROI analysis</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="hidden md:flex justify-center">
                                <div class="w-16 h-16 bg-gradient-brand rounded-full flex items-center justify-center shadow-lg">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="md:hidden"></div>
                        </div>

                        <!-- Week 3-4 -->
                        <div class="relative grid md:grid-cols-2 gap-8 items-center">
                            <div class="hidden md:flex justify-center">
                                <div class="w-16 h-16 bg-gradient-brand rounded-full flex items-center justify-center shadow-lg">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="space-y-3">
                                <div class="inline-block px-4 py-2 bg-primary-50 rounded-full">
                                    <span class="text-sm font-semibold text-primary-700">Week 3-4</span>
                                </div>
                                <h3 class="text-2xl font-display font-bold">Infrastructure Setup</h3>
                                <p class="text-text-secondary">Hardware installation, network configuration, and system integration with existing infrastructure</p>
                                <ul class="space-y-2 text-sm text-text-secondary">
                                    <li class="flex items-center space-x-2">
                                        <svg class="w-4 h-4 text-success-500" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                        <span>Camera installation and network setup</span>
                                    </li>
                                    <li class="flex items-center space-x-2">
                                        <svg class="w-4 h-4 text-success-500" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                        <span>Server deployment and software installation</span>
                                    </li>
                                    <li class="flex items-center space-x-2">
                                        <svg class="w-4 h-4 text-success-500" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                        <span>ERP system integration and data connectivity</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Week 5-6 -->
                        <div class="relative grid md:grid-cols-2 gap-8 items-center">
                            <div class="md:text-right space-y-3">
                                <div class="inline-block px-4 py-2 bg-primary-50 rounded-full">
                                    <span class="text-sm font-semibold text-primary-700">Week 5-6</span>
                                </div>
                                <h3 class="text-2xl font-display font-bold">AI Training & Calibration</h3>
                                <p class="text-text-secondary">Custom AI model training for your specific manufacturing environment and processes</p>
                                <ul class="space-y-2 text-sm text-text-secondary">
                                    <li class="flex items-center md:justify-end space-x-2">
                                        <svg class="w-4 h-4 text-success-500" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                        <span>AI model training with facility-specific data</span>
                                    </li>
                                    <li class="flex items-center md:justify-end space-x-2">
                                        <svg class="w-4 h-4 text-success-500" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                        <span>Vision system calibration and accuracy testing</span>
                                    </li>
                                    <li class="flex items-center md:justify-end space-x-2">
                                        <svg class="w-4 h-4 text-success-500" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                        <span>Alert threshold configuration and optimization</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="hidden md:flex justify-center">
                                <div class="w-16 h-16 bg-gradient-brand rounded-full flex items-center justify-center shadow-lg">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="md:hidden"></div>
                        </div>

                        <!-- Week 7-8 -->
                        <div class="relative grid md:grid-cols-2 gap-8 items-center">
                            <div class="hidden md:flex justify-center">
                                <div class="w-16 h-16 bg-gradient-brand rounded-full flex items-center justify-center shadow-lg">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="space-y-3">
                                <div class="inline-block px-4 py-2 bg-success-50 rounded-full">
                                    <span class="text-sm font-semibold text-success-700">Week 7-8</span>
                                </div>
                                <h3 class="text-2xl font-display font-bold">Training & Go-Live</h3>
                                <p class="text-text-secondary">Comprehensive team training and full system deployment with ongoing support</p>
                                <ul class="space-y-2 text-sm text-text-secondary">
                                    <li class="flex items-center space-x-2">
                                        <svg class="w-4 h-4 text-success-500" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                        <span>User training for all stakeholder groups</span>
                                    </li>
                                    <li class="flex items-center space-x-2">
                                        <svg class="w-4 h-4 text-success-500" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                        <span>Full system go-live and production monitoring</span>
                                    </li>
                                    <li class="flex items-center space-x-2">
                                        <svg class="w-4 h-4 text-success-500" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                        <span>30-day optimization and support period</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-16">
                    <a href="/demo" class="btn-primary">
                        Start Your Implementation Journey
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Compliance Checklist -->
    <section class="section bg-surface">
        <div class="container-custom">
            <div class="text-center space-y-4 mb-16">
                <h2 class="text-4xl md:text-5xl font-display font-bold">Industry <span class="text-gradient">Compliance</span></h2>
                <p class="text-xl text-text-secondary max-w-3xl mx-auto">
                    How Dotone keeps your production records secure and audit-ready
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Encryption -->
                <div class="card p-6 text-center hover-lift">
                    <div class="w-16 h-16 bg-gradient-brand rounded-lg mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-display font-semibold mb-2">Encrypted data</h3>
                    <p class="text-sm text-text-secondary">TLS 1.2+ in transit, AES at rest</p>
                </div>

                <!-- Access -->
                <div class="card p-6 text-center hover-lift">
                    <div class="w-16 h-16 bg-gradient-brand rounded-lg mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-display font-semibold mb-2">Role-based access</h3>
                    <p class="text-sm text-text-secondary">With admin audit logs</p>
                </div>

                <!-- Privacy -->
                <div class="card p-6 text-center hover-lift">
                    <div class="w-16 h-16 bg-gradient-brand rounded-lg mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-display font-semibold mb-2">Privacy by design</h3>
                    <p class="text-sm text-text-secondary">Indian IT Act &amp; GDPR principles</p>
                </div>

                <!-- Audit -->
                <div class="card p-6 text-center hover-lift">
                    <div class="w-16 h-16 bg-gradient-brand rounded-lg mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-display font-semibold mb-2">Audit trails</h3>
                    <p class="text-sm text-text-secondary">For regulated and pharma production</p>
                </div>
            </div>

            <div class="max-w-4xl mx-auto mt-12">
                <div class="card-elevated p-8">
                    <h3 class="text-2xl font-display font-bold mb-6 text-center">Compliance Checklist</h3>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="space-y-4">
                            <div class="flex items-start space-x-3">
                                <svg class="w-6 h-6 text-success-500 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <div>
                                    <div class="font-semibold text-text-primary">Data Encryption</div>
                                    <div class="text-sm text-text-secondary">End-to-end encryption for all data transmission and storage</div>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3">
                                <svg class="w-6 h-6 text-success-500 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <div>
                                    <div class="font-semibold text-text-primary">Access Control</div>
                                    <div class="text-sm text-text-secondary">Role-based access control with multi-factor authentication</div>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3">
                                <svg class="w-6 h-6 text-success-500 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <div>
                                    <div class="font-semibold text-text-primary">Audit Trails</div>
                                    <div class="text-sm text-text-secondary">Complete audit logging for all system activities</div>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3">
                                <svg class="w-6 h-6 text-success-500 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <div>
                                    <div class="font-semibold text-text-primary">Data Residency</div>
                                    <div class="text-sm text-text-secondary">Configurable data storage locations for regional compliance</div>
                                </div>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <div class="flex items-start space-x-3">
                                <svg class="w-6 h-6 text-success-500 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <div>
                                    <div class="font-semibold text-text-primary">Regular Backups</div>
                                    <div class="text-sm text-text-secondary">Automated daily backups with disaster recovery protocols</div>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3">
                                <svg class="w-6 h-6 text-success-500 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <div>
                                    <div class="font-semibold text-text-primary">Validation Documentation</div>
                                    <div class="text-sm text-text-secondary">IQ/OQ/PQ documentation for regulated industries</div>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3">
                                <svg class="w-6 h-6 text-success-500 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <div>
                                    <div class="font-semibold text-text-primary">Privacy Controls</div>
                                    <div class="text-sm text-text-secondary">Worker privacy protection with anonymization options</div>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3">
                                <svg class="w-6 h-6 text-success-500 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <div>
                                    <div class="font-semibold text-text-primary">Continuous Monitoring</div>
                                    <div class="text-sm text-text-secondary">24/7 security monitoring and threat detection</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section">
        <div class="container-custom">
            <div class="relative rounded-3xl overflow-hidden cta-frame">
                
                <div class="absolute inset-0 opacity-10">
                </div>
                
                <div class="relative z-10 px-8 py-16 md:px-16 md:py-24 text-center">
                    <h2 class="text-4xl md:text-5xl font-display font-bold text-text-primary mb-6">
                        Ready to Transform Your Manufacturing Operations?
                    </h2>
                    <p class="text-xl text-text-secondary max-w-3xl mx-auto mb-8">
                        Schedule a consultation with our manufacturing AI experts to discuss your specific needs and see how Dotone can deliver measurable ROI for your facility.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="/demo" class="inline-flex items-center justify-center px-8 py-4 bg-primary-500 text-white font-display font-semibold rounded-lg hover:bg-primary-600 transition-all shadow-lg hover:shadow-xl">
                            <span>Schedule Consultation</span>
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </a>
                        <a href="/case-studies" class="inline-flex items-center justify-center px-8 py-4 bg-white text-text-primary font-display font-semibold rounded-lg border border-border hover:border-primary-300 transition-all">
                            <span>View Success Stories</span>
                        </a>
                    </div>
                    <div class="flex items-center justify-center space-x-6 mt-8 text-text-secondary text-sm">
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Free ROI analysis</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Custom implementation plan</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>No obligation</span>
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
        // Industry Tab Switching
        function switchIndustry(industry) {
            // Hide all content
            document.querySelectorAll('.industry-content').forEach(content => {
                content.classList.add('hidden');
            });

            // Remove active class from all tabs
            document.querySelectorAll('.industry-tab').forEach(tab => {
                tab.classList.remove('active', 'bg-gradient-brand', 'text-white');
                tab.classList.add('bg-surface', 'text-text-primary');
            });

            // Show selected content
            document.getElementById(`industry-${industry}`).classList.remove('hidden');

            // Add active class to selected tab
            const activeTab = document.getElementById(`tab-${industry}`);
            activeTab.classList.add('active', 'bg-gradient-brand', 'text-white');
            activeTab.classList.remove('bg-surface', 'text-text-primary');
        }

        // Initialize first tab as active
        document.addEventListener('DOMContentLoaded', () => {
            switchIndustry('automotive');
        });

        // ROI Calculator Functions
        function updateEfficiencyValue() {
            const efficiency = document.getElementById('efficiency').value;
            document.getElementById('efficiencyValue').textContent = efficiency + '%';
        }

        function updateImprovementValue() {
            const improvement = document.getElementById('improvement').value;
            document.getElementById('improvementValue').textContent = improvement + '%';
            document.getElementById('improvementDisplay').textContent = improvement + '%';
        }

        function updateIndustryDefaults() {
            const industry = document.getElementById('industry').value;
            const industryNames = {
                'automotive': 'automotive manufacturing',
                'electronics': 'electronics manufacturing',
                'food': 'food processing',
                'pharma': 'pharmaceutical manufacturing'
            };
            document.getElementById('industryName').textContent = industryNames[industry];
            calculateROI();
        }

        function calculateROI() {
            const workers = parseInt(document.getElementById('workers').value) || 250;
            const wage = parseFloat(document.getElementById('wage').value) || 25;
            const efficiency = parseInt(document.getElementById('efficiency').value) || 70;
            const hours = parseInt(document.getElementById('hours').value) || 16;
            const improvement = parseInt(document.getElementById('improvement').value) || 35;

            const efficiencyGain = improvement / 100;
            const workingDaysPerYear = 260;
            
            const currentProductivityLoss = (100 - efficiency) / 100;
            const improvedProductivityLoss = currentProductivityLoss * (1 - efficiencyGain);
            const productivityGainPercentage = currentProductivityLoss - improvedProductivityLoss;
            
            const annualSavings = workers * wage * hours * workingDaysPerYear * productivityGainPercentage;
            const monthlySavings = annualSavings / 12;
            const weeklySavings = annualSavings / 52;
            const dailySavings = annualSavings / 260;

            // Platform cost estimate (example: $50k initial + $2k/month)
            const platformCost = 50000 + (2000 * 12);
            const roiMonths = (platformCost / monthlySavings).toFixed(1);

            document.getElementById('annualSavings').textContent = '$' + annualSavings.toLocaleString('en-US', {maximumFractionDigits: 0});
            document.getElementById('monthlySavings').textContent = '$' + monthlySavings.toLocaleString('en-US', {maximumFractionDigits: 0});
            document.getElementById('weeklySavings').textContent = '$' + weeklySavings.toLocaleString('en-US', {maximumFractionDigits: 0});
            document.getElementById('dailySavings').textContent = '$' + dailySavings.toLocaleString('en-US', {maximumFractionDigits: 0});
            document.getElementById('roiTimeline').textContent = roiMonths + ' months';
        }

        // AI Readiness Assessment
        function calculateReadiness() {
            const q1 = document.querySelector('input[name="q1"]:checked');
            const q2 = document.querySelector('input[name="q2"]:checked');
            const q3 = document.querySelector('input[name="q3"]:checked');
            const q4 = document.querySelector('input[name="q4"]:checked');

            if (!q1 || !q2 || !q3 || !q4) return;

            const score = parseInt(q1.value) + parseInt(q2.value) + parseInt(q3.value) + parseInt(q4.value);
            const percentage = (score / 40) * 100;

            let level, description, timeline, investment, roi;

            if (percentage >= 75) {
                level = 'Excellent - Ready for Immediate Implementation';
                description = 'Your facility is well-prepared for AI implementation. You have the infrastructure and experience to deploy quickly and see immediate results.';
                timeline = '6-8 weeks';
                investment = 'Standard';
                roi = '< 4 months';
            } else if (percentage >= 50) {
                level = 'Good - Minor Preparation Needed';
                description = 'Your facility has a solid foundation. Some infrastructure upgrades and training will optimize your AI implementation success.';
                timeline = '8-10 weeks';
                investment = 'Standard+';
                roi = '4-6 months';
            } else if (percentage >= 25) {
                level = 'Fair - Moderate Preparation Required';
                description = 'Your facility needs some infrastructure improvements and team preparation before AI implementation. We can help you build the foundation.';
                timeline = '10-14 weeks';
                investment = 'Enhanced';
                roi = '6-9 months';
            } else {
                level = 'Developing - Comprehensive Preparation Needed';
                description = 'Your facility will benefit from a phased approach with infrastructure development and team training before full AI deployment.';
                timeline = '14-20 weeks';
                investment = 'Comprehensive';
                roi = '9-12 months';
            }

            document.getElementById('readinessScore').textContent = Math.round(percentage) + '%';
            document.getElementById('readinessLevel').textContent = level;
            document.getElementById('readinessDescription').textContent = description;
            document.getElementById('implementationTime').textContent = timeline;
            document.getElementById('investmentLevel').textContent = investment;
            document.getElementById('expectedROI').textContent = roi;

            document.getElementById('readinessResults').classList.remove('hidden');
        }

        function resetAssessment() {
            document.querySelectorAll('input[type="radio"]').forEach(radio => {
                radio.checked = false;
            });
            document.getElementById('readinessResults').classList.add('hidden');
        }

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

        // Initialize calculations on page load
        calculateROI();
    </script>
</body>
</html>