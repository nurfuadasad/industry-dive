<?php
/**
 * Theme Metabox Options
 * @package yotta
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit(); // exit if access directly
}

if (class_exists('CSF')) {

    $allowed_html = yotta()->kses_allowed_html(array('mark'));

    $prefix = 'yotta';

    /*-------------------------------------
        Post Format Options
    -------------------------------------*/
    CSF::createMetabox($prefix . '_post_video_options', array(
        'title' => esc_html__('Video Post Format Options', 'yotta'),
        'post_type' => 'post',
        'post_formats' => 'video'
    ));
    CSF::createSection($prefix . '_post_video_options', array(
        'fields' => array(
            array(
                'id' => 'video_url',
                'type' => 'text',
                'title' => esc_html__('Enter Video URL', 'yotta'),
                'desc' => wp_kses(__('enter <mark>video url</mark> to show in frontend', 'yotta'), $allowed_html)
            )
        )
    ));
    CSF::createMetabox($prefix . '_post_gallery_options', array(
        'title' => esc_html__('Gallery Post Format Options', 'yotta'),
        'post_type' => 'post',
        'post_formats' => 'gallery'
    ));
    CSF::createSection($prefix . '_post_gallery_options', array(
        'fields' => array(
            array(
                'id' => 'gallery_images',
                'type' => 'gallery',
                'title' => esc_html__('Select Gallery Photos', 'yotta'),
                'desc' => wp_kses(__('select <mark>gallery photos</mark> to show in frontend', 'yotta'), $allowed_html)
            )
        )
    ));

    /*-------------------------------------
      Page Container Options
    -------------------------------------*/
    CSF::createMetabox($prefix . '_page_container_options', array(
        'title' => esc_html__('Page Options', 'yotta'),
        'post_type' => array('page'),
    ));
    CSF::createSection($prefix . '_page_container_options', array(
        'title' => esc_html__('Layout & Colors', 'yotta'),
        'icon' => 'fa fa-columns',
        'fields' => Yotta_Group_Fields::page_layout()
    ));
    CSF::createSection($prefix . '_page_container_options', array(
        'title' => esc_html__('Header Footer & Breadcrumb', 'yotta'),
        'icon' => 'fa fa-header',
        'fields' => Yotta_Group_Fields::Page_Container_Options('header_options')
    ));
    CSF::createSection($prefix . '_page_container_options', array(
        'title' => esc_html__('Width & Padding', 'yotta'),
        'icon' => 'fa fa-file-o',
        'fields' => Yotta_Group_Fields::Page_Container_Options('container_options')
    ));
    //	Service Meta Box
    CSF::createMetabox($prefix . '_service_options', array(
        'title' => esc_html__('Service Options', 'yotta'),
        'post_type' => 'service',
    ));
    CSF::createSection($prefix . '_service_options', array(
        'fields' => array(
            array(
                'id' => 'service_selector',
                'type' => 'select',
                'title' => esc_html__('Selector Option'),
                'desc' => wp_kses(__('Select your image or icon', 'yotta'), $allowed_html),
                'options' => [
                    'service_icon' => esc_html__('Service Icon'),
                    'service_image' => esc_html__('Service Image')
                ]
            ),
            array(
                'id' => 'service_icon',
                'type' => 'icon',
                'title' => esc_html__('Icon', 'yotta'),
                'desc' => wp_kses(__('Select Your Icon', 'yotta'), $allowed_html),
                'dependency' => array('service_selector' ,'==', 'service_icon')
            ),
            array(
                'id' => 'service_image',
                'type' => 'media',
                'title' => esc_html__('Image', 'yotta'),
                'desc' => wp_kses(__('Select Your image', 'yotta'), $allowed_html),
                'dependency' => array('service_selector' ,'==','service_image')
            ),
            array(
                'id' => 'service_repeater',
                'type' => 'repeater',
                'title' => esc_html__('Service List Option', 'yotta'),
                'fields' => array(

                    array(
                        'id' => 'title',
                        'type' => 'text',
                        'title' => esc_html__('Title', 'yotta')
                    ),

                ),
            ),
        )
    ));


    /*-------------------------------------
     Team Options
    -------------------------------------*/
    CSF::createMetabox($prefix . '_team_options', array(
        'title' => esc_html__('Team Options', 'yotta'),
        'post_type' => array('team'),
        'priority' => 'high'
    ));
    CSF::createSection($prefix . '_team_options', array(
        'title' => esc_html__('Team Icon', 'yotta'),
        'id' => 'yotta-team-icon',
        'fields' => array(
            array(
                'id' => 'team_icon',
                'type' => 'icon',
                'desc' => wp_kses(__('Select Your Icon', 'yotta'), $allowed_html)
            )
        )
    ));
    CSF::createSection($prefix . '_team_options', array(
        'title' => esc_html__('Team Info', 'yotta'),
        'id' => 'yotta-info',
        'fields' => array(
            array(
                'id' => 'designation',
                'type' => 'text',
                'title' => esc_html__('Designation', 'yotta'),
            ),
            array(
                'id' => 'description',
                'type' => 'text',
                'title' => esc_html__('Description', 'yotta'),
            ),
            array(
                'id' => 'team-info',
                'type' => 'repeater',
                'title' => esc_html__('Team Info', 'yotta'),
                'fields' => array(

                    array(
                        'id' => 'title',
                        'type' => 'text',
                        'title' => esc_html__('Title', 'yotta')
                    ),
                    array(
                        'id' => 'icon',
                        'type' => 'icon',
                        'title' => esc_html__('Icon', 'yotta')
                    ),

                ),
            ),
        )
    ));
    CSF::createSection($prefix . '_team_options', array(
        'title' => esc_html__('Social Info', 'yotta'),
        'id' => 'social-info',
        'fields' => array(
            array(
                'id' => 'social-icons',
                'type' => 'repeater',
                'title' => esc_html__('Social Info', 'yotta'),
                'fields' => array(

                    array(
                        'id' => 'title',
                        'type' => 'text',
                        'title' => esc_html__('Title', 'yotta')
                    ),
                    array(
                        'id' => 'icon',
                        'type' => 'icon',
                        'title' => esc_html__('Icon', 'yotta')
                    ),
                    array(
                        'id' => 'url',
                        'type' => 'text',
                        'title' => esc_html__('URL', 'yotta')
                    ),

                ),
            ),
        )
    ));

    //	Training Meta Box
    CSF::createMetabox($prefix . '_training_options', array(
        'title' => esc_html__('Training Options', 'yotta'),
        'post_type' => 'training',
    ));

    CSF::createSection($prefix . '_training_options', array(
        'fields' => array(
            array(
                'id' => 'training_icon',
                'default' => 'flaticon-protection',
                'type' => 'icon',
                'title' => esc_html__('Icon', 'yotta'),
                'desc' => wp_kses(__('Select Your Icon', 'yotta'), $allowed_html)
            ),
            array(
                'id'      => 'training_icon_color',
                'type'    => 'color',
                'title'   => esc_html__('Color', 'yotta'),
                'default' => '#E80000',
                'desc'   => esc_html__('Set your icon color', 'yotta'),

            ),
            array(
                'id' => 'training_subtitle',
                'type' => 'text',
                'title' => esc_html__('Training Subtitle', 'yotta'),
                'default' => esc_html__('Embraer P-300E Specification ', 'yotta'),
            ),
            array(
                'id' => 'training_price_option',
                'type' => 'text',
                'title' => esc_html__('Training Price', 'yotta'),
                'default' => esc_html__('$50.00 ', 'yotta'),
            )
        )
    ));


    //	Courses Meta Box
    CSF::createMetabox($prefix . '_courses_options', array(
        'title' => esc_html__('Courses Options', 'yotta'),
        'post_type' => 'courses',
    ));

    CSF::createSection($prefix . '_courses_options', array(
        'title' => esc_html__('Social Info', 'yotta'),
        'id' => 'social-info',
        'fields' => array(
            array(
                'id' => 'course_start_date_option',
                'type' => 'text',
                'title' => esc_html__('Start From', 'yotta'),
                'default' => esc_html__('Thursday, Nov 4, 2022', 'yotta'),
            ),
            array(
                'id' => 'study-option',
                'type' => 'repeater',
                'title' => esc_html__('Study Options', 'yotta'),
                'fields' => array(

                    array(
                        'id' => 'qualification',
                        'type' => 'text',
                        'title' => esc_html__('Qualification', 'yotta'),
                        'default' => esc_html__('Bachelor of Aviation (Hons)', 'yotta'),
                    ),
                    array(
                        'id' => 'length',
                        'type' => 'text',
                        'title' => esc_html__('Length', 'yotta'),
                        'default' => esc_html__('9 months full time', 'yotta'),
                    ),
                    array(
                        'id' => 'code',
                        'type' => 'text',
                        'title' => esc_html__('Code', 'yotta'),
                        'default' => esc_html__('ba1x', 'yotta'),
                    ),
                ),
            ),
            array(
                'id' => 'course_module_option',
                'type' => 'text',
                'title' => esc_html__('Course Module Title', 'yotta'),
                'default' => esc_html__('Download full course Module', 'yotta'),
            ),
            array(
                'id' => 'course_module_button_title',
                'type' => 'text',
                'title' => esc_html__('Course Module Button Title', 'yotta'),
                'default' => esc_html__('Download', 'yotta'),
            ),
            array(
                'id' => 'course_module_button_url',
                'type' => 'text',
                'title' => esc_html__('Course Module Button URL', 'yotta'),
                'default' => esc_html__('#', 'yotta'),
            ),
        )
    ));
}//endif