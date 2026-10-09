// AI-Powered ERP page: reveal each feature row and start its mock animation once
(function () {
  'use strict';
  var rows = document.querySelectorAll('.ai2-row');
  if (!rows.length) return;
  if (!('IntersectionObserver' in window)) { rows.forEach(function (r) { r.classList.add('is-in'); }); return; }
  var io = new IntersectionObserver(function (es) {
    es.forEach(function (e) { if (e.isIntersecting) { e.target.classList.add('is-in'); io.unobserve(e.target); } });
  }, { threshold: 0.2 });
  rows.forEach(function (r) { io.observe(r); });
})();
