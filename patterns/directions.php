<?php
/**
 * "Directions" page. Copy ported verbatim from the live site
 * (mollurahairtransplant.com/directions/). Embeds the real Google Maps
 * location iframe, same as the Contact page.
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
		'title'     => 'Directions',
		'image'     => $img . 'directions-banner.png',
		'image_alt' => 'Directions',
		'cta_text'  => 'Contact Us',
		'cta_href'  => '/contact/',
	) );
	?>

	<!-- Directions -->
	<section class="mol-content-section">
		<div class="mol-container mol-split">
			<div class="mol-split__text">
				<span class="mol-eyebrow">Mollura Medical Hair Restoration</span>
				<h2 class="mol-h2">Directions</h2>
				<p>Mollura Medical Hair Restoration is conveniently located at 393 Franklin Ave., Suite 105, Franklin Square, NY 11010.</p>
				<h4 class="mol-h3">From the West</h4>
				<p>Take the Cross Island Parkway to Route 24/Hempstead Turnpike East. Then drive east on Hempstead Turnpike to Franklin Ave. Turn south on Franklin Ave. to 393 Franklin Ave.</p>
				<h4 class="mol-h3">From the East</h4>
				<p><strong>Via the Southern State Parkway:</strong><br>Take the Southern State westbound toward New York City. Take Exit 16N to Franklin Ave. Turn right on Franklin Ave. Continue to 393 Franklin Ave.</p>
				<p><strong>Via I-495/Long Island Expressway:</strong><br>Head west on the LIE/495 toward New York City. Use the right two lanes to take Exit 44 to merge onto NY-135 South toward Seaford. Take Exit 4W for New York City. Merge onto the Southern State Parkway. Take Exit 16N to Franklin Ave. Turn right on Franklin Ave. Continue to 393 Franklin Ave.</p>
				<p><strong>For more information, please check the map or give us a call and our team can assist you. We look forward to treating you and helping you reach your hair restoration goals.</strong></p>
			</div>
			<div class="mol-split__media">
				<div class="mol-map-embed">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.9388202095147!2d-73.68471862507528!3d40.697345038514364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c26316a6579d45%3A0xe83b42f43f7f85dc!2s393%20Franklin%20Ave%20Suite%20105%2C%20Franklin%20Square%2C%20NY%2011010%2C%20USA!5e0!3m2!1sen!2s!4v1738873844071!5m2!1sen!2s" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen title="Mollura Medical Hair Restoration location"></iframe>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part( 'template-parts/testimonials' ); ?>
	<?php get_template_part( 'template-parts/closing-cta' ); ?>

</main>
