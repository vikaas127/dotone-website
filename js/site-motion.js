(function () {
  'use strict';

  var reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var canHover = window.matchMedia('(hover: hover) and (pointer: fine)').matches;

  function onVisible(el, cb, threshold) {
    if (!('IntersectionObserver' in window)) return cb(el);
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          cb(entry.target);
          io.unobserve(entry.target);
        }
      });
    }, { threshold: threshold || 0.25 });
    io.observe(el);
  }

  // Thin progress bar at the top of the page
  function scrollProgress() {
    var bar = document.createElement('div');
    bar.className = 'scroll-progress';
    bar.setAttribute('aria-hidden', 'true');
    document.body.appendChild(bar);
    var ticking = false;
    function update() {
      var h = document.documentElement.scrollHeight - window.innerHeight;
      bar.style.transform = 'scaleX(' + (h > 0 ? Math.min(1, window.scrollY / h) : 0) + ')';
      ticking = false;
    }
    window.addEventListener('scroll', function () {
      if (!ticking) { ticking = true; requestAnimationFrame(update); }
    }, { passive: true });
    update();
  }

  // "How it works" rows: light up each step in turn once visible
  function cycleFlowSteps() {
    document.querySelectorAll('.flow-steps').forEach(function (list) {
      var steps = list.querySelectorAll('.flow-step');
      if (steps.length < 2) return;
      onVisible(list, function () {
        list.classList.add('is-cycling');
        if (reducedMotion) return;
        var i = 0;
        steps[0].classList.add('is-current');
        setInterval(function () {
          steps[i].classList.remove('is-current');
          i = (i + 1) % steps.length;
          steps[i].classList.add('is-current');
        }, 1800);
      });
    });
  }

  // Agent cards with data-animate-steps play their steps on a loop
  function playAgentCards() {
    document.querySelectorAll('[data-animate-steps]').forEach(function (card) {
      var steps = card.querySelectorAll('.hero-agent-step');
      var done = card.querySelector('.hero-agent-done');
      if (reducedMotion) {
        steps.forEach(function (s) { s.classList.add('is-done'); });
        if (done) done.classList.add('is-visible');
        return;
      }
      onVisible(card, function () {
        function run() {
          steps.forEach(function (s) { s.classList.remove('is-done', 'is-running'); });
          if (done) done.classList.remove('is-visible');
          var t = 300;
          steps.forEach(function (s) {
            setTimeout(function () { s.classList.add('is-running'); }, t);
            t += 700;
            setTimeout(function () { s.classList.remove('is-running'); s.classList.add('is-done'); }, t);
          });
          setTimeout(function () { if (done) done.classList.add('is-visible'); }, t + 200);
          setTimeout(run, t + 4500);
        }
        run();
      }, 0.3);
    });
  }

  // Module window: rows tick on one by one, bars grow
  function playModuleGraphics() {
    document.querySelectorAll('.module-graphic').forEach(function (g) {
      onVisible(g, function () { g.classList.add('is-playing'); }, 0.2);
    });
  }

  // Count numbers up: <span data-count="500" data-suffix="+">0+</span>
  function countUp() {
    document.querySelectorAll('[data-count]').forEach(function (el) {
      var target = parseFloat(el.getAttribute('data-count'));
      var suffix = el.getAttribute('data-suffix') || '';
      var prefix = el.getAttribute('data-prefix') || '';
      var decimals = (String(target).split('.')[1] || '').length;
      if (reducedMotion) { el.textContent = prefix + target.toFixed(decimals) + suffix; return; }
      onVisible(el, function () {
        var start = performance.now();
        function step(now) {
          var p = Math.min(1, (now - start) / 1400);
          var v = target * (1 - Math.pow(1 - p, 3));
          el.textContent = prefix + v.toFixed(decimals) + suffix;
          if (p < 1) requestAnimationFrame(step);
        }
        requestAnimationFrame(step);
      }, 0.6);
    });
  }

  // Gentle 3D tilt on hero visuals as the mouse moves
  function tilt() {
    if (reducedMotion || !canHover) return;
    document.querySelectorAll('[data-tilt]').forEach(function (el) {
      el.addEventListener('mousemove', function (e) {
        var r = el.getBoundingClientRect();
        var x = (e.clientX - r.left) / r.width - 0.5;
        var y = (e.clientY - r.top) / r.height - 0.5;
        el.style.transform = 'perspective(1200px) rotateY(' + (x * 6) + 'deg) rotateX(' + (-y * 6) + 'deg)';
      });
      el.addEventListener('mouseleave', function () { el.style.transform = ''; });
    });
  }

  function init() {
    scrollProgress();
    cycleFlowSteps();
    playAgentCards();
    playModuleGraphics();
    countUp();
    tilt();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
