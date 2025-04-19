<?php
// This script creates the necessary database table for the contact form

// Include database connection
require("db.php");

// Create contact_form table
$sql = file_get_contents('create_contact_table.sql');

if (mysqli_multi_query($dbconn, $sql)) {
    echo "Database tables created successfully!<br>";
} else {
    echo "Error creating database tables: " . mysqli_error($dbconn) . "<br>";
}

// Test if Composer and PHPMailer are properly configured
if (file_exists('vendor/autoload.php')) {
    require 'vendor/autoload.php';
    
    if (class_exists('PHPMailer\PHPMailer\PHPMailer')) {
        echo "PHPMailer is properly installed via Composer!<br>";
    } else {
        echo "ERROR: PHPMailer class not found. Make sure it's properly installed via Composer!<br>";
    }
} else {
    echo "ERROR: Composer autoloader not found. Run 'composer install' in the project root!<br>";
}

// Remind to update config.php
echo "<br>IMPORTANT: Don't forget to update the SMTP_PASSWORD in config.php with your actual email password!<br>";
?> 