<?php
defined('ABSPATH') || exit;

[
    'cta_link_tag' => $cta_link_tag,
] = array_merge([
    'cta_link_tag' => '',
], $args);
?>
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