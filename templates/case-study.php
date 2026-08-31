<?php
/**
 * Template Name: Case Study
 *
 * Shared template for the individual case-study articles linked from the
 * Case Studies index (/case-studies/). Content is looked up by slug from
 * mollura_case_study_data() -- see inc/case-studies-data.php and
 * patterns/case-study-detail.php.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header();
get_template_part( 'patterns/case-study-detail' );
get_footer();
