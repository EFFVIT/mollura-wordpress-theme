<?php
/**
 * Generic renderer for the 5 Gallery pages (Male/Female/FUE/FUT/Eyebrow
 * HT Gallery). Content comes from mollura_gallery_data() (inc/galleries-
 * data.php), keyed by the current page's slug -- shared by all 5 pages
 * via the "Gallery" page template instead of duplicating a pattern per
 * gallery, same mechanism as templates/service-detail.php.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$mollura_gallery = mollura_gallery_data( get_post_field( 'post_name' ) );
if ( ! $mollura_gallery ) {
	return;
}
$img = get_template_directory_uri() . '/assets/images/';
?>
<main id="main">

	<?php
	get_template_part( 'template-parts/inner-banner', null, array(
		'eyebrow'   => 'Mollura Medical Hair Restoration',
		'title'     => $mollura_gallery['banner_title'],
		'image'     => $img . $mollura_gallery['banner_image'],
		'image_alt' => $mollura_gallery['banner_title'],
		'cta_text'  => 'Contact Us',
		'cta_href'  => 'https://mollurahairtransplant.com/contact/',
	) );
	?>

	<!-- Intro -->
	<section class="mol-content-section">
		<div class="mol-container">
			<span class="mol-eyebrow">Mollura Medical Hair Restoration</span>
			<h2 class="mol-h2">Before and After</h2>
			<p>More and more people are choosing hair restoration treatments and procedures as a form of self-care, and it makes sense. Today&rsquo;s procedures create perfectly natural-looking results &ndash; results that improve self-confidence. After all, who doesn&rsquo;t want to look in the mirror and see yourself looking vigorous and more youthful again. At Mollura Medical Hair Restoration, we are committed to our clients&rsquo; best outcome.</p>
			<p>However, it can be difficult to image the possible results. That&rsquo;s why our before-and-after gallery is so useful. Our before-and-after hair restoration photos show actual results and demonstrate our commitment to our patients.</p>
			<p>Mollura Hair is proud to offer both FUE and FUT hair transplant procedures, as well as a number of specialty procedures such as eyebrow restoration, African American hair transplants, and more. We also provide a variety other hair loss solutions. Review the before-and-after gallery to discover what&rsquo;s possible, and contact us today to get started!</p>
		</div>
	</section>

	<!-- Before/after grid -->
	<section class="mol-content-section mol-content-section--flush-top">
		<div class="mol-container mol-gallery-ba-grid">
			<?php foreach ( $mollura_gallery['pairs'] as $mollura_pair ) : ?>
				<div class="mol-gallery-ba-item">
					<div class="mol-ba-compare" data-mol-ba-compare>
						<img class="mol-ba-compare__after" src="<?php echo esc_url( $img . $mollura_pair['after'] ); ?>" alt="After result">
						<div class="mol-ba-compare__before-wrap">
							<img class="mol-ba-compare__before" src="<?php echo esc_url( $img . $mollura_pair['before'] ); ?>" alt="Before result">
						</div>
						<input type="range" class="mol-ba-compare__range" min="0" max="100" value="50" aria-label="Drag to compare before and after">
						<div class="mol-ba-compare__handle" aria-hidden="true">
							<span class="mol-ba-compare__handle-grip">
								<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 8l-5 4 5 4M16 8l5 4-5 4"/></svg>
							</span>
						</div>
						<span class="mol-ba-compare__tag mol-ba-compare__tag--before">Before</span>
						<span class="mol-ba-compare__tag mol-ba-compare__tag--after">After</span>
					</div>
					<h3 class="mol-gallery-ba-item__title"><?php echo esc_html( $mollura_pair['title'] ); ?></h3>
				</div>
			<?php endforeach; ?>
		</div>
	</section>

	<?php get_template_part( 'template-parts/testimonials' ); ?>
	<?php get_template_part( 'template-parts/closing-cta' ); ?>

</main>
