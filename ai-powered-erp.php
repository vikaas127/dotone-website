<?php
// AI-Powered ERP: dedicated page with an agent chat hero, sticky feature panels, comparison rows, the agents and a closing scene.
require_once __DIR__ . '/includes/site.php';

$page = [
    'path' => '/ai-powered-erp',
    'title' => 'AI-Powered ERP Software | ERP + AI Agents | DotOne',
    'description' => 'ERP data, AI agents and analytics in one system. Ask questions in plain language, get exceptions flagged and reports generated from live ERP data.',
    'breadcrumbs' => [['AI-Powered ERP', '/ai-powered-erp']],
    'css' => ['/css/hrms.css', '/css/vision.css', '/css/aierp.css'],
    'faq' => [
        ['What is AI-powered ERP?', 'An ERP where AI works on the business data itself: answering questions in plain language, spotting exceptions, forecasting and preparing actions, rather than only storing records for people to analyse.'],
        ['Is our data used to train public AI models?', 'Your ERP data stays in your DotOne account and is accessed only within the roles and permissions you set. See our [security page](/security) for how data is protected.'],
        ['Can the AI make changes without us knowing?', 'No. Agents act only within the permissions you give them, and any change to data can be set to require a person\'s approval.'],
        ['Do we need a data science team?', 'No. Agents come ready for inventory, sales, CRM and reporting and use the data already in DotOne.'],
    ],
];

$features = [
    ['ask', 'Ask in plain language', 'Ask a question, get the answer', 'No filters, no exports. Ask the agent the way you would ask a colleague, and it reads the live ERP data to answer.', 'sky'],
    ['exceptions', 'Exceptions flagged', 'The agent finds what needs you', 'Agents watch stock, orders, payments and production all day and raise only the exceptions that need a decision.', 'night'],
    ['reports', 'Reports built for you', 'The report writes itself', 'Ask for a report and the agent builds it from the same live records, with the chart, the numbers and what changed.', 'dawn'],
    ['actions', 'From advice to action', 'Recommendations you can approve', 'Agents prepare the next step, such as a purchase indent or a payment reminder, and wait for your approval before anything changes.', 'sea'],
    ['layers', 'Three layers, one system', 'Data, agents and analytics together', 'AI only works on clean, connected data. DotOne keeps ERP data, AI agents and analytics in one system, with automation to act on the result.', 'dusk'],
    ['control', 'Your permissions', 'AI that works within your rules', 'Each agent sees and does only what its role allows. Changes to data can require a person’s approval, and every action is logged.', 'meadow'],
];

render_head($page);
?>

<main class="hr vz ai">

<section class="hr-hero vz-hero ai-hero">
    <div class="vz-grid-bg" aria-hidden="true"></div>
    <div class="hr-hero-copy">
        <?php render_breadcrumbs($page); ?>
        <span class="hr-eyebrow">ERP + AI agents</span>
        <h1>AI-Powered ERP Software <span>for Modern Businesses</span></h1>
        <p>Adding a chatbot to an ERP does not make it intelligent. In DotOne, AI agents work directly on your ERP data: they find exceptions, build the report and prepare the next step, within the permissions you set.</p>
        <div class="hr-ctas">
            <a href="/demo" class="hr-btn hr-btn--primary">Book a Demo</a>
            <a href="#features" class="hr-btn hr-btn--light">See the agents work</a>
        </div>
    </div>
    <div class="hr-dash-wrap">
        <div class="vz-console ai-console" role="img" aria-label="Inventory AI Agent answering a stock question with a table and an approval button, demo data">
            <div class="vz-console-top" aria-hidden="true"><b><span class="ai-live"></span>Inventory AI Agent</b><span>Reading live ERP data</span><em>Demo data</em></div>
            <div class="ai-console-body" aria-hidden="true">
                <div class="ai-chat">
                    <div class="ai-msg ai-msg--you" style="--d: 0.6s"><span>You</span>Which items will run out in the next 7 days?</div>
                    <div class="ai-typing" style="--d: 1.3s"><i></i><i></i><i></i></div>
                    <div class="ai-msg ai-msg--bot" style="--d: 2.4s">
                        <span>Inventory AI Agent</span>
                        4 items will fall below reorder level by Friday. I have drafted purchase indents for them.
                        <table class="ai-table">
                            <tr><th>Item</th><th>Stock</th><th>Runs out</th></tr>
                            <tr style="--i: 0"><td>PVC resin</td><td>1,240 kg</td><td class="bad">Wed</td></tr>
                            <tr style="--i: 1"><td>Copper wire</td><td>85 m</td><td class="bad">Thu</td></tr>
                            <tr style="--i: 2"><td>Packing film</td><td>12 rolls</td><td>Fri</td></tr>
                            <tr style="--i: 3"><td>Elbow, 40 mm</td><td>140 pcs</td><td>Fri</td></tr>
                        </table>
                        <div class="ai-actions"><span>View report</span><span class="is-go">Approve 4 indents</span></div>
                    </div>
                </div>
                <div class="ai-side">
                    <small>Agents on duty</small>
