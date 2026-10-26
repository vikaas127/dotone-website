<?php
// Vision AI: dedicated page with a CCTV console hero, sticky feature panels, benefit rows, an AI section and a closing scene.
require_once __DIR__ . '/includes/site.php';

$page = [
    'path' => '/vision-ai',
    'title' => 'Vision AI and Computer Vision for Manufacturing | DotOne',
    'description' => 'Turn existing CCTV into a data source: defect detection, safety monitoring and line activity, recorded straight into your ERP.',
    'breadcrumbs' => [['Vision AI', '/vision-ai']],
    'css' => ['/css/hrms.css', '/css/vision.css', '/css/vision2.css'],
    'faq' => [
        ['Do we need new cameras?', 'Usually not. Vision AI works with IP cameras, analog cameras through an encoder, and NVR or DVR systems with RTSP access.'],
        ['Where does the data go?', 'Detections are recorded in DotOne against the shift and line, alongside your production, quality and HR records. You can choose cloud or on-premise deployment.'],
        ['Who can see the camera data?', 'Access is role-based with audit logs, and data is encrypted. Retention periods can be configured to suit your policy.'],
        ['How does a rollout work?', 'We start by checking your cameras and network and agreeing the use cases. Then we connect the streams, calibrate for your site, train your team and set up alerts before go-live.'],
    ],
];

$features = [
    ['safety', 'Safety', 'Safety checks on every shift', 'PPE and restricted-zone checks run on your existing CCTV. When something is missed, the supervisor gets an alert and a snapshot is saved to the incident log.', 'night'],
    ['activity', 'Floor activity', 'See which stations are working', 'Camera by camera, see which stations are busy, idle or short-staffed. Idle time can be logged as downtime in production.', 'dawn'],
    ['defects', 'Defects', 'Catch defects while the line runs', 'Cameras check products for surface, dimension, assembly and label defects as they move, and each rejection lands in the quality record.', 'sky'],
    ['trends', 'Trends', 'Patterns you can act on', 'Stored history shows recurring lapses and bottlenecks by camera, shift and line, so supervisors act before output suffers.', 'dusk'],
    ['cameras', 'Your cameras', 'Works with the cameras you have', 'IP and PTZ cameras connect directly, analog cameras through an encoder, and NVR or DVR systems over RTSP. In most plants nothing needs replacing.', 'sea'],
    ['erp', 'Into your ERP', 'Every detection becomes a record', 'Detections land against the right shift, line and job in DotOne, next to your production, quality and HR data, so nobody re-types an incident.', 'meadow'],
];

