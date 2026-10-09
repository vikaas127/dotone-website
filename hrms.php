<?php
// HRMS: a dedicated page with a scenic hero, sticky feature panels, benefit rows, an AI section and a closing scene.
require_once __DIR__ . '/includes/site.php';

$page = [
    'path' => '/hrms',
    'title' => 'HRMS Software for Indian Businesses | DotOne',
    'description' => 'Attendance, shifts, leave, onboarding and employee records in one HRMS built for Indian businesses, with biometric attendance and a mobile app for staff.',
    'breadcrumbs' => [['Modules', '/modules'], ['HRMS', '/hrms']],
    'css' => ['/css/hrms.css'],
    'faq' => [
        ['What is the difference between HRMS and payroll software?', 'Payroll software handles pay runs and statutory compliance. An HRMS covers wider HR work as well: employee records, attendance, leave, onboarding and performance. DotOne has both, linked, with [Payroll](/payroll) as its own module.'],
        ['Does DotOne HRMS work with biometric devices?', 'Yes. Biometric attendance devices are connected during setup, so punches flow into daily attendance automatically.'],
        ['Can employees see their own attendance, leave and payslips?', 'Yes. Employees get self-service access to their attendance, leave, payslips and personal details.'],
        ['What does implementation involve?', 'We review your attendance, shift and leave policies, configure the system, migrate employee records, connect biometric devices and run a payroll dry run before go-live.'],
    ],
];

$features = [
    ['records', 'Employee records', 'People data, in one place', 'Personal and job details, documents, policies, roles and departments sit in one employee master that every other module reads from.', 'sky'],
    ['attendance', 'Attendance and shifts', 'Attendance that counts itself', 'Biometric punches and shift rules build each day’s attendance and overtime, the same way every month.', 'dawn'],
    ['leave', 'Leave and holidays', 'Leave with the right approvals', 'Leave policies and holiday calendars per team, with requests routed to the right manager and balances kept up to date.', 'sea'],
    ['hiring', 'Hiring and onboarding', 'Hire faster, onboard from day one', 'Track candidates and interviews, issue offers and hand new joiners a structured first week.', 'meadow'],
    ['performance', 'Performance', 'Goals that stay in view', 'Set goals and KPIs, run appraisal cycles and keep manager feedback on record through the year.', 'dusk'],
    ['payroll', 'Hand-off to payroll', 'Clean data for every pay run', 'Approved attendance, overtime and leave flow straight into payroll, so the monthly run starts from data HR has already checked.', 'night'],
];

render_head($page);
?>

<main class="hr">

<!-- Hero: sky, hills and the HRMS dashboard rising out of them -->
<section class="hr-hero">
    <div class="hr-sky" aria-hidden="true">
        <i class="hr-sun"></i>
        <i class="hr-cloud hr-cloud--1"></i><i class="hr-cloud hr-cloud--2"></i><i class="hr-cloud hr-cloud--3"></i>
    </div>
    <div class="hr-hero-copy">
        <?php render_breadcrumbs($page); ?>
        <span class="hr-eyebrow">DotOne HRMS</span>
        <h1>HRMS software for <span>growing Indian businesses</span></h1>
        <p>Employee records, attendance, shifts, leave, hiring and performance on one connected core, with an AI agent that flags what needs HR’s attention.</p>
        <div class="hr-ctas">
            <a href="/demo" class="hr-btn hr-btn--primary">Book a Demo</a>
            <a href="#features" class="hr-btn hr-btn--light">See it in action</a>
        </div>
    </div>
    <div class="hr-hills" aria-hidden="true">
        <svg viewBox="0 0 1440 360" preserveAspectRatio="none">
            <path class="h1" d="M0 210 C180 150 320 170 480 200 S800 140 980 170 1300 120 1440 160 V360 H0Z"/>
            <path class="h2" d="M0 260 C200 210 380 250 560 240 S900 200 1080 230 1340 200 1440 220 V360 H0Z"/>
            <path class="h3" d="M0 300 C240 270 480 300 720 290 S1200 270 1440 290 V360 H0Z"/>
        </svg>
    </div>
    <div class="hr-dash-wrap">
        <div class="hr-dash" aria-label="DotOne HRMS dashboard with demo data" role="img">
            <div class="hr-dash-side" aria-hidden="true">
