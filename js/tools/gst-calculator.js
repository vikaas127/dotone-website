(function () {
  var root = document.querySelector('[data-gst]');
  if (!root) return;
  var mode = 'add', supply = 'intra';
  var amount = root.querySelector('#gst-amount');
  var rate = root.querySelector('#gst-rate');
  var custom = root.querySelector('#gst-custom');
  var customWrap = root.querySelector('[data-custom]');
  var inr = new Intl.NumberFormat('en-IN', { style: 'currency', currency: 'INR', minimumFractionDigits: 2, maximumFractionDigits: 2 });

  function num(el) { var v = parseFloat(el.value); return isFinite(v) && v >= 0 ? v : 0; }
  function line(label, value, total) {
    return '<div class="tool-line' + (total ? ' is-total' : '') + '"><span>' + label + '</span><b>' + inr.format(value) + '</b></div>';
  }

  function render() {
    customWrap.hidden = rate.value !== 'custom';
    var r = rate.value === 'custom' ? num(custom) : parseFloat(rate.value);
    var a = num(amount);
    var base, tax;
    if (mode === 'add') { base = a; tax = a * r / 100; }
    else { base = a * 100 / (100 + r); tax = a - base; }
    var total = base + tax;
    var half = r / 2;
    var lines = line('Price before GST', base) + line('GST at ' + r + '%', tax);
    if (supply === 'intra') lines += line('CGST at ' + half + '%', tax / 2) + line('SGST at ' + half + '%', tax / 2);
    else lines += line('IGST at ' + r + '%', tax);
    lines += line('Total including GST', total, true);
    root.querySelector('[data-main-label]').textContent = mode === 'add' ? 'Total including GST' : 'Price before GST';
    root.querySelector('[data-main]').textContent = inr.format(mode === 'add' ? total : base);
    root.querySelector('[data-lines]').innerHTML = lines;
    root.querySelector('[data-amount-label]').textContent = mode === 'add' ? 'Amount before GST (₹)' : 'Amount including GST (₹)';
  }

  function seg(attr, set) {
    root.querySelectorAll('[' + attr + ']').forEach(function (b) {
      b.addEventListener('click', function () {
        root.querySelectorAll('[' + attr + ']').forEach(function (x) { x.classList.toggle('is-active', x === b); });
        set(b.getAttribute(attr));
        render();
      });
    });
  }
  seg('data-mode', function (v) { mode = v; });
  seg('data-supply', function (v) { supply = v; });
  [amount, rate, custom].forEach(function (el) { el.addEventListener('input', render); el.addEventListener('change', render); });
  render();
})();
