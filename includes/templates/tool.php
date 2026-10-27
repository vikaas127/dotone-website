<?php
// Free tool page: hero, the tool itself, then explainer sections, FAQ, related links and CTA.
// $page['tool']     = trusted HTML for the tool's form and results (written in the page file)
// $page['script']   = path of the tool's JavaScript, or a list of paths loaded in order
// $page['sections'] = [[id, heading, html], ...], $page['related'] = [[title, url, summary], ...]
require_once dirname(__DIR__) . '/site.php';
$page['css'] = array_merge($page['css'] ?? [], ['/css/guide-article.css', '/css/tools.css']);
render_head($page);
?>

<section class="relative pt-32 pb-10 md:pt-40 md:pb-12 overflow-hidden">
    <div class="absolute inset-0 hero-tint" aria-hidden="true"></div>
    <div class="container-custom relative z-10 max-w-3xl mx-auto">
        <?php render_breadcrumbs($page); ?>
        <span class="section-label">Free tool · No sign-up</span>
        <h1 class="text-4xl md:text-5xl font-display font-semibold text-text-primary leading-tight mb-6"><?= e($page['h1']) ?></h1>
        <p class="text-lg md:text-xl text-text-secondary leading-relaxed"><?= e($page['intro']) ?></p>
    </div>
</section>

<section class="section-sm bg-white">
    <div class="container-custom max-w-5xl mx-auto">
        <div class="tool-card" id="tool"><?= $page['tool'] ?></div>
        <p class="tool-note">Everything is calculated in your browser. Nothing you enter is sent to us or stored.</p>
    </div>
</section>

<section class="section bg-white">
    <div class="container-custom max-w-3xl mx-auto">
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
        <h2 class="text-2xl md:text-3xl font-display font-semibold text-center mb-10">Related</h2>
        <div class="grid md:grid-cols-3 gap-6">
<?php foreach ($page['related'] as [$name, $url, $summary]): ?>
            <a href="<?= e($url) ?>" class="card p-6 hover-lift flex flex-col">
                <h3 class="text-lg font-display font-semibold text-text-primary leading-snug mb-2"><?= e($name) ?></h3>
                <p class="text-sm text-text-secondary leading-relaxed mb-3"><?= e($summary) ?></p>
                <span class="card-more text-sm font-medium text-primary-600">Read more &rarr;</span>
            </a>
<?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php render_cta($page['cta_heading'], $page['cta_text']); ?>
<?php foreach ((array) $page['script'] as $src): ?>
<script src="<?= e($src) ?>?v=<?= asset_v($src) ?>" defer></script>
<?php endforeach; ?>
<?php render_foot($page);
