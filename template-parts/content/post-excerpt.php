<?php
/**
 * Theme Post excerpt Template
 * @package INDUSTRY_DIVE
 * @since 1.0.0
 */

$INDUSTRY_DIVE = INDUSTRY_DIVE();
$post_meta = Industry_Dive_Group_Fields_Value::post_meta('blog_post');
$excerpt_length = !empty($post_meta['excerpt_length']) ? $post_meta['excerpt_length'] : 55;
$readmore_text = !empty($post_meta['readmore_btn_text']) ? $post_meta['readmore_btn_text'] : esc_html__('Read More','industry_dive');


INDUSTRY_DIVE_Excerpt($excerpt_length);
?>
<div class="blog-bottom">
	<?php
	if($post_meta['readmore_btn']){
		printf('<div class="btn-wrap"><a href="%1$s" class="btn--base button-animation gradient"><i class="fa-solid fa-plus mr-2"></i>%2$s</a></div>',esc_url(get_the_permalink()),esc_html($readmore_text));
	}
	?>
</div>