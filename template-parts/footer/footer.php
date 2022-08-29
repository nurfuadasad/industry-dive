<?php
/**
 * Theme Default Footer
 * @package INDUSTRY_DIVE
 * @since 1.0.0
 */

$copyright_text = !empty(cs_get_option('copyright_text')) ? cs_get_option('copyright_text'): esc_html__('Copyright 2022 INDUSTRY_DIVE. Designed By ','INDUSTRY_DIVE').' <a href="'.esc_url('https://themeforest.net/user/themeim/portfolio').'">'.esc_html__('ThemeIM','INDUSTRY_DIVE').'</a>';
$copyright_text = str_replace('{copy}','&copy;',$copyright_text);
$copyright_text = str_replace('{year}',date('Y'),$copyright_text);
?>
<div class="footer-style">
    <footer class="footer-wrap">
        <?php get_template_part('template-parts/content/footer-widget'); ?>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="copyright-content">
                            <div class="copyright-text">
                                <?php
                                echo wp_kses($copyright_text, INDUSTRY_DIVE()->kses_allowed_html(array('a')));
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
