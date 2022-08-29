<?php
/**
 * Header Style
 * @package INDUSTRY_DIVE
 * @since 1.0.0
 */

?>
<div class="nav-top-bar">
    <div class="custom-container">
        <div class="industry-search-area">
            <form action="<?php echo esc_url(home_url('/')) ?>" class="search-form">
                <div class="form-group">
                    <input type="text" name="s" class="form-control"
                           placeholder="<?php echo esc_attr__('Search', 'INDUSTRY_DIVE'); ?>">
                </div>
                <button class="submit-btn" type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <div class="logo-wrapper">
            <?php
            printf('<a class="site-title" href="%1$s">%2$s %3$s</a>', esc_url(get_home_url()), esc_html(get_bloginfo('title')), esc_html(get_bloginfo('description')));
            ?>
        </div>
        <div class="nav-right-content">
            <div class="btn-wrap">
                <a href="<?php echo esc_url(cs_get_option('header_five_navbar_url')) ?>"
                   class="boxed-btn btn-rounded"><i
                            class="flaticon-black-plane"></i><?php echo esc_html('Subscribe'); ?>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- support bar area end -->
<nav class="navbar navbar-area navbar-expand-lg navigation-style-01">
    <div class="custom-container">
        <div class="responsive-mobile-menu">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#INDUSTRY_DIVE_main_menu"
                    aria-expanded="false" aria-label="<?php esc_attr__('Toggle navigation', 'INDUSTRY_DIVE') ?>">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
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