<?php



function nm_get_default_cf7_form_markup() {
	$fields = array(
		'<p><label for="nm-your-name">Name (required)</label><br />[text* your-name id:nm-your-name autocomplete:name aria-required:true]</p>',
		'<p><label for="nm-your-email">Email (required)</label><br />[email* your-email id:nm-your-email autocomplete:email aria-required:true]</p>',
		'<p><label for="nm-your-message">Message (required)</label><br />[textarea* your-message id:nm-your-message aria-required:true]</p>',
		'<p>[acceptance your-consent optional use_label_element] I consent to being contacted about my enquiry.[/acceptance]</p>',
		'<p class="nm-form-error-help" aria-live="polite">' . esc_html__( 'Please fix any errors highlighted below before sending.', 'netmatters-challenge-theme' ) . '</p>',
	);

	if ( shortcode_exists( 'honeypot' ) ) {
		$fields[] = '<p class="nm-honeypot">[honeypot your-company]</p>';
	} elseif ( shortcode_exists( 'recaptcha' ) ) {
		$fields[] = '<p>[recaptcha]</p>';
	}

	$fields[] = '<p>[submit "Send message"]</p>';

	return implode( "\n", $fields );
}


function nm_get_or_create_cf7_form_id() {
	$forms = get_posts(
		array(
			'post_type'      => 'wpcf7_contact_form',
			'posts_per_page' => 1,
			'post_status'    => 'publish',
		)
	);

	if ( ! empty( $forms ) ) {
		return (int) $forms[0]->ID;
	}

	if ( ! class_exists( 'WPCF7_ContactForm' ) ) {
		return 0;
	}

	$admin_email = get_option( 'admin_email' );
	$mail_body   = implode(
		"\n",
		array(
			'Name: [your-name]',
			'Email: [your-email]',
			'Consent: [your-consent]',
			'',
			'Message:',
			'[your-message]',
		)
	);

	$form = WPCF7_ContactForm::get_template();
	$form->set_title( __( 'Contact Form (Free)', 'netmatters-challenge-theme' ) );
	$form->set_properties(
		array(
			'form'  => nm_get_default_cf7_form_markup(),
			'mail'  => array(
				'subject'            => __( 'New enquiry from [your-name]', 'netmatters-challenge-theme' ),
				'sender'             => '[your-name] <[your-email]>',
				'body'               => $mail_body,
				'recipient'          => $admin_email,
				'additional_headers' => 'Reply-To: [your-email]',
			),
			'messages' => array(
				'mail_sent_ok'        => __( 'Thanks! Your message has been sent successfully.', 'netmatters-challenge-theme' ),
				'validation_error'    => __( 'Please complete the required fields and try again.', 'netmatters-challenge-theme' ),
				'spam'                => __( 'Submission blocked as spam. Please try again.', 'netmatters-challenge-theme' ),
				'accept_terms'        => __( 'Please confirm consent if you want to be contacted.', 'netmatters-challenge-theme' ),
				'invalid_required'    => __( 'This field is required.', 'netmatters-challenge-theme' ),
				'invalid_email'       => __( 'Please enter a valid email address.', 'netmatters-challenge-theme' ),
				'invalid_too_short'   => __( 'This field is too short.', 'netmatters-challenge-theme' ),
				'invalid_too_long'    => __( 'This field is too long.', 'netmatters-challenge-theme' ),
				'upload_failed'       => __( 'Upload failed. Please try again.', 'netmatters-challenge-theme' ),
				'submission_not_found'=> __( 'Submission not found.', 'netmatters-challenge-theme' ),
				'mail_sent_ng'        => __( 'Unable to send your message right now. Please try again later.', 'netmatters-challenge-theme' ),
				'aborted'             => __( 'Submission aborted. Please try again.', 'netmatters-challenge-theme' ),
			),
		)
	);

	$saved = $form->save();

	if ( ! $saved ) {
		return 0;
	}

	return (int) $saved->id();
}


function nm_contact_form_shortcode() {
	if ( shortcode_exists( 'contact-form-7' ) ) {
		$form_id = nm_get_or_create_cf7_form_id();

		if ( $form_id > 0 ) {
			return do_shortcode( '[contact-form-7 id="' . $form_id . '" title="Contact Form (Free)"]' );
		}
	}

	if ( shortcode_exists( 'forminator_form' ) ) {
		$forms = get_posts(
			array(
				'post_type'      => 'forminator_forms',
				'posts_per_page' => 1,
				'post_status'    => 'publish',
			)
		);

		if ( ! empty( $forms ) ) {
			return do_shortcode( '[forminator_form id="' . (int) $forms[0]->ID . '"]' );
		}
	}

	if ( current_user_can( 'manage_options' ) ) {
		return '<p class="nm-form-setup-note">' . esc_html__( 'Install Contact Form 7 or Forminator and publish a form to enable the contact form section.', 'netmatters-challenge-theme' ) . '</p>';
	}

	return '<p class="nm-form-setup-note">' . esc_html__( 'Contact form is temporarily unavailable. Please call or email us directly.', 'netmatters-challenge-theme' ) . '</p>';
}
add_shortcode( 'nm_contact_form', 'nm_contact_form_shortcode' );
