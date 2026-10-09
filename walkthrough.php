<?php
// Order journey: one demo order followed through all eight stages of the factory.
// A stage track at the top shows the whole flow; the panel below explains the current stage.
require_once __DIR__ . '/includes/site.php';

$stages = [
    [
        'key' => 'enquiry', 'icon' => 'chat', 'name' => 'Enquiry', 'team' => 'Sales',
        'h' => ['Every enquiry,', 'in one place'],
        'text' => 'WhatsApp, email, website and phone enquiries land in one pipeline, so nothing is missed.',
        'agent' => 'crm', 'say' => 'I found [[7 new enquiries]]. ABC Industries needs [[12,000 units]]. The visit is assigned to Rahul.',
        'next' => ['Prepare the quotation', 'Sales executive'],
    ],
    [
        'key' => 'quote', 'icon' => 'doc', 'name' => 'Quotation', 'team' => 'Sales',
        'h' => ['A promise', 'the factory can keep'],
        'text' => 'Price, stock and capacity are checked before the quote goes out.',
        'agent' => 'sales', 'say' => 'Delivery by [[16 October]] is possible. Margin is [[18.7%]]. The quotation is approved and sent.',
        'next' => ['Plan the confirmed order', 'Production planner'],
    ],
    [
        'key' => 'plan', 'icon' => 'flow', 'name' => 'Planning', 'team' => 'Production',
        'h' => ['One order,', 'every dependency'],
        'text' => 'The multi-level BOM breaks the order into what to make, what to buy and when.',
        'agent' => 'production', 'say' => 'BOM linked. [[7 components]] to make, [[4 materials]] to buy. Line 2 is booked from Monday.',
        'next' => ['Buy 4 materials', 'Purchase team'],
    ],
    [
        'key' => 'buy', 'icon' => 'cart', 'name' => 'Purchase', 'team' => 'Purchase',
        'h' => ['The best quote,', 'on time'],
        'text' => 'Vendor quotes are compared side by side and the PO goes for approval.',
        'agent' => 'purchase', 'say' => '3 quotes compared. Vendor B is [[₹4/kg cheaper]] and delivers in 2 days. [[PO-2231]] is approved.',
        'next' => ['Receive the material', 'Stores'],
    ],
    [
        'key' => 'store', 'icon' => 'box', 'name' => 'Stores', 'team' => 'Stores',
        'h' => ['Every bag scanned,', 'every lot traced'],
        'text' => 'Goods are received against the PO, checked and put away with a QR label.',
        'agent' => 'inventory', 'say' => 'GRN recorded: [[1,960 kg]]. Incoming QC passed. Stored in [[rack R4, bin 2]] and issued to Line 2.',
        'next' => ['Start production', 'Shopfloor'],
    ],
    [
        'key' => 'make', 'icon' => 'factory', 'name' => 'Production', 'team' => 'Shopfloor',
        'h' => ['The line runs,', 'the numbers keep up'],
        'text' => 'Job cards, machine status and output are recorded as the work happens.',
        'agent' => 'production', 'say' => '[[11,400 of 12,000]] units done. Extruder 4 stopped for 18 minutes. OEE is [[82%]]. On track.',
        'next' => ['Inspect the batch', 'Quality team'],
    ],
    [
        'key' => 'check', 'icon' => 'shield', 'name' => 'Quality', 'team' => 'Quality',
        'h' => ['Checked', 'before it ships'],
        'text' => 'Samples are inspected, rejects get a reason, and the batch is released.',
        'agent' => 'quality', 'say' => '20 samples checked. [[1 rejected]] for thickness and sent for rework. Batch [[FG-3108]] is released.',
        'next' => ['Pack and dispatch', 'Dispatch team'],
    ],
    [
        'key' => 'ship', 'icon' => 'truck', 'name' => 'Dispatch', 'team' => 'Dispatch and accounts',
        'h' => ['Shipped,', 'invoiced, done'],
        'text' => 'Cartons are scanned out, and the challan, GST invoice and e-way bill are made in one go.',
        'agent' => 'sales', 'say' => 'All [[400 cartons]] scanned. Invoice [[INV-891]] and the e-way bill are ready. The truck has left.',
        'next' => ['Follow up the payment', 'Accounts'],
    ],
];

function wt_say($text)
{
    return preg_replace('/\[\[(.+?)\]\]/u', '<mark>$1</mark>', e($text));
}

