<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="How DotOne protects your data: TLS 1.2+ and AES encryption, role-based access with audit logs and automated encrypted backups.">
    <title>Security and Data Protection | DotOne</title>
    <link rel="canonical" href="https://dotone.biz/security">
    <link rel="icon" href="/favicon.ico" sizes="48x48"><link rel="icon" type="image/png" sizes="32x32" href="/public/favicon-32.png"><link rel="icon" type="image/png" sizes="16x16" href="/public/favicon-16.png"><link rel="apple-touch-icon" href="/public/apple-touch-icon.png"><link rel="manifest" href="/public/manifest.json"><meta name="theme-color" content="#0096EE">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="DotOne">
    <meta property="og:title" content="Security and Data Protection | DotOne">
    <meta property="og:description" content="How DotOne protects your data: TLS 1.2+ and AES encryption, role-based access with audit logs and automated encrypted backups.">
    <meta property="og:url" content="https://dotone.biz/security">
    <meta property="og:image" content="https://dotone.biz/assets/og-image.jpg?v=2">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="DotOne: ERP, AI agents and automation in one platform">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Security and Data Protection | DotOne">
    <meta name="twitter:description" content="How DotOne protects your data: TLS 1.2+ and AES encryption, role-based access with audit logs and automated encrypted backups.">
    <meta name="twitter:image" content="https://dotone.biz/assets/og-image.jpg?v=2">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=JetBrains+Mono:wght@400&display=swap">
    <link rel="stylesheet" href="/css/main.css?v=20261019">
    <script src="/js/header-nav.js?v=20261019" defer></script>
</head>
<body class="bg-background">

<div id="header"><?php include __DIR__ . '/includes/header.php'; ?></div>

<section class="relative pt-32 pb-16 md:pt-40 md:pb-20 overflow-hidden">
    <div class="absolute inset-0 hero-tint" aria-hidden="true"></div>
    <div class="container-custom relative z-10 text-center max-w-3xl mx-auto">
        <span class="section-label">Security</span>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-display font-semibold text-text-primary leading-tight mb-6">Security and Data Protection</h1>
        <p class="text-lg md:text-xl text-text-secondary leading-relaxed">
            How DotOne protects your business data, workforce records and day-to-day operations.
        </p>
    </div>
</section>

<?php require_once __DIR__ . '/includes/showcase/engine.php'; showcase('security'); ?>

<section class="section bg-surface">
    <div class="container-custom">
        <div class="max-w-2xl mb-10">
            <h2 class="text-3xl md:text-4xl font-display font-semibold mb-4">How we protect your data</h2>
            <p class="text-lg text-text-secondary">The safeguards behind every DotOne account.</p>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="card p-6">
                <div class="w-11 h-11 bg-gradient-brand rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-display font-semibold mb-2">Data encryption</h3>
                <p class="text-text-secondary text-[0.95rem] leading-relaxed">Data in transit is protected with TLS 1.2+, and sensitive fields at rest are encrypted with AES-256.</p>
            </div>
            <div class="card p-6">
                <div class="w-11 h-11 bg-gradient-brand rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-display font-semibold mb-2">Access control</h3>
                <p class="text-text-secondary text-[0.95rem] leading-relaxed">Role-based access means people only see data relevant to their role, and admin audit logs track key configuration and user changes.</p>
            </div>
            <div class="card p-6">
                <div class="w-11 h-11 bg-gradient-brand rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2"/>
                    </svg>
                </div>
                <h3 class="text-lg font-display font-semibold mb-2">Secure infrastructure</h3>
                <p class="text-text-secondary text-[0.95rem] leading-relaxed">Hardened cloud servers with automated encrypted backups, firewalls and intrusion monitoring, with production and staging fully isolated.</p>
            </div>
            <div class="card p-6">
                <div class="w-11 h-11 bg-gradient-brand rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                    </svg>
                </div>
                <h3 class="text-lg font-display font-semibold mb-2">Compliance and privacy</h3>
                <p class="text-text-secondary text-[0.95rem] leading-relaxed">We follow Indian IT Act guidelines and GDPR principles of data minimisation, and HRMS supports PF, ESIC and statutory records.</p>
            </div>
        </div>
        <div class="card p-6 mt-6">
            <h3 class="text-lg font-display font-semibold mb-2">Vision AI and CCTV data</h3>
            <p class="text-text-secondary text-[0.95rem] leading-relaxed">Video is processed on-premises or at your private network edge and is never shared with third parties; only analytics such as counts and alerts reach your dashboard, with configurable retention.</p>
        </div>
    </div>
</section>

<section class="section">
    <div class="container-custom">
        <div class="relative rounded-3xl overflow-hidden cta-frame px-8 py-14 md:px-16 md:py-20 text-center">
            <h2 class="text-3xl md:text-4xl font-display font-semibold text-text-primary mb-4">Questions about security?</h2>
            <p class="text-lg text-text-secondary max-w-2xl mx-auto mb-8">Enterprise customers can request our security questionnaire, DPA and architecture overview.</p>
            <div class="flex flex-col sm:flex-row gap-3 justify-center">
                <a href="/contact" class="btn-hero-glow-lg">Contact the security team</a>
                <a href="https://techdotbit.com/privacy-policy/" target="_blank" rel="noopener noreferrer" class="btn-ghost-lg">Privacy policy</a>
            </div>
            <p class="text-xs text-text-secondary mt-8">DotOne is a product of <a href="https://techdotbit.com" class="text-primary-600 hover:underline" target="_blank" rel="noopener noreferrer">TechDotBit Pvt Ltd.</a></p>
        </div>
    </div>
</section>

<div id="footer"><?php include __DIR__ . '/includes/footer.php'; ?></div>

</body>
</html>
