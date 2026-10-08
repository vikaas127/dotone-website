<?php
require_once __DIR__ . '/includes/site.php';
$page = [
    'path' => '/demo',
    'title' => 'Book a Free DotOne Demo | ERP and AI Agents',
    'description' => 'See DotOne ERP and AI agents working on a workflow from your industry. 30-minute guided demo with a product specialist.',
    'breadcrumbs' => [['Book a Demo', '/demo']],
    'faq' => [
        ['Is the demo free?', 'Yes. The demo is free and there is no commitment. We show DotOne running a workflow from your business and answer your questions.'],
        ['How long does it take?', 'About 30 minutes. If you want to go deeper into one area, such as production or payroll, we can book a follow-up.'],
        ['What should we bring?', 'One real process you want to improve, for example order to dispatch or attendance to payroll. A short list of the tools you use today also helps.'],
        ['Can we start without a demo?', 'Yes. The Starter plan is free. See [pricing](/pricing) to compare plans.'],
    ],
];
$industries = ['Manufacturing', 'Retail', 'Trading & Distribution', 'Pharma & Life Sciences', 'Dairy', 'Food & Beverage', 'Construction & Building', 'Automotive & Rental', 'Chemical', 'Gems & Jewellery', 'High Tech & Electronics', 'Mall & Facilities', 'Packaging', 'Publication', 'Education', 'Sports', 'Oil & Gas', 'Warehouse', 'Other'];
$interests = [['crm', 'CRM & Sales'], ['inventory', 'Inventory & Purchase'], ['production', 'Production & Quality'], ['hr', 'HR & Payroll'], ['finance', 'Finance & Tally'], ['ai', 'AI agents']];
render_head($page);
?>

<section class="relative pt-28 pb-16 md:pt-36 md:pb-24 overflow-hidden">
    <div class="absolute inset-0 hero-tint" aria-hidden="true"></div>
    <div class="container-custom relative z-10">
        <div class="demo-grid">
            <div class="demo-copy">
                <?php render_breadcrumbs($page); ?>
                <span class="section-label">Book a demo</span>
                <h1 class="text-4xl md:text-5xl font-display font-semibold text-text-primary leading-tight mb-5">See DotOne run <span class="text-primary-500">your business</span></h1>
                <p class="text-lg text-text-secondary leading-relaxed mb-8">A free 30-minute walkthrough with a product specialist, built around one real process from your business.</p>

                <ol class="demo-steps">
<?php foreach ([
    ['chat', 'Tell us about your business', 'Your industry, team size and the process you want to fix.'],
    ['eye', 'See it working', 'We show DotOne running that process, from first step to report.'],
    ['spark', 'Meet the AI agents', 'See how agents flag issues and prepare the next step for approval.'],
    ['check', 'Get a clear plan', 'Which plan fits, what goes live first, and a realistic timeline.'],
] as $i => [$ico, $t, $d]): ?>
                    <li style="--i: <?= $i ?>"><span><?= icon($ico, 'w-5 h-5') ?></span><div><b><?= $t ?></b><?= $d ?></div></li>
<?php endforeach; ?>
                </ol>

                <div class="demo-assure">
                    <span><?= icon('check', 'w-4 h-4') ?>Free, no commitment</span>
                    <span><?= icon('check', 'w-4 h-4') ?>Reply within one working day</span>
                    <span><?= icon('check', 'w-4 h-4') ?>Your data stays private</span>
                </div>
            </div>

            <div class="demo-card" id="book">
                <form id="demoForm" novalidate>
                    <h2 class="demo-card-title">Book your free demo</h2>
                    <p class="demo-card-sub">Takes under a minute. Fields marked <span aria-hidden="true">*</span> are required.</p>

                    <input type="hidden" name="inquiryType" value="Demo request">
                    <div class="hp-field" aria-hidden="true"><label>Leave this empty<input type="text" name="website" tabindex="-1" autocomplete="off"></label></div>

                    <div class="demo-row">
                        <div class="fld"><label for="d-first">First name *</label><input id="d-first" name="firstName" type="text" autocomplete="given-name" required maxlength="100"></div>
                        <div class="fld"><label for="d-last">Last name *</label><input id="d-last" name="lastName" type="text" autocomplete="family-name" required maxlength="100"></div>
                    </div>
                    <div class="demo-row">
                        <div class="fld"><label for="d-email">Work email *</label><input id="d-email" name="email" type="email" autocomplete="email" required maxlength="255" placeholder="you@company.com"></div>
                        <div class="fld"><label for="d-phone">Mobile number *</label><input id="d-phone" name="phone" type="tel" autocomplete="tel" required maxlength="20" placeholder="+91 98765 43210" pattern="[+0-9 ()-]{8,20}"></div>
                    </div>
                    <div class="demo-row">
                        <div class="fld"><label for="d-company">Company *</label><input id="d-company" name="companyName" type="text" autocomplete="organization" required maxlength="255"></div>
                        <div class="fld"><label for="d-role">Your role *</label><input id="d-role" name="jobTitle" type="text" autocomplete="organization-title" required maxlength="100" placeholder="Owner, Plant head, Accounts…"></div>
                    </div>
                    <div class="demo-row">
                        <div class="fld"><label for="d-industry">Industry *</label>
                            <select id="d-industry" name="industry" required>
                                <option value="">Select industry</option>
