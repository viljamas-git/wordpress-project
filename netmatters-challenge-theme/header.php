<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#main-content"><?php esc_html_e( 'Skip to main content', 'netmatters-challenge-theme' ); ?></a>
<header class="site-header">
	<div class="container site-header__inner">
		<div class="site-branding">
			<?php
			if ( has_custom_logo() ) {
				the_custom_logo();
			}
			?>
			<a class="site-branding__name" href="<?php echo esc_url( home_url( '/' ) ); ?>">AxisForge</a>
		</div>
		<nav class="main-navigation" aria-label="<?php esc_attr_e( 'Primary navigation', 'netmatters-challenge-theme' ); ?>">
			<?php
			$default_links = array(
				array(
					'label' => __( 'Home', 'netmatters-challenge-theme' ),
					'url'   => home_url( '/' ),
				),
				array(
					'label' => __( 'About', 'netmatters-challenge-theme' ),
					'url'   => home_url( '/about/' ),
				),
				array(
					'label' => __( 'Services', 'netmatters-challenge-theme' ),
					'url'   => home_url( '/services/' ),
				),
				array(
					'label' => __( 'Projects', 'netmatters-challenge-theme' ),
					'url'   => home_url( '/projects/' ),
				),
				array(
					'label' => __( 'Contact', 'netmatters-challenge-theme' ),
					'url'   => home_url( '/contact/' ),
				),
			);

			$menu_output = wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'container'      => false,
					'menu_class'     => 'primary-menu',
					'fallback_cb'    => false,
					'echo'           => false,
				)
			);

			if ( ! empty( $menu_output ) ) {
				echo $menu_output;
			} else {
				$current_url = untrailingslashit( home_url( add_query_arg( array(), $GLOBALS['wp']->request ?? '' ) ) );
				?>
				<ul class="primary-menu primary-menu--buttons">
					<?php foreach ( $default_links as $link ) : ?>
						<?php $is_current = $current_url === untrailingslashit( $link['url'] ); ?>
						<li><a href="<?php echo esc_url( $link['url'] ); ?>"<?php if ( $is_current ) : ?> aria-current="page"<?php endif; ?>><?php echo esc_html( $link['label'] ); ?></a></li>
					<?php endforeach; ?>
				</ul>
				<?php
			}
			?>
		</nav>
	</div>
</header>
<?php nm_render_breadcrumbs(); ?>
<main id="main-content" class="site-main">
