<?php
  include 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Services - Golden Lines Company</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --card-hover-bg: #252525;
            --modal-bg: rgba(0, 0, 0, 0.8);
            --gold-accent: #C4A968;
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
        }

        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            background-color: var(--secondary-color);
            color: var(--text-light);
            min-width: 320px;
        }

        /* Header Styling */
        .main-heading {
            text-align: center;
            padding: 1rem;
            margin-top: 5rem;
        }

        .main-heading h1 {
            font-size: clamp(28px, 5vw, 54px);
            margin-bottom: 20px;
            color: var(--primary-color);
            text-transform: uppercase;
            letter-spacing: 2px;
            text-shadow: 1px 1px 10px var(--primary-color);
        }

        /* Hero Section */
        .hero {
            display: flex;
            padding: 1rem 1rem;
            background-color: var(--secondary-color);
        }

        .hero-content {
            display: flex;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            gap: 2rem;
        }

        .hero-text {
            flex: 1;
        }

        .hero-text h1 {
            color: var(--gold-accent);
            margin-bottom: 1rem;
            font-size: 2.5rem;
        }

        .hero-text p {
            margin-bottom: 1rem;
            color: var(--text-light);
            text-align: justify;
        }

        .hero-image {
            flex: 1;
        }

        .hero-image img {
            max-width: 100%;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.3);
        }

        /* Benefits Section */
        .benefits-section {
            padding: 4rem 2rem;
        }

        .benefits-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            gap: 2rem;
        }

        .benefits-list {
            flex: 1;
        }

        .benefits-list ul {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
            list-style-type: none;
        }

        .benefits-list li {
            display: flex;
            align-items: center;
            margin-bottom: 0.5rem;
            color: var(--text-light);
        }

        .benefits-list li::before {
            content: '✔';
            color: var(--primary-color);
            margin-right: 10px;
            font-weight: bold;
        }

        .benefits-image {
            flex: 1;
        }

        .benefits-image img {
            max-width: 100%;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.3);
        }

        .section-header {
            text-align: center;
            margin-bottom: 3rem;
            position: relative;
        }

        .section-header h2 {
            color: var(--primary-color);
            font-size: 2.5rem;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2px;
            position: relative;
            display: inline-block;
        }
        
        /* Services Section */
        .services-section {
            padding: 4rem 2rem;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1.5rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .service-card {
            background-color: var(--card-bg);
            border-radius: 10px;
            padding: 20px;
            text-align: left;
            transition: all 0.3s ease;
            border: 1px solid rgba(196,169,104,0.2);
            position: relative;
            overflow: hidden;
            height: 100%;
        }

        .service-card:hover {
            background-color: var(--card-hover-bg);
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.3);
            border-color: var(--primary-color);
        }

        .service-card h3 {
            color: var(--primary-color);
            margin-bottom: 15px;
            font-size: 18px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .service-card p {
            font-size: 14px;
            margin-bottom: 15px;
        }

        .service-card ul {
            list-style-type: none;
            margin-left: 5px;
            margin-bottom: 15px;
        }

        .service-card ul li {
            margin-bottom: 8px;
            position: relative;
            padding-left: 20px;
            font-size: 14px;
        }

        .service-card ul li:before {
            content: "•";
            color: var(--primary-color);
            font-weight: bold;
            position: absolute;
            left: 0;
        }

        .read-more {
            display: inline-block;
            margin-top: 1rem;
            color: var(--primary-color);
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
            cursor: pointer;
        }

        .read-more:hover {
            color: var(--text-white);
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: var(--modal-bg);
        }

        .modal-content {
            background-color: var(--secondary-color);
            margin: 15% auto;
            padding: 2rem;
            border-radius: 10px;
            max-width: 600px;
            position: relative;
            border: 2px solid var(--primary-color);
        }

        .modal-content h3 {
            color: var(--primary-color);
            margin-bottom: 20px;
            font-size: 1.5rem;
            text-transform: uppercase;
        }

        .close-btn {
            color: var(--primary-color);
            float: right;
            font-size: 2rem;
            font-weight: bold;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .close-btn:hover {
            color: var(--text-white);
        }

        /* CTA Section */
        .cta-section {
            text-align: center;
            padding: 4rem 2rem;
            background-color:#1e1e1e;
            margin: 2rem 0;
            border-radius: 10px;
        }

        .cta-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .cta-content h2 {
            color: var(--primary-color);
            margin-bottom: 1.5rem;
            font-size: 2rem;
        }

        .cta-button {
            display: inline-block;
            padding: 1rem 2rem;
            background-color: var(--primary-color);
            color: var(--secondary-color);
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .cta-button:hover {
            background-color: var(--text-white);
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.3);
        }

        /* Footer */
        footer {
            padding: 2rem;
            text-align: center;
            background-color: #000;
            color: var(--text-light);
            margin-top: 2rem;
        }

        .social-icons {
            margin: 1rem 0;
        }

        .social-icons a {
            display: inline-block;
            color: var(--primary-color);
            margin: 0 10px;
            font-size: 1.5rem;
            transition: color 0.3s ease;
        }

        .social-icons a:hover {
            color: var(--text-white);
        }

        /* Animations */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }

        .fade-in.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* Service Details Collapsible */
        .service-details {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s ease;
        }

        .service-details.expanded {
            max-height: 1000px;
        }

        /* Responsive Design */
        @media screen and (max-width: 1024px) {
            .services-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .hero-content,
            .benefits-content {
                flex-direction: column;
                text-align: center;
            }
        }

        @media screen and (max-width: 768px) {
            .hero-text h1{
                font-size: 18px;
            }

            .hero-text p{
                font-size: 14px;
            }
            
            .services-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 0.8rem;
            }

            .service-card{
                padding: 8px;
                border-radius: 2px;
            }

            .section-header h2 {
                font-size: 18px;
            }

            .service-card h3 {
                font-size: 10px;
            }

            .read-more{
                margin-top: -6px;
                font-size: 8px;
            }

            .modal-content{
                font-size: 10px;
            }

            .benefits-list ul {
                gap: 0.5rem;
            }
            
            .benefits-list li {
                margin-bottom: 0.5rem;
                font-size: 10px;
                text-align: start;
            }
        }

        @media screen and (max-width: 480px) {
            .services-grid {
                grid-template-columns: 1fr;
            }
            
            .benefits-list ul {
                grid-template-columns: 1fr;
            }
            
            .section-header h2 {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <div class="main-heading animate__animated animate__fadeIn">
        <h1>Data Services</h1>
    </div>
    
    <section class="hero">
        <div class="hero-content">
            <div class="hero-text animate__animated animate__fadeInLeft">
                <h1>Enterprise-Grade Connectivity Solutions</h1>
                <p>Golden Lines Company offers comprehensive data services tailored to meet the unique needs of businesses of all sizes. Our enterprise-grade solutions provide the backbone for your digital operations, ensuring seamless connectivity, security, and performance.</p>
                <p>Whether you're looking for dedicated internet access, secure VPN connections, or advanced SD-WAN solutions, our team of experts will design and implement the perfect solution for your business requirements.</p>
            </div>
            <div class="hero-image animate__animated animate__fadeInRight">
                <img src="https://png.pngtree.com/thumb_back/fh260/background/20230702/pngtree-3d-rendered-abstract-tech-background-with-a-dark-theme-image_3739440.jpg" alt="Data Services Network">
            </div>
        </div>
    </section>
    
    <section class="services-section">
        <div class="section-header">
            <h2>Our Data Services</h2>
        </div>
        
        <div class="services-grid">
            <!-- DIA Service -->
            <div class="service-card fade-in">
                <h3>Dedicated Internet Access (DIA)</h3>
                <p>High-speed, secure internet on a 1:1 basis via fiber and microwave point-to-point links.</p>
                <a class="read-more" data-service="dia">Read More</a>
            </div>
            
            <!-- IP VPN L3 Service -->
            <div class="service-card fade-in">
                <h3>IP VPN L3</h3>
                <p>Revolutionize network connectivity with our peer-to-peer model using Border Gateway Protocol.</p>
                <a class="read-more" data-service="ipvpn">Read More</a>
            </div>
            
            <!-- L2 VPN Service -->
            <div class="service-card fade-in">
                <h3>PLL L2 Service</h3>
                <p>Layer 2 VPN solution replicating physical sub-networks within IP or MPLS networks.</p>
                <a class="read-more" data-service="l2vpn">Read More</a>
            </div>
            
            <!-- SD-WAN Service -->
            <div class="service-card fade-in">
                <h3>SD-WAN</h3>
                <p>Software-defined architecture allowing enterprises to utilize multiple transport services.</p>
                <a class="read-more" data-service="sdwan">Read More</a>
            </div>
        </div>
    </section>
    
    <section class="benefits-section">
        <div class="section-header">
            <h2>Benefits of Our Data Services</h2>
        </div>
        
        <div class="benefits-content">
            <div class="benefits-list fade-in">
                <ul>
                    <li>Dedicated 1:1 bandwidth ensuring reliable connectivity</li>
                    <li>Enhanced security with robust protection measures</li>
                    <li>Seamless integration with existing infrastructure</li>
                    <li>Reduced network management burden on IT teams</li>
                    <li>24/7 technical support and monitoring</li>
                    <li>Scalable solutions that grow with your business</li>
                    <li>Cost-effective networking through convergence</li>
                    <li>Improved application performance and user experience</li>
                </ul>
            </div>
            <div class="benefits-image fade-in">
                <img src="https://png.pngtree.com/thumb_back/fh260/background/20230702/pngtree-3d-rendered-abstract-tech-background-with-a-dark-theme-image_3739440.jpg" alt="Network Benefits">
            </div>
        </div>
    </section>
    
    <section class="cta-section fade-in">
        <div class="cta-content">
            <h2>Ready to Transform Your Network Infrastructure?</h2>
            <p>Contact our team of experts to discover the perfect data service solution for your business needs.</p>
            <button class="cta-button">Get Started Today</button>
        </div>
    </section>
    
    <!-- Modals for each service -->
    <!-- DIA Modal -->
    <div id="diaModal" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <h3>Dedicated Internet Access (DIA)</h3>
            <p>Our DIA solution is engineered for enterprises aiming to provide their employees with high-speed, secure Internet access on a 1:1 basis ensuring every application benefits from dedicated, reliable connectivity.</p>
            
            <p><strong>Key Features:</strong></p>
            <ul>
                <li>Enterprise-grade 1:1 dedicated bandwidth</li>
                <li>Available via fiber and microwave point-to-point links</li>
                <li>Support for mission-critical applications</li>
                <li>Enhanced IT productivity</li>
                <li>Comprehensive backup solutions</li>
            </ul>
            
            <p>Designed to support a range of mission-critical data applications, DIA seamlessly facilitates:</p>
            <ul>
                <li>Internet E-mail</li>
                <li>Web-based Applications</li>
            </ul>
            
            <p>When you choose Golden Lines Company's Dedicated Internet Connection, your IT team is liberated from the burdensome daily network management tasks, allowing them to focus on strategic initiatives that propel your business forward. Our comprehensive DIA package now includes a robust backup solution—ensuring continuous operation and data integrity even in the event of unexpected network disruptions.</p>
        </div>
    </div>
    
    <!-- IP VPN L3 Modal -->
    <div id="ipvpnModal" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <h3>IP VPN L3</h3>
            <p>IP VPN Internet Protocol Virtual Private Network L3 revolutionizes network connectivity through its peer-to-peer model, utilizing Border Gateway Protocol (BGP) to distribute VPN-related information.</p>
            
            <p><strong>Key Benefits:</strong></p>
            <ul>
                <li>Robust, scalable, secure communication solution</li>
                <li>Connect any work site across the Kingdom to our local network</li>
                <li>Route all traffic locally for stable connections</li>
                <li>Enhanced data security</li>
                <li>Minimal connection delays</li>
            </ul>
            
            <p>By establishing a third-level VPN connection, you can connect any work site for your company, anywhere in the Kingdom, to our local network. With this service, you can route all your traffic locally, resulting in a stable connection without delays and more fantastic data and information security.</p>
        </div>
    </div>
    
    <!-- L2 VPN Modal -->
    <div id="l2vpnModal" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <h3>PLL L2 Service (Layer 2 VPN)</h3>
            <p>A GOLDEN LINES COMPANY GLC Layer 2 Virtual Private Network (L2 VPN) is a powerful solution replicating a physical sub-network within an IP or MPLS network by establishing private connections between two endpoints.</p>
            
            <p><strong>Key Advantages:</strong></p>
            <ul>
                <li>Private connections between endpoints</li>
                <li>Enhanced confidentiality of customer data</li>
                <li>Resource optimization</li>
                <li>Unified infrastructure for Layer 2 and 3 services</li>
                <li>Cost-effectiveness through network convergence</li>
            </ul>
            
            <p>To create an L2VPN network, collaboration between the service provider and the customer is essential. The service provider is responsible for setting up the Layer 2 connectivity while you utilize the data link resources to build your network. One notable advantage is that we don't require detailed information about your network topology, ensuring the confidentiality of customer data while utilizing our resources to establish the network.</p>
            
            <p>The benefits of implementing an L2VPN are twofold. Firstly, it enables the service provider to utilize a single infrastructure to support both Layer 2 and 3 services, enhancing operational efficiency. The service provider can streamline their network management processes and reduce costs by eliminating the need for separate infrastructures. Secondly, L2VPNs offer cost-effectiveness through the convergence of IP or MPLS networks. This convergence removes the need for maintaining multiple network infrastructures, further contributing to cost savings.</p>
        </div>
    </div>
    
    <!-- SD-WAN Modal -->
    <div id="sdwanModal" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <h3>SD-WAN</h3>
            <p>Golden Lines Company GLC offers a Software-defined Wide Area Network (SD-WAN), a virtual architecture for wide area networks that allows enterprises to utilize a combination of transport services.</p>
            
            <p><strong>Core Features:</strong></p>
            <ul>
                <li>Enhanced network resilience</li>
                <li>Quality of Service (QoS) guarantees</li>
                <li>Robust security measures</li>
                <li>Optimized network performance</li>
                <li>Dynamic routing capabilities</li>
                <li>Simplified administration and troubleshooting</li>
            </ul>
            
            <p>One of the key advantages of implementing SD-WAN is the ability to reduce costs by leveraging transport independence across multiple connection types. This includes traditional Multiprotocol Label Switching (MPLS) and the newer 4G/5G LTE technologies. By eliminating the reliance on a single transport service, enterprises can achieve cost savings and diversify their network connectivity options.</p>
            
            <p>SD-WAN also significantly improves application performance and increases agility within the network. The intelligent traffic management ensures that critical applications receive the necessary bandwidth and prioritization, resulting in optimized performance, reduced latency, and enhanced user experience.</p>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Animation on scroll
            function checkVisibility() {
                $('.fade-in').each(function() {
                    const elementTop = $(this).offset().top;
                    const elementVisible = 150;
                    const windowHeight = $(window).height();
                    const scrollY = $(window).scrollTop();
                    
                    if (elementTop < (scrollY + windowHeight - elementVisible)) {
                        $(this).addClass('active');
                    }
                });
            }
            
            // Initial check
            checkVisibility();
            
            // Check on scroll
            $(window).on('scroll', function() {
                checkVisibility();
            });
            
            // Modal functionality
            $('.read-more').on('click', function() {
                const service = $(this).data('service');
                
                if (service === 'dia') {
                    $('#diaModal').css('display', 'block');
                } else if (service === 'ipvpn') {
                    $('#ipvpnModal').css('display', 'block');
                } else if (service === 'l2vpn') {
                    $('#l2vpnModal').css('display', 'block');
                } else if (service === 'sdwan') {
                    $('#sdwanModal').css('display', 'block');
                }
            });
            
            // Close modal when clicking X
            $('.close-btn').on('click', function() {
                $(this).closest('.modal').css('display', 'none');
            });
            
            // Close modal when clicking outside
            $(window).on('click', function(event) {
                if ($(event.target).hasClass('modal')) {
                    $('.modal').css('display', 'none');
                }
            });
        });
    </script>
</body>
</html>
<?php
  include 'includes/footer.php';
?>