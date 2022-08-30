<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package INDUSTRY_DIVE
 */


//setup query
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'order' => 'ASC',
    'orderby' => 'date',
    'post_status' => 'publish',
    'ignore_sticky_posts' => 1,
);

if (!empty($category)) {
    $args['tax_query'] = array(
        array(
            'taxonomy' => 'category',
            'field' => 'term_id',
            'terms' => $category
        )
    );
}
$post_data = new \WP_Query($args);
?>
    <div class="blog-grid-wrapper">
        <div class="custom-container">
            <h3 class="section-title">
                <?php esc_html_e('Trading Now', 'industry_dive'); ?>
            </h3>
            <div class="blog-standard-item-trand">
                <?php
                while ($post_data->have_posts()):$post_data->the_post();
                    $img_id = get_post_thumbnail_id(get_the_ID()) ? get_post_thumbnail_id(get_the_ID()) : false;
                    $img_url_val = $img_id ? wp_get_attachment_image_src($img_id, 'industry_dive_full', false) : '';
                    $img_url = is_array($img_url_val) && !empty($img_url_val) ? $img_url_val[0] : '';
                    $img_alt = get_post_meta($img_id, '_wp_attachment_image_alt', true);

                    ?>
                    <div class="blog-standard-item-01 margin-bottom-30">
                        <div class="content">
                            <div class="thumbnail">
                                <img src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr($img_alt); ?>">
                                <div class="thumb-content style-02">
                                    <?php
                                    echo '<div class="cats"><span>';
                                    esc_html_e('Featured', 'industry_dive');
                                    echo '</span>';
                                    the_category(', ');
                                    echo '</div>';
                                    ?>
                                    <h4 class="title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?>.</a>
                                    </h4>
                                    <div class="post-mete-bottom">
                                    <span class="read-min"><?php echo INDUSTRY_DIVE()->estimate_reading_time_in_minutes(get_the_content(), 200, true);
                                        esc_html_e(' Min Read', 'industry_dive'); ?></span>|
                                        <a class="read-btn"
                                           href="<?php the_permalink(); ?>"><?php esc_html_e('Read More', 'industry_dive'); ?>
                                            <span class="dashicons dashicons-arrow-right-alt"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                endwhile;
                wp_reset_query();
                ?>
            </div>
        </div>
    </div>

<?php
?>