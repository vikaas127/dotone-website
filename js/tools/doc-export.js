// Shared by the document generators (invoice, receipt, purchase order, payslip):
// escaping, Indian amount in words, PDF download and printing of the .inv-preview block.
window.DotoneDoc = (function () {
  // Document styles, used by the on-page preview, the PDF and the print frame (the only copy)
  var CSS = '* { box-sizing: border-box; } .inv-preview { margin-top: 2rem; background: #fff; color: #101828; font-family: Poppins, Arial, sans-serif; font-size: 12px; line-height: 1.5; border: 1px solid #E4E7EC; border-radius: 12px; padding: 28px; overflow-x: auto; } .inv-preview .doc-sheet { min-width: 640px; } .doc-top { display: flex; justify-content: space-between; align-items: flex-start; gap: 24px; padding-bottom: 14px; border-bottom: 2px solid #101828; } .doc-brand { font-size: 17px; font-weight: 700; line-height: 1.3; } .doc-sub { color: #475467; font-size: 11px; white-space: pre-line; margin-top: 2px; } .doc-title { font-size: 19px; font-weight: 700; letter-spacing: 0.08em; text-align: right; margin-bottom: 6px; } .doc-meta { border-collapse: collapse; margin-left: auto; font-size: 11px; } .doc-meta th { text-align: left; color: #667085; font-weight: 500; padding: 1px 12px 1px 0; white-space: nowrap; } .doc-meta td { text-align: right; font-weight: 600; padding: 1px 0; white-space: nowrap; } .doc-parties { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; margin: 14px 0; } .doc-box { border: 1px solid #E4E7EC; border-radius: 6px; padding: 10px 12px; font-size: 11.5px; white-space: pre-line; } .doc-box .doc-name { font-weight: 600; font-size: 12.5px; } .doc-label { display: block; font-size: 9.5px; font-weight: 600; letter-spacing: 0.08em; text-transform: uppercase; color: #667085; margin-bottom: 4px; white-space: normal; } .doc-table { width: 100%; border-collapse: collapse; table-layout: fixed; font-size: 11px; } .doc-table th { background: #F2F4F7; color: #344054; font-weight: 600; font-size: 10px; text-transform: uppercase; letter-spacing: 0.04em; text-align: left; padding: 7px 6px; border-bottom: 1px solid #D0D5DD; } .doc-table td { padding: 7px 6px; border-bottom: 1px solid #EAECF0; vertical-align: top; overflow-wrap: anywhere; } .doc-table .num { text-align: right; white-space: nowrap; overflow-wrap: normal; } .doc-table th.num { white-space: normal; } .doc-table small { display: block; color: #667085; font-size: 9.5px; } .doc-table tfoot td { font-weight: 600; background: #F9FAFB; border-bottom: 0; } .doc-foot { display: grid; grid-template-columns: 1fr 260px; gap: 20px; margin-top: 14px; align-items: start; } .doc-words { font-size: 11px; } .doc-words b { display: block; font-size: 9.5px; letter-spacing: 0.08em; text-transform: uppercase; color: #667085; margin-bottom: 2px; } .doc-notes { margin-top: 10px; font-size: 10.5px; color: #475467; white-space: pre-line; } .doc-totals { font-size: 11.5px; } .doc-totals div { display: flex; justify-content: space-between; gap: 12px; padding: 3px 0; } .doc-totals span:last-child { white-space: nowrap; } .doc-totals .doc-grand { margin-top: 6px; padding: 8px 10px; background: #101828; color: #fff; border-radius: 6px; font-size: 13px; font-weight: 700; } .doc-section { margin-top: 16px; } .doc-section > .doc-label { margin-bottom: 6px; } .doc-sign { display: flex; justify-content: space-between; align-items: flex-end; gap: 24px; margin-top: 28px; font-size: 10.5px; color: #475467; } .doc-sign-box { text-align: center; min-width: 200px; color: #101828; } .doc-sign-box .doc-sign-line { border-top: 1px solid #101828; margin-top: 44px; padding-top: 4px; font-size: 11px; } .doc-table tr, .doc-foot, .doc-sign, .doc-parties { page-break-inside: avoid; break-inside: avoid; } .doc-table thead { display: table-header-group; } .doc-kv th { width: 38%; background: #F9FAFB; text-transform: none; letter-spacing: 0; font-size: 10.5px; color: #475467; font-weight: 500; border-bottom: 1px solid #EAECF0; } .doc-kv td { font-weight: 500; } .doc-brandbar { display: flex; justify-content: space-between; align-items: center; gap: 16px; margin-top: 18px; padding-top: 10px; border-top: 1px solid #EAECF0; font-size: 10px; color: #98A2B3; } .doc-brandbar img { height: 18px; width: auto; display: block; } .doc-small { font-size: 9.5px; color: #98A2B3; margin-top: 18px; text-align: center; }';
  // Fixed A4 content width so the PDF and print layout do not depend on the screen
  var SHEET_CSS = ' body { margin: 0; } .inv-preview { margin: 0; border: 0; border-radius: 0; padding: 0; overflow: visible; } .inv-preview .doc-sheet { min-width: 0; }';
  (function () {
    var st = document.createElement('style');
    st.id = 'doc-css';
    st.textContent = CSS;
    document.head.appendChild(st);
  })();
  var PDF_LIB = 'https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js';
  var PDF_SRI = 'sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==';
  var pdfLib = null;
  // DotOne footer on every downloaded document: logo on the left, tagline on the right
  var LOGO = '/assets/dotone-wm-blue-tight.png', LOGO_RATIO = 983 / 227;
  var TAGLINE = 'Endless clarity  \u00b7  dotone.in';
  var logoData = null;
  function loadLogo() {
    if (logoData) return logoData;
    logoData = fetch(LOGO).then(function (r) { return r.blob(); }).then(function (blob) {
      return new Promise(function (resolve) {
        var fr = new FileReader();
        fr.onload = function () { resolve(fr.result); };
        fr.onerror = function () { resolve(null); };
        fr.readAsDataURL(blob);
      });
    }).catch(function () { logoData = null; return null; });
    return logoData;
  }
  function brand() {
    return '<div class="doc-brandbar"><img src="' + LOGO + '" alt="DotOne"><span>' + TAGLINE + '</span></div>';
  }
  function withoutBrand(htmlStr) { return htmlStr.replace(/<div class="doc-brandbar">[\s\S]*?<\/div>/, ''); }

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
      '<style>' + CSS + SHEET_CSS + ' @page { size: A4; margin: 12mm; }</style></head><body><div class="inv-preview">' + preview.innerHTML + '</div></body></html>');
    doc.close();
    var printed = false;
    function go() {
      if (printed) return;
      printed = true;
      frame.contentWindow.focus();
      frame.contentWindow.print();
      setTimeout(function () { frame.remove(); }, 1000);
    }
    var img = doc.querySelector('.doc-brandbar img');
    if (img && !img.complete) { img.addEventListener('load', go); img.addEventListener('error', go); setTimeout(go, 1500); } else go();
  }

  // Render a clean copy of the document (not the on-page element, which is offset by scroll and animations)
  function download(preview, name, btn, onFail) {
    var label = btn.textContent;
    btn.disabled = true;
    btn.textContent = 'Preparing PDF…';
    return Promise.all([loadPdfLib(), loadLogo()]).then(function (libs) {
      var html2pdf = libs[0], logo = libs[1];
      return html2pdf().set({
        margin: [12, 12, 18, 12],
        filename: safeName(name),
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 3, useCORS: true, backgroundColor: '#ffffff', scrollX: 0, scrollY: 0 },
        jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait', compress: true },
        pagebreak: { mode: ['css', 'legacy'], avoid: ['tr', '.doc-top', '.doc-parties', '.doc-foot', '.doc-section', '.doc-sign'] }
      }).from('<div style="width:186mm;background:#fff"><style>' + CSS + SHEET_CSS + '</style><div class="inv-preview">' + withoutBrand(preview.innerHTML) + '</div></div>', 'string').toPdf().get('pdf').then(function (pdf) {
        // DotOne footer on every page, plus page numbers when the document runs past one page
        var pages = pdf.internal.getNumberOfPages();
        var w = pdf.internal.pageSize.getWidth(), h = pdf.internal.pageSize.getHeight();
        for (var i = 1; i <= pages; i++) {
          pdf.setPage(i);
          pdf.setDrawColor(234, 236, 240);
          pdf.setLineWidth(0.2);
          pdf.line(12, h - 13, w - 12, h - 13);
          if (logo) pdf.addImage(logo, 'PNG', 12, h - 10.5, 5 * LOGO_RATIO, 5);
          pdf.setFontSize(8);
          pdf.setTextColor(152, 162, 179);
          pdf.text(TAGLINE, w - 12, h - 7, { align: 'right' });
          if (pages > 1) pdf.text('Page ' + i + ' of ' + pages, w / 2, h - 7, { align: 'center' });
        }
      }).save();
    }).catch(function () {
      // No network or the CDN is blocked: fall back to the print dialog
      if (onFail) onFail();
    }).then(function () {
      btn.disabled = false;
      btn.textContent = label;
    });
  }

  // Shared document blocks. Text arguments are escaped here; meta rows are [label, value].
  function head(brand, sub, title, meta) {
    return '<div class="doc-top"><div><div class="doc-brand">' + esc(brand) + '</div><div class="doc-sub">' + esc(sub) + '</div></div>' +
      '<div><div class="doc-title">' + esc(title) + '</div><table class="doc-meta">' +
      meta.filter(function (m) { return m[1]; }).map(function (m) { return '<tr><th>' + esc(m[0]) + '</th><td>' + esc(m[1]) + '</td></tr>'; }).join('') +
      '</table></div></div>';
  }
  function sign(company, declaration) {
    return '<div class="doc-sign"><div>' + esc(declaration || '') + '</div>' +
      '<div class="doc-sign-box">For ' + esc(company) + '<div class="doc-sign-line">Authorised signatory</div></div></div>';
  }

  // Wire a generator's [data-download] and [data-print] buttons to its preview
  function bind(root, preview, nameFn) {
    var printBtn = root.querySelector('[data-print]');
    var dlBtn = root.querySelector('[data-download]');
    if (printBtn) printBtn.addEventListener('click', function () { print(preview, nameFn()); });
    if (dlBtn) dlBtn.addEventListener('click', function () { download(preview, nameFn(), dlBtn, function () { print(preview, nameFn()); }); });
  }

  return { esc: esc, num: num, money: money, amountInWords: amountInWords, today: today, formatDate: formatDate, head: head, sign: sign, brand: brand, bind: bind };
})();
