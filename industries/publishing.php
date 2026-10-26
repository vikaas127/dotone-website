<?php
$page = [
    'path' => '/industries/publishing',
    'title' => 'ERP for Publishers and Printers | DotOne',
    'description' => 'ERP for Indian publishers and printing presses: title-wise stock, print jobs with paper costing, distributor and school orders, returns, dues and GST invoicing.',
    'breadcrumbs' => [['Industries', '/industries'], ['Publication', '/industries/publishing']],
    'name' => 'Publication',
    'icon' => 'doc',
    'h1' => 'ERP for Publishers and Printers',
    'intro' => 'DotOne runs book and periodical publishers and the presses that print for them: print runs, paper stock, title-wise inventory, distributor orders and returns. You know what each title has cost, sold and still has in the godown.',
    'challenges' => [
        ['doc', 'Hundreds of titles and editions', 'Each title has editions, reprints and formats. Stock by title is kept in a ledger that is rarely up to date.'],
        ['cart', 'Paper is the biggest cost', 'Paper prices move every few months, and a print run quoted on last quarter\'s rate can lose money.'],
        ['truck', 'Season rush and returns', 'School and academic titles ship in a few weeks a year, and unsold copies come back months later from distributors.'],
        ['rupee', 'Dues spread across many parties', 'Distributors, booksellers and institutions all pay on different terms, and following up is done from memory.'],
    ],
    'workflow' => [
        ['Plan the print run', 'A print job is raised for the title and quantity, with paper, plates, printing and binding in its BOM.'],
        ['Buy and issue paper', 'Paper is bought against the plan, received by batch and issued to the job card.'],
        ['Print and bind', 'Printing, folding and binding stages are logged, and finished copies are received into the godown.'],
        ['Supply to the trade', 'Orders from distributors, booksellers and schools are packed and dispatched with GST invoices.'],
        ['Take back returns', 'Unsold copies returned by the trade are received with credit notes, and stock and dues update.'],
    ],
    'modules' => ['production-management', 'inventory-management', 'sales-management', 'purchase-management', 'finance-management', 'accounting'],
    'uses' => [
        ['Title-wise stock', 'Copies by title, edition and godown, with slow titles shown before the next reprint is planned.'],
        ['Print job costing', 'Paper, printing and binding cost per job, from actual issues and purchase rates.'],
        ['Trade orders and returns', 'Orders, dispatches and returns by distributor, with credit notes raised from the return.'],
        ['Party-wise dues', 'Receivables by distributor and institution, with ageing and reminders.'],
    ],
    'faq' => [
        ['Can DotOne track stock for each title and edition?', 'Yes. Each title and edition can be its own item, with stock by godown and a movement history from printing to sale and return.'],
        ['How are returns from distributors handled?', 'Returned copies are received back into stock and a credit note is raised against the party. Credit notes sync to [Tally](/integrations/tally) with the sales invoices.'],
        ['Can a press use DotOne for outside print jobs?', 'Yes. Print jobs for outside customers can be quoted, planned on job cards and invoiced in the same way as your own titles.'],
        ['Does DotOne handle author royalties?', 'Royalty calculation is not a standard feature. Title-wise sales reports give the figures your team uses for royalty statements, and any extra setup can be discussed during onboarding.'],
    ],
    'cta_heading' => 'Plan a print run in DotOne',
    'cta_text' => 'In a 30-minute demo we cost a sample print job, receive the copies and supply them to a distributor, including a return.',
];
include dirname(__DIR__) . '/includes/templates/industry.php';
