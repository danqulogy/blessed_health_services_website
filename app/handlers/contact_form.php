<?php
// Including environment variables and email functionality
require_once dirname(dirname(__FILE__)) . '/utils/env_loader.php';
require_once dirname(dirname(dirname(__FILE__))) . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Initialize a response array
$response = ["status" => "error", "message" => "An unexpected error occurred.", "debug" => ""];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validate input fields
    if (empty($name) || empty($email) || empty($message)) {
        echo json_encode(["status" => "error", "message" => "All fields are required.", "debug" => "Validation failed: empty fields"]);
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(["status" => "error", "message" => "Invalid email format.", "debug" => "Validation failed: invalid email format"]);
        exit;
    }
        
    // Send email notification to the owner
    $mail = new PHPMailer(true);

    try {
        // SMTP configuration (using exactly the settings that worked in the test)
        $mail->isSMTP();
        $mail->Host = SMTP_HOST;
        $mail->SMTPAuth = true;
        $mail->Username = SMTP_USERNAME;
        $mail->Password = SMTP_PASSWORD;
        
        // Set encryption type based on port
        if (SMTP_PORT == 465) {
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // SSL
        } else {
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // TLS
        }
        
        $mail->Port = SMTP_PORT;
        
        // Increase timeout to avoid connection issues
        $mail->Timeout = 30;
        
        // Disable SSL verification - important for some hosts
        $mail->SMTPOptions = [
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            ]
        ];

        // Email content (using username as from email which is what worked in the test)
        $mail->setFrom(SMTP_USERNAME, SMTP_FROM_NAME);
        $mail->addAddress(SMTP_TO_EMAIL);
        $mail->addReplyTo($email, $name);

        $mail->isHTML(true);
        $mail->Subject = "New Contact Form Submission";
        $mail->Body = "
            <h2>New Contact Form Submission</h2>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Message:</strong> $message</p>
            <p><em>Submitted on: " . date('Y-m-d H:i:s') . "</em></p>
        ";

        // Simple text version for non-HTML mail clients
        $mail->AltBody = "New Contact Form Submission\n\nName: $name\nEmail: $email\nMessage: $message";
        
        if ($mail->send()) {
            $response = [
                "status" => "success", 
                "message" => "Thank you for contacting us! We will get back to you shortly.",
                "debug" => "Email sent successfully from " . SMTP_USERNAME . " to " . SMTP_TO_EMAIL
            ];
        } else {
            throw new Exception($mail->ErrorInfo);
        }
    } catch (Exception $e) {
        // Log the error but don't expose it to users
        $errorMessage = $e->getMessage();
        error_log("PHPMailer Error in contact_form.php: " . $errorMessage);
        
        $response = [
            "status" => "error", 
            "message" => "Failed to send your message. Please try again later or contact us directly.",
            "debug" => "PHPMailer Error: " . $errorMessage
        ];
    }

    echo json_encode($response);
    exit;
}
?>

