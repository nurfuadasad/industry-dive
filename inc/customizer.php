<?php
/**
 * Theme Customizer
 * @package INDUSTRY_DIVE
 * @since 1.0.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 */
function INDUSTRY_DIVE_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'INDUSTRY_DIVE_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'INDUSTRY_DIVE_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'INDUSTRY_DIVE_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @package INDUSTRY_DIVE
 */
function INDUSTRY_DIVE_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @package INDUSTRY_DIVE
 */
function INDUSTRY_DIVE_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function INDUSTRY_DIVE_customize_preview_js() {
	wp_enqueue_script( 'INDUSTRY_DIVE-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'INDUSTRY_DIVE_customize_preview_js' );
