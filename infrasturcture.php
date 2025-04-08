<?php
  include 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infrastructure Services | Golden Lines Company</title>

    <link rel="stylesheet" href="css/generalservices.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('images/infra.jpg') no-repeat center center/cover;
            color: var(--text-white);
            text-align: center;
            padding: 120px 15px;
            position: relative;
            overflow: hidden;
        }
    </style>

</head>
<body>
    <!-- Hero Section -->
    <section class="hero fade-in" id="infrastructure-services">
        <div class="hero-content">
            <h1 class="fade-in">INFRASTRUCTURE SERVICES</h1>
            <p class="fade-in">We offer turnkey specialized infrastructure services for wide-ranging industries and project types. Whether it be creating your development's vision from ideation to completion or providing support and unique products to modernize and secure existing facilities, we serve a broad spectrum of customers and businesses. Read on for more service details.</p>
            <div>
                <a href="#service-details" class="hero-cta fade-in">Our Services</a>
                <a href="contact.php" class="hero-cta fade-in">Contact Us</a>
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
                    <i class="fas fa-building"></i>
                </div>
                <h3>Pre-Engineered Buildings & Trailers</h3>
                <p>We help you setup camps for construction, land development, excursions, and specific scope missions with pre-engineered trailers and porta cabins designed and provided according to your customized needs.</p>
                <p>We offer a range of products including standard trailers, customized trailers, porta cabins, container cabins, caravan cabins, and more. We transport, install, and maintain our products according to your requirements and specifications.</p>
            </div>

            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3>Fortified Barriers & Fencing</h3>
                <p>Protecting your personnel, assets, and facilities against unforeseen safety and security scenarios requires multi-tiered, standards-compliant protection measures.</p>
                <p>We offer a full range of products including building border and fencing, T Walls, Jersey Barriers, HESCO Barriers, and more that can fulfill your military-grade as well as enterprise-grade physical perimeter safety needs. We also provide a warranty on our workmanship and materials.</p>
            </div>

            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-umbrella"></i>
                </div>
                <h3>Sunshades & Parking Lots</h3>
                <p>Harsh weather elements and the rapid motorization of urban spaces require your business to invest in ample parking spaces and protect your vehicles, customers, or employees.</p>
                <p>We provide customized design of your sun shades and parking lots to match your brand or institution. We offer a full range of products including carport shades, tensile shades, sail shades, umbrella shades, canopy shades, and more.</p>
            </div>

            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-street-view"></i>
                </div>
                <h3>Street & Area Lighting</h3>
                <p>Building spaces that cater to multitudes of customers and daily users requires them to be accessible and safe after dark while reducing their carbon footprint.</p>
                <p>We offer a full range of products including energy-efficient LED and solar street lights. Other variants include high-power area lights and tower lights.</p>
            </div>
        </div>
    </section>

    <!-- Let's Get Started Section -->
    <section class="service-focus fade-in" id="contact">
        <h2 class="fade-in">Let's Get Started</h2>
        <p class="fade-in">Contact us for a no-obligation consultation today, where our knowledgeable staff will be more than happy to assist you with the challenging aspects of your infrastructure project.</p>
        <a href="contact.php" class="explore-services-btn fade-in">Contact Us</a>
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