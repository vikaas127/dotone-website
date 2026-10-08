<?php
require_once __DIR__ . '/includes/site.php';
$page = [
    'path' => '/about',
    'title' => 'About DotOne | Made in India by TechDotBit',
    'description' => 'DotOne is built by TechDotBit for Indian businesses: one platform for ERP, AI agents and automation. Learn what we build and why.',
    'eyebrow' => 'About',
    'h1' => 'About DotOne',
    'intro' => 'DotOne is a business management platform built in India by TechDotBit Pvt Ltd for MSME manufacturers and distributors. It brings ERP, AI agents and automation together so growing businesses can run on one system instead of spreadsheets and disconnected apps.',
    'blocks' => [
        ['heading' => 'What we believe', 'text' => 'Software for growing businesses should be complete, affordable and quick to adopt.', 'list' => [
            ['Built for MSMEs', 'Designed around how Indian manufacturers and distributors actually work: GST, Tally, Indian payroll and the shop floor.'],
            ['One platform', 'ERP modules, AI agents and automation share one database, so nothing has to be re-entered.'],
            ['AI that does real work', 'Agents analyse your data and prepare actions, always within the permissions you set.'],
            ['Live in weeks', 'A standard implementation framework gets most teams live in 4 to 6 weeks.'],
        ]],
        ['heading' => 'Work with us', 'text' => 'Join the team, become a partner, or talk to us about your business.', 'cards' => [
            ['/careers', 'Careers', 'users', 'Open roles building ERP and AI agents for Indian businesses.'],
            ['/partners', 'Partners', 'link', 'Implementation, reseller and technology partnerships.'],
            ['/contact', 'Contact', 'chat', 'Sales, support and general enquiries.'],
        ]],
    ],
    'cta_heading' => 'See what DotOne can do for your business',
    'cta_text' => 'Book a 30-minute demo with a product specialist.',
];
include __DIR__ . '/includes/templates/hub.php';
