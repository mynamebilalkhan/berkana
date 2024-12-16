<?php

if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'global_settings',
        'menu_title' => 'Global Settings',
        'menu_title' => 'Global settings',
        'menu_slug' => 'options_page',
        'capability' => 'edit_posts',
        'position' => 3,
        'icon_url' => 'dashicons-cover-image',
        'redirect' => false,
    ));
}
