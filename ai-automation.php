<?php
require_once __DIR__ . '/includes/site.php';
$cards = [];
foreach (['inventory', 'sales', 'purchase', 'finance', 'reporting', 'operations'] as $slug) {
    $a = AGENTS[$slug];
    $cards[] = ['/ai-agents/' . $slug, $a['name'], $a['icon'], $a['summary']];
}
$page = [
    'path' => '/ai-automation',
    'title' => 'AI Automation for Business Operations | DotOne',
    'description' => 'AI automation in DotOne: agents and workflows handle reorder indents, reminders, MIS reports and approval routing, acting only with your approval.',
    'eyebrow' => 'AI Automation',
    'h1' => 'AI Automation for Business Operations',
    'intro' => 'Workflow rules handle the steps that are always the same. AI agents handle the steps that need a look at the data first. Together they take routine work off your team, and you decide how much each one is allowed to do.',
    'blocks' => [
        ['heading' => 'What gets automated', 'text' => 'The aim is the routine work that eats time every day, not the decisions that need your judgement.', 'list' => [
            ['Reorder indents', 'Items below reorder level get a purchase indent drafted, ready for approval.'],
            ['Follow-up reminders', 'Open quotations, untouched leads and overdue invoices get reminders drafted for the owner.'],
            ['MIS reports', 'The weekly or monthly MIS is built from live data and shared with the people you choose.'],
            ['Approval routing', 'POs, quotations and other documents go to the right approver, with escalation if they wait too long.'],
        ]],
        ['heading' => 'Levels of autonomy', 'text' => 'You choose, task by task, how far an agent goes. Most businesses start with recommendations and widen the rules as they gain confidence.', 'list' => [
            ['Inform', 'The agent spots an exception, such as a late order, and tells the right person.'],
            ['Recommend', 'The agent suggests the next step, for example which vendor to buy from, with the numbers behind it.'],
            ['Act with approval', 'The agent prepares the indent, reminder or report, and a person approves it before it goes out.'],
            ['Act within rules', 'For low-risk tasks you allow, such as sharing a scheduled report, the agent goes ahead and records what it did.'],
        ]],
        ['heading' => 'Rules and agents together', 'text' => 'Workflow automation moves work along fixed paths. Agents read the data and decide when a path should start, and who should look at it.', 'list' => [
            ['Workflow automation', 'Approval chains, alerts, auto indents and hand-offs set up as rules.'],
            ['AI agents', 'Agents for inventory, sales, purchase, finance, reporting and operations that read live ERP data.'],
        ]],
        ['heading' => 'The agents behind it', 'text' => 'Each agent works on one area of the business and uses the same workflows and permissions as your team.', 'cards' => $cards],
    ],
    'faq' => [
        ['What is AI automation in DotOne?', 'It is AI agents working together with [workflow automation](/workflow-automation). Workflows run fixed steps; agents read the data, spot what needs action and prepare it.'],
        ['Will agents change our data on their own?', 'Only if you allow it. You set, task by task, whether an agent informs, recommends or acts, and any change can be set to need a person\'s approval.'],
        ['What should we automate first?', 'Start with work that repeats every day, such as reorder indents, follow-up reminders and the weekly MIS. See [inventory automation](/solutions/inventory-automation) for a common starting point.'],
        ['Do we need technical staff to set this up?', 'No. Workflows are set up as rules on documents and roles, and the [AI agents](/ai-agents) work on the data already in DotOne. Our onboarding team helps with the first setup.'],
    ],
    'cta_heading' => 'See the routine work done for you',
    'cta_text' => 'In a 30-minute demo we set up one automation on sample data, such as reorder indents or overdue reminders, and show the approval step.',
];
include __DIR__ . '/includes/templates/hub.php';
