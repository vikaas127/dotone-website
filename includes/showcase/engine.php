<?php
// Page showcase: a feature list on the left drives a live dashboard of demo cards on the right.
// Usage: showcase('crm') loads includes/showcase/data/crm.php and renders it.
// Card types: kpi, gauge, bars, table, list, funnel, rings, steps, alert, grid, donut.
require_once dirname(__DIR__) . '/site.php';

function showcase($key)
{
    $file = __DIR__ . '/data/' . $key . '.php';
    if (!is_file($file)) return false;
    render_showcase(require $file);
    return true;
}

function render_showcase(array $s)
{
    static $scriptDone = false;
    $first = $s['features'][0][0];
    ?>
<section class="section <?= e($s['bg'] ?? 'bg-white') ?> overflow-hidden">
    <div class="container-custom">
        <div class="rp<?= !empty($s['flip']) ? ' rp--flip' : '' ?>" data-rp>
            <div class="rp-copy">
                <span class="section-label"><?= e($s['label'] ?? 'See it working') ?></span>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-display font-semibold text-text-primary mb-8"><?= e($s['h2'][0]) ?> <span class="text-primary-500"><?= e($s['h2'][1]) ?></span></h2>
                <div class="rp-list" role="tablist" aria-label="Features">
<?php foreach ($s['features'] as $i => [$key, $title, $text]): ?>
                    <button type="button" class="rp-item<?= $i === 0 ? ' is-active' : '' ?>" data-rp-item="<?= e($key) ?>" role="tab" aria-selected="<?= $i === 0 ? 'true' : 'false' ?>">
                        <span class="rp-item-title"><?= e($title) ?></span>
                        <span class="rp-item-text"><?= e($text) ?></span>
                        <span class="rp-item-bar" aria-hidden="true"></span>
                    </button>
<?php endforeach; ?>
                </div>
            </div>
            <div class="rp-board" aria-label="Demo dashboard" data-focus="<?= e($first) ?>">
                <div class="rp-blob" aria-hidden="true"></div>
                <span class="rp-demo">Demo data</span>
<?php foreach ($s['cards'] as $i => $c) sc_card($c, $i); ?>
            </div>
        </div>
    </div>
</section>
<?php
    if (!$scriptDone) {
        $scriptDone = true;
        echo '<script src="/js/showcase.js?v=' . ASSET_VERSION . '" defer></script>' . "\n";
    }
}

function sc_count($value, $dec = 0)
{
    return '<span data-rp-count="' . e($value) . '" data-dec="' . (int) $dec . '">' . e(number_format((float) $value, $dec)) . '</span>';
}

function sc_card(array $c, $i)
{
    $span = $c['span'] ?? 3;
    $cls = 'rp-card rp-span-' . $span . (!empty($c['tall']) ? ' rp-tall' : '') . (!empty($c['half']) ? ' rp-half' : '');
    echo '                <div class="' . $cls . '" data-for="' . e($c['for'] ?? '') . '" style="--i: ' . $i . '">' . "\n";
    if (!empty($c['title'])) {
        echo '                    <span class="rp-title">' . e($c['title']) . (!empty($c['note']) ? ' <em>' . e($c['note']) . '</em>' : '') . '</span>' . "\n";
    }
    $fn = 'sc_' . $c['type'];
    $fn($c);
    echo "                </div>\n";
}

// Big number with change and a small bar trend
function sc_kpi(array $c)
{
    echo '<div class="rp-rev-num">' . e($c['prefix'] ?? '') . sc_count($c['value'], $c['dec'] ?? 0) . e($c['suffix'] ?? '');
    if (!empty($c['delta'])) echo ' <em class="is-' . e($c['tone'] ?? 'up') . '">' . e($c['delta']) . '</em>';
    echo '</div>';
    if (!empty($c['sub'])) echo '<span class="rp-rev-last">' . e($c['sub']) . '</span>';
    if (!empty($c['spark'])) {
        echo '<div class="rp-spark" aria-hidden="true">';
        foreach ($c['spark'] as $r => $h) echo '<i style="--r: ' . $r . '; --h: ' . (int) $h . '%"></i>';
        echo '</div>';
    }
}

