<?php
// Centered hero with a dashboard window that flattens on scroll, flanked by angled glass cards.
// Expects $page with eyebrow, h1, intro. All figures are demo data.
$pnRail = [['home', 'Home'], ['trend', 'Sales'], ['cart', 'Purchase'], ['box', 'Stock'], ['factory', 'Production'], ['shield', 'Quality'], ['id', 'People'], ['rupee', 'Payroll'], ['chart', 'Reports']];
?>
<section class="pn" data-pn>
    <div class="pn-aurora" aria-hidden="true"><i></i><i></i><i></i></div>
    <div class="pn-floor" aria-hidden="true"></div>
    <div class="container-custom relative z-10 text-center">
        <?php render_breadcrumbs($page); ?>
        <span class="pn-eyebrow">&ndash; <?= e($page['eyebrow']) ?> &ndash;</span>
        <h1 class="pn-title"><?= e($page['h1']) ?></h1>
        <p class="pn-intro"><?= e($page['intro']) ?></p>
        <div class="flex flex-col sm:flex-row gap-3 justify-center">
            <a href="/demo" class="btn-hero-glow-lg">Book a Demo</a>
            <a href="/pricing" class="btn-ghost-lg">See Pricing</a>
        </div>
    </div>

    <div class="pn-stage" aria-label="Demo view of the DotOne business overview">
        <!-- Left glass cards -->
        <div class="pn-side pn-side--l2" aria-hidden="true">
            <span class="pn-side-title">Spend by category</span>
            <div class="pn-side-donut"><svg viewBox="0 0 42 42"><circle cx="21" cy="21" r="15.9" pathLength="100" class="pn-dn pn-dn--a"/><circle cx="21" cy="21" r="15.9" pathLength="100" class="pn-dn pn-dn--b"/><circle cx="21" cy="21" r="15.9" pathLength="100" class="pn-dn pn-dn--c"/></svg></div>
            <ul class="pn-side-keys"><li><i class="pn-k1"></i>Raw material</li><li><i class="pn-k2"></i>Freight</li><li><i class="pn-k3"></i>Power</li></ul>
        </div>
        <div class="pn-side pn-side--l1" aria-hidden="true">
            <span class="pn-side-title">Net revenue</span>
            <b class="pn-side-num">&#8377;<span data-pn-count="39.8" data-dec="1">39.8</span> L</b>
            <span class="pn-side-chip">&#9650; 6.2% year on year</span>
            <svg class="pn-side-area" viewBox="0 0 200 80" preserveAspectRatio="none"><path class="pn-area-fill" d="M0 70 C30 64 40 52 70 50 S120 30 140 34 S180 12 200 8 V80 H0Z"/><path class="pn-area-line" pathLength="1" d="M0 70 C30 64 40 52 70 50 S120 30 140 34 S180 12 200 8"/></svg>
        </div>

        <!-- Main window -->
        <div class="pn-window">
            <div class="pn-topbar">
                <span class="pn-brand"><span>D</span>DotOne</span>
                <span class="pn-search"><?= icon('spark', 'w-3.5 h-3.5') ?>Ask DotOne anything&hellip;</span>
                <span class="pn-top-right"><i></i><i></i><span class="pn-avatar">VS</span></span>
            </div>
            <div class="pn-body">
                <aside class="pn-rail">
<?php foreach ($pnRail as $i => [$ico, $label]): ?>
                    <span class="<?= $i === 0 ? 'is-active' : '' ?>"><?= icon($ico, 'w-4 h-4') ?><small><?= $label ?></small></span>
<?php endforeach; ?>
                </aside>
                <div class="pn-main">
                    <div class="pn-main-head"><strong>Business overview</strong><span class="pn-range">This year &#9662;</span><span class="pn-demo">Demo data</span></div>
                    <div class="pn-kpis">
<?php foreach ([['Net sales', '₹', 6.01, 2, ' Cr', '▲ 15%'], ['Receivables', '₹', 44.7, 1, ' L', '▼ 7%'], ['Stock value', '₹', 84.6, 1, ' L', '▲ 3%'], ['Plant OEE', '', 81, 0, '%', '▲ 4 pts']] as $i => [$l, $pre, $v, $d, $suf, $delta]): ?>
                        <div class="pn-kpi" style="--i: <?= $i ?>"><span><?= $l ?></span><b><?= $pre ?><span data-pn-count="<?= $v ?>" data-dec="<?= $d ?>"><?= number_format($v, $d) ?></span><?= $suf ?></b><em><?= $delta ?></em></div>
