<?php
// Animated order-to-invoice process flow for a manufacturer, drawn as one SVG.
// Generic process: no customer names. Nodes appear in flow order, connectors draw in,
// and a glowing token keeps travelling the main path from sales order to dispatch.
require_once dirname(__DIR__) . '/site.php';

function render_o2i()
{
    $C = 480; $L = 150; $R = 810;
    // key => [x centre, y top, width, type, title, sub, step]
    $n = [
        'so'    => [$C, 40, 250, 'blue', 'Sales order', 'item · variant · quantity · date', 0],
        'new'   => [$C, 96, 170, 'decision', 'New item?', '', 1],
        'samp'  => [$L, 98, 220, 'white', 'Sample and trial', 'trial batch · sample sent', 2],
        'appr'  => [$L, 160, 220, 'white', 'Customer approval', 'variant and BOM locked', 3],
        'prio'  => [$C, 160, 250, 'white', 'Priority and promised date', 'make to order · customer told', 3],
        'mplan' => [$C, 220, 250, 'blue', 'Monthly plan', 'item-wise baseline · capacity', 4],
        'mid'   => [$L, 280, 220, 'white', 'Mid-month orders', 'slotted by priority', 5],
        'wplan' => [$C, 280, 250, 'white', 'Weekly plan', 'line balancing · work orders', 5],
        'bom'   => [$C, 340, 250, 'white', 'BOM and material plan', 'multi-level BOM · shortfall check', 6],
        'pr'    => [$R, 340, 220, 'white', 'Purchase requisition', 'raised from the shortfall', 7],
        'po'    => [$R, 400, 220, 'white', 'Purchase order', 'approval · vendor follow-up', 8],
        'grn'   => [$R, 460, 220, 'white', 'Gate entry and GRN', 'vendor lot · QR per bag', 9],
        'iqc'   => [$R, 520, 220, 'qc', 'Incoming QC', 'certificate · moisture · shade', 10],
        'rej'   => [$R, 586, 220, 'reject', 'Reject', 'return challan · debit note', 11],
        'rms'   => [$C, 520, 250, 'white', 'Raw material store', 'FIFO · by lot', 11],
        'issue' => [$C, 586, 250, 'blue', 'Daily plan and material issue', 'line × machine × shift · lot scan', 12],
    ];
    $lanes = [[200, 'Line A'], [480, 'Line B'], [760, 'Line C']];
    foreach ($lanes as $i => [$x, $name]) {
        $n["prep$i"] = [$x, 672, 220, 'white', $name . ': prepare', 'mix · blend · condition', 13];
        $n["bqc$i"]  = [$x, 732, 220, 'qc', 'Batch QC release', 'test before moulding', 14];
        $n["run$i"]  = [$x, 792, 220, 'blue', 'Production run', 'machine · shots · rejects', 15];
        $n["trim$i"] = [$x, 852, 220, 'white', 'Trim and finish', 'scrap back to regrind', 16];
    }
    $n += [
        'kit'   => [$C, 930, 190, 'decision', 'All parts ready?', '', 17],
        'hold'  => [$L, 932, 220, 'white', 'Kit on hold', 'planner chases the short line', 18],
        'asm'   => [$C, 996, 250, 'blue', 'Assembly', 'join · press · finish', 18],
        'fqc'   => [$C, 1056, 250, 'qc', 'Final QC and packing', 'AQL check · carton QR', 19],
        'fg'    => [$R, 1056, 220, 'done', 'Finished goods store', 'carton scan · reserved to order', 20],
        'dc'    => [$R, 1116, 220, 'white', 'Delivery challan', 'carton scan out · vehicle', 21],
        'inv'   => [$C, 1116, 250, 'white', 'Tax invoice and e-way bill', 'GST invoice from the challan', 22],
        'gate'  => [$L, 1116, 220, 'done', 'Dispatch and gate out', 'only after the invoice exists', 23],
    ];
    $H = 40;
    $box = function ($k) use ($n, $H) {
        [$x, $y, $w] = $n[$k];
        return ['l' => $x - $w / 2, 'r' => $x + $w / 2, 't' => $y, 'b' => $y + $H, 'x' => $x, 'm' => $y + $H / 2];
    };
    // Edges: [points, step, label, label x, label y, style]
    $e = [];
    $add = function ($pts, $step, $label = '', $lx = 0, $ly = 0, $style = '') use (&$e) { $e[] = [$pts, $step, $label, $lx, $ly, $style]; };
    $b = $box;
    $add([[$C, $b('so')['b']], [$C, 96]], 1);
    $add([[$C - 85, 116], [$b('samp')['r'], 116]], 2, 'Yes, new', 300, 110, 'ok');
    $add([[$L, $b('samp')['b']], [$L, 160]], 3);
    $add([[$b('appr')['r'], 180], [$b('prio')['l'], 180]], 3, 'Approved', 300, 174, 'ok');
    $add([[$C, 136], [$C, 160]], 3, 'No, variant exists', 540, 152, 'ok');
    $add([[$C, 200], [$C, 220]], 4);
    $add([[$C, 260], [$C, 280]], 5);
    $add([[$b('mid')['r'], 300], [$b('wplan')['l'], 300]], 5);
    $add([[$C, 320], [$C, 340]], 6);
    $add([[$b('bom')['r'], 360], [$b('pr')['l'], 360]], 7, 'Shortfall', 650, 354, 'warn');
    $add([[$R, 380], [$R, 400]], 8);
    $add([[$R, 440], [$R, 460]], 9);
    $add([[$R, 500], [$R, 520]], 10);
    $add([[$b('iqc')['l'], 540], [$b('rms')['r'], 540]], 11, 'Pass', 650, 534, 'ok');
    $add([[$R, 560], [$R, 586]], 11, 'Fail', 830, 577, 'bad');
    $add([[$C, 380], [$C, 520]], 11, 'Material in stock', 540, 452, 'ok');
    $add([[$C, 560], [$C, 586]], 12);
    $add([[$C, 626], [$C, 648], [200, 648], [200, 672]], 13);
    $add([[$C, 648], [$C, 672]], 13);
    $add([[$C, 648], [760, 648], [760, 672]], 13);
    foreach ($lanes as $i => [$x]) {
        $add([[$x, 712], [$x, 732]], 14);
        $add([[$x, 772], [$x, 792]], 15);
        $add([[$x, 832], [$x, 852]], 16);
        $add([[$x + 110, 872], [$x + 124, 872], [$x + 124, 692], [$x + 110, 692]], 16, '', 0, 0, 'loop');
        $add([[$x, 892], [$x, 906], [$C, 906], [$C, 930]], 17);
    }
    $add([[$C - 95, 950], [$b('hold')['r'], 952]], 18, 'No, part short', 300, 944, 'warn');
    $add([[$C, 970], [$C, 996]], 18, 'Yes, full kit', 540, 988, 'ok');
    $add([[$C, 1036], [$C, 1056]], 19);
    $add([[$b('fqc')['r'], 1076], [$b('fg')['l'], 1076]], 20);
    $add([[$R, 1096], [$R, 1116]], 21);
    $add([[$b('dc')['l'], 1136], [$b('inv')['r'], 1136]], 22);
    $add([[$b('inv')['l'], 1136], [$b('gate')['r'], 1136]], 23);

    $main = "M$C 60 V1076 H$R V1136 H$L";
    ?>
<section class="section bg-white">
    <div class="container-custom">
        <div class="max-w-2xl mb-10">
            <span class="section-label">Order to invoice</span>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-display font-semibold text-text-primary mb-4">One flow, <span class="text-primary-500">from sales order to gate out</span></h2>
            <p class="text-lg text-text-secondary">Every box is a DotOne document or transaction, and every arrow is a step the system triggers or a person confirms. Sampling, purchase and parallel production lines all feed the same order.</p>
        </div>
        <div class="o2i" data-o2i data-ps>
            <div class="o2i-head">
                <span>Order-to-invoice process flow</span>
                <button type="button" class="o2i-replay" data-o2i-replay>Replay</button>
            </div>
            <div class="o2i-scroll">
                <svg class="o2i-svg" viewBox="0 0 960 1190" role="img" aria-label="Process flow from sales order to dispatch: new items go through sampling and customer approval; orders are planned monthly and weekly; the BOM checks material and raises purchase requisitions for shortfalls; purchased material passes gate entry, GRN and incoming QC into the raw material store; material is issued to three production lines with batch QC, production and trimming; a kit check holds short orders; then assembly, final QC and packing, finished goods store, delivery challan, tax invoice and e-way bill, and dispatch.">
                    <defs>
                        <marker id="o2i-arr" viewBox="0 0 10 10" refX="9" refY="5" markerWidth="6" markerHeight="6" orient="auto"><path d="M0 0 L10 5 L0 10 z" fill="#4DB7F5"/></marker>
                        <filter id="o2i-glow" x="-50%" y="-50%" width="200%" height="200%"><feGaussianBlur stdDeviation="3"/></filter>
                    </defs>
<?php foreach ($e as [$pts, $step, $label, $lx, $ly, $style]):
        $d = 'M' . implode(' L', array_map(function ($p) { return $p[0] . ' ' . $p[1]; }, $pts)); ?>
                    <path class="o2i-edge<?= $style === 'loop' ? ' o2i-edge--loop' : '' ?>" d="<?= $d ?>" pathLength="100" style="--s: <?= $step ?>"<?= $style === 'loop' ? '' : ' marker-end="url(#o2i-arr)"' ?>/>
<?php if ($label): ?>
                    <text class="o2i-label o2i-label--<?= $style ?>" x="<?= $lx ?>" y="<?= $ly ?>" style="--s: <?= $step ?>"><?= e($label) ?></text>
<?php endif; endforeach; ?>
<?php foreach ($n as $k => [$x, $y, $w, $type, $title, $sub, $step]): ?>
                    <g class="o2i-node o2i-node--<?= $type ?>" style="--s: <?= $step ?>">
<?php if ($type === 'decision'): ?>
                        <polygon points="<?= $x ?>,<?= $y ?> <?= $x + $w / 2 ?>,<?= $y + 20 ?> <?= $x ?>,<?= $y + 40 ?> <?= $x - $w / 2 ?>,<?= $y + 20 ?>"/>
                        <text class="o2i-t" x="<?= $x ?>" y="<?= $y + 24 ?>"><?= e($title) ?></text>
<?php else: ?>
                        <rect x="<?= $x - $w / 2 ?>" y="<?= $y ?>" width="<?= $w ?>" height="<?= $H ?>" rx="5"/>
                        <text class="o2i-t" x="<?= $x ?>" y="<?= $y + 17 ?>"><?= e($title) ?></text>
                        <text class="o2i-s" x="<?= $x ?>" y="<?= $y + 30 ?>"><?= e($sub) ?></text>
<?php endif; ?>
                    </g>
<?php endforeach; ?>
                    <path id="o2i-main" d="<?= $main ?>" fill="none" stroke="none"/>
                    <g class="o2i-token">
                        <circle r="9" filter="url(#o2i-glow)"/>
                        <circle r="4.5"/>
                        <animateMotion dur="9s" repeatCount="indefinite" rotate="0"><mpath href="#o2i-main"/></animateMotion>
                    </g>
                    <text class="o2i-foot" x="20" y="1180">Dashed loops return trimmed scrap to regrind. Production lines run only when the order needs them.</text>
                </svg>
            </div>
            <div class="o2i-key" aria-hidden="true">
                <span><i class="k-blue"></i>Planning and production</span>
                <span><i class="k-white"></i>Document or transaction</span>
                <span><i class="k-qc"></i>Quality gate</span>
                <span><i class="k-done"></i>Stock or dispatch</span>
                <span><i class="k-reject"></i>Rejected</span>
            </div>
        </div>
        <p class="ps-demo">A typical make-to-order flow. Steps and lines are configured per plant.</p>
    </div>
</section>
<?php
    stories_script();
}
