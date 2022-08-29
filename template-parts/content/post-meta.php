<?php
/**
 * Post Meta Functions
 * @package yotta
 * @since 1.0.0
 */

$yotta = yotta();
$post_meta = Yotta_Group_Fields_Value::post_meta('blog_post');
?>
<div class="post-meta-wrap">
    <ul class="post-meta">
        <?php if ($post_meta['posted_by']): ?>
            <li><?php $yotta->posted_by(); ?></li>
        <?php endif; ?>
        <li>
            <?php
            $yotta->posted_on();
            ?>
        </li>
        <li>
            <?php
            $yotta->comment_count();
            ?>
        </li>
    </ul>
    <?php

    if (shortcode_exists('yotta_post_share') && $post_meta['posted_share']) {
        echo do_shortcode('[yotta_post_share]');
    }
    ?>
</div>