<?php
  include 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construction Services | Golden Lines Contracting</title>

    <link rel="stylesheet" href="css/generalservices.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
   
</head>
<body>
    <!-- Hero Section -->
    <section class="hero fade-in" id="construction-services">
        <div class="hero-content">
            <h1 class="fade-in">CONSTRUCTION SERVICES</h1>
            <p class="fade-in">We offer turnkey specialized construction services for wide-ranging industries and project types. Whether it be creating your development's vision from ideation to completion or providing support and unique insight to modernize and repurpose existing facilities, we serve a broad spectrum of customers and businesses. Read on for more service details.</p>
            <div>
                <a href="#service-details" class="hero-cta fade-in">Our Services</a>
                <a href="#contact" class="hero-cta fade-in">Contact Us</a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services fade-in" id="service-details">
        <div class="section-header">
            <h2 class="fade-in">Our Services</h2>
        </div>
        <div class="services-grid" style=" grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));">
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-home"></i>
                </div>
                <h3>Residential & Commercial</h3>
                <p>Building a new home or office is an assembly of various parallel activities and functions and can seem challenging to even the more experienced. We create a seamless project execution plan and possess the expertise and the experience to deliver to your exact requirements.</p>
                <p>We offer a wide range of services, including design, planning, project management, engineering, carpentry, plumbing, electrical, painting, flooring, and more.</p>
            </div>

            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-paint-roller"></i>
                </div>
                <h3>Renovation and Refurbishment</h3>
                <p>Fitting out, retro fitting or merely making modern upgrades to an outdated building is a challenge very few companies have experience with or fathom. We have a team of seasoned professionals with the technical expertise and experience to deliver to your vision and budget.</p>
                <p>We offer a full range of services, including design, planning, demolition, installation, finishing, cleaning, and more.</p>
            </div>

            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-hard-hat"></i>
                </div>
                <h3>Construction Supplies</h3>
                <p>An un-interrupted supply of high quality and reliable construction supplies is the lifeline of every construction project. We source our products from reputable suppliers and manufacturers, ensuring that they meet the highest standards of quality and durability. We also offer competitive prices and fast delivery to your site.</p>
                <p>We offer a wide range of products, including gravel, base course, fill dirt, sand, ready mix concrete, steel and steel structures, tools and equipment, and more.</p>
            </div>
        </div>
    </section>

    <!-- Let's Get Started Section -->
    <section class="service-focus fade-in" id="contact">
        <h2 class="fade-in">Let's Get Started</h2>
        <p class="fade-in">Contact us for a no-obligation consultation today, where our knowledgeable staff will be more than happy to assist you with the challenging aspects of your construction project.</p>
        <a href="#" class="explore-services-btn fade-in">Contact Us</a>
    </section>

    <script>
        // Scroll Animation Script
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