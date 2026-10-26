(function () {
  'use strict';

  var WORKING_DAYS = 300;
  var reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  // ₹28.4 lakh, ₹1.2 crore, ₹85,000
  function inr(value) {
    if (value >= 1e7) return '₹' + (value / 1e7).toFixed(value >= 1e8 ? 0 : 1) + ' crore';
    if (value >= 1e5) return '₹' + (value / 1e5).toFixed(1) + ' lakh';
    return '₹' + Math.round(value).toLocaleString('en-IN');
  }

  function initRoi() {
    var root = document.getElementById('roi-calculator');
    if (!root) return;

    var $ = function (id) { return document.getElementById(id); };
    var inputs = { workers: $('roi-workers'), wage: $('roi-wage'), hours: $('roi-hours'), eff: $('roi-eff'), imp: $('roi-imp') };
    var shown = { annual: 0, monthly: 0, hours: 0 };
    var frame = 0;

    function animateTo(target) {
      cancelAnimationFrame(frame);
      var from = { annual: shown.annual, monthly: shown.monthly, hours: shown.hours };
      var start = performance.now();
      var duration = reducedMotion ? 0 : 400;

      function step(now) {
        var t = duration ? Math.min(1, (now - start) / duration) : 1;
        var ease = 1 - Math.pow(1 - t, 3);
        shown.annual = from.annual + (target.annual - from.annual) * ease;
        shown.monthly = from.monthly + (target.monthly - from.monthly) * ease;
        shown.hours = from.hours + (target.hours - from.hours) * ease;
        $('roi-annual').textContent = inr(shown.annual);
        $('roi-monthly').textContent = inr(shown.monthly);
        $('roi-hours-saved').textContent = Math.round(shown.hours).toLocaleString('en-IN');
        if (t < 1) frame = requestAnimationFrame(step);
      }
      frame = requestAnimationFrame(step);
    }

    function update() {
      var workers = +inputs.workers.value;
      var wage = +inputs.wage.value;
      var hours = +inputs.hours.value;
      var eff = +inputs.eff.value / 100;
      var imp = +inputs.imp.value / 100;

      // Labour hours lost to inefficiency today, and the share DotOne helps recover
      var hoursRecovered = workers * hours * WORKING_DAYS * (1 - eff) * imp;
      var annual = hoursRecovered * wage;
      var after = Math.min(100, Math.round((eff + (1 - eff) * imp) * 100));

      $('roi-workers-out').textContent = workers.toLocaleString('en-IN');
      $('roi-wage-out').textContent = '₹' + wage;
      $('roi-hours-out').textContent = hours;
      $('roi-eff-out').textContent = Math.round(eff * 100) + '%';
      $('roi-imp-out').textContent = Math.round(imp * 100) + '%';
      $('roi-bar-before').style.width = Math.round(eff * 100) + '%';
      $('roi-bar-before-val').textContent = Math.round(eff * 100) + '%';
      $('roi-bar-after').style.width = after + '%';
      $('roi-bar-after-val').textContent = after + '%';

      // Fill the slider track up to the thumb
      Object.keys(inputs).forEach(function (k) {
        var el = inputs[k];
        var pct = ((el.value - el.min) / (el.max - el.min)) * 100;
        el.style.setProperty('--fill', pct + '%');
      });

      animateTo({ annual: annual, monthly: annual / 12, hours: hoursRecovered });
    }

    Object.keys(inputs).forEach(function (k) { inputs[k].addEventListener('input', update); });
    update();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initRoi);
  } else {
    initRoi();
  }
})();
