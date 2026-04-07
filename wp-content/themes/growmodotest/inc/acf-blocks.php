<?php
defined('ABSPATH') || exit;

add_action('init', 'gm_register_acf_blocks');
function gm_register_acf_blocks() {
    register_block_type(GMODO_THEME_DIR . '/blocks/properties');
}