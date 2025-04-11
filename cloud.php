<?php
  include 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITC Services - Infrastructure as a Service</title>
    <link rel="stylesheet" href="css/ict-services.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        .hero {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('images/cloudd.jpg') no-repeat center center/cover;
            color: var(--text-white);
            text-align: center;
            padding: 120px 15px;
            position: relative;
            overflow: hidden;
        }
        /* Enhanced Header Text Styling */
        .hero .hero-content h1 {
            font-size: 2.5rem;
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
            <h1 class="fade-in">CLOUD COMPUTING</h1>
        </div>
    </section>
    <section class="itc-services-section fade-in">
    
        <div class="itc-services-container">
        <h3>Cloud Service </h3>
                <p>At GLC Cloud, we offer advanced server virtualization for Windows and Linux-based systems, providing businesses with unparalleled flexibility and control. Our Virtual Machines (VMs) are designed to be scalable, on-demand computing resources that adapt to your needs. Whether you're managing applications or services, our solutions give you full control over your computing environment. </p>
                <p>Our solutions are built for those who seek efficiency, reliability, and scalability. With our Cloud, you have the freedom to innovate without limits, backed by secure and robust infrastructure.</p>    
            <div class="itc-services-content">            
                <div class="itc-services-text">
                    <div class="itc-services-features">
                        <h4>Benefits of GLC Cloud:</h4>
                        <ul>
                            <li>Freedom of Choice: Select the operating system that works best for your needs.</li>
                            <li>Full Control: Customize configurations, manage patching, and handle software updates effortlessly.</li>
                            <li>Unlimited Flexibility: Install and run any software—no restrictions on workload or OS type.</li>
                            <li>Cost-Efficiency: Pay only for the resources you use, with no predefined server sizes.</li>
                            <li>Seamless Integration: Connect your private infrastructure directly to our hybrid cloud, combining the best features of public and private clouds.</li>
                            <li>Modern APIs: Provision and configure computing resources with ease using our Restful APIs.</li>
                        </ul>
                    </div>                    
                </div>
                <div class="itc-services-image">
                    <img src="images/cloud2.jpeg" alt="Cloud" style="width:70%; height:auto;">
                </div>
            </div>
        </div>

        <div class="divider "></div>
        
        <div class="itc-services-container">
            <div class="itc-services-content">
                <div class="itc-services-text">
                    <h3>Storage</h3>
                        <p>Our local Cloud platform empowers users to craft and resize multiple persistent virtual drives. Designed with SSD-based and HHD storage systems, our solution is ideally configured for high-performance tasks like big data mining and scientific computing.</p>                   
                    <div class="itc-services-features">                                        
                        <ul>
                            <li>Drives can be attached or detached as needed.</li>
                            <li>Creation of both regular drives and CDs / DVDs is supported.</li>
                            <li>RAW images of CDs and hard drives can be directly uploaded.</li>
                            <li>Wide range of installed CDs and pre-installed systems available from the marketplace.</li>
                            <li>New drives can be created in just 10-20 seconds.</li>
                            <li>Drives can be resized after the creation.</li>
                        </ul>
                    </div>
                </div>
                <div class="itc-services-image">
                    <img src="images/cloud4.jpeg" alt="Cloud Infrastructure Illustration" style="width:70%; height:auto;">
                </div>
            </div>
        </div>

        <div class="divider "></div>
        
        <div class="itc-services-container">
            <div class="itc-services-content">
                <div class="itc-services-text">
                    <h3>Why GLC Cloud</h3>                    
                    <div class="itc-services-features">
                        <ul>
                            <li>Localized Service: As a cloud service based in Saudi Arabia, we understand local needs and regulations better.</li>
                            <li>Simplicity: Our portal is straightforward, making your cloud deployment a breeze.</li>
                            <li>Flexibility: We offer a cloud service tailored to your terms and configurations.</li>
                            <li>Experience: We leverage years of experience as a Local Cloud Service Provider serving customers in Saudi Arabia.</li>
                            <li>Independence: We are ISPs, providing high-speed connectivity while ensuring the security of your information.</li>
                            <li>Dedicated Support: Our IT staff are available 24/7 to assist whenever needed.</li>
                            <li>Local Network Access: Avoid sharing bandwidth with the entire Internet and bypass the need to send your data around the globe before it reaches your servers.</li>
                            <li>Reliability: We can resolve issues promptly with a dedicated and experienced IT staff.</li>
                            <li>Cloud SLA: We provide a Cloud Service Level Agreement (SLA) as a standard.</li>
                            <li>Regulatory Compliance: We are always updated with new Saudi regulations and operate under Saudi law.</li>
                        </ul>
                   </div>                    
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