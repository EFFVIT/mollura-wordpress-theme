<?php
/**
 * Template Name: Gallery
 *
 * Shared template for all 5 before-and-after gallery pages. Content is
 * looked up by slug from mollura_gallery_data() -- see
 * inc/galleries-data.php and patterns/gallery.php.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header();
get_template_part( 'patterns/gallery' );
get_footer();
