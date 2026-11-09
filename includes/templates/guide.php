<?php
// Long-form guide: hero with author, date and read time; article with a sticky table of contents;
// FAQ, related reading and CTA.
// $page['sections'] = [[id, heading, html], ...] (html is trusted, written in the page file)
// $page['related']  = [[title, url, summary], ...]
require_once __DIR__ . '/longform.php';
$page['css'] = array_merge($page['css'] ?? [], ['/css/guide-article.css']);
render_head($page);

$published = $page['article']['published'] ?? null;
$modified = $page['article']['modified'] ?? null;
// $page['author'] = ['Full Name', 'Role', 'https://www.linkedin.com/in/...'] shows a named author (E-E-A-T); else "DotOne team"
$author = $page['author'] ?? null;
$authorName = $author ? e($author[0]) . (!empty($author[1]) ? ' <span class="ga-author-role">· ' . e($author[1]) . '</span>' : '') : 'DotOne team';
if ($author && !empty($author[2])) $authorName = '<a href="' . e($author[2]) . '" rel="author noopener" target="_blank">' . $authorName . '</a>';
$meta = [
    '<span class="ga-author"><img src="/public/icon-192.png" alt="" width="28" height="28">' . $authorName . '</span>',
];
$calendar = 'M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z';
if ($published) {
    $meta[] = '<span>' . lf_svg($calendar) . 'Published ' . e(date('j M Y', strtotime($published))) . '</span>';
}
if ($modified && $modified !== $published) {
    $meta[] = '<span>' . lf_svg($calendar) . 'Updated ' . e(date('j M Y', strtotime($modified))) . '</span>';
}
$meta[] = '<span>' . lf_svg('M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z') . e($page['read_time']) . ' read</span>';

lf_hero($page, $page['eyebrow'], $meta);
lf_body($page, lf_demo_card($page['cta_heading'], $page['cta_text']));
lf_related($page, 'Related reading');
render_cta($page['cta_heading'], $page['cta_text']);
lf_script();
render_foot($page);
