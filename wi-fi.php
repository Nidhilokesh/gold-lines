<?php
  include 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GLC - Wi-Fi Solutions</title>
    <link rel="stylesheet" href="css/wi-fi.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
    <section class="wifi-solutions-section fade-in">
        <div class="section-header">
            <h2>Wi-Fi Solutions</h2>
        </div>
        <div class="wifi-solutions-container">
            <div class="wifi-solutions-content">
                <div class="wifi-solutions-text">
                    <h3>Comprehensive Wireless Connectivity</h3>
                    <p>Golden Lines Company GLC offers an extensive Wi-Fi solution that empowers indoor and outdoor devices to connect to the internet and communicate wirelessly within a specific range. Our expertise spans the entire spectrum of wireless networking - from design and implementation to optimization.</p>
                    
                    <div class="wifi-solutions-features">
                        <h4>Key Features:</h4>
                        <ul>
                            <li>Indoor and Outdoor Wireless Coverage</li>
                            <li>Robust and Secure Network Design</li>
                            <li>Customized Solutions for Unique Client Needs</li>
                            <li>Scalable Wireless Networking Experiences</li>
                            <li>High-Performance Connectivity</li>
                            <li>Seamless Device Integration</li>
                            <li>Advanced Security Protocols</li>
                            <li>Flexible Deployment Options</li>
                        </ul>
                    </div>
                </div>
                <div class="wifi-solutions-image">
                    <img src="images/wifi1.jpg" alt="Wi-Fi Network Illustration">
                </div>
            </div>
        </div>
        <div class="divider"></div>
        <div class="wifi-solutions-container">
            <div class="wifi-solutions-content">
                <div class="wifi-solutions-image">
                    <img src="images/wifi2.avif" alt="Wi-Fi Network Infrastructure">
                </div>
                <div class="wifi-solutions-text">
                    <h3>Network Benefits</h3>
                    <p>Our Wi-Fi solutions deliver reliable, fast, and scalable wireless networking experiences. By leveraging cutting-edge technology, we enable businesses and organizations to transform their connectivity infrastructure.</p>
                    
                    <div class="wifi-solutions-features">
                        <h4>Advantages:</h4>
                        <ul>
                            <li>Enhanced Business Productivity</li>
                            <li>Cost-Effective Networking Solutions</li>
                            <li>Reduced Infrastructure Complexity</li>
                            <li>Improved Communication Channels</li>
                            <li>Flexible Work Environment Support</li>
                            <li>Seamless Collaboration Tools</li>
                            <li>Future-Ready Connectivity</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider"></div>
        <div class="wifi-solutions-container">
            <div class="wifi-solutions-content">
                <div class="wifi-solutions-text">
                    <h3>Why Choose GLC Wi-Fi Solutions</h3>
                    <div class="wifi-solutions-features">
                        <ul>
                            <li>Local Expertise: Deep understanding of Saudi market needs</li>
                            <li>Customized Design: Tailored network solutions</li>
                            <li>Advanced Security: Robust protection protocols</li>
                            <li>Scalable Infrastructure: Grow with your business</li>
                            <li>24/7 Technical Support</li>
                            <li>Compliance with Local Regulations</li>
                            <li>Cutting-Edge Technology</li>
                            <li>Cost-Effective Implementations</li>
                            <li>Seamless Integration Capabilities</li>
                            <li>Performance Optimization</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
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