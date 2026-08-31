<?php
/**
 * "Book a Consultation" page. Copy and banner image ported verbatim from
 * the live site (mollurahairtransplant.com/book-a-consultation/) --
 * structure/visual design rebuilt to match the homepage's design system,
 * same single-column pattern as Causes of Hair Loss / Hairline Design.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$img = get_template_directory_uri() . '/assets/images/';
?>
<main id="main">

	<?php
	get_template_part( 'template-parts/inner-banner', null, array(
		'eyebrow'   => 'Mollura Medical Hair Restoration',
		'title'     => 'Book a Consultation',
		'image'     => $img . 'book-a-consultation-banner.png',
		'image_alt' => 'Book a Consultation',
		'cta_text'  => 'Call Today',
		'cta_href'  => 'tel:+15163543876',
	) );
	?>

	<!-- Book a Consultation -->
	<section class="mol-content-section">
		<div class="mol-container mol-prose">
			<span class="mol-eyebrow">Mollura Medical Hair Restoration</span>
			<h2 class="mol-h2">Learn More by Booking a Consultation</h2>
			<p>While male (or female) pattern baldness is the most common form of hair loss, a number of things could be causing your thinning hair, from genetics to illness or stress. The good news is that today we have treatment options instead of just trying to hide your hair loss. Book a consultation with us to learn more about the exact type of hair loss you are experiencing and the best ways to treat it. In most cases, you can get back to looking like yourself again.</p>
			<p>Virtual consultations are available if that&rsquo;s more convenient for the initial consultation. However, to ensure the best results, we recommend an in-person appointment for the most thorough answers.</p>
			<p>Schedule an appointment today and regain the confidence that comes with a more youthful appearance. Book a consultation now.</p>
			<h3 class="mol-h3 mol-mt-8">Recognize the Signs of Hair Loss</h3>
			<p>Do you have a receding hairline? Have you noticed your part widening? Or overall hair thinning? Gaps or thin spots in your beard, mustache, or eyebrows? You don&rsquo;t have to live with advanced hair loss. Today&rsquo;s treatment breakthroughs and state-of-the-art technology means that you have more hair restoration treatment methods than ever before.</p>
		</div>
	</section>

	<!-- Schedule a Consultation -->
	<section class="mol-consultation" id="book-consultation">
		<div class="mol-container">
			<div class="mol-consultation__row">
				<div class="mol-consultation__form">
					<iframe
						src="https://api.leadconnectorhq.com/widget/form/QLVtK3vV2NBrePgva4xK"
						style="width:100%;height:100%;min-height:530px;border:none;border-radius:10px"
						id="inline-QLVtK3vV2NBrePgva4xK"
						data-layout="{'id':'INLINE'}"
						data-trigger-type="alwaysShow"
						data-trigger-value=""
						data-activation-type="alwaysActivated"
						data-activation-value=""
						data-deactivation-type="neverDeactivate"
						data-deactivation-value=""
						data-form-name="Mollura Hair Website Book a Consultation Page"
						data-height="530"
						data-layout-iframe-id="inline-QLVtK3vV2NBrePgva4xK"
						data-form-id="QLVtK3vV2NBrePgva4xK"
						title="Mollura Hair Website Book a Consultation Page">
					</iframe>
				</div>
				<div class="mol-consultation__photos">
					<img class="mol-consultation__photo mol-consultation__photo--back" src="<?php echo esc_url( $img . 'consultation-photo-1.png' ); ?>" alt="Patient during a virtual consultation with Mollura Medical Hair Restoration">
					<img class="mol-consultation__photo mol-consultation__photo--front" src="<?php echo esc_url( $img . 'consultation-photo-2.png' ); ?>" alt="Patient shaking hands with a Mollura Medical Hair Restoration doctor">
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part( 'template-parts/testimonials' ); ?>
	<?php get_template_part( 'template-parts/closing-cta' ); ?>

</main>
