<?php
// Hub page: hero, optional intro blocks, then a grid of cards.
// $page['cards'] = [[url, name, icon, summary], ...]
require_once dirname(__DIR__) . '/site.php';
render_head($page);
?>

<?php if (($page['hero'] ?? '') === 'panorama'): include dirname(__DIR__) . '/heroes/panorama.php'; else: ?>
<section class="relative pt-32 pb-16 md:pt-40 md:pb-20 overflow-hidden">
    <div class="absolute inset-0 hero-tint" aria-hidden="true"></div>
    <div class="hub-icons" aria-hidden="true">
<?php foreach ([['box', '7%', '20%', '0s'], ['chart', '12%', '70%', '-2s'], ['users', '3%', '46%', '-4s'], ['cart', '88%', '18%', '-1s'], ['factory', '93%', '50%', '-3s'], ['spark', '85%', '76%', '-5s']] as [$ico, $x, $y, $d]): ?>
        <span style="left: <?= $x ?>; top: <?= $y ?>; animation-delay: <?= $d ?>"><?= icon($ico, '') ?></span>
<?php endforeach; ?>
    </div>
    <div class="container-custom relative z-10 text-center max-w-3xl mx-auto">
        <span class="section-label"><?= e($page['eyebrow']) ?></span>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-display font-semibold text-text-primary leading-tight mb-6"><?= e($page['h1']) ?></h1>
        <p class="text-lg md:text-xl text-text-secondary leading-relaxed mb-8"><?= e($page['intro']) ?></p>
        <div class="flex flex-col sm:flex-row gap-3 justify-center">
            <a href="/demo" class="btn-hero-glow-lg">Book a Demo</a>
            <a href="/contact" class="btn-ghost-lg">Talk to Sales</a>
        </div>
    </div>
</section>
<?php endif; ?>

<?php
require_once dirname(__DIR__) . '/showcase/engine.php';
showcase(ltrim($page['path'], '/'));
?>

<?php foreach ($page['blocks'] ?? [] as $block): ?>
<section class="section bg-white">
    <div class="container-custom">
        <div class="max-w-2xl mb-10">
            <h2 class="text-3xl md:text-4xl font-display font-semibold mb-4"><?= e($block['heading']) ?></h2>
            <p class="text-lg text-text-secondary"><?= e($block['text']) ?></p>
        </div>
<?php if (!empty($block['cards'])): ?>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
<?php foreach ($block['cards'] as [$url, $name, $ico, $summary]): ?>
            <a href="<?= e($url) ?>" class="card p-6 hover-lift block">
                <div class="w-11 h-11 bg-gradient-brand rounded-lg flex items-center justify-center mb-4"><?= icon($ico, 'w-5 h-5 text-white') ?></div>
                <h3 class="text-lg font-display font-semibold mb-2"><?= e($name) ?></h3>
                <p class="text-text-secondary text-[0.95rem] leading-relaxed mb-3"><?= e($summary) ?></p>
                <span class="text-sm font-medium text-primary-600">Learn more &rarr;</span>
            </a>
<?php endforeach; ?>
        </div>
<?php endif; ?>
<?php if (!empty($block['list'])): ?>
        <ul class="grid md:grid-cols-2 gap-4">
<?php foreach ($block['list'] as [$t, $d]): ?>
            <li class="card p-6"><h3 class="text-lg font-display font-semibold mb-1"><?= e($t) ?></h3><p class="text-text-secondary text-[0.95rem]"><?= e($d) ?></p></li>
<?php endforeach; ?>
        </ul>
<?php endif; ?>
    </div>
</section>
<?php endforeach; ?>

<?php render_faq($page['faq'] ?? []); ?>
<?php render_cta($page['cta_heading'], $page['cta_text']); ?>
<?php render_foot($page); ?>
