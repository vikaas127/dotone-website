// Vision AI page: feature tabs, chat reveal and the embedded factory demo
(function () {
  'use strict';
  var root = document.querySelector('[data-vz-tabs]');
  if (root) {
    var tabs = root.querySelectorAll('[data-vz-tab]');
    var panels = root.querySelectorAll('[data-vz-panel]');
    var show = function (key, focus) {
      tabs.forEach(function (t) {
        var on = t.getAttribute('data-vz-tab') === key;
        t.classList.toggle('is-active', on);
        t.setAttribute('aria-selected', on ? 'true' : 'false');
        t.tabIndex = on ? 0 : -1;
        if (on && focus) t.focus();
      });
      panels.forEach(function (p) {
        var on = p.getAttribute('data-vz-panel') === key;
        p.hidden = !on;
        p.classList.toggle('is-active', on);
        if (on) { p.classList.remove('is-in'); void p.offsetWidth; p.classList.add('is-in'); }
      });
    };
    tabs.forEach(function (t, i) {
      t.addEventListener('click', function () { show(t.getAttribute('data-vz-tab')); });
      t.addEventListener('keydown', function (e) {
        if (e.key !== 'ArrowRight' && e.key !== 'ArrowLeft') return;
        var n = (i + (e.key === 'ArrowRight' ? 1 : -1) + tabs.length) % tabs.length;
        show(tabs[n].getAttribute('data-vz-tab'), true);
      });
    });
    var hash = location.hash.slice(1);
    if (hash && root.querySelector('[data-vz-panel="' + hash + '"]')) show(hash);
  }

  var chat = document.querySelector('.vz2-chat');
  if (chat) {
    if ('IntersectionObserver' in window) {
      new IntersectionObserver(function (es, io) {
        es.forEach(function (e) { if (e.isIntersecting) { chat.classList.add('is-in'); io.disconnect(); } });
      }, { threshold: 0.3 }).observe(chat);
    } else chat.classList.add('is-in');
  }

  // The twin is a 1 MB 3D app: load it only when someone starts it, or when it comes into view on a larger screen
  var twin = document.querySelector('[data-vz-twin]');
  if (twin) {
    var stage = twin.querySelector('.vz2-twin-stage');
    var started = false;
    var start = function () {
      if (started) return;
      started = true;
      var f = document.createElement('iframe');
      f.src = '/factory-demo';
      f.title = 'DotOne factory demo, interactive 3D demo';
      f.setAttribute('allow', 'fullscreen');
      f.loading = 'eager';
      stage.appendChild(f);
      f.addEventListener('load', function () {
        stage.querySelectorAll('img, button').forEach(function (el) { el.remove(); });
      });
    };
    twin.querySelector('[data-vz-twin-start]').addEventListener('click', start);
    if ('IntersectionObserver' in window && window.innerWidth >= 1024) {
      new IntersectionObserver(function (es, io) {
        es.forEach(function (e) { if (e.isIntersecting) { start(); io.disconnect(); } });
      }, { rootMargin: '200px 0px' }).observe(twin);
    }
  }
})();
