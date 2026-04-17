<?php



function nm_seed_assessment_content() {
	$seed_version = '3';
	$about_url    = home_url( '/about/' );
	$services_url = home_url( '/services/' );
	$projects_url = home_url( '/projects/' );
	$contact_url  = home_url( '/contact/' );

	$home_content = implode(
		"\n",
		array(
			'',
			'<h1>Industrial engineering that moves projects from concept to production.</h1>',
			'',
			'',
			'<p>AxisForge Engineering partners with operations, product, and innovation teams to deliver reliable automation systems, data-driven tooling, and practical prototype programs.</p>',
			'',
			'',
			'<div class="wp-block-buttons"><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="' . esc_url( $services_url ) . '">Explore Services</a></div><div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="' . esc_url( $contact_url ) . '">Book a Discovery Call</a></div></div>',
			'',
			'',
			'<h3>How We Help</h3>',
			'',
			'',
			'<div class="wp-block-columns"><div class="wp-block-column"><h4>About AxisForge</h4><p>Learn how our controls, AI, and prototyping teams collaborate from discovery through commissioning.</p><p><a href="' . esc_url( $about_url ) . '">Read more</a></p></div><div class="wp-block-column"><h4>Engineering Services</h4><p>See our structured service lines and delivery model for industrial and product organizations.</p><p><a href="' . esc_url( $services_url ) . '">Read more</a></p></div><div class="wp-block-column"><h4>Project Portfolio</h4><p>Review recent case studies spanning automation modernization, machine vision, and integration.</p><p><a href="' . esc_url( $projects_url ) . '">Read more</a></p></div></div>',
			'',
			'',
			'<h3>Featured Projects</h3>',
			'',
			'',
			'<p>Use Elementor to add project cards, loops, or dynamic widgets here and link through to your full project archive.</p>',
			'',
			'',
			'<div class="wp-block-buttons"><div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="' . esc_url( $projects_url ) . '">View all projects</a></div></div>',
			'',
			'',
			'<h3>Ready to scope your next project?</h3>',
			'',
			'',
			'<p>Tell us your timeline, constraints, and technical goals. We will provide a practical first-step plan.</p>',
			'',
			'',
			'<div class="wp-block-buttons"><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="' . esc_url( $contact_url ) . '">Contact our team</a></div></div>',
			'',
		)
	);

	$about_content = implode(
		"\n",
		array(
			'',
			'<h2>About AxisForge Engineering</h2>',
			'',
			'',
			'<p>AxisForge is a multidisciplinary engineering consultancy focused on practical outcomes in automation, AI-enabled operations, and prototyping. We work closely with plant leadership, maintenance, and product stakeholders to align technical decisions with business goals.</p>',
			'',
			'',
			'<div class="wp-block-columns"><div class="wp-block-column"><h3>Mission</h3><p>Deliver robust engineering systems that improve throughput, quality, and safety without unnecessary complexity.</p></div><div class="wp-block-column"><h3>Approach</h3><p>Start small, validate fast, and scale with measurable KPIs, clear documentation, and operator-ready handover.</p></div></div>',
			'',
			'',
			'<h3>Core values</h3>',
			'',
			'',
			'<ul><li><strong>Safety first:</strong> Designs that prioritize people, process integrity, and compliance.</li><li><strong>Operational realism:</strong> Solutions built for real floor conditions and staffing constraints.</li><li><strong>Transparent delivery:</strong> Regular updates, shared decisions, and clear acceptance criteria.</li></ul>',
			'',
			'',
			'<p><a href="' . esc_url( $contact_url ) . '">Meet the team and discuss your roadmap →</a></p>',
			'',
		)
	);

	$services_content = implode(
		"\n",
		array(
			'',
			'<h2>Engineering Services</h2>',
			'',
			'',
			'<p>Our services are modular, so you can engage for a single workstream or a full program from concept through commissioning.</p>',
			'',
			'',
			'<h3>Service lines</h3>',
			'',
			'',
			'<ul><li><strong>Automation &amp; Controls:</strong> PLC/HMI upgrades, panel design, safety circuits, and commissioning support.</li><li><strong>Industrial AI:</strong> Vision inspection, anomaly detection, and model-assisted process monitoring.</li><li><strong>Rapid Prototyping:</strong> 3D-printed fixtures, enclosures, and test articles for fast design validation.</li><li><strong>Systems Integration:</strong> Connect equipment telemetry to historians, MES, ERP, and analytics tools.</li></ul>',
			'',
			'',
			'<h3>Typical engagement structure</h3>',
			'',
			'',
			'<ol><li>Discovery and baseline assessment.</li><li>Technical design with risk and timeline planning.</li><li>Implementation, validation, and operator enablement.</li><li>Post-launch optimization and support.</li></ol>',
			'',
			'',
			'<p><a href="' . esc_url( $contact_url ) . '">Request a scoped proposal for your facility →</a></p>',
			'',
		)
	);

	$projects_content = implode(
		"\n",
		array(
			'',
			'<h2>Projects &amp; Case Studies</h2>',
			'',
			'',
			'<p>Browse selected delivery work across manufacturing, logistics, and product development environments. Each case study outlines the operational problem, implementation path, and measurable results.</p>',
			'',
			'',
			'<h3>What to expect in each case study</h3>',
			'',
			'',
			'<ul><li>Client context and sector constraints.</li><li>Technical stack and integration decisions.</li><li>Delivery milestones and risk controls.</li><li>Outcome metrics and next-step opportunities.</li></ul>',
			'',
			'',
			'<p>Need a similar outcome? <a href="' . esc_url( $contact_url ) . '">Speak with our engineering team →</a></p>',
			'',
		)
	);

	$contact_content = implode(
		"\n",
		array(
			'',
			'<h2>Contact AxisForge</h2>',
			'',
			'',
			'<p>Share your project goals and constraints, and we will respond with recommended next steps, estimated timelines, and suitable delivery options.</p>',
			'',
			'',
			'<h3>Before you submit</h3>',
			'',
			'',
			'<ul><li>Outline current process or product challenges.</li><li>Include target launch date and budget expectations.</li><li>List any technical stack or compliance requirements.</li></ul>',
			'',
			'',
			'[nm_contact_form]',
			'',
		)
	);

	$home_page_id     = nm_upsert_page(
		'Home',
		'home',
		$home_content
	);
	$about_page_id    = nm_upsert_page(
		'About',
		'about',
		$about_content
	);
	$services_page_id = nm_upsert_page(
		'Services',
		'services',
		$services_content
	);
	$projects_page_id = nm_upsert_page(
		'Projects',
		'projects',
		$projects_content
	);
	$contact_page_id  = nm_upsert_page(
		'Contact',
		'contact',
		$contact_content
	);

	if ( $home_page_id ) {
		update_option( 'show_on_front', 'page' );
		update_option( 'page_on_front', $home_page_id );
		nm_seed_home_elementor_sections( $home_page_id );
	}

	if ( $projects_page_id ) {
		update_option( 'page_for_posts', 0 );
		update_option( 'nm_projects_page_id', $projects_page_id );
	}

	if ( '/%postname%/' !== get_option( 'permalink_structure' ) ) {
		update_option( 'permalink_structure', '/%postname%/' );
	}

	nm_assign_assessment_menus( $home_page_id, $about_page_id, $services_page_id, $projects_page_id, $contact_page_id );
	nm_seed_project_terms();
	nm_seed_project_posts();
	nm_activate_assessment_seo_plugin();
	update_option( 'nm_assessment_content_seeded', '1' );
	update_option( 'nm_assessment_content_version', $seed_version );
}


