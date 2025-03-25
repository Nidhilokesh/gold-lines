
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden Lines Contracting Company</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="particles-container" id="particles"></div>
        <div class="container hero-container">
            <div class="hero-content fade-in">
                <h1>WE HELP YOU <span>HIT YOUR TARGET</span></h1>
                <p>Comprehensive contracting solutions that transform your vision into reality across the Middle East.</p>
                <div>
                    <a href="#about" class="hero-cta">KNOW MORE</a>
                    <a href="#services" class="hero-cta">OUR SERVICES</a>
                </div>
            </div>
            <div class="hero-image fade-in">
                <img src="/api/placeholder/500/400" alt="Golden Lines Services" style="width:100%; border-radius:8px;">
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services" id="services">
        <div class="container">
            <div class="services-grid">
                <div class="service-card fade-in">
                    <div class="service-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3>Construction</h3>
                    <p>Helping you create your development from a vision, or delivering marked improvement to your existing project.</p>
                    <a href="#" class="service-learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>

                <div class="service-card fade-in">
                    <div class="service-icon">
                        <i class="fas fa-road"></i>
                    </div>
                    <h3>Infrastructure</h3>
                    <p>Creating infrastructure that adds comfort and ease while helping protect assets, employees and customers.</p>
                    <a href="#" class="service-learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>

                <div class="service-card fade-in">
                    <div class="service-icon">
                        <i class="fas fa-wind"></i>
                    </div>
                    <h3>Refrigeration & HVAC</h3>
                    <p>Delivering comfortably cool environments across indoor, outdoor and hybrid public places.</p>
                    <a href="#" class="service-learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>

                <div class="service-card fade-in">
                    <div class="service-icon">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <h3>Medical Equipment</h3>
                    <p>Procuring mission critical medicines, supplies and equipment to clinics, hospitals and in-house departments.</p>
                    <a href="#" class="service-learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>

                <div class="service-card fade-in">
                    <div class="service-icon">
                        <i class="fas fa-network-wired"></i>
                    </div>
                    <h3>IT & Telecom</h3>
                    <p>Digitally transforming environments and connecting businesses to the digital economy.</p>
                    <a href="#" class="service-learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="explore-services fade-in">
                <a href="#" class="explore-services-btn">EXPLORE ALL OUR SERVICES</a>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Navbar scroll effect
            const header = document.getElementById('header');
            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) {
                    header.style.backgroundColor = 'rgba(21, 21, 21, 0.9)';
                    header.style.backdropFilter = 'blur(10px)';
                } else {
                    header.style.backgroundColor = 'transparent';
                    header.style.backdropFilter = 'none';
                }
            });

            // Fade-in animations
            const fadeElements = document.querySelectorAll('.fade-in');
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, { threshold: 0.1 });

            fadeElements.forEach(element => {
                observer.observe(element);
                element.style.transitionDelay = `${Math.random() * 0.5}s`;
            });

            // Particle generation
            const particlesContainer = document.getElementById('particles');
            const particleCount = 30;
            
            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.classList.add('particle');
                
                const size = Math.random() * 6 + 2;
                const posX = Math.random() * 100;
                const posY = Math.random() * 100;
                
                particle.style.width = `${size}px`;
                particle.style.height = `${size}px`;
                particle.style.left = `${posX}%`;
                particle.style.top = `${posY}%`;
                particle.style.opacity = Math.random() * 0.5;
                
                const duration = Math.random() * 15 + 10;
                const delay = Math.random() * 5;
                particle.style.animation = `floatParticle ${duration}s ease-in-out ${delay}s infinite`;
                
                particlesContainer.appendChild(particle);
            }
        });
    </script>
</body>
</html>