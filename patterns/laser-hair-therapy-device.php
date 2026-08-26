<?php
/**
 * "Laser Hair Therapy Device" page. Copy and images ported verbatim from
 * the live site (mollurahairtransplant.com/laser-hair-therapy-device/).
 * Shares the Features/Benefits content with the Laser Therapy Devices
 * section on the Non-Surgical Hair Restoration page (patterns/non-
 * surgical-hair-restoration.php) -- both source from the same live
 * content, kept as separate literal copies rather than a shared partial
 * since each page also needs its own unique intro.
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
		'title'     => 'Laser Hair Therapy Device',
		'image'     => $img . 'laser-hair-therapy-device-banner.png',
		'image_alt' => '',
		'cta_text'  => 'Contact Us',
		'cta_href'  => 'https://mollurahairtransplant.com/contact/',
	) );
	?>

	<!-- Intro -->
	<section class="mol-content-section">
		<div class="mol-container mol-split">
			<div class="mol-split__media">
				<img src="<?php echo esc_url( $img . 'laser-hair-therapy-device-intro.png' ); ?>" alt="HairSmart Laser Cap, two units">
			</div>
			<div class="mol-split__text">
				<span class="mol-eyebrow">Laser Hair Therapy</span>
				<h2 class="mol-h2">Hair Smart LaserCap 272</h2>
				<p>7 minutes daily. Improves cellular metabolism of the hair follicle to help stimulate hair growth, makes hair thicker fuller &amp; stronger. Clinical trials show regrowth up to 51% new hair in 17 weeks. Plus a <strong>2 year Manufacturer warranty!</strong></p>
			</div>
		</div>
	</section>

	<!-- Invest in your confidence -->
	<section class="mol-content-section mol-content-section--flush-top">
		<div class="mol-container">
			<span class="mol-eyebrow">Laser Hair Therapy</span>
			<h2 class="mol-h2">Invest in your self confidence.</h2>
			<p>Laser hair growth therapy is #1 physician recommended treatment for hair growth at home, be it post hair transplant, or for prevention or in combination with any other hair loss therapy.</p>

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
					<img src="<?php echo esc_url( $img . 'laser-hair-therapy-device-features.png' ); ?>" alt="HairSmart Laser Cap device">
				</div>
			</div>
		</div>
	</section>

	<!-- Benefits -->
	<section class="mol-content-section mol-content-section--flush-top">
		<div class="mol-container">
			<span class="mol-eyebrow">Benefits</span>
			<h2 class="mol-h2">LaserCap Benefits</h2>
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
