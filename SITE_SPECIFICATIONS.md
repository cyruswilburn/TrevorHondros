# Trevor Hondros Website - Design Specifications

## Overview
A professional real estate website for Trevor Hondros, featuring a clean, modern design with a sand-gold/black/gray color palette.

## Design Requirements

### Layout
- **Fullscreen background**: Poolside background image (`poolsideWBackground.jpeg`) covering the entire viewport
- **No header/navigation**: Simple, single-page design focused on the hero section
- **Left-side banner**: All content centered in a rounded banner on the left side of the screen
- **Centered content**: All elements (profile, buttons, appointment) vertically and horizontally centered within the banner

### Background
- **Primary image**: `poolsideWBackground.jpeg` as fullscreen background
- **Overlay**: Dark tint/overlay for better text contrast
- **Quality**: Full viewport coverage without scrolling issues

### Content Banner
- **Position**: Left side of screen, vertically centered
- **Style**: Rounded white/semi-transparent box with backdrop blur
- **Content**: All website content contained within this banner
- **Shadow**: Subtle shadow for depth

### Profile Section
- **Photo**: Trevor's professional photo (`trevorspfpInSuit.jpg`) in circular frame
- **Name**: "Trevor Hondros" as main heading
- **Title**: "Real Estate Expert" as subtitle
- **Styling**: Sand-gold accent colors, professional typography

### Action Buttons
- **Primary button**: "Buy" (highlighted in sand-gold)
- **Secondary buttons**: "Sell", "Rent", "Get Current Home Value"
- **Layout**: Vertical stack, full-width within banner
- **Styling**: Sand-gold primary, clean modern design

### Appointment Button
- **Text**: "Schedule an Appointment"
- **Position**: Below all action buttons
- **Styling**: Black background, contrasting with other buttons
- **Functionality**: Interactive content area on right side

### Interactive Content
- **Target area**: Right side of screen when buttons are clicked
- **Content**: Service-specific information and contact details
- **Styling**: Matching banner design with semi-transparent background

## Technical Requirements

### Fonts
- **Headings**: Montserrat (Google Fonts)
- **Body text**: Inter (Google Fonts)
- **Fallbacks**: System fonts for performance

### Color Palette
- **Primary**: Sand-gold (#D4AF37)
- **Secondary**: Black (#1a1a1a)
- **Accent**: Gray variations
- **Background**: Semi-transparent white with blur effects

### Responsive Design
- **Mobile-first**: Banner adapts to smaller screens
- **Fullscreen**: Background maintains full viewport coverage
- **Content**: Properly centered and readable on all devices

### Performance
- **No heavy frameworks**: Simple HTML/CSS/JavaScript only
- **Optimized images**: Proper sizing and compression
- **Fast loading**: Minimal dependencies

## File Structure
```
/
├── index.html          # Static version for GitHub Pages
├── index.php           # PHP version for server hosting
├── assets/
│   └── css/
│       └── main.css    # All styling
├── media/
│   ├── poolsideWBackground.jpeg  # Fullscreen background
│   └── trevorspfpInSuit.jpg     # Profile photo
└── api/                # PHP endpoints for dynamic content
```

## Key Features
1. **Single-page design** with no navigation
2. **Fullscreen poolside background** with dark overlay
3. **Left-side content banner** with all website content
4. **Professional profile section** with photo and credentials
5. **Action buttons** for main services (Buy, Sell, Rent, Value)
6. **Appointment scheduling** as primary call-to-action
7. **Interactive content area** for service details
8. **Sand-gold color scheme** throughout
9. **Modern typography** with Google Fonts
10. **Responsive design** for all screen sizes

## Design Philosophy
- **Clean and professional** appearance
- **Focused user experience** without distractions
- **Clear call-to-actions** for real estate services
- **Trust-building elements** (professional photo, credentials)
- **Fast and accessible** for all users
- **Mobile-friendly** design approach

This specification ensures a professional, modern real estate website that effectively showcases Trevor's services while maintaining excellent user experience and visual appeal.
