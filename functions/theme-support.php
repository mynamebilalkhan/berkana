<?php

/**
 * Perform basic theme setup and init actions.
 */
add_action(
    'after_setup_theme',
    function () {
        // load translated strings
        // @link https://codex.wordpress.org/Function_Reference/load_theme_textdomain
        load_theme_textdomain(ST_TEXTDOMAIN, get_template_directory() . '/languages');

        // enable custom logo
        // https://developer.wordpress.org/reference/functions/add_theme_support/
        add_theme_support(
            'custom-logo',
            array(
                'height'      => 400,
                'width'       => 400,
                'flex-height' => true,
                'flex-width'  => true,
                'header-text' => array( 'site-title', 'site-description' ),
            )
        );
    }
);
