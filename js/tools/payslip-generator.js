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

    var max = Math.max(earnings.length, deductions.length), rows = '';
    for (var i = 0; i < max; i++) {
      var e = earnings[i], d = deductions[i];
      rows += '<tr><td>' + (e ? e[0] : '') + '</td><td class="num">' + (e ? money.format(e[1]) : '') + '</td><td>' + (d ? d[0] : '') + '</td><td class="num">' + (d ? money.format(d[1]) : '') + '</td></tr>';
    }
    var info = function (label, value) { return value ? '<div><b>' + label + ':</b> ' + esc(value) + '</div>' : ''; };

    preview.innerHTML =
      '<div class="inv-head"><div><h3>PAYSLIP</h3><div>' + esc($('c-name').value) + '</div><div>' + esc($('c-addr').value) + '</div></div>' +
      '<div><div><b>Pay period:</b> ' + esc(monthLabel($('month').value)) + '</div><div><b>Days paid:</b> ' + paid + ' of ' + total + '</div></div></div>' +
      '<div class="inv-parties"><div class="inv-box" style="white-space:normal">' + info('Employee', $('e-name').value) + info('Employee code', $('e-code').value) + info('Designation', $('e-desig').value) + '</div>' +
      '<div class="inv-box" style="white-space:normal">' + info('Department', $('e-dept').value) + info('UAN', $('e-uan').value) + info('PAN', $('e-pan').value) + '</div></div>' +
      '<table class="inv-table"><thead><tr><th>Earnings</th><th class="num">Amount (₹)</th><th>Deductions</th><th class="num">Amount (₹)</th></tr></thead><tbody>' + rows +
      '<tr><th>Gross earnings</th><th class="num">' + money.format(gross) + '</th><th>Total deductions</th><th class="num">' + money.format(ded) + '</th></tr></tbody></table>' +
      '<div class="inv-totals"><div class="is-total"><span>Net pay (₹)</span><span>' + money.format(net) + '</span></div></div>' +
      '<p class="inv-words">' + D.amountInWords(net) + '</p>' +
      '<p style="margin-top:1.5rem;font-size:0.8rem;color:#667085">This is a computer-generated payslip.</p>';
  }

  var now = new Date();
  $('month').value = now.getFullYear() + '-' + String(now.getMonth() + 1).padStart(2, '0');
  root.addEventListener('input', render);
  root.addEventListener('change', render);
  D.bind(root, preview, function () { return 'payslip-' + ($('e-code').value || 'employee') + '-' + ($('month').value || ''); });
  render();
})();
