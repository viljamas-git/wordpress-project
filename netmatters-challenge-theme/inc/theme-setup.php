<?php


function nm_theme_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'elementor' );

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'netmatters-challenge-theme' ),
			'footer'  => __( 'Footer Menu', 'netmatters-challenge-theme' ),
		)
	);
}
add_action( 'after_setup_theme', 'nm_theme_setup' );


function nm_enable_elementor_support() {
	add_post_type_support( 'page', 'elementor' );
	add_post_type_support( 'project', 'elementor' );
}
add_action( 'init', 'nm_enable_elementor_support' );
