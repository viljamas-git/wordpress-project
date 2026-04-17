<?php


function nm_register_project_cpt() {
	register_post_type(
		'project',
		array(
			'labels'       => array(
				'name'          => __( 'Projects', 'netmatters-challenge-theme' ),
				'singular_name' => __( 'Project', 'netmatters-challenge-theme' ),
			),
			'public'       => true,
			'has_archive'  => true,
			'rewrite'      => array( 'slug' => 'projects' ),
			'menu_icon'    => 'dashicons-portfolio',
			'supports'     => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
			'show_in_rest' => true,
		)
	);
}
add_action( 'init', 'nm_register_project_cpt' );

function nm_register_project_taxonomy() {
	register_taxonomy(
		'project-type',
		array( 'project' ),
		array(
			'labels'       => array(
				'name'          => __( 'Project Types', 'netmatters-challenge-theme' ),
				'singular_name' => __( 'Project Type', 'netmatters-challenge-theme' ),
			),
			'public'       => true,
			'hierarchical' => true,
			'rewrite'      => array( 'slug' => 'project-type' ),
			'show_in_rest' => true,
		)
	);
}
add_action( 'init', 'nm_register_project_taxonomy' );


function nm_after_switch_theme() {
	nm_register_project_cpt();
	nm_register_project_taxonomy();
	flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'nm_after_switch_theme' );
