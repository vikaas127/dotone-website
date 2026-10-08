<?php
// Shared page shell for template-driven pages: <head>, header, footer.
// Usage: $page = [...]; render_head($page); ...content...; render_foot($page);

const SITE_URL = 'https://dotone.biz';
const ASSET_VERSION = '20261017';

require_once __DIR__ . '/data/catalog.php';

function e($value)
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

function render_head(array $page)
{
    $url = SITE_URL . ($page['path'] === '/' ? '/' : $page['path']);
    $title = $page['title'];
    $desc = $page['description'];
    $v = ASSET_VERSION;
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= e($desc) ?>">
    <title><?= e($title) ?></title>
    <link rel="canonical" href="<?= e($url) ?>">
    <link rel="icon" href="/favicon.ico" sizes="48x48"><link rel="icon" type="image/png" sizes="32x32" href="/public/favicon-32.png"><link rel="icon" type="image/png" sizes="16x16" href="/public/favicon-16.png"><link rel="apple-touch-icon" href="/public/apple-touch-icon.png"><link rel="manifest" href="/public/manifest.json"><meta name="theme-color" content="#0096EE">
<?php if (!empty($page['noindex'])): ?>
    <meta name="robots" content="noindex, follow">
<?php endif; ?>
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="DotOne">
    <meta property="og:title" content="<?= e($title) ?>">
    <meta property="og:description" content="<?= e($desc) ?>">
    <meta property="og:url" content="<?= e($url) ?>">
    <meta property="og:image" content="<?= SITE_URL ?>/assets/og-image.jpg?v=2">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="DotOne: ERP, AI agents and automation in one platform">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= e($title) ?>">
    <meta name="twitter:description" content="<?= e($desc) ?>">
    <meta name="twitter:image" content="<?= SITE_URL ?>/assets/og-image.jpg?v=2">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=JetBrains+Mono:wght@400&display=swap">
    <link rel="stylesheet" href="/css/main.css?v=<?= $v ?>">
    <script src="/js/header-nav.js?v=<?= $v ?>" defer></script>
<?php render_breadcrumb_schema($page); ?>
<?php if (!empty($page['faq'])) render_faq_schema($page['faq']); ?>
</head>
<body class="bg-background">

<div id="header"><?php include __DIR__ . '/header.php'; ?></div>
<?php
}

function render_foot(array $page = [])
{
    $v = ASSET_VERSION;
    ?>

<div id="footer"><?php include __DIR__ . '/footer.php'; ?></div>
</body>
</html>
<?php
}

// BreadcrumbList for nested pages, e.g. Home > AI Agents > Inventory AI Agent
function render_breadcrumb_schema(array $page)
{
    if (empty($page['breadcrumbs'])) return;
    $items = [['Home', '/']];
    foreach ($page['breadcrumbs'] as $crumb) $items[] = $crumb;
    $list = [];
    foreach ($items as $i => [$name, $path]) {
        $list[] = ['@type' => 'ListItem', 'position' => $i + 1, 'name' => $name, 'item' => SITE_URL . $path];
    }
    $data = ['@context' => 'https://schema.org', '@type' => 'BreadcrumbList', 'itemListElement' => $list];
    echo '    <script type="application/ld+json">' . json_encode($data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . "</script>\n";
}

function render_faq_schema(array $faq)
{
    $entities = [];
    foreach ($faq as [$q, $a]) {
        $entities[] = ['@type' => 'Question', 'name' => $q, 'acceptedAnswer' => ['@type' => 'Answer', 'text' => faq_plain($a)]];
    }
    $data = ['@context' => 'https://schema.org', '@type' => 'FAQPage', 'mainEntity' => $entities];
    echo '    <script type="application/ld+json">' . json_encode($data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . "</script>\n";
}

function icon($name, $class = 'w-6 h-6')
{
    $path = ICONS[$name] ?? ICONS['spark'];
    return '<svg class="' . e($class) . '" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="' . $path . '"/></svg>';
}

// Visible breadcrumb trail above a page heading
function render_breadcrumbs(array $page)
{
    if (empty($page['breadcrumbs'])) return;
    echo '<nav class="page-crumbs" aria-label="Breadcrumb"><a href="/">Home</a>';
    $last = count($page['breadcrumbs']) - 1;
    foreach ($page['breadcrumbs'] as $i => [$name, $path]) {
        echo '<span aria-hidden="true">/</span>';
        echo $i === $last ? '<span>' . e($name) . '</span>' : '<a href="' . e($path) . '">' . e($name) . '</a>';
    }
    echo '</nav>';
}

// FAQ answers may contain [link text](/path) for internal links
function faq_links($text)
{
    return preg_replace('#\[([^\]]+)\]\((/[a-z0-9/_-]*)\)#', '<a href="$2" class="text-primary-600 hover:underline">$1</a>', e($text));
}

function faq_plain($text)
{
    return preg_replace('#\[([^\]]+)\]\((/[a-z0-9/_-]*)\)#', '$1', $text);
}

function render_faq(array $faq, $heading = 'Frequently asked questions')
{
    if (!$faq) return;
    ?>
    <section class="section bg-white">
        <div class="container-custom max-w-3xl">
            <h2 class="text-3xl md:text-4xl font-display font-semibold text-center mb-10"><?= e($heading) ?></h2>
            <div class="faq-list">
<?php foreach ($faq as [$q, $a]): ?>
                <details class="faq-item">
                    <summary><?= e($q) ?></summary>
                    <p><?= faq_links($a) ?></p>
                </details>
<?php endforeach; ?>
            </div>
        </div>
    </section>
<?php
}

function render_cta($heading, $text, $primary = ['Book a Demo', '/demo'], $secondary = ['Talk to Sales', '/contact'])
{
    ?>
    <section class="section">
        <div class="container-custom">
            <div class="relative rounded-3xl overflow-hidden cta-frame px-8 py-14 md:px-16 md:py-20 text-center">
                <h2 class="text-3xl md:text-4xl font-display font-semibold text-text-primary mb-4"><?= e($heading) ?></h2>
                <p class="text-lg text-text-secondary max-w-2xl mx-auto mb-8"><?= e($text) ?></p>
                <div class="flex flex-col sm:flex-row gap-3 justify-center">
                    <a href="<?= e($primary[1]) ?>" class="btn-hero-glow-lg"><?= e($primary[0]) ?></a>
                    <a href="<?= e($secondary[1]) ?>" class="btn-ghost-lg"><?= e($secondary[0]) ?></a>
                </div>
            </div>
        </div>
    </section>
<?php
}
