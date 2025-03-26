
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden Lines</title>
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>
<body>
    <div class="contact-container">
        <div class="contact-wrapper">
            <div class="contact-info">
                <h2>Contact Details</h2>
                <div class="info-item">
                    <i class="icon location"></i>
                    <div>
                        <strong>Our Location</strong>
                        <p>24 Austin House, King Street, Norwich</p>
                    </div>
                </div>
                <div class="info-item">
                    <i class="icon email"></i>
                    <div>
                        <strong>Email Us</strong>
                        <p>info@meticulis.co.uk</p>
                    </div>
                </div>
                <div class="info-item">
                    <i class="icon hours"></i>
                    <div>
                        <strong>Business Hours</strong>
                        <p>Monday - Friday: 9:00 AM - 5:00 PM</p>
                    </div>
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
                        <option value="consulting">Consulting</option>
                        <option value="contract">Contract Solutions</option>
                        <option value="other">Other</option>
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