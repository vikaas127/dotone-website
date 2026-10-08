(function () {
  'use strict';

  var stack = document.querySelector('[data-stack]');
  if (!stack) return;

  var reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var approve = stack.querySelector('[data-stack-approve]');
  var status = stack.querySelector('[data-stack-status]');
  var STATUS = [
    'Checking 3 warehouses',
    'PVC Resin below reorder level',
    'Indent drafted for approval',
    'Approved, PO sent to vendor'
  ];

  function countUp(el) {
    var target = parseFloat(el.getAttribute('data-stack-count'));
    var dec = parseInt(el.getAttribute('data-dec') || '0', 10);
    if (reduced) { el.textContent = target.toFixed(dec); return; }
    var start = null;
    var dur = 1400;
    function tick(ts) {
      if (!start) start = ts;
      var p = Math.min((ts - start) / dur, 1);
      var eased = 1 - Math.pow(1 - p, 3);
      el.textContent = (target * eased).toFixed(dec);
      if (p < 1) requestAnimationFrame(tick);
    }
    el.textContent = (0).toFixed(dec);
    setTimeout(function () { requestAnimationFrame(tick); }, 900);
  }

  function setStatus(i) {
    if (!status) return;
    status.classList.add('is-swap');
    setTimeout(function () {
      status.textContent = STATUS[i];
      status.classList.remove('is-swap');
    }, 300);
  }

  // Story loop: stock runs low -> agent drafts indent -> manager approves
  function loop() {
    approve.classList.remove('is-done', 'is-press', 'is-aim', 'is-low');
    setStatus(0);
    setTimeout(function () { approve.classList.add('is-low'); setStatus(1); }, 1600);
    setTimeout(function () { setStatus(2); }, 3400);
    setTimeout(function () { approve.classList.add('is-aim'); }, 4800);
    setTimeout(function () { approve.classList.add('is-press'); }, 5600);
    setTimeout(function () {
      approve.classList.remove('is-press', 'is-aim');
      approve.classList.add('is-done');
      setStatus(3);
    }, 5800);
    setTimeout(loop, 9500);
  }

  function start() {
    stack.classList.add('is-in');
    stack.querySelectorAll('[data-stack-count]').forEach(countUp);
    if (reduced) {
      approve.classList.add('is-low', 'is-done');
      if (status) status.textContent = STATUS[3];
      return;
    }
    setTimeout(loop, 1200);
  }

  // Gentle tilt toward the pointer on desktop
  if (!reduced && window.matchMedia('(pointer: fine)').matches) {
    stack.addEventListener('mousemove', function (e) {
      var r = stack.getBoundingClientRect();
      var x = (e.clientX - r.left) / r.width - 0.5;
      var y = (e.clientY - r.top) / r.height - 0.5;
      stack.style.transform = 'perspective(1200px) rotateY(' + (x * 6) + 'deg) rotateX(' + (-y * 6) + 'deg)';
    });
    stack.addEventListener('mouseleave', function () { stack.style.transform = ''; });
    stack.style.transition = 'transform 0.4s ease';
  }

  // Start the story when the cards scroll into view
  if ('IntersectionObserver' in window) {
    var io = new IntersectionObserver(function (entries) {
      if (entries[0].isIntersecting) { io.disconnect(); start(); }
    }, { threshold: 0.3 });
    io.observe(stack);
  } else {
    start();
  }
})();
