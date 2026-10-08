<?php
// Pricing plans, copied from the DotOne admin plan settings. Edit here and the pricing page updates.
// price: monthly amount in INR, or null to show "Talk to us".
// limits: number, 'Unlimited', or null (not included in the plan). Keys must match PRICING_ROWS.
const PRICING_ROWS = [
    'staff'      => 'Staff users',
    'customers'  => 'Customers',
    'contacts'   => 'Contacts',
    'contracts'  => 'Contracts',
    'invoices'   => 'Invoices',
    'proforma'   => 'Proforma invoices',
    'creditnotes'=> 'Credit notes',
    'quotations' => 'Quotations',
    'projects'   => 'Projects',
    'tasks'      => 'Tasks',
    'tickets'    => 'Tickets',
    'leads'      => 'Leads',
    'items'      => 'Items',
    'storage'    => 'Storage',
];

const U = 'Unlimited';

return [
    [
        'name' => 'Starter',
        'tagline' => 'For small teams starting with leads, customers and support.',
        'price' => null,
        'cta' => ['Talk to Us', '/contact'],
        'limits' => ['staff' => null, 'customers' => U, 'contacts' => null, 'contracts' => null, 'invoices' => null, 'proforma' => null, 'creditnotes' => null, 'quotations' => null, 'projects' => null, 'tasks' => null, 'tickets' => U, 'leads' => U, 'items' => null, 'storage' => null],
    ],
    [
        'name' => 'Growth',
        'tagline' => 'For growing teams running sales, billing and projects.',
        'price' => 15000,
        'cta' => ['Book a Demo', '/demo'],
        'limits' => ['staff' => 50, 'customers' => U, 'contacts' => U, 'contracts' => U, 'invoices' => U, 'proforma' => U, 'creditnotes' => U, 'quotations' => U, 'projects' => 150, 'tasks' => U, 'tickets' => U, 'leads' => U, 'items' => U, 'storage' => '20 GB'],
    ],
    [
        'name' => 'Professional',
        'tagline' => 'Everything unlimited for established businesses.',
        'price' => 22000,
        'popular' => true,
        'cta' => ['Book a Demo', '/demo'],
        'limits' => ['staff' => 50, 'customers' => U, 'contacts' => U, 'contracts' => U, 'invoices' => U, 'proforma' => U, 'creditnotes' => U, 'quotations' => U, 'projects' => U, 'tasks' => U, 'tickets' => U, 'leads' => U, 'items' => U, 'storage' => U],
    ],
    [
        'name' => 'Business',
        'tagline' => 'Unlimited records with large storage for growing data.',
        'price' => 26000,
        'cta' => ['Book a Demo', '/demo'],
        'limits' => ['staff' => 50, 'customers' => U, 'contacts' => U, 'contracts' => U, 'invoices' => U, 'proforma' => U, 'creditnotes' => U, 'quotations' => U, 'projects' => U, 'tasks' => U, 'tickets' => U, 'leads' => U, 'items' => U, 'storage' => '20 GB'],
    ],
    [
        'name' => 'Enterprise AI',
        'tagline' => 'DotOne with AI agents working across your business.',
        'price' => 35000,
        'cta' => ['Talk to Sales', '/contact'],
        'limits' => ['staff' => 50, 'customers' => 200, 'contacts' => U, 'contracts' => U, 'invoices' => 200, 'proforma' => 200, 'creditnotes' => U, 'quotations' => U, 'projects' => 200, 'tasks' => 1000, 'tickets' => U, 'leads' => U, 'items' => 1000, 'storage' => U],
    ],
];
