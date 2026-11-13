<?php
$page = [
    'path' => '/refund-policy',
    'title' => 'Cancellation and Refund Policy | DotOne',
    'description' => 'How to cancel a DotOne subscription, when refunds apply, what is non-refundable and how long refunds take. DotOne is delivered online; nothing is shipped.',
    'breadcrumbs' => [['Cancellation and Refund Policy', '/refund-policy']],
    'updated' => '2026-11-13',
    'h1' => 'Cancellation and Refund Policy',
    'intro' => 'This policy explains how to cancel a DotOne subscription and when a refund applies. DotOne is provided by TechDotBit Private Limited ("TechDotBit", "we", "us").',
    'sections' => [
        ['scope', 'Who this policy applies to', '
<p>This policy applies to every customer who subscribes to DotOne, our cloud software for business management, including its ERP modules, AI agents and mobile apps. By subscribing you agree to it, together with our <a href="/terms">Terms of Service</a>.</p>
<p>If you have a signed quote or agreement with us that sets different cancellation or refund terms, that document applies in place of the matching part of this policy.</p>
'],
        ['delivery', 'Delivery of the service', '
<p>DotOne is software delivered over the internet. Access is given to your account online after your subscription is activated. No physical goods are shipped, so no shipping or delivery charges apply.</p>
'],
        ['cancel', 'Cancelling your subscription', '
<ul>
    <li>You can cancel at any time from your DotOne account or by writing to <a href="mailto:contact@techdotbit.com">contact@techdotbit.com</a>.</li>
    <li>To stop the next renewal, send the cancellation request at least <strong>15 days before</strong> your next billing date.</li>
    <li>If you cancel after the renewal date, your subscription stays active until the end of the billing period you have paid for. We do not refund the unused part of that period.</li>
    <li>After your subscription ends you can ask for an export of your data. See how long we keep it in our <a href="/privacy-policy#retention">Privacy Policy</a>.</li>
</ul>
'],
        ['termination', 'When we may suspend or end a subscription', '
<p>We may suspend or terminate a subscription if:</p>
<ul>
    <li>the <a href="/terms">Terms of Service</a> or your agreement with us are breached;</li>
    <li>a payment is not received within 15 days of its due date;</li>
    <li>the software is used fraudulently or without authorisation; or</li>
    <li>another contractual obligation is breached.</li>
</ul>
<p>If we end an account because of a breach, no refund is due.</p>
'],
        ['refunds', 'When a refund applies', '
<div class="guide-table-wrap"><table>
    <thead><tr><th>Situation</th><th>What we do</th></tr></thead>
    <tbody>
        <tr><td>Billing error</td><td>If you were charged incorrectly, we refund the incorrect amount in full once it is verified.</td></tr>
        <tr><td>Service fault on our side</td><td>If the software does not work as described because of a technical problem on our side, and we have not resolved it within 30 days of your report, we will consider a refund.</td></tr>
        <tr><td>First subscription</td><td>A first-time customer who asks to cancel within 7 days of activation may be eligible for a partial refund.</td></tr>
    </tbody>
</table></div>
'],
        ['non-refundable', 'What is not refundable', '
<ul>
    <li>Subscription fees once a billing period has started, including a renewal you did not cancel in time.</li>
    <li>One-time setup, installation, implementation, training and custom development charges.</li>
    <li>Cancellations made because your preferences or business requirements changed.</li>
    <li>Service problems caused by third-party integrations, by equipment or networks on your side, or by misuse.</li>
    <li>Plans bought at a promotional or discounted price, unless the offer says otherwise.</li>
</ul>
'],
        ['processing', 'How refunds are paid', '
<ul>
    <li>To ask for a refund, write to <a href="mailto:contact@techdotbit.com">contact@techdotbit.com</a> with your account name, invoice number and the reason.</li>
    <li>Approved refunds are processed within <strong>10 to 15 business days</strong> of approval.</li>
    <li>The refund goes back to the payment method used for the original payment.</li>
    <li>We are not responsible for delays caused by banks or payment providers.</li>
</ul>
'],
        ['changes', 'Changes to this policy', '
<p>We may update this policy from time to time. If a change is significant, we will tell customers by email or with a notice on this website. The date at the top of the page shows when it was last updated.</p>
'],
        ['contact', 'Contact', '
<p>TechDotBit Private Limited<br>T-53, Suncity, Jaipur, Rajasthan, India 302017<br>Email: <a href="mailto:contact@techdotbit.com">contact@techdotbit.com</a></p>
'],
    ],
];
include __DIR__ . '/includes/templates/legal.php';
