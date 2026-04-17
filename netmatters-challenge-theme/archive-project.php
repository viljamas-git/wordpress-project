<?php
get_header();
?>
<section class="container">
	<h1><?php esc_html_e( 'Engineering Projects', 'netmatters-challenge-theme' ); ?></h1>
	<p><?php esc_html_e( 'Explore recent automation, AI, prototyping, and integration work delivered across technical environments.', 'netmatters-challenge-theme' ); ?></p>
	<?php
	$project_types = get_terms(
		array(
			'taxonomy'   => 'project-type',
			'hide_empty' => true,
		)
	);
	$current_type = get_query_var( 'project-type' );
	?>
	<?php if ( ! is_wp_error( $project_types ) && ! empty( $project_types ) ) : ?>
		<nav class="nm-project-filters" aria-label="<?php esc_attr_e( 'Project type filters', 'netmatters-challenge-theme' ); ?>">
			<a href="<?php echo esc_url( get_post_type_archive_link( 'project' ) ); ?>" class="<?php echo empty( $current_type ) ? 'is-active' : ''; ?>"><?php esc_html_e( 'All', 'netmatters-challenge-theme' ); ?></a>
			<?php foreach ( $project_types as $type ) : ?>
				<a href="<?php echo esc_url( get_term_link( $type ) ); ?>" class="<?php echo $current_type === $type->slug ? 'is-active' : ''; ?>"><?php echo esc_html( $type->name ); ?></a>
			<?php endforeach; ?>
		</nav>
	<?php endif; ?>
	<div class="card-grid">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'project-card' ); ?>
			<?php endwhile; ?>
		<?php else : ?>
			<p><?php esc_html_e( 'No projects found yet.', 'netmatters-challenge-theme' ); ?></p>
		<?php endif; ?>
	</div>
	<?php the_posts_pagination(); ?>
</section>
<?php
get_footer();
