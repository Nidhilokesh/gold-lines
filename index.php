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
                    <a href="#" class="service-learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>

                <div class="service-card fade-in">
                    <div class="service-icon">
                        <i class="fas fa-road"></i>
                    </div>
                    <h3>Infrastructure</h3>
                    <p>Creating infrastructure that adds comfort and ease while helping protect assets, employees and customers.</p>
                    <a href="#" class="service-learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>

                <div class="service-card fade-in">
                    <div class="service-icon">
                        <i class="fas fa-wind"></i>
                    </div>
                    <h3>Refrigeration & HVAC</h3>
                    <p>Delivering comfortably cool environments across indoor, outdoor and hybrid public places.</p>
                    <a href="#" class="service-learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>

                <div class="service-card fade-in">
                    <div class="service-icon">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <h3>Medical Equipment</h3>
                    <p>Procuring mission critical medicines, supplies and equipment to clinics, hospitals and in-house departments.</p>
                    <a href="#" class="service-learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>

                <div class="service-card fade-in">
                    <div class="service-icon">
                        <i class="fas fa-network-wired"></i>
                    </div>
                    <h3>IT & Telecom</h3>
                    <p>Digitally transforming environments and connecting businesses to the digital economy.</p>
                    <a href="#" class="service-learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="explore-services fade-in">
                <a href="#" class="explore-services-btn">EXPLORE ALL OUR SERVICES</a>
            </div>
        </div>
    </section>

    <!-- Featured Projects Section -->
    <section class="featured-projects section-stagger" id="projects">
        <div class="container">
            <div class="section-header">
                <h2>Featured <span>Projects</span></h2>
                <p>We are extremely cognizant of the fact that every project and customer is different. 
                   Given below are a select few of the projects we are exceptionally proud of.</p>
            </div>

            <div class="projects-grid">
                <div class="project-card fade-in" data-project="hvac">
                    <div class="project-icon">
                        <i class="fas fa-wind"></i>
                    </div>
                    <div class="project-main-content">
                        <h3>HVAC Installation</h3>
                    </div>
                    <div class="project-details">
                        <h4>Location: USAF | Prince Sultan Air Base</h4>
                        <p>Supply and installation of 80 Packaged HVAC Units, construction of concrete pads, 
                           fabrication and installation of GI Air Duct and Fabric Air Duct System in numerous 
                           tents and structures of US Air Force.</p>
                    </div>
                </div>

                <div class="project-card fade-in" data-project="solar">
                    <div class="project-icon">
                        <i class="fas fa-solar-panel"></i>
                    </div>
                    <div class="project-main-content">
                        <h3>Solar Street Lighting</h3>
                    </div>
                    <div class="project-details">
                        <h4>Location: USAF | Prince Sultan Air Base</h4>
                        <p>Comprehensive solar street lighting system installation providing sustainable 
                           and efficient lighting solutions for the military base infrastructure.</p>
                    </div>
                </div>

                <div class="project-card fade-in" data-project="network">
                    <div class="project-icon">
                        <i class="fas fa-network-wired"></i>
                    </div>
                    <div class="project-main-content">
                        <h3>Network Comm Duct Banks</h3>
                    </div>
                    <div class="project-details">
                        <h4>Location: Prince Sultan Air Base</h4>
                        <p>Installation of communication duct banks to enhance network infrastructure 
                           and communication capabilities at the military base.</p>
                    </div>
                </div>

                <div class="project-card fade-in" data-project="life-support">
                    <div class="project-icon">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <div class="project-main-content">
                        <h3>Basic Life Support Services</h3>
                    </div>
                    <div class="project-details">
                        <h4>Location: US Marines | Yanbu</h4>
                        <p>Providing critical life support services to ensure operational readiness 
                           and personnel welfare for US Marine units.</p>
                    </div>
                </div>

                <div class="project-card fade-in" data-project="life-support">
                    <div class="project-icon">
                        <i class="fas fa-concierge-bell"></i>
                    </div>
                    <div class="project-main-content">
                        <h3>Dining Facility & Dface Upgrade Services</h3>
                    </div>
                    <div class="project-details">
                        <h4>Location: US Marines | Yanbu</h4>
                        <p>Providing critical life support services to ensure operational readiness 
                           and personnel welfare for US Marine units.</p>
                    </div>
                </div>

                <div class="project-card fade-in" data-project="shuttle">
                    <div class="project-icon">
                        <i class="fas fa-shuttle-van"></i>
                    </div>
                    <div class="project-main-content">
                        <h3>Shuttle & Motor Pool Services</h3>
                    </div>
                    <div class="project-details">
                        <h4>Location: USMTM</h4>
                        <p>Comprehensive shuttle and motor pool services to support mobility 
                           and transportation needs of military personnel.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src = "javascript/index.js" ></script>
</body>
</html>

<?php
  include 'includes/footer.php';
?>