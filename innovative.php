<?php
  include 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services Part in Nutshell</title>

    <link rel="stylesheet" href="css/generalservices.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>
<style>
    .hero {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('images/dia1.webp') no-repeat center center/cover;
            color: var(--text-white);
            text-align: center;
            padding: 200px 15px; /* Increased from 120px to 200px */
            position: relative;
            overflow: hidden;
        }
    
</style>

<body>
    <section class="hero fade-in">
        <div class="hero-content" >
            <h1 class="fade-in">INNOVATIVE SOLUTIONS  </h1>
        </div>
    </section>

    <section class="services fade-in" id="service-details">
        <div class="services-grid">
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fa-solid fa-laptop-code"></i>
                </div>
                <h3>SOFTWARE ENGINEERING</h3>
                <ul>
                    <li>White-label Development Resourcing</li>
                    <li>Web & Mobile Development</li>
                    <li>Middleware and API Development</li>
                    <li>Fintech Solutions Development</li>
                    <li>GDS Integration and Development</li>
                </ul>
            </div>

            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fa-solid fa-shield"></i>
                </div>
                <h3>CYBER SECURITY & GRC</h3>
                <ul>
                    <li>ISO Implementations</li>
                    <li>Technical Audits</li>
                    <li>Cyber Security Frameworks</li>
                    <li>VAPT Services</li>
                    <li>Gap Assessments</li>
                    <li>Vendor Solutions</li>
                    <li>S-NOC Hybrid Facility</li>
                </ul>
            </div>

            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fa-solid fa-database"></i>
                </div>
                <h3>DATA ENGINEERING</h3>
                <ul>
                    <li>Artificial Intelligence (AI) & Cognitive Networks</li>
                    <li>Business Intelligence (BI)</li>
                    <li>Augmented Reality (AR)</li>
                    <li>RPA (Robotic Process Automation)</li>
                    <li>IoT & Smart Home/Office Solutions</li>
                </ul>
            </div>

            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fa-solid fa-briefcase"></i>
                </div>
                <h3>PROFESSIONAL SERVICES</h3>
                <ul>
                    <li>IT Consultation</li>
                    <li>IT Managed Services</li>
                    <li>IT Professional Services</li>
                    <li>Retainers & SLAs</li>
                    <li>IT Infrastructure & Architecture Design</li>
                    <li>Technical & Legal Documentation</li>
                    <li>Technical Feasibility Studies</li>
                </ul>
            </div>

        </div>
    </section>

    <section class="service-focus fade-in" id="contact">
        <h2 class="fade-in">Let's Get Started</h2>
        <p class="fade-in">Contact us for a no-obligation consultation today, where our knowledgeable staff will be more than happy to assist you with your logistics and transportation needs.</p>
        <a href="#" class="explore-services-btn fade-in">Contact Us</a>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const fadeElements = document.querySelectorAll('.fade-in');
            
            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            fadeElements.forEach(element => {
                observer.observe(element);
            });
        });
    </script>
</body>
</html>

<?php
  include 'includes/footer.php';
?>