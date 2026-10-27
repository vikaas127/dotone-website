<?php
$page = [
    'path' => '/guides/what-is-mes',
    'title' => 'What Is MES? Manufacturing Execution System Guide | DotOne',
    'description' => 'What is MES? What a manufacturing execution system does on the shop floor, MES vs ERP, the core functions, OEE, and how growing manufacturers can start.',
    'breadcrumbs' => [['Guides', '/guides'], ['What Is MES?', '/guides/what-is-mes']],
    'article' => ['published' => '2026-10-27'],
    'eyebrow' => 'Production Guide',
    'read_time' => '8 min',
    'h1' => 'What Is MES? Manufacturing Execution Systems Explained',
    'intro' => 'A manufacturing execution system (MES) tracks and controls production as it happens on the shop floor: which job is on which machine, what has been produced, what was scrapped and why a line stopped.',
    'sections' => [
        ['definition', 'What is a manufacturing execution system?', '
<p>An <strong>MES</strong> is software that connects the production plan to the shop floor. The ERP decides <em>what</em> to make and <em>when</em>. The MES records <em>how</em> it is actually being made: jobs started and finished, material used, output, rejects, downtime and who did the work.</p>
<p>Without it, the plant runs on paper job cards and whiteboards, and management sees what happened yesterday, if at all.</p>
'],
        ['functions', 'Core MES functions', '
<ul>
    <li><strong>Work order and job card tracking:</strong> each job\'s status at each operation, live.</li>
    <li><strong>Material issue and consumption:</strong> what was issued to each job against what the BOM says it should use.</li>
    <li><strong>Production recording:</strong> good output, rejects and scrap by job, machine, shift and operator.</li>
    <li><strong>Machine status and downtime:</strong> running, idle, broken down or under maintenance, with the reason for every stop.</li>
    <li><strong>Quality checks:</strong> in-process and final inspections recorded against the job.</li>
    <li><strong>Traceability:</strong> which batch of material went into which batch of finished goods.</li>
    <li><strong>Performance:</strong> target vs actual, efficiency and OEE.</li>
</ul>
'],
        ['mes-vs-erp', 'MES vs ERP', '
<div class="guide-table-wrap"><table>
    <thead><tr><th></th><th>ERP</th><th>MES</th></tr></thead>
    <tbody>
        <tr><td>Focus</td><td>The whole business: sales, purchase, stock, finance, HR</td><td>The shop floor: jobs, machines, output, quality</td></tr>
        <tr><td>Time scale</td><td>Days, weeks, months</td><td>Minutes and shifts</td></tr>
        <tr><td>Main users</td><td>Office teams and management</td><td>Supervisors, operators, plant heads</td></tr>
        <tr><td>Answers</td><td>What should we make, and is it profitable?</td><td>What is happening on line 3 right now?</td></tr>
    </tbody>
</table></div>
<p>Large plants often run a separate MES connected to the ERP. For many growing manufacturers, an ERP with strong production tracking covers the MES functions they need, without a second system to maintain.</p>
'],
        ['oee', 'OEE: the number an MES is built to improve', '
<p><strong>OEE (overall equipment effectiveness)</strong> shows how much of a machine\'s planned time produced good parts:</p>
<div class="guide-callout"><p><strong>OEE = availability × performance × quality</strong></p></div>
<div class="guide-table-wrap"><table>
    <thead><tr><th>Factor</th><th>Example</th><th class="num">Value</th></tr></thead>
    <tbody>
        <tr><td>Availability</td><td>Ran 420 of 480 planned minutes</td><td class="num">87.5%</td></tr>
        <tr><td>Performance</td><td>Made 3,600 parts against 4,200 possible at rated speed in that time</td><td class="num">85.7%</td></tr>
        <tr><td>Quality</td><td>3,420 good parts out of 3,600</td><td class="num">95.0%</td></tr>
        <tr class="total"><td>OEE</td><td>0.875 × 0.857 × 0.95</td><td class="num">71.3%</td></tr>
    </tbody>
</table></div>
<p>Each factor points to a different fix: availability to breakdowns and changeovers, performance to slow running and small stops, quality to rejects and rework.</p>
'],
        ['start', 'How to start with MES', '
<ol>
    <li><strong>Replace paper job cards first.</strong> Record job start, finish, output and scrap digitally, even from a phone or tablet.</li>
    <li><strong>Log every stop with a reason.</strong> A short list of downtime reasons is enough to find your biggest losses.</li>
    <li><strong>Issue material against jobs.</strong> This turns scrap from a guess into a number.</li>
    <li><strong>Put a live dashboard on the floor.</strong> Target vs actual by line and shift changes behaviour quickly.</li>
    <li><strong>Add machine connectivity later,</strong> once the manual data is trusted.</li>
</ol>
<p><a href="/production-management">DotOne Production Management</a> covers job cards and WIP tracking with multi-level BOMs, live production dashboards, machine status, downtime analysis, shift and operator tracking, and OEE with alerts, in the same ERP as stock and sales.</p>
'],
    ],
    'faq' => [
        ['What is MES in manufacturing?', 'A manufacturing execution system: software that tracks and controls production on the shop floor in real time, including jobs, machines, material, output, quality and downtime.'],
        ['What is the difference between MES and ERP?', 'ERP plans and runs the whole business over days and months. MES tracks what is happening on the shop floor minute by minute. They share data: the ERP sends work orders, and the MES reports back output and consumption.'],
        ['Do small manufacturers need an MES?', 'They need the MES functions: digital job cards, output and scrap recording, downtime reasons and a live dashboard. These often come from the production module of an ERP rather than a separate system.'],
        ['How is OEE calculated?', 'OEE = availability × performance × quality. For example, 87.5% × 85.7% × 95% gives an OEE of about 71%.'],
        ['Can MES work with existing machines?', 'Yes. Start with manual or tablet-based recording, then connect machines where it adds value. See [Production Management](/production-management).'],
    ],
    'related' => [
        ['Production Management', '/production-management', 'Job cards, WIP, machine status, downtime and OEE.'],
        ['What Is MRP?', '/guides/what-is-mrp', 'Working out material needs from the production plan.'],
        ['Quality Management', '/quality-management', 'In-process and final inspections, holds and rejections.'],
    ],
    'cta_heading' => 'See your shop floor live',
    'cta_text' => 'In a 30-minute demo we run a job card through the floor, record output and downtime, and show OEE update.',
];
include __DIR__ . '/../includes/templates/guide.php';
