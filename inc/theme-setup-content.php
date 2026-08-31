<?php
/**
 * Auto-provisions every WordPress Page this theme needs the moment the
 * theme is activated, so a fresh install ends up fully populated instead
 * of requiring ~48 pages to be hand-created in wp-admin one at a time.
 *
 * Every page below renders entirely from PHP (page-{slug}.php or a
 * shared "Template Name" pattern reading inc/*-data.php) -- post_content
 * is never used, so there's nothing to keep in sync after creation except
 * a page's existence, its template assignment, and its parent. Safe to
 * run on every activation: existing pages are never renamed, retitled,
 * or have their slug changed -- only a missing/mismatched template gets
 * reconciled.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function mollura_page_registry() {
	return array(

		// ---- Pages routed by WordPress's automatic page-{slug}.php
		// template hierarchy -- no _wp_page_template meta needed. ----
		array( 'slug' => 'about-us', 'title' => 'About Us' ),
		array( 'slug' => 'book-a-consultation', 'title' => 'Book a Consultation' ),
		array( 'slug' => 'case-studies', 'title' => 'Case Studies' ),
		array( 'slug' => 'causes-of-hair-loss', 'title' => 'Causes of Hair Loss' ),
		array( 'slug' => 'contact', 'title' => 'Contact' ),
		array( 'slug' => 'directions', 'title' => 'Directions' ),
		array( 'slug' => 'fda-approved-medications-for-hair-loss', 'title' => 'FDA Approved Medications For Hair Loss' ),
		array( 'slug' => 'financing', 'title' => 'Financing' ),
		array( 'slug' => 'fue-vs-fut', 'title' => 'FUE vs FUT' ),
		array( 'slug' => 'hair-restoration-services', 'title' => 'Hair Restoration Services' ),
		array( 'slug' => 'hair-transplant-faqs', 'title' => "Hair Transplant FAQ's" ),
		array( 'slug' => 'hairline-design', 'title' => 'Hairline Design' ),
		array( 'slug' => 'laser-hair-therapy-device', 'title' => 'Laser Hair Therapy Device' ),
		array( 'slug' => 'meet-the-team', 'title' => 'Meet the Team' ),
		array( 'slug' => 'non-surgical-hair-restoration', 'title' => 'Non-Surgical Hair Restoration' ),
		array( 'slug' => 'sitemap', 'title' => 'Sitemap' ),
		array( 'slug' => 'testimonials', 'title' => 'Testimonials' ),
		array( 'slug' => 'topical-hair-loss-serum', 'title' => 'Topical Hair Loss Serum' ),
		array( 'slug' => 'transplant-restoration-video-faqs', 'title' => 'Transplant & Restoration Video FAQs' ),
		array( 'slug' => 'tricomin-clinical', 'title' => 'Tricomin Clinical' ),

		// ---- Service Detail pages (templates/service-detail.php,
		// content from inc/services-data.php) ----
		array( 'slug' => 'fue-hair-transplant', 'title' => 'FUE Hair Transplant', 'template' => 'templates/service-detail.php' ),
		array( 'slug' => 'fut-hair-transplant', 'title' => 'FUT Hair Transplant', 'template' => 'templates/service-detail.php' ),
		array( 'slug' => 'facial-hair-transplants', 'title' => 'Facial Hair Transplants', 'template' => 'templates/service-detail.php' ),
		array( 'slug' => 'eyebrow-hair-restoration', 'title' => 'Eyebrow Hair Restoration', 'template' => 'templates/service-detail.php' ),
		array( 'slug' => 'african-american-hair-restoration', 'title' => 'African American Hair Restoration', 'template' => 'templates/service-detail.php' ),
		array( 'slug' => 'female-hair-loss-treatment', 'title' => 'Female Hair Loss Treatment', 'template' => 'templates/service-detail.php' ),
		array( 'slug' => 'hair-transplant-repair-corrective-surgery', 'title' => 'Hair Transplant Repair (Corrective Surgery)', 'template' => 'templates/service-detail.php' ),
		array( 'slug' => 'prp-therapy', 'title' => 'PRP Therapy', 'template' => 'templates/service-detail.php' ),
		array( 'slug' => 'scalp-micropigmentation-smp', 'title' => 'Scalp Micropigmentation (SMP)', 'template' => 'templates/service-detail.php' ),
		array( 'slug' => 'scar-repair', 'title' => 'Scar Repair', 'template' => 'templates/service-detail.php' ),
		array( 'slug' => 'crown-hair-transplant', 'title' => 'Crown Hair Transplant', 'template' => 'templates/service-detail.php' ),
		array( 'slug' => 'alopecia-types-and-hair-transplant-considerations', 'title' => 'Alopecia: Types and Hair Transplant Considerations', 'template' => 'templates/service-detail.php' ),

		// ---- Gallery pages (templates/gallery.php, content from
		// inc/galleries-data.php) ----
		array( 'slug' => 'male-hair-transplant-before-and-after', 'title' => 'Male Hair Transplant Before and After', 'template' => 'templates/gallery.php' ),
		array( 'slug' => 'female-hair-transplant-before-and-after', 'title' => 'Female Hair Transplant Before and After', 'template' => 'templates/gallery.php' ),
		array( 'slug' => 'fue-hair-transplant-before-and-after', 'title' => 'FUE Hair Transplant Before and After', 'template' => 'templates/gallery.php' ),
		array( 'slug' => 'fut-hair-transplant-before-and-after', 'title' => 'FUT Hair Transplant Before and After', 'template' => 'templates/gallery.php' ),
		array( 'slug' => 'eyebrow-hair-transplant-before-and-after', 'title' => 'Eyebrow Hair Transplant Before and After', 'template' => 'templates/gallery.php' ),

		// ---- Legal pages (templates/legal.php, content from
		// inc/legal-data.php) ----
		array( 'slug' => 'cookie-policy', 'title' => 'Cookie Policy', 'template' => 'templates/legal.php' ),
		array( 'slug' => 'privacy-policy', 'title' => 'Privacy Policy', 'template' => 'templates/legal.php' ),
		array( 'slug' => 'terms-of-service', 'title' => 'Terms of Service', 'template' => 'templates/legal.php' ),
		array( 'slug' => 'medical-disclaimer', 'title' => 'Medical Disclaimer', 'template' => 'templates/legal.php' ),

		// ---- Case Study parent (routing anchor only, no template) plus
		// its 11 children (templates/case-study.php, content from
		// inc/case-studies-data.php). Parent listed first so its ID
		// exists by the time children resolve 'parent' below. ----
		array( 'slug' => 'case-study', 'title' => 'Case Study' ),
		array( 'slug' => '2200-hair-graft-hair-transplant-case-study-norwood-class-5', 'title' => '2,200 Hair Graft Hair Transplant Case Study – Norwood Class 5', 'template' => 'templates/case-study.php', 'parent' => 'case-study' ),
		array( 'slug' => 'patient-video-testimonial', 'title' => 'Patient Video Testimonial', 'template' => 'templates/case-study.php', 'parent' => 'case-study' ),
		array( 'slug' => 'hair-restored-along-the-edges-from-traction-alopecia', 'title' => 'Hair Restored Along the Edges from Traction Alopecia', 'template' => 'templates/case-study.php', 'parent' => 'case-study' ),
		array( 'slug' => 'frontal-hairline-restoration-with-fue-hair-transplant-prp', 'title' => 'Frontal Hairline Restoration with FUE Hair Transplant + PRP', 'template' => 'templates/case-study.php', 'parent' => 'case-study' ),
		array( 'slug' => '2320-hair-grafts-transplanted-to-restore-hairline', 'title' => '2,320 Hair Grafts Transplanted to Restore Hairline', 'template' => 'templates/case-study.php', 'parent' => 'case-study' ),
		array( 'slug' => 'norwood-class-5-hair-transplant-with-3900-hair-grafts', 'title' => 'Norwood Class 5 Hair Transplant with 3,900 Hair Grafts', 'template' => 'templates/case-study.php', 'parent' => 'case-study' ),
		array( 'slug' => 'short-hair-hair-transplant-with-fue-procedure', 'title' => 'Short Hair Hair Transplant with FUE Procedure', 'template' => 'templates/case-study.php', 'parent' => 'case-study' ),
		array( 'slug' => '2-session-norwood-hair-loss-class-3-fut-hair-transplant', 'title' => '2 Session Norwood Hair Loss Class 3 FUT Hair Transplant', 'template' => 'templates/case-study.php', 'parent' => 'case-study' ),
		array( 'slug' => 'african-american-hair-transplant-results', 'title' => 'African American Hair Transplant Results', 'template' => 'templates/case-study.php', 'parent' => 'case-study' ),
		array( 'slug' => 'fue-hair-transplant-to-fill-temporal-hairline', 'title' => 'FUE Hair Transplant To Fill Temporal Hairline', 'template' => 'templates/case-study.php', 'parent' => 'case-study' ),
		array( 'slug' => 'hair-restoration-journey', 'title' => 'Hair Restoration Journey', 'template' => 'templates/case-study.php', 'parent' => 'case-study' ),

	);
}

function mollura_find_page_id_by_slug( $slug ) {
	$mollura_query = new WP_Query( array(
		'post_type'      => 'page',
		'name'           => $slug,
		'post_status'    => 'any',
		'posts_per_page' => 1,
		'fields'         => 'ids',
		'no_found_rows'  => true,
	) );
	return $mollura_query->posts[0] ?? 0;
}

function mollura_provision_pages() {
	$mollura_ids = array();

	foreach ( mollura_page_registry() as $mollura_page ) {
		$mollura_id = mollura_find_page_id_by_slug( $mollura_page['slug'] );

		if ( ! $mollura_id ) {
			$mollura_parent_id = 0;
			if ( ! empty( $mollura_page['parent'] ) ) {
				$mollura_parent_id = $mollura_ids[ $mollura_page['parent'] ] ?? mollura_find_page_id_by_slug( $mollura_page['parent'] );
			}

			$mollura_id = wp_insert_post( array(
				'post_title'  => $mollura_page['title'],
				'post_name'   => $mollura_page['slug'],
				'post_status' => 'publish',
				'post_type'   => 'page',
				'post_parent' => $mollura_parent_id,
			) );
		}

		if ( ! $mollura_id || is_wp_error( $mollura_id ) ) {
			continue;
		}

		$mollura_ids[ $mollura_page['slug'] ] = $mollura_id;

		if ( empty( $mollura_page['template'] ) ) {
			continue;
		}

		$mollura_current_template = get_post_meta( $mollura_id, '_wp_page_template', true );
		if ( $mollura_current_template !== $mollura_page['template'] ) {
			update_post_meta( $mollura_id, '_wp_page_template', $mollura_page['template'] );
		}
	}

	if ( '/%postname%/' !== get_option( 'permalink_structure' ) ) {
		update_option( 'permalink_structure', '/%postname%/' );
	}
	flush_rewrite_rules();

	update_option( 'mollura_pages_provisioned_version', MOLLURA_THEME_VERSION );
}
add_action( 'after_switch_theme', 'mollura_provision_pages' );

/**
 * `after_switch_theme` only fires on an actual theme *switch* -- if this
 * theme was already active before this provisioning code was added (or
 * before the registry grows in a future update), that hook never fires
 * again on its own. This runs the same idempotent provisioning once per
 * admin page load until the recorded version catches up to the current
 * theme version, so deploying new code is enough on its own -- no one has
 * to remember to deactivate/reactivate the theme.
 */
function mollura_maybe_provision_pages() {
	if ( get_option( 'mollura_pages_provisioned_version' ) !== MOLLURA_THEME_VERSION ) {
		mollura_provision_pages();
	}
}
add_action( 'admin_init', 'mollura_maybe_provision_pages' );
