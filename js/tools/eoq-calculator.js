(function () {
  var root = document.querySelector('[data-eoq]');
  if (!root) return;
  var ids = ['demand', 'days', 'order', 'price', 'carry', 'lead', 'safety'];
  var el = {};
  ids.forEach(function (k) { el[k] = root.querySelector('#eoq-' + k); });
  var units = new Intl.NumberFormat('en-IN', { maximumFractionDigits: 0 });
  var inr = new Intl.NumberFormat('en-IN', { style: 'currency', currency: 'INR', maximumFractionDigits: 0 });

  function num(e) { var v = parseFloat(e.value); return isFinite(v) && v >= 0 ? v : 0; }
  function line(label, value, total) {
    return '<div class="tool-line' + (total ? ' is-total' : '') + '"><span>' + label + '</span><b>' + value + '</b></div>';
  }

  function render() {
    var D = num(el.demand), days = Math.max(1, num(el.days)), S = num(el.order);
    var H = num(el.price) * num(el.carry) / 100;
    var daily = D / days;
    var safety = daily * num(el.safety);
    var rop = daily * num(el.lead) + safety;
    var main = root.querySelector('[data-main]');
    var lines = '';
    if (D > 0 && S > 0 && H > 0) {
      var eoq = Math.sqrt(2 * D * S / H);
      var orders = D / eoq;
      var cost = orders * S + (eoq / 2) * H;
      main.textContent = units.format(eoq) + ' units';
      lines += line('Orders a year', orders.toFixed(1));
      lines += line('Days between orders', (days / orders).toFixed(0));
      lines += line('Yearly ordering + holding cost', inr.format(cost));
    } else {
      main.textContent = '—';
      lines += line('EOQ', 'Enter usage, order cost and holding cost');
    }
    lines += line('Daily usage', units.format(daily) + ' units');
    lines += line('Safety stock', units.format(safety) + ' units');
    lines += line('Reorder point', units.format(rop) + ' units', true);
    root.querySelector('[data-lines]').innerHTML = lines;
  }
  ids.forEach(function (k) { el[k].addEventListener('input', render); });
  render();
})();
