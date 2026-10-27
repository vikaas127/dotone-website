(function () {
  var root = document.querySelector('[data-emi]');
  if (!root) return;
  var unit = 'years';
  var $ = function (id) { return root.querySelector('#emi-' + id); };
  var inr = new Intl.NumberFormat('en-IN', { style: 'currency', currency: 'INR', maximumFractionDigits: 0 });
  function num(el) { var v = parseFloat(el.value); return isFinite(v) && v >= 0 ? v : 0; }
  function line(label, value, total) {
    return '<div class="tool-line' + (total ? ' is-total' : '') + '"><span>' + label + '</span><b>' + value + '</b></div>';
  }

  function render() {
    var P = num($('amount')), annual = num($('rate'));
    var n = Math.max(1, Math.round(num($('tenure')) * (unit === 'years' ? 12 : 1)));
    var r = annual / 12 / 100;
    var emi = r === 0 ? P / n : P * r * Math.pow(1 + r, n) / (Math.pow(1 + r, n) - 1);
    var total = emi * n;
    root.querySelector('[data-main]').textContent = P > 0 ? inr.format(emi) : '—';
    root.querySelector('[data-lines]').innerHTML =
      line('Loan amount', inr.format(P)) + line('Total interest', inr.format(total - P)) +
      line('Number of EMIs', n) + line('Total amount payable', inr.format(total), true);

    // Year-by-year schedule
    var rows = '', balance = P, year = 0, yi = 0, yp = 0;
    for (var m = 1; m <= n && P > 0; m++) {
      var interest = balance * r, principal = emi - interest;
      balance = Math.max(0, balance - principal);
      yi += interest; yp += principal;
      if (m % 12 === 0 || m === n) {
        year++;
        rows += '<tr><td>Year ' + year + '</td><td class="num">' + inr.format(yp) + '</td><td class="num">' + inr.format(yi) + '</td><td class="num">' + inr.format(balance) + '</td></tr>';
        yi = 0; yp = 0;
      }
    }
    root.querySelector('[data-schedule]').innerHTML = rows
      ? '<thead><tr><th>Period</th><th class="num">Principal paid</th><th class="num">Interest paid</th><th class="num">Balance</th></tr></thead><tbody>' + rows + '</tbody>'
      : '';
  }

  root.querySelectorAll('[data-unit]').forEach(function (b) {
    b.addEventListener('click', function () {
      root.querySelectorAll('[data-unit]').forEach(function (x) { x.classList.toggle('is-active', x === b); });
      unit = b.getAttribute('data-unit');
      render();
    });
  });
  root.querySelectorAll('input').forEach(function (el) { el.addEventListener('input', render); });
  render();
})();
