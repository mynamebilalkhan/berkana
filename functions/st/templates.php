<?php

$st_content_loaded = false;

/**
 * Load partial file if `$condition` is true
 *
 * @param $condition
 * @param $slug
 * @param null $name
 */
function st_load_partial_if(
    $condition,
    $slug,
    $name = null
) {
    global $st_content_loaded;

    if (! $st_content_loaded && $condition) {
        $st_content_loaded = true;
        get_template_part(ST_TEMPLATES_FOLDER . "/{$slug}", $name);
    }
}

/**
 * Load partial file
 *
 * @param $slug
 * @param null $name
 */
function st_load_partial(
    $slug,
    $name = null
) {
    get_template_part(ST_TEMPLATES_FOLDER . "/{$slug}", $name);
}
