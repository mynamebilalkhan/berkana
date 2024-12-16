<?php

/**
 * Login-Interface scripts and styles.
 */
add_action('login_enqueue_scripts', function () {
    st_enqueue_style('login-css', '_/login.css');
});

/**
 * Change header logo url.
 */
add_filter('login_headerurl', function () {
    return get_bloginfo('url');
});

/**
 * Change header logo title (tooltip).
 */
add_filter('login_headertext', function () {
    return get_option('blogname');
});
