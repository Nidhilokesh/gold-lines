<?php
  include 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden Lines Contracting Company</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="particles-container" id="particles"></div>
        <div class="container hero-container">
            <div class="hero-content fade-in">
                <h1>WE HELP YOU <span>HIT YOUR TARGET</span></h1>
                <p>Comprehensive contracting solutions that transform your vision into reality across the Middle East.</p>
                <div>
                    <a href="aboutus.php" class="hero-cta">KNOW MORE</a>
                    <a href="#services" class="hero-cta">OUR SERVICES</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Focus Areas Section -->
    <section class="service-focus section-stagger" id="service-focus">
        <div class="container service-focus-content">
            <h2>OUR <span>SERVICE FOCUS</span> AREAS</h2>
            <p>We pride on creating long-term relationships and adding value-driven innovation and efficiency across all projects we undertake in our diverse service focus areas. That's the reason our vast majority of clients consistently re-hire us.</p>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services section-stagger" id="services">
        <div class="container">
            <div class="services-grid">
                <div class="service-card fade-in">
                    <div class="service-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3>Construction</h3>
                    <p>Helping you create your development from a vision, or delivering marked improvement to your existing project.</p>
                    <a href="construction.php" class="service-learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>

                <div class="service-card fade-in">
                    <div class="service-icon">
                        <i class="fas fa-road"></i>
                    </div>
                    <h3>Infrastructure</h3>
                    <p>Creating infrastructure that adds comfort and ease while helping protect assets, employees and customers.</p>
                    <a href="infrasturcture.php" class="service-learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>

                <div class="service-card fade-in">
                    <div class="service-icon">
                        <i class="fas fa-wind"></i>
                    </div>
                    <h3>Refrigeration & HVAC</h3>
                    <p>Delivering comfortably cool environments across indoor, outdoor and hybrid public places.</p>
                    <a href="refregiration.php" class="service-learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>

                <div class="service-card fade-in">
                    <div class="service-icon">
                        <i class="fas fa-heartbeat"></i> 
                    </div>
                    <h3>Base Life and Support</h3>
                    <p>Ensuring timely delivery of essential medicines, supplies, and equipment for critical care and life support.</p>
                    <a href="baselife.php" class="service-learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>

                <div class="service-card fade-in">
                    <div class="service-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h3>Logistic & Transport</h3>
                    <p>Efficient and reliable logistics and transport solutions, ensuring seamless movement of goods, supplies, and equipment with precision and speed.</p>
                    <a href="transport.php" class="service-learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>

                <div class="service-card fade-in">
                    <div class="service-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>OSP Infrastructure Installation & Maintenance </h3>
                    <p>Comprehensive OSP infrastructure installation and maintenance services, ensuring seamless connectivity, reliable network expansion, and long-term system efficiency.</p>
                    <a href="osp.php" class="service-learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="explore-services fade-in">
                <a href="#" class="explore-services-btn">EXPLORE ALL OUR SERVICES</a>
            </div>
        </div>
    </section>

    <!-- Featured Projects Section -->
    

    <script src = "javascript/index.js" ></script>
</body>
</html>

<?php
  include 'includes/footer.php';
?>