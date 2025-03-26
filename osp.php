<?php
  include 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSP Infrastructure Services | Telecommunications Network Solutions</title>

    <link rel="stylesheet" href="css/generalservices.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

</head>
<body>
    <!-- Hero Section -->
    <section class="hero fade-in" id="osp-infrastructure-services">
        <div class="hero-content">
            <h1 class="fade-in">OSP INFRASTRUCTURE SERVICES</h1>
            <p class="fade-in">Our company excels in delivering comprehensive OSP (Outside Plant) infrastructure services, showcasing our expertise in designing, installing, and maintaining advanced telecommunications networks. We specialize in civil work, including trenching, ducting, and manhole construction, ensuring robust and reliable infrastructure.</p>
            <div>
                <a href="#service-details" class="hero-cta fade-in">Our Services</a>
                <a href="#contact" class="hero-cta fade-in">Contact Us</a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services fade-in" id="service-details">
        <div class="section-header">
            <h2 class="fade-in">Our Services</h2>
        </div>
        <div class="services-grid">
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-hard-hat"></i>
                </div>
                <h3>Civil Infrastructure Work</h3>
                <p>Comprehensive civil work solutions for telecommunications network deployment.</p>
                <ul>
                    <li>Trenching and excavation</li>
                    <li>Ducting installation</li>
                    <li>Manhole and handhole construction</li>
                    <li>Site preparation</li>
                    <li>Ground restoration</li>
                    <li>Permitting management</li>
                </ul>
            </div>

            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-network-wired"></i>
                </div>
                <h3>Network Infrastructure Deployment</h3>
                <p>End-to-end telecommunications network installation and maintenance.</p>
                <ul>
                    <li>Fiber optic cable laying</li>
                    <li>Underground cable installation</li>
                    <li>Network equipment placement</li>
                    <li>Cable splicing and termination</li>
                    <li>Network testing and commissioning</li>
                    <li>Performance optimization</li>
                </ul>
            </div>

            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-tools"></i>
                </div>
                <h3>Maintenance & Restoration</h3>
                <p>Proactive maintenance and rapid restoration of telecommunications infrastructure.</p>
                <ul>
                    <li>Regular infrastructure inspections</li>
                    <li>Preventive maintenance</li>
                    <li>Emergency repair services</li>
                    <li>Network performance monitoring</li>
                    <li>Asset management</li>
                    <li>Infrastructure rehabilitation</li>
                </ul>
            </div>

            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-project-diagram"></i>
                </div>
                <h3>Project Management</h3>
                <p>Comprehensive project management for telecommunications infrastructure projects.</p>
                <ul>
                    <li>Detailed project planning</li>
                    <li>Resource allocation</li>
                    <li>Timeline management</li>
                    <li>Quality assurance</li>
                    <li>Stakeholder communication</li>
                    <li>Risk mitigation</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Let's Get Started Section -->
    <section class="service-focus fade-in" id="contact">
        <h2 class="fade-in">Let's Get Started</h2>
        <p class="fade-in">Contact us today for a comprehensive consultation on your OSP infrastructure needs. Our expert team is ready to deliver cutting-edge telecommunications network solutions tailored to your project requirements.</p>
        <a href="#" class="explore-services-btn fade-in">Contact Us</a>
    </section>

    <script>
        // Scroll Animation Script
        document.addEventListener('DOMContentLoaded', () => {
            const fadeElements = document.querySelectorAll('.fade-in');
            
            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            fadeElements.forEach(element => {
                observer.observe(element);
            });
        });
    </script>
</body>
</html>
<?php
  include 'includes/footer.php';
?>