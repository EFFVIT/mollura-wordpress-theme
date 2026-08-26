<?php
/**
 * "Topical Hair Loss Serum" page. Copy and images ported verbatim from
 * the live site (mollurahairtransplant.com/topical-hair-loss-serum/) --
 * bespoke pattern (accent block with a 33/66 formulation + ingredients
 * split) rather than the shared Service Detail template.
 *
 * Note: the live site has a real typo, "Finateride" (missing an "s"),
 * as one of the three ingredient sub-headings -- kept verbatim.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$img = get_template_directory_uri() . '/assets/images/services/';
?>
<main id="main">

	<?php
	get_template_part( 'template-parts/inner-banner', null, array(
		'eyebrow'   => 'Mollura Medical Hair Restoration',
		'title'     => 'Topical Hair Loss Serum',
		'image'     => $img . 'topical-hair-loss-serum-banner.png',
		'image_alt' => '',
		'cta_text'  => 'Contact Us',
		'cta_href'  => 'https://mollurahairtransplant.com/contact/',
	) );
	?>

	<!-- Intro -->
	<section class="mol-content-section">
		<div class="mol-container mol-split">
			<div class="mol-split__media">
				<img src="<?php echo esc_url( $img . 'topical-hair-loss-serum-intro.png' ); ?>" alt="">
			</div>
			<div class="mol-split__text">
				<span class="mol-eyebrow">Hair Loss Serum</span>
				<h2 class="mol-h2">What is Mollura Medical&rsquo;s Topical Hair Loss Serum?</h2>
				<p>It is a topical prescription solution customized for each patient that aims to combat hair loss. The medication contains the FDA-approved hair maintenance and hair growth medications Finasteride 1.0% and Minoxidil 10%. Finasteride is the active ingredient in the FDA-approved drug Propecia. Minoxidil is the FDA-approved active ingredient in over-the-counter Rogaine. The product also contains 0.01% Tretinoin, 5.0% Biotin, and 1.0% Caffeine. These dosages reflect our general formula. A personalized formula can be created based on the individual patient&rsquo;s needs.</p>
			</div>
		</div>
	</section>

	<!-- Formulation + ingredients (accent block) -->
	<section class="mol-content-section mol-content-section--accent">
		<div class="mol-container mol-split mol-split--33-66">
			<div>
				<h3>Topical Hair Loss Serum</h3>
				<p>Fully customizable to each patient&rsquo;s individual needs!</p>
				<p><strong>Our Most Popular Formulation:</strong></p>
				<ul class="mol-feature-list">
					<li>Minoxidil 10%</li>
					<li>Finasteride 1.0%</li>
					<li>Biotin 5.0%</li>
					<li>Caffeine 1.0%</li>
				</ul>
			</div>
			<div>
				<h3>Minoxidil</h3>
				<p>A stimulant for hair growth. Encouraging dormant follicles to generate hair and stregthen weaker follicles for thicker hair.</p>
				<h3 class="mol-mt-6">Finateride</h3>
				<p>A Dihydrotestosterone (DHT) blocker. DHT is a major cause of hair loss</p>
				<h3 class="mol-mt-6">Biotin</h3>
				<p>Helps your body produce keratin, the protein that makes up hair. Promotes stronger, healthier hair.</p>
			</div>
		</div>
	</section>

	<!-- How it works / how applied -->
	<section class="mol-content-section mol-content-section--flush-top">
		<div class="mol-container">
			<h3 class="mol-h3">How does Mollura Medical&rsquo;s Topical Hair Loss Serum work?</h3>
			<p>Minoxidil is widely recognized as a stimulant for hair growth, encouraging dormant follicles to generate hair and strengthening weaker follicles for thicker, more pigmented hair with regular application. Finasteride, taken orally, aims to diminish dihydrotestosterone (DHT), a key factor in hair loss. Emerging studies indicate that topical application of finasteride could offer an effective alternative for hair loss treatment, potentially minimizing the risk of side effects associated with oral administration. The Tretinoin promotes blood circulation and cell regeneration. Biotin, which helps strengthen hair follicles, and Caffeine, which has been shown to promote blood circulation when applied topically.</p>

			<h3 class="mol-h3 mol-mt-8">How and When should the Topical Hair Loss Serum be applied?</h3>
			<p>Our Topical Hair Loss Serum contains 120ml of medication, lasting about 70-90 days when used as directed. The doctor will recommend dosage based on each patient&rsquo;s health evaluation. Dosage can change based on the individual patient&rsquo;s needs. Generally, Dr. Mollura recommends applying the medication 2X per day using the provided dropper. The dropper contains clear volume lines to ensure proper dosage. The serum should be applied and massaged on the scalp evenly to the areas of need and allowed to absorb for at least 3 hours prior to showering or any physical activity that will cause you to sweat.</p>

			<a class="mol-btn mol-btn--outline-dark mol-mt-6" href="https://mollurahairtransplant.com/contact/">Contact Us</a>
		</div>
	</section>

	<?php get_template_part( 'template-parts/testimonials' ); ?>

	<?php get_template_part( 'template-parts/closing-cta' ); ?>

</main>
