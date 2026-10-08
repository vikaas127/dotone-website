(function () {
  'use strict';

  var reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var section = null;
  var track = null;
  var chips = [];
  var chipsLayer = null;
  var clarityReveal = null;
  var header = null;
  var stage = null;
  var ticking = false;
  var animating = false;
  var inView = false;
  var progress = 0;

  function parseRot(value) {
    if (!value) return 0;
    return parseFloat(String(value).replace('deg', '')) || 0;
  }

  function ramp(value, start, end) {
    if (value <= start) return 0;
    if (value >= end) return 1;
    return (value - start) / (end - start);
  }

  function bell(value, startIn, endIn, startOut, endOut) {
    return Math.min(ramp(value, startIn, endIn), 1 - ramp(value, startOut, endOut));
  }

  function smoothstep(t) {
    t = Math.max(0, Math.min(1, t));
    return t * t * (3 - 2 * t);
  }

  function getTrackProgress() {
    if (!track) return 0;

    var rect = track.getBoundingClientRect();
    var viewport = window.innerHeight;
    var scrollable = Math.max(1, track.offsetHeight - viewport);
    var scrolled = Math.min(scrollable, Math.max(0, -rect.top));
    return scrolled / scrollable;
  }

  function setReveal(el, opacity, lift) {
    if (!el) return;
    el.style.opacity = String(opacity);
    el.style.transform = 'translateY(' + ((1 - opacity) * (lift || 16)) + 'px) scale(' + (0.94 + opacity * 0.06) + ')';
    el.setAttribute('aria-hidden', opacity < 0.08 ? 'true' : 'false');
  }

  function applyTransforms(time) {
    var chaosOut = smoothstep(ramp(progress, 0.18, 0.42));
    var chaosOpacity = 1 - chaosOut;
    var clarityOpacity = smoothstep(ramp(progress, 0.44, 0.78));
    var headerOpacity = 1 - smoothstep(ramp(progress, 0.12, 0.32));
    var chaosMotion = Math.min(1, progress / 0.42);

    chips.forEach(function (chip, index) {
      var speed = parseFloat(chip.dataset.chaosSpeed || '0.6');
      var phase = parseFloat(chip.dataset.chaosPhase || '0');
      var layer = chip.dataset.chaosLayer || 'question';
      var zIndex = parseInt(chip.dataset.chaosZ || String(index + 1), 10);
      var rot = parseRot(chip.style.getPropertyValue('--rot'));
      var fall = layer === 'question' ? 55 : 28;
      var drift = layer === 'question' ? (index % 2 === 0 ? 8 : -8) : (index % 2 === 0 ? -6 : 6);
      var scrollY = chaosMotion * fall * speed;
      var scrollX = chaosMotion * drift;
      var floatY = reducedMotion ? 0 : Math.sin(time * 0.0014 + phase) * 5 * chaosOpacity;
      var floatX = reducedMotion ? 0 : Math.cos(time * 0.001 + phase) * 3 * chaosOpacity;
      var chipOpacity = chaosOpacity * (layer === 'question' ? 1 - chaosOut * 0.12 : 1 - chaosOut * 0.2);
      var hasCenter = chip.classList.contains('-translate-x-1/2');

      chip.style.zIndex = String(zIndex);
      chip.style.opacity = String(Math.max(0, chipOpacity));
      chip.style.filter = '';
      chip.style.transform =
        (hasCenter ? 'translateX(-50%) ' : '') +
        'translate3d(' + (scrollX + floatX) + 'px, ' + (scrollY + floatY) + 'px, 0) ' +
        'rotate(' + rot + 'deg) scale(' + (1 - chaosOut * 0.06) + ')';
    });

    if (chipsLayer) {
      chipsLayer.style.opacity = String(chaosOpacity);
    }

    setReveal(clarityReveal, clarityOpacity, 22);

    if (header) {
      header.style.opacity = String(headerOpacity);
      header.style.transform = 'translateY(' + ((1 - headerOpacity) * -12) + 'px)';
    }

    if (section) {
      section.style.setProperty('--chaos-progress', progress.toFixed(3));
    }
    if (stage) {
      stage.style.setProperty('--chaos-progress', progress.toFixed(3));
    }
  }

  function updateProgress() {
    progress = getTrackProgress();
    section.classList.toggle('is-chaos-active', progress > 0.05 && progress < 0.95);
    applyTransforms(performance.now());
    ticking = false;
  }

  function onScroll() {
    if (!inView || ticking) return;
    ticking = true;
    requestAnimationFrame(updateProgress);
  }

  function tick(time) {
    if (!inView) {
      animating = false;
      return;
    }
    if (!ticking) {
      applyTransforms(time);
    }
    requestAnimationFrame(tick);
  }

  function initChaosScroll() {
    section = document.querySelector('.chaos-section');
    if (!section || section.dataset.chaosInit === 'true') return;
    section.dataset.chaosInit = 'true';

    track = section.querySelector('.chaos-scroll-track');
    stage = section.querySelector('.chaos-stage');
    chipsLayer = section.querySelector('.chaos-chips-layer');
    clarityReveal = section.querySelector('.chaos-clarity-reveal');
    header = section.querySelector('.chaos-section-header');
    chips = section.querySelectorAll('.chaos-chip');
    if (!track || !chips.length) return;

    if (reducedMotion) {
      section.style.setProperty('--chaos-progress', '1');
      if (stage) stage.style.setProperty('--chaos-progress', '1');
      if (chipsLayer) chipsLayer.style.opacity = '0';
      if (header) header.style.opacity = '0';
      setReveal(clarityReveal, 1, 22);
      return;
    }

    var observer = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          inView = entry.isIntersecting;
          if (inView) {
            onScroll();
            if (!animating) {
              animating = true;
              requestAnimationFrame(tick);
            }
          } else {
            animating = false;
          }
        });
      },
      { threshold: 0, rootMargin: '10% 0px 10% 0px' }
    );

    observer.observe(track);
    window.addEventListener('scroll', onScroll, { passive: true });
    window.addEventListener('resize', onScroll, { passive: true });
    window.addEventListener('load', onScroll);
    window.addEventListener('pageshow', onScroll);
    onScroll();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initChaosScroll);
  } else {
    initChaosScroll();
  }
})();
