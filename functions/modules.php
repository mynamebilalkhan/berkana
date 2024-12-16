<?php

/**
 * acf module logic by ACF flexible fields
 */

if (function_exists('get_row_layout')) {
    if (get_row_layout() == 'hero') {
        get_template_part('partials/modules/hero');
    }
    if (get_row_layout() == 'products_loop') {
        get_template_part('partials/modules/products_loop');
    }
    if (get_row_layout() == 'bg_image') {
        get_template_part('partials/modules/bg_image');
    }
    if (get_row_layout() == 'about_section') {
        get_template_part('partials/modules/about_section');
    }
    if (get_row_layout() == 'image_text') {
        get_template_part('partials/modules/image_text');
    }
    if (get_row_layout() == 'simple_text') {
        get_template_part('partials/modules/simple_text');
    }
    if (get_row_layout() == 'shop_loop') {
        get_template_part('partials/modules/shop_loop');
    }
} else {
    // ACF is not active
    echo '<!-- ACF is not active -->';
}
