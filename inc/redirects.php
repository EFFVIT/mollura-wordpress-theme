<?php
/**
 * Legacy URL redirects -- slugs that existed on the live site but are
 * superseded by a current page in this rebuild, so they 301 forward
 * instead of being rebuilt as duplicate content.
 *
 * /financing-pricing/ was an older page (Lending Club financing copy)
 * superseded by /financing/ (current live Cherry financing widget).
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function mollura_legacy_redirects() {
	$mollura_map = array(
		'financing-pricing' => '/financing/',
	);

	$mollura_path = trim( (string) parse_url( $_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH ), '/' );

	if ( isset( $mollura_map[ $mollura_path ] ) ) {
		wp_safe_redirect( home_url( $mollura_map[ $mollura_path ] ), 301 );
		exit;
	}
}
add_action( 'template_redirect', 'mollura_legacy_redirects' );
