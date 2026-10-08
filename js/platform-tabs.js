(function () {
  'use strict';

  var reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var currentTab = -1;
  var currentItem = -1;

  function getPanelItems(panel) {
    return panel ? panel.querySelectorAll('.platform-seq-item') : [];
  }

  function getTabSizes(panels) {
    var sizes = [];
    panels.forEach(function (panel) {
      sizes.push(getPanelItems(panel).length || 1);
    });
    return sizes;
  }

  function globalStepToState(globalStep, tabSizes) {
    var remaining = globalStep;
    for (var t = 0; t < tabSizes.length; t++) {
      if (remaining < tabSizes[t]) {
        return { tabIndex: t, itemIndex: remaining };
      }
      remaining -= tabSizes[t];
    }
    var lastTab = tabSizes.length - 1;
    return { tabIndex: lastTab, itemIndex: tabSizes[lastTab] - 1 };
  }

  function activatePanelItems(panel, itemIndex) {
    var items = getPanelItems(panel);
    items.forEach(function (item, i) {
      item.classList.toggle('is-active', i === itemIndex);
      item.classList.toggle('is-revealed', i < itemIndex);
    });
  }

  function activatePlatformTab(section, tabIndex, panels, tabs) {
    panels.forEach(function (panel, i) {
      var isActive = i === tabIndex;
      panel.classList.toggle('is-active', isActive);
      if (isActive) {
        panel.removeAttribute('hidden');
      } else {
        panel.setAttribute('hidden', '');
      }
    });

    tabs.forEach(function (tab, i) {
      var isActive = i === tabIndex;
      tab.classList.toggle('is-active', isActive);
      tab.setAttribute('aria-selected', isActive ? 'true' : 'false');
    });
  }

  function getScrollState(section) {
    var track = section.querySelector('.platform-tabs-scroll-track');
    var panels = section.querySelectorAll('.platform-tab-panel');
    if (!track || !panels.length) return { tabIndex: 0, itemIndex: 0 };

    var tabSizes = getTabSizes(panels);
    var totalSteps = tabSizes.reduce(function (sum, n) { return sum + n; }, 0);
    var rect = track.getBoundingClientRect();
    var trackHeight = track.offsetHeight;
    var viewport = window.innerHeight;
    var scrollable = Math.max(1, trackHeight - viewport);
    var scrolled = Math.min(scrollable, Math.max(0, -rect.top));
    var progress = scrolled / scrollable;
    var globalStep = Math.min(totalSteps - 1, Math.max(0, Math.floor(progress * totalSteps)));

    return globalStepToState(globalStep, tabSizes);
  }

  function applyScrollState(section, state, force) {
    var panels = section.querySelectorAll('.platform-tab-panel');
    var tabs = section.querySelectorAll('.platform-tab');

    if (state.tabIndex === currentTab && state.itemIndex === currentItem && !force) return;

    currentTab = state.tabIndex;
    currentItem = state.itemIndex;

    activatePlatformTab(section, state.tabIndex, panels, tabs);
    activatePanelItems(panels[state.tabIndex], state.itemIndex);
  }

  function revealAllItems(section) {
    var panels = section.querySelectorAll('.platform-tab-panel');
    var tabs = section.querySelectorAll('.platform-tab');

    panels.forEach(function (panel) {
      getPanelItems(panel).forEach(function (item) {
        item.classList.add('is-revealed', 'is-active');
      });
    });

    activatePlatformTab(section, 0, panels, tabs);
    currentTab = 0;
    currentItem = 0;
  }

  function bindPlatformScroll(section) {
    if (reducedMotion) {
      revealAllItems(section);
      return;
    }

    var rafId = 0;

    function update(force) {
      applyScrollState(section, getScrollState(section), force);
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
      var track = section.querySelector('.platform-tabs-scroll-track');
      if (track) {
        var observer = new IntersectionObserver(
          function () { update(false); },
          { threshold: [0, 0.05, 0.1, 0.25, 0.5, 0.75, 1] }
        );
        observer.observe(track);
      }
    }

    update(true);
  }

  function initPlatformTabs() {
    var section = document.querySelector('.platform-tabs-section');
    if (!section || section.dataset.platformTabsInit === 'true') return;
    section.dataset.platformTabsInit = 'true';

    var tabs = section.querySelectorAll('.platform-tab');
    var panels = section.querySelectorAll('.platform-tab-panel');
    if (!tabs.length) return;

    tabs.forEach(function (tab, index) {
      tab.addEventListener('click', function () {
        section.dataset.sequencePaused = 'true';
        currentTab = index;
        currentItem = 0;
        activatePlatformTab(section, index, panels, tabs);
        activatePanelItems(panels[index], 0);

        window.setTimeout(function () {
          delete section.dataset.sequencePaused;
        }, 1500);
      });

      tab.addEventListener('keydown', function (e) {
        var nextIndex = index;
        if (e.key === 'ArrowDown' || e.key === 'ArrowRight') {
          e.preventDefault();
          nextIndex = (index + 1) % tabs.length;
        } else if (e.key === 'ArrowUp' || e.key === 'ArrowLeft') {
          e.preventDefault();
          nextIndex = (index - 1 + tabs.length) % tabs.length;
        } else {
          return;
        }
        section.dataset.sequencePaused = 'true';
        tabs[nextIndex].focus();
        currentTab = nextIndex;
        currentItem = 0;
        activatePlatformTab(section, nextIndex, panels, tabs);
        activatePanelItems(panels[nextIndex], 0);
        window.setTimeout(function () {
          delete section.dataset.sequencePaused;
        }, 1500);
      });
    });

    bindPlatformScroll(section);
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initPlatformTabs);
  } else {
    initPlatformTabs();
  }
})();
