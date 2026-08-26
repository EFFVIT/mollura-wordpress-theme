<?php
/**
 * "About Us" page. Copy and images ported verbatim from the live site
 * (mollurahairtransplant.com/about-us/) -- bespoke pattern, long-form
 * page with multiple alternating text/image sections + a 2-item FAQ.
 *
 * Note: the live site lists the exact same 7-item list twice, once
 * under "Professional Memberships/Affiliations:" and again under
 * "Honors and Awards:" -- kept verbatim, not deduplicated/corrected.
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
		'title'     => 'About Us',
		'image'     => $img . 'about-us-banner.png',
		'image_alt' => '',
		'cta_text'  => 'Contact Us',
		'cta_href'  => 'https://mollurahairtransplant.com/contact/',
	) );
	?>

	<!-- Dr. Mollura intro -->
	<section class="mol-content-section">
		<div class="mol-container mol-split">
			<div class="mol-split__media">
				<img src="<?php echo esc_url( $img . 'about-us-doctor.png' ); ?>" alt="Dr. Anthony Mollura, MD">
			</div>
			<div class="mol-split__text">
				<span class="mol-eyebrow">Experienced Hair Surgeon</span>
				<h2 class="mol-h2">Dr. Mollura</h2>
				<p>Dr. Anthony Mollura&rsquo;s appreciation for balance, composition, and aesthetics is an integral part of what makes him such a talented hair transplant surgeon. He has dedicated over 20 years solely to the advancement of hair restoration. Dr. Mollura has offices in Franklin Square, Long Island, and Midtown Manhattan, and he takes pleasure in the process of resolving the problem of hair loss and transforming his patients&rsquo; cosmetic goals into reality.</p>
				<p>Dr. Mollura began his career as a medical doctor, caring for the sick and injured worldwide. However, the artistry and personalization of hair restoration lured him to his true calling. He&rsquo;s devoted his career to perfecting his unique style of transplantation that achieves unbelievably natural results. He utilizes only a follicular unit transplantation method, which replicates the natural growing pattern of real hair using varied groupings of 1, 2, and 3 hair units.</p>
				<img class="mol-badge-img" src="<?php echo esc_url( $img . 'about-us-members-badge.png' ); ?>" alt="Members Only 2023 badge">
			</div>
		</div>
	</section>

	<!-- Professional Memberships -->
	<section class="mol-content-section mol-content-section--flush-top">
		<div class="mol-container">
			<h3 class="mol-h3">Professional Memberships/Affiliations:</h3>
			<ul class="mol-feature-list">
				<li>International Society of Hair Restoration Surgery Member Since 1995</li>
				<li>Italian Society of Hair Restoration Surgery</li>
				<li>Italian Tricology Society- Societa Italiana di Tricologia</li>
				<li>American Hair Loss Society</li>
				<li>Bosley Medical Hair Restoration &ndash; New York</li>
				<li>Medical Hair Restoration</li>
				<li>American Academy of Family Medicine</li>
			</ul>
		</div>
	</section>

	<!-- Experience and Reputation -->
	<section class="mol-content-section mol-content-section--flush-top">
		<div class="mol-container">
			<span class="mol-eyebrow">Dr. Anthony Mollura</span>
			<h2 class="mol-h2">Experience and Reputation</h2>
			<p>Dr. Anthony Mollura is renowned for creating profoundly natural-looking hairlines. Dr. Mollura has restored thousands of hairlines for individuals with all forms of hair loss and from all walks of life. He has been trusted to preserve the appearances of some of the most successful business people, entertainers, and athletes in New York.</p>
			<p>Mollura Medical Hair Restoration is a place where you&rsquo;ll receive personal attention and professional treatment no matter the condition of your hair, your goals, or your budget. Dr. Mollura approaches every patient&rsquo;s hair restoration plan as an opportunity to achieve stellar results.</p>
			<p>While many clinics operate on an assembly-line model. Dr. Mollura is 100% dedicated to hair restoration. We only perform one procedure each day because we believe every client deserves the same level of stellar customization and care.</p>
			<p>Through years of focus and precision, Dr. Mollura has managed to advance the art of hair restoration and successfully mimic the natural growth process of hair.</p>
		</div>
	</section>

	<!-- Honors and Awards -->
	<section class="mol-content-section mol-content-section--flush-top">
		<div class="mol-container mol-split">
			<div class="mol-split__media">
				<img src="<?php echo esc_url( $img . 'about-us-awards.png' ); ?>" alt="">
			</div>
			<div class="mol-split__text">
				<h3 class="mol-h3">Honors and Awards:</h3>
				<ul class="mol-feature-list">
					<li>International Society of Hair Restoration Surgery Member Since 1995</li>
					<li>Italian Society of Hair Restoration Surgery</li>
					<li>Italian Tricology Society- Societa Italiana di Tricologia</li>
					<li>American Hair Loss Society</li>
					<li>Bosley Medical Hair Restoration &ndash; New York</li>
					<li>Medical Hair Restoration</li>
					<li>American Academy of Family Medicine</li>
				</ul>
			</div>
		</div>
	</section>

	<!-- Complete Satisfaction -->
	<section class="mol-content-section mol-content-section--flush-top">
		<div class="mol-container mol-split mol-split--reverse">
			<div class="mol-split__text">
				<span class="mol-eyebrow">Dr. Anthony Mollura</span>
				<h2 class="mol-h2">Complete Satisfaction</h2>
				<p>We achieve this by providing guaranteed proven solutions that create completely natural, undetectable results. Dr. Anthony Mollura has perfected the science of hair transplantation. But it&rsquo;s his artistic approach that takes our results to the next level.</p>
				<p>It may seem sentimental to refer to hair restoration as art, but that outlook is exactly what makes us stand out in our field. Through patience, precision, and personalization, we are able to create the kind of results that restore confidence and get people back to feeling their best.</p>
				<p>Doctor Mollura&rsquo;s appreciation for balance, composition and aesthetics are an integral part of what makes him such a talented surgeon.</p>
				<p>Just like each brush stroke is important to the painter, every graft is carefully considered to achieve just the right angle and placement. Each one is placed strategically and with expert precision. That&rsquo;s why a full day is dedicated to each and every transplant procedure we perform. We believe every patient deserves complete attention and focus.</p>
			</div>
			<div class="mol-split__media">
				<img src="<?php echo esc_url( $img . 'about-us-satisfaction.png' ); ?>" alt="">
			</div>
		</div>
	</section>

	<!-- FAQ -->
	<section class="mol-content-section mol-faq">
		<div class="mol-container">
			<div class="mol-faq__grid mol-faq__grid--single">
				<div>
					<details class="mol-faq__item" open>
						<summary>Why Dr. Mollura?</summary>
						<p>We encounter many individuals who are wary of hair restoration. Decades of poor options and so-so results have led to the impression that hair loss is a catch 22 &ndash; the choice between baldness and fake, patchy, or plugged hair. We&rsquo;re happy to tell you that those days are gone. Our densely packed hairlines look nothing like the doll-hair effect created by large and ill-placed hair plugs.</p>
						<p>The hairlines that Dr. Mollura creates are totally natural and undetectable, mainly due to the size and placement of follicular grafts. We carefully plan our hairlines according to the style preferred by each patient. Dr. Mollura creates microscopic groupings of up to 3 hair units. He then places each graft in an artistic manner that mirrors the irregular matrix of naturally growing hair.</p>
						<p>Dr Mollura&rsquo;s transplants are completely natural, and the transplanted hair will continue to grow. The only way people will know is if you tell them yourself. Dr Mollura can get you the natural look you&rsquo;re hoping for; all you have to do is call <a href="tel:+15163543876">516-354-3876</a>.</p>
					</details>
					<details class="mol-faq__item">
						<summary>Questions to ask during your consultation</summary>
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