<?php foreach ([['box', 'Inventory', '4 exceptions'], ['trend', 'Sales', '1 order at risk'], ['cart', 'Purchase', '1 better quote'], ['rupee', 'Finance', '₹6.2 L overdue'], ['shield', 'Quality', 'Batch on hold']] as $k => [$ico, $n, $st]): ?>
                    <div class="ai-agent" style="--i: <?= $k ?>"><span><?= icon($ico, 'w-4 h-4') ?></span><b><?= $n ?></b><em><?= $st ?></em></div>
<?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="hr-why">
    <div class="container-custom">
        <div class="hr-head">
            <span class="section-label">Why AI-powered ERP</span>
            <h2>The difference is <span>who does the analysis</span></h2>
            <p>In a traditional ERP, people dig through screens to find what matters. In DotOne, agents do the digging and people make the decisions.</p>
        </div>
        <div class="hr-why-grid">
<?php
$why = [
    ['chat', 'Questions, not filters', 'Managers ask in plain language and get answers from live data, without building a report first.'],
    ['bell', 'Exceptions come to you', 'Agents watch every module and raise only what needs a decision, before it turns into a problem.'],
    ['flow', 'Advice turns into action', 'An agent’s recommendation becomes a draft indent, reminder or report that you approve in one step.'],
    ['shield', 'Inside your permissions', 'Agents see and do only what their role allows. Data stays in your account and every action is logged.'],
];
foreach ($why as $k => [$ico, $t, $d]):
    if ($k === 2): ?>
            <div class="hr-why-art" aria-hidden="true">
                <div class="hr-orbit"><i></i><i></i></div>
                <span class="hr-core"><img src="/assets/dotone-mark-white.png" alt="" width="160" height="142"></span>
<?php foreach (['box', 'trend', 'cart', 'factory', 'rupee', 'shield'] as $o => $oi): ?>
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

<section class="hr-features" id="features">
    <div class="container-custom hr-feat-grid">
        <nav class="hr-feat-nav" aria-label="AI-powered ERP features">
            <span class="section-label">How the agents work</span>
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
    case 'ask': ?>
                    <div class="hr-win ai-qa"><div class="hr-win-bar"><i></i><i></i><i></i><b>Sales AI Agent</b><em>Live data</em></div>
                        <div class="ai-msg ai-msg--you"><span>You</span>Which customers ordered less this quarter than last?</div>
                        <div class="ai-msg ai-msg--bot"><span>Sales AI Agent</span>3 customers are down more than 20%. Mehta Industries dropped the most.
                            <div class="ai-bars">
<?php foreach ([['Mehta Industries', 38], ['Rao Polymers', 24], ['Gupta Plastics', 21]] as $b => [$n, $v]): ?>
                                <div style="--i: <?= $b ?>; --w: <?= $v * 2 ?>%"><span><?= $n ?></span><div><i></i></div><b>−<?= $v ?>%</b></div>
<?php endforeach; ?>
                            </div>
                        </div>
                    </div>
<?php break; case 'exceptions': ?>
                    <div class="vz-phone ai-feed">
                        <b>Exceptions · today</b>
<?php foreach ([['bad', 'Order #4471 may miss dispatch', 'Sales · 10:42'], ['bad', '4 items below reorder level', 'Inventory · 10:20'], ['warn', 'Vendor price up 8.3%', 'Purchase · 09:55'], ['warn', '₹6.2 L overdue past 60 days', 'Finance · 09:30'], ['bad', 'Batch B-2291 failed test', 'Quality · 09:12']] as $n => [$t, $hh, $sub]): ?>
                        <div class="vz-alert is-<?= $t ?>" style="--i: <?= $n ?>"><i></i><span><b><?= $hh ?></b><em><?= $sub ?></em></span></div>
<?php endforeach; ?>
                    </div>
