// Feature stories: reveal cards and charts when scrolled into view, and auto-advance split stories
(function () {
  'use strict';
  var reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  var grids = document.querySelectorAll('[data-ps]');
  if (grids.length && 'IntersectionObserver' in window && !reduced) {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (!e.isIntersecting) return;
        e.target.classList.add('is-in');
        io.unobserve(e.target);
      });
    }, { threshold: 0.15 });
    grids.forEach(function (g) { g.classList.add('is-ready'); io.observe(g); });
  }

  document.querySelectorAll('[data-sp]').forEach(function (root) {
    var items = root.querySelectorAll('[data-sp-item]');
    var screens = root.querySelectorAll('[data-sp-screen]');
    var current = 0;
    var DUR = 6000;
    var timer = null;
    var visible = false;

    function show(i) {
      current = i;
      items.forEach(function (it, k) {
        var on = k === i;
        it.classList.toggle('is-active', on);
        it.setAttribute('aria-selected', on ? 'true' : 'false');
        // Restart the progress bar
        var bar = it.querySelector('.sp-bar i');
        if (on && bar) { bar.style.animation = 'none'; void bar.offsetWidth; bar.style.animation = ''; }
      });
      screens.forEach(function (s) { s.classList.toggle('is-active', +s.getAttribute('data-sp-screen') === i); });
    }
    function schedule() {
      clearTimeout(timer);
      if (reduced || !visible || root.classList.contains('is-paused')) return;
      timer = setTimeout(function () { show((current + 1) % items.length); schedule(); }, DUR);
    }

    items.forEach(function (it, k) {
      it.addEventListener('click', function () { show(k); schedule(); });
    });
    root.addEventListener('mouseenter', function () { root.classList.add('is-paused'); clearTimeout(timer); });
    root.addEventListener('mouseleave', function () { root.classList.remove('is-paused'); show(current); schedule(); });

    if ('IntersectionObserver' in window) {
      new IntersectionObserver(function (entries) {
        entries.forEach(function (e) {
          visible = e.isIntersecting;
          if (visible) { show(current); schedule(); } else { clearTimeout(timer); }
        });
      }, { threshold: 0.35 }).observe(root);
    }
  });
})();

// Order-to-invoice flow: replay the build-up animation
(function () {
  'use strict';
  document.querySelectorAll('[data-o2i]').forEach(function (root) {
    var btn = root.querySelector('[data-o2i-replay]');
    if (!btn) return;
    btn.addEventListener('click', function () {
      root.classList.add('is-ready');
      root.classList.remove('is-in');
      void root.offsetWidth;
      setTimeout(function () { root.classList.add('is-in'); }, 60);
    });
  });
})();
