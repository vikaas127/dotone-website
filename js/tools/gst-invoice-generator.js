(function () {
  var root = document.querySelector('[data-inv]');
  if (!root) return;
  var rowsEl = root.querySelector('[data-rows]');
  var preview = root.querySelector('[data-preview]');
  var $ = function (id) { return root.querySelector('#inv-' + id); };
  var D = window.DotoneDoc, esc = D.esc, num = D.num, money = D.money;
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
    var intra = $('s-state').value === $('b-state').value;
    var items = Array.prototype.map.call(rowsEl.querySelectorAll('tr'), function (tr) {
      var g = function (f) { return tr.querySelector('[data-f="' + f + '"]').value; };
      var qty = num(g('qty')), rate = num(g('rate')), gst = num(g('gst'));
      var taxable = qty * rate;
      return { desc: g('desc'), hsn: g('hsn'), qty: qty, unit: g('unit'), rate: rate, gst: gst, taxable: taxable, tax: taxable * gst / 100 };
    });
    var taxable = 0, tax = 0;
    items.forEach(function (i) { taxable += i.taxable; tax += i.tax; });
    var exact = taxable + tax, total = Math.round(exact), roundOff = total - exact;

    var g = function (id) { return $(id).value; };
    var cols = intra ? [4, 26, 8, 9, 10, 12, 10, 10, 11] : [4, 30, 9, 9, 11, 13, 11, 13];
    var taxHead = intra ? '<th class="num">CGST</th><th class="num">SGST</th>' : '<th class="num">IGST</th>';
    var pct = function (r) { return '<small>' + r + '%</small>'; };
    var rows = items.map(function (i, n) {
      var taxCells = intra
        ? '<td class="num">' + money.format(i.tax / 2) + pct(i.gst / 2) + '</td><td class="num">' + money.format(i.tax / 2) + pct(i.gst / 2) + '</td>'
        : '<td class="num">' + money.format(i.tax) + pct(i.gst) + '</td>';
      return '<tr><td>' + (n + 1) + '</td><td>' + esc(i.desc) + '</td><td>' + esc(i.hsn) + '</td><td class="num">' + i.qty + '<small>' + esc(i.unit) + '</small></td><td class="num">' + money.format(i.rate) + '</td><td class="num">' + money.format(i.taxable) + '</td>' + taxCells + '<td class="num">' + money.format(i.taxable + i.tax) + '</td></tr>';
    }).join('');
    var taxFoot = intra ? '<td class="num">' + money.format(tax / 2) + '</td><td class="num">' + money.format(tax / 2) + '</td>' : '<td class="num">' + money.format(tax) + '</td>';

    // HSN-wise tax summary, grouped by HSN code and rate
    var groups = {}, order = [];
    items.forEach(function (i) {
      var k = i.hsn + '|' + i.gst;
      if (!groups[k]) { groups[k] = { hsn: i.hsn, gst: i.gst, taxable: 0, tax: 0 }; order.push(k); }
      groups[k].taxable += i.taxable; groups[k].tax += i.tax;
    });
    var sumHead = intra ? '<th class="num">CGST</th><th class="num">SGST</th>' : '<th class="num">IGST</th>';
    var sumRows = order.map(function (k) {
      var x = groups[k];
      var t = intra ? '<td class="num">' + money.format(x.tax / 2) + pct(x.gst / 2) + '</td><td class="num">' + money.format(x.tax / 2) + pct(x.gst / 2) + '</td>' : '<td class="num">' + money.format(x.tax) + pct(x.gst) + '</td>';
      return '<tr><td>' + esc(x.hsn || '—') + '</td><td class="num">' + money.format(x.taxable) + '</td>' + t + '<td class="num">' + money.format(x.tax) + '</td></tr>';
    }).join('');
    var taxTotals = intra
      ? '<div><span>CGST</span><span>' + money.format(tax / 2) + '</span></div><div><span>SGST</span><span>' + money.format(tax / 2) + '</span></div>'
      : '<div><span>IGST</span><span>' + money.format(tax) + '</span></div>';
    var notes = g('notes').trim();

    preview.innerHTML = '<div class="doc-sheet">' +
      D.head(g('s-name'), g('s-addr') + '\nGSTIN: ' + g('s-gstin') + '  ·  State: ' + g('s-state'), 'TAX INVOICE', [
        ['Invoice no.', g('no')], ['Invoice date', D.formatDate(g('date'))], ['Place of supply', g('b-state')], ['Reverse charge', 'No']
      ]) +
      '<div class="doc-parties">' +
      '<div class="doc-box"><span class="doc-label">Bill to</span><span class="doc-name">' + esc(g('b-name')) + '</span>\n' + esc(g('b-addr')) + '\nGSTIN: ' + esc(g('b-gstin') || 'Unregistered') + '\nState: ' + esc(g('b-state')) + '</div>' +
      '<div class="doc-box"><span class="doc-label">Supply</span>' + (intra ? 'Within the state: CGST + SGST' : 'Inter-state: IGST') + '\nSupplier state: ' + esc(g('s-state')) + '\nPlace of supply: ' + esc(g('b-state')) + '</div></div>' +
      '<table class="doc-table"><colgroup>' + cols.map(function (w) { return '<col style="width:' + w + '%">'; }).join('') + '</colgroup>' +
      '<thead><tr><th>#</th><th>Description</th><th>HSN/SAC</th><th class="num">Qty</th><th class="num">Rate</th><th class="num">Taxable value</th>' + taxHead + '<th class="num">Amount</th></tr></thead>' +
      '<tbody>' + rows + '</tbody>' +
      '<tfoot><tr><td></td><td>Total</td><td></td><td></td><td></td><td class="num">' + money.format(taxable) + '</td>' + taxFoot + '<td class="num">' + money.format(exact) + '</td></tr></tfoot></table>' +
      '<div class="doc-foot"><div><div class="doc-words"><b>Amount in words</b>' + D.amountInWords(total) + '</div>' +
      (notes ? '<div class="doc-notes"><span class="doc-label">Notes and bank details</span>' + esc(notes) + '</div>' : '') + '</div>' +
      '<div class="doc-totals"><div><span>Taxable value</span><span>' + money.format(taxable) + '</span></div>' + taxTotals +
      '<div><span>Round off</span><span>' + (roundOff < 0 ? '−' : '') + money.format(Math.abs(roundOff)) + '</span></div>' +
      '<div class="doc-grand"><span>Total</span><span>₹ ' + money.format(total) + '</span></div></div></div>' +
      '<div class="doc-section"><span class="doc-label">Tax summary by HSN/SAC</span><table class="doc-table"><thead><tr><th>HSN/SAC</th><th class="num">Taxable value</th>' + sumHead + '<th class="num">Total tax</th></tr></thead><tbody>' + sumRows + '</tbody></table></div>' +
      D.sign(g('s-name'), 'We declare that this invoice shows the actual price of the goods or services described and that all particulars are true and correct.') +
      '<p class="doc-small">This is a computer-generated invoice.</p>' + D.brand() + '</div>';
  }

  $('date').value = D.today();
  addRow({ desc: '18 mm BWP plywood 8x4', hsn: '4412', qty: 50, unit: 'Sheets', rate: 2450, gst: '18' });
  addRow({ desc: 'Loading and transport', hsn: '9965', qty: 1, unit: 'Trip', rate: 3000, gst: '5' });
  root.addEventListener('input', render);
  root.addEventListener('change', render);
  root.querySelector('[data-add]').addEventListener('click', function () { addRow(); render(); });
  D.bind(root, preview, function () { return $('no').value || 'invoice'; });
  render();
})();
