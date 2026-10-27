(function () {
  var root = document.querySelector('[data-salary]');
  if (!root) return;
  var $ = function (id) { return root.querySelector('#sal-' + id); };
  var inr = new Intl.NumberFormat('en-IN', { style: 'currency', currency: 'INR', maximumFractionDigits: 0 });

  // New tax regime, Budget 2025 (unchanged by Budget 2026). PF wage ceiling ₹25,000 from 17 Sep 2026 (S.O. 5109(E)).
  var SLABS = [[400000, 0], [800000, 0.05], [1200000, 0.10], [1600000, 0.15], [2000000, 0.20], [2400000, 0.25], [Infinity, 0.30]];
  var STANDARD_DEDUCTION = 75000, REBATE_LIMIT = 1200000, CESS = 0.04;
  var PF_RATE = 0.12, PF_CEILING = 25000, ESI_LIMIT = 21000, ESI_EMP = 0.0075, ESI_ER = 0.0325, GRATUITY = 0.0481;

  function num(el) { var v = parseFloat(el.value); return isFinite(v) && v >= 0 ? v : 0; }

  function slabTax(income) {
    var tax = 0, lower = 0;
    for (var i = 0; i < SLABS.length; i++) {
      var upper = SLABS[i][0];
      if (income > lower) tax += (Math.min(income, upper) - lower) * SLABS[i][1];
      lower = upper;
    }
    return tax;
  }

  function surchargeRate(income) {
    if (income > 20000000) return 0.25;
    if (income > 10000000) return 0.15;
    if (income > 5000000) return 0.10;
    return 0;
  }

  function incomeTax(taxable) {
    if (taxable <= REBATE_LIMIT) return 0;
    // Marginal relief: tax may not exceed the income above the rebate limit
    var tax = Math.min(slabTax(taxable), taxable - REBATE_LIMIT);
    tax += tax * surchargeRate(taxable);
    return tax * (1 + CESS);
  }

  function line(label, value, total) {
    return '<div class="tool-line' + (total ? ' is-total' : '') + '"><span>' + label + '</span><b>' + inr.format(value) + '</b></div>';
  }

  function render() {
    var ctc = num($('ctc'));
    var basic = ctc * Math.min(num($('basic')), 100) / 100;
    var pfWage = $('pfcap').checked ? Math.min(basic / 12, PF_CEILING) * 12 : basic;
    var pf = pfWage * PF_RATE;
    var grat = $('grat').checked ? basic * GRATUITY : 0;
    var beforeEsi = Math.max(0, ctc - pf - grat);
    var gross = beforeEsi, esiEr = 0, esiEmp = 0;
    if (beforeEsi > 0 && beforeEsi / (1 + ESI_ER) / 12 <= ESI_LIMIT) {
      gross = beforeEsi / (1 + ESI_ER);
      esiEr = gross * ESI_ER;
      esiEmp = gross * ESI_EMP;
    }
    var pt = num($('pt')) * 12;
    var tax = incomeTax(Math.max(0, gross - STANDARD_DEDUCTION));
    var inHand = Math.max(0, gross - pf - esiEmp - pt - tax);

    root.querySelector('[data-main]').textContent = inr.format(inHand / 12);
    root.querySelector('[data-lines]').innerHTML =
      line('Annual CTC', ctc) +
      line('Employer PF', pf) +
      (esiEr ? line('Employer ESI', esiEr) : '') +
      (grat ? line('Gratuity', grat) : '') +
      line('Gross salary', gross, true) +
      line('Employee PF', pf) +
      (esiEmp ? line('Employee ESI', esiEmp) : '') +
      line('Professional tax', pt) +
      line('Income tax (new regime)', tax) +
      line('Annual in-hand salary', inHand, true);
  }

  root.querySelectorAll('input').forEach(function (el) { el.addEventListener('input', render); el.addEventListener('change', render); });
  render();
})();
