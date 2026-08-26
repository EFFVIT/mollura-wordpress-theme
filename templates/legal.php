<?php
/**
 * Template Name: Legal
 *
 * Shared template for the legal pages (Cookie Policy, Privacy Policy,
 * Medical Disclaimer). Content is looked up by slug from
 * mollura_legal_data() -- see inc/legal-data.php and patterns/legal.php.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header();
get_template_part( 'patterns/legal' );
get_footer();
