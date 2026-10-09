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
    if (!empty($data['flow'])) render_flow($data['flow']);
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

// Flow map: a process diagram with dashed connectors that carry moving packets.
// Laid out on a 1100 x 640 canvas; stacks into a vertical list on small screens.
function render_flow(array $f)
{
    $W = 1100; $H = 640;
    $pos = function ($x, $y, $w) use ($W, $H) {
        return 'left: ' . round($x / $W * 100, 3) . '%; top: ' . round($y / $H * 100, 3) . '%; width: ' . round($w / $W * 100, 3) . '%';
    };
    $check = '<span class="fl-ok">&#10003;</span>';
    $wait = '<span class="fl-wait">&#8226;&#8226;</span>';
    ?>
<section class="section bg-white">
    <div class="container-custom">
        <div class="max-w-2xl mb-10 md:mb-14">
            <span class="section-label"><?= e($f['label']) ?></span>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-display font-semibold text-text-primary mb-4"><?= e($f['h2'][0]) ?> <span class="text-primary-500"><?= e($f['h2'][1]) ?></span></h2>
            <p class="text-lg text-text-secondary"><?= e($f['intro']) ?></p>
        </div>
        <div class="fl" data-ps aria-label="<?= e($f['aria']) ?>" role="img">
            <svg class="fl-lines" viewBox="0 0 <?= $W ?> <?= $H ?>" preserveAspectRatio="none" aria-hidden="true">
                <defs><marker id="fl-arrow" viewBox="0 0 10 10" refX="8" refY="5" markerWidth="7" markerHeight="7" orient="auto"><path d="M0 0 L10 5 L0 10 z" fill="#0096EE"/></marker></defs>
                <path id="fl-p1" class="fl-path" d="M146 88 V190" marker-end="url(#fl-arrow)"/>
                <path id="fl-p2" class="fl-path" d="M248 250 H322 V52 H368" marker-end="url(#fl-arrow)"/>
                <path id="fl-p3" class="fl-path" d="M510 112 V140"/>
                <path id="fl-p4" class="fl-path" d="M510 176 V204" marker-end="url(#fl-arrow)"/>
                <path id="fl-p5" class="fl-path" d="M628 238 H724 V52 H828" marker-end="url(#fl-arrow)"/>
                <path class="fl-path fl-path--dim" d="M148 420 V600"/>
                <path class="fl-path fl-path--dim" d="M450 268 V440"/>
                <path class="fl-path fl-path--dark" d="M505 312 L532 326 M505 352 L532 330"/>
                <path class="fl-path fl-path--dark" d="M568 328 H690"/>
                <path class="fl-path fl-path--dark" d="M505 392 L560 412 H710 V348 M505 432 L560 412" marker-end="url(#fl-arrow)"/>
                <path class="fl-path fl-path--dark" d="M710 306 V246" marker-end="url(#fl-arrow)"/>
                <circle class="fl-packet" r="5"><animateMotion dur="2.6s" repeatCount="indefinite"><mpath href="#fl-p2"/></animateMotion></circle>
                <circle class="fl-packet" r="5"><animateMotion dur="2.6s" begin="1.3s" repeatCount="indefinite"><mpath href="#fl-p5"/></animateMotion></circle>
            </svg>

            <div class="fl-node fl-chip-dark" style="<?= $pos(30, 26, 236) ?>; --o: 0"><b><?= e($f['start'][0]) ?></b><span><?= e($f['start'][1]) ?></span></div>

            <div class="fl-node fl-card" style="<?= $pos(56, 194, 190) ?>; --o: 1">
                <div class="fl-card-top"><span class="fl-icon"><?= icon('doc', 'w-4 h-4') ?></span><?= $check ?></div>
                <i class="fl-line" style="width: 70%"></i><i class="fl-line"></i><i class="fl-line" style="width: 85%"></i>
            </div>
            <div class="fl-node fl-chip-dark fl-chip-avatar" style="<?= $pos(56, 352, 190) ?>; --o: 2"><span class="fl-avatar"><?= e($f['quotes']['initials']) ?></span><b><?= e($f['quotes']['title']) ?></b></div>
<?php foreach ($f['quotes']['steps'] as $k => [$label, $done]): ?>
            <div class="fl-node fl-pill" style="<?= $pos(56, 444 + $k * 66, 190) ?>; --o: <?= 3 + $k ?>"><?= e($label) ?><?= $done ? $check : $wait ?></div>
<?php endforeach; ?>

            <div class="fl-node fl-panel" style="<?= $pos(372, 4, 276) ?>; --o: 2">
                <b class="fl-panel-title"><?= e($f['po']['title']) ?></b>
                <div class="fl-mini"><span class="fl-avatar fl-avatar--soft"><?= e($f['po']['initials']) ?></span><span><b><?= e($f['po']['line1']) ?></b><small><?= e($f['po']['line2']) ?></small></span></div>
            </div>
            <span class="fl-node fl-dot" style="<?= $pos(492, 140, 36) ?>; --o: 3"><?= icon('bell', 'w-4 h-4') ?></span>
            <div class="fl-node fl-hub" style="<?= $pos(392, 206, 236) ?>; --o: 4"><?= e($f['approval']['title']) ?></div>
<?php foreach ($f['approval']['stages'] as $k => $stage): ?>
            <div class="fl-node fl-stage" style="<?= $pos(392, 290 + $k * 42, 118) ?>; --o: <?= 5 + $k ?>"><?= e($stage) ?></div>
<?php endforeach; ?>
            <span class="fl-node fl-dot fl-dot--dark" style="<?= $pos(532, 310, 36) ?>; --o: 6"><?= icon('doc', 'w-4 h-4') ?><em class="is-warn">!</em></span>
            <span class="fl-node fl-ring" style="<?= $pos(623, 320, 16) ?>; --o: 7"></span>
            <span class="fl-node fl-dot fl-dot--dark" style="<?= $pos(692, 310, 36) ?>; --o: 8"><?= icon('doc', 'w-4 h-4') ?><em>&#10003;</em></span>
            <p class="fl-node fl-note" style="<?= $pos(520, 448, 230) ?>; --o: 9"><?= e($f['approval']['note']) ?></p>

            <div class="fl-node fl-tag" style="<?= $pos(656, 130, 136) ?>; --o: 9"><?= e($f['approved']) ?></div>

            <div class="fl-node fl-panel" style="<?= $pos(832, 4, 268) ?>; --o: 10">
                <b class="fl-panel-title"><?= e($f['end']['title']) ?></b>
                <div class="fl-end">
                    <svg class="fl-donut" viewBox="0 0 42 42" aria-hidden="true"><circle cx="21" cy="21" r="15.9" class="fl-donut-bg"/><circle cx="21" cy="21" r="15.9" pathLength="100" class="fl-donut-fg" style="--p: <?= (int) $f['end']['pct'] ?>"/></svg>
                    <ul><li><i></i><?= e($f['end']['legend'][0]) ?></li><li><i class="is-soft"></i><?= e($f['end']['legend'][1]) ?></li></ul>
                </div>
<?php foreach ($f['end']['rows'] as [$label, $done]): ?>
                <div class="fl-end-row"><?= e($label) ?><?= $done ? $check : $wait ?></div>
<?php endforeach; ?>
            </div>
        </div>
        <p class="ps-demo">Diagram shows demo data.</p>
    </div>
</section>
<?php
    stories_script();
}
