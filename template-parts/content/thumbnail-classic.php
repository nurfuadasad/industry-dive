<?php
/**
 * Post Thumbnail Functions
 * @package INDUSTRY_DIVE
 * @since 1.0.0
 */

$INDUSTRY_DIVE = INDUSTRY_DIVE();
if (has_post_thumbnail()): ?>
    <div class="thumbnail">
        <div class="thumb-content">
            <div class="cats"><?php the_category(' ') ?></div>
            <h2 class="title"><a
                        href="<?php echo esc_url(get_permalink()) ?>"><?php echo esc_html__(the_title(), 'INDUSTRY_DIVE') ?></a>
            </h2>
        </div>
        <?php
        $INDUSTRY_DIVE->post_thumbnail('post-thumbnail'); ?>
    </div>
<?php endif; ?>