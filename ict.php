<?php
  include 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITC Services</title>
    <link rel="stylesheet" href="css/ict-services.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<style>
    .featured-services {
        padding: 10px 0;
        background-color: var(--secondary-color);
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .itc-services-container h4 {
        color: var(--primary-color);
        margin-bottom: 1rem;
        font-size: 2.5rem;
        position: relative;
        display: inline-block;
        opacity: 1;
        text-align:center;
    }

    .services-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); 
        gap: 30px;
    }

    .service-card {
        background-color: #F8F5F0;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out, opacity 0.5s ease-out, transform 0.5s ease-out;
        transform: translateY(20px); 
    }

    .service-card.animated {
        opacity: 1;
        transform: translateY(0);
    }

    .service-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }

    .service-main-content {
        display: flex;
        align-items: center;
        padding: 25px;
        border-bottom: 1px solid #eee;
    }

    .service-icon {
        width: 60px;
        height: 60px;
        background-color: var(--primary-color); /* Accent color */
        color: #fff;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 1.5rem;
        margin-right: 20px;
        transition: background-color 0.3s ease-in-out, transform 0.3s ease-in-out; /* Added transitions for icon hover */
    }

    .service-card:hover .service-icon {
        transform: scale(1.1);
    }

    .service-main-content h3 {
        font-size: 1.5rem;
        color: #333;
        margin: 0;
    }

    .service-details {
        padding: 25px;
    }

    .service-details h4 {
        font-size: 1.1rem;
        color: #555;
        margin-bottom: 10px;
    }

    .service-details p {
        font-size: 0.95rem;
        color: #777;
        line-height: 1.6;
        margin-bottom: 15px;
    }

    .service-learn-more {
        display: inline-flex;
        align-items: center;
        color: var(--secondary-color); 
        text-decoration: none;
        font-weight: bold;
        transition: color 0.3s ease-in-out;
    }

    .service-learn-more i {
        margin-left: 5px;
        transition: transform 0.3s ease-in-out;
    }

    .service-learn-more:hover {
        color: #113370;
        transform: scale(1.1);
        transition: color 0.3s ease-in-out, transform 0.3s ease-in-out;
    }

    .service-learn-more:hover i {
        transform: translateX(5px);
    }

    .cloud-learn-more {
        display: inline-block;
        padding: 0.6rem 1.2rem;
        font-size: 1rem;
        color:#F8F5F0 ;
        border-radius: 5px;
        background-color: #C4A968;
        transition: background-color 0.3s ease;
    }

    .cloud-learn-more:hover {
        background-color: #F8F5F0; 
        color: var(--primary-color);
    }

    .cloud-learn-more i {
        margin-left: 0.5rem;
    }


    /* Responsive adjustments */
    @media (max-width: 768px) {
        .services-grid {
            grid-template-columns: 1fr; 
            gap: 20px; 
        }

        .itc-services-container h4 {
            margin-bottom: 1rem;
            font-size: 1.5rem;
        }

        .service-card {
            padding: 15px; 
            opacity: 1; 
            transform: translateY(0);
        }

        .service-main-content {
            padding: 15px; 
            flex-direction: row; 
            align-items: center; 
        }

        .service-icon {
            width: 40px;
            height: 40px;
            font-size: 1rem; 
            margin-right: 10px; 
        }

        .service-main-content h3 {
            font-size: 1.2rem; 
        }

        .service-details {
            padding: 15px; 
        }

        .service-details h4 {
            font-size: 0.9rem; 
            margin-bottom: 8px;
        }

        .service-details p {
            font-size: 0.8rem; 
            line-height: 1.4;
            margin-bottom: 10px;
        }

        .service-learn-more {
            font-size: 0.85rem; 
        }

        .cloud-learn-more {
            padding: 0.4rem 0.8rem; 
            font-size: 0.8rem; 
        }

        .cloud-learn-more i {
            margin-left: 0.3rem; 
        }
    }
</style>

