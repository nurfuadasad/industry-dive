<?php
/**
 * Footer Style 02
 * @package yotta
 * @since 1.0.0
 */

$copyright_text = !empty(cs_get_option('copyright_text')) ? cs_get_option('copyright_text') : esc_html__('Copyright 2022 Yotta. Designed By', 'yotta') . '<a href="' . esc_url('https://themeforest.net/user/themeim') . '">' . esc_html__(' ThemeIM', 'yotta') . '</a>';
$copyright_text = str_replace('{copy}', '&copy;', $copyright_text);
$copyright_text = str_replace('{year}', date('Y'), $copyright_text);
?>
<!-- footer area start -->
<div class="footer-style-02">
    <footer class="footer-wrap">
        <div class="footer-widget-content">
        <div class="container">
            <div class="row">
                <?php dynamic_sidebar('footer-widget-two'); ?>
            </div>
        </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-wrap-inner">
                            <?php
                            echo wp_kses($copyright_text, yotta()->kses_allowed_html(array('a')));
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- footer area end -->