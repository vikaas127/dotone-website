<?php
// Keyword landing page. Facts mirror the module and agent pages it links to.
$page = [
    'path' => '/ai-procurement-software',
    'title' => 'AI Procurement Software for Manufacturers | DotOne',
    'description' => 'AI procurement software: compare vendor quotes on price, terms and delivery history, flag rate increases and late deliveries, and draft POs for approval.',
    'breadcrumbs' => [['Solutions', '/solutions'], ['AI procurement software', '/ai-procurement-software']],
    'eyebrow' => 'AI procurement',
    'h1' => 'AI Procurement Software',
    'intro' => 'Buy better without more people in purchase. DotOne\'s Purchase AI Agent works on your indents, vendor quotes, purchase orders and goods receipts, suggests the best overall vendor with the reasons, and prepares the purchase order for your approval.',
    'highlights' => ['Quote comparison', 'Rate change alerts', 'Late delivery alerts', 'Draft POs'],
    'capabilities_heading' => 'What AI adds to procurement',
    'capabilities_intro' => 'Your RFQ, PO and GRN process stays the same. The agent reads it and does the comparison work.',
    'capabilities' => [
        ['chart', 'Vendor comparison', 'Price, payment terms and delivery date side by side, with each vendor\'s delivery record.'],
        ['trend', 'Rate changes', 'Rates that have gone up since the last order are flagged.'],
        ['truck', 'Late deliveries', 'Purchase orders past their due date are listed for follow-up.'],
        ['doc', 'RFQs and quotes', 'Send one RFQ to several vendors and collect their replies against it.'],
        ['cart', 'Draft purchase orders', 'The agent drafts the PO from the approved indent for your team to check.'],
        ['shield', 'Approval rules', 'POs go to the approver you set before they reach the vendor.'],
    ],
    'workflow_intro' => 'Procurement with an AI agent in the loop.',
    'workflow' => [
        ['Indent', 'A requirement is raised, or low stock raises it automatically.'],
        ['RFQ', 'Quotes are requested from chosen vendors.'],
        ['Compare', 'The agent compares quotes and suggests a vendor with reasons.'],
        ['Approve', 'The PO is routed for approval.'],
        ['Receive', 'Goods arrive against the PO with a GRN.'],
    ],
    'reports' => ['Vendor comparison by item', 'Rate changes by vendor', 'Late deliveries', 'Spend by vendor and category', 'PO approval time', 'Vendor delivery performance'],
    'connected_intro' => 'AI procurement uses these modules.',
    'connected' => ['purchase-management', 'inventory-management', 'workflow-automation', 'accounting'],
    'agent' => 'purchase',
    'agent_questions' => ['Which vendor gives the best overall deal for PVC resin?', 'Which rates have gone up this quarter?', 'Which deliveries are late?'],
    'faq' => [
        ['What does AI procurement software do?', 'It reads indents, quotes, purchase orders and receipts, compares vendors, flags price and delivery problems, and drafts purchase orders. See the [Purchase AI Agent](/ai-agents/purchase).'],
        ['How does it pick the best vendor?', 'It compares price, payment terms and delivery date with each vendor\'s past delivery record, then shows why it suggests one.'],
        ['Can it send POs on its own?', 'Only if you allow it. POs follow the approval rules you set.'],
        ['Do purchase bills sync with Tally?', 'Yes. Purchase invoices and debit notes sync to Tally Prime. See [Tally integration](/integrations/tally).'],
    ],
    'cta_heading' => 'Compare vendors with AI',
    'cta_text' => 'Book a 30-minute demo and see the Purchase AI Agent compare three vendor quotes.',
];
include __DIR__ . '/includes/templates/module.php';
