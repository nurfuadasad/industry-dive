<?php

/*
 * Theme Customize Options
 * @package INDUSTRY_DIVE
 * @since 1.0.0
 * */

if (!defined('ABSPATH')) {
    exit(); // exit if access directly
}

if (class_exists('CSF')) {
    $prefix = 'INDUSTRY_DIVE';

    CSF::createCustomizeOptions($prefix . '_customize_options');
    /*-------------------------------------
        ** Theme Main panel
    -------------------------------------*/
    CSF::createSection($prefix . '_customize_options', array(
        'title' => esc_html__('INDUSTRY_DIVE Options', 'INDUSTRY_DIVE'),
        'id' => 'INDUSTRY_DIVE_main_panel',
        'priority' => 11,
    ));


    /*-------------------------------------
        ** Theme Main Color
    -------------------------------------*/
    CSF::createSection($prefix . '_customize_options', array(
        'title' => esc_html__('01. Main Color', 'INDUSTRY_DIVE'),
        'priority' => 10,
        'parent' => 'INDUSTRY_DIVE_main_panel',
        'fields' => array(
            array(
                'id' => 'main_color',
                'type' => 'color',
                'title' => esc_html__('Theme Main Color One', 'INDUSTRY_DIVE'),
                'default' => '#009791',
                'desc' => esc_html__('This is theme primary color one, means it will affect most of elements that have default color of our theme primary color', 'INDUSTRY_DIVE')
            ),
            array(
                'id' => 'secondary_color',
                'type' => 'color',
                'title' => esc_html__('Theme Secondary Color', 'INDUSTRY_DIVE'),
                'default' => '#5a5a5a',
                'desc' => esc_html__('This is theme secondary color, means it\'ll affect most of elements that have default color of our theme secondary color', 'INDUSTRY_DIVE')
            ),
            array(
                'id' => 'heading_color',
                'type' => 'color',
                'title' => esc_html__('Theme Heading Color', 'INDUSTRY_DIVE'),
                'default' => '#5a5a5a',
                'desc' => esc_html__('This is theme heading color, means it\'ll affect all of heading tag like, h1,h2,h3,h4,h5,h6', 'INDUSTRY_DIVE')
            ),
            array(
                'id' => 'paragraph_color',
                'type' => 'color',
                'title' => esc_html__('Theme Paragraph Color', 'INDUSTRY_DIVE'),
                'default' => '#5A5A5A',
                'desc' => esc_html__('This is theme paragraph color, means it\'ll affect all of body/paragraph tag like, p,li,a etc', 'INDUSTRY_DIVE')
            ),
        )
    ));
    /*-------------------------------------
        ** Theme Header Options
    -------------------------------------*/

    CSF::createSection($prefix . '_customize_options', array(
        'title' => esc_html__('02. Header One Options', 'INDUSTRY_DIVE'),
        'parent' => 'INDUSTRY_DIVE_main_panel',
        'priority' => 11,
        'fields' => array(
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Nav Bar Options', 'INDUSTRY_DIVE') . '</h3>'
            ),
            array(
                'id' => 'header_01_nav_bar_bg_color',
                'type' => 'color',
                'title' => esc_html__('Nav Bar Background Color', 'INDUSTRY_DIVE'),
                'default' => '#5a5a5a'
            ),
            array(
                'id' => 'header_01_nav_bar_color',
                'type' => 'color',
                'title' => esc_html__('Nav Bar Text Color', 'INDUSTRY_DIVE'),
                'default' => '#fff'
            ),
            array(
                'id' => 'header_01_nav_bar_hover_color',
                'type' => 'color',
                'title' => esc_html__('Nav Bar Hover Text Color', 'INDUSTRY_DIVE'),
                'default' => '#009791'
            ),
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Dropdown Options', 'INDUSTRY_DIVE') . '</h3>'
            ),
            array(
                'id' => 'header_01_dropdown_bg_color',
                'type' => 'color',
                'title' => esc_html__('Dropdown Background Color', 'INDUSTRY_DIVE'),
                'default' => '#fff'
            ),
            array(
                'id' => 'header_01_dropdown_color',
                'type' => 'color',
                'title' => esc_html__('Dropdown Text Color', 'INDUSTRY_DIVE'),
                'default' => '#5a5a5a'
            ),
            array(
                'id' => 'header_01_dropdown_border_color',
                'type' => 'color',
                'title' => esc_html__('Dropdown Border Color', 'INDUSTRY_DIVE'),
                'default' => '#5a5a5a'
            ),
            array(
                'id' => 'header_01_dropdown_hover_color',
                'type' => 'color',
                'title' => esc_html__('Dropdown Hover Text Color', 'INDUSTRY_DIVE'),
                'default' => '#fff'
            ),
            array(
                'id' => 'header_01_dropdown_hover_bg_color',
                'type' => 'color',
                'title' => esc_html__('Dropdown Hover Background Color', 'INDUSTRY_DIVE'),
                'default' => '#5a5a5a'
            ),
        )
    ));
    /*-------------------------------------
          ** Theme Sidebar Options
      -------------------------------------*/
    CSF::createSection($prefix . '_customize_options', array(
        'title' => esc_html__('05. Sidebar', 'INDUSTRY_DIVE'),
        'priority' => 13,
        'parent' => 'INDUSTRY_DIVE_main_panel',
        'fields' => array(
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Sidebar Options', 'INDUSTRY_DIVE') . '</h3>'
            ),
            array(
                'id' => 'sidebar_widget_title_color',
                'type' => 'color',
                'title' => esc_html__('Sidebar Widget Title Color', 'INDUSTRY_DIVE'),
                'default' => '#5a5a5a'
            ),
            array(
                'id' => 'sidebar_widget_title_bottom_border_color',
                'type' => 'color',
                'title' => esc_html__('Sidebar Widget Border Color', 'INDUSTRY_DIVE'),
                'default' => '#009791'
            ),
            array(
                'id' => 'sidebar_widget_text_color',
                'type' => 'color',
                'title' => esc_html__('Sidebar Widget Text Color', 'INDUSTRY_DIVE'),
                'default' => '#5A5A5A'
            ),
        )
    ));
    /*-------------------------------------
        ** Theme Footer One Options
    -------------------------------------*/
    CSF::createSection($prefix . '_customize_options', array(
        'title' => esc_html__('06. Footer One', 'INDUSTRY_DIVE'),
        'priority' => 14,
        'parent' => 'INDUSTRY_DIVE_main_panel',
        'fields' => array(
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Footer Options', 'INDUSTRY_DIVE') . '</h3>'
            ),
            array(
                'id' => 'footer_area_bg_color',
                'type' => 'color',
                'title' => esc_html__('Footer Background Color', 'INDUSTRY_DIVE'),
                'default' => '#5a5a5a',
            ),
            array(
                'id' => 'footer_area_bottom_border_color',
                'type' => 'color',
                'title' => esc_html__('Footer Bottom Border Color', 'INDUSTRY_DIVE'),
                'default' => 'rgba(114, 108, 148, 0.2)',
            ),
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Footer Widget Options', 'INDUSTRY_DIVE') . '</h3>'
            ),
            array(
                'id' => 'footer_widget_title_color',
                'type' => 'color',
                'title' => esc_html__('Footer Widget Title Color', 'INDUSTRY_DIVE'),
                'default' => '#fff'
            ),
            array(
                'id' => 'footer_widget_text_color',
                'type' => 'color',
                'title' => esc_html__('Footer Widget Text Color', 'INDUSTRY_DIVE'),
                'default' => '#fff'
            ),
            array(
                'id' => 'footer_widget_text_hover_color',
                'type' => 'color',
                'title' => esc_html__('Footer Widget Text Hover Color', 'INDUSTRY_DIVE'),
                'default' => '#009791'
            ),
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Tag Cloud Options', 'INDUSTRY_DIVE') . '</h3>'
            ),
            array(
                'id' => 'footer_widget_tag_color',
                'type' => 'color',
                'title' => esc_html__('Footer Tag Text Color', 'INDUSTRY_DIVE'),
                'default' => '#fff'
            ),
            array(
                'id' => 'footer_widget_tag_bg_color',
                'type' => 'color',
                'title' => esc_html__('Footer Tag Background Color', 'INDUSTRY_DIVE'),
                'default' => '#5a5a5a'
            ),
            array(
                'id' => 'footer_widget_tag_border_color',
                'type' => 'color',
                'title' => esc_html__('Footer Tag Border Color', 'INDUSTRY_DIVE'),
                'default' => '#5a5a5a'
            ),
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Copyright Area Options', 'INDUSTRY_DIVE') . '</h3>'
            ),
            array(
                'id' => 'copyright_area_bg_color',
                'type' => 'color',
                'title' => esc_html__('Copyright Area Background Color', 'INDUSTRY_DIVE'),
                'default' => '#5a5a5a'
            ),
            array(
                'id' => 'copyright_area_text_color',
                'type' => 'color',
                'title' => esc_html__('Copyright Area Text Color', 'INDUSTRY_DIVE'),
                'default' => '#fff'
            ),
        )
    ));



}//endif