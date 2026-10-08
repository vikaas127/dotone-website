(function () {
  'use strict';

  var reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var SVG_NS = 'http://www.w3.org/2000/svg';

  // What the agent "decides" next: module, headline, detail, status
  var INSIGHTS = [
    ['sales', 'Order #4471 may miss dispatch', 'Sales · flagged to sales head', 'Alert sent'],
    ['purchase', 'Better vendor quote found', 'Purchase · RFQ compared', 'For approval'],
    ['production', 'Line 2 running behind plan', 'Production · supervisor notified', 'Live'],
    ['hrms', '3 operators absent in shift B', 'HRMS · shift plan adjusted', 'Updated'],
    ['finance', '₹6.2 lakh overdue past 60 days', 'Finance · reminders queued', 'Queued'],
    ['inventory', '4 items below reorder level', 'Inventory · indents drafted', 'For approval'],
    ['crm', '12 leads with no follow-up in 7 days', 'CRM · reminders assigned', 'Assigned'],
    ['quality', 'Batch B-2291 failed thickness test', 'Quality · held for review', 'Review'],
    ['reports', 'Weekly MIS ready', 'Reports · shared with managers', 'Sent'],
  ];

  function initCommandCentre() {
    var root = document.querySelector('[data-cc]');
    if (!root) return;

    var feed = root.querySelector('.cc-feed');
    var core = root.querySelector('.cc-core');
    var svg = root.querySelector('.cc-lines');
    var icons = {};
    root.querySelectorAll('.cc-node').forEach(function (n) {
      icons[n.getAttribute('data-mod')] = n.querySelector('.cc-node-icon svg').innerHTML;
    });

    // Parallax: each layer moves by its data-depth
    root.querySelectorAll('.cc-depth').forEach(function (el) {
      el.style.setProperty('--depth', el.getAttribute('data-depth') || 10);
    });
    if (!reducedMotion && window.matchMedia('(hover: hover)').matches) {
      root.addEventListener('mousemove', function (e) {
        var r = root.getBoundingClientRect();
        root.style.setProperty('--mx', ((e.clientX - r.left) / r.width - 0.5).toFixed(3));
        root.style.setProperty('--my', ((e.clientY - r.top) / r.height - 0.5).toFixed(3));
      });
      root.addEventListener('mouseleave', function () {
        root.style.setProperty('--mx', 0);
        root.style.setProperty('--my', 0);
      });
    }

    if (reducedMotion) return;

    // A bright packet shoots from the module to the core
    function burst(mod) {
      var path = svg.querySelector('#cc-p-' + mod);
      if (!path) return;
      path.classList.add('is-hot');
      var c = document.createElementNS(SVG_NS, 'circle');
      c.setAttribute('r', '5');
      c.setAttribute('class', 'cc-burst');
      var m = document.createElementNS(SVG_NS, 'animateMotion');
      m.setAttribute('dur', '0.7s');
      m.setAttribute('fill', 'freeze');
      m.setAttribute('begin', 'indefinite');
      var mp = document.createElementNS(SVG_NS, 'mpath');
      mp.setAttribute('href', '#cc-p-' + mod);
      m.appendChild(mp);
      c.appendChild(m);
      svg.appendChild(c);
      if (m.beginElement) m.beginElement();
      setTimeout(function () { c.remove(); path.classList.remove('is-hot'); }, 800);
    }

    function card(item) {
      var el = document.createElement('div');
      el.className = 'cc-card is-entering';
      el.innerHTML =
        '<span class="cc-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor">' + (icons[item[0]] || '') + '</svg></span>' +
        '<div class="cc-card-body"><strong></strong><span></span></div>' +
        '<span class="cc-card-pill"></span>';
      el.querySelector('strong').textContent = item[1];
      el.querySelector('.cc-card-body span').textContent = item[2];
      el.querySelector('.cc-card-pill').textContent = item[3];
      return el;
    }

    var i = 0;
    function step() {
      var item = INSIGHTS[i % INSIGHTS.length];
      i++;
      var node = root.querySelector('.cc-node[data-mod="' + item[0] + '"]');
      if (node) node.classList.add('is-hot');
      burst(item[0]);

      setTimeout(function () {
        core.classList.remove('is-thinking');
        void core.offsetWidth;
        core.classList.add('is-thinking');
      }, 650);

      setTimeout(function () {
        if (node) node.classList.remove('is-hot');
        var el = card(item);
        feed.insertBefore(el, feed.firstChild);
        setTimeout(function () { el.classList.remove('is-entering'); }, 650);
        var cards = feed.querySelectorAll('.cc-card');
        if (cards.length > 3) {
          var last = cards[cards.length - 1];
          last.classList.add('is-leaving');
          setTimeout(function () { last.remove(); }, 450);
        }
      }, 1050);
    }

    // Start once the hero is visible, then keep going every few seconds
    var started = false;
    function start() {
      if (started) return;
      started = true;
      setTimeout(step, 900);
      setInterval(function () {
        if (!document.hidden) step();
      }, 3200);
    }
    if ('IntersectionObserver' in window) {
      var io = new IntersectionObserver(function (entries) {
        if (entries[0].isIntersecting) { start(); io.disconnect(); }
      });
      io.observe(root);
    } else {
      start();
    }
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initCommandCentre);
  } else {
    initCommandCentre();
  }
})();