// Semi-circle gauge with a needle
function sc_gauge(array $c)
{
    $pct = max(0, min(100, $c['pct']));
    $deg = -90 + $pct * 1.8;
    ?>
<div class="rp-gauge-dial" style="--off: <?= 100 - $pct ?>; --deg: <?= $deg ?>deg">
    <svg viewBox="0 0 200 110" aria-hidden="true">
        <path class="rp-arc rp-arc--bg" d="M20 100 A80 80 0 0 1 180 100" pathLength="100"/>
        <path class="rp-arc rp-arc--fg" d="M20 100 A80 80 0 0 1 180 100" pathLength="100"/>
        <g class="rp-needle"><line x1="100" y1="100" x2="100" y2="34"/><circle cx="100" cy="100" r="7"/></g>
    </svg>
</div>
<div class="rp-gauge-foot"><span><?= e($c['min'] ?? '0') ?></span><b><?= e($c['center']) ?></b><span><?= e($c['max'] ?? 'Target') ?></span></div>
<?php
}

// Horizontal bars, optional target marker per row; tone: warn / ok
function sc_bars(array $c)
{
    foreach ($c['rows'] as $r => $row) {
        [$label, $v] = $row;
        $t = $row[2] ?? null;
        $tone = $row[3] ?? '';
        echo '<div class="rp-hbar' . ($tone ? ' is-' . e($tone) : '') . '" style="--r: ' . $r . '; --v: ' . (int) $v . '%' . ($t !== null ? '; --t: ' . (int) $t . '%' : '') . '"><span>' . e($label) . '</span><div><i></i>' . ($t !== null ? '<em></em>' : '') . '</div>';
        if (isset($row[4])) echo '<b>' . e($row[4]) . '</b>';
        echo '</div>';
    }
    if (!empty($c['axis'])) echo '<div class="rp-axis"><span>0</span><span>25%</span><span>50%</span><span>75%</span><span>100%</span></div>';
}

// Comparison table: rows of [label, [[value, delta, up|down], ...]]
function sc_table(array $c)
{
    $n = count($c['cols']);
    echo '<div class="rp-table" style="--cols: ' . $n . '"><span></span>';
    foreach ($c['cols'] as $col) echo '<b>' . e($col) . '</b>';
    foreach ($c['rows'] as $r => [$label, $cells]) {
        echo '<span class="rp-rowlabel">' . e($label) . '</span>';
        foreach ($cells as $cell) {
            echo '<span class="rp-cell" style="--r: ' . $r . '">' . e($cell[0]);
            if (!empty($cell[1])) echo ' <em class="is-' . e($cell[2] ?? 'up') . '">' . e($cell[1]) . '</em>';
            echo '</span>';
        }
    }
    echo '</div>';
}

// Ranked or plain list: [left, right, pill?, pillTone?]
function sc_list(array $c)
{
    echo '<ol class="rp-rows' . (!empty($c['numbered']) ? ' is-numbered' : '') . '">';
    foreach ($c['rows'] as $r => $row) {
        echo '<li style="--r: ' . $r . '"><span>' . e($row[0]) . '</span>';
        if (!empty($row[2])) echo '<i class="rp-pill rp-pill--' . e($row[3] ?? 'blue') . '">' . e($row[2]) . '</i>';
        if (isset($row[1]) && $row[1] !== '') echo '<b>' . e($row[1]) . '</b>';
        echo '</li>';
    }
    echo '</ol>';
}

// Narrowing pipeline: [label, number, width%]
function sc_funnel(array $c)
{
    foreach ($c['steps'] as $r => [$label, $n, $w]) {
        echo '<div class="rp-fstep" style="--r: ' . $r . '; --w: ' . (int) $w . '%"><i>' . e($n) . '</i><span>' . e($label) . '</span></div>';
    }
}

