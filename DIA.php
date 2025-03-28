<?php
  include 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dedicated Internet Access | Golden Lines Company</title>
    <link rel="stylesheet" href="css/ict.css">
    <link rel="stylesheet" href="css/DIA.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>
<body>
    <!-- ITCCC Heading -->
    <header class="main-heading">
        <h1>Dedicated Internet Access</h1>
    </header>

    <!-- Hero Section -->
    <section class="hero fade-in">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Enterprise-Grade Internet Connectivity</h1>
                <p>Golden Lines Company delivers high-speed, secure Dedicated Internet Access (DIA) tailored for enterprises seeking unparalleled network performance and reliability.</p>
                <p>Our DIA solution provides a 1:1 connectivity model, ensuring dedicated bandwidth for mission-critical applications, web-based services, and seamless internet communication.</p>
            </div>
            <div class="hero-image">
                <img src="https://png.pngtree.com/thumb_back/fh260/background/20230702/pngtree-3d-rendered-abstract-tech-background-with-a-dark-theme-image_3739440.jpg"/>
            </div>
        </div>
    </section>

    <!-- DIA Features Section -->
    <section class="dia-features-section fade-in">
        <div class="section-header">
            <h2>Key Features of Our DIA Solution</h2>
        </div>
        <div class="dia-features-grid">
            <div class="dia-feature-card fade-in">
                <h3>High-Speed Connectivity</h3>
                <p>Robust fiber and microwave point-to-point links delivering consistent, high-bandwidth internet access for enterprise needs.</p>
            </div>
            <div class="dia-feature-card fade-in">
                <h3>Secure Communication</h3>
                <p>Advanced security protocols ensuring protected and reliable internet connections for critical business communications.</p>
            </div>
            <div class="dia-feature-card fade-in">
                <h3>Comprehensive Backup</h3>
                <p>Integrated backup solutions guaranteeing continuous operation and data integrity during unexpected network disruptions.</p>
            </div>
            <div class="dia-feature-card fade-in">
                <h3>Email & Web Applications</h3>
                <p>Optimized performance for internet email and web-based application ecosystems.</p>
            </div>
            <div class="dia-feature-card fade-in">
                <h3>IT Productivity Boost</h3>
                <p>Liberate your IT team from routine network management, allowing focus on strategic business initiatives.</p>
            </div>
            <div class="dia-feature-card fade-in">
                <h3>Scalable Infrastructure</h3>
                <p>Flexible solutions adaptable to businesses of all sizes, from SMEs to large corporations.</p>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="benefits-section fade-in">
        <div class="section-header">
            <h2>Benefits of Dedicated Internet Access</h2>
        </div>
        <div class="benefits-container">
            <div class="benefits-content">
                <div class="benefits-list">
                    <ul>
                        <li>Guaranteed Bandwidth</li>
                        <li>Low Latency</li>
                        <li>Enhanced Security</li>
                        <li>24/7 Technical Support</li>
                        <li>Consistent Performance</li>
                        <li>Scalable Solutions</li>
                        <li>Minimal Downtime</li>
                        <li>Cost-Effective Connectivity</li>
                        <li>Priority Network Management</li>
                        <li>Advanced Monitoring</li>
                    </ul>
                </div>
                <div class="benefits-image">
                    <img src="https://png.pngtree.com/thumb_back/fh260/background/20230702/pngtree-3d-rendered-abstract-tech-background-with-a-dark-theme-image_3739440.jpg"/>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Same JavaScript as the previous page for animations and modal functionality
        document.addEventListener('DOMContentLoaded', () => {
            const fadeInElements = document.querySelectorAll('.fade-in');
            
            const observerOptions = {
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach((entry, index) => {
                    if (entry.isIntersecting) {
                        setTimeout(() => {
                            entry.target.style.transition = 'all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1)';
                            entry.target.style.opacity = '0';
                            entry.target.style.transform = 'translateY(20px)';
                            
                            requestAnimationFrame(() => {
                                entry.target.style.opacity = '1';
                                entry.target.style.transform = 'translateY(0)';
                            });
                        }, index * 100);

                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            fadeInElements.forEach(element => {
                element.style.opacity = '0';
                element.style.transform = 'translateY(20px)';
                observer.observe(element);
            });
        });
    </script>
</body>
</html>
<?php
  include 'includes/footer.php';
?>