<?php foreach (['users', 'id', 'check', 'bell', 'trend', 'rupee', 'chart'] as $k => $ico): ?>
                <span class="<?= $k === 0 ? 'is-on' : '' ?>"><?= icon($ico, 'w-4 h-4') ?></span>
<?php endforeach; ?>
            </div>
            <div class="hr-dash-main" aria-hidden="true">
                <div class="hr-dash-top"><b>Sharma Polymers</b><span class="hr-search">Search employees</span><em>Demo data</em></div>
                <div class="hr-kpis">
<?php foreach ([['users', 'Headcount', '412', '+6 this month'], ['check', 'Present today', '94%', '388 of 412'], ['bell', 'Leave requests', '7', '3 need you'], ['trend', 'Open roles', '5', '2 offers out']] as $k => [$ico, $l, $v, $sub]): ?>
                    <div style="--i: <?= $k ?>"><span><?= icon($ico, 'w-4 h-4') ?></span><small><?= $l ?></small><b><?= $v ?></b><em><?= $sub ?></em></div>
<?php endforeach; ?>
                </div>
                <div class="hr-dash-grid">
                    <div class="hr-panel">
                        <small>Attendance this week</small>
                        <div class="hr-bars">
<?php foreach ([['Mon', 92], ['Tue', 95], ['Wed', 94], ['Thu', 89], ['Fri', 96], ['Sat', 82]] as $k => [$d, $v]): ?>
                            <span style="--h: <?= $v ?>%; --i: <?= $k ?>"><i></i><em><?= $d ?></em></span>
<?php endforeach; ?>
                        </div>
                    </div>
                    <div class="hr-panel">
                        <small>Headcount by department</small>
                        <div class="hr-donut"><svg viewBox="0 0 42 42"><circle cx="21" cy="21" r="15.9"/><circle cx="21" cy="21" r="15.9" pathLength="100" style="--a: 52; --o: 0"/><circle cx="21" cy="21" r="15.9" pathLength="100" style="--a: 22; --o: -52"/><circle cx="21" cy="21" r="15.9" pathLength="100" style="--a: 15; --o: -74"/></svg><ul><li><i></i>Production 52%</li><li><i></i>Stores 22%</li><li><i></i>Sales 15%</li><li><i></i>Office 11%</li></ul></div>
                    </div>
                    <div class="hr-panel hr-actions">
                        <small>Quick actions</small>
<?php foreach (['Add employee', 'Approve leave', 'Run attendance', 'Send to payroll'] as $a): ?>
                        <span><?= $a ?><i>&rsaquo;</i></span>
<?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why DotOne HRMS: four points around a central visual -->
<section class="hr-why">
    <div class="container-custom">
        <div class="hr-head">
            <span class="section-label">Why DotOne HRMS</span>
            <h2>HR software built the way <span>HR actually works</span></h2>
            <p>One employee record, one set of rules and one data model shared with payroll, finance and the shop floor.</p>
        </div>
        <div class="hr-why-grid">
<?php
$why = [
    ['flow', 'One system, one record', 'HRMS, payroll and the rest of the ERP share the same employee record, so nobody re-types joiners, exits or transfers.'],
    ['check', 'Rules you set in plain language', 'Shift, overtime and leave rules are configured per team by HR, without waiting for IT.'],
    ['phone', 'Staff use it from their phone', 'Employees mark attendance, apply for leave and see payslips in the mobile app, so HR answers fewer calls.'],
    ['spark', 'An AI agent watching the details', 'The HR AI Agent flags late marks, leave clashes and payroll checks before they turn into problems.'],
];
foreach ($why as $k => [$ico, $t, $d]):
    if ($k === 2): ?>
            <div class="hr-why-art" aria-hidden="true">
                <div class="hr-orbit"><i></i><i></i></div>
                <span class="hr-core"><img src="/assets/dotone-mark-white.png" alt="" width="160" height="142"></span>