<?php break; case 'reports': ?>
                    <div class="hr-win"><div class="hr-win-bar"><i></i><i></i><i></i><b>Weekly MIS · built by the Reporting AI Agent</b></div>
                        <div class="ai-kpis"><span><small>Revenue</small><b>₹1.2 Cr</b><em>▲ 9%</em></span><span><small>Orders</small><b>412</b><em>▲ 6%</em></span><span><small>On-time dispatch</small><b>93%</b><em>▲ 4 pts</em></span></div>
                        <div class="vz-trend ai-chart">
<?php foreach ([52, 58, 55, 63, 60, 70, 74, 80] as $n => $v): ?>
                            <span style="--h: <?= $v ?>%; --i: <?= $n ?>"><i></i><em>W<?= $n + 1 ?></em></span>
<?php endforeach; ?>
                        </div>
                    </div>
                    <div class="hr-float hr-float--r"><span class="hr-dot-ok">&#10003;</span><div><b>Report shared</b><small>Sent to 6 managers · Monday 9:00</small></div></div>
<?php break; case 'actions': ?>
                    <div class="hr-win hr-win--sm"><div class="hr-win-bar"><i></i><i></i><i></i><b>Prepared by the Purchase AI Agent</b></div>
                        <ul class="hr-rows"><li><span>Action</span><b>Raise PO-2231</b></li><li><span>Vendor</span><b>Vendor B</b></li><li><span>Why</span><b>₹4/kg cheaper, 2-day delivery</b></li><li class="is-warn"><span>Needs</span><b>Your approval</b></li></ul>
                        <div class="hr-btns"><span>Change</span><span class="is-go">Approve</span></div>
                    </div>
                    <div class="hr-float hr-float--l"><span class="hr-dot-ai"><?= icon('spark', 'w-4 h-4') ?></span><div><b>Nothing changes until you approve</b><small>Every action is logged</small></div></div>
<?php break; case 'layers': ?>
                    <div class="ai-stack">
<?php foreach ([['chart', 'Analytics', 'Reports, forecasts, insights and alerts'], ['spark', 'AI agents', 'Read the data, find exceptions, prepare actions'], ['box', 'ERP data', 'Inventory, purchase, production, quality, sales, HR, accounts']] as $n => [$ico, $t, $d]): ?>
                        <div class="ai-layer" style="--i: <?= $n ?>"><span><?= icon($ico, 'w-5 h-5') ?></span><b><?= $t ?></b><small><?= $d ?></small></div>
<?php endforeach; ?>
                        <div class="ai-auto"><?= icon('flow', 'w-4 h-4') ?>Automation turns the result into approvals, notifications and hand-offs</div>
                    </div>
<?php break; case 'control': ?>
                    <div class="hr-win"><div class="hr-win-bar"><i></i><i></i><i></i><b>Agent permissions</b><em>Admin</em></div>
                        <div class="ai-perms">
                            <div class="ai-perm-h"><span>Agent</span><b>Read</b><b>Suggest</b><b>Draft</b><b>Act alone</b></div>
<?php foreach ([['Inventory', [1, 1, 1, 0]], ['Purchase', [1, 1, 1, 0]], ['Finance', [1, 1, 0, 0]], ['Reporting', [1, 1, 1, 1]]] as $r => [$n, $flags]): ?>
                            <div class="ai-perm-r"><span><?= $n ?></span><?php foreach ($flags as $f): ?><i class="<?= $f ? 'is-on' : '' ?>" style="--r: <?= $r ?>"></i><?php endforeach; ?></div>
<?php endforeach; ?>
                        </div>
                    </div>
                    <div class="hr-float hr-float--r"><span class="hr-dot-ok">&#10003;</span><div><b>Audit log</b><small>Every agent action recorded</small></div></div>
<?php break; endswitch; ?>
                </div>
                <a href="/demo" class="hr-btn hr-btn--primary hr-feat-cta">Book a Demo</a>
            </article>
<?php endforeach; ?>
        </div>
    </div>
</section>

