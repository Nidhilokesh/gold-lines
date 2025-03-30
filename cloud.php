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
</head>
<body>
    <section class="itc-services-section fade-in">
        <div class="section-header">
            <h2>Types of Cloud Services</h2>
        </div>
        <div class="itc-services-container">
        <h3>Infrastructure as a Service (IaaS)</h3>
                    <p>The most basic category of cloud computing services. With IaaS, you rent IT infrastructure—servers and virtual machines (VMs), storage, networks, and operating systems—from a cloud provider on a pay-as-you-go basis. </p>
                    <p>Our Compute services offer server virtualization for various Windows and Linux-based computing solutions. Virtual Machines (VMs) represent various on-demand scalable computing resources within the Saudi Cloud.
                        They are typically utilized when an application or service demands a greater degree of control, 
                    </p>
            <div class="itc-services-content">
                
                <div class="itc-services-text">
                    <div class="itc-services-features">
                        <h4>Key Benefits:</h4>
                        <ul>
                        <li>Freedom in choosing the operating system.</li>
                        <li>Enhanced configuration control.</li>
                        <li>Management of patching and software updates.</li>
                        <li>Determination and installation of software that runs on the VM.</li>
                        <li>We impose no restrictions on the OS or workloads type. Additionally, we provide modern Restful APIs to provision and configure computing resources.</li>
                        <li>Resources are not packaged together, and no ‘standard size’ server exists. You only pay for what you need and use.</li>
                        <li>Our Cloud combines the features of public and private Clouds, enabling users to connect their private infrastructure to our Cloud directly.</li>
                        </ul>
                    </div>                    
                </div>
                <div class="itc-services-image">
                    <img src="images/cloud.png" alt="Cloud Infrastructure Illustration">
                </div>
            </div>
        </div>
        <div class="divider "></div>
        <div class="itc-services-container" >
            <div class="itc-services-content">
                <div class="itc-services-image">
                    <img src="images/paas.png" alt="Cloud Infrastructure Illustration">
                </div>
                <div class="itc-services-text">
                    <h3>Platform as a Service (PaaS)</h3>
                    <p>Golden Lines Company GLC cloud computing services supply an on-demand environment for developing, testing, delivering, and managing software applications.
                       PaaS is designed to make it easier for developers to quickly create web or mobile apps without worrying about setting up or managing the underlying infrastructure of servers, storage, network, and databases needed for development.
                    </p>                       
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
                    <img src="images/store.png" alt="Cloud Infrastructure Illustration">
                </div>
            </div>
        </div>
        <div class="divider "></div>
        <div class="itc-services-container">
            <div class="itc-services-content">
                <!-- <div class="itc-services-image">
                    <img src="https://png.pngtree.com/thumb_back/fh260/background/20230702/pngtree-3d-rendered-abstract-tech-background-with-a-dark-theme-image_3739440.jpg" alt="Cloud Infrastructure Illustration">
                </div> -->
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
                        <li>Automated Discounts: All discounts are automated, ensuring you get the best possible price.</li>
                        <li>Regulatory Compliance: We are always updated with new Saudi regulations and operate under Saudi law.</li>
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