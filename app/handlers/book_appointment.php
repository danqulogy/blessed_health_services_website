<?php
// Including environment variables and email functionality
require_once dirname(dirname(__FILE__)) . '/utils/env_loader.php';
require_once dirname(dirname(dirname(__FILE__))) . '/phpmailer/src/PHPMailer.php';
require_once dirname(dirname(dirname(__FILE__))) . '/phpmailer/src/SMTP.php';
require_once dirname(dirname(dirname(__FILE__))) . '/phpmailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Initialize a response array
$response = ["status" => "error", "message" => "An unexpected error occurred.", "debug" => ""];

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Getting the Variables from the form fields
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $service = $_POST['service'];

    // Validate input fields
    if (empty($name) || empty($email) || empty($date) || empty($time) || empty($service)) {
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
        $mail->Subject = "New Appointment Booking";
        $mail->Body = "
            <h2>New Appointment Booking</h2>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Date:</strong> $date</p>
            <p><strong>Time:</strong> $time</p>
            <p><strong>Service:</strong> $service</p>
            <p><em>Submitted on: " . date('Y-m-d H:i:s') . "</em></p>
        ";

        // Simple text version for non-HTML mail clients
        $mail->AltBody = "New Appointment Booking\n\nName: $name\nEmail: $email\nDate: $date\nTime: $time\nService: $service";
        
        if ($mail->send()) {
            $response = [
                "status" => "success", 
                "message" => "Your appointment has been booked successfully, and the owner has been notified.",
                "debug" => "Email sent successfully from " . SMTP_USERNAME . " to " . SMTP_TO_EMAIL
            ];
        } else {
            throw new Exception($mail->ErrorInfo);
        }
    } catch (Exception $e) {
        $errorMessage = $e->getMessage();
        $response = [
            "status" => "error", 
            "message" => "There was an error sending your appointment notification. Please try again.", 
            "debug" => "PHPMailer Error: " . $errorMessage
        ];
        
        // Log the error
        error_log("PHPMailer Error in book_appointment.php: " . $errorMessage);
    }

    echo json_encode($response);
    exit;
}
?>