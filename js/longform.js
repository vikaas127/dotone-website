// Long-form pages: highlight the current section in the table of contents and show reading progress.
(function () {
  var article = document.querySelector('[data-lf-article]');
  var toc = document.querySelector('[data-lf-toc]');
  if (!article) return;
  var bar = document.querySelector('[data-lf-progress]');
  var links = toc ? Array.prototype.slice.call(toc.querySelectorAll('a[href^="#"]')) : [];
  var sections = links.map(function (a) { return document.getElementById(a.getAttribute('href').slice(1)); });

  function update() {
    var top = article.getBoundingClientRect().top + window.scrollY;
    var height = article.offsetHeight - window.innerHeight * 0.6;
    var done = Math.max(0, Math.min(1, (window.scrollY - top + 120) / Math.max(1, height)));
    if (bar) bar.style.width = (done * 100).toFixed(1) + '%';
    var current = 0;
    sections.forEach(function (s, i) { if (s && s.getBoundingClientRect().top < 140) current = i; });
    links.forEach(function (a, i) { a.classList.toggle('is-active', i === current); });
  }
  var ticking = false;
  window.addEventListener('scroll', function () {
    if (!ticking) { ticking = true; requestAnimationFrame(function () { ticking = false; update(); }); }
  }, { passive: true });
  window.addEventListener('resize', update);
  update();
})();
