<?php
defined('ABSPATH') || exit;

[
    'heading' => $heading,
    'text' => $text,
    'cta_link' => $cta_link,
    'properties' => $property_ids,
] = get_fields();

$cta_link_tag = gm_get_link_tag($cta_link, 'btn btn--secondary');
?>
<section id="<?php echo isset($block['anchor']) ? esc_attr($block['anchor']) : 'properties'; ?>" class="properties-section section">
    <div class="container">
        <?php if (wp_strip_all_tags($heading) || wp_strip_all_tags($text) || $cta_link_tag) { ?>
        <div class="section__intro">
            <div class="section__intro-text-col">
                <img src="<?php echo esc_url(get_theme_file_uri('/assets/img/icon-star-light.svg')); ?>"
                    width="45" height="20" alt="Star light decoration" aria-hidden="true">
                <?php if (wp_strip_all_tags($heading)) { ?>
                <h2><?php echo acf_esc_html($heading); ?></h2>
                <?php } ?>
                <?php if (wp_strip_all_tags($text)) { ?>
                <p><?php echo acf_esc_html($text); ?></p>
                <?php } ?>
            </div>
            <div class="section__intro-btn-col hidden-md-down">
                <?php echo $cta_link_tag; ?>
            </div>
        </div>
        <?php } ?>

        <?php if ($property_ids) { ?>
        <div class="properties-swiper swiper js-swiper">
            <div class="swiper-wrapper js-swiper-wrapper">
                <?php foreach ($property_ids as $property_id) { ?>
                <?php
                $short_description = get_field('short_description', $property_id);
                $price = get_field('price', $property_id);
                $amenities = get_field('amenities', $property_id) ?: [];
                ?>
                <div class="swiper-slide">
                    <article class="property">
                        <figure class="property__media">
                            <?php echo gm_get_image_tag(get_post_thumbnail_id($property_id), 'property__img'); ?>
                        </figure>
                        <div class="property__body">
                            <h3 class="property__title"><?php echo get_the_title($property_id); ?></h3>
                            <?php if ($short_description) { ?>
                            <p class="property__desc"><?php echo acf_esc_html($short_description); ?></p>
                            <?php } ?>
                            <?php if ($amenities) { ?>
                            <ul class="property__stats">
                                <?php foreach ($amenities as $amenity) { ?>
                                <li class="property__stat">
                                    <i class="<?php echo get_field('icon', $amenity); ?> property__stat-icon"></i>
                                    <span class="property__stat-text"><?php echo esc_html($amenity->name); ?></span>
                                </li>
                                <?php } ?>
                            </ul>
                            <?php } ?>
                        </div>
                        <div class="property__footer">
                            <div class="property__price-col">
                                <span class="property__price-label">Price</span>
                                <span class="property__price-value"><?php echo $price ? '$' . acf_esc_html($price) : 'N/A'; ?></span>
                            </div>
                            <a href="<?php echo esc_url(get_permalink($property_id)); ?>" class="btn btn--primary">View Property Details</a>
                        </div>
                    </article>
                </div>
                <?php } ?>
            </div>

            <div class="swiper-controls">
                <?php if ($cta_link_tag) { ?>
                <div class="hidden-lg">
                    <?php echo $cta_link_tag; ?>
                </div>
                <?php } ?>
                <div class="swiper-pagination swiper-pagination--desktop hidden-md-down js-swiper-pagination">
                </div>
                <div class="swiper-buttons">
                    <div class="swiper-button-prev js-swiper-button-prev"></div>
                    <div class="swiper-pagination swiper-pagination--mobile hidden-lg js-swiper-pagination">
                    </div>
                    <div class="swiper-button-next js-swiper-button-next"></div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</section>