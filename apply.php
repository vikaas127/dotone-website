<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Apply at Dotone</title>
    <meta name="description" content="Apply for a role at Dotone. Help build the AI operating system for Indian MSME manufacturers.">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=JetBrains+Mono:wght@400&display=swap">
  <link rel="stylesheet" href="/css/main.css?v=20261014">
    <script src="/js/header-nav.js?v=20261014" defer></script>
    <link rel="canonical" href="https://dotone.biz/apply">
    <link rel="icon" href="/public/favicon.ico">
    <meta name="robots" content="noindex, follow">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Dotone">
    <meta property="og:title" content="Apply at Dotone">
    <meta property="og:description" content="Apply for a role at Dotone. Help build the AI operating system for Indian MSME manufacturers.">
    <meta property="og:url" content="https://dotone.biz/apply">
    <meta property="og:image" content="https://dotone.biz/assets/og-image.jpg?v=2">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="DotOne: ERP, AI agents and automation in one platform">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Apply at Dotone">
    <meta name="twitter:description" content="Apply for a role at Dotone. Help build the AI operating system for Indian MSME manufacturers.">
    <meta name="twitter:image" content="https://dotone.biz/assets/og-image.jpg?v=2">
</head>

<body class="bg-background">

<div id="header"><?php include __DIR__ . '/includes/header.php'; ?></div>

<!-- HERO -->
<section class="pt-28 pb-16 bg-surface">
  <div class="container-custom max-w-4xl text-center">
    <h1 class="text-4xl md:text-5xl font-display font-bold">
      Job Application
    </h1>
    <p class="text-text-secondary mt-4">
      Complete the form below to apply at Dotone.
      Our hiring team reviews every application.
    </p>
  </div>
</section>

<!-- FORM -->
<section class="section">
  <div class="container-custom max-w-4xl">

    <div class="card-elevated p-20 md:p-50">

      <form class="space-y-9">

        <!-- Position -->
        <div>
          <h3 class="text-lg font-semibold mb-6 border-b pb-2">
            Position Details
          </h3>

          <div class="grid md:grid-cols-2 gap-6">
            <div>
              <label class="block text-sm font-medium mb-2">Job Role</label>
              <input id="jobRole" type="text" class="input w-full" readonly>
            </div>

            <div>
              <label class="block text-sm font-medium mb-2">Department</label>
              <input id="department" type="text" class="input w-full" readonly>
            </div>
          </div>
        </div>

        <!-- Personal Info -->
        <div>
          <h3 class="text-lg font-semibold mb-6 border-b pb-2">
            Personal Information
          </h3>

          <div class="grid md:grid-cols-2 gap-6">
            <input class="input" placeholder="Full Name" required>
            <input class="input" placeholder="Email Address" required>
            <input class="input" placeholder="Mobile Number" required>
            <input class="input" placeholder="Current Location">
          </div>
        </div>

        <!-- Professional -->
        <div>
          <h3 class="text-lg font-semibold mb-6 border-b pb-2">
            Professional Details
          </h3>

          <div class="grid md:grid-cols-2 gap-6">
            <select class="input">
              <option>Total Experience</option>
              <option>Fresher</option>
              <option>1–3 Years</option>
              <option>3–5 Years</option>
              <option>5–8 Years</option>
              <option>8+ Years</option>
            </select>

            <input class="input" placeholder="Current Company">
          </div>
        </div>

        <!-- Resume -->
        <div>
          <h3 class="text-lg font-semibold mb-6 border-b pb-2">
            Resume & Links
          </h3>

          <div class="grid md:grid-cols-2 gap-6">
            <input type="file" class="input" required>
            <input class="input" placeholder="LinkedIn / Portfolio URL">
          </div>
        </div>

        <!-- Submit -->
        <div class="text-center pt-6">
          <button class="btn-primary px-12 py-4 text-lg">
            Submit Application
          </button>

          <p class="text-xs text-text-secondary mt-4">
            Dotone is an equal opportunity employer.
          </p>
        </div>

      </form>

    </div>
  </div>
</section>

<div id="footer"><?php include __DIR__ . '/includes/footer.php'; ?></div>

<script>
  
  

  const params = new URLSearchParams(window.location.search);
  document.getElementById("jobRole").value = params.get("role") || "";
  document.getElementById("department").value = params.get("dept") || "";
</script>

</body>
</html>
