<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load PHPMailer
require 'vendor/autoload.php';

// Initialize response array
$response = [
    'status' => 'error',
    'message' => 'An unknown error occurred'
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form inputs and sanitize
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_SPECIAL_CHARS);
    $service = filter_input(INPUT_POST, 'service', FILTER_SANITIZE_SPECIAL_CHARS);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS);
    
    // Validate inputs
    if (!$name || !$email || !$phone || !$message) {
        $response = [
            'status' => 'error',
            'message' => 'All fields are required'
        ];
        echo json_encode($response);
        exit;
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response = [
            'status' => 'error',
            'message' => 'Invalid email format'
        ];
        echo json_encode($response);
        exit;
    }
    
    // Create PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // SMTP Configuration for Gmail
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = getenv('SMTP_USERNAME') ?: 'mstrupthi@gmail.com'; // Set environment variable with your Gmail
        $mail->Password = getenv('SMTP_PASSWORD') ?: 'xxgw lbqd zgwm lnhw'; // Set environment variable with app password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Sender and Recipient
        $mail->setFrom('mstrupthi@gmail.com', 'Golden Lines Contact Form');
        $mail->addAddress('mstrupthi@gmail.com', 'Golden Lines'); 
        $mail->addReplyTo($email, $name);

        // Email Content
        $mail->isHTML(true);
        $mail->Subject = "New Contact Form Submission: $service";
        $mail->Body = "
            <h3>Contact Details</h3>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Service Interested In:</strong> $service</p>
            <p><strong>Message:</strong> $message</p>
        ";
        $mail->AltBody = "Contact Details\n\nName: $name\nEmail: $email\nPhone: $phone\nService: $service\n\nMessage: $message";

        // Send Email
        $mail->send();
        $response = [
            'status' => 'success',
            'message' => 'Your message has been sent successfully. We will get back to you soon!'
        ];
    } catch (Exception $e) {
        // Log error (don't expose details to user)
        error_log("Mailer Error: " . $mail->ErrorInfo);
        $response = [
            'status' => 'error',
            'message' => 'Unable to send your message. Please try again later.'
        ];
    }
    
    // Return JSON response
    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
}

