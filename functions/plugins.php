<?php

add_filter('acfe/flexible/render/template', 'acf_flexible_content_change_template', 10, 4);
function acf_flexible_content_change_template($template, $field, $layout, $is_preview)
{
    $file = get_stylesheet_directory() . '/partials/modules/' . $layout['name'] . '.php';
    return $file;
}

add_filter('acfe/flexible/render/style', 'my_acf_layout_style', 10, 4);
function my_acf_layout_style($file, $field, $layout, $is_preview)
{
    wp_enqueue_style('my-style', get_stylesheet_directory_uri() . '/_/main.css');
}

add_filter('acfe/flexible/thumbnail', 'my_acf_layout_thumbnail', 10, 3);
function my_acf_layout_thumbnail($thumbnail, $field, $layout)
{
    $file = get_template_directory_uri() . '/partials/thumbnails/' . $layout['name'] . '.jpg';
    return $file;
}
