<?php
function syndika_dequeue_script()
{
    if (!is_admin()) {
        wp_deregister_script('wp-embed');
        global $wp_styles;

        foreach ($wp_styles->queue as $key => $handle) {
            if (strpos($handle, 'wp-block-') === 0) {
                wp_dequeue_style($handle);
            }
        }
    }
}

add_action('wp_enqueue_scripts', 'syndika_dequeue_script', 100);

add_filter('use_block_editor_for_post', '__return_false', 10);
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'wp_generator');
remove_action('wp_enqueue_scripts', 'wp_enqueue_global_styles');
remove_action('wp_footer', 'wp_enqueue_global_styles', 1);
function syndika_remove_global_styles()
{
    remove_theme_support('widgets-block-editor');
    remove_action('wp_body_open', 'wp_global_styles_render_svg_filters');
    remove_action('in_admin_header', 'wp_global_styles_render_svg_filters');
}

add_action('after_setup_theme', 'syndika_remove_global_styles', 10, 0);

function dequeue_jquery_migrate($scripts)
{
    if (!is_admin() && !empty($scripts->registered['jquery'])) {
        $scripts->registered['jquery']->deps = array_diff(
            $scripts->registered['jquery']->deps,
            ['jquery-migrate']
        );
    }
}

add_action('wp_default_scripts', 'dequeue_jquery_migrate');


remove_filter('acf_the_content', 'wpautop');
