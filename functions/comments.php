<?php
/**
 * All about wp comments
 *
 * @package SetupTheme
 */

// do not save IP-address in comments.
add_filter('pre_comment_user_ip', '__return_empty_string');
