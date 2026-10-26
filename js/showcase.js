(function () {
  'use strict';

  var reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  function countUp(el) {
    var target = parseFloat(el.getAttribute('data-rp-count'));
    var dec = parseInt(el.getAttribute('data-dec') || '0', 10);
    if (reduced) return;
    var fmt = function (n) { return n.toLocaleString('en-IN', { minimumFractionDigits: dec, maximumFractionDigits: dec }); };
    var start = null;
    function tick(ts) {
      if (!start) start = ts;
      var p = Math.min((ts - start) / 1500, 1);
      el.textContent = fmt(target * (1 - Math.pow(1 - p, 3)));
      if (p < 1) requestAnimationFrame(tick);
    }
    el.textContent = fmt(0);
    setTimeout(function () { requestAnimationFrame(tick); }, 400);
  }

  // Approval cards: press Approve, show approved, reset, repeat
  function alertLoop(el) {
    if (reduced) { el.classList.add('is-done'); return; }
    function run() {
      el.classList.remove('is-done', 'is-press');
      setTimeout(function () { el.classList.add('is-press'); }, 2600);
      setTimeout(function () { el.classList.remove('is-press'); el.classList.add('is-done'); }, 2800);
      setTimeout(run, 6500);
    }
    run();
  }

  function init(root) {
    var board = root.querySelector('.rp-board');
    var items = Array.prototype.slice.call(root.querySelectorAll('[data-rp-item]'));
    var cards = board.querySelectorAll('.rp-card');
    var DUR = 6000;
    var auto = !reduced;
    var visible = false;
    var started = false;
    var timer = null;
    var current = items[0].getAttribute('data-rp-item');

    // Highlight the dashboard cards that belong to the chosen feature
    function show(key) {
      current = key;
      items.forEach(function (it) {
        var on = it.getAttribute('data-rp-item') === key;
        it.classList.toggle('is-active', on);
        it.classList.remove('is-timing');
        it.setAttribute('aria-selected', on ? 'true' : 'false');
      });
      cards.forEach(function (c) {
        var on = (c.getAttribute('data-for') || '').split(' ').indexOf(key) > -1;
        c.classList.toggle('is-lit', on);
        c.classList.toggle('is-dim', !on);
      });
      schedule();
    }

    function schedule() {
      clearTimeout(timer);
      if (!auto || !visible) return;
      var it = root.querySelector('[data-rp-item="' + current + '"]');
      void it.offsetWidth;
      it.style.setProperty('--dur', DUR + 'ms');
      it.classList.add('is-timing');
      timer = setTimeout(function () {
        show(items[(items.indexOf(it) + 1) % items.length].getAttribute('data-rp-item'));
      }, DUR);
    }

    items.forEach(function (it) {
      it.addEventListener('click', function () { auto = false; show(it.getAttribute('data-rp-item')); });
    });

    function enter() {
      if (started) return schedule();
      started = true;
      board.classList.add('is-in');
      board.querySelectorAll('[data-rp-count]').forEach(countUp);
      board.querySelectorAll('[data-rp-alert]').forEach(alertLoop);
      // Let the cards land before the first highlight
      setTimeout(function () { show(current); }, 1800);
    }

    if ('IntersectionObserver' in window) {
      new IntersectionObserver(function (entries) {
        var was = visible;
        visible = entries[0].isIntersecting;
        if (visible && !was) enter();
        if (!visible) clearTimeout(timer);
      }, { threshold: 0.2 }).observe(root);
    } else {
      visible = true;
      enter();
    }
  }

  document.querySelectorAll('[data-rp]').forEach(init);
})();
