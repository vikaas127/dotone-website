<?php
// Single source of truth for the DotOne product catalogue.
// Hub pages, the navigation and "related" blocks all read from here.

const ICONS = [
    'box'      => 'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4',
    'cart'     => 'M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z',
    'users'    => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z',
    'trend'    => 'M13 7h8m0 0v8m0-8l-8 8-4-4-6 6',
    'truck'    => 'M9 17a2 2 0 11-4 0 2 2 0 014 0zm10 0a2 2 0 11-4 0 2 2 0 014 0zM13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0',
    'cog'      => 'M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065zM15 12a3 3 0 11-6 0 3 3 0 016 0z',
    'shield'   => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',
    'id'       => 'M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2',
    'rupee'    => 'M9 8h6m-5 0a3 3 0 110 6H9l3 3m-3-6h6m6 1a9 9 0 11-18 0 9 9 0 0118 0z',
    'chart'    => 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z',
    'pin'      => 'M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0zM15 11a3 3 0 11-6 0 3 3 0 016 0z',
    'factory'  => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4',
    'spark'    => 'M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z',
    'chat'     => 'M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z',
    'flow'     => 'M4 5a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1H5a1 1 0 01-1-1V5zm10 0a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 01-1-1V5zM4 15a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1H5a1 1 0 01-1-1v-4zm10 0a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 01-1-1v-4z',
    'bell'     => 'M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9',
    'doc'      => 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z',
    'eye'      => 'M15 12a3 3 0 11-6 0 3 3 0 016 0z M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z',
    'link'     => 'M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1',
    'check'    => 'M5 13l4 4L19 7',
    'phone'    => 'M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z',
];

// ERP pillar. 'agent' links a module to the AI agent that works on its data.
const MODULES = [
    'inventory-management'  => ['name' => 'Inventory Management',  'icon' => 'box',    'agent' => 'inventory', 'summary' => 'Multi-warehouse stock, QR tracking, low-stock alerts and valuation.'],
    'warehouse-management'  => ['name' => 'Warehouse Management',  'icon' => 'truck',  'agent' => 'inventory', 'summary' => 'Inward, storage locations, picking and outward for every warehouse.'],
    'sales-management'      => ['name' => 'Sales Management',      'icon' => 'trend',  'agent' => 'sales',     'summary' => 'Quotation to order, invoice and dispatch in one flow.'],
    'crm'                   => ['name' => 'CRM',                   'icon' => 'users',  'agent' => 'crm',       'summary' => 'Lead pipeline, follow-up reminders, quotations and customer portal.'],
    'purchase-management'   => ['name' => 'Purchase Management',   'icon' => 'cart',   'agent' => 'purchase',  'summary' => 'RFQs, vendor comparison, auto purchase orders with approvals.'],
    'production-management' => ['name' => 'Production Management', 'icon' => 'factory','agent' => 'production','summary' => 'Job cards, layered BOM, WIP tracking and live OEE.'],
    'quality-management'    => ['name' => 'Quality Management',    'icon' => 'shield', 'agent' => 'quality',   'summary' => 'Inspections, rejection logging, rework and Vision AI checks.'],
    'field-sales-tracking'  => ['name' => 'Field Sales Tracking',  'icon' => 'pin',    'agent' => 'sales',     'summary' => 'GPS check-ins, visits and attendance for field teams.'],
    'hrms'                  => ['name' => 'HRMS',                  'icon' => 'id',     'agent' => 'hr',        'summary' => 'Biometric and geo-fenced attendance, shifts and leave.'],
    'payroll'               => ['name' => 'Payroll',               'icon' => 'rupee',  'agent' => 'hr',        'summary' => 'PF, ESI, TDS and payslips generated from attendance.'],
    'accounting'            => ['name' => 'Accounting & Tally Sync', 'icon' => 'doc',  'agent' => 'finance',   'summary' => 'GST invoicing, funds tracking and two-way Tally sync.'],
    'finance-management'    => ['name' => 'Finance Management',    'icon' => 'rupee',  'agent' => 'finance',   'summary' => 'Receivables, payables, cash flow and budgets from live operations.'],
    'reports-analytics'     => ['name' => 'Reports & Analytics',   'icon' => 'chart',  'agent' => 'reporting', 'summary' => 'Live dashboards, MIS and centralised multi-plant reporting.'],
    'business-analytics'    => ['name' => 'Business Analytics',    'icon' => 'trend',  'agent' => 'reporting', 'summary' => 'Trends, comparisons and drill-downs across every department.'],
    'workflow-automation'   => ['name' => 'Workflow Automation',   'icon' => 'flow',   'agent' => 'operations','summary' => 'Approvals, alerts and hand-offs that move work between teams.'],
    'mobile-erp'            => ['name' => 'Mobile ERP',            'icon' => 'phone',  'agent' => null,        'summary' => 'Attendance, field sales, approvals and dashboards on the phone.'],
];

