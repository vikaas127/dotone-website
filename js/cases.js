// Customer stories: quote slider, All/Recent tabs and industry filter
(function () {
  'use strict';
  var slider = document.querySelector('[data-cs-slider]');
  if (slider) {
    var slides = slider.querySelectorAll('[data-cs-slide]');
    var n = slider.querySelector('[data-cs-n]');
    var cur = 0, timer = null;
    var go = function (i) {
      if (!slides.length) return;
      cur = (i + slides.length) % slides.length;
      slides.forEach(function (s, k) { s.classList.toggle('is-active', k === cur); });
      if (n) n.textContent = (cur + 1 < 10 ? '0' : '') + (cur + 1);
    };
    var auto = function () { clearInterval(timer); if (slides.length > 1) timer = setInterval(function () { go(cur + 1); }, 7000); };
    var prev = slider.querySelector('[data-cs-prev]'), next = slider.querySelector('[data-cs-next]');
    if (prev) prev.addEventListener('click', function () { go(cur - 1); auto(); });
    if (next) next.addEventListener('click', function () { go(cur + 1); auto(); });
    slider.addEventListener('mouseenter', function () { clearInterval(timer); });
    slider.addEventListener('mouseleave', auto);
    auto();
  }

  var bar = document.querySelector('[data-cs-filter]');
  var grid = document.querySelector('[data-cs-grid]');
  if (!bar || !grid) return;
  var cards = grid.querySelectorAll('.cs-card');
  var empty = document.querySelector('[data-cs-empty]');
  var tab = 'all', industry = '';
  var apply = function () {
    var shown = 0;
    cards.forEach(function (c) {
      var ok = (tab === 'all' || c.getAttribute('data-recent') === '1') && (!industry || c.getAttribute('data-industry') === industry);
      c.hidden = !ok;
      if (ok) shown++;
    });
    if (empty) empty.hidden = shown > 0;
  };
  bar.querySelectorAll('[data-cs-tab]').forEach(function (b) {
    b.addEventListener('click', function () {
      tab = b.getAttribute('data-cs-tab');
      bar.querySelectorAll('[data-cs-tab]').forEach(function (x) { var on = x === b; x.classList.toggle('is-active', on); x.setAttribute('aria-selected', on ? 'true' : 'false'); });
      apply();
    });
  });
  var sel = bar.querySelector('[data-cs-industry]');
  if (sel) sel.addEventListener('change', function () { industry = sel.value; apply(); });
})();
