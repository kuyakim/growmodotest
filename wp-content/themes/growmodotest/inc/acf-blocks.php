<?php
defined('ABSPATH') || exit;

add_filter('block_categories_all', 'gm_acf_blocks_add_categories', 99);
function gm_acf_blocks_add_categories(array $categories = []) {
    array_unshift($categories, [
        'slug' => 'gm-blocks',
        'title' => 'Growmodo Blocks',
    ]);

    return $categories;
}


add_action('init', 'gm_acf_blocks_add_blocks');
function gm_acf_blocks_add_blocks() {
    register_block_type(GMODO_THEME_DIR . '/blocks/hero');    
    register_block_type(GMODO_THEME_DIR . '/blocks/properties');
    register_block_type(GMODO_THEME_DIR . '/blocks/testimonials');
    register_block_type(GMODO_THEME_DIR . '/blocks/faqs');
    register_block_type(GMODO_THEME_DIR . '/blocks/cta');
}