// Small progress rings: [label, pct, sub]
function sc_rings(array $c)
{
    echo '<div class="rp-rings">';
    foreach ($c['items'] as $r => $it) {
        echo '<div class="rp-ring" style="--r: ' . $r . '; --p: ' . (int) $it[1] . '"><div class="rp-ring-dial"><svg viewBox="0 0 40 40" aria-hidden="true"><circle cx="20" cy="20" r="16"/><circle cx="20" cy="20" r="16" pathLength="100"/></svg><b>' . (int) $it[1] . '%</b></div><strong>' . e($it[0]) . '</strong>';
        if (!empty($it[2])) echo '<span>' . e($it[2]) . '</span>';
        echo '</div>';
    }
    echo '</div>';
}

// Step tracker: [label, meta, done|now|todo]
function sc_steps(array $c)
{
    echo '<ol class="rp-steps">';
    foreach ($c['steps'] as $r => [$label, $meta, $state]) {
        echo '<li class="is-' . e($state) . '" style="--r: ' . $r . '"><i></i><div><b>' . e($label) . '</b><span>' . e($meta) . '</span></div></li>';
    }
    echo '</ol>';
}

// Agent alert that gets approved in a loop
function sc_alert(array $c)
{
    ?>
<div class="rp-alert" data-rp-alert>
    <div class="rp-alert-head">
        <span class="rp-alert-icon"><?= icon($c['icon'] ?? 'spark', 'w-4 h-4') ?></span>
        <div><strong><?= e($c['head']) ?></strong><span><?= e($c['text']) ?></span></div>
    </div>
<?php if (!empty($c['meta'])): ?>
    <ul class="rp-alert-meta">
<?php foreach ($c['meta'] as [$k, $v]): ?>
        <li><span><?= e($k) ?></span><b><?= e($v) ?></b></li>
<?php endforeach; ?>
    </ul>
<?php endif; ?>
    <div class="rp-alert-actions">
        <span class="sk-btn sk-btn--ghost"><?= e($c['ghost'] ?? 'Review') ?></span>
        <span class="sk-btn sk-btn--primary"><em><?= e($c['primary'] ?? 'Approve') ?></em><em><?= e($c['done'] ?? 'Approved') ?> &#10003;</em></span>
    </div>
</div>
<?php
}

// Day grid: string of codes, i = present, l = leave, o = off, x = absent, s = scheduled
function sc_grid(array $c)
{
    echo '<div class="rp-grid" style="--cols: ' . (int) ($c['cols'] ?? 7) . '">';
    foreach (str_split($c['cells']) as $d => $code) echo '<i class="is-' . e($code) . '" style="--d: ' . $d . '"></i>';
    echo '</div>';
    if (!empty($c['legend'])) {
        echo '<div class="rp-legend">';
        foreach ($c['legend'] as [$code, $label]) echo '<span><i class="is-' . e($code) . '"></i>' . e($label) . '</span>';
        echo '</div>';
    }
}

// Donut with up to 4 shades of the brand blue: [label, pct]
function sc_donut(array $c)
{
    $offset = 0;
    echo '<div class="rp-donut"><div class="rp-donut-dial"><svg viewBox="0 0 42 42" aria-hidden="true"><circle class="rp-donut-bg" cx="21" cy="21" r="15.9"/>';
    foreach ($c['segments'] as $r => [$label, $pct]) {
        echo '<circle class="rp-donut-seg rp-donut-seg--' . $r . '" cx="21" cy="21" r="15.9" pathLength="100" style="--len: ' . (float) $pct . '; --off: ' . (-$offset) . '; --r: ' . $r . '"/>';
        $offset += $pct;
    }
    echo '</svg><b>' . e($c['center']) . '<small>' . e($c['center_sub'] ?? '') . '</small></b></div><ul>';
    foreach ($c['segments'] as $r => [$label, $pct]) echo '<li><i class="rp-donut-key--' . $r . '"></i>' . e($label) . '<b>' . e($pct) . '%</b></li>';
    echo '</ul></div>';
}