// One CCTV feed drawn in SVG: floor, machines, workers and detection boxes
function vz_feed($kind)
{
    echo '<svg viewBox="0 0 320 180" class="vz-svg">';
    echo '<defs><linearGradient id="vzfloor' . $kind . '" x1="0" y1="0" x2="0" y2="1"><stop offset="0" stop-color="#1B2B44"/><stop offset="1" stop-color="#2B3F5E"/></linearGradient></defs>';
    echo '<rect width="320" height="180" fill="url(#vzfloor' . $kind . ')"/>';
    echo '<path d="M0 120 L320 100 M0 150 L320 128 M60 180 L120 60 M200 180 L210 60" stroke="#3B5478" stroke-width="1"/>';
    $person = function ($x, $y, $s, $cls = '') {
        return '<g class="vz-p ' . $cls . '" transform="translate(' . $x . ' ' . $y . ') scale(' . $s . ')"><circle cx="0" cy="-34" r="6" fill="#C9D6E8"/><path d="M-8 -26 h16 l3 24 h-22z" fill="#8FA6C6"/><path d="M-6 -2 v18 M6 -2 v18" stroke="#8FA6C6" stroke-width="4"/></g>';
    };
    switch ($kind) {
        case 'ppe':
            echo '<rect x="20" y="40" width="70" height="60" rx="4" fill="#3E5A80"/><rect x="230" y="30" width="70" height="70" rx="4" fill="#3E5A80"/>';
            echo $person(130, 140, 1.4) . '<path d="M121 85 a9 7 0 0 1 18 0 z" fill="#FFC53D"/>';
            echo '<rect class="vz-box is-ok" x="108" y="78" width="44" height="88" rx="3"/><text class="vz-tag is-ok" x="96" y="73">Helmet ✓ Vest ✓</text>';
            echo $person(262, 150, 1.3, 'vz-walk');
            echo '<g class="vz-walk"><rect class="vz-box is-bad" x="242" y="94" width="40" height="78" rx="3"/><text class="vz-tag is-bad" x="242" y="89">No vest</text></g>';
            break;
        case 'zone':
            echo '<path d="M150 70 L300 60 L310 170 L170 175Z" fill="rgba(240,68,56,0.18)" stroke="#F04438" stroke-dasharray="6 5" class="vz-zone"/>';
            echo '<text x="190" y="80" class="vz-tag is-bad">Restricted zone</text>';
            echo '<rect x="20" y="60" width="90" height="70" rx="4" fill="#3E5A80"/>';
            echo $person(120, 160, 1.3, 'vz-enter');
            break;
        case 'line':
            echo '<rect x="0" y="110" width="320" height="22" fill="#4A6488"/><g class="vz-belt">';
            for ($i = 0; $i < 8; $i++) echo '<rect x="' . ($i * 50) . '" y="96" width="30" height="16" rx="2" fill="#B9C8DC"/>';
            echo '</g><rect class="vz-box is-bad vz-defect" x="148" y="90" width="42" height="28" rx="3"/><text class="vz-tag is-bad vz-defect" x="148" y="85">Scratch · reject</text>';
            break;
        case 'idle':
            foreach ([[30, 'is-ok', 'Busy'], [130, 'is-ok', 'Busy'], [230, 'is-warn', 'Idle 12 min']] as [$x, $c, $t]) {
                echo '<rect x="' . $x . '" y="60" width="60" height="50" rx="4" fill="#3E5A80"/>';
                if ($c === 'is-ok') echo $person($x + 30, 160, 1.1);
                echo '<rect class="vz-box ' . $c . '" x="' . ($x - 6) . '" y="52" width="72" height="118" rx="3"/><text class="vz-tag ' . $c . '" x="' . ($x - 6) . '" y="47">' . $t . '</text>';
            }
            break;
    }
    echo '<rect class="vz-scanline" x="0" y="0" width="320" height="3"/>';
    echo '</svg>';
}

render_head($page);
?>

<main class="vz2">

<!-- Hero: control room, split layout -->
<section class="vz2-hero">
    <div class="vz-grid-bg" aria-hidden="true"></div>
    <div class="container-custom vz2-hero-grid">
        <div class="vz2-hero-copy">
            <?php render_breadcrumbs($page); ?>
            <span class="vz2-tag"><span class="vz-rec"></span>Vision AI · live on your CCTV</span>
            <h1>Vision AI for <span>Business Operations</span></h1>
            <p>Your cameras already watch the floor. Vision AI reads the CCTV you have, spots safety lapses, idle stations and defects, and records each one in DotOne against the right shift and line.</p>
            <div class="vz2-ctas">
                <a href="/demo" class="hr-btn hr-btn--primary">Book a Technical Consultation</a>
                <a href="#twin" class="vz2-ghost"><span class="vz2-play">&#9654;</span>Try the live factory demo</a>
            </div>
            <ul class="vz2-points"><li>Works with existing cameras</li><li>Cloud or on-premise</li><li>Every detection becomes a record</li></ul>
        </div>
        <div class="vz-console vz2-console" role="img" aria-label="Vision AI console with four camera feeds and live detections, demo data">
            <div class="vz-console-top" aria-hidden="true"><b><span class="vz-rec"></span>Plant 1 · live</b><span>4 cameras</span><em>Demo data</em></div>
            <div class="vz-feeds" aria-hidden="true">
<?php foreach ([['ppe', 'CAM 03 · Line 2'], ['zone', 'CAM 07 · Press area'], ['line', 'CAM 11 · Packing'], ['idle', 'CAM 05 · Assembly']] as [$k, $label]): ?>
                <div class="vz-feed"><?php vz_feed($k); ?><span class="vz-cam"><i></i><?= $label ?></span></div>
<?php endforeach; ?>
            </div>
            <div class="vz2-ticker" aria-hidden="true"><div>
