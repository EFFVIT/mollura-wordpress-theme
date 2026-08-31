<?php
/**
 * Generic renderer for individual case-study articles. Content comes from
 * mollura_case_study_data() (inc/case-studies-data.php), keyed by the
 * current page's slug -- same data-driven mechanism as Service Detail /
 * Gallery / Legal, shared by every page using the "Case Study" template
 * instead of duplicating a pattern file per case study.
 *
 * Every case-study image is a pre-baked "Before / After" composite graphic
 * (single file, side-by-side photos, captions burned into the image), so
 * media is rendered full-width rather than squeezed into a split column.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$mollura_case = mollura_case_study_data( get_post_field( 'post_name' ) );
if ( ! $mollura_case ) {
	return;
}
$img = get_template_directory_uri() . '/assets/images/';
?>
<main id="main">

	<?php
	get_template_part( 'template-parts/inner-banner', null, array(
		'eyebrow'   => 'Mollura Medical Hair Restoration',
		'title'     => 'Case Studies',
		'image'     => $img . $mollura_case['banner_image'],
		'image_alt' => wp_strip_all_tags( $mollura_case['banner_title'] ),
		'cta_text'  => 'Contact Us',
		'cta_href'  => '/contact/',
	) );
	?>

	<!-- Patient snapshot -->
	<?php if ( ! empty( $mollura_case['stats'] ) ) : ?>
	<section class="mol-content-section mol-content-section--flush-top">
		<div class="mol-container">
			<span class="mol-eyebrow">Case Study</span>
			<h2 class="mol-h2"><?php echo wp_kses_post( $mollura_case['banner_title'] ); ?></h2>
			<div class="mol-case-stats">
				<?php foreach ( $mollura_case['stats'] as $mollura_stat ) : ?>
					<div class="mol-case-stats__item">
						<span class="mol-case-stats__value"><?php echo esc_html( $mollura_stat['value'] ); ?></span>
						<span class="mol-case-stats__label"><?php echo esc_html( $mollura_stat['label'] ); ?></span>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
	<?php endif; ?>

	<!-- Intro -->
	<section class="mol-content-section<?php echo empty( $mollura_case['stats'] ) ? '' : ' mol-content-section--flush-top'; ?>">
		<div class="mol-container mol-case-block">
			<?php if ( empty( $mollura_case['stats'] ) ) : ?>
				<span class="mol-eyebrow">Case Study</span>
				<h2 class="mol-h2"><?php echo wp_kses_post( $mollura_case['banner_title'] ); ?></h2>
			<?php endif; ?>
			<?php if ( ! empty( $mollura_case['intro_video'] ) ) : ?>
				<div class="mol-case-media mol-video-embed">
					<iframe src="<?php echo esc_url( $mollura_case['intro_video'] ); ?>" title="<?php echo esc_attr( wp_strip_all_tags( $mollura_case['banner_title'] ) ); ?>" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
				</div>
			<?php else : ?>
				<div class="mol-case-media">
					<img src="<?php echo esc_url( $img . $mollura_case['intro_image'] ); ?>" alt="<?php echo esc_attr( wp_strip_all_tags( $mollura_case['banner_title'] ) ); ?> &ndash; before and after">
				</div>
			<?php endif; ?>
			<div class="mol-case-block__text">
				<?php foreach ( $mollura_case['intro_body'] as $mollura_p ) : ?>
					<p><?php echo wp_kses_post( $mollura_p ); ?></p>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<!-- Additional rows -->
	<?php foreach ( $mollura_case['rows'] as $mollura_row ) : ?>
		<section class="mol-content-section mol-content-section--flush-top">
			<div class="mol-container mol-case-block">
				<?php if ( ! empty( $mollura_row['video'] ) ) : ?>
					<div class="mol-case-media mol-video-embed">
						<iframe src="<?php echo esc_url( $mollura_row['video'] ); ?>" title="<?php echo esc_attr( wp_strip_all_tags( $mollura_case['banner_title'] ) ); ?>" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
					</div>
				<?php elseif ( ! empty( $mollura_row['image'] ) ) : ?>
					<div class="mol-case-media">
						<img src="<?php echo esc_url( $img . $mollura_row['image'] ); ?>" alt="<?php echo esc_attr( wp_strip_all_tags( $mollura_case['banner_title'] ) ); ?> &ndash; before and after">
					</div>
				<?php endif; ?>
				<div class="mol-case-block__text">
					<?php foreach ( $mollura_row['text'] as $mollura_p ) : ?>
						<p><?php echo wp_kses_post( $mollura_p ); ?></p>
					<?php endforeach; ?>
				</div>
				<?php if ( ! empty( $mollura_row['quote'] ) ) : ?>
					<blockquote class="mol-case-quote">
						<p><?php echo wp_kses_post( $mollura_row['quote']['text'] ); ?></p>
						<?php if ( ! empty( $mollura_row['quote']['attribution'] ) ) : ?>
							<cite><?php echo esc_html( $mollura_row['quote']['attribution'] ); ?></cite>
						<?php endif; ?>
					</blockquote>
				<?php endif; ?>
			</div>
		</section>
	<?php endforeach; ?>

	<?php get_template_part( 'template-parts/testimonials' ); ?>
	<?php get_template_part( 'template-parts/closing-cta' ); ?>

</main>
