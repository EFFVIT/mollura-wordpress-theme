<?php
/**
 * Template Name: Service Detail
 *
 * Shared template for all individual service pages (FUE, FUT, PRP, etc.).
 * Content is looked up by slug from mollura_service_data() -- see
 * inc/services-data.php and patterns/service-detail.php.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header();
get_template_part( 'patterns/service-detail' );
get_footer();
