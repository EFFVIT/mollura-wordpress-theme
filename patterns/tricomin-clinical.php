<?php
/**
 * "Tricomin Clinical" page (nav label: "Tricomin Peptide Products for
 * Hair"). Copy and images ported verbatim from the live site
 * (mollurahairtransplant.com/tricomin-clinical/) -- bespoke pattern
 * (3 product rows, text-only intro) rather than the shared Service
 * Detail template.
 *
 * Note: the live site has a real typo, "Smapoo" (should be "Shampoo"),
 * in the closing pricing paragraph -- kept verbatim.
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
		'title'     => 'TRICOMIN CLINICAL',
		'image'     => $img . 'tricomin-banner.png',
		'image_alt' => '',
		'cta_text'  => 'Contact Us',
		'cta_href'  => 'https://mollurahairtransplant.com/contact/',
	) );
	?>

	<!-- Intro -->
	<section class="mol-content-section">
		<div class="mol-container">
			<span class="mol-eyebrow">Mollura Medical Hair Restoration</span>
			<h2 class="mol-h2">Triamino Copper Complex&reg;</h2>
			<p>Transform the look of your hair and make it feel visibly healthier with the power of <strong>Triamino Copper Complex&reg;!</strong></p>
			<p><strong>TRICOMIN CLINICAL</strong> targets scalp and hair health with <strong>Triamino Copper Complex,</strong> the patented technology that delivers a unique blend of essential amino acids and minerals to improve the appearance and wellness of your hair.</p>
		</div>
	</section>

	<!-- Product rows -->
	<section class="mol-content-section mol-content-section--flush-top">
		<div class="mol-container">
			<div class="mol-med-grid mol-med-grid--stacked">
				<div class="mol-med-card">
					<img src="<?php echo esc_url( $img . 'tricomin-shampoo.png' ); ?>" alt="Tricomin Densifying Shampoo bottle">
					<div>
						<h4>Densifying Shampoo</h4>
						<p><strong>Energizes and Revives</strong></p>
						<p>A deep cleansing formula that creates a healthy environment for hair strength and shine. Safe for color-treated hair.<br>In clinical studies, Triamino Copper Complex&reg;, a patented peptide blend of copper and amino acids, has been shown to boost hair health and revitalize its appearance.</p>
					</div>
				</div>
				<div class="mol-med-card mol-mt-8">
					<img src="<?php echo esc_url( $img . 'tricomin-conditioner.png' ); ?>" alt="Tricomin Reinforcing Conditioner bottle">
					<div>
						<h4>Reinforcing Conditioner</h4>
						<p><strong>Deep Infusing Formula</strong></p>
						<p>A moisture-rich formula to reinforce and strengthen hair to minimize strand breakage and split ends. Safe for color-treated hair.<br>Triamino Copper Complex&reg;, a patented peptide blend of copper and amino acids, is known to be instrumental in the maintenance of hair and scalp wellness.</p>
					</div>
				</div>
				<div class="mol-med-card mol-mt-8">
					<img src="<?php echo esc_url( $img . 'tricomin-spray.png' ); ?>" alt="Tricomin Energy Spray bottle">
					<div>
						<h4>Energy Spray</h4>
						<p><strong>Power and Defense</strong></p>
						<p>A dynamic leave-in, conditioning spray with Triamino Copper Complex&reg;, a patented peptide blend of copper and amino acids. With its delivery of essential, wellness nutrients, hair appears thicker and healthier. Safe for color-treated hair.</p>
					</div>
				</div>
			</div>

			<p class="mol-mt-8">These advanced hair care products are available at Mollura Medical Hair Restoration.</p>
			<p>Densifying Smapoo and Reinforcing Conditioner are sold as a set only for $60 and the 3-piece &ldquo;Regimen Kit&rdquo; is sold for $120. Call <a href="tel:+15163543876">516-354-3876</a> to place your order.</p>
		</div>
	</section>

	<?php get_template_part( 'template-parts/testimonials' ); ?>

	<?php get_template_part( 'template-parts/closing-cta' ); ?>

</main>
