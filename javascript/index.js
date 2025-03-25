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