<?php
defined('ABSPATH') || exit;

/**
 * Assets
 */
function gm_enqueue_style(
    string $handle = '',
    string $uri_path = '',
    array $deps = []
) {
    wp_enqueue_style(
        $handle,
        GMODO_CSS_URI . '/' . $uri_path,
        $deps,
        filemtime(GMODO_CSS_DIR . '/' . $uri_path)
    );
}

function gm_enqueue_script(
    string $handle = '',
    string $uri_path = '',
    array $deps = [],
    array $args = []
) {
    wp_enqueue_script(
        $handle,
        GMODO_JS_URI . '/' . $uri_path,
        $deps,
        filemtime(GMODO_JS_DIR . '/' . $uri_path),
        wp_parse_args([
            'in_footer' => true,
        ], $args)
    );
}

/**
 * ACF
 */
function gm_normalize_acf_array_link(
    array|string|null $link
): array {
    if (!is_array($link)) {
        $link = [];
    }

    $link['url'] = $link['url'] ?? '';
    $link['title'] = $link['title'] ?? '';
    $link['target'] = $link['target'] ?? '_self';

    return $link;
}

// Media
function gm_get_image_tag(
    int|string|null $image = '',
    string|array $classes = '',
    string $size = 'full',
    bool $skip_lazy = false,
    array $atts = [],
    string $return_type = 'img_tag'
): string {
    $is_placeholder = false;
    $image_id = null;

    // determine if image ID or URL
    if (is_numeric($image)) {
        $image_id = absint($image);
        // try to find ID based on URL
    } elseif (is_string($image)) {
        $image_id = attachment_url_to_postid($image);
    }

    // if still empty, check for placeholder
    if (empty($image_id)) {
        [
            'placeholder' => $image_id,
        ] = get_field('media_assets', 'option');

        if ($image_id) {
            $is_placeholder = true;
        }
    }

    // if STILL empty, return empty string
    if (empty($image_id)) {
        return '';
    }

    // if classes weren't passed as string, try to form string
    if (is_array($classes)) {
        $classes = implode(' ', $classes);
    }

    // prevent lazyloading from WP Rocket?
    if ($skip_lazy || str_contains($classes, 'skip-lazy')) {
        $classes .= ' skip-lazy';
    }

    if ($is_placeholder) {
        $classes .= ' is-placeholder object-fit--contain soft';
    }

    // combine classes with tag attributes
    $atts = array_merge(
        [
            'class' => $classes,
        ],
        $atts
    );
    $atts = array_filter($atts);

    // use WP's native function to generate image element
    if ('image_url' == $return_type) {
        $output = wp_get_attachment_image_url($image_id, $size);
    } else {
        $output = wp_get_attachment_image($image_id, $size, false, $atts);
    }

    return $output;
}

/**
 * Links
 */
function gm_get_link_tag(
    array|string|null $link = [],
    array|string $classes = [],
    string|callable $custom_title = '',
    bool $clean_title = true
): string {
    $normalized_link = gm_normalize_acf_array_link($link);
    [
        'url' => $url,
        'title' => $title,
        'target' => $target
    ] = $normalized_link;

    $title = $custom_title ?: $title;
    if (is_callable($title)) {
        $title = $title($normalized_link);
    }
    $target_blank = '_blank' === $target;

    if (empty($url) || empty($title)) {
        return '';
    }

    // if target link doesn't match site URL, automatically add target blank
    if (
        !in_array(parse_url($url, PHP_URL_SCHEME), ['tel', 'mailto'])
        && parse_url($url, PHP_URL_HOST) !== parse_url(get_site_url(), PHP_URL_HOST)
    ) {
        $target_blank = true;
    }

    $attr_target = $target_blank ? 'target="_blank" rel="noopener"' : ''; // match FX.ExternalLinks

    // sanitize HTML classes
    if (is_string($classes)) {
        $classes = explode(' ', $classes);
    }

    $classes = array_map('sanitize_html_class', (array) $classes);
    $classes = array_filter($classes);
    $classes = trim(implode(' ', $classes));
    $attr_classes = (!empty($classes)) ? sprintf('class="%s"', esc_attr($classes)) : '';

    $title_attr = wp_strip_all_tags($title);

    return sprintf(
        '<a href="%1$s" %2$s %3$s %4$s>%5$s</a>',
        esc_url($url),
        $title_attr ? sprintf('title="%s"', $title) : '',
        $attr_classes,
        $attr_target,
        $clean_title ? wp_kses_post($title) : $title
    );
}