<?php
require_once 'config/settings.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trevor Hondros - Real Estate Expert</title>
    
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    
    <!-- HTMX -->
    <script src="https://unpkg.com/htmx.org@1.9.10"></script>
    <!-- Alpine.js -->
    <script defer src="https://unpkg.com/alpinejs@3.13.3/dist/cdn.min.js"></script>
</head>
<body>
    <main class="hero-page">
        <div class="hero-overlay"></div>
        <div class="hero-banner">
            <div class="banner-content">
                <div class="profile-section">
                    <div class="profile-image">
                        <img src="media/trevorspfpInSuit.jpg" alt="Trevor Hondros" class="profile-pic">
                    </div>
                    <h1>Trevor Hondros</h1>
                    <p class="profile-title">Real Estate Expert</p>
                </div>
                
                <div class="action-buttons">
                    <button class="action-button primary" 
                            hx-get="/api/buy.php" 
                            hx-target="#content-area"
                            x-data="{ loading: false }"
                            @click="loading = true"
                            :disabled="loading">
                        <span x-show="!loading">Buy</span>
                        <span x-show="loading">Loading...</span>
                    </button>
                    <button class="action-button" 
                            hx-get="/api/sell.php" 
                            hx-target="#content-area"
                            x-data="{ loading: false }"
                            @click="loading = true"
                            :disabled="loading">
                        <span x-show="!loading">Sell</span>
                        <span x-show="loading">Loading...</span>
                    </button>
                    <button class="action-button" 
                            hx-get="/api/rent.php" 
                            hx-target="#content-area"
                            x-data="{ loading: false }"
                            @click="loading = true"
                            :disabled="loading">
                        <span x-show="!loading">Rent</span>
                        <span x-show="loading">Loading...</span>
                    </button>
                    <button class="action-button" 
                            hx-get="/api/value.php" 
                            hx-target="#content-area"
                            x-data="{ loading: false }"
                            @click="loading = true"
                            :disabled="loading">
                        <span x-show="!loading">Get Current Home Value</span>
                        <span x-show="loading">Loading...</span>
                    </button>
                </div>
                
                <button class="appointment-button" 
                        hx-get="/api/appointment.php" 
                        hx-target="#content-area"
                        x-data="{ loading: false }"
                        @click="loading = true"
                        :disabled="loading">
                    <span x-show="!loading">Schedule an Appointment</span>
                    <span x-show="loading">Loading...</span>
                </button>
            </div>
        </div>
        
        <div id="content-area"></div>
    </main>
</body>
</html>
