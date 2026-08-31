<?php
/**
 * Seeds Rank Math's own SEO title/description post meta for every page in
 * mollura_page_registry(), from the data in inc/seo-data.php. No-ops
 * entirely when Rank Math isn't installed/active -- nothing here creates
 * or depends on the plugin, it only fills in its fields when present, so
 * SEO stays editable from wp-admin (Rank Math's own metabox) afterward
 * instead of living in template code.
 *
 * Never overwrites a value that's already set, so a manual edit made in
 * wp-admin is never clobbered on a later run.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function mollura_provision_seo() {
	if ( ! defined( 'RANK_MATH_VERSION' ) ) {
		return false;
	}

	foreach ( mollura_seo_registry() as $mollura_slug => $mollura_seo ) {
		$mollura_id = mollura_find_page_id_by_slug( $mollura_slug );
		if ( ! $mollura_id ) {
			continue;
		}

		if ( ! empty( $mollura_seo['title'] ) && '' === get_post_meta( $mollura_id, 'rank_math_title', true ) ) {
			update_post_meta( $mollura_id, 'rank_math_title', $mollura_seo['title'] );
		}

		if ( ! empty( $mollura_seo['description'] ) && '' === get_post_meta( $mollura_id, 'rank_math_description', true ) ) {
			update_post_meta( $mollura_id, 'rank_math_description', $mollura_seo['description'] );
		}
	}

	mollura_provision_homepage_seo();

	return true;
}

/**
 * The front page has no entry in mollura_page_registry() -- this theme
 * shows it via front-page.php through the template hierarchy without a
 * static "front page" ever being assigned in Settings > Reading. Rank Math
 * therefore has nothing to attach post meta to, and stores homepage SEO in
 * its own `rank_math_titles` option instead (same place it uses if a
 * static front page *is* assigned later, just under different keys).
 */
function mollura_provision_homepage_seo() {
	$mollura_home = mollura_homepage_seo();

	if ( 'page' === get_option( 'show_on_front' ) ) {
		$mollura_front_id = (int) get_option( 'page_on_front' );
		if ( ! $mollura_front_id ) {
			return;
		}

		if ( ! empty( $mollura_home['title'] ) && '' === get_post_meta( $mollura_front_id, 'rank_math_title', true ) ) {
			update_post_meta( $mollura_front_id, 'rank_math_title', $mollura_home['title'] );
		}
		if ( ! empty( $mollura_home['description'] ) && '' === get_post_meta( $mollura_front_id, 'rank_math_description', true ) ) {
			update_post_meta( $mollura_front_id, 'rank_math_description', $mollura_home['description'] );
		}
		return;
	}

	$mollura_titles = get_option( 'rank_math_titles', array() );
	if ( ! is_array( $mollura_titles ) ) {
		$mollura_titles = array();
	}

	$mollura_changed = false;

	if ( ! empty( $mollura_home['title'] ) && empty( $mollura_titles['homepage_title'] ) ) {
		$mollura_titles['homepage_title'] = $mollura_home['title'];
		$mollura_changed                  = true;
	}
	if ( ! empty( $mollura_home['description'] ) && empty( $mollura_titles['homepage_description'] ) ) {
		$mollura_titles['homepage_description'] = $mollura_home['description'];
		$mollura_changed                        = true;
	}

	if ( $mollura_changed ) {
		update_option( 'rank_math_titles', $mollura_titles );
	}
}
add_action( 'after_switch_theme', 'mollura_provision_seo' );

/**
 * Same rationale as mollura_maybe_provision_pages() -- runs once per admin
 * page load until it succeeds. Rank Math is frequently installed/activated
 * *after* this theme, so unlike the page provisioner this deliberately does
 * NOT gate on MOLLURA_THEME_VERSION: it keeps retrying on every admin_init
 * until Rank Math is active, then stays a no-op forever after (every value
 * it would set is already set).
 */
function mollura_maybe_provision_seo() {
	if ( get_option( 'mollura_seo_provisioned' ) ) {
		return;
	}

	if ( mollura_provision_seo() ) {
		update_option( 'mollura_seo_provisioned', '1' );
	}
}
add_action( 'admin_init', 'mollura_maybe_provision_seo' );
