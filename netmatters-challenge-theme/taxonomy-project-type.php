<?php


get_header();
$term = get_queried_object();
?>
<section class="container">
	<h1><?php single_term_title(); ?></h1>
	<?php if ( ! empty( $term->description ) ) : ?>
		<p><?php echo esc_html( $term->description ); ?></p>
	<?php endif; ?>
	<p><a href="<?php echo esc_url( get_post_type_archive_link( 'project' ) ); ?>"><?php esc_html_e( 'View all projects', 'netmatters-challenge-theme' ); ?></a></p>
	<div class="card-grid">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'project-card' ); ?>
			<?php endwhile; ?>
		<?php else : ?>
			<p><?php esc_html_e( 'No projects in this project type yet.', 'netmatters-challenge-theme' ); ?></p>
		<?php endif; ?>
	</div>
	<?php the_posts_pagination(); ?>
</section>
<?php
get_footer();
