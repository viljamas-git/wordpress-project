<?php
get_header();
?>
<section class="container">
	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class(); ?>>
			<h1><?php the_title(); ?></h1>
			<p>
				<?php
				$project_types = get_the_term_list( get_the_ID(), 'project-type', '', ', ' );
				echo wp_kses_post( $project_types ? $project_types : '' );
				?>
			</p>
			<?php if ( has_post_thumbnail() ) : ?>
				<?php
				$thumbnail_id  = get_post_thumbnail_id();
				$thumbnail_alt = trim( (string) get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true ) );
				if ( '' === $thumbnail_alt ) {
					$thumbnail_alt = get_the_title();
				}

				the_post_thumbnail(
					'large',
					array(
						'alt'      => $thumbnail_alt,
						'loading'  => 'eager',
						'decoding' => 'async',
						'sizes'    => '(max-width: 900px) 100vw, 900px',
					)
				);
				?>
			<?php endif; ?>
			<h2><?php esc_html_e( 'Description', 'netmatters-challenge-theme' ); ?></h2>
			<?php the_content(); ?>
			<?php
			$client_name = get_post_meta( get_the_ID(), 'client_name', true );
			$features    = get_post_meta( get_the_ID(), 'features', true );
			$tech_stack  = get_post_meta( get_the_ID(), 'tech_stack', true );
			$project_url = get_post_meta( get_the_ID(), 'project_url', true );
			$repo_url    = get_post_meta( get_the_ID(), 'repo_url', true );
			?>
			<?php if ( $client_name || $tech_stack ) : ?>
				<h2><?php esc_html_e( 'Project Details', 'netmatters-challenge-theme' ); ?></h2>
				<ul>
					<?php if ( $client_name ) : ?>
						<li><strong><?php esc_html_e( 'Client:', 'netmatters-challenge-theme' ); ?></strong> <?php echo esc_html( $client_name ); ?></li>
					<?php endif; ?>
					<?php if ( $tech_stack ) : ?>
						<li><strong><?php esc_html_e( 'Tech Stack:', 'netmatters-challenge-theme' ); ?></strong> <?php echo esc_html( $tech_stack ); ?></li>
					<?php endif; ?>
				</ul>
			<?php endif; ?>
			<?php if ( $features ) : ?>
				<h2><?php esc_html_e( 'Features', 'netmatters-challenge-theme' ); ?></h2>
				<ul>
					<?php foreach ( preg_split( '/\r\n|\r|\n/', (string) $features ) as $feature_line ) : ?>
						<?php if ( trim( $feature_line ) ) : ?>
							<li><?php echo esc_html( trim( $feature_line ) ); ?></li>
						<?php endif; ?>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>
			<?php if ( $project_url || $repo_url ) : ?>
				<h2><?php esc_html_e( 'Links', 'netmatters-challenge-theme' ); ?></h2>
				<ul>
					<?php if ( $project_url ) : ?>
						<li><a href="<?php echo esc_url( $project_url ); ?>"><?php esc_html_e( 'Project URL', 'netmatters-challenge-theme' ); ?></a></li>
					<?php endif; ?>
					<?php if ( $repo_url ) : ?>
						<li><a href="<?php echo esc_url( $repo_url ); ?>"><?php esc_html_e( 'Repository URL', 'netmatters-challenge-theme' ); ?></a></li>
					<?php endif; ?>
				</ul>
			<?php endif; ?>
		</article>
	<?php endwhile; ?>
</section>
<?php
get_footer();
