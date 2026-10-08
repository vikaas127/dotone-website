<?php
// Industry page. Expects $page with: path, title, description, breadcrumbs, name, icon, h1, intro,
// challenges [[icon, title, text] x4], workflow [[title, text] x4-5], modules [slugs],
// uses [[title, text] x4], faq, cta_heading, cta_text.
// Dashboard showcase loads from includes/showcase/data/industries/<slug>.php.
require_once dirname(__DIR__) . '/site.php';
require_once dirname(__DIR__) . '/showcase/engine.php';
render_head($page);
$mods = array_values(array_filter($page['modules'], function ($s) { return isset(MODULES[$s]); }));
?>

<section class="relative pt-32 pb-16 md:pt-40 md:pb-20 overflow-hidden">
    <div class="absolute inset-0 hero-tint" aria-hidden="true"></div>
    <div class="hub-icons" aria-hidden="true">
<?php foreach (array_slice($mods, 0, 6) as $i => $slug): [$x, $y] = [['7%', '22%'], ['88%', '18%'], ['4%', '62%'], ['93%', '55%'], ['14%', '84%'], ['84%', '82%']][$i]; ?>
        <span style="left: <?= $x ?>; top: <?= $y ?>; animation-delay: -<?= $i ?>s"><?= icon(MODULES[$slug]['icon'], '') ?></span>
<?php endforeach; ?>
    </div>
    <div class="container-custom relative z-10 text-center max-w-3xl mx-auto">
        <?php render_breadcrumbs($page); ?>
        <span class="ind-hero-badge"><span class="ind-chip-icon"><?= icon($page['icon'], '') ?></span><?= e($page['name']) ?></span>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-display font-semibold text-text-primary leading-tight mb-6"><?= e($page['h1']) ?></h1>
        <p class="text-lg md:text-xl text-text-secondary leading-relaxed mb-8"><?= e($page['intro']) ?></p>
        <div class="flex flex-col sm:flex-row gap-3 justify-center">
            <a href="/demo" class="btn-hero-glow-lg">Book a Demo</a>
            <a href="/contact" class="btn-ghost-lg">Talk to Us</a>
        </div>
    </div>
</section>

<section class="section bg-white">
    <div class="container-custom">
        <div class="max-w-2xl mb-10">
            <span class="section-label">The challenge</span>
            <h2 class="text-3xl md:text-4xl font-display font-semibold mb-4">What slows <?= e(strtolower($page['name'])) ?> businesses down</h2>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">
<?php foreach ($page['challenges'] as [$ico, $title, $text]): ?>
            <div class="card p-6 hover-lift">
                <div class="w-11 h-11 rounded-lg flex items-center justify-center mb-4 bg-primary-50 text-primary-600"><?= icon($ico, 'w-5 h-5') ?></div>
                <h3 class="text-lg font-display font-semibold mb-2"><?= e($title) ?></h3>
                <p class="text-text-secondary text-[0.95rem] leading-relaxed"><?= e($text) ?></p>
            </div>
<?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section bg-surface">
    <div class="container-custom">
        <div class="max-w-2xl mb-10">
            <span class="section-label">How work flows</span>
            <h2 class="text-3xl md:text-4xl font-display font-semibold mb-4">From first step to last, in one system</h2>
        </div>
        <ol class="flow-steps">
<?php foreach ($page['workflow'] as $i => [$title, $text]): ?>
            <li class="flow-step">
                <span class="flow-step-num"><?= $i + 1 ?></span>
                <h3 class="text-base font-display font-semibold text-text-primary mb-1"><?= e($title) ?></h3>
                <p class="text-sm text-text-secondary leading-relaxed"><?= e($text) ?></p>
            </li>
<?php endforeach; ?>
        </ol>
    </div>
</section>

<?php showcase('industries/' . basename($page['path'])); ?>

<section class="section bg-white">
    <div class="container-custom grid lg:grid-cols-2 gap-12">
        <div>
            <h2 class="text-2xl md:text-3xl font-display font-semibold mb-6">What teams run on DotOne</h2>
            <ul class="space-y-4">
<?php foreach ($page['uses'] as [$title, $text]): ?>
                <li class="flex gap-3"><span class="text-primary-600 mt-1"><?= icon('check', 'w-5 h-5') ?></span><div><b class="block text-text-primary font-semibold"><?= e($title) ?></b><span class="text-text-secondary"><?= e($text) ?></span></div></li>
<?php endforeach; ?>
            </ul>
        </div>
        <div>
            <h2 class="text-2xl md:text-3xl font-display font-semibold mb-6">Modules used</h2>
            <div class="grid sm:grid-cols-2 gap-3">
<?php foreach ($mods as $slug): $m = MODULES[$slug]; ?>
                <a href="/<?= e($slug) ?>" class="card p-4 hover-lift flex gap-3 items-start">
                    <span class="w-9 h-9 flex-none rounded-lg flex items-center justify-center bg-primary-50 text-primary-600"><?= icon($m['icon'], 'w-4 h-4') ?></span>
                    <span><b class="block text-text-primary font-semibold text-[0.95rem]"><?= e($m['name']) ?></b><span class="text-sm text-text-secondary"><?= e($m['summary']) ?></span></span>
                </a>
<?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<?php render_faq($page['faq']); ?>
<?php render_cta($page['cta_heading'], $page['cta_text']); ?>
<?php render_foot($page); ?>
