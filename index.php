<?php

/**
 * Index file
 *
 * @package SetupTheme
 */

get_header();

st_load_partial_if(is_front_page(), 'frontpage');
st_load_partial_if(is_page(), 'page');
st_load_partial_if(is_single(), 'post');

// else
st_load_partial_if(true, '404');

get_footer();
