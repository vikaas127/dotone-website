<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Talk to DotOne sales, support or partnerships. Call, email or send your requirements and our team will respond within one business day.">
    <title>Contact DotOne | Sales, Support and Partnerships</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=JetBrains+Mono:wght@400&display=swap">
    <link rel="stylesheet" href="/css/main.css?v=20261019">
    <script src="/js/header-nav.js?v=20261019" defer></script>
      <link rel="canonical" href="https://dotone.biz/contact">
      <link rel="icon" href="/favicon.ico" sizes="48x48"><link rel="icon" type="image/png" sizes="32x32" href="/public/favicon-32.png"><link rel="icon" type="image/png" sizes="16x16" href="/public/favicon-16.png"><link rel="apple-touch-icon" href="/public/apple-touch-icon.png"><link rel="manifest" href="/public/manifest.json"><meta name="theme-color" content="#0096EE">
      <meta property="og:type" content="website">
      <meta property="og:site_name" content="DotOne">
      <meta property="og:title" content="Contact DotOne | Sales, Support and Partnerships">
      <meta property="og:description" content="Talk to DotOne sales, support or partnerships. Call, email or send your requirements and our team will respond within one business day.">
      <meta property="og:url" content="https://dotone.biz/contact">
      <meta property="og:image" content="https://dotone.biz/assets/og-image.jpg?v=2">
      <meta property="og:image:width" content="1200">
      <meta property="og:image:height" content="630">
      <meta property="og:image:alt" content="DotOne: ERP, AI agents and automation in one platform">
      <meta property="og:locale" content="en_IN">
      <meta name="twitter:card" content="summary_large_image">
      <meta name="twitter:title" content="Contact DotOne | Sales, Support and Partnerships">
      <meta name="twitter:description" content="Talk to DotOne sales, support or partnerships. Call, email or send your requirements and our team will respond within one business day.">
      <meta name="twitter:image" content="https://dotone.biz/assets/og-image.jpg?v=2">
  </head>
