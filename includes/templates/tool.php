<?php
// Free tool page: hero, the tool itself, then the explainer with a sticky table of contents,
// a "More free tools" side list, FAQ, related links and CTA.
// $page['tool']     = trusted HTML for the tool's form and results (written in the page file)
// $page['script']   = path of the tool's JavaScript, or a list of paths loaded in order
// $page['sections'] = [[id, heading, html], ...], $page['related'] = [[title, url, summary], ...]
require_once __DIR__ . '/longform.php';
$page['css'] = array_merge($page['css'] ?? [], ['/css/guide-article.css', '/css/tools.css']);
render_head($page);

$check = 'M5 13l4 4L19 7';
lf_hero($page, 'Free tool', [
    '<span>' . lf_svg($check) . 'Free, no sign-up</span>',
    '<span>' . lf_svg($check) . 'Runs in your browser</span>',
    '<span>' . lf_svg($check) . 'Nothing is stored</span>',
]);

$self = basename($page['path']);
$more = '';
foreach (require dirname(__DIR__) . '/data/tools.php' as [$slug, $name, $ico]) {
    if ($slug === $self) continue;
    $more .= '<a href="/tools/' . e($slug) . '">' . icon($ico, '') . e($name) . '</a>';
}
$aside = '<div class="ga-card"><p class="ga-card-title">More free tools</p><nav class="ga-links">' . $more . '</nav></div>'
    . lf_demo_card($page['cta_heading'], $page['cta_text']);

$before = '<div class="tool-card" id="tool">' . $page['tool'] . '</div>'
    . '<p class="tool-note">Everything is calculated in your browser. Nothing you enter is sent to us or stored.</p>'
    . '<div class="tool-spacer"></div>';

lf_body($page, $aside, $before);
lf_related($page, 'Related');
render_cta($page['cta_heading'], $page['cta_text']);
foreach ((array) $page['script'] as $src) {
    echo '<script src="' . e($src) . '?v=' . asset_v($src) . '" defer></script>' . "\n";
}
lf_script();
render_foot($page);
