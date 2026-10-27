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
    var g = function (id) { return $(id).value; };
    var row = function (label, value) { return value ? '<tr><th style="width:32%">' + esc(label) + '</th><td>' + esc(value) + '</td></tr>' : ''; };
    preview.innerHTML = '<div class="doc-sheet">' +
      D.head(g('s-name'), g('s-addr') + (gstin ? '\nGSTIN: ' + gstin : ''), 'PAYMENT RECEIPT', [
        ['Receipt no.', g('no')], ['Date', D.formatDate(g('date'))]
      ]) +
      '<div class="doc-foot" style="margin-top:16px"><div class="doc-box"><span class="doc-label">Received from</span><span class="doc-name">' + esc(g('from')) + '</span></div>' +
      '<div class="doc-totals"><div class="doc-grand" style="margin-top:0"><span>Amount received</span><span>₹ ' + money.format(amount) + '</span></div></div></div>' +
      '<table class="doc-table doc-kv" style="margin-top:14px"><tbody>' +
      '<tr><th style="width:32%">Amount in words</th><td>' + D.amountInWords(amount) + '</td></tr>' +
      row('Payment mode', mode) +
      row(mode === 'Cheque' ? 'Cheque no. / bank' : 'Reference', g('ref')) +
      row('Against invoice', g('inv')) +
      row('Description', g('note')) +
      '</tbody></table>' +
      D.sign(g('s-name'), mode === 'Cheque' ? 'Received subject to realisation of the cheque.' : 'Received with thanks.') +
      '<p class="doc-small">This is a computer-generated receipt.</p></div>';
  }

  $('date').value = D.today();
  root.addEventListener('input', render);
  root.addEventListener('change', render);
  D.bind(root, preview, function () { return $('no').value || 'receipt'; });
  render();
})();
