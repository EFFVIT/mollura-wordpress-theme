<?php
/**
 * "Hair Transplant FAQ's" page. Copy ported verbatim from the live site
 * (mollurahairtransplant.com/hair-transplant-faqs/) -- structure/visual
 * design rebuilt to match the homepage's design system (native
 * <details>/<summary> accordion, same as the service-detail FAQ section).
 *
 * Note: the live page has two Q&As with identical question+answer text
 * ("How long is the recovery process...") -- a real duplicate on the
 * live site, kept verbatim rather than silently de-duped.
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
		'title'     => "Hair Transplant FAQ's",
		'image'     => $img . 'learn/hair-transplant-faqs-banner.png',
		'image_alt' => "Hair Transplant FAQ's",
		'cta_text'  => 'Contact Us',
		'cta_href'  => 'https://mollurahairtransplant.com/contact/',
	) );
	?>

	<!-- FAQ -->
	<section class="mol-content-section mol-faq">
		<div class="mol-container">
			<div class="mol-faq__grid">
				<div>
					<details class="mol-faq__item" open>
						<summary>What can I expect from my initial consultation?</summary>
						<p>At your initial consultation with Mollura Medical Hair Restoration, you&rsquo;ll review the cause of your hair loss, your age, and your expectations. Then you will be presented with all of your medical and surgical options available. We will work with you, taking into consideration your needs and desires, to create an individualized hair restoration plan.<br>You&rsquo;ll also have the opportunity to view countless before-and-after photos of past patients. We&rsquo;ll even connect you with some of them who will be willing to discuss treatment with you. We&rsquo;re devoted to making sure that you leave your consultation feeling comfortable, informed, and empowered to take control over your hair loss.</p>
					</details>
					<details class="mol-faq__item">
						<summary>What makes a good hair transplantation candidate? What factors could make me a bad candidate?</summary>
						<p>It&rsquo;s vital to us that every procedure we perform is in the best interest of our patient. For this reason, we cannot treat every individual who expresses interest in our hair restoration solutions. An ideal candidate has taken time to research hair transplantation, expresses reasonable expectations, and has a good amount of quality existing hair that could be relocated in a transplantation procedure.</p>
						<p>Some factors that we consider with more discretion include the age of the prospective patient and the causes for hair loss. In patients under the age of 25, we typically prefer that the client consider alternative measures or have a pressing reason to pursue transplantation. When hair loss is out of the ordinary, we often conduct testing to isolate the cause and identify healthy treatment options.</p>
					</details>
					<details class="mol-faq__item">
						<summary>What kind of follow-up care will I receive?</summary>
						<p>It is recommended that every surgical patient return for a post-op checkup at 8 months and 12 months following the surgery. These appointments are included with your procedure.</p>
					</details>
					<details class="mol-faq__item">
						<summary>What makes you different from other hair restoration surgeons?</summary>
						<p>Our difference can be summed up in two words: Artistry &amp; Experience. You will never be shuffled from one doctor to another or be forced to communicate through a chain of assistants. Dr. Mollura is involved in each patient&rsquo;s hair restoration plan from initial consultation through 12-month follow-up (and beyond). You will play an active role in your hair restoration and can even sketch your new hairline with Dr. Mollura during your initial consultation.</p>
						<p>At Mollura Medical, we consider hair transplantation to be as much an art as it is medicine. Each new hairline is unique, and our goal is to make our work undetectable by constantly working to advance the techniques of hair transplantation. We make the most densely packed grafts in the industry, and we use the tiniest instruments to achieve this. During the procedure, patients are able to converse with staff, take breaks, eat lunch, and enjoy movie options in order to be as comfortable as possible.</p>
					</details>
					<details class="mol-faq__item">
						<summary>Are hair transplants painful?</summary>
						<p>The hair transplantation experience is a pleasant surprise for most of our patients. Even though we communicate the simplicity of this procedure, many individuals can&rsquo;t shake the feeling that &ldquo;it&rsquo;s still surgery.&rdquo; To ensure your comfort throughout the procedure, we use local anesthetic around the scalp in conjunction with mild sedation. Once the anesthetic takes effect the procedure is painless.</p>
					</details>
				</div>
				<div>
					<details class="mol-faq__item">
						<summary>How long is the recovery process after a hair transplant? Will I have to take a lot of time off from work?</summary>
						<p>Our hair transplant procedures are extremely low impact. Depending on the line of work, individuals can expect to return to their job as early as the next day or as late as 5 &ndash; 6 days following surgery.</p>
					</details>
					<details class="mol-faq__item">
						<summary>How long is the recovery process after a hair transplant? Will I have to take a lot of time off from work?</summary>
						<p>Our hair transplant procedures are extremely low impact. Depending on the line of work, individuals can expect to return to their job as early as the next day or as late as 5 &ndash; 6 days following surgery.</p>
					</details>
					<details class="mol-faq__item">
						<summary>How long does transplanted hair take to start growing?</summary>
						<p>The rate of hair growth is unique to each individual. Most patients can see new hair growth in as little as 3 to 4 months following surgery. By 12-14 months, 100% hair growth should be achieved.</p>
					</details>
					<details class="mol-faq__item">
						<summary>What does a Hair Transplant Cost?</summary>
						<p>The price of a hair transplant can range based on 2 main factors. What type of procedure you have (FUE or FUT), and the number of hair follicles (grafts) you need transplanted.</p>
					</details>
					<details class="mol-faq__item">
						<summary>If my hair stopped growing in certain areas, why would transplanted hair grow there?</summary>
						<p>Hair follicles from different areas of your scalp respond differently to the hormone responsible for hair loss. Transplanted hair is taken from carefully selected areas that are less sensitive to this hormone. Because of this, it has no problem growing, even on areas of your scalp previously affected by hair loss.</p>
					</details>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part( 'template-parts/testimonials' ); ?>
	<?php get_template_part( 'template-parts/closing-cta' ); ?>

</main>
