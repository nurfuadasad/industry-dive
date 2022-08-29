<?php
/**
 * Template part for displaying single training post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package yotta
 */

$yotta = yotta();
$post_single_meta = Yotta_Group_Fields_Value::post_meta('training_single_post');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('training-details-item'); ?>>
    <div class="row">
        <div class="col-lg-12">
            <div class="entry-content">
                <?php
                the_content();
                $yotta->link_pages();
                ?>
            </div>
        </div>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->