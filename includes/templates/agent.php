<?php
// AI agent page. Expects $page with the agent's slug in $page['slug'].
require_once dirname(__DIR__) . '/site.php';
render_head($page);
$a = AGENTS[$page['slug']];
$m = MODULES[$a['module']];
?>

<section class="relative pt-32 pb-16 md:pt-40 md:pb-20 overflow-hidden">
    <div class="absolute inset-0 hero-tint" aria-hidden="true"></div>
    <div class="container-custom relative z-10 grid lg:grid-cols-2 gap-12 items-center">
        <div>
            <?php render_breadcrumbs($page); ?>
            <span class="agent-badge" style="--ac: <?= e($a['color']) ?>"><span><?= icon($a['icon'], 'w-4 h-4') ?></span>Meet <?= e($a['persona']) ?> &middot; AI Agent</span>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-display font-semibold text-text-primary leading-tight mb-6"><?= e($page['h1']) ?></h1>
            <p class="text-lg md:text-xl text-text-secondary leading-relaxed mb-8"><?= e($page['intro']) ?></p>
            <div class="flex flex-col sm:flex-row gap-3">
                <a href="/demo" class="btn-hero-glow-lg">See the Agent in a Demo</a>
                <a href="/<?= e($a['module']) ?>" class="btn-ghost-lg"><?= e($m['name']) ?> module</a>
            </div>
        </div>
        <div class="hero-visual-frame" data-tilt>
            <div class="hero-agent-card" data-animate-steps>
                <div class="hero-agent-prompt"><span class="hero-agent-you">You</span><span><?= e($page['demo']['question']) ?></span></div>
                <ul class="hero-agent-steps">
<?php foreach ($page['demo']['steps'] as $s): ?>
                    <li class="hero-agent-step"><span class="hero-agent-check"></span><?= e($s) ?></li>
<?php endforeach; ?>
                </ul>
                <div class="hero-agent-done"><strong>Result</strong> &middot; <?= e($page['demo']['result']) ?></div>
            </div>
        </div>
    </div>
</section>

<?php
require_once dirname(__DIR__) . '/showcase/engine.php';
showcase('ai-agents/' . $page['slug']);
?>

<section class="section bg-white">
    <div class="container-custom">
        <div class="max-w-2xl mb-12">
            <h2 class="text-3xl md:text-4xl font-display font-semibold mb-4">The same job, two ways</h2>
            <p class="text-lg text-text-secondary">In a traditional ERP the software stores the data and people do the analysis. In DotOne the agent does the analysis and your team makes the decision.</p>
        </div>
        <div class="compare-table" style="--rows: <?= max(count($page['traditional']), count($page['dotone'])) + 1 ?>">
            <div class="compare-col">
                <div class="compare-head">Traditional ERP</div>
<?php foreach ($page['traditional'] as $t): ?>
                <div class="compare-row"><span class="compare-icon compare-icon--no">&times;</span><?= e($t) ?></div>
<?php endforeach; ?>
            </div>
            <div class="compare-col compare-col--with">
                <div class="compare-head">With the <?= e($a['name']) ?></div>
<?php foreach ($page['dotone'] as $t): ?>
                <div class="compare-row"><span class="compare-icon compare-icon--yes">&#10003;</span><?= e($t) ?></div>
<?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<section class="section bg-surface">
    <div class="container-custom">
        <div class="grid md:grid-cols-3 gap-6">
<?php foreach ([['eye', 'What it can see', $page['sees']], ['chat', 'What you can ask', $page['asks']], ['bell', 'What it can do', $page['does']]] as [$ico, $title, $items]): ?>
            <div class="card p-6 bg-white">
                <div class="w-11 h-11 bg-gradient-brand rounded-lg flex items-center justify-center mb-4"><?= icon($ico, 'w-5 h-5 text-white') ?></div>
                <h2 class="text-xl font-display font-semibold mb-4"><?= e($title) ?></h2>
                <ul class="space-y-2.5">
<?php foreach (array_slice($items, 0, 5) as $it): ?>
                    <li class="flex gap-2 text-text-secondary text-[0.95rem] leading-relaxed"><span class="text-primary-600 mt-1"><?= icon('check', 'w-4 h-4') ?></span><span><?= e($it) ?></span></li>
<?php endforeach; ?>
                </ul>
            </div>
<?php endforeach; ?>
        </div>
        <p class="text-sm text-text-tertiary mt-6 text-center">The agent only acts within the roles, permissions and approval rules you set in DotOne. Anything that changes data can be set to need a person's approval.</p>
    </div>
</section>


<section class="py-12 md:py-14 bg-white border-t border-border">
    <div class="container-custom">
        <div class="agent-more">
            <span class="agent-more-title">More AI agents</span>
<?php foreach (AGENTS as $slug => $other): if ($slug === $page['slug']) continue; ?>
            <a href="/ai-agents/<?= e($slug) ?>" class="agent-more-link" style="--ac: <?= e($other['color']) ?>"><?= icon($other['icon'], 'w-4 h-4') ?><b><?= e($other['persona']) ?></b> <?= e(str_replace(' AI Agent', '', $other['name'])) ?></a>
<?php endforeach; ?>
            <a href="/ai-agents" class="agent-more-all">All agents &rarr;</a>
        </div>
    </div>
</section>

<?php render_faq($page['faq']); ?>
<?php render_cta('See the ' . $a['name'] . ' on your data', 'In a 30-minute demo we connect the agent to a sample of your ' . strtolower($m['name']) . ' data and show what it finds.'); ?>
<?php render_foot($page); ?>
