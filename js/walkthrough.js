// Order journey: auto-advances through the stages, with play, pause, keys, swipe and deep links
(function () {
  'use strict';
  var root = document.querySelector('[data-wt]');
  if (!root) return;
  var panels = root.querySelectorAll('[data-wt-panel]');
  var stops = root.querySelectorAll('.wt-stop');
  var fill = root.querySelector('[data-wt-fill]');
  var runner = root.querySelector('[data-wt-runner]');
  var playBtn = root.querySelector('[data-wt-play]');
  var reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var STAGES = stops.length;
  var DUR = 7000;
  var current = 0, timer = null, playing = !reduced;
  root.style.setProperty('--wt-dur', DUR / 1000 + 's');

  function show(i) {
    i = Math.max(0, Math.min(panels.length - 1, i));
    panels.forEach(function (p, k) {
      var on = k === i;
      if (!on && p.classList.contains('is-active')) {
        p.classList.add('is-leaving');
        setTimeout(function () { p.classList.remove('is-leaving'); }, 600);
      }
      p.classList.toggle('is-active', on);
    });
    stops.forEach(function (s, k) {
      s.classList.toggle('is-active', k === i);
      s.classList.toggle('is-done', k < i);
      if (k === i) s.setAttribute('aria-current', 'step'); else s.removeAttribute('aria-current');
    });
    var pct = Math.min(i, STAGES - 1) / (STAGES - 1) * 100;
    fill.style.width = pct + '%';
    runner.style.left = pct + '%';
    if (stops[i] && stops[i].scrollIntoView && window.innerWidth < 900) {
      stops[i].scrollIntoView({ behavior: 'smooth', inline: 'center', block: 'nearest' });
    }
    current = i;
    var id = panels[i].id;
    if (id && history.replaceState) history.replaceState(null, '', '#' + id);
    schedule();
  }
  function schedule() {
    clearTimeout(timer);
    if (!playing || current >= panels.length - 1) return;
    timer = setTimeout(function () { show(current + 1); }, DUR);
  }
  function setPlaying(p) {
    playing = p;
    root.classList.toggle('is-paused', !p);
    playBtn.innerHTML = p ? '&#10074;&#10074;' : '&#9654;';
    playBtn.setAttribute('aria-label', p ? 'Pause' : 'Play');
    if (p && current >= panels.length - 1) { show(0); return; }
    // Restart the current timer bar when resuming
    if (p) show(current); else clearTimeout(timer);
  }

  root.querySelectorAll('[data-wt-go]').forEach(function (b) {
    b.addEventListener('click', function () { show(+b.getAttribute('data-wt-go')); });
  });
  root.querySelector('[data-wt-next]').addEventListener('click', function () { show(current + 1); });
  root.querySelector('[data-wt-prev]').addEventListener('click', function () { show(current - 1); });
  playBtn.addEventListener('click', function () { setPlaying(!playing); });
  document.addEventListener('keydown', function (e) {
    if (e.key === 'ArrowRight') show(current + 1);
    else if (e.key === 'ArrowLeft') show(current - 1);
    else if (e.key === ' ' && e.target === document.body) { e.preventDefault(); setPlaying(!playing); }
    else if (e.key === 'Escape') window.location.href = document.querySelector('[data-wt-exit]').href;
  });
  var x0 = null;
  root.addEventListener('touchstart', function (e) { x0 = e.touches[0].clientX; }, { passive: true });
  root.addEventListener('touchend', function (e) {
    if (x0 === null) return;
    var dx = e.changedTouches[0].clientX - x0;
    if (Math.abs(dx) > 50) show(current + (dx < 0 ? 1 : -1));
    x0 = null;
  });
  // Exit goes back to the page that opened the journey, if it was on this site
  var exit = document.querySelector('[data-wt-exit]');
  if (document.referrer && document.referrer.indexOf(location.origin) === 0 && document.referrer.indexOf('/walkthrough') === -1) exit.href = document.referrer;

  var start = 0;
  if (location.hash) {
    var target = document.getElementById(location.hash.slice(1));
    panels.forEach(function (p, k) { if (p === target) start = k; });
  }
  setPlaying(playing);
  show(start);
})();
