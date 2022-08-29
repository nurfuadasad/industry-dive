<?php
/**
 * Single Deal Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package yotta
 */

get_header();
$page_layout_meta = Yotta_Group_Fields_Value::page_layout_options('training_single');
?>
    <div id="primary" class="training-content-area training-details-page">
        <main id="main" class="site-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <?php
                        while ( have_posts() ) :
                            the_post();
                            get_template_part( 'template-parts/content', 'training-single' );
                            $training_details_comment = cs_get_option('training_details_comment_enable');
                            if (!empty($training_details_comment)){
                                // If comments are open or we have at least one comment, load up the comment template.
                                if ( comments_open() || get_comments_number() || get_option( 'thread_comments' )) :
                                    comments_template();
                                endif;
                            }
                        endwhile; // End of the loop.
                        ?>
                    </div>
                </div>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->
<?php
get_footer();
