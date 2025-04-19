<?php
require("db.php");
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
require 'phpmailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
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

    // Insert data into the database
    $stmt = "INSERT INTO contact_form (name, email, message) VALUES ('$name', '$email', '$message')";
    if (mysqli_query($dbconn, $stmt)) {
        // Send email notification to the owner
        $mail = new PHPMailer(true);

        try {
            // SMTP configuration
            $mail->isSMTP();
            $mail->Host = 'sandbox.smtp.mailtrap.io'; // Mailtrap SMTP server
            $mail->SMTPAuth = true;
            $mail->Port = 2525; // Mailtrap SMTP port
            $mail->Username = 'c7b5183a257433'; // Mailtrap username
            $mail->Password = '92617e774a931c'; // Mailtrap password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Encryption method

            // Email content
            $mail->setFrom('no-reply@example.com', 'Blessed and Health Services'); // Sender's email
            $mail->addAddress('davestacks017@gmail.com'); // Owner's email
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
            echo json_encode(["status" => "error", "message" => "Your message was saved, but the email notification failed. Error: " . $mail->ErrorInfo]);
        }
    } else {
        echo json_encode(["status" => "error", "message" => "There was an error submitting your message. Please try again."]);
    }
}
?>

