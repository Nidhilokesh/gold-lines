<?php
  include 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Services | Golden Lines Company</title>
    <link rel="stylesheet" href="css/generalservices.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('images/dia2.jpg') no-repeat center center/cover;
            color: var(--text-white);
            text-align: center;
            padding: 120px 15px;
            position: relative;
            overflow: hidden;
        }
        
        /* Service card specific styles */
        .service-card ul {
            list-style-type: none;
            padding-left: 0;
            margin-top: 15px;
        }
        
        .service-card ul li {
            margin-bottom: 8px;
            position: relative;
            padding-left: 25px;
        }
        
        .service-card ul li:before {
            content: "\f00c";
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            color: var(--primary-color);
        }
        
        /* Services Grid - Updated Alignment */
        .services-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            margin-top: 40px;
        }
        
        .service-card {
            flex: 0 0 calc(50% - 30px);
            max-width: 550px;
            margin-bottom: 20px;
            text-align: left;
        }
        
        @media (max-width: 992px) {
            .service-card {
                flex: 0 0 100%;
            }
        }

        /* Benefits section - Redesigned */
        .benefits-section {
            background: linear-gradient(135deg, #0A1F4A 0%, #15305e 100%);
            padding: 80px 15px;
            text-align: center;
            border-top: 1px solid rgba(196,169,104,0.3);
            position: relative;
        }
        
        .benefits-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: url('images/pattern.png');
            background-size: 200px;
            opacity: 0.05;
            pointer-events: none;
        }
        
        .benefits-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            margin: 50px auto;
            max-width: 1200px;
        }
        
        .benefit-card {
            background-color: rgba(255, 255, 255, 0.03);
            border-radius: 10px;
            padding: 25px 20px;
            flex: 0 0 calc(33.333% - 30px);
            border: 1px solid rgba(196, 169, 104, 0.15);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .benefit-card:hover {
            transform: translateY(-5px);
            border-color: rgba(196, 169, 104, 0.4);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        
        .benefit-icon {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background-color: rgba(196, 169, 104, 0.15);
            margin-bottom: 20px;
            color: #C4A968;
            font-size: 1.8rem;
        }
        
        .benefit-title {
            color: #C4A968;
            font-size: 1.3rem;
            margin-bottom: 15px;
            font-weight: 600;
        }
        
        .benefit-text {
            color: white;
            line-height: 1.6;
        }
        
        @media (max-width: 992px) {
            .benefit-card {
                flex: 0 0 calc(50% - 30px);
            }
        }
        
        @media (max-width: 768px) {
            .benefit-card {
                flex: 0 0 100%;
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
            background-image: url('../images/cta.jpg');
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
    <section class="hero fade-in" id="data-services">
        <div class="hero-content">
            <h1 class="fade-in">DATA SERVICES</h1>
            <p class="fade-in">Golden Lines Company delivers enterprise-grade connectivity solutions designed to empower businesses with reliable, secure, and high-performance data services. Our comprehensive suite of offerings ensures your organization stays connected in today's digital landscape.</p>
            <div>
                <a href="#service-details" class="hero-cta fade-in">Our Services</a>
                <a href="contact.php" class="hero-cta fade-in">Contact Us</a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services fade-in" id="service-details">
        <div class="section-header">
            <h2 class="fade-in">Our Data Services</h2>
        </div>
        <div class="services-grid">
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-globe"></i>
                </div>
                <h3>Dedicated Internet Access (DIA)</h3>
                <p>Our DIA solution is engineered for enterprises aiming to provide their employees with high-speed, secure Internet access on a 1:1 basis ensuring every application benefits from dedicated, reliable connectivity.</p>
                <ul>
                    <li>Enterprise-grade 1:1 dedicated bandwidth</li>
                    <li>Available via fiber and microwave point-to-point links</li>
                    <li>Support for mission-critical applications</li>
                    <li>Enhanced IT productivity</li>
                    <li>Comprehensive backup solutions</li>
                </ul>
            </div>

            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3>IP VPN L3</h3>
                <p>IP VPN Internet Protocol Virtual Private Network L3 revolutionizes network connectivity through its peer-to-peer model, utilizing Border Gateway Protocol (BGP) to distribute VPN-related information.</p>
                <ul>
                    <li>Robust, scalable, secure communication solution</li>
                    <li>Connect any work site across the Kingdom to our local network</li>
                    <li>Route all traffic locally for stable connections</li>
                    <li>Enhanced data security</li>
                    <li>Minimal connection delays</li>
                </ul>
            </div>

            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-network-wired"></i>
                </div>
                <h3>PLL L2 Service</h3>
                <p>A GOLDEN LINES COMPANY GLC Layer 2 Virtual Private Network (L2 VPN) is a powerful solution replicating a physical sub-network within an IP or MPLS network by establishing private connections between two endpoints.</p>
                <ul>
                    <li>Private connections between endpoints</li>
                    <li>Enhanced confidentiality of customer data</li>
                    <li>Resource optimization</li>
                    <li>Unified infrastructure for Layer 2 and 3 services</li>
                    <li>Cost-effectiveness through network convergence</li>
                </ul>
            </div>

            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-project-diagram"></i>
                </div>
                <h3>SD-WAN</h3>
                <p>Golden Lines Company GLC offers a Software-defined Wide Area Network (SD-WAN), a virtual architecture for wide area networks that allows enterprises to utilize a combination of transport services.</p>
                <ul>
                    <li>Enhanced network resilience</li>
                    <li>Quality of Service (QoS) guarantees</li>
                    <li>Robust security measures</li>
                    <li>Optimized network performance</li>
                    <li>Dynamic routing capabilities</li>
                    <li>Simplified administration and troubleshooting</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Benefits Section - Redesigned -->
    <section class="benefits-section fade-in" id="benefits">
        <div class="section-header">
            <h2 class="fade-in">Benefits of Our Data Services</h2>
            <p class="fade-in">Our enterprise-grade data connectivity solutions provide numerous advantages for your business</p>
        </div>
        <div class="benefits-container">
            <div class="benefit-card fade-in">
                <div class="benefit-icon">
                    <i class="fas fa-tachometer-alt"></i>
                </div>
                <h3 class="benefit-title">Dedicated Bandwidth</h3>
                <p class="benefit-text">Enjoy reliable 1:1 dedicated bandwidth ensuring consistent connectivity for all your business applications.</p>
            </div>
            
            <div class="benefit-card fade-in">
                <div class="benefit-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3 class="benefit-title">Enhanced Security</h3>
                <p class="benefit-text">Implement robust protection measures to safeguard your valuable business data and communications.</p>
            </div>
            
            <div class="benefit-card fade-in">
                <div class="benefit-icon">
                    <i class="fas fa-plug"></i>
                </div>
                <h3 class="benefit-title">Seamless Integration</h3>
                <p class="benefit-text">Effortlessly integrate our solutions with your existing infrastructure without disrupting operations.</p>
            </div>
            
            <div class="benefit-card fade-in">
                <div class="benefit-icon">
                    <i class="fas fa-tasks"></i>
                </div>
                <h3 class="benefit-title">Reduced IT Burden</h3>
                <p class="benefit-text">Lower your network management workload, allowing your IT teams to focus on strategic initiatives.</p>
            </div>
            
            <div class="benefit-card fade-in">
                <div class="benefit-icon">
                    <i class="fas fa-headset"></i>
                </div>
                <h3 class="benefit-title">24/7 Support</h3>
                <p class="benefit-text">Rest easy with round-the-clock technical support and monitoring for your critical network services.</p>
            </div>
            
            <div class="benefit-card fade-in">
                <div class="benefit-icon">
                    <i class="fas fa-expand-arrows-alt"></i>
                </div>
                <h3 class="benefit-title">Scalable Solutions</h3>
                <p class="benefit-text">Implement flexible connectivity options that grow alongside your business needs and objectives.</p>
            </div>
        </div>
        <p class="fade-in">Let us help you leverage the power of our advanced data services to take your business to the next level.</p>
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