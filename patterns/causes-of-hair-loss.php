<?php
/**
 * "Causes of Hair Loss" page. Copy and images ported verbatim from the
 * live site (mollurahairtransplant.com/causes-of-hair-loss/) --
 * structure/visual design rebuilt to match the homepage's design system.
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
		'title'     => 'Causes of Hair Loss',
		'image'     => $img . 'learn/causes-banner.png',
		'image_alt' => 'Causes of Hair Loss',
		'cta_text'  => 'Contact Us',
		'cta_href'  => 'https://mollurahairtransplant.com/contact/',
	) );
	?>

	<!-- Male Hair Loss -->
	<section class="mol-content-section">
		<div class="mol-container mol-split">
			<div class="mol-split__media">
				<img src="<?php echo esc_url( $img . 'learn/causes-male.png' ); ?>" alt="">
			</div>
			<div class="mol-split__text">
				<span class="mol-eyebrow">Causes of Hair</span>
				<h2 class="mol-h2">Male Hair Loss</h2>
				<p>The reason most men lose their hair is commonly found to be androgenetic alopecia or male pattern baldness. While there can be other causes, including disease, medical treatments, and trauma, male pattern baldness is usually attributable to genetics (95%).</p>
				<p>Hair loss is caused by the conversion of the male hormone testosterone to DHT. 5 Alpha reductase causes testosterone to break down in the body to DHT. This DHT or dihydrotestosterone causes hair follicles to shrink and progressively disappear. Male pattern androgenetic alopecia is characterized by a receding hairline and thinning at the crown. Hair in these areas appears to be the most sensitive to DHT. As your hair loss increases, the entire top of the scalp may go bald, leaving only a &ldquo;horseshoe&rdquo; of hair. For some men, even this remaining rim of hair will ultimately be lost.</p>
			</div>
		</div>
	</section>

	<!-- Female Hair Loss -->
	<section class="mol-content-section mol-content-section--flush-top">
		<div class="mol-container mol-split mol-split--reverse">
			<div class="mol-split__media">
				<img src="<?php echo esc_url( $img . 'learn/causes-female.png' ); ?>" alt="">
			</div>
			<div class="mol-split__text">
				<span class="mol-eyebrow">Causes of Hair</span>
				<h2 class="mol-h2">Female Hair Loss</h2>
				<p>Hair loss in women is commonly caused by a combination of genetic, hormonal, and lifestyle factors. Androgenetic alopecia, or female pattern hair loss, is the most prevalent cause, leading to gradual thinning along the crown and part line due to a hereditary sensitivity to hormones. Hormonal imbalances from conditions like menopause, pregnancy, or polycystic ovary syndrome (PCOS) can also disrupt the hair growth cycle, resulting in shedding or thinning.</p>
				<p>Additionally, temporary hair loss, known as telogen effluvium, can occur after stress, illness, or surgery, pushing hair follicles prematurely into the resting phase. Other significant causes include traction alopecia from tight hairstyles, autoimmune conditions like alopecia areata, and nutritional deficiencies in essential vitamins or minerals like iron and biotin. Medical conditions such as thyroid disorders or lupus, as well as certain medications, can further contribute to hair loss. Environmental and lifestyle factors, such as overuse of chemical treatments or heat styling tools, also play a role. Understanding these causes allows for targeted treatments, ranging from lifestyle adjustments and topical solutions to advanced medical therapies.</p>
			</div>
		</div>
	</section>

	<?php get_template_part( 'template-parts/testimonials' ); ?>
	<?php get_template_part( 'template-parts/closing-cta' ); ?>

</main>
