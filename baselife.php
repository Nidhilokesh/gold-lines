<?php
  include 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base Life Support Services | Golden Lines Contracting</title>

    <link rel="stylesheet" href="css/generalservices.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
   
</head>
<body>
    <!-- Hero Section -->
    <section class="hero fade-in" id="base-life-support-services">
        <div class="hero-content">
            <h1 class="fade-in">BASE LIFE SUPPORT SERVICES</h1>
            <p class="fade-in">We offer turnkey specialized services for military bases, global armies, and diplomatic missions. Whether it be creating compliant, military-grade infrastructure or providing life support services to new and existing base operations, we aim to serve and protect.</p>
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
                    <i class="fas fa-heartbeat"></i>
                </div>
                <h3>Base Life Support</h3>
                <p>Setting up a base consists of carefully calibrated services which as a whole create a livable environment in challenging environments.</p>
                <p>We offer a comprehensive range of services:</p>
                <ul>
                    <li>Various camp and tent configurations</li>
                    <li>Office, cleaning, and operational trailers</li>
                    <li>Sleeping accommodations</li>
                    <li>Operational and maintenance services</li>
                    <li>Dining and catering</li>
                    <li>Water supply and black water disposal</li>
                    <li>Janitorial services</li>
                    <li>Lighting and power solutions</li>
                </ul>
            </div>

            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-broom"></i>
                </div>
                <h3>Custodial Services</h3>
                <p>We offer end-to-end custodial services for military installations, ensuring a clean, maintained, and operationally ready environment.</p>
                <p>Our routine services include:</p>
                <ul>
                    <li>Floor washing and waxing</li>
                    <li>Carpet care</li>
                    <li>Trash removal</li>
                    <li>Vacuuming</li>
                    <li>Bathroom cleaning</li>
                    <li>Window washing</li>
                    <li>Light bulb replacement</li>
                    <li>Pest control</li>
                    <li>Interior and exterior building maintenance</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Let's Get Started Section -->
    <section class="service-focus fade-in" id="contact">
        <h2 class="fade-in">Let's Get Started</h2>
        <p class="fade-in">Contact us for a no-obligation consultation today, where our knowledgeable staff will be more than happy to assist you with your base life support and operational needs.</p>
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