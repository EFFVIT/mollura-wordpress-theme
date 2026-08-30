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
			<p><a class="mol-btn mol-btn--primary" href="/contact/">Book a Consultation Now</a></p>
		</div>
	</section>

	<?php get_template_part( 'template-parts/testimonials' ); ?>
	<?php get_template_part( 'template-parts/closing-cta' ); ?>

</main>
