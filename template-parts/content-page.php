<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package INDUSTRY_DIVE
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php
		the_content();

		INDUSTRY_DIVE()->link_pages();
		?>
	</div><!-- .entry-content -->
</div><!-- #post-<?php the_ID(); ?> -->
