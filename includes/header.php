<?php
// Site configuration
$site_name = "Trevor Hondros";
$site_description = "Real Estate Expert";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_name; ?> - <?php echo $site_description; ?></title>
    
    <!-- CSS -->
    <link rel="stylesheet" href="/assets/css/main.css">
    
    <!-- HTMX -->
    <script src="https://unpkg.com/htmx.org@1.9.10"></script>
    <!-- Alpine.js -->
    <script defer src="https://unpkg.com/alpinejs@3.13.3/dist/cdn.min.js"></script>
</head>
<body>
    <header class="site-header" x-data="{ mobileMenuOpen: false }">
        <div class="container">
            <nav class="main-nav">
                <a href="/" class="logo"><?php echo $site_name; ?></a>
                <button 
                    @click="mobileMenuOpen = !mobileMenuOpen"
                    class="mobile-menu-toggle"
                    :aria-expanded="mobileMenuOpen"
                >
                    <span class="sr-only">Menu</span>
                    <span class="hamburger"></span>
                </button>
                <div class="nav-links" :class="{ 'active': mobileMenuOpen }">
                    <a href="/" class="nav-link">Home</a>
                    <a href="/services" class="nav-link">Services</a>
                    <a href="/about" class="nav-link">About</a>
                    <a href="/contact" class="nav-link">Contact</a>
                </div>
            </nav>
        </div>
    </header>
    <main>
