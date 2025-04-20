<?php
// Load environment variables
require_once '../app/utils/env_loader.php';

// Define the paths to key directories
define('APP_PATH', dirname(__DIR__) . '/app');
define('PUBLIC_PATH', dirname(__FILE__));

// Route the request to the appropriate handler
$request_uri = $_SERVER['REQUEST_URI'];

// Include the main content file 
include_once '../index.php';
?> 