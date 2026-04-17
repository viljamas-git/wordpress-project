<?php


function nm_project_schema() {
	if ( ! is_singular( 'project' ) ) {
		return;
	}

	$schema = array(
		'@context'    => 'https://schema.org',
		'@type'       => 'CreativeWork',
		'headline'    => get_the_title(),
		'description' => get_the_excerpt(),
		'url'         => get_permalink(),
		'datePublished' => get_the_date( DATE_W3C ),
		'dateModified'  => get_the_modified_date( DATE_W3C ),
	);

	$project_terms = get_the_terms( get_the_ID(), 'project-type' );
	if ( ! is_wp_error( $project_terms ) && ! empty( $project_terms ) ) {
		$schema['keywords'] = wp_list_pluck( $project_terms, 'name' );
	}

	if ( has_post_thumbnail() ) {
		$schema['image'] = get_the_post_thumbnail_url( get_the_ID(), 'full' );
	}

	echo '<script type="application/ld+json">' . wp_json_encode( $schema ) . '</script>';
}
add_action( 'wp_head', 'nm_project_schema' );