function nm_seed_assessment_content_on_theme_switch() {
	nm_seed_assessment_content();
	flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'nm_seed_assessment_content_on_theme_switch' );


function nm_maybe_seed_assessment_content() {
	$current_seed_version = '3';
	$stored_seed_version  = (string) get_option( 'nm_assessment_content_version', '' );

	if ( get_option( 'nm_assessment_content_seeded' ) && ! nm_required_pages_missing() && $stored_seed_version === $current_seed_version ) {
		return;
	}

	nm_seed_assessment_content();
}
add_action( 'init', 'nm_maybe_seed_assessment_content' );


function nm_seed_home_elementor_sections( $page_id ) {
	if ( ! class_exists( '\Elementor\Plugin' ) ) {
		return;
	}

	$about_url    = home_url( '/about/' );
	$services_url = home_url( '/services/' );
	$projects_url = home_url( '/projects/' );
	$contact_url  = home_url( '/contact/' );

	$elementor_data = array(
		array(
			'id'         => 'nm-hero',
			'elType'     => 'section',
			'settings'   => array(),
			'elements'   => array(
				array(
					'id'       => 'nm-hero-col',
					'elType'   => 'column',
					'settings' => array( '_column_size' => 100 ),
					'elements' => array(
						array(
							'id'         => 'nm-hero-heading',
							'elType'     => 'widget',
							'widgetType' => 'heading',
							'settings'   => array(
								'title' => 'Industrial engineering that moves projects from concept to production.',
								'size'  => 'h1',
							),
							'elements'   => array(),
						),
						array(
							'id'         => 'nm-hero-copy',
							'elType'     => 'widget',
							'widgetType' => 'text-editor',
							'settings'   => array(
								'editor' => '<p>AxisForge Engineering partners with operations, product, and innovation teams to deliver reliable automation systems, data-driven tooling, and practical prototype programs.</p>',
							),
							'elements'   => array(),
						),
					),
				),
			),
		),
		array(
			'id'       => 'nm-hero-actions',
			'elType'   => 'section',
			'settings' => array(),
			'elements' => array(
				array(
					'id'       => 'nm-hero-actions-col-1',
					'elType'   => 'column',
					'settings' => array( '_column_size' => 50 ),
					'elements' => array(
						array(
							'id'         => 'nm-btn-services',
							'elType'     => 'widget',
							'widgetType' => 'button',
							'settings'   => array(
								'text' => 'Explore Services',
								'link' => array( 'url' => $services_url ),
							),
							'elements'   => array(),
						),
					),
				),
				array(
					'id'       => 'nm-hero-actions-col-2',
					'elType'   => 'column',
					'settings' => array( '_column_size' => 50 ),
					'elements' => array(
						array(
							'id'         => 'nm-btn-discovery',
							'elType'     => 'widget',
							'widgetType' => 'button',
							'settings'   => array(
								'text' => 'Book a Discovery Call',
								'link' => array( 'url' => $contact_url ),
							),
							'elements'   => array(),
						),
					),
				),
			),
		),
		array(
			'id'       => 'nm-how-we-help',
			'elType'   => 'section',
			'settings' => array(),
			'elements' => array(
				array(
					'id'       => 'nm-how-we-help-col',
					'elType'   => 'column',
					'settings' => array( '_column_size' => 100 ),
					'elements' => array(
						array(
							'id'         => 'nm-how-we-help-heading',
							'elType'     => 'widget',
							'widgetType' => 'heading',
							'settings'   => array(
								'title' => 'How We Help',
								'size'  => 'h3',
							),
							'elements'   => array(),
						),
					),
				),
			),
		),
		array(
			'id'       => 'nm-how-we-help-cards',
			'elType'   => 'section',
			'settings' => array(),
			'elements' => array(
				nm_elementor_link_card_column( 'nm-about-card', 'About AxisForge', 'Learn how our controls, AI, and prototyping teams collaborate from discovery through commissioning.', $about_url ),
				nm_elementor_link_card_column( 'nm-services-card', 'Engineering Services', 'See our structured service lines and delivery model for industrial and product organizations.', $services_url ),
				nm_elementor_link_card_column( 'nm-projects-card', 'Project Portfolio', 'Review recent case studies spanning automation modernization, machine vision, and integration.', $projects_url ),
			),
		),
		array(
			'id'       => 'nm-featured-projects',
			'elType'   => 'section',
			'settings' => array(),
			'elements' => array(
				array(
					'id'       => 'nm-featured-projects-col',
					'elType'   => 'column',
					'settings' => array( '_column_size' => 100 ),
					'elements' => array(
						array(
							'id'         => 'nm-featured-projects-heading',
							'elType'     => 'widget',
							'widgetType' => 'heading',
							'settings'   => array(
								'title' => 'Featured Projects',
								'size'  => 'h3',
							),
							'elements'   => array(),
						),
					),
				),
			),
		),
		array(
			'id'       => 'nm-featured-project-cards',
			'elType'   => 'section',
			'settings' => array(),
			'elements' => array(
				nm_elementor_text_card_column( 'nm-featured-packaging', 'Packaging Line Retrofit &amp; Safety Upgrade', 'CPG', 'Retrofitted controls and safety circuits on a high-throughput packaging line.' ),
				nm_elementor_text_card_column( 'nm-featured-bearing', 'Predictive Bearing Failure Detection', 'Heavy Industry', 'Built an anomaly detection system using vibration telemetry from rotating assets.' ),
				nm_elementor_text_card_column( 'nm-featured-fixture', 'Custom Fixture Rapid Prototype Program', 'MedTech', 'Delivered functional fixtures through iterative 3D-printed prototypes.' ),
			),
		),
		array(
			'id'       => 'nm-view-all-projects',
			'elType'   => 'section',
			'settings' => array(),
			'elements' => array(
				array(
					'id'       => 'nm-view-all-projects-col',
					'elType'   => 'column',
					'settings' => array( '_column_size' => 100 ),
					'elements' => array(
						array(
							'id'         => 'nm-view-all-projects-btn',
							'elType'     => 'widget',
							'widgetType' => 'button',
							'settings'   => array(
								'text' => 'View all projects',
								'link' => array( 'url' => $projects_url ),
							),
							'elements'   => array(),
						),
					),
				),
			),
		),
		array(
			'id'       => 'nm-cta',
			'elType'   => 'section',
			'settings' => array(),
			'elements' => array(
				array(
					'id'       => 'nm-cta-col',
					'elType'   => 'column',
					'settings' => array( '_column_size' => 100 ),
					'elements' => array(
						array(
							'id'         => 'nm-cta-heading',
							'elType'     => 'widget',
							'widgetType' => 'heading',
							'settings'   => array(
								'title' => 'Ready to scope your next project?',
								'size'  => 'h3',
							),
							'elements'   => array(),
						),
						array(
							'id'         => 'nm-cta-copy',
							'elType'     => 'widget',
							'widgetType' => 'text-editor',
							'settings'   => array(
								'editor' => '<p>Tell us your timeline, constraints, and technical goals. We will provide a practical first-step plan.</p>',
							),
							'elements'   => array(),
						),
						array(
							'id'         => 'nm-cta-btn',
							'elType'     => 'widget',
							'widgetType' => 'button',
							'settings'   => array(
								'text' => 'Contact our team',
								'link' => array( 'url' => $contact_url ),
							),
							'elements'   => array(),
						),
					),
				),
			),
		),
	);

	update_post_meta( $page_id, '_wp_page_template', 'page-templates/full-width.php' );
	update_post_meta( $page_id, '_elementor_edit_mode', 'builder' );
	update_post_meta( $page_id, '_elementor_template_type', 'wp-page' );
	update_post_meta( $page_id, '_elementor_data', wp_slash( wp_json_encode( $elementor_data ) ) );
	update_post_meta( $page_id, '_elementor_page_settings', array() );
}


