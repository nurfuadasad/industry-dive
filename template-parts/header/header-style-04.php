<?php
/**
 * Header Style 03
 * @package yotta
 * @since 1.0.0
 */

?>

<div class="header-style-04">
    <?php
    $has_top_bar = 'no-topbar';
    if (!empty(cs_get_option('header_five_top_bar_shortcode'))):
    $has_top_bar = 'has-topbar';
    ?>
    <div class="topbar-area style-01">
        <div class="container custom-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="topbar-inner">
                        <?php
                        $shortcodes = cs_get_option('header_five_top_bar_shortcode');
                        foreach ($shortcodes as $shortcode) {
                            printf('<div class="%1$s">%2$s</div>', esc_attr($shortcode['position']), do_shortcode($shortcode['shortcode']));
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <!-- support bar area end -->
    <nav class="navbar navbar-area navbar-expand-lg navigation-style-01 <?php echo esc_attr($has_top_bar); ?>">
        <div class="container custom-container">
            <div class="responsive-mobile-menu">
                <div class="logo-wrapper">
                    <?php
                    $header_five_logo = cs_get_option('header_five_logo');
                    if (has_custom_logo() && empty($header_five_logo['id'])) {
                        the_custom_logo();
                    } elseif (!empty($header_five_logo['id'])) {
                        printf('<a class="site-logo" href="%1$s"><img src="%2$s" alt="%3$s"/></a>', esc_url(get_home_url()), $header_five_logo['url'], $header_five_logo['alt']);
                    } else {
                        printf('<a class="site-title" href="%1$s">%2$s</a>', esc_url(get_home_url()), esc_html(get_bloginfo('title')));
                    }
                    ?>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#yotta_main_menu"
                        aria-expanded="false" aria-label="<?php esc_attr__('Toggle navigation','yotta')?>">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'menu_class' => 'navbar-nav',
                'container' => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id' => 'yotta_main_menu'
            ));
            ?>
            <div class="nav-right-content">
                <div class="btn-wrap">
                    <a href="<?php echo esc_url(cs_get_option('header_five_navbar_url')) ?>"
                       class="boxed-btn btn-rounded"><i
                                class="flaticon-black-plane"></i><?php echo esc_html(cs_get_option('header_five_navbar_title')); ?>
                    </a>
                </div>
            </div>
        </div>
    </nav>
</div>