// Small animated visual for each stage
function wt_visual($key)
{
    switch ($key) {
        case 'enquiry': ?>
            <div class="wv-enq">
                <div class="wv-chips">
<?php foreach (['WhatsApp', 'Email', 'Website', 'Phone'] as $i => $ch): ?>
                    <span style="--i: <?= $i ?>"><i></i><?= $ch ?></span>
<?php endforeach; ?>
                </div>
                <div class="wv-funnel"><i></i><i></i><i></i><i></i></div>
                <div class="wv-card wv-pop">
                    <small>New lead</small>
                    <b>ABC Industries</b>
                    <ul><li><span>Requirement</span><b>12,000 units</b></li><li><span>Source</span><b>WhatsApp</b></li><li><span>Assigned to</span><b>Rahul, sales</b></li></ul>
                </div>
            </div>
<?php break;
        case 'quote': ?>
            <div class="wv-card wv-quote">
                <small>Quotation Q-1051</small>
                <b>ABC Industries</b>
                <ul>
                    <li style="--i: 0"><span>Quantity</span><b>12,000 units</b></li>
                    <li style="--i: 1"><span>Stock and capacity</span><b class="ok">Checked</b></li>
                    <li style="--i: 2"><span>Delivery</span><b>16 October</b></li>
                    <li style="--i: 3"><span>Margin</span><b>18.7%</b></li>
                </ul>
                <span class="wv-stamp">Approved</span>
            </div>
<?php break;
        case 'plan': ?>
            <div class="wv-tree">
                <span class="wv-node is-top" style="--i: 0">Order SO-1184</span>
                <div class="wv-row">
                    <span class="wv-node" style="--i: 1">Assembly A</span>
                    <span class="wv-node" style="--i: 2">Assembly B</span>
                </div>
                <div class="wv-row">
                    <span class="wv-node is-make" style="--i: 3">Make: 7 components</span>
                    <span class="wv-node is-buy" style="--i: 4">Buy: 4 materials</span>
                </div>
                <div class="wv-cap"><span>Line 2 capacity</span><div><i></i></div><b>78% booked</b></div>
            </div>
<?php break;
        case 'buy': ?>
            <div class="wv-card">
                <small>Vendor quotes · HDPE granules</small>
                <div class="wv-bars">
<?php foreach ([['Vendor A', 92, '₹104/kg', false], ['Vendor B', 74, '₹100/kg', true], ['Vendor C', 86, '₹103/kg', false]] as $i => [$v, $w, $p, $best]): ?>
                    <div class="wv-bar<?= $best ? ' is-best' : '' ?>" style="--i: <?= $i ?>; --w: <?= $w ?>%"><span><?= $v ?></span><div><i></i></div><b><?= $p ?></b></div>
<?php endforeach; ?>
                </div>
                <div class="wv-po"><span>PO-2231 · Vendor B</span><em>Approved</em></div>
            </div>
<?php break;
        case 'store': ?>
            <div class="wv-store">
                <div class="wv-rack">
<?php for ($i = 0; $i < 15; $i++): ?>
                    <i class="<?= $i === 7 ? 'is-target' : ($i % 4 === 0 ? 'is-empty' : '') ?>" style="--i: <?= $i ?>"></i>
<?php endfor; ?>
                    <span class="wv-scan"></span>
                </div>
                <div class="wv-card wv-small">
                    <small>GRN-774</small>
                    <ul><li><span>Received</span><b>1,960 kg</b></li><li><span>Incoming QC</span><b class="ok">Passed</b></li><li><span>Location</span><b>R4, bin 2</b></li></ul>
                </div>
            </div>
<?php break;
        case 'make': ?>
            <div class="wv-make">
                <div class="wv-ring" style="--p: 95"><svg viewBox="0 0 42 42"><circle cx="21" cy="21" r="16"/><circle cx="21" cy="21" r="16" pathLength="100"/></svg><b>95%<small>11,400 of 12,000</small></b></div>
                <div class="wv-machines">
<?php foreach ([['Extruder 1', 'run'], ['Extruder 2', 'run'], ['Extruder 4', 'stop'], ['Moulding 1', 'run']] as $i => [$m, $st]): ?>
                    <span class="is-<?= $st ?>" style="--i: <?= $i ?>"><i></i><?= $m ?><em><?= $st === 'run' ? 'Running' : 'Stopped 18 min' ?></em></span>
<?php endforeach; ?>
                    <span class="wv-oee">OEE today <b>82%</b></span>
                </div>
            </div>
<?php break;
        case 'check': ?>
            <div class="wv-card">
                <small>Batch FG-3108 · 20 samples</small>
                <div class="wv-samples">
<?php for ($i = 0; $i < 20; $i++): ?>
                    <i class="<?= $i === 13 ? 'is-bad' : '' ?>" style="--i: <?= $i ?>"></i>
<?php endfor; ?>
                </div>
                <ul><li><span>Passed</span><b class="ok">19</b></li><li><span>Rejected, thickness</span><b class="bad">1, to rework</b></li></ul>
                <span class="wv-stamp">Released</span>
            </div>
<?php break;
        case 'ship': ?>
            <div class="wv-ship">
                <svg class="wv-truck" viewBox="0 0 220 110" aria-hidden="true">
                    <rect x="8" y="22" width="132" height="62" rx="6" class="t-box"/>
                    <g class="t-cartons"><rect x="18" y="32" width="26" height="22" rx="2"/><rect x="48" y="32" width="26" height="22" rx="2"/><rect x="78" y="32" width="26" height="22" rx="2"/><rect x="108" y="32" width="24" height="22" rx="2"/><rect x="18" y="57" width="26" height="20" rx="2"/><rect x="48" y="57" width="26" height="20" rx="2"/><rect x="78" y="57" width="26" height="20" rx="2"/><rect x="108" y="57" width="24" height="20" rx="2"/></g>
                    <path d="M144 40 H178 L204 62 V84 H144 Z" class="t-cab"/><path d="M152 46 H174 L192 62 H152 Z" class="t-win"/>
                    <circle cx="44" cy="88" r="12" class="t-wheel"/><circle cx="172" cy="88" r="12" class="t-wheel"/>
                    <path d="M0 102 H220" class="t-road"/>
                </svg>
                <ul class="wv-checks">
<?php foreach (['400 cartons scanned', 'Delivery challan DC-562', 'GST invoice INV-891', 'E-way bill generated'] as $i => $c): ?>
                    <li style="--i: <?= $i ?>"><span>&#10003;</span><?= $c ?></li>
<?php endforeach; ?>
                </ul>
            </div>
<?php break;
    }
}

