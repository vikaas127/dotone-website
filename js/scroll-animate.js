(function () {
  'use strict';

  var reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  var observer = new IntersectionObserver(
    function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('active');
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.12, rootMargin: '0px 0px -8% 0px' }
  );

  function mark(el, variant, delay) {
    if (!el || el.classList.contains('scroll-reveal') || el.dataset.scroll === 'off') return;
    el.classList.add(variant || 'scroll-reveal');
    el.style.setProperty('--scroll-delay', (delay || 0) + 'ms');
    if (reducedMotion) {
      el.classList.add('active');
    } else {
      observer.observe(el);
    }
  }

  function staggerChildren(parent, variant, step) {
    if (!parent) return;
    Array.prototype.forEach.call(parent.children, function (child, i) {
      mark(child, variant, i * (step || 90));
    });
  }

  function initScrollAnimations() {
    document.querySelectorAll('[data-scroll]').forEach(function (el) {
      mark(el, el.dataset.scrollVariant || 'scroll-reveal', parseInt(el.dataset.scrollDelay || '0', 10));
    });

    document.querySelectorAll('.scroll-reveal:not(.active)').forEach(function (el) {
      if (reducedMotion) el.classList.add('active');
      else observer.observe(el);
    });

    document.querySelectorAll('section:not(.hero-dark)').forEach(function (section) {
      if (section.dataset.scroll === 'off') return;

      var container = section.querySelector(':scope > .container-custom');
      if (!container) return;

      Array.prototype.forEach.call(container.children, function (block, blockIndex) {
        if (block.classList.contains('scroll-reveal') || block.dataset.scroll === 'off') return;

        if (block.matches('.grid')) {
          staggerChildren(block, 'scroll-reveal-scale', 100);
          return;
        }

        if (block.matches('.platform-feature-rows')) {
          Array.prototype.forEach.call(block.children, function (row, i) {
            mark(row, 'scroll-reveal', i * 120);
          });
          return;
        }

        var innerGrid = block.querySelector(':scope > .grid');
        if (innerGrid) {
          var innerHeader = block.querySelector(':scope > .text-center');
          if (innerHeader) mark(innerHeader, 'scroll-reveal', 0);
          staggerChildren(innerGrid, 'scroll-reveal-scale', 100);
          return;
        }

        mark(block, 'scroll-reveal', blockIndex * 80);
      });
    });

    document.querySelectorAll('.ai-team-card, .newsletter-card').forEach(function (el) {
      mark(el, 'scroll-reveal-scale', 0);
    });

    document.querySelectorAll('.cta-dark .container-custom > *').forEach(function (el, i) {
      mark(el, 'scroll-reveal', i * 100);
    });

    document.querySelectorAll('.metrics-section .grid > *').forEach(function (el, i) {
      mark(el, 'scroll-reveal-scale', i * 80);
    });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initScrollAnimations);
  } else {
    initScrollAnimations();
  }

  window.initScrollAnimations = initScrollAnimations;
})();
