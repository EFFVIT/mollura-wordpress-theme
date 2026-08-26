<?php
/**
 * Data for the 5 Gallery pages (Male/Female/FUE/FUT/Eyebrow HT Gallery).
 * Copy/images ported verbatim from the live site's before-and-after
 * pages -- each entry is a real patient photo pair rendered with the
 * homepage's .mol-ba-compare drag-to-compare widget (template-parts
 * reused, not rebuilt). Titles keep the live site's inconsistent
 * casing verbatim (e.g. "FUe HAIR TRANSPLANT", "EYEbrow FUT").
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function mollura_gallery_data( $slug ) {
	$galleries = array(
		'male-hair-transplant-before-and-after' => array(
			'banner_title' => 'Male Hair Transplant Before and After',
			'banner_image' => 'galleries/male-banner.png',
			'pairs'        => array(
				array( 'title' => 'FUE HAIR TRANSPLANT', 'before' => 'galleries/male-1-before.png', 'after' => 'galleries/male-1-after.png' ),
				array( 'title' => 'FUE HAIR TRANSPLANT', 'before' => 'galleries/male-2-before.png', 'after' => 'galleries/male-2-after.png' ),
				array( 'title' => 'FUT HAIR TRANSPLANT', 'before' => 'galleries/male-3-before.png', 'after' => 'galleries/male-3-after.png' ),
				array( 'title' => 'FUT Hair transplant', 'before' => 'galleries/male-4-before.png', 'after' => 'galleries/male-4-after.png' ),
				array( 'title' => 'FUT HAIR TRANSPLANT', 'before' => 'galleries/male-5-before.png', 'after' => 'galleries/male-5-after.png' ),
				array( 'title' => 'FUT Hair transplant', 'before' => 'galleries/male-6-before.png', 'after' => 'galleries/male-6-after.png' ),
				array( 'title' => 'EYEbrow FUT', 'before' => 'galleries/male-7-before.png', 'after' => 'galleries/male-7-after.png' ),
				array( 'title' => 'FUT Hair transplant', 'before' => 'galleries/male-8-before.png', 'after' => 'galleries/male-8-after.png' ),
				array( 'title' => 'FUT HAIR TRANSPLANT', 'before' => 'galleries/male-9-before.png', 'after' => 'galleries/male-9-after.png' ),
				array( 'title' => 'FUT Hair transplant', 'before' => 'galleries/male-10-before.png', 'after' => 'galleries/male-10-after.png' ),
				array( 'title' => 'FUT HAIR TRANSPLANT', 'before' => 'galleries/male-11-before.png', 'after' => 'galleries/male-11-after.png' ),
				array( 'title' => 'FUT Hair transplant', 'before' => 'galleries/male-12-before.png', 'after' => 'galleries/male-12-after.png' ),
				array( 'title' => 'FUT HAIR TRANSPLANT', 'before' => 'galleries/male-13-before.png', 'after' => 'galleries/male-13-after.png' ),
				array( 'title' => 'FUT Hair transplant', 'before' => 'galleries/male-14-before.png', 'after' => 'galleries/male-14-after.png' ),
				array( 'title' => 'FUT HAIR TRANSPLANT', 'before' => 'galleries/male-15-before.png', 'after' => 'galleries/male-15-after.png' ),
				array( 'title' => 'FUT HAIR TRANSPLANT', 'before' => 'galleries/male-16-before.png', 'after' => 'galleries/male-16-after.png' ),
				array( 'title' => 'FUT HAIR TRANSPLANT', 'before' => 'galleries/male-17-before.png', 'after' => 'galleries/male-17-after.png' ),
				array( 'title' => 'FUT HAIR TRANSPLANT', 'before' => 'galleries/male-18-before.png', 'after' => 'galleries/male-18-after.png' ),
				array( 'title' => 'FUT HAIR TRANSPLANT', 'before' => 'galleries/male-19-before.png', 'after' => 'galleries/male-19-after.png' ),
				array( 'title' => 'FUT HAIR TRANSPLANT', 'before' => 'galleries/male-20-before.png', 'after' => 'galleries/male-20-after.png' ),
				array( 'title' => 'FUT HAIR TRANSPLANT', 'before' => 'galleries/male-21-before.png', 'after' => 'galleries/male-21-after.png' ),
				array( 'title' => 'FUT HAIR TRANSPLANT', 'before' => 'galleries/male-22-before.png', 'after' => 'galleries/male-22-after.png' ),
				array( 'title' => 'FUT HAIR TRANSPLANT', 'before' => 'galleries/male-23-before.png', 'after' => 'galleries/male-23-after.png' ),
				array( 'title' => 'FUT HAIR TRANSPLANT', 'before' => 'galleries/male-24-before.png', 'after' => 'galleries/male-24-after.png' ),
				array( 'title' => 'FUT HAIR TRANSPLANT', 'before' => 'galleries/male-25-before.png', 'after' => 'galleries/male-25-after.png' ),
				array( 'title' => 'FUT HAIR TRANSPLANT', 'before' => 'galleries/male-26-before.png', 'after' => 'galleries/male-26-after.png' ),
				array( 'title' => 'FUT HAIR TRANSPLANT', 'before' => 'galleries/male-27-before.png', 'after' => 'galleries/male-27-after.png' ),
				array( 'title' => 'FUT HAIR TRANSPLANT', 'before' => 'galleries/male-28-before.png', 'after' => 'galleries/male-28-after.png' ),
			),
		),
		'female-hair-transplant-before-and-after' => array(
			'banner_title' => 'Female Hair Transplant Before and After',
			'banner_image' => 'galleries/female-banner.png',
			'pairs'        => array(
				array( 'title' => 'FUt HAIR TRANSPLANT', 'before' => 'galleries/female-1-before.png', 'after' => 'galleries/female-1-after.png' ),
				array( 'title' => 'FUT Hair transplant', 'before' => 'galleries/female-2-before.png', 'after' => 'galleries/female-2-after.png' ),
				array( 'title' => 'FUt HAIR TRANSPLANT', 'before' => 'galleries/female-3-before.png', 'after' => 'galleries/female-3-after.png' ),
				array( 'title' => 'FUT Hair transplant', 'before' => 'galleries/female-4-before.png', 'after' => 'galleries/female-4-after.png' ),
				array( 'title' => 'FUt HAIR TRANSPLANT', 'before' => 'galleries/female-5-before.png', 'after' => 'galleries/female-5-after.png' ),
				array( 'title' => 'FUT Hair transplant', 'before' => 'galleries/female-6-before.png', 'after' => 'galleries/female-6-after.png' ),
				array( 'title' => 'FUt HAIR TRANSPLANT', 'before' => 'galleries/female-7-before.png', 'after' => 'galleries/female-7-after.png' ),
				array( 'title' => 'FUT Hair transplant', 'before' => 'galleries/female-8-before.png', 'after' => 'galleries/female-8-after.png' ),
				array( 'title' => 'FUt HAIR TRANSPLANT', 'before' => 'galleries/female-9-before.png', 'after' => 'galleries/female-9-after.png' ),
				array( 'title' => 'FUT Hair transplant', 'before' => 'galleries/female-10-before.png', 'after' => 'galleries/female-10-after.png' ),
				array( 'title' => 'FUt HAIR TRANSPLANT', 'before' => 'galleries/female-11-before.png', 'after' => 'galleries/female-11-after.png' ),
				array( 'title' => 'FUT Hair transplant', 'before' => 'galleries/female-12-before.png', 'after' => 'galleries/female-12-after.png' ),
				array( 'title' => 'FUt HAIR TRANSPLANT', 'before' => 'galleries/female-13-before.png', 'after' => 'galleries/female-13-after.png' ),
			),
		),
		'fue-hair-transplant-before-and-after' => array(
			'banner_title' => 'FUE Hair Transplant Before and After',
			'banner_image' => 'galleries/fue-banner.png',
			'pairs'        => array(
				array( 'title' => 'FUe HAIR TRANSPLANT', 'before' => 'galleries/fue-1-before.png', 'after' => 'galleries/fue-1-after.png' ),
				array( 'title' => 'FUe HAIR TRANSPLANT', 'before' => 'galleries/fue-2-before.png', 'after' => 'galleries/fue-2-after.png' ),
				array( 'title' => 'FUe HAIR TRANSPLANT', 'before' => 'galleries/fue-3-before.png', 'after' => 'galleries/fue-3-after.png' ),
				array( 'title' => 'FUe HAIR TRANSPLANT', 'before' => 'galleries/fue-4-before.png', 'after' => 'galleries/fue-4-after.png' ),
				array( 'title' => 'FUe HAIR TRANSPLANT', 'before' => 'galleries/fue-5-before.png', 'after' => 'galleries/fue-5-after.png' ),
				array( 'title' => 'FUe HAIR TRANSPLANT', 'before' => 'galleries/fue-6-before.png', 'after' => 'galleries/fue-6-after.png' ),
				array( 'title' => 'FUe HAIR TRANSPLANT', 'before' => 'galleries/fue-7-before.png', 'after' => 'galleries/fue-7-after.png' ),
				array( 'title' => 'FUe HAIR TRANSPLANT', 'before' => 'galleries/fue-8-before.png', 'after' => 'galleries/fue-8-after.png' ),
				array( 'title' => 'FUe HAIR TRANSPLANT', 'before' => 'galleries/fue-9-before.png', 'after' => 'galleries/fue-9-after.png' ),
				array( 'title' => 'FUe HAIR TRANSPLANT', 'before' => 'galleries/fue-10-before.png', 'after' => 'galleries/fue-10-after.png' ),
				array( 'title' => 'FUe HAIR TRANSPLANT', 'before' => 'galleries/fue-11-before.png', 'after' => 'galleries/fue-11-after.png' ),
				array( 'title' => 'FUe HAIR TRANSPLANT', 'before' => 'galleries/fue-12-before.png', 'after' => 'galleries/fue-12-after.png' ),
				array( 'title' => 'FUe HAIR TRANSPLANT', 'before' => 'galleries/fue-13-before.png', 'after' => 'galleries/fue-13-after.png' ),
				array( 'title' => 'FUe HAIR TRANSPLANT', 'before' => 'galleries/fue-14-before.png', 'after' => 'galleries/fue-14-after.png' ),
			),
		),
		'fut-hair-transplant-before-and-after' => array(
			'banner_title' => 'FUT Hair Transplant Before and After',
			'banner_image' => 'galleries/fut-banner.png',
			'pairs'        => array(
				array( 'title' => 'FUT HAIR TRANSPLANT', 'before' => 'galleries/fut-1-before.png', 'after' => 'galleries/fut-1-after.png' ),
				array( 'title' => 'FUT Hair transplant', 'before' => 'galleries/fut-2-before.png', 'after' => 'galleries/fut-2-after.png' ),
				array( 'title' => 'FUT HAIR TRANSPLANT', 'before' => 'galleries/fut-3-before.png', 'after' => 'galleries/fut-3-after.png' ),
				array( 'title' => 'FUT Hair transplant', 'before' => 'galleries/fut-4-before.png', 'after' => 'galleries/fut-4-after.png' ),
				array( 'title' => 'FUt HAIR TRANSPLANT', 'before' => 'galleries/fut-5-before.png', 'after' => 'galleries/fut-5-after.png' ),
				array( 'title' => 'FUT Hair transplant', 'before' => 'galleries/fut-6-before.png', 'after' => 'galleries/fut-6-after.png' ),
				array( 'title' => 'FUt HAIR TRANSPLANT', 'before' => 'galleries/fut-7-before.png', 'after' => 'galleries/fut-7-after.png' ),
				array( 'title' => 'FUT Hair transplant', 'before' => 'galleries/fut-8-before.png', 'after' => 'galleries/fut-8-after.png' ),
				array( 'title' => 'FUt HAIR TRANSPLANT', 'before' => 'galleries/fut-9-before.png', 'after' => 'galleries/fut-9-after.png' ),
				array( 'title' => 'FUT Hair transplant', 'before' => 'galleries/fut-10-before.png', 'after' => 'galleries/fut-10-after.png' ),
				array( 'title' => 'FUt HAIR TRANSPLANT', 'before' => 'galleries/fut-11-before.png', 'after' => 'galleries/fut-11-after.png' ),
				array( 'title' => 'FUT Hair transplant', 'before' => 'galleries/fut-12-before.png', 'after' => 'galleries/fut-12-after.png' ),
				array( 'title' => 'FUt HAIR TRANSPLANT', 'before' => 'galleries/fut-13-before.png', 'after' => 'galleries/fut-13-after.png' ),
			),
		),
		'eyebrow-hair-transplant-before-and-after' => array(
			'banner_title' => 'Eyebrow Hair Transplant Before and After',
			'banner_image' => 'galleries/eyebrow-banner.png',
			'pairs'        => array(
				array( 'title' => 'EYEbrow FUT', 'before' => 'galleries/eyebrow-1-before.png', 'after' => 'galleries/eyebrow-1-after.png' ),
				array( 'title' => 'FUT Hair transplant', 'before' => 'galleries/eyebrow-2-before.png', 'after' => 'galleries/eyebrow-2-after.png' ),
			),
		),
	);
	return $galleries[ $slug ] ?? null;
}
