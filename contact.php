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
        /* Keep original colors and variables from your code */
        :root {
            --bg-primary:  #0F2A5C;
            --bg-secondary:#000C2A;
            --bg-tertiary:#000C2A;
            --accent-color: #C4A968;
            --text-primary: #FFFFFF;
            --text-secondary: #B0B0B0;
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Add margin to account for fixed header */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        /* Container styling with margin-top to prevent header overlap */
        .contact-container {
            width: 100%;
            max-width: 1200px;
            margin: 80px auto 20px auto; /* Added top margin to prevent header overlap */
            padding: 20px;
            box-sizing: border-box;
        }

        /* Wrapper for layout */
        .contact-wrapper {
            display: flex;
            flex-direction: column;
            gap: 30px;
            background-color:  var(--bg-primary);
        }

        /* Contact info section */
        .contact-info {
            background-color: var(--bg-tertiary);
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .contact-info h2 {
            color: var(--accent-color);
            margin-top: 0;
            margin-bottom: 20px;
        }

        .info-item {
            display: flex;
            margin-bottom: 20px;
            align-items: flex-start;
        }

        .info-item i {
            min-width: 30px;
            color: var(--accent-color);
            margin-right: 15px;
            font-size: 18px;
            margin-top: 3px;
        }

        .info-item div {
            flex: 1;
        }

        .info-item strong {
            display: block;
            margin-bottom: 5px;
        }

        .info-item p {
            margin: 0;
        }

        .map-container {
            margin-top: 25px;
            border-radius: 10px;
            overflow: hidden;
        }

        /* Form section */
        .contact-form {
            background-color:#000C2A;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .contact-form h2 {
            color: var(--accent-color);
            margin-top: 0;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }

        .form-group textarea {
            height: 120px;
            resize: vertical;
        }

        .submit-btn {
            background-color: var(--accent-color);
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            width: 100%;
            transition: background-color 0.3s;
        }

        .submit-btn:hover {
            background-color: #c09a27;
        }

        /* Services section - keeping original styles */
        .services-section {
            background-color: var(--bg-tertiary);
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        
        .services-section h3 {
            color: var(--accent-color);
            margin-bottom: 15px;
            margin-top: 0;
        }
        
        .service-group {
            display: flex;
            flex-direction: column;
        }
        
        .service-group label {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            margin-bottom: 10px;
            cursor: pointer;
        }
        
        .service-group input[type="checkbox"] {
            margin-right: 10px;
            accent-color: var(--accent-color);
            min-width: 18px;
            height: 18px;
        }
        
        .nested-services {
            margin-left: 30px;
            display: none;
            width: 100%;
        }
        
        input[type="checkbox"]:checked ~ .nested-services {
            display: block;
        }

        /* Form message */
        .form-message {
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
        }

        /* Responsive adjustments */
        @media (min-width: 768px) {
            .contact-wrapper {
                flex-direction: row;
            }
            
            .contact-info {
                flex: 1;
            }
            
            .contact-form {
                flex: 1.5;
            }
        }

        @media (max-width: 767px) {
            .contact-container {
                padding: 15px;
                margin-top: 60px; /* Adjust for smaller header on mobile */
            }
            
            .info-item {
                font-size: 15px;
            }
            
            .submit-btn {
                padding: 10px 20px;
            }
        }

        @media (max-width: 480px) {
            .contact-container {
                padding: 10px;
            }
            
            .contact-info, .contact-form {
                padding: 15px;
            }
            
            .info-item i {
                min-width: 25px;
                font-size: 16px;
            }
            
            .service-group label {
                font-size: 15px;
            }
            
            .nested-services {
                margin-left: 20px;
            }
        }

        @media (max-width: 320px) {
            .contact-container {
                padding: 5px;
                min-width: 320px; /* Ensures minimum width */
            }
            
            .info-item {
                flex-direction: column;
            }
            
            .info-item i {
                margin-bottom: 5px;
            }
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
                        7409, Al Hawwari St, Al Malaz Dist, Riyadh, KSA

                        </a>
                        </p>
                    </div>
                </div>
                <div class="info-item">
                    <i class="fas fa-phone"></i>
                    <div>
                        <strong>Phone Number</strong>
                        <p>+966 56 078 7666</p>
                    </div>
                </div>
                <div class="info-item">
                    <i class="fas fa-envelope"></i>
                    <div>
                        <strong>Email Address</strong>
                        <p>Info@goldenlinesco.com</p>
                    </div>
                </div>
                <div class="info-item">
                    <i class="fas fa-clock"></i>
                    <div>
                        <strong>Business Hours</strong>
                        <p>Sunday-Thursday: 9:00 AM - 5:00 PM</p>
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
    
    <script>
        // JavaScript to enhance checkbox functionality
        document.addEventListener('DOMContentLoaded', function() {
            // Function to handle page load and adjust top margin based on header height
            function adjustForHeader() {
                // Get the header height dynamically (assuming header has some identifier)
                const header = document.querySelector('header') || document.getElementById('header');
                if (header) {
                    const headerHeight = header.offsetHeight;
                    // Add some extra padding to be safe
                    document.querySelector('.contact-container').style.marginTop = (headerHeight + 20) + 'px';
                }
            }
            
            // Call on page load
            adjustForHeader();
            
            // Also call on window resize
            window.addEventListener('resize', adjustForHeader);
            
            // Fix for nested checkboxes display
            const parentCheckboxes = document.querySelectorAll('.service-group > label > input[type="checkbox"]');
            
            parentCheckboxes.forEach(checkbox => {
                checkbox.addEventListener('change', function() {
                    const nestedServices = this.closest('label').querySelector('.nested-services');
                    if (nestedServices) {
                        nestedServices.style.display = this.checked ? 'block' : 'none';
                    }
                });
            });
            
            // Handle second level nested checkboxes
            const secondLevelCheckboxes = document.querySelectorAll('.nested-services > label > input[type="checkbox"]');
            
            secondLevelCheckboxes.forEach(checkbox => {
                checkbox.addEventListener('change', function() {
                    const deepNestedServices = this.closest('label').querySelector('.nested-services');
                    if (deepNestedServices) {
                        deepNestedServices.style.display = this.checked ? 'block' : 'none';
                    }
                });
            });
        });
    </script>
</body>
</html>
<?php
  include 'includes/footer.php';
?>