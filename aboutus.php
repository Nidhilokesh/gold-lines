<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Golden Lines Contracting - About Us</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <link rel="stylesheet" href="css/aboutus.css"/>
</head>
<body>
  <!-- Particles Background -->
  <div class="particles-container" id="particles"></div>

  <!-- Enhanced About Hero Section -->
  <section class="about-hero">
    <div class="hero-content container">
      <h1 class="animate-on-scroll">Golden Lines Contracting</h1>
      <p class="animate-on-scroll">
        A premier end-to-end services provider and contractor specializing in serving the defense sector.
        We bring unparalleled attention to detail, commitment to quality, and innovative solutions that transform challenges into success.
      </p>
      
      <div class="hero-details">
        <div class="hero-detail-card">
          <h4>Established</h4>
          <p>Founded in 2021 as a wholly owned Saudi corporation</p>
        </div>
        <div class="hero-detail-card">
          <h4>Expertise</h4>
          <p>Specialized in defense sector with diverse project portfolio</p>
        </div>
        <div class="hero-detail-card">
          <h4>Commitment</h4>
          <p>Delivering innovation-driven solutions with integrity</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Company Information Section -->
  <section class="content">
    <div class="container">
      <h2 class="animate-on-scroll">About Us</h2>
      <p class="animate-on-scroll">
        Established in 2021 as a wholly owned Saudi corporation, Golden Lines Contracting Co possesses extensive experience with a diverse body of work completed and projects executed for some of the most prestigious companies in the Kingdom of Saudi Arabia.
      </p>
      <p class="animate-on-scroll">
        We are a premier end-to-end services provider and contractor specializing in serving the defense sector. Our extensive experience in dealing with this keystone sector provides us with the intrinsic expertise that gives us an edge. We bring the same attention to detail, strict adherence to project and service delivery ethics, and a commitment to quality and safety to the wider business world.
      </p>
      
      <h2 class="animate-on-scroll" style="margin-top:40px;">Our Mission, Vision & Values</h2>
      <div class="mvv-grid">
        <div class="mvv-card animate-on-scroll">
          <h3>Our Mission</h3>
          <p>To be the comprehensive turnkey service provider and contractor of choice in the region and globally.</p>
        </div>
        <div class="mvv-card animate-on-scroll">
          <h3>Our Vision</h3>
          <p>Provide tangible value and innovation-driven solutions to complex problems for the public and private sector.</p>
        </div>
        <div class="mvv-card animate-on-scroll">
          <h3>Our Values</h3>
          <p>Integrity, aggressive performance and honor driven benefits for our clients, employees, and partners.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Leadership Section -->
  <section class="leadership">
    <div class="container">
      <h2 class="animate-on-scroll">Our LEADERSHIP</h2>
      <div class="leadership-grid">
        <div class="leader-card animate-on-scroll">
          <div class="leader-image">
            <img src="/api/placeholder/200/200" alt="Ahmed Y Al Omer">
          </div>
          <h3>Ahmed Y Al Omer</h3>
          <p>
            Chairman<br>
            <small>Retired RSAF Fighter Pilot with seasoned administration experience across military, public and private sectors.</small>
          </p>
        </div>
        <div class="leader-card animate-on-scroll">
          <div class="leader-image">
            <img src="/api/placeholder/200/200" alt="Muhammad Arshad">
          </div>
          <h3>Muhammad Arshad</h3>
          <p>
            Chief Executive Officer<br>
            <small>MBA, BE Mechanical Engineering with proven expertise in defence and government projects.</small>
          </p>
        </div>
        <div class="leader-card animate-on-scroll">
          <div class="leader-image">
            <img src="/api/placeholder/200/200" alt="Saad Rahman">
          </div>
          <h3>Saad Rahman</h3>
          <p>
            Chief Operations Officer<br>
            <small>BBA and an expert operations leader experienced in retail, automobile and contracting industries.</small>
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Partners Slider Section -->
  <section class="slider-section">
    <div class="container">
      <h2 class="animate-on-scroll">OUR VALUED PARTNERS</h2>
      <div class="slider-container" id="partnersSlider">
        <button class="arrow-btn arrow-left" id="partnersPrev"><i class="fas fa-chevron-left"></i></button>
        <div class="slider-track" id="partnersTrack">
          <!-- Partner slides will be added dynamically -->
        </div>
        <button class="arrow-btn arrow-right" id="partnersNext"><i class="fas fa-chevron-right"></i></button>
      </div>
    </div>
  </section>

  <!-- Clients Slider Section -->
  <section class="slider-section">
    <div class="container">
      <h2 class="animate-on-scroll">OUR CLIENTS</h2>
      <div class="slider-container" id="clientsSlider">
        <button class="arrow-btn arrow-left" id="clientsPrev"><i class="fas fa-chevron-left"></i></button>
        <div class="slider-track" id="clientsTrack">
          <!-- Client slides will be added dynamically -->
        </div>
        <button class="arrow-btn arrow-right" id="clientsNext"><i class="fas fa-chevron-right"></i></button>
      </div>
    </div>
  </section>

  <script src = "javascript/aboutus.js"></script>
</body>
</html>