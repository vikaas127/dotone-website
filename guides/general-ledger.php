<?php
$page = [
    'path' => '/guides/general-ledger',
    'title' => 'General Ledger and Bank Reconciliation Explained | DotOne',
    'description' => 'General ledger vs journal entries explained with examples, how to record transactions, and how to do a bank reconciliation step by step with a worked example.',
    'breadcrumbs' => [['Guides', '/guides'], ['General Ledger and Bank Reconciliation', '/guides/general-ledger']],
    'article' => ['published' => '2026-10-27'],
    'eyebrow' => 'Finance Guide',
    'read_time' => '9 min',
    'h1' => 'General Ledger, Journal Entries and Bank Reconciliation',
    'intro' => 'Every rupee a business earns or spends is recorded twice: first as a journal entry, then in the general ledger accounts it affects. Bank reconciliation is the monthly check that those books agree with the bank. This guide explains all three with examples.',
    'sections' => [
        ['journal', 'What is a journal entry?', '
<p>A <strong>journal entry</strong> records one transaction in date order, showing which accounts are <strong>debited</strong> and which are <strong>credited</strong>. Under double-entry bookkeeping, total debits always equal total credits.</p>
<p>Example: on 5 October you buy raw material worth ₹50,000 plus 18% GST on credit from a vendor.</p>
<div class="guide-table-wrap"><table>
    <thead><tr><th>Account</th><th class="num">Debit (₹)</th><th class="num">Credit (₹)</th></tr></thead>
    <tbody>
        <tr><td>Purchases (raw material)</td><td class="num">50,000</td><td class="num"></td></tr>
        <tr><td>Input CGST</td><td class="num">4,500</td><td class="num"></td></tr>
        <tr><td>Input SGST</td><td class="num">4,500</td><td class="num"></td></tr>
        <tr><td>Vendor (sundry creditor)</td><td class="num"></td><td class="num">59,000</td></tr>
        <tr class="total"><td>Total</td><td class="num">59,000</td><td class="num">59,000</td></tr>
    </tbody>
</table></div>
'],
        ['ledger', 'What is a general ledger?', '
<p>The <strong>general ledger</strong> is the set of all your accounts, such as cash, bank, sales, purchases, each vendor and customer, GST, and expenses, with every journal entry posted to the accounts it touches. The journal tells you what happened on a day; the ledger tells you the balance of each account.</p>
<p>The purchase above appears in four ledger accounts: Purchases goes up by ₹50,000, Input CGST and Input SGST by ₹4,500 each, and the vendor\'s account shows ₹59,000 owed.</p>
'],
        ['journal-vs-ledger', 'Journal entry vs general ledger', '
<div class="guide-table-wrap"><table>
    <thead><tr><th></th><th>Journal</th><th>General ledger</th></tr></thead>
    <tbody>
        <tr><td>Order</td><td>By date, transaction by transaction</td><td>By account</td></tr>
        <tr><td>Answers</td><td>What happened on 5 October?</td><td>How much do we owe this vendor?</td></tr>
        <tr><td>Stage</td><td>Book of first entry</td><td>Book of final entry</td></tr>
        <tr><td>Leads to</td><td>Ledger postings</td><td>Trial balance, P&amp;L and balance sheet</td></tr>
    </tbody>
</table></div>
'],
        ['bank-rec', 'What is bank reconciliation?', '
<p><strong>Bank reconciliation</strong> compares the bank balance in your books with the balance on the bank statement and explains every difference. The two rarely match on the day, because of timing: cheques you issued that have not been presented, deposits the bank has not yet credited, and charges or interest you have not yet booked.</p>
'],
        ['bank-rec-example', 'Bank reconciliation: a worked example', '
<p>At 31 October, the books show a bank balance of ₹4,20,000 and the bank statement shows ₹4,61,500.</p>
<div class="guide-table-wrap"><table>
    <thead><tr><th>Item</th><th class="num">₹</th></tr></thead>
    <tbody>
        <tr><td>Balance as per bank statement</td><td class="num">4,61,500</td></tr>
        <tr><td>Less: cheques issued but not yet presented (vendor payment, cheque 004512)</td><td class="num">(65,000)</td></tr>
        <tr><td>Add: deposit made on 31 October, not yet credited by the bank</td><td class="num">25,000</td></tr>
        <tr class="total"><td>Adjusted bank balance</td><td class="num">4,21,500</td></tr>
        <tr><td>Balance as per books</td><td class="num">4,20,000</td></tr>
        <tr><td>Add: interest credited by the bank, not yet booked</td><td class="num">2,000</td></tr>
        <tr><td>Less: bank charges, not yet booked</td><td class="num">(500)</td></tr>
        <tr class="total"><td>Adjusted book balance</td><td class="num">4,21,500</td></tr>
    </tbody>
</table></div>
<p>Both sides come to ₹4,21,500, so the bank is reconciled. The interest and charges are then booked in the ledger; the open cheque and deposit clear on their own in November.</p>
'],
        ['steps', 'How to reconcile your bank account each month', '
<ol>
    <li>Get the bank statement for the month, ideally as a file you can import.</li>
    <li>Match each statement line to the entry in your books: receipts to receipts, payments to payments.</li>
    <li>List the items in the books but not on the statement (cheques not presented, deposits not credited).</li>
    <li>List the items on the statement but not in the books (charges, interest, direct debits, NEFT receipts) and book them.</li>
    <li>Check that the adjusted balances agree. If they do not, look for amounts entered twice or with digits swapped.</li>
</ol>
'],
        ['in-dotone', 'Ledger and bank reconciliation in DotOne', '
<p>DotOne <a href="/accounting">accounting</a> keeps a chart of accounts, journal entries and vouchers, and posts sales, purchases and payroll to the general ledger. Bank statements can be imported, banking rules match recurring lines, and bank reconciliation is done in the same system, alongside trial balance, P&amp;L, balance sheet and cash and bank books. If your CA works in Tally, DotOne can also sync with Tally through the <a href="/integrations/tally">Tally connector</a>.</p>
'],
    ],
    'faq' => [
        ['What is the difference between a journal entry and a general ledger?', 'A journal entry records one transaction in date order with its debits and credits. The general ledger groups those entries by account, so you can see the balance of each account.'],
        ['Why do the bank statement and the books not match?', 'Usually because of timing: cheques not yet presented, deposits not yet credited, and bank charges or interest not yet recorded in the books.'],
        ['How often should bank reconciliation be done?', 'At least every month, and weekly or daily for accounts with many transactions.'],
        ['What is a trial balance?', 'A list of every ledger account with its debit or credit balance. Total debits must equal total credits; if they do not, there is an error in the postings.'],
        ['Can DotOne do bank reconciliation?', 'Yes. Bank statements can be imported, banking rules match recurring lines, and reconciliation is done in DotOne [accounting](/accounting).'],
    ],
    'related' => [
        ['Cloud Accounting Software', '/accounting', 'GST invoicing, ledgers and Tally sync.'],
        ['What Is a Cash Flow Statement?', '/guides/cash-flow-statement', 'How cash moves through operating, investing and financing.'],
        ['What Is Working Capital?', '/guides/working-capital', 'Receivables, stock and payables in days.'],
    ],
    'cta_heading' => 'Close the month without the chase',
    'cta_text' => 'In a 30-minute demo we import a bank statement, match it and show the reconciled balance in DotOne.',
];
include __DIR__ . '/../includes/templates/guide.php';
