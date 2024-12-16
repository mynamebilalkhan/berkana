<?php
/**
 * Register sidebars.
 *
 * @package SetupTheme
 */


/**
 * Register sidebars
 */
add_action(
    'widgets_init',
    function () {
        st_register_sidebar(
            'footer-1',
            __st('Footer 1'),
            array(

                'before_widget' => '<div class="berkana-widget-container">',
                'after_widget'  => '</div>',
            )
        );
    }
);
