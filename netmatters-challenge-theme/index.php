<?php


get_header();
?>
<div class="container">
	<?php if ( have_posts() ) : ?>
		<div class="card-grid">
			<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', get_post_type() );
			endwhile;
			?>
		</div>

		<?php the_posts_navigation(); ?>
	<?php else : ?>
		<p><?php esc_html_e( 'No content found.', 'netmatters-challenge-theme' ); ?></p>
	<?php endif; ?>
</div>
<?php
get_footer();
