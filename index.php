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


<div class="preloader">
  <div class="preloader__content">
    <div class="preloader__logo-container">
      <div class="preloader__logo"></div>
      <div class="preloader__gradient-overlay"></div>
    </div>
    <div class="preloader__spinner">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
</div>
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

                <!-- <div class="service-card fade-in">
                    <div class="service-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>OSP Infrastructure Installation & Maintenance </h3>
                    <p>Comprehensive OSP infrastructure installation and maintenance services, ensuring seamless connectivity, reliable network expansion, and long-term system efficiency.</p>
                    <a href="osp.php" class="service-learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                </div> -->
            </div>

            <div class="explore-services fade-in">
                <a href="osp.php" class="explore-services-btn">EXPLORE ALL OUR SERVICES</a>
            </div>
        </div>
    </section>

    <!-- Featured Projects Section -->
    <section class="featured-projects" id="projects">
        <div class="container">
            <div class="section-header">
                <h2>Data <span> Services</span></h2>
                
            </div>

            <div class="projects-grid">
                <div class="project-card">
                    <div class="project-main-content">
                        <div class="project-icon">
                            <i class="fas fa-globe"></i>
                        </div>
                        <h3>Dedicated Internet Acess</h3>
                    </div>
                    <div class="project-details">
                        <h4>High Speed Connectivity| Secure communication</h4>
                        <p>Golden Lines Company delivers high-speed, secure Dedicated Internet Access (DIA) tailored for enterprises seeking unparalleled network performance and reliability.</p>
                        <a href="DIA.php" class="service-learn-more">Learn More <i class="fas fa-caret-right"></i></a>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-main-content">
                        <div class="project-icon">
                            <i class="fas fa-wifi"></i>
                        </div>
                        <h3>Wifi solutions</h3>
                    </div>
                    <div class="project-details">
                        <h4>Robust| High performance</h4>
                        <p>GLC offers an extensive Wi-Fi solution that empowers indoor and outdoor devices to connect to the internet and communicate wirelessly within a specific range</p>
                        <a href="wi-fi.php" class="service-learn-more">Learn More <i class="fas fa-caret-right"></i></a>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-main-content">
                        <div class="project-icon">
                            <i class="fas fa-server"></i>
                        </div>
                        <h3>IPVPN Services</h3>
                    </div>
                    <div class="project-details">
                        <h4>Reduced Latency| Efficient Traffic Routing</h4>
                        <p>GLC offers cutting-edge IPVPN services designed to transform your network infrastructure with Layer 3 and Layer 2 VPN solutions.</p>
                        <a href="ipvpn.php" class="service-learn-more">Learn More <i class="fas fa-caret-right"></i></a>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-main-content">
                        <div class="project-icon">
                            <i class="fas fa-cloud-upload-alt"></i>
                        </div>
                        <h3>Cloud Services</h3>
                    </div>
                    <div class="project-details">
                        <h4>Iaas | Paas</h4>
                        <p>Our Compute services offer server virtualization for various Windows and Linux-based computing solutions. Virtual Machines (VMs) represent various on-demand scalable computing resources within the Saudi Cloud.</p>
                        <a href="cloud.php" class="service-learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-main-content">
                        <div class="project-icon">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h3>ICT Services</h3>
                    </div>
                    <div class="project-details">
                        <h4>Real-time Customized Dashboards | Productivity</h4>
                        <p>GLC is your strategic partner in delivering advanced Information and Communications Technology (ICT) solutions, tailor-made to empower businesses across Saudi Arabia.</p>
                        <a href="ict.php" class="service-learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="explore-projects">
                <a href="network.php" class="explore-projects-btn">EXPLORE ALL DATA SERVICES</a>
            </div>
        </div>
    </section>
    

    <div class="section-header">
        <h2>Our <span>Clients</span></h2>
                
    </div>

    <section class="logoMarqueeSection">
	<div class="container" id="logoMarqueeSection">
		<div class="default-content-container flex items-center">
			<div class="default-content-container-inner marquee-wrapper relative overflow-hidden inline-block">
				<div class="marquee" style="animation-duration: 20s;">
					<a target="_blank"><img src="images/client1.jpg" title="" class="marqueelogo"></a>
					<a target="_blank"><img src="images/client2.png" title="" class="marqueelogo"></a>
					<a target="_blank"><img src="images/client3.png" title="" class="marqueelogo"></a>
					<a target="_blank"><img src="images/client4.jpg" title="" class="marqueelogo"></a>
					<a target="_blank"><img src="images/client5.png" title="" class="marqueelogo"></a>
					<a target="_blank"><img src="images/client6.png" title="" class="marqueelogo"></a>
                    <a target="_blank"><img src="images/client7.png" title="" class="marqueelogo"></a>
					
				</div>
                <div class="marquee" style="animation-duration: 20s;">
					<a target="_blank"><img src="images/client1.jpg" title="" class="marqueelogo"></a>
					<a target="_blank"><img src="images/client2.png" title="" class="marqueelogo"></a>
					<a target="_blank"><img src="images/client3.png" title="" class="marqueelogo"></a>
					<a target="_blank"><img src="images/client4.jpg" title="" class="marqueelogo"></a>
					<a target="_blank"><img src="images/client5.png" title="" class="marqueelogo"></a>
					<a target="_blank"><img src="images/client6.png" title="" class="marqueelogo"></a>
                    <a target="_blank"><img src="images/client7.png" title="" class="marqueelogo"></a>
					
				</div>
			</div>
		</div>
	</div>
    </section>


    
    <section class="logoMarqueeSection">
	<div class="container" id="logoMarqueeSection">
		<div class="default-content-container flex items-center">
			<div class="default-content-container-inner marquee-wrapper relative overflow-hidden inline-block">
				<div class="marquee" style="animation-duration: 20s;">
                    <a target="_blank"><img src="images/client8.png" title="" class="marqueelogo"></a>
                    <a target="_blank"><img src="images/client9.png" title="" class="marqueelogo"></a>
                    <a target="_blank"><img src="images/client10.png" title="" class="marqueelogo"></a>
                    <a target="_blank"><img src="images/client11.png" title="" class="marqueelogo"></a>
                    <a target="_blank"><img src="images/client12.png" title="" class="marqueelogo"></a>
                    <a target="_blank"><img src="images/client13.png" title="" class="marqueelogo"></a>
                    <a target="_blank"><img src="images/client14.png" title="" class="marqueelogo"></a>
                    <a target="_blank"><img src="images/client15.png" title="" class="marqueelogo"></a>
                    <a target="_blank"><img src="images/client16.png" title="" class="marqueelogo"></a>
					
				</div>
                <div class="marquee" style="animation-duration: 20s;">
                    <a target="_blank"><img src="images/client8.png" title="" class="marqueelogo"></a>
                    <a target="_blank"><img src="images/client9.png" title="" class="marqueelogo"></a>
                    <a target="_blank"><img src="images/client10.png" title="" class="marqueelogo"></a>
                    <a target="_blank"><img src="images/client11.png" title="" class="marqueelogo"></a>
                    <a target="_blank"><img src="images/client12.png" title="" class="marqueelogo"></a>
                    <a target="_blank"><img src="images/client13.png" title="" class="marqueelogo"></a>
                    <a target="_blank"><img src="images/client14.png" title="" class="marqueelogo"></a>
                    <a target="_blank"><img src="images/client15.png" title="" class="marqueelogo"></a>
                    <a target="_blank"><img src="images/client16.png" title="" class="marqueelogo"></a>
					
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