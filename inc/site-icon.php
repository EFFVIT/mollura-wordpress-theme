<?php
/**
 * Sets the site icon (favicon / touch icon) from the theme's bundled
 * assets/images/site-icon.png -- a square badge cropped from the real
 * Mollura logo mark (assets/images/logo-color.png), not invented artwork.
 * Same auto-provisioning idiom as inc/theme-setup-content.php and
 * inc/seo-provision.php: runs once, never overwrites a value someone
 * later sets deliberately (e.g. picking a different icon in the
 * Customizer), and keeps retrying on admin_init until it succeeds.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function mollura_provision_site_icon() {
	if ( get_option( 'site_icon' ) ) {
		return true;
	}

	$mollura_source = get_template_directory() . '/assets/images/site-icon.png';
	if ( ! file_exists( $mollura_source ) ) {
		return false;
	}

	require_once ABSPATH . 'wp-admin/includes/file.php';
	require_once ABSPATH . 'wp-admin/includes/media.php';
	require_once ABSPATH . 'wp-admin/includes/image.php';

	$mollura_upload_dir = wp_upload_dir();
	if ( ! empty( $mollura_upload_dir['error'] ) ) {
		return false;
	}

	$mollura_dest = $mollura_upload_dir['path'] . '/mollura-site-icon.png';
	if ( ! file_exists( $mollura_dest ) && ! copy( $mollura_source, $mollura_dest ) ) {
		return false;
	}

	$mollura_filetype = wp_check_filetype( basename( $mollura_dest ), null );

	$mollura_attachment_id = wp_insert_attachment(
		array(
			'post_mime_type' => $mollura_filetype['type'],
			'post_title'     => 'Mollura Site Icon',
			'post_status'    => 'inherit',
		),
		$mollura_dest
	);

	if ( ! $mollura_attachment_id || is_wp_error( $mollura_attachment_id ) ) {
		return false;
	}

	$mollura_attachment_data = wp_generate_attachment_metadata( $mollura_attachment_id, $mollura_dest );
	wp_update_attachment_metadata( $mollura_attachment_id, $mollura_attachment_data );

	update_option( 'site_icon', $mollura_attachment_id );

	return true;
}
add_action( 'after_switch_theme', 'mollura_provision_site_icon' );

/**
 * Same rationale as mollura_maybe_provision_pages()/mollura_maybe_provision_seo():
 * `after_switch_theme` only fires on an actual theme switch, so this keeps
 * retrying once per admin page load until a site_icon is actually set,
 * then becomes a permanent no-op.
 */
function mollura_maybe_provision_site_icon() {
	if ( ! get_option( 'site_icon' ) ) {
		mollura_provision_site_icon();
	}
}
add_action( 'admin_init', 'mollura_maybe_provision_site_icon' );
