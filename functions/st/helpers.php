<?php

/**
 * Wrapper for ACF's have_rows(). Checks if function exists and returns false if not.
 *
 * @param string $selector The field name or key.
 * @param mixed  $post_id The post ID where the value is stored.
 *
 * @return mixed The rows or false if ACF is not active.
 */
function st_have_rows($selector, $post_id = false)
{
    if (function_exists('have_rows')) {
        return have_rows($selector, $post_id);
    }
    return false;
}

function st_register_plugin_style($plugin, $type = 'main', $deps = array())
{
    $plugin_path = trim(trim($plugin), '/');

    return wp_register_style(
        basename($plugin) . "-{$type}-css",
        get_template_directory_uri() . "/functions/plugins/{$plugin_path}/styles/{$type}.css",
        $deps
    );
}

function st_enqueue_plugin_style($plugin, $type = 'main')
{
    wp_enqueue_style("{$plugin}-{$type}-css");
}

function st_register_plugin_script($plugin, $type = 'main', $deps = array( 'jquery' ))
{
    $plugin_path = trim(trim($plugin), '/');

    return wp_register_script(
        basename($plugin) . "-{$type}-js",
        get_template_directory_uri() . "/functions/plugins/{$plugin_path}/scripts/{$type}.js",
        $deps,
        null,
        true
    );
}

function st_enqueue_plugin_script($plugin, $type = 'main')
{
    wp_enqueue_script("{$plugin}-{$type}-js");
}

function st_localize_plugin_script($plugin, $name, $data, $type = 'main')
{
    return wp_localize_script("{$plugin}-{$type}-js", $name, $data);
}

function add_cpt_taxonomy_filter($post_type, $taxonomy)
{
    add_action(
        'restrict_manage_posts',
        function () use ($post_type, $taxonomy) {
            global $typenow;

            if ($typenow == $post_type) {
                $selected      = isset($_GET[ $taxonomy ]) ? $_GET[ $taxonomy ] : '';
                $info_taxonomy = get_taxonomy($taxonomy);
                wp_dropdown_categories(
                    array(
                        'show_option_all' => $info_taxonomy->labels->all_items,
                        'taxonomy'        => $taxonomy,
                        'name'            => $taxonomy,
                        'orderby'         => 'name',
                        'selected'        => $selected,
                        'show_count'      => true,
                        'hide_empty'      => true,
                    )
                );
            }
        }
    );

    add_filter(
        'parse_query',
        function ($query) use ($post_type, $taxonomy) {
            global $pagenow;
            $q_vars = &$query->query_vars;
            if ($pagenow == 'edit.php' && isset($q_vars['post_type']) && $q_vars['post_type'] == $post_type && isset($q_vars[ $taxonomy ]) && is_numeric($q_vars[ $taxonomy ]) && $q_vars[ $taxonomy ] != 0) {
                $term                = get_term_by('id', $q_vars[ $taxonomy ], $taxonomy);
                $q_vars[ $taxonomy ] = $term->slug;
            }
        }
    );
}

/**
 * Wrapper for ACF's get_field(). Checks if function exists and returns false if not.
 *
 * @param $selector
 * @param bool     $post_id
 * @param bool     $format_value
 *
 * @return bool|mixed
 */
function st_get_field($selector, $post_id = false, $format_value = true)
{
    if (function_exists('get_field')) {
        return get_field($selector, $post_id, $format_value);
    }

    return false;
}

/**
 * Return asset path/uri
 *
 * @param $src
 * @param bool $uri
 *
 * @return string
 */
function st_asset($src, $uri = true)
{
    if ($uri) {
        $template_uri = get_template_directory_uri();
        $asset_path   = $template_uri . '/' . rtrim($src, '/');
    } else {
        $template_path = get_template_directory();
        $asset_path    = $template_path . '/' . rtrim($src, '/');
    }

    return $asset_path;
}

function st_srcset($src)
{
    $srcset = '';

    if (is_array($src)) {
        foreach ($src as $k => &$v) {
            $v = "$v $k";
        }
        $srcset = implode(', ', $src);
    }

    return $srcset;
}

/**
 * Enqueue scripts based on wp_enqueue_script.
 *
 * @link https://codex.wordpress.org/Function_Reference/wp_enqueue_script
 *
 * @param $handle
 * @param string $src
 * @param array  $deps
 * @param bool   $ver
 * @param bool   $in_footer
 *
 * @return bool
 */
function st_enqueue_script(
    $handle,
    $src = '',
    $deps = array(),
    $ver = false,
    $in_footer = true
) {
    $template_dir = get_template_directory();
    $template_uri = get_template_directory_uri();

    if (file_exists("$template_dir/$src")) {
        if (false === $ver || 'dev' === ST_ENVIRONMENT) {
            $ver = filemtime("$template_dir/$src");
        }

        wp_enqueue_script(
            $handle,
            "$template_uri/$src",
            $deps,
            $ver,
            $in_footer
        );

        return true;
    }

    return false;
}

