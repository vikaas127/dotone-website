(function () {
  'use strict';

  function updateProgress(section, index, total) {
    var bar = section.querySelector('.workspace-showcase-progress-bar');
    var current = section.querySelector('.workspace-showcase-counter-current');
    if (bar) {
      bar.style.width = ((index + 1) / total * 100) + '%';
    }
    if (current) {
      current.textContent = String(index + 1).padStart(2, '0');
    }
  }

  function activateModule(section, index, tabs, panels, options) {
    options = options || {};

    tabs.forEach(function (tab, i) {
      var isActive = i === index;
      tab.classList.toggle('is-active', isActive);
      tab.setAttribute('aria-selected', isActive ? 'true' : 'false');
    });

    panels.forEach(function (panel, i) {
      var isActive = i === index;
      panel.classList.toggle('is-active', isActive);
      panel.toggleAttribute('hidden', !isActive);
    });

    updateProgress(section, index, tabs.length);

    if (options.scrollTab) {
      var activeTab = tabs[index];
      if (activeTab && typeof activeTab.scrollIntoView === 'function') {
        activeTab.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
      }
    }
  }

  function initWorkspaceModules() {
    var section = document.querySelector('.one-platform-section');
    if (!section || section.dataset.cardsInit === 'true') return;
    section.dataset.cardsInit = 'true';

    var tabs = section.querySelectorAll('.workspace-showcase-tab');
    var panels = section.querySelectorAll('.workspace-showcase-panel');
    if (!tabs.length || !panels.length) return;

    updateProgress(section, 0, tabs.length);

    if (window.initScrollSequence) {
      window.initScrollSequence({
        section: section,
        trackSelector: '.workspace-scroll-track',
        itemSelector: '.workspace-showcase-tab',
        clickable: false,
        onActivate: function (sec, index) {
          activateModule(sec, index, tabs, panels, { scrollTab: false });
        }
      });
    }

    tabs.forEach(function (tab, index) {
      tab.addEventListener('click', function () {
        section.dataset.sequencePaused = 'true';
        activateModule(section, index, tabs, panels, { scrollTab: true });

        window.setTimeout(function () {
          delete section.dataset.sequencePaused;
        }, 1200);
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
        activateModule(section, nextIndex, tabs, panels, { scrollTab: true });

        window.setTimeout(function () {
          delete section.dataset.sequencePaused;
        }, 1200);
      });
    });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initWorkspaceModules);
  } else {
    initWorkspaceModules();
  }
})();
