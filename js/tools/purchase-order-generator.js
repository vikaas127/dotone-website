(function () {
  var root = document.querySelector('[data-po]');
  if (!root) return;
  var D = window.DotoneDoc, esc = D.esc, num = D.num, money = D.money;
  var rowsEl = root.querySelector('[data-rows]');
  var preview = root.querySelector('[data-preview]');
  var $ = function (id) { return root.querySelector('#po-' + id); };
  var RATES = ['0', '0.25', '3', '5', '12', '18', '28', '40'];

  function addRow(d) {
    d = d || { desc: '', hsn: '', qty: 1, unit: 'Nos', rate: 0, gst: '18' };
    var tr = document.createElement('tr');
    tr.innerHTML =
      '<td><input data-f="desc" aria-label="Description"></td>' +
      '<td><input data-f="hsn" aria-label="HSN or SAC"></td>' +
      '<td><input data-f="qty" type="number" min="0" step="any" aria-label="Quantity"></td>' +
      '<td><input data-f="unit" aria-label="Unit"></td>' +
      '<td><input data-f="rate" type="number" min="0" step="any" aria-label="Rate"></td>' +
      '<td><select data-f="gst" aria-label="GST rate">' + RATES.map(function (r) { return '<option value="' + r + '">' + r + '%</option>'; }).join('') + '</select></td>' +
      '<td><button type="button" class="inv-del" aria-label="Remove item">×</button></td>';
    ['desc', 'hsn', 'qty', 'unit', 'rate', 'gst'].forEach(function (f) { tr.querySelector('[data-f="' + f + '"]').value = d[f]; });
    tr.querySelector('.inv-del').addEventListener('click', function () { tr.remove(); render(); });
    rowsEl.appendChild(tr);
  }

  function render() {
    var intra = $('b-state').value === $('v-state').value;
    var items = Array.prototype.map.call(rowsEl.querySelectorAll('tr'), function (tr) {
      var g = function (f) { return tr.querySelector('[data-f="' + f + '"]').value; };
      var qty = num(g('qty')), rate = num(g('rate')), gst = num(g('gst'));
      return { desc: g('desc'), hsn: g('hsn'), qty: qty, unit: g('unit'), rate: rate, gst: gst, value: qty * rate, tax: qty * rate * gst / 100 };
    });
    var value = 0, tax = 0;
    items.forEach(function (i) { value += i.value; tax += i.tax; });
    var total = Math.round(value + tax);

    var rows = items.map(function (i, n) {
      return '<tr><td>' + (n + 1) + '</td><td>' + esc(i.desc) + '</td><td>' + esc(i.hsn) + '</td><td class="num">' + i.qty + ' ' + esc(i.unit) + '</td><td class="num">' + money.format(i.rate) + '</td><td class="num">' + money.format(i.value) + '</td><td class="num">' + i.gst + '%</td><td class="num">' + money.format(i.value + i.tax) + '</td></tr>';
    }).join('');
    var taxLines = intra
      ? '<div><span>CGST</span><span>' + money.format(tax / 2) + '</span></div><div><span>SGST</span><span>' + money.format(tax / 2) + '</span></div>'
      : '<div><span>IGST</span><span>' + money.format(tax) + '</span></div>';
    var terms = [];
    if ($('delivery').value) terms.push('<b>Delivery by:</b> ' + esc(D.formatDate($('delivery').value)) + ', at the address above');
    if ($('pay').value) terms.push('<b>Payment:</b> ' + esc($('pay').value));
    if ($('terms').value) terms.push(esc($('terms').value));

    preview.innerHTML =
      '<div class="inv-head"><div><h3>PURCHASE ORDER</h3><div>' + esc($('b-name').value) + '</div></div>' +
      '<div><div><b>PO no:</b> ' + esc($('no').value) + '</div><div><b>Date:</b> ' + esc(D.formatDate($('date').value)) + '</div></div></div>' +
      '<div class="inv-parties">' +
      '<div class="inv-box"><b>Buyer</b>' + esc($('b-name').value) + '\n' + esc($('b-addr').value) + '\nGSTIN: ' + esc($('b-gstin').value) + '\nState: ' + esc($('b-state').value) + '</div>' +
      '<div class="inv-box"><b>Vendor</b>' + esc($('v-name').value) + '\n' + esc($('v-addr').value) + '\nGSTIN: ' + esc($('v-gstin').value || 'Unregistered') + '\nState: ' + esc($('v-state').value) + '</div></div>' +
      '<div class="inv-scroll"><table class="inv-table"><thead><tr><th>#</th><th>Description</th><th>HSN/SAC</th><th class="num">Qty</th><th class="num">Rate</th><th class="num">Value</th><th class="num">GST</th><th class="num">Amount</th></tr></thead><tbody>' + rows + '</tbody></table></div>' +
      '<div class="inv-totals"><div><span>Value before tax</span><span>' + money.format(value) + '</span></div>' + taxLines +
      '<div class="is-total"><span>PO total (₹)</span><span>' + money.format(total) + '</span></div></div>' +
      '<p class="inv-words">' + D.amountInWords(total) + '</p>' +
      (terms.length ? '<div class="inv-box" style="margin-top:1rem"><b>Terms</b>' + terms.join('\n') + '</div>' : '') +
      '<p style="margin-top:2rem;text-align:right">For ' + esc($('b-name').value) + '<br><br>Authorised signatory</p>';
  }

  $('date').value = D.today();
  var due = new Date(); due.setDate(due.getDate() + 10);
  $('delivery').value = due.getFullYear() + '-' + String(due.getMonth() + 1).padStart(2, '0') + '-' + String(due.getDate()).padStart(2, '0');
  addRow({ desc: 'Phenol formaldehyde resin', hsn: '3909', qty: 2000, unit: 'Kg', rate: 98, gst: '18' });
  addRow({ desc: 'Melamine resin', hsn: '3909', qty: 500, unit: 'Kg', rate: 142, gst: '18' });
  root.addEventListener('input', render);
  root.addEventListener('change', render);
  root.querySelector('[data-add]').addEventListener('click', function () { addRow(); render(); });
  D.bind(root, preview, function () { return $('no').value || 'purchase-order'; });
  render();
})();
