<?php
require_once __DIR__ . '/includes/site.php';
$plans = require __DIR__ . '/includes/data/pricing.php';

$page = [
    'path' => '/pricing',
    'title' => 'DotOne Pricing | ERP and AI Agent Plans',
    'description' => 'Five DotOne plans from Starter to Enterprise AI. Compare users, records, projects and storage, priced monthly in INR with GST invoicing.',
    'faq' => [
        ['Can we start small and upgrade later?', 'Yes. Many teams start on Starter or Growth and move up as they add people, records or modules. Your data stays where it is when you change plans.'],
        ['What do the limits mean?', 'Each plan sets how many records of each type you can keep, such as customers, invoices or projects, and how much file storage you get. "Unlimited" means there is no cap on that record type.'],
        ['Is implementation included?', 'Our onboarding team helps every customer set up and go live, and most teams are live in 4 to 6 weeks. Large data migrations and custom integrations are scoped and quoted separately. See [how implementation works](/contact).'],
        ['How is DotOne billed?', 'We invoice in INR with GST-compliant invoices for registered Indian businesses. Talk to us about annual billing and multi-plant pricing.'],
        ['Which plan includes the AI agents?', 'Enterprise AI is built around DotOne AI agents working across your business. Ask us which agents you can add to other plans. Read more about [AI agents](/ai-agents).'],
        ['Can we see DotOne before choosing?', 'Yes. Book a 30-minute demo and we will show DotOne running a workflow from your business, then help you pick the right plan.'],
    ],
];

// Human-readable cell value for the comparison table
function plan_cell($v)
{
    if ($v === null) return '<span class="pr-no" aria-label="Not included">&mdash;</span>';
    if ($v === 'Unlimited') return '<span class="pr-unl"><i aria-hidden="true">&infin;</i>Unlimited</span>';
    return '<span class="pr-num">' . e(is_int($v) ? number_format($v) : $v) . '</span>';
}

// One line per feature group on a plan card, e.g. "Unlimited quotations, contracts · 200 invoices"
function plan_group($keys, array $limits)
{
    $short = ['staff' => 'users', 'customers' => 'customers', 'contacts' => 'contacts', 'leads' => 'leads', 'quotations' => 'quotations', 'contracts' => 'contracts', 'invoices' => 'invoices', 'proforma' => 'proforma invoices', 'creditnotes' => 'credit notes', 'projects' => 'projects', 'tasks' => 'tasks', 'tickets' => 'tickets', 'items' => 'items', 'storage' => ''];
    $byValue = [];
    foreach ($keys as $k) {
        $v = $limits[$k] ?? null;
        if ($v === null) continue;
        $byValue[(string) $v][] = $short[$k];
    }
    if (!$byValue) return null;
    $parts = [];
    foreach ($byValue as $v => $labels) {
        $num = is_numeric($v) ? number_format((int) $v) : $v;
        $list = implode(', ', array_filter($labels));
        $parts[] = trim(($v === 'Unlimited' ? 'Unlimited' : $num) . ' ' . $list);
    }
    // Unlimited first, then capped values
    usort($parts, function ($x, $y) { return (int) (strpos($y, 'Unlimited') === 0) <=> (int) (strpos($x, 'Unlimited') === 0); });
    return implode(' · ', $parts);
}

render_head($page);
?>

<section class="relative pt-32 pb-12 md:pt-40 md:pb-14 overflow-hidden">
    <div class="absolute inset-0 hero-tint" aria-hidden="true"></div>
    <div class="container-custom relative z-10 text-center max-w-3xl mx-auto">
        <span class="section-label">Pricing</span>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-display font-semibold text-text-primary leading-tight mb-5">Simple plans that <span class="text-primary-500">grow with you</span></h1>
        <p class="text-lg md:text-xl text-text-secondary leading-relaxed">Five plans, priced monthly in INR. Start with what you need today and move up as your business grows.</p>
    </div>
</section>

<section class="pb-14 md:pb-20">
    <div class="container-custom">
        <div class="pr-cards" data-pr>
<?php foreach ($plans as $i => $p): ?>
            <article class="pr-card<?= !empty($p['popular']) ? ' is-popular' : '' ?>" style="--i: <?= $i ?>">
<?php if (!empty($p['popular'])): ?>
                <span class="pr-badge">Most popular</span>
<?php endif; ?>
                <div class="pr-top">
                    <h2 class="pr-name"><?= e($p['name']) ?></h2>
                    <p class="pr-tag"><?= e($p['tagline']) ?></p>
                </div>
                <div class="pr-price">
<?php if ($p['price'] !== null): ?>
                    <b>&#8377;<span data-pr-count="<?= (int) $p['price'] ?>"><?= number_format($p['price']) ?></span></b><span>per month</span>
<?php else: ?>
                    <b>On request</b><span>priced on your team size</span>
<?php endif; ?>
                </div>
                <a href="<?= e($p['cta'][1]) ?>" class="pr-cta<?= !empty($p['popular']) ? ' is-primary' : '' ?>"><?= e($p['cta'][0]) ?></a>
                <ul class="pr-groups">
