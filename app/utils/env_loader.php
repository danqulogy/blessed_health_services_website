<?php
// Load environment variables from .env file
function loadEnv($path = null) {
    if ($path === null) {
        $path = dirname(dirname(__FILE__)) . '/config/.env';
    }
    
    if (!file_exists($path)) {
        error_log("ENV file not found at: " . $path);
        return false;
    }

    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        // Skip comments
        if (strpos(trim($line), '#') === 0) {
            continue;
        }

        // Parse key=value
        list($key, $value) = explode('=', $line, 2);
        $key = trim($key);
        $value = trim($value);

        // Remove quotes if present
        if (strlen($value) > 1 && (
            (strpos($value, '"') === 0 && substr($value, -1) === '"') ||
            (strpos($value, "'") === 0 && substr($value, -1) === "'")
        )) {
            $value = substr($value, 1, -1);
        }

        // Set as constant for easy access
        if (!defined($key)) {
            define($key, $value);
        }
    }

    return true;
}

// Load environment variables
loadEnv();
?> 