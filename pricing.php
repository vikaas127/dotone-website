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

// Short highlight list for a plan card, from its limits
function plan_highlights(array $limits)
{
    $out = [];
    if ($limits['staff'] !== null) $out[] = e($limits['staff']) . ' staff users';
    $unl = array_keys(array_filter($limits, function ($v) { return $v === 'Unlimited'; }));
    $nice = ['customers' => 'customers', 'invoices' => 'invoices', 'quotations' => 'quotations', 'leads' => 'leads', 'tickets' => 'tickets', 'projects' => 'projects', 'items' => 'items'];
    $names = array_values(array_intersect_key($nice, array_flip($unl)));
    if (count($unl) >= 12) $out[] = 'Unlimited records of every type';
    elseif ($names) $out[] = 'Unlimited ' . implode(', ', array_slice($names, 0, 3));
    foreach (['projects' => 'projects', 'invoices' => 'invoices', 'customers' => 'customers', 'items' => 'items'] as $k => $label) {
        if (is_int($limits[$k])) { $out[] = 'Up to ' . number_format($limits[$k]) . ' ' . $label; if (count($out) >= 3) break; }
    }
    if ($limits['storage'] !== null) $out[] = ($limits['storage'] === 'Unlimited' ? 'Unlimited' : e($limits['storage'])) . ' storage';
    return array_slice($out, 0, 4);
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
                <h2 class="pr-name"><?= e($p['name']) ?></h2>
                <p class="pr-tag"><?= e($p['tagline']) ?></p>
                <div class="pr-price">
<?php if ($p['price'] !== null): ?>
                    <b>&#8377;<span data-pr-count="<?= (int) $p['price'] ?>"><?= number_format($p['price']) ?></span></b><span>/ month</span>
<?php else: ?>
                    <b class="pr-price-talk">Talk to us</b><span>for a price</span>
<?php endif; ?>
                </div>
                <a href="<?= e($p['cta'][1]) ?>" class="<?= !empty($p['popular']) ? 'btn-hero-glow' : 'btn-ghost' ?> pr-cta"><?= e($p['cta'][0]) ?></a>
                <ul class="pr-list">
<?php foreach (plan_highlights($p['limits']) as $h): ?>
                    <li><?= icon('check', 'w-4 h-4') ?><?= $h ?></li>
<?php endforeach; ?>
                </ul>
            </article>
<?php endforeach; ?>
        </div>
        <p class="text-center text-sm text-text-tertiary mt-6">Prices are per month in INR. GST invoices for registered businesses. <a href="#compare" class="text-primary-600 font-medium hover:underline">Compare every limit</a></p>
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
                        <th scope="col" class="<?= !empty($p['popular']) ? 'is-popular' : '' ?>"><b><?= e($p['name']) ?></b><span><?= $p['price'] !== null ? '&#8377;' . number_format($p['price']) . ' / month' : 'Talk to us' ?></span></th>
<?php endforeach; ?>
                    </tr>
                </thead>
                <tbody>
<?php $r = 0; foreach (PRICING_ROWS as $key => $label): ?>
                    <tr style="--r: <?= $r++ ?>">
                        <th scope="row"><?= e($label) ?></th>
<?php foreach ($plans as $p): ?>
                        <td class="<?= !empty($p['popular']) ? 'is-popular' : '' ?>"><?= plan_cell($p['limits'][$key] ?? null) ?></td>
<?php endforeach; ?>
                    </tr>
<?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<?php render_faq($page['faq'], 'Pricing questions'); ?>
<?php render_cta('Not sure which plan fits?', 'Tell us how your business works and we will recommend a plan in a 30-minute call.', ['Book a Demo', '/demo'], ['Talk to Sales', '/contact']); ?>
<script src="/js/pricing.js?v=<?= ASSET_VERSION ?>" defer></script>
<?php render_foot($page); ?>