<?php foreach (PRICING_GROUPS as [$gname, $gicon, $gkeys]): $line = plan_group($gkeys, $p['limits']); ?>
                    <li class="<?= $line === null ? 'is-off' : '' ?>">
                        <span class="pr-gicon"><?= $line === null ? '&mdash;' : icon('check', 'w-3.5 h-3.5') ?></span>
                        <span><b><?= e($gname) ?></b><?= $line === null ? 'Not included' : e($line) ?></span>
                    </li>
<?php endforeach; ?>
                </ul>
            </article>
<?php endforeach; ?>
        </div>
        <p class="text-center text-sm text-text-tertiary mt-6">Prices are per month in INR, with GST-compliant invoices. <a href="#compare" class="text-primary-600 font-medium hover:underline">Compare every limit</a></p>

        <div class="pr-includes">
            <span class="pr-includes-title">Every plan includes</span>
<?php foreach ([['shield', 'Role-based access'], ['doc', 'GST-compliant invoices'], ['cog', 'Encrypted backups'], ['users', 'Onboarding team support'], ['link', 'Tally integration available']] as [$ico, $label]): ?>
            <span class="pr-include"><?= icon($ico, 'w-4 h-4') ?><?= $label ?></span>
<?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section bg-surface" id="compare">
    <div class="container-custom">
        <div class="text-center max-w-2xl mx-auto mb-10">
            <span class="section-label">Compare plans</span>
            <h2 class="text-3xl md:text-4xl font-display font-semibold mb-4">Every plan, side by side</h2>
            <p class="text-lg text-text-secondary">What each plan includes, record by record.</p>
        </div>
        <div class="pr-table-wrap" data-pr-table>
            <table class="pr-table">
                <thead>
                    <tr>
                        <th scope="col"><span class="sr-only">Feature</span></th>
<?php foreach ($plans as $p): ?>
                        <th scope="col" class="<?= !empty($p['popular']) ? 'is-popular' : '' ?>"><b><?= e($p['name']) ?></b><span><?= $p['price'] !== null ? '&#8377;' . number_format($p['price']) . ' / month' : 'On request' ?></span></th>
<?php endforeach; ?>
                    </tr>
                </thead>
                <tbody>
<?php $r = 0; foreach (PRICING_GROUPS as [$gname, $gicon, $gkeys]): ?>
                    <tr class="pr-group-row" style="--r: <?= $r++ ?>"><th scope="rowgroup" colspan="<?= count($plans) + 1 ?>"><?= icon($gicon, 'w-4 h-4') ?><?= e($gname) ?></th></tr>
<?php foreach ($gkeys as $key): ?>
                    <tr style="--r: <?= $r++ ?>">
                        <th scope="row"><?= e(PRICING_ROWS[$key]) ?></th>
<?php foreach ($plans as $p): ?>
                        <td class="<?= !empty($p['popular']) ? 'is-popular' : '' ?>"><?= plan_cell($p['limits'][$key] ?? null) ?></td>
<?php endforeach; ?>
                    </tr>
<?php endforeach; ?>
<?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<section class="section bg-white">
    <div class="container-custom">
        <div class="pr-addons">
            <div>
                <span class="section-label">Add to any plan</span>
                <h2 class="text-3xl md:text-4xl font-display font-semibold mb-4">Need more of DotOne?</h2>
                <p class="text-lg text-text-secondary mb-6">Add the modules your business runs on. We price them on what you need, so you never pay for modules you don&rsquo;t use.</p>
                <a href="/contact" class="btn-hero-glow">Get a quote for your modules</a>
            </div>
            <div class="pr-addon-grid">
<?php foreach (['hrms', 'payroll', 'production-management', 'quality-management', 'purchase-management', 'warehouse-management', 'field-sales-tracking', 'accounting', 'business-analytics', 'mobile-erp'] as $i => $slug): $m = MODULES[$slug]; ?>
                <a href="/<?= $slug ?>" class="pr-addon" style="--i: <?= $i ?>"><span><?= icon($m['icon'], 'w-4 h-4') ?></span><?= e($m['name']) ?></a>
<?php endforeach; ?>
                <a href="/ai-agents" class="pr-addon" style="--i: 10"><span><?= icon('spark', 'w-4 h-4') ?></span>AI agents</a>
                <a href="/vision-ai" class="pr-addon" style="--i: 11"><span><?= icon('eye', 'w-4 h-4') ?></span>Vision AI</a>
            </div>
        </div>
    </div>
</section>

<?php render_faq($page['faq'], 'Pricing questions'); ?>
<?php render_cta('Not sure which plan fits?', 'Tell us how your business works and we will recommend a plan in a 30-minute call.', ['Book a Demo', '/demo'], ['Talk to Sales', '/contact']); ?>
<script src="/js/pricing.js?v=<?= ASSET_VERSION ?>" defer></script>
<?php render_foot($page); ?>
