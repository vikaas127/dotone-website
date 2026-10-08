(function () {
  'use strict';

  var articles = window.GUIDES_ARTICLES || [];
  var categories = window.GUIDES_CATEGORIES || [];

  function formatDate(iso) {
    if (!iso) return '';
    var d = new Date(iso + 'T00:00:00');
    return d.toLocaleDateString('en-IN', { day: 'numeric', month: 'short', year: 'numeric' });
  }

  function getCategoryLabel(id) {
    var cat = categories.find(function (c) { return c.id === id; });
    return cat ? cat.label : id;
  }

  function renderFilters(activeId) {
    var wrap = document.getElementById('guides-filters');
    if (!wrap) return;

    wrap.innerHTML = categories.map(function (cat) {
      var isActive = cat.id === activeId;
      return '<button type="button" class="guides-filter' + (isActive ? ' is-active' : '') + '" data-category="' + cat.id + '">' + cat.label + '</button>';
    }).join('');

    wrap.querySelectorAll('.guides-filter').forEach(function (btn) {
      btn.addEventListener('click', function () {
        setActiveCategory(btn.getAttribute('data-category'));
      });
    });
  }

  function renderArticles(list) {
    var grid = document.getElementById('guides-grid');
    var empty = document.getElementById('guides-empty');
    var count = document.getElementById('guides-count');
    if (!grid) return;

    if (count) {
      count.textContent = list.length + ' article' + (list.length === 1 ? '' : 's');
    }

    if (!list.length) {
      grid.innerHTML = '';
      if (empty) empty.hidden = false;
      return;
    }

    if (empty) empty.hidden = true;

    grid.innerHTML = list.map(function (article) {
      return (
        '<a href="' + article.url + '" class="guides-card card p-6 md:p-7 flex flex-col h-full hover:border-primary-500/30 transition-colors">' +
          '<div class="flex items-center justify-between gap-3 mb-4">' +
            '<span class="guides-card-category">' + getCategoryLabel(article.category) + '</span>' +
            '<span class="guides-card-meta">' + (article.readTime || '') + '</span>' +
          '</div>' +
          '<h2 class="text-lg font-display font-semibold text-text-primary mb-3 leading-snug">' + article.title + '</h2>' +
          '<p class="text-sm text-text-secondary leading-relaxed flex-grow mb-4">' + article.excerpt + '</p>' +
          '<span class="guides-card-footer">' +
            '<time datetime="' + article.date + '">' + formatDate(article.date) + '</time>' +
            '<span class="guides-card-read">Read article →</span>' +
          '</span>' +
        '</a>'
      );
    }).join('');
  }

  function filterArticles(query, categoryId) {
    var q = (query || '').trim().toLowerCase();
    return articles.filter(function (article) {
      var matchCategory = categoryId === 'all' || article.category === categoryId;
      if (!matchCategory) return false;
      if (!q) return true;
      return (
        article.title.toLowerCase().indexOf(q) !== -1 ||
        article.excerpt.toLowerCase().indexOf(q) !== -1 ||
        getCategoryLabel(article.category).toLowerCase().indexOf(q) !== -1
      );
    });
  }

  var state = { category: 'all', query: '' };

  function refresh() {
    renderArticles(filterArticles(state.query, state.category));
  }

  function setActiveCategory(id) {
    state.category = id;
    renderFilters(id);
    refresh();
  }

  function initGuidesPage() {
    if (!document.getElementById('guides-grid')) return;

    renderFilters(state.category);
    refresh();

    var search = document.getElementById('guides-search');
    if (search) {
      search.addEventListener('input', function () {
        state.query = search.value;
        refresh();
      });
    }

    var params = new URLSearchParams(window.location.search);
    var catParam = params.get('category');
    if (catParam && categories.some(function (c) { return c.id === catParam; })) {
      setActiveCategory(catParam);
    }
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initGuidesPage);
  } else {
    initGuidesPage();
  }
})();