<section class="hr-benefits">
    <div class="container-custom">
        <div class="hr-benefit">
            <div class="hr-benefit-copy">
                <span class="hr-kicker">Save time</span>
                <h2>Five steps become one question</h2>
                <p>In a traditional ERP you open the module, filter, build the report, analyse it and then decide. In DotOne you ask the agent.</p>
                <ul class="hr-ticks"><li>Answers from live data, not last month’s export</li><li>Exceptions raised before anyone has to look</li><li>The report and next step prepared for you</li></ul>
                <a href="/demo" class="hr-btn hr-btn--primary">Book a Demo</a>
            </div>
            <div class="hr-benefit-art hr-art--warm" aria-hidden="true">
                <div class="ai-compare">
                    <div class="ai-old"><b>Traditional ERP</b><?php foreach (['Open the module', 'Filter the data', 'Build a report', 'Analyse it', 'Decide'] as $n => $st): ?><span style="--i: <?= $n ?>"><?= $n + 1 ?>. <?= $st ?></span><?php endforeach; ?></div>
                    <div class="ai-new"><b>DotOne</b><span class="ai-one"><?= icon('chat', 'w-4 h-4') ?>Ask the agent</span><em>&#10003; Report and next step ready</em></div>
                </div>
            </div>
        </div>
        <div class="hr-benefit hr-benefit--flip">
            <div class="hr-benefit-copy">
                <span class="hr-kicker">Stay in control</span>
                <h2>AI that asks before it acts</h2>
                <p>Agents work within the roles you set. Anything that changes data can require a person’s approval, and every action is logged.</p>
                <ul class="hr-ticks"><li>Role-based access for every agent</li><li>Approval before data changes</li><li>Data stays in your DotOne account</li></ul>
                <a href="/security" class="hr-btn hr-btn--primary">How we protect data</a>
            </div>
            <div class="hr-benefit-art hr-art--cool" aria-hidden="true">
                <div class="vz-phone">
                    <b>Waiting for you</b>
<?php foreach ([['warn', 'Approve 4 purchase indents', 'Inventory AI Agent'], ['warn', 'Send 3 payment reminders', 'Finance AI Agent'], ['ok', 'Weekly MIS shared', 'Reporting AI Agent']] as $n => [$t, $hh, $sub]): ?>
                    <div class="vz-alert is-<?= $t ?>" style="--i: <?= $n ?>"><i></i><span><b><?= $hh ?></b><em><?= $sub ?></em></span></div>
<?php endforeach; ?>
                </div>
                <div class="hr-float hr-float--b"><span class="hr-dot-ok">&#10003;</span><div><b>Approved by you</b><small>Indents raised at 10:48</small></div></div>
            </div>
        </div>
    </div>
</section>

<section class="hr-ai">
    <div class="hr-stars" aria-hidden="true"></div>
    <div class="hr-planet" aria-hidden="true"></div>
    <div class="hr-ai-orb" aria-hidden="true"><img src="/assets/dotone-mark-white.png" alt="" width="160" height="142"><span>AI</span></div>
    <div class="hr-ai-copy">
        <h2>Meet the agents</h2>
        <p>Each agent looks after one area of the business and sees related records across modules.</p>
        <div class="ai-agents">
<?php foreach (AGENTS as $slug => $a): ?>
            <a href="/ai-agents/<?= e($slug) ?>" class="ai-agent-chip"><?= icon($a['icon'], 'w-4 h-4') ?><?= e($a['name']) ?></a>
<?php endforeach; ?>
        </div>
        <a href="/ai-agents" class="hr-btn hr-btn--light">See all AI agents</a>
    </div>
</section>

<?php render_faq($page['faq']); ?>

<section class="hr-end">
    <div class="hr-end-copy">
        <h2>See AI-powered ERP on your own data</h2>
        <p>In a 30-minute demo we connect the agents to a sample of your data and ask the questions your managers ask every week.</p>
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
<?php foreach ([['box', 'Inventory', 14, 62], ['trend', 'Sales', 30, 72], ['cart', 'Purchase', 48, 66], ['factory', 'Production', 66, 74], ['chart', 'Reports', 84, 64]] as $c => [$ico, $lbl, $x, $y]): ?>
            <span class="hr-chip" style="left: <?= $x ?>%; top: <?= $y ?>%; --c: <?= $c ?>"><?= icon($ico, 'w-4 h-4') ?><?= $lbl ?></span>
<?php endforeach; ?>
        </div>
        <div class="hr-sparks"><?php for ($k = 0; $k < 14; $k++): ?><i style="--k: <?= $k ?>; left: <?= 4 + ($k * 37) % 92 ?>%; bottom: <?= 10 + ($k * 23) % 45 ?>%"></i><?php endfor; ?></div>
    </div>
</section>

</main>

<script src="/js/hrms.js?v=<?= ASSET_VERSION ?>" defer></script>
<?php render_foot($page); ?>
