<?php



function nm_render_breadcrumbs() {
	if ( is_front_page() ) {
		return;
	}

	if ( function_exists( 'yoast_breadcrumb' ) ) {
		yoast_breadcrumb(
			'<nav class="nm-breadcrumbs" aria-label="' . esc_attr__( 'Breadcrumb', 'netmatters-challenge-theme' ) . '">',
			'</nav>'
		);
		return;
	}

	if ( function_exists( 'rank_math_the_breadcrumbs' ) ) {
		echo '<nav class="nm-breadcrumbs" aria-label="' . esc_attr__( 'Breadcrumb', 'netmatters-challenge-theme' ) . '">';
		rank_math_the_breadcrumbs();
		echo '</nav>';
		return;
	}

	echo '<nav class="nm-breadcrumbs" aria-label="' . esc_attr__( 'Breadcrumb', 'netmatters-challenge-theme' ) . '">';
	echo '<a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'Home', 'netmatters-challenge-theme' ) . '</a>';

	if ( is_singular( 'project' ) ) {
		echo ' <span aria-hidden="true">/</span> ';
		echo '<a href="' . esc_url( get_post_type_archive_link( 'project' ) ) . '">' . esc_html__( 'Projects', 'netmatters-challenge-theme' ) . '</a>';
		echo ' <span aria-hidden="true">/</span> ';
		echo '<span aria-current="page">' . esc_html( get_the_title() ) . '</span>';
	} elseif ( is_archive() ) {
		echo ' <span aria-hidden="true">/</span> ';
		echo '<span aria-current="page">' . esc_html( post_type_archive_title( '', false ) ) . '</span>';
	} elseif ( is_page() ) {
		echo ' <span aria-hidden="true">/</span> ';
		echo '<span aria-current="page">' . esc_html( get_the_title() ) . '</span>';
	}

	echo '</nav>';
}


function nm_add_current_aria_attribute( $atts, $item, $args ) {
	if ( ! isset( $args->theme_location ) || 'primary' !== $args->theme_location ) {
		return $atts;
	}

	if ( ! empty( $item->current ) || ! empty( $item->current_item_ancestor ) || ! empty( $item->current_item_parent ) ) {
		$atts['aria-current'] = 'page';
	}

	return $atts;
}
add_filter( 'nav_menu_link_attributes', 'nm_add_current_aria_attribute', 10, 3 );
