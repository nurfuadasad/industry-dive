<?php

/**
 * Package INDUSTRY_DIVE
 * Author Irtech
 * @since 2.0.0
 * */

if (!defined('ABSPATH')){
	exit(); //exit if access directly
}

class INDUSTRY_DIVE_Megamenu_Walker extends Walker_Nav_Menu{


	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
		$object = $item->object;
		$type = $item->type;
		$title = $item->title;
		$description = $item->description;
		$permalink = $item->url;
		$megamenu = get_post_meta( $item->ID, 'menu-item-mega-menu', true );

		//If globally disable mega menu then remove
		if(!INDUSTRY_DIVE_CORE_SELF_PATH)
		{
			$megamenu = '';
		}

		$all_li_classes = is_array($item->classes) ?  implode(" ", $item->classes) :   $item->classes;
		$output .= "<li class='" . $all_li_classes ;

		if($depth == 0 && !empty($megamenu))
		{
			$output .= "  INDUSTRY_DIVE-megamenu ";
		}

		$output .= "'>";

		$output .= '<a href="'.esc_url($permalink).'">';
		$output .= $title;
		$output .= '</a>';

		if($depth == 0 && !empty($megamenu) && INDUSTRY_DIVE_CORE_SELF_PATH)
		{
			if(!empty($megamenu) && defined("ELEMENTOR_VERSION"))
			{
				$output .= '<div class="elementor-megamenu-wrap INDUSTRY_DIVE-megamenu-wapper"> '.INDUSTRY_DIVE()->render_elementor_content($megamenu).'</div>';
			}
		}
	}
}