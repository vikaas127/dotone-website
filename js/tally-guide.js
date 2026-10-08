(function () {
  'use strict';

  var reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  function observeVisible(selector, className) {
    var nodes = document.querySelectorAll(selector);
    if (!nodes.length) return;

    if (reducedMotion) {
      nodes.forEach(function (el) { el.classList.add(className); });
      return;
    }

    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add(className);
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.2, rootMargin: '0px 0px -5% 0px' });

    nodes.forEach(function (el) { observer.observe(el); });
  }

  function animateCount(el) {
    var target = parseInt(el.getAttribute('data-target'), 10);
    if (isNaN(target)) return;

    var suffix = el.getAttribute('data-suffix') || '';
    var prefix = el.getAttribute('data-prefix') || '';
    var duration = reducedMotion ? 0 : 1400;
    var start = 0;
    var startTime = null;

    function step(timestamp) {
      if (!startTime) startTime = timestamp;
      var progress = duration === 0 ? 1 : Math.min((timestamp - startTime) / duration, 1);
      var eased = 1 - Math.pow(1 - progress, 3);
      var current = Math.round(start + (target - start) * eased);
      el.textContent = prefix + current + suffix;
      if (progress < 1) requestAnimationFrame(step);
    }

    requestAnimationFrame(step);
  }

  function initStats() {
    var stats = document.querySelectorAll('.guide-stat-value[data-target]');
    if (!stats.length) return;

    if (reducedMotion) {
      stats.forEach(function (el) {
        el.textContent = (el.getAttribute('data-prefix') || '') + el.getAttribute('data-target') + (el.getAttribute('data-suffix') || '');
      });
      return;
    }

    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          animateCount(entry.target);
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.5 });

    stats.forEach(function (el) { observer.observe(el); });
  }

  function initFaq() {
    document.querySelectorAll('.guide-faq-trigger').forEach(function (btn) {
      btn.addEventListener('click', function () {
        var item = btn.closest('.guide-faq-item');
        if (!item) return;
        var isOpen = item.classList.contains('is-open');
        document.querySelectorAll('.guide-faq-item.is-open').forEach(function (open) {
          open.classList.remove('is-open');
          open.querySelector('.guide-faq-trigger').setAttribute('aria-expanded', 'false');
        });
        if (!isOpen) {
          item.classList.add('is-open');
          btn.setAttribute('aria-expanded', 'true');
        }
      });
    });
  }

  function initScrollReveals() {
    var selector = '.scroll-reveal:not(.active), .scroll-reveal-left:not(.active), .scroll-reveal-scale:not(.active)';
    var nodes = document.querySelectorAll(selector);
    if (!nodes.length) return;

    if (reducedMotion) {
      nodes.forEach(function (el) { el.classList.add('active'); });
      return;
    }

    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('active');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -8% 0px' });

    nodes.forEach(function (el) { observer.observe(el); });
  }

  function initTallyGuide() {
    observeVisible('#hero-sync-viz', 'is-visible');
    observeVisible('.guide-flow-animated', 'is-visible');
    observeVisible('.guide-steps-track', 'is-visible');
    initScrollReveals();
    initStats();
    initFaq();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initTallyGuide);
  } else {
    initTallyGuide();
  }
})();
