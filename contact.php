<?php
  include 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden Lines</title>
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
                    <i class="fas fa-envelope"></i>
                    <div>
                        <strong>Phone No</strong>
                        <p>+966 56 697 7202</p>
                    </div>
                </div>
                <div class="info-item">
                    <i class="fas fa-clock"></i>
                    <div>
                        <strong>Business Hours</strong>
                        <p>Monday - Friday: 9:00 AM - 5:00 PM</p>
                    </div>
                </div>
                
                <!-- New Map Section -->
                <div class="map-container">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3625.550135909054!2d46.7290336!3d24.6736085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f0413505d950b%3A0x3cc1e68e5c587094!2s7409%20Al%20Hawwari%2C%20Al%20Malaz%2C%20Riyadh%2012831%2C%20Saudi%20Arabia!5e0!3m2!1sen!2sin!4v1742972065877!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                        width="100%"
                        height="100"
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
                
                <div class="form-group">
                    <select name="service" required>
                        <option value="">Select a Service</option>
                        <option value="General Services">General Services</option>
                        <option value="Data Services">Data Services</option>
                        <option value="other Services">Other Services</option>
                    </select>
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