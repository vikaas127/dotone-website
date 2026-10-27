(function () {
  var root = document.querySelector('[data-be]');
  if (!root) return;
  var $ = function (id) { return root.querySelector('#be-' + id); };
  var inr = new Intl.NumberFormat('en-IN', { style: 'currency', currency: 'INR', maximumFractionDigits: 0 });
  var units = new Intl.NumberFormat('en-IN', { maximumFractionDigits: 0 });
  function num(el) { var v = parseFloat(el.value); return isFinite(v) && v >= 0 ? v : 0; }
  function line(label, value, total) {
    return '<div class="tool-line' + (total ? ' is-total' : '') + '"><span>' + label + '</span><b>' + value + '</b></div>';
  }

  function render() {
    var F = num($('fixed')), P = num($('price')), V = num($('var')), T = num($('target')), A = num($('actual'));
    var c = P - V;
    var main = root.querySelector('[data-main]');
    if (c <= 0) {
      main.textContent = 'Not reachable';
      root.querySelector('[data-lines]').innerHTML = line('Contribution per unit', inr.format(c)) +
        '<p class="tool-hint">The selling price must be higher than the variable cost per unit to break even.</p>';
      return;
    }
    var be = Math.ceil(F / c);
    main.textContent = units.format(be) + ' units';
    var lines = line('Break-even sales', inr.format(be * P)) +
      line('Contribution per unit', inr.format(c)) +
      line('Contribution margin', (c / P * 100).toFixed(1) + '%');
    if (T > 0) lines += line('Units for target profit', units.format(Math.ceil((F + T) / c)));
    if (A > 0) {
      var profit = A * c - F;
      lines += line('Profit at expected sales', (profit < 0 ? '−' : '') + inr.format(Math.abs(profit)));
      lines += line('Margin of safety', A > be ? units.format(A - be) + ' units (' + ((A - be) / A * 100).toFixed(1) + '%)' : 'Below break-even', true);
    }
    root.querySelector('[data-lines]').innerHTML = lines;
  }
  root.querySelectorAll('input').forEach(function (el) { el.addEventListener('input', render); });
  render();
})();
