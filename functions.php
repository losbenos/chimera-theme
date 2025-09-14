<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'CHIMERA_THEME_VERSION', wp_get_theme()->get( 'Version' ) );




if ( ! function_exists( 'chimera_master_support' ) ) :
	function chimera_master_support()  {

		// Adding support for core block visual styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( get_parent_theme_file_uri( 'editor-style.css' ));

		//remove core block patterns
		remove_theme_support( 'core-block-patterns' );

		//add support for classic menus
		add_theme_support( 'menus' );

		//responsive iframes
		add_theme_support( 'responsive-embeds' );

		add_theme_support( 'post-formats',
			array(
				'aside',
				'audio',
				'chat',
				'gallery',
				'image',
				'link',
				'quote',
				'status',
				'video'
			)
		);
		//reinstate the customizer (useful for some woo setings)
		//add_action( 'customize_register', '__return_true' );
	}
	add_action( 'after_setup_theme', 'chimera_master_support' );
endif;





//Enqueue scripts and styles.
function chimera_master_scripts() {
	// Enqueue theme stylesheet.
	wp_register_style( 'chimera-master-style', get_template_directory_uri() . '/style.css',	array(), CHIMERA_THEME_VERSION );
	wp_enqueue_style( 'chimera-master-style' );
	wp_register_script( 'chimera-scripts', get_template_directory_uri() . '/assets/js/chimera.js', array(), CHIMERA_THEME_VERSION, true );
	wp_enqueue_script( 'chimera-scripts' );
}
add_action( 'wp_enqueue_scripts', 'chimera_master_scripts' );




//Register block styles.
function chimera_register_block_styles() {

	$block_styles = array(
		'core/columns' => array(
			'reverse-on-desktop' => __( 'Reverse on desktop', 'chimera' ),
		),
	);

	foreach ( $block_styles as $block => $styles ) {
		foreach ( $styles as $style_name => $style_label ) {
			register_block_style(
				$block,
				array(
					'name'  => $style_name,
					'label' => $style_label,
				)
			);
		}
	}
}
add_action( 'init', 'chimera_register_block_styles' );



//Register block variations.
//@see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-variations/
function chimera_register_block_variation() {
	wp_enqueue_script(
		'chimera-block-variations',
		get_template_directory_uri() . '/assets/js/block-variation.js',
		array( 'wp-blocks' ),
		CHIMERA_THEME_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'chimera_register_block_variation' );




//Load custom block styles only when the block is used
function chimera_enqueue_custom_block_styles() {

	// Scan our styles folder to locate block styles
	$files = glob( get_template_directory() . '/assets/styles/*.css' );

	foreach ( $files as $file ) {

		// Get the filename and core block name
		$filename   = basename( $file, '.css' );
		$block_name = str_replace( 'core-', 'core/', $filename );

		wp_enqueue_block_style(
			$block_name,
			array(
				'handle' => "chimera-block-{$filename}",
				'src'    => get_theme_file_uri( "assets/styles/{$filename}.css" ),
				'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
				'path'   => get_theme_file_path( "assets/styles/{$filename}.css" ),
			)
		);
	}
}
add_action( 'init', 'chimera_enqueue_custom_block_styles' );