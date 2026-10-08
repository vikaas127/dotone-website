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

// Modules shown on cards and as tick rows in the comparison table: key => [label, page]
const PRICING_MODULES = [
    'crm'        => ['CRM', '/crm'],
    'support'    => ['Support tickets', '/crm'],
    'sales'      => ['Sales', '/sales-management'],
    'field'      => ['Field Sales Tracking', '/field-sales-tracking'],
    'hrms'       => ['HRMS', '/hrms'],
    'payroll'    => ['Payroll', '/payroll'],
    'inventory'  => ['Inventory', '/inventory-management'],
    'purchase'   => ['Purchase', '/purchase-management'],
    'production' => ['Manufacturing', '/production-management'],
    'quality'    => ['Quality', '/quality-management'],
    'agents'     => ['AI agent for each module', '/ai-agents'],
];

// Feature groups: how limits are grouped on plan cards and in the comparison table.
const PRICING_GROUPS = [
    ['Team',              'users',  ['staff']],
    ['CRM',               'users',  ['customers', 'contacts', 'leads']],
    ['Sales and billing', 'doc',    ['quotations', 'contracts', 'invoices', 'proforma', 'creditnotes']],
    ['Projects',          'flow',   ['projects', 'tasks']],
    ['Support',           'chat',   ['tickets']],
    ['Inventory',         'box',    ['items']],
    ['Storage',           'cog',    ['storage']],
];

const U = 'Unlimited';

return [
    [
        'name' => 'Starter',
        'tagline' => 'For small teams starting with leads, customers and support.', 'base' => null,
        'price' => null,
        'modules' => ['crm', 'support'],
        'cta' => ['Talk to Us', '/contact'],
        'limits' => ['staff' => null, 'customers' => U, 'contacts' => null, 'contracts' => null, 'invoices' => null, 'proforma' => null, 'creditnotes' => null, 'quotations' => null, 'projects' => null, 'tasks' => null, 'tickets' => U, 'leads' => U, 'items' => null, 'storage' => '2 GB'],
    ],
    [
        'name' => 'Growth',
        'tagline' => 'Sales, CRM, field sales, HR and payroll for growing teams.', 'base' => null,
        'price' => 15000,
        'modules' => ['crm', 'support', 'sales', 'field', 'hrms', 'payroll'],
        'cta' => ['Book a Demo', '/demo'],
        'limits' => ['staff' => 50, 'customers' => U, 'contacts' => U, 'contracts' => U, 'invoices' => U, 'proforma' => U, 'creditnotes' => U, 'quotations' => U, 'projects' => 150, 'tasks' => U, 'tickets' => U, 'leads' => U, 'items' => U, 'storage' => '20 GB'],
    ],
    [
        'name' => 'Professional',
        'tagline' => 'Adds inventory and purchase for businesses that buy and stock.', 'base' => 'Growth',
        'price' => 22000,
        'popular' => true,
        'modules' => ['crm', 'support', 'sales', 'field', 'hrms', 'payroll', 'inventory', 'purchase'],
        'cta' => ['Book a Demo', '/demo'],
        'limits' => ['staff' => 50, 'customers' => U, 'contacts' => U, 'contracts' => U, 'invoices' => U, 'proforma' => U, 'creditnotes' => U, 'quotations' => U, 'projects' => U, 'tasks' => U, 'tickets' => U, 'leads' => U, 'items' => U, 'storage' => '20 GB'],
    ],
    [
        'name' => 'Business',
        'tagline' => 'Adds manufacturing and quality for businesses that make.', 'base' => 'Professional',
        'price' => 26000,
        'modules' => ['crm', 'support', 'sales', 'field', 'hrms', 'payroll', 'inventory', 'purchase', 'production', 'quality'],
        'cta' => ['Book a Demo', '/demo'],
        'limits' => ['staff' => 50, 'customers' => U, 'contacts' => U, 'contracts' => U, 'invoices' => U, 'proforma' => U, 'creditnotes' => U, 'quotations' => U, 'projects' => U, 'tasks' => U, 'tickets' => U, 'leads' => U, 'items' => U, 'storage' => '20 GB'],
    ],
    [
        'name' => 'Enterprise AI',
        'tagline' => 'Everything in Business, with an AI agent working on each module.', 'base' => 'Business',
        'price' => 35000,
        'modules' => ['crm', 'support', 'sales', 'field', 'hrms', 'payroll', 'inventory', 'purchase', 'production', 'quality', 'agents'],
        'cta' => ['Talk to Sales', '/contact'],
        'limits' => ['staff' => 50, 'customers' => 200, 'contacts' => U, 'contracts' => U, 'invoices' => 200, 'proforma' => 200, 'creditnotes' => U, 'quotations' => U, 'projects' => 200, 'tasks' => 1000, 'tickets' => U, 'leads' => U, 'items' => 1000, 'storage' => '20 GB'],
    ],
];
