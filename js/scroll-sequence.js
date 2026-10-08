(function () {
  'use strict';

  var reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  function getScrollIndex(track, itemCount) {
    var rect = track.getBoundingClientRect();
    var trackHeight = track.offsetHeight;
    var viewport = window.innerHeight;
    var scrollable = Math.max(1, trackHeight - viewport);
    var scrolled = Math.min(scrollable, Math.max(0, -rect.top));
    var progress = scrolled / scrollable;
    return Math.min(itemCount - 1, Math.floor(progress * itemCount));
  }

  function initScrollSequence(config) {
    var section = config.section;
    var track = section.querySelector(config.trackSelector);
    var items = section.querySelectorAll(config.itemSelector);
    var currentIndex = -1;
    var rafId = 0;

    if (!track || !items.length) return;

    function activate(index, force) {
      index = Math.max(0, Math.min(items.length - 1, index));
      if (index === currentIndex && !force) return;
      currentIndex = index;
      if (config.onActivate) config.onActivate(section, index, items);
    }

    if (reducedMotion) {
      items.forEach(function (item, i) {
        item.classList.add('is-revealed');
        item.classList.toggle('is-active', i === items.length - 1);
      });
      if (config.onActivate) config.onActivate(section, items.length - 1, items);
      return;
    }

    function update(force) {
      if (section.dataset.sequencePaused === 'true') return;
      activate(getScrollIndex(track, items.length), force);
    }

    function onScroll() {
      if (section.dataset.sequencePaused === 'true') return;
      cancelAnimationFrame(rafId);
      rafId = requestAnimationFrame(function () {
        update(false);
      });
    }

    window.addEventListener('scroll', onScroll, { passive: true });
    window.addEventListener('resize', onScroll, { passive: true });
    window.addEventListener('load', function () { update(true); });
    window.addEventListener('pageshow', function () { update(true); });

    if ('IntersectionObserver' in window) {
      var observer = new IntersectionObserver(
        function () { update(false); },
        { threshold: [0, 0.05, 0.1, 0.25, 0.5, 0.75, 1] }
      );
      observer.observe(track);
    }

    update(true);

    if (config.clickable) {
      items.forEach(function (item, index) {
        item.addEventListener('click', function () {
          section.dataset.sequencePaused = 'true';
          activate(index, true);
          window.setTimeout(function () {
            delete section.dataset.sequencePaused;
          }, 1200);
        });
      });
    }
  }

  window.initScrollSequence = initScrollSequence;
})();
