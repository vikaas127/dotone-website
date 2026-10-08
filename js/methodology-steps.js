(function () {
  'use strict';

  function activateStep(section, index, steps) {
    steps.forEach(function (step, i) {
      step.classList.toggle('is-active', i === index);
      step.classList.toggle('is-revealed', i < index);
    });
  }

  function initMethodologySteps() {
    var section = document.querySelector('.methodology-framework');
    if (!section || section.dataset.stepsInit === 'true') return;
    section.dataset.stepsInit = 'true';

    if (!window.initScrollSequence) return;

    window.initScrollSequence({
      section: section,
      trackSelector: '.methodology-steps-scroll-track',
      itemSelector: '.methodology-step',
      clickable: true,
      onActivate: activateStep
    });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initMethodologySteps);
  } else {
    initMethodologySteps();
  }
})();