<body class="bg-background">
    <!-- Navigation Header -->
    <div id="header"><?php include __DIR__ . '/includes/header.php'; ?></div>

    <!-- Hero -->
    <section class="relative pt-32 pb-12 md:pt-40 md:pb-16 overflow-hidden">
        <div class="absolute inset-0 hero-tint" aria-hidden="true"></div>
        <div class="container-custom relative z-10 text-center max-w-3xl mx-auto">
            <span class="section-label">Sales, support and partnerships</span>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-display font-semibold text-text-primary leading-tight mb-6">Contact DotOne</h1>
            <p class="text-lg md:text-xl text-text-secondary leading-relaxed">
                Talk to our team about how DotOne can optimise your manufacturing operations. Pick a topic below or fill in the form.
            </p>
        </div>
    </section>

    <!-- Contact options: each card pre-fills the enquiry type and scrolls to the form -->
    <section class="pb-12 bg-white">
        <div class="container-custom">
            <div class="grid md:grid-cols-3 gap-6">
                <button type="button" class="card p-6 hover-lift text-left w-full" onclick="showContactForm('executive')">
                    <h2 class="text-lg font-display font-semibold mb-2">Executive briefing</h2>
                    <p class="text-text-secondary text-[0.95rem] leading-relaxed mb-3">Discuss ROI, the implementation roadmap and your transformation strategy.</p>
                    <span class="text-sm font-medium text-primary-600">Book an executive session &rarr;</span>
                </button>
                <button type="button" class="card p-6 hover-lift text-left w-full" onclick="showContactForm('technical')">
                    <h2 class="text-lg font-display font-semibold mb-2">Technical consultation</h2>
                    <p class="text-text-secondary text-[0.95rem] leading-relaxed mb-3">Review integration requirements, security compliance and infrastructure planning.</p>
                    <span class="text-sm font-medium text-primary-600">Schedule a tech review &rarr;</span>
                </button>
                <button type="button" class="card p-6 hover-lift text-left w-full" onclick="showContactForm('sales')">
                    <h2 class="text-lg font-display font-semibold mb-2">Sales enquiry</h2>
                    <p class="text-text-secondary text-[0.95rem] leading-relaxed mb-3">Ask about pricing, packages, implementation timelines and configuration.</p>
                    <span class="text-sm font-medium text-primary-600">Talk to sales &rarr;</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Multi-step contact form -->
    <section id="contact-form" class="section bg-surface">
        <div class="container-custom">
            <div class="max-w-3xl mx-auto">
                <div class="card p-6 md:p-10">
                    <!-- Form progress indicator -->
                    <div class="mb-10">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <div id="step1-indicator" class="w-10 h-10 rounded-full bg-gradient-brand flex items-center justify-center text-white font-semibold">1</div>
                                <span id="step1-label" class="hidden sm:inline font-medium text-text-primary">Contact details</span>
                            </div>
                            <div class="flex-1 h-1 bg-border mx-2 sm:mx-4">
                                <div id="progress-bar-1" class="h-full bg-gradient-brand transition-all duration-500" style="width: 0%"></div>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div id="step2-indicator" class="w-10 h-10 rounded-full bg-surface flex items-center justify-center text-text-secondary font-semibold">2</div>
                                <span id="step2-label" class="hidden sm:inline font-medium text-text-secondary">Company</span>
                            </div>
                            <div class="flex-1 h-1 bg-border mx-2 sm:mx-4">
                                <div id="progress-bar-2" class="h-full bg-gradient-brand transition-all duration-500" style="width: 0%"></div>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div id="step3-indicator" class="w-10 h-10 rounded-full bg-surface flex items-center justify-center text-text-secondary font-semibold">3</div>
                                <span id="step3-label" class="hidden sm:inline font-medium text-text-secondary">Requirements</span>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <form id="contactForm" class="space-y-8">
                        <div class="hp-field" aria-hidden="true"><label>Leave this empty<input type="text" name="website" tabindex="-1" autocomplete="off"></label></div>
                        <!-- Step 1: Contact details -->
                        <div id="step1" class="space-y-6">
                            <div>
                                <h2 class="text-2xl md:text-3xl font-display font-semibold mb-2">Let's get started</h2>
                                <p class="text-text-secondary">Tell us about yourself and how we can help.</p>
                            </div>

                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label for="firstName" class="block text-sm font-medium text-text-primary mb-2">First name *</label>
                                    <input type="text" id="firstName" name="firstName" required class="input" placeholder="John">
                                </div>
                                <div>
                                    <label for="lastName" class="block text-sm font-medium text-text-primary mb-2">Last name *</label>
                                    <input type="text" id="lastName" name="lastName" required class="input" placeholder="Smith">
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-text-primary mb-2">Business email *</label>
                                    <input type="email" id="email" name="email" required class="input" placeholder="name@company.com">
                                </div>
                                <div>
                                    <label for="phone" class="block text-sm font-medium text-text-primary mb-2">Phone number *</label>
                                    <input type="tel" id="phone" name="phone" required class="input" placeholder="+91 98765 43210">
                                </div>
                                <div>
                                    <label for="jobTitle" class="block text-sm font-medium text-text-primary mb-2">Job title *</label>
                                    <input type="text" id="jobTitle" name="jobTitle" required class="input" placeholder="Operations Manager">
                                </div>
                                <div>
                                    <label for="inquiryType" class="block text-sm font-medium text-text-primary mb-2">Enquiry type *</label>
                                    <select id="inquiryType" name="inquiryType" required class="input">
                                        <option value="">Select enquiry type</option>
                                        <option value="executive">Executive briefing</option>
                                        <option value="technical">Technical consultation</option>
                                        <option value="sales">Sales enquiry</option>
                                        <option value="demo">Product demo</option>
                                        <option value="trial">Free trial</option>
                                        <option value="support">Support request</option>
                                        <option value="partnership">Partnership opportunity</option>
                                    </select>
                                </div>
                            </div>

                            <div class="flex justify-end">
                                <button type="button" onclick="nextStep(2)" class="btn-primary">Continue</button>
                            </div>
                        </div>

                        <!-- Step 2: Company -->
                        <div id="step2" class="space-y-6 hidden">
                            <div>
                                <h2 class="text-2xl md:text-3xl font-display font-semibold mb-2">Company information</h2>
                                <p class="text-text-secondary">Help us understand your manufacturing environment.</p>
                            </div>

                            <div>
                                <label for="companyName" class="block text-sm font-medium text-text-primary mb-2">Company name *</label>
                                <input type="text" id="companyName" name="companyName" required class="input" placeholder="Acme Manufacturing Inc.">
                            </div>

                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label for="industry" class="block text-sm font-medium text-text-primary mb-2">Industry *</label>
                                    <select id="industry" name="industry" required class="input">
                                        <option value="">Select industry</option>
                                        <option value="automotive">Automotive manufacturing</option>
                                        <option value="electronics">Electronics manufacturing</option>
                                        <option value="food">Food processing</option>
                                        <option value="pharmaceutical">Pharmaceutical</option>
                                        <option value="aerospace">Aerospace &amp; defence</option>
                                        <option value="textile">Textile &amp; apparel</option>
                                        <option value="metal">Metal fabrication</option>
                                        <option value="chemical">Chemical processing</option>
                                        <option value="other">Other manufacturing</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="companySize" class="block text-sm font-medium text-text-primary mb-2">Company size *</label>
                                    <select id="companySize" name="companySize" required class="input">
                                        <option value="">Select company size</option>
                                        <option value="1-50">1-50 employees</option>
                                        <option value="51-200">51-200 employees</option>
                                        <option value="201-500">201-500 employees</option>
                                        <option value="501-1000">501-1,000 employees</option>
                                        <option value="1001-5000">1,001-5,000 employees</option>
                                        <option value="5000+">5,000+ employees</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="numberOfPlants" class="block text-sm font-medium text-text-primary mb-2">Number of manufacturing plants</label>
                                    <input type="number" id="numberOfPlants" name="numberOfPlants" class="input" placeholder="3" min="1">
                                </div>
                                <div>
                                    <label for="numberOfWorkers" class="block text-sm font-medium text-text-primary mb-2">Total manufacturing workers</label>
                                    <input type="number" id="numberOfWorkers" name="numberOfWorkers" class="input" placeholder="250" min="1">
                                </div>
                            </div>

                            <div>
                                <label for="currentSystems" class="block text-sm font-medium text-text-primary mb-2">Current ERP or manufacturing systems</label>
                                <input type="text" id="currentSystems" name="currentSystems" class="input" placeholder="SAP, Oracle, custom systems, etc.">
                            </div>

                            <div class="flex justify-between">
                                <button type="button" onclick="previousStep(1)" class="btn-secondary">Back</button>
                                <button type="button" onclick="nextStep(3)" class="btn-primary">Continue</button>
                            </div>
                        </div>

                        <!-- Step 3: Requirements -->
                        <div id="step3" class="space-y-6 hidden">
                            <div>
                                <h2 class="text-2xl md:text-3xl font-display font-semibold mb-2">Your requirements</h2>
                                <p class="text-text-secondary">Tell us what you need and when.</p>
                            </div>

                            <fieldset>
                                <legend class="block text-sm font-medium text-text-primary mb-3">Interested solutions (select all that apply)</legend>
                                <div class="grid sm:grid-cols-2 gap-3">
                                    <label class="flex items-center space-x-3 p-3 border border-border rounded-lg cursor-pointer">
                                        <input type="checkbox" name="solutions[]" value="vision-ai" class="w-5 h-5 text-primary-500 rounded focus:ring-2 focus:ring-primary-500">
                                        <span class="text-text-primary">Vision AI platform</span>
                                    </label>
                                    <label class="flex items-center space-x-3 p-3 border border-border rounded-lg cursor-pointer">
                                        <input type="checkbox" name="solutions[]" value="ai-agent" class="w-5 h-5 text-primary-500 rounded focus:ring-2 focus:ring-primary-500">
                                        <span class="text-text-primary">AI agent</span>
                                    </label>
                                    <label class="flex items-center space-x-3 p-3 border border-border rounded-lg cursor-pointer">
                                        <input type="checkbox" name="solutions[]" value="salesman-tracker" class="w-5 h-5 text-primary-500 rounded focus:ring-2 focus:ring-primary-500">
                                        <span class="text-text-primary">Salesman tracker</span>
                                    </label>
                                    <label class="flex items-center space-x-3 p-3 border border-border rounded-lg cursor-pointer">
                                        <input type="checkbox" name="solutions[]" value="invoice-scanner" class="w-5 h-5 text-primary-500 rounded focus:ring-2 focus:ring-primary-500">
                                        <span class="text-text-primary">Invoice scanner</span>
                                    </label>
                                    <label class="flex items-center space-x-3 p-3 border border-border rounded-lg cursor-pointer">
                                        <input type="checkbox" name="solutions[]" value="business-card-scanner" class="w-5 h-5 text-primary-500 rounded focus:ring-2 focus:ring-primary-500">
                                        <span class="text-text-primary">Business card scanner</span>
                                    </label>
                                    <label class="flex items-center space-x-3 p-3 border border-border rounded-lg cursor-pointer">
                                        <input type="checkbox" name="solutions[]" value="lead-finder" class="w-5 h-5 text-primary-500 rounded focus:ring-2 focus:ring-primary-500">
                                        <span class="text-text-primary">Lead finder</span>
                                    </label>
                                </div>
                            </fieldset>

                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label for="implementationTimeline" class="block text-sm font-medium text-text-primary mb-2">Desired implementation timeline *</label>
                                    <select id="implementationTimeline" name="implementationTimeline" required class="input">
                                        <option value="">Select timeline</option>
                                        <option value="immediate">Immediate (within 1 month)</option>
                                        <option value="1-3-months">1-3 months</option>
                                        <option value="3-6-months">3-6 months</option>
                                        <option value="6-12-months">6-12 months</option>
                                        <option value="12+-months">12+ months</option>
                                        <option value="exploring">Just exploring options</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="budget" class="block text-sm font-medium text-text-primary mb-2">Estimated budget range</label>
                                    <select id="budget" name="budget" class="input">
                                        <option value="">Select budget range</option>
                                        <option value="under-50k">Under $50,000</option>
                                        <option value="50k-100k">$50,000 - $100,000</option>
                                        <option value="100k-250k">$100,000 - $250,000</option>
                                        <option value="250k-500k">$250,000 - $500,000</option>
                                        <option value="500k-1m">$500,000 - $1,000,000</option>
                                        <option value="1m+">$1,000,000+</option>
                                        <option value="not-sure">Not sure yet</option>
                                    </select>
                                </div>
                            </div>

                            <div>
                                <label for="message" class="block text-sm font-medium text-text-primary mb-2">Additional information</label>
                                <textarea id="message" name="message" rows="4" class="input" placeholder="Your challenges, goals or questions"></textarea>
                            </div>

                            <label class="flex items-start space-x-3">
                                <input type="checkbox" name="newsletter" class="w-5 h-5 text-primary-500 rounded focus:ring-2 focus:ring-primary-500 mt-1">
                                <span class="text-sm text-text-secondary">Send me product updates and resources from DotOne.</span>
                            </label>

                            <p class="text-sm text-text-secondary">By submitting this form, you agree to our <a href="https://techdotbit.com/privacy-policy/" target="_blank" rel="noopener noreferrer" class="text-primary-600 underline">Privacy Policy</a> and consent to be contacted by our team.</p>

                            <div class="flex justify-between">
                                <button type="button" onclick="previousStep(2)" class="btn-secondary">Back</button>
                                <button type="submit" class="btn-primary">Submit request</button>
                            </div>
                        </div>
                    </form>

                    <!-- Success message (hidden by default) -->
                    <div id="successMessage" class="hidden text-center space-y-6">
                        <h2 class="text-2xl md:text-3xl font-display font-semibold">Thank you for reaching out</h2>
                        <p class="text-lg text-text-secondary max-w-xl mx-auto">
                            We've received your enquiry and will be in touch within 24 hours to schedule your consultation.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-3 justify-center">
                            <a href="/" class="btn-ghost-lg">Return to homepage</a>
                            <a href="/demo" class="btn-hero-glow-lg">Book a demo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Email -->
    <section class="section bg-white">
        <div class="container-custom">
            <div class="max-w-2xl mb-10">
                <h2 class="text-3xl md:text-4xl font-display font-semibold mb-4">Prefer email?</h2>
                <p class="text-lg text-text-secondary">Write to the right team directly and we'll reply within one business day.</p>
            </div>
            <div class="grid sm:grid-cols-2 gap-6 max-w-3xl">
                <a href="mailto:sales@techdotbit.com" class="card p-6 hover-lift block">
                    <h3 class="text-lg font-display font-semibold mb-2">Sales</h3>
                    <p class="text-text-secondary text-[0.95rem] leading-relaxed mb-3">Pricing, packages and implementation timelines.</p>
                    <span class="text-sm font-medium text-primary-600">sales@techdotbit.com</span>
                </a>
                <a href="mailto:support@techdotbit.com?subject=DotOne%20support" class="card p-6 hover-lift block">
                    <h3 class="text-lg font-display font-semibold mb-2">Support</h3>
                    <p class="text-text-secondary text-[0.95rem] leading-relaxed mb-3">Help with setup or configuration.</p>
                    <span class="text-sm font-medium text-primary-600">support@techdotbit.com</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
   <div id="footer"><?php include __DIR__ . '/includes/footer.php'; ?></div>

     <!-- JavaScript -->
    <script>
        // Multi-Step Form Navigation
        let currentStep = 1;

        function showContactForm(type) {
            // Scroll to form
            document.getElementById('contactForm').scrollIntoView({ behavior: 'smooth', block: 'center' });
            
            // Pre-fill inquiry type
            const inquiryTypeSelect = document.getElementById('inquiryType');
            if (type === 'executive') {
                inquiryTypeSelect.value = 'executive';
            } else if (type === 'technical') {
                inquiryTypeSelect.value = 'technical';
            } else if (type === 'sales') {
                inquiryTypeSelect.value = 'sales';
            }
        }

        function nextStep(step) {
            // Validate current step
            const currentStepElement = document.getElementById(`step${currentStep}`);
            const inputs = currentStepElement.querySelectorAll('input[required], select[required]');
            let isValid = true;

            inputs.forEach(input => {
                if (!input.value) {
                    isValid = false;
                    input.classList.add('input-error');
                } else {
                    input.classList.remove('input-error');
                }
            });

            if (!isValid) {
                alert('Please fill in all required fields before continuing.');
                return;
            }

            // Hide current step
            document.getElementById(`step${currentStep}`).classList.add('hidden');
            
            // Update progress indicators
            document.getElementById(`step${currentStep}-indicator`).classList.remove('bg-gradient-brand');
            document.getElementById(`step${currentStep}-indicator`).classList.add('bg-success-500');
            document.getElementById(`step${currentStep}-label`).classList.remove('text-text-primary');
            document.getElementById(`step${currentStep}-label`).classList.add('text-success-500');
            document.getElementById(`progress-bar-${currentStep}`).style.width = '100%';

            // Show next step
            currentStep = step;
            document.getElementById(`step${step}`).classList.remove('hidden');
            document.getElementById(`step${step}-indicator`).classList.remove('bg-surface');
            document.getElementById(`step${step}-indicator`).classList.add('bg-gradient-brand');
            document.getElementById(`step${step}-label`).classList.remove('text-text-secondary');
            document.getElementById(`step${step}-label`).classList.add('text-text-primary');

            // Scroll to top of form
            document.getElementById('contactForm').scrollIntoView({ behavior: 'smooth', block: 'start' });
        }

        function previousStep(step) {
            // Hide current step
            document.getElementById(`step${currentStep}`).classList.add('hidden');
            
            // Update progress indicators
            document.getElementById(`step${currentStep}-indicator`).classList.remove('bg-gradient-brand');
            document.getElementById(`step${currentStep}-indicator`).classList.add('bg-surface');
            document.getElementById(`step${currentStep}-label`).classList.remove('text-text-primary');
            document.getElementById(`step${currentStep}-label`).classList.add('text-text-secondary');
            document.getElementById(`progress-bar-${step}`).style.width = '0%';

            // Show previous step
            currentStep = step;
            document.getElementById(`step${step}`).classList.remove('hidden');

            // Scroll to top of form
            document.getElementById('contactForm').scrollIntoView({ behavior: 'smooth', block: 'start' });
        }

        // Form Submission
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();

            // Validate final step
            const currentStepElement = document.getElementById(`step${currentStep}`);
            const inputs = currentStepElement.querySelectorAll('input[required], select[required]');
            let isValid = true;

            inputs.forEach(input => {
                if (!input.value) {
                    isValid = false;
                    input.classList.add('input-error');
                } else {
                    input.classList.remove('input-error');
                }
            });

            if (!isValid) {
                alert('Please fill in all required fields before submitting.');
                return;
            }

            const submitBtn = this.querySelector('button[type="submit"]');
            const originalBtnText = submitBtn.innerHTML;
            submitBtn.disabled = true;
            submitBtn.innerHTML = 'Submitting...';

            const formData = new FormData(this);
            fetch('/contact-submit.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (!data.success) {
                    throw new Error(data.error || 'Submission failed');
                }

                document.getElementById('contactForm').classList.add('hidden');
                document.getElementById('successMessage').classList.remove('hidden');
                document.getElementById('successMessage').scrollIntoView({ behavior: 'smooth', block: 'center' });
            })
            .catch(error => {
                alert(error.message || 'Something went wrong. Please try again or email sales@techdotbit.com.');
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalBtnText;
            });
        });

        // Live Chat Function
        function openLiveChat() {
            alert('Live chat feature would open here. In production, this would integrate with your chat platform (e.g., Intercom, Drift, or custom solution).');
        }

        // Resource Form Function
        function showResourceForm() {
            alert('Resource library access form would open here. In production, this would show a modal with email capture for resource access.');
        }

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>