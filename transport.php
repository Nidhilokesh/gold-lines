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
                <p>Businesses periodically require access to cost-effective and reliable vehicles and ancillary equipment that they cannot justify buying outright.</p>
                <p>Our comprehensive services include:</p>
                <ul>
                    <li>Trucks and trailers</li>
                    <li>Forklifts and cranes</li>
                    <li>Highest safety and quality standards</li>
                    <li>Driver training</li>
                    <li>Vehicle inspection</li>
                    <li>Equipment calibration</li>
                    <li>Repair and replacement services</li>
                </ul>
            </div>

            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-shuttle-van"></i>
                </div>
                <h3>Shuttle Transportation</h3>
                <p>Safely transporting your assets, equipment, personnel, and supplies requires reliable access to bulk transportation of every kind.</p>
                <p>We offer flexible transportation solutions:</p>
                <ul>
                    <li>Scheduled shuttle transportation</li>
                    <li>On-demand transport</li>
                    <li>Charter shuttle transportation</li>
                    <li>Latest vehicle fleet</li>
                    <li>Professional drivers</li>
                    <li>Comprehensive service expertise</li>
                </ul>
            </div>

            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-tools"></i>
                </div>
                <h3>Motor Pool & Onsite Workshop Facilities</h3>
                <p>Maintaining a reliable transportation fleet requires consistent access to professional resources and parts.</p>
                <p>Our comprehensive services include:</p>
                <ul>
                    <li>Vehicle rental</li>
                    <li>Vehicle maintenance</li>
                    <li>Vehicle repair</li>
                    <li>Spare parts supply</li>
                    <li>Driver training</li>
                    <li>Vehicle inspection</li>
                    <li>Equipment calibration</li>
                </ul>
            </div>

            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-balance-scale"></i>
                </div>
                <h3>Equipment Lease & Calibration</h3>
                <p>We provide access to a diverse range of equipment-intensive project vehicles at cost-effective terms.</p>
                <p>Equipment types include:</p>
                <ul>
                    <li>Dump trucks</li>
                    <li>Backhoes and loaders</li>
                    <li>Graders and excavators</li>
                    <li>Forklifts and bobcats</li>
                    <li>Low bed & flat bed trucks</li>
                    <li>Boom trucks and cranes</li>
                    <li>Man lifts</li>
                </ul>
                <p>Calibration services encompass:</p>
                <ul>
                    <li>Dead weight testing</li>
                    <li>Temperature measurement</li>
                    <li>Linear measurement</li>
                    <li>Current rating</li>
                    <li>Electrical voltage measurement</li>
                    <li>Water flow rate testing</li>
                    <li>Hydraulic pressure testing</li>
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