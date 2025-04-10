<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Golden Lines</title>
  <link rel="icon" type="image/x-icon" href="favicon.ico">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    :after,
    :before,
    * {
      box-sizing: border-box;
    }

    .container {
      width: 100%;
      max-width: 1200px;
      padding-right: 15px;
      padding-left: 15px;
      margin-right: auto;
      margin-left: auto;
    }

    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
    }

    h2 {
      line-height: 1.1;
      font-family: 'Poppins', sans-serif;
      font-weight: 700;
    }

    /*--------------------------------------------------------------
      # Hero Slider
    --------------------------------------------------------------*/
    .hero-slider {
      width: 100%;
      height: 100vh; 
      display: flex;
      position: relative;
      z-index: 0;
    }

    .hero-slider .swiper-slide {
      overflow: hidden;
      color: #fff;
    }

    .hero-slider .swiper-container {
      width: 100%;
      height: 100%;
      position: absolute;
      left: 0;
      top: 0;
    }

    .hero-slider .slide-inner {
      width: 100%;
      height: 100%;
      position: absolute;
      left: 0;
      top: 0;
      z-index: 1;
      background-size: cover;
      background-position: center;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: left;
    }

    /* Gradient overlay for better text visibility */
    .hero-slider .slide-inner::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(to right, rgba(0, 0, 0, 0.9) 0%, rgba(0,0,0,0.6) 50%, rgba(0,0,0,0.1) 100%);
      z-index: -1;
    }

    .hero-slider .swiper-button-prev,
    .hero-slider .swiper-button-next {
      background: rgba(255, 255, 255, 0.1);
      width: 50px;
      height: 50px;
      line-height: 50px;
      margin-top: -25px;
      text-align: center;
      border: 2px solid rgba(255, 255, 255, 0.3);
      border-radius: 50%;
      opacity: 0;
      visibility: hidden;
      transition: all 0.3s ease;
      backdrop-filter: blur(3px);
    }

    .hero-slider:hover .swiper-button-prev,
    .hero-slider:hover .swiper-button-next {
      transform: translateX(0);
      opacity: 1;
      visibility: visible;
    }

    .hero-slider .swiper-button-prev {
      left: 25px;
      transform: translateX(50px);
    }

    .hero-slider .swiper-button-prev:before {
      font-family: "Font Awesome 5 Free";
      content: "\f060";
      font-size: 15px;
      color: #ffffff;
      font-style: normal;
      display: inline-block;
      vertical-align: middle;
      font-weight: 900;
    }

    .hero-slider .swiper-button-next {
      right: 25px;
      transform: translateX(-50px);
    }

    .hero-slider .swiper-button-next:before {
      font-family: "Font Awesome 5 Free";
      content: "\f061";
      font-size: 15px;
      color: #ffffff;
      font-style: normal;
      display: inline-block;
      vertical-align: middle;
      font-weight: 900;
    }

    .hero-slider .swiper-pagination-bullet {
      width: 12px;
      height: 12px;
      text-align: left;
      line-height: 12px;
      font-size: 12px;
      color: #ffffff;
      opacity: 0.3;
      background: #fff;
      transition: all 0.2s ease;
    }

    .hero-slider .swiper-pagination-bullet-active {
      opacity: 1;
      background: #c4a968;
    }

    .hero-slider .swiper-container-horizontal > .swiper-pagination-bullets,
    .hero-slider .swiper-pagination-custom,
    .hero-slider .swiper-pagination-fraction {
      bottom: 30px;
    }

    .swiper-pagination {
      text-align: left;
    }

    .hero-slider .swiper-container-horizontal > .swiper-pagination-bullets {
      bottom: 50px;
      max-width: 1200px;
      padding: 0 15px;
      margin: 0 auto;
      left: 50%;
      transform: translateX(-50%);
    }

    /*--------------------------------------------------------------
      # Hero Style
    --------------------------------------------------------------*/
    .hero-style {
      height: 100vh; /* Reduced height for desktop */
      transition: all 0.4s ease;
    }

    .hero-style .slide-title,
    .hero-style .slide-text,
    .hero-style .slide-btns {
      max-width: 90%;
      position: relative;
      z-index: 10;
    }

    .hero-style .slide-title h2 {
      font-size: 5rem;
      font-weight: 700;
      line-height: 1;
      color: #c4a968;
      margin: 0 0 30px;
      text-transform: capitalize;
      text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
      transition: all 0.4s ease;
      position: relative;
    }

    .hero-style .slide-text p {
      opacity: 1;
      font-family: 'Poppins', sans-serif;
      font-size: 1.8rem;
      font-weight: 500;
      line-height: 1.25;
      color: #ffffff;
      margin: 0 0 40px;
      transition: all 0.4s ease;
      text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.8);
    }

    .hero-style .slide-btns > a:first-child {
      margin-right: 15px;
      /* margin-bottom: 10px; */
    }

    .hero-style .slide-btns {
      display: flex;
      flex-wrap: wrap;
    }

    /*--------------------------------------------------------------
      # Button Style
    --------------------------------------------------------------*/
    .theme-btn,
    .theme-btn-s2 {
      background-color: #ffffff;
      font-size: 1.1rem;
      font-weight: 500;
      line-height: 1.4;
      text-align: center;
      color: #0a2651; /* Dark blue */
      padding: 12px 32px;
      border: 0;
      border-radius: 50px; /* Rounded corners for modern look */
      text-transform: uppercase;
      display: inline-block;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
      letter-spacing: 0.5px;
    }

    a {
      text-decoration: none;
      transition: all 0.2s ease;
    }

    .theme-btn-s2 {
      background-color: #c4a968; /* Gold */
      color: #ffffff;
    }

    .theme-btn:hover,
    .theme-btn-s2:hover,
    .theme-btn:focus,
    .theme-btn-s2:focus,
    .theme-btn:active,
    .theme-btn-s2:active {
      background-color: #ffffff; /* Brighter gold on hover */
      color:  #c4a968; /* Dark blue */
      transform: translateY(-3px);
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
    }

    .theme-btn-s3 {
      font-size: 1rem;
      font-weight: 500;
      line-height: 1.5;
      color: #ffffff;
      text-transform: uppercase;
      padding: 10px 24px;
      display: inline-flex;
      align-items: center;
      border: 2px solid rgba(255, 255, 255, 0.3);
      border-radius: 50px;
      transition: all 0.3s ease;
      letter-spacing: 0.5px;
      justify-content:center;
    }

    .theme-btn-s3:hover {
      color: #0a2651; /* Dark blue */
      background-color: #ffffff;
      border-color: #ffffff;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
      transform: translateY(-3px);
    }

    i.fa-chevron-circle-right {
      display: flex;          
      justify-content: center; 
      align-items: center;     
      height: 16px;
      width: 16px;
      margin-right: 8px;
      font-size: 16px;         
      line-height: 1; 
    }

    a:hover {
      text-decoration: none;
    }

    /* Responsive styles */
    /* Tablet View (768px - 991px) */
    @media (max-width: 991px) {
      /* .hero-slider, .hero-style {
        height: 100vh;
      } */

      .hero-style .slide-title h2 {
        font-size: 3.5rem;
        margin: 0 0 25px;
      }

      .hero-style .slide-text p {
        font-size: 1.5rem;
        margin: 0 0 30px;
      }

      .theme-btn,
      .theme-btn-s2,
      .theme-btn-s3 {
        font-size: 0.95rem;
        padding: 10px 24px;
      }

      .hero-slider .swiper-container-horizontal > .swiper-pagination-bullets {
        bottom: 30px;
      }
    }

    /* Mobile View (320px - 767px) */
    @media (max-width: 767px) {
      .hero-slider, .hero-style {
        height: 85vh;
      }

      .hero-style .slide-title h2 {
        font-size: 2.5rem;
        margin: 0 0 20px;
      }

      .hero-style .slide-text p {
        font-size: 1.2rem;
        font-weight: 500;
        margin: 0 0 25px;
      }

      .theme-btn,
      .theme-btn-s2 {
        padding: 10px 20px;
        font-size: 0.9rem;
      }

      .theme-btn-s3 {
        font-size: 0.9rem;
        padding: 9px 18px;
      }

      .hero-slider .swiper-button-prev,
      .hero-slider .swiper-button-next {
        display: none;
      }
      
      .hero-style .slide-btns {
        flex-direction: column;
      }
      
      .hero-style .slide-btns > a {
        margin-bottom: 15px;
        text-align: center;
        width: 100%;
      }
      
      .hero-style .slide-btns > a:first-child {
        margin-right: 0;
      }
    }

    /* Small Mobile View (320px - 480px) */
    @media (max-width: 480px) {
      .hero-style .slide-title h2 {
        font-size: 2rem;
        margin-bottom: 15px;
      }
      
      .hero-style .slide-text p {
        font-size: 1rem;
        margin-bottom: 20px;
      }
      
      .theme-btn, .theme-btn-s2, .theme-btn-s3 {
        padding: 8px 18px;
        font-size: 0.85rem;
      }
    }
  </style>
