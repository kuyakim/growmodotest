<?php
defined('ABSPATH') || exit;

add_action('wp_enqueue_scripts', 'gm_enqueue_styles');
function gm_enqueue_styles() {
    // Root
    gm_enqueue_style('gm-normalize', 'normalize.css', enqueue: true);
    gm_enqueue_style('gm-custom-properties', 'custom-properties.css', enqueue: true);
    gm_enqueue_style('gm-objects', 'objects.css', enqueue: true);
    gm_enqueue_style('gm-global', 'global.css', enqueue: true);
    gm_enqueue_style('gm-utils', 'utils.css', enqueue: true);

    // Modules
    gm_enqueue_style('gm-mod-header', 'modules/header.css', enqueue: true);
    gm_enqueue_style('gm-mod-footer', 'modules/footer.css', enqueue: true);

    // Plugins
    gm_enqueue_style('gm-plugin-swiper', 'plugins/swiper.css');

    // Components
    gm_enqueue_style('gm-comp-swiper', 'components/swiper.css', ['gm-plugin-swiper']);

    // Blocks
    // @NOTE: Enqueue per block
    gm_enqueue_style('gm-block-hero', 'blocks/hero.css');
    gm_enqueue_style('gm-block-properties', 'blocks/properties.css', ['gm-comp-swiper']);
    gm_enqueue_style('gm-block-testimonials', 'blocks/testimonials.css', ['gm-comp-swiper']);
    gm_enqueue_style('gm-block-faqs', 'blocks/faqs.css', ['gm-comp-swiper']);
    gm_enqueue_style('gm-block-cta', 'blocks/cta.css');
}

add_action('wp_enqueue_scripts', 'gm_enqueue_scripts');
function gm_enqueue_scripts() {
    // Plugins
    gm_enqueue_script('gm-plugin-swiper', 'plugins/swiper.js');

    // Modules
    gm_enqueue_script('gm-global', 'global.js', ['jquery'], enqueue: true);
    
    // Components
    gm_enqueue_script('gm-comp-swiper', 'components/swiper.js', ['jquery', 'gm-plugin-swiper']);
}