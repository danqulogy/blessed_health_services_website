# Environment Variables Setup

This file explains how to set up environment variables for the Blessed Behavioral & Health Services website.

## Setup Steps

1. After running `composer install`, a `.env` file will be automatically created in the `app/config` directory from the `.env.example` template.

2. Alternatively, you can manually copy the `.env.example` file:
   ```bash
   cp app/config/.env.example app/config/.env
   ```

3. Edit the `.env` file with your own configuration values:

## Required Environment Variables

### Server Configuration
- `PORT`: The port for the development server (default: 8000)

### Database Configuration
- `DB_HOST`: Database host (default: localhost)
- `DB_USER`: Database username (default: root)
- `DB_PASS`: Database password
- `DB_NAME`: Database name (default: blessed_health)

### Email Configuration
- `SMTP_HOST`: SMTP server hostname (e.g., mail.yourdomain.com)
- `SMTP_PORT`: SMTP server port (usually 465 for SSL or 587 for TLS)
- `SMTP_USERNAME`: Your SMTP username/email
- `SMTP_PASSWORD`: Your SMTP password
- `SMTP_FROM_EMAIL`: Email address shown as sender
- `SMTP_FROM_NAME`: Name shown as sender
- `SMTP_TO_EMAIL`: Recipient email for form submissions

## Security Notes

- **Never commit your `.env` file to version control**
- The project's `.gitignore` file is already configured to exclude `.env` files from git
- The `.env.example` file should never contain real credentials
- Use strong passwords for your email and database accounts
- Consider using encrypted connections (SSL/TLS) for email 