(function () {
  'use strict';

  var root = document.querySelector('[data-rp]');
  if (!root) return;
  var board = root.querySelector('.rp-board');
  var items = Array.prototype.slice.call(root.querySelectorAll('[data-rp-item]'));
  var cards = board.querySelectorAll('.rp-card');
  var reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var DUR = 6000;
  var auto = !reduced;
  var visible = false;
  var timer = null;
  var current = items[0].getAttribute('data-rp-item');

  function countUp(el) {
    var target = parseFloat(el.getAttribute('data-rp-count'));
    var dec = parseInt(el.getAttribute('data-dec') || '0', 10);
    if (reduced) return;
    var start = null;
    function tick(ts) {
      if (!start) start = ts;
      var p = Math.min((ts - start) / 1500, 1);
      el.textContent = (target * (1 - Math.pow(1 - p, 3))).toFixed(dec);
      if (p < 1) requestAnimationFrame(tick);
    }
    el.textContent = (0).toFixed(dec);
    setTimeout(function () { requestAnimationFrame(tick); }, 400);
  }

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

  var started = false;
  function enter() {
    if (started) return schedule();
    started = true;
    board.classList.add('is-in');
    board.querySelectorAll('[data-rp-count]').forEach(countUp);
    // Let the cards land before the first highlight
    setTimeout(function () { show(current); }, 1800);
  }

  if ('IntersectionObserver' in window) {
    new IntersectionObserver(function (entries) {
      var was = visible;
      visible = entries[0].isIntersecting;
      if (visible && !was) enter();
      if (!visible) clearTimeout(timer);
    }, { threshold: 0.25 }).observe(root);
  } else {
    visible = true;
    enter();
  }
})();
