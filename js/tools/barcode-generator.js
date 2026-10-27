(function () {
  var root = document.querySelector('[data-code]');
  if (!root) return;
  // Libraries load on demand, pinned with integrity hashes
  var LIBS = {
    qr: ['https://cdnjs.cloudflare.com/ajax/libs/qrcode-generator/1.4.4/qrcode.min.js', 'sha512-ZDSPMa/JM1D+7kdg2x3BsruQ6T/JpJo3jWDWkCZsP+5yVyp1KfESqLI+7RqB5k24F7p2cV7i2YHh/890y6P6Sw==', 'qrcode'],
    bar: ['https://cdnjs.cloudflare.com/ajax/libs/jsbarcode/3.11.6/JsBarcode.all.min.js', 'sha512-k2wo/BkbloaRU7gc/RkCekHr4IOVe10kYxJ/Q8dRPl7u3YshAQmg3WfZtIcseEk+nGBdK03fHBeLgXTxRmWCLQ==', 'JsBarcode']
  };
  var loading = {};
  function load(key) {
    var lib = LIBS[key];
    if (window[lib[2]]) return Promise.resolve();
    if (loading[key]) return loading[key];
    loading[key] = new Promise(function (resolve, reject) {
      var s = document.createElement('script');
      s.src = lib[0]; s.integrity = lib[1]; s.crossOrigin = 'anonymous';
      s.onload = resolve;
      s.onerror = function () { loading[key] = null; reject(new Error('load')); };
      document.head.appendChild(s);
    });
    return loading[key];
  }

  var type = 'qr';
  var text = root.querySelector('#code-text');
  var out = root.querySelector('[data-out]');
  var err = root.querySelector('[data-error]');
  var HINTS = {
    qr: 'Any text or link. Longer text makes a denser QR code.',
    CODE128: 'Letters, numbers and common symbols.',
    EAN13: '12 digits; the 13th check digit is added for you. Retail EANs must come from GS1.'
  };

  function render() {
    var value = text.value.trim();
    root.querySelector('[data-hint]').textContent = HINTS[type];
    root.querySelector('[data-showtext]').hidden = type === 'qr';
    err.textContent = '';
    if (!value) { out.innerHTML = ''; return; }
    var key = type === 'qr' ? 'qr' : 'bar';
    load(key).then(function () {
      if (type === 'qr') {
        var qr = window.qrcode(0, 'M');
        qr.addData(value, 'Byte');
        qr.make();
        out.innerHTML = qr.createSvgTag({ cellSize: 8, margin: 4, scalable: true });
        out.querySelector('svg').setAttribute('width', '260');
        out.querySelector('svg').setAttribute('height', '260');
      } else {
        var v = type === 'EAN13' ? value.replace(/\D/g, '').slice(0, 12) : value;
        if (type === 'EAN13' && v.length !== 12) throw new Error('EAN-13 needs 12 digits.');
        out.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg"></svg>';
        window.JsBarcode(out.querySelector('svg'), v, { format: type, displayValue: root.querySelector('#code-label').checked, margin: 16, height: 90, fontSize: 18 });
      }
    }).catch(function (e) {
      out.innerHTML = '';
      err.textContent = e && e.message === 'load' ? 'The code library could not load. Check your connection and try again.' : (e && e.message) || 'This text cannot be encoded in the chosen format.';
    });
  }

  function svgString() {
    var svg = out.querySelector('svg');
    if (!svg) return null;
    var clone = svg.cloneNode(true);
    clone.setAttribute('xmlns', 'http://www.w3.org/2000/svg');
    return new XMLSerializer().serializeToString(clone);
  }
  function save(href, name) {
    var a = document.createElement('a');
    a.href = href; a.download = name;
    document.body.appendChild(a); a.click(); a.remove();
  }
  function baseName() { return (text.value.trim().replace(/[^A-Za-z0-9_-]+/g, '-').replace(/^-+|-+$/g, '') || 'code').slice(0, 60); }

  root.querySelector('[data-svg]').addEventListener('click', function () {
    var s = svgString();
    if (!s) return;
    var url = URL.createObjectURL(new Blob([s], { type: 'image/svg+xml' }));
    save(url, baseName() + '.svg');
    setTimeout(function () { URL.revokeObjectURL(url); }, 1000);
  });
  root.querySelector('[data-png]').addEventListener('click', function () {
    var s = svgString();
    if (!s) return;
    var svg = out.querySelector('svg');
    var box = svg.getBoundingClientRect();
    var scale = 4, w = Math.round(box.width * scale), h = Math.round(box.height * scale);
    var img = new Image();
    img.onload = function () {
      var c = document.createElement('canvas');
      c.width = w; c.height = h;
      var ctx = c.getContext('2d');
      ctx.fillStyle = '#fff'; ctx.fillRect(0, 0, w, h);
      ctx.drawImage(img, 0, 0, w, h);
      save(c.toDataURL('image/png'), baseName() + '.png');
    };
    img.src = 'data:image/svg+xml;charset=utf-8,' + encodeURIComponent(s);
  });

  root.querySelectorAll('[data-type]').forEach(function (b) {
    b.addEventListener('click', function () {
      root.querySelectorAll('[data-type]').forEach(function (x) { x.classList.toggle('is-active', x === b); });
      type = b.getAttribute('data-type');
      if (type === 'EAN13' && !/^\d{12,13}$/.test(text.value.trim())) text.value = '200000000001';
      render();
    });
  });
  text.addEventListener('input', render);
  root.querySelector('#code-label').addEventListener('change', render);
  render();
})();
