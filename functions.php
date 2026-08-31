<?php
/**
 * Mollura Medical Hair Restoration theme functions.
 * No page builder — plain PHP templates + hand-authored block markup only.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'MOLLURA_THEME_VERSION', '1.0.0' );

require get_template_directory() . '/inc/services-data.php';
require get_template_directory() . '/inc/galleries-data.php';
require get_template_directory() . '/inc/legal-data.php';
require get_template_directory() . '/inc/locations-data.php';
require get_template_directory() . '/inc/case-studies-data.php';
require get_template_directory() . '/inc/redirects.php';
require get_template_directory() . '/inc/theme-setup-content.php';
require get_template_directory() . '/inc/seo-data.php';
require get_template_directory() . '/inc/seo-provision.php';

/**
 * Cache-bust every theme-owned asset off its real file mtime, so an edit here
 * always invalidates cached CSS/JS in the browser without hand-bumping a version
 * string. (See EFFVIT WordPress+Coolify build notes — a hardcoded version string
 * caused a real "the fix isn't working" stale-cache incident on a prior project.)
 */
function mollura_asset_version( $relative_path ) {
	$file = get_template_directory() . '/' . ltrim( $relative_path, '/' );
	return file_exists( $file ) ? filemtime( $file ) : MOLLURA_THEME_VERSION;
}

/**
 * Theme setup.
 */
function mollura_theme_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'align-wide' );

	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'mollura' ),
	) );
}
add_action( 'after_setup_theme', 'mollura_theme_setup' );

/**
 * Homepage meta description, ported verbatim from the approved static rebuild's
 * <meta name="description">.
 */
function mollura_meta_description() {
	if ( is_front_page() ) {
		echo '<meta name="description" content="Mollura Medical Hair Restoration is one of Long Island\'s top clinics for surgical and non-surgical hair loss treatments including FUE, FUT, supplemental PRP, hair loss medications, and more. Our knowledgeable team will help you regain the hair you deserve." />' . "\n";
	}
}
add_action( 'wp_head', 'mollura_meta_description', 1 );

/**
 * Enqueue styles/scripts.
 */