<?php foreach (['users', 'id', 'check', 'bell', 'trend', 'rupee'] as $o => $oi): ?>
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

<!-- Feature panels with a sticky list -->
<section class="hr-features" id="features">
    <div class="container-custom hr-feat-grid" data-hr-feat>
        <nav class="hr-feat-nav" aria-label="HRMS features">
            <span class="section-label">What’s inside</span>
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
    case 'records': ?>
                    <div class="hr-win"><div class="hr-win-bar"><i></i><i></i><i></i><b>Employees</b><em>412 people</em></div>
                        <div class="hr-filters"><span>Production</span><span>Plant 1</span><span>Full-time</span></div>
                        <div class="hr-people">
<?php foreach ([['MR', 'Meena R.', 'Line supervisor', 'Production'], ['AS', 'Arjun S.', 'Machine operator', 'Production'], ['RK', 'Ravi K.', 'Sales executive', 'Sales'], ['PN', 'Priya N.', 'HR executive', 'Office'], ['VT', 'Vikram T.', 'Store keeper', 'Stores'], ['SD', 'Sunita D.', 'QC inspector', 'Quality']] as $p => [$in, $n, $r, $d]): ?>
                            <div style="--i: <?= $p ?>"<?= $p === 0 ? ' class="is-sel"' : '' ?>><span><?= $in ?></span><b><?= $n ?></b><small><?= $r ?></small><em><?= $d ?></em></div>
<?php endforeach; ?>
                        </div>
                    </div>
<?php break; case 'attendance': ?>
                    <div class="hr-win"><div class="hr-win-bar"><i></i><i></i><i></i><b>Attendance · this week</b><em>Shift A</em></div>
                        <div class="hr-att">
                            <div class="hr-att-h"><span></span><?php foreach (['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'] as $d): ?><b><?= $d ?></b><?php endforeach; ?></div>
<?php foreach ([['Meena R.', 'pppppp'], ['Arjun S.', 'ppplpp'], ['Ravi K.', 'ppppfp'], ['Vikram T.', 'pplppp'], ['Sunita D.', 'pppppo']] as $r => [$n, $codes]): ?>
                            <div class="hr-att-r"><span><?= $n ?></span><?php foreach (str_split($codes) as $c => $code): ?><i class="is-<?= $code ?>" style="--d: <?= $r * 6 + $c ?>"></i><?php endforeach; ?></div>
<?php endforeach; ?>
                            <div class="hr-legend"><span><i class="is-p"></i>Present</span><span><i class="is-l"></i>Leave</span><span><i class="is-f"></i>Field</span><span><i class="is-o"></i>Off</span></div>
                        </div>
                    </div>
                    <div class="hr-float hr-float--r"><span class="hr-dot-ok">&#10003;</span><div><b>Biometric punch</b><small>Meena R. · 08:58 AM</small></div></div>
<?php break; case 'leave': ?>
                    <div class="hr-win hr-win--sm"><div class="hr-win-bar"><i></i><i></i><i></i><b>Leave request</b></div>
                        <ul class="hr-rows"><li><span>Employee</span><b>Arjun S.</b></li><li><span>Dates</span><b>14 to 16 Nov</b></li><li><span>Balance after</span><b>3 days</b></li><li class="is-warn"><span>Shift B</span><b>2 others on leave</b></li></ul>
                        <div class="hr-btns"><span>Reject</span><span class="is-go">Approve</span></div>
                    </div>
                    <div class="hr-float hr-float--l"><span class="hr-dot-ai"><?= icon('spark', 'w-4 h-4') ?></span><div><b>HR AI Agent</b><small>Leave clash flagged for the plant head</small></div></div>