function nm_elementor_link_card_column( $id_base, $title, $description, $link_url ) {
	return array(
		'id'       => $id_base . '-col',
		'elType'   => 'column',
		'settings' => array( '_column_size' => 33 ),
		'elements' => array(
			array(
				'id'         => $id_base . '-heading',
				'elType'     => 'widget',
				'widgetType' => 'heading',
				'settings'   => array(
					'title' => $title,
					'size'  => 'h4',
				),
				'elements'   => array(),
			),
			array(
				'id'         => $id_base . '-copy',
				'elType'     => 'widget',
				'widgetType' => 'text-editor',
				'settings'   => array(
					'editor' => '<p>' . $description . '</p>',
				),
				'elements'   => array(),
			),
			array(
				'id'         => $id_base . '-button',
				'elType'     => 'widget',
				'widgetType' => 'button',
				'settings'   => array(
					'text' => 'Read more',
					'link' => array( 'url' => $link_url ),
				),
				'elements'   => array(),
			),
		),
	);
}


function nm_elementor_text_card_column( $id_base, $title, $sector, $description ) {
	return array(
		'id'       => $id_base . '-col',
		'elType'   => 'column',
		'settings' => array( '_column_size' => 33 ),
		'elements' => array(
			array(
				'id'         => $id_base . '-heading',
				'elType'     => 'widget',
				'widgetType' => 'heading',
				'settings'   => array(
					'title' => $title,
					'size'  => 'h4',
				),
				'elements'   => array(),
			),
			array(
				'id'         => $id_base . '-copy',
				'elType'     => 'widget',
				'widgetType' => 'text-editor',
				'settings'   => array(
					'editor' => '<p><strong>Sector:</strong> ' . $sector . '</p><p>' . $description . '</p>',
				),
				'elements'   => array(),
			),
		),
	);
}