function mollura_enqueue_assets() {
	wp_enqueue_style(
		'mollura-fonts',
		'https://fonts.googleapis.com/css2?family=Manrope:wght@700;800&family=Jost:ital,wght@0,100..900;1,100..900&display=swap',
		array(),
		null
	);
	wp_enqueue_style( 'mollura-tokens', get_template_directory_uri() . '/assets/css/tokens.css', array(), mollura_asset_version( 'assets/css/tokens.css' ) );
	wp_enqueue_style( 'mollura-styles', get_template_directory_uri() . '/assets/css/styles.css', array( 'mollura-tokens' ), mollura_asset_version( 'assets/css/styles.css' ) );
	wp_enqueue_script( 'mollura-main', get_template_directory_uri() . '/assets/js/main.js', array(), mollura_asset_version( 'assets/js/main.js' ), true );

	// GHL/RootLogic form embed script (used by the Book a Consultation iframe).
	wp_enqueue_script( 'ghl-form-embed', 'https://link.leadconnectorhq.com/js/form_embed.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'mollura_enqueue_assets' );

/**
 * Stop WordPress from restructuring hand-authored block markup at render time.
 * Without this, core's layout-support machinery injects a
 * .wp-block-group__inner-container wrapper around every group block's real
 * content, silently collapsing multi-column sections (feature grids, card
 * grids, comparison columns) into a single stacked column even though the
 * markup and CSS both look correct on inspection.
 */
remove_filter( 'render_block', 'wp_render_layout_support_flag', 10 );
remove_filter( 'render_block_core/group', 'wp_restore_group_inner_container', 10 );
remove_filter( 'render_block_core/image', 'wp_restore_image_outer_container', 10 );

/**
 * Dequeue core block CSS/global-styles so only this theme's own tokens.css /
 * styles.css apply. Since WP 6.3 core block CSS is split per-block-type
 * (should_load_separate_core_block_assets), so a plain wp_dequeue_style call
 * alone doesn't catch it — force it back to the single legacy bundle first.
 */
add_filter( 'should_load_separate_core_block_assets', '__return_false' );
remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
remove_action( 'wp_footer', 'wp_enqueue_global_styles', 1 );

function mollura_dequeue_core_block_css() {
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'wp-block-library-theme' );
	wp_dequeue_style( 'classic-theme-styles' );
	wp_dequeue_style( 'global-styles' );
}
add_action( 'wp_enqueue_scripts', 'mollura_dequeue_core_block_css', 20 );

/**
 * Real site nav data, ported verbatim from the live mollurahairtransplant.com
 * menu structure (confirmed against the live site directly — see project
 * memory). Used by template-parts/site-header.php to render a mega-menu:
 * 'type' => 'list' renders multi-column groups (each with a heading), while
 * 'simple' renders a single flat column with no heading. Every leaf item
 * carries a 16x16 inline icon (trusted static markup, not user input).
 */
function mollura_primary_nav() {
	$icon_syringe   = '<path d="m18 2 4 4"/><path d="m17 7 3-3"/><path d="M19 9 8.7 19.3c-1 1-2.5 1-3.4 0l-.6-.6c-1-1-1-2.5 0-3.4L15 5"/><path d="m9 11 4 4"/><path d="m5 19-3 3"/><path d="m14 4 6 6"/>';
	$icon_calendar  = '<rect x="3" y="4.5" width="18" height="16" rx="2"/><path d="M16 2.5v4M8 2.5v4M3 10h18"/><path d="M9 15.5l2 2 4-4.5"/>';
	$icon_target_cross = '<circle cx="12" cy="12" r="9"/><path d="M12 8v8M8 12h8"/>';
	$icon_eye       = '<path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"/><circle cx="12" cy="12" r="3"/>';
	$icon_users     = '<circle cx="9" cy="7" r="3"/><circle cx="16" cy="8.5" r="2.3"/><path d="M2 21v-2a4 4 0 0 1 4-4h4a4 4 0 0 1 4 3.6"/><path d="M15 13.2a3 3 0 0 1 3 3V17"/>';
	$icon_user      = '<path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/>';
	$icon_refresh   = '<path d="M21 12a9 9 0 1 1-2.64-6.36"/><path d="M21 3v6h-6"/>';
	$icon_crown     = '<circle cx="12" cy="12" r="9"/><path d="M9 12l3-3 3 3"/>';
	$icon_target    = '<circle cx="12" cy="12" r="8"/><circle cx="12" cy="12" r="4"/><circle cx="12" cy="12" r="0.8" fill="currentColor" stroke="none"/>';
	$icon_shield    = '<path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/>';
	$icon_droplet   = '<path d="M12 22a7 7 0 0 0 7-7c0-2-1-3.9-3-5.5s-3.5-4-4-6.5c-.5 2.5-2 4.9-4 6.5C6 11.1 5 13 5 15a7 7 0 0 0 7 7z"/>';
	$icon_dots      = '<circle cx="6" cy="12" r="1.6" fill="currentColor" stroke="none"/><circle cx="12" cy="12" r="1.6" fill="currentColor" stroke="none"/><circle cx="18" cy="12" r="1.6" fill="currentColor" stroke="none"/>';
	$icon_pill      = '<rect x="4" y="9" width="16" height="6" rx="3"/><line x1="12" y1="9" x2="12" y2="15"/>';
	$icon_wave      = '<path d="M3 15c3-4 6-4 9 0s6 4 9 0"/>';
	$icon_zap       = '<path d="M15.914 4a1.5 1.5 0 0 0-2.474-1.561l-9 9A1.5 1.5 0 0 0 5.5 14h4.002a.5.5 0 0 1 .471.666L8.086 20a1.5 1.5 0 0 0 2.475 1.56l9-9A1.5 1.5 0 0 0 18.5 10h-3.997a.5.5 0 0 1-.472-.667z"/>';
	$icon_flask     = '<path d="M9 3v6.5L4.5 19a1.5 1.5 0 0 0 1.3 2.2h12.4a1.5 1.5 0 0 0 1.3-2.2L15 9.5V3"/><path d="M9 3h6"/>';
	$icon_card      = '<rect x="3" y="5" width="18" height="14" rx="2"/><line x1="3" y1="10" x2="21" y2="10"/>';
	$icon_star      = '<path d="M12 2l2.9 6.9 7.1.6-5.4 4.7 1.6 7-6.2-3.9-6.2 3.9 1.6-7L1 9.5l7.1-.6z"/>';
	$icon_file      = '<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/><line x1="8" y1="13" x2="16" y2="13"/><line x1="8" y1="17" x2="16" y2="17"/>';
	$icon_compare   = '<path d="M8 8l-5 4 5 4M16 8l5 4-5 4"/>';
	$icon_search    = '<circle cx="11" cy="11" r="7"/><line x1="21" y1="21" x2="16.65" y2="16.65"/>';
	$icon_chart     = '<line x1="6" y1="20" x2="6" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="18" y1="20" x2="18" y2="14"/>';
	$icon_message   = '<path d="M4 4h16v11H8l-4 4V4z"/>';
	$icon_play      = '<circle cx="12" cy="12" r="9"/><path d="M10 8l6 4-6 4V8z"/>';
	$icon_image     = '<rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="8.5" cy="10.5" r="1.5"/><path d="M21 15l-5-5L5 19"/>';
	$icon_pin       = '<path d="M12 21s7-6.5 7-12a7 7 0 0 0-14 0c0 5.5 7 12 7 12z"/><circle cx="12" cy="9" r="2.5"/>';

	return array(
		array(
			'label' => 'Services',
			'href'  => '/hair-restoration-services/',
			'type'  => 'list',
			'children' => array(
				array(
					'heading' => 'Hair Transplants',
					'items'   => array(
						array( 'label' => 'FUE Hair Transplant', 'href' => '/fue-hair-transplant/', 'icon' => $icon_syringe ),
						array( 'label' => 'FUT Hair Transplant', 'href' => '/fut-hair-transplant/', 'icon' => $icon_calendar ),
						array( 'label' => 'Facial Hair Transplants', 'href' => '/facial-hair-transplants/', 'icon' => $icon_target_cross ),
						array( 'label' => 'Eyebrow Hair Restoration', 'href' => '/eyebrow-hair-restoration/', 'icon' => $icon_eye ),
						array( 'label' => 'African American Hair Restoration', 'href' => '/african-american-hair-restoration/', 'icon' => $icon_users ),
						array( 'label' => 'Female Hair Loss Treatment', 'href' => '/female-hair-loss-treatment/', 'icon' => $icon_user ),
						array( 'label' => 'Hair Transplant Repair (Corrective Surgery)', 'href' => '/hair-transplant-repair-corrective-surgery/', 'icon' => $icon_refresh ),
						array( 'label' => 'Crown Hair Transplant', 'href' => '/crown-hair-transplant/', 'icon' => $icon_crown ),
						array( 'label' => 'Scar Repair', 'href' => '/scar-repair/', 'icon' => $icon_target ),
					),
				),
				array(
					'heading' => 'Non-Surgical & Medical Treatments',
					'items'   => array(
						array( 'label' => 'Non-Surgical Hair Restoration', 'href' => '/non-surgical-hair-restoration/', 'icon' => $icon_shield ),
						array( 'label' => 'PRP Therapy', 'href' => '/prp-therapy/', 'icon' => $icon_droplet ),
						array( 'label' => 'Scalp Micropigmentation (SMP)', 'href' => '/scalp-micropigmentation-smp/', 'icon' => $icon_dots ),
						array( 'label' => 'FDA Approved Medications For Hair Loss', 'href' => '/fda-approved-medications-for-hair-loss/', 'icon' => $icon_pill ),
						array( 'label' => 'Topical Hair Loss Serum', 'href' => '/topical-hair-loss-serum/', 'icon' => $icon_wave ),
						array( 'label' => 'Laser Hair Therapy Device', 'href' => '/laser-hair-therapy-device/', 'icon' => $icon_zap ),
						array( 'label' => 'Tricomin Peptide Products for Hair', 'href' => '/tricomin-clinical/', 'icon' => $icon_flask ),
					),
				),
			),
		),
		array(
			'label' => 'About',
			'href'  => '/about-us/',
			'type'  => 'simple',
			'children' => array(
				array( 'label' => 'Meet the Team', 'href' => '/meet-the-team/', 'icon' => $icon_users ),
				array( 'label' => 'Financing', 'href' => '/financing/', 'icon' => $icon_card ),
				array( 'label' => 'Testimonials', 'href' => '/testimonials/', 'icon' => $icon_star ),
			),
		),
		array(
			'label' => 'Learn',
			'href'  => '#',
			'type'  => 'list',
			'children' => array(
				array(
					'heading' => 'Education',
					'items'   => array(
						array( 'label' => 'Alopecia: Types and Hair Transplant Considerations', 'href' => '/alopecia-types-and-hair-transplant-considerations/', 'icon' => $icon_file ),
						array( 'label' => 'FUE vs FUT', 'href' => '/fue-vs-fut/', 'icon' => $icon_compare ),
						array( 'label' => 'Hairline Design', 'href' => '/hairline-design/', 'icon' => $icon_wave ),
						array( 'label' => 'Causes of Hair Loss', 'href' => '/causes-of-hair-loss/', 'icon' => $icon_search ),
						array( 'label' => 'Case Studies', 'href' => '/case-studies/', 'icon' => $icon_chart ),
					),
				),
				array(
					'heading' => 'FAQs & Videos',
					'items'   => array(
						array( 'label' => "Hair Transplant FAQ's", 'href' => '/hair-transplant-faqs/', 'icon' => $icon_message ),
						array( 'label' => 'Hair Restoration Video FAQs', 'href' => '/transplant-restoration-video-faqs/', 'icon' => $icon_play ),
					),
				),
			),
		),
		array(
			'label' => 'Galleries',
			'href'  => '#',
			'type'  => 'simple',
			'children' => array(
				array( 'label' => 'Male HT Gallery', 'href' => '/male-hair-transplant-before-and-after/', 'icon' => $icon_image ),
				array( 'label' => 'Female HT Gallery', 'href' => '/female-hair-transplant-before-and-after/', 'icon' => $icon_image ),
				array( 'label' => 'FUE HT Gallery', 'href' => '/fue-hair-transplant-before-and-after/', 'icon' => $icon_image ),
				array( 'label' => 'FUT HT Gallery', 'href' => '/fut-hair-transplant-before-and-after/', 'icon' => $icon_image ),
				array( 'label' => 'Eyebrow Gallery', 'href' => '/eyebrow-hair-transplant-before-and-after/', 'icon' => $icon_image ),
			),
		),
		array(
			'label' => 'Contact Us',
			'href'  => '/contact/',
			'type'  => 'simple',
			'children' => array(
				array( 'label' => 'Directions', 'href' => '/directions/', 'icon' => $icon_pin ),
			),
		),
		array(
			'label' => 'Ask the Doc',
			'href'  => '/transplant-restoration-video-faqs/',
			'type'  => 'simple',
			'children' => array(),
		),
	);
}
