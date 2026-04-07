<?php
defined('ABSPATH') || exit;

define('GMODO_THEME_URI', get_template_directory_uri());
define('GMODO_THEME_DIR', get_template_directory());

define('GMODO_IMG_URI', GMODO_THEME_URI . '/assets/css');

define('GMODO_CSS_URI', GMODO_THEME_URI . '/assets/css');
define('GMODO_CSS_DIR', GMODO_THEME_DIR . '/assets/css');

define('GMODO_JS_URI', GMODO_THEME_URI . '/assets/js');
define('GMODO_JS_DIR', GMODO_THEME_DIR . '/assets/js');

require_once GMODO_THEME_DIR . '/inc/helpers.php';
require_once GMODO_THEME_DIR . '/inc/frontend.php';
require_once GMODO_THEME_DIR . '/inc/assets.php';
require_once GMODO_THEME_DIR . '/inc/acf-blocks.php';