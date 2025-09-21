<section class="hero">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-profile-banner">
            <div class="profile-image">
                <img src="/media/trevorspfpInSuit.jpg" alt="Trevor Hondros" class="profile-pic">
            </div>
            <div class="profile-info">
                <h1>Trevor Hondros</h1>
                <p class="profile-title">Real Estate Expert</p>
            </div>
        </div>
        <div class="hero-content">
            <div class="hero-actions">
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
                        hx-get="/api/rent.php" 
                        hx-target="#content-area"
                        x-data="{ loading: false }"
                        @click="loading = true"
                        :disabled="loading">
                    <span x-show="!loading">Rent</span>
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
                        hx-get="/api/value.php" 
                        hx-target="#content-area"
                        x-data="{ loading: false }"
                        @click="loading = true"
                        :disabled="loading">
                    <span x-show="!loading">Get Current Home Value</span>
                    <span x-show="loading">Loading...</span>
                </button>
            </div>
            <p class="hero-description">
                Guiding you through your real estate journey with expertise and dedication.
            </p>
        </div>
    </div>
</section>
<div id="content-area"></div>