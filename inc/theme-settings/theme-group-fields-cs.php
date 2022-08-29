<?php
/**
 *Theme Group Fields
 * @package INDUSTRY_DIVE
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit(); // exit if access directly
}


if (!class_exists('INDUSTRY_DIVE_Group_Fields')) {

    class INDUSTRY_DIVE_Group_Fields
    {
        
        /**
         * $instance
         * @since 1.0.0
         */
        private static $instance;


        /**
         * construct()
         * @since 1.0.0
         */
        public function __construct()
        {

        }

        /**
         * getInstance()
         * @since 1.0.0
         */
        public static function getInstance()
        {
            if (null == self::$instance) {
                self::$instance = new self();
            }
            return self::$instance;
        }

        /**
         * Page layout options
         * @since 1.0.0
         */
        public static function page_layout()
        {
            $fields = array(
                array(
                    'type' => 'subheading',
                    'content' => esc_html__('Page Layouts & Colors Options', 'INDUSTRY_DIVE'),
                ),
                array(
                    'id' => 'page_layout',
                    'type' => 'image_select',
                    'title' => esc_html__('Select Page Layout', 'INDUSTRY_DIVE'),
                    'options' => array(
                        'default' => INDUSTRY_DIVE_THEME_SETTINGS_IMAGES . '/page/default.png',
                        'left-sidebar' => INDUSTRY_DIVE_THEME_SETTINGS_IMAGES . '/page/left-sidebar.png',
                        'right-sidebar' => INDUSTRY_DIVE_THEME_SETTINGS_IMAGES . '/page/right-sidebar.png',
                        'blank' => INDUSTRY_DIVE_THEME_SETTINGS_IMAGES . '/page/blank.png',
                    ),
                    'default' => 'default'
                ),
                array(
                    'id' => 'page_bg_color',
                    'type' => 'color',
                    'title' => esc_html__('Page Background Color', 'INDUSTRY_DIVE'),
                    'default' => '#ffffff'
                ),
                array(
                    'id' => 'page_content_bg_color',
                    'type' => 'color',
                    'title' => esc_html__('Page Content Background Color', 'INDUSTRY_DIVE'),
                    'default' => '#ffffff'
                ),
                array(
                    'id' => 'page_content_text_color',
                    'type' => 'color',
                    'title' => esc_html__('Page Content Text Color', 'INDUSTRY_DIVE'),
                    'default' => '#5f5f5f'
                )

            );

            return $fields;
        }

        /**
         * Page container options
         * @since 1.0.0
         */
        public static function Page_Container_Options($type)
        {
            $fields = array();
            $allowed_html = INDUSTRY_DIVE()->kses_allowed_html(array('mark'));
            if ('header_options' == $type) {
                $fields = array(
                    array(
                        'type' => 'subheading',
                        'content' => esc_html__('Page Header, Footer & Breadcrumb Options', 'INDUSTRY_DIVE'),
                    ),
                    array(
                        'id' => 'page_title',
                        'type' => 'switcher',
                        'title' => esc_html__('Page Title', 'INDUSTRY_DIVE'),
                        'desc' => wp_kses(__('you can set <mark>ON / OFF</mark> to show/hide page title.', 'INDUSTRY_DIVE'), $allowed_html),
                        'text_on' => esc_html__('Yes', 'INDUSTRY_DIVE'),
                        'text_off' => esc_html__('No', 'INDUSTRY_DIVE'),
                        'default' => true
                    ),
                    array(
                        'id' => 'page_breadcrumb',
                        'type' => 'switcher',
                        'title' => esc_html__('Page Breadcrumb', 'INDUSTRY_DIVE'),
                        'desc' => wp_kses(__('you can set <mark>ON / OFF</mark> to show/hide page breadcrumb.', 'INDUSTRY_DIVE'), $allowed_html),
                        'text_on' => esc_html__('Yes', 'INDUSTRY_DIVE'),
                        'text_off' => esc_html__('No', 'INDUSTRY_DIVE'),
                        'default' => true
                    ),
                    array(
                        'id' => 'navbar_type',
                        'title' => esc_html__('Navbar Type', 'INDUSTRY_DIVE'),
                        'type' => 'image_select',
                        'options' => array(
                            '' => INDUSTRY_DIVE_THEME_SETTINGS_IMAGES . '/header/01.png',
                        ),
                        'default' => '',
                        'desc' => wp_kses(__('you can set <mark>navbar type</mark> transparent type or solid background.', 'INDUSTRY_DIVE'), $allowed_html),
                    ),
                    array(
                        'id' => 'footer_type',
                        'title' => esc_html__('Footer Type', 'INDUSTRY_DIVE'),
                        'type' => 'image_select',
                        'options' => array(
                            '' => INDUSTRY_DIVE_THEME_SETTINGS_IMAGES . '/footer/01.png',
                        ),
                        'default' => '',
                        'desc' => wp_kses(__('you can set <mark>footer type</mark> transparent type or solid background.', 'INDUSTRY_DIVE'), $allowed_html),
                    ),

                );
            } elseif ('container_options' == $type) {
                $fields = array(
                    array(
                        'type' => 'subheading',
                        'content' => esc_html__('Page Width & Padding Options', 'INDUSTRY_DIVE'),
                    ),
                    array(
                        'id' => 'page_container',
                        'type' => 'switcher',
                        'title' => esc_html__('Page Full Width', 'INDUSTRY_DIVE'),
                        'desc' => wp_kses(__('you can set <mark>ON / OFF</mark> to set page container full width.', 'INDUSTRY_DIVE'), $allowed_html),
                        'text_on' => esc_html__('Yes', 'INDUSTRY_DIVE'),
                        'text_off' => esc_html__('No', 'INDUSTRY_DIVE'),
                        'default' => false
                    ),
                    array(
                        'type' => 'subheading',
                        'content' => esc_html__('Page Spacing Options', 'INDUSTRY_DIVE'),
                    ),
                    array(
                        'id' => 'page_spacing_top',
                        'title' => esc_html__('Page Spacing Top', 'INDUSTRY_DIVE'),
                        'type' => 'slider',
                        'desc' => wp_kses(__('you can set <mark>Padding Top</mark> for page container.', 'INDUSTRY_DIVE'), $allowed_html),
                        'min' => 0,
                        'max' => 500,
                        'step' => 1,
                        'unit' => 'px',
                        'default' => 120,
                    ),
                    array(
                        'id' => 'page_spacing_bottom',
                        'title' => esc_html__('Page Spacing Bottom', 'INDUSTRY_DIVE'),
                        'type' => 'slider',
                        'desc' => wp_kses(__('you can set <mark>Padding Bottom</mark> for page container.', 'INDUSTRY_DIVE'), $allowed_html),
                        'min' => 0,
                        'max' => 500,
                        'step' => 1,
                        'unit' => 'px',
                        'default' => 120,
                    ),
                    array(
                        'type' => 'subheading',
                        'content' => esc_html__('Page Content Spacing Options', 'INDUSTRY_DIVE'),
                    ),
                    array(
                        'id' => 'page_content_spacing',
                        'type' => 'switcher',
                        'title' => esc_html__('Page Content Spacing', 'INDUSTRY_DIVE'),
                        'desc' => wp_kses(__('you can set <mark>ON / OFF</mark> to set page content spacing.', 'INDUSTRY_DIVE'), $allowed_html),
                        'text_on' => esc_html__('Yes', 'INDUSTRY_DIVE'),
                        'text_off' => esc_html__('No', 'INDUSTRY_DIVE'),
                        'default' => false
                    ),
                    array(
                        'id' => 'page_content_spacing_top',
                        'title' => esc_html__('Page Spacing Bottom', 'INDUSTRY_DIVE'),
                        'type' => 'slider',
                        'desc' => wp_kses(__('you can set <mark>Padding Top</mark> for page content area.', 'INDUSTRY_DIVE'), $allowed_html),
                        'min' => 0,
                        'max' => 500,
                        'step' => 1,
                        'unit' => 'px',
                        'default' => 0,
                        'dependency' => array('page_content_spacing', '==', 'true')
                    ),
                    array(
                        'id' => 'page_content_spacing_bottom',
                        'title' => esc_html__('Page Spacing Bottom', 'INDUSTRY_DIVE'),
                        'type' => 'slider',
                        'desc' => wp_kses(__('you can set <mark>Padding Bottom</mark> for page content area.', 'INDUSTRY_DIVE'), $allowed_html),
                        'min' => 0,
                        'max' => 500,
                        'step' => 1,
                        'unit' => 'px',
                        'default' => 0,
                        'dependency' => array('page_content_spacing', '==', 'true')
                    ),
                    array(
                        'id' => 'page_content_spacing_left',
                        'title' => esc_html__('Page Spacing Left', 'INDUSTRY_DIVE'),
                        'type' => 'slider',
                        'desc' => wp_kses(__('you can set <mark>Padding Left</mark> for page content area.', 'INDUSTRY_DIVE'), $allowed_html),
                        'min' => 0,
                        'max' => 500,
                        'step' => 1,
                        'unit' => 'px',
                        'default' => 0,
                        'dependency' => array('page_content_spacing', '==', 'true')
                    ),
                    array(
                        'id' => 'page_content_spacing_right',
                        'title' => esc_html__('Page Spacing Right', 'INDUSTRY_DIVE'),
                        'type' => 'slider',
                        'desc' => wp_kses(__('you can set <mark>Padding Right</mark> for page content area.', 'INDUSTRY_DIVE'), $allowed_html),
                        'min' => 0,
                        'max' => 500,
                        'step' => 1,
                        'unit' => 'px',
                        'default' => 0,
                        'dependency' => array('page_content_spacing', '==', 'true')
                    ),
                );
            }

            return $fields;
        }


        /**
         * Page layout options
         * @since 1.0.0
         */
        public static function page_layout_options($title, $prefix)
        {
            $allowed_html = INDUSTRY_DIVE()->kses_allowed_html(array('mark'));
            $fields = array(
                array(
                    'type' => 'subheading',
                    'content' => '<h3>' . $title . esc_html__(' Page Options', 'INDUSTRY_DIVE') . '</h3>',
                ),
                array(
                    'id' => $prefix . '_layout',
                    'type' => 'image_select',
                    'title' => esc_html__('Select Page Layout', 'INDUSTRY_DIVE'),
                    'options' => array(
                        'right-sidebar' => INDUSTRY_DIVE_THEME_SETTINGS_IMAGES . '/page/right-sidebar.png',
                        'left-sidebar' => INDUSTRY_DIVE_THEME_SETTINGS_IMAGES . '/page/left-sidebar.png',
                        'no-sidebar' => INDUSTRY_DIVE_THEME_SETTINGS_IMAGES . '/page/no-sidebar.png',
                    ),
                    'default' => 'right-sidebar'
                ),
                array(
                    'id' => $prefix . '_bg_color',
                    'type' => 'color',
                    'title' => esc_html__('Page Background Color', 'INDUSTRY_DIVE'),
                    'default' => '#fff'
                ),
                array(
                    'id' => $prefix . '_spacing_top',
                    'title' => esc_html__('Page Spacing Top', 'INDUSTRY_DIVE'),
                    'type' => 'slider',
                    'desc' => wp_kses(__('you can set <mark>Padding Top</mark> for page content area.', 'INDUSTRY_DIVE'), $allowed_html),
                    'min' => 0,
                    'max' => 500,
                    'step' => 1,
                    'unit' => 'px',
                    'default' => 120,
                ),
                array(
                    'id' => $prefix . '_spacing_bottom',
                    'title' => esc_html__('Page Spacing Bottom', 'INDUSTRY_DIVE'),
                    'type' => 'slider',
                    'desc' => wp_kses(__('you can set <mark>Padding Bottom</mark> for page content area.', 'INDUSTRY_DIVE'), $allowed_html),
                    'min' => 0,
                    'max' => 500,
                    'step' => 1,
                    'unit' => 'px',
                    'default' => 120,
                ),
            );

            return $fields;
        }

        /**
         * Post meta
         * @since 1.0.0
         */
        public static function post_meta($prefix, $title)
        {
            $allowed_html = INDUSTRY_DIVE()->kses_allowed_html(array('mark'));
            $fields = array(
                array(
                    'type' => 'subheading',
                    'content' => '<h3>' . $title . esc_html__(' Post Options', 'INDUSTRY_DIVE') . '</h3>',
                ),
                array(
                    'id' => $prefix . '_posted_by',
                    'type' => 'switcher',
                    'title' => esc_html__('Posted By', 'INDUSTRY_DIVE'),
                    'desc' => wp_kses(__('you can set <mark>ON / OFF</mark> to show / hide posted by.', 'INDUSTRY_DIVE'), $allowed_html),
                    'text_on' => esc_html__('Yes', 'INDUSTRY_DIVE'),
                    'text_off' => esc_html__('No', 'INDUSTRY_DIVE'),
                    'default' => true
                )
            );

            if ('blog_post' == $prefix) {
                $fields[] = array(
                    'id' => $prefix . '_posted_cat',
                    'type' => 'switcher',
                    'title' => esc_html__('Posted Category', 'INDUSTRY_DIVE'),
                    'desc' => wp_kses(__('you can set <mark>ON / OFF</mark> to show / hide posted category.', 'INDUSTRY_DIVE'), $allowed_html),
                    'text_on' => esc_html__('Yes', 'INDUSTRY_DIVE'),
                    'text_off' => esc_html__('No', 'INDUSTRY_DIVE'),
                    'default' => true
                );
                $fields[] = array(
                    'id' => $prefix . '_readmore_btn',
                    'type' => 'switcher',
                    'title' => esc_html__('Read More Button', 'INDUSTRY_DIVE'),
                    'desc' => wp_kses(__('you can set <mark>ON / OFF</mark> to show / hide read more button.', 'INDUSTRY_DIVE'), $allowed_html),
                    'text_on' => esc_html__('Yes', 'INDUSTRY_DIVE'),
                    'text_off' => esc_html__('No', 'INDUSTRY_DIVE'),
                    'default' => true
                );
                $fields[] = array(
                    'id' => $prefix . '_readmore_btn_text',
                    'type' => 'text',
                    'title' => esc_html__('Read More Text', 'INDUSTRY_DIVE'),
                    'desc' => wp_kses(__('you can set read more <mark>button text</mark> to button text.', 'INDUSTRY_DIVE'), $allowed_html),
                    'default' => esc_html__('Read More', 'INDUSTRY_DIVE'),
                    'dependency' => array($prefix . '_readmore_btn', '==', 'true')
                );
                $fields[] = array(
                    'id' => $prefix . '_excerpt_more',
                    'type' => 'text',
                    'title' => esc_html__('Excerpt More', 'INDUSTRY_DIVE'),
                    'desc' => wp_kses(__('you can set read more <mark>button text</mark> to button text.', 'INDUSTRY_DIVE'), $allowed_html),
                    'attributes' => array(
                        'placeholder' => esc_html__('....', 'INDUSTRY_DIVE')
                    )
                );
                $fields[] = array(
                    'id' => $prefix . '_excerpt_length',
                    'type' => 'select',
                    'options' => array(
                        '25' => esc_html__('Short', 'INDUSTRY_DIVE'),
                        '55' => esc_html__('Regular', 'INDUSTRY_DIVE'),
                        '100' => esc_html__('Long', 'INDUSTRY_DIVE'),
                    ),
                    'title' => esc_html__('Excerpt Length', 'INDUSTRY_DIVE'),
                    'desc' => wp_kses(__('you can set <mark> excerpt length</mark> for post.', 'INDUSTRY_DIVE'), $allowed_html),
                );
            } elseif ('blog_single_post' == $prefix) {

                $fields[] = array(
                    'id' => $prefix . '_posted_category',
                    'type' => 'switcher',
                    'title' => esc_html__('Posted Category', 'INDUSTRY_DIVE'),
                    'desc' => wp_kses(__('you can set <mark>ON / OFF</mark> to show / hide posted category.', 'INDUSTRY_DIVE'), $allowed_html),
                    'text_on' => esc_html__('Yes', 'INDUSTRY_DIVE'),
                    'text_off' => esc_html__('No', 'INDUSTRY_DIVE'),
                    'default' => true
                );
                $fields[] = array(
                    'id' => $prefix . '_posted_tag',
                    'type' => 'switcher',
                    'title' => esc_html__('Posted Tags', 'INDUSTRY_DIVE'),
                    'desc' => wp_kses(__('you can set <mark>ON / OFF</mark> to show / hide post tags.', 'INDUSTRY_DIVE'), $allowed_html),
                    'text_on' => esc_html__('Yes', 'INDUSTRY_DIVE'),
                    'text_off' => esc_html__('No', 'INDUSTRY_DIVE'),
                    'default' => true
                );
                $fields[] = array(
                    'id' => $prefix . '_posted_share',
                    'type' => 'switcher',
                    'title' => esc_html__('Post Share', 'INDUSTRY_DIVE'),
                    'desc' => wp_kses(__('you can set <mark>ON / OFF</mark> to show / hide post share.', 'INDUSTRY_DIVE'), $allowed_html),
                    'text_on' => esc_html__('Yes', 'INDUSTRY_DIVE'),
                    'text_off' => esc_html__('No', 'INDUSTRY_DIVE'),
                    'default' => true
                );
                $fields[] = array(
                    'id' => $prefix . '_post_navigation',
                    'type' => 'switcher',
                    'title' => esc_html__('Post Navigation', 'INDUSTRY_DIVE'),
                    'desc' => wp_kses(__('you can set <mark>ON / OFF</mark> to show / hide post navigation.', 'INDUSTRY_DIVE'), $allowed_html),
                    'text_on' => esc_html__('Yes', 'INDUSTRY_DIVE'),
                    'text_off' => esc_html__('No', 'INDUSTRY_DIVE'),
                    'default' => true
                );
                $fields[] = array(
                    'id' => $prefix . '_next_post_nav_btn',
                    'type' => 'switcher',
                    'title' => esc_html__('Post Navigation With Image', 'INDUSTRY_DIVE'),
                    'desc' => wp_kses(__('you can set <mark>ON / OFF</mark> to show / hide post navigation button.', 'INDUSTRY_DIVE'), $allowed_html),
                    'text_on' => esc_html__('Yes', 'INDUSTRY_DIVE'),
                    'text_off' => esc_html__('No', 'INDUSTRY_DIVE'),
                    'default' => true
                );
                $fields[] = array(
                    'id' => $prefix . '_get_related_post',
                    'type' => 'switcher',
                    'title' => esc_html__('Get Related Post', 'INDUSTRY_DIVE'),
                    'desc' => wp_kses(__('you can set <mark>ON / OFF</mark> to show / hide get related post button.', 'INDUSTRY_DIVE'), $allowed_html),
                    'text_on' => esc_html__('Yes', 'INDUSTRY_DIVE'),
                    'text_off' => esc_html__('No', 'INDUSTRY_DIVE'),
                    'default' => true
                );
                $fields[] = array(
                    'id' => $prefix . '_author_bio',
                    'type' => 'switcher',
                    'title' => esc_html__('Author Bio', 'INDUSTRY_DIVE'),
                    'desc' => wp_kses(__('you can set <mark>ON / OFF</mark> to show / hide author bio button.', 'INDUSTRY_DIVE'), $allowed_html),
                    'text_on' => esc_html__('Yes', 'INDUSTRY_DIVE'),
                    'text_off' => esc_html__('No', 'INDUSTRY_DIVE'),
                    'default' => true
                );
            }

            return $fields;
        }

    }//end class

}//end if

