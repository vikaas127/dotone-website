(function () {
  'use strict';

  var reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  function initHeroAgent() {
    var card = document.getElementById('hero-agent-card');
    if (!card) return;

    var promptEl = card.querySelector('.hero-agent-prompt-text');
    var steps = card.querySelectorAll('.hero-agent-step');
    var done = card.querySelector('.hero-agent-done');
    var text = promptEl ? promptEl.getAttribute('data-text') || '' : '';
    var timers = [];

    function later(fn, ms) {
      timers.push(setTimeout(fn, ms));
    }

    function showAll() {
      if (promptEl) promptEl.textContent = text;
      steps.forEach(function (s) { s.classList.add('is-done'); });
      if (done) done.classList.add('is-visible');
    }

    function reset() {
      timers.forEach(clearTimeout);
      timers = [];
      if (promptEl) promptEl.textContent = '';
      steps.forEach(function (s) { s.classList.remove('is-done', 'is-running'); });
      if (done) done.classList.remove('is-visible');
    }

    function run() {
      reset();
      var t = 400;
      for (var i = 1; i <= text.length; i++) {
        (function (n) {
          later(function () { promptEl.textContent = text.slice(0, n); }, t + n * 28);
        })(i);
      }
      t += text.length * 28 + 400;

      steps.forEach(function (step) {
        later(function () { step.classList.add('is-running'); }, t);
        t += 650;
        later(function () {
          step.classList.remove('is-running');
          step.classList.add('is-done');
        }, t);
      });

      later(function () { if (done) done.classList.add('is-visible'); }, t + 200);
      later(run, t + 4200);
    }

    if (reducedMotion) {
      showAll();
      return;
    }

    run();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initHeroAgent);
  } else {
    initHeroAgent();
  }
})();
