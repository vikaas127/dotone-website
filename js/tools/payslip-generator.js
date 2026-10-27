(function () {
  var root = document.querySelector('[data-slip]');
  if (!root) return;
  var D = window.DotoneDoc, esc = D.esc, num = D.num, money = D.money;
  var preview = root.querySelector('[data-preview]');
  var $ = function (id) { return root.querySelector('#ps-' + id); };
  var PF_RATE = 0.12, PF_CEILING = 25000, ESI_LIMIT = 21000, ESI_EMP = 0.0075;

  function monthLabel(v) {
    if (!v) return '';
    var d = new Date(v + '-01T00:00:00');
    return d.toLocaleDateString('en-IN', { month: 'long', year: 'numeric' });
  }

  function render() {
    var total = Math.max(1, num($('total').value)), paid = Math.min(num($('paid').value), total);
    var f = paid / total;
    var basic = Math.round(num($('basic').value) * f);
    var earnings = [['Basic + DA', basic], ['HRA', Math.round(num($('hra').value) * f)], ['Special allowance', Math.round(num($('special').value) * f)], ['Overtime / other', num($('other').value)]];
    var gross = earnings.reduce(function (s, e) { return s + e[1]; }, 0);
    var pf = $('pf').checked ? Math.round(Math.min(basic, PF_CEILING) * PF_RATE) : 0;
    // ESI is rounded up to the next rupee
    var esi = $('esi').checked && gross > 0 && gross <= ESI_LIMIT ? Math.ceil(gross * ESI_EMP) : 0;
    var deductions = [['Provident fund', pf], ['ESI', esi], ['Professional tax', num($('pt').value)], ['TDS', num($('tds').value)], ['Advance / loan recovery', num($('adv').value)]];
    var ded = deductions.reduce(function (s, d) { return s + d[1]; }, 0);
    var net = Math.max(0, gross - ded);

    var g = function (id) { return $(id).value; };
    var max = Math.max(earnings.length, deductions.length), rows = '';
    for (var i = 0; i < max; i++) {
      var e = earnings[i], d = deductions[i];
      rows += '<tr><td>' + (e ? e[0] : '') + '</td><td class="num">' + (e ? money.format(e[1]) : '') + '</td><td>' + (d ? d[0] : '') + '</td><td class="num">' + (d ? money.format(d[1]) : '') + '</td></tr>';
    }
    var info = function (label, value) { return value ? '<tr><th>' + esc(label) + '</th><td>' + esc(value) + '</td></tr>' : ''; };

    preview.innerHTML = '<div class="doc-sheet">' +
      D.head(g('c-name'), g('c-addr'), 'PAYSLIP', [['Pay period', monthLabel(g('month'))], ['Days paid', paid + ' of ' + total]]) +
      '<div class="doc-parties">' +
      '<table class="doc-table doc-kv"><tbody>' + info('Employee', g('e-name')) + info('Employee code', g('e-code')) + info('Designation', g('e-desig')) + '</tbody></table>' +
      '<table class="doc-table doc-kv"><tbody>' + info('Department', g('e-dept')) + info('UAN', g('e-uan')) + info('PAN', g('e-pan')) + '</tbody></table></div>' +
      '<table class="doc-table"><colgroup><col style="width:32%"><col style="width:18%"><col style="width:32%"><col style="width:18%"></colgroup>' +
      '<thead><tr><th>Earnings</th><th class="num">Amount (₹)</th><th>Deductions</th><th class="num">Amount (₹)</th></tr></thead><tbody>' + rows + '</tbody>' +
      '<tfoot><tr><td>Gross earnings</td><td class="num">' + money.format(gross) + '</td><td>Total deductions</td><td class="num">' + money.format(ded) + '</td></tr></tfoot></table>' +
      '<div class="doc-foot"><div class="doc-words"><b>Net pay in words</b>' + D.amountInWords(net) + '</div>' +
      '<div class="doc-totals"><div class="doc-grand" style="margin-top:0"><span>Net pay</span><span>₹ ' + money.format(net) + '</span></div></div></div>' +
      '<p class="doc-small">This is a computer-generated payslip and does not need a signature.</p></div>';
  }

  var now = new Date();
  $('month').value = now.getFullYear() + '-' + String(now.getMonth() + 1).padStart(2, '0');
  root.addEventListener('input', render);
  root.addEventListener('change', render);
  D.bind(root, preview, function () { return 'payslip-' + ($('e-code').value || 'employee') + '-' + ($('month').value || ''); });
  render();
})();