// AI Agents pillar. 'module' is the ERP module whose data the agent reads.
// 'persona' is the agent's short name shown next to its full name; 'color' is its accent colour.
const AGENTS = [
    'inventory'  => ['persona' => 'Stocky', 'color' => '#0E9F6E', 'name' => 'Inventory AI Agent',  'icon' => 'box',     'module' => 'inventory-management',  'summary' => 'Finds items below reorder level, slow-moving stock and shortages before they stop production.'],
    'sales'      => ['persona' => 'Closer', 'color' => '#E8590C', 'name' => 'Sales AI Agent',      'icon' => 'trend',   'module' => 'sales-management',      'summary' => 'Tracks quotations and orders, forecasts demand and reminds your team who to follow up.'],
    'purchase'   => ['persona' => 'Buyer', 'color' => '#7048E8', 'name' => 'Purchase AI Agent',   'icon' => 'cart',    'module' => 'purchase-management',   'summary' => 'Compares vendor quotes, flags price changes and late deliveries, and drafts POs for approval.'],
    'production' => ['persona' => 'Foreman', 'color' => '#1C7ED6', 'name' => 'Production AI Agent', 'icon' => 'factory', 'module' => 'production-management', 'summary' => 'Watches job cards and machines, flags delays and downtime, and checks material before jobs start.'],
    'quality'    => ['persona' => 'Inspector', 'color' => '#0CA678', 'name' => 'Quality AI Agent',    'icon' => 'shield',  'module' => 'quality-management',    'summary' => 'Spots rejection patterns by machine, shift and vendor, and drafts rework or holds for approval.'],
    'finance'    => ['persona' => 'Ledger', 'color' => '#C2410C', 'name' => 'Finance AI Agent',    'icon' => 'rupee',   'module' => 'finance-management',    'summary' => 'Watches receivables and payables, flags overdue customers and drafts payment reminders.'],
    'hr'         => ['persona' => 'Pulse', 'color' => '#D6336C', 'name' => 'HR AI Agent',         'icon' => 'id',      'module' => 'hrms',                  'summary' => 'Flags attendance exceptions, leave clashes and payroll checks before the monthly run.'],
    'crm'        => ['persona' => 'Connect', 'color' => '#0891B2', 'name' => 'CRM AI Agent',        'icon' => 'users',   'module' => 'crm',                   'summary' => 'Keeps the pipeline moving: stale leads, missed follow-ups and next best actions.'],
    'reporting'  => ['persona' => 'Insight', 'color' => '#4C6EF5', 'name' => 'Reporting AI Agent',  'icon' => 'chart',   'module' => 'reports-analytics',     'summary' => 'Answers business questions in plain language and builds the report for you.'],
    'operations' => ['persona' => 'Flow', 'color' => '#5F3DC4', 'name' => 'Operations AI Agent', 'icon' => 'flow',    'module' => 'workflow-automation',   'summary' => 'Looks across departments for stuck approvals and hand-offs, and nudges the right people.'],
];

// Automation pillar
const AUTOMATION = [
    '/solutions/inventory-automation'     => ['name' => 'Inventory Automation',   'icon' => 'box',  'summary' => 'Automatic indents, reorder triggers and stock alerts.'],
    '/solutions/digital-transformation'   => ['name' => 'Digital Transformation', 'icon' => 'factory', 'summary' => 'Industry 4.0: connect machines, workflows and teams.'],
    '/integrations/tally'                 => ['name' => 'Tally Integration',      'icon' => 'link', 'summary' => 'Two-way sync of masters, vouchers and stock with Tally.'],
    '/ai-automation'                      => ['name' => 'AI Automation',          'icon' => 'spark', 'summary' => 'Agents and workflows that do the routine work, with your approval.'],
];
