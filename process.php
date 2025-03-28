<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Prevent direct script access
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    die(json_encode(['status' => 'error', 'message' => 'Invalid request']));
}

// Load PHPMailer
require 'vendor/autoload.php';

// Sanitize and validate inputs
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_SPECIAL_CHARS);
$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS);

// Validate services
$services = isset($_POST['services']) ? $_POST['services'] : [];
$services = array_map(function($service) {
    return filter_var($service, FILTER_SANITIZE_SPECIAL_CHARS);
}, $services);
$servicesString = implode(', ', $services);

// Basic validation
if (empty($name) || empty($email) || empty($phone) || empty($message)) {
    header('Content-Type: application/json');
    echo json_encode([
        'status' => 'error', 
        'message' => 'All fields are required'
    ]);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Content-Type: application/json');
    echo json_encode([
        'status' => 'error', 
        'message' => 'Invalid email format'
    ]);
    exit;
}

// Create PHPMailer instance
$mail = new PHPMailer(true);

try {
    // SMTP Configuration for Gmail
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = getenv('SMTP_USERNAME') ?: 'mstrupthi@gmail.com';
    $mail->Password = getenv('SMTP_PASSWORD') ?: 'xxgw lbqd zgwm lnhw';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Sender and Recipient
    $mail->setFrom('mstrupthi@gmail.com', 'Golden Lines Contact Form');
    $mail->addAddress('mstrupthi@gmail.com', 'Golden Lines'); 
    $mail->addReplyTo($email, $name);

    // Email Content
    $mail->isHTML(true);
    $mail->Subject = "New Contact Form Submission: Multiple Services";
    $mail->Body = "
        <h3>Contact Details</h3>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Services Interested In:</strong> $servicesString</p>
        <p><strong>Message:</strong> $message</p>
    ";
    $mail->AltBody = "Contact Details\n\nName: $name\nEmail: $email\nPhone: $phone\nServices: $servicesString\n\nMessage: $message";

    // Send Email
    $mail->send();
    
    // Set JSON header BEFORE echoing
    header('Content-Type: application/json');
    echo json_encode([
        'status' => 'success',
        'message' => 'Your message has been sent successfully. We will get back to you soon!'
    ]);
    exit;
} catch (Exception $e) {
    // Log error
    error_log("Mailer Error: " . $mail->ErrorInfo);
    
    // Set JSON header BEFORE echoing
    header('Content-Type: application/json');
    echo json_encode([
        'status' => 'error',
        'message' => 'Unable to send your message. Please try again later.'
    ]);
    exit;
}
?>