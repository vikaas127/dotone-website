<?php
// Feature stories: a bento grid of feature cards, each with an animated phone or window mock.
// Usage: stories('crm') loads includes/stories/crm.php and renders it. Returns false if there is none.
// Mock types: radar, phone, route, notify, table. All names and numbers in the mocks are demo data.
require_once dirname(__DIR__) . '/site.php';

function stories($key)
{
    $file = __DIR__ . '/' . basename($key) . '.php';
    if (!is_file($file)) return false;
    $data = require $file;
    if (!empty($data['cards'])) render_stories($data);
    if (!empty($data['split'])) render_split($data['split']);
    return !empty($data['cards']);
}

function stories_script()
{
    static $done = false;
    if ($done) return;
    $done = true;
    echo '<script src="/js/stories.js?v=' . ASSET_VERSION . '" defer></script>' . "\n";
}

function render_stories(array $s)
{
    ?>
<section class="section bg-surface ps-section">
    <div class="container-custom">
        <div class="max-w-2xl mb-10 md:mb-12">
            <span class="section-label"><?= e($s['label']) ?></span>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-display font-semibold text-text-primary mb-4"><?= e($s['h2'][0]) ?> <span class="text-primary-500"><?= e($s['h2'][1]) ?></span></h2>
            <p class="text-lg text-text-secondary"><?= e($s['intro']) ?></p>
        </div>
        <div class="ps-grid" data-ps>
<?php foreach ($s['cards'] as $i => $c): ?>
            <article class="ps-card ps-card--<?= e($c['size']) ?><?= !empty($c['tone']) ? ' ps-card--' . e($c['tone']) : '' ?>" style="--i: <?= $i ?>">
                <div class="ps-copy">
                    <h3><?= e($c['title']) ?></h3>
                    <p><?= e($c['text']) ?></p>
                </div>
                <div class="ps-visual" aria-hidden="true">
<?php ('ps_' . $c['mock']['type'])($c['mock']); ?>
                </div>
            </article>
<?php endforeach; ?>
        </div>
        <p class="ps-demo">Screens show demo data.</p>
    </div>
</section>
<?php
    stories_script();
}

// Split story: a feature list that auto-advances, next to a phone whose screen changes with it
function render_split(array $s)
{
    ?>
<section class="section bg-white">
    <div class="container-custom">
        <div class="sp" data-sp>
            <div class="sp-copy">
                <span class="section-label"><?= e($s['label']) ?></span>
                <h2 class="text-3xl md:text-4xl font-display font-semibold text-text-primary mb-8"><?= e($s['h2'][0]) ?> <span class="text-primary-500"><?= e($s['h2'][1]) ?></span></h2>
                <div class="sp-list" role="tablist" aria-label="<?= e($s['h2'][0] . ' ' . $s['h2'][1]) ?>">
<?php foreach ($s['items'] as $i => $it): ?>
                    <button type="button" class="sp-item<?= $i === 0 ? ' is-active' : '' ?>" role="tab" aria-selected="<?= $i === 0 ? 'true' : 'false' ?>" data-sp-item="<?= $i ?>">
                        <span class="sp-bar" aria-hidden="true"><i></i></span>
                        <b><?= e($it['title']) ?></b>
                        <span class="sp-text"><?= e($it['text']) ?></span>
                    </button>
<?php endforeach; ?>
                </div>
            </div>
            <div class="sp-stage" aria-hidden="true">
                <div class="sp-panel"></div>
<?php foreach ($s['items'] as $i => $it): if (!empty($it['side'])): ?>
                <div class="sp-side<?= $i === 0 ? ' is-active' : '' ?>" data-sp-screen="<?= $i ?>">
<?php foreach ($it['side'] as $k => [$label, $name, $sub]): ?>
                    <div class="sp-side-card" style="--k: <?= $k ?>"><small><?= e($label) ?></small><b><?= e($name) ?></b><span><?= e($sub) ?></span></div>
<?php endforeach; ?>
                </div>
<?php endif; endforeach; ?>
                <div class="ps-phone sp-phone"><div class="ps-phone-bar"><span>9:41</span><i class="ps-notch"></i><span class="ps-phone-sig"><i></i><i></i><i></i></span></div>
<?php foreach ($s['items'] as $i => $it): ?>
                    <div class="sp-screen sp-screen--<?= e($it['screen']['type']) ?><?= !empty($it['screen']['dark']) ? ' sp-screen--dark' : '' ?><?= $i === 0 ? ' is-active' : '' ?>" data-sp-screen="<?= $i ?>"><?php ('sp_' . $it['screen']['type'])($it['screen']); ?></div>
<?php endforeach; ?>
                </div>
            </div>
        </div>
        <p class="ps-demo">Screens show demo data.</p>
    </div>
</section>
<?php
    stories_script();
}

