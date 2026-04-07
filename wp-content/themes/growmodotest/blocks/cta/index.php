<?php
defined('ABSPATH') || exit;

[
    'heading' => $heading,
    'text' => $text,
    'cta_link' => $cta_link,
] = get_fields();

$cta_link_tag = gm_get_link_tag($cta_link, 'btn btn--primary');
?>
<section id="<?php echo isset($block['anchor']) ? esc_attr($block['anchor']) : 'cta'; ?>" class="cta-section section">
    <div class="container cta-section__inner">
        <div class="cta-section__text-col">
            <?php if (wp_strip_all_tags($text)) { ?>    
            <h2><?php echo acf_esc_html($heading); ?></h2>
            <?php } ?>
            <?php if (wp_strip_all_tags($text)) { ?>
            <p><?php echo acf_esc_html($text); ?></p>
            <?php } ?>
        </div>
        <div class="cta-section__btn-col">
            <?php echo $cta_link_tag; ?>
        </div>
    </div>
    <img src="<?php echo esc_url(get_theme_file_uri('/assets/img/cta-bg-mobile.png')); ?>"
        class="cta-section__bg hidden-lg" width="398" height="395" alt="CTA background design"
        aria-hidden="true">
    <img src="<?php echo esc_url(get_theme_file_uri('/assets/img/cta-bg-desktop.png')); ?>"
        class="cta-section__bg hidden-md-down hidden-xl" width="1440" height="260" alt="CTA background design"
        aria-hidden="true">
    <img src="<?php echo esc_url(get_theme_file_uri('/assets/img/cta-bg-lg-desktop.png')); ?>"
        class="cta-section__bg hidden-md-down hidden-lg-down" width="1920" height="365" alt="CTA background design"
        aria-hidden="true">
</section>