// HRMS page: highlight the feature list as panels scroll past, and start each panel's animation once
(function () {
  'use strict';
  var links = document.querySelectorAll('[data-hr-link]');
  var panels = document.querySelectorAll('[data-hr-panel]');
  if (!panels.length) return;
  if (!('IntersectionObserver' in window)) {
    panels.forEach(function (p) { p.classList.add('is-in'); });
    return;
  }
  function activate(key) {
    links.forEach(function (a) {
      var on = a.getAttribute('data-hr-link') === key;
      a.classList.toggle('is-active', on);
      if (on && a.parentElement.scrollWidth > a.parentElement.clientWidth) {
        a.parentElement.scrollTo({ left: a.offsetLeft - 16, behavior: 'smooth' });
      }
    });
  }
  var reveal = new IntersectionObserver(function (entries) {
    entries.forEach(function (e) { if (e.isIntersecting) { e.target.classList.add('is-in'); reveal.unobserve(e.target); } });
  }, { threshold: 0.25 });
  panels.forEach(function (p) { reveal.observe(p); });
  // The panel crossing the middle of the screen is the active one
  var mid = new IntersectionObserver(function (entries) {
    entries.forEach(function (e) { if (e.isIntersecting) activate(e.target.getAttribute('data-hr-panel')); });
  }, { rootMargin: '-45% 0px -50% 0px' });
  panels.forEach(function (p) { mid.observe(p); });
})();
