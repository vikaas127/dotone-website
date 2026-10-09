<?php
header("Content-Type: application/xml; charset=UTF-8");

$base = "https://dotone.biz/";

// Public pages live in the root and in these section folders
$sections = ['', 'ai-agents/', 'industries/', 'solutions/', 'integrations/', 'guides/', 'vision-ai/', 'compare/'];
$skip = ['sitemap.php', 'contact-submit.php', 'webinar-count.php', 'webinar-register.php', 'config.php', 'db.php', 'thank-you.php', 'apply.php', 'sales-documentation.php', 'factory-twin.php'];

$files = [];
foreach ($sections as $dir) {
    foreach (glob(__DIR__ . '/' . $dir . '*.php') as $path) {
        if (in_array(basename($path), $skip)) continue;
        $files[] = [$dir . basename($path, '.php'), $path];
    }
}

echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

foreach ($files as [$slug, $path]) {
    $loc = $slug === 'index' ? $base : $base . $slug;

    echo '<url>';
    echo '<loc>' . htmlspecialchars($loc) . '</loc>';
    echo '<lastmod>' . date('Y-m-d', filemtime($path)) . '</lastmod>';
    echo '</url>';
}

echo '</urlset>';
