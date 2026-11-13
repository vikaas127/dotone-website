<?php
header("Content-Type: application/xml; charset=UTF-8");

$base = "https://dotone.in/";

// Public pages live in the root and in these section folders
$sections = ['', 'ai-agents/', 'industries/', 'solutions/', 'integrations/', 'guides/', 'vision-ai/', 'compare/', 'tools/'];
$skip = ['sitemap.php', 'llms.php', 'contact-submit.php', 'webinar-count.php', 'webinar-register.php', 'config.php', 'db.php', 'thank-you.php', 'apply.php', 'sales-documentation.php', 'factory-demo.php'];

$files = [];
foreach ($sections as $dir) {
    foreach (glob(__DIR__ . '/' . $dir . '*.php') as $path) {
        if (in_array(basename($path), $skip)) continue;
        // Private pages (noindex) stay out of the sitemap
        if (stripos(file_get_contents($path), 'noindex') !== false) continue;
        $files[] = [$dir . basename($path, '.php'), $path];
    }
}

echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

foreach ($files as [$slug, $path]) {
    $loc = $slug === 'index' ? $base : $base . $slug;

    // lastmod only when the page states a real content date. File times change on every
    // deploy, which makes every page look freshly edited and teaches Google to ignore lastmod.
    $src = file_get_contents($path);
    $lastmod = null;
    if (preg_match("/'modified'\\s*=>\\s*'(\\d{4}-\\d{2}-\\d{2})'/", $src, $m) || preg_match("/'published'\\s*=>\\s*'(\\d{4}-\\d{2}-\\d{2})'/", $src, $m)) $lastmod = $m[1];

    echo '<url>';
    echo '<loc>' . htmlspecialchars($loc) . '</loc>';
    if ($lastmod) echo '<lastmod>' . $lastmod . '</lastmod>';
    echo '</url>';
}

echo '</urlset>';
