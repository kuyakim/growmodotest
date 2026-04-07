<?php
defined('ABSPATH') || exit;

[
    'heading' => $heading,
    'text' => $text,
    'cta_link' => $cta_link,
    'faqs' => $faq_ids,
] = get_fields();

$cta_link_tag = gm_get_link_tag($cta_link, 'btn btn--secondary');
?>
<section id="<?php echo isset($block['anchor']) ? esc_attr($block['anchor']) : 'faqs'; ?>" class="faqs-section section">
    <div class="container">
        <?php get_template_part('partials/section', 'intro', compact('heading', 'text', 'cta_link_tag')); ?>

        <?php if ($faq_ids) { ?>
        <div class="swiper js-swiper">
            <div class="swiper-wrapper js-swiper-wrapper">
                <?php foreach ($faq_ids as $faq_id) { ?>
                <?php
                [
                    'short_description' => $short_description,
                ] = get_fields($faq_id);
                ?>
                <div class="swiper-slide">
                    <article class="faq">
                        <h3 class="faq__title"><?php echo esc_html(get_the_title($faq_id)); ?></h3>
                        <?php if (wp_strip_all_tags($short_description)) { ?>
                        <p class="faq__desc"><?php echo acf_esc_html($short_description); ?></p>
                        <?php } ?>
                        <a href="<?php esc_url(get_permalink($faq_id)); ?>" class="faq__btn btn btn--secondary">Read More</a>
                    </article>
                </div>
                <?php } ?>
            </div>

            <?php get_template_part('partials/swiper', 'controls', compact('cta_link_tag')); ?>
        </div>
        <?php } ?>
    </div>
</section>