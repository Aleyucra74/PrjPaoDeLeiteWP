<?php
/**
 * Customizer functionality
 *
 * @package Foodoholic
 */

/**
 * Sets up the WordPress core custom header and custom background features.
 *
 * @since Foodoholic 1.0
 *
 * @see foodoholic_header_style()
 */
function foodoholic_custom_header() {
	/**
	 * Filter the arguments used when adding 'custom-header' support in Foodie World.
	 *
	 * @since Foodoholic 1.0
	 *
	 * @param array $args {
	 *     An array of custom-header support arguments.
	 *
	 *     @type string $default-text-color Default color of the header text.
	 *     @type int      $width            Width in pixels of the custom header image. Default 1200.
	 *     @type int      $height           Height in pixels of the custom header image. Default 280.
	 *     @type bool     $flex-height      Whether to allow flexible-height header images. Default true.
	 *     @type callable $wp-head-callback Callback function used to style the header image and text
	 *                                      displayed on the blog.
	 * }
	 */
	add_theme_support( 'custom-header', apply_filters( 'foodoholic_custom_header_args', array(
		'default-image'      	 => get_parent_theme_file_uri( '/assets/images/header.jpg' ),
		'default-text-color'     => '#000000',
		'width'                  => 1920,
		'height'                 => 540,
		'flex-height'            => true,
		'flex-height'            => true,
		'wp-head-callback'       => 'foodoholic_header_style',
		'video'                  => true,
	) ) );

	$default_headers_args = array(
		'main' => array(
			'thumbnail_url' => get_stylesheet_directory_uri() . '/assets/images/header-thumb-275x77.jpg',
			'url'           => get_stylesheet_directory_uri() . '/assets/images/header.jpg',
		),
	);

	register_default_headers( $default_headers_args );
}
add_action( 'after_setup_theme', 'foodoholic_custom_header' );
