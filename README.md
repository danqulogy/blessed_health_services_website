# Blessed Behavioral & Health Services Website

A professional website for Blessed Behavioral & Health Services LLC, a healthcare provider specializing in mental health and primary care services.

## Overview

This website showcases the services offered by Dr. Emma Markey (DNP, FNP, PMHNP) and provides a platform for patients to learn about available healthcare options and book appointments.

## Features

- Responsive design for all devices
- Service information and specialties
- Doctor profile section
- Appointment booking system
- Contact form
- Testimonials section
- Informative blog posts
- Location map

## Technologies

- HTML5, CSS3
- JavaScript
- PHP 7.4+
- PHPMailer (via Composer)
- Google Maps integration
- Font Awesome icons
- Ionicons

## Project Structure

```
blessed_health_services_website/
├── app/                    # Application backend
│   ├── config/             # Configuration files
│   ├── handlers/           # Form handlers
│   ├── tests/              # Testing utilities
│   └── utils/              # Utility functions
├── public/                 # Public assets
│   ├── css/                # Stylesheets
│   ├── img/                # Images
│   ├── js/                 # JavaScript files
│   └── video/              # Video files
├── vendor/                 # Composer dependencies
├── .htaccess               # Apache configuration
├── composer.json           # Composer configuration
├── favicon.ico             # Website favicon
└── index.php               # Main application file
```

## Setup Instructions

1. Clone the repository or download the source code
2. Install dependencies:
   ```
   composer install
   ```
3. Configure environment variables in `app/config/.env` with your SMTP settings
4. Ensure server permissions are correctly set

## Email Configuration

The website uses PHPMailer for sending emails from the contact form and appointment booking system. Configuration is managed through environment variables:

- SMTP_HOST: Your SMTP server host
- SMTP_PORT: SMTP port (usually 465 for SSL or 587 for TLS)
- SMTP_USERNAME: Your email username
- SMTP_PASSWORD: Your email password
- SMTP_FROM_NAME: Name to display in sent emails
- SMTP_TO_EMAIL: Recipient email address for form submissions

## Testing

Test the email functionality using the included test scripts:
- `app/tests/smtp_test.php` - Tests SMTP connection
- `app/tests/send_test_email.php` - Tests sending a test email

## Security

The website includes several security measures:
- XSS protection
- CSRF protection
- Input validation
- File access restrictions
- Error handling

## License

This project is proprietary and owned by Blessed Behavioral & Health Services LLC.

## Contact

For questions or support regarding this website, contact:
- Email: info@blessedbehavioral.com
- Phone: 407-547-7400 