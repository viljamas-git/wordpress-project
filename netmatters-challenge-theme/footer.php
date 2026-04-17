	</main>
<footer id="contact" class="site-footer">
	<div class="container site-footer__inner">
		<div>
			<strong>AxisForge Engineering</strong>
			<p><?php esc_html_e( 'Automation, intelligent systems, and rapid prototyping for industrial innovation.', 'netmatters-challenge-theme' ); ?></p>
		</div>
		<nav aria-label="<?php esc_attr_e( 'Footer navigation', 'netmatters-challenge-theme' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer',
					'container'      => false,
					'menu_class'     => 'footer-menu',
					'fallback_cb'    => 'wp_page_menu',
				)
			);
			?>
		</nav>
	</div>
	<div class="container">
		<p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?></p>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
