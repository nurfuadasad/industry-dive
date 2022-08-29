<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package INDUSTRY_DIVE
 */

$INDUSTRY_DIVE = INDUSTRY_DIVE();
$post_meta = INDUSTRY_DIVE_Group_Fields_Value::post_meta('blog_post');
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('blog-standard-item-01'); ?>>
    <?php
    get_template_part('template-parts/content/thumbnail-classic');
    ?>
    <div class="content">
        <?php
        if (!has_post_thumbnail()) {
            echo '<div class="cats">';
            the_category(', ');
            echo '</div>';

            the_title('<h2 class="title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
        }
        get_template_part('template-parts/content/post-meta');
        get_template_part('template-parts/content/post-excerpt');
        ?>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->