<?php endforeach; ?>
                    </div>
                    <div class="pn-grid">
                        <div class="pn-panel pn-chart">
                            <div class="pn-panel-head"><strong>Net profit</strong><span>Monthly</span></div>
                            <svg viewBox="0 0 440 150" preserveAspectRatio="none" aria-hidden="true">
                                <g class="pn-gridlines"><line x1="0" y1="30" x2="440" y2="30"/><line x1="0" y1="70" x2="440" y2="70"/><line x1="0" y1="110" x2="440" y2="110"/></g>
                                <path class="pn-chart-fill" d="M0 112 L40 92 L80 40 L120 118 L160 84 L200 100 L240 46 L280 78 L320 108 L360 70 L400 52 L440 64 V150 H0Z"/>
                                <path class="pn-chart-line" id="pnLine" pathLength="1" d="M0 112 L40 92 L80 40 L120 118 L160 84 L200 100 L240 46 L280 78 L320 108 L360 70 L400 52 L440 64"/>
                                <circle class="pn-chart-dot" r="5"><animateMotion dur="7s" repeatCount="indefinite" begin="2.4s"><mpath href="#pnLine"/></animateMotion></circle>
                            </svg>
                            <div class="pn-months"><?php foreach (['Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec', 'Jan', 'Feb', 'Mar'] as $m): ?><span><?= $m ?></span><?php endforeach; ?></div>
                        </div>
                        <div class="pn-panel pn-perf">
                            <div class="pn-panel-head"><strong>Performance</strong></div>
<?php foreach ([['Items below reorder level', '4'], ['Orders due this week', '23'], ['Days sales outstanding', '38 days'], ['On-time dispatch', '96%'], ['Present today', '134 / 142']] as $i => [$l, $v]): ?>
                            <div class="pn-perf-row" style="--i: <?= $i ?>"><span><?= $l ?></span><b><?= $v ?></b></div>
<?php endforeach; ?>
                        </div>
                        <div class="pn-panel pn-split">
                            <div class="pn-panel-head"><strong>Receivables</strong><span>&#8377;44.7 L</span></div>
                            <div class="pn-stack"><i style="--w: 63%"></i><i style="--w: 37%"></i></div>
                            <div class="pn-stack-keys"><span><i class="pn-k1"></i>Current &#8377;28.2 L</span><span><i class="pn-k4"></i>Overdue &#8377;16.5 L</span></div>
                        </div>
                        <div class="pn-panel pn-split">
                            <div class="pn-panel-head"><strong>Payables</strong><span>&#8377;31.6 L</span></div>
                            <div class="pn-stack"><i style="--w: 48%"></i><i style="--w: 22%"></i><i style="--w: 30%"></i></div>
                            <div class="pn-stack-keys"><span><i class="pn-k1"></i>Vendors</span><span><i class="pn-k2"></i>Advances</span><span><i class="pn-k3"></i>Payroll</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right glass cards -->
        <div class="pn-side pn-side--r1" aria-hidden="true">
            <span class="pn-side-title">Stock adjustments</span>
<?php foreach ([['Damaged in store', '25.5%'], ['Count variance', '19.4%'], ['Internal use', '15.2%'], ['Revaluation', '14.5%']] as $i => [$l, $v]): ?>
            <div class="pn-side-row" style="--i: <?= $i ?>"><span><i></i><?= $l ?></span><b><?= $v ?></b></div>
<?php endforeach; ?>
        </div>
        <div class="pn-side pn-side--r2" aria-hidden="true">
            <span class="pn-side-title">Receivables ageing</span>
            <b class="pn-side-num">&#8377;<span data-pn-count="44.7" data-dec="1">44.7</span> L</b>
            <div class="pn-side-bars"><?php foreach ([88, 52, 30, 18] as $i => $h): ?><i style="--h: <?= $h ?>%; --i: <?= $i ?>"></i><?php endforeach; ?></div>
            <div class="pn-side-axis"><span>0–30</span><span>31–60</span><span>61–90</span><span>90+</span></div>
        </div>
    </div>
</section>
<script src="/js/panorama.js?v=<?= ASSET_VERSION ?>" defer></script>
