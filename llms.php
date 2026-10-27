<?php
// llms.txt (https://llmstxt.org): a Markdown guide to the site for AI assistants.
// Built from each page's own title and description, like sitemap.php, so new pages appear automatically.
header('Content-Type: text/plain; charset=UTF-8');

$base = 'https://dotone.in';
$skip = ['sitemap.php', 'llms.php', 'contact-submit.php', 'webinar-count.php', 'webinar-register.php', 'config.php', 'db.php', 'thank-you.php', 'apply.php', 'sales-documentation.php', 'factory-demo.php', 'games.php'];

// Title and description from the page's $page array, or from its <title> and meta description
function llms_meta($path)
{
    $src = file_get_contents($path);
    $pick = function (array $patterns) use ($src) {
        foreach ($patterns as $re) {
            if (preg_match($re, $src, $m)) return stripcslashes($m[1]);
        }
        return '';
    };
    $title = $pick(["/'title'\s*=>\s*'((?:[^'\\\\]|\\\\.)*)'/", '/<title>([^<]*)<\/title>/']);
    $desc = $pick(["/'description'\s*=>\s*'((?:[^'\\\\]|\\\\.)*)'/", '/<meta name="description"\s+content="([^"]*)"/']);
    $title = trim(preg_replace('/\s*\|\s*DotOne$|^DotOne\s*\|\s*/', '', html_entity_decode($title, ENT_QUOTES, 'UTF-8')));
    return [$title, trim(html_entity_decode($desc, ENT_QUOTES, 'UTF-8'))];
}

function llms_pages($dir, array $skip)
{
    $out = [];
    foreach (glob(__DIR__ . '/' . $dir . '*.php') as $path) {
        if (in_array(basename($path), $skip)) continue;
        if (stripos(file_get_contents($path), 'noindex') !== false) continue;
        [$title, $desc] = llms_meta($path);
        if ($title === '') continue;
        $slug = $dir . basename($path, '.php');
        $out[$slug] = [$title, $desc];
    }
    return $out;
}

function llms_section($heading, array $pages, $base)
{
    if (!$pages) return;
    echo "\n## $heading\n\n";
    foreach ($pages as $slug => [$title, $desc]) {
        $url = $slug === 'index' ? $base . '/' : $base . '/' . $slug;
        echo "- [$title]($url)" . ($desc !== '' ? ": $desc" : '') . "\n";
    }
}

$root = llms_pages('', $skip);
$company = array_intersect_key($root, array_flip(['index', 'about', 'pricing', 'demo', 'contact', 'security', 'partners', 'careers', 'support', 'case-studies', 'webinar', 'documentation', 'api-reference', 'walkthrough']));
$hubs = array_intersect_key($root, array_flip(['modules', 'industries', 'solutions', 'guides', 'tools', 'ai-agents', 'ai', 'vision-ai']));
$product = array_diff_key($root, $company, $hubs);
ksort($product);

echo "# DotOne\n\n";
echo "> DotOne is a cloud ERP and AI platform for Indian manufacturers, distributors and growing businesses, built by TechDotBit Private Limited. It runs CRM, sales, purchase, inventory, warehouse, production, quality, HR, payroll and accounting in one system, with AI agents, mobile apps, GST invoicing and two-way Tally sync.\n\n";
echo "Key facts:\n\n";
echo "- Product website: $base/ . Book a demo at $base/demo . Pricing: $base/pricing .\n";
echo "- DotOne is configured per industry, including plywood, laminates, adhesive tape, ACP, metal, FMCG, pharma, packaging, chemicals and trading and distribution.\n";
echo "- Accounting stays in Tally if you want: the DotOne Tally connector syncs masters and vouchers both ways with Tally Prime and Tally ERP 9.\n";
echo "- Free tools for Indian businesses (GST, invoices, salary, payslips, EMI, EOQ, SKUs, barcodes) are at $base/tools and run entirely in the browser.\n";
echo "- Contact: sales@techdotbit.com for sales, support@techdotbit.com for support, or $base/contact .\n";

llms_section('Start here', array_intersect_key($company, ['index' => 1]) + $hubs, $base);
llms_section('ERP modules and features', $product, $base);
llms_section('AI agents', llms_pages('ai-agents/', $skip), $base);
llms_section('Industries', llms_pages('industries/', $skip), $base);
llms_section('Solutions', llms_pages('solutions/', $skip), $base);
llms_section('Integrations', llms_pages('integrations/', $skip), $base);
llms_section('Vision AI', llms_pages('vision-ai/', $skip), $base);
llms_section('Guides', llms_pages('guides/', $skip), $base);
llms_section('Free tools', llms_pages('tools/', $skip), $base);
llms_section('Company', array_diff_key($company, ['index' => 1]), $base);
