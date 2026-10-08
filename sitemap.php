<?php
header("Content-Type: application/xml; charset=UTF-8");

$base = "https://dotoneforbusiness.in/";
$files = glob(__DIR__ . "/*.php");

echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

foreach ($files as $path) {
    $file = basename($path);

    if (in_array($file, ['sitemap.php','contact-submit.php','webinar-count.php','webinar-register.php','config.php','db.php','thank-you.php','apply.php'])) continue;

    $slug = basename($file, '.php');
    $loc = $slug === 'index' ? $base : $base . $slug;

    echo '<url>';
    echo '<loc>' . $loc . '</loc>';
    echo '<lastmod>' . date('Y-m-d', filemtime($path)) . '</lastmod>';
    echo '<priority>0.8</priority>';
    echo '</url>';
}

echo '</urlset>';
