(function () {
  'use strict';

  function activateStory(section, index, tabs) {
    var panels = section.querySelectorAll('.customer-story-panel');

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
  }

  function initCustomerStories() {
    var section = document.querySelector('.customer-stories-section');
    if (!section || section.dataset.storiesInit === 'true') return;
    section.dataset.storiesInit = 'true';

    var tabs = section.querySelectorAll('.customer-story-tab');
    if (!tabs.length || !window.initScrollSequence) return;

    window.initScrollSequence({
      section: section,
      trackSelector: '.customer-stories-scroll-track',
      itemSelector: '.customer-story-tab',
      clickable: false,
      onActivate: function (sec, index) {
        activateStory(sec, index, tabs);
      }
    });

    tabs.forEach(function (tab, index) {
      tab.addEventListener('click', function () {
        section.dataset.sequencePaused = 'true';
        activateStory(section, index, tabs);

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
        activateStory(section, nextIndex, tabs);
        window.setTimeout(function () {
          delete section.dataset.sequencePaused;
        }, 1200);
      });
    });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initCustomerStories);
  } else {
    initCustomerStories();
  }
})();
