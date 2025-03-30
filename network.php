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
            <h2>Networking, CCTV & LED screens</h2>
        </div>
        
        <div class="itc-services-container">
            <div class="itc-services-content">
                <div class="itc-services-text">
                    <h3>Cabling and Networking Works</h3>
                        <p>GOLDEN LINES COMPANY GLC provides Cabling and Networking management The cable is the primary medium for transmitting information between network devices, playing a crucial role in local area networks (LANs). LANs utilize various types of wires, and the line choice depends on network topology, protocol, and size. Understanding the characteristics of different cable types is essential for building a successful network.</p>
                        <p>GOLDEN LINES COMPANY GLC prides itself in providing the next Gen smart IT solution, with a solid reputation of quality and reliability, providing a wide array of services to individuals and businesses. We do it with the utmost discretion and professionalism. ISO 9001-2008 certified that capable of meeting all IT-related needs to your satisfaction. We provide our clients with the most reliable and stable environment with telecommunications and IT End-to-End solutions such as cabling & networking work, Firewalls, Infrastructure, etc.</p>   
                </div>
                <div class="itc-services-image">
                    <img src="images/net.jpg" alt="Cloud Infrastructure Illustration">
                </div>
            </div>
        </div>
        <div class="divider "></div>
        <div class="itc-services-container">
            <div class="itc-services-content">
                <div class="itc-services-image">
                    <img src="images/cctv.jpg" alt="Cloud Infrastructure Illustration">
                </div>
                <div class="itc-services-text">
                    <h3>CCTV Cameras</h3>
                <p>GOLDEN LINES COMPANY GLC CCTV systems offer a range of advantages, including crime deterrence, increased safety, and the ability to monitor the surveillance feed remotely. By utilizing CCTV technology, organizations and authorities can enhance security, improve safety measures and respond effectively to threats or incidents. We give the best quality with a competitive rate and professional work service.</p>
                </div>
            </div>
        </div>
        <div class="divider "></div>
        <div class="itc-services-container">
            <div class="itc-services-content">
                <div class="itc-services-text">
                    <h3>Interactive LED Screenss</h3>
                    <p>GOLDEN LINES COMPANY GLC offers its clients Interactive LED screens are advanced display devices that combine LED technology with touch-sensitive capabilities to create a dynamic and engaging user experience. These screens allow users to interact directly with the content displayed on the net through touch gestures, such as tapping, swiping, and pinching. Interactive LED screens enable active participation and engagement. Users can navigate through menus, interact with multimedia elements, draw, write, annotate, and perform various actions directly on the screen. This interactivity enhances communication, collaboration, and user immersion.</p>
                    <p>Digital Signage forms a crucial aspect of the Hospitality and Retail Industries’ advertising strategy.
                        GOLDEN LINES COMPANY GLC Technologies fully comprehends that and hence offers cutting-edge Digital Signage Solutions for indoor and outdoor supply and installation,
                        including a license that has an HD screen cased in a robust body and when placed correctly within an outlet can significantly.
                    </p>
                    <p>SOFTWARE Comprehensive features rich Android Software with User-Friendly UI. Wireless Data Incorporation. Split Screen Functionality.
                        Image Filling & Scheduling. Run Data on Multiple Screens—Remote Functioning, Such as Rebooting and Shutting down.
                    </p> 
                </div>
                <div class="itc-services-image">
                    <img src="images/led.jpg" alt="Cloud Infrastructure Illustration">
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