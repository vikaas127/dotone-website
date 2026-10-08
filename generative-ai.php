<?php
require_once __DIR__ . '/includes/site.php';
$cards = [];
foreach (['reporting', 'sales', 'crm', 'finance', 'inventory', 'purchase'] as $slug) {
    $a = AGENTS[$slug];
    $cards[] = ['/ai-agents/' . $slug, $a['name'], $a['icon'], $a['summary']];
}
$page = [
    'path' => '/generative-ai',
    'title' => 'Generative AI for Business Operations | DotOne',
    'description' => 'How DotOne uses generative AI on live ERP data: ask questions in plain language and draft reports, summaries, quotations and reminders for approval.',
    'eyebrow' => 'Generative AI',
    'h1' => 'Generative AI for Business Operations',
    'intro' => 'Generative AI is useful in business when it writes from your own data. In DotOne it reads live ERP records to answer questions in plain language and draft reports, summaries, quotations and reminders. A person reviews the draft before anything goes out.',
    'blocks' => [
        ['heading' => 'What it does in DotOne', 'text' => 'Generative AI in DotOne is used for everyday writing and answering that would otherwise take someone an hour with a spreadsheet.', 'list' => [
            ['Answer questions', 'Ask "which customers are overdue more than 30 days?" and get the answer with the numbers behind it.'],
            ['Draft reports', 'Build a weekly MIS or a stock summary from live data, ready to check and share.'],
            ['Write summaries', 'Summarise a customer\'s history, an order\'s status or a month of production in a few lines.'],
            ['Draft quotations', 'Prepare a quotation from item and price data for the salesperson to check and send.'],
            ['Draft reminders', 'Write payment and follow-up reminders based on overdue invoices and open quotations.'],
            ['Explain changes', 'Point out what has moved since last week and which records are behind it.'],
        ]],
        ['heading' => 'Drafts, not decisions', 'text' => 'Generative AI can be wrong, so DotOne treats its output as a draft. The work stays with your team.', 'list' => [
            ['Built from your records', 'Answers and drafts come from the data in your DotOne account, not from general knowledge about your business.'],
            ['Human approval', 'Quotations, reminders and other outgoing documents wait for a person to review and approve them.'],
            ['Role-based access', 'The AI only reads the modules and records the user\'s role allows.'],
            ['Shown with the numbers', 'Answers come with the table or records they are based on, so they can be checked.'],
        ]],
        ['heading' => 'Where you meet it', 'text' => 'Generative AI is part of the DotOne AI agents. Each agent uses it to answer questions and draft work for its area.', 'cards' => $cards],
    ],
    'faq' => [
        ['What is generative AI in an ERP?', 'It is AI that writes text, such as answers, summaries, reports and drafts, based on the data in the ERP. In DotOne it works through the [AI agents](/ai-agents).'],
        ['Does it send anything without approval?', 'No. Quotations, reminders and other outgoing documents are drafts until a person reviews and approves them.'],
        ['Is our data used to train public AI models?', 'Your ERP data stays in your DotOne account and is accessed only within the roles and permissions you set. See our [security](/security) page for details.'],
        ['How is this different from other AI in DotOne?', 'Generative AI writes and answers. Agents also watch for exceptions, and Vision AI checks quality from camera images. See [AI for business operations](/ai) for the full picture.'],
    ],
    'cta_heading' => 'Ask DotOne a question about your business',
    'cta_text' => 'In a 30-minute demo we load sample data shaped like yours and ask the questions your managers ask every week.',
];
include __DIR__ . '/includes/templates/hub.php';
