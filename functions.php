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
 * memory). Used by template-parts/site-header.php.
 */
function mollura_primary_nav() {
	return array(
		array(
			'label' => 'Services',
			'href'  => '/hair-restoration-services/',
			'children' => array(
				array( 'label' => 'FUE Hair Transplant', 'href' => '/fue-hair-transplant/' ),
				array( 'label' => 'FUT Hair Transplant', 'href' => '/fut-hair-transplant/' ),
				array( 'label' => 'Facial Hair Transplants', 'href' => '/facial-hair-transplants/' ),
				array( 'label' => 'Eyebrow Hair Restoration', 'href' => '/eyebrow-hair-restoration/' ),
				array( 'label' => 'African American Hair Restoration', 'href' => '/african-american-hair-restoration/' ),
				array( 'label' => 'Female Hair Loss Treatment', 'href' => '/female-hair-loss-treatment/' ),
				array( 'label' => 'Hair Transplant Repair (Corrective Surgery)', 'href' => '/hair-transplant-repair-corrective-surgery/' ),
				array( 'label' => 'Non-Surgical Hair Restoration', 'href' => '/non-surgical-hair-restoration/' ),
				array( 'label' => 'PRP Therapy', 'href' => '/prp-therapy/' ),
				array( 'label' => 'Scalp Micropigmentation (SMP)', 'href' => '/scalp-micropigmentation-smp/' ),
				array( 'label' => 'FDA Approved Medications For Hair Loss', 'href' => '/fda-approved-medications-for-hair-loss/' ),
				array( 'label' => 'Topical Hair Loss Serum', 'href' => '/topical-hair-loss-serum/' ),
				array( 'label' => 'Laser Hair Therapy Device', 'href' => '/laser-hair-therapy-device/' ),
				array( 'label' => 'Tricomin Peptide Products for Hair', 'href' => '/tricomin-clinical/' ),
				array( 'label' => 'Scar Repair', 'href' => '/scar-repair/' ),
				array( 'label' => 'Crown Hair Transplant', 'href' => '/crown-hair-transplant/' ),
			),
		),
		array(
			'label' => 'About',
			'href'  => '/about-us/',
			'children' => array(
				array( 'label' => 'Meet the Team', 'href' => '/meet-the-team/' ),
				array( 'label' => 'Financing', 'href' => '/financing/' ),
				array( 'label' => 'Testimonials', 'href' => '/testimonials/' ),
			),
		),
		array(
			'label' => 'Learn',
			'href'  => '#',
			'children' => array(
				array( 'label' => 'Alopecia: Types and Hair Transplant Considerations', 'href' => '/alopecia-types-and-hair-transplant-considerations/' ),
				array( 'label' => 'Case Studies', 'href' => '/case-studies/' ),
				array( 'label' => 'FUE vs FUT', 'href' => '/fue-vs-fut/' ),
				array( 'label' => 'Hairline Design', 'href' => '/hairline-design/' ),
				array( 'label' => 'Causes of Hair Loss', 'href' => '/causes-of-hair-loss/' ),
				array( 'label' => "Hair Transplant FAQ's", 'href' => '/hair-transplant-faqs/' ),
				array( 'label' => 'Hair Restoration Video FAQs', 'href' => '/transplant-restoration-video-faqs/' ),
			),
		),
		array(
			'label' => 'Galleries',
			'href'  => '#',
			'children' => array(
				array( 'label' => 'Male HT Gallery', 'href' => '/male-hair-transplant-before-and-after/' ),
				array( 'label' => 'Female HT Gallery', 'href' => '/female-hair-transplant-before-and-after/' ),
				array( 'label' => 'FUE HT Gallery', 'href' => '/fue-hair-transplant-before-and-after/' ),
				array( 'label' => 'FUT HT Gallery', 'href' => '/fut-hair-transplant-before-and-after/' ),
				array( 'label' => 'Eyebrow Gallery', 'href' => '/eyebrow-hair-transplant-before-and-after/' ),
			),
		),
		array(
			'label' => 'Contact Us',
			'href'  => '/contact/',
			'children' => array(
				array( 'label' => 'Directions', 'href' => '/directions/' ),
			),
		),
		array(
			'label' => 'Ask the Doc',
			'href'  => '/transplant-restoration-video-faqs/',
			'children' => array(),
		),
	);
}
