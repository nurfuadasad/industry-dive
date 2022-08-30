<?php
/**
 * Theme Excerpt
 * @package INDUSTRY_DIVE
 * @since 1.0.0
 */

if (!defined('ABSPATH')){
    exit(); //exit if access it directly
}

if (!class_exists('Industry_Dive_Excerpt')):
class Industry_Dive_Excerpt {

    public static $length = 55;
    public static $types = array(
      'short' => 25,
      'regular' => 55,
      'long' => 100,
      'promo'=>15
    );

    public static $more = true;

    /**
    * Sets the length for the excerpt,
    * then it adds the WP filter
    * And automatically calls the_excerpt();
    *
    * @param string $new_length
    * @return void
    * @author Baylor Rae'
    */
    public static function length($new_length = 55, $more = true) {
        Industry_Dive_Excerpt::$length = $new_length;
        Industry_Dive_Excerpt::$more = $more;

        add_filter( 'excerpt_more', 'Industry_Dive_Excerpt::auto_excerpt_more' );

        add_filter('excerpt_length', 'Industry_Dive_Excerpt::new_length');

        Industry_Dive_Excerpt::output();
    }

    public static function new_length() {
        if( isset(Industry_Dive_Excerpt::$types[Industry_Dive_Excerpt::$length]) )
            return Industry_Dive_Excerpt::$types[Industry_Dive_Excerpt::$length];
        else
            return Industry_Dive_Excerpt::$length;
    }

    public static function output() {
        the_excerpt();
    }

    public static function continue_reading_link() {

        return '<span class="readmore"><a href="'.esc_url(get_permalink()).'">'.esc_html__('Read More','industry_dive').'</a></span>';
    }

    public static function auto_excerpt_more( ) {
        if (Industry_Dive_Excerpt::$more) :
            return ' ';
        else :
            return ' ';
        endif;
    }

} //end class
endif;

if (!function_exists('Industry_Dive_Excerpt')){

	function Industry_Dive_Excerpt($length = 55, $more=true) {
		Industry_Dive_Excerpt::length($length, $more);
	}

}


?>