</head>
<body>

  <!-- Start of Hero Slider -->
  <section class="hero-slider hero-style">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <!-- Example slide 1 -->
        <div class="swiper-slide">
          <div class="slide-inner slide-bg-image" data-background="images/hero1.jpg">
            <div class="container">
              <div data-swiper-parallax="300" class="slide-title">
                <h2>GOLDEN LINES COMPANY</h2>
              </div>
              <div data-swiper-parallax="400" class="slide-text">
                <p>Diversified Services Unwavering Support</p>
              </div>
              <div class="clearfix"></div>
              <div data-swiper-parallax="500" class="slide-btns">
                <a href="contact.php" class="theme-btn-s2">Contact now</a>
                <a href="index.php#projects" class="theme-btn-s3"><i class="fas fa-chevron-circle-right"></i> Get Info</a>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Example slide 2 -->
        <div class="swiper-slide">
          <div class="slide-inner slide-bg-image" data-background="images/hero.png">
            <div class="container">
              <div data-swiper-parallax="300" class="slide-title">
                <h2> GOLDEN LINES COMPANY
              </div>
              <div data-swiper-parallax="400" class="slide-text">
                <p>Expertise and solutions you can  rely on</p>
              </div>
              <div class="clearfix"></div>
              <div data-swiper-parallax="500" class="slide-btns">
                <a href="contact.php" class="theme-btn-s2">Contact now</a>
                <a href="index.php#services1" class="theme-btn-s3"><i class="fas fa-chevron-circle-right"></i> Get Info</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Swiper Navigation Controls -->
      <div class="swiper-pagination"></div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  </section>

  <!-- Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script>
    // Set background images from data-background attribute
    document.querySelectorAll(".slide-bg-image").forEach(function(el) {
      const bg = el.getAttribute("data-background");
      if (bg) {
        el.style.backgroundImage = "url('" + bg + "')";
      }
    });

    // Initialize Swiper
    var swiper = new Swiper('.swiper-container', {
      loop: true,
      autoplay: {
        delay: 4000,
        disableOnInteraction: false
      },
      speed: 1000,
      parallax: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
      }
    });
  </script>
  <script>
    window.addEventListener('DOMContentLoaded', () => {
      const hash = window.location.hash;
      if (hash) {
        const target = document.querySelector(hash);
        if (target) {
          target.scrollIntoView({ behavior: 'smooth' });
        }
      }
    });
  </script>

</body>
</html>