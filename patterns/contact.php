<?php
/**
 * "Contact" page. Copy ported verbatim from the live site
 * (mollurahairtransplant.com/contact/). Embeds the real Google Maps
 * location iframe and the real GHL/RootLogic contact form widget
 * (form id eFhQ2zigqkFjVgaBxATk) -- not mockups, the actual live
 * embeds, same pattern as the homepage's Cherry financing / consultation
 * form widgets.
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
		'title'     => 'Contact',
		'image'     => $img . 'contact-banner.png',
		'image_alt' => 'Contact',
		'cta_text'  => 'Call Today',
		'cta_href'  => 'tel:+15163543876',
	) );
	?>

	<!-- Contact -->
	<section class="mol-content-section">
		<div class="mol-container mol-split">
			<div class="mol-split__text">
				<span class="mol-eyebrow">Mollura Medical Hair Restoration</span>
				<h2 class="mol-h2">Contact Us</h2>
				<p>Worried about your receding hairline? Wondering what treatment options are available? Contact us at Mollura Medical Hair Restoration to schedule a consultation to discover the reason for your hair loss. We&rsquo;ll analyze your hair loss type and pattern and then determine the best, personalized treatment option for your type and stage of hair loss. Simply call us or fill out the form below to contact us.&rsquo;</p>
				<p>Hair loss doesn&rsquo;t just happen to men. It can happen to anyone and is even starting to affect people at a younger age. Contact us to discover what treatment options would be best for your specific situation. If you&rsquo;re noticing more scalp when you look in the mirror or finding more hair than usual on your comb, contact us for a consultation. We offer a variety of non-surgical and surgical treatments to improve appearance and hair fullness.</p>
				<p><strong>Contact us now for more information.</strong></p>
				<div class="mol-map-embed">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.9388202095147!2d-73.68471862507528!3d40.697345038514364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c26316a6579d45%3A0xe83b42f43f7f85dc!2s393%20Franklin%20Ave%20Suite%20105%2C%20Franklin%20Square%2C%20NY%2011010%2C%20USA!5e0!3m2!1sen!2s!4v1738873844071!5m2!1sen!2s" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen title="Mollura Medical Hair Restoration location"></iframe>
				</div>
			</div>
			<div class="mol-split__text mol-contact-form-wrap">
				<iframe
					src="https://api.leadconnectorhq.com/widget/form/eFhQ2zigqkFjVgaBxATk"
					style="width:100%;height:100%;border:none;border-radius:0px"
					id="inline-eFhQ2zigqkFjVgaBxATk"
					data-layout="{'id':'INLINE'}"
					data-trigger-type="alwaysShow"
					data-trigger-value=""
					data-activation-type="alwaysActivated"
					data-activation-value=""
					data-deactivation-type="neverDeactivate"
					data-deactivation-value=""
					data-form-name="Mollura Hair Website Contact page"
					data-height="984"
					data-layout-iframe-id="inline-eFhQ2zigqkFjVgaBxATk"
					data-form-id="eFhQ2zigqkFjVgaBxATk"
					title="Mollura Hair Website Contact page">
				</iframe>
			</div>
		</div>
	</section>

	<?php get_template_part( 'template-parts/testimonials' ); ?>
	<?php get_template_part( 'template-parts/closing-cta' ); ?>

</main>
