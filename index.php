<?php
/**
 * The Main Template File
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package INDUSTRY_DIVE
 */

get_header();
get_template_part('template-parts/content', 'banner');
get_template_part('template-parts/content', 'featured');
get_template_part('template-parts/content', 'trand');
?>

    <div id="primary" class="content-area blog-page-content-area padding-bottom-80">
        <main id="main" class="site-main">
            <div class="custom-container">
                <h3 class="section-title">
                    <?php esc_html_e('Latest Article', 'industry_dive'); ?>
                </h3>
                <?php
                if (have_posts()) :

                /* Start the Loop */
                echo '<div class="more-post">';
                while (have_posts()) :
                    the_post();
                    /*
                     * Include the Post-Type-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                     */
                    get_template_part('template-parts/content', get_post_format());

                endwhile;
                ?>


            </div>
            <div class="blog-pagination">

                <?php
                global $wp_query;
                if ($wp_query->max_num_pages > 1) {
                    echo '<div class="btn-wrap desktop-center"><div class="boxed-btn  industry_loadmore">Load More</div></div>';
                }
                ?>
            </div>
            <?php else :

                get_template_part('template-parts/content', 'none');

            endif;
            ?>
    </div>
    </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
