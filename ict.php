<?php
  include 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICT Services | Golden Lines Company</title>
    <link rel="stylesheet" href="css/generalservices.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('images/ict-services-bg.jpg') no-repeat center center/cover;
            color: var(--text-white);
            text-align: center;
            padding: 120px 15px;
            position: relative;
            overflow: hidden;
        }
        
        /* Additional specific styles for ICT services */
        .services-grid {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .service-card {
            transition: all 0.3s ease;
            opacity: 0;
            transform: translateY(20px);
        }
        
        .service-card.active {
            opacity: 1;
            transform: translateY(0);
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.3);
        }
        
        .cloud-section {
            background-color: #0F1C3F;
            padding: 60px 15px;
            color: var(--text-light);
            border-top: 2px solid var(--primary-color);
        }
        
        .cloud-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
        }
        
        .cloud-text {
            flex: 1;
            padding-right: 30px;
            min-width: 300px;
        }
        
        .cloud-image {
            flex: 1;
            text-align: center;
            min-width: 300px;
        }
        
        .cloud-image img {
            max-width: 100%;
            border-radius: 8px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }
        
        .cloud-text h3 {
            color: var(--primary-color);
            font-size: 32px;
            margin-bottom: 20px;
        }
        
        .cloud-learn-more {
            display: inline-block;
            margin-top: 20px;
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
        
        .cloud-learn-more:hover {
            background-color: var(--text-white);
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(196,169,104,0.3);
        }
        
        .cloud-learn-more i {
            margin-left: 10px;
        }
        
        @media screen and (max-width: 768px) {
            .cloud-content {
                flex-direction: column;
            }
            
            .cloud-text {
                padding-right: 0;
                margin-bottom: 30px;
            }
        }
        /* CTA Section */
.cta-section {
    background-color: var(--secondary-color);
    padding: 40px 20px;
    display: flex;
    justify-content: center;
    align-items: center;
}
  
.cta-card {
    background-color: #0A1F44;
    border-radius: 12px;
    overflow: hidden;
    width: 100%;
    max-width: 1200px;
    position: relative;
    padding: 50px 30px;
    border: 1px solid rgba(196, 169, 104, 0.3);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    height: 300px;
    display: flex;
    align-items: center;
    justify-content: center;
}
  
.cta-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: url('images/cta.jpg');
    background-size: cover;
    background-position: center;
    opacity: 0.15;
    z-index: 1;
    border-radius: 12px;
}
  
.cta-content {
    position: relative;
    z-index: 2;
    text-align: center;
    color: white;
    width: 100%;
}
  
.cta-heading {
    color: #C4A968;
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 20px;
}
  
.cta-text {
    font-size: 1.1rem;
    line-height: 1.6;
    margin-bottom: 30px;
    max-width: 800px;
    margin-left: auto;
    margin-right: auto;
}
  
.cta-button {
    display: inline-block;
    background-color: #C4A968;
    color: #0A1F44;
    font-weight: bold;
    padding: 15px 40px;
    border-radius: 50px;
    font-size: 1.1rem;
    text-decoration: none;
    transition: all 0.3s ease;
}
  
.cta-button:hover {
    background-color: #d8bd7d;
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(196, 169, 104, 0.4);
}
    </style>
</head>

<body>
    <!-- Hero Section -->
    <section class="hero fade-in" id="ict-services">
        <div class="hero-content">
            <h1 class="fade-in">OUR ICT SERVICES</h1>
            <p class="fade-in">Golden Lines Company is your strategic partner in delivering advanced Information and Communications Technology (ICT) solutions, tailor-made to empower businesses across Saudi Arabia. We bring creativity, expertise, and innovation to the forefront, helping B2B clients unlock their true potential in a rapidly evolving digital landscape.</p>
            <div>
                <a href="#service-details" class="hero-cta fade-in">Our Services</a>
                <a href="contact.php" class="hero-cta fade-in">Contact Us</a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services fade-in" id="service-details">
        <div class="section-header">
            <h2 class="fade-in">ICT Services</h2>
        </div>
        <div class="services-grid">
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-cloud-upload-alt"></i>
                </div>
                <h3>Cloud Computing</h3>
                <p>Our Compute services offer server virtualization for various Windows and Linux-based computing solutions. Virtual Machines (VMs) represent various on-demand scalable computing resources within the Saudi Cloud.</p>
                <a href="cloud.php" class="explore-services-btn">Learn More</a>
            </div>
            
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-wifi"></i>
                </div>
                <h3>Wifi Solutions</h3>
                <p>GLC offers an extensive Wi-Fi solution that empowers indoor and outdoor devices to connect to the internet and communicate wirelessly within a specific range.</p>
                <a href="wi-fi.php" class="explore-services-btn">Learn More</a>
            </div>

            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-plug"></i>
                </div>
                <h3>Low Current Services</h3>
                <p>GLC is empowering modern infrastructures with advanced low current systems that integrate building automation, security, and data networks seamlessly. Our services include Cabling, CCTV Camera, and LED Screens installation.</p>
                <a href="network.php" class="explore-services-btn">Learn More</a>
            </div>

            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <h3>Innovation Services</h3>
                <p>Golden Lines Company delivers innovative solutions that empower businesses with cutting-edge technology services across software development, cybersecurity, data engineering, and professional consulting.</p>
                <a href="innovative.php" class="explore-services-btn">Learn More</a>
            </div>
        </div>
    </section>

    <!-- Cloud Section -->
    <section class="cloud-section fade-in">
        <div class="cloud-content">
            <div class="cloud-text fade-in">
                <h3>Cloud Solutions</h3>
                <p>At GLC Cloud, we offer advanced server virtualization for Windows and Linux-based systems, providing businesses with unparalleled flexibility and control. Our Virtual Machines (VMs) are designed to be scalable, on-demand computing resources that adapt to your needs. Whether you're managing applications or services, our solutions give you full control over your computing environment.</p>
                <a href="cloud.php" class="cloud-learn-more fade-in">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="cloud-image fade-in">
                <img src="images/cloud2.jpeg" alt="Cloud Infrastructure Illustration">
            </div>
        </div>
    </section>

   <!-- CTA Section -->
    <section class="cta-section fade-in">
        <div class="cta-card">
            <div class="cta-content">
                <h2 class="cta-heading fade-in">Let's Build Your Vision Together</h2>
                <p class="cta-text fade-in">Backed by a proven history of excellence and a commitment to delivering tangible value, Golden Lines Company is your trusted partner for success in the Kingdom of Saudi Arabia and beyond.</p>
                <a href="contact.php" class="cta-button fade-in">Contact Us Today</a>
            </div>
        </div>
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