<?php
// Keyword landing page. Facts mirror the module and agent pages it links to.
$page = [
    'path' => '/low-cost-manufacturing-software',
    'title' => 'Low-Cost Manufacturing Software for India | DotOne',
    'description' => 'Affordable manufacturing software for Indian MSMEs: BOM, production, inventory, quality, purchase and GST in one cloud ERP, on monthly plans in INR.',
    'breadcrumbs' => [['Solutions', '/solutions'], ['Low-cost manufacturing software', '/low-cost-manufacturing-software']],
    'eyebrow' => 'For MSME manufacturers',
    'h1' => 'Low-Cost Manufacturing Software for Indian MSMEs',
    'intro' => 'Small and mid-sized factories need the same control as large ones, without an enterprise budget. DotOne gives you BOMs, production, stores, quality, purchase and GST billing in one cloud system, on monthly plans published in rupees.',
    'highlights' => ['Published INR pricing', 'Manufacturing from ₹26,000/mo', 'No server cost', 'Live in 4–6 weeks'],
    'capabilities_heading' => 'Where the savings come from',
    'capabilities_intro' => 'The cost of manufacturing software is more than the licence. DotOne keeps the other costs low too.',
    'capabilities' => [
        ['rupee', 'Published monthly pricing', 'Plans are listed in INR on the pricing page, so you know the cost before the first call.'],
        ['cog', 'No hardware or IT team', 'It runs in the cloud: no servers, no installation and no upgrade projects.'],
        ['flow', 'Fast rollout', 'A standard rollout takes most teams 4 to 6 weeks, which keeps implementation cost down.'],
        ['link', 'Keep Tally', 'Your accountant can keep working in Tally Prime with two-way sync, so there is no retraining in accounts.'],
        ['factory', 'Start small', 'Begin with the modules you need, such as inventory and production, and add more as you grow.'],
        ['box', 'Fewer losses', 'Reorder alerts, batch tracking and rejection logs cut the stock-outs, excess stock and rework that cost more than software.'],
    ],
    'workflow_intro' => 'What a factory runs on DotOne from order to dispatch.',
    'workflow' => [
        ['Order', 'Sales orders become the production plan.'],
        ['BOM and material', 'Material is checked and reserved against the BOM.'],
        ['Make', 'Job cards track output, downtime and WIP.'],
        ['Check', 'Quality is inspected at receipt and on the line.'],
        ['Dispatch', 'Goods leave with a GST invoice and stock updates.'],
    ],
    'reports' => ['Cost per batch from actual use', 'Stock value and slow movers', 'Target versus actual output', 'Rejection by item and machine', 'Purchase spend by vendor', 'Order to dispatch time'],
    'connected_intro' => 'The modules most small factories start with.',
    'connected' => ['production-management', 'inventory-management', 'purchase-management', 'quality-management'],
    'agent' => 'production',
    'agent_questions' => ['Which job cards are behind plan today?', 'What did rejections cost us this month?', 'Which machines lost the most time this week?'],
    'faq' => [
        ['How much does manufacturing software cost in India?', 'DotOne has a free Starter plan and paid plans from ₹15,000 a month. Manufacturing modules start on the Business plan at ₹26,000 a month. See [pricing](/pricing) for what each plan includes.'],
        ['Is there a setup or implementation fee?', 'Ask our team for a quote based on your scope. Most standard rollouts take 4 to 6 weeks.'],
        ['Can a small factory start with only a few modules?', 'Yes. Start with what you need, such as inventory and production, and add purchase, quality, HR and payroll later.'],
        ['How is this different from a full manufacturing ERP?', 'It is the same product. See [manufacturing ERP](/manufacturing-erp) for the full feature list.'],
    ],
    'cta_heading' => 'See what DotOne costs for your plant',
    'cta_text' => 'Book a 30-minute demo and we will map your factory to the right plan.',
];
include __DIR__ . '/includes/templates/module.php';
