# Blessed Behavioral & Health Services Website

A modern, responsive website for Blessed Behavioral & Health Services, featuring service information, team profiles, testimonials, and a contact form with email notifications.

## Table of Contents

- [Overview](#overview)
- [Features](#features)
- [Project Structure](#project-structure)
- [Requirements](#requirements)
- [Setup and Installation](#setup-and-installation)
- [Configuration](#configuration)
- [Contact Form](#contact-form)
- [Development Guide](#development-guide)
- [Deployment](#deployment)
- [Security Considerations](#security-considerations)
- [Troubleshooting](#troubleshooting)
- [License](#license)

## Overview

This website provides a digital presence for Blessed Behavioral & Health Services, showcasing their healthcare services, team members, and facilitating easy communication through a contact form.

## Features

- Responsive design optimized for all device sizes
- Service information sections
- Team profile showcase
- Testimonials carousel
- Contact form with email notifications
- Google Maps integration
- Social media links
- Mobile-friendly navigation

## Project Structure

```
blessed_health_services_website/
├── index.php                 # Main website page
├── contact_form.php          # Contact form processing script
├── config.php                # Configuration and settings
├── db.php                    # Database connection (optional)
├── create_contact_table.sql  # SQL for contact form table
├── install.php               # Installation helper script
├── test_email.php            # Email testing script
├── script.js                 # JavaScript functionality
├── styles.css                # Stylesheets
├── phpmailer/                # PHPMailer library (legacy)
├── vendor/                   # Composer dependencies
│   └── autoload.php
├── composer.json             # Composer configuration
└── README.md                 # This documentation file
```

## Requirements

- PHP 7.4+ with JSON and filter extensions
- MySQL/MariaDB database (optional, for storing form submissions)
- SMTP access for sending emails
- Composer (for dependency management)
- Web server (Apache/Nginx)

## Setup and Installation

1. **Clone the repository**

```bash
git clone https://github.com/yourusername/blessed_health_services_website.git
cd blessed_health_services_website
```

2. **Install dependencies**

```bash
composer install
```

3. **Configure the email settings**

Edit `config.php` and add your SMTP credentials:

```php
define('SMTP_PASSWORD', 'your-actual-password'); // Replace with your email password
```

4. **Database setup (optional)**

If you want to store contact form submissions in a database:

- Uncomment the database-related code in `contact_form.php`
- Configure your database connection in `db.php`
- Run the installation script:

```bash
php install.php
```

5. **Test email configuration**

Edit `test_email.php`, set `$runTest = true`, then access it through your web browser:

```
http://localhost/blessed_health_services_website/test_email.php
```

After successful testing, set `$runTest = false` for security.

## Configuration

### Email Settings

Edit `config.php` to modify the email configuration:

```php
define('SMTP_HOST', 'mail.blessedbehavioralhs.com');
define('SMTP_PORT', 465);
define('SMTP_USERNAME', 'info@blessedbehavioralhs.com');
define('SMTP_PASSWORD', '');  // Add your password here
define('SMTP_FROM_EMAIL', 'info@blessedbehavioralhs.com');
define('SMTP_FROM_NAME', 'Blessed Behavioral & Health Services');
define('SMTP_TO_EMAIL', 'markey@blessedbehavioralhs.com');
```

### Database Settings (Optional)

Edit `db.php` to configure database connection:

```php
$dbconn = mysqli_connect("localhost", "username", "password", "database_name");
```

## Contact Form

The contact form has two main components:

1. **Frontend**: HTML form in `index.php` with JavaScript handling in `script.js`
2. **Backend**: PHP processing in `contact_form.php` with email sending via PHPMailer

### Current Configuration

The contact form is configured to:
- Validate input on both client and server side
- Send email notifications without storing in database
- Display a modal with success/error messages
- Use SSL/TLS for secure email transmission

### Enabling Database Storage

To store submissions in the database:
1. Uncomment the database code in `contact_form.php`
2. Make sure `db.php` is correctly configured
3. Ensure the contact_form table exists (using `install.php` or `create_contact_table.sql`)

## Development Guide

### CSS Styling

The website uses vanilla CSS found in `styles.css`. Key sections include:

- Header and navigation
- Hero section
- Content sections
- Form styling
- Footer styles
- Responsive media queries

### JavaScript

The `script.js` file handles:

- Contact form submission via AJAX
- Modal popups for form responses
- Carousel functionality
- Scroll effects
- Responsive menu toggle

### Contact Form Process Flow

1. User submits form → JavaScript prevents default submission
2. AJAX request sends data to `contact_form.php`
3. Server validates data and sends email
4. JSON response returns to the browser
5. JavaScript displays success/error message

## Deployment

### Shared Hosting Deployment

1. Upload all files to your web hosting via FTP
2. Make sure `config.php` has the correct SMTP settings
3. Run or visit `install.php` to set up database tables (if using)
4. Test the contact form functionality
5. Delete or secure `test_email.php` and `install.php`

### Server Hardening

- Ensure `config.php` is not directly accessible (via `.htaccess` rules)
- Update file permissions:
  - PHP files: 644
  - Directories: 755
  - Configuration files: 640
- Use HTTPS for all connections

## Security Considerations

1. **Password Protection**:
   - Don't commit `config.php` with actual passwords
   - Consider using environment variables for sensitive data

2. **SQL Injection Protection**:
   - The contact form uses prepared statements to prevent SQL injection

3. **XSS Protection**:
   - All user inputs are properly validated and sanitized

4. **SMTP Security**:
   - The form uses SMTP with SSL/TLS encryption

## Troubleshooting

### Contact Form Not Sending Emails

1. Check SMTP credentials in `config.php`
2. Verify the email account has SMTP access enabled
3. Check server logs for PHP errors
4. Try running `test_email.php` with debugging enabled
5. Ensure your hosting allows outgoing SMTP connections

### Database Connection Issues

1. Verify MySQL/MariaDB is running
2. Check credentials in `db.php`
3. Ensure the database and table exist
4. Check if the server user has appropriate permissions

## License

© 2025 Blessed Behavioral & Health Services LLC. All rights reserved. 