<?php

/**
 * All about navigations
 *
 * @package SetupTheme
 */

/**
 * Register navigation menus
 */
add_action(
    'init',
    function () {
        st_register_nav_menu('main-navigation', 'Primary menu');
    }
);

/**
 * Add aria attributes to nav items with sub-menus
 *
 * @see https://www.w3.org/WAI/tutorials/menus/flyout/#indicate-submenus
 */
add_filter(
    'nav_menu_link_attributes',
    function ($atts, $item) {
        if (in_array('menu-item-has-children', $item->classes)) {
            $atts['aria-haspopup'] = 'true';
            $atts['aria-expanded'] = 'false';
        }
        return $atts;
    },
    PHP_INT_MAX,
    2
);
