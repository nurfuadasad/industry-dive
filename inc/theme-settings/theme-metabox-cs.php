<?php
/**
 * Theme Metabox Options
 * @package INDUSTRY_DIVE
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit(); // exit if access directly
}

if (class_exists('CSF')) {

    $allowed_html = INDUSTRY_DIVE()->kses_allowed_html(array('mark'));

    $prefix = 'INDUSTRY_DIVE';

    /*-------------------------------------
        Post Format Options
    -------------------------------------*/
    CSF::createMetabox($prefix . '_post_video_options', array(
        'title' => esc_html__('Video Post Format Options', 'INDUSTRY_DIVE'),
        'post_type' => 'post',
        'post_formats' => 'video'
    ));
    CSF::createSection($prefix . '_post_video_options', array(
        'fields' => array(
            array(
                'id' => 'video_url',
                'type' => 'text',
                'title' => esc_html__('Enter Video URL', 'INDUSTRY_DIVE'),
                'desc' => wp_kses(__('enter <mark>video url</mark> to show in frontend', 'INDUSTRY_DIVE'), $allowed_html)
            )
        )
    ));
    CSF::createMetabox($prefix . '_post_gallery_options', array(
        'title' => esc_html__('Gallery Post Format Options', 'INDUSTRY_DIVE'),
        'post_type' => 'post',
        'post_formats' => 'gallery'
    ));
    CSF::createSection($prefix . '_post_gallery_options', array(
        'fields' => array(
            array(
                'id' => 'gallery_images',
                'type' => 'gallery',
                'title' => esc_html__('Select Gallery Photos', 'INDUSTRY_DIVE'),
                'desc' => wp_kses(__('select <mark>gallery photos</mark> to show in frontend', 'INDUSTRY_DIVE'), $allowed_html)
            )
        )
    ));

    /*-------------------------------------
      Page Container Options
    -------------------------------------*/
    CSF::createMetabox($prefix . '_page_container_options', array(
        'title' => esc_html__('Page Options', 'INDUSTRY_DIVE'),
        'post_type' => array('page'),
    ));
    CSF::createSection($prefix . '_page_container_options', array(
        'title' => esc_html__('Layout & Colors', 'INDUSTRY_DIVE'),
        'icon' => 'fa fa-columns',
        'fields' => INDUSTRY_DIVE_Group_Fields::page_layout()
    ));
    CSF::createSection($prefix . '_page_container_options', array(
        'title' => esc_html__('Header Footer & Breadcrumb', 'INDUSTRY_DIVE'),
        'icon' => 'fa fa-header',
        'fields' => INDUSTRY_DIVE_Group_Fields::Page_Container_Options('header_options')
    ));
    CSF::createSection($prefix . '_page_container_options', array(
        'title' => esc_html__('Width & Padding', 'INDUSTRY_DIVE'),
        'icon' => 'fa fa-file-o',
        'fields' => INDUSTRY_DIVE_Group_Fields::Page_Container_Options('container_options')
    ));
    //	Service Meta Box
    CSF::createMetabox($prefix . '_service_options', array(
        'title' => esc_html__('Service Options', 'INDUSTRY_DIVE'),
        'post_type' => 'service',
    ));
    CSF::createSection($prefix . '_service_options', array(
        'fields' => array(
            array(
                'id' => 'service_selector',
                'type' => 'select',
                'title' => esc_html__('Selector Option'),
                'desc' => wp_kses(__('Select your image or icon', 'INDUSTRY_DIVE'), $allowed_html),
                'options' => [
                    'service_icon' => esc_html__('Service Icon'),
                    'service_image' => esc_html__('Service Image')
                ]
            ),
            array(
                'id' => 'service_icon',
                'type' => 'icon',
                'title' => esc_html__('Icon', 'INDUSTRY_DIVE'),
                'desc' => wp_kses(__('Select Your Icon', 'INDUSTRY_DIVE'), $allowed_html),
                'dependency' => array('service_selector' ,'==', 'service_icon')
            ),
            array(
                'id' => 'service_image',
                'type' => 'media',
                'title' => esc_html__('Image', 'INDUSTRY_DIVE'),
                'desc' => wp_kses(__('Select Your image', 'INDUSTRY_DIVE'), $allowed_html),
                'dependency' => array('service_selector' ,'==','service_image')
            ),
            array(
                'id' => 'service_repeater',
                'type' => 'repeater',
                'title' => esc_html__('Service List Option', 'INDUSTRY_DIVE'),
                'fields' => array(

                    array(
                        'id' => 'title',
                        'type' => 'text',
                        'title' => esc_html__('Title', 'INDUSTRY_DIVE')
                    ),

                ),
            ),
        )
    ));


    /*-------------------------------------
     Team Options
    -------------------------------------*/
    CSF::createMetabox($prefix . '_team_options', array(
        'title' => esc_html__('Team Options', 'INDUSTRY_DIVE'),
        'post_type' => array('team'),
        'priority' => 'high'
    ));
    CSF::createSection($prefix . '_team_options', array(
        'title' => esc_html__('Team Icon', 'INDUSTRY_DIVE'),
        'id' => 'INDUSTRY_DIVE-team-icon',
        'fields' => array(
            array(
                'id' => 'team_icon',
                'type' => 'icon',
                'desc' => wp_kses(__('Select Your Icon', 'INDUSTRY_DIVE'), $allowed_html)
            )
        )
    ));
    CSF::createSection($prefix . '_team_options', array(
        'title' => esc_html__('Team Info', 'INDUSTRY_DIVE'),
        'id' => 'INDUSTRY_DIVE-info',
        'fields' => array(
            array(
                'id' => 'designation',
                'type' => 'text',
                'title' => esc_html__('Designation', 'INDUSTRY_DIVE'),
            ),
            array(
                'id' => 'description',
                'type' => 'text',
                'title' => esc_html__('Description', 'INDUSTRY_DIVE'),
            ),
            array(
                'id' => 'team-info',
                'type' => 'repeater',
                'title' => esc_html__('Team Info', 'INDUSTRY_DIVE'),
                'fields' => array(

                    array(
                        'id' => 'title',
                        'type' => 'text',
                        'title' => esc_html__('Title', 'INDUSTRY_DIVE')
                    ),
                    array(
                        'id' => 'icon',
                        'type' => 'icon',
                        'title' => esc_html__('Icon', 'INDUSTRY_DIVE')
                    ),

                ),
            ),
        )
    ));
    CSF::createSection($prefix . '_team_options', array(
        'title' => esc_html__('Social Info', 'INDUSTRY_DIVE'),
        'id' => 'social-info',
        'fields' => array(
            array(
                'id' => 'social-icons',
                'type' => 'repeater',
                'title' => esc_html__('Social Info', 'INDUSTRY_DIVE'),
                'fields' => array(

                    array(
                        'id' => 'title',
                        'type' => 'text',
                        'title' => esc_html__('Title', 'INDUSTRY_DIVE')
                    ),
                    array(
                        'id' => 'icon',
                        'type' => 'icon',
                        'title' => esc_html__('Icon', 'INDUSTRY_DIVE')
                    ),
                    array(
                        'id' => 'url',
                        'type' => 'text',
                        'title' => esc_html__('URL', 'INDUSTRY_DIVE')
                    ),

                ),
            ),
        )
    ));

    //	Training Meta Box
    CSF::createMetabox($prefix . '_training_options', array(
        'title' => esc_html__('Training Options', 'INDUSTRY_DIVE'),
        'post_type' => 'training',
    ));

    CSF::createSection($prefix . '_training_options', array(
        'fields' => array(
            array(
                'id' => 'training_icon',
                'default' => 'flaticon-protection',
                'type' => 'icon',
                'title' => esc_html__('Icon', 'INDUSTRY_DIVE'),
                'desc' => wp_kses(__('Select Your Icon', 'INDUSTRY_DIVE'), $allowed_html)
            ),
            array(
                'id'      => 'training_icon_color',
                'type'    => 'color',
                'title'   => esc_html__('Color', 'INDUSTRY_DIVE'),
                'default' => '#E80000',
                'desc'   => esc_html__('Set your icon color', 'INDUSTRY_DIVE'),

            ),
            array(
                'id' => 'training_subtitle',
                'type' => 'text',
                'title' => esc_html__('Training Subtitle', 'INDUSTRY_DIVE'),
                'default' => esc_html__('Embraer P-300E Specification ', 'INDUSTRY_DIVE'),
            ),
            array(
                'id' => 'training_price_option',
                'type' => 'text',
                'title' => esc_html__('Training Price', 'INDUSTRY_DIVE'),
                'default' => esc_html__('$50.00 ', 'INDUSTRY_DIVE'),
            )
        )
    ));


    //	Courses Meta Box
    CSF::createMetabox($prefix . '_courses_options', array(
        'title' => esc_html__('Courses Options', 'INDUSTRY_DIVE'),
        'post_type' => 'courses',
    ));

    CSF::createSection($prefix . '_courses_options', array(
        'title' => esc_html__('Social Info', 'INDUSTRY_DIVE'),
        'id' => 'social-info',
        'fields' => array(
            array(
                'id' => 'course_start_date_option',
                'type' => 'text',
                'title' => esc_html__('Start From', 'INDUSTRY_DIVE'),
                'default' => esc_html__('Thursday, Nov 4, 2022', 'INDUSTRY_DIVE'),
            ),
            array(
                'id' => 'study-option',
                'type' => 'repeater',
                'title' => esc_html__('Study Options', 'INDUSTRY_DIVE'),
                'fields' => array(

                    array(
                        'id' => 'qualification',
                        'type' => 'text',
                        'title' => esc_html__('Qualification', 'INDUSTRY_DIVE'),
                        'default' => esc_html__('Bachelor of Aviation (Hons)', 'INDUSTRY_DIVE'),
                    ),
                    array(
                        'id' => 'length',
                        'type' => 'text',
                        'title' => esc_html__('Length', 'INDUSTRY_DIVE'),
                        'default' => esc_html__('9 months full time', 'INDUSTRY_DIVE'),
                    ),
                    array(
                        'id' => 'code',
                        'type' => 'text',
                        'title' => esc_html__('Code', 'INDUSTRY_DIVE'),
                        'default' => esc_html__('ba1x', 'INDUSTRY_DIVE'),
                    ),
                ),
            ),
            array(
                'id' => 'course_module_option',
                'type' => 'text',
                'title' => esc_html__('Course Module Title', 'INDUSTRY_DIVE'),
                'default' => esc_html__('Download full course Module', 'INDUSTRY_DIVE'),
            ),
            array(
                'id' => 'course_module_button_title',
                'type' => 'text',
                'title' => esc_html__('Course Module Button Title', 'INDUSTRY_DIVE'),
                'default' => esc_html__('Download', 'INDUSTRY_DIVE'),
            ),
            array(
                'id' => 'course_module_button_url',
                'type' => 'text',
                'title' => esc_html__('Course Module Button URL', 'INDUSTRY_DIVE'),
                'default' => esc_html__('#', 'INDUSTRY_DIVE'),
            ),
        )
    ));
}//endif