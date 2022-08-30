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
            <div class="cats"><span><?php esc_html_e('Latest Article', 'industry_dive'); ?></span><?php the_category(' ') ?>
            </div>
            <h2 class="title"><a
                        href="<?php echo esc_url(get_permalink()) ?>"><?php echo esc_html__(the_title(), 'industry_dive') ?></a>
            </h2>
            <div class="post-mete-bottom">
                                    <span class="read-min"><?php echo INDUSTRY_DIVE()->estimate_reading_time_in_minutes(get_the_content(), 200, true);
                                        esc_html_e(' Min Read', 'industry_dive'); ?></span>|
                <a class="read-btn" href="<?php the_permalink(); ?>"><?php esc_html_e('Read More', 'industry_dive'); ?>
                    <span class="dashicons dashicons-arrow-right-alt"></span></a>
            </div>
        </div>
        <?php
        $INDUSTRY_DIVE->post_thumbnail('post-thumbnail'); ?>
    </div>
<?php endif; ?>