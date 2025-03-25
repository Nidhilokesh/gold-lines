document.addEventListener('DOMContentLoaded', function() {
    // Particle Generation
    const particlesContainer = document.getElementById('particles');
    const particleCount = 40;
    for (let i = 0; i < particleCount; i++) {
      const particle = document.createElement('div');
      particle.classList.add('particle');
      const size = Math.random() * 8 + 2;
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
    
    // Animate on Scroll
    const animateElements = document.querySelectorAll('.animate-on-scroll');
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if(entry.isIntersecting) {
          entry.target.classList.add('visible');
        }
      });
    }, { threshold: 0.1 });
    animateElements.forEach(element => observer.observe(element));
    
    // Slider Functionality
    function initSlider(trackId, prevBtnId, nextBtnId, slidesArray) {
      const track = document.getElementById(trackId);
      const prevBtn = document.getElementById(prevBtnId);
      const nextBtn = document.getElementById(nextBtnId);
      let currentIndex = 0;
      const slideWidth = 250 + 30; // slide width plus margin

      // Populate slider with images
      slidesArray.forEach(src => {
        const slide = document.createElement('div');
        slide.classList.add('slide');
        const img = document.createElement('img');
        img.src = src;
        img.alt = 'Slide';
        slide.appendChild(img);
        track.appendChild(slide);
      });
      
      const totalSlides = slidesArray.length;
      function updateSlider() {
        track.style.transform = `translateX(${-currentIndex * slideWidth}px)`;
      }
      
      nextBtn.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % totalSlides;
        updateSlider();
      });
      prevBtn.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
        updateSlider();
      });
    }
    
    // Partner Slider Images
    const partnerLogos = [
      '/api/placeholder/200/100?text=Partner+1',
      '/api/placeholder/200/100?text=Partner+2',
      '/api/placeholder/200/100?text=Partner+3',
      '/api/placeholder/200/100?text=Partner+4',
      '/api/placeholder/200/100?text=Partner+5'
    ];
    initSlider('partnersTrack', 'partnersPrev', 'partnersNext', partnerLogos);
    
    // Client Slider Images (sample images)
    const clientLogos = [
      '/api/placeholder/200/100?text=Client+1',
      '/api/placeholder/200/100?text=Client+2',
      '/api/placeholder/200/100?text=Client+3',
      '/api/placeholder/200/100?text=Client+4',
      '/api/placeholder/200/100?text=Client+5'
    ];
    initSlider('clientsTrack', 'clientsPrev', 'clientsNext', clientLogos);
  });