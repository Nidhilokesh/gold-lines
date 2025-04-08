<?php
  include 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refrigeration & HVAC Services | Golden Lines Company</title>

    <link rel="stylesheet" href="css/generalservices.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <style>
        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('images/hvac.jpg') no-repeat center center/cover;
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
    <section class="hero fade-in" id="hvac-services">
        <div class="hero-content">
            <h1 class="fade-in">REFRIGERATION & HVAC SERVICES</h1>
            <p class="fade-in">We offer turnkey specialized refrigeration and HVAC services for wide-ranging industries and project types. Whether it be creating your development's vision from ideation to completion or providing support and unique insight to keep your facilities and assets cool and comfortable, we serve a broad spectrum of customers and businesses.</p>
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
                <h3>Commercial Air Conditioning</h3>
                <p>Cooling your commercial, public or regal space requires continuously innovative and unique solutions to quickly adapt and provide reliable, long-lasting comfort to its inhabitants.</p>
                <p>Our products are energy-efficient, eco-friendly, and cost-effective. We offer:</p>
                <ul>
                    <li>RTU systems for large spaces</li>
                    <li>Split systems for multiple rooms</li>
                    <li>Central ducted systems</li>
                </ul>
            </div>

            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-wind"></i>
                </div>
                <h3>GI & Fabric Duct Installation</h3>
                <p>Consistently improving cooling system performance, health impact, and comfort in indoor spaces is our specialty.</p>
                <p>Our products are efficient, durable, and flexible:</p>
                <ul>
                    <li>Galvanized iron (GI) ducts resistant to corrosion</li>
                    <li>Lightweight fabric ducts easy to install</li>
                    <li>Delivery of clean, fresh air</li>
                </ul>
            </div>

            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-temperature-low"></i>
                </div>
                <h3>Freezer Rooms</h3>
                <p>Keeping perishables, life-saving medicines, and volatile chemical products safe requires purpose-built controlled weather environments.</p>
                <p>We offer a range of products:</p>
                <ul>
                    <li>Spacious walk-in freezers</li>
                    <li>Modular cold storage rooms</li>
                    <li>Powerful blast freezers</li>
                </ul>
            </div>

            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-truck-moving"></i>
                </div>
                <h3>Portable Reefer Trailers</h3>
                <p>Safely transporting and storing temperature-sensitive products requires specially constructed portable freezing units.</p>
                <p>Our reefer trailer options include:</p>
                <ul>
                    <li>Small trailers for short-term use</li>
                    <li>Medium trailers for long-term storage</li>
                    <li>Large trailers for heavy-duty applications</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Let's Get Started Section -->
    <section class="service-focus fade-in" id="contact">
        <h2 class="fade-in">Let's Get Started</h2>
        <p class="fade-in">Contact us for a no-obligation consultation today, where our knowledgeable staff will be more than happy to assist you with the cooling and refrigeration needs of your project.</p>
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