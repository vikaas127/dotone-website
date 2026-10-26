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

// Order-to-invoice flow: a spotlight walks through the steps, with play, pause, next, previous and replay
(function () {
  'use strict';
  var reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  document.querySelectorAll('[data-o2i]').forEach(function (root) {
    var steps = [];
    try { steps = JSON.parse(root.getAttribute('data-steps') || '[]'); } catch (e) {}
    if (!steps.length) return;
    var svg = root.querySelector('.o2i-svg');
    var nodes = root.querySelectorAll('.o2i-node');
    var edges = root.querySelectorAll('.o2i-edge');
    var n = root.querySelector('[data-o2i-n]');
    var title = root.querySelector('[data-o2i-title]');
    var text = root.querySelector('[data-o2i-text]');
    var bar = root.querySelector('[data-o2i-bar]');
    var playBtn = root.querySelector('[data-o2i-play]');
    var current = 0, timer = null, playing = !reduced, visible = false;
    var STEP = 2600;

    function show(i) {
      current = (i + steps.length) % steps.length;
      svg.classList.add('has-active');
      nodes.forEach(function (el) {
        var s = +el.getAttribute('data-step');
        el.classList.toggle('is-active', s === current);
        el.classList.toggle('is-past', s < current);
      });
      edges.forEach(function (el) { el.classList.toggle('is-active', +el.getAttribute('data-step') === current); });
      n.textContent = 'Step ' + (current + 1) + ' of ' + steps.length;
      // Restart the caption animation
      [title, text].forEach(function (el) { el.style.animation = 'none'; void el.offsetWidth; el.style.animation = ''; });
      title.textContent = steps[current][0];
      text.textContent = steps[current][1];
      bar.style.width = ((current + 1) / steps.length * 100) + '%';
    }
    function tick() {
      clearTimeout(timer);
      if (!playing || !visible) return;
      timer = setTimeout(function () { show(current + 1); tick(); }, STEP);
    }
    function setPlaying(p) {
      playing = p;
      playBtn.innerHTML = p ? '&#10074;&#10074;' : '&#9654;';
      playBtn.setAttribute('aria-label', p ? 'Pause' : 'Play');
      tick();
    }

    playBtn.addEventListener('click', function () { setPlaying(!playing); });
    root.querySelector('[data-o2i-next]').addEventListener('click', function () { show(current + 1); setPlaying(false); });
    root.querySelector('[data-o2i-prev]').addEventListener('click', function () { show(current - 1); setPlaying(false); });
    nodes.forEach(function (el) {
      el.addEventListener('click', function () { show(+el.getAttribute('data-step')); setPlaying(false); });
    });
    root.querySelector('[data-o2i-replay]').addEventListener('click', function () {
      root.classList.add('is-ready');
      root.classList.remove('is-in');
      svg.classList.remove('has-active');
      void root.offsetWidth;
      setTimeout(function () { root.classList.add('is-in'); }, 60);
      setTimeout(function () { show(0); setPlaying(true); }, 4200);
    });

    if ('IntersectionObserver' in window) {
      var started = false;
      new IntersectionObserver(function (entries) {
        entries.forEach(function (e) {
          visible = e.isIntersecting;
          if (visible && !started) {
            started = true;
            // Let the build-up finish before the spotlight starts
            setTimeout(function () { show(0); tick(); }, reduced ? 0 : 4200);
          } else {
            tick();
          }
        });
      }, { threshold: 0.2 }).observe(root);
    } else {
      show(0);
    }
  });
})();