<?php for ($r = 0; $r < 2; $r++): foreach ([['bad', 'No vest · CAM 03 · 10:42'], ['bad', 'Zone entry · CAM 07 · 10:39'], ['warn', 'Station idle 12 min · CAM 05'], ['bad', 'Scratch on part · CAM 11'], ['ok', 'PPE check passed · CAM 03']] as [$t, $txt]): ?>
                <span class="is-<?= $t ?>"><i></i><?= $txt ?></span>
<?php endforeach; endfor; ?>
            </div></div>
        </div>
    </div>
</section>

<!-- How a detection flows -->
<section class="vz2-flow">
    <div class="container-custom">
        <div class="vz2-flow-row">
<?php foreach ([['eye', 'Camera sees', 'Existing CCTV streams over RTSP'], ['spark', 'Vision AI checks', 'PPE, zones, idle stations, defects'], ['bell', 'Supervisor alerted', 'With a snapshot, during the shift'], ['flow', 'DotOne records it', 'Against the shift, line and job']] as $n => [$ico, $t, $d]): ?>
            <div class="vz2-step" style="--i: <?= $n ?>"><span><?= icon($ico, 'w-5 h-5') ?></span><b><?= $t ?></b><small><?= $d ?></small></div>
<?php if ($n < 3): ?><i class="vz2-link" aria-hidden="true"><em></em></i><?php endif; ?>
<?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Tabbed camera wall -->
<section class="vz2-tabs" id="features" data-vz-tabs>
    <div class="container-custom">
        <div class="vz2-head">
            <span class="vz2-kicker">What it watches</span>
            <h2>One system, six jobs your cameras can do</h2>
        </div>
        <div class="vz2-tablist" role="tablist" aria-label="Vision AI features">
<?php foreach ($features as $k => [$key, $name]): ?>
            <button type="button" role="tab" class="<?= $k === 0 ? 'is-active' : '' ?>" aria-selected="<?= $k === 0 ? 'true' : 'false' ?>" data-vz-tab="<?= $key ?>"><?= e($name) ?></button>
<?php endforeach; ?>
        </div>
<?php foreach ($features as $k => [$key, $name, $h, $text]): ?>
        <div class="vz2-panel hr-feat<?= $k === 0 ? ' is-active is-in' : '' ?>" role="tabpanel" id="<?= $key ?>" data-vz-panel="<?= $key ?>"<?= $k === 0 ? '' : ' hidden' ?>>
            <div class="vz2-panel-copy">
                <span class="vz2-num">0<?= $k + 1 ?></span>
                <h3><?= e($h) ?></h3>
                <p><?= e($text) ?></p>
                <a href="/demo" class="vz2-link-cta">Book a Technical Consultation &rarr;</a>
            </div>
            <div class="hr-mock vz2-mock" aria-hidden="true">
<?php switch ($key):
    case 'safety': ?>
                    <div class="hr-win vz-win"><div class="hr-win-bar"><i></i><i></i><i></i><b>CAM 03 · Line 2</b><em><span class="vz-rec"></span>Live</em></div><div class="vz-big"><?php vz_feed('ppe'); ?></div></div>
                    <div class="hr-float hr-float--r"><span class="vz-dot-bad">!</span><div><b>No vest · Line 2</b><small>Snapshot saved · supervisor alerted</small></div></div>
<?php break; case 'activity': ?>
                    <div class="hr-win"><div class="hr-win-bar"><i></i><i></i><i></i><b>Assembly hall · stations</b><em>Shift A</em></div>
                        <div class="vz-heat">
<?php foreach (['b', 'b', 'b', 'i', 'b', 'b', 's', 'b', 'b', 'b', 'i', 'b', 'b', 'b', 'b', 'b', 's', 'b'] as $n => $st): ?>
                            <span class="is-<?= $st ?>" style="--i: <?= $n ?>">S<?= $n + 1 ?></span>
<?php endforeach; ?>
                        </div>
                        <div class="hr-legend vz-legend"><span><i class="is-b"></i>Busy</span><span><i class="is-i"></i>Idle</span><span><i class="is-s"></i>Short-staffed</span></div>
                    </div>
                    <div class="hr-float hr-float--r"><span class="hr-dot-ok">&#10003;</span><div><b>Downtime logged</b><small>S4 idle 12 min · Production</small></div></div>
