<?php
  include 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITC Services -Networking, CCTV & LED screens</title>
    <link rel="stylesheet" href="css/ict-services.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
    .hero {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('images/loww.jpg') no-repeat center center/cover;
            color: var(--text-white);
            text-align: center;
            padding: 200px 15px; /* Increased from 120px to 200px */
            position: relative;
            overflow: hidden;
        }
      /* Enhanced Header Text Styling */
      .hero .hero-content h1 {
        /* font-size: 3.5rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 4px;
        margin-bottom: 20px;
        text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.6);
        position: relative;
        display: inline-block; */


        font-size: clamp(28px, 5vw, 54px);
        margin-bottom: 20px;
        color: var(--primary-color);
        text-transform: uppercase;
        letter-spacing: 2px;
        text-shadow: 1px 1px 10px var(--primary-color);
    }
    
    /* .hero .hero-content h1:after {
        content: '';
        position: absolute;
        width: 60%;
        height: 3px;
        background: linear-gradient(90deg, transparent, #fff, transparent);
        bottom: -10px;
        left: 20%;
    } */
    
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

     /* Media Queries for Responsive Design */
     @media screen and (max-width: 768px) {
        .hero {
            padding: 60px 15px;
        }
        
        .hero .hero-content h1 {
            letter-spacing: 1px;
        }
    }

    @media screen and (max-width: 480px) {
        .hero {
            padding: 60px 10px;
        }
        
        .hero .hero-content h1:after {
            width: 80%;
            left: 10%;
        }
    }
</style>
</head>
<body>
<section class="hero fade-in">
        <div class="hero-content" >
            <h1 class="fade-in">LOW CURRENT SERVICES</h1>
        </div>
    </section>
    <section class="itc-services-section fade-in">  
        <div class="itc-services-container">
            <div class="itc-services-content">
                <div class="itc-services-text">
                    <h3>Cabling and Networking Works</h3>
                        <p>GLC provides Cabling and Networking management The cable is the primary medium for transmitting information between network devices, playing a crucial role in local area networks (LANs). LANs utilize various types of wires, and the line choice depends on network topology, protocol, and size. Understanding the characteristics of different cable types is essential for building a successful network.</p>
                </div>
                <div class="itc-services-image">
                    <img src="images/network1.jpg" alt="Cabling and Networking Works" style="width:90%; height:auto;">
                </div>
            </div>
        </div>
        <div class="divider "></div>
        <div class="itc-services-container">
            <div class="itc-services-content">
                <div class="itc-services-image">
                    <img src="images/cctv.avif" alt="CCTV Cameras" style="width:90%; height:auto;">
                </div>
                <div class="itc-services-text">
                    <h3>CCTV Cameras</h3>
                <p>GLC OFFERS CCTV systems offer a range of advantages, including crime deterrence, increased safety, and the ability to monitor the surveillance feed remotely. By utilizing CCTV technology, organizations and authorities can enhance security, improve safety measures, and respond effectively to threats or incidents. We give the best quality with a competitive rate and professional work service.</p>
                </div>
            </div>
        </div>
        <div class="divider "></div>
        <div class="itc-services-container">
            <div class="itc-services-content">
                <div class="itc-services-text">
                    <h3>Interactive LED Screens</h3>
                    <p>GLC offers its clients Interactive LED screens and advanced display devices that combine LED technology with touch-sensitive capabilities to create a dynamic and engaging user experience. These screens allow users to interact directly with the content displayed on the net through touch gestures, such as tapping, swiping, and pinching. Interactive LED screens enable active participation and engagement.
                         Users can navigate through menus, interact with multimedia elements, draw, write, annotate, and perform various actions directly on the screen. This interactivity enhances communication, collaboration, and user immersion.</p>
                    <p>GOLDEN LINES COMPANY Technologies fully comprehends that and hence offers cutting-edge Digital Signage Solutions for indoor and outdoor supply and installation, including a license that has an HD screen cased in a robust body and when placed correctly within an outlet can significantly.</p>
                </div>
                <div class="itc-services-image">
                    <img src="images/led.jpg" alt="Interactive LED Screens" style="width:90%; height:auto;">
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