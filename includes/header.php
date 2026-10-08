<?php require_once __DIR__ . '/data/catalog.php'; ?>
<header class="site-header fixed top-0 left-0 right-0 z-50 transition-all duration-300 header-scrolled" id="siteHeader">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="nav-bar-row relative flex items-center justify-between h-16 w-full min-w-0">
            <a href="/" class="nav-logo flex items-center flex-shrink-0 z-10">
                <img src="/assets/dotone-wm-blue.png" alt="Dotone" class="nav-logo-img h-12 w-auto object-contain" width="102" height="48">
            </a>

            <div class="nav-links hidden lg:flex items-center gap-1 absolute left-1/2 -translate-x-1/2">
                <div class="nav-dropdown-group">
                    <button type="button" class="nav-link nav-dropdown-trigger flex items-center gap-1 px-3 py-2 text-sm font-medium rounded-lg transition-colors" aria-expanded="false" aria-haspopup="true">
                        Platform
                        <svg class="w-3.5 h-3.5 nav-chevron transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="nav-mega-menu" role="menu">
                        <div class="nav-mega-menu-inner">
                            <div class="grid grid-cols-4 gap-8">
<?php
$menuIcon = function ($name) { return '<span class="mega-menu-icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="' . (ICONS[$name] ?? ICONS['spark']) . '"/></svg></span>'; };
$moduleKeys = array_keys(MODULES);
$menuCols = [
    'ERP Modules' => array_map(function ($k) { return ['/' . $k, MODULES[$k]['name'], MODULES[$k]['icon']]; }, array_slice($moduleKeys, 0, 8)),
    'More Modules' => array_merge(
        array_map(function ($k) { return ['/' . $k, MODULES[$k]['name'], MODULES[$k]['icon']]; }, array_slice($moduleKeys, 8)),
        [['/modules', 'All modules', 'flow']]
    ),
    'AI Agents' => array_merge(
        array_map(function ($k) { return ['/ai-agents/' . $k, AGENTS[$k]['name'], AGENTS[$k]['icon']]; }, ['inventory', 'sales', 'purchase', 'production', 'finance', 'reporting']),
        [['/ai-agents', 'All AI agents', 'flow'], ['/generative-ai', 'Generative AI', 'chat']]
    ),
    'AI & Automation' => array_merge(
        [['/ai-powered-erp', 'AI-Powered ERP', 'spark'], ['/vision-ai', 'Vision AI', 'eye']],
        array_map(function ($u) { return [$u, AUTOMATION[$u]['name'], AUTOMATION[$u]['icon']]; }, array_keys(AUTOMATION)),
        [['/manufacturing-erp', 'Manufacturing ERP', 'factory']]
    ),
];
foreach ($menuCols as $colTitle => $links): ?>
                                <div>
                                    <div class="mega-menu-col-title"><?= $colTitle ?></div>
                                    <div class="space-y-1">
<?php foreach ($links as [$href, $label, $ico]): ?>
                                        <a href="<?= $href ?>" class="mega-menu-link"><?= $menuIcon($ico) ?><?= htmlspecialchars($label) ?></a>
<?php endforeach; ?>
                                    </div>
                                </div>
