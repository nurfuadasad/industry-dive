<?php
/**
 * Single Event Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package yotta
 */

get_header();
$page_layout_meta = Yotta_Group_Fields_Value::page_layout_options('event_single');
?>
    <div id="primary" class="event-content-area event-details-page padding-120 <?php echo esc_attr($full_width_class); ?>">
        <main id="main" class="site-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <?php
                        while (have_posts()) :
                            the_post();
                            get_template_part('template-parts/content', 'event-single');
               
                                // If comments are open or we have at least one comment, load up the comment template.
                                if (comments_open() || get_comments_number() || get_option('thread_comments')) :
                                    comments_template();
                                endif;

                        endwhile; // End of the loop.
                        ?>
                    </div>
                </div>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->
<?php
get_footer();
