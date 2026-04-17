<article <?php post_class( 'nm-card' ); ?>>
	<?php if ( has_post_thumbnail() ) : ?>
		<a href="<?php the_permalink(); ?>">
			<?php
			$thumbnail_id  = get_post_thumbnail_id();
			$thumbnail_alt = trim( (string) get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true ) );
			if ( '' === $thumbnail_alt ) {
				$thumbnail_alt = get_the_title();
			}

			the_post_thumbnail(
				'medium',
				array(
					'alt'      => $thumbnail_alt,
					'loading'  => 'lazy',
					'decoding' => 'async',
					'sizes'    => '(max-width: 768px) 100vw, (max-width: 1120px) 50vw, 320px',
				)
			);
			?>
		</a>
	<?php endif; ?>
	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	<?php
	$sector = get_post_meta( get_the_ID(), 'sector', true );
	if ( $sector ) :
		?>
		<p><strong><?php esc_html_e( 'Sector:', 'netmatters-challenge-theme' ); ?></strong> <?php echo esc_html( $sector ); ?></p>
	<?php endif; ?>
	<p><?php the_excerpt(); ?></p>
</article>
