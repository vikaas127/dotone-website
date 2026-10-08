<?php
// ERP module page. Expects $page (see any module file for the shape).
require_once dirname(__DIR__) . '/site.php';
render_head($page);
$agent = $page['agent'] ?? null;
?>

<section class="relative pt-32 pb-16 md:pt-40 md:pb-20 overflow-hidden">
    <div class="absolute inset-0 hero-tint" aria-hidden="true"></div>
    <div class="container-custom relative z-10">
        <?php render_breadcrumbs($page); ?>
        <div class="grid lg:grid-cols-[minmax(0,1.1fr)_minmax(0,1fr)] gap-12 items-center">
        <div>
            <span class="section-label"><?= e($page['eyebrow']) ?></span>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-display font-semibold text-text-primary leading-tight mb-6"><?= e($page['h1']) ?></h1>
            <p class="text-lg md:text-xl text-text-secondary leading-relaxed mb-8"><?= e($page['intro']) ?></p>
            <div class="flex flex-col sm:flex-row gap-3 mb-8">
                <a href="/demo" class="btn-hero-glow-lg">Book a Demo</a>
                <a href="/pricing" class="btn-ghost-lg">See Pricing</a>
            </div>
            <ul class="flex flex-wrap gap-x-6 gap-y-2 text-sm text-text-secondary">
<?php foreach ($page['highlights'] as $h): ?>
                <li class="flex items-center gap-2"><span class="text-primary-600"><?= icon('check', 'w-4 h-4') ?></span><?= e($h) ?></li>
<?php endforeach; ?>
            </ul>
        </div>

        <div class="module-graphic" data-tilt aria-hidden="true">
            <div class="module-graphic-window">
                <div class="module-graphic-bar">
                    <span class="hero-agent-window-dots"><i></i><i></i><i></i></span>
                    <span class="hero-agent-window-title">DotOne &middot; <?= e(MODULES[ltrim($page['path'], '/')]['name'] ?? $page['h1']) ?></span>
                    <span class="hero-agent-live"><i></i>Live</span>
                </div>
                <div class="mg-bars">
<?php foreach (array_slice($page['reports'], 0, 3) as $i => $r): ?>
                    <div class="mg-bar"><span><?= e($r) ?></span><div class="mg-bar-track"><i style="--w: <?= [86, 64, 42][$i] ?>%"></i></div></div>
<?php endforeach; ?>
                </div>
                <ul class="mg-rows">
<?php foreach (array_slice($page['capabilities'], 0, 4) as $cap): ?>
                    <li><?= e($cap[1]) ?></li>
<?php endforeach; ?>
                </ul>
            </div>
<?php foreach (array_slice($page['connected'], 0, 4) as $i => $slug): $cm = MODULES[$slug]; ?>
            <span class="mg-chip mg-chip--<?= $i + 1 ?>"><?= icon($cm['icon'], '') ?><?= e($cm['name']) ?></span>
<?php endforeach; ?>
        </div>
        </div>
    </div>
</section>

<?php
// Page-specific visual story from includes/showcase/data/<page>.php
require_once dirname(__DIR__) . '/showcase/engine.php';
showcase(ltrim($page['path'], '/'));
?>

<section class="section bg-white">
    <div class="container-custom">
        <div class="max-w-2xl mb-12">
            <h2 class="text-3xl md:text-4xl font-display font-semibold mb-4"><?= e($page['capabilities_heading']) ?></h2>
            <p class="text-lg text-text-secondary"><?= e($page['capabilities_intro']) ?></p>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
<?php foreach ($page['capabilities'] as [$ico, $title, $text]): ?>
            <div class="card p-6">
                <div class="w-11 h-11 bg-gradient-brand rounded-lg flex items-center justify-center mb-4"><?= icon($ico, 'w-5 h-5 text-white') ?></div>
                <h3 class="text-lg font-display font-semibold mb-2"><?= e($title) ?></h3>
                <p class="text-text-secondary text-[0.95rem] leading-relaxed"><?= e($text) ?></p>
            </div>
<?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section bg-surface">
    <div class="container-custom">
        <div class="max-w-2xl mb-12">
            <h2 class="text-3xl md:text-4xl font-display font-semibold mb-4">How it works in DotOne</h2>
            <p class="text-lg text-text-secondary"><?= e($page['workflow_intro']) ?></p>
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

<section class="section bg-white">
    <div class="container-custom grid lg:grid-cols-2 gap-12">
        <div>
            <h2 class="text-2xl md:text-3xl font-display font-semibold mb-6">Reports you get out of the box</h2>
            <ul class="space-y-3">
<?php foreach ($page['reports'] as $r): ?>
                <li class="flex gap-3 text-text-secondary"><span class="text-primary-600 mt-0.5"><?= icon('chart', 'w-5 h-5') ?></span><?= e($r) ?></li>
<?php endforeach; ?>
            </ul>
        </div>
        <div>
            <h2 class="text-2xl md:text-3xl font-display font-semibold mb-6">Connected to the rest of your ERP</h2>
            <p class="text-text-secondary mb-6"><?= e($page['connected_intro']) ?></p>
            <div class="flex flex-wrap gap-3">
<?php foreach ($page['connected'] as $slug): $m = MODULES[$slug]; ?>
                <a href="/<?= e($slug) ?>" class="module-chip"><?= icon($m['icon'], 'w-4 h-4') ?><?= e($m['name']) ?></a>
<?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<?php if ($agent): $a = AGENTS[$agent]; ?>
<section class="section">
    <div class="container-custom">
        <div class="cta-frame rounded-3xl p-8 md:p-12 grid lg:grid-cols-2 gap-10 items-center">
            <div>
                <span class="section-label">AI Agent for this module</span>
                <h2 class="text-3xl font-display font-semibold mb-4">Ask the <?= e($a['name']) ?></h2>
                <p class="text-lg text-text-secondary mb-6"><?= e($a['summary']) ?></p>
                <a href="/ai-agents/<?= e($agent) ?>" class="btn-hero-glow">See what the agent does</a>
            </div>
            <div class="space-y-3">
<?php foreach ($page['agent_questions'] as $q): ?>
                <div class="chat-bubble"><span class="chat-bubble-you">You</span><?= e($q) ?></div>
<?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php render_faq($page['faq']); ?>
<?php render_cta($page['cta_heading'], $page['cta_text']); ?>
<?php render_foot($page); ?>
