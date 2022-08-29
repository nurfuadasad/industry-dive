<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package yotta
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php
    // You can start editing here -- including this comment!
    if (have_comments()) :
        ?>
        <h2 class="comments-title">
            <?php
            $yotta_comment_count = get_comments_number();
            if ('1' === $yotta_comment_count) {
                printf(
                /* translators: 1: title. */
                    esc_html__('1 Comment', 'yotta')

                );
            } else {
                printf( // WPCS: XSS OK.
                /* translators: 1: comment count number, 2: title. */
                    esc_html(_nx('%1$s Comments &ldquo;%2$s&rdquo;', '%1$s Comments ', $yotta_comment_count, 'comments title', 'yotta')),
                    number_format_i18n($yotta_comment_count)
                );
            }
            ?>
        </h2><!-- .comments-title -->

        <div class="blog-comment-navigation">
            <?php the_comments_navigation(); ?>
        </div>
        <div class="clearfix"></div>
        <ul class="comment-list">
            <?php
            wp_list_comments(array(
                'style' => 'ul',
                'callback' => 'yotta_comment_modification',
                'short_ping' => true,
            ));
            ?>
        </ul><!-- .comment-list -->
        <div class="blog-comment-navigation">
            <?php the_comments_navigation(); ?>
        </div>
        <?php
        // If comments are closed and there are comments, let's leave a little note, shall we?
        if (!comments_open()) :
            ?>
            <p class="no-comments"><?php esc_html_e('Comments are closed.', 'yotta'); ?></p>
        <?php
        endif;

    endif; // Check for have_comments().
    $fields = array(
        'author' => ' <div class="form-group">
                        <input type="text" id="author" name="author" tabindex="1" value="' . esc_attr($commenter['comment_author']) . '" class="form-control" placeholder="' . esc_attr__('Name', 'yotta') . '">
                    </div>',
        'email' => ' <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" value="' . esc_attr($commenter['comment_author_email']) . '" tabindex="2" placeholder="' . esc_attr__('Email', 'yotta') . '">
                    </div>',
        'URL' => '<div class="form-group">
                        <input type="url" id="url" name="url" value="' . esc_url($commenter['comment_author_url']) . '" class="form-control" tabindex="3" placeholder="' . esc_attr__('Website', 'yotta') . '">
                    </div>'
    );
    comment_form(array(
        'fields' => apply_filters('comment_form_default_fields', $fields),
        'comment_notes_before' => '',
        'comment_notes_after' => '',
        'title_reply' => esc_html__('Leave A Comment', 'yotta'),
        'title_reply_to' => esc_html__('Leave A Reply To %s', 'yotta'),
        'id_form' => 'commentform',
        'id_submit' => 'submit',
        'cancel_reply_link' => '<i class="fas fa-times" aria-hidden="true"></i>',
        'class_submit' => 'submit-btn',
        'label_submit' => esc_html__('Post Comment', 'yotta'),
        'comment_field' => '<div class="form-group textarea">
                                <textarea name="comment" id="comment" class="form-control" placeholder="' . esc_attr__('Comment', 'yotta') . '" cols="30" rows="10"></textarea>
                            </div>'
    ));
    ?>

</div><!-- #comments -->