<?php foreach ($industries as $n): ?>
                                <option><?= e($n) ?></option>
<?php endforeach; ?>
                            </select>
                        </div>
                        <div class="fld"><label for="d-size">Team size *</label>
                            <select id="d-size" name="companySize" required>
                                <option value="">Select size</option>
                                <option>1–20</option><option>21–50</option><option>51–200</option><option>201–500</option><option>500+</option>
                            </select>
                        </div>
                    </div>

                    <fieldset class="fld">
                        <legend>What do you want to see?</legend>
                        <div class="demo-chips">
<?php foreach ($interests as [$v, $label]): ?>
                            <label class="demo-chip"><input type="checkbox" name="solutions[]" value="<?= e($label) ?>"><span><?= e($label) ?></span></label>
<?php endforeach; ?>
                        </div>
                    </fieldset>

                    <div class="demo-row">
                        <div class="fld"><label for="d-when">When do you want to start? *</label>
                            <select id="d-when" name="implementationTimeline" required>
                                <option value="">Select</option>
                                <option>Right away</option><option>Within 1 month</option><option>1–3 months</option><option>Just exploring</option>
                            </select>
                        </div>
                        <div class="fld"><label for="d-date">Preferred demo date</label><input id="d-date" name="preferredDate" type="date"></div>
                    </div>

                    <div class="fld"><label for="d-msg">Anything we should know?</label><textarea id="d-msg" name="message" rows="3" maxlength="2000" placeholder="The process you want to improve, tools you use today…"></textarea></div>

                    <p class="demo-error" role="alert" hidden></p>
                    <button type="submit" class="demo-submit"><span class="demo-submit-text">Book my free demo</span><span class="demo-spinner" aria-hidden="true"></span></button>
                    <p class="demo-legal">We use your details only to arrange the demo. No spam.</p>
                </form>

                <div class="demo-done" hidden tabindex="-1">
                    <span class="demo-done-icon"><?= icon('check', 'w-7 h-7') ?></span>
                    <h2>Your demo request is in</h2>
                    <p>Thank you, <b class="demo-done-name"></b>. A DotOne specialist will contact you within one working day to confirm a time.</p>
                    <a href="/" class="btn-ghost">Back to home</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php render_faq($page['faq'], 'Demo questions'); ?>

<script>
(function () {
  var form = document.getElementById('demoForm');
  if (!form) return;
  var card = form.parentNode;
  var errorBox = form.querySelector('.demo-error');
  var btn = form.querySelector('.demo-submit');

  // No past dates in the picker
  var dateInput = form.querySelector('#d-date');
  if (dateInput) { var t = new Date(); t.setMinutes(t.getMinutes() - t.getTimezoneOffset()); dateInput.min = t.toISOString().slice(0, 10); }

  function showError(msg) { errorBox.textContent = msg; errorBox.hidden = false; }

  form.addEventListener('input', function (e) {
    if (e.target.closest('.fld')) e.target.closest('.fld').classList.remove('is-invalid');
  });

  form.addEventListener('submit', function (e) {
    e.preventDefault();
    errorBox.hidden = true;

    // Mark every invalid field and focus the first one
    var firstBad = null;
    form.querySelectorAll('input[required], select[required]').forEach(function (f) {
      var bad = !f.checkValidity();
      f.closest('.fld').classList.toggle('is-invalid', bad);
      if (bad && !firstBad) firstBad = f;
    });
    if (firstBad) { firstBad.focus(); showError('Please fill in the highlighted fields.'); return; }

    var data = new FormData(form);
    var extra = [];
    if (data.get('preferredDate')) extra.push('Preferred date: ' + data.get('preferredDate'));
    if (data.get('message')) extra.push(data.get('message'));
    data.set('message', extra.join('\n'));
    data.delete('preferredDate');

    btn.disabled = true;
    btn.classList.add('is-loading');
    fetch('/contact-submit.php', { method: 'POST', body: data })
      .then(function (r) { return r.json().catch(function () { return { success: false }; }); })
      .then(function (res) {
        if (!res.success) throw new Error(res.error || 'Something went wrong. Please try again.');
        card.querySelector('.demo-done-name').textContent = data.get('firstName');
        form.hidden = true;
        var done = card.querySelector('.demo-done');
        done.hidden = false;
        done.focus();
      })
      .catch(function (err) {
        showError(err.message || 'Could not send your request. Please email sales@techdotbit.com.');
      })
      .finally(function () { btn.disabled = false; btn.classList.remove('is-loading'); });
  });
})();
</script>
<?php render_foot($page); ?>
