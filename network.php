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
</head>
<body>
    <section class="itc-services-section fade-in">  
        <div class="section-header">
            <h2>LOW CURRENT SERVICES</h2>
        </div>
        
        <div class="itc-services-container">
            <div class="itc-services-content">
                <div class="itc-services-text">
                    <h3>Cabling and Networking Works</h3>
                        <p>GLC provides Cabling and Networking management The cable is the primary medium for transmitting information between network devices, playing a crucial role in local area networks (LANs). LANs utilize various types of wires, and the line choice depends on network topology, protocol, and size. Understanding the characteristics of different cable types is essential for building a successful network.</p>
                </div>
                <div class="itc-services-image">
                    <img src="images/network1.jpg" alt="Cloud Infrastructure Illustration">
                </div>
            </div>
        </div>
        <div class="divider "></div>
        <div class="itc-services-container">
            <div class="itc-services-content">
                <div class="itc-services-image">
                    <img src="images/network2.jpg" alt="Cloud Infrastructure Illustration">
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
                    <h3>Interactive LED Screenss</h3>
                    <p>GLC offers its clients Interactive LED screens and advanced display devices that combine LED technology with touch-sensitive capabilities to create a dynamic and engaging user experience. These screens allow users to interact directly with the content displayed on the net through touch gestures, such as tapping, swiping, and pinching. Interactive LED screens enable active participation and engagement.
                         Users can navigate through menus, interact with multimedia elements, draw, write, annotate, and perform various actions directly on the screen. This interactivity enhances communication, collaboration, and user immersion.</p>
                    <p>GOLDEN LINES COMPANY Technologies fully comprehends that and hence offers cutting-edge Digital Signage Solutions for indoor and outdoor supply and installation, including a license that has an HD screen cased in a robust body and when placed correctly within an outlet can significantly.</p>
                </div>
                <div class="itc-services-image">
                    <img src="images/network3.jpg" alt="Cloud Infrastructure Illustration">
                </div>
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