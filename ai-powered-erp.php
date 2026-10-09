<?php
// AI-Powered ERP: dedicated page with an agent chat hero, sticky feature panels, comparison rows, the agents and a closing scene.
require_once __DIR__ . '/includes/site.php';

$page = [
    'path' => '/ai-powered-erp',
    'title' => 'AI-Powered ERP Software | ERP + AI Agents | DotOne',
    'description' => 'ERP data, AI agents and analytics in one system. Ask questions in plain language, get exceptions flagged and reports generated from live ERP data.',
    'breadcrumbs' => [['AI-Powered ERP', '/ai-powered-erp']],
    'css' => ['/css/hrms.css', '/css/vision.css', '/css/aierp.css', '/css/aierp2.css'],
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

<main class="ai2">

<!-- Hero: light, split, chat on the right -->
<section class="ai2-hero">
    <i class="ai2-blob ai2-blob--1" aria-hidden="true"></i><i class="ai2-blob ai2-blob--2" aria-hidden="true"></i>
    <div class="container-custom ai2-hero-grid">
        <div class="ai2-hero-copy">
            <?php render_breadcrumbs($page); ?>
            <span class="ai2-pill"><?= icon('spark', 'w-4 h-4') ?>ERP + AI agents</span>
            <h1>AI-Powered ERP Software <span>for Modern Businesses</span></h1>
            <p>Adding a chatbot to an ERP does not make it intelligent. In DotOne, AI agents work directly on your ERP data: they find exceptions, build the report and prepare the next step, within the permissions you set.</p>
            <div class="ai2-ctas">
                <a href="/demo" class="hr-btn hr-btn--primary">Book a Demo</a>
                <a href="#how" class="ai2-text-link">See how the agents work &darr;</a>
            </div>
        </div>
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

<!-- Agents marquee -->
<section class="ai2-marquee" aria-label="DotOne AI agents">
    <div class="ai2-marquee-track">
<?php for ($r = 0; $r < 2; $r++): foreach (AGENTS as $slug => $a): ?>
        <a href="/ai-agents/<?= e($slug) ?>"<?= $r ? ' tabindex="-1" aria-hidden="true"' : '' ?>><?= icon($a['icon'], 'w-4 h-4') ?><?= e($a['name']) ?></a>
<?php endforeach; endfor; ?>
    </div>
</section>

<!-- Zig-zag features -->
<section class="ai2-rows" id="how">
    <div class="container-custom">
        <div class="ai2-head">
            <span class="ai2-kicker">How the agents work</span>
            <h2>The difference is who does the analysis</h2>
            <p>In a traditional ERP, people dig through screens to find what matters. In DotOne, agents do the digging and people make the decisions.</p>
        </div>
<?php foreach ($features as $k => [$key, $name, $h, $text]): ?>
        <article class="ai2-row hr-feat<?= $k % 2 ? ' ai2-row--flip' : '' ?>" id="<?= $key ?>" data-hr-panel="<?= $key ?>">
            <div class="ai2-row-copy">
                <span class="ai2-step"><?= sprintf('%02d', $k + 1) ?> · <?= e($name) ?></span>
                <h3><?= e($h) ?></h3>
                <p><?= e($text) ?></p>
            </div>
            <div class="ai2-row-art">
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
            </div>
        </article>
<?php endforeach; ?>
    </div>
</section>

<!-- Before / after -->
<section class="ai2-compare">
    <div class="container-custom">
        <div class="ai2-head ai2-head--center">
            <span class="ai2-kicker">Save time</span>
            <h2>Five steps become one question</h2>
        </div>
        <div class="ai2-vs">
            <div class="ai2-vs-old">
                <b>Traditional ERP</b>
<?php foreach (['Open the inventory module', 'Filter the data', 'Build a report', 'Analyse it', 'Decide what to do'] as $n => $st): ?>
                <span style="--i: <?= $n ?>"><em><?= $n + 1 ?></em><?= $st ?></span>
<?php endforeach; ?>
            </div>
            <span class="ai2-vs-badge">vs</span>
            <div class="ai2-vs-new">
                <b>DotOne</b>
                <div class="ai2-ask"><?= icon('chat', 'w-5 h-5') ?>“Which items will run out this week?”</div>
                <ul><li>Exceptions found</li><li>Report generated</li><li>Indents drafted for approval</li></ul>
            </div>
        </div>
    </div>
</section>

<!-- Agents grid -->
<section class="ai2-agents">
    <div class="container-custom">
        <div class="ai2-head ai2-head--center">
            <span class="ai2-kicker">Meet the agents</span>
            <h2>One agent for each area of the business</h2>
            <p>Each agent looks after one area and sees related records across modules.</p>
        </div>
        <div class="ai2-agent-grid">
<?php foreach (AGENTS as $slug => $a): ?>
            <a href="/ai-agents/<?= e($slug) ?>" class="ai2-agent-card"><span><?= icon($a['icon'], 'w-5 h-5') ?></span><b><?= e($a['name']) ?></b><small><?= e($a['summary']) ?></small><em>Meet the agent &rarr;</em></a>
<?php endforeach; ?>
        </div>
    </div>
</section>

<?php render_faq($page['faq']); ?>

<!-- Closing: blue band with floating questions -->
<section class="ai2-end">
    <div class="ai2-end-qs" aria-hidden="true">
<?php foreach (['Which orders may miss dispatch?', 'Who has not paid in 60 days?', 'Show this week’s MIS', 'Which vendor is cheapest?', 'What is below reorder level?', 'Which batch failed QC?'] as $n => $q): ?>
        <span style="--n: <?= $n ?>"><?= e($q) ?></span>
<?php endforeach; ?>
    </div>
    <div class="ai2-end-copy">
        <h2>See AI-powered ERP on your own data</h2>
        <p>In a 30-minute demo we connect the agents to a sample of your data and ask the questions your managers ask every week.</p>
        <div class="ai2-ctas ai2-ctas--center">
            <a href="/demo" class="hr-btn ai2-btn-white">Book a Demo</a>
            <a href="/ai-agents" class="ai2-btn-line">See all AI agents</a>
        </div>
    </div>
</section>

</main>

<script src="/js/aierp.js?v=<?= ASSET_VERSION ?>" defer></script>
<?php render_foot($page); ?>
