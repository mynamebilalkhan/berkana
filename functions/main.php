<?php

add_action(
    'wp_head',
    function () {
        if (is_singular() && pings_open()) {
            echo '<link rel="pingback" href="', esc_url(get_bloginfo('pingback_url')), '">';
        }
    }
);

add_filter(
    'body_class',
    function ($classes) {
        if (is_front_page()) {
            $classes[] = 'is-frontpage';
        }

        return $classes;
    }
);

add_action(
    'wp_enqueue_scripts',
    function () {
        wp_deregister_script('wp-embed');  // deregister WordPress wp-embed.min.js scripts.

        st_enqueue_script('main-vendor', '_/main-vendor.js', array('jquery'));
        st_enqueue_script('main-js', '_/main.js', array('jquery'));
        st_enqueue_style('main-css', '_/main.css');
    },
    PHP_INT_MAX
);

add_filter('get_the_archive_title_prefix', '__return_false');

add_action(
    'after_setup_theme',
    function () {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');

        // remove type="javascript" from script tags
        add_theme_support('html5', array('script', 'style'));

        // add custom image sizes
    }
);

add_filter(
    'document_title_separator',
    function ($separator) {
        if (is_front_page()) {
            return '';
        }

        return $separator;
    }
);
