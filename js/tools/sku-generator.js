(function () {
  var root = document.querySelector('[data-sku]');
  if (!root) return;
  var $ = function (id) { return root.querySelector('#sku-' + id); };
  var list = [];

  function esc(s) {
    return String(s).replace(/[&<>"']/g, function (c) { return { '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;' }[c]; });
  }
  function values(id) {
    return $(id).value.split(',').map(function (v) { return v.trim(); }).filter(Boolean);
  }
  // "18mm" -> "18M", "Plywood" -> "PLY", "8x4" -> "8X4": keep digits, shorten letters
  function code(v, len) {
    var clean = v.toUpperCase().replace(/[^A-Z0-9]+/g, '');
    if (!len) return clean;
    var digits = clean.replace(/[^0-9]/g, '');
    if (!digits) return clean.slice(0, len);
    if (/^[0-9]+[X][0-9]+$/.test(clean)) return clean;
    return digits + clean.replace(/[0-9]/g, '').slice(0, Math.max(1, len - 2));
  }
  function combos(arrays) {
    return arrays.reduce(function (acc, arr) {
      if (!arr.length) return acc;
      var out = [];
      acc.forEach(function (a) { arr.forEach(function (v) { out.push(a.concat([v])); }); });
      return out;
    }, [[]]);
  }

  function render() {
    var len = parseInt($('len').value, 10), sep = $('sep').value;
    var base = [$('cat').value, $('prod').value].map(function (v) { return v.trim(); }).filter(Boolean);
    var rows = combos([values('a1'), values('a2'), values('a3')]);
    list = rows.map(function (attrs, i) {
      var parts = base.map(function (v) { return code(v, len); }).concat(attrs.map(function (v) { return code(v, len); }));
      if ($('seq').checked) parts.push(String(i + 1).padStart(3, '0'));
      return { sku: parts.filter(Boolean).join(sep), name: base.concat(attrs).join(' ') };
    }).filter(function (r) { return r.sku; });
    root.querySelector('[data-skucount]').textContent = list.length;
    root.querySelector('[data-list]').innerHTML = list.length
      ? '<thead><tr><th>#</th><th>SKU</th><th>Item name</th></tr></thead><tbody>' +
        list.map(function (r, i) { return '<tr><td>' + (i + 1) + '</td><td><code>' + esc(r.sku) + '</code></td><td>' + esc(r.name) + '</td></tr>'; }).join('') + '</tbody>'
      : '';
  }

  function csv() {
    var q = function (s) { return '"' + String(s).replace(/"/g, '""') + '"'; };
    return 'SKU,Item name\n' + list.map(function (r) { return q(r.sku) + ',' + q(r.name); }).join('\n');
  }
  root.querySelector('[data-csv]').addEventListener('click', function () {
    var a = document.createElement('a');
    a.href = URL.createObjectURL(new Blob([csv()], { type: 'text/csv' }));
    a.download = 'sku-list.csv';
    document.body.appendChild(a); a.click(); a.remove();
    setTimeout(function () { URL.revokeObjectURL(a.href); }, 1000);
  });
  root.querySelector('[data-copy]').addEventListener('click', function () {
    var msg = root.querySelector('[data-msg]');
    navigator.clipboard.writeText(list.map(function (r) { return r.sku; }).join('\n')).then(
      function () { msg.textContent = 'Copied ' + list.length + ' SKUs.'; },
      function () { msg.textContent = 'Copy failed. Use Download CSV instead.'; });
  });
  root.querySelectorAll('input, select').forEach(function (el) { el.addEventListener('input', render); el.addEventListener('change', render); });
  render();
})();
