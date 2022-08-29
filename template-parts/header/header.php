<?php
/**
 * Header Style
 * @package INDUSTRY_DIVE
 * @since 1.0.0
 */

?>
<div class="nav-bar-style-01">
    <div class="nav-top-bar">
        <div class="custom-container">
            <div class="nav-top-wrap">
                <div class="industry-search-area">
                    <form action="<?php echo esc_url(home_url('/')) ?>" class="search-form">
                        <div class="form-group">
                            <input type="text" name="s" class="form-control"
                                   placeholder="<?php echo esc_attr__('Search', 'INDUSTRY_DIVE'); ?>">
                        </div>
                        <button class="submit-btn" type="submit"><span class="dashicons dashicons-search"></span>
                        </button>
                    </form>
                </div>
                <div class="logo-wrapper">
                    <?php
                    printf('<a class="site-title" href="%1$s">%2$s</a><p>%3$s</p>', esc_url(get_home_url()), esc_html(get_bloginfo('title')), esc_html(get_bloginfo('description')));
                    ?>
                </div>
                <div class="nav-right-content">
                    <div id="newsletter"  class="btn-wrap">
                        <a href="<?php echo esc_url(cs_get_option('header_five_navbar_url')) ?>"
                           class="boxed-btn btn-rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.15 23.71">

                                <g id="Layer_2" data-name="Layer 2">
                                    <g id="Layer_1-2" data-name="Layer 1">
                                        <path class="cls-1"
                                              d="M22.65,22.63v-14c0-.15-.18-.33-.35-.47L18.64,5.53V2.6a.49.49,0,0,0-.48-.48H14L11.87.57a.57.57,0,0,0-.54,0L9.21,2.12H5a.48.48,0,0,0-.48.48V5.5L.86,8.19a.63.63,0,0,0-.36.46V22.73a.49.49,0,0,0,.44.48H22.16A.51.51,0,0,0,22.65,22.63ZM21.73,9.51V21.76l-8-6.4Zm-.36-.85-2.73,2v-4ZM11.58,1.49l.85.62H10.72l.86-.62Zm6.09,1.6v8.27L11.58,15.8l-6.1-4.44V3.09ZM1.42,9.51l8,5.85-8,6.44Zm3.14,1.18-2.8-2,2.8-2ZM2.29,22.28l7.9-6.35,1.09.79a.42.42,0,0,0,.59,0L13,15.93l8,6.35Z"/>
                                        <rect class="cls-1" x="8.34" y="5.45" width="6.53" height="0.92"/>
                                        <rect class="cls-1" x="8.34" y="8.4" width="6.53" height="0.92"/>
                                        <rect class="cls-1" x="8.34" y="11.35" width="6.53" height="0.92"/>
                                    </g>
                                </g>
                            </svg><?php echo esc_html('Subscribe'); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- support bar area end -->
    <nav class="navbar navbar-area navbar-expand-lg navigation-style-01">
        <div class="custom-container">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'menu_class' => 'navbar-nav',
                'container' => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id' => 'INDUSTRY_DIVE_main_menu'
            ));
            ?>
        </div>
    </nav>
</div>

<div class="body-overlay" id="body-overlay"></div>
<div id="newsletter-popup" class="newsletter-popup">
    <?php
    echo do_shortcode('[mc4wp_form id="13"]');
    ?>
</div>