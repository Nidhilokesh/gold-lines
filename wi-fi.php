<?php
  include 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wifi Solutions</title>
    <link rel="stylesheet" href="css/ict-services.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
    <section class="itc-services-section fade-in">
        <div class="section-header">
            <h2>WIFI SOLUTIONS</h2>
        </div>
        <div class="itc-services-container">
        <h3>Comprehensive Wireless Connectivity</h3>
            <div class="itc-services-content">            
                <div class="itc-services-text">
                    <p>At GLC, we offer comprehensive Wi-Fi services to meet your unique needs. Our expertise includes:</p>
                    <div class="itc-services-features">
                        <h4>Key Features:</h4>
                        <ul>
                            <li>Reliable and Fast Connectivity: Our Wi-Fi solutions provide seamless and high-speed internet access for indoor and outdoor devices.</li>
                            <li>Secure and Scalable Networks: We design, implement, and optimize robust and secure Wi-Fi networks to ensure your business stays connected and protected.</li>
                            <li>Customized Solutions: Our team tailors Wi-Fi solutions to meet the specific requirements of your organization.</li>
                            <li>Cost-Effective and Flexible: Our Wi-Fi services offer a cost-effective and flexible way to connect, communicate, and collaborate.</li>
                        </ul>
                    </div>                    
                </div>
                <div class="itc-services-image">
                    <img src="images/cloud.png" alt="Cloud Infrastructure Illustration">
                </div>
            </div>
        </div>

        <div class="divider" style="padding-top=10px; padding-bottom=10px;" ></div>
        
        <div class="itc-services-container">
            <div class="itc-services-content">
                <div class="itc-services-text">
                    <h3>Benefits</h3>
                    <div class="itc-services-features">                                        
                        <ul>
                            <li>Enhanced Productivity: Stay connected and productive with our reliable and fast Wi-Fi solutions.</li>
                            <li>Improved Collaboration: Our Wi-Fi services enable seamless communication and collaboration among teams.</li>
                            <li>Increased Efficiency: Our customized solutions help streamline your operations and improve overall efficiency.</li>
                        </ul>
                    </div>
                    <p> Let us help you leverage the power of Wi-Fi technology to take your business to the next level</p>
                </div>
                <div class="itc-services-image">
                    <img src="images/cloud3.png" alt="Cloud Infrastructure Illustration">
                </div>
            </div>
        </div>

        <div class="divider "></div>

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