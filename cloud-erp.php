<?php
// Keyword landing page. Facts mirror the module and agent pages it links to.
$page = [
    'path' => '/cloud-erp',
    'title' => 'Cloud ERP Platform for Indian Businesses | DotOne',
    'description' => 'DotOne is a cloud ERP platform: sales, stock, production, HR and accounts in one browser-based system with mobile apps, encryption and automated backups.',
    'breadcrumbs' => [['Solutions', '/solutions'], ['Cloud ERP', '/cloud-erp']],
    'eyebrow' => 'Cloud ERP',
    'h1' => 'Cloud ERP Platform',
    'intro' => 'Run sales, purchase, inventory, production, HR, payroll and accounts in one cloud ERP platform. There are no servers to buy or maintain: your team works in the browser and on the mobile app, and every department sees the same live data.',
    'highlights' => ['Nothing to install', 'Web and mobile apps', 'Encrypted, backed up', 'Live in 4–6 weeks'],
    'capabilities_heading' => 'Everything a cloud ERP should cover',
    'capabilities_intro' => 'One database for the whole business, reached from anywhere your team works.',
    'capabilities' => [
        ['cog', 'No servers to run', 'DotOne runs in the cloud, so there is no hardware to buy, no software to install and no upgrade project every few years.'],
        ['phone', 'Web and mobile', 'Work from the browser in the office, and use the mobile app for field sales, attendance and approvals.'],
        ['shield', 'Security built in', 'Data is encrypted in transit and at rest, access is role-based with audit logs, and backups are automated.'],
        ['flow', 'One database', 'Sales, stock, production, people and accounts share one record, so nothing is re-entered between departments.'],
        ['rupee', 'Monthly plans in INR', 'Start on the free Starter plan and move to paid plans from ₹15,000 a month as you add modules.'],
        ['link', 'Tally and GST', 'GST invoicing and e-way bills are built in, and vouchers can sync two ways with Tally Prime.'],
    ],
    'workflow_intro' => 'Moving from desktop software or spreadsheets to cloud ERP follows four steps.',
    'workflow' => [
        ['Discover', 'We map your current process, masters and reports.'],
        ['Set up', 'Items, BOMs, customers, vendors and opening stock are imported and roles are configured.'],
        ['Train', 'Each team is trained on its own screens.'],
        ['Go live', 'You run on DotOne with our team on call.'],
        ['Grow', 'Add modules, plants and users as the business grows.'],
    ],
    'reports' => ['Sales and receivables by customer', 'Stock value by warehouse', 'Production output and OEE', 'Payroll and attendance summary', 'Purchase commitments by vendor', 'Monthly MIS from live data'],
    'connected_intro' => 'Every module runs on the same cloud database.',
    'connected' => ['inventory-management', 'sales-management', 'production-management', 'accounting'],
    'agent' => 'reporting',
    'agent_questions' => ['What were net sales by month this year?', 'Which customers have overdue invoices?', 'Build this month\'s MIS report.'],
    'faq' => [
        ['What is a cloud ERP platform?', 'Enterprise resource planning software that runs on the internet instead of on your own servers. You use it in a browser or app, and the provider handles hosting, backups and updates. Our guide [what is cloud ERP](/guides/what-is-cloud-erp) explains it in more detail.'],
        ['Is our data safe in the cloud?', 'Data is encrypted in transit and at rest, access is role-based with audit logs, and backups are automated. See our [security practices](/security).'],
        ['How much does cloud ERP cost?', 'DotOne has a free Starter plan and paid plans from ₹15,000 a month, billed monthly in INR. See [pricing](/pricing).'],
        ['How long does it take to go live?', 'Most teams go live in 4 to 6 weeks with a standard rollout.'],
    ],
    'cta_heading' => 'See DotOne cloud ERP on your data',
    'cta_text' => 'Book a 30-minute demo and we will walk one order from enquiry to dispatch and invoice.',
];
include __DIR__ . '/includes/templates/module.php';
