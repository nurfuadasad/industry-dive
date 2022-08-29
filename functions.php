<?php
/**
 * Theme functions & definitations
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package yotta
 */

/**
 * Define Theme Folder Path & URL Constant
 * @package yotta
 * @since 1.0.0
 */

define('YOTTA_THEME_ROOT',get_template_directory());
define('YOTTA_THEME_ROOT_URL',get_template_directory_uri());
define('YOTTA_INC',YOTTA_THEME_ROOT .'/inc');
define('YOTTA_THEME_SETTINGS',YOTTA_INC.'/theme-settings');
define('YOTTA_THEME_SETTINGS_IMAGES',YOTTA_THEME_ROOT_URL.'/inc/theme-settings/images');
define('YOTTA_TGMA',YOTTA_INC.'/plugins/tgma');
define('YOTTA_DYNAMIC_STYLESHEETS',YOTTA_INC.'/theme-stylesheets');
define('YOTTA_CSS',YOTTA_THEME_ROOT_URL.'/assets/css');
define('YOTTA_JS',YOTTA_THEME_ROOT_URL.'/assets/js');
define('YOTTA_ASSETS',YOTTA_THEME_ROOT_URL.'/assets');
define('YOTTA_DEV',true);


/**
 * Theme Initial File
 * @package yotta
 * @since 1.0.0
 */
if (file_exists(YOTTA_INC .'/theme-init.php')){
	require_once YOTTA_INC .'/theme-init.php';
}


/**
 * Codester Framework Functions
 * @package yotta
 * @since 1.0.0
 */
if (file_exists(YOTTA_INC .'/theme-cs-function.php')){
	require_once YOTTA_INC .'/theme-cs-function.php';
}


/**
 * Theme Helpers Functions
 * @package yotta
 * @since 1.0.0
 */
if (file_exists(YOTTA_INC .'/theme-helper-functions.php')){

	require_once YOTTA_INC .'/theme-helper-functions.php';
	if (!function_exists('yotta')){
		function yotta(){
			return class_exists('Yotta_Helper_Functions') ? new Yotta_Helper_Functions() : false;
		}
	}
}
/**
 * Nav menu fallback function
 * @since 1.0.0
 */
if (is_user_logged_in()) {
    function sword_theme_fallback_menu()
    {
        get_template_part('template-parts/default', 'menu');
    }
}


