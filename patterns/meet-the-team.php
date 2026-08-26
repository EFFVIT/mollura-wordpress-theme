<?php
/**
 * "Meet the Team" page. Copy and images ported verbatim from the live
 * site (mollurahairtransplant.com/meet-the-team/) -- bespoke pattern,
 * similar shape to About Us but with different bio copy, a different
 * Honors and Awards list, and a Michael Mollura (Director of Clinical
 * Operations) section that About Us doesn't have.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$img = get_template_directory_uri() . '/assets/images/about/';
?>
<main id="main">

	<?php
	get_template_part( 'template-parts/inner-banner', null, array(
		'eyebrow'   => 'Mollura Medical Hair Restoration',
		'title'     => 'Meet the Team',
		'image'     => $img . 'meet-the-team-banner.png',
		'image_alt' => '',
		'cta_text'  => 'Contact Us',
		'cta_href'  => 'https://mollurahairtransplant.com/contact/',
	) );
	?>

	<!-- Dr. Mollura -->
	<section class="mol-content-section">
		<div class="mol-container">
			<div class="mol-split mol-mb-10">
				<div class="mol-split__media">
					<img src="<?php echo esc_url( $img . 'meet-the-team-doctor.png' ); ?>" alt="Dr. Anthony Mollura, MD">
				</div>
				<div class="mol-split__text">
					<span class="mol-eyebrow">Meet the Team</span>
					<h2 class="mol-h2">Dr. Mollura</h2>
				</div>
			</div>

			<p>Dr. Anthony Mollura&rsquo;s deep appreciation for balance, composition, and aesthetics is a cornerstone of his exceptional talent as a hair transplant surgeon. With over 20 years dedicated exclusively to advancing hair restoration, Dr. Mollura has established himself as a leader in the field. Operating out of Nassau County, Long Island, he is committed to addressing hair loss and transforming his patients&rsquo; cosmetic aspirations into reality.</p>
			<p>Dr. Mollura began his career as a medical doctor, providing care for the sick and injured across the globe. However, the artistry and individualized approach of hair restoration drew him to his true calling. He has since devoted his career to refining a unique transplantation method that achieves remarkably natural results. Using the follicular unit transplantation technique, Dr. Mollura meticulously replicates the natural growth patterns of hair through varied groupings of one, two, and three hair units. Renowned for crafting extraordinarily natural-looking hairlines, Dr. Mollura has restored thousands of hairlines for individuals experiencing diverse forms of hair loss. He is entrusted by some of New York&rsquo;s most accomplished business professionals, entertainers, and athletes to enhance their appearances with precision and artistry.</p>
			<p>At Mollura Medical Hair Restoration, every patient is assured of personalized attention and professional care, regardless of their hair condition, goals, or budget. Dr. Mollura views each patient&rsquo;s hair restoration plan as an opportunity to deliver outstanding results tailored to their unique needs.</p>
			<p>Unlike many clinics that operate on an assembly-line model, Dr. Mollura&rsquo;s practice is wholly dedicated to hair restoration. By performing only one procedure per day, he ensures every client receives an unparalleled level of customization and care.</p>
			<p>Through years of unwavering focus and meticulous precision, Dr. Mollura has elevated the art of hair restoration and set new standards in the field.</p>
		</div>
	</section>

	<!-- Honors and Awards -->
	<section class="mol-content-section mol-content-section--flush-top">
		<div class="mol-container mol-split mol-split--reverse">
			<div class="mol-split__text">
				<span class="mol-eyebrow">Dr. Anthony Mollura</span>
				<h2 class="mol-h2">Honors and Awards:</h2>
				<ul class="mol-feature-list">
					<li>Chairman Core Curriculum Committee &ndash; International Society of Hair Restoration Surgery</li>
					<li>Ethics Committee Member- &ndash; International Society of Hair Restoration Surgery</li>
					<li>The 2001 International Award Archimedes for Hair Restoration Surgery by the ISHR</li>
					<li>The 2010 Tiberio Award for Hair Restoration Surgery by the Italian Society of Hair Restoration</li>
					<li>Lectured Internationally on Propecia for Merck Pharmaceuticals</li>
					<li>Ad Hoc Committee on Synthetic Hair Fibers in hair transplant surgery for the ISHRS</li>
				</ul>
			</div>
			<div class="mol-split__media">
				<img src="<?php echo esc_url( $img . 'meet-the-team-awards.png' ); ?>" alt="">
			</div>
		</div>
	</section>

	<!-- Complete Satisfaction -->
	<section class="mol-content-section mol-content-section--flush-top">
		<div class="mol-container">
			<h2 class="mol-h2">Complete Satisfaction</h2>
			<p>We achieve this by providing guaranteed proven solutions that create completely natural, undetectable results. Dr. Anthony Mollura has perfected the science of hair transplantation. But it&rsquo;s his artistic approach that takes our results to the next level.</p>
			<p>It may seem sentimental to refer to hair restoration as art, but that outlook is exactly what makes us stand out in our field. Through patience, precision, and personalization, we are able to create the kind of results that restore confidence and get people back to feeling their best.</p>
			<p>Doctor Mollura&rsquo;s appreciation for balance, composition and aesthetics are an integral part of what makes him such a talented surgeon.<br>Just like each brush stroke is important to the painter, every graft is carefully considered to achieve just the right angle and placement. Each one is placed strategically and with expert precision. That&rsquo;s why a full day is dedicated to each and every transplant procedure we perform. We believe every patient deserves complete attention and focus.</p>
		</div>
	</section>

	<!-- Michael Mollura -->
	<section class="mol-content-section mol-content-section--flush-top">
		<div class="mol-container">
			<div class="mol-split mol-mb-10">
				<div class="mol-split__media">
					<img src="<?php echo esc_url( $img . 'meet-the-team-michael.png' ); ?>" alt="Michael Mollura, Director of Clinical Operations">
				</div>
				<div class="mol-split__text">
					<span class="mol-eyebrow">Director of Clinical Operations</span>
					<h2 class="mol-h2">Michael Mollura</h2>
				</div>
			</div>
			<p>Michael oversees all clinical processes to ensure the seamless delivery of care and serves as the primary point of contact for patients throughout their hair restoration journey. Michael&rsquo;s commitment to patient satisfaction is evident in every interaction, as he strives to provide a supportive and personalized experience. His dedication and attention to detail ensure that each patient&rsquo;s needs are met with the highest level of professionalism and care.</p>
		</div>
	</section>

	<!-- FAQ -->
	<section class="mol-content-section mol-faq">
		<div class="mol-container">
			<h2 class="mol-h2">Frequently Asked Questions</h2>
			<div class="mol-faq__grid mol-faq__grid--single">
				<div>
					<details class="mol-faq__item" open>
						<summary>Why Dr. Mollura</summary>
						<p>We encounter many individuals who are wary of hair restoration. Decades of poor options and so-so results have led to the impression that hair loss is a catch 22 &ndash; the choice between baldness and fake, patchy, or plugged hair. We&rsquo;re happy to tell you that those days are gone. Our densely packed hairlines look nothing like the doll-hair effect created by large and ill-placed hair plugs.</p>
						<p>The hairlines that Dr. Mollura creates are totally natural and undetectable, mainly due to the size and placement of follicular grafts. We carefully plan our hairlines according to the style preferred by each patient. Dr. Mollura creates microscopic groupings of up to 3 hair units. He then places each graft in an artistic manner that mirrors the irregular matrix of naturally growing hair.</p>
						<p>Dr Mollura&rsquo;s transplants are completely natural, and the transplanted hair will continue to grow. The only way people will know is if you tell them yourself. Dr Mollura can get you the natural look you&rsquo;re hoping for; all you have to do is call <a href="tel:+15163543876">516-354-3876</a>.</p>
					</details>
					<details class="mol-faq__item">
						<summary>What questions to ask during your consultation.</summary>
						<p>The following is a list of questions to help you make a decision on choosing the right hair restoration surgeon.</p>
						<ul class="mol-feature-list">
							<li>What accreditation&rsquo;s or certifications does he or she have?</li>
							<li>What techniques do they use?</li>
							<li>How many procedures have they done?</li>
							<li>Do you do the procedure or medical technicians?</li>
							<li>See before and after photos. Always ask how many grafts and procedures did the person in the photo have.</li>
							<li>Who actually does the surgical part of the procedure?</li>
							<li>Is it the surgeon you met or someone else? Be careful because some offices hire a third party to come and do your surgery and in many cases are not physicians. This is an illegal practice.</li>
							<li>How many technicians will work on you? There should be at least 3 or 4 or in large number of grafts even more.</li>
							<li>What type of anesthesia do they use?</li>
							<li>Are post op medications included in the price?</li>
						</ul>
					</details>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part( 'template-parts/testimonials' ); ?>

	<?php get_template_part( 'template-parts/closing-cta' ); ?>

</main>
