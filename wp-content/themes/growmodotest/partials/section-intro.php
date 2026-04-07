<?php
defined('ABSPATH') || exit;

[
    'heading' => $heading,
    'text' => $text,
    'cta_link_tag' => $cta_link_tag,
] = array_merge([
    'heading' => '',
    'text' => '',
    'cta_link_tag' => '',
], $args);
?>
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