function nm_required_pages_missing() {
	$required_slugs = array(
		'home',
		'about',
		'services',
		'projects',
		'contact',
	);

	foreach ( $required_slugs as $slug ) {
		if ( ! ( get_page_by_path( $slug ) instanceof WP_Post ) ) {
			return true;
		}
	}

	return false;
}


function nm_activate_assessment_seo_plugin() {
	require_once ABSPATH . 'wp-admin/includes/plugin.php';

	$preferred_plugins = array(
		'wordpress-seo/wp-seo.php',
		'seo-by-rank-math/rank-math.php',
		'nm-seo-baseline/nm-seo-baseline.php',
	);

	foreach ( $preferred_plugins as $plugin_file ) {
		if ( is_plugin_active( $plugin_file ) ) {
			return;
		}

		if ( file_exists( WP_PLUGIN_DIR . '/' . $plugin_file ) ) {
			activate_plugin( $plugin_file );
			return;
		}
	}

}


function nm_upsert_page( $title, $slug, $content ) {
	$existing = get_page_by_path( $slug );

	if ( $existing instanceof WP_Post ) {
		$updates = array(
			'ID' => $existing->ID,
		);

		if ( 'publish' !== $existing->post_status ) {
			$updates['post_status'] = 'publish';
		}

		if ( $title !== $existing->post_title ) {
			$updates['post_title'] = $title;
		}

		if ( $slug !== $existing->post_name ) {
			$updates['post_name'] = $slug;
		}

		if ( $content !== $existing->post_content ) {
			$updates['post_content'] = $content;
		}

		if ( count( $updates ) > 1 ) {
			wp_update_post(
				$updates
			);
		}

		return (int) $existing->ID;
	}

	$page_id = wp_insert_post(
		array(
			'post_title'   => $title,
			'post_name'    => $slug,
			'post_content' => $content,
			'post_status'  => 'publish',
			'post_type'    => 'page',
		)
	);

	return is_wp_error( $page_id ) ? 0 : (int) $page_id;
}


