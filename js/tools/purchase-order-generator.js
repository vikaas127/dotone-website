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

    var g = function (id) { return $(id).value; };
    var cols = [4, 32, 9, 10, 11, 13, 8, 13];
    var rows = items.map(function (i, n) {
      return '<tr><td>' + (n + 1) + '</td><td>' + esc(i.desc) + '</td><td>' + esc(i.hsn) + '</td><td class="num">' + i.qty + '<small>' + esc(i.unit) + '</small></td><td class="num">' + money.format(i.rate) + '</td><td class="num">' + money.format(i.value) + '</td><td class="num">' + i.gst + '%</td><td class="num">' + money.format(i.value + i.tax) + '</td></tr>';
    }).join('');
    var taxLines = intra
      ? '<div><span>CGST</span><span>' + money.format(tax / 2) + '</span></div><div><span>SGST</span><span>' + money.format(tax / 2) + '</span></div>'
      : '<div><span>IGST</span><span>' + money.format(tax) + '</span></div>';
    var exact = value + tax, roundOff = total - exact;
    var terms = [];
    if (g('delivery')) terms.push('Delivery by ' + D.formatDate(g('delivery')) + ', at the address above.');
    if (g('pay')) terms.push('Payment: ' + g('pay'));
    if (g('terms').trim()) terms.push(g('terms').trim());

    preview.innerHTML = '<div class="doc-sheet">' +
      D.head(g('b-name'), g('b-addr') + '\nGSTIN: ' + g('b-gstin') + '  ·  State: ' + g('b-state'), 'PURCHASE ORDER', [
        ['PO no.', g('no')], ['PO date', D.formatDate(g('date'))], ['Delivery by', D.formatDate(g('delivery'))]
      ]) +
      '<div class="doc-parties">' +
      '<div class="doc-box"><span class="doc-label">Vendor</span><span class="doc-name">' + esc(g('v-name')) + '</span>\n' + esc(g('v-addr')) + '\nGSTIN: ' + esc(g('v-gstin') || 'Unregistered') + '\nState: ' + esc(g('v-state')) + '</div>' +
      '<div class="doc-box"><span class="doc-label">Deliver to</span><span class="doc-name">' + esc(g('b-name')) + '</span>\n' + esc(g('b-addr')) + '\nTax: ' + (intra ? 'CGST + SGST (same state)' : 'IGST (inter-state)') + '</div></div>' +
      '<table class="doc-table"><colgroup>' + cols.map(function (w) { return '<col style="width:' + w + '%">'; }).join('') + '</colgroup>' +
      '<thead><tr><th>#</th><th>Description</th><th>HSN/SAC</th><th class="num">Qty</th><th class="num">Rate</th><th class="num">Value</th><th class="num">GST</th><th class="num">Amount</th></tr></thead>' +
      '<tbody>' + rows + '</tbody>' +
      '<tfoot><tr><td></td><td>Total</td><td></td><td></td><td></td><td class="num">' + money.format(value) + '</td><td></td><td class="num">' + money.format(exact) + '</td></tr></tfoot></table>' +
      '<div class="doc-foot"><div><div class="doc-words"><b>Amount in words</b>' + D.amountInWords(total) + '</div>' +
      (terms.length ? '<div class="doc-notes"><span class="doc-label">Terms</span>' + esc(terms.join('\n')) + '</div>' : '') + '</div>' +
      '<div class="doc-totals"><div><span>Value before tax</span><span>' + money.format(value) + '</span></div>' + taxLines +
      '<div><span>Round off</span><span>' + (roundOff < 0 ? '−' : '') + money.format(Math.abs(roundOff)) + '</span></div>' +
      '<div class="doc-grand"><span>PO total</span><span>₹ ' + money.format(total) + '</span></div></div></div>' +
      D.sign(g('b-name'), 'Please quote this PO number on your invoice and delivery challan.') +
      '<p class="doc-small">This is a computer-generated purchase order.</p></div>';
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
