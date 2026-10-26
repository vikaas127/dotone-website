<?php
$page = [
    'path' => '/industries/automotive',
    'title' => 'ERP for Automotive Dealers and Rental | DotOne',
    'description' => 'ERP for Indian automotive dealers, workshops and rental firms: spare parts stock by serial, workshop job cards, rental bookings, field staff and GST invoicing.',
    'breadcrumbs' => [['Industries', '/industries'], ['Automotive & Rental', '/industries/automotive']],
    'name' => 'Automotive & Rental',
    'icon' => 'truck',
    'h1' => 'ERP for Automotive Dealers and Rental',
    'intro' => 'DotOne runs the parts counter, the workshop and the rental desk for automotive dealers and vehicle or equipment rental businesses. Spares, service jobs, bookings and invoices share one set of customer and item records.',
    'challenges' => [
        ['box', 'Thousands of part numbers', 'Fast-moving filters and pads run out while slow parts sit for years, and the counter checks stock by walking to the rack.'],
        ['cog', 'Workshop jobs on paper', 'Job sheets, parts used and labour charges are written by hand, and some never make it to the invoice.'],
        ['doc', 'Who has which unit', 'For rental fleets, keeping track of which vehicle or machine is out, with whom and until when, is done in a diary.'],
        ['pin', 'Field staff out of sight', 'Sales and service staff visiting customers or delivering rentals cannot be seen until they call in.'],
    ],
    'workflow' => [
        ['Open the job or booking', 'A workshop job card or a rental booking is opened against the customer and the vehicle or unit.'],
        ['Issue parts', 'Spares are issued from the parts store against the job, by part number and serial where needed.'],
        ['Do the work', 'Labour and parts are recorded on the job card as the technician works, with status visible to the front desk.'],
        ['Invoice and deliver', 'The GST invoice is raised from the job card or rental booking, and the unit is handed back or delivered.'],
        ['Reorder and review', 'Parts below reorder level raise indents, and reports show workshop and rental earnings by month.'],
    ],
    'modules' => ['inventory-management', 'sales-management', 'crm', 'field-sales-tracking', 'purchase-management', 'accounting'],
    'uses' => [
        ['Spare parts stock', 'Parts by number, location and serial, with reorder levels and slow-moving reports for the parts manager.'],
        ['Workshop job cards', 'Each service job records parts and labour so nothing used in the bay is left off the bill.'],
        ['Rental bookings', 'Units out on rent and due back, set up as part of your workflow during onboarding.'],
        ['Customer follow-ups', 'Service reminders and enquiries tracked in CRM, with follow-up reminders for the team.'],
    ],
    'faq' => [
        ['Can DotOne track parts by serial number?', 'Yes. Items can be tracked by batch or serial number from receipt to the customer, which suits engines, batteries and other serialised parts. See [inventory management](/inventory-management).'],
        ['Does DotOne track the location of rental vehicles?', 'No. DotOne does not include vehicle telematics or GPS on the vehicles. It records which unit is booked, with whom and the due date. Field staff can be tracked with the [field sales app](/field-sales-tracking).'],
        ['Can service reminders be sent to customers?', 'Follow-up reminders are created in [CRM](/crm) for your team, so service calls and renewals do not get missed.'],
        ['Will invoices reach Tally?', 'Yes. Workshop, parts and rental invoices sync to Tally Prime or Tally ERP 9 with the GST breakup through the [Tally connector](/integrations/tally).'],
    ],
    'cta_heading' => 'Run a service job through DotOne',
    'cta_text' => 'In a 30-minute demo we open a sample job card, issue parts, add labour and raise the GST invoice, using parts like yours.',
];
include dirname(__DIR__) . '/includes/templates/industry.php';
