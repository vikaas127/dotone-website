(function () {
  'use strict';

  function initHeaderNav(root) {
    root = root || document.getElementById('siteHeader');
    if (!root || root.dataset.navInit === 'true') return;
    root.dataset.navInit = 'true';

    var mobileMenuBtn = root.querySelector('#mobileMenuBtn');
    var mobileMenu = root.querySelector('#mobileMenu');
    if (mobileMenuBtn && mobileMenu) {
      mobileMenuBtn.addEventListener('click', function () {
        mobileMenu.classList.toggle('hidden');
      });
    }

    var platformMobileToggle = root.querySelector('#platformMobileToggle');
    var platformMobileLinks = root.querySelector('#platformMobileLinks');
    if (platformMobileToggle && platformMobileLinks) {
      platformMobileToggle.addEventListener('click', function () {
        platformMobileLinks.classList.toggle('hidden');
      });
    }

    var resourcesMobileToggle = root.querySelector('#resourcesMobileToggle');
    var resourcesMobileLinks = root.querySelector('#resourcesMobileLinks');
    if (resourcesMobileToggle && resourcesMobileLinks) {
      resourcesMobileToggle.addEventListener('click', function () {
        resourcesMobileLinks.classList.toggle('hidden');
      });
    }

    var hero = document.querySelector('.hero-dark');
    if (hero && !root.classList.contains('header-scrolled')) {
      var onScroll = function () {
        var heroBottom = hero.offsetTop + hero.offsetHeight - 80;
        root.classList.toggle('header-scrolled', window.scrollY > heroBottom);
      };
      window.addEventListener('scroll', onScroll, { passive: true });
      onScroll();
    }
  }

  function checkHeader() {
    var siteHeader = document.getElementById('siteHeader');
    if (siteHeader) initHeaderNav(siteHeader);
  }

  var headerContainer = document.getElementById('header');
  if (headerContainer) {
    new MutationObserver(checkHeader).observe(headerContainer, {
      childList: true,
      subtree: true
    });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', checkHeader);
  } else {
    checkHeader();
  }

  window.initHeaderNav = initHeaderNav;
})();