function nm_assign_assessment_menus( $home_page_id, $about_page_id, $services_page_id, $projects_page_id, $contact_page_id ) {
	$menu_name    = 'Primary Navigation';
	$footer_name  = 'Footer Navigation';
	$primary_menu = wp_get_nav_menu_object( $menu_name );
	$footer_menu  = wp_get_nav_menu_object( $footer_name );

	if ( ! $primary_menu ) {
		$primary_menu = wp_create_nav_menu( $menu_name );
	}

	if ( ! $footer_menu ) {
		$footer_menu = wp_create_nav_menu( $footer_name );
	}

	if ( $primary_menu ) {
		nm_ensure_menu_item( (int) $primary_menu, $home_page_id );
		nm_ensure_menu_item( (int) $primary_menu, $about_page_id );
		nm_ensure_menu_item( (int) $primary_menu, $services_page_id );
		nm_ensure_menu_item( (int) $primary_menu, $projects_page_id );
		nm_ensure_menu_item( (int) $primary_menu, $contact_page_id );
	}

	if ( $footer_menu ) {
		nm_ensure_menu_item( (int) $footer_menu, $about_page_id );
		nm_ensure_menu_item( (int) $footer_menu, $services_page_id );
		nm_ensure_menu_item( (int) $footer_menu, $contact_page_id );
	}

	$locations              = get_theme_mod( 'nav_menu_locations', array() );
	$locations['primary']   = (int) $primary_menu;
	$locations['footer']    = (int) $footer_menu;
	set_theme_mod( 'nav_menu_locations', $locations );
}


