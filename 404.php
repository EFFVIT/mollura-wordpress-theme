<?php
/**
 * 404 (Not Found) template. Picked up automatically by WordPress's
 * template hierarchy for any unresolved URL -- no page/template
 * assignment needed.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header();
get_template_part( 'patterns/404' );
get_footer();
