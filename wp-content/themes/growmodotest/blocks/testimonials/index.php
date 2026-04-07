<?php
defined('ABSPATH') || exit;

[
    'heading' => $heading,
    'text' => $text,
    'cta_link' => $cta_link,
    'testimonials' => $testimonial_ids,
] = get_fields();

$cta_link_tag = gm_get_link_tag($cta_link, 'btn btn--secondary');
?>
<section id="<?php echo isset($block['anchor']) ? esc_attr($block['anchor']) : 'testimonials'; ?>" class="testimonials-section section">
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

        <?php if ($testimonial_ids) { ?>
        <div class="testimonials-swiper swiper js-swiper">
            <div class="swiper-wrapper js-swiper-wrapper">
                <?php foreach ($testimonial_ids as $testimonial_id) { ?>
                <?php
                [
                    'rating' => $rating,
                    'testimony_title' => $testimony_title,
                    'testimony_body' => $testimony_body,
                    'attestant_name' => $attestant_name,
                    'attestant_location' => $attestant_location,
                    'attestant_photo' => $attestant_photo,
                ] = get_fields($testimonial_id);
                ?>
                <div class="swiper-slide">
                    <article class="testimonial">
                        <div class="star-rating">
                            <?php for ($i = 0; $i < $rating; $i++) { ?>
                            <i class="icon-star star-rating__star"></i>
                            <?php } ?>
                        </div>
                        <div class="testimonial__body">
                            <?php if (wp_strip_all_tags($testimony_title)) { ?>
                            <h3 class="testimonial__title"><?php echo acf_esc_html($testimony_title); ?></h3>
                            <?php } ?>
                            <?php if (wp_strip_all_tags($testimony_body)) { ?>
                            <p class="testimonial__body"><?php echo acf_esc_html($testimony_body); ?></p>
                            <?php } ?>
                        </div>
                        <?php if (
                            wp_strip_all_tags($attestant_name)
                            || wp_strip_all_tags($attestant_location)
                            || wp_strip_all_tags($attestant_photo)
                        ) { ?>
                        <div class="testimonial__author-container">
                            <figure class="testimonial__author-pic-frame">
                                <?php echo gm_get_image_tag($attestant_photo, 'testimonial__author-pic-img'); ?>
                            </figure>
                            <div class="testimonial__author-info">
                                <?php if (wp_strip_all_tags($attestant_name)) { ?>
                                <p class="testimonial__author-name"><?php echo acf_esc_html($attestant_name); ?></p>
                                <?php } ?>
                                <?php if (wp_strip_all_tags($attestant_location)) { ?>
                                <span class="testimonial__author-location"><?php echo acf_esc_html($attestant_location); ?></span>
                                <?php } ?>
                            </div>
                        </div>
                        <?php } ?>
                    </article>
                </div>
                <?php }?>
            </div>

            <div class="swiper-controls">
                <?php if ($cta_link_tag) { ?>
                <div class="hidden-lg">
                    <?php echo $cta_link_tag; ?>
                </div>
                <?php } ?>
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
        <?php } ?>
    </div>
</section>