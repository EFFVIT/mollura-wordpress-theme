<?php
/**
 * Homepage. Static-content pattern (no block editor content used) — mirrors
 * how the Skyline Cruises theme composes its per-page patterns, just simpler
 * since this is currently the only page in the theme.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header();
get_template_part( 'patterns/homepage' );
get_footer();
