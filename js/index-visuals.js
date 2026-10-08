(function () {
  'use strict';

  var reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  function observeSection(selector, className) {
    var node = document.querySelector(selector);
    if (!node) return;

    if (reducedMotion) {
      node.classList.add(className);
      return;
    }

    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add(className);
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.25 });

    observer.observe(node);
  }

  function initIndexVisuals() {
    observeSection('#impact-section', 'is-visual-active');
    observeSection('#roi-visual', 'is-visible');
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initIndexVisuals);
  } else {
    initIndexVisuals();
  }
})();