// Nearby customers on a map, with a next-visit action card
function sp_nearby(array $m)
{
    echo '<div class="ps-screen-title sp-pad"><i class="ps-burger"></i>' . e($m['title']) . '</div><div class="sp-map">';
    ps_map();
    foreach ($m['pins'] as $k => [$name, $away]) echo '<span class="sp-pin sp-pin--' . $k . '"><em><b>' . e($name) . '</b>' . e($away) . '</em></span>';
    echo '<span class="sp-me">You are here</span></div><div class="sp-action"><b>' . e($m['next'][0]) . '</b><span>' . e($m['next'][1]) . '</span><i>' . e($m['button']) . '</i></div>';
}

// A form, optionally offline or on a dark completed screen
function sp_form(array $m)
{
    if (!empty($m['done'])) echo '<div class="sp-done"><span>&#10003;</span>' . e($m['done']) . '</div>';
    echo '<div class="ps-screen-title sp-pad"><i class="ps-burger"></i>' . e($m['title']);
    if (!empty($m['badge'])) echo '<em class="sp-badge">' . e($m['badge']) . '</em>';
    echo '</div><div class="sp-fields">';
    foreach ($m['fields'] as $k => [$label, $value]) echo '<label style="--k: ' . $k . '"><span>' . e($label) . '</span><i>' . e($value) . '</i></label>';
    echo '</div>';
    if (!empty($m['toast'])) echo '<div class="sp-toast">' . e($m['toast']) . '</div>';
}

function ps_phone_open($dark = false)
{
    echo '<div class="ps-phone' . ($dark ? ' ps-phone--dark' : '') . '"><div class="ps-phone-bar"><span>9:41</span><i class="ps-notch"></i><span class="ps-phone-sig"><i></i><i></i><i></i></span></div><div class="ps-screen">';
}

function ps_phone_close()
{
    echo '</div></div>';
}

// Simple street map drawn in SVG, shared by the map mocks
function ps_map($route = false)
{
    echo '<svg class="ps-map" viewBox="0 0 320 240" preserveAspectRatio="xMidYMid slice"><g class="ps-roads">'
        . '<path d="M-10 60 C60 50 110 80 170 70 S280 40 330 55"/><path d="M-10 150 C70 140 120 170 190 160 S290 130 330 140"/>'
        . '<path d="M40 -10 C50 60 30 120 55 250"/><path d="M150 -10 C140 70 170 140 150 250"/><path d="M250 -10 C260 80 240 150 265 250"/>'
        . '<path class="ps-road-thin" d="M-10 105 L330 110"/><path class="ps-road-thin" d="M-10 205 L330 195"/><path class="ps-road-thin" d="M100 -10 L95 250"/><path class="ps-road-thin" d="M205 -10 L210 250"/>'
        . '</g>';
    if ($route) echo '<path class="ps-route" pathLength="100" d="M45 205 C70 190 60 160 100 152 S150 120 155 105 S205 70 250 62"/>';
    echo '</svg>';
}

// People or sources placed on rings around a phone, with a notification on the phone
function ps_radar(array $m)
{
    echo '<div class="ps-radar">';
    foreach ($m['rings'] as $r => $label) echo '<span class="ps-ring" style="--r: ' . $r . '"><em>' . e($label) . '</em></span>';
    foreach ($m['people'] as $p => [$initials, $name, $status, $tone]) {
        echo '<span class="ps-person ps-person--' . $p . '" style="--p: ' . $p . '"><b class="ps-avatar">' . e($initials) . '<i class="is-' . e($tone) . '"></i></b><span>' . e($name) . '<small>' . e($status) . '</small></span></span>';
    }
    echo '</div>';
    ps_phone_open();
    echo '<div class="ps-screen-title">' . e($m['screen']) . '</div>';
    echo '<div class="ps-toast"><span class="ps-toast-icon">' . icon($m['icon'] ?? 'bell', 'w-4 h-4') . '</span><span>' . e($m['note']) . '<small>' . e($m['note_sub'] ?? 'Just now') . '</small></span></div>';
    echo '<div class="ps-lines"><i></i><i></i><i></i></div>';
    ps_phone_close();
}