<body>
    <!-- Heading -->
    <section class="itc-services-section fade-in">  
        <div class="section-header">
            <h2>OUR ICT SERVICES</h2>
        </div>
        
        <div class="itc-services-container">
            <div class="itc-services-content">
                <div class="itc-services-text">
                    <p>Golden Lines Company is your strategic partner in delivering advanced Information and Communications Technology (ICT) solutions, tailor-made to empower businesses across Saudi Arabia. We bring creativity, expertise, and innovation to the forefront, helping B2B clients unlock their true potential in a rapidly evolving digital landscape.</p>
                    <p>At Golden Lines Company, we recognize that every business is unique. That’s why we offer a wide range of fully customized ICT solutions to meet your needs.</p>
                </div>
                <div class="itc-services-image">
                    <img src="images/dia2.webp" alt="Cloud Infrastructure Illustration">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="featured-services" id="services">
    <div class="container">
        <div class="itc-services-container" style="text-align:center;">
            <h4>ICT <span>Services</span></h4>
        </div>

        <div class="services-grid">
            
            <div class="service-card">
                <div class="service-main-content">
                    <div class="service-icon">
                        <i class="fas fa-cloud-upload-alt"></i>
                    </div>
                    <h3>Cloud Computing</h3>
                </div>
                <div class="service-details">
                    <h4>Cloud Service | Storage</h4>
                    <p>Our Compute services offer server virtualization for various Windows and Linux-based computing solutions. Virtual Machines (VMs) represent various on-demand scalable computing resources within the Saudi Cloud.</p>
                    <a href="cloud.php" class="service-learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            
            <div class="service-card">
                <div class="service-main-content">
                    <div class="service-icon">
                        <i class="fas fa-wifi"></i>
                    </div>
                    <h3>Wifi solutions</h3>
                </div>
                <div class="service-details">
                    <h4>Comprehensive Wireless Connectivity</h4>
                    <p>GLC offers an extensive Wi-Fi solution that empowers indoor and outdoor devices to connect to the internet and communicate wirelessly within a specific range.</p>
                    <a href="wi-fi.php" class="service-learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="service-card">
                <div class="service-main-content">
                    <div class="service-icon">
                        <i class="fas fa-plug"></i>
                    </div>
                    <h3>Low Current Services</h3>
                </div>
                <div class="service-details">
                    <h4>Cabling | CCTV Camera | LED Screens</h4>
                    <p>GLC is empowering modern infrastructures with advanced low current systems that integrate building automation, security, and data networks seamlessly.</p>
                    <a href="network.php" class="service-learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="service-card">
                <div class="service-main-content">
                    <div class="service-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3>Innovation Services</h3>
                </div>
                <div class="service-details">
                    <h4>Software Engineering | Cyber Security</h4>
                    <p>Golden Lines Company delivers innovative solutions empower businesses with cutting-edge technology services across software development, cybersecurity, data engineering, and professional consulting.</p>
                    <a href="innovative.php" class="service-learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        </div>
    </section>

    <div class="divider" style="padding-top=10px; padding-bottom=10px;" ></div>

    <section class="itc-services-section fade-in" style="padding:10px;">  
        <div class="itc-services-container">
            <div class="itc-services-content">
                <div class="itc-services-text">
                    <h3>Cloud</h3>
                    <p>At GLC Cloud, we offer advanced server virtualization for Windows and Linux-based systems, providing businesses with unparalleled flexibility and control. Our Virtual Machines (VMs) are designed to be scalable, on-demand computing resources that adapt to your needs. Whether you're managing applications or services, our solutions give you full control over your computing environment.</p>
                    <a href="cloud.php" class="cloud-learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="itc-services-image">
                    <img src="images/cloud2.jpeg" alt="Cloud" style="width:70%; height:auto;">
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="cta-card">
            <div class="cta-content">
                <h2 class="cta-heading"> Let's Build Your Vision Together.</h2>
                <p class="cta-text">Backed by a proven history of excellence and a commitment to delivering tangible value, Golden Lines Company is your trusted partner for success in the Kingdom of Saudi Arabia and beyond.</p>
                <a href="contact.php" class="cta-button">Contact Us Today</a>
            </div>
        </div>
    </section>

    
    <script>
        document.addEventListener('DOMContentLoaded', () => {
    const observerOptions = {
        threshold: 0.2,
        rootMargin: '0px 0px -100px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, observerOptions);

    document.querySelectorAll('.section-header').forEach(element => {
        observer.observe(element);
    });
    
    document.querySelectorAll('.itc-services-container').forEach(element => {
        observer.observe(element);
    });
});

const serviceCards = document.querySelectorAll('.service-card');

const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animated');
            observer.unobserve(entry.target); 
        }
    });
}, {
    threshold: 0.2 
});

serviceCards.forEach(card => {
    observer.observe(card);
});
    </script>
   
</body>
</html>
<?php
  include 'includes/footer.php';
?>