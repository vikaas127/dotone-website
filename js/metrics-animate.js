(function () {
    function animateMetric(el, duration = 1500) {
        const target = parseFloat(el.dataset.target);
        const type = el.dataset.type;
        const start = 0;
        const startTime = performance.now();

        function format(value) {
            switch (type) {
                case "plus":
                    return `${Math.round(value)}+`;
                case "percent":
                    return `${Math.round(value)}%`;
                case "currency":
                    return `₹${value.toFixed(1)} Cr`;
                default:
                    return value;
            }
        }

        function update(currentTime) {
            const progress = Math.min((currentTime - startTime) / duration, 1);
            const value = start + progress * (target - start);
            el.textContent = format(value);

            if (progress < 1) {
                requestAnimationFrame(update);
            } else {
                el.textContent = format(target);
            }
        }

        requestAnimationFrame(update);
    }

    function initMetrics(section) {
        section.querySelectorAll(".metric[data-target]").forEach(function (el) {
            if (!el.classList.contains("animated")) {
                animateMetric(el);
                el.classList.add("animated");
            }
        });
    }

    const observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                initMetrics(entry.target);
            }
        });
    }, { threshold: 0.4 });

    document.querySelectorAll(".metrics-section").forEach(function (section) {
        observer.observe(section);
    });
})();
