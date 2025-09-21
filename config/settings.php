<?php
// Site Settings
define('SITE_NAME', 'Trevor Hondros');
define('SITE_DESCRIPTION', 'Real Estate Expert');

// Environment
define('IS_DEVELOPMENT', true);

// Error reporting
if (IS_DEVELOPMENT) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(0);
    ini_set('display_errors', 0);
}

// Time zone
date_default_timezone_set('America/Chicago');
