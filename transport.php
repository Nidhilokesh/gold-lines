<?php
  include 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logistics & Transportation Services | Golden Lines Contracting</title>

    <link rel="stylesheet" href="css/generalservices.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('images/transport.jpg') no-repeat center center/cover;
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
    <section class="hero fade-in" id="logistics-transportation-services">
        <div class="hero-content">
            <h1 class="fade-in">LOGISTICS & TRANSPORTATION SERVICES</h1>
            <p class="fade-in">We offer turnkey specialized logistics & transportation services for wide-ranging industries and project needs. Whether it be supporting your business with warehousing and product inspection or transporting it via our multi-channel fleet, we serve a broad spectrum of customers and businesses.</p>
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
                    <i class="fas fa-truck-moving"></i>
                </div>
                <h3>Vehicle & Ancillary Equipment Lease</h3>
                <p>Businesses of every size periodically require access to cost effective and reliable vehicles and ancillary equipment that they cannot justify buying out right. </p>
                <p>We offer trucks, trailers, forklifts, cranes, or any other equipment as per your need.</p>
                <p>We use only the best vehicles and equipment, and we follow the highest standards of safety and quality. We also provide comprehensive operations and maintenance services, including driver training, vehicle inspection, equipment calibration, repair, replacement, and more.</p>
                <p>Contact Us for a no obligation consultation today.</p>
            </div>

            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-shuttle-van"></i>
                </div>
                <h3>Shuttle Transportation</h3>
                <p>Safely transporting your assets, equipment, personnel and supplies from one location to the other requires reliable access to bulk transportation of every kind.</p>
                <p>We offer a full range of services including scheduled shuttle transportation for calculated movement needs, on-demand for adhoc or instant transport needs, and charter shuttle transportation for longer distance trips. </p>
                <p>We possess the latest vehicles, professional drivers and overall service expertise to transport you with confidence.</p>
                <p>Contact Us for a no obligation consultation today</p>
            </div>

            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-tools"></i>
                </div>
                <h3>Motor Pool & Onsite Workshop Facilities</h3>
                <p>Maintaining a fleet of reliable transportation for your immediate and every day secure transport needs require consistent access to professional resources and parts.</p>
                <p>We offer a range of services, including vehicle rental, vehicle maintenance, vehicle repair, spare parts supply, and more. We also provide comprehensive operations and maintenance services, including driver training, vehicle inspection, equipment calibration, repair and replacement, and more.</p>
                <p>Contact Us for a no obligation consultation today.</p>
            </div>

            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-balance-scale"></i>
                </div>
                <h3>Equipment Lease & Calibration</h3>
                <p>Executing a diverse range of equipment-intensive projects requires ready access to reliable vehicles at cost-effective terms. We provide dump trucks, back hoes, loaders, graders, excavators, forklifts, bobcats, low bed & flat bed trucks, boom trucks, cranes, and man lifts. </p>
                <p>Our equipment calibration services ensured all equipment is measured, tested, inspected and graded under internationally compliant standards. The types of testing we perform includes the following</p>
                <ul>
                    <li>Dead Weight Test</li>
                    <li>Temperature Measurement</li>
                    <li>Linear Measurement</li>
                    <li>Current Rating of Equipment</li>
                    <li>Resistance of a Current Carrying Loop</li>
                    <li>Insulation Resistance of a Current Carrying Loop</li>
                    <li>Electrical Voltage Measurement</li>
                    <li>Water Flow Rates for Hydrant Systems</li>
                    <li>Hydraulic Pressure for Pipe Installations</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Let's Get Started Section -->
    <section class="service-focus fade-in" id="contact">
        <h2 class="fade-in">Let's Get Started</h2>
        <p class="fade-in">Contact us for a no-obligation consultation today, where our knowledgeable staff will be more than happy to assist you with your logistics and transportation needs.</p>
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