function nm_ensure_menu_item( $menu_id, $page_id ) {
	if ( ! $menu_id || ! $page_id ) {
		return;
	}

	$items = wp_get_nav_menu_items( $menu_id );
	if ( is_array( $items ) ) {
		foreach ( $items as $item ) {
			if ( (int) $item->object_id === (int) $page_id ) {
				return;
			}
		}
	}

	wp_update_nav_menu_item(
		$menu_id,
		0,
		array(
			'menu-item-object-id' => $page_id,
			'menu-item-object'    => 'page',
			'menu-item-type'      => 'post_type',
			'menu-item-status'    => 'publish',
		)
	);
}


function nm_seed_project_terms() {
	$terms = array(
		'Web',
		'App',
		'E-commerce',
	);

	foreach ( $terms as $term ) {
		if ( ! term_exists( $term, 'project-type' ) ) {
			wp_insert_term( $term, 'project-type' );
		}
	}
}


function nm_seed_project_posts() {
	$projects = array(
		array(
			'title'      => 'Bottling Line PLC Modernization',
			'slug'       => 'bottling-line-plc-modernization',
			'excerpt'    => 'Modernized a legacy bottling line with resilient PLC/HMI architecture and downtime alerts.',
			'content'    => 'A complete controls refresh replaced obsolete components, added remote diagnostics, and reduced unplanned downtime by 27%.',
			'type'       => 'Web',
			'client'     => 'North Ridge Foods',
			'sector'     => 'Food & Beverage',
			'tech_stack' => 'Siemens TIA Portal, WinCC, OPC UA',
			'features'   => "Legacy PLC migration with zero unplanned stoppage\nRole-based HMI screens for operators and supervisors\nReal-time alarm escalation with SMS and email routing",
			'repo_url'   => '',
		),
		array(
			'title'      => 'Predictive Bearing Failure Detection',
			'slug'       => 'predictive-bearing-failure-detection',
			'excerpt'    => 'Built an anomaly detection system using vibration telemetry from rotating assets.',
			'content'    => 'The deployment added near real-time classification of vibration trends and generated actionable maintenance windows.',
			'type'       => 'App',
			'client'     => 'IronPeak Manufacturing',
			'sector'     => 'Heavy Industry',
			'tech_stack' => 'Python, Edge Inference, MQTT',
			'features'   => "Sensor fusion from vibration and temperature streams\nEdge scoring every 30 seconds with fallback buffering\nMaintenance dashboard with risk and priority ranking",
			'repo_url'   => 'https://github.com/example/predictive-maintenance',
		),
		array(
			'title'      => 'Custom Fixture Rapid Prototype Program',
			'slug'       => 'custom-fixture-rapid-prototype-program',
			'excerpt'    => 'Delivered functional fixtures through iterative 3D-printed prototypes.',
			'content'    => 'A staged prototype loop shortened validation from six weeks to ten days and improved operator ergonomics.',
			'type'       => 'Web',
			'client'     => 'Aster Labs',
			'sector'     => 'MedTech',
			'tech_stack' => 'Fusion 360, PETG/ABS, In-house QA rigs',
			'features'   => "Three prototype rounds completed within ten business days\nTolerance validation using custom QA jigs\nDocumented print profiles for repeatable production",
			'repo_url'   => '',
		),
		array(
			'title'      => 'Warehouse Vision Quality Gate',
			'slug'       => 'warehouse-vision-quality-gate',
			'excerpt'    => 'Implemented a machine-vision station for inbound defect checks.',
			'content'    => 'The quality gate catches carton defects before palletization, reducing downstream handling costs.',
			'type'       => 'E-commerce',
			'client'     => 'Harbor Distribution',
			'sector'     => 'Logistics',
			'tech_stack' => 'OpenCV, TensorRT, Industrial Cameras',
			'features'   => "Sub-200 ms inference pipeline on GPU edge hardware\nAutomatic reject lane trigger for damaged cartons\nInspection analytics exported to daily operations reports",
			'repo_url'   => 'https://github.com/example/vision-quality-gate',
		),
		array(
			'title'      => 'Robotic Cell Data Unification',
			'slug'       => 'robotic-cell-data-unification',
			'excerpt'    => 'Connected robotic cell telemetry to business KPIs for daily operations.',
			'content'    => 'Unified historian, ERP events, and robot cycle metrics into one operational dashboard.',
			'type'       => 'App',
			'client'     => 'Volta Components',
			'sector'     => 'Automotive',
			'tech_stack' => 'REST APIs, Node-RED, Power BI',
			'features'   => "Unified event model across four independent robot cells\nShift-level OEE and downtime attribution views\nAutomated daily summary emails to plant leadership",
			'repo_url'   => '',
		),
		array(
			'title'      => 'Packaging Line Retrofit & Safety Upgrade',
			'slug'       => 'packaging-line-retrofit-safety-upgrade',
			'excerpt'    => 'Retrofitted controls and safety circuits on a high-throughput packaging line.',
			'content'    => 'A phased installation delivered SIL-aligned interlocks and preserved output during migration.',
			'type'       => 'E-commerce',
			'client'     => 'BlueBay Consumer Goods',
			'sector'     => 'CPG',
			'tech_stack' => 'Allen-Bradley, Safety PLC, SCADA',
			'features'   => "Safety relay modernization with SIL-oriented documentation\nCommissioning by zone to maintain production throughput\nOperator training package with lockout walkthroughs",
			'repo_url'   => '',
		),
	);

	foreach ( $projects as $index => $project ) {
		$existing = get_page_by_path( $project['slug'], OBJECT, 'project' );
		if ( $existing instanceof WP_Post ) {
			$post_id = (int) $existing->ID;
		} else {
			$post_id = wp_insert_post(
				array(
					'post_type'    => 'project',
					'post_title'   => $project['title'],
					'post_name'    => $project['slug'],
					'post_excerpt' => $project['excerpt'],
					'post_content' => $project['content'],
					'post_status'  => 'publish',
				)
			);
		}

		if ( $post_id && ! is_wp_error( $post_id ) ) {
			wp_set_object_terms( $post_id, array( $project['type'] ), 'project-type', false );
			update_post_meta( $post_id, 'client_name', $project['client'] );
			update_post_meta( $post_id, 'sector', $project['sector'] );
			update_post_meta( $post_id, 'tech_stack', $project['tech_stack'] );
			update_post_meta( $post_id, 'features', $project['features'] );
			update_post_meta( $post_id, 'project_url', home_url( '/projects/' . $project['slug'] ) );
			update_post_meta( $post_id, 'repo_url', $project['repo_url'] );
			nm_set_project_featured_image( $post_id, $project, $index );
		}
	}
}


