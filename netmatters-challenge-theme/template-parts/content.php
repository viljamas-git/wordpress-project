<?php

?>
<article <?php post_class( 'nm-card' ); ?>>
	<?php if ( has_post_thumbnail() ) : ?>
		<a href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
			<?php
			the_post_thumbnail(
				'medium_large',
				array(
					'loading'  => 'lazy',
					'decoding' => 'async',
					'sizes'    => '(max-width: 768px) 100vw, (max-width: 1120px) 50vw, 360px',
				)
			);
			?>
		</a>
	<?php endif; ?>

	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<?php the_excerpt(); ?>
</article>
