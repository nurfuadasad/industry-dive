<?php
/**
 * Post Meta Functions
 * @package INDUSTRY_DIVE
 * @since 1.0.0
 */

$INDUSTRY_DIVE = INDUSTRY_DIVE();
$post_meta = INDUSTRY_DIVE_Group_Fields_Value::post_meta('blog_post');
?>
<div class="post-meta-wrap">
    <ul class="post-meta">
        <?php if ($post_meta['posted_by']): ?>
            <li><?php $INDUSTRY_DIVE->posted_by(); ?></li>
        <?php endif; ?>
        <li>
            <?php
            $INDUSTRY_DIVE->posted_on();
            ?>
        </li>
        <li>
            <?php
            $INDUSTRY_DIVE->comment_count();
            ?>
        </li>
    </ul>
    <?php

    if (shortcode_exists('INDUSTRY_DIVE_post_share') && $post_meta['posted_share']) {
        echo do_shortcode('[INDUSTRY_DIVE_post_share]');
    }
    ?>
</div>