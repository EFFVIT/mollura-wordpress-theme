<?php
/**
 * "Case Studies" index page. Copy, titles, and images ported verbatim
 * from the live site (mollurahairtransplant.com/case-studies/).
 *
 * Each card's "Read More" link points to the corresponding live-site
 * case-study article (mollurahairtransplant.com/case-study/{slug}/) --
 * those individual long-form case-study articles are a separate content
 * type outside this rebuild's page scope, so they are linked out to
 * rather than rebuilt locally.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$img = get_template_directory_uri() . '/assets/images/';

$mollura_case_studies = array(
	array(
		'image'   => 'learn/case-study-1.png',
		'title'   => '2,200 Hair Graft Hair Transplant Case Study &ndash; Norwood Class 5',
		'excerpt' => 'A 25 year old male patient consulted with Dr. Mollura after experiencing significant hair loss for such young man. The patient was a Norwood Hair Loss Classification 5 with minimal vellus hair throughout the top of his scalp. [...]',
		'href'    => '/case-study/2200-hair-graft-hair-transplant-case-study-norwood-class-5/',
	),
	array(
		'image'   => 'learn/case-study-2.png',
		'title'   => 'Patient Video Testimonial',
		'excerpt' => 'This 56-year-old patient was a Norwood Hair Loss Classification 5a. When he came to Dr. Mollura for a consultation he was very unhappy with his appearance. His hair loss had impacted his self-confidence. [...]',
		'href'    => '/case-study/patient-video-testimonial/',
	),
	array(
		'image'   => 'learn/case-study-3.png',
		'title'   => 'Hair Restored Along the Edges from Traction Alopecia',
		'excerpt' => 'A 37-year-old female diagnosed with traction alopecia underwent a FUT hair transplant procedure with Dr. Mollura. She received 2,032 grafts to address her temporal zones and hairline. Nine months post-procedure, the patient returned to us for a follow-up review. [...]',
		'href'    => '/case-study/hair-restored-along-the-edges-from-traction-alopecia/',
	),
	array(
		'image'   => 'learn/case-study-4.png',
		'title'   => 'Frontal Hairline Restoration with FUE Hair Transplant + PRP',
		'excerpt' => 'This 49-year-old male came to Mollura Medical Hair Restoration for consultation with Dr. Mollura with significant Norwood class 4 hair loss. He was diagnosed with male androgenetic alopecia (MAA), and Dr. Mollura recommended the FUE hair transplant procedure [...]',
		'href'    => '/case-study/frontal-hairline-restoration-with-fue-hair-transplant-prp/',
	),
	array(
		'image'   => 'learn/case-study-5.png',
		'title'   => '2,320 Hair Grafts Transplanted to Restore Hairline',
		'excerpt' => 'This 52-year-old male underwent an FUT hair transplant with Dr. Mollura to add density to his hair line and mid-scalp. The patient had 2,320 grafts transplanted. The patient had been taking a daily dose of Finasteride before seeing us [...]',
		'href'    => '/case-study/2320-hair-grafts-transplanted-to-restore-hairline/',
	),
	array(
		'image'   => 'learn/case-study-6.png',
		'title'   => 'Norwood Class 5 Hair Transplant with 3,900 Hair Grafts',
		'excerpt' => 'This 35-year-old male patient had severe hair loss for his age. He was forthcoming about how his hair loss had negatively affected his self-confidence and image. He underwent a large FUT hair transplant with Dr. Mollura to add density from his hairline back [...]',
		'href'    => '/case-study/norwood-class-5-hair-transplant-with-3900-hair-grafts/',
	),
	array(
		'image'   => 'learn/case-study-7.png',
		'title'   => 'Short Hair Hair Transplant with FUE Procedure',
		'excerpt' => 'This 40-year-old male patient had a FUE hair transplant with Dr. Mollura to rebuild his hairline. Dr. Mollura recommended an FUE transplant because the patient likes to wear short hair. [...]',
		'href'    => '/case-study/short-hair-hair-transplant-with-fue-procedure/',
	),
	array(
		'image'   => 'learn/case-study-8.png',
		'title'   => '2 Session Norwood Hair Loss Class 3 FUT Hair Transplant',
		'excerpt' => 'A 49-year-old male patient underwent two hair transplant procedures performed 15 months apart at Mollura Medical Hair Restoration. The first transplant involved 1,656 grafts transplanted using the FUT method. Subsequently, the patient received a second transplant, transplanting 1,850 grafts with the FUE technique. [&hellip;]',
		'href'    => '/case-study/2-session-norwood-hair-loss-class-3-fut-hair-transplant/',
	),
	array(
		'image'   => 'learn/case-study-9.png',
		'title'   => 'African American Hair Transplant Results',
		'excerpt' => 'A 41-year-old male patient underwent two hair transplant procedures performed 5 years apart at Mollura Medical Hair Restoration. He presented himself to Dr. Mollura as a mature Norwood hair loss 6 classification. [...]',
		'href'    => '/case-study/african-american-hair-transplant-results/',
	),
	array(
		'image'   => 'learn/case-study-10.png',
		'title'   => 'FUE Hair Transplant To Fill Temporal Hairline',
		'excerpt' => 'This 48-year-old male was experiencing frontal hair loss in the temporal zones (Norwood Class 3). He came to our Long Island, NY, offices for a consultation about how best to treat his genetic hair loss. [...]',
		'href'    => '/case-study/fue-hair-transplant-to-fill-temporal-hairline/',
	),
	array(
		'image'   => 'learn/case-study-11.png',
		'title'   => 'Hair Restoration Journey',
		'excerpt' => 'CASE STUDIES Hair Restoration Journey This patient, at the age of 49, initially sought treatment for hair loss with Dr. Mollura in 2009. The patient was a 5A on the Norwood hair loss scale. At the time, the patient opted for a Follicular Unit Transplantation (FUT). Dr. Mollura transplanted approximately 2,000 grafts to address his [&hellip;]',
		'href'    => '/case-study/hair-restoration-journey/',
	),
);
?>
<main id="main">

	<?php
	get_template_part( 'template-parts/inner-banner', null, array(
		'eyebrow'   => 'Mollura Medical Hair Restoration',
		'title'     => 'Case Studies',
		'image'     => $img . 'learn/case-studies-banner.png',
		'image_alt' => 'Case Studies',
		'cta_text'  => 'Contact Us',
		'cta_href'  => '/contact/',
	) );
	?>

	<!-- Case studies grid -->
	<section class="mol-content-section">
		<div class="mol-container mol-case-grid">
			<?php foreach ( $mollura_case_studies as $mollura_case_study ) : ?>
				<article class="mol-case-card">
					<div class="mol-case-card__media">
						<img src="<?php echo esc_url( $img . $mollura_case_study['image'] ); ?>" alt="<?php echo esc_attr( wp_strip_all_tags( $mollura_case_study['title'] ) ); ?>">
					</div>
					<div class="mol-case-card__body">
						<span class="mol-eyebrow">Case Study</span>
						<h3><?php echo wp_kses_post( $mollura_case_study['title'] ); ?></h3>
						<p><?php echo wp_kses_post( $mollura_case_study['excerpt'] ); ?></p>
						<a class="mol-btn mol-btn--outline-dark mol-case-card__cta" href="<?php echo esc_url( $mollura_case_study['href'] ); ?>">Read More</a>
					</div>
				</article>
			<?php endforeach; ?>
		</div>
	</section>

	<?php get_template_part( 'template-parts/testimonials' ); ?>
	<?php get_template_part( 'template-parts/closing-cta' ); ?>

</main>
