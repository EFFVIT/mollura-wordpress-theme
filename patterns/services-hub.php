<?php
/**
 * "Hair Restoration Services" hub page. Copy and images ported verbatim
 * from the live site (mollurahairtransplant.com/hair-restoration-services/)
 * -- structure and visual design rebuilt to match the new homepage's
 * design system (no page-builder markup carried over).
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
		'title'     => 'Hair Restoration Services',
		'image'     => $img . 'services-hub-banner.png',
		'image_alt' => '',
		'cta_text'  => 'Contact Us',
		'cta_href'  => 'https://mollurahairtransplant.com/contact/',
	) );
	?>

	<!-- Intro -->
	<section class="mol-content-section">
		<div class="mol-container mol-split">
			<div class="mol-split__media">
				<img src="<?php echo esc_url( $img . 'services-hub-intro.png' ); ?>" alt="Before and after hair restoration results">
			</div>
			<div class="mol-split__text">
				<span class="mol-eyebrow">Our Services</span>
				<h2 class="mol-h2">Hair Restoration</h2>
				<p>Surgical Hair Restoration is the core of what we do at Mollura Medical Hair Restoration Centers. Located in Franklin Square &amp; Manhattan; Dr. Mollura has performed thousands of these procedures over the last 25 years, and his expertise can make your ideal new look a reality. Most surgical hair transplants at Mollura Medical involve one of two procedures: Follicular Unit Transplantation or Follicular Unit Extraction. The method of harvesting is the only factor that differentiates these procedures from one another.</p>
				<p>The FUT, also known as the strip method, is a popular traditional method. FUE involves the individual extraction of follicular units. Your final results will be determined by the quality and quantity of grafts obtained during the harvesting procedure. Since both options involve their own unique benefits and drawbacks, Dr. Mollura will help you to decide which is right for you.</p>
			</div>
		</div>
	</section>

	<!-- Procedure details -->
	<section class="mol-content-section">
		<div class="mol-container" style="max-width: 800px;">

			<div class="mol-content-block">
				<h3 class="mol-h3">Follicular Unit Transplantation (FUT)</h3>
				<p>In a Follicular Unit Transplantation (FUT) Dr. Mollura removes a strip of tissue from the donor area. From this he creates follicular units &mdash; tiny grafts of 1, 2, or 3 individual hairs. The grafts are then transplanted via tiny incisions, called recipient sites, to create the new hairline according to the patient&rsquo;s individualized hair restoration plan.</p>
				<a class="mol-btn mol-btn--outline-dark mol-content-block__cta" href="https://mollurahairtransplant.com/fut-hair-transplant/">Learn More</a>
			</div>

			<div class="mol-content-block">
				<h3 class="mol-h3">Follicular Unit Extraction (FUE)</h3>
				<p>Follicular Unit Extraction (FUE) is an alternative method of extracting donor hair for a follicular unit hair transplant. In an FUE procedure, a tiny incision is made in the skin around each follicular unit, separating it from the surrounding tissue. Each individual unit is then extracted directly from the scalp.</p>
				<a class="mol-btn mol-btn--outline-dark mol-content-block__cta" href="https://mollurahairtransplant.com/fue-hair-transplant/">Learn More</a>
			</div>

			<div class="mol-content-block">
				<h3 class="mol-h3">Medical Hair Loss Therapy</h3>
				<p>Today with advances in pharmacology and laser technology there are several options for men and women to maintain and even regrow some hair.</p>
				<p>Propecia&reg; is a pill, which is only for men, and must be taken daily. It has been FDA approved for the treatment of hair loss and has been shown effective in early hair loss.</p>
				<p>Rogaine is a FDA approved topical solution that can be used for both men and women.</p>
				<p>Laser hair therapy is an easy and effective treatment for men and women that can be used at home or our office. It can be used alone or in combined therapy and as an addition to surgery. Women often find laser therapy to be of great benefit and a favorite treatment.</p>
				<a class="mol-btn mol-btn--outline-dark mol-content-block__cta" href="https://mollurahairtransplant.com/prp-therapy/">Learn More</a>
			</div>

		</div>
	</section>

	<?php get_template_part( 'template-parts/testimonials' ); ?>

	<?php get_template_part( 'template-parts/closing-cta' ); ?>

</main>