function nm_set_project_featured_image( $post_id, $project, $index ) {
	if ( has_post_thumbnail( $post_id ) ) {
		return;
	}

	$file_name = sanitize_file_name( $project['slug'] . '-placeholder.png' );

	$existing_attachments = get_posts(
		array(
			'post_type'      => 'attachment',
			'post_status'    => 'inherit',
			'posts_per_page' => 1,
			'meta_key'       => '_wp_attached_file',
			'meta_value'     => 'project-seed/' . $file_name,
			'fields'         => 'ids',
		)
	);

	if ( ! empty( $existing_attachments ) ) {
		set_post_thumbnail( $post_id, (int) $existing_attachments[0] );
		return;
	}

	$upload_dir = wp_upload_dir();
	if ( ! empty( $upload_dir['error'] ) ) {
		return;
	}

	$target_directory = trailingslashit( $upload_dir['basedir'] ) . 'project-seed';
	if ( ! wp_mkdir_p( $target_directory ) ) {
		return;
	}

	$target_file = trailingslashit( $target_directory ) . $file_name;
	if ( ! file_exists( $target_file ) ) {
		nm_generate_project_placeholder_image( $target_file, $project['title'], $index );
	}

	$file_type = wp_check_filetype( $file_name, null );
	if ( empty( $file_type['type'] ) ) {
		return;
	}

	$attachment_id = wp_insert_attachment(
		array(
			'post_mime_type' => $file_type['type'],
			'post_title'     => $project['title'],
			'post_status'    => 'inherit',
		),
		$target_file,
		$post_id
	);

	if ( is_wp_error( $attachment_id ) || ! $attachment_id ) {
		return;
	}

	require_once ABSPATH . 'wp-admin/includes/image.php';
	$attachment_data = wp_generate_attachment_metadata( $attachment_id, $target_file );
	wp_update_attachment_metadata( $attachment_id, $attachment_data );
	update_post_meta( $attachment_id, '_wp_attachment_image_alt', $project['title'] );
	update_post_meta( $attachment_id, '_wp_attached_file', 'project-seed/' . $file_name );
	set_post_thumbnail( $post_id, $attachment_id );
}


function nm_generate_project_placeholder_image( $target_file, $title, $index ) {
	$palette = array(
		array( 21, 101, 192 ),
		array( 0, 137, 123 ),
		array( 251, 140, 0 ),
		array( 142, 36, 170 ),
		array( 67, 160, 71 ),
		array( 239, 83, 80 ),
	);
	$color   = $palette[ $index % count( $palette ) ];

	if ( function_exists( 'imagecreatetruecolor' ) ) {
		$image = imagecreatetruecolor( 1200, 800 );
		if ( false !== $image ) {
			$bg   = imagecolorallocate( $image, $color[0], $color[1], $color[2] );
			$text = imagecolorallocate( $image, 255, 255, 255 );
			imagefilledrectangle( $image, 0, 0, 1200, 800, $bg );
			$label = wp_trim_words( $title, 6, '' );
			imagestring( $image, 5, 40, 40, $label, $text );
			imagepng( $image, $target_file );
			imagedestroy( $image );
			return;
		}
	}

	$png_payload = base64_decode(
		'iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAADUlEQVQImWNgYGBgAAAABQABJzQnCgAAAABJRU5ErkJggg==',
		true
	);
	if ( false !== $png_payload ) {
		file_put_contents( $target_file, $png_payload );
	}
}
