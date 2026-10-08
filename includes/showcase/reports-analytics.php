<?php
// Reports and Analytics: feature list on the left drives a live dashboard collage (demo data)
$rpFeatures = [
    ['live', 'Live dashboards', 'Sales, stock, production and purchase on one screen, updated the moment a transaction is saved.'],
    ['drill', 'Drill down to the detail', 'Open any total to see the plants, customers or orders behind it. No exporting to Excel to find out why.'],
    ['mis', 'MIS that builds itself', 'Monthly MIS for owners and department heads, ready on schedule without anyone compiling it.'],
];
?>
<section class="section bg-white overflow-hidden">
    <div class="container-custom">
        <div class="rp" data-rp>
            <div class="rp-copy">
                <span class="section-label">See it working</span>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-display font-semibold text-text-primary mb-8">Measure what matters. <span class="text-primary-500">Act on what changes.</span></h2>
                <div class="rp-list" role="tablist" aria-label="Reporting features">
<?php foreach ($rpFeatures as $i => [$key, $title, $text]): ?>
                    <button type="button" class="rp-item<?= $i === 0 ? ' is-active' : '' ?>" data-rp-item="<?= $key ?>" role="tab" aria-selected="<?= $i === 0 ? 'true' : 'false' ?>">
                        <span class="rp-item-title"><?= e($title) ?></span>
                        <span class="rp-item-text"><?= e($text) ?></span>
                        <span class="rp-item-bar" aria-hidden="true"></span>
                    </button>
<?php endforeach; ?>
                </div>
            </div>

            <div class="rp-board" aria-label="Demo dashboard" data-focus="live">
                <div class="rp-blob" aria-hidden="true"></div>
                <span class="rp-demo">Demo data</span>

                <!-- Target gauge -->
                <div class="rp-card rp-gauge" data-for="live mis" style="--i: 0">
                    <span class="rp-title">Monthly sales target</span>
                    <div class="rp-gauge-dial">
                        <svg viewBox="0 0 200 110" aria-hidden="true">
                            <path class="rp-arc rp-arc--bg" d="M20 100 A80 80 0 0 1 180 100" pathLength="100"/>
                            <path class="rp-arc rp-arc--fg" d="M20 100 A80 80 0 0 1 180 100" pathLength="100"/>
                            <g class="rp-needle"><line x1="100" y1="100" x2="100" y2="34"/><circle cx="100" cy="100" r="7"/></g>
                        </svg>
                    </div>
                    <div class="rp-gauge-foot"><span>&#8377;0</span><b>&#8377;<span data-rp-count="1.86" data-dec="2">1.86</span> Cr of &#8377;2.5 Cr</b><span>Target</span></div>
                </div>

                <!-- Plant output -->
                <div class="rp-card rp-plants" data-for="live drill" style="--i: 1">
                    <span class="rp-title">Output by plant <em>vs target</em></span>
<?php foreach ([['Plant 1', 82, 90], ['Plant 2', 68, 75], ['Plant 3', 91, 85], ['Plant 4', 54, 70]] as $r => [$pl, $v, $t]): ?>
                    <div class="rp-hbar" style="--r: <?= $r ?>; --v: <?= $v ?>%; --t: <?= $t ?>%"><span><?= $pl ?></span><div><i></i><em></em></div></div>
<?php endforeach; ?>
                    <div class="rp-axis"><span>0</span><span>25%</span><span>50%</span><span>75%</span><span>100%</span></div>
                </div>

                <!-- Department comparator -->
                <div class="rp-card rp-compare" data-for="drill mis" style="--i: 2">
                    <span class="rp-title">This month vs last month</span>
                    <div class="rp-table">
                        <span></span><b>Sales</b><b>Purchase</b><b>Production</b>
<?php foreach ([['Orders', ['148', '▲ 12%', 'up'], ['96', '▲ 4%', 'up'], ['212', '▲ 9%', 'up']], ['Pending', ['31', '▼ 18%', 'up'], ['14', '▲ 6%', 'down'], ['9', '▼ 25%', 'up']], ['Delayed', ['6', '▲ 2', 'down'], ['3', '▼ 1', 'up'], ['4', '▲ 1', 'down']]] as $r => $row): ?>
                        <span class="rp-rowlabel"><?= $row[0] ?></span>
<?php foreach (array_slice($row, 1) as [$n, $d, $tone]): ?>
                        <span class="rp-cell" style="--r: <?= $r ?>"><?= $n ?> <em class="is-<?= $tone ?>"><?= $d ?></em></span>
<?php endforeach; ?>
<?php endforeach; ?>
                    </div>
                </div>

                <!-- Top customers -->
                <div class="rp-card rp-top" data-for="drill" style="--i: 3">
                    <span class="rp-title">Top customers</span>
                    <ol>
<?php foreach ([['Shree Polymers', '₹28.4 L'], ['Om Industries', '₹22.1 L'], ['Kiran Packaging', '₹18.7 L'], ['Metro Pipes', '₹15.2 L'], ['Apex Agro', '₹12.9 L'], ['Nova Plast', '₹10.4 L']] as $r => [$c, $v]): ?>
                        <li style="--r: <?= $r ?>"><span><?= $r + 1 ?>. <?= $c ?></span><b><?= $v ?></b></li>
<?php endforeach; ?>
                    </ol>
                </div>

                <!-- Revenue -->
                <div class="rp-card rp-rev" data-for="live mis" style="--i: 4">
                    <span class="rp-title">Revenue this month</span>
                    <div class="rp-rev-num">&#8377;<span data-rp-count="1.86" data-dec="2">1.86</span> Cr <em>&#9650; 12%</em></div>
                    <span class="rp-rev-last">Last month: &#8377;1.66 Cr</span>
                    <div class="rp-spark" aria-hidden="true"><?php foreach ([38, 52, 46, 60, 55, 70, 64, 78, 72, 88] as $r => $h): ?><i style="--r: <?= $r ?>; --h: <?= $h ?>%"></i><?php endforeach; ?></div>
                </div>

                <!-- Funnel -->
                <div class="rp-card rp-funnel" data-for="mis drill" style="--i: 5">
                    <span class="rp-title">Enquiry to invoice</span>
<?php foreach ([['Enquiries', 420, 100], ['Quotations', 286, 78], ['Orders', 148, 56], ['Invoiced', 131, 44]] as $r => [$l, $n, $w]): ?>
                    <div class="rp-fstep" style="--r: <?= $r ?>; --w: <?= $w ?>%"><i><?= $n ?></i><span><?= $l ?></span></div>
<?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="/js/reports-showcase.js?v=<?= ASSET_VERSION ?>" defer></script>