<?php break; case 'hiring': ?>
                    <div class="hr-win"><div class="hr-win-bar"><i></i><i></i><i></i><b>Hiring pipeline</b><em>5 open roles</em></div>
                        <div class="hr-pipe">
<?php foreach ([['Applied', 48], ['Screened', 21], ['Interview', 9], ['Offer', 3], ['Joined', 2]] as $s => [$st, $n]): ?>
                            <div style="--i: <?= $s ?>; --w: <?= max(14, round($n / 48 * 100)) ?>%"><span><?= $st ?></span><div><i></i></div><b><?= $n ?></b></div>
<?php endforeach; ?>
                        </div>
                    </div>
                    <div class="hr-float hr-float--r"><span class="hr-dot-ok">&#10003;</span><div><b>Offer accepted</b><small>Production supervisor · joins 1 Dec</small></div></div>
<?php break; case 'performance': ?>
                    <div class="hr-perf">
                        <div class="hr-goal"><small>Goal · Q3</small><b>Cut line changeover time to 20 minutes</b><div class="hr-prog"><i style="--to: 72%"></i></div><span>72% done · Meena R.</span></div>
                        <div class="hr-goal"><small>Feedback</small><b>“Trained two new operators on Extruder 4.”</b><span>From Arjun S. · 2 days ago</span></div>
                        <div class="hr-radar">
                            <svg viewBox="0 0 120 120"><polygon points="60,10 107,44 89,100 31,100 13,44" class="r-bg"/><polygon points="60,32 88,50 78,84 42,84 32,50" class="r-bg"/><polygon points="60,18 98,47 80,92 38,88 24,48" class="r-fg"/></svg>
                            <span style="top: 0; left: 50%">Quality</span><span style="top: 36%; right: -6px">Speed</span><span style="bottom: 0; right: 10%">Safety</span><span style="bottom: 0; left: 6%">Teamwork</span><span style="top: 36%; left: -10px">Skills</span>
                        </div>
                    </div>
<?php break; case 'payroll': ?>
                    <div class="hr-handoff">
<?php foreach ([['check', 'Attendance', '26 of 30 days'], ['trend', 'Overtime', '1,240 hours'], ['bell', 'Leave', '312 days']] as $s => [$ico, $t, $v]): ?>
                        <div class="hr-src" style="--i: <?= $s ?>"><span><?= icon($ico, 'w-4 h-4') ?></span><b><?= $t ?></b><small><?= $v ?></small></div>
<?php endforeach; ?>
                        <svg class="hr-wires" viewBox="0 0 200 180" preserveAspectRatio="none"><path d="M0 30 C100 30 100 90 200 90"/><path d="M0 90 H200"/><path d="M0 150 C100 150 100 90 200 90"/></svg>
                        <div class="hr-dest"><span><?= icon('rupee', 'w-6 h-6') ?></span><b>Payroll · November</b><small>412 employees ready</small><em>&#10003; Checked by HR</em></div>
                    </div>
