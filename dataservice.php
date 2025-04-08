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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #C4A968;
            --secondary-color: #0A1F44;
            --text-light: #aaa;
            --text-white: #fff;
            --card-bg: #113370;
            --card-hover-bg: #113270bf;
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

        .itc-services-section {
            padding: 4rem 2rem;
            perspective: 1000px;
        }

        .section-header {
            text-align: center;
            padding: 1rem;
            margin-top: 3rem;
        }

        .section-header h2 {
            font-size: clamp(28px, 5vw, 54px);
            margin-bottom: 0px;
            color: var(--primary-color);
            text-transform: uppercase;
            letter-spacing: 2px;
            text-shadow: 1px 1px 10px var(--primary-color);
            transform: translateY(100%);
            opacity: 0;
            transition: transform 0.8s ease-out, opacity 0.8s ease-out;
        }

        .section-header.visible h2 {
            transform: translateY(0);
            opacity: 1;
        }

        .divider {
            height: 1px; 
            background-color: #9b9b9b; 
            width: 80%; 
            margin: 20px auto;
        }

        .itc-services-container {
            max-width: 1200px;
            margin: 0 auto;
            text-align: justify;
            padding-bottom: 30px;
            padding-top: 30px;
            overflow-x: hidden;
            width: 100%;
            box-sizing: border-box;
        }

        .itc-services-content {
            display: flex;
            align-items: center;
            gap: 2rem;
            transform: rotateX(-10deg);
            opacity: 0;
            transition: transform 0.8s ease-out, opacity 0.8s ease-out;
        }

        .itc-services-container.visible .itc-services-content {
            transform: rotateX(0);
            opacity: 1;
        }

        .itc-services-text {
            flex: 1;
            transform: translateX(-50px);
            opacity: 0;
            transition: transform 0.8s ease-out, opacity 0.8s ease-out;
            transition-delay: 0.4s;
        }

        .itc-services-container.visible .itc-services-text {
            transform: translateX(0);
            opacity: 1;
        }

        .itc-services-container h3 {
            color: var(--primary-color);
            margin-bottom: 1rem;
            font-size: 2rem;
            position: relative;
            display: inline-block;
            opacity: 1;
        }

        .itc-services-container h3::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 50%;
            height: 3px;
            background-color: var(--primary-color);
            transform: scaleX(0);
            transition: transform 0.6s ease-out;
            transition-delay: 0.8s;
        }

        .itc-services-container.visible h3::after {
            transform: scaleX(1);
        }

        .itc-services-text h3 {
            color: var(--primary-color);
            margin-bottom: 1rem;
            font-size: 2rem;
            position: relative;
            display: inline-block;
        }

        .itc-services-text h3::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 50%;
            height: 3px;
            background-color: var(--primary-color);
            transform: scaleX(0);
            transition: transform 0.6s ease-out;
            transition-delay: 0.8s;
        }

        .itc-services-container.visible .itc-services-text h3::after {
            transform: scaleX(1);
        }

        .itc-services-text p {
            margin-bottom: 1rem;
            text-align: justify;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
            transition-delay: 1s;
        }

        .itc-services-container.visible .itc-services-text p {
            opacity: 1;
            transform: translateY(0);
        }

        .itc-services-features {
            background-color: var(--card-bg);
            padding: 1.5rem;
            border-radius: 10px;
            margin: 1rem 0;
            border: 1px solid rgba(196,169,104,0.2);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
            transform: scale(0.9);
            opacity: 0;
            transition: transform 0.6s ease-out, opacity 0.6s ease-out;
            transition-delay: 1.2s;
        }

        .itc-services-container.visible .itc-services-features {
            transform: scale(1);
            opacity: 1;
        }

        .itc-services-features h4 {
            color: var(--primary-color);
            margin-bottom: 0.5rem;
            font-size: 1.2rem;
        }

        .itc-services-features ul {
            list-style-type: none;
            padding-left: 0;
        }

        .itc-services-features li {
            position: relative;
            padding-left: 25px;
            margin-bottom: 0.5rem;
            opacity: 0;
            transform: translateX(-20px);
            transition: transform 0.5s ease-out, opacity 0.5s ease-out;
        }

        .itc-services-features li::before {
            content: '✔';
            color: var(--primary-color);
            position: absolute;
            left: 0;
            font-weight: bold;
        }

        .itc-services-container.visible .itc-services-features li:nth-child(1) { 
            transition-delay: 1.4s;
            opacity: 1;
            transform: translateX(0);
        }
        .itc-services-container.visible .itc-services-features li:nth-child(2) { 
            transition-delay: 1.5s;
            opacity: 1;
            transform: translateX(0);
        }
        .itc-services-container.visible .itc-services-features li:nth-child(3) { 
            transition-delay: 1.6s;
            opacity: 1;
            transform: translateX(0);
        }
        .itc-services-container.visible .itc-services-features li:nth-child(4) { 
            transition-delay: 1.7s;
            opacity: 1;
            transform: translateX(0);
        }
        .itc-services-container.visible .itc-services-features li:nth-child(5) { 
            transition-delay: 1.8s;
            opacity: 1;
            transform: translateX(0);
        }
        .itc-services-container.visible .itc-services-features li:nth-child(6) { 
            transition-delay: 1.9s;
            opacity: 1;
            transform: translateX(0);
        }
        .itc-services-container.visible .itc-services-features li:nth-child(7) { 
            transition-delay: 2.0s;
            opacity: 1;
            transform: translateX(0);
        }
        .itc-services-container.visible .itc-services-features li:nth-child(8) { 
            transition-delay: 2.1s;
            opacity: 1;
            transform: translateX(0);
        }
        .itc-services-container.visible .itc-services-features li:nth-child(9) { 
            transition-delay: 2.2s;
            opacity: 1;
            transform: translateX(0);
        }
        .itc-services-container.visible .itc-services-features li:nth-child(10) { 
            transition-delay: 2.3s;
            opacity: 1;
            transform: translateX(0);
        }
        .itc-services-container.visible .itc-services-features li:nth-child(11) { 
            transition-delay: 2.4s;
            opacity: 1;
            transform: translateX(0);
        }

        .itc-hybrid-note {
            font-style: italic;
            color: var(--primary-color);
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
            transition-delay: 2.1s;
        }

        .itc-services-container.visible .itc-hybrid-note {
            opacity: 1;
            transform: translateY(0);
        }

        .itc-services-image {
            flex: 1;
            transform: translateX(50px);
            opacity: 0;
            transition: transform 0.8s ease-out, opacity 0.8s ease-out;
            transition-delay: 0.4s;
        }

        .itc-services-container.visible .itc-services-image {
            transform: translateX(0);
            opacity: 1;
        }

        .itc-services-image img {
            width: 100%; 
            height: auto; 
            max-width: 100%;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.3);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: block; 
            margin: 0 auto; 
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.3);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        /* CTA Section */
        .cta-section {
            text-align: center;
            padding: 4rem 2rem;
            background-color: rgba(196,169,104,0.1);
            margin: 2rem 0;
            border-radius: 10px;
            transform: translateY(50px);
            opacity: 0;
            transition: transform 0.8s ease-out, opacity 0.8s ease-out;
        }

        .cta-section.visible {
            transform: translateY(0);
            opacity: 1;
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

        /* Responsive Design */
        @media screen and (max-width: 1024px) {
            .itc-services-content {
                flex-direction: column;
                text-align: justify;
            }

            .itc-services-text,
            .itc-services-image {
                flex: none;
                width: 100%;
            }

            .section-header h2 {
                font-size: 1.8rem;
            }

            .itc-services-text h3 {
                font-size: 1.5rem;
            }
        }

        @media screen and (max-width: 768px) {
            .itc-services-section {
                padding: 2rem 1rem;
            }

            .divider{
                width: 90%;
            }

            .itc-services-container{
                padding-top: 10px;
                padding-bottom: 10px;
            }

            .itc-services-container h3 {
                font-size:0.9rem ;
            }

            .section-header h2 {
                font-size: 1.2rem;
            }

            .itc-services-text h3 {
                font-size: 0.9rem;
            }

            .itc-services-container p{
                font-size: 0.7rem;
            }

            .itc-services-image img {
                height: 200px;
            }

            .itc-services-features {
                padding: 0.5rem;
                font-size: 0.8rem;
            }

            .itc-services-features li {
                font-size: 0.7rem;
                padding-left: 15px;
            }

            .itc-services-features h4 {
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <section class="itc-services-section">
        <div class="section-header">
            <h2>DATA SERVICES</h2>
        </div>
        
        <div class="itc-services-container">
            <div class="itc-services-content">
                <div class="itc-services-text">
                    <h3>Dedicated Internet Access (DIA)</h3>
                    <p>Our DIA solution is engineered for enterprises aiming to provide their employees with high-speed, secure Internet access on a 1:1 basis ensuring every application benefits from dedicated, reliable connectivity. Designed to support a range of mission-critical data applications, DIA seamlessly facilitates Internet E-mail and Web-based Applications.</p>
                    <p>Delivered robustly via fiber and microwave point-to-point links, our solution is a testament to our exceptional track record in providing unmatched Internet service.</p>
                    
                    <div class="itc-services-features">
                        <h4>Key Features</h4>
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
                    <img src="/api/placeholder/600/400" alt="Data Services Network">
                </div>
            </div>
        </div>
        
        <div class="divider"></div>
        
        <div class="itc-services-container">
            <div class="itc-services-content">
                <div class="itc-services-text">
                    <h3>IP VPN L3</h3>
                    <p>IP VPN Internet Protocol Virtual Private Network L3 revolutionizes network connectivity through its peer-to-peer model, utilizing Border Gateway Protocol (BGP) to distribute VPN-related information. IP VPNs offer a robust, scalable, secure, and efficient communication solution.</p>
                    <p>By establishing a third-level VPN connection, you can connect any work site for your company, anywhere in the Kingdom, to our local network. With this service, you can route all your traffic locally, resulting in a stable connection without delays and more fantastic data and information security.</p>
                    
                    <div class="itc-services-features">
                        <h4>Key Benefits</h4>
                        <ul>
                            <li>Robust, scalable, secure communication solution</li>
                            <li>Connect any work site across the Kingdom to our local network</li>
                            <li>Route all traffic locally for stable connections</li>
                            <li>Enhanced data security</li>
                            <li>Minimal connection delays</li>
                            <li>Border Gateway Protocol implementation</li>
                        </ul>
                    </div>
                </div>
                <div class="itc-services-image">
                    <img src="/api/placeholder/600/400" alt="VPN Services">
                </div>
            </div>
        </div>
        
        <div class="divider"></div>
        
        <div class="itc-services-container">
            <div class="itc-services-content">
                <div class="itc-services-text">
                    <h3>PLL L2 Service</h3>
                    <p>A GOLDEN LINES COMPANY GLC Layer 2 Virtual Private Network (L2 VPN) is a powerful solution replicating a physical sub-network within an IP or MPLS network by establishing private connections between two endpoints. To create an L2VPN network, collaboration between the service provider and the customer is essential.</p>
                    <p>The service provider is responsible for setting up the Layer 2 connectivity while the customer utilizes the data link resources provided by the service provider to build their network. One notable advantage of an L2VPN service is that the service provider doesn't require detailed information about the customer's network topology, ensuring the confidentiality of customer data while utilizing the provider's resources to establish the network.</p>
                    
                    <div class="itc-services-features">
                        <h4>Key Advantages</h4>
                        <ul>
                            <li>Private connections between endpoints</li>
                            <li>Enhanced confidentiality of customer data</li>
                            <li>Resource optimization</li>
                            <li>Unified infrastructure for Layer 2 and 3 services</li>
                            <li>Cost-effectiveness through network convergence</li>
                            <li>Customer network topology privacy</li>
                        </ul>
                    </div>
                </div>
                <div class="itc-services-image">
                    <img src="/api/placeholder/600/400" alt="Layer 2 Services">
                </div>
            </div>
        </div>
        
        <div class="divider"></div>
        
        <div class="itc-services-container">
            <div class="itc-services-content">
                <div class="itc-services-text">
                    <h3>SD-WAN</h3>
                    <p>Golden Lines Company GLC offers a Software-defined Wide Area Network (SD-WAN), a virtual architecture for wide area networks that allows enterprises to utilize a combination of transport services. SD-WANs come with a range of features designed to enhance network resilience, ensure quality of service (QoS), provide robust security measures, and optimize overall network performance.</p>
                    <p>One of the key advantages of implementing SD-WAN is the ability to reduce costs by leveraging transport independence across multiple connection types. This includes traditional Multiprotocol Label Switching (MPLS) and the newer 4G/5G LTE technologies.</p>
                    
                    <div class="itc-services-features">
                        <h4>Core Features</h4>
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
                <div class="itc-services-image">
                    <img src="/api/placeholder/600/400" alt="SD-WAN Services">
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
                            <li>Cost-effective networking through convergence</li>
                            <li>Improved application performance and user experience</li>
                        </ul>
                    </div>
                </div>
                <div class="itc-services-image">
                    <img src="/api/placeholder/600/400" alt="Network Benefits">
                </div>
            </div>
        </div>
    </section>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
            
            // Observe CTA section
            document.querySelectorAll('.cta-section').forEach(element => {
                observer.observe(element);
            });
        });
    </script>
</body>
</html>
<?php
  include 'includes/footer.php';
?>