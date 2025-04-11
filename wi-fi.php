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
    <style>
    .hero {
        background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('images/wii.jpg') no-repeat center center/cover;
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
    
</style>
</head>
<body>
<section class="hero fade-in">
        <div class="hero-content" >
            <h1 class="fade-in">WI-FI SOLUTIONS  </h1>
        </div>
    </section>
    <section class="itc-services-section fade-in">
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
                    <img src="images/wifi1.jpg" alt="wifi" style="width:90%; height:auto;">
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
                    <img src="images/wifi3.jpg" alt="wifi" style="width:70%; height:auto;">
                </div>
            </div>
        </div>

        <div class="divider "></div>

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