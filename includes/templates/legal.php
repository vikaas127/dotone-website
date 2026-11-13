<?php
// Policy page (privacy, terms, refunds): hero with the last-updated date, article with a table of contents.
// $page['sections'] = [[id, heading, html], ...] (html is trusted, written in the page file); $page['updated'] = 'Y-m-d'
require_once __DIR__ . '/longform.php';
$page['css'] = array_merge($page['css'] ?? [], ['/css/guide-article.css']);
render_head($page);

$meta = ['<span>' . lf_svg('M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z') . 'Last updated ' . e(date('j F Y', strtotime($page['updated']))) . '</span>'];
lf_hero($page, 'Legal', $meta);

$others = '';
foreach ([['/privacy-policy', 'Privacy Policy'], ['/terms', 'Terms of Service'], ['/refund-policy', 'Cancellation and Refund Policy']] as [$url, $name]) {
    if ($url !== $page['path']) $others .= '<li><a href="' . e($url) . '">' . e($name) . '</a></li>';
}
lf_body($page, '<div class="ga-card"><h3>Other policies</h3><ul>' . $others . '</ul><p>Questions? Write to <a href="mailto:legal@techdotbit.in">legal@techdotbit.in</a>.</p></div>');
lf_script();
render_foot($page);
