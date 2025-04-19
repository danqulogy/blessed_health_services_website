<?php
require("db.php");
require("config.php");
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validate input fields
    if (empty($name) || empty($email) || empty($message)) {
        echo json_encode(["status" => "error", "message" => "All fields are required."]);
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(["status" => "error", "message" => "Invalid email format."]);
        exit;
    }

    // Comment out database storage for now
    /*
    // Insert data into the database using prepared statement
    $stmt = mysqli_prepare($dbconn, "INSERT INTO contact_form (name, email, message) VALUES (?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "sss", $name, $email, $message);
    
    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_close($stmt);
    */
        
    // Send email notification to the owner
    $mail = new PHPMailer(true);

    try {
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host = SMTP_HOST;
        $mail->SMTPAuth = true;
        $mail->Port = SMTP_PORT;
        $mail->Username = SMTP_USERNAME;
        $mail->Password = SMTP_PASSWORD;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // SSL/TLS as recommended

        // Email content
        $mail->setFrom(SMTP_FROM_EMAIL, SMTP_FROM_NAME);
        $mail->addAddress(SMTP_TO_EMAIL);
        $mail->addReplyTo($email, $name); // User's email for reply

        $mail->isHTML(true);
        $mail->Subject = "New Contact Form Submission";
        $mail->Body = "
            <h2>New Contact Form Submission</h2>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Message:</strong> $message</p>
        ";

        $mail->send();
        echo json_encode(["status" => "success", "message" => "Thank you for contacting us! We will get back to you shortly."]);
    } catch (Exception $e) {
        echo json_encode(["status" => "error", "message" => "Failed to send your message. Error: " . $mail->ErrorInfo]);
    }
    /*
    } else {
        echo json_encode(["status" => "error", "message" => "There was an error submitting your message. Please try again."]);
    }
    */
}
?>

