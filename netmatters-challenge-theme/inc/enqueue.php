<?php



function nm_enqueue_assets() {
	$theme_dir = get_template_directory();
	$theme_uri = get_template_directory_uri();

	$style_rel_path = '/assets/css/style.min.css';
	$style_path     = $theme_dir . $style_rel_path;
	$style_uri      = $theme_uri . $style_rel_path;

	if ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) {
		$style_path = $theme_dir . '/style.css';
		$style_uri  = get_stylesheet_uri();
	} elseif ( ! file_exists( $style_path ) ) {
		$style_path = $theme_dir . '/style.css';
		$style_uri  = get_stylesheet_uri();
	}

	wp_enqueue_style(
		'nm-main',
		$style_uri,
		array(),
		filemtime( $style_path )
	);

	$script_rel_path = '/assets/js/main.min.js';
	$script_path     = $theme_dir . $script_rel_path;
	$script_uri      = $theme_uri . $script_rel_path;

	if ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) {
		$script_path = $theme_dir . '/assets/js/main.js';
		$script_uri  = $theme_uri . '/assets/js/main.js';
	} elseif ( ! file_exists( $script_path ) ) {
		$script_path = $theme_dir . '/assets/js/main.js';
		$script_uri  = $theme_uri . '/assets/js/main.js';
	}

	wp_enqueue_script(
		'nm-main-js',
		$script_uri,
		array(),
		filemtime( $script_path ),
		true
	);

	wp_script_add_data( 'nm-main-js', 'defer', true );
}
add_action( 'wp_enqueue_scripts', 'nm_enqueue_assets' );


function nm_add_defer_attribute( $tag, $handle ) {
	$defer_scripts = array( 'nm-main-js' );

	if ( in_array( $handle, $defer_scripts, true ) ) {
		if ( false === strpos( $tag, ' defer ' ) ) {
			return str_replace( ' src=', ' defer src=', $tag );
		}
	}

	return $tag;
}
add_filter( 'script_loader_tag', 'nm_add_defer_attribute', 10, 2 );
