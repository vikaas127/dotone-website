<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="How DotOne applies AI agents, generative AI, Vision AI and automation to everyday business operations, using your own ERP data.">
    <title>AI for Business Operations: Agents, Vision, GenAI | DotOne</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=JetBrains+Mono:wght@400&display=swap">
    <link rel="stylesheet" href="/css/main.css?v=20261016">
    <script src="/js/header-nav.js?v=20261016" defer></script>
      <link rel="canonical" href="https://dotone.biz/ai">
      <link rel="icon" href="/public/favicon.ico">
      <meta property="og:type" content="website">
      <meta property="og:site_name" content="Dotone">
      <meta property="og:title" content="AI for Business Operations: Agents, Vision, GenAI | DotOne">
      <meta property="og:description" content="How DotOne applies AI agents, generative AI, Vision AI and automation to everyday business operations, using your own ERP data.">
      <meta property="og:url" content="https://dotone.biz/ai">
      <meta property="og:image" content="https://dotone.biz/assets/og-image.jpg?v=2">
      <meta property="og:image:width" content="1200">
      <meta property="og:image:height" content="630">
      <meta property="og:image:alt" content="DotOne: ERP, AI agents and automation in one platform">
      <meta property="og:locale" content="en_IN">
      <meta name="twitter:card" content="summary_large_image">
      <meta name="twitter:title" content="AI for Business Operations: Agents, Vision, GenAI | DotOne">
      <meta name="twitter:description" content="How DotOne applies AI agents, generative AI, Vision AI and automation to everyday business operations, using your own ERP data.">
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
                    <span class="text-sm font-medium text-primary-700">Complete AI Tools Ecosystem</span>
                </div>

                <h1 class="text-5xl md:text-6xl lg:text-7xl font-display font-bold leading-tight">AI for Business Operations</h1>

                <p class="text-xl text-text-secondary leading-relaxed max-w-3xl mx-auto">
                    Transform every aspect of your manufacturing operations with our integrated suite of AI-powered tools. From vision intelligence to sales optimization, we've got you covered.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center pt-4">
                    <a href="/demo" class="btn-primary group">
                        <span>Try All Tools Free</span>
                        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>
                    <a href="#comparison" class="btn-secondary group">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                        <span>Compare Features</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/showcase/engine.php'; showcase('ai'); ?>

    <!-- Quick Stats -->
    <section class="section-sm bg-surface">
        <div class="container-custom">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center space-y-2">
                    <div class="metric">5</div>
                    <div class="metric-label">AI-Powered Tools</div>
                </div>
                <div class="text-center space-y-2">
                    <div class="metric">98.7%</div>
                    <div class="metric-label">Accuracy Rate</div>
                </div>
                <div class="text-center space-y-2">
                    <div class="metric">45%</div>
                    <div class="metric-label">Avg. Efficiency Gain</div>
                </div>
                <div class="text-center space-y-2">
                    <div class="metric">24/7</div>
                    <div class="metric-label">Automated Operations</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tool Filter Navigation -->
   

    <!-- AI Tools Grid -->
    <section class="section">
        <div class="container-custom">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8" id="toolsGrid">
                <!-- Tool 1: Vision AI Platform -->
                <div class="tool-card card-elevated overflow-hidden group hover-lift" data-category="operations automation">
                    <div class="relative h-64 overflow-hidden">
                        <img decoding="async" src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?q=80&w=2940&auto=format&fit=crop" 
                             alt="Manufacturing floor with AI-powered CCTV cameras monitoring worker efficiency and production line operations in real-time" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                             loading="lazy"
                             onerror="this.src='https://images.pexels.com/photos/1108101/pexels-photo-1108101.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/50 to-transparent"></div>
                        <div class="absolute top-4 right-4">
                            <div class="badge badge-primary">Core Platform</div>
                        </div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <div class="flex items-center space-x-3 mb-2">
                                <div class="w-12 h-12 bg-gradient-brand rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-display font-semibold text-white">Vision AI Platform</h3>
                                    <p class="text-sm text-white/80">CCTV Integration & Monitoring</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-6 space-y-4">
                        <p class="text-text-secondary">Transform existing CCTV infrastructure into intelligent monitoring systems with real-time worker efficiency tracking and safety compliance.</p>
                        
                        <div class="space-y-3">
                            <div class="flex items-start space-x-3">
                                <svg class="w-5 h-5 text-success-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-sm text-text-secondary">Real-time worker efficiency analytics</span>
                            </div>
                            <div class="flex items-start space-x-3">
                                <svg class="w-5 h-5 text-success-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-sm text-text-secondary">Safety compliance monitoring</span>
                            </div>
                            <div class="flex items-start space-x-3">
                                <svg class="w-5 h-5 text-success-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-sm text-text-secondary">Predictive maintenance alerts</span>
                            </div>
                        </div>

                        <div class="pt-4 border-t border-border">
                            <div class="flex items-center justify-between mb-4">
                                <span class="text-sm font-medium text-text-secondary">ROI Impact</span>
                                <span class="text-lg font-bold text-gradient">42% Efficiency Gain</span>
                            </div>
                            <a href="/vision-ai" class="btn-primary w-full justify-center group">
                                <span>Explore Vision AI</span>
                                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Tool 2: AI Agent -->
                <div class="tool-card card-elevated overflow-hidden group hover-lift" data-category="operations automation">
                    <div class="relative h-64 overflow-hidden">
                        <img decoding="async" src="https://images.unsplash.com/photo-1531746790731-6c087fecd65a?q=80&w=2906&auto=format&fit=crop" 
                             alt="AI-powered virtual assistant interface displaying manufacturing operations dashboard with intelligent decision support and automated workflow management" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                             loading="lazy"
                             onerror="this.src='https://images.pexels.com/photos/8438918/pexels-photo-8438918.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/50 to-transparent"></div>
                        <div class="absolute top-4 right-4">
                            <div class="badge badge-success">AI-Powered</div>
                        </div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <div class="flex items-center space-x-3 mb-2">
                                <div class="w-12 h-12 bg-gradient-brand rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-display font-semibold text-white">AI Agent</h3>
                                    <p class="text-sm text-white/80">Intelligent Virtual Assistant</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-6 space-y-4">
                        <p class="text-text-secondary">24/7 intelligent virtual assistant for operations management, decision support, and automated workflow optimization across your manufacturing floor.</p>
                        
                        <div class="space-y-3">
                            <div class="flex items-start space-x-3">
                                <svg class="w-5 h-5 text-success-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-sm text-text-secondary">Natural language query processing</span>
                            </div>
                            <div class="flex items-start space-x-3">
                                <svg class="w-5 h-5 text-success-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-sm text-text-secondary">Automated decision recommendations</span>
                            </div>
                            <div class="flex items-start space-x-3">
                                <svg class="w-5 h-5 text-success-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-sm text-text-secondary">Workflow automation & optimization</span>
                            </div>
                        </div>

                        <div class="pt-4 border-t border-border">
                            <div class="flex items-center justify-between mb-4">
                                <span class="text-sm font-medium text-text-secondary">Time Saved</span>
                                <span class="text-lg font-bold text-gradient">15 hrs/week</span>
                            </div>
                            <a href="/demo" class="btn-primary w-full justify-center group">
                                <span>Try AI Agent</span>
                                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Tool 3: Salesman Tracker -->
                <div class="tool-card card-elevated overflow-hidden group hover-lift" data-category="sales operations">
                    <div class="relative h-64 overflow-hidden">
                        <img decoding="async" src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=2940&auto=format&fit=crop" 
                             alt="GPS tracking dashboard showing field sales team locations, routes, and performance metrics with real-time updates and analytics" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                             loading="lazy"
                             onerror="this.src='https://images.pexels.com/photos/590022/pexels-photo-590022.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/50 to-transparent"></div>
                        <div class="absolute top-4 right-4">
                            <div class="badge badge-warning">GPS-Enabled</div>
                        </div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <div class="flex items-center space-x-3 mb-2">
                                <div class="w-12 h-12 bg-gradient-brand rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-display font-semibold text-white">Salesman Tracker</h3>
                                    <p class="text-sm text-white/80">Field Team Management</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-6 space-y-4">
                        <p class="text-text-secondary">GPS-based field team monitoring with intelligent route optimization, performance analytics, and real-time location tracking for maximum productivity.</p>
                        
                        <div class="space-y-3">
                            <div class="flex items-start space-x-3">
                                <svg class="w-5 h-5 text-success-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-sm text-text-secondary">Real-time GPS location tracking</span>
                            </div>
                            <div class="flex items-start space-x-3">
                                <svg class="w-5 h-5 text-success-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-sm text-text-secondary">AI-powered route optimization</span>
                            </div>
                            <div class="flex items-start space-x-3">
                                <svg class="w-5 h-5 text-success-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-sm text-text-secondary">Performance analytics dashboard</span>
                            </div>
                        </div>

                        <div class="pt-4 border-t border-border">
                            <div class="flex items-center justify-between mb-4">
                                <span class="text-sm font-medium text-text-secondary">Productivity Boost</span>
                                <span class="text-lg font-bold text-gradient">38% Increase</span>
                            </div>
                            <a href="/demo" class="btn-primary w-full justify-center group">
                                <span>View Demo</span>
                                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Tool 4: Invoice Scanner -->
                <div class="tool-card card-elevated overflow-hidden group hover-lift" data-category="automation operations">
                    <div class="relative h-64 overflow-hidden">
                        <img decoding="async" src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?q=80&w=2940&auto=format&fit=crop" 
                             alt="Automated invoice processing system with OCR technology scanning and digitizing paper invoices for ERP integration" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                             loading="lazy"
                             onerror="this.src='https://images.pexels.com/photos/6863332/pexels-photo-6863332.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/50 to-transparent"></div>
                        <div class="absolute top-4 right-4">
                            <div class="badge badge-primary">OCR-Powered</div>
                        </div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <div class="flex items-center space-x-3 mb-2">
                                <div class="w-12 h-12 bg-gradient-brand rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-display font-semibold text-white">Invoice Scanner</h3>
                                    <p class="text-sm text-white/80">Automated Processing</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-6 space-y-4">
                        <p class="text-text-secondary">Automated invoice processing with advanced OCR technology, seamless ERP integration, and intelligent data extraction for error-free accounting.</p>
                        
                        <div class="space-y-3">
                            <div class="flex items-start space-x-3">
                                <svg class="w-5 h-5 text-success-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-sm text-text-secondary">99.2% OCR accuracy rate</span>
                            </div>
                            <div class="flex items-start space-x-3">
                                <svg class="w-5 h-5 text-success-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-sm text-text-secondary">Seamless ERP integration</span>
                            </div>
                            <div class="flex items-start space-x-3">
                                <svg class="w-5 h-5 text-success-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-sm text-text-secondary">Automated data validation</span>
                            </div>
                        </div>

                        <div class="pt-4 border-t border-border">
                            <div class="flex items-center justify-between mb-4">
                                <span class="text-sm font-medium text-text-secondary">Processing Speed</span>
                                <span class="text-lg font-bold text-gradient">85% Faster</span>
                            </div>
                            <a href="/demo" class="btn-primary w-full justify-center group">
                                <span>Test Scanner</span>
                                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Tool 5: Business Card Scanner -->
                <div class="tool-card card-elevated overflow-hidden group hover-lift" data-category="sales automation">
                    <div class="relative h-64 overflow-hidden">
                        <img decoding="async" src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?q=80&w=2940&auto=format&fit=crop" 
                             alt="Business card scanning application with OCR technology digitizing contact information for CRM integration and lead management" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                             loading="lazy"
                             onerror="this.src='https://images.pexels.com/photos/6694543/pexels-photo-6694543.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/50 to-transparent"></div>
                        <div class="absolute top-4 right-4">
                            <div class="badge badge-success">CRM-Ready</div>
                        </div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <div class="flex items-center space-x-3 mb-2">
                                <div class="w-12 h-12 bg-gradient-brand rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-display font-semibold text-white">Business Card Scanner</h3>
                                    <p class="text-sm text-white/80">Contact Digitization</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-6 space-y-4">
                        <p class="text-text-secondary">Instant contact digitization with intelligent CRM integration, automated lead management, and seamless follow-up workflow creation.</p>
                        
                        <div class="space-y-3">
                            <div class="flex items-start space-x-3">
                                <svg class="w-5 h-5 text-success-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-sm text-text-secondary">Instant contact capture & digitization</span>
                            </div>
                            <div class="flex items-start space-x-3">
                                <svg class="w-5 h-5 text-success-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-sm text-text-secondary">Automatic CRM synchronization</span>
                            </div>
                            <div class="flex items-start space-x-3">
                                <svg class="w-5 h-5 text-success-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-sm text-text-secondary">Intelligent lead qualification</span>
                            </div>
                        </div>

                        <div class="pt-4 border-t border-border">
                            <div class="flex items-center justify-between mb-4">
                                <span class="text-sm font-medium text-text-secondary">Lead Capture</span>
                                <span class="text-lg font-bold text-gradient">3 sec/card</span>
                            </div>
                            <a href="/demo" class="btn-primary w-full justify-center group">
                                <span>Try Scanner</span>
                                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Tool 6: Lead Finder -->
                <div class="tool-card card-elevated overflow-hidden group hover-lift" data-category="sales automation">
                    <div class="relative h-64 overflow-hidden">
                        <img decoding="async" src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2815&auto=format&fit=crop" 
                             alt="AI-powered lead generation dashboard showing prospect identification, qualification scores, and automated outreach campaigns" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                             loading="lazy"
                             onerror="this.src='https://images.pexels.com/photos/7688336/pexels-photo-7688336.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/50 to-transparent"></div>
                        <div class="absolute top-4 right-4">
                            <div class="badge badge-warning">AI-Driven</div>
                        </div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <div class="flex items-center space-x-3 mb-2">
                                <div class="w-12 h-12 bg-gradient-brand rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-display font-semibold text-white">Lead Finder</h3>
                                    <p class="text-sm text-white/80">Prospect Intelligence</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-6 space-y-4">
                        <p class="text-text-secondary">AI-powered prospect identification and qualification system with automated outreach, intelligent scoring, and conversion optimization.</p>
                        
                        <div class="space-y-3">
                            <div class="flex items-start space-x-3">
                                <svg class="w-5 h-5 text-success-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-sm text-text-secondary">AI-powered prospect identification</span>
                            </div>
                            <div class="flex items-start space-x-3">
                                <svg class="w-5 h-5 text-success-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-sm text-text-secondary">Intelligent lead scoring & qualification</span>
                            </div>
                            <div class="flex items-start space-x-3">
                                <svg class="w-5 h-5 text-success-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-sm text-text-secondary">Automated outreach campaigns</span>
                            </div>
                        </div>

                        <div class="pt-4 border-t border-border">
                            <div class="flex items-center justify-between mb-4">
                                <span class="text-sm font-medium text-text-secondary">Conversion Rate</span>
                                <span class="text-lg font-bold text-gradient">52% Higher</span>
                            </div>
                            <a href="/demo" class="btn-primary w-full justify-center group">
                                <span>Explore Leads</span>
                                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- No Results Message -->
            <div id="noResults" class="hidden text-center py-16">
                <svg class="w-24 h-24 mx-auto text-text-tertiary mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <h3 class="text-2xl font-display font-semibold text-text-primary mb-2">No tools found</h3>
                <p class="text-text-secondary mb-6">Try adjusting your filters to see more results</p>
                <button onclick="resetFilters()" class="btn-secondary">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                    </svg>
                    Reset Filters
                </button>
            </div>
        </div>
    </section>

    <!-- Interactive Comparison Matrix -->
    <section id="comparison" class="section bg-surface">
        <div class="container-custom">
            <div class="text-center space-y-4 mb-12">
                <h2 class="text-4xl md:text-5xl font-display font-bold">Feature <span class="text-gradient">Comparison</span></h2>
                <p class="text-xl text-text-secondary max-w-3xl mx-auto">
                    Compare capabilities across all AI tools to find the perfect fit for your needs
                </p>
            </div>

            <div class="card-elevated overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gradient-brand text-white">
                            <tr>
                                <th class="px-6 py-4 text-left font-display font-semibold">Feature</th>
                                <th class="px-6 py-4 text-center font-display font-semibold">Vision AI</th>
                                <th class="px-6 py-4 text-center font-display font-semibold">AI Agent</th>
                                <th class="px-6 py-4 text-center font-display font-semibold">Salesman Tracker</th>
                                <th class="px-6 py-4 text-center font-display font-semibold">Invoice Scanner</th>
                                <th class="px-6 py-4 text-center font-display font-semibold">Business Card</th>
                                <th class="px-6 py-4 text-center font-display font-semibold">Lead Finder</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-border">
                            <tr class="hover:bg-surface transition-colors">
                                <td class="px-6 py-4 font-medium text-text-primary">Real-time Monitoring</td>
                                <td class="px-6 py-4 text-center">
                                    <svg class="w-6 h-6 text-success-500 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <svg class="w-6 h-6 text-success-500 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <svg class="w-6 h-6 text-success-500 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <span class="text-text-tertiary">—</span>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <span class="text-text-tertiary">—</span>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <span class="text-text-tertiary">—</span>
                                </td>
                            </tr>
                            <tr class="hover:bg-surface transition-colors">
                                <td class="px-6 py-4 font-medium text-text-primary">AI-Powered Analytics</td>
                                <td class="px-6 py-4 text-center">
                                    <svg class="w-6 h-6 text-success-500 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <svg class="w-6 h-6 text-success-500 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <svg class="w-6 h-6 text-success-500 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <svg class="w-6 h-6 text-success-500 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <svg class="w-6 h-6 text-success-500 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <svg class="w-6 h-6 text-success-500 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                </td>
                            </tr>
                            <tr class="hover:bg-surface transition-colors">
                                <td class="px-6 py-4 font-medium text-text-primary">ERP Integration</td>
                                <td class="px-6 py-4 text-center">
                                    <svg class="w-6 h-6 text-success-500 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <svg class="w-6 h-6 text-success-500 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <svg class="w-6 h-6 text-success-500 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <svg class="w-6 h-6 text-success-500 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <svg class="w-6 h-6 text-success-500 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <svg class="w-6 h-6 text-success-500 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                </td>
                            </tr>
                            <tr class="hover:bg-surface transition-colors">
                                <td class="px-6 py-4 font-medium text-text-primary">Mobile App</td>
                                <td class="px-6 py-4 text-center">
                                    <svg class="w-6 h-6 text-success-500 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <svg class="w-6 h-6 text-success-500 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <svg class="w-6 h-6 text-success-500 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <svg class="w-6 h-6 text-success-500 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <svg class="w-6 h-6 text-success-500 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <svg class="w-6 h-6 text-success-500 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                </td>
                            </tr>
                            <tr class="hover:bg-surface transition-colors">
                                <td class="px-6 py-4 font-medium text-text-primary">Custom Reporting</td>
                                <td class="px-6 py-4 text-center">
                                    <svg class="w-6 h-6 text-success-500 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <svg class="w-6 h-6 text-success-500 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <svg class="w-6 h-6 text-success-500 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <svg class="w-6 h-6 text-success-500 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <svg class="w-6 h-6 text-success-500 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <svg class="w-6 h-6 text-success-500 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                </td>
                            </tr>
                            <tr class="hover:bg-surface transition-colors">
                                <td class="px-6 py-4 font-medium text-text-primary">API Access</td>
                                <td class="px-6 py-4 text-center">
                                    <svg class="w-6 h-6 text-success-500 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <svg class="w-6 h-6 text-success-500 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <svg class="w-6 h-6 text-success-500 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <svg class="w-6 h-6 text-success-500 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <svg class="w-6 h-6 text-success-500 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <svg class="w-6 h-6 text-success-500 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="text-center mt-8">
                <a href="/demo" class="btn-primary">
                    <span>Download Full Comparison Sheet</span>
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Integration Workflow -->
    <section class="section">
        <div class="container-custom">
            <div class="text-center space-y-4 mb-16">
                <h2 class="text-4xl md:text-5xl font-display font-bold">Seamless <span class="text-gradient">Integration</span></h2>
                <p class="text-xl text-text-secondary max-w-3xl mx-auto">
                    All tools work together in perfect harmony, creating a unified intelligent ecosystem
                </p>
            </div>

            <div class="relative">
                <!-- Integration Flow Diagram -->
                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Step 1 -->
                    <div class="card p-8 text-center space-y-4 hover-lift">
                        <div class="w-16 h-16 bg-gradient-brand rounded-full flex items-center justify-center mx-auto">
                            <span class="text-2xl font-bold text-white">1</span>
                        </div>
                        <h3 class="text-xl font-display font-semibold">Data Collection</h3>
                        <p class="text-text-secondary">Vision AI and field tools gather real-time operational data from multiple sources across your manufacturing floor.</p>
                    </div>

                    <!-- Step 2 -->
                    <div class="card p-8 text-center space-y-4 hover-lift">
                        <div class="w-16 h-16 bg-gradient-brand rounded-full flex items-center justify-center mx-auto">
                            <span class="text-2xl font-bold text-white">2</span>
                        </div>
                        <h3 class="text-xl font-display font-semibold">AI Processing</h3>
                        <p class="text-text-secondary">AI Agent analyzes data, identifies patterns, and generates actionable insights with automated decision recommendations.</p>
                    </div>

                    <!-- Step 3 -->
                    <div class="card p-8 text-center space-y-4 hover-lift">
                        <div class="w-16 h-16 bg-gradient-brand rounded-full flex items-center justify-center mx-auto">
                            <span class="text-2xl font-bold text-white">3</span>
                        </div>
                        <h3 class="text-xl font-display font-semibold">Unified Dashboard</h3>
                        <p class="text-text-secondary">All insights consolidated in one comprehensive dashboard with cross-tool analytics and predictive intelligence.</p>
                    </div>
                </div>

                <!-- Connection Lines (Desktop Only) -->
                <div class="hidden md:block absolute top-1/2 left-0 right-0 h-0.5 bg-gradient-brand opacity-20 -translate-y-1/2 z-0"></div>
            </div>
        </div>
    </section>

    <!-- Pricing Calculator -->
    <section class="section bg-surface">
        <div class="container-custom">
            <div class="max-w-4xl mx-auto">
                <div class="text-center space-y-4 mb-12">
                    <h2 class="text-4xl md:text-5xl font-display font-bold">Calculate Your <span class="text-gradient">Investment</span></h2>
                    <p class="text-xl text-text-secondary">
                        Flexible pricing based on your needs and scale
                    </p>
                </div>

                <div class="card-elevated p-8 md:p-12">
                    <div class="space-y-8">
                        <!-- Tool Selection -->
                        <div>
                            <label class="block text-lg font-display font-semibold text-text-primary mb-4">Select Tools</label>
                            <div class="grid md:grid-cols-2 gap-4">
                                <label class="flex items-center space-x-3 p-4 border border-border rounded-lg cursor-pointer hover:border-primary-500 transition-colors">
                                    <input type="checkbox" class="pricing-tool w-5 h-5 text-primary-500 rounded" data-price="2500" checked>
                                    <span class="flex-1 font-medium">Vision AI Platform</span>
                                    <span class="text-text-secondary">₹2,500/mo</span>
                                </label>
                                <label class="flex items-center space-x-3 p-4 border border-border rounded-lg cursor-pointer hover:border-primary-500 transition-colors">
                                    <input type="checkbox" class="pricing-tool w-5 h-5 text-primary-500 rounded" data-price="1200">
                                    <span class="flex-1 font-medium">AI Agent</span>
                                    <span class="text-text-secondary">₹1,200/mo</span>
                                </label>
                                <label class="flex items-center space-x-3 p-4 border border-border rounded-lg cursor-pointer hover:border-primary-500 transition-colors">
                                    <input type="checkbox" class="pricing-tool w-5 h-5 text-primary-500 rounded" data-price="800">
                                    <span class="flex-1 font-medium">Salesman Tracker</span>
                                    <span class="text-text-secondary">₹800/mo</span>
                                </label>
                                <label class="flex items-center space-x-3 p-4 border border-border rounded-lg cursor-pointer hover:border-primary-500 transition-colors">
                                    <input type="checkbox" class="pricing-tool w-5 h-5 text-primary-500 rounded" data-price="600">
                                    <span class="flex-1 font-medium">Invoice Scanner</span>
                                    <span class="text-text-secondary">₹600/mo</span>
                                </label>
                                <label class="flex items-center space-x-3 p-4 border border-border rounded-lg cursor-pointer hover:border-primary-500 transition-colors">
                                    <input type="checkbox" class="pricing-tool w-5 h-5 text-primary-500 rounded" data-price="500">
                                    <span class="flex-1 font-medium">Business Card Scanner</span>
                                    <span class="text-text-secondary">₹500/mo</span>
                                </label>
                                <label class="flex items-center space-x-3 p-4 border border-border rounded-lg cursor-pointer hover:border-primary-500 transition-colors">
                                    <input type="checkbox" class="pricing-tool w-5 h-5 text-primary-500 rounded" data-price="900">
                                    <span class="flex-1 font-medium">Lead Finder</span>
                                    <span class="text-text-secondary">₹900/mo</span>
                                </label>
                            </div>
                        </div>

                        <!-- User Count -->
                        <div>
                            <label class="block text-lg font-display font-semibold text-text-primary mb-4">Number of Users</label>
                            <input type="range" id="userCount" min="10" max="500" value="50" step="10" class="w-full">
                            <div class="flex justify-between text-sm text-text-secondary mt-2">
                                <span>10 users</span>
                                <span id="userCountValue" class="font-semibold text-primary-500">50 users</span>
                                <span>500 users</span>
                            </div>
                        </div>

                        <!-- Pricing Summary -->
                        <div class="bg-gradient-brand rounded-xl p-8 text-white">
                            <div class="flex items-center justify-between mb-6">
                                <div>
                                    <div class="text-sm opacity-90 mb-1">Monthly Investment</div>
                                    <div class="text-4xl font-bold" id="monthlyPrice">₹2,500</div>
                                </div>
                                <div class="text-right">
                                    <div class="text-sm opacity-90 mb-1">Annual Investment</div>
                                    <div class="text-2xl font-bold" id="annualPrice">₹30,000</div>
                                    <div class="text-xs opacity-75">(Save 20%)</div>
                                </div>
                            </div>
                            <div class="border-t border-white/20 pt-4">
                                <div class="flex items-center justify-between text-sm">
                                    <span class="opacity-90">Per User Cost</span>
                                    <span class="font-semibold" id="perUserCost">₹50/month</span>
                                </div>
                            </div>
                        </div>

                        <!-- CTA -->
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="/demo" class="btn-primary flex-1 justify-center">
                                <span>Start Free Trial</span>
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                </svg>
                            </a>
                            <a href="/contact" class="btn-secondary flex-1 justify-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                                </svg>
                                <span>Contact Sales</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Customer Testimonials -->
    <section class="section">
        <div class="container-custom">
            <div class="text-center space-y-4 mb-16">
                <h2 class="text-4xl md:text-5xl font-display font-bold">What Our <span class="text-gradient">Customers Say</span></h2>
                <p class="text-xl text-text-secondary max-w-3xl mx-auto">
                    Real feedback from manufacturing leaders using our AI tools
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="card p-8 space-y-6">
                    <div class="flex items-center space-x-1">
                        <svg class="w-5 h-5 text-warning-500" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-warning-500" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-warning-500" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-warning-500" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-warning-500" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    <p class="text-text-secondary italic">"The integration between Vision AI and AI Agent has transformed our operations. We're seeing efficiency gains we never thought possible. The ROI was evident within the first quarter."</p>
                    <div class="flex items-center space-x-4">
                        <img decoding="async" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=2940&auto=format&fit=crop" 
                             alt="Portrait of James Rodriguez, Operations Director at AutoTech Manufacturing, wearing business attire" 
                             class="w-12 h-12 rounded-full object-cover"
                             loading="lazy"
                             onerror="this.src='https://images.pexels.com/photos/2182970/pexels-photo-2182970.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;">
                        <div>
                            <div class="font-semibold text-text-primary">James Rodriguez</div>
                            <div class="text-sm text-text-secondary">Operations Director, AutoTech Manufacturing</div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="card p-8 space-y-6">
                    <div class="flex items-center space-x-1">
                        <svg class="w-5 h-5 text-warning-500" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-warning-500" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-warning-500" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-warning-500" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-warning-500" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    <p class="text-text-secondary italic">"Invoice Scanner and Business Card Scanner have eliminated hours of manual data entry. Our sales team can now focus on what they do best - selling. The automation is seamless."</p>
                    <div class="flex items-center space-x-4">
                        <img decoding="async" src="https://images.unsplash.com/photo-1580489944761-15a19d654956?q=80&w=2861&auto=format&fit=crop" 
                             alt="Portrait of Sarah Chen, Sales Manager at TechParts Inc., wearing professional business attire" 
                             class="w-12 h-12 rounded-full object-cover"
                             loading="lazy"
                             onerror="this.src='https://images.pexels.com/photos/3756679/pexels-photo-3756679.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;">
                        <div>
                            <div class="font-semibold text-text-primary">Sarah Chen</div>
                            <div class="text-sm text-text-secondary">Sales Manager, TechParts Inc.</div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="card p-8 space-y-6">
                    <div class="flex items-center space-x-1">
                        <svg class="w-5 h-5 text-warning-500" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-warning-500" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-warning-500" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-warning-500" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-warning-500" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    <p class="text-text-secondary italic">"Lead Finder and Salesman Tracker have revolutionized our field operations. Our conversion rates are up 52% and our team is more productive than ever. Best investment we've made."</p>
                    <div class="flex items-center space-x-4">
                        <img decoding="async" src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?q=80&w=2787&auto=format&fit=crop" 
                             alt="Portrait of David Thompson, VP of Sales at Industrial Solutions Corp., wearing business suit" 
                             class="w-12 h-12 rounded-full object-cover"
                             loading="lazy"
                             onerror="this.src='https://images.pexels.com/photos/2379004/pexels-photo-2379004.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;">
                        <div>
                            <div class="font-semibold text-text-primary">David Thompson</div>
                            <div class="text-sm text-text-secondary">VP of Sales, Industrial Solutions Corp.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Implementation Timeline -->
    <section class="section bg-surface">
        <div class="container-custom">
            <div class="text-center space-y-4 mb-16">
                <h2 class="text-4xl md:text-5xl font-display font-bold">Implementation <span class="text-gradient">Timeline</span></h2>
                <p class="text-xl text-text-secondary max-w-3xl mx-auto">
                    Get up and running in weeks, not months
                </p>
            </div>

            <div class="max-w-4xl mx-auto">
                <div class="space-y-8">
                    <!-- Week 1-2 -->
                    <div class="flex gap-6">
                        <div class="flex-shrink-0">
                            <div class="w-16 h-16 bg-gradient-brand rounded-full flex items-center justify-center">
                                <span class="text-xl font-bold text-white">1-2</span>
                            </div>
                        </div>
                        <div class="flex-1 card p-6">
                            <h3 class="text-xl font-display font-semibold mb-2">Discovery & Planning</h3>
                            <p class="text-text-secondary mb-4">Initial consultation, requirements gathering, and customization planning with your team.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="badge badge-primary">Consultation</span>
                                <span class="badge badge-primary">Requirements</span>
                                <span class="badge badge-primary">Planning</span>
                            </div>
                        </div>
                    </div>

                    <!-- Week 3-4 -->
                    <div class="flex gap-6">
                        <div class="flex-shrink-0">
                            <div class="w-16 h-16 bg-gradient-brand rounded-full flex items-center justify-center">
                                <span class="text-xl font-bold text-white">3-4</span>
                            </div>
                        </div>
                        <div class="flex-1 card p-6">
                            <h3 class="text-xl font-display font-semibold mb-2">Setup & Integration</h3>
                            <p class="text-text-secondary mb-4">System configuration, ERP integration, and initial data migration with technical support.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="badge badge-success">Configuration</span>
                                <span class="badge badge-success">Integration</span>
                                <span class="badge badge-success">Migration</span>
                            </div>
                        </div>
                    </div>

                    <!-- Week 5-6 -->
                    <div class="flex gap-6">
                        <div class="flex-shrink-0">
                            <div class="w-16 h-16 bg-gradient-brand rounded-full flex items-center justify-center">
                                <span class="text-xl font-bold text-white">5-6</span>
                            </div>
                        </div>
                        <div class="flex-1 card p-6">
                            <h3 class="text-xl font-display font-semibold mb-2">Training & Testing</h3>
                            <p class="text-text-secondary mb-4">Comprehensive team training, pilot testing, and workflow optimization before full rollout.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="badge badge-warning">Training</span>
                                <span class="badge badge-warning">Testing</span>
                                <span class="badge badge-warning">Optimization</span>
                            </div>
                        </div>
                    </div>

                    <!-- Week 7-8 -->
                    <div class="flex gap-6">
                        <div class="flex-shrink-0">
                            <div class="w-16 h-16 bg-gradient-brand rounded-full flex items-center justify-center">
                                <span class="text-xl font-bold text-white">7-8</span>
                            </div>
                        </div>
                        <div class="flex-1 card p-6">
                            <h3 class="text-xl font-display font-semibold mb-2">Go Live & Support</h3>
                            <p class="text-text-secondary mb-4">Full deployment with dedicated support team and ongoing optimization assistance.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="badge badge-success">Deployment</span>
                                <span class="badge badge-success">Support</span>
                                <span class="badge badge-success">Monitoring</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-12">
                    <a href="/demo" class="btn-primary">
                        <span>Schedule Implementation Call</span>
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                    </a>
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
                        Ready to Experience All Five AI Tools?
                    </h2>
                    <p class="text-xl text-text-secondary max-w-3xl mx-auto mb-8">
                        Start your 14-day free trial and discover how our integrated AI suite can transform your manufacturing operations.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="/demo" class="inline-flex items-center justify-center px-8 py-4 bg-primary-500 text-white font-display font-semibold rounded-lg hover:bg-primary-600 transition-all shadow-lg hover:shadow-xl">
                            <span>Start Free Trial</span>
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </a>
                        <a href="/contact" class="inline-flex items-center justify-center px-8 py-4 bg-white text-text-primary font-display font-semibold rounded-lg border border-border hover:border-primary-300 transition-all">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                            </svg>
                            <span>Schedule Demo</span>
                        </a>
                    </div>
                    <div class="flex items-center justify-center space-x-6 mt-8 text-text-secondary text-sm">
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>All tools included</span>
                        </div>
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
                            <span>Full support included</span>
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
        // Tool Filtering
        function filterTools(category) {
            const toolCards = document.querySelectorAll('.tool-card');
            const filterBtns = document.querySelectorAll('.tool-filter-btn');
            const noResults = document.getElementById('noResults');
            let visibleCount = 0;

            // Update active button
            filterBtns.forEach(btn => {
                btn.classList.remove('active');
                if (btn.dataset.filter === category) {
                    btn.classList.add('active');
                }
            });

            // Filter cards
            toolCards.forEach(card => {
                if (category === 'all' || card.dataset.category.includes(category)) {
                    card.style.display = 'block';
                    visibleCount++;
                } else {
                    card.style.display = 'none';
                }
            });

            // Show/hide no results message
            if (visibleCount === 0) {
                noResults.classList.remove('hidden');
            } else {
                noResults.classList.add('hidden');
            }
        }

        function resetFilters() {
            filterTools('all');
        }

        // Pricing Calculator
        const pricingTools = document.querySelectorAll('.pricing-tool');
        const userCountSlider = document.getElementById('userCount');
        const userCountValue = document.getElementById('userCountValue');
        const monthlyPrice = document.getElementById('monthlyPrice');
        const annualPrice = document.getElementById('annualPrice');
        const perUserCost = document.getElementById('perUserCost');

        function updatePricing() {
            let totalPrice = 0;
            pricingTools.forEach(tool => {
                if (tool.checked) {
                    totalPrice += parseInt(tool.dataset.price);
                }
            });

            const users = parseInt(userCountSlider.value);
            const monthly = totalPrice;
            const annual = Math.round(totalPrice * 12 * 0.8); // 20% discount
            const perUser = Math.round(monthly / users);

            monthlyPrice.textContent = '₹' + monthly.toLocaleString();
            annualPrice.textContent = '₹' + annual.toLocaleString();
            perUserCost.textContent = '₹' + perUser + '/month';
        }

        pricingTools.forEach(tool => {
            tool.addEventListener('change', updatePricing);
        });

        userCountSlider.addEventListener('input', (e) => {
            userCountValue.textContent = e.target.value + ' users';
            updatePricing();
        });

        // Initialize pricing
        updatePricing();

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

        // Add active class to filter buttons
        const style = document.createElement('style');
        style.textContent = `
            .tool-filter-btn {
                display: inline-flex;
                align-items: center;
                space-x: 0.5rem;
                padding: 0.5rem 1rem;
                font-size: 0.875rem;
                font-weight: 500;
                color: #64748B;
                background-color: #F1F5F9;
                border-radius: 0.5rem;
                transition: all 0.3s;
                cursor: pointer;
                white-space: nowrap;
            }
            .tool-filter-btn:hover {
                background-color: #E2E8F0;
                color: #1E293B;
            }
            .tool-filter-btn.active {
                background: linear-gradient(135deg, #0096EE 0%, #0096EE 100%);
                color: white;
            }
        `;
        document.head.appendChild(style);
    </script>
</body>
</html>