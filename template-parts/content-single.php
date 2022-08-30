<?php
/**
 * Template part for displaying single post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package INDUSTRY_DIVE
 */

$INDUSTRY_DIVE = INDUSTRY_DIVE();
$post_meta = get_post_meta(get_the_ID(), 'INDUSTRY_DIVE_post_gallery_options', true);
$post_meta_gallery = isset($post_meta['gallery_images']) && !empty($post_meta['gallery_images']) ? $post_meta['gallery_images'] : '';
$post_single_meta = Industry_Dive_Group_Fields_Value::post_meta('blog_single_post');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blog-single-content-wrap'); ?>>
    <?php
    if (has_post_thumbnail() || !empty($post_meta_gallery)):
        $get_post_format = get_post_format();
        if ('video' == $get_post_format || 'gallery' == $get_post_format) {
            get_template_part('template-parts/content/thumbnail', $get_post_format);
        } else {
            get_template_part('template-parts/content/thumbnail');
        }
    endif;
    ?>
    <div class="entry-content">
        <?php if ('post' == get_post_type()): ?>
            <?php if ($post_single_meta['posted_category']): ?>
                <div class="cats"><?php the_category(' ') ?></div>
            <?php endif; ?>
            <ul class="post-meta">
                <?php if ($post_single_meta['posted_by']): ?>
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
        <?php endif;
        the_content();
        $INDUSTRY_DIVE->link_pages();
        ?>
    </div>
    <?php if ('post' == get_post_type() && ((has_tag() && $post_single_meta['posted_tag']) || (shortcode_exists('INDUSTRY_DIVE_post_share') && $post_single_meta['posted_share']))): ?>
        <div class="blog-details-footer">
            <?php if (has_tag() && $post_single_meta['posted_tag']): ?>
                <div class="left">
                    <h3 class="title"><?php echo esc_html__('Tags:', 'industry_dive') ?></h3>
                    <?php $INDUSTRY_DIVE->posted_tag(); ?>
                </div>
            <?php endif; ?>
            <?php if (shortcode_exists('INDUSTRY_DIVE_post_share') && $post_single_meta['posted_share']) : ?>
                <div class="right">
                    <h3 class="title"><?php echo esc_html__('Social Share:', 'industry_dive') ?></h3>
                    <?php
                    if (shortcode_exists('INDUSTRY_DIVE_post_share') && $post_single_meta['posted_share']) {
                        echo do_shortcode('[INDUSTRY_DIVE_post_share]');
                    }
                    ?>
                </div>
            <?php endif; ?>
        </div>
    <?php endif;

    echo wp_kses($INDUSTRY_DIVE->post_navigation(), $INDUSTRY_DIVE->kses_allowed_html('all'));

    $INDUSTRY_DIVE->get_related_post([
        'post_type' => 'post',
        'taxonomy' => 'category',
        'exclude_id' => get_the_ID(),
        'posts_per_page' => 2
    ]);
    ?>

</article><!-- #post-<?php the_ID(); ?> -->
