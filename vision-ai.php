<?php
// Vision AI: dedicated page with a CCTV console hero, sticky feature panels, benefit rows, an AI section and a closing scene.
require_once __DIR__ . '/includes/site.php';

$page = [
    'path' => '/vision-ai',
    'title' => 'Vision AI and Computer Vision for Manufacturing | DotOne',
    'description' => 'Turn existing CCTV into a data source: defect detection, safety monitoring and line activity, recorded straight into your ERP.',
    'breadcrumbs' => [['Vision AI', '/vision-ai']],
    'css' => ['/css/hrms.css', '/css/vision.css'],
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
            echo $person(245, 150, 1.3, 'vz-walk');
            echo '<g class="vz-walk"><rect class="vz-box is-bad" x="225" y="94" width="40" height="78" rx="3"/><text class="vz-tag is-bad" x="225" y="89">No vest</text></g>';
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

<main class="hr vz">

<!-- Hero: night sky over the plant, with the camera console rising -->
<section class="hr-hero vz-hero">
    <div class="vz-grid-bg" aria-hidden="true"></div>
    <div class="hr-hero-copy">
        <?php render_breadcrumbs($page); ?>
        <span class="hr-eyebrow">DotOne Vision AI</span>
        <h1>Vision AI for <span>Business Operations</span></h1>
        <p>Your cameras already watch the floor. Vision AI reads the CCTV you have, spots safety lapses, idle stations and defects, and records each one in DotOne against the right shift and line.</p>
        <div class="hr-ctas">
            <a href="/demo" class="hr-btn hr-btn--primary">Book a Technical Consultation</a>
            <a href="#features" class="hr-btn hr-btn--light">See it in action</a>
        </div>
    </div>
    <div class="hr-dash-wrap">
        <div class="vz-console" role="img" aria-label="Vision AI console with four camera feeds and live detections, demo data">
            <div class="vz-console-top" aria-hidden="true"><b><span class="vz-rec"></span>Plant 1 · live</b><span>4 cameras</span><em>Demo data</em></div>
            <div class="vz-console-body" aria-hidden="true">
                <div class="vz-feeds">
<?php foreach ([['ppe', 'CAM 03 · Line 2'], ['zone', 'CAM 07 · Press area'], ['line', 'CAM 11 · Packing'], ['idle', 'CAM 05 · Assembly']] as [$k, $label]): ?>
                    <div class="vz-feed"><?php vz_feed($k); ?><span class="vz-cam"><i></i><?= $label ?></span></div>
<?php endforeach; ?>
                </div>
                <div class="vz-alerts">
                    <small>Live detections</small>
<?php foreach ([['bad', 'No vest', 'CAM 03 · Line 2 · 10:42'], ['bad', 'Zone entry', 'CAM 07 · Press · 10:39'], ['warn', 'Station idle 12 min', 'CAM 05 · Assembly · 10:31'], ['bad', 'Scratch on part', 'CAM 11 · Packing · 10:28'], ['ok', 'PPE check passed', 'CAM 03 · Line 2 · 10:20']] as $k => [$t, $h, $sub]): ?>
                    <div class="vz-alert is-<?= $t ?>" style="--i: <?= $k ?>"><i></i><span><b><?= $h ?></b><em><?= $sub ?></em></span></div>
<?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why -->
<section class="hr-why">
    <div class="container-custom">
        <div class="hr-head">
            <span class="section-label">Why DotOne Vision AI</span>
            <h2>Cameras that do more than <span>record</span></h2>
            <p>Most CCTV footage is only watched after something goes wrong. Vision AI turns it into data your supervisors can act on during the shift.</p>
        </div>
        <div class="hr-why-grid">
<?php
$why = [
    ['eye', 'No new cameras in most plants', 'IP, PTZ, analog and NVR or DVR systems connect, so you start with the cameras already on the walls.'],
    ['bell', 'Alerts while it still matters', 'Supervisors hear about a missed vest or an entered zone during the shift, with a snapshot to see what happened.'],
    ['flow', 'Records, not just footage', 'Every detection becomes an entry in DotOne against the shift, line and job, next to production and quality data.'],
    ['shield', 'Your data, your rules', 'Cloud or on-premise, role-based access, encryption, audit logs and retention you set.'],
];
foreach ($why as $k => [$ico, $t, $d]):
    if ($k === 2): ?>
            <div class="hr-why-art vz-why-art" aria-hidden="true">
                <div class="hr-orbit"><i></i><i></i></div>
                <span class="hr-core vz-eye"><?= icon('eye', 'w-10 h-10') ?></span>
<?php foreach (['shield', 'users', 'eye', 'chart', 'bell', 'factory'] as $o => $oi): ?>
                <span class="hr-sat" style="--o: <?= $o ?>"><?= icon($oi, 'w-5 h-5') ?></span>
<?php endforeach; ?>
            </div>
<?php endif; ?>
            <div class="hr-why-item">
                <span class="hr-why-ico"><?= icon($ico, 'w-5 h-5') ?></span>
                <h3><?= e($t) ?></h3>
                <p><?= e($d) ?></p>
            </div>
<?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Feature panels -->
<section class="hr-features" id="features">
    <div class="container-custom hr-feat-grid">
        <nav class="hr-feat-nav" aria-label="Vision AI features">
            <span class="section-label">What it watches</span>
<?php foreach ($features as $k => [$key, $name]): ?>
            <a href="#<?= $key ?>" class="<?= $k === 0 ? 'is-active' : '' ?>" data-hr-link="<?= $key ?>"><?= e($name) ?><i></i></a>
<?php endforeach; ?>
        </nav>
        <div class="hr-feat-list">
<?php foreach ($features as $k => [$key, $name, $h, $text, $scene]): ?>
            <article class="hr-feat hr-scene--<?= $scene ?>" id="<?= $key ?>" data-hr-panel="<?= $key ?>">
                <div class="hr-scene" aria-hidden="true"><i class="hr-s1"></i><i class="hr-s2"></i><i class="hr-s3"></i></div>
                <span class="hr-feat-label"><?= e($name) ?></span>
                <h3><?= e($h) ?></h3>
                <p><?= e($text) ?></p>
                <div class="hr-mock" aria-hidden="true">
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
                <a href="/demo" class="hr-btn hr-btn--primary hr-feat-cta">Book a Technical Consultation</a>
            </article>
<?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Benefit rows -->
<section class="hr-benefits">
    <div class="container-custom">
        <div class="hr-benefit">
            <div class="hr-benefit-copy">
                <span class="hr-kicker">Act during the shift</span>
                <h2>Fewer surprises at the end of the day</h2>
                <p>Lapses, idle stations and defects reach the right person while there is still time to fix them.</p>
                <ul class="hr-ticks"><li>Alerts with a snapshot, not hours of footage</li><li>Idle time logged as production downtime</li><li>Rejections recorded in the quality record</li></ul>
                <a href="/demo" class="hr-btn hr-btn--primary">Book a Technical Consultation</a>
            </div>
            <div class="hr-benefit-art hr-art--cool" aria-hidden="true">
                <div class="vz-phone">
                    <b>Alerts · today</b>
<?php foreach ([['bad', 'No vest · Line 2', '10:42'], ['warn', 'Station S4 idle', '10:31'], ['bad', 'Zone entry · Press', '10:39']] as $k => [$t, $h, $tm]): ?>
                    <div class="vz-alert is-<?= $t ?>" style="--i: <?= $k ?>"><i></i><span><b><?= $h ?></b><em><?= $tm ?></em></span></div>
<?php endforeach; ?>
                </div>
                <div class="hr-float hr-float--b"><span class="hr-dot-ok">&#10003;</span><div><b>Resolved on the floor</b><small>Supervisor confirmed at 10:45</small></div></div>
            </div>
        </div>
        <div class="hr-benefit hr-benefit--flip">
            <div class="hr-benefit-copy">
                <span class="hr-kicker">Real insight</span>
                <h2>See where the floor needs help</h2>
                <p>History by camera, shift and line shows where lapses repeat and where stations sit idle.</p>
                <ul class="hr-ticks"><li>Safety lapses by line and shift</li><li>Station utilisation over the week</li><li>Defect reasons by product and line</li></ul>
                <a href="/demo" class="hr-btn hr-btn--primary">Book a Technical Consultation</a>
            </div>
            <div class="hr-benefit-art hr-art--warm" aria-hidden="true">
                <div class="hr-insight">
                    <b>This week</b>
                    <div><span><small>Lapses</small><em>5</em></span><span><small>Idle hours</small><em>14</em></span><span><small>Rejections</small><em>31</em></span></div>
                    <div class="hr-line"><svg viewBox="0 0 200 60" preserveAspectRatio="none"><path d="M0 12 C30 16 40 24 70 22 S120 34 140 36 170 44 200 48"/></svg></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- AI layer -->
<section class="hr-ai">
    <div class="hr-stars" aria-hidden="true"></div>
    <div class="hr-planet" aria-hidden="true"></div>
    <div class="hr-ai-orb vz-orb" aria-hidden="true"><?= icon('eye', 'w-16 h-16') ?><span>VISION AI</span></div>
    <div class="hr-ai-copy">
        <h2>Agents that read what the cameras see</h2>
        <p>The Quality AI Agent spots rejection patterns by machine, shift and vendor, and the Production AI Agent sees idle stations next to job cards and machine status.</p>
        <div class="hr-ai-qs">
<?php foreach (['Which line had the most PPE lapses this week?', 'Show rejections from CAM 11 by reason.', 'Which stations were idle longest on Shift B?'] as $q): ?>
            <span><?= e($q) ?></span>
<?php endforeach; ?>
        </div>
        <a href="/ai-agents/quality" class="hr-btn hr-btn--light">Meet the Quality AI Agent</a>
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

<section class="hr-end">
    <div class="hr-end-copy">
        <h2>See Vision AI on your own floor</h2>
        <p>Book a technical consultation. We review your cameras and network and pick the first use case with you.</p>
        <div class="hr-ctas">
            <a href="/demo" class="hr-btn hr-btn--primary">Book a Technical Consultation</a>
            <a href="/walkthrough" class="hr-btn hr-btn--light">Watch an order flow</a>
        </div>
    </div>
    <div class="hr-end-scene" aria-hidden="true" data-hr-end>
        <i class="hr-end-glow"></i>
        <i class="hr-end-rays"></i>
        <span class="hr-cloud hr-end-cloud hr-end-cloud--1"></span><span class="hr-cloud hr-end-cloud hr-end-cloud--2"></span><span class="hr-cloud hr-end-cloud hr-end-cloud--3"></span>
        <svg class="hr-birds" viewBox="0 0 120 40"><path d="M2 20 q6 -8 12 0 q6 -8 12 0"/><path d="M40 10 q5 -6 10 0 q5 -6 10 0"/><path d="M78 26 q4 -5 8 0 q4 -5 8 0"/></svg>
        <span class="hr-end-word"><span>dotone</span></span>
        <svg class="hr-land" viewBox="0 0 1440 420" preserveAspectRatio="none">
            <defs>
                <linearGradient id="wv0" x1="0" y1="0" x2="0" y2="1"><stop offset="0" stop-color="#C9E8FC"/><stop offset="1" stop-color="#A9DAF8"/></linearGradient>
                <linearGradient id="wv1" x1="0" y1="0" x2="0" y2="1"><stop offset="0" stop-color="#8CCDF5"/><stop offset="1" stop-color="#5FB6EE"/></linearGradient>
                <linearGradient id="wv2" x1="0" y1="0" x2="0" y2="1"><stop offset="0" stop-color="#3FA6EC"/><stop offset="1" stop-color="#1C8BDB"/></linearGradient>
                <linearGradient id="wv3" x1="0" y1="0" x2="0" y2="1"><stop offset="0" stop-color="#0F6FC0"/><stop offset="1" stop-color="#0A5FA8"/></linearGradient>
                <linearGradient id="wv4" x1="0" y1="0" x2="0" y2="1"><stop offset="0" stop-color="#0A4C8C"/><stop offset="1" stop-color="#083D72"/></linearGradient>
            </defs>
            <g class="hl" style="--d: 0.15"><path class="wv" style="--dur: 38s" fill="url(#wv0)" d="M0 230 Q180.0 204 360.0 230 T720 230 T1080 230 T1440 230 T1800 230 T2160 230 T2520 230 T2880 230 V420 H0Z"/></g>
            <g class="hl" style="--d: 0.35"><path class="wv" style="--dur: 30s" fill="url(#wv1)" d="M0 270 Q180.0 240 360.0 270 T720 270 T1080 270 T1440 270 T1800 270 T2160 270 T2520 270 T2880 270 V420 H0Z"/></g>
            <g class="hl" style="--d: 0.6"><path class="wv" style="--dur: 24s" fill="url(#wv2)" d="M0 310 Q180.0 276 360.0 310 T720 310 T1080 310 T1440 310 T1800 310 T2160 310 T2520 310 T2880 310 V420 H0Z"/></g>
            <g class="hl" style="--d: 0.85"><path class="wv" style="--dur: 18s" fill="url(#wv3)" d="M0 352 Q180.0 322 360.0 352 T720 352 T1080 352 T1440 352 T1800 352 T2160 352 T2520 352 T2880 352 V420 H0Z"/></g>
            <g class="hl" style="--d: 1"><path class="wv" style="--dur: 14s" fill="url(#wv4)" d="M0 392 Q180.0 370 360.0 392 T720 392 T1080 392 T1440 392 T1800 392 T2160 392 T2520 392 T2880 392 V420 H0Z"/></g>
        </svg>
        <div class="hr-chips">
<?php foreach ([['shield', 'Safety', 14, 62], ['users', 'Activity', 30, 72], ['eye', 'Defects', 48, 66], ['chart', 'Trends', 66, 74], ['bell', 'Alerts', 84, 64]] as $c => [$ico, $lbl, $x, $y]): ?>
            <span class="hr-chip" style="left: <?= $x ?>%; top: <?= $y ?>%; --c: <?= $c ?>"><?= icon($ico, 'w-4 h-4') ?><?= $lbl ?></span>
<?php endforeach; ?>
        </div>
        <div class="hr-sparks"><?php for ($k = 0; $k < 14; $k++): ?><i style="--k: <?= $k ?>; left: <?= 4 + ($k * 37) % 92 ?>%; bottom: <?= 10 + ($k * 23) % 45 ?>%"></i><?php endfor; ?></div>
    </div>
</section>

</main>

<script src="/js/hrms.js?v=<?= ASSET_VERSION ?>" defer></script>
<?php render_foot($page); ?>
