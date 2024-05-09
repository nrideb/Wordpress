<?php
/**
 * Tropical Island functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */

function tropical_island_enqueue_theme_styles() {
   //Register child theme's styles
   wp_enqueue_style('tropical-island-styles', get_stylesheet_directory_uri() .'/style.css', array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'tropical_island_enqueue_theme_styles' );

/**
 * Registers block patterns categories, and type.
 */

 function tropical_island_register_block_patterns() {
	$block_pattern_categories = array(
		'tropical-island' => array( 'label' => esc_html__( 'Tropical Island', 'tropical-island' ) ),
	);

	$block_pattern_categories = apply_filters( 'tropical_island_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'tropical_island_register_block_patterns', 9 );

/** Add default theme logo if no logo is specified */
function tropical_island_get_custom_logo_callback( $html ) {
	if ( has_custom_logo() ) {
		return $html;
	} else {
		return '<a href="' . esc_attr( home_url() ) . '"><img src="' . esc_url ( get_stylesheet_directory_uri() . '/assets/images/palm-logo.png' ) . '" alt="' . esc_attr__( 'theme default logo', 'tropical-island' ) . '"></a>';
	}
}

add_filter( 'get_custom_logo', 'tropical_island_get_custom_logo_callback', 99 );
