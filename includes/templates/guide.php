<?php
// Long-form guide: hero, table of contents, article sections, FAQ, related links, CTA.
// $page['sections'] = [[id, heading, html], ...] (html is trusted, written in the page file)
// $page['related']  = [[title, url, summary], ...]
require_once dirname(__DIR__) . '/site.php';
$page['css'] = array_merge($page['css'] ?? [], ['/css/guide-article.css']);
render_head($page);
?>

<section class="relative pt-32 pb-12 md:pt-40 md:pb-16 overflow-hidden">
    <div class="absolute inset-0 hero-tint" aria-hidden="true"></div>
    <div class="container-custom relative z-10 max-w-3xl mx-auto">
        <?php render_breadcrumbs($page); ?>
        <span class="section-label"><?= e($page['eyebrow']) ?> · <?= e($page['read_time']) ?> read</span>
        <h1 class="text-4xl md:text-5xl font-display font-semibold text-text-primary leading-tight mb-6"><?= e($page['h1']) ?></h1>
        <p class="text-lg md:text-xl text-text-secondary leading-relaxed"><?= e($page['intro']) ?></p>
    </div>
</section>

<section class="section bg-white">
    <div class="container-custom max-w-3xl mx-auto">
        <nav class="guide-toc" aria-label="On this page">
            <p class="guide-toc-title">On this page</p>
            <ol>
<?php foreach ($page['sections'] as [$id, $heading]): ?>
                <li><a href="#<?= e($id) ?>"><?= e($heading) ?></a></li>
<?php endforeach; ?>
            </ol>
        </nav>

        <article class="guide-article">
<?php foreach ($page['sections'] as [$id, $heading, $html]): ?>
            <section id="<?= e($id) ?>">
                <h2><?= e($heading) ?></h2>
                <?= $html ?>
            </section>
<?php endforeach; ?>
        </article>
    </div>
</section>

<?php render_faq($page['faq'] ?? []); ?>

<?php if (!empty($page['related'])): ?>
<section class="section bg-surface">
    <div class="container-custom max-w-5xl mx-auto">
        <h2 class="text-2xl md:text-3xl font-display font-semibold text-center mb-10">Related reading</h2>
        <div class="grid md:grid-cols-3 gap-6">
<?php foreach ($page['related'] as [$name, $url, $summary]): ?>
            <a href="<?= e($url) ?>" class="card p-6 block">
                <h3 class="font-semibold mb-2"><?= e($name) ?></h3>
                <p class="text-sm text-text-secondary"><?= e($summary) ?></p>
            </a>
<?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php
render_cta($page['cta_heading'], $page['cta_text']);
render_foot($page);
