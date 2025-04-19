<?php
require("config.php");
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// This is a test script to verify email configuration
// WARNING: This should be removed or secured after testing
// It's only for development/testing purposes

// Set this to true to run the test
$runTest = false;

if ($runTest) {
    echo "<h2>Testing Email Configuration</h2>";
    
    if (empty(SMTP_PASSWORD)) {
        echo "<p style='color: red;'>ERROR: SMTP_PASSWORD is empty in config.php. Please add your password before testing.</p>";
        exit;
    }
    
    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);
    
    try {
        // Enable verbose debug output
        $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable verbose debug output
        
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host = SMTP_HOST;
        $mail->SMTPAuth = true;
        $mail->Port = SMTP_PORT;
        $mail->Username = SMTP_USERNAME;
        $mail->Password = SMTP_PASSWORD;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        
        // Email content
        $mail->setFrom(SMTP_FROM_EMAIL, SMTP_FROM_NAME);
        $mail->addAddress(SMTP_TO_EMAIL);
        
        $mail->isHTML(true);
        $mail->Subject = 'Email Configuration Test';
        $mail->Body = '<h2>This is a test email</h2><p>If you are seeing this, your email configuration is working correctly.</p>';
        
        $mail->send();
        echo "<p style='color: green;'>Test email sent successfully!</p>";
    } catch (Exception $e) {
        echo "<p style='color: red;'>Message could not be sent. Mailer Error: {$mail->ErrorInfo}</p>";
    }
} else {
    echo "<p>Email test is disabled. Set \$runTest = true to run the test.</p>";
    echo "<p>Important: Make sure to add your password to config.php first!</p>";
}
?> 