<?php
/**
 * Post Thumbnail Functions
 * @package yotta
 * @since 1.0.0
 */

$yotta = yotta();
if (has_post_thumbnail()): ?>
    <div class="thumbnail">
        <div class="thumb-content">
            <div class="cats"><?php the_category(' ') ?></div>
            <h2 class="title"><a
                        href="<?php echo esc_url(get_permalink()) ?>"><?php echo esc_html__(the_title(), 'yotta') ?></a>
            </h2>
        </div>
        <?php
        $yotta->post_thumbnail('post-thumbnail'); ?>
    </div>
<?php endif; ?>