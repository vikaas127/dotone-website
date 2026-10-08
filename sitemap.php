<?php
header("Content-Type: application/xml; charset=UTF-8");

$base = "https://dotoneforbusiness.in/";
$files = glob(__DIR__ . "/*.html");

echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

foreach ($files as $path) {
    $file = basename($path);

    if (in_array($file, ['header.html','footer.html'])) continue;

    echo '<url>';
    echo '<loc>' . $base . str_replace('.html','',$file) . '</loc>';
    echo '<lastmod>' . date('Y-m-d', filemtime($path)) . '</lastmod>';
    echo '<priority>0.8</priority>';
    echo '</url>';
}

echo '</urlset>';
