<?php
/**
 * "FUE vs FUT" page. Copy and images ported verbatim from the live site
 * (mollurahairtransplant.com/fue-vs-fut/) -- structure/visual design
 * rebuilt to match the homepage's design system.
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
		'title'     => 'FUE vs FUT',
		'image'     => $img . 'learn/fue-vs-fut-banner.png',
		'image_alt' => 'FUE vs FUT',
		'cta_text'  => 'Contact Us',
		'cta_href'  => 'https://mollurahairtransplant.com/contact/',
	) );
	?>

	<!-- Intro -->
	<section class="mol-content-section">
		<div class="mol-container mol-split">
			<div class="mol-split__media">
				<img src="<?php echo esc_url( $img . 'learn/fue-vs-fut-intro.png' ); ?>" alt="">
			</div>
			<div class="mol-split__text">
				<span class="mol-eyebrow">Mollura Medical Hair Restoration</span>
				<h2 class="mol-h2">FUE vs FUT</h2>
				<p>Hair transplant procedures and technology have changed drastically over the decades, leading to better results without that &ldquo;hair plug&rdquo; look that used to be so common. The two surgical hair restoration processes commonly used today are follicular unit extraction (FUE) and follicular unit transplantation (FUT).&nbsp;</p>
				<p>Each process has its advantages. Deciding which one to use depends upon a variety of factors and is best based on a consultation to evaluate your specific hair loss pattern and hair restoration goals.</p>
				<p>That said, understanding the differences between FUE and FUT is a key part of being an informed patient. Also note that some doctors also use the term &ldquo;linear strip excision&rdquo; (LSE) instead of FUT, but it&rsquo;s the same process.</p>
			</div>
		</div>
	</section>

	<!-- What Is FUT? -->
	<section class="mol-content-section mol-content-section--flush-top">
		<div class="mol-container mol-split mol-split--reverse">
			<div class="mol-split__media">
				<img src="<?php echo esc_url( $img . 'learn/fue-vs-fut-fut.png' ); ?>" alt="">
			</div>
			<div class="mol-split__text">
				<span class="mol-eyebrow">Mollura Medical Hair Restoration</span>
				<h2 class="mol-h2">What Is FUT?</h2>
				<p>In a Follicular unit transplantation (FUT) procedure, a small strip of hair follicles is rsurgically removed from a donor area on your scalp. This is performed under local anesthesia. The hair follicle groupings are then removed from the strip of scalp and transplanted to an area where hair is thinning or gone. An FUT session typically takes between four to eight hours.</p>
				<h3 class="mol-h3">Advantages of FUT Hair Restoration</h3>
				<ul class="mol-feature-list">
					<li>Shorter overall operation time, because a large number of hair follicles are transplanted at one time;</li>
					<li>Often provides maximum fullness and coverage for balding crowns;</li>
					<li>Generally less expensive because the process is faster.</li>
				</ul>
			</div>
		</div>
	</section>

	<!-- What Is FUE? -->
	<section class="mol-content-section mol-content-section--flush-top">
		<div class="mol-container mol-split">
			<div class="mol-split__media">
				<img src="<?php echo esc_url( $img . 'learn/fue-vs-fut-fue.png' ); ?>" alt="">
			</div>
			<div class="mol-split__text">
				<span class="mol-eyebrow">Mollura Medical Hair Restoration</span>
				<h2 class="mol-h2">What Is FUE?</h2>
				<p>In a Follicular unit extraction (FUE) procedure, individual hair follicles or small follicle groupings are transplanted from a donor area on the scalp to a recipient area. Instead of removing a strip of skin, an FUE procedure involves tiny circular incisions. Because the incisions are so small, they heal more quickly, leaving almost no visible scarring, even with the shortest hair styles.&nbsp;</p>
				<p>FUE surgeries can be done manually, or with varying degrees of robotic assistance for enhanced precision. Like FUT, FUE procedures are performed with a local anesthetic, but unlike FUT, FUE often involves two to four sessions.</p>
				<p>In robot-assisted FUE procedures, such as those involving the ARTAS&reg; system, your surgeon is able to create a natural-looking hairline that even takes into account the hair follicles&rsquo; orientation, angle and growth direction. It all combines to create outstanding results so people will tell you how great you look again.&nbsp;</p>
				<h3 class="mol-h3">Advantages of FUE Hair Restoration</h3>
				<ul class="mol-feature-list">
					<li>No linear scar.</li>
					<li>Faster healing &amp; recovery time;</li>
					<li>Less discomfort than methods that have larger incision</li>
				</ul>
			</div>
		</div>
	</section>

	<!-- What is the Difference? -->
	<section class="mol-content-section mol-content-section--flush-top">
		<div class="mol-container">
			<span class="mol-eyebrow">FUE vs FUT</span>
			<h2 class="mol-h2">What is the Difference Between FUE and FUT?</h2>
			<p>Donor follicle harvesting is a key difference between FUE and FUT techniques, which, in turn, leads to differences in cost, surgery length, and recovery time. Each procedure also has different ideal candidates.&nbsp;<br> <br>Mollura Medical Hair Restoration has decades of experience in treating hair loss, both surgically and non-surgically. Contact us to schedule your initial consultation so we can analyze your hair and scalp, explain the available treatment options for your specific form of hair loss, and answer all of your questions.</p>
		</div>
	</section>

	<?php get_template_part( 'template-parts/testimonials' ); ?>
	<?php get_template_part( 'template-parts/closing-cta' ); ?>

</main>
