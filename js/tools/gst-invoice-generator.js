(function () {
  var root = document.querySelector('[data-inv]');
  if (!root) return;
  var rowsEl = root.querySelector('[data-rows]');
  var preview = root.querySelector('[data-preview]');
  var $ = function (id) { return root.querySelector('#inv-' + id); };
  var money = new Intl.NumberFormat('en-IN', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
  // Invoice styles for the print frame (kept in step with the .inv-* rules in css/tools.css)
  var PRINT_CSS = '* { box-sizing: border-box; } body { margin: 0; font-family: Poppins, Arial, sans-serif; color: #101828; } .inv-preview { margin-top: 2rem; border: 1px solid #E4E7EC; border-radius: 0.75rem; padding: 1.5rem; background: #fff; color: #101828; font-size: 0.9rem; } .inv-preview h3 { font-size: 1.4rem; font-weight: 700; letter-spacing: 0.02em; } .inv-head { display: flex; justify-content: space-between; gap: 1.5rem; flex-wrap: wrap; margin-bottom: 1.25rem; } .inv-parties { display: grid; gap: 1rem; margin-bottom: 1.25rem; } @media (min-width: 640px) { .inv-parties { grid-template-columns: 1fr 1fr; } } .inv-box { border: 1px solid #E4E7EC; border-radius: 0.5rem; padding: 0.75rem; white-space: pre-line; } .inv-box b { display: block; font-size: 0.75rem; text-transform: uppercase; color: #667085; margin-bottom: 0.25rem; } .inv-table { width: 100%; border-collapse: collapse; } .inv-table th, .inv-table td { border: 1px solid #E4E7EC; padding: 0.45rem 0.5rem; text-align: left; } .inv-table th { background: #F6F9FC; font-size: 0.8rem; } .inv-table .num { text-align: right; white-space: nowrap; } .inv-totals { margin-left: auto; margin-top: 1rem; max-width: 22rem; display: grid; gap: 0.3rem; } .inv-totals div { display: flex; justify-content: space-between; gap: 1rem; } .inv-totals .is-total { font-weight: 700; border-top: 1px solid #101828; padding-top: 0.4rem; } .inv-words { margin-top: 0.75rem; font-style: italic; } .inv-preview { margin: 0; border: 0; padding: 0; }';
  var RATES = ['0', '0.25', '3', '5', '12', '18', '28', '40'];

  function esc(s) {
    return String(s).replace(/[&<>"']/g, function (c) { return { '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;' }[c]; });
  }
  function num(v) { v = parseFloat(v); return isFinite(v) && v >= 0 ? v : 0; }

  // Indian numbering: 1,23,45,678 -> "One Crore Twenty Three Lakh ..."
  var ONES = ['', 'One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine', 'Ten', 'Eleven', 'Twelve', 'Thirteen', 'Fourteen', 'Fifteen', 'Sixteen', 'Seventeen', 'Eighteen', 'Nineteen'];
  var TENS = ['', '', 'Twenty', 'Thirty', 'Forty', 'Fifty', 'Sixty', 'Seventy', 'Eighty', 'Ninety'];
  function twoDigits(n) { return n < 20 ? ONES[n] : TENS[Math.floor(n / 10)] + (n % 10 ? ' ' + ONES[n % 10] : ''); }
  function threeDigits(n) {
    var h = Math.floor(n / 100), r = n % 100;
    return (h ? ONES[h] + ' Hundred' + (r ? ' ' : '') : '') + (r ? twoDigits(r) : '');
  }
  function words(n) {
    if (n === 0) return 'Zero';
    var parts = [], crore = Math.floor(n / 10000000);
    n %= 10000000;
    if (crore) parts.push(words(crore) + ' Crore');
    var lakh = Math.floor(n / 100000); n %= 100000;
    if (lakh) parts.push(twoDigits(lakh) + ' Lakh');
    var thousand = Math.floor(n / 1000); n %= 1000;
    if (thousand) parts.push(twoDigits(thousand) + ' Thousand');
    if (n) parts.push(threeDigits(n));
    return parts.join(' ');
  }
  function amountInWords(total) {
    var rupees = Math.floor(total), paise = Math.round((total - rupees) * 100);
    if (paise === 100) { rupees += 1; paise = 0; }
    return 'Rupees ' + words(rupees) + (paise ? ' and ' + twoDigits(paise) + ' Paise' : '') + ' Only';
  }

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

    var date = $('date').value ? new Date($('date').value + 'T00:00:00').toLocaleDateString('en-IN', { day: '2-digit', month: 'short', year: 'numeric' }) : '';
    var taxHead = intra ? '<th class="num">CGST</th><th class="num">SGST</th>' : '<th class="num">IGST</th>';
    var rows = items.map(function (i, n) {
      var taxCells = intra
        ? '<td class="num">' + money.format(i.tax / 2) + '<br><small>' + i.gst / 2 + '%</small></td><td class="num">' + money.format(i.tax / 2) + '<br><small>' + i.gst / 2 + '%</small></td>'
        : '<td class="num">' + money.format(i.tax) + '<br><small>' + i.gst + '%</small></td>';
      return '<tr><td>' + (n + 1) + '</td><td>' + esc(i.desc) + '</td><td>' + esc(i.hsn) + '</td><td class="num">' + i.qty + ' ' + esc(i.unit) + '</td><td class="num">' + money.format(i.rate) + '</td><td class="num">' + money.format(i.taxable) + '</td>' + taxCells + '<td class="num">' + money.format(i.taxable + i.tax) + '</td></tr>';
    }).join('');
    var taxTotals = intra
      ? '<div><span>CGST</span><span>' + money.format(tax / 2) + '</span></div><div><span>SGST</span><span>' + money.format(tax / 2) + '</span></div>'
      : '<div><span>IGST</span><span>' + money.format(tax) + '</span></div>';

    preview.innerHTML =
      '<div class="inv-head"><div><h3>TAX INVOICE</h3><div>' + esc($('s-name').value) + '</div></div>' +
      '<div><div><b>Invoice no:</b> ' + esc($('no').value) + '</div><div><b>Date:</b> ' + esc(date) + '</div>' +
      '<div><b>Place of supply:</b> ' + esc($('b-state').value) + '</div></div></div>' +
      '<div class="inv-parties">' +
      '<div class="inv-box"><b>From</b>' + esc($('s-name').value) + '\n' + esc($('s-addr').value) + '\nGSTIN: ' + esc($('s-gstin').value) + '\nState: ' + esc($('s-state').value) + '</div>' +
      '<div class="inv-box"><b>Bill to</b>' + esc($('b-name').value) + '\n' + esc($('b-addr').value) + '\nGSTIN: ' + esc($('b-gstin').value || 'Unregistered') + '\nState: ' + esc($('b-state').value) + '</div></div>' +
      '<div class="inv-scroll"><table class="inv-table"><thead><tr><th>#</th><th>Description</th><th>HSN/SAC</th><th class="num">Qty</th><th class="num">Rate</th><th class="num">Taxable value</th>' + taxHead + '<th class="num">Amount</th></tr></thead><tbody>' + rows + '</tbody></table></div>' +
      '<div class="inv-totals"><div><span>Taxable value</span><span>' + money.format(taxable) + '</span></div>' + taxTotals +
      '<div><span>Round off</span><span>' + money.format(roundOff) + '</span></div>' +
      '<div class="is-total"><span>Total (₹)</span><span>' + money.format(total) + '</span></div></div>' +
      '<p class="inv-words">' + amountInWords(total) + '</p>' +
      '<p style="margin-top:2rem;text-align:right">For ' + esc($('s-name').value) + '<br><br>Authorised signatory</p>';
  }

  var today = new Date();
  $('date').value = today.getFullYear() + '-' + String(today.getMonth() + 1).padStart(2, '0') + '-' + String(today.getDate()).padStart(2, '0');
  addRow({ desc: '18 mm BWP plywood 8x4', hsn: '4412', qty: 50, unit: 'Sheets', rate: 2450, gst: '18' });
  addRow({ desc: 'Loading and transport', hsn: '9965', qty: 1, unit: 'Trip', rate: 3000, gst: '5' });
  root.addEventListener('input', render);
  root.addEventListener('change', render);
  root.querySelector('[data-add]').addEventListener('click', function () { addRow(); render(); });
  // Print only the invoice, from a separate frame, so the rest of the page takes no space
  root.querySelector('[data-print]').addEventListener('click', function () {
    var frame = document.createElement('iframe');
    frame.setAttribute('aria-hidden', 'true');
    frame.style.cssText = 'position:fixed;right:0;bottom:0;width:0;height:0;border:0';
    document.body.appendChild(frame);
    var doc = frame.contentDocument;
    doc.open();
    doc.write('<!doctype html><html><head><meta charset="utf-8"><title>' + esc($('no').value || 'Invoice') + '</title>' +
      '<style>' + PRINT_CSS + '</style></head>' +
      '<body><div class="inv-preview">' + preview.innerHTML + '</div></body></html>');
    doc.close();
    frame.contentWindow.focus();
    frame.contentWindow.print();
    setTimeout(function () { frame.remove(); }, 1000);
  });
  render();
})();
