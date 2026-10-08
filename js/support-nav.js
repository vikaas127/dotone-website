(function () {
  'use strict';

  function initSupportNav() {
    var nav = document.querySelector('.support-subnav');
    if (!nav) return;

    var links = nav.querySelectorAll('.support-subnav-link');
    var sections = [];

    links.forEach(function (link) {
      var id = link.getAttribute('href');
      if (id && id.charAt(0) === '#') {
        var section = document.querySelector(id);
        if (section) sections.push({ link: link, section: section });
      }

      link.addEventListener('click', function () {
        links.forEach(function (l) { l.classList.remove('is-active'); });
        link.classList.add('is-active');
      });
    });

    if (!sections.length || !('IntersectionObserver' in window)) return;

    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (!entry.isIntersecting) return;
        links.forEach(function (l) { l.classList.remove('is-active'); });
        var match = sections.find(function (s) { return s.section === entry.target; });
        if (match) match.link.classList.add('is-active');
      });
    }, { rootMargin: '-40% 0px -50% 0px', threshold: 0 });

    sections.forEach(function (s) { observer.observe(s.section); });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initSupportNav);
  } else {
    initSupportNav();
  }
})();
