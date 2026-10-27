<?php
// Shared building blocks for long-form pages (guides and free tools):
// hero, two-column body with a sticky table of contents, and related cards.
require_once dirname(__DIR__) . '/site.php';

function lf_svg($d)
{
    return '<svg fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="' . $d . '"/></svg>';
}

function lf_hero(array $page, $kicker, array $meta)
{
    ?>
<header class="ga-hero">
    <div class="ga-wrap">
        <?php render_breadcrumbs($page); ?>
        <span class="ga-kicker"><?= e($kicker) ?></span>
        <h1 class="ga-title"><?= e($page['h1']) ?></h1>
        <p class="ga-lead"><?= e($page['intro']) ?></p>
<?php if ($meta): ?>
        <div class="ga-meta">
<?php foreach ($meta as $m): ?>
            <?= $m ?>
<?php endforeach; ?>
        </div>
<?php endif; ?>
    </div>
</header>
<?php
}

// $before: trusted HTML shown above the article (e.g. a tool); $aside: trusted HTML for the side column under the TOC
function lf_body(array $page, $aside = '', $before = '')
{
    $sections = $page['sections'] ?? [];
    ?>
<div class="ga-body">
    <div class="ga-wrap">
        <?= $before ?>
        <div class="ga-grid">
            <div class="ga-main">
<?php if (count($sections) > 1): ?>
                <details class="ga-toc-mobile">
                    <summary>On this page</summary>
                    <ol>
<?php foreach ($sections as [$id, $heading]): ?>
                        <li><a href="#<?= e($id) ?>"><?= e($heading) ?></a></li>
<?php endforeach; ?>
                    </ol>
                </details>
<?php endif; ?>
                <article class="guide-article" data-lf-article>
<?php foreach ($sections as [$id, $heading, $html]): ?>
                    <section id="<?= e($id) ?>">
                        <h2><?= e($heading) ?></h2>
                        <?= $html ?>
                    </section>
<?php endforeach; ?>
                </article>
            </div>
            <aside class="ga-aside" aria-label="On this page">
                <div class="ga-sticky">
<?php if (count($sections) > 1): ?>
                    <nav class="ga-toc" data-lf-toc>
                        <p class="ga-toc-title">On this page</p>
                        <ol>
<?php foreach ($sections as [$id, $heading]): ?>
                            <li><a href="#<?= e($id) ?>"><?= e($heading) ?></a></li>
<?php endforeach; ?>
                        </ol>
                        <div class="ga-progress" aria-hidden="true"><i data-lf-progress></i></div>
                    </nav>
<?php endif; ?>
                    <?= $aside ?>
                </div>
            </aside>
        </div>
    </div>
</div>
<?php render_faq($page['faq'] ?? []); ?>
<?php
}

function lf_related(array $page, $heading)
{
    if (empty($page['related'])) return;
    ?>
<section class="ga-related">
    <div class="ga-wrap">
        <h2><?= e($heading) ?></h2>
        <div class="ga-related-grid">
<?php foreach ($page['related'] as [$name, $url, $summary]): ?>
            <a href="<?= e($url) ?>" class="ga-related-card">
                <h3><?= e($name) ?></h3>
                <p><?= e($summary) ?></p>
                <span class="card-more">Read more &rarr;</span>
            </a>
<?php endforeach; ?>
        </div>
    </div>
</section>
<?php
}

function lf_demo_card($heading, $text)
{
    return '<div class="ga-card ga-card--brand"><h3>' . e($heading) . '</h3><p>' . e($text) . '</p><a href="/demo">Book a free demo</a></div>';
}

function lf_script()
{
    echo '<script src="/js/longform.js?v=' . asset_v('/js/longform.js') . '" defer></script>' . "\n";
}
