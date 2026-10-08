<?php
require_once __DIR__ . '/includes/site.php';
$page = [
    'path' => '/documentation',
    'title' => 'Documentation and Setup Guides | DotOne',
    'description' => 'Product documentation for DotOne: module guides, setup, configuration and administration, so your team can run every part of the platform.',
    'eyebrow' => 'Documentation',
    'h1' => 'DotOne Documentation',
    'intro' => 'Guides, setup help and API references to deploy, configure and integrate DotOne, whether you are an IT team, a system integrator or a plant manager.',
    'blocks' => [
        ['heading' => 'Start here', 'text' => 'Find the guide or reference you need.', 'cards' => [
            ['/guides', 'Guides', 'doc', 'Step-by-step guides for setting up and running each part of DotOne.'],
            ['/guides/what-is-erp', 'What is ERP?', 'spark', 'A plain introduction to ERP and how DotOne fits your business.'],
            ['/guides/bom-setup', 'BOM Setup', 'factory', 'How to set up bills of materials for production.'],
            ['/integrations/tally', 'Tally Integration', 'link', 'Two-way sync of masters, vouchers and stock with Tally.'],
            ['/api-reference', 'API Reference', 'cog', 'REST APIs, webhooks and data models for integrations.'],
            ['mailto:support@techdotbit.com?subject=DotOne%20support', 'Support', 'chat', 'Email support@techdotbit.com for help with setup or configuration.'],
        ]],
        ['heading' => 'Getting set up', 'text' => 'DotOne runs in the cloud or on-premise. Most teams follow these steps.', 'list' => [
            ['1. Create your account', 'Set up your company, users and roles.'],
            ['2. Configure plants and lines', 'Add locations, warehouses, production lines and shifts.'],
            ['3. Connect cameras and machines', 'Link existing CCTV and machines where you use Vision AI or production monitoring.'],
            ['4. Enable modules and go live', 'Switch on the modules you need, run a pilot, then roll out fully.'],
        ]],
        ['heading' => 'Good practice', 'text' => 'Habits that make a rollout go smoothly.', 'list' => [
            ['Pilot before scaling', 'Start with one line or process and check the workflow before a full rollout.'],
            ['Set roles carefully', 'Give admins, managers and operators only the access they need.'],
            ['Check data early', 'Validate inventory, production and quality data during the first 30 days.'],
            ['Automate reports', 'Schedule daily and weekly reports so managers see the numbers without asking.'],
        ]],
    ],
    'faq' => [
        ['Where do I start?', 'Begin with the guides. If you are new to ERP, read What is ERP? first, then follow the setup steps for your modules.'],
        ['Can DotOne connect to our other systems?', 'Yes. DotOne syncs with Tally and offers REST APIs and webhooks for other ERP, MES and BI tools. See the API reference.'],
        ['What user roles are there?', 'Admins handle configuration, integrations and user management. Managers get visibility and approvals. Operators record production, inventory and quality entries.'],
        ['How do I get help?', 'Email support@techdotbit.com or visit the support page, and the team will help with setup or configuration questions.'],
    ],
    'cta_heading' => 'Need help getting set up?',
    'cta_text' => 'Book a demo or talk to our team about deploying and configuring DotOne for your business.',
];
include __DIR__ . '/includes/templates/hub.php';
