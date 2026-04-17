<?php


get_header();
?>
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<?php
		$is_elementor_page = false;
		if ( class_exists( '\Elementor\Plugin' ) ) {
			$elementor_document = \Elementor\Plugin::$instance->documents->get( get_the_ID() );
			$is_elementor_page = $elementor_document && $elementor_document->is_built_with_elementor();
		}
		?>
		<?php if ( $is_elementor_page ) : ?>
			<article <?php post_class( 'full-width-page' ); ?>>
				<?php the_content(); ?>
			</article>
		<?php else : ?>
			<div class="container">
				<article <?php post_class(); ?>>
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</article>
			</div>
		<?php endif; ?>
	<?php endwhile; ?>
<?php else : ?>
	<div class="container">
		<p><?php esc_html_e( 'Sorry, this page could not be found.', 'netmatters-challenge-theme' ); ?></p>
	</div>
<?php endif; ?>
<?php
get_footer();
