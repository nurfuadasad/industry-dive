<?php
/**
 * Template part for displaying single package post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package yotta
 */

$yotta = yotta();
$post_single_meta = Yotta_Group_Fields_Value::post_meta('training_single_post');
$event_single_meta_data = get_post_meta(get_the_ID(), 'yotta_event_options', true);
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('event-details-item'); ?>>

    <div class="entry-content">
        <?php
        if (has_post_thumbnail()) :
            get_template_part('template-parts/content/thumbnail-classic');
        endif;
        ?>
        <ul class="single-meta-item-wrap">
            <li class="event-widget-box-item">
                <div class="event-widget-box-icon">
                    <i class="flaticon-calendar"></i>
                </div>
                <div class="event-widget-box-content">
                    <h5 class="title"><?php echo esc_html__('Event Date:', 'yotta') ?></h5>
                    <span class="post-date"><?php echo esc_html__($event_single_meta_data['event_date_option'], 'yotta') ?> <?php echo esc_html__($event_single_meta_data['event_month_option'], 'yotta') ?></span>
                </div>
            </li>
            <li class="event-widget-box-item">
                <div class="event-widget-box-icon">
                    <i class="flaticon-stopwatch"></i>
                </div>
                <div class="event-widget-box-content">
                    <h5 class="title"><?php echo esc_html__('Event Time:', 'yotta') ?></h5>
                    <span class="post-date"><?php echo esc_html__($event_single_meta_data['event_time_option'], 'yotta') ?></span>
                </div>
            </li>
            <li class="event-widget-box-item">
                <div class="event-widget-box-icon">
                    <i class="flaticon-maps-and-flags"></i>
                </div>
                <div class="event-widget-box-content">
                    <h5 class="title"><?php echo esc_html__('Location:', 'yotta') ?></h5>
                    <span class="post-date"><?php echo esc_html__($event_single_meta_data['event_location_option'], 'yotta') ?></span>
                </div>
            </li>
        </ul>
        <?php
        the_content();
        $yotta->link_pages();
        ?>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->