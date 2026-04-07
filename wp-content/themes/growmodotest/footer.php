<?php
defined('ABSPATH') || exit;

$menu_cols = [
    [
        'heading' => 'Home',
        'menu_name' => 'Footer Home Column',
    ],
    [
        'heading' => 'About Us',
        'menu_name' => 'Footer About Us Column',
    ],
    [
        'heading' => 'Properties',
        'menu_name' => 'Footer Properties Column',
    ],
    [
        'heading' => 'Services',
        'menu_name' => 'Footer Services Column',
    ],
    [
        'heading' => 'Contact Us',
        'menu_name' => 'Footer Contact Us Column',
    ],
];
?>
    <footer id="footer" class="site-footer">
        <div class="site-footer__top">
            <div class="container">
                <div class="site-footer__top-grid row">
                    <div class="col-lg-4">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="site-footer__logo-link">
                            <?php echo gm_get_image_tag(67, 'site-footer__logo'); ?>
                        </a>
                        <form action="" method="POST" class="newsletter-form">
                            <input type="email" class="newsletter-form__input" placeholder="Enter Your Email">
                            <button type="submit" class="newsletter-form__submit"></button>
                        </form>
                    </div>
                    <div class="col-lg-8">
                        <div class="site-footer__menu-row row">
                            <?php foreach ($menu_cols as $menu_col) { ?>
                            <div class="site-footer__menu-col col-xxs-6">
                                <h3 class="site-footer__menu-col-heading"><?php echo $menu_col['heading']; ?></h3>
                                <?php
                                wp_nav_menu([
                                    'menu' => $menu_col['menu_name'],
                                    'container' => '',
                                ]);
                                ?>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-footer-bottom">
            <div class="container site-footer-bottom__inner">
                <div class="site-footer-bottom__left">
                    <p>@<?php echo date('Y'); ?>Estatein. All Rights Reserved.</p>
                    <a href="<?php echo get_permalink(87); ?>">Terms & Conditions</a>
                </div>
                <?php
                $social_links = get_field('social_links', 'option');

                if ($social_links) { ?>
                <nav class="social-links">
                    <?php foreach ($social_links as $social_link) { ?>
                    <?php
                    [
                        'site' => $site,
                        'url' => $url,
                    ] = $social_link;

                    $a11y_text = "Follow us on " . ucfirst($site);
                    ?>
                    <a href="<?php echo esc_url($url); ?>" class="social-links__link" target="_blank" title="<?php echo $a11y_text; ?>" aria-label="<?php echo $a11y_text; ?>">
                        <i class="icon-<?php echo esc_attr($site); ?> social-links__icon" aria-hidden="true"></i>
                    </a>
                    <?php } ?>
                </nav>
                <?php } ?>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>