<?php
  include 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPVPN Services - Golden Lines Company</title>
    <link rel="stylesheet" href="css/ipvpn.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <!-- IPVPN Heading -->
    <header class="main-heading">
        <h1>IPVPN Services</h1>
    </header>

    <!-- Hero Section -->
    <section class="hero fade-in">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Advanced Network Connectivity Solutions</h1>
                <p>Golden Lines Company offers cutting-edge IPVPN services designed to transform your network infrastructure with Layer 3 and Layer 2 Virtual Private Network solutions.</p>
                <p>Our comprehensive IPVPN services provide secure, scalable, and efficient communication networks tailored to meet the complex connectivity needs of modern businesses.</p>
            </div>
            <div class="hero-image">
                <img src="https://png.pngtree.com/thumb_back/fh260/background/20230702/pngtree-3d-rendered-abstract-tech-background-with-a-dark-theme-image_3739440.jpg"/>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section fade-in">
        <div class="section-header">
            <h2>Our IPVPN Services</h2>
        </div>
        <div class="services-container">
            <div class="services-grid">
                <div class="service-card fade-in">
                    <h3>L3 VPN</h3>
                    <a href="#" class="read-more" data-modal="1">Read More</a>
                </div>
                <div class="service-card fade-in">
                    <h3>L2 VPN</h3>
                    <a href="#" class="read-more" data-modal="2">Read More</a>
                </div>
                <div class="service-card fade-in">
                    <h3>SD-WAN</h3>
                    <a href="#" class="read-more" data-modal="3">Read More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="benefits-section fade-in">
        <div class="section-header">
            <h2>Benefits of Our IPVPN Services</h2>
        </div>
        <div class="benefits-container">
            <div class="benefits-content">
                <div class="benefits-list">
                    <ul>
                        <li>Secure Network Connectivity</li>
                        <li>Scalable Infrastructure</li>
                        <li>Cost-Effective Solutions</li>
                        <li>Efficient Traffic Routing</li>
                        <li>Flexible Deployment</li>
                        <li>Enhanced Data Security</li>
                        <li>Improved Network Performance</li>
                        <li>Reduced Latency</li>
                        <li>Multi-Site Connectivity</li>
                        <li>Simplified Network Management</li>
                        <li>Private Network Capabilities</li>
                        <li>Intelligent Traffic Engineering</li>
                    </ul>
                </div>
                <div class="benefits-image">
                    <img src="https://png.pngtree.com/thumb_back/fh260/background/20230702/pngtree-3d-rendered-abstract-tech-background-with-a-dark-theme-image_3739440.jpg"/>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Popups -->
    <div id="1" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <h2>L3 VPN - IP Virtual Private Network</h2>
            <p>Our L3 VPN service revolutionizes network connectivity through a peer-to-peer model using Border Gateway Protocol (BGP). Connect any work site across the Kingdom to our local network with stable, secure, and efficient communication.</p>
            <p>Key Features:
            <ul>
            <li>    - Robust and Scalable Network Solution</li>
            <li>    - Local Traffic Routing</li>
            <li>    - Enhanced Data Security</li>
            <li>    - Minimal Connection Delays</li>
            </ul>
            </p>
        </div>
    </div>

    <div id="2" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <h2>L2 VPN - Layer 2 Virtual Private Network</h2>
            <p>Our L2 VPN solution creates private connections between two endpoints within an IP or MPLS network. Enjoy a powerful network replication that maintains your data confidentiality while leveraging our infrastructure.</p>
            <p>Key Benefits:
            <ul>
            <li>    - Unified Infrastructure Support</li>
            <li>     - Cost-Effective Network Management</li>
            <li>     - Operational Efficiency</li>
            <li>     - Enhanced Privacy</li>
            </ul>
            </p>
        </div>
    </div>

    <div id="3" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <h2>SD-WAN - Software-Defined Wide Area Network</h2>
            <p>Our SD-WAN solution provides a virtual network architecture that enables enterprises to utilize multiple transport services, enhancing network resilience, performance, and security.</p>
            <p>Key Advantages:
            <ul>
            <li>     - Cost Reduction</li>
            <li>    - Intelligent Traffic Management</li>
            <li>     - Dynamic Routing</li>
            <li>    - Multiple Connection Type Support</li>
            <li>     - Enhanced Application Performance</li>
            </ul>
            </p>
        </div>
    </div>

    <script>
        // The same JavaScript from the previous page can be used here
        document.addEventListener('DOMContentLoaded', () => {
            // Modal Functionality
            const readMoreButtons = document.querySelectorAll('.read-more');
            const modals = document.querySelectorAll('.modal');
            const closeButtons = document.querySelectorAll('.close-btn');

            // Open Modal
            readMoreButtons.forEach(button => {
                button.addEventListener('click', (e) => {
                    e.preventDefault();
                    const modalId = button.getAttribute('data-modal');
                    const modal = document.getElementById(modalId);
                    if (modal) {
                        modal.style.display = 'block';
                        modal.style.opacity = '0';
                        modal.style.transform = 'scale(0.7)';
                        
                        requestAnimationFrame(() => {
                            modal.style.transition = 'all 0.3s cubic-bezier(0.215, 0.610, 0.355, 1)';
                            modal.style.opacity = '1';
                            modal.style.transform = 'scale(1)';
                        });
                    }
                });
            });

            // Close Modal
            closeButtons.forEach(closeBtn => {
                closeBtn.addEventListener('click', () => {
                    const modal = closeBtn.closest('.modal');
                    if (modal) {
                        modal.style.opacity = '0';
                        modal.style.transform = 'scale(0.7)';
                        
                        setTimeout(() => {
                            modal.style.display = 'none';
                            modal.style.transform = 'scale(1)';
                        }, 300);
                    }
                });
            });

            // Close Modal when clicking outside
            window.addEventListener('click', (e) => {
                if (e.target.classList.contains('modal')) {
                    const modal = e.target;
                    modal.style.opacity = '0';
                    modal.style.transform = 'scale(0.7)';
                    
                    setTimeout(() => {
                        modal.style.display = 'none';
                        modal.style.transform = 'scale(1)';
                    }, 300);
                }
            });

            // Fade In Animations
            const fadeInElements = document.querySelectorAll('.fade-in');
            
            const observerOptions = {
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach((entry, index) => {
                    if (entry.isIntersecting) {
                        setTimeout(() => {
                            entry.target.style.transition = 'all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1)';
                            entry.target.style.opacity = '0';
                            entry.target.style.transform = 'translateY(20px)';
                            
                            requestAnimationFrame(() => {
                                entry.target.style.opacity = '1';
                                entry.target.style.transform = 'translateY(0)';
                            });
                        }, index * 100);

                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            fadeInElements.forEach(element => {
                element.style.opacity = '0';
                element.style.transform = 'translateY(20px)';
                observer.observe(element);
            });
        });
    </script>
</body>
</html>
<?php
  include 'includes/footer.php';
?>