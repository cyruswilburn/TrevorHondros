<?php
require_once 'config/settings.php';
require_once 'includes/functions.php';

// Basic routing
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Include header
include 'includes/header.php';

// Include page content
include "pages/$page.php";

// Include footer
include 'includes/footer.php';
?>
