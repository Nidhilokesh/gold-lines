<?php
  include 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Services</title>
    <link rel="stylesheet" href="css/ict-services.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
     .hero {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('images/dia2.jpg') no-repeat center center/cover;
            color: var(--text-white);
            text-align: center;
            padding: 120px 15px;
            position: relative;
            overflow: hidden;
        }
      /* Enhanced Header Text Styling */
      .hero .hero-content h1 {
        font-size: 3.5rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 4px;
        margin-bottom: 20px;
        text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.6);
        position: relative;
        display: inline-block;
    }
    
    .hero .hero-content h1:after {
        content: '';
        position: absolute;
        width: 60%;
        height: 3px;
        background: linear-gradient(90deg, transparent, #fff, transparent);
        bottom: -10px;
        left: 20%;
    }
    .hero .hero-content p {
    font-size: clamp(16px, 3vw, 22px);
    margin-bottom: 30px;
    color: var(--text-light);
}
    
    .hero .hero-content {
        max-width: 800px;
        margin: 0 auto;
        animation: fadeInUp 1s ease-out;
    }
    
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    .hero .hero-cta {
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

.hero .hero-cta:hover {
    background-color: var(--text-white);
    transform: translateY(-5px);
    box-shadow: 0 6px 12px rgba(196,169,104,0.3);
}

</style>
</head>
<body>
<section class="hero fade-in" id="ict-services">
        <div class="hero-content">
            <h1 class="fade-in">DATA SERVICES</h1>
            <p class="fade-in">Golden Lines Company is your strategic partner in delivering advanced Information and Communications Technology (ICT) solutions, tailor-made to empower businesses across Saudi Arabia. We bring creativity, expertise, and innovation to the forefront, helping B2B clients unlock their true potential in a rapidly evolving digital landscape.</p>
            <div>
                <a href="#service-details" class="hero-cta fade-in">Our Services</a>
                <a href="contact.php" class="hero-cta fade-in">Contact Us</a>
            </div>
        </div>
    </section>
    <section class="itc-services-section fade-in">

        <div class="itc-services-container">
        <h3>Dedicated Internet Access (DIA)</h3>
            <div class="itc-services-content">            
                <div class="itc-services-text">
                    <p>Our DIA solution is engineered for enterprises aiming to provide their employees with high-speed, secure Internet access on a 1:1 basis ensuring every application benefits from dedicated, reliable connectivity. Designed to support a range of mission-critical data applications, DIA seamlessly facilitates Internet E-mail and Web-based Applications.</p>
                    <div class="itc-services-features">
                        <h4>Key Features:</h4>
                        <ul>
                            <li>Enterprise-grade 1:1 dedicated bandwidth</li>
                            <li>Available via fiber and microwave point-to-point links</li>
                            <li>Support for mission-critical applications</li>
                            <li>Enhanced IT productivity</li>
                            <li>Comprehensive backup solutions</li>
                            <li>Reduced network management burden</li>
                        </ul>
                    </div>                    
                </div>
                <div class="itc-services-image">
                    <img src="images/dia.png" alt="dedicated internet access" style="width:90%; height:auto;">
                </div>
            </div>
        </div>

        <div class="divider"></div>
        
        <div class="itc-services-container">
            <div class="itc-services-content">

            <div class="itc-services-image">
                <img src="images/vpn.png" alt="VPN services" style="width:90%; height:auto;">
            </div>
                <div class="itc-services-text">
                    <h3>IP VPN L3</h3>
                    <p>IP VPN Internet Protocol Virtual Private Network L3 revolutionizes network connectivity through its peer-to-peer model, utilizing Border Gateway Protocol (BGP) to distribute VPN-related information. IP VPNs offer a robust, scalable, secure, and efficient communication solution.</p>
                    <div class="itc-services-features">                                        
                        <ul>
                            <li>Robust, scalable, secure communication solution</li>
                            <li>Connect any work site across the Kingdom to our local network</li>
                            <li>Route all traffic locally for stable connections</li>
                            <li>Enhanced data security</li>
                            <li>Minimal connection delays</li>
                        </ul>
                    </div>
                </div>
                <!-- <div class="itc-services-image">
                    <img src="images/vpn.png" alt="VPN services" style="width:90%; height:auto;">
                </div> -->
            </div>
        </div>

        <div class="divider"></div>
        
        <div class="itc-services-container">
            <div class="itc-services-content">            
                <div class="itc-services-text">
                    <h3>PLL L2 Service</h3>
                    <p>A GOLDEN LINES COMPANY GLC Layer 2 Virtual Private Network (L2 VPN) is a powerful solution replicating a physical sub-network within an IP or MPLS network by establishing private connections between two endpoints.</p>
                    <div class="itc-services-features">
                        <h4>Key Advantages:</h4>
                        <ul>
                            <li>Private connections between endpoints</li>
                            <li>Enhanced confidentiality of customer data</li>
                            <li>Resource optimization</li>
                            <li>Unified infrastructure for Layer 2 and 3 services</li>
                            <li>Cost-effectiveness through network convergence</li>
                        </ul>
                    </div>                    
                </div>
                <div class="itc-services-image">
                    <img src="images/l2.png" alt="L2 Service" style="width:90%; height:auto;">
                </div>
            </div>
        </div>

        <div class="divider"></div>
        
        <div class="itc-services-container">
            <div class="itc-services-content">
                <div class="itc-services-image">
                    <img src="images/sd.png" alt="SD-WAN" style="width:90%; height:auto;">
                </div>
                <div class="itc-services-text">
                    <h3>SD-WAN</h3>
                    <p>Golden Lines Company GLC offers a Software-defined Wide Area Network (SD-WAN), a virtual architecture for wide area networks that allows enterprises to utilize a combination of transport services.</p>
                    <div class="itc-services-features">                                        
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
            </div>
        </div>

        <div class="divider"></div>
        
        <div class="itc-services-container">
            <div class="itc-services-content">
                <div class="itc-services-text">
                    <h3>Benefits of Our Data Services</h3>
                    <div class="itc-services-features">                                        
                        <ul>
                            <li>Dedicated 1:1 bandwidth ensuring reliable connectivity</li>
                            <li>Enhanced security with robust protection measures</li>
                            <li>Seamless integration with existing infrastructure</li>
                            <li>Reduced network management burden on IT teams</li>
                            <li>24/7 technical support and monitoring</li>
                            <li>Scalable solutions that grow with your business</li>
                        </ul>
                    </div>
                    <p>Let us help you leverage the power of our advanced data services to take your business to the next level.</p>
                </div>
                <!-- <div class="itc-services-image">
                    <img src="images/benefits.jpg" alt="Data Service Benefits" style="width:70%; height:auto;">
                </div> -->
            </div>
        </div>

        <div class="divider"></div>

    </section>
    <section class="cta-section">
        <div class="cta-card">
            <div class="cta-content">
                <h2 class="cta-heading">Let's Build Your Vision Together.</h2>
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

            // Observe section headers
            document.querySelectorAll('.section-header').forEach(element => {
                observer.observe(element);
            });
            
            // Observe service containers
            document.querySelectorAll('.itc-services-container').forEach(element => {
                observer.observe(element);
            });
        });
    </script>
</body>
</html>
<?php
  include 'includes/footer.php';
?>