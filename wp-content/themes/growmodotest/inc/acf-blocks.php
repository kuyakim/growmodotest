<?php
defined('ABSPATH') || exit;

add_filter('block_categories_all', 'gm_acf_blocks_add_categories', 99);
function gm_acf_blocks_add_categories(array $categories = [])
{
    array_unshift($categories, [
        'slug' => 'gm-blocks',
        'title' => 'Growmodo Blocks',
    ]);

    return $categories;
}


add_action('init', 'gm_acf_blocks_add_blocks');
function gm_acf_blocks_add_blocks()
{
    register_block_type(GMODO_THEME_DIR . '/blocks/hero');
    register_block_type(GMODO_THEME_DIR . '/blocks/properties');
    register_block_type(GMODO_THEME_DIR . '/blocks/testimonials');
    register_block_type(GMODO_THEME_DIR . '/blocks/faqs');
    register_block_type(GMODO_THEME_DIR . '/blocks/cta');
}

/**
 * Creates a stylized message/header for each ACF field in the backend of Wordpress
 * 
 * @todo move to admin.css
 */
add_action('admin_head', 'gm_acf_blocks_add_heading_styles');
function gm_acf_blocks_add_heading_styles() { ?>
    <style>
    .acf-block-fields > .acf-field-message:first-child {
        background: linear-gradient(to right, #703BF7 0%,  #1A1A1A 100%);
        padding: 16px 20px 5px 20px !important;
    }

    .acf-block-fields > .acf-field-message:first-child:after {
        content: '';
        display: block;
        width: 32px;
        height: 32px;
        position: absolute;
        top: 50%;
        right: 20px;
        transform: translate(0, -50%);
        background-image: url('<?php echo GMODO_THEME_URI; ?>/assets/img/logo-alt.svg');
        background-repeat: no-repeat;
        background-size: cover;
    }

    .acf-block-fields .acf-field-message:first-child .acf-label label {
        color: #fff;
        font-size: 15px;
        text-transform: uppercase;
    }

    .acf-block-fields .acf-field-message:first-child .acf-input p,
    .acf-block-fields .acf-field-message:first-child .acf-input p a {
        color: #fff;
        font-weight: bold;
    }

    .acf-postbox > .postbox-header,
    .postbox .postbox-header {
        background: #4582C3;
        color: #fff;
        text-transform: capitalize;
    }

    .acf-postbox > .postbox-header > h2.hndle,
    .postbox .postbox-header h2 {
        color: #fff !important;
    }

    .acf-postbox > .postbox-header .toggle-indicator,
    .acf-postbox .acf-hndle-cog,
    .postbox .postbox-header .toggle-indicator,
    .postbox .handle-order-higher, 
    .postbox .handle-order-lower {
        color: #fff;
    }

    #editor .postbox > .postbox-header:hover {
        background: #4582C3;
    }

    #toplevel_page_theme-general-settings .wp-menu-name,
    #wp-admin-bar-fx-theme-settings {
        background: #207de9 !important;
        color: #fff;
    }

    #toplevel_page_theme-general-settings .wp-menu-image img {
        width: 20px;
    }

    #wp-admin-bar-fx-theme-settings .fx-settings-icon {
        width: 20px;
        background-size: contain !important;
        display: inline-block;
        height: 24px;
        background-repeat: no-repeat !important;
        background-position: 0px 5px !important;
        margin-top: 0px;
        margin-bottom: -5px;
    }

    .is-focus-mode .block-editor-block-list__block:not(.has-child-selected) {
        opacity: 1 !important;
    }

    /* Color Swatches */
    .acf-color-swatch-root .acf-radio-list:where(.acf-bl, .acf-hl) {
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        row-gap: 10px;
    }

    .acf-color-swatch-root .acf-radio-list:where(.acf-bl, .acf-hl) > li > label {
        display: flex;
        align-items: center;
        gap: 5px;
        cursor: pointer;
    }

    .acf-color-swatch-root .acf-color-swatch {
        display: inline-block;
        padding: 5px 10px;
        border-radius: 4px;
        box-shadow: 0 0 4px rgba(0, 0, 0, 0.4);
        text-transform: uppercase;
        color: #000;
    }

    /* Other ACF */
    .acf-button-group label {
        cursor: pointer;
    }
    </style>
<?php }