<?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="/industries" class="nav-link px-3 py-2 text-sm font-medium rounded-lg transition-colors">Industries</a>
                <a href="/pricing" class="nav-link px-3 py-2 text-sm font-medium rounded-lg transition-colors">Pricing</a>
                <div class="nav-dropdown-group">
                    <button type="button" class="nav-link nav-dropdown-trigger flex items-center gap-1 px-3 py-2 text-sm font-medium rounded-lg transition-colors" aria-expanded="false" aria-haspopup="true">
                        Resources
                        <svg class="w-3.5 h-3.5 nav-chevron transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="nav-mega-menu nav-mega-menu--resources" role="menu">
                        <div class="nav-mega-menu-inner nav-mega-menu-inner--wide">
                            <div class="mega-menu-grid-kylas">
                                <div class="mega-menu-col">
                                    <div class="mega-menu-category-head">
                                        <span class="mega-menu-icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg></span>
                                        <span class="mega-menu-category-title">Articles &amp; Blogs</span>
                                    </div>
                                    <ul class="mega-menu-sublinks">
                                        <li><a href="/guides">All Guides &amp; Articles</a></li>
                                        <li><a href="/guides/what-is-erp">ERP &amp; Operations</a></li>
                                        <li><a href="/vision-ai">AI for Shopfloor</a></li>
                                        <li><a href="/guides/bom-setup">BOM Setup Guide</a></li>
                                        <li><a href="/integrations/tally">Tally Connector Guide</a></li>
                                    </ul>
                                </div>
                                <div class="mega-menu-col">
                                    <div class="mega-menu-category-head">
                                        <span class="mega-menu-icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg></span>
                                        <span class="mega-menu-category-title">Free Resources</span>
                                    </div>
                                    <ul class="mega-menu-sublinks">
                                        <li><a href="/demo">Demo Center</a></li>
                                        <li><a href="/support">Support Center</a></li>
                                        <li><a href="/api-reference">API Reference</a></li>
                                        <li><a href="/guides/bom-setup">BOM Setup Guide</a></li>
                                        <li><a href="/integrations/tally">Tally Connector Guide</a></li>
                                    </ul>
                                </div>
                                <div class="mega-menu-col mega-menu-col--stack">
                                    <a href="/webinar" class="mega-menu-feature-link">
                                        <span class="mega-menu-icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg></span>
                                        <span class="mega-menu-feature-title">Webinars</span>
                                    </a>
                                    <a href="/case-studies" class="mega-menu-feature-link">
                                        <span class="mega-menu-icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg></span>
                                        <span class="mega-menu-feature-title">Customer Stories</span>
                                    </a>
                                </div>
                                <div class="mega-menu-col mega-menu-col--stack">
                                    <a href="/demo" class="mega-menu-feature-link">
                                        <span class="mega-menu-icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span>
                                        <span class="mega-menu-feature-title">&lsquo;How to&rsquo; Videos</span>
                                    </a>
                                    <a href="/case-studies" class="mega-menu-feature-link">
                                        <span class="mega-menu-icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg></span>
                                        <span class="mega-menu-feature-title">Case Studies</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="nav-actions hidden lg:flex items-center gap-5 flex-shrink-0 z-10">
                <a href="/contact" class="nav-login text-sm font-medium transition-colors">Login</a>
                <a href="/demo" class="btn-hero-glow text-sm px-5 py-2.5">Get Started</a>
            </div>

            <button id="mobileMenuBtn" type="button" class="menu-toggle lg:hidden p-2 rounded-lg transition-colors z-10" aria-label="Open menu">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>

        <div id="mobileMenu" class="mobile-menu-panel hidden lg:hidden pb-4 px-2 max-h-[80vh] overflow-y-auto">
            <div class="flex flex-col gap-1 pt-2">
                <button type="button" id="platformMobileToggle" class="flex items-center justify-between px-4 py-3 text-sm font-medium rounded-lg transition-colors">
                    Platform
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div id="platformMobileLinks" class="hidden pl-4 pb-2 space-y-1 border-l ml-4 mb-2">
                    <a href="/modules" class="block px-3 py-2 text-xs font-semibold rounded-lg transition-colors">ERP Modules</a>
<?php foreach (MODULES as $k => $m): ?>
                    <a href="/<?= $k ?>" class="block px-3 py-2 text-xs rounded-lg transition-colors"><?= htmlspecialchars($m['name']) ?></a>
<?php endforeach; ?>
                    <a href="/ai-agents" class="block px-3 py-2 text-xs font-semibold rounded-lg transition-colors">AI Agents</a>
<?php foreach (AGENTS as $k => $ag): ?>
                    <a href="/ai-agents/<?= $k ?>" class="block px-3 py-2 text-xs rounded-lg transition-colors"><?= htmlspecialchars($ag['name']) ?></a>
<?php endforeach; ?>
                    <a href="/solutions" class="block px-3 py-2 text-xs font-semibold rounded-lg transition-colors">Automation</a>
                </div>
                <a href="/industries" class="px-4 py-3 text-sm font-medium rounded-lg transition-colors">Industries</a>
                <a href="/pricing" class="px-4 py-3 text-sm font-medium rounded-lg transition-colors">Pricing</a>
                <button type="button" id="resourcesMobileToggle" class="flex items-center justify-between px-4 py-3 text-sm font-medium rounded-lg transition-colors">
                    Resources
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div id="resourcesMobileLinks" class="hidden pl-4 pb-2 space-y-1 border-l ml-4 mb-2">
                    <a href="/guides" class="block px-3 py-2 text-xs rounded-lg transition-colors">Guides &amp; Articles</a>
                    <a href="/demo" class="block px-3 py-2 text-xs rounded-lg transition-colors">Demo Center</a>
                    <a href="/webinar" class="block px-3 py-2 text-xs rounded-lg transition-colors">Webinars</a>
                    <a href="/case-studies" class="block px-3 py-2 text-xs rounded-lg transition-colors">Case Studies</a>
                    <a href="/api-reference" class="block px-3 py-2 text-xs rounded-lg transition-colors">API Reference</a>
                </div>
                <a href="/security" class="px-4 py-3 text-sm font-medium rounded-lg transition-colors">Security</a>
                <a href="/contact" class="px-4 py-3 text-sm font-medium rounded-lg transition-colors">Login</a>
                <a href="/demo" class="btn-hero-glow text-center mt-2 justify-center text-sm">Get Started</a>
            </div>
        </div>
    </nav></header>

