<?php
/**
 * Theme Shortcodes Generator
 * @package INDUSTRY_DIVE
 * @since 1.0.0
 */

if (!defined('ABSPATH')){
	exit(); //exit if access it directly
}

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {
	$prefix = 'INDUSTRY_DIVE';
	CSF::createShortcoder( $prefix.'_shortcodes', array(
		'button_title'   => esc_html__('Add Shortcode','INDUSTRY_DIVE'),
		'select_title'   => esc_html__('Select a shortcode','INDUSTRY_DIVE'),
		'insert_title'   => esc_html__('Insert Shortcode','INDUSTRY_DIVE')
	) );

	/*------------------------------------
		Social Icon Options
	-------------------------------------*/
	CSF::createSection( $prefix.'_shortcodes', array(
		'title'     => esc_html__('Social Icons','INDUSTRY_DIVE'),
		'view'      => 'group',
		'shortcode' => 'INDUSTRY_DIVE_social_icon_wrap',
		'fields' => [
            array(
                'id'      => 'custom_class',
                'type'    => 'text',
                'title'   => esc_html__('Custom Class','INDUSTRY_DIVE'),
            )
        ],
		'group_shortcode' => 'INDUSTRY_DIVE_social_icon',
		'group_fields'    => array(
			array(
				'id'    => 'social_icon',
				'type'  => 'icon',
				'title' => esc_html__('Icon','INDUSTRY_DIVE'),
			),
			array(
				'id'      => 'social_link',
				'type'    => 'text',
				'title'   => esc_html__('URL','INDUSTRY_DIVE'),
			)
		)
	) );

	/*------------------------------------
		Top Menu Options
	-------------------------------------*/
	CSF::createSection( $prefix.'_shortcodes', array(
		'title'     => esc_html__('Top Menu','INDUSTRY_DIVE'),
		'view'      => 'group',
		'shortcode' => 'INDUSTRY_DIVE_top_menu_wrap',
		'group_shortcode' => 'INDUSTRY_DIVE_top_menu',
		'group_fields'    => array(
			array(
				'id'    => 'top_menu_text',
				'type'  => 'text',
				'title' => esc_html__('Text','INDUSTRY_DIVE'),
			),
			array(
				'id'      => 'top_menu_link',
				'type'    => 'text',
				'title'   => esc_html__('URL','INDUSTRY_DIVE'),
			)
		)
	) );

    /*------------------------------------
      Info Menu Options
    -------------------------------------*/
    CSF::createSection( $prefix.'_shortcodes', array(
        'title'     => esc_html__('Info Menu','INDUSTRY_DIVE'),
        'view'      => 'group',
        'shortcode' => 'INDUSTRY_DIVE_top_menu_wrap_02',
        'group_shortcode' => 'INDUSTRY_DIVE_top_menu_02',
        'group_fields'    => array(
            array(
                'id'    => 'top_menu_title_text',
                'type'  => 'text',
                'title' => esc_html__('Text','INDUSTRY_DIVE'),
            ),
            array(
                'id'    => 'top_menu_text',
                'type'  => 'text',
                'title' => esc_html__('Text','INDUSTRY_DIVE'),
            ),
            array(
                'id'      => 'top_menu_link',
                'type'    => 'text',
                'title'   => esc_html__('URL','INDUSTRY_DIVE'),
            )
        )
    ) );
    
	/*------------------------------------
		Inline info link options
	-------------------------------------*/
	CSF::createSection( $prefix.'_shortcodes', array(
		'title'     => esc_html__('Inline Info Link','INDUSTRY_DIVE'),
		'view'      => 'group',
		'shortcode' => 'INDUSTRY_DIVE_info_item_wrap',
		'group_shortcode' => 'INDUSTRY_DIVE_info_link',
		'group_fields'    => array(
			array(
				'id'    => 'icon',
				'type'  => 'icon',
				'title' => esc_html__('Icon','INDUSTRY_DIVE'),
			),
			array(
				'id'      => 'text',
				'type'    => 'text',
				'title'   => esc_html__('Text','INDUSTRY_DIVE'),
			),
			array(
				'id'      => 'url',
				'type'    => 'text',
				'title'   => esc_html__('URL','INDUSTRY_DIVE'),
			)
		)
	) );

}
