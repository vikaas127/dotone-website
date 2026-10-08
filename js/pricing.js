(function () {
  'use strict';

  var reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  function onVisible(el, fn) {
    if (!el) return;
    if (!('IntersectionObserver' in window)) return fn();
    var io = new IntersectionObserver(function (entries) {
      if (entries[0].isIntersecting) { io.disconnect(); fn(); }
    }, { threshold: 0.2 });
    io.observe(el);
  }

  // Cards rise in and prices count up
  var cards = document.querySelector('[data-pr]');
  if (cards) cards.classList.add('is-ready');
  onVisible(cards, function () {
    cards.classList.add('is-in');
    if (reduced) return;
    cards.querySelectorAll('[data-pr-count]').forEach(function (el) {
      var target = parseInt(el.getAttribute('data-pr-count'), 10);
      var start = null;
      function tick(ts) {
        if (!start) start = ts;
        var p = Math.min((ts - start) / 1200, 1);
        el.textContent = Math.round(target * (1 - Math.pow(1 - p, 3))).toLocaleString('en-IN');
        if (p < 1) requestAnimationFrame(tick);
      }
      el.textContent = '0';
      setTimeout(function () { requestAnimationFrame(tick); }, 250);
    });
  });

  // Comparison rows fade in one after another
  var table = document.querySelector('[data-pr-table]');
  if (table) table.classList.add('is-ready');
  onVisible(table, function () { table.classList.add('is-in'); });
})();
