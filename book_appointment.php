<?php
// Adding Database File
require("db.php");
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
require 'phpmailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Initialize a response array
$response = ["status" => "error", "message" => "An unexpected error occurred."];

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
        echo json_encode(["status" => "error", "message" => "All fields are required."]);
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(["status" => "error", "message" => "Invalid email format."]);
        exit;
    }

    // Insert data into the database
    $stmt = $dbconn->prepare("INSERT INTO appointments (name, email, date, time, service) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $date, $time, $service);

    if ($stmt->execute()) {
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
            $mail->setFrom($email, 'Blessed and Health Services'); // Sender's email
            $mail->addAddress('davestacks017@gmail.com'); // Owner's email
            $mail->addReplyTo($email, $name); // User's email for reply

            $mail->isHTML(true);
            $mail->Subject = "New Appointment Booking";
            $mail->Body = "
                <h2>New Appointment Booking</h2>
                <p><strong>Name:</strong> $name</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Date:</strong> $date</p>
                <p><strong>Time:</strong> $time</p>
                <p><strong>Service:</strong> $service</p>
            ";

            $mail->send();
            $response = ["status" => "success", "message" => "Your appointment has been booked successfully, and the owner has been notified."];
        } catch (Exception $e) {
            $response = ["status" => "success", "message" => "Your appointment has been booked, but the email notification failed. Error: " . $mail->ErrorInfo];
        }
    } else {
        $response = ["status" => "error", "message" => "There was an error booking your appointment. SQL Error: " . $stmt->error];
    }

    echo json_encode($response);
    exit;
}
?>