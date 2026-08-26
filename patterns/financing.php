<?php
/**
 * "Financing" page. Copy, banner image, and the live Cherry financing
 * widget embed ported verbatim from the live site
 * (mollurahairtransplant.com/financing/). The Cherry widget is a real
 * third-party embed (withcherry.com) already used by this business --
 * kept as the actual live embed (same slug) rather than a static
 * mockup, so the calculator/terms shown are real.
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
		'title'     => 'Financing',
		'image'     => $img . 'financing-banner.png',
		'image_alt' => '',
		'cta_text'  => 'Contact Us',
		'cta_href'  => 'https://mollurahairtransplant.com/contact/',
	) );
	?>

	<!-- Financing -->
	<section class="mol-content-section">
		<div class="mol-container">
			<span class="mol-eyebrow">Financing</span>
			<h2 class="mol-h2">Hair Transplant Cost</h2>
			<p>At Mollura Medical Hair Restoration, we want you to get the results that you want without worrying about how to pay for it. Because hair restoration treatment generally isn&rsquo;t covered by health insurance, we offer financing options to make it as easy as possible. When you&rsquo;re ready to restore your hairline (and your confidence), Mollura Medical Hair Restoration&rsquo;s financing options will meet your needs.</p>

			<h2 class="mol-h2 mol-mt-8">Financing with Cherry</h2>

			<link rel="preconnect" href="https://fonts.googleapis.com">
			<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
			<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jost&family=Judson&display=swap">

			<style>
				#all, .hero-hero_container-3CuNC .hero-checkbox_item-13aEV { color: #000000 !important; }
				.main-all_container-lL2Wi { color: #000000 !important; text-align: left; }
				.hero-hero_container-3CuNC .hero-image_container-Sn43m { max-width: 430px; align-self: end; }
				.hero-hero_container-3CuNC .hero-image_container-Sn43m > img {
					object-fit: contain; margin: 0 !important; height: 100%; max-height: 430px;
					max-width: unset !important; visibility: visible; border: 0 none !important;
					border-radius: 0 !important; box-shadow: none !important; transform: none !important;
					position: inherit !important; padding: 0 !important;
				}
				@media only screen and (max-width: 880px) {
					.hero-hero_container-3CuNC .hero-image_container-Sn43m > img { margin: 0 !important; max-height: 350px !important; }
				}
				@media only screen and (max-width: 767.98px) { #all { max-width: 100dvw; } }
				@media only screen and (max-width: 580px) {
					.howItWorks-video_container-3o6DC { height: 100% !important; max-height: 316px !important; }
				}
				@media only screen and (max-width: 410px) {
					.hero-hero_container-3CuNC .hero-image_container-Sn43m > img { max-height: 210px; }
				}
				.howItWorks-info_container-1CA_G { max-height: max-content; position: relative; overflow: hidden; }
				.calculator-calculator_container-owFzI input[type="range"] { padding: 0; border: 0 none; color: inherit; }
				.howItWorks-video_container-3o6DC { max-height: 475px; }
				.hero-hero_container-3CuNC .hero-circle_container-2yt2E { display: inherit; }
			</style>

			<div id="all"></div>
			<script>
				(function (w, d, s, o, f, js, fjs) {
					w[o] = w[o] || function () { (w[o].q = w[o].q || []).push(arguments); };
					js = d.createElement(s); fjs = d.getElementsByTagName(s)[0];
					js.id = o; js.src = f; js.async = 1;
					fjs.parentNode.insertBefore(js, fjs);
				})(window, document, 'script', '_hw', 'https://files.withcherry.com/widgets/widget.js');
				_hw('init', {
					debug: false,
					variables: {
						slug: 'mollura-medical-hair-restoration',
						name: 'Mollura Medical Hair Restoration',
					},
					styles: {
						primaryColor: '#3e626c',
						secondaryColor: '#3e626c10',
						fontFamily: 'Jost',
						headerFontFamily: 'Judson',
					},
				}, ['all', 'hero', 'howitworks', 'calculator', 'testimony', 'faq']);
			</script>
		</div>
	</section>

	<?php get_template_part( 'template-parts/testimonials' ); ?>

	<?php get_template_part( 'template-parts/closing-cta' ); ?>

</main>
