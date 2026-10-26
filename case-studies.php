<?php
require_once __DIR__ . '/includes/site.php';
$stories = require __DIR__ . '/includes/data/case-studies.php';
$page = [
    'path' => '/case-studies',
    'title' => 'Customer Stories | DotOne',
    'description' => 'How manufacturers and distributors across India run their business on DotOne. Read customer stories or ask for a reference call in your industry.',
    'breadcrumbs' => [['Customer Stories', '/case-studies']],
    'css' => ['/css/cases.css'],
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
$quotes = array_values(array_filter($stories, function ($s) { return !empty($s['quote']); }));
$industries = array_values(array_unique(array_filter(array_map(function ($s) { return $s['industry'] ?? ''; }, $stories))));
sort($industries);
$recentCut = strtotime('-12 months');
render_head($page);
?>

<main class="cs">

<!-- Hero: logo wall and story slider -->
<section class="cs-hero">
    <div class="container-custom cs-hero-grid">
        <div>
            <?php render_breadcrumbs($page); ?>
            <h1>Trusted by businesses <span>across India</span></h1>
            <p>Manufacturers and distributors run their sales, stock, production, people and accounts on DotOne every day.</p>
            <div class="cs-wall">
<?php foreach ($logos as $i => [$src, $alt, $dark]): ?>
                <div class="cs-tile<?= $dark ? ' is-dark' : '' ?>" style="--i: <?= $i ?>"><img src="<?= $src ?>" alt="<?= e($alt) ?>" loading="lazy" decoding="async"></div>
<?php endforeach; ?>
            </div>
        </div>
        <div class="cs-slider" data-cs-slider>
<?php if ($quotes): ?>
<?php foreach ($quotes as $i => $q): ?>
            <figure class="cs-slide<?= $i === 0 ? ' is-active' : '' ?>" data-cs-slide>
<?php if (!empty($q['logo'])): ?><img class="cs-slide-logo" src="<?= e($q['logo']) ?>" alt="<?= e($q['company']) ?>" loading="lazy"><?php endif; ?>
                <blockquote>&ldquo;<?= e($q['quote']) ?>&rdquo;</blockquote>
                <figcaption>
<?php if (!empty($q['photo'])): ?><img class="cs-face" src="<?= e($q['photo']) ?>" alt="" loading="lazy"><?php endif; ?>
                    <b><?= e($q['person'] ?? $q['company']) ?></b><span><?= e($q['role'] ?? '') ?></span>
<?php if (!empty($q['url'])): ?><a href="<?= e($q['url']) ?>">Read more &rarr;</a><?php endif; ?>
                </figcaption>
            </figure>
<?php endforeach; ?>
            <div class="cs-nav">
                <button type="button" data-cs-prev aria-label="Previous story">&#8249;</button>
                <span><b data-cs-n>01</b>/<?= sprintf('%02d', count($quotes)) ?></span>
                <button type="button" data-cs-next aria-label="Next story">&#8250;</button>
            </div>
<?php else: ?>
            <figure class="cs-slide is-active cs-slide--ask">
                <span class="cs-ask-icon"><?= icon('chat', 'w-7 h-7') ?></span>
                <blockquote>Hear it from a DotOne customer in your industry.</blockquote>
                <p>Tell us what you make or sell, and how big your team is. We will try to set up a call with a customer who runs a similar business.</p>
                <div class="cs-ask-logos" aria-hidden="true"><div>
<?php for ($r = 0; $r < 2; $r++): foreach ($logos as [$src, $alt, $dark]): ?>
                    <span class="<?= $dark ? 'is-dark' : '' ?>"><img src="<?= $src ?>" alt="" loading="lazy"></span>
<?php endforeach; endfor; ?>
                </div></div>
                <a href="/contact" class="btn-hero-glow">Ask for a Reference Call</a>
            </figure>
<?php endif; ?>
        </div>
    </div>
</section>

<!-- Filter bar -->
<div class="cs-bar" data-cs-filter>
    <div class="container-custom cs-bar-row">
        <div class="cs-tabs" role="tablist" aria-label="Stories">
            <button type="button" class="is-active" data-cs-tab="all" role="tab" aria-selected="true">All</button>
            <button type="button" data-cs-tab="recent" role="tab" aria-selected="false">Recent</button>
        </div>
<?php if ($industries): ?>
        <label class="cs-select"><span>Filter by industry</span>
            <select data-cs-industry>
                <option value="">All industries</option>
<?php foreach ($industries as $ind): ?>
                <option value="<?= e($ind) ?>"><?= e($ind) ?></option>
<?php endforeach; ?>
            </select>
        </label>
<?php else: ?>
        <span class="cs-bar-note">Stories are published only with each customer’s approval.</span>
<?php endif; ?>
    </div>
</div>

<!-- Story grid -->
<section class="cs-grid-wrap">
    <div class="container-custom">
        <div class="cs-grid" data-cs-grid>
<?php foreach ($stories as $i => $s): $recent = !empty($s['date']) && strtotime($s['date']) >= $recentCut; ?>
            <article class="cs-card" data-industry="<?= e($s['industry'] ?? '') ?>" data-recent="<?= $recent ? '1' : '0' ?>" style="--i: <?= $i ?>">
<?php if (!empty($s['logo'])): ?><img class="cs-card-logo" src="<?= e($s['logo']) ?>" alt="<?= e($s['company']) ?>" loading="lazy"><?php endif; ?>
                <h2><?= e($s['title']) ?></h2>
<?php if (!empty($s['results'])): ?>
                <div class="cs-results"><?php foreach ($s['results'] as [$num, $label]): ?><span><b><?= e($num) ?></b><?= e($label) ?></span><?php endforeach; ?></div>
<?php endif; ?>
<?php if (!empty($s['url'])): ?><a class="cs-more" href="<?= e($s['url']) ?>">Read more &rarr;</a><?php endif; ?>
<?php if (!empty($s['person'])): ?>
                <div class="cs-person"><?php if (!empty($s['photo'])): ?><img src="<?= e($s['photo']) ?>" alt="" loading="lazy"><?php endif; ?><div><b><?= e($s['person']) ?></b><span><?= e($s['role'] ?? '') ?></span></div></div>
<?php endif; ?>
<?php if (!empty($s['industry']) || !empty($s['modules'])): ?>
                <div class="cs-tags"><?php if (!empty($s['industry'])): ?><span><?= e($s['industry']) ?></span><?php endif; ?><?php foreach ($s['modules'] ?? [] as $m): ?><span><?= e($m) ?></span><?php endforeach; ?></div>
<?php endif; ?>
            </article>
<?php endforeach; ?>
<?php foreach ($logos as $i => [$src, $alt, $dark]): ?>
            <article class="cs-card cs-card--logo" data-industry="" data-recent="0" style="--i: <?= count($stories) + $i ?>">
                <div class="cs-card-logo-box<?= $dark ? ' is-dark' : '' ?>"><img src="<?= $src ?>" alt="<?= e($alt) ?>" loading="lazy"></div>
                <h2><?= e($alt) ?> runs on DotOne</h2>
                <p>The full story is being written up with the team.</p>
                <a class="cs-more" href="/contact">Ask for a reference call &rarr;</a>
            </article>
<?php endforeach; ?>
            <article class="cs-card cs-card--you" data-industry="" data-recent="1" style="--i: <?= count($stories) + count($logos) ?>">
                <span class="cs-ask-icon"><?= icon('spark', 'w-6 h-6') ?></span>
                <h2>Your story could be next</h2>
                <p>Using DotOne? We will write your story with you and publish only what you approve.</p>
                <a class="cs-more" href="/contact">Share your story &rarr;</a>
            </article>
        </div>
        <p class="cs-empty" data-cs-empty hidden>No stories match this filter yet.</p>
    </div>
</section>

<?php render_faq($page['faq'], 'Questions about our customers'); ?>
<?php render_cta('See what DotOne could do for you', 'Bring one real process to a 30-minute demo and we will show it running in DotOne.'); ?>
</main>

<script src="/js/cases.js?v=<?= ASSET_VERSION ?>" defer></script>
<?php render_foot($page); ?>
