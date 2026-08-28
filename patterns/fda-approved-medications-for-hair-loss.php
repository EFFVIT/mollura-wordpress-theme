<?php
/**
 * "FDA Approved Medications For Hair Loss" page. Copy and images ported
 * verbatim from the live site (mollurahairtransplant.com/fda-approved-
 * medications-for-hair-loss/) -- bespoke pattern (accent block with a
 * 2-up medication card row) rather than the shared Service Detail
 * template.
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
		'title'     => 'FDA Approved Medications For Hair Loss',
		'image'     => $img . 'fda-approved-medications-banner.png',
		'image_alt' => '',
		'cta_text'  => 'Contact Us',
		'cta_href'  => '/contact/',
	) );
	?>

	<!-- Intro -->
	<section class="mol-content-section">
		<div class="mol-container mol-split">
			<div class="mol-split__media">
				<img src="<?php echo esc_url( $img . 'fda-approved-medications-intro.png' ); ?>" alt="">
			</div>
			<div class="mol-split__text">
				<span class="mol-eyebrow">Medications for Hair Loss</span>
				<h2 class="mol-h2">FDA Approved Medications For Hair Loss</h2>
				<p>Hair loss is a common problem that affects both men and women, but it is more common in men. According to the American Hair Loss Association, by age 35, two-thirds of American men will experience some degree of hair loss, and by age 50, approximately 85% of men will have significant hair thinning. The most common cause of hair loss in men is androgenetic alopecia, also known as male pattern baldness, which is an inherited condition. However, hair loss in men can also be caused by medical conditions, medications, and lifestyle factors. It is important for men experiencing hair loss to consult with a healthcare provider to determine the underlying cause and appropriate treatment options.</p>
				<p>According to the American Academy of Dermatology, an estimated 40% of women experience visible hair loss by the time they reach age 40. However, the actual number of women experiencing hair loss can be difficult to determine, as many women do not seek medical attention for the issue and may simply adjust their hairstyles or use products to conceal the problem. Hair loss can also have many causes, including genetics, hormonal changes, medical conditions, and certain medications, so the prevalence can vary depending on the underlying cause.</p>
			</div>
		</div>
	</section>

	<!-- FDA approved medications (accent block) -->
	<section class="mol-content-section mol-content-section--accent">
		<div class="mol-container">
			<span class="mol-eyebrow">Medications for Hair Loss</span>
			<h2 class="mol-h2">What FDA approved medications are available for hair loss?</h2>
			<p>The U.S. Food and Drug Administration (FDA) has approved two medications for the treatment of hair loss in both men and women:</p>

			<div class="mol-med-grid">
				<div class="mol-med-card">
					<img src="<?php echo esc_url( $img . 'fda-approved-medications-minoxidil-icon.png' ); ?>" alt="Rogaine (Minoxidil) hair regrowth treatment box">
					<div>
						<h3>Minoxidil (brand name Rogaine)</h3>
						<p>This medication is available over-the-counter in a 2% solution for women and a 5% solution for men. It is applied topically to the scalp and has been shown to increase hair growth and slow down hair loss.</p>
					</div>
				</div>
				<div class="mol-med-card">
					<img src="<?php echo esc_url( $img . 'fda-approved-medications-finasteride-icon.png' ); ?>" alt="Propecia (Finasteride) hair loss medication box">
					<div>
						<h3>Finasteride (brand name Propecia)</h3>
						<p>This medication is available by prescription only and is taken orally as a pill. It is approved for use in men only and works by blocking the hormone dihydrotestosterone (DHT), which is a major cause of male pattern baldness.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Off-Label Medications -->
	<section class="mol-content-section mol-content-section--flush-top">
		<div class="mol-container">
			<span class="mol-eyebrow">Medications for Hair Loss</span>
			<h2 class="mol-h2">Off-Label Medications</h2>
			<p>In addition to these FDA-approved medications, some doctors may also prescribe off-label medications such as spironolactone or dutasteride for hair loss in women, although these medications are not specifically approved for this use. It is important to consult with a healthcare provider before starting any medication for hair loss, as they can help determine the underlying cause of the hair loss and recommend the most appropriate treatment options.</p>
			<p>During your medical hair loss consultation Dr. Mollura will help you determine if these medications can be helpful for your hair loss.</p>
		</div>
	</section>

	<?php get_template_part( 'template-parts/testimonials' ); ?>

	<?php get_template_part( 'template-parts/closing-cta' ); ?>

</main>
