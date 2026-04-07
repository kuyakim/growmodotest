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
    <main id="main" class="site-main">
        <section id="hero" class="hero-section">
            <div class="container hero-section__inner">
                <div class="hero-top row">
                    <div class="hero-top__media-col col-xxs-12 col-lg-6">
                        <div class="hero-media">
                            <img src="<?php echo esc_url(get_theme_file_uri('/assets/img/hero-image.png')); ?>"
                                width="920" height="814" alt="Hero image" class="hero-media__img object-fit">
                            <img src="<?php echo esc_url(get_theme_file_uri('/assets/img/hero-accent.png')); ?>"
                                width="118" height="118" alt="Hero media accent image" class="hero-media__accent"
                                aria-hidden="true">
                        </div>
                    </div>
                    <div class="hero-top__text-col col-xxs-12 col-lg-6">
                        <div class="hero-text">
                            <h1>Discover Your Dream Property with Estatein</h1>
                            <p>Your journey to finding the perfect property begins here. Explore our listings to find
                                the home that matches your dreams.</p>
                            <div class="btn-group">
                                <a href="#" class="btn btn--secondary">Learn More</a>
                                <a href="#" class="btn btn--primary">Browse Properties</a>
                            </div>
                        </div>
                        <div class="hero-usps">
                            <div class="hero-usps-grid row">
                                <div class="col-xxs-6 col-lg-4">
                                    <div class="hero-usp">
                                        <p class="hero-usp__title">200+</p>
                                        <p class="hero-usp__desc">Happy Customers</p>
                                    </div>
                                </div>
                                <div class="col-xxs-6 col-lg-4">
                                    <div class="hero-usp">
                                        <p class="hero-usp__title">10k+</p>
                                        <p class="hero-usp__desc">Properties For Clients</p>
                                    </div>
                                </div>
                                <div class="col-xxs-12 col-lg-4">
                                    <div class="hero-usp">
                                        <p class="hero-usp__title">16+</p>
                                        <p class="hero-usp__desc">Years of Experience</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="hero-icon-cards-container">
                    <div class="hero-icon-cards-grid row">
                        <div class="col-xxs-6 col-lg-3">
                            <a href="#" class="hero-icon-card-link">
                                <article class="hero-icon-card">
                                    <img src="<?php echo esc_url(get_theme_file_uri('/assets/img/prop-icon-house.svg')); ?>"
                                        alt="Hero icon house" class="hero-icon-card__icon">
                                    <p class="hero-icon-card__title">Find Your Dream Home</p>
                                    <i class="icon-top-right-arrow hero-icon-card__arrow-icon"></i>
                                </article>
                            </a>
                        </div>
                        <div class="col-xxs-6 col-lg-3">
                            <a href="#" class="hero-icon-card-link">
                                <article class="hero-icon-card">
                                    <img src="<?php echo esc_url(get_theme_file_uri('/assets/img/prop-icon-unlock.svg')); ?>"
                                        alt="Hero icon unlock" class="hero-icon-card__icon">
                                    <p class="hero-icon-card__title">Unlock Property Value</p>
                                    <i class="icon-top-right-arrow hero-icon-card__arrow-icon"></i>
                                </article>
                            </a>
                        </div>
                        <div class="col-xxs-6 col-lg-3">
                            <a href="#" class="hero-icon-card-link">
                                <article class="hero-icon-card">
                                    <img src="<?php echo esc_url(get_theme_file_uri('/assets/img/prop-icon-property.svg')); ?>"
                                        alt="Hero icon property" class="hero-icon-card__icon">
                                    <p class="hero-icon-card__title">Effortless Property Management</p>
                                    <i class="icon-top-right-arrow hero-icon-card__arrow-icon"></i>
                                </article>
                            </a>
                        </div>
                        <div class="col-xxs-6 col-lg-3">
                            <a href="#" class="hero-icon-card-link">
                                <article class="hero-icon-card">
                                    <img src="<?php echo esc_url(get_theme_file_uri('/assets/img/prop-icon-bright.svg')); ?>"
                                        alt="Hero icon bright" class="hero-icon-card__icon">
                                    <p class="hero-icon-card__title">Smart Investments, Informed Decisions</p>
                                    <i class="icon-top-right-arrow hero-icon-card__arrow-icon"></i>
                                </article>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="properties" class="properties-section section">
            <div class="container">
                <div class="section__intro">
                    <div class="section__intro-text-col">
                        <img src="<?php echo esc_url(get_theme_file_uri('/assets/img/icon-star-light.svg')); ?>"
                            width="45" height="20" alt="Star light decoration" aria-hidden="true">
                        <h2>Featured Properties</h2>
                        <p>Explore our handpicked selection of featured properties. Each listing offers a glimpse into exceptional homes and investments available through Estatein. Click "View Details" for more information.</p>
                    </div>
                    <div class="section__intro-btn-col hidden-md-down">
                        <a href="#" class="btn btn--secondary">View All Properties</a>
                    </div>
                </div>

                <div class="section__main">
                    <div class="properties-swiper swiper js-swiper">
                        <div class="swiper-wrapper js-swiper-wrapper">
                            <div class="swiper-slide">
                                <article class="property">
                                    <figure class="property__media">
                                        <img src="<?php echo esc_url(get_theme_file_uri('/assets/img/property-image-1.jpg')); ?>" alt="Property 1 image" width="432" height="218" class="property__img">
                                    </figure>
                                    <div class="property__body">
                                        <h3 class="property__title">Seaside Serenity Villa</h3>
                                        <p class="property__desc">A stunning 4-bedroom, 3-bathroom villa in a peaceful suburban neighborhood... <a href="#">Read More</a></p>
                                        <ul class="property__stats">
                                            <li class="property__stat">
                                                <i class="icon-bedroom property__stat-icon"></i>
                                                <span class="property__stat-text">4-Bedroom</span>
                                            </li>
                                            <li class="property__stat">
                                                <i class="icon-bathroom property__stat-icon"></i>
                                                <span class="property__stat-text">3-Bathroom</span>
                                            </li>
                                            <li class="property__stat">
                                                <i class="icon-building property__stat-icon"></i>
                                                <span class="property__stat-text">Villa</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="property__footer">
                                        <div class="property__price-col">
                                            <span class="property__price-label">Price</span>
                                            <span class="property__price-value">$550,000</span>
                                        </div>
                                        <a href="#" class="btn btn--primary">View Property Details</a>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="property">
                                    <figure class="property__media">
                                        <img src="<?php echo esc_url(get_theme_file_uri('/assets/img/property-image-2.jpg')); ?>" alt="Property 2 image" width="432" height="218" class="property__img">
                                    </figure>
                                    <div class="property__body">
                                        <h3 class="property__title">Metropolitan Haven</h3>
                                        <p class="property__desc">A stunning 4-bedroom, 3-bathroom villa in a peaceful suburban neighborhood... <a href="#">Read More</a></p>
                                        <ul class="property__stats">
                                            <li class="property__stat">
                                                <i class="property__stat-icon"></i>
                                                <span class="property__stat-text">4-Bedroom</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="property__footer">
                                        <div class="property__price-col">
                                            <span class="property__price-label">Price</span>
                                            <span class="property__price-value">$550,000</span>
                                        </div>
                                        <a href="#" class="btn btn--primary">View Property Details</a>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="property">
                                    <figure class="property__media">
                                        <img src="<?php echo esc_url(get_theme_file_uri('/assets/img/property-image-3.jpg')); ?>" alt="Property 3 image" width="432" height="218" class="property__img">
                                    </figure>
                                    <div class="property__body">
                                        <h3 class="property__title">Rustic Retreat Cottage</h3>
                                        <p class="property__desc">A stunning 4-bedroom, 3-bathroom villa in a peaceful suburban neighborhood... <a href="#">Read More</a></p>
                                        <ul class="property__stats">
                                            <li class="property__stat">
                                                <i class="property__stat-icon"></i>
                                                <span class="property__stat-text">4-Bedroom</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="property__footer">
                                        <div class="property__price-col">
                                            <span class="property__price-label">Price</span>
                                            <span class="property__price-value">$550,000</span>
                                        </div>
                                        <a href="#" class="btn btn--primary">View Property Details</a>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="property">
                                    <figure class="property__media">
                                        <img src="<?php echo esc_url(get_theme_file_uri('/assets/img/property-image-1.jpg')); ?>" alt="Property 1 image" width="432" height="218" class="property__img">
                                    </figure>
                                    <div class="property__body">
                                        <h3 class="property__title">Seaside Serenity Villa</h3>
                                        <p class="property__desc">A stunning 4-bedroom, 3-bathroom villa in a peaceful suburban neighborhood... <a href="#">Read More</a></p>
                                        <ul class="property__stats">
                                            <li class="property__stat">
                                                <i class="property__stat-icon"></i>
                                                <span class="property__stat-text">4-Bedroom</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="property__footer">
                                        <div class="property__price-col">
                                            <span class="property__price-label">Price</span>
                                            <span class="property__price-value">$550,000</span>
                                        </div>
                                        <a href="#" class="btn btn--primary">View Property Details</a>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="property">
                                    <figure class="property__media">
                                        <img src="<?php echo esc_url(get_theme_file_uri('/assets/img/property-image-2.jpg')); ?>" alt="Property 2 image" width="432" height="218" class="property__img">
                                    </figure>
                                    <div class="property__body">
                                        <h3 class="property__title">Metropolitan Haven</h3>
                                        <p class="property__desc">A stunning 4-bedroom, 3-bathroom villa in a peaceful suburban neighborhood... <a href="#">Read More</a></p>
                                        <ul class="property__stats">
                                            <li class="property__stat">
                                                <i class="property__stat-icon"></i>
                                                <span class="property__stat-text">4-Bedroom</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="property__footer">
                                        <div class="property__price-col">
                                            <span class="property__price-label">Price</span>
                                            <span class="property__price-value">$550,000</span>
                                        </div>
                                        <a href="#" class="btn btn--primary">View Property Details</a>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="property">
                                    <figure class="property__media">
                                        <img src="<?php echo esc_url(get_theme_file_uri('/assets/img/property-image-3.jpg')); ?>" alt="Property 3 image" width="432" height="218" class="property__img">
                                    </figure>
                                    <div class="property__body">
                                        <h3 class="property__title">Rustic Retreat Cottage</h3>
                                        <p class="property__desc">A stunning 4-bedroom, 3-bathroom villa in a peaceful suburban neighborhood... <a href="#">Read More</a></p>
                                        <ul class="property__stats">
                                            <li class="property__stat">
                                                <i class="property__stat-icon"></i>
                                                <span class="property__stat-text">4-Bedroom</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="property__footer">
                                        <div class="property__price-col">
                                            <span class="property__price-label">Price</span>
                                            <span class="property__price-value">$550,000</span>
                                        </div>
                                        <a href="#" class="btn btn--primary">View Property Details</a>
                                    </div>
                                </article>
                            </div>
                        </div>

                        <div class="swiper-controls">
                            <a href="#" class="btn btn--secondary hidden-lg">View All Properties</a>
                            <div
                                class="swiper-pagination swiper-pagination--desktop hidden-md-down js-swiper-pagination">
                            </div>
                            <div class="swiper-buttons">
                                <div class="swiper-button-prev js-swiper-button-prev"></div>
                                <div class="swiper-pagination swiper-pagination--mobile hidden-lg js-swiper-pagination">
                                </div>
                                <div class="swiper-button-next js-swiper-button-next"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="testimonials" class="testimonials-section section">
            <div class="container">
                <div class="section__intro">
                    <div class="section__intro-text-col">
                        <img src="<?php echo esc_url(get_theme_file_uri('/assets/img/icon-star-light.svg')); ?>"
                            width="45" height="20" alt="Star light decoration" aria-hidden="true">
                        <h2>What Our Clients Say</h2>
                        <p>Read the success stories and heartfelt testimonials from our valued clients. Discover why
                            they chose Estatein for their real estate needs.</p>
                    </div>
                    <div class="section__intro-btn-col hidden-md-down">
                        <a href="#" class="btn btn--secondary">View All Testimonials</a>
                    </div>
                </div>

                <div class="section__main">
                    <div class="testimonials-swiper swiper js-swiper">
                        <div class="swiper-wrapper js-swiper-wrapper">
                            <div class="swiper-slide">
                                <article class="testimonial">
                                    <div class="star-rating">
                                        <i class="icon-star star-rating__star"></i>
                                        <i class="icon-star star-rating__star"></i>
                                        <i class="icon-star star-rating__star"></i>
                                        <i class="icon-star star-rating__star"></i>
                                        <i class="icon-star star-rating__star"></i>
                                    </div>
                                    <div class="testimonial__body">
                                        <h3 class="testimonial__title">Exceptional Service!</h3>
                                        <p class="testimonial__desc">Our experience with Estatein was outstanding. Their
                                            team's dedication and professionalism made finding our dream home a breeze.
                                            Highly recommended!</p>
                                    </div>
                                    <div class="testimonial__author-container">
                                        <figure class="testimonial__author-pic-frame">
                                            <img src="<?php echo esc_url(get_theme_file_uri('/assets/img/testimonial-author-pic-1.png')); ?>"
                                                alt="Testimonial author 1 profile pic " width="50" height="50"
                                                class="testimonial__author-pic-img">
                                        </figure>
                                        <div class="testimonial__author-info">
                                            <p class="testimonial__author-name">Wade Warren</p>
                                            <span class="testimonial__author-location">USA, California</span>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="testimonial">
                                    <div class="star-rating">
                                        <i class="icon-star star-rating__star"></i>
                                        <i class="icon-star star-rating__star"></i>
                                        <i class="icon-star star-rating__star"></i>
                                        <i class="icon-star star-rating__star"></i>
                                        <i class="icon-star star-rating__star"></i>
                                    </div>
                                    <div class="testimonial__body">
                                        <h3 class="testimonial__title">Efficient and Reliable</h3>
                                        <p class="testimonial__desc">Estatein provided us with top-notch service. They
                                            helped us sell our property quickly and at a great price. We couldn't be happier
                                            with the results.</p>
                                    </div>
                                    <div class="testimonial__author-container">
                                        <figure class="testimonial__author-pic-frame">
                                            <img src="<?php echo esc_url(get_theme_file_uri('/assets/img/testimonial-author-pic-2.png')); ?>"
                                                alt="Testimonial author 2 profile pic " width="50" height="50"
                                                class="testimonial__author-pic-img">
                                        </figure>
                                        <div class="testimonial__author-info">
                                            <p class="testimonial__author-name">Emelie Thomson</p>
                                            <span class="testimonial__author-location">USA, Florida</span>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="testimonial">
                                    <div class="star-rating">
                                        <i class="icon-star star-rating__star"></i>
                                        <i class="icon-star star-rating__star"></i>
                                        <i class="icon-star star-rating__star"></i>
                                        <i class="icon-star star-rating__star"></i>
                                        <i class="icon-star star-rating__star"></i>
                                    </div>
                                    <div class="testimonial__body">
                                        <h3 class="testimonial__title">Trusted Advisors</h3>
                                        <p class="testimonial__desc">The Estatein team guided us through the entire buying
                                            process. Their knowledge and commitment to our needs were impressive. Thank you
                                            for your support!</p>
                                    </div>
                                    <div class="testimonial__author-container">
                                        <figure class="testimonial__author-pic-frame">
                                            <img src="<?php echo esc_url(get_theme_file_uri('/assets/img/testimonial-author-pic-3.png')); ?>"
                                                alt="Testimonial author 3 profile pic " width="50" height="50"
                                                class="testimonial__author-pic-img">
                                        </figure>
                                        <div class="testimonial__author-info">
                                            <p class="testimonial__author-name">John Mans</p>
                                            <span class="testimonial__author-location">USA, Nevada</span>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="testimonial">
                                    <div class="star-rating">
                                        <i class="icon-star star-rating__star"></i>
                                        <i class="icon-star star-rating__star"></i>
                                        <i class="icon-star star-rating__star"></i>
                                        <i class="icon-star star-rating__star"></i>
                                        <i class="icon-star star-rating__star"></i>
                                    </div>
                                    <div class="testimonial__body">
                                        <h3 class="testimonial__title">Exceptional Service!</h3>
                                        <p class="testimonial__desc">Our experience with Estatein was outstanding. Their
                                            team's dedication and professionalism made finding our dream home a breeze.
                                            Highly recommended!</p>
                                    </div>
                                    <div class="testimonial__author-container">
                                        <figure class="testimonial__author-pic-frame">
                                            <img src="<?php echo esc_url(get_theme_file_uri('/assets/img/testimonial-author-pic-1.png')); ?>"
                                                alt="Testimonial author 1 profile pic " width="50" height="50"
                                                class="testimonial__author-pic-img">
                                        </figure>
                                        <div class="testimonial__author-info">
                                            <p class="testimonial__author-name">Wade Warren</p>
                                            <span class="testimonial__author-location">USA, California</span>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="testimonial">
                                    <div class="star-rating">
                                        <i class="icon-star star-rating__star"></i>
                                        <i class="icon-star star-rating__star"></i>
                                        <i class="icon-star star-rating__star"></i>
                                        <i class="icon-star star-rating__star"></i>
                                        <i class="icon-star star-rating__star"></i>
                                    </div>
                                    <div class="testimonial__body">
                                        <h3 class="testimonial__title">Efficient and Reliable</h3>
                                        <p class="testimonial__desc">Estatein provided us with top-notch service. They
                                            helped us sell our property quickly and at a great price. We couldn't be happier
                                            with the results.</p>
                                    </div>
                                    <div class="testimonial__author-container">
                                        <figure class="testimonial__author-pic-frame">
                                            <img src="<?php echo esc_url(get_theme_file_uri('/assets/img/testimonial-author-pic-2.png')); ?>"
                                                alt="Testimonial author 2 profile pic " width="50" height="50"
                                                class="testimonial__author-pic-img">
                                        </figure>
                                        <div class="testimonial__author-info">
                                            <p class="testimonial__author-name">Emelie Thomson</p>
                                            <span class="testimonial__author-location">USA, Florida</span>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="testimonial">
                                    <div class="star-rating">
                                        <i class="icon-star star-rating__star"></i>
                                        <i class="icon-star star-rating__star"></i>
                                        <i class="icon-star star-rating__star"></i>
                                        <i class="icon-star star-rating__star"></i>
                                        <i class="icon-star star-rating__star"></i>
                                    </div>
                                    <div class="testimonial__body">
                                        <h3 class="testimonial__title">Trusted Advisors</h3>
                                        <p class="testimonial__desc">The Estatein team guided us through the entire buying
                                            process. Their knowledge and commitment to our needs were impressive. Thank you
                                            for your support!</p>
                                    </div>
                                    <div class="testimonial__author-container">
                                        <figure class="testimonial__author-pic-frame">
                                            <img src="<?php echo esc_url(get_theme_file_uri('/assets/img/testimonial-author-pic-3.png')); ?>"
                                                alt="Testimonial author 3 profile pic " width="50" height="50"
                                                class="testimonial__author-pic-img">
                                        </figure>
                                        <div class="testimonial__author-info">
                                            <p class="testimonial__author-name">John Mans</p>
                                            <span class="testimonial__author-location">USA, Nevada</span>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>

                        <div class="swiper-controls">
                            <a href="#" class="btn btn--secondary hidden-lg">View All Testimonials</a>
                            <div
                                class="swiper-pagination swiper-pagination--desktop hidden-md-down js-swiper-pagination">
                            </div>
                            <div class="swiper-buttons">
                                <div class="swiper-button-prev js-swiper-button-prev"></div>
                                <div class="swiper-pagination swiper-pagination--mobile hidden-lg js-swiper-pagination">
                                </div>
                                <div class="swiper-button-next js-swiper-button-next"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="faqs" class="faqs-section section">
            <div class="container">
                <div class="section__intro">
                    <div class="section__intro-text-col">
                        <img src="<?php echo esc_url(get_theme_file_uri('/assets/img/icon-star-light.svg')); ?>"
                            width="45" height="20" alt="Star light decoration" aria-hidden="true">
                        <h2>Frequently Asked Questions</h2>
                        <p>Find answers to common questions about Estatein's services, property listings, and the real
                            estate process. We're here to provide clarity and assist you every step of the way.</p>
                    </div>
                    <div class="section__intro-btn-col hidden-md-down">
                        <a href="#" class="btn btn--secondary">View All FAQ's</a>
                    </div>
                </div>

                <div class="section__main">
                    <div class="faqs-swiper swiper js-swiper">
                        <div class="swiper-wrapper js-swiper-wrapper">
                            <div class="swiper-slide">
                                <article class="faq">
                                    <h3 class="faq__title">How do I search for properties on Estatein?</h3>
                                    <p class="faq__desc">Learn how to use our user-friendly search tools to find
                                        properties that match your criteria.</p>
                                    <a href="#" class="faq__btn btn btn--secondary">Read More</a>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="faq">
                                    <h3 class="faq__title">How do I search for properties on Estatein?</h3>
                                    <p class="faq__desc">Learn how to use our user-friendly search tools to find
                                        properties that match your criteria.</p>
                                    <a href="#" class="faq__btn btn btn--secondary">Read More</a>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="faq">
                                    <h3 class="faq__title">How do I search for properties on Estatein?</h3>
                                    <p class="faq__desc">Learn how to use our user-friendly search tools to find
                                        properties that match your criteria.</p>
                                    <a href="#" class="faq__btn btn btn--secondary">Read More</a>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="faq">
                                    <h3 class="faq__title">How do I search for properties on Estatein?</h3>
                                    <p class="faq__desc">Learn how to use our user-friendly search tools to find
                                        properties that match your criteria.</p>
                                    <a href="#" class="faq__btn btn btn--secondary">Read More</a>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="faq">
                                    <h3 class="faq__title">How do I search for properties on Estatein?</h3>
                                    <p class="faq__desc">Learn how to use our user-friendly search tools to find
                                        properties that match your criteria.</p>
                                    <a href="#" class="faq__btn btn btn--secondary">Read More</a>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="faq">
                                    <h3 class="faq__title">How do I search for properties on Estatein?</h3>
                                    <p class="faq__desc">Learn how to use our user-friendly search tools to find
                                        properties that match your criteria.</p>
                                    <a href="#" class="faq__btn btn btn--secondary">Read More</a>
                                </article>
                            </div>
                        </div>

                        <div class="swiper-controls">
                            <a href="#" class="btn btn--secondary hidden-lg">View All FAQ's</a>
                            <div
                                class="swiper-pagination swiper-pagination--desktop hidden-md-down js-swiper-pagination">
                            </div>
                            <div class="swiper-buttons">
                                <div class="swiper-button-prev js-swiper-button-prev"></div>
                                <div class="swiper-pagination swiper-pagination--mobile hidden-lg js-swiper-pagination">
                                </div>
                                <div class="swiper-button-next js-swiper-button-next"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="cta" class="cta-section section">
            <div class="container cta-section__inner">
                <div class="cta-section__text-col">
                    <h2>Start Your Real Estate Journey Today</h2>
                    <p>Your dream property is just a click away. Whether you're looking for a new home, a strategic
                        investment, or expert real estate advice, Estatein is here to assist you every step of the way.
                        Take the first step towards your real estate goals and explore our available properties or get
                        in touch with our team for personalized assistance.</p>
                </div>
                <div class="cta-section__btn-col">
                    <a href="#" class="btn btn--primary">Explore Properties</a>
                </div>
            </div>
            <img src="<?php echo esc_url(get_theme_file_uri('/assets/img/cta-abstract-design-top.png')); ?>"
                class="cta-section__abstract-design-top" width="522" height="284" alt="CTA top abstract design"
                aria-hidden="true">
            <img src="<?php echo esc_url(get_theme_file_uri('/assets/img/cta-abstract-design-bottom.png')); ?>"
                class="cta-section__abstract-design-bottom" width="398" height="217" alt="CTA bottom abstract design"
                aria-hidden="true">
        </section>
    </main>