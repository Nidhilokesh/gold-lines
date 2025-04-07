

document.addEventListener('DOMContentLoaded', function() {
    const preloader = document.querySelector('.preloader');
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
    
    setTimeout(function() {
      preloader.classList.add('preloader--hidden');
    }, 5000);
  });

document.addEventListener('DOMContentLoaded', function() {
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

    // Fade-in and Stagger Animations
    const fadeElements = document.querySelectorAll('.fade-in, .section-stagger');
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

document.addEventListener('DOMContentLoaded', function() {
    // Hero Text Animation
    const heroTitle = document.querySelector('.hero-content h1');
    const heroSubtitle = document.querySelector('.hero-content p');
    const heroCtas = document.querySelectorAll('.hero-cta');

    // Apply initial hidden state
    heroTitle.style.opacity = '0';
    heroTitle.style.transform = 'translateY(20px)';
    heroSubtitle.style.opacity = '0';
    heroSubtitle.style.transform = 'translateY(20px)';
    heroCtas.forEach(cta => {
        cta.style.opacity = '0';
        cta.style.transform = 'translateX(-20px)';
    });

    // Animate after a short delay
    setTimeout(() => {
        heroTitle.style.transition = 'all 0.8s ease';
        heroTitle.style.opacity = '1';
        heroTitle.style.transform = 'translateY(0)';

        setTimeout(() => {
            heroSubtitle.style.transition = 'all 0.8s ease';
            heroSubtitle.style.opacity = '1';
            heroSubtitle.style.transform = 'translateY(0)';

            setTimeout(() => {
                heroCtas.forEach((cta, index) => {
                    cta.style.transition = 'all 0.8s ease';
                    cta.style.opacity = '1';
                    cta.style.transform = 'translateX(0)';
                });
            }, 400);
        }, 400);
    }, 300);

    // Existing particle generation code (kept from previous version)
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