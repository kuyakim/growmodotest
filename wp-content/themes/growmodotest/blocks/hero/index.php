<?php
defined('ABSPATH') || exit;

[
    'featured_image' => $featured_image,
    'heading' => $heading,
    'text' => $text,
    'primary_cta_link' => $primary_cta_link,
    'secondary_cta_link' => $secondary_cta_link,
    'usps' => $usps,
    'icon_cards' => $icon_cards,
] = get_fields();
?>
<section id="hero" class="hero-section">
    <div class="container hero-section__inner">
        <div class="hero-top row">
            <div class="hero-top__media-col col-xxs-12 col-lg-6">
                <div class="hero-media">
                    <?php echo gm_get_image_tag($featured_image, 'hero-media__img object-fit')?>
                    <img src="<?php echo esc_url(get_theme_file_uri('/assets/img/hero-accent.png')); ?>"
                        width="118" height="118" alt="Hero media accent image" class="hero-media__accent"
                        aria-hidden="true">
                </div>
            </div>
            <div class="hero-top__text-col col-xxs-12 col-lg-6">
                <div class="hero-text">
                    <?php if (wp_strip_all_tags($heading)) { ?>
                    <h1><?php echo acf_esc_html($heading); ?></h1>
                    <?php } ?>
                    <?php if (wp_strip_all_tags($text)) { ?>
                    <p><?php echo acf_esc_html($text); ?></p>
                    <?php } ?>
                    <?php if ($primary_cta_link || $secondary_cta_link ) { ?>
                    <div class="btn-group">
                        <?php echo gm_get_link_tag($primary_cta_link, 'btn btn--secondary'); ?>
                        <?php echo gm_get_link_tag($secondary_cta_link, 'btn btn--primary'); ?>
                    </div>
                    <?php } ?>
                </div>

                <?php if ($usps) { ?>
                <div class="hero-usps">
                    <div class="hero-usps-grid row">
                        <?php foreach ($usps as $usp) { ?>
                        <?php
                        [
                            'title' => $usp_title,
                            'text' => $usp_text,
                        ] = $usp;
                        ?>
                        <div class="col-xxs-6 col-lg-4">
                            <div class="hero-usp">
                                <?php if (wp_strip_all_tags($usp_title)) { ?>
                                <p class="hero-usp__title"><?php echo acf_esc_html($usp_title); ?></p>
                                <?php } ?>
                                <?php if (wp_strip_all_tags($usp_text)) { ?>
                                <p class="hero-usp__desc"><?php echo acf_esc_html($usp_text); ?></p>
                                <?php } ?>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>

        <?php if ($icon_cards) { ?>
        <div class="hero-icon-cards-container">
            <div class="hero-icon-cards-grid row">
                <?php foreach ($icon_cards as $icon_card) { ?>
                <?php
                [
                    'icon' => $ic_icon,
                    'text' => $ic_text,
                    'link' => $ic_link,
                ] = $icon_card;
                ?>
                <div class="col-xxs-6 col-lg-3">
                    <a href="<?php echo esc_url($ic_link['url']); ?>" class="hero-icon-card-link" target="<?php echo $ic_link['target']; ?>">
                        <article class="hero-icon-card">
                            <?php echo gm_get_image_tag($ic_icon, 'hero-icon-card__icon'); ?>
                            <?php if (wp_strip_all_tags($text)) { ?>
                            <p class="hero-icon-card__title"><?php echo acf_esc_html($text); ?></p>
                            <?php } ?>
                            <i class="icon-top-right-arrow hero-icon-card__arrow-icon"></i>
                        </article>
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>
        <?php } ?>
    </div>
</section>