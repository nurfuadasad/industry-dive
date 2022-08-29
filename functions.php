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

define('INDUSTRY_DIVE_THEME_ROOT', get_template_directory());
define('INDUSTRY_DIVE_THEME_ROOT_URL', get_template_directory_uri());
define('INDUSTRY_DIVE_INC', INDUSTRY_DIVE_THEME_ROOT . '/inc');
define('INDUSTRY_DIVE_THEME_SETTINGS', INDUSTRY_DIVE_INC . '/theme-settings');
define('INDUSTRY_DIVE_THEME_SETTINGS_IMAGES', INDUSTRY_DIVE_THEME_ROOT_URL . '/inc/theme-settings/images');
define('INDUSTRY_DIVE_TGMA', INDUSTRY_DIVE_INC . '/plugins/tgma');
define('INDUSTRY_DIVE_DYNAMIC_STYLESHEETS', INDUSTRY_DIVE_INC . '/theme-stylesheets');
define('INDUSTRY_DIVE_CSS', INDUSTRY_DIVE_THEME_ROOT_URL . '/assets/css');
define('INDUSTRY_DIVE_JS', INDUSTRY_DIVE_THEME_ROOT_URL . '/assets/js');
define('INDUSTRY_DIVE_ASSETS', INDUSTRY_DIVE_THEME_ROOT_URL . '/assets');
define('INDUSTRY_DIVE_DEV', true);


/**
 * Theme Initial File
 * @package INDUSTRY_DIVE
 * @since 1.0.0
 */
if (file_exists(INDUSTRY_DIVE_INC . '/theme-init.php')) {
    require_once INDUSTRY_DIVE_INC . '/theme-init.php';
}


/**
 * Codester Framework Functions
 * @package INDUSTRY_DIVE
 * @since 1.0.0
 */
if (file_exists(INDUSTRY_DIVE_INC . '/theme-cs-function.php')) {
    require_once INDUSTRY_DIVE_INC . '/theme-cs-function.php';
}


/**
 * Theme Helpers Functions
 * @package INDUSTRY_DIVE
 * @since 1.0.0
 */
if (file_exists(INDUSTRY_DIVE_INC . '/theme-helper-functions.php')) {

    require_once INDUSTRY_DIVE_INC . '/theme-helper-functions.php';
    if (!function_exists('INDUSTRY_DIVE')) {
        function INDUSTRY_DIVE()
        {
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


function misha_my_load_more_scripts()
{

    global $wp_query;

    // In most cases it is already included on the page and this line can be removed
    wp_enqueue_script('jquery');

    // register our main script but do not enqueue it yet
    wp_register_script('my_loadmore', get_stylesheet_directory_uri() . '/assets/js/myloadmore.js', array('jquery'));

    // now the most interesting part
    // we have to pass parameters to myloadmore.js script but we can get the parameters values only in PHP
    // you can define variables directly in your HTML but I decided that the most proper way is wp_localize_script()
    wp_localize_script('my_loadmore', 'misha_loadmore_params', array(
        'ajaxurl' => admin_url( 'admin-ajax.php' ), // WordPress AJAX
        'posts' => json_encode($wp_query->query_vars), // everything about your loop is here
        'current_page' => get_query_var('paged') ? get_query_var('paged') : 1,
        'max_page' => $wp_query->max_num_pages
    ));

    wp_enqueue_script('my_loadmore');
}

add_action('wp_enqueue_scripts', 'misha_my_load_more_scripts');



function misha_loadmore_ajax_handler(){

    // prepare our arguments for the query
    $args = json_decode( stripslashes( $_POST['query'] ), true );
    $args['paged'] = $_POST['page'] + 1; // we need next page to be loaded
    $args['post_status'] = 'publish';

    // it is always better to use WP_Query but not here
    query_posts( $args );

    if( have_posts() ) :

        // run the loop
        while( have_posts() ): the_post();

            // look into your theme code how the posts are inserted, but you can use your own HTML of course
            // do you remember? - my example is adapted for Twenty Seventeen theme
            get_template_part('template-parts/content', get_post_format());
            // for the test purposes comment the line above and uncomment the below one
            // the_title();


        endwhile;

    endif;
    die; // here we exit the script and even no wp_reset_query() required!
}



add_action('wp_ajax_loadmore', 'misha_loadmore_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore', 'misha_loadmore_ajax_handler');