(function () {
  'use strict';

  function activateIndustry(section, index, items) {
    items.forEach(function (item, i) {
      item.classList.toggle('is-active', i === index);
      item.classList.toggle('is-revealed', i < index);
    });
  }

  function initIndustriesScroll() {
    var section = document.querySelector('.industries-section');
    if (!section || section.dataset.industriesInit === 'true') return;
    section.dataset.industriesInit = 'true';

    if (!window.initScrollSequence) return;

    window.initScrollSequence({
      section: section,
      trackSelector: '.industries-scroll-track',
      itemSelector: '.industry-seq-item',
      clickable: false,
      onActivate: activateIndustry
    });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initIndustriesScroll);
  } else {
    initIndustriesScroll();
  }
})();
