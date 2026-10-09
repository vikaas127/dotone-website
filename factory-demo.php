<?php
// Factory demo: a self-contained 3D demo app (React + three.js), served with the site's SEO tags added.
require_once __DIR__ . '/includes/site.php';

$title = 'Factory Demo: Live 3D Factory with Vision AI and ERP | DotOne';
$desc = 'Explore a live 3D demo factory: machines, stock, docks, trucks, people and alerts from DotOne ERP and Vision AI, with a replayable shift timeline.';
$head = '<title>' . e($title) . '</title>' . "\n"
    . '<meta name="description" content="' . e($desc) . '">' . "\n"
    . '<meta name="robots" content="noindex, follow">' . "\n"
    . '<link rel="canonical" href="' . SITE_URL . '/vision-ai">' . "\n"
    . '<link rel="icon" href="/favicon.ico" sizes="48x48"><link rel="apple-touch-icon" href="/public/apple-touch-icon.png">' . "\n"
    . '<meta property="og:type" content="website"><meta property="og:site_name" content="DotOne">' . "\n"
    . '<meta property="og:title" content="' . e($title) . '"><meta property="og:description" content="' . e($desc) . '">' . "\n"
    . '<meta property="og:url" content="' . SITE_URL . '/factory-demo"><meta property="og:image" content="' . SITE_URL . '/images/factory-demo.webp">' . "\n"
    . '<meta name="twitter:card" content="summary_large_image">' . "\n"
    . '<script type="application/ld+json">' . json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'WebPage',
        'name' => $title,
        'description' => $desc,
        'url' => SITE_URL . '/factory-demo',
        'isPartOf' => ['@type' => 'WebSite', 'name' => 'DotOne', 'url' => SITE_URL . '/'],
    ], JSON_UNESCAPED_SLASHES) . '</script>' . "\n"
    . '<script type="application/ld+json">' . json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => SITE_URL . '/'],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Vision AI', 'item' => SITE_URL . '/vision-ai'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => 'Factory demo', 'item' => SITE_URL . '/factory-demo'],
        ],
    ], JSON_UNESCAPED_SLASHES) . '</script>' . "\n";

$html = @file_get_contents(__DIR__ . '/includes/demos/factory-demo.html');
if ($html === false || strpos($html, '</head>') === false) {
    http_response_code(503);
    exit('The factory demo is not available right now.');
}
// Plain string edits: regexes can hit PCRE limits on a 1 MB file
$a = strpos($html, '<title>');
$b = strpos($html, '</title>');
if ($a !== false && $b !== false) $html = substr($html, 0, $a) . substr($html, $b + 8);
$html = substr_replace($html, $head . '</head>', strpos($html, '</head>'), 7);
// Heading for search engines and screen readers; the app draws its own visual title
$html = substr_replace($html, '<body><h1 style="position:absolute;width:1px;height:1px;overflow:hidden;clip:rect(0 0 0 0)">DotOne factory demo: a live 3D view of a demo factory</h1>', strpos($html, '<body>'), 6);
header('Content-Type: text/html; charset=utf-8');
echo $html;
