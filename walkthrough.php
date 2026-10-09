<?php
// Order journey: one demo order followed through all eight stages of the factory.
// A stage track at the top shows the whole flow; the panel below explains the current stage.
require_once __DIR__ . '/includes/site.php';

$stages = [
    [
        'key' => 'enquiry', 'work' => ['WhatsApp, email, web and call inboxes', 'ABC Industries needs 12,000 units', 'A lead, assigned to Rahul'], 'icon' => 'chat', 'name' => 'Enquiry', 'team' => 'Sales',
        'h' => ['Every enquiry,', 'in one place'],
        'text' => 'WhatsApp, email, website and phone enquiries land in one pipeline, so nothing is missed.',
        'agent' => 'crm', 'say' => 'I found [[7 new enquiries]]. ABC Industries needs [[12,000 units]]. The visit is assigned to Rahul.',
        'next' => ['Prepare the quotation', 'Sales executive'],
    ],
    [
        'key' => 'quote', 'work' => ['Price list, stock and line capacity', '16 October is possible at 18.7% margin', 'The quotation, ready to send'], 'icon' => 'doc', 'name' => 'Quotation', 'team' => 'Sales',
        'h' => ['A promise', 'the factory can keep'],
        'text' => 'Price, stock and capacity are checked before the quote goes out.',
        'agent' => 'sales', 'say' => 'Delivery by [[16 October]] is possible. Margin is [[18.7%]]. The quotation is approved and sent.',
        'next' => ['Plan the confirmed order', 'Production planner'],
    ],
    [
        'key' => 'plan', 'work' => ['The order and its multi-level BOM', '7 parts to make, 4 to buy', 'A plan on Line 2 from Monday'], 'icon' => 'flow', 'name' => 'Planning', 'team' => 'Production',
        'h' => ['One order,', 'every dependency'],
        'text' => 'The multi-level BOM breaks the order into what to make, what to buy and when.',
        'agent' => 'production', 'say' => 'BOM linked. [[7 components]] to make, [[4 materials]] to buy. Line 2 is booked from Monday.',
        'next' => ['Buy 4 materials', 'Purchase team'],
    ],
    [
        'key' => 'buy', 'work' => ['3 vendor quotes and past deliveries', 'Vendor B is ₹4/kg cheaper', 'PO-2231 for approval'], 'icon' => 'cart', 'name' => 'Purchase', 'team' => 'Purchase',
        'h' => ['The best quote,', 'on time'],
        'text' => 'Vendor quotes are compared side by side and the PO goes for approval.',
        'agent' => 'purchase', 'say' => '3 quotes compared. Vendor B is [[₹4/kg cheaper]] and delivers in 2 days. [[PO-2231]] is approved.',
        'next' => ['Receive the material', 'Stores'],
    ],
    [
        'key' => 'store', 'work' => ['The GRN against PO-2231', '1,960 kg arrived, QC passed', 'Put-away to rack R4, bin 2'], 'icon' => 'box', 'name' => 'Stores', 'team' => 'Stores',
        'h' => ['Every bag scanned,', 'every lot traced'],
        'text' => 'Goods are received against the PO, checked and put away with a QR label.',
        'agent' => 'inventory', 'say' => 'GRN recorded: [[1,960 kg]]. Incoming QC passed. Stored in [[rack R4, bin 2]] and issued to Line 2.',
        'next' => ['Start production', 'Shopfloor'],
    ],
    [
        'key' => 'make', 'work' => ['Job cards and machine signals', 'Extruder 4 stopped for 18 minutes', 'An on-time forecast for the planner'], 'icon' => 'factory', 'name' => 'Production', 'team' => 'Shopfloor',
        'h' => ['The line runs,', 'the numbers keep up'],
        'text' => 'Job cards, machine status and output are recorded as the work happens.',
        'agent' => 'production', 'say' => '[[11,400 of 12,000]] units done. Extruder 4 stopped for 18 minutes. OEE is [[82%]]. On track.',
        'next' => ['Inspect the batch', 'Quality team'],
    ],
    [
        'key' => 'check', 'work' => ['20 sample results for FG-3108', '1 sample too thin', 'A rework note and the release'], 'icon' => 'shield', 'name' => 'Quality', 'team' => 'Quality',
        'h' => ['Checked', 'before it ships'],
        'text' => 'Samples are inspected, rejects get a reason, and the batch is released.',
        'agent' => 'quality', 'say' => '20 samples checked. [[1 rejected]] for thickness and sent for rework. Batch [[FG-3108]] is released.',
        'next' => ['Pack and dispatch', 'Dispatch team'],
    ],
    [
        'key' => 'ship', 'work' => ['Carton scans against SO-1184', 'All 400 cartons match the order', 'Challan, invoice and e-way bill'], 'icon' => 'truck', 'name' => 'Dispatch', 'team' => 'Dispatch and accounts',
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

// Animated app-window visual for each stage
function wt_window_open($title, $module)
{
    echo '<div class="wv-win"><div class="wv-win-bar"><span class="wv-win-dots"><i></i><i></i><i></i></span><b>DotOne · ' . e($module) . '</b><em><i></i>Live</em></div><div class="wv-win-body"><span class="wv-win-title">' . e($title) . '</span>';
}

function wt_window_close()
{
    echo '</div></div>';
}

function wt_badge($text, $pos, $tone = 'blue', $delay = 1.4)
{
    echo '<span class="wv-badge wv-badge--' . $pos . ' is-' . $tone . '" style="--d: ' . $delay . 's"><i>' . ($tone === 'ok' ? '&#10003;' : '&#9679;') . '</i>' . e($text) . '</span>';
}

function wt_visual($key)
{
    switch ($key) {
        case 'enquiry':
            wt_window_open('Enquiry inbox', 'CRM'); ?>
            <ul class="wv-list">
<?php foreach ([['WA', 'ABC Industries', '12,000 units of 40 mm pipe', '2 min', true], ['@', 'Rao Polymers', 'Price for 500 m', '18 min', false], ['W', 'Gupta Plastics', 'Brochure request', '1 h', false], ['C', 'Mehta Industries', 'Repeat order, 2,000 m', '2 h', false]] as $i => [$ch, $name, $need, $t, $hot]): ?>
                <li class="<?= $hot ? 'is-hot' : '' ?>" style="--i: <?= $i ?>"><span class="wv-av"><?= e($ch) ?></span><span><b><?= e($name) ?></b><small><?= e($need) ?></small></span><em><?= e($t) ?></em></li>
<?php endforeach; ?>
            </ul>
<?php       wt_window_close();
            wt_badge('7 new enquiries today', 'tl', 'blue', 0.9);
            wt_badge('Assigned to Rahul', 'br', 'ok', 1.6);
            break;
        case 'quote':
            wt_window_open('Quotation Q-1051 · ABC Industries', 'Sales'); ?>
            <table class="wv-table">
                <thead><tr><th>Item</th><th>Qty</th><th>Amount</th></tr></thead>
                <tbody>
                    <tr style="--i: 0"><td>PVC pipe, 40 mm</td><td>10,000</td><td>₹15.5 L</td></tr>
                    <tr style="--i: 1"><td>PVC pipe, 63 mm</td><td>2,000</td><td>₹6.2 L</td></tr>
                    <tr style="--i: 2" class="is-total"><td>Total</td><td>12,000</td><td>₹21.7 L</td></tr>
                </tbody>
            </table>
            <div class="wv-meters">
                <div><span>Margin</span><div class="wv-meter" style="--to: 74%"><i></i></div><b>18.7%</b></div>
                <div><span>Delivery</span><div class="wv-meter" style="--to: 88%"><i></i></div><b>16 Oct</b></div>
            </div>
<?php       wt_window_close();
            wt_badge('Stock and capacity checked', 'tl', 'blue', 0.9);
            wt_badge('Approved and sent', 'br', 'ok', 1.8);
            break;
        case 'plan':
            wt_window_open('Order SO-1184 · bill of materials', 'Production'); ?>
            <div class="wv-tree">
                <span class="wv-node is-top" style="--i: 0">SO-1184 · 12,000 units</span>
                <div class="wv-row"><span class="wv-node" style="--i: 1">Assembly A</span><span class="wv-node" style="--i: 2">Assembly B</span></div>
                <div class="wv-row"><span class="wv-node is-make" style="--i: 3">Make · 7 parts</span><span class="wv-node is-buy" style="--i: 4">Buy · 4 materials</span></div>
            </div>
            <div class="wv-gantt">
<?php foreach ([['Line 1', 10, 50], ['Line 2', 2, 72], ['Line 3', 5, 40]] as $i => [$l, $x, $w]): ?>
                <div style="--i: <?= $i ?>"><span><?= $l ?></span><div><i style="left: <?= $x ?>%; --to: <?= $w ?>%"<?= $i === 1 ? ' class="is-new"' : '' ?>></i></div></div>
<?php endforeach; ?>
                <p><span>Mon</span><span>Tue</span><span>Wed</span><span>Thu</span><span>Fri</span></p>
            </div>
<?php       wt_window_close();
            wt_badge('Line 2 booked from Monday', 'br', 'ok', 2);
            break;
        case 'buy':
            wt_window_open('HDPE granules · 3 quotes', 'Purchase'); ?>
            <div class="wv-vendors">
<?php foreach ([['Vendor A', '₹104', '5 days', '4.1', false], ['Vendor B', '₹100', '2 days', '4.6', true], ['Vendor C', '₹103', '4 days', '3.9', false]] as $i => [$v, $p, $lt, $r, $best]): ?>
                <div class="<?= $best ? 'is-best' : '' ?>" style="--i: <?= $i ?>">
                    <b><?= $v ?></b><?= $best ? '<em>Best</em>' : '' ?>
                    <span><small>Price/kg</small><?= $p ?></span>
                    <span><small>Delivery</small><?= $lt ?></span>
                    <span><small>Rating</small><?= $r ?> ★</span>
                </div>
<?php endforeach; ?>
            </div>
<?php       wt_window_close();
            wt_badge('Saves ₹8,000 on this order', 'tl', 'blue', 1.2);
            wt_badge('PO-2231 approved', 'br', 'ok', 1.9);
            break;
        case 'store':
            wt_window_open('Main store · rack view', 'Inventory'); ?>
            <div class="wv-racks">
<?php for ($r = 0; $r < 3; $r++): ?>
                <div class="wv-shelf">
<?php for ($c = 0; $c < 6; $c++): $n = $r * 6 + $c; ?>
                    <i class="<?= $n === 9 ? 'is-target' : ($n % 5 === 0 ? 'is-empty' : '') ?>" style="--i: <?= $n ?>"></i>
<?php endfor; ?>
                </div>
<?php endfor; ?>
                <span class="wv-scan"></span>
            </div>
            <div class="wv-grn"><span>GRN-774</span><span>1,960 kg</span><span class="ok">QC passed</span><span>R4 · bin 2</span></div>
<?php       wt_window_close();
            wt_badge('Lot QR scanned', 'tl', 'blue', 0.9);
            wt_badge('Issued to Line 2', 'br', 'ok', 1.9);
            break;
        case 'make':
            wt_window_open('Line 2 · today', 'Production'); ?>
            <div class="wv-make">
                <div class="wv-ring" style="--p: 95"><svg viewBox="0 0 42 42"><circle cx="21" cy="21" r="16"/><circle cx="21" cy="21" r="16" pathLength="100"/></svg><b>95%<small>11,400 / 12,000</small></b></div>
                <div class="wv-machines">
<?php foreach ([['Extruder 1', 'run'], ['Extruder 2', 'run'], ['Extruder 4', 'stop'], ['Moulding 1', 'run']] as $i => [$m, $st]): ?>
                    <span class="is-<?= $st ?>" style="--i: <?= $i ?>"><i></i><?= $m ?><em><?= $st === 'run' ? 'Running' : 'Stopped 18 min' ?></em></span>
<?php endforeach; ?>
                </div>
            </div>
            <div class="wv-spark"><?php foreach ([40, 52, 48, 60, 58, 22, 64, 70, 72, 76] as $i => $h): ?><i style="--i: <?= $i ?>; --h: <?= $h ?>%"<?= $h < 30 ? ' class="is-dip"' : '' ?>></i><?php endforeach; ?></div>
<?php       wt_window_close();
            wt_badge('OEE 82%', 'tl', 'blue', 1);
            wt_badge('On track for today', 'br', 'ok', 2);
            break;
        case 'check':
            wt_window_open('Batch FG-3108 · inspection', 'Quality'); ?>
            <div class="wv-samples">
<?php for ($i = 0; $i < 20; $i++): ?>
                <i class="<?= $i === 13 ? 'is-bad' : '' ?>" style="--i: <?= $i ?>"></i>
<?php endfor; ?>
            </div>
            <div class="wv-qc">
                <div><b class="ok">19</b><span>Passed</span></div>
                <div><b class="bad">1</b><span>Thickness · to rework</span></div>
                <div><b>95%</b><span>First pass</span></div>
            </div>
<?php       wt_window_close();
            wt_badge('Rework note raised', 'tl', 'blue', 1.8);
            wt_badge('Batch released', 'br', 'ok', 2.3);
            break;
        case 'ship':
            wt_window_open('Dispatch · SO-1184', 'Sales'); ?>
            <div class="wv-route">
                <svg viewBox="0 0 320 120" aria-hidden="true">
                    <path class="wv-road" d="M20 92 C80 92 90 40 160 44 S250 30 300 28"/>
                    <path class="wv-road-done" d="M20 92 C80 92 90 40 160 44 S250 30 300 28" pathLength="100"/>
                    <circle cx="20" cy="92" r="7" class="wv-pin-a"/><circle cx="300" cy="28" r="7" class="wv-pin-b"/>
                    <text x="20" y="114" text-anchor="middle">Factory</text><text x="306" y="52" text-anchor="end">ABC Industries</text>
                    <g class="wv-van"><rect x="-14" y="-9" width="20" height="14" rx="2"/><path d="M6 -6 h6 l4 5 v6 h-10z"/><circle cx="-8" cy="6" r="3"/><circle cx="10" cy="6" r="3"/><animateMotion dur="5s" repeatCount="indefinite" path="M20 92 C80 92 90 40 160 44 S250 30 300 28"/></g>
                </svg>
            </div>
            <ul class="wv-checks">
<?php foreach (['400 cartons scanned', 'Challan DC-562', 'GST invoice INV-891', 'E-way bill'] as $i => $c): ?>
                <li style="--i: <?= $i ?>"><span>&#10003;</span><?= $c ?></li>
<?php endforeach; ?>
            </ul>
<?php       wt_window_close();
            wt_badge('Truck has left', 'br', 'ok', 2.2);
            break;
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
                <ol class="wt-work" aria-label="How the agent worked">
<?php foreach ([['Read', $s['work'][0]], ['Spotted', $s['work'][1]], ['Prepared', $s['work'][2]], ['You approve', 'One tap, and it moves on']] as $k => [$lbl, $txt]): ?>
                    <li style="--k: <?= $k ?>"><span class="wt-work-dot"><?= $k === 3 ? '&#10003;' : $k + 1 ?></span><b><?= $lbl ?></b><em><?= e($txt) ?></em></li>
<?php endforeach; ?>
                </ol>
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
