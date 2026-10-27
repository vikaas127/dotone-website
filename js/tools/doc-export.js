// Shared by the document generators (invoice, receipt, purchase order, payslip):
// escaping, Indian amount in words, PDF download and printing of the .inv-preview block.
window.DotoneDoc = (function () {
  // Document styles for the PDF and print frame (kept in step with the .inv-* rules in css/tools.css)
  var CSS = '* { box-sizing: border-box; } body { margin: 0; font-family: Poppins, Arial, sans-serif; color: #101828; } .inv-preview { margin-top: 2rem; border: 1px solid #E4E7EC; border-radius: 0.75rem; padding: 1.5rem; background: #fff; color: #101828; font-size: 0.9rem; } .inv-preview h3 { font-size: 1.4rem; font-weight: 700; letter-spacing: 0.02em; } .inv-head { display: flex; justify-content: space-between; gap: 1.5rem; flex-wrap: wrap; margin-bottom: 1.25rem; } .inv-parties { display: grid; gap: 1rem; margin-bottom: 1.25rem; } @media (min-width: 640px) { .inv-parties { grid-template-columns: 1fr 1fr; } } .inv-box { border: 1px solid #E4E7EC; border-radius: 0.5rem; padding: 0.75rem; white-space: pre-line; } .inv-box b { display: block; font-size: 0.75rem; text-transform: uppercase; color: #667085; margin-bottom: 0.25rem; } .inv-table { width: 100%; border-collapse: collapse; } .inv-table th, .inv-table td { border: 1px solid #E4E7EC; padding: 0.45rem 0.5rem; text-align: left; } .inv-table th { background: #F6F9FC; font-size: 0.8rem; } .inv-table .num { text-align: right; white-space: nowrap; } .inv-totals { margin-left: auto; margin-top: 1rem; max-width: 22rem; display: grid; gap: 0.3rem; } .inv-totals div { display: flex; justify-content: space-between; gap: 1rem; } .inv-totals .is-total { font-weight: 700; border-top: 1px solid #101828; padding-top: 0.4rem; } .inv-words { margin-top: 0.75rem; font-style: italic; } .inv-preview { margin: 0; border: 0; padding: 0; }' + ' .inv-preview { background: #fff; }';
  var PDF_LIB = 'https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js';
  var PDF_SRI = 'sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==';
  var pdfLib = null;

  function esc(s) {
    return String(s).replace(/[&<>"']/g, function (c) { return { '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;' }[c]; });
  }
  function num(v) { v = parseFloat(v); return isFinite(v) && v >= 0 ? v : 0; }
  var money = new Intl.NumberFormat('en-IN', { minimumFractionDigits: 2, maximumFractionDigits: 2 });

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

  function today() {
    var d = new Date();
    return d.getFullYear() + '-' + String(d.getMonth() + 1).padStart(2, '0') + '-' + String(d.getDate()).padStart(2, '0');
  }
  function formatDate(iso) {
    return iso ? new Date(iso + 'T00:00:00').toLocaleDateString('en-IN', { day: '2-digit', month: 'short', year: 'numeric' }) : '';
  }

  // html2pdf (pinned with an integrity hash) loads only on the first download
  function loadPdfLib() {
    if (window.html2pdf) return Promise.resolve(window.html2pdf);
    if (pdfLib) return pdfLib;
    pdfLib = new Promise(function (resolve, reject) {
      var s = document.createElement('script');
      s.src = PDF_LIB; s.integrity = PDF_SRI; s.crossOrigin = 'anonymous';
      s.onload = function () { window.html2pdf ? resolve(window.html2pdf) : reject(new Error('PDF library missing')); };
      s.onerror = function () { pdfLib = null; reject(new Error('PDF library failed to load')); };
      document.head.appendChild(s);
    });
    return pdfLib;
  }

  function safeName(name) {
    var n = String(name || 'document').replace(/[^A-Za-z0-9_-]+/g, '-').replace(/^-+|-+$/g, '');
    return (n || 'document') + '.pdf';
  }

  // Print only the document, from a separate frame, so the rest of the page takes no space
  function print(preview, title) {
    var frame = document.createElement('iframe');
    frame.setAttribute('aria-hidden', 'true');
    frame.style.cssText = 'position:fixed;right:0;bottom:0;width:0;height:0;border:0';
    document.body.appendChild(frame);
    var doc = frame.contentDocument;
    doc.open();
    doc.write('<!doctype html><html><head><meta charset="utf-8"><title>' + esc(title || 'Document') + '</title>' +
      '<style>' + CSS + '</style></head><body><div class="inv-preview">' + preview.innerHTML + '</div></body></html>');
    doc.close();
    frame.contentWindow.focus();
    frame.contentWindow.print();
    setTimeout(function () { frame.remove(); }, 1000);
  }

  // Render a clean copy of the document (not the on-page element, which is offset by scroll and animations)
  function download(preview, name, btn, onFail) {
    var label = btn.textContent;
    btn.disabled = true;
    btn.textContent = 'Preparing PDF…';
    return loadPdfLib().then(function (html2pdf) {
      return html2pdf().set({
        margin: 10,
        filename: safeName(name),
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 2, useCORS: true, backgroundColor: '#ffffff', scrollX: 0, scrollY: 0 },
        jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' },
        pagebreak: { mode: ['css', 'legacy'] }
      }).from('<div style="width:190mm;background:#fff"><style>' + CSS + '</style><div class="inv-preview">' + preview.innerHTML + '</div></div>', 'string').save();
    }).catch(function () {
      // No network or the CDN is blocked: fall back to the print dialog
      if (onFail) onFail();
    }).then(function () {
      btn.disabled = false;
      btn.textContent = label;
    });
  }

  // Wire a generator's [data-download] and [data-print] buttons to its preview
  function bind(root, preview, nameFn) {
    var printBtn = root.querySelector('[data-print]');
    var dlBtn = root.querySelector('[data-download]');
    if (printBtn) printBtn.addEventListener('click', function () { print(preview, nameFn()); });
    if (dlBtn) dlBtn.addEventListener('click', function () { download(preview, nameFn(), dlBtn, function () { print(preview, nameFn()); }); });
  }

  return { esc: esc, num: num, money: money, amountInWords: amountInWords, today: today, formatDate: formatDate, bind: bind };
})();
