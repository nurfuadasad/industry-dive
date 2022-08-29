<?php
/**
 * Footer Style 01
 * @package yotta
 * @since 1.0.0
 */

$copyright_text = !empty(cs_get_option('copyright_text')) ? cs_get_option('copyright_text') : esc_html__('Copyright 2022 Yotta. Designed By ', 'yotta') . '<a href="' . esc_url('https://themeforest.net/user/themeim/portfolio') . '">' . esc_html__(' Themeim', 'yotta') . '</a>';
$copyright_text = str_replace('{copy}', '&copy;', $copyright_text);
$copyright_text = str_replace('{year}', date('Y'), $copyright_text);
$socialIcon = cs_get_option('footer_social_repeater');
$footer_menu = cs_get_option('footer_menu_repeater');
$footer_top_widget = cs_get_option('footer_two_top_repeater');
$footer_shortcodes = cs_get_option('footer_two_shortcode');
?>
<!-- footer area start -->

<footer class="footer-section padding-top-120">
    <div class="footer-bg">
        <?php
        $footer_bg_image = cs_get_option('footer_bg_image');
        if (!empty($footer_bg_image['id'])) {
            printf('<img src="%1$s" alt="%2$s"/>', $footer_bg_image['url'], $footer_bg_image['alt']);
        }
        ?>
    </div>
    <div class="footer-element">
        <?php
        $footer_animation_image = cs_get_option('footer_animation_image');
        if (!empty($footer_animation_image['id'])) {
            printf('<img src="%1$s" alt="%2$s"/>', $footer_animation_image['url'], $footer_animation_image['alt']);
        }
        ?>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12">
                <div class="footer-top">
                    <div class="footer-logo">
                        <?php
                        $footer_two_logo = cs_get_option('footer_two_logo');
                        if (has_custom_logo() && empty($footer_two_logo['id'])) {
                            the_custom_logo();
                        } elseif (!empty($footer_two_logo['id'])) {
                            printf('<a class="site-logo" href="%1$s"><img src="%2$s" alt="%3$s"/></a>', esc_url(get_home_url()), $footer_two_logo['url'], $footer_two_logo['alt']);
                        } else {
                            printf('<a class="site-title" href="%1$s">%2$s</a>', esc_url(get_home_url()), esc_html(get_bloginfo('title')));
                        }
                        ?>
                    </div>
                    <ul class="footer-social">
                        <?php
                        if (!empty($socialIcon)) :
                            foreach ($socialIcon as $icon) :
                                echo '<li><a href=" ' . $icon['footer_social_icon_item_url'] . ' ">
                                                <i class="' . $icon['footer_social_icon_item_icon'] . '"></i></a></li>';
                            endforeach;
                        endif;
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="footer-widget">
                    <?php echo do_shortcode($footer_shortcodes); ?>
                    <ul class="footer-list">
                        <?php
                        if (!empty($footer_menu)) :
                            foreach ($footer_menu as $menu) :
                                echo '<li><a href=" ' . $menu['footer_menuitem_url'] . ' ">
                                                ' . $menu['footer_menuitem_title'] . '</a></li>';
                            endforeach;
                        endif;
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-8 text-center">
                <div class="copyright-area">
                    <p>
                        <?php
                        echo wp_kses($copyright_text, yotta()->kses_allowed_html(array('a')));
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->