$page = [
    'path' => '/walkthrough',
    'title' => 'Order Journey: One Order Through the Factory | DotOne',
    'description' => 'Follow one order through DotOne from enquiry to dispatch: quotation, planning, purchase, stores, production, quality and invoice, with an AI agent at every step.',
];
$v = ASSET_VERSION;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= e($page['title']) ?></title>
    <meta name="description" content="<?= e($page['description']) ?>">
    <link rel="canonical" href="<?= SITE_URL ?>/walkthrough">
    <link rel="icon" href="/favicon.ico" sizes="48x48"><link rel="apple-touch-icon" href="/public/apple-touch-icon.png"><meta name="theme-color" content="#0096EE">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="DotOne">
    <meta property="og:title" content="<?= e($page['title']) ?>">
    <meta property="og:description" content="<?= e($page['description']) ?>">
    <meta property="og:url" content="<?= SITE_URL ?>/walkthrough">
    <meta property="og:image" content="<?= SITE_URL ?>/assets/og-image.jpg?v=2">
    <meta name="twitter:card" content="summary_large_image">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">
    <link rel="stylesheet" href="/css/main.css?v=<?= $v ?>">
    <link rel="stylesheet" href="/css/walkthrough.css?v=<?= $v ?>">
    <script type="application/ld+json"><?= json_encode([
        '@context' => 'https://schema.org',
        '@graph' => [
            ['@type' => 'WebPage', 'name' => $page['title'], 'description' => $page['description'], 'url' => SITE_URL . '/walkthrough', 'isPartOf' => ['@type' => 'WebSite', 'name' => 'DotOne', 'url' => SITE_URL . '/']],
            ['@type' => 'BreadcrumbList', 'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => SITE_URL . '/'],
                ['@type' => 'ListItem', 'position' => 2, 'name' => 'Order journey', 'item' => SITE_URL . '/walkthrough'],
            ]],
        ],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?></script>
</head>
<body class="wt-body">

<header class="wt-top">
    <a href="/" class="wt-logo"><img src="/assets/dotone-wm-blue-tight.png" alt="DotOne" width="147" height="34" style="height: 30px; width: auto"></a>
    <span class="wt-top-title">Order journey <em>Illustrative order · demo data</em></span>
    <div class="wt-top-actions">
        <a href="/demo" class="wt-top-demo">Book a Demo</a>
        <a href="/" class="wt-exit" data-wt-exit aria-label="Exit the order journey">&times;</a>
    </div>
</header>

<main class="wt" data-wt>
    <h1 class="sr-only">One order through the factory, from enquiry to dispatch</h1>

    <nav class="wt-track" aria-label="Stages">
        <div class="wt-line" aria-hidden="true"><i data-wt-fill></i><b class="wt-runner" data-wt-runner></b></div>
<?php foreach ($stages as $i => $s): ?>
        <button type="button" class="wt-stop<?= $i === 0 ? ' is-active' : '' ?>" data-wt-go="<?= $i ?>" aria-label="Stage <?= $i + 1 ?>: <?= e($s['name']) ?>">
            <span class="wt-dot"><?= icon($s['icon'], 'w-5 h-5') ?><em>&#10003;</em></span>
            <span class="wt-stop-name"><?= e($s['name']) ?></span>
        </button>
<?php endforeach; ?>
    </nav>

    <div class="wt-stage">
<?php foreach ($stages as $i => $s): $a = AGENTS[$s['agent']]; ?>
        <section class="wt-panel<?= $i === 0 ? ' is-active' : '' ?>" data-wt-panel="<?= $i ?>" id="<?= e($s['key']) ?>" aria-label="<?= e($s['name']) ?>">
            <div class="wt-copy">
                <span class="wt-step">Step <?= $i + 1 ?> of <?= count($stages) ?> · <?= e($s['team']) ?></span>
                <h2><?= e($s['h'][0]) ?> <span><?= e($s['h'][1]) ?></span></h2>
                <p><?= e($s['text']) ?></p>
                <div class="wt-agent">
                    <span class="wt-agent-ico"><?= icon($a['icon'], 'w-5 h-5') ?></span>
                    <div><b><?= e($a['name']) ?></b><span><?= wt_say($s['say']) ?></span></div>
                </div>
                <div class="wt-next">
                    <span class="wt-next-arrow" aria-hidden="true">&rarr;</span>
                    <div><small>Next</small><b><?= e($s['next'][0]) ?></b><span>Handed to <?= e($s['next'][1]) ?></span></div>
                    <i class="wt-timer" aria-hidden="true"></i>
                </div>
            </div>
            <div class="wt-visual" aria-hidden="true"><?php wt_visual($s['key']); ?></div>
        </section>
<?php endforeach; ?>
        <section class="wt-panel wt-done" data-wt-panel="<?= count($stages) ?>" id="done" aria-label="Summary">
            <div class="wt-copy">
                <span class="wt-step">The full flow</span>
                <h2>One order. <span>Eight teams. One system.</span></h2>
                <p>Every stage worked on the same record, so nobody re-typed anything and everyone saw the same numbers.</p>
                <div class="wt-done-ctas">
                    <a href="/demo" class="btn-hero-glow-lg">Book a Demo</a>
                    <button type="button" class="btn-ghost-lg" data-wt-go="0">Watch again</button>
                </div>
            </div>
            <div class="wt-visual" aria-hidden="true">
                <ol class="wt-summary">
<?php foreach ($stages as $i => $s): ?>
                    <li style="--i: <?= $i ?>"><span><?= icon($s['icon'], 'w-4 h-4') ?></span><b><?= e($s['name']) ?></b><em><?= e(AGENTS[$s['agent']]['name']) ?></em></li>
<?php endforeach; ?>
                </ol>
            </div>
        </section>
    </div>

    <div class="wt-controls">
        <button type="button" class="wt-btn" data-wt-prev aria-label="Previous stage">&#8249;</button>
        <button type="button" class="wt-btn wt-btn--play" data-wt-play aria-label="Pause">&#10074;&#10074;</button>
        <button type="button" class="wt-btn" data-wt-next aria-label="Next stage">&#8250;</button>
        <span class="wt-hint">Use the arrow keys or swipe</span>
    </div>
</main>

<script src="/js/walkthrough.js?v=<?= $v ?>" defer></script>
</body>
</html>
