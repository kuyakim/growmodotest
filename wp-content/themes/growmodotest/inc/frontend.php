<?php
defined('ABSPATH') || exit;

add_action('after_setup_theme', 'gm_add_theme_support');
function gm_add_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('html5', [
        'comment-list',
        'comment-form',
        'search-form',
        'gallery',
        'caption',
        'style',
        'script',
    ] );
    add_theme_support('menus');
}

add_action('after_setup_theme', 'gm_register_nav_menus');
function gm_register_nav_menus() {
    register_nav_menus([
        'header_main_menu' => 'Navigation for the header Main menu.',
        'footer_home_column_menu' => 'Navigation for the footer Home column menu.',
        'footer_about_us_column_menu' => 'Navigation for the footer About Us column menu.',
        'footer_properties_column_menu' => 'Navigation for the footer Properties column menu.',
        'footer_services_column_menu' => 'Navigation for the footer Services column menu.',
        'footer_contact_us_column_menu' => 'Navigation for the footer Contact Us column menu.',
    ]);
}