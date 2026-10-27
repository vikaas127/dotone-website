(function () {
  var root = document.querySelector('[data-rcpt]');
  if (!root) return;
  var D = window.DotoneDoc, esc = D.esc, money = D.money;
  var preview = root.querySelector('[data-preview]');
  var $ = function (id) { return root.querySelector('#rc-' + id); };

  function render() {
    var amount = D.num($('amount').value);
    var mode = $('mode').value;
    var gstin = $('s-gstin').value.trim();
    var row = function (label, value) { return value ? '<tr><th style="width:35%">' + label + '</th><td>' + esc(value) + '</td></tr>' : ''; };
    preview.innerHTML =
      '<div class="inv-head"><div><h3>PAYMENT RECEIPT</h3><div>' + esc($('s-name').value) + '</div>' +
      '<div style="white-space:pre-line">' + esc($('s-addr').value) + '</div>' + (gstin ? '<div>GSTIN: ' + esc(gstin) + '</div>' : '') + '</div>' +
      '<div><div><b>Receipt no:</b> ' + esc($('no').value) + '</div><div><b>Date:</b> ' + esc(D.formatDate($('date').value)) + '</div></div></div>' +
      '<table class="inv-table">' +
      row('Received from', $('from').value) +
      '<tr><th>Amount</th><td><b>₹ ' + money.format(amount) + '</b></td></tr>' +
      '<tr><th>Amount in words</th><td>' + D.amountInWords(amount) + '</td></tr>' +
      row('Payment mode', mode) +
      row(mode === 'Cheque' ? 'Cheque no. / bank' : 'Reference', $('ref').value) +
      row('Against invoice', $('inv').value) +
      row('Description', $('note').value) +
      '</table>' +
      (mode === 'Cheque' ? '<p class="inv-words">Subject to realisation of the cheque.</p>' : '') +
      '<p style="margin-top:2.5rem;text-align:right">For ' + esc($('s-name').value) + '<br><br>Authorised signatory</p>';
  }

  $('date').value = D.today();
  root.addEventListener('input', render);
  root.addEventListener('change', render);
  D.bind(root, preview, function () { return $('no').value || 'receipt'; });
  render();
})();
