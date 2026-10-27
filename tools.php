<?php
require_once __DIR__ . '/includes/templates/longform.php';
$tools = require __DIR__ . '/includes/data/tools.php';
$cats = array_values(array_unique(array_map(function ($t) { return $t[4]; }, $tools)));
$page = [
    'path' => '/tools',
    'title' => 'Free GST, Invoice, Salary and Inventory Tools | DotOne',
    'description' => 'Free tools for Indian businesses: GST invoice, PO, receipt and payslip generators, plus GST, salary, EMI, break-even, EOQ, SKU and barcode tools.',
    'breadcrumbs' => [['Free Tools', '/tools']],
    'h1' => 'Free Tools for Indian Businesses',
    'intro' => 'Calculators and document generators for GST, invoices, salaries, loans and stock. Free to use, no sign-up, and everything runs in your browser.',
    'css' => ['/css/guide-article.css', '/css/tools.css'],
    'faq' => [
        ['Are these tools free?', 'Yes. All tools are free to use, with no sign-up and no limit on how often you use them.'],
        ['Is my data stored?', 'No. Every tool calculates in your browser. Nothing you enter is sent to DotOne or stored.'],
        ['Are the results accurate for tax and compliance?', 'They follow the published rules and show their formulas, but they are estimates for planning. Confirm tax, GST and payroll figures with your CA.'],
        ['Can DotOne do these calculations automatically?', 'Yes. DotOne works out GST on every invoice, PF, ESI, PT and TDS in payroll, and raises purchase indents at reorder levels. [Book a demo](/demo) to see it.'],
    ],
];
render_head($page);
$check = 'M5 13l4 4L19 7';
lf_hero($page, count($tools) . ' free tools', [
    '<span>' . lf_svg($check) . 'No sign-up</span>',
    '<span>' . lf_svg($check) . 'PDF download for documents</span>',
    '<span>' . lf_svg($check) . 'Nothing is stored</span>',
]);
?>
<div class="ga-body">
    <div class="ga-wrap">
        <div class="th-filters" role="group" aria-label="Filter tools">
            <button type="button" class="th-chip is-active" data-filter="all">All tools <span><?= count($tools) ?></span></button>
<?php foreach ($cats as $c): $n = count(array_filter($tools, function ($t) use ($c) { return $t[4] === $c; })); ?>
            <button type="button" class="th-chip" data-filter="<?= e($c) ?>"><?= e($c) ?> <span><?= $n ?></span></button>
<?php endforeach; ?>
        </div>
        <div class="th-grid">
<?php foreach ($tools as [$slug, $name, $ico, $summary, $cat]): ?>
            <a href="/tools/<?= e($slug) ?>" class="th-card" data-cat="<?= e($cat) ?>">
                <span class="th-icon"><?= icon($ico, 'w-5 h-5') ?></span>
                <span class="th-cat"><?= e($cat) ?></span>
                <h2><?= e($name) ?></h2>
                <p><?= e($summary) ?></p>
                <span class="card-more">Open tool &rarr;</span>
            </a>
<?php endforeach; ?>
        </div>
    </div>
</div>
<?php render_faq($page['faq']); ?>
<?php render_cta('Do this every day without the spreadsheets', 'DotOne handles GST invoicing, payroll and stock planning in one cloud ERP. See it in a 30-minute demo.'); ?>
<script>
(function () {
  var chips = document.querySelectorAll('[data-filter]'), cards = document.querySelectorAll('.th-card');
  chips.forEach(function (b) {
    b.addEventListener('click', function () {
      var f = b.getAttribute('data-filter');
      chips.forEach(function (x) { x.classList.toggle('is-active', x === b); });
      cards.forEach(function (c) { c.hidden = f !== 'all' && c.getAttribute('data-cat') !== f; });
    });
  });
})();
</script>
<?php render_foot($page);