// Phone screen with a map or a form, and a blocking alert
function ps_phone(array $m)
{
    ps_phone_open();
    echo '<div class="ps-screen-title"><i class="ps-burger"></i>' . e($m['screen']) . '</div>';
    if (!empty($m['map'])) {
        echo '<div class="ps-mapbox">';
        ps_map();
        echo '<span class="ps-fence"></span><span class="ps-pin ps-pin--site"><em>' . e($m['site']) . '</em></span><span class="ps-pin ps-pin--me"><em>' . e($m['me']) . '</em></span></div>';
    }
    if (!empty($m['rows'])) {
        echo '<ul class="ps-form">';
        foreach ($m['rows'] as [$k, $v, $flag]) echo '<li' . ($flag ? ' class="is-flag"' : '') . '><span>' . e($k) . '</span><b>' . e($v) . '</b></li>';
        echo '</ul>';
    }
    echo '<div class="ps-alert"><span class="ps-alert-icon">!</span>' . e($m['alert']) . '</div>';
    ps_phone_close();
}

// Map with a route drawing itself and a stats card
function ps_route(array $m)
{
    echo '<div class="ps-routebox">';
    ps_map(true);
    echo '<span class="ps-pin ps-pin--start"></span><span class="ps-pin ps-pin--end"></span><dl class="ps-stats">';
    foreach ($m['stats'] as [$k, $v]) echo '<div><dt>' . e($k) . '</dt><dd>' . e($v) . '</dd></div>';
    echo '</dl></div>';
}

// Dark phone with notifications arriving one after another
function ps_notify(array $m)
{
    ps_phone_open(true);
    foreach ($m['notes'] as $n => [$title, $sub]) {
        echo '<div class="ps-toast ps-toast--' . $n . '" style="--n: ' . $n . '"><span class="ps-toast-icon">' . icon($m['icon'] ?? 'bell', 'w-4 h-4') . '</span><span>' . e($title) . '<small>' . e($sub) . '</small></span></div>';
    }
    ps_phone_close();
}

// Browser window with a small table
function ps_table(array $m)
{
    echo '<div class="ps-window"><div class="ps-window-bar"><i></i><i></i><i></i></div><table><thead><tr>';
    foreach ($m['cols'] as $col) echo '<th>' . e($col) . '</th>';
    echo '</tr></thead><tbody>';
    foreach ($m['rows'] as $r => $row) {
        echo '<tr style="--r: ' . $r . '">';
        foreach ($row as $cell) echo '<td>' . e($cell) . '</td>';
        echo '</tr>';
    }
    echo '</tbody></table></div>';
}

// Blue closing band with a live bar chart, used instead of render_cta() where a page's stories file has 'cta_chart'
function stories_cta($key, $heading, $text)
{
    $file = __DIR__ . '/' . basename($key) . '.php';
    if (!is_file($file)) return false;
    $data = require $file;
    if (empty($data['cta_chart'])) return false;
    $c = $data['cta_chart'];
    $max = 0;
    foreach ($c['bars'] as $b) $max = max($max, array_sum(array_slice($b, 1)));
    ?>
<section class="section">
    <div class="container-custom">
        <div class="cc-band" data-ps>
            <div class="cc-band-copy">
                <h2><?= e($heading) ?></h2>
                <p><?= e($text) ?></p>
                <div class="flex flex-col sm:flex-row gap-3">
                    <a href="/demo" class="cc-band-btn">Book a Demo</a>
                    <a href="/contact" class="cc-band-link">Talk to Sales <span aria-hidden="true">&rarr;</span></a>
                </div>
            </div>
            <div class="cc-band-chart" aria-hidden="true">
                <b class="cc-band-title"><?= e($c['title']) ?></b>
                <span class="cc-band-sub"><?= e($c['sub']) ?> &middot; demo data</span>
                <div class="cc-band-kpis">
<?php foreach ($c['kpis'] as [$label, $value, $delta]): ?>
                    <div><span><?= e($label) ?></span><b><?= e($value) ?> <em>&#9650; <?= e($delta) ?></em></b></div>
<?php endforeach; ?>
                </div>
                <div class="cc-band-bars">
<?php foreach ($c['bars'] as $r => $b): ?>
                    <div class="cc-band-col" style="--r: <?= $r ?>">
                        <div class="cc-band-stack" style="--h: <?= round(array_sum(array_slice($b, 1)) / $max * 100) ?>%">
<?php foreach (array_slice($b, 1) as $k => $v): ?>
                            <i class="cc-seg-<?= $k ?>" style="flex: <?= (int) $v ?>"></i>
<?php endforeach; ?>
                        </div>
                        <span><?= e($b[0]) ?></span>
                    </div>
<?php endforeach; ?>
                </div>
                <div class="cc-band-legend"><?php foreach ($c['legend'] as $k => $l): ?><span><i class="cc-seg-<?= $k ?>"></i><?= e($l) ?></span><?php endforeach; ?></div>
            </div>
        </div>
    </div>
</section>
<?php
    stories_script();
    return true;
}
