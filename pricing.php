<?php
require_once __DIR__ . '/includes/site.php';
$plans = require __DIR__ . '/includes/data/pricing.php';

$page = [
    'path' => '/pricing',
    'title' => 'DotOne Pricing | ERP and AI Agent Plans',
    'description' => 'Start free on DotOne Starter, then grow to Enterprise AI. Compare modules, users, records and storage, priced monthly in INR with GST invoicing.',
    'faq' => [
        ['Can we start small and upgrade later?', 'Yes. Many teams start on Starter or Growth and move up as they add people, records or modules. Your data stays where it is when you change plans.'],
        ['What do the limits mean?', 'Each plan sets how many records of each type you can keep, such as customers, invoices or projects, and how much file storage you get. "Unlimited" means there is no cap on that record type.'],
        ['Is implementation included?', 'Our onboarding team helps every customer set up and go live, and most teams are live in 4 to 6 weeks. Large data migrations and custom integrations are scoped and quoted separately. See [how implementation works](/contact).'],
        ['How is DotOne billed?', 'We invoice in INR with GST-compliant invoices for registered Indian businesses. Talk to us about annual billing and multi-plant pricing.'],
        ['Which plan includes the AI agents?', 'Enterprise AI includes an AI agent for each module in the plan, such as the inventory, sales, purchase, production, quality and HR agents. Read more about [AI agents](/ai-agents).'],
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
<?php
// Software and price data for search engines, from the same plan data as the cards
$offers = [];
foreach ($plans as $p) {
    if ($p['price'] === null) continue;
    $offers[] = ['@type' => 'Offer', 'name' => $p['name'], 'price' => (string) $p['price'], 'priceCurrency' => 'INR', 'url' => 'https://dotone.biz/pricing',
        'priceSpecification' => ['@type' => 'UnitPriceSpecification', 'price' => (string) $p['price'], 'priceCurrency' => 'INR', 'unitText' => 'MONTH']];
}
echo '<script type="application/ld+json">' . json_encode(['@context' => 'https://schema.org', '@type' => 'SoftwareApplication', 'name' => 'DotOne', 'applicationCategory' => 'BusinessApplication', 'operatingSystem' => 'Web, Android', 'url' => 'https://dotone.biz/', 'publisher' => ['@type' => 'Organization', 'name' => 'TechDotBit Pvt Ltd'], 'offers' => $offers], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . "</script>\n";
?>


<section class="relative pt-32 pb-12 md:pt-40 md:pb-14 overflow-hidden">
    <div class="absolute inset-0 hero-tint" aria-hidden="true"></div>
    <div class="container-custom relative z-10 text-center max-w-3xl mx-auto">
        <span class="section-label">Pricing</span>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-display font-semibold text-text-primary leading-tight mb-5">Simple plans that <span class="text-primary-500">grow with you</span></h1>
        <p class="text-lg md:text-xl text-text-secondary leading-relaxed">Start free, then pick the plan that fits. Priced monthly in INR, and you can move up as your business grows.</p>
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
<?php if ($p['price'] === 0): ?>
                    <b>Free</b><span>for small teams</span>
<?php elseif ($p['price'] !== null): ?>
                    <b>&#8377;<span data-pr-count="<?= (int) $p['price'] ?>"><?= number_format($p['price']) ?></span></b><span>per month</span>
<?php else: ?>
                    <b>On request</b><span>priced on your team size</span>
<?php endif; ?>
                </div>
                <a href="<?= e($p['cta'][1]) ?>" class="pr-cta<?= !empty($p['popular']) ? ' is-primary' : '' ?>"><?= e($p['cta'][0]) ?></a>
<?php
$prev = $i > 0 ? $plans[$i - 1]['modules'] : [];
$new = !empty($p['base']) ? array_values(array_diff($p['modules'], $prev)) : $p['modules'];
?>
                <div class="pr-mods">
                    <span class="pr-mods-title"><?= !empty($p['base']) ? 'Everything in ' . e($p['base']) . ', plus' : 'Modules included' ?></span>
                    <ul>
<?php foreach ($new as $mk): [$mlabel, $murl] = PRICING_MODULES[$mk]; ?>
                        <li class="<?= $mk === 'agents' ? 'is-ai' : '' ?>"><?= icon($mk === 'agents' ? 'spark' : 'check', 'w-3.5 h-3.5') ?><a href="<?= $murl ?>"><?= e($mlabel) ?></a></li>
<?php endforeach; ?>
                    </ul>
                </div>
                <div class="pr-facts">
                    <span><?= icon('users', 'w-4 h-4') ?><?= $p['limits']['staff'] !== null ? e($p['limits']['staff']) . ' users' : 'Small team' ?></span>
                    <span><?= icon('cog', 'w-4 h-4') ?><?= e($p['limits']['storage']) ?> storage</span>
                </div>
            </article>
<?php endforeach; ?>
        </div>
        <p class="text-center text-sm text-text-tertiary mt-6">Prices are per month in INR, with GST-compliant invoices. <a href="#compare" class="text-primary-600 font-medium hover:underline">Compare every limit</a></p>

        <div class="pr-includes">
            <span class="pr-includes-title">Every plan includes</span>
<?php foreach ([['users', '50 staff users on paid plans'], ['chat', 'Unlimited leads and support tickets'], ['doc', 'Unlimited contacts, quotations, contracts and credit notes on paid plans'], ['shield', 'Role-based access'], ['doc', 'GST-compliant invoices'], ['cog', 'Encrypted backups'], ['users', 'Onboarding team support']] as [$ico, $label]): ?>
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
            <p class="text-lg text-text-secondary">Modules and limits for each plan, side by side.</p>
        </div>
        <div class="pr-table-wrap" data-pr-table>
            <table class="pr-table">
                <thead>
                    <tr>
                        <th scope="col"><span class="sr-only">Feature</span></th>
<?php foreach ($plans as $p): ?>
                        <th scope="col" class="<?= !empty($p['popular']) ? 'is-popular' : '' ?>"><b><?= e($p['name']) ?></b><span><?= $p['price'] === 0 ? 'Free' : ($p['price'] !== null ? '&#8377;' . number_format($p['price']) . ' / month' : 'On request') ?></span></th>
<?php endforeach; ?>
                    </tr>
                </thead>
                <tbody>
<?php $r = 0; ?>
                    <tr class="pr-group-row" style="--r: <?= $r++ ?>"><th scope="rowgroup" colspan="<?= count($plans) + 1 ?>"><?= icon('flow', 'w-4 h-4') ?>Modules</th></tr>
<?php foreach (PRICING_MODULES as $mk => [$mlabel, $murl]): ?>
                    <tr style="--r: <?= $r++ ?>">
                        <th scope="row"><a href="<?= $murl ?>" class="hover:text-primary-600"><?= e($mlabel) ?></a></th>
<?php foreach ($plans as $p): $has = in_array($mk, $p['modules'], true); ?>
                        <td class="<?= !empty($p['popular']) ? 'is-popular' : '' ?>"><?= $has ? '<span class="pr-tick" aria-label="Included">' . icon('check', 'w-4 h-4') . '</span>' : '<span class="pr-no" aria-label="Not included">&mdash;</span>' ?></td>
<?php endforeach; ?>
                    </tr>
<?php endforeach; ?>
<?php
// Only rows that differ between plans that include them; common limits are listed under "Every plan includes"
$same = function ($key) use ($plans) { $vals = array_filter(array_map(function ($p) use ($key) { return $p['limits'][$key] ?? null; }, $plans), function ($v) { return $v !== null; }); return count(array_unique(array_map('strval', $vals))) <= 1; };
foreach (PRICING_GROUPS as [$gname, $gicon, $gkeys]):
    $gkeys = array_values(array_filter($gkeys, function ($k) use ($same) { return !$same($k); }));
    if (!$gkeys) continue;
?>
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
                <span class="section-label">More modules</span>
                <h2 class="text-3xl md:text-4xl font-display font-semibold mb-4">Need something more?</h2>
                <p class="text-lg text-text-secondary mb-6">Ask us about these modules, or about adding one module from a higher plan to yours. We will quote on what you need.</p>
                <a href="/contact" class="btn-hero-glow">Get a quote for your modules</a>
            </div>
            <div class="pr-addon-grid">
<?php foreach (['warehouse-management', 'accounting', 'finance-management', 'reports-analytics', 'business-analytics', 'workflow-automation', 'mobile-erp'] as $i => $slug): $m = MODULES[$slug]; ?>
                <a href="/<?= $slug ?>" class="pr-addon" style="--i: <?= $i ?>"><span><?= icon($m['icon'], 'w-4 h-4') ?></span><?= e($m['name']) ?></a>
<?php endforeach; ?>
                <a href="/vision-ai" class="pr-addon" style="--i: 8"><span><?= icon('eye', 'w-4 h-4') ?></span>Vision AI</a>
            </div>
        </div>
    </div>
</section>

<?php render_faq($page['faq'], 'Pricing questions'); ?>
<?php render_cta('Not sure which plan fits?', 'Tell us how your business works and we will recommend a plan in a 30-minute call.', ['Book a Demo', '/demo'], ['Talk to Sales', '/contact']); ?>
<script src="/js/pricing.js?v=<?= ASSET_VERSION ?>" defer></script>
<?php render_foot($page); ?>
