<?php
/**
 * Theme Options
 * @package INDUSTRY_DIVE
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit(); // exit if access directly
}
// Control core classes for avoid errors
if (class_exists('CSF')) {

    $allowed_html = INDUSTRY_DIVE()->kses_allowed_html(array('mark'));
    $prefix = 'INDUSTRY_DIVE';
    // Create options
    CSF::createOptions($prefix . '_theme_options', array(
        'menu_title' => esc_html__('Theme Options', 'INDUSTRY_DIVE'),
        'menu_slug' => 'INDUSTRY_DIVE_theme_options',
        'menu_parent' => 'INDUSTRY_DIVE_theme_options',
        'menu_type' => 'submenu',
        'footer_credit' => ' ',
        'menu_icon' => 'fa fa-filter',
        'show_footer' => false,
        'enqueue_webfont' => false,
        'show_search' => true,
        'show_reset_all' => true,
        'show_reset_section' => true,
        'show_all_options' => false,
        'theme' => 'dark',
        'framework_title' => INDUSTRY_DIVE()->get_theme_info('name')
    ));

    /*-------------------------------------------------------
        ** General  Options
    --------------------------------------------------------*/
    CSF::createSection($prefix . '_theme_options', array(
        'title' => esc_html__('General', 'INDUSTRY_DIVE'),
        'id' => 'general_options',
        'icon' => 'fas fa-cogs',
    ));
    /* Preloader */
    CSF::createSection($prefix . '_theme_options', array(
        'title' => esc_html__('Preloader & SVG Enable', 'INDUSTRY_DIVE'),
        'id' => 'theme_general_preloader_options',
        'icon' => 'fa fa-spinner',
        'parent' => 'general_options',
        'fields' => array(
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Preloader Options', 'INDUSTRY_DIVE') . '</h3>'
            ),
            array(
                'id' => 'preloader_enable',
                'title' => esc_html__('Preloader', 'INDUSTRY_DIVE'),
                'type' => 'switcher',
                'desc' => wp_kses(__('you can set <mark>Yes / No</mark> to enable/disable preloader', 'INDUSTRY_DIVE'), $allowed_html),
                'default' => true,
            ),
            array(
                'id' => 'preloader_bg_color',
                'title' => esc_html__('Background Color', 'INDUSTRY_DIVE'),
                'type' => 'color',
                'default' => '#ffffff',
                'desc' => wp_kses(__('you can set <mark>overlay color</mark> for preloader background image', 'INDUSTRY_DIVE'), $allowed_html),
                'dependency' => array('preloader_enable', '==', 'true')
            ),
            array(
                'id' => 'enable_svg_upload',
                'type' => 'switcher',
                'title' => esc_html__('Enable Svg Upload ?', 'INDUSTRY_DIVE'),
                'desc' => esc_html__('If you want to enable or disable svg upload you can set ( YES / NO )', 'INDUSTRY_DIVE'),
                'default' => false,
            ),
        )
    ));

    /*-------------------------------------------------------
           ** Typography  Options
    --------------------------------------------------------*/
    CSF::createSection($prefix . '_theme_options', array(
        'id' => 'typography',
        'title' => esc_html__('Typography', 'INDUSTRY_DIVE'),
        'icon' => 'fas fa-text-height',
        'parent' => 'general_options',
        'fields' => array(
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Body Font Options', 'INDUSTRY_DIVE') . '</h3>',
            ),
            array(
                'type' => 'typography',
                'title' => esc_html__('Typography', 'INDUSTRY_DIVE'),
                'id' => '_body_font',
                'default' => array(
                    'font-family' => 'Invention-Regular',
                    'font-size' => '16',
                    'line-height' => '26',
                    'unit' => 'px',
                    'type' => 'google',
                ),
                'color' => false,
                'subset' => false,
                'text_align' => false,
                'text_transform' => false,
                'letter_spacing' => false,
                'line_height' => false,
                'desc' => wp_kses(__('you can set <mark>font</mark> for all html tags (if not use different heading font)', 'INDUSTRY_DIVE'), $allowed_html),
            ),
            array(
                'id' => 'body_font_variant',
                'type' => 'select',
                'title' => esc_html__('Load Font Variant', 'INDUSTRY_DIVE'),
                'multiple' => true,
                'chosen' => true,
                'options' => array(
                    '300' => esc_html__('Light 300', 'INDUSTRY_DIVE'),
                    '400' => esc_html__('Regular 400', 'INDUSTRY_DIVE'),
                    '500' => esc_html__('Medium 500', 'INDUSTRY_DIVE'),
                    '600' => esc_html__('Semi Bold 600', 'INDUSTRY_DIVE'),
                    '700' => esc_html__('Bold 700', 'INDUSTRY_DIVE'),
                    '800' => esc_html__('Extra Bold 800', 'INDUSTRY_DIVE'),
                ),
                'default' => array('400', '500', '700')
            ),
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Heading Font Options', 'INDUSTRY_DIVE') . '</h3>',
            ),
            array(
                'type' => 'switcher',
                'id' => 'heading_font_enable',
                'title' => esc_html__('Heading Font', 'INDUSTRY_DIVE'),
                'desc' => wp_kses(__('you can set <mark>yes</mark> to select different heading font', 'INDUSTRY_DIVE'), $allowed_html),
                'default' => true
            ),
            array(
                'type' => 'typography',
                'title' => esc_html__('Typography', 'INDUSTRY_DIVE'),
                'id' => 'heading_font',
                'default' => array(
                    'font-family' => 'Khand',
                    'type' => 'google',
                ),
                'color' => false,
                'subset' => false,
                'text_align' => false,
                'text_transform' => false,
                'letter_spacing' => false,
                'font_size' => false,
                'line_height' => false,
                'desc' => wp_kses(__('you can set <mark>font</mark> for  for heading tag .eg: h1,h2mh3,h4,h5,h6', 'INDUSTRY_DIVE'), $allowed_html),
                'dependency' => array('heading_font_enable', '==', 'true')
            ),
            array(
                'id' => 'heading_font_variant',
                'type' => 'select',
                'title' => esc_html__('Load Font Variant', 'INDUSTRY_DIVE'),
                'multiple' => true,
                'chosen' => true,
                'options' => array(
                    '300' => esc_html__('Light 300', 'INDUSTRY_DIVE'),
                    '400' => esc_html__('Regular 400', 'INDUSTRY_DIVE'),
                    '500' => esc_html__('Medium 500', 'INDUSTRY_DIVE'),
                    '600' => esc_html__('Semi Bold 600', 'INDUSTRY_DIVE'),
                    '700' => esc_html__('Bold 700', 'INDUSTRY_DIVE'),
                    '800' => esc_html__('Extra Bold 800', 'INDUSTRY_DIVE'),
                ),
                'default' => array('400', '500', '600', '700', '800'),
                'dependency' => array('heading_font_enable', '==', 'true')
            ),
        )
    ));

    /* Preloader */
    CSF::createSection($prefix . '_theme_options', array(
        'title' => esc_html__('Back To Top', 'INDUSTRY_DIVE'),
        'id' => 'theme_general_back_top_options',
        'icon' => 'fa fa-arrow-up',
        'parent' => 'general_options',
        'fields' => array(
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Back Top Options', 'INDUSTRY_DIVE') . '</h3>'
            ),
            array(
                'id' => 'back_top_enable',
                'title' => esc_html__('Back Top', 'INDUSTRY_DIVE'),
                'type' => 'switcher',
                'desc' => wp_kses(__('you can set <mark>Yes / No</mark> to show/hide back to top', 'INDUSTRY_DIVE'), $allowed_html),
                'default' => true,
            ),
            array(
                'id' => 'back_top_icon',
                'title' => esc_html__('Back Top Icon', 'INDUSTRY_DIVE'),
                'type' => 'icon',
                'default' => 'fa fa-angle-up',
                'desc' => wp_kses(__('you can set <mark>icon</mark> for back to top.', 'INDUSTRY_DIVE'), $allowed_html),
                'dependency' => array('back_top_enable', '==', 'true')
            ),
        )
    ));

    /*----------------------------------
        Header & Footer Style
    -----------------------------------*/
    CSF::createSection($prefix . '_theme_options', array(
        'title' => esc_html__('Set Header & Footer Type', 'INDUSTRY_DIVE'),
        'id' => 'header_footer_style_options',
        'icon' => 'eicon-banner',
        'fields' => array(
            array(
                'type' => 'subheading',
                'content' => esc_html__('Global Header Style', 'INDUSTRY_DIVE'),
            ),
            array(
                'id' => 'navbar_type',
                'title' => esc_html__('Navbar Type', 'INDUSTRY_DIVE'),
                'type' => 'image_select',
                'options' => array(
                    '' => INDUSTRY_DIVE_THEME_SETTINGS_IMAGES . '/header/01.png',
                    'style-01' => INDUSTRY_DIVE_THEME_SETTINGS_IMAGES . '/header/02.png',
                    'style-02' => INDUSTRY_DIVE_THEME_SETTINGS_IMAGES . '/header/03.png'
                ),
                'default' => '',
                'desc' => wp_kses(__('you can set <mark>navbar type</mark> it will show in every page except you select specific navbar type form page settings.', 'INDUSTRY_DIVE'), $allowed_html),
            ),
            array(
                'type' => 'subheading',
                'content' => esc_html__('Global Footer Style', 'INDUSTRY_DIVE'),
            ),
            array(
                'id' => 'footer_type',
                'title' => esc_html__('Footer Type', 'INDUSTRY_DIVE'),
                'type' => 'image_select',
                'options' => array(
                    '' => INDUSTRY_DIVE_THEME_SETTINGS_IMAGES . '/footer/01.png',
                    'style-01' => INDUSTRY_DIVE_THEME_SETTINGS_IMAGES . '/footer/02.png',
                    'style-02' => INDUSTRY_DIVE_THEME_SETTINGS_IMAGES . '/footer/03.png'
                ),
                'default' => '',
                'desc' => wp_kses(__('you can set <mark>footer type</mark> it will show in every page except you select specific navbar type form page settings.', 'INDUSTRY_DIVE'), $allowed_html),
            ),
        )
    ));
    /* Header Style 05 */
    CSF::createSection($prefix . '_theme_options', array(
        'title' => esc_html__('Header Five', 'INDUSTRY_DIVE'),
        'id' => 'theme_header_five_options',
        'icon' => 'fa fa-image',
        'parent' => 'headers_settings',
        'fields' => array(
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Navbar Options', 'INDUSTRY_DIVE') . '</h3>'
            ),
            array(
                'id' => 'header_five_logo',
                'type' => 'media',
                'title' => esc_html__('Logo', 'INDUSTRY_DIVE'),
                'library' => 'image',
                'desc' => wp_kses(__('you can upload <mark> logo</mark> here it will overwrite customizer uploaded logo', 'INDUSTRY_DIVE'), $allowed_html),
            ),
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('info Bar Options', 'INDUSTRY_DIVE') . '</h3>'
            ),
            array(
                'id' => 'header_five_navbar_button',
                'type' => 'switcher',
                'title' => esc_html__('Info Button', 'INDUSTRY_DIVE'),
                'default' => true,
                'desc' => wp_kses(__('you can <mark> show/hide</mark> navbar button of header two', 'INDUSTRY_DIVE'), $allowed_html),
            ),
            array(
                'id' => 'header_five_navbar_button_spacing',
                'title' => esc_html__('Booking BUtton Margin Right', 'INDUSTRY_DIVE'),
                'type' => 'slider',
                'desc' => wp_kses(__('you can set <mark>padding</mark> for footer bottom', 'INDUSTRY_DIVE'), $allowed_html),
                'min' => 0,
                'max' => 500,
                'step' => 1,
                'unit' => 'px',
                'default' => 40,
                'dependency' => array('header_five_navbar_button', '==', 'true')
            ),
            array(
                'id' => 'header_five_navbar_title',
                'type' => 'text',
                'title' => esc_html__('Find Now', 'INDUSTRY_DIVE'),
                'default' => esc_html__('Find a Hearing Clinic', 'INDUSTRY_DIVE'),
                'dependency' => array('header_five_navbar_button', '==', 'true')
            ),
            array(
                'id' => 'header_five_navbar_url',
                'type' => 'text',
                'title' => esc_html__('Button URL', 'INDUSTRY_DIVE'),
                'default' => '#',
                'dependency' => array('header_five_navbar_button', '==', 'true')
            ),
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Top Bar Options', 'INDUSTRY_DIVE') . '</h3>'
            ),
            array(
                'id' => 'header_five_top_bar_shortcode',
                'type' => 'repeater',
                'title' => esc_html__('Top Bar Shortcodes', 'INDUSTRY_DIVE'),
                'fields' => array(
                    array(
                        'id' => 'position',
                        'type' => 'select',
                        'title' => esc_html__('Position', 'INDUSTRY_DIVE'),
                        'options' => array(
                            'left-content' => esc_html__('Left Content', 'INDUSTRY_DIVE'),
                            'right-content' => esc_html__('Right Content', 'INDUSTRY_DIVE')
                        ),
                        'desc' => wp_kses(__('you can set <mark> position </mark> of the shortcode header four', 'INDUSTRY_DIVE'), $allowed_html),
                    ),
                    array(
                        'id' => 'shortcode',
                        'type' => 'textarea',
                        'title' => esc_html__('Shortcode', 'INDUSTRY_DIVE'),
                        'shortcoder' => 'INDUSTRY_DIVE_shortcodes'
                    )
                )
            ),
        )
    ));

    /*-------------------------------------------------------
       ** Entire Site Header  Options
   --------------------------------------------------------*/
    CSF::createSection($prefix . '_theme_options', array(
        'id' => 'headers_settings',
        'title' => esc_html__('Headers', 'INDUSTRY_DIVE'),
        'icon' => 'fa fa-home'
    ));
    /* Header Style 01 */
    CSF::createSection($prefix . '_theme_options', array(
        'title' => esc_html__('Header One', 'INDUSTRY_DIVE'),
        'id' => 'theme_header_one_options',
        'icon' => 'fa fa-image',
        'parent' => 'headers_settings',
        'fields' => array(
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Logo Options', 'INDUSTRY_DIVE') . '</h3>'
            ),
            array(
                'id' => 'header_one_logo',
                'type' => 'media',
                'title' => esc_html__('Logo', 'INDUSTRY_DIVE'),
                'library' => 'image',
                'desc' => wp_kses(__('you can upload <mark> logo</mark> here it will overwrite customizer uploaded logo', 'INDUSTRY_DIVE'), $allowed_html),
            ),
            array(
                'id' => 'header_navbar_button',
                'type' => 'switcher',
                'title' => esc_html__('Info Button', 'INDUSTRY_DIVE'),
                'default' => true,
                'desc' => wp_kses(__('you can <mark> show/hide</mark> navbar button of header two', 'INDUSTRY_DIVE'), $allowed_html),
            ),
            array(
                'id' => 'header_navbar_title',
                'type' => 'text',
                'title' => esc_html__('Button Title', 'INDUSTRY_DIVE'),
                'default' => esc_html__('Book Now', 'INDUSTRY_DIVE'),
                'dependency' => array('header_navbar_button', '==', 'true')
            ),
            array(
                'id' => 'header_navbar_url',
                'type' => 'text',
                'title' => esc_html__('Button URL', 'INDUSTRY_DIVE'),
                'default' => '#',
                'dependency' => array('header_navbar_button', '==', 'true')
            ),
        )
    ));

    /* Breadcrumb */
    CSF::createSection($prefix . '_theme_options', array(
        'title' => esc_html__('Breadcrumb', 'INDUSTRY_DIVE'),
        'id' => 'breadcrumb_options',
        'icon' => ' eicon-product-breadcrumbs',
        'fields' => array(
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Breadcrumb Options', 'INDUSTRY_DIVE') . '</h3>'
            ),
            array(
                'id' => 'breadcrumb_enable',
                'title' => esc_html__('Breadcrumb', 'INDUSTRY_DIVE'),
                'type' => 'switcher',
                'desc' => wp_kses(__('you can set <mark>Yes / No</mark> to show/hide breadcrumb', 'INDUSTRY_DIVE'), $allowed_html),
                'default' => true,
            ),
            array(
                'id' => 'breadcrumb_bg',
                'title' => esc_html__('Background Image', 'INDUSTRY_DIVE'),
                'type' => 'background',
                'desc' => wp_kses(__('you can set <mark>background</mark> for breadcrumb', 'INDUSTRY_DIVE'), $allowed_html),
                'default' => array(
                    'background-size' => 'cover',
                    'background-position' => 'center bottom',
                    'background-repeat' => 'no-repeat',
                ),
                'background_color' => false,
                'dependency' => array('breadcrumb_enable', '==', 'true')
            ),
            array(
                'id' => 'breadcrumb_bg_color',
                'title' => esc_html__('Breadcrumb Background Color', 'INDUSTRY_DIVE'),
                'type' => 'color',
                'default' => 'rgba(232,0,0, 0.6);',
                'desc' => wp_kses(__('you can set <mark>overlay color</mark> for Breadcrumb background image', 'INDUSTRY_DIVE'), $allowed_html),
                'dependency' => array('breadcrumb_enable', '==', 'true')
            ),
        )
    ));


    /*-------------------------------------------------------
           ** Footer  Options
    --------------------------------------------------------*/
    CSF::createSection($prefix . '_theme_options', array(
        'title' => esc_html__('Footer', 'INDUSTRY_DIVE'),
        'id' => 'footer_options',
        'icon' => ' eicon-footer',

    ));
    CSF::createSection($prefix . '_theme_options', array(
        'parent' => 'footer_options',
        'id' => 'footer_general_options',
        'title' => esc_html__('Footer One', 'INDUSTRY_DIVE'),
        'icon' => 'fa fa-list-ul',
        'fields' => array(
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Footer Settings One', 'INDUSTRY_DIVE') . '</h3>'
            ),
            array(
                'id' => 'footer_spacing',
                'title' => esc_html__('Footer Spacing', 'INDUSTRY_DIVE'),
                'type' => 'switcher',
                'desc' => wp_kses(__('you can set <mark>Yes / No</mark> to set footer spacing', 'INDUSTRY_DIVE'), $allowed_html),
                'default' => true,
            ),
            array(
                'id' => 'footer_top_spacing',
                'title' => esc_html__('Footer Top Spacing', 'INDUSTRY_DIVE'),
                'type' => 'slider',
                'desc' => wp_kses(__('you can set <mark>padding</mark> for footer top', 'INDUSTRY_DIVE'), $allowed_html),
                'min' => 0,
                'max' => 500,
                'step' => 1,
                'unit' => 'px',
                'default' => 100,
                'dependency' => array('footer_spacing', '==', 'true')
            ),
            array(
                'id' => 'footer_bottom_spacing',
                'title' => esc_html__('Footer Bottom Spacing', 'INDUSTRY_DIVE'),
                'type' => 'slider',
                'desc' => wp_kses(__('you can set <mark>padding</mark> for footer bottom', 'INDUSTRY_DIVE'), $allowed_html),
                'min' => 0,
                'max' => 500,
                'step' => 1,
                'unit' => 'px',
                'default' => 65,
                'dependency' => array('footer_spacing', '==', 'true')
            ),
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Footer Copyright Area Options', 'INDUSTRY_DIVE') . '</h3>'
            ),
            array(
                'id' => 'copyright_area_spacing',
                'title' => esc_html__('Copyright Area Spacing', 'INDUSTRY_DIVE'),
                'type' => 'switcher',
                'desc' => wp_kses(__('you can set <mark>Yes / No</mark> to set copyright area spacing', 'INDUSTRY_DIVE'), $allowed_html),
                'default' => true,
            ),
            array(
                'id' => 'copyright_text',
                'title' => esc_html__('Copyright Area Text', 'INDUSTRY_DIVE'),
                'type' => 'textarea',
                'desc' => wp_kses(__('use  <mark>{copy}</mark> for copyright symbol, use <mark>{year}</mark> for current year, ', 'INDUSTRY_DIVE'), $allowed_html)
            ),
            array(
                'id' => 'copyright_area_top_spacing',
                'title' => esc_html__('Copyright Area Top Spacing', 'INDUSTRY_DIVE'),
                'type' => 'slider',
                'desc' => wp_kses(__('you can set <mark>padding</mark> for copyright area top', 'INDUSTRY_DIVE'), $allowed_html),
                'min' => 0,
                'max' => 500,
                'step' => 1,
                'unit' => 'px',
                'default' => 20,
                'dependency' => array('copyright_area_spacing', '==', 'true')
            ),
            array(
                'id' => 'copyright_area_bottom_spacing',
                'title' => esc_html__('Copyright Area Bottom Spacing', 'INDUSTRY_DIVE'),
                'type' => 'slider',
                'desc' => wp_kses(__('you can set <mark>padding</mark> for copyright area bottom', 'INDUSTRY_DIVE'), $allowed_html),
                'min' => 0,
                'max' => 500,
                'step' => 1,
                'unit' => 'px',
                'default' => 20,
                'dependency' => array('copyright_area_spacing', '==', 'true')
            )
        )
    ));


    /*-------------------------------------------------------
          ** Blog  Options
    --------------------------------------------------------*/
    CSF::createSection($prefix . '_theme_options', array(
        'id' => 'blog_settings',
        'title' => esc_html__('Blog Settings', 'INDUSTRY_DIVE'),
        'icon' => 'fa fa-book'
    ));
    CSF::createSection($prefix . '_theme_options', array(
        'parent' => 'blog_settings',
        'id' => 'blog_post_options',
        'title' => esc_html__('Blog Post', 'INDUSTRY_DIVE'),
        'icon' => 'fa fa-list-ul',
        'fields' => INDUSTRY_DIVE_Group_Fields::post_meta('blog_post', esc_html__('Blog Page', 'INDUSTRY_DIVE'))
    ));
    CSF::createSection($prefix . '_theme_options', array(
        'parent' => 'blog_settings',
        'id' => 'blog_single_post_options',
        'title' => esc_html__('Single Post', 'INDUSTRY_DIVE'),
        'icon' => 'fa fa-list-alt',
        'fields' => INDUSTRY_DIVE_Group_Fields::post_meta('blog_single_post', esc_html__('Blog Single Page', 'INDUSTRY_DIVE'))
    ));

    CSF::createSection($prefix . '_theme_options', array(
        'id' => 'shop_settings',
        'title' => esc_html__('Shop Settings', 'INDUSTRY_DIVE'),
        'icon' => 'fas fa-shopping-basket',
    ));
    /*  Product page options */
    CSF::createSection($prefix . '_theme_options', array(
        'id' => 'product_shop_page',
        'title' => esc_html__('Product Page', 'INDUSTRY_DIVE'),
        'parent' => 'shop_settings',
        'icon' => 'fas fa-shopping-basket',
        'fields' => INDUSTRY_DIVE_Group_Fields::page_layout_options(esc_html__('Product Shop Page', 'INDUSTRY_DIVE'), 'product_shop')
    ));
    /*  Product single page options */
    CSF::createSection($prefix . '_theme_options', array(
        'id' => 'product_shop_single_page',
        'title' => esc_html__('Product Single Page', 'INDUSTRY_DIVE'),
        'parent' => 'shop_settings',
        'icon' => 'fas fa-shopping-basket',
        'fields' => array(
            array(
                'id' => 'product_shop_single_page_bg_color',
                'type' => 'color',
                'title' => esc_html__('Page Background Color', 'INDUSTRY_DIVE'),
                'default' => '#fff'
            ),
            array(
                'id' => 'product_shop_single_page_spacing_top',
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
                'id' => 'product_shop_single_page_spacing_bottom',
                'title' => esc_html__('Page Spacing Bottom', 'INDUSTRY_DIVE'),
                'type' => 'slider',
                'desc' => wp_kses(__('you can set <mark>Padding Bottom</mark> for page content area.', 'INDUSTRY_DIVE'), $allowed_html),
                'min' => 0,
                'max' => 500,
                'step' => 1,
                'unit' => 'px',
                'default' => 100,
            ),
        ),
    ));

    /*-------------------------------------------------------
          ** Pages & templates Options
   --------------------------------------------------------*/
    CSF::createSection($prefix . '_theme_options', array(
        'id' => 'pages_and_template',
        'title' => esc_html__('Pages Settings', 'INDUSTRY_DIVE'),
        'icon' => 'fa fa-files-o'
    ));
    /*  404 page options */
    CSF::createSection($prefix . '_theme_options', array(
        'id' => '404_page',
        'title' => esc_html__('404 Page', 'INDUSTRY_DIVE'),
        'parent' => 'pages_and_template',
        'icon' => 'fa fa-exclamation-triangle',
        'fields' => array(
            array(
                'id' => 'error_bg_switch',
                'title' => esc_html__('404 Image Enable', 'INDUSTRY_DIVE'),
                'type' => 'switcher',
                'desc' => wp_kses(__('you can set <mark>Yes / No</mark> to show/hide breadcrumb', 'INDUSTRY_DIVE'), $allowed_html),
                'default' => true,
            ),
            array(
                'id' => 'error_bg',
                'title' => esc_html__('404 Image', 'INDUSTRY_DIVE'),
                'type' => 'media',
                'desc' => wp_kses(__('you can set <mark>background</mark> for breadcrumb', 'INDUSTRY_DIVE'), $allowed_html),
                'dependency' => array('error_bg_switch', '==', 'true')
            ),
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('404 Page Options', 'INDUSTRY_DIVE') . '</h3>',
            ),
            array(
                'id' => '404_bg_color',
                'type' => 'color',
                'title' => esc_html__('Page Background Color', 'INDUSTRY_DIVE'),
                'default' => '#ffffff'
            ),
            array(
                'id' => '404_title',
                'title' => esc_html__('Title', 'INDUSTRY_DIVE'),
                'type' => 'text',
                'info' => wp_kses(__('you can change <mark>title</mark> of 404 page', 'INDUSTRY_DIVE'), $allowed_html),
                'attributes' => array('placeholder' => esc_html__('Sorry! The Page Not Found', 'INDUSTRY_DIVE'))
            ),
            array(
                'id' => '404_paragraph',
                'title' => esc_html__('Paragraph', 'INDUSTRY_DIVE'),
                'type' => 'textarea',
                'info' => wp_kses(__('you can change <mark>paragraph</mark> of 404 page', 'INDUSTRY_DIVE'), $allowed_html),
                'attributes' => array('placeholder' => esc_html__('Oops! The page you are looking for does not exit. it might been moved or deleted.', 'INDUSTRY_DIVE'))
            ),
            array(
                'id' => '404_button_text',
                'title' => esc_html__('Button Text', 'INDUSTRY_DIVE'),
                'type' => 'text',
                'info' => wp_kses(__('you can change <mark>button text</mark> of 404 page', 'INDUSTRY_DIVE'), $allowed_html),
                'attributes' => array('placeholder' => esc_html__('back to home', 'INDUSTRY_DIVE'))
            ),
            array(
                'id' => '404_spacing_top',
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
                'id' => '404_spacing_bottom',
                'title' => esc_html__('Page Spacing Bottom', 'INDUSTRY_DIVE'),
                'type' => 'slider',
                'desc' => wp_kses(__('you can set <mark>Padding Bottom</mark> for page content area.', 'INDUSTRY_DIVE'), $allowed_html),
                'min' => 0,
                'max' => 500,
                'step' => 1,
                'unit' => 'px',
                'default' => 120,
            ),
        )
    ));

    /*  blog page options */
    CSF::createSection($prefix . '_theme_options', array(
        'id' => 'blog_page',
        'title' => esc_html__('Blog Page', 'INDUSTRY_DIVE'),
        'parent' => 'pages_and_template',
        'icon' => 'fa fa-indent',
        'fields' => INDUSTRY_DIVE_Group_Fields::page_layout_options(esc_html__('Blog', 'INDUSTRY_DIVE'), 'blog')
    ));
    /*  blog single page options */
    CSF::createSection($prefix . '_theme_options', array(
        'id' => 'blog_single_page',
        'title' => esc_html__('Blog Single Page', 'INDUSTRY_DIVE'),
        'parent' => 'pages_and_template',
        'icon' => 'fa fa-indent',
        'fields' => INDUSTRY_DIVE_Group_Fields::page_layout_options(esc_html__('Blog Single', 'INDUSTRY_DIVE'), 'blog_single')
    ));
    /*  archive page options */
    CSF::createSection($prefix . '_theme_options', array(
        'id' => 'archive_page',
        'title' => esc_html__('Archive Page', 'INDUSTRY_DIVE'),
        'parent' => 'pages_and_template',
        'icon' => 'fa fa-archive',
        'fields' => INDUSTRY_DIVE_Group_Fields::page_layout_options(esc_html__('Archive', 'INDUSTRY_DIVE'), 'archive')
    ));
    /*  search page options */
    CSF::createSection($prefix . '_theme_options', array(
        'id' => 'search_page',
        'title' => esc_html__('Search Page', 'INDUSTRY_DIVE'),
        'parent' => 'pages_and_template',
        'icon' => 'fa fa-search',
        'fields' => INDUSTRY_DIVE_Group_Fields::page_layout_options(esc_html__('Search', 'INDUSTRY_DIVE'), 'search')
    ));

    /*-------------------------------------------------------
           ** Backup  Options
    --------------------------------------------------------*/
    CSF::createSection($prefix . '_theme_options', array(
        'id' => 'backup',
        'title' => esc_html__('Import / Export', 'INDUSTRY_DIVE'),
        'icon' => 'eicon-export-kit',
        'fields' => array(
            array(
                'type' => 'notice',
                'style' => 'warning',
                'content' => esc_html__('You can save your current options. Download a Backup and Import.', 'INDUSTRY_DIVE'),
            ),
            array(
                'type' => 'backup',
                'title' => esc_html__('Backup & Import', 'INDUSTRY_DIVE')
            )
        )
    ));
}
