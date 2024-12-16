<?php
/**
 * All about WordPress admin area
 *
 * @package SetupTheme
 */

/**
 * Admin-Interface scripts and styles.
 */
add_action(
    'admin_enqueue_scripts',
    function () {
        st_enqueue_style('admin-css', '_/admin.css');
        st_enqueue_script('admin-js', '_/admin.js');
    }
);

add_action(
    'wp_before_admin_bar_render',
    function () {
        global $wp_admin_bar;

        // remove menu logo.
        $wp_admin_bar->remove_menu('wp-logo');
    }
);

// remove inline styles for wpadminbar.
add_action(
    'admin_bar_init',
    function () {
        remove_action('wp_head', '_admin_bar_bump_cb');
    }
);

$js_src  = includes_url('js/tinymce/') . 'tinymce.min.js';
$css_src = includes_url('css/') . 'editor.css';

// wp_enqueue doesn't seem to work at all
echo '<script src="' . $js_src . '" type="text/javascript"></script>';

wp_register_style('tinymce_css', $css_src);
wp_enqueue_style('tinymce_css');
