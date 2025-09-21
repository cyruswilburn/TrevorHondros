<section class="hero">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-profile">
            <div class="profile-image">
                <img src="/media/poolsideWBackground.jpeg" alt="Trevor Hondros" class="profile-pic">
            </div>
        </div>
        <div class="hero-banner">
            <h2>Real Estate Expert</h2>
        </div>
        <div class="hero-content">
            <h1>Trevor Hondros</h1>
            <p class="hero-subtitle">Your Trusted Real Estate Professional</p>
            <p class="hero-description">
                Guiding you through your real estate journey with expertise and dedication.
            </p>
            <div class="hero-cta">
                <button class="cta-button" 
                        hx-get="/api/contact.php" 
                        hx-target="#contact-form"
                        x-data="{ loading: false }"
                        @click="loading = true"
                        :disabled="loading">
                    <span x-show="!loading">Get Started</span>
                    <span x-show="loading">Loading...</span>
                </button>
            </div>
        </div>
    </div>
</section>
<div id="contact-form"></div>