<?php break; case 'defects': ?>
                    <div class="hr-win vz-win"><div class="hr-win-bar"><i></i><i></i><i></i><b>CAM 11 · Packing line</b><em><span class="vz-rec"></span>Live</em></div><div class="vz-big"><?php vz_feed('line'); ?></div>
                        <div class="vz-defrow"><span><b>1,184</b>checked</span><span><b class="bad">7</b>rejected</span><span><b>Scratch</b>top reason</span></div>
                    </div>
<?php break; case 'trends': ?>
                    <div class="hr-win"><div class="hr-win-bar"><i></i><i></i><i></i><b>PPE lapses · last 8 weeks</b><em>All cameras</em></div>
                        <div class="vz-trend">
<?php foreach ([18, 15, 16, 12, 11, 8, 7, 5] as $n => $v): ?>
                            <span style="--h: <?= $v * 5 ?>%; --i: <?= $n ?>"><i></i><em>W<?= $n + 1 ?></em></span>
<?php endforeach; ?>
                        </div>
                        <div class="vz-defrow"><span><b>Line 2</b>most lapses</span><span><b>Shift C</b>peak time</span><span><b class="ok">−72%</b>since week 1</span></div>
                    </div>
<?php break; case 'cameras': ?>
                    <div class="hr-handoff vz-cams">
<?php foreach ([['eye', 'IP and PTZ cameras', 'ONVIF, direct'], ['link', 'Analog cameras', 'Through an encoder'], ['box', 'NVR and DVR', 'RTSP over your network']] as $s => [$ico, $t, $v]): ?>
                        <div class="hr-src" style="--i: <?= $s ?>"><span><?= icon($ico, 'w-4 h-4') ?></span><b><?= $t ?></b><small><?= $v ?></small></div>
<?php endforeach; ?>
                        <svg class="hr-wires" viewBox="0 0 200 180" preserveAspectRatio="none"><path d="M0 30 C100 30 100 90 200 90"/><path d="M0 90 H200"/><path d="M0 150 C100 150 100 90 200 90"/></svg>
                        <div class="hr-dest"><span><?= icon('eye', 'w-6 h-6') ?></span><b>Vision AI</b><small>Cloud or on-premise</small><em>&#10003; Encrypted · logged</em></div>
                    </div>
<?php break; case 'erp': ?>
                    <div class="vz-record">
                        <div class="vz-snap"><?php vz_feed('zone'); ?><span>Snapshot · 10:39</span></div>
                        <div class="hr-win vz-rec-card"><div class="hr-win-bar"><i></i><i></i><i></i><b>Incident INC-218</b></div>
                            <ul class="hr-rows"><li><span>Type</span><b>Restricted zone entry</b></li><li><span>Camera</span><b>CAM 07 · Press area</b></li><li><span>Shift and line</span><b>Shift A · Press 1</b></li><li><span>Assigned to</span><b>Safety officer</b></li></ul>
                        </div>
                    </div>
<?php break; endswitch; ?>
            </div>
        </div>
<?php endforeach; ?>
    </div>
</section>

<!-- Factory demo, live on the page -->
<section class="vz2-twin" id="twin">
    <div class="container-custom">
        <div class="vz2-head">
            <span class="vz2-kicker">Try it live</span>
            <h2>A whole factory in 3D, running on Vision AI and DotOne</h2>
            <p class="vz2-lead">Machines, stock, docks, trucks, people and alerts in one live view, with a shift timeline you can replay. Drag to look around, pick an area, or speed up time.</p>
        </div>
        <div class="vz2-twin-frame" data-vz-twin>
            <div class="vz2-twin-bar"><span class="hr-win-bar-dots"><i></i><i></i><i></i></span><b>DotOne · Factory demo</b><em>Demo factory · interactive</em><a href="/factory-demo" target="_blank" rel="noopener">Full screen &#8599;</a></div>
            <div class="vz2-twin-stage">
                <img src="/images/factory-demo.webp" alt="DotOne factory demo: a 3D demo factory with machine, stock and dock panels" width="1440" height="900" loading="lazy">
                <button type="button" class="vz2-twin-start" data-vz-twin-start><span class="vz2-play">&#9654;</span>Start the live factory demo</button>
            </div>
        </div>
        <p class="ps-demo">Demo factory and demo data. Works best on a laptop or desktop.</p>
    </div>
