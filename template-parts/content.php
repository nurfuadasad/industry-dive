<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package INDUSTRY_DIVE
 */

$INDUSTRY_DIVE = INDUSTRY_DIVE();
$post_meta = Industry_Dive_Group_Fields_Value::post_meta('blog_post');
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
            ?>
            <div class="post-mete-bottom">
                                    <span class="read-min"><?php echo INDUSTRY_DIVE()->estimate_reading_time_in_minutes(get_the_content(), 200, true);
                                        esc_html_e(' Min Read', 'industry_dive'); ?></span>|
                <a class="read-btn" href="<?php the_permalink(); ?>"><?php esc_html_e('Read More', 'industry_dive'); ?>
                    <span class="dashicons dashicons-arrow-right-alt"></span></a>
            </div>
            <?php
        }
        ?>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->
