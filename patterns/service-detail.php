<?php
/**
 * Generic renderer for individual service detail pages. Content comes from
 * mollura_service_data() (inc/services-data.php), keyed by the current
 * page's slug -- shared by every page using the "Service Detail" template
 * instead of duplicating a pattern file per service.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$mollura_svc = mollura_service_data( get_post_field( 'post_name' ) );
if ( ! $mollura_svc ) {
	return;
}
$img = get_template_directory_uri() . '/assets/images/';
?>
<main id="main">

	<?php
	get_template_part( 'template-parts/inner-banner', null, array(
		'eyebrow'   => 'Mollura Medical Hair Restoration',
		'title'     => $mollura_svc['banner_title'],
		'image'     => $img . $mollura_svc['banner_image'],
		'image_alt' => '',
		'cta_text'  => 'Contact Us',
		'cta_href'  => 'https://mollurahairtransplant.com/contact/',
	) );
	?>

	<!-- Intro -->
	<section class="mol-content-section">
		<div class="mol-container mol-split">
			<div class="mol-split__media">
				<img src="<?php echo esc_url( $img . $mollura_svc['intro_image'] ); ?>" alt="<?php echo esc_attr( $mollura_svc['intro_image_alt'] ?? '' ); ?>">
			</div>
			<div class="mol-split__text">
				<span class="mol-eyebrow"><?php echo esc_html( $mollura_svc['intro_eyebrow'] ); ?></span>
				<h2 class="mol-h2"><?php echo esc_html( $mollura_svc['intro_heading'] ); ?></h2>
				<?php foreach ( $mollura_svc['intro_body'] as $mollura_p ) : ?>
					<p><?php echo wp_kses_post( $mollura_p ); ?></p>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<!-- Secondary text block (single-column, no image) -->
	<?php if ( ! empty( $mollura_svc['secondary_body'] ) ) : ?>
	<section class="mol-content-section mol-content-section--flush-top">
		<div class="mol-container">
			<?php if ( ! empty( $mollura_svc['secondary_eyebrow'] ) ) : ?>
				<span class="mol-eyebrow"><?php echo esc_html( $mollura_svc['secondary_eyebrow'] ); ?></span>
			<?php endif; ?>
			<?php if ( ! empty( $mollura_svc['secondary_heading'] ) ) : ?>
				<h2 class="mol-h2"><?php echo esc_html( $mollura_svc['secondary_heading'] ); ?></h2>
			<?php endif; ?>
			<?php foreach ( $mollura_svc['secondary_body'] as $mollura_p ) : ?>
				<p><?php echo wp_kses_post( $mollura_p ); ?></p>
			<?php endforeach; ?>
		</div>
	</section>
	<?php endif; ?>

	<!-- Gallery -->
	<?php if ( ! empty( $mollura_svc['gallery_images'] ) ) : ?>
	<section class="mol-content-section mol-content-section--flush-top">
		<div class="mol-container">
			<?php if ( ! empty( $mollura_svc['gallery_heading'] ) ) : ?>
				<h3 class="mol-h3"><?php echo esc_html( $mollura_svc['gallery_heading'] ); ?></h3>
			<?php endif; ?>
			<div class="mol-gallery-grid">
				<?php foreach ( $mollura_svc['gallery_images'] as $mollura_gimg ) : ?>
					<img src="<?php echo esc_url( $img . $mollura_gimg['src'] ); ?>" alt="<?php echo esc_attr( $mollura_gimg['alt'] ?? '' ); ?>">
				<?php endforeach; ?>
			</div>
		</div>
	</section>
	<?php endif; ?>

	<!-- Benefits -->
	<?php if ( ! empty( $mollura_svc['benefits_list'] ) ) : ?>
	<section class="mol-content-section mol-benefits">
		<div class="mol-container mol-split mol-split--reverse">
			<div class="mol-split__media">
				<img src="<?php echo esc_url( $img . $mollura_svc['benefits_image'] ); ?>" alt="<?php echo esc_attr( $mollura_svc['benefits_image_alt'] ?? '' ); ?>">
			</div>
			<div class="mol-split__text">
				<span class="mol-eyebrow"><?php echo esc_html( $mollura_svc['benefits_eyebrow'] ); ?></span>
				<h2 class="mol-h2"><?php echo esc_html( $mollura_svc['benefits_heading'] ); ?></h2>
				<div class="mol-checklist">
					<?php foreach ( $mollura_svc['benefits_list'] as $mollura_benefit ) : ?>
						<div class="mol-checklist__item">
							<span class="mol-checklist__icon" aria-hidden="true">
								<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>
							</span>
							<span><?php echo esc_html( $mollura_benefit ); ?></span>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>
	<?php endif; ?>

	<!-- FAQ -->
	<?php if ( ! empty( $mollura_svc['faqs'] ) ) : ?>
	<section class="mol-content-section mol-faq">
		<div class="mol-container">
			<h2 class="mol-h2">Frequently Asked Questions</h2>
			<?php
			$mollura_faqs   = $mollura_svc['faqs'];
			$mollura_half   = ceil( count( $mollura_faqs ) / 2 );
			$mollura_col1   = array_slice( $mollura_faqs, 0, $mollura_half );
			$mollura_col2   = array_slice( $mollura_faqs, $mollura_half );
			?>
			<div class="mol-faq__grid">
				<div>
					<?php foreach ( $mollura_col1 as $mollura_i => $mollura_faq ) : ?>
						<details class="mol-faq__item"<?php echo 0 === $mollura_i ? ' open' : ''; ?>>
							<summary><?php echo esc_html( $mollura_faq['q'] ); ?></summary>
							<p><?php echo esc_html( $mollura_faq['a'] ); ?></p>
						</details>
					<?php endforeach; ?>
				</div>
				<div>
					<?php foreach ( $mollura_col2 as $mollura_i => $mollura_faq ) : ?>
						<details class="mol-faq__item"<?php echo 0 === $mollura_i ? ' open' : ''; ?>>
							<summary><?php echo esc_html( $mollura_faq['q'] ); ?></summary>
							<p><?php echo esc_html( $mollura_faq['a'] ); ?></p>
						</details>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>
	<?php endif; ?>

	<?php get_template_part( 'template-parts/testimonials' ); ?>

	<?php get_template_part( 'template-parts/closing-cta' ); ?>

</main>
