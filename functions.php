<?php
/**
 * Theme functions & definitations
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package INDUSTRY_DIVE
 */

/**
 * Define Theme Folder Path & URL Constant
 * @package INDUSTRY_DIVE
 * @since 1.0.0
 */

define('INDUSTRY_DIVE_THEME_ROOT',get_template_directory());
define('INDUSTRY_DIVE_THEME_ROOT_URL',get_template_directory_uri());
define('INDUSTRY_DIVE_INC',INDUSTRY_DIVE_THEME_ROOT .'/inc');
define('INDUSTRY_DIVE_THEME_SETTINGS',INDUSTRY_DIVE_INC.'/theme-settings');
define('INDUSTRY_DIVE_THEME_SETTINGS_IMAGES',INDUSTRY_DIVE_THEME_ROOT_URL.'/inc/theme-settings/images');
define('INDUSTRY_DIVE_TGMA',INDUSTRY_DIVE_INC.'/plugins/tgma');
define('INDUSTRY_DIVE_DYNAMIC_STYLESHEETS',INDUSTRY_DIVE_INC.'/theme-stylesheets');
define('INDUSTRY_DIVE_CSS',INDUSTRY_DIVE_THEME_ROOT_URL.'/assets/css');
define('INDUSTRY_DIVE_JS',INDUSTRY_DIVE_THEME_ROOT_URL.'/assets/js');
define('INDUSTRY_DIVE_ASSETS',INDUSTRY_DIVE_THEME_ROOT_URL.'/assets');
define('INDUSTRY_DIVE_DEV',true);


/**
 * Theme Initial File
 * @package INDUSTRY_DIVE
 * @since 1.0.0
 */
if (file_exists(INDUSTRY_DIVE_INC .'/theme-init.php')){
	require_once INDUSTRY_DIVE_INC .'/theme-init.php';
}


/**
 * Codester Framework Functions
 * @package INDUSTRY_DIVE
 * @since 1.0.0
 */
if (file_exists(INDUSTRY_DIVE_INC .'/theme-cs-function.php')){
	require_once INDUSTRY_DIVE_INC .'/theme-cs-function.php';
}


/**
 * Theme Helpers Functions
 * @package INDUSTRY_DIVE
 * @since 1.0.0
 */
if (file_exists(INDUSTRY_DIVE_INC .'/theme-helper-functions.php')){

	require_once INDUSTRY_DIVE_INC .'/theme-helper-functions.php';
	if (!function_exists('INDUSTRY_DIVE')){
		function INDUSTRY_DIVE(){
			return class_exists('INDUSTRY_DIVE_Helper_Functions') ? new INDUSTRY_DIVE_Helper_Functions() : false;
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


