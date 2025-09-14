# WARP.md

This file provides guidance to WARP (warp.dev) when working with code in this repository.

## Project Overview

**chimera-theme** is a WordPress block theme (FSE - Full Site Editing) developed by Chimera Studio as a starter theme for in-house development. It's built using modern WordPress development practices with `theme.json` for global styles and block patterns for reusable content components.

## Development Environment

### Local Development with wp-env

The theme uses WordPress's official local development environment:

```bash
# Start local WordPress environment
npx @wordpress/env start

# Stop the environment  
npx @wordpress/env stop

# Access WordPress admin
# URL: http://localhost:8888/wp-admin
# Default credentials: admin/password

# Access site frontend
# URL: http://localhost:8888
```

### WP-CLI Commands (if available)

```bash
# Activate the theme
wp theme activate chimera-theme

# List all themes
wp theme list

# Check theme status
wp theme status chimera-theme
```

## Theme Architecture

### Block Theme Structure

This is a **WordPress Block Theme** that leverages:

- **Full Site Editing (FSE)** capabilities
- **theme.json** for global styling and configuration  
- **Block patterns** instead of traditional template parts
- **Custom block styles** for enhanced functionality

### Key Files & Directories

**Core Theme Files:**
- `style.css` - Theme header and minimal CSS (WordPress uses theme.json for most styling)
- `theme.json` - Global theme configuration (colors, typography, spacing, layouts)
- `functions.php` - Theme setup, block styles, and asset enqueuing
- `index.php` - Minimal fallback template

**Block Patterns (`/patterns/`):**
- Hero sections: `hero-1.php` through `hero-5.php`, `hero-full-width-image.php`
- Call-to-actions: `cta-1.php` through `cta-10.php`
- Features: `features-1.php`, `features-2.php`, `features-3.php`
- FAQ sections: `faq-1.php` through `faq-4.php`
- Footers: `footer-1.php`, `footer-2.php`, `footer-3.php`
- Galleries: `gallery-1.php` through `gallery-3.php`
- Layouts: `layout-1.php` through `layout-3.php`
- Special patterns: `author-card.php`, `clients.php`, `linktree.php`

**Template Parts (`/parts/`):**
- `header.html` - Site header with title and tagline
- `footer.html` - Site footer

**Assets (`/assets/`):**
- `/fonts/` - Open Sans font files (weights 300-800)
- `/js/chimera.js` - Main theme JavaScript (currently empty)  
- `/js/block-variation.js` - Custom block variations
- `/styles/` - Per-block CSS files (core-button.css, core-columns.css, etc.)

### Theme Configuration (theme.json)

**Design System:**
- **Colors:** Extensive grayscale palette (12 variations) plus transparent
- **Typography:** Open Sans font family with fluid font sizes
- **Spacing:** Custom spacing scale (2rem to 20rem)
- **Layout:** Content width: 900px, Wide width: 1200px

**Key Features:**
- Fluid typography that scales with viewport
- Custom font weights defined in CSS custom properties
- Block gap set to 2rem for consistent spacing
- Root padding-aware alignments enabled

### Block Customizations

**Custom Block Styles:**
- Button: `shadow` style with drop shadow effect
- Columns: `reverse-on-desktop` style for responsive layouts

**Custom Block Variations:**
- Group: `full-width-group` variation with full alignment

**Block Style Loading:**
Per-block CSS files in `/assets/styles/` are automatically enqueued only when the corresponding block is used, improving performance.

## Development Workflow

### Adding New Block Patterns

1. Create new PHP file in `/patterns/` directory
2. Use the required WordPress pattern header format:
   ```php
   <?php
   /**
    * Title: Pattern Name
    * Slug: chimera-master/pattern-slug
    * Description: Pattern description
    * Categories: chimera-category
    * Keywords: keyword1, keyword2
    * Viewport Width: 1200
    * Inserter: true
    */
   ?>
   ```

### Adding Custom Block Styles

1. Register block style in `functions.php` using `register_block_style()`
2. Create corresponding CSS file in `/assets/styles/` named `core-blockname.css`
3. The CSS will be automatically enqueued when the block is used

### Modifying Global Styles

Edit `theme.json` to modify:
- Color palette and gradients
- Typography scales and font families  
- Spacing scales
- Layout constraints
- Default block styles

### WordPress Coding Standards

The theme follows WordPress coding standards:
- PHP: WordPress PHP Coding Standards
- Block patterns use proper WordPress block markup
- Proper escaping with `esc_url()` for dynamic content
- Standard WordPress action hooks and filters

### Font Management

Custom fonts are loaded via `theme.json` font face declarations pointing to `/assets/fonts/`. To add new fonts:
1. Add font files to `/assets/fonts/`
2. Update `fontFamilies` section in `theme.json`
3. Reference in CSS using `var(--wp--preset--font-family--slug)`

## Testing & Validation

### Theme Testing

```bash
# Test theme activation (requires WP-CLI)
wp theme activate chimera-theme

# Check for PHP errors in theme files
php -l functions.php
```

### Block Pattern Testing

Patterns should be tested in the WordPress editor to ensure:
- Proper block markup renders correctly
- Responsive behavior works as expected
- Color and typography variables resolve properly
- Images use proper template directory URLs

## Theme Information

- **Name:** chimera master
- **Version:** 1.1.0  
- **Author:** Chimera Studio
- **Text Domain:** chimera-master
- **WordPress Requirements:** 5.3+, PHP 5.6+
- **License:** GNU General Public License v2 or later