<?php break; endswitch; ?>
                </div>
                <a href="<?= $key === 'payroll' ? '/payroll' : '/demo' ?>" class="hr-btn hr-btn--primary hr-feat-cta"><?= $key === 'payroll' ? 'Explore Payroll' : 'Book a Demo' ?></a>
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
                <span class="hr-kicker">Save time</span>
                <h2>Month-end in hours, not days</h2>
                <p>Attendance, overtime and leave are settled through the month, so the close is a review, not a hunt.</p>
                <ul class="hr-ticks"><li>Shift and overtime rules applied automatically</li><li>Leave balances updated on approval</li><li>New joiners set up once, used everywhere</li></ul>
                <a href="/demo" class="hr-btn hr-btn--primary">Book a Demo</a>
            </div>
            <div class="hr-benefit-art hr-art--warm" aria-hidden="true">
                <div class="hr-cal">
                    <b>November</b>
                    <div><?php for ($d = 1; $d <= 30; $d++): ?><i class="<?= in_array($d, [3, 10, 17, 24]) ? 'is-off' : ($d === 30 ? 'is-close' : ($d < 28 ? 'is-done' : '')) ?>" style="--i: <?= $d ?>"><?= $d ?></i><?php endfor; ?></div>
                </div>
                <div class="hr-float hr-float--b"><span class="hr-dot-ok">&#10003;</span><div><b>Month closed</b><small>Sent to payroll on 30 Nov</small></div></div>
            </div>
        </div>
        <div class="hr-benefit hr-benefit--flip">
            <div class="hr-benefit-copy">
                <span class="hr-kicker">Real insight</span>
                <h2>Know your people numbers</h2>
                <p>Headcount, attendance, overtime and attrition on live dashboards, by department, plant and shift.</p>
                <ul class="hr-ticks"><li>Daily attendance and overtime reports</li><li>Headcount by department and role</li><li>Statutory compliance reports</li></ul>
                <a href="/demo" class="hr-btn hr-btn--primary">Book a Demo</a>
            </div>
            <div class="hr-benefit-art hr-art--cool" aria-hidden="true">
                <div class="hr-insight">
                    <b>November insights</b>
                    <div><span><small>Joining soon</small><em>6</em></span><span><small>Headcount</small><em>412</em></span><span><small>Notice period</small><em>3</em></span></div>
                    <div class="hr-line"><svg viewBox="0 0 200 60" preserveAspectRatio="none"><path d="M0 46 C30 40 40 30 70 32 S120 20 140 22 170 10 200 12"/></svg></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- The AI layer -->
<section class="hr-ai">
    <div class="hr-stars" aria-hidden="true"></div>
    <div class="hr-planet" aria-hidden="true"></div>
    <div class="hr-ai-orb" aria-hidden="true"><img src="/assets/dotone-mark-white.png" alt="" width="160" height="142"><span>AI</span></div>
    <div class="hr-ai-copy">
        <h2>An AI agent inside every part of HR</h2>
        <p>The HR AI Agent reads attendance, leave and payroll data and tells HR what needs attention, before the month closes.</p>
        <div class="hr-ai-qs">
<?php foreach (['Who was absent or late this week?', 'Which leave requests clash in the same team?', 'Show overtime hours by department this month.'] as $q): ?>
            <span><?= e($q) ?></span>
<?php endforeach; ?>
        </div>
        <a href="/ai-agents/hr" class="hr-btn hr-btn--light">Meet the HR AI Agent</a>
    </div>
</section>

<?php render_faq($page['faq']); ?>

<!-- Closing scene -->
<section class="hr-end">
    <div class="hr-end-copy">
        <h2>See how everything stays in sync, as things change</h2>
        <p>From joining to exit, DotOne keeps HR, payroll and the rest of the business on the same record.</p>
        <div class="hr-ctas">
            <a href="/demo" class="hr-btn hr-btn--primary">Book a Demo</a>
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
<?php foreach ([['id', 'Records', 14, 62], ['check', 'Attendance', 30, 72], ['bell', 'Leave', 48, 66], ['users', 'Hiring', 66, 74], ['trend', 'Performance', 84, 64]] as $c => [$ico, $lbl, $x, $y]): ?>
            <span class="hr-chip" style="left: <?= $x ?>%; top: <?= $y ?>%; --c: <?= $c ?>"><?= icon($ico, 'w-4 h-4') ?><?= $lbl ?></span>
<?php endforeach; ?>
        </div>
        <div class="hr-sparks"><?php for ($k = 0; $k < 14; $k++): ?><i style="--k: <?= $k ?>; left: <?= 4 + ($k * 37) % 92 ?>%; bottom: <?= 10 + ($k * 23) % 45 ?>%"></i><?php endfor; ?></div>
    </div>
</section>

</main>

<script src="/js/hrms.js?v=<?= ASSET_VERSION ?>" defer></script>
<?php render_foot($page); ?>
