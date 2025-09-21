<?php
require_once '../config/settings.php';
?>
<div class="content-section">
    <h2>Buy a Home</h2>
    <p>Let's find your perfect home. Tell us what you're looking for:</p>
    <form hx-post="/api/contact.php" hx-target="#form-response">
        <div class="form-group">
            <label for="budget">Budget Range</label>
            <select name="budget" id="budget" required>
                <option value="">Select Budget Range</option>
                <option value="under-200k">Under $200,000</option>
                <option value="200k-300k">$200,000 - $300,000</option>
                <option value="300k-500k">$300,000 - $500,000</option>
                <option value="500k-750k">$500,000 - $750,000</option>
                <option value="750k-plus">$750,000+</option>
            </select>
        </div>
        <div class="form-group">
            <label for="location">Preferred Location</label>
            <input type="text" name="location" id="location" placeholder="City, Neighborhood, or Area" required>
        </div>
        <div class="form-group">
            <label for="bedrooms">Bedrooms</label>
            <select name="bedrooms" id="bedrooms" required>
                <option value="">Select Number of Bedrooms</option>
                <option value="1">1 Bedroom</option>
                <option value="2">2 Bedrooms</option>
                <option value="3">3 Bedrooms</option>
                <option value="4">4 Bedrooms</option>
                <option value="5-plus">5+ Bedrooms</option>
            </select>
        </div>
        <div class="form-group">
            <label for="contact">Contact Information</label>
            <input type="email" name="email" placeholder="Your Email" required>
            <input type="tel" name="phone" placeholder="Your Phone Number" required>
        </div>
        <button type="submit" class="cta-button">Start Your Home Search</button>
    </form>
    <div id="form-response"></div>
</div>
