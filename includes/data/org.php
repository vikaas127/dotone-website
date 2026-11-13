<?php
// Company facts used in structured data, the footer, /contact and /about.
// Fields left empty are simply not shown or emitted, so nothing half-filled goes live.
// TODO(owner): fill in the empty fields below. Each one strengthens trust (E-E-A-T)
// and the Organization schema search engines read on every page.

if (!defined('ORG')) {
    define('ORG', [
        'name' => 'DotOne',
        'legal_name' => 'TechDotBit Pvt Ltd',
        'parent_url' => 'https://techdotbit.com',
        'logo' => 'https://dotone.in/assets/dotone-logo-blue.png',

        'founding_year' => '',      // TODO(owner): e.g. '2019'
        'founders' => [],           // TODO(owner): e.g. [['Full Name', 'Co-founder & CEO', 'https://www.linkedin.com/in/...']]

        // Registered office (TODO(owner): SoftwareSuggest lists Noida as headquarters)
        'street' => '',             // TODO(owner): e.g. 'Office 401, Sector 62'
        'locality' => '',           // TODO(owner): e.g. 'Noida'
        'region' => '',             // TODO(owner): e.g. 'Uttar Pradesh'
        'postal_code' => '',        // TODO(owner): e.g. '201309'
        'country' => 'IN',

        'phone' => '',              // TODO(owner): e.g. '+91 98xxxxxxxx'
        'sales_email' => 'sales@techdotbit.com',
        'support_email' => 'support@techdotbit.com',
        'cin' => '',                // TODO(owner): Corporate Identification Number
        'gstin' => '',              // TODO(owner): GST number

        // Profiles that are the same company: tells search engines these all belong to DotOne
        'same_as' => [
            'https://www.linkedin.com/company/techdotbit',
            'https://www.linkedin.com/products/techdotbit-dotone-business-suite/',
            'https://play.google.com/store/apps/details?id=com.techdotbit.dotone',
            'https://apps.apple.com/in/app/dotone/id6759178649',
        ],
    ]);
}

// One-line postal address, or '' when not filled in
function org_address_line()
{
    $parts = array_filter([ORG['street'], ORG['locality'], ORG['region'], ORG['postal_code']]);
    return $parts ? implode(', ', $parts) . ', India' : '';
}

// Organization node for JSON-LD; optional facts are added only when filled in
function org_schema()
{
    $base = 'https://dotone.in';
    $org = [
        '@type' => 'Organization',
        '@id' => $base . '/#organization',
        'name' => ORG['name'],
        'legalName' => ORG['legal_name'],
        'url' => $base . '/',
        'logo' => ORG['logo'],
        'email' => ORG['support_email'],
        'parentOrganization' => ['@type' => 'Organization', 'name' => ORG['legal_name'], 'url' => ORG['parent_url']],
        'sameAs' => ORG['same_as'],
    ];
    if (ORG['founding_year'] !== '') $org['foundingDate'] = ORG['founding_year'];
    if (ORG['phone'] !== '') {
        $org['telephone'] = ORG['phone'];
        $org['contactPoint'] = [
            ['@type' => 'ContactPoint', 'contactType' => 'sales', 'telephone' => ORG['phone'], 'email' => ORG['sales_email'], 'areaServed' => 'IN', 'availableLanguage' => ['en', 'hi']],
            ['@type' => 'ContactPoint', 'contactType' => 'customer support', 'telephone' => ORG['phone'], 'email' => ORG['support_email'], 'areaServed' => 'IN', 'availableLanguage' => ['en', 'hi']],
        ];
    }
    if (ORG['locality'] !== '') {
        $org['address'] = array_filter([
            '@type' => 'PostalAddress',
            'streetAddress' => ORG['street'],
            'addressLocality' => ORG['locality'],
            'addressRegion' => ORG['region'],
            'postalCode' => ORG['postal_code'],
            'addressCountry' => ORG['country'],
        ]);
    }
    if (ORG['founders']) {
        $org['founder'] = array_map(function ($f) {
            return array_filter(['@type' => 'Person', 'name' => $f[0], 'jobTitle' => $f[1] ?? '', 'sameAs' => $f[2] ?? '']);
        }, ORG['founders']);
    }
    return $org;
}
