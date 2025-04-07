document.addEventListener('DOMContentLoaded', function() {
    // Preloader functionality
    const preloader = document.querySelector('.preloader');
    if (preloader) {
        const startTime = Date.now();
        const minDisplayTime = 3000; 
        
        function hidePreloader() {
            const currentTime = Date.now();
            const elapsedTime = currentTime - startTime;
            
            if (elapsedTime >= minDisplayTime) {
                preloader.classList.add('preloader--hidden');
            } else {
                const remainingTime = minDisplayTime - elapsedTime;
                setTimeout(function() {
                    preloader.classList.add('preloader--hidden');
                }, remainingTime);
            }
        }
        
        window.addEventListener('load', hidePreloader);
        
        // Backup timeout to ensure preloader always gets hidden
        setTimeout(function() {
            preloader.classList.add('preloader--hidden');
        }, 5000);
    }

    // Particle generation - Only run if particles container exists
    const particlesContainer = document.getElementById('particles');
    if (particlesContainer) {
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
    }

    // Hero Text Animation
    const heroTitle = document.querySelector('.hero-content h1');
    const heroSubtitle = document.querySelector('.hero-content p');
    const heroCtas = document.querySelectorAll('.hero-cta');

    if (heroTitle && heroSubtitle) {
        // Apply initial hidden state
        heroTitle.style.opacity = '0';
        heroTitle.style.transform = 'translateY(20px)';
        heroSubtitle.style.opacity = '0';
        heroSubtitle.style.transform = 'translateY(20px)';
        
        if (heroCtas) {
            heroCtas.forEach(cta => {
                cta.style.opacity = '0';
                cta.style.transform = 'translateX(-20px)';
            });
        }

        // Animate after a short delay
        setTimeout(() => {
            heroTitle.style.transition = 'all 0.8s ease';
            heroTitle.style.opacity = '1';
            heroTitle.style.transform = 'translateY(0)';

            setTimeout(() => {
                heroSubtitle.style.transition = 'all 0.8s ease';
                heroSubtitle.style.opacity = '1';
                heroSubtitle.style.transform = 'translateY(0)';

                if (heroCtas) {
                    setTimeout(() => {
                        heroCtas.forEach((cta, index) => {
                            cta.style.transition = 'all 0.8s ease';
                            cta.style.opacity = '1';
                            cta.style.transform = 'translateX(0)';
                        });
                    }, 400);
                }
            }, 400);
        }, 300);
    }

    // Fade-in and Stagger Animations - THIS IS CRITICAL FOR YOUR SERVICE SECTION
    const fadeElements = document.querySelectorAll('.fade-in, .section-stagger');
    
    // Use IntersectionObserver if supported
    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    
                    // Add staggered delay for child elements
                    if (entry.target.classList.contains('section-stagger')) {
                        const elements = entry.target.querySelectorAll('.fade-in');
                        elements.forEach((el, index) => {
                            el.style.transitionDelay = `${index * 0.2}s`;
                        });
                    }
                }
            });
        }, { threshold: 0.1 });

        fadeElements.forEach(element => {
            observer.observe(element);
        });
    } else {
        // Fallback for browsers that don't support IntersectionObserver
        fadeElements.forEach(element => {
            element.classList.add('visible');
        });
    }

    // Project Card Interaction
    const projectCards = document.querySelectorAll('.project-card');
    projectCards.forEach(card => {
        card.addEventListener('click', function() {
            this.classList.toggle('active');

            // Close other open cards
            projectCards.forEach(otherCard => {
                if (otherCard !== this) {
                    otherCard.classList.remove('active');
                }
            });
        });
    });
});