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
		'cta_href'  => '/contact/',
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

	<!-- Procedure details (hub cards) -->
	<section class="mol-content-section mol-content-section--flush-top">
		<div class="mol-container mol-hub-grid">

			<div class="mol-hub-card">
				<span class="mol-icon-circle" aria-hidden="true">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="6" cy="6" r="3"/><path d="M8.12 8.12 12 12"/><path d="M20 4 8.12 15.88"/><circle cx="6" cy="18" r="3"/><path d="M14.8 14.8 20 20"/></svg>
				</span>
				<h3>Follicular Unit Transplantation (FUT)</h3>
				<p>In a Follicular Unit Transplantation (FUT) Dr. Mollura removes a strip of tissue from the donor area. From this he creates follicular units &mdash; tiny grafts of 1, 2, or 3 individual hairs. The grafts are then transplanted via tiny incisions, called recipient sites, to create the new hairline according to the patient&rsquo;s individualized hair restoration plan.</p>
				<a class="mol-btn mol-btn--outline-dark mol-hub-card__cta" href="/fut-hair-transplant/">Learn More</a>
			</div>

			<div class="mol-hub-card">
				<span class="mol-icon-circle" aria-hidden="true">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 2 4 4"/><path d="m17 7 3-3"/><path d="M19 9 8.7 19.3c-1 1-2.5 1-3.4 0l-.6-.6c-1-1-1-2.5 0-3.4L15 5"/><path d="m9 11 4 4"/><path d="m5 19-3 3"/><path d="m14 4 6 6"/></svg>
				</span>
				<h3>Follicular Unit Extraction (FUE)</h3>
				<p>Follicular Unit Extraction (FUE) is an alternative method of extracting donor hair for a follicular unit hair transplant. In an FUE procedure, a tiny incision is made in the skin around each follicular unit, separating it from the surrounding tissue. Each individual unit is then extracted directly from the scalp.</p>
				<a class="mol-btn mol-btn--outline-dark mol-hub-card__cta" href="/fue-hair-transplant/">Learn More</a>
			</div>

			<div class="mol-hub-card">
				<span class="mol-icon-circle" aria-hidden="true">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m10.5 20.5 10-10a4.95 4.95 0 1 0-7-7l-10 10a4.95 4.95 0 1 0 7 7Z"/><path d="m8.5 8.5 7 7"/></svg>
				</span>
				<h3>Medical Hair Loss Therapy</h3>
				<!-- Condensed summary, NOT verbatim from the live site -- authored to match card length at explicit user request, needs compliance review before launch. See project memory. -->
				<p>Today&rsquo;s advances in pharmacology and laser technology offer several options to maintain and even regrow hair. Propecia&reg; (men only) and Rogaine are FDA-approved medications, and laser hair therapy is a safe, effective treatment for men and women that can be used at home or in-office, alone or alongside surgery.</p>
				<a class="mol-btn mol-btn--outline-dark mol-hub-card__cta" href="/prp-therapy/">Learn More</a>
			</div>

		</div>
	</section>

	<?php get_template_part( 'template-parts/testimonials' ); ?>

	<?php get_template_part( 'template-parts/closing-cta' ); ?>

</main>