/**
 * Enqueue styles based on wp_enqueue_style.
 *
 * @link https://codex.wordpress.org/Function_Reference/wp_enqueue_style
 *
 * @param $handle
 * @param string $src
 * @param array  $deps
 * @param bool   $ver
 * @param string $media
 *
 * @return bool
 */
function st_enqueue_style(
    $handle,
    $src = '',
    $deps = array(),
    $ver = false,
    $media = 'all'
) {
    $template_dir = get_template_directory();
    $template_uri = get_template_directory_uri();

    if (file_exists("$template_dir/$src")) {
        if ($ver === false || 'dev' === ST_ENVIRONMENT) {
            $ver = fileatime("$template_dir/$src");
        }

        wp_enqueue_style(
            $handle,
            "$template_uri/$src",
            $deps,
            $ver,
            $media
        );

        return true;
    }

    return false;
}

function st_nav_menu($theme_location, $args = array())
{
    $args = wp_parse_args(
        $args,
        array(
            'theme_location' => $theme_location,
            'container'      => false,
            'items_wrap'     => '%3$s',
        )
    );

    if (function_exists('wp_nav_menu')) {
        wp_nav_menu($args);
    }
}

function st_register_nav_menu($location, $description)
{
    register_nav_menu($location, __st($description));
}

function st_dynamic_sidebar($id = 1)
{
    if (is_active_sidebar($id)) {
        dynamic_sidebar($id);
    }
}

function st_register_sidebar($id, $name, $args = array())
{
    $args = wp_parse_args(
        $args,
        array(
            'name'            => __st($name),
            'id'              => $id,
            'description'     => '',
            'class'           => '',
            'fe_class'        => '',
            'before_widget'   => '',
            'after_widget'    => '',
            'before_title'    => '<h6>',
            'after_title'     => '</h6>',
            'do_shortcodes'   => false,
            'before_content'  => '',
            'after_content'   => '',
            'non-empty-title' => false,
        )
    );

    if (empty($args['before_widget'])) {
        if (is_array($args['fe_class'])) {
            $args['fe_class'] = implode(' ', $args['fe_class']);
        }
        $classes = array(
            'widget',
            '%2$s',
        );
        if (! empty($fe_classes = trim($args['fe_class']))) {
            $classes[] = $fe_classes;
        }
        $classes = implode(' ', $classes);

        $args['before_widget'] = '<div class="' . $classes . '">';
        if (empty($args['after_widget'])) {
            $args['after_widget'] = '</div>';
        }
    }

    register_sidebar($args);
}

/**
 * Format version of __st()
 *
 * @param string $value
 * @param array  $args
 * @param bool   $echo
 * @param string $textdomain
 *
 * @return string|void
 */
function __stf(
    $value = '',
    $args = array(),
    $echo = false,
    $textdomain = ST_TEXTDOMAIN
) {
    array_unshift($args, $value);
    $result = __st(call_user_func_array('sprintf', $args), false, $textdomain);

    if ($echo) {
        echo $result;
    } else {
        return $result;
    }
}

/**
 * Wrapper for _e() and __()
 *
 * @param string $value
 * @param bool   $echo
 * @param string $textdomain
 *
 * @return string|void
 */
function __st(
    $value = '',
    $echo = false,
    $textdomain = ST_TEXTDOMAIN
) {
    if ($echo) {
        _e($value, $textdomain);
    } else {
        return __($value, $textdomain);
    }
}

/**
 * Returns parent post title
 *
 * @param null $post
 *
 * @return string
 */
function st_get_parent_title($post = null)
{
    // get current post
    $post = get_post($post);
    // get current parent
    $post_parent = $post->post_parent;

    if ($post_parent) {
        return get_the_title($post_parent);
    }
}

/**
 * Returns page neighbors
 *
 * @param null $post
 *
 * @return array
 */
function st_get_page_neighbors($post = null)
{
    // get current post
    $post = get_post($post);
    // get current parent
    $post_parent = $post->post_parent;

    // get siblings
    $siblings = get_pages(
        array(
            'sort_column' => 'menu_order',
            'child_of'    => $post_parent,
            'parent'      => $post_parent,
            'post_type'   => 'page',
            'post_status' => 'publish',
        )
    );

    $neighbors  = array();
    $page_index = false;

    // get current page index
    foreach ($siblings as $index => $sibling) {
        if ($post->ID == $sibling->ID) {
            $page_index = $index;
            break;
        }
    }

    if ($page_index !== false) {
        // get neighbors
        $prev_page = $siblings[ $page_index - 1 ];
        $next_page = $siblings[ $page_index + 1 ];

        // check if neighbors exists
        if (! empty($prev_page)) {
            $neighbors['prev'] = array(
                'title' => $prev_page->post_title,
                'link'  => get_the_permalink($prev_page->ID),
            );
        }

        if (! empty($next_page)) {
            $neighbors['next'] = array(
                'title' => $next_page->post_title,
                'link'  => get_the_permalink($next_page->ID),
            );
        }
    }

    return $neighbors;
}

