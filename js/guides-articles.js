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
    title: 'What Is a Warehouse Management System (WMS)?',
    excerpt: 'How a WMS works, core features, WMS vs inventory management vs ERP, and how to choose one.',
    url: '/guides/what-is-a-warehouse-management-system',
    category: 'inventory',
    date: '2026-10-27',
    readTime: '8 min'
  },
  {
    title: 'What Is MES? Manufacturing Execution Systems Explained',
    excerpt: 'What an MES does on the shop floor, MES vs ERP, and how to calculate OEE with an example.',
    url: '/guides/what-is-mes',
    category: 'production',
    date: '2026-10-27',
    readTime: '8 min'
  },
  {
    title: 'What Is MRP? Material Requirements Planning Explained',
    excerpt: 'How MRP works, a worked BOM explosion, MRP vs MRP II vs ERP, and why MRP results go wrong.',
    url: '/guides/what-is-mrp',
    category: 'production',
    date: '2026-10-27',
    readTime: '8 min'
  },
  {
    title: 'What Is HRMS? HRMS vs HRIS vs HCM Explained',
    excerpt: 'What an HRMS does, how it differs from HRIS and HCM, and the core modules for Indian businesses.',
    url: '/guides/what-is-hrms',
    category: 'hrms',
    date: '2026-10-27',
    readTime: '8 min'
  },
  {
    title: 'Payroll Management System: How Payroll Works in India',
    excerpt: 'The monthly payroll process, a salary example with PF and professional tax, and common mistakes.',
    url: '/guides/payroll-management-system',
    category: 'hrms',
    date: '2026-10-27',
    readTime: '9 min'
  },
  {
    title: 'What Is Cloud ERP? Cloud vs On-Premise ERP Explained',
    excerpt: 'How cloud ERP works, cloud vs on-premise compared, security questions to ask, and how to move.',
    url: '/guides/what-is-cloud-erp',
    category: 'erp',
    date: '2026-10-27',
    readTime: '8 min'
  },
  {
    title: 'Procure to Pay: The P2P Process, Step by Step',
    excerpt: 'The P2P process from indent to payment, procurement vs purchasing, and three-way matching.',
    url: '/guides/procure-to-pay',
    category: 'inventory',
    date: '2026-10-27',
    readTime: '8 min'
  },
  {
    title: 'What Is Working Capital? Formula, Cycle and Example',
    excerpt: 'The formula, the working capital cycle in days with an example, and how to free up cash.',
    url: '/guides/working-capital',
    category: 'erp',
    date: '2026-10-27',
    readTime: '8 min'
  },
  {
    title: 'Customer Acquisition: Strategy, Cost and Channels for B2B',
    excerpt: 'The customer acquisition process, how to calculate CAC with a worked example, CAC vs lifetime value, and the channels that work.',
    url: '/guides/customer-acquisition',
    category: 'sales',
    date: '2026-10-27',
    readTime: '9 min'
  },
  {
    title: 'What Is a Sales Pipeline? Stages, Funnel and CRM Dashboard',
    excerpt: 'B2B pipeline stages, pipeline vs sales funnel, weighted pipeline value and what a CRM dashboard should show.',
    url: '/guides/sales-pipeline',
    category: 'sales',
    date: '2026-10-27',
    readTime: '9 min'
  },
  {
    title: 'Sales Process Steps: A Practical Guide for B2B Businesses',
    excerpt: 'The 7 steps of the sales process, sales leads, inbound vs outbound, consultative selling and sales automation.',
    url: '/guides/sales-process',
    category: 'sales',
    date: '2026-10-27',
    readTime: '10 min'
  },
  {
    title: 'What Is S&OP? Sales and Operations Planning Explained',
    excerpt: 'The monthly S&OP process in five steps, a worked example for a manufacturer, S&OP vs IBP vs MRP, and the KPIs to track.',
    url: '/guides/sales-and-operations-planning',
    category: 'production',
    date: '2026-10-27',
    readTime: '9 min'
  },
  {
    title: 'Vendor Management: A Practical Guide for Manufacturers',
    excerpt: 'The vendor management process, a weighted vendor scorecard, the KPIs to track and the mistakes to avoid.',
    url: '/guides/vendor-management',
    category: 'inventory',
    date: '2026-10-27',
    readTime: '9 min'
  },
  {
    title: 'How to Raise Multiple Final Invoices From One Proforma Invoice',
    excerpt: 'Bill one proforma invoice in several dispatches: GST rules, a worked example, and how to track what is still to be billed.',
    url: '/guides/proforma-invoice',
    category: 'sales',
    date: '2026-10-27',
    readTime: '8 min'
  },
  {
    title: 'What Is a Cash Flow Statement? Format, Example and How to Read It',
    excerpt: 'The three sections, direct vs indirect method, and a worked example that shows why profit and cash are not the same.',
    url: '/guides/cash-flow-statement',
    category: 'erp',
    date: '2026-10-27',
    readTime: '9 min'
  },
  {
    title: 'Supply Chain Management and Optimization: A Practical Guide',
    excerpt: 'The five stages of the supply chain, the levers that cut cost and delays, reorder point maths and the KPIs to track.',
    url: '/guides/supply-chain-management',
    category: 'inventory',
    date: '2026-10-27',
    readTime: '11 min'
  },
  {
    title: 'What Is a Data Warehouse? A Plain-English Guide',
    excerpt: 'How a data warehouse works, how it differs from a database and a data lake, and when a growing business needs one.',
    url: '/guides/what-is-a-data-warehouse',
    category: 'erp',
    date: '2026-10-27',
    readTime: '9 min'
  },
  {
    title: 'Master Data Management: A Practical Guide for ERP Users',
    excerpt: 'Items, customers, vendors and BOMs: why master data goes wrong, the rules that keep it clean, and a go-live checklist.',
    url: '/guides/master-data-management',
    category: 'implementation',
    date: '2026-10-27',
    readTime: '9 min'
  },
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