</section>

<!-- Why: four cards -->
<section class="vz2-why">
    <div class="container-custom">
        <div class="vz2-head vz2-head--light">
            <span class="vz2-kicker">Why DotOne Vision AI</span>
            <h2>Cameras that do more than record</h2>
        </div>
        <div class="vz2-why-grid">
<?php foreach ([
    ['eye', 'No new cameras in most plants', 'IP, PTZ, analog and NVR or DVR systems connect, so you start with the cameras already on the walls.'],
    ['bell', 'Alerts while it still matters', 'Supervisors hear about a missed vest or an entered zone during the shift, with a snapshot to see what happened.'],
    ['flow', 'Records, not just footage', 'Every detection becomes an entry in DotOne against the shift, line and job, next to production and quality data.'],
    ['shield', 'Your data, your rules', 'Cloud or on-premise, role-based access, encryption, audit logs and retention you set.'],
] as $k => [$ico, $t, $d]): ?>
            <div class="vz2-card" style="--i: <?= $k ?>"><span><?= icon($ico, 'w-5 h-5') ?></span><h3><?= e($t) ?></h3><p><?= e($d) ?></p></div>
<?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Agents -->
<section class="vz2-agents">
    <div class="container-custom vz2-agents-grid">
        <div>
            <span class="vz2-kicker">With AI agents</span>
            <h2>Ask what the cameras saw</h2>
            <p>The Quality AI Agent spots rejection patterns by machine, shift and vendor, and the Production AI Agent sees idle stations next to job cards and machine status.</p>
            <a href="/ai-agents/quality" class="hr-btn hr-btn--primary">Meet the Quality AI Agent</a>
        </div>
        <div class="vz2-chat">
<?php foreach ([['you', 'Which line had the most PPE lapses this week?'], ['bot', 'Line 2, with 9 lapses. Most were on Shift C, near the press area.'], ['you', 'Which stations were idle longest on Shift B?'], ['bot', 'S4 and S11, about 40 minutes each. Both waited for material.']] as $n => [$who, $txt]): ?>
            <div class="vz2-bubble is-<?= $who ?>" style="--i: <?= $n ?>"><?= e($txt) ?></div>
<?php endforeach; ?>
            <small>Demo answers</small>
        </div>
    </div>
</section>

<section class="vz-related">
    <div class="container-custom">
        <h2>Vision AI connects to</h2>
        <div class="vz-related-row">
<?php foreach ([['/vision-ai/quality-inspection', 'Visual Quality Inspection', 'eye'], ['/quality-management', 'Quality Management', 'shield'], ['/production-management', 'Production Management', 'factory'], ['/ai-agents/quality', 'Quality AI Agent', 'spark'], ['/security', 'Security', 'shield']] as [$u, $n, $ico]): ?>
            <a href="<?= $u ?>" class="module-chip"><?= icon($ico, 'w-4 h-4') ?><?= e($n) ?></a>
<?php endforeach; ?>
        </div>
    </div>
</section>

<?php render_faq($page['faq']); ?>

<!-- Closing: viewfinder -->
<section class="vz2-end">
    <div class="vz-grid-bg" aria-hidden="true"></div>
    <div class="vz2-frame" aria-hidden="true"><i></i><i></i><i></i><i></i><span class="vz-rec"></span><em>REC · Your floor</em></div>
    <div class="vz2-end-copy">
        <h2>See Vision AI on your own floor</h2>
        <p>Book a technical consultation. We review your cameras and network and pick the first use case with you.</p>
        <div class="vz2-ctas vz2-ctas--center">
            <a href="/demo" class="hr-btn hr-btn--primary">Book a Technical Consultation</a>
            <a href="#twin" class="vz2-ghost"><span class="vz2-play">&#9654;</span>Try the live factory demo</a>
        </div>
    </div>
</section>

</main>

<script src="/js/vision.js?v=<?= ASSET_VERSION ?>" defer></script>
<?php render_foot($page); ?>
