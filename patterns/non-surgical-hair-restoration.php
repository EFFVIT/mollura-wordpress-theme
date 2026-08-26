<?php
/**
 * "Non-Surgical Hair Restoration" page. Copy and images ported verbatim
 * from the live site (mollurahairtransplant.com/non-surgical-hair-restoration/)
 * -- this page's content (Topical Medication, Oral Medications, PRP,
 * Laser Therapy Devices) is long-form and structurally unique among the
 * service pages, so it's a bespoke pattern rather than using the shared
 * Service Detail template.
 *
 * Note: the live site's "FUE HAIR TRANSPLANT" eyebrow labels on the intro
 * and Topical Medication sections appear to be a copy-paste leftover from
 * another page -- kept verbatim per the project's copy rule, not corrected.
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
		'title'     => 'Non-Surgical Hair Restoration',
		'image'     => $img . 'non-surgical-hair-restoration-banner.png',
		'image_alt' => '',
		'cta_text'  => 'Contact Us',
		'cta_href'  => 'https://mollurahairtransplant.com/contact/',
	) );
	?>

	<!-- Intro -->
	<section class="mol-content-section">
		<div class="mol-container mol-split">
			<div class="mol-split__media">
				<img src="<?php echo esc_url( $img . 'non-surgical-hair-restoration-intro.png' ); ?>" alt="">
			</div>
			<div class="mol-split__text">
				<span class="mol-eyebrow">FUE Hair Transplant</span>
				<h2 class="mol-h2">Non-Surgical<br>Hair Restoration</h2>
				<p>Non-Surgical Hair Restoration aims to slow or stop hair loss, make your hair healthier and stronger, and provide some minor hair growth. This can be achieved using Topical or Oral Medications, PRP Treatments, and Laser Therapy Devices.</p>
			</div>
		</div>
	</section>

	<!-- Topical Medication -->
	<section class="mol-content-section mol-content-section--flush-top">
		<div class="mol-container">
			<div class="mol-split mol-mb-10">
				<div class="mol-split__text">
					<span class="mol-eyebrow">FUE Hair Transplant</span>
					<h2 class="mol-h2">Topical Medication</h2>
					<p>Topical prescription solution customized for each patient. The medication contains the FDA-approved hair maintenance and hair growth medications Finasteride 1.0% and Minoxidil 10%. Finasteride is the active ingredient in the FDA-approved drug Propecia. Minoxidil is the FDA-approved active ingredient in over-the-counter Rogaine. The product also contains 0.01% Tretinoin, 5.0% Biotin, and 1.0% Caffeine. These dosages reflect our most popular formula. A personalized formula can be created based on the individual patient&rsquo;s needs.</p>
				</div>
				<div class="mol-split__media">
					<img src="<?php echo esc_url( $img . 'non-surgical-hair-restoration-topical.png' ); ?>" alt="">
				</div>
			</div>

			<h3 class="mol-h3">How Does Mollura Medical&rsquo;s Topical Hair Loss Serum Work?</h3>
			<p>Minoxidil is widely recognized as a stimulant for hair growth, encouraging dormant follicles to generate hair and strengthening weaker follicles for thicker, more pigmented hair with regular application. Finasteride, taken orally, aims to diminish dihydrotestosterone (DHT), a key factor in hair loss. Emerging studies indicate that topical application of finasteride could offer an effective alternative for hair loss treatment, potentially minimizing the risk of side effects associated with oral administration. The Tretinoin promotes blood circulation and cell regeneration. Biotin, which helps strengthen hair follicles, and Caffeine, which has been shown to promote blood circulation when applied topically.</p>

			<h3 class="mol-h3 mol-mt-8">How and When Should the Topical Hair Loss Serum be Applied?</h3>
			<p>Our Topical Hair Loss Serum contains 120ml of medication, lasting about 70-90 days when used as directed. The doctor will recommend dosage based on each patient&rsquo;s health evaluation. Dosage can change based on the individual patient&rsquo;s needs. Generally, Dr. Mollura recommends applying the medication 2X per day using the provided dropper. The dropper contains clear volume lines to ensure proper dosage. The serum should be applied and massaged on the scalp evenly to the areas of need and allowed to absorb for at least 3 hours prior to showering or any physical activity that will cause you to sweat.</p>
		</div>
	</section>

	<!-- Oral Medications + PRP (accent block) -->
	<section class="mol-content-section mol-content-section--accent">
		<div class="mol-container">
			<span class="mol-eyebrow">Non-Surgical Hair Restoration</span>
			<h2 class="mol-h2">Oral Medications</h2>

			<h3>Finasteride</h3>
			<p>This medication is available by prescription only and is taken orally as a pill. It is approved for use in men only and works by blocking the hormone dihydrotestosterone (DHT), which is a major cause of male pattern baldness.</p>

			<h3 class="mol-mt-6">Minoxidil</h3>
			<p>Available in both Topical and Oral forms. The oral medication requires a prescription. The topical medication is available over the counter in a 2% solution for women and a 5% solution for men. It is applied topically to the scalp and has been shown to increase hair growth and slow down hair loss.</p>

			<span class="mol-eyebrow mol-eyebrow--spaced">Non-Surgical Hair Restoration</span>
			<h2 class="mol-h2">PRP Treatment</h2>
			<p>Platelet-rich plasma (PRP) therapy is a non-surgical treatment that has been used to promote hair growth and hair health in individuals with hair loss. PRP is a concentrated solution of platelets derived from the patient&rsquo;s own blood, which contains growth factors that can stimulate hair follicles and improve hair growth.</p>
		</div>
	</section>

	<!-- Laser Therapy Devices -->
	<section class="mol-content-section">
		<div class="mol-container">
			<span class="mol-eyebrow">Non-Surgical Hair Restoration</span>
			<h2 class="mol-h2">Laser Therapy Devices</h2>
			<h3 class="mol-h3">Hair Smart Laser Cap</h3>
			<p>It is recommended to use our 272 Diode Laser Cap daily for 7 minutes. It can improve cellular metabolism of the hair follicles to help stimulate hair growth, makes hair thicker fuller &amp; stronger. Plus, a 2-year Manufacturer warranty!</p>

			<div class="mol-split mol-mt-8">
				<div class="mol-split__text">
					<h3 class="mol-h3">Features</h3>
					<ul class="mol-feature-list">
						<li>Comfortable, Flexible fitting design</li>
						<li>272 Laser Diodes (no LEDs)</li>
						<li>Auto-programmed Treatment sessions</li>
						<li>2 year Manufacturer warranty</li>
						<li>272 Premium laser diodes positioned for full scalp coverage</li>
						<li>Lasers calibrated to 650nm for optimal scalp penetration</li>
						<li>Advanced cooling technology to protect lasers.</li>
						<li>Rated for up to 20,000 treatment sessions.</li>
						<li>User-friendly, hands-free design.</li>
						<li>7 Mins Automatic Shutoff.</li>
						<li>Improved battery life.</li>
						<li>Completely painless and effective treatment.</li>
					</ul>
				</div>
				<div class="mol-split__media">
					<img src="<?php echo esc_url( $img . 'non-surgical-hair-restoration-laser.png' ); ?>" alt="HairSmart Grow System Laser 272 device box and cap">
				</div>
			</div>
		</div>
	</section>

	<!-- Laser Therapy Benefits -->
	<section class="mol-content-section mol-content-section--flush-top">
		<div class="mol-container">
			<span class="mol-eyebrow">Benefits</span>
			<h2 class="mol-h2">Laser Therapy Benefits</h2>
			<div class="mol-checklist">
				<div class="mol-checklist__item">
					<span class="mol-checklist__icon" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg></span>
					<span>Reverses the process of Hair Loss</span>
				</div>
				<div class="mol-checklist__item">
					<span class="mol-checklist__icon" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg></span>
					<span>Safe and Effective for treating hair loss due to heredity</span>
				</div>
				<div class="mol-checklist__item">
					<span class="mol-checklist__icon" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg></span>
					<span>Treats thinning hair and balding</span>
				</div>
				<div class="mol-checklist__item">
					<span class="mol-checklist__icon" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg></span>
					<span>Nurtures, Fuller, healthier looking hair</span>
				</div>
				<div class="mol-checklist__item">
					<span class="mol-checklist__icon" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg></span>
					<span>Revitalize damaged hair</span>
				</div>
				<div class="mol-checklist__item">
					<span class="mol-checklist__icon" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg></span>
					<span>Easy to use and no known adverse side-effects</span>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part( 'template-parts/testimonials' ); ?>

	<?php get_template_part( 'template-parts/closing-cta' ); ?>

</main>
