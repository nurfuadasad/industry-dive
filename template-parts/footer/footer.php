<?php
/**
 * Theme Default Footer
 * @package INDUSTRY_DIVE
 * @since 1.0.0
 */

?>
<footer class="footer-style">
    <div class="custom-container">
        <div class="footer-content-wrap">
            <div class="footer-left">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'main-menu',
                    'menu_class' => 'footer-menu',
                    'container' => 'div',
                    'container_class' => 'footer-widget',
                ));
                ?>
                <p><?php esc_html_e('Copyright @ 2022 All rights reserved', 'industry_dive'); ?></p>
            </div>
            <div class="footer-right">
                <p><?php esc_html_e('Sing up for our Newsletter', 'industry_dive'); ?></p>
                <div id="newsletter" class="btn-wrap">
                    <a href="<?php echo esc_url(cs_get_option('header_five_navbar_url')) ?>"
                       class="boxed-btn btn-rounded white">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 485.2 485.2" style="enable-background:new 0 0 485.2 485.2;"
                             xml:space="preserve">
                            <g>
                                                            <path class="st0" d="M485.2,363.9c0,10.6-3,20.5-7.8,29.2L324.2,221.7L475.8,89.1c5.9,9.4,9.4,20.3,9.4,32.2L485.2,363.9
                                    L485.2,363.9z M242.6,252.8L453.5,68.3c-8.7-4.7-18.4-7.6-28.9-7.6H60.7c-10.5,0-20.3,2.9-28.9,7.6L242.6,252.8z M301.4,241.6
                                    l-48.8,42.7c-2.9,2.5-6.4,3.7-10,3.7c-3.6,0-7.1-1.2-10-3.7l-48.8-42.7L28.7,415.2c9.3,5.8,20.2,9.3,32,9.3h363.9
                                    c11.8,0,22.7-3.5,32-9.3L301.4,241.6z M9.4,89.1C3.6,98.4,0,109.4,0,121.3v242.6c0,10.6,3,20.5,7.8,29.2L161,221.6L9.4,89.1z"/>
                                                        </g>
                            </svg>
                        <?php echo esc_html('Subscribe'); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
