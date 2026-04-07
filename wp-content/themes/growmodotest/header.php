<?php defined('ABSPATH') || exit; ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script>
        const GM_APP = {}
    </script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="site-top-banner">
        <div class="container site-top-banner__inner">
            <p class="site-top-banner__text">
                ✨Discover Your Dream Property with Estatein
                <a href="#">Learn More</a>
            </p>
            <button class="site-top-banner__close"></button>
        </div>
        <img src="<?php echo esc_url(get_theme_file_uri('/assets/img/top-banner-abstract-design.png')); ?>"
            class="site-top-banner__abstract-design" width="1566" height="1046" alt="Top banner abstract design"
            aria-hidden="true">
    </div>
    <header id="header" class="site-header">
        <div class="container site-header__inner">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="site-header__logo-link">
                <?php echo gm_get_image_tag(67, 'site-header__logo'); ?>
            </a>
            <?php
            wp_nav_menu([
                'menu' => 'Header Main',
                'container' => '',
                'menu_class' => 'site-header-menu menu',
            ]);
            ?>
            <?php echo gm_get_link_tag(get_field('contact_us_link', 'option'), 'btn btn--secondary site-header__cta'); ?>
            <button type="button" class="mobile-menu-toggle"></button>
        </div>
    </header>