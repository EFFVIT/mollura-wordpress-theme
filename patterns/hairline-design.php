<?php
/**
 * "Hairline Design" page. Copy and images ported verbatim from the live
 * site (mollurahairtransplant.com/hairline-design/) -- structure/visual
 * design rebuilt to match the homepage's design system.
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
		'title'     => 'Hairline Design',
		'image'     => $img . 'learn/hairline-design-banner.png',
		'image_alt' => 'Hairline Design',
		'cta_text'  => 'Contact Us',
		'cta_href'  => '/contact/',
	) );
	?>

	<!-- Why Hairline Design Matters -->
	<section class="mol-content-section">
		<div class="mol-container mol-split">
			<div class="mol-split__media">
				<img src="<?php echo esc_url( $img . 'learn/hairline-design-intro.png' ); ?>" alt="">
			</div>
			<div class="mol-split__text">
				<span class="mol-eyebrow">Mollura Medical Hair Restoration</span>
				<h2 class="mol-h2">Why Hairline Design Matters</h2>
				<p>Hairline design is a critical aspect of hair restoration, as it directly influences the overall aesthetic outcome and natural appearance of the transplant. A well-designed hairline frames the face, enhances facial symmetry, and restores a youthful look. It acts as the focal point of a person&rsquo;s appearance, making it essential to get it right. Key considerations in hairline design include the individual&rsquo;s age, facial structure, hair density, and personal preferences. An expertly designed hairline respects the natural contours of the face and mimics the natural growth pattern of hair. For example, a slightly irregular or staggered hairline often looks more realistic than a perfectly straight line.</p>
			</div>
		</div>
	</section>

	<!-- Our Hairline Designs -->
	<section class="mol-content-section mol-content-section--flush-top">
		<div class="mol-container mol-split mol-split--reverse">
			<div class="mol-split__media">
				<img src="<?php echo esc_url( $img . 'learn/hairline-design-designs.png' ); ?>" alt="">
			</div>
			<div class="mol-split__text">
				<span class="mol-eyebrow">Mollura Medical Hair Restoration</span>
				<h2 class="mol-h2">Our Hairline Designs</h2>
				<p>Dr. Anthony Mollura is renowned in the industry for creating profoundly natural-looking hairlines. Creating a natural-looking hairline is both an art and skill. Dr. Mollura has spent over 20 years refining his skills in hairline design. He has taught his hairline design techniques to Hair Transplant surgeons around the world. &nbsp;His goal is to create a hairline that is undetectable to the untrained eye. The vast majority of our patients say that nobody could ever tell they&rsquo;ve undergone a hair transplant.</p>
			</div>
		</div>
	</section>

	<?php get_template_part( 'template-parts/testimonials' ); ?>
	<?php get_template_part( 'template-parts/closing-cta' ); ?>

</main>
