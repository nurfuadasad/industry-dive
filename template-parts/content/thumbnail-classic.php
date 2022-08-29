<?php
/**
 * Post Thumbnail Functions
 * @package INDUSTRY_DIVE
 * @since 1.0.0
 */

$INDUSTRY_DIVE = INDUSTRY_DIVE();
if (has_post_thumbnail()): ?>
    <div class="thumbnail">
        <div class="thumb-content style-02">
            <div class="cats"><span><?php esc_html_e('Latest Article', 'INDUSTRY_DIVE'); ?></span><?php the_category(' ') ?>
            </div>
            <h2 class="title"><a
                        href="<?php echo esc_url(get_permalink()) ?>"><?php echo esc_html__(the_title(), 'INDUSTRY_DIVE') ?></a>
            </h2>
            <div class="post-mete-bottom">
                                    <span class="read-min"><?php echo INDUSTRY_DIVE()->estimate_reading_time_in_minutes(get_the_content(), 200, true);
                                        esc_html_e(' Min Read', 'INDUSTRY_DIVE'); ?></span>|
                <a class="read-btn" href="<?php the_permalink(); ?>"><?php esc_html_e('Read More', 'INDUSTRY_DIVE'); ?>
                    <span class="dashicons dashicons-arrow-right-alt"></span></a>
            </div>
        </div>
        <?php
        $INDUSTRY_DIVE->post_thumbnail('post-thumbnail'); ?>
    </div>
<?php endif; ?>