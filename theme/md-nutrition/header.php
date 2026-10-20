<?php
/**
 * The header for our theme
 *
 * @package MD_Nutrition
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- 1. TOP BAR -->
<div class="top-bar">
    <div class="container">
        <div class="top-bar-left">
            <span><?php echo esc_html( get_theme_mod( 'md_topbar_text', '80% Nutrition. 20% Exercise. 100% Mindset.' ) ); ?></span>
            <span style="opacity: 0.6;">|</span>
            <a href="tel:<?php echo esc_attr( preg_replace( '/[^0-9+]/', '', get_theme_mod( 'md_phone', '+91 97009 07707' ) ) ); ?>" style="color: #ffffff;">
                <i class="fa-solid fa-phone" style="margin-right: 5px;"></i> <?php echo esc_html( get_theme_mod( 'md_phone', '+91 97009 07707' ) ); ?>
            </a>
            <span style="opacity: 0.6;">|</span>
            <a href="mailto:<?php echo esc_attr( get_theme_mod( 'md_email', 'mdnutritioncentre@gmail.com' ) ); ?>" style="color: #ffffff;">
                <i class="fa-solid fa-envelope" style="margin-right: 5px;"></i> Guntur, AP
            </a>
        </div>
        <div class="top-bar-right">
            <div class="social-links">
                <a href="<?php echo esc_url( get_theme_mod( 'md_social_wa', 'https://wa.me/919700907707' ) ); ?>" target="_blank" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
                <a href="<?php echo esc_url( get_theme_mod( 'md_social_fb', '#' ) ); ?>" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="<?php echo esc_url( get_theme_mod( 'md_social_ig', '#' ) ); ?>" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                <a href="<?php echo esc_url( get_theme_mod( 'md_social_li', '#' ) ); ?>" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="<?php echo esc_url( get_theme_mod( 'md_social_yt', '#' ) ); ?>" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- 2. MAIN HEADER & NAVIGATION -->
<header class="main-header">
    <div class="container">
        <div class="header-content">
            <!-- Logo / Branding -->
            <div class="site-branding">
                <?php if ( has_custom_logo() ) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logo">
                        <i class="fa-solid fa-leaf logo-icon"></i>
                        <div class="logo-text">
                            <h2 class="site-title"><?php bloginfo( 'name' ); ?></h2>
                            <span class="site-tagline">Centre · Health Coach</span>
                        </div>
                    </a>
                <?php endif; ?>
            </div>

            <!-- Primary Navigation Menu -->
            <nav class="primary-navigation" id="site-navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'md-nutrition' ); ?>">
                <?php
                if ( has_nav_menu( 'primary' ) ) {
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'menu_class'     => 'nav-menu',
                        'container'      => false,
                    ) );
                } else {
                    echo '<ul class="nav-menu">';
                    echo '<li class="current-menu-item"><a href="' . esc_url( home_url( '/' ) ) . '">Home</a></li>';
                    echo '<li><a href="#about">About Coach</a></li>';
                    echo '<li><a href="#services">Services</a></li>';
                    echo '<li><a href="#success-stories">Success Stories</a></li>';
                    echo '<li><a href="#events">Events</a></li>';
                    echo '<li><a href="#contact">Contact</a></li>';
                    echo '</ul>';
                }
                ?>
            </nav>

            <!-- Header Action Buttons -->
            <div class="header-actions">
                <a href="<?php echo esc_url( get_theme_mod( 'md_booking_url', 'https://calendly.com/mujeeb-nutrition/one-to-one-meeting' ) ); ?>" target="_blank" class="btn-appointment">
                    <i class="fa-regular fa-calendar-check" style="margin-right: 6px;"></i> <?php esc_html_e( 'Book Free Assessment', 'md-nutrition' ); ?>
                </a>
                <button class="mobile-menu-toggle" id="mobileMenuToggle" aria-label="<?php esc_attr_e( 'Toggle navigation', 'md-nutrition' ); ?>">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
        </div>
    </div>
</header>
