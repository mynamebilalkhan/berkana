<?php

/**
 * Theme functions
 *
 * @package SetupTheme
 */

define('ST_TEXTDOMAIN', 'bk');
define('ST_ENVIRONMENT', 'dev');

/**
 * SetupTheme functions & helpers
 */
require_once 'functions/st/definitions.php';
require_once 'functions/st/helpers.php';
require_once 'functions/st/templates.php';

require_once 'functions/modules.php';

/**
 * Theme related
 */
require_once 'functions/init.php';
require_once 'functions/theme-support.php';
require_once 'functions/acf-option-pages.php';
require_once 'functions/customizer.php';
require_once 'functions/menus.php';
require_once 'functions/dequee.php';
require_once 'functions/shortcodes.php';
require_once 'functions/widgets.php';
require_once 'functions/loginform.php';
require_once 'functions/actions.php';

//require_once 'functions/admin.php';
require_once 'functions/login.php';
require_once 'functions/main.php';
require_once 'functions/page.php';

require_once 'functions/comments.php';

require_once 'functions/plugins.php';
