<?php
  include 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logistics & Transportation Services | Golden Lines Contracting</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="services.css">
    <style>
        :root {
            --primary-color: #C4A968;
            --secondary-color: #151515;
            --text-light: #aaa;
            --text-white: #fff;
            --card-bg: #1e1e1e;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background-color: var(--secondary-color);
            color: var(--text-light);
            min-width: 320px;
        }

        /* Scroll Animation Classes */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        .fade-in.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('logistics-bg.jpg') no-repeat center center/cover;
            color: var(--text-white);
            text-align: center;
            padding: 120px 15px;
            position: relative;
            overflow: hidden;
        }

        .hero-content {
            max-width: 900px;
            margin: 0 auto;
            opacity: 0;
            animation: fadeIn 1s ease-out forwards;
            animation-delay: 0.3s;
        }

        .hero-content h1 {
            font-size: clamp(28px, 5vw, 54px);
            margin-bottom: 20px;
            color: var(--primary-color);
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .hero-content p {
            font-size: clamp(16px, 3vw, 22px);
            margin-bottom: 30px;
            color: var(--text-light);
        }

        .hero-cta {
            display: inline-block;
            margin: 0 10px;
            padding: 15px 30px;
            background-color: var(--primary-color);
            color: var(--secondary-color);
            text-decoration: none;
            border-radius: 5px;
            transition: all 0.3s ease;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .hero-cta:hover {
            background-color: var(--text-white);
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(196,169,104,0.3);
        }

        /* Services Section */
        .services {
            padding: 80px 15px;
        }

        .section-header {
            text-align: center;
            margin-bottom: 50px;
            color: var(--text-white);
        }

        .section-header h2 {
            font-size: 36px;
            margin-bottom: 15px;
            color: var(--primary-color);
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr); /* Ensures 2 columns per row */
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .service-card {
            background-color: var(--card-bg);
            border-radius: 10px;
            padding: 40px;
            text-align: left;
            transition: all 0.3s ease;
            border: 1px solid rgba(196,169,104,0.2);
            position: relative;
            overflow: hidden;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                45deg, 
                transparent, 
                transparent, 
                var(--primary-color)
            );
            transform: rotate(-45deg);
            opacity: 0;
            transition: all 0.5s ease;
            z-index: 1;
        }

        .service-card:hover::before {
            opacity: 0.1;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.3);
        }

        .service-icon {
            font-size: 60px;
            color: var(--primary-color);
            margin-bottom: 20px;
            opacity: 0.8;
        }

        .service-card h3 {
            color: var(--primary-color);
            margin-bottom: 20px;
            font-size: 24px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .service-card p {
            color: var(--text-light);
            margin-bottom: 20px;
        }

        .service-card ul {
            padding-left: 20px;
            margin-bottom: 20px;
        }

        /* Service Focus Section */
        .service-focus {
            background-color: var(--card-bg);
            text-align: center;
            padding: 80px 15px;
            border-top: 2px solid var(--primary-color);
        }

        .service-focus h2 {
            font-size: 42px;
            color: var(--primary-color);
            margin-bottom: 20px;
        }

        .explore-services-btn {
            display: inline-block;
            padding: 15px 35px;
            background-color: var(--primary-color);
            color: var(--secondary-color);
            text-decoration: none;
            border-radius: 5px;
            transition: all 0.3s ease;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-top: 20px;
        }

        .explore-services-btn:hover {
            background-color: var(--text-white);
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(196,169,104,0.3);
        }

        /* Responsive Adjustments */
        @media screen and (max-width: 768px) {
            .hero {
                padding: 80px 15px;
            }

            .services-grid {
                grid-template-columns: 1fr;
            }

            .service-card {
                padding: 30px;
            }

            .section-header h2 {
                font-size: 28px;
            }

            .service-focus h2 {
                font-size: 32px;
            }
        }

        @media screen and (max-width: 480px) {
            .hero-content h1 {
                font-size: 24px;
            }

            .hero-cta {
                display: block;
                margin: 10px 0;
                width: 100%;
            }

            .section-header h2 {
                font-size: 24px;
            }

            .service-focus h2 {
                font-size: 28px;
            }
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
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