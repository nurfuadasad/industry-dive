<?php
/**
 * Post Thumbnail 
 * @package INDUSTRY_DIVE
 * @since 1.0.0
 */
?>

 <div class="thumbnail">
    <?php
    if (has_post_thumbnail() && get_post_type() == 'post') {
        INDUSTRY_DIVE()->post_thumbnail('post-thumbnail');
    }
    ?>
</div>
