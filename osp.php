<?php
  include 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSP Infrastructure Services | Telecommunications Network Solutions</title>

    <link rel="stylesheet" href="css/generalservices.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <style>
        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('images/osp.png') no-repeat center center/cover;
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
    <section class="hero fade-in" id="osp-infrastructure-services">
        <div class="hero-content">
            <h1 class="fade-in">OSP INFRASTRUCTURE SERVICES</h1>
            <p class="fade-in">Our company excels in delivering comprehensive OSP (Outside Plant) infrastructure services, showcasing our expertise in designing, installing, and maintaining advanced telecommunications networks. We specialize in civil work, including trenching, ducting, and manhole construction, ensuring robust and reliable infrastructure.</p>
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
                        <i class="fas fa-network-wired"></i>
                    </div>
                    <h3>OSP Infrastructure Installation & Maintenance</h3>
                    <p>Our company excels in delivering comprehensive OSP (Outside Plant) infrastructure services, showcasing our expertise in designing, installing, and maintaining advanced telecommunications networks. We specialize in civil work, including trenching, ducting, and manhole construction, ensuring robust and reliable infrastructure. Our skilled teams efficiently handle permitting, site preparation, and restoration, adhering to industry standards and timelines. With a proven track record, we provide end-to-end solutions that enhance connectivity and durability for clients across diverse projects.</p>
                </div>

                <div class="service-card fade-in">
                    <div class="service-icon">
                        <i class="fas fa-broadcast-tower"></i>
                    </div>
                    <h3>Cellular & GSM Tower Services</h3>
                    <p>We provide comprehensive cellular and GSM tower services including installation, maintenance, and upgrades of telecommunication towers. Our experienced teams handle site acquisition, foundation construction, tower assembly, antenna mounting, and equipment installation. We ensure optimal network coverage, conduct regular inspections, and provide emergency repair services to minimize downtime. With our expertise in implementing the latest tower technologies, we help clients achieve reliable wireless connectivity and maximum network performance.</p>
                </div>
            </div>
        </section>

    <!-- Let's Get Started Section -->
    <section class="service-focus fade-in" id="contact">
        <h2 class="fade-in">Let's Get Started</h2>
        <p class="fade-in">Contact us today for a comprehensive consultation on your OSP infrastructure needs. Our expert team is ready to deliver cutting-edge telecommunications network solutions tailored to your project requirements.</p>
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