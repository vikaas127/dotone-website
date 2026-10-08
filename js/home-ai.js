(function () {
  'use strict';

  var reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  function onVisible(el, cb, threshold) {
    if (!el) return;
    if (!('IntersectionObserver' in window)) return cb(el);
    var io = new IntersectionObserver(function (entries) {
      if (entries[0].isIntersecting) { cb(el); io.disconnect(); }
    }, { threshold: threshold || 0.3 });
    io.observe(el);
  }

  // Problem section: scattered tools merge into DotOne
  function unify() {
    var el = document.querySelector('[data-unify]');
    onVisible(el, function () {
      setTimeout(function () { el.classList.add('is-merged'); }, reducedMotion ? 0 : 600);
    }, 0.35);
  }

  // Module explorer: tabs, replaying the workflow; auto-advances until the visitor clicks
  function explorer() {
    var root = document.querySelector('[data-explorer]');
    if (!root) return;
    var tabs = root.querySelectorAll('.explorer-tab');
    var panels = root.querySelectorAll('.explorer-panel');
    var timer = null;

    function show(key) {
      tabs.forEach(function (t) {
        var on = t.getAttribute('data-tab') === key;
        t.classList.toggle('is-active', on);
        t.setAttribute('aria-selected', on ? 'true' : 'false');
      });
      panels.forEach(function (p) {
        var on = p.getAttribute('data-panel') === key;
        p.classList.toggle('is-active', on);
        p.hidden = !on;
        if (on) {
          p.classList.remove('is-playing');
          void p.offsetWidth;
          p.classList.add('is-playing');
        }
      });
    }

    tabs.forEach(function (t) {
      t.addEventListener('click', function () {
        clearInterval(timer);
        show(t.getAttribute('data-tab'));
      });
    });

    onVisible(root, function () {
      show(tabs[0].getAttribute('data-tab'));
      if (reducedMotion) return;
      var i = 0;
      timer = setInterval(function () {
        i = (i + 1) % tabs.length;
        show(tabs[i].getAttribute('data-tab'));
      }, 4500);
    }, 0.3);
  }

  // AI pipeline: a highlight travels from data to result
  function pipeline() {
    var root = document.querySelector('[data-pipeline]');
    if (!root) return;
    var steps = root.querySelectorAll('.pipeline-step');
    onVisible(root, function () {
      root.classList.add('is-visible');
      if (reducedMotion) { steps.forEach(function (s) { s.classList.add('is-on'); }); return; }
      var i = 0;
      function tick() {
        steps.forEach(function (s, k) {
          s.classList.toggle('is-on', k <= i);
          s.classList.toggle('is-current', k === i);
        });
        i = i + 1;
        if (i > steps.length) i = 0;
        setTimeout(tick, i === 0 ? 1600 : 900);
      }
      tick();
    });
  }

  // Approval cards: Approve / Reject change the card state
  function approvals() {
    document.querySelectorAll('[data-approval]').forEach(function (card) {
      card.querySelectorAll('[data-action]').forEach(function (btn) {
        btn.addEventListener('click', function () {
          var approved = btn.getAttribute('data-action') === 'approve';
          card.classList.remove('is-approved', 'is-rejected');
          card.classList.add(approved ? 'is-approved' : 'is-rejected');
          card.querySelector('.approval-result').textContent = approved
            ? 'Approved by you just now. The agent is running the workflow.'
            : 'Rejected. The agent will not act and has logged your decision.';
        });
      });
    });
  }

  // Autonomy levels
  function autonomy() {
    var root = document.querySelector('[data-autonomy]');
    if (!root) return;
    var stops = root.querySelectorAll('.autonomy-stop');
    var panels = root.querySelectorAll('.autonomy-panel');
    var bar = root.querySelector('.autonomy-progress i');
    function set(level) {
      stops.forEach(function (s, i) {
        s.classList.toggle('is-active', i === level);
        s.classList.toggle('is-passed', i < level);
        s.setAttribute('aria-selected', i === level ? 'true' : 'false');
      });
      panels.forEach(function (p, i) { p.hidden = i !== level; p.classList.toggle('is-active', i === level); });
      bar.style.width = (level / (stops.length - 1)) * 100 + '%';
    }
    stops.forEach(function (s, i) { s.addEventListener('click', function () { set(i); }); });
    set(1);
  }

  // Ask DotOne AI: type the question, stream the answer, show the records
  var ANSWERS = [
    ['4 products are below reorder level. PVC Resin Grade A is the most urgent, with 1,240 kg left against a reorder level of 2,000 kg.', [['Item', 'Stock', 'Reorder level'], ['PVC Resin Grade A', '1,240 kg', '2,000 kg'], ['HDPE Granules', '860 kg', '1,500 kg'], ['Packing film 40µ', '22 rolls', '40 rolls'], ['M8 fasteners', '3,100 pcs', '5,000 pcs']], 'Source: Inventory · 3 warehouses · updated 2 minutes ago'],
    ['3 customers have payments overdue by more than 30 days, totalling ₹9.8 lakh. Sharma Traders is the oldest at 74 days.', [['Customer', 'Overdue', 'Days'], ['Sharma Traders', '₹4.1 lakh', '74'], ['Mehta Polymers', '₹3.5 lakh', '46'], ['Kaveri Packaging', '₹2.2 lakh', '33']], 'Source: Finance · receivables ledger'],
    ['Your top-selling product this month is Laminated Sheet 8 mm, up 14% on last month. The top 3 products make up 38% of revenue.', [['Product', 'Units', 'Revenue'], ['Laminated Sheet 8 mm', '4,820', '₹18.6 lakh'], ['ACP Panel 4 mm', '2,960', '₹14.2 lakh'], ['Edge Band 22 mm', '18,400 m', '₹6.9 lakh']], 'Source: Sales · invoices this month'],
    ['2 purchase orders are delayed. PO-1182 from ABC Industries is 5 days past the promised date.', [['PO', 'Vendor', 'Delay'], ['PO-1182', 'ABC Industries', '5 days'], ['PO-1197', 'Kumar Metals', '2 days']], 'Source: Purchase · open purchase orders'],
    ['Inventory cost rose 6.1% this month, mainly because HDPE granules were bought at ₹104 / kg against ₹96 / kg last month.', [['Driver', 'Impact'], ['HDPE price increase', '+₹2.3 lakh'], ['Higher closing stock of resin', '+₹1.1 lakh'], ['Lower packing film stock', '−₹0.4 lakh']], 'Source: Inventory valuation · Purchase'],
    ['3 production orders are behind schedule, all on Line 2. The largest delay is JO-5521, 9% behind plan.', [['Job order', 'Line', 'Behind plan'], ['JO-5521', 'Line 2', '9%'], ['JO-5524', 'Line 2', '6%'], ['JO-5530', 'Line 2', '4%']], 'Source: Production · job cards'],
  ];

  function ask() {
    var root = document.querySelector('[data-ask]');
    var chips = document.querySelectorAll('.ask-chip');
    if (!root || !chips.length) return;
    var input = root.querySelector('.ask-input-text');
    var text = root.querySelector('.ask-answer-text');
    var table = root.querySelector('.ask-table');
    var source = root.querySelector('.ask-source');
    var timers = [];
    var auto = null;

    function clear() { timers.forEach(clearTimeout); timers = []; }

    function renderTable(rows) {
      var html = '<table><thead><tr>' + rows[0].map(function (h) { return '<th>' + h + '</th>'; }).join('') + '</tr></thead><tbody>';
      rows.slice(1).forEach(function (r) { html += '<tr>' + r.map(function (c) { return '<td>' + c + '</td>'; }).join('') + '</tr>'; });
      table.innerHTML = html + '</tbody></table>';
    }

    function play(i) {
      clear();
      chips.forEach(function (c, k) { c.classList.toggle('is-active', k === i); });
      var q = chips[i].textContent;
      var a = ANSWERS[i];
      root.classList.remove('has-answer');
      text.textContent = '';
      table.innerHTML = '';
      source.textContent = '';
      if (reducedMotion) {
        input.textContent = q; text.textContent = a[0]; renderTable(a[1]); source.textContent = a[2];
        root.classList.add('has-answer');
        return;
      }
      input.textContent = '';
      var t = 0;
      for (var n = 1; n <= q.length; n++) {
        (function (n) { timers.push(setTimeout(function () { input.textContent = q.slice(0, n); }, t += 22)); })(n);
      }
      t += 350;
      timers.push(setTimeout(function () { root.classList.add('is-thinking'); }, t));
      t += 700;
      timers.push(setTimeout(function () { root.classList.remove('is-thinking'); root.classList.add('has-answer'); }, t));
      var words = a[0].split(' ');
      words.forEach(function (w, k) {
        timers.push(setTimeout(function () { text.textContent = words.slice(0, k + 1).join(' '); }, t + k * 45));
      });
      t += words.length * 45 + 200;
      timers.push(setTimeout(function () { renderTable(a[1]); source.textContent = a[2]; }, t));
    }

    chips.forEach(function (c, i) {
      c.addEventListener('click', function () { clearInterval(auto); play(i); });
    });

    onVisible(root, function () {
      play(0);
      if (reducedMotion) return;
      var i = 0;
      auto = setInterval(function () { i = (i + 1) % chips.length; play(i); }, 9000);
    });
  }

  function init() {
    unify();
    explorer();
    pipeline();
    approvals();
    autonomy();
    ask();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();

// Feature showcase: accordion drives the app mock, auto-advances until the visitor picks one
(function () {
  var root = document.querySelector('[data-show]');
  if (!root) return;
  var items = root.querySelectorAll('[data-show-item]');
  var screens = root.querySelectorAll('[data-screen]');
  var rail = root.querySelectorAll('[data-rail]');
  var chips = root.querySelectorAll('.show-chip');
  var CHIP = { sales: [0, 1], inventory: [2, 3], production: [3, 4], payroll: [5, 6], reports: [0, 1, 2, 3, 4, 5, 6] };
  var reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var DUR = 6500;
  var timer = null;
  var auto = !reduced;
  var visible = false;

  function show(key) {
    items.forEach(function (it) {
      var on = it.getAttribute('data-show-item') === key;
      it.classList.toggle('is-open', on);
      it.classList.remove('is-timing');
      it.querySelector('.show-head').setAttribute('aria-selected', on ? 'true' : 'false');
    });
    screens.forEach(function (s) { s.classList.toggle('is-active', s.getAttribute('data-screen') === key); });
    rail.forEach(function (r) { r.classList.toggle('is-active', r.getAttribute('data-rail') === key); });
    chips.forEach(function (c, i) { c.classList.toggle('is-lit', (CHIP[key] || []).indexOf(i) > -1); });
    schedule(key);
  }

  function schedule(key) {
    clearTimeout(timer);
    if (!auto || !visible) return;
    var cur = root.querySelector('[data-show-item="' + key + '"]');
    void cur.offsetWidth;
    cur.style.setProperty('--dur', DUR + 'ms');
    cur.classList.add('is-timing');
    timer = setTimeout(function () {
      var keys = Array.prototype.map.call(items, function (it) { return it.getAttribute('data-show-item'); });
      show(keys[(keys.indexOf(key) + 1) % keys.length]);
    }, DUR);
  }

  items.forEach(function (it) {
    it.querySelector('.show-head').addEventListener('click', function () {
      auto = false;
      show(it.getAttribute('data-show-item'));
    });
  });

  // Replay the active screen's entrance once the section scrolls into view
  var first = items[0].getAttribute('data-show-item');
  screens.forEach(function (s) { s.classList.remove('is-active'); });
  if ('IntersectionObserver' in window) {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (en) {
        var was = visible;
        visible = en.isIntersecting;
        var open = root.querySelector('.show-item.is-open');
        var key = open ? open.getAttribute('data-show-item') : first;
        if (visible && !was) show(key);
        if (!visible) clearTimeout(timer);
      });
    }, { threshold: 0.35 });
    io.observe(root);
  } else {
    visible = true;
    show(first);
  }
})();
