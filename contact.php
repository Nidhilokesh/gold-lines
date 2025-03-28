<?php
  include 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden Lines - Contact Us</title>
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .services-section {
            background-color: var(--bg-tertiary);
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .services-section h3 {
            color: var(--accent-color);
            margin-bottom: 15px;
        }
        .service-group {
            display: flex;
            flex-direction: column;
        }
        .service-group label {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            cursor: pointer;
        }
        .service-group input[type="checkbox"] {
            margin-right: 10px;
            accent-color: var(--accent-color);
        }
        .nested-services {
            margin-left: 30px;
            display: none;
        }
        .service-group input[type="checkbox"]:checked + .nested-services {
            display: block;
        }
    </style>
</head>
<body>
    <div class="contact-container">
        <div class="contact-wrapper">
            <div class="contact-info">
                <h2>Contact Details</h2>
                <div class="info-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <strong>Our Location</strong>
                        <p>
                        <a href="https://maps.app.goo.gl/oToJ84BEUVNa8v599" target="_blank" style="color: inherit; text-decoration: none;">
                            7409 Al Hawary Street, Malaz, Riyadh, KSA
                        </a>
                        </p>
                    </div>
                </div>
                <div class="info-item">
                    <i class="fas fa-phone"></i>
                    <div>
                        <strong>Phone Number</strong>
                        <p>+966 56 697 7202</p>
                    </div>
                </div>
                <div class="info-item">
                    <i class="fas fa-envelope"></i>
                    <div>
                        <strong>Email Address</strong>
                        <p>info@goldenlines.com</p>
                    </div>
                </div>
                <div class="info-item">
                    <i class="fas fa-clock"></i>
                    <div>
                        <strong>Business Hours</strong>
                        <p>Monday - Friday: 9:00 AM - 5:00 PM</p>
                    </div>
                </div>
                
                <div class="map-container">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3625.550135909054!2d46.7290336!3d24.6736085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f0413505d950b%3A0x3cc1e68e5c587094!2s7409%20Al%20Hawwari%2C%20Al%20Malaz%2C%20Riyadh%2012831%2C%20Saudi%20Arabia!5e0!3m2!1sen!2sin!4v1742972065877!5m2!1sen!2sin" 
                        width="100%"
                        height="250"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
            
            <form id="contactForm" class="contact-form" method="POST" action="process.php">
                <h2>Get in Touch</h2>
                
                <div class="form-group">
                    <input type="text" name="name" placeholder="Full Name" required>
                </div>
                
                <div class="form-group">
                    <input type="email" name="email" placeholder="Email Address" required>
                </div>
                
                <div class="form-group">
                    <input type="tel" name="phone" placeholder="Phone Number">
                </div>
                
                <div class="services-section">
                    <h3>Select Services</h3>
                    <div class="service-group">
                        <label>
                            <input type="checkbox" name="services[]" value="General Services"> General Services
                            <div class="nested-services">
                                <label>
                                    <input type="checkbox" name="services[]" value="Construction"> Construction
                                </label>
                                <label>
                                    <input type="checkbox" name="services[]" value="Infrastructure"> Infrastructure
                                </label>
                                <label>
                                    <input type="checkbox" name="services[]" value="Refrigeration & HVAC"> Refrigeration & HVAC
                                </label>
                                <label>
                                    <input type="checkbox" name="services[]" value="Base Life and Support"> Base Life and Support
                                </label>
                                <label>
                                    <input type="checkbox" name="services[]" value="Logistic & Transport"> Logistic & Transport
                                </label>
                                <label>
                                    <input type="checkbox" name="services[]" value="OSP Infrastructure Installation & Maintenance"> OSP Infrastructure Installation & Maintenance
                                </label>
                            </div>
                        </label>
                        
                        <label>
                            <input type="checkbox" name="services[]" value="Data Services"> Data Services
                            <div class="nested-services">
                                <label>
                                    <input type="checkbox" name="services[]" value="IT and Telecom Services"> IT and Telecom Services
                                    <div class="nested-services">
                                        <label>
                                            <input type="checkbox" name="services[]" value="Dedicated Internet Access"> Dedicated Internet Access
                                        </label>
                                        <label>
                                            <input type="checkbox" name="services[]" value="Wifi Solution"> Wifi Solution
                                        </label>
                                        <label>
                                            <input type="checkbox" name="services[]" value="IPVPN (L3 and L2)"> IPVPN (L3 and L2)
                                        </label>
                                    </div>
                                </label>
                                
                                <label>
                                    <input type="checkbox" name="services[]" value="ICT Services"> ICT Services
                                    <div class="nested-services">
                                        <label>
                                            <input type="checkbox" name="services[]" value="ICT Solution"> ICT Solution
                                        </label>
                                        <label>
                                            <input type="checkbox" name="services[]" value="Cloud Services"> Cloud Services
                                        </label>
                                        <label>
                                            <input type="checkbox" name="services[]" value="Networking"> Networking
                                        </label>
                                        <label>
                                            <input type="checkbox" name="services[]" value="CCTV & LED Screens"> CCTV & LED Screens
                                        </label>
                                    </div>
                                </label>
                            </div>
                        </label>
                    </div>
                </div>
                
                <div class="form-group">
                    <textarea name="message" placeholder="How can we help you?" required></textarea>
                </div>
                
                <button type="submit" class="submit-btn">Send Message</button>
                
                <div id="formMessage" class="form-message"></div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="javascript/contact.js"></script>
</body>
</html>
<?php
  include 'includes/footer.php';
?>