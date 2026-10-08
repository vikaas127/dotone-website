(function () {
  'use strict';

  var reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  function initHeroSlider() {
    var slider = document.getElementById('hero-slider');
    if (!slider) return;

    var scrollTrack = slider.closest('.hero-scroll-track');
    var slides = slider.querySelectorAll('.hero-slide');
    var dots = slider.querySelectorAll('.hero-slider-dot');
    if (slides.length < 2) return;

    var current = 0;
    var rafId = 0;
    var scrollPaused = false;
    var pauseTimer = null;

    function showCommandViz(slide) {
      slides.forEach(function (s) {
        var viz = s.querySelector('.hero-command-viz');
        if (viz) viz.classList.remove('is-visible');
      });
      var activeViz = slide && slide.querySelector('.hero-command-viz');
      if (activeViz) {
        requestAnimationFrame(function () {
          activeViz.classList.add('is-visible');
        });
      }
    }

    function restartAnimations(slide) {
      if (!slide || reducedMotion) return;
      slide.classList.remove('anim-play');
      void slide.offsetWidth;
      slide.classList.add('anim-play');
      animateReportMetrics(slide);
    }

    function animateReportMetrics(slide) {
      slide.querySelectorAll('.hero-report-metric-val[data-target], .hero-agents-stat-val[data-target], .hero-factory-stat-val[data-target]').forEach(function (el) {
        var target = parseFloat(el.getAttribute('data-target'), 10);
        if (isNaN(target)) return;
        var prefix = el.getAttribute('data-prefix') || '';
        var suffix = el.getAttribute('data-suffix') || '';
        var decimals = (String(target).split('.')[1] || '').length;
        var start = 0;
        var duration = 900;
        var startTime = null;

        function format(val) {
          var n = decimals ? val.toFixed(decimals) : String(Math.round(val));
          return prefix + n + suffix;
        }

        el.textContent = format(0);

        function step(ts) {
          if (!startTime) startTime = ts;
          var progress = Math.min((ts - startTime) / duration, 1);
          var eased = 1 - Math.pow(1 - progress, 3);
          el.textContent = format(start + (target - start) * eased);
          if (progress < 1) {
            requestAnimationFrame(step);
          }
        }

        requestAnimationFrame(step);
      });
    }

    function goTo(index) {
      index = ((index % slides.length) + slides.length) % slides.length;
      if (index === current) return;

      slides[current].classList.remove('is-active', 'anim-play');
      slides[current].setAttribute('aria-hidden', 'true');
      if (dots[current]) dots[current].classList.remove('is-active');

      current = index;

      slides[current].classList.add('is-active');
      slides[current].setAttribute('aria-hidden', 'false');
      if (dots[current]) dots[current].classList.add('is-active');
      showCommandViz(slides[current]);
      restartAnimations(slides[current]);
    }

    function getScrollSlideIndex() {
      if (!scrollTrack) return 0;

      var rect = scrollTrack.getBoundingClientRect();
      var trackHeight = scrollTrack.offsetHeight;
      var viewport = window.innerHeight;
      var scrollable = Math.max(1, trackHeight - viewport);
      var scrolled = Math.min(scrollable, Math.max(0, -rect.top));
      var progress = scrolled / scrollable;
      var index = Math.floor(progress * slides.length);

      return Math.max(0, Math.min(slides.length - 1, index));
    }

    function scrollToSlide(index) {
      if (!scrollTrack) return;

      var trackTop = scrollTrack.getBoundingClientRect().top + window.scrollY;
      var trackHeight = scrollTrack.offsetHeight;
      var viewport = window.innerHeight;
      var scrollable = Math.max(1, trackHeight - viewport);
      var segment = scrollable / slides.length;
      var target = trackTop + segment * index + 2;

      window.scrollTo({ top: target, behavior: reducedMotion ? 'auto' : 'smooth' });
    }

    function pauseScrollSync(duration) {
      scrollPaused = true;
      if (pauseTimer) clearTimeout(pauseTimer);
      pauseTimer = setTimeout(function () {
        scrollPaused = false;
      }, duration || 1200);
    }

    function updateFromScroll() {
      if (scrollPaused || reducedMotion) return;
      goTo(getScrollSlideIndex());
    }

    function onScroll() {
      cancelAnimationFrame(rafId);
      rafId = requestAnimationFrame(updateFromScroll);
    }

    dots.forEach(function (dot) {
      dot.addEventListener('click', function () {
        var target = parseInt(dot.getAttribute('data-slide-to'), 10);
        if (isNaN(target)) return;
        pauseScrollSync(1500);
        goTo(target);
        scrollToSlide(target);
      });
    });

    window.addEventListener('scroll', onScroll, { passive: true });
    window.addEventListener('resize', onScroll, { passive: true });
    window.addEventListener('load', updateFromScroll);
    window.addEventListener('pageshow', updateFromScroll);

    if (scrollTrack && 'IntersectionObserver' in window) {
      var observer = new IntersectionObserver(function () {
        updateFromScroll();
      }, { threshold: [0, 0.1, 0.25, 0.5, 0.75, 1] });
      observer.observe(scrollTrack);
    }

    showCommandViz(slides[current]);
    slides[current].classList.add('anim-play');
    if (current === 2) animateReportMetrics(slides[current]);
    updateFromScroll();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initHeroSlider);
  } else {
    initHeroSlider();
  }
})();
