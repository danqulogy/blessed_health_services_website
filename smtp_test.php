<?php
// Simple test script to check SMTP connection
require 'env_loader.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
require 'phpmailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Show all PHP errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "<h1>SMTP Connection Test</h1>";
echo "<pre>";

// Output the loaded SMTP settings (without password)
echo "SMTP Settings from .env:\n";
echo "SMTP_HOST: " . (defined('SMTP_HOST') ? SMTP_HOST : 'Not defined') . "\n";
echo "SMTP_PORT: " . (defined('SMTP_PORT') ? SMTP_PORT : 'Not defined') . "\n";
echo "SMTP_USERNAME: " . (defined('SMTP_USERNAME') ? SMTP_USERNAME : 'Not defined') . "\n";
echo "SMTP_PASSWORD: " . (defined('SMTP_PASSWORD') ? '[Password hidden]' : 'Not defined') . "\n";
echo "SMTP_FROM_EMAIL: " . (defined('SMTP_FROM_EMAIL') ? SMTP_FROM_EMAIL : 'Not defined') . "\n";
echo "SMTP_FROM_NAME: " . (defined('SMTP_FROM_NAME') ? SMTP_FROM_NAME : 'Not defined') . "\n";
echo "SMTP_TO_EMAIL: " . (defined('SMTP_TO_EMAIL') ? SMTP_TO_EMAIL : 'Not defined') . "\n";
echo "\n";

// Test SMTP connection
try {
    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);
    
    // Enable verbose debug output
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable verbose debug output
    
    // Configure SMTP
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
    
    // Increase timeout
    $mail->Timeout = 30;
    
    // Optional settings that may help with connection issues
    $mail->SMTPOptions = [
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        ]
    ];
    
    // Try to connect to SMTP server without sending an email
    echo "Testing SMTP connection...\n";
    if ($mail->smtpConnect()) {
        echo "SUCCESS: Connected to SMTP server successfully.\n";
        $mail->smtpClose();
    } else {
        echo "ERROR: Failed to connect to SMTP server.\n";
    }
    
} catch (Exception $e) {
    echo "EXCEPTION: " . $e->getMessage() . "\n";
}

echo "</pre>";
echo "<p>Test completed. Check the output above for results.</p>";
?> 