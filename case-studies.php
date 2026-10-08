<?php
require_once __DIR__ . '/includes/site.php';
$stories = require __DIR__ . '/includes/data/case-studies.php';
$page = [
    'path' => '/case-studies',
    'title' => 'Customer Stories | DotOne',
    'description' => 'How manufacturers and distributors across India run their business on DotOne. Read customer stories or ask for a reference call in your industry.',
    'breadcrumbs' => [['Customer Stories', '/case-studies']],
    'faq' => [
        ['Can we speak to an existing customer?', 'Yes. Tell us your industry and size, and we will try to arrange a reference call with a DotOne customer who runs a similar business.'],
        ['Which industries use DotOne?', 'DotOne is used by manufacturers, distributors and service businesses. See [all 18 industries](/industries) for how work flows in each.'],
        ['We use DotOne. Can we share our story?', 'We would like that. [Contact us](/contact) and we will write it up with you and only publish what you approve.'],
    ],
];
$logos = [['/images/clients/metalpatti.webp', 'Metal Patti', true], ['/images/clients/newpack.png', 'Newpack Plastics', false], ['/images/clients/mekr.png', 'Mekr Technologies', false], ['/images/clients/agile.webp', 'Agile Nuvo', false], ['/images/clients/virgo.webp', 'Virgo Group', false], ['/images/clients/splice.png', 'Splice', false], ['/images/clients/bhutan-tuff.png', 'Bhutan Tuff', false], ['/images/clients/twintech.webp', 'Twin Tech', false], ['/images/clients/savit.png', 'Savit Group', false], ['/images/clients/anondita.webp', 'Anondita Medicare', false]];
foreach (['webp', 'png', 'svg'] as $ext) {
    if (is_file(__DIR__ . "/images/clients/e3-group.$ext")) { $logos[] = ["/images/clients/e3-group.$ext", 'E3 Group', false]; break; }
}
render_head($page);
?>

<section class="relative pt-32 pb-14 md:pt-40 md:pb-16 overflow-hidden">
    <div class="absolute inset-0 hero-tint" aria-hidden="true"></div>
    <div class="container-custom relative z-10 text-center max-w-3xl mx-auto">
        <?php render_breadcrumbs($page); ?>
        <span class="section-label">Customers</span>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-display font-semibold text-text-primary leading-tight mb-6">Customer Stories</h1>
        <p class="text-lg md:text-xl text-text-secondary leading-relaxed mb-8">Manufacturers and distributors across India run their business on DotOne every day. Read their stories, or ask to speak with one.</p>
        <div class="flex flex-col sm:flex-row gap-3 justify-center">
            <a href="/contact" class="btn-hero-glow-lg">Ask for a Reference Call</a>
            <a href="/demo" class="btn-ghost-lg">Book a Demo</a>
        </div>
    </div>
</section>

<?php if ($stories): ?>
<section class="section bg-white">
    <div class="container-custom">
        <div class="cases">
<?php foreach ($stories as $i => $st): ?>
            <article class="case-card" style="--i: <?= $i ?>">
                <div class="case-head">
<?php if (!empty($st['logo'])): ?>
                    <img src="<?= e($st['logo']) ?>" alt="<?= e($st['company']) ?>" loading="lazy" decoding="async">
<?php endif; ?>
                    <span class="case-industry"><?= e($st['industry']) ?></span>
                </div>
                <div class="case-results">
<?php foreach ($st['results'] as [$num, $label]): ?>
                    <div><b><?= e($num) ?></b><span><?= e($label) ?></span></div>
<?php endforeach; ?>
                </div>
<?php if (!empty($st['quote'])): ?>
                <blockquote>&ldquo;<?= e($st['quote']) ?>&rdquo;<cite><?= e($st['person'] ?? '') ?></cite></blockquote>
<?php endif; ?>
                <div class="case-mods"><?php foreach ($st['modules'] ?? [] as $m): ?><span><?= e($m) ?></span><?php endforeach; ?></div>
            </article>
<?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<section class="section <?= $stories ? 'bg-surface' : 'bg-white' ?>">
    <div class="container-custom">
        <div class="text-center max-w-2xl mx-auto mb-10">
            <h2 class="text-3xl md:text-4xl font-display font-semibold mb-4">Businesses that run on DotOne</h2>
            <p class="text-lg text-text-secondary"><?= $stories ? 'More of our customers.' : 'Full customer stories are being written up with our customers. Until then, we are happy to arrange a reference call.' ?></p>
        </div>
        <div class="case-logos">
<?php foreach ($logos as $i => [$src, $alt, $dark]): ?>
            <div class="case-logo" style="--i: <?= $i ?>"><img src="<?= $src ?>" alt="<?= e($alt) ?>"<?= $dark ? ' class="logo-dark-bg"' : '' ?> loading="lazy" decoding="async"></div>
<?php endforeach; ?>
        </div>
    </div>
</section>

<?php render_faq($page['faq'], 'Questions about our customers'); ?>
<?php render_cta('See what DotOne could do for you', 'Bring one real process to a 30-minute demo and we will show it running in DotOne.'); ?>
<?php render_foot($page); ?>
