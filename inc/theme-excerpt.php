<?php
/**
 * Theme Excerpt
 * @package yotta
 * @since 1.0.0
 */

if (!defined('ABSPATH')){
    exit(); //exit if access it directly
}

if (!class_exists('Yotta_Excerpt')):
class Yotta_Excerpt {

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
        Yotta_Excerpt::$length = $new_length;
        Yotta_Excerpt::$more = $more;

        add_filter( 'excerpt_more', 'Yotta_Excerpt::auto_excerpt_more' );

        add_filter('excerpt_length', 'Yotta_Excerpt::new_length');

        Yotta_Excerpt::output();
    }

    public static function new_length() {
        if( isset(Yotta_Excerpt::$types[Yotta_Excerpt::$length]) )
            return Yotta_Excerpt::$types[Yotta_Excerpt::$length];
        else
            return Yotta_Excerpt::$length;
    }

    public static function output() {
        the_excerpt();
    }

    public static function continue_reading_link() {

        return '<span class="readmore"><a href="'.esc_url(get_permalink()).'">'.esc_html__('Read More','yotta').'</a></span>';
    }

    public static function auto_excerpt_more( ) {
        if (Yotta_Excerpt::$more) :
            return ' ';
        else :
            return ' ';
        endif;
    }

} //end class
endif;

if (!function_exists('Yotta_Excerpt')){

	function Yotta_Excerpt($length = 55, $more=true) {
		Yotta_Excerpt::length($length, $more);
	}

}


?>