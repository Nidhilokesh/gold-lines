<?php
  include 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base Life Support Services | Golden Lines Contracting</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
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
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('military-base-bg.jpg') no-repeat center center/cover;
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
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
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