/**
 * Make HTML attributes string from array
 *
 * @param array $elements
 *
 * @return string
 */
function st_attributize($elements = array(), $echo = false)
{
    $attributes = array();
    foreach ($elements as $key => $value) {
        if (is_array($value)) {
            $value = implode(' ', $value);
        }
        $attributes[] = sprintf('%s="%s"', $key, esc_attr($value));
    }

    $attributes_str = implode(' ', $attributes);

    if ($echo) {
        echo $attributes_str;
    } else {
        return $attributes_str;
    }
}

// Generates the String for the SRCSET-Attribute using the defined wordpress-sizes
function st_generate_src_set_for_image($image)
{
    return esc_url($image['sizes']['thumbnail']) . ' ' . $image['sizes']['thumbnail-width'] . 'w, '
           . ' ' . esc_url($image['sizes']['medium']) . ' ' . $image['sizes']['medium-width'] . 'w, '
           . ' ' . esc_url($image['sizes']['medium_large']) . ' ' . $image['sizes']['medium_large-width'] . 'w, '
           . ' ' . esc_url($image['sizes']['large']) . ' ' . $image['sizes']['large-width'] . 'w, ';
}

// Generates an Image-Object that resembles the default WP-Image-Object for an Attachement-ID
function st_generate_image_object_for_id($image_id)
{
    if (! empty($image_id)) {
        // Get all Image-Sizes
        $sizes = get_intermediate_image_sizes();

        // Get Image Metadata
        $image_metadata = wp_get_attachment_metadata($image_id);
        $caption        = '';
        // Safe Caption/Title if existent
        if (! empty($image_metadata['image_meta']) && ! empty($image_metadata['image_meta']['title'])) {
            $caption = $image_metadata['image_meta']['title'];
        }
        if (empty($caption) && ! empty(get_the_ID())) {
            $thumb_img = get_post(get_post_thumbnail_id()); // Get post by ID
            $caption   = $thumb_img->post_excerpt; // Display Caption
        }
        $image = array(
            'sizes' => array(),
            'title' => $caption,
        );
        // Add Image URL for all defined Sizes to Image Object
        foreach ($sizes as $size) {
            $image['sizes'][ $size ]            = wp_get_attachment_image_src($image_id, $size)[0];
            $image['sizes'][ $size . '-width' ] = wp_get_attachment_image_src($image_id, $size)[1];
        }
        return $image;
    }
}

/**
 * Returns an array of parent Pages.
 *
 * @param null|int|WP_Post $post_id Post id.
 * @param array            $breadcrumb Leave empty, it is used to call the function recursively.
 *
 * @return array
 */
function st_get_breadcrumb($post_id = null, array $breadcrumb = array()): array
{
    if (is_null($post_id)) {
        $post_id = get_the_ID();
    }

    array_unshift(
        $breadcrumb,
        array(
            'id'        => $post_id,
            'title'     => get_the_title($post_id),
            'permalink' => get_the_permalink($post_id),
        )
    );

    $parent_id = wp_get_post_parent_id($post_id);
    if (0 !== $parent_id) {
        return st_get_breadcrumb($parent_id, $breadcrumb);
    }

    return $breadcrumb;
}

/**
 * Returns breadcrumb html output.
 *
 * @param null|int|WP_Post $post_id Post id.
 * @param array            $args Output format for breadcrumb entries.
 */
function st_get_breadcrumb_html($post_id = null, array $args = array())
{
    $defaults = array(
        'before'    => '<ul class="breadcrumb">',
        'format'    => '<li><a href="%3$s" class="page-%1$s">%2$s</a></li>',
        'separator' => '',
        'after'     => '</ul>',
        'echo'      => true,
    );

    $parsed_args = wp_parse_args($args, $defaults);

    $output     = $parsed_args['before'];
    $breadcrumb = st_get_breadcrumb($post_id);

    if (! is_array($breadcrumb)) {
        return '';
    }

    $last_entry = array_pop($breadcrumb);

    foreach ($breadcrumb as $entry) {
        $output .= sprintf($parsed_args['format'], $entry['id'], $entry['title'], $entry['permalink']);
        $output .= $parsed_args['separator'];
    }

    $output .= sprintf($parsed_args['format'], $last_entry['id'], $last_entry['title'], $last_entry['permalink']);
    $output .= $parsed_args['after'];

    if ($parsed_args['echo']) {
        echo $output;
    }

    return $output;
}
