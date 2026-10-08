/**
 * DotOne Guides — article registry
 *
 * To publish a new article:
 * 1. Create your article HTML page (copy bom-setup-guide.php or what-is-erp.php as a template).
 * 2. Add an entry to GUIDES_ARTICLES below (newest first).
 * 3. Hard refresh /guides to see it listed.
 */
window.GUIDES_ARTICLES = [
  {
    title: 'DotOne Tally Connector: ERP to Tally Sync Guide',
    excerpt: 'Connect DotOne with Tally Prime — sync sales invoices, purchases, payments, GST, ledgers, and stock journals without double entry.',
    url: '/integrations/tally',
    category: 'implementation',
    date: '2025-06-28',
    readTime: '11 min'
  },
  {
    title: 'What Is ERP? Enterprise Resource Planning Explained',
    excerpt: 'Learn what an ERP system is, how it works for manufacturers, key modules, and why MSMEs in India are adopting unified platforms.',
    url: '/guides/what-is-erp',
    category: 'erp',
    date: '2025-06-01',
    readTime: '12 min'
  },
  {
    title: 'BOM Setup Guide for Multi-Variant Manufacturing',
    excerpt: 'When to use a single BOM vs separate BOMs — best practices for pack size, flavor, material attributes, and multi-variant packing.',
    url: '/guides/bom-setup',
    category: 'production',
    date: '2025-05-20',
    readTime: '10 min'
  },
  {
    title: 'Vision AI for Manufacturing: A Practical Guide',
    excerpt: 'Turn existing CCTV into shopfloor intelligence — inline QC, worker safety, defect detection, and efficiency analytics without new hardware.',
    url: '/vision-ai',
    category: 'vision-ai',
    date: '2025-05-10',
    readTime: '9 min'
  },
  {
    title: 'AI-Based Quality Inspection on the Production Line',
    excerpt: 'How computer vision catches defects inline, routes rework automatically, and reduces quality escape rates on the shopfloor.',
    url: '/vision-ai/quality-inspection',
    category: 'vision-ai',
    date: '2025-04-28',
    readTime: '7 min'
  },
  {
    title: 'Inventory Automation for MSME Manufacturers',
    excerpt: 'Multi-warehouse tracking, low-stock alerts, Smart GRN, and QR-based stock control to keep inventory lean and accurate.',
    url: '/solutions/inventory-automation',
    category: 'inventory',
    date: '2025-04-15',
    readTime: '8 min'
  },
  {
    title: 'Industry 4.0 Solutions for Indian MSMEs',
    excerpt: 'Connect machines, sensors, and ERP workflows — a practical path to smart factory operations without replacing your existing setup.',
    url: '/solutions/digital-transformation',
    category: 'iot',
    date: '2025-04-02',
    readTime: '11 min'
  },
  {
    title: 'HRMS Software for Indian Manufacturing Teams',
    excerpt: 'Attendance, payroll, statutory compliance (PF, ESI, TDS), and workforce analytics linked to production and shopfloor output.',
    url: '/hrms',
    category: 'hrms',
    date: '2025-03-22',
    readTime: '9 min'
  },
  {
    title: 'Payroll Software for Indian MSMEs',
    excerpt: 'Automate payslips, statutory deductions, and compliance reporting — built for complex salary structures across multiple states.',
    url: '/payroll',
    category: 'hrms',
    date: '2025-03-18',
    readTime: '6 min'
  },
  {
    title: 'Manufacturing ERP Software: Buyer\'s Guide',
    excerpt: 'Evaluate ERP for production, inventory, quality, and finance — what to look for when digitising a multi-plant MSME operation.',
    url: '/manufacturing-erp',
    category: 'erp',
    date: '2025-03-05',
    readTime: '14 min'
  },
  {
    title: 'Smart Factory Software: Connecting Every Workflow',
    excerpt: 'No-code automation, machine-to-ERP sync, and digital twin dashboards for full plant visibility across departments.',
    url: '/industries/manufacturing',
    category: 'iot',
    date: '2025-02-20',
    readTime: '10 min'
  },
  {
    title: 'Data Security & Compliance for Manufacturers',
    excerpt: 'How DotOne protects production data, workforce records, and CCTV analytics — encryption, access control, and Indian compliance.',
    url: '/security',
    category: 'implementation',
    date: '2025-02-10',
    readTime: '6 min'
  },
  {
    title: 'Sales CRM for Manufacturing & Distribution',
    excerpt: 'Lead pipeline, quotations, customer portal, and sales-to-production handoff — close deals faster with ERP-connected CRM.',
    url: '/crm',
    category: 'sales',
    date: '2025-01-28',
    readTime: '8 min'
  }
];

window.GUIDES_CATEGORIES = [
  { id: 'all', label: 'All Articles' },
  { id: 'erp', label: 'ERP & Operations' },
  { id: 'production', label: 'Production' },
  { id: 'inventory', label: 'Inventory' },
  { id: 'vision-ai', label: 'Vision AI' },
  { id: 'iot', label: 'Industry 4.0 & IoT' },
  { id: 'hrms', label: 'HRMS & Payroll' },
  { id: 'sales', label: 'Sales & CRM' },
  { id: 'implementation', label: 'Implementation' }
];
