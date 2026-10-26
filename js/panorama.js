(function () {
  'use strict';

  var root = document.querySelector('[data-pn]');
  if (!root) return;
  var stage = root.querySelector('.pn-stage');
  var reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  function countUp(el) {
    var target = parseFloat(el.getAttribute('data-pn-count'));
    var dec = parseInt(el.getAttribute('data-dec') || '0', 10);
    var start = null;
    function tick(ts) {
      if (!start) start = ts;
      var p = Math.min((ts - start) / 1600, 1);
      el.textContent = (target * (1 - Math.pow(1 - p, 3))).toLocaleString('en-IN', { minimumFractionDigits: dec, maximumFractionDigits: dec });
      if (p < 1) requestAnimationFrame(tick);
    }
    el.textContent = (0).toFixed(dec);
    setTimeout(function () { requestAnimationFrame(tick); }, 500);
  }

  // Window tilts back at first and flattens as the visitor scrolls towards it
  var ticking = false;
  function update() {
    ticking = false;
    var r = stage.getBoundingClientRect();
    var vh = window.innerHeight;
    var p = (vh - r.top) / (vh * 0.75);
    p = Math.max(0, Math.min(1, p - 0.25));
    root.style.setProperty('--p', (p / 0.75 > 1 ? 1 : p / 0.75).toFixed(3));
  }

  root.classList.add('is-in');
  if (reduced) {
    root.style.setProperty('--p', '1');
    return;
  }
  root.querySelectorAll('[data-pn-count]').forEach(countUp);
  update();
  window.addEventListener('scroll', function () {
    if (!ticking) { ticking = true; requestAnimationFrame(update); }
  }, { passive: true });
  window.addEventListener('resize', update);
})();
