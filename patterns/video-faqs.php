<?php
/**
 * "Hair Restoration Video FAQs" page ("Ask the Doc" in the nav). Titles,
 * durations, and real YouTube thumbnails/video IDs ported verbatim from
 * the live site (mollurahairtransplant.com/transplant-restoration-video-faqs/
 * and each video's own /video/{slug}/ page).
 *
 * Each card opens its video in an on-page lightbox (#mol-video-modal,
 * assets/js/main.js) rather than linking out to a separate page.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$img = get_template_directory_uri() . '/assets/images/';

$mollura_videos = array(
	array( 'image' => 'learn/video-faq-1.jpg', 'title' => 'Hair Transplant Recovery Time', 'duration' => '00:19', 'youtube_id' => '5f3USQGc7GM' ),
	array( 'image' => 'learn/video-faq-2.jpg', 'title' => 'Will A Hair Transplant Look Natural?', 'duration' => '00:19', 'youtube_id' => 'X_8jqfbURyY' ),
	array( 'image' => 'learn/video-faq-3.jpg', 'title' => 'The Artistic Aspect of Hair Restoration', 'duration' => '00:44', 'youtube_id' => 'm5kaqcbO-i8' ),
	array( 'image' => 'learn/video-faq-4.jpg', 'title' => 'Non-Surgical Treatments', 'duration' => '00:46', 'youtube_id' => 'iXPjN9DfOco' ),
	array( 'image' => 'learn/video-faq-5.jpg', 'title' => 'What Is Traction Alopecia?', 'duration' => '00:51', 'youtube_id' => 'OHm1nugVm8g' ),
	array( 'image' => 'learn/video-faq-6.jpg', 'title' => 'THE HIDDEN RISKS OF TURKEY HAIR TRANSPLANTS', 'duration' => '02:00', 'youtube_id' => 'L0TYdhuuMog' ),
	array( 'image' => 'learn/video-faq-7.jpg', 'title' => 'Is a hair transplant permanent?', 'duration' => '01:22', 'youtube_id' => 'vya4ZRu8OC0' ),
	array( 'image' => 'learn/video-faq-8.jpg', 'title' => 'Hair Transplants VS Preventive Hair Loss Therapy', 'duration' => '00:36', 'youtube_id' => 'RwSpWbxFxqA' ),
	array( 'image' => 'learn/video-faq-9.jpg', 'title' => 'Are Hair Transplant Procedures Painful?', 'duration' => '00:19', 'youtube_id' => '-TpKSHnyN_g' ),
);
?>
<main id="main">

	<?php
	get_template_part( 'template-parts/inner-banner', null, array(
		'eyebrow'   => '',
		'title'     => 'Transplant & Restoration Video FAQs',
		'image'     => $img . 'learn/hair-transplant-faqs-banner.png',
		'image_alt' => 'Transplant & Restoration Video FAQs',
	) );
	?>

	<!-- Video grid -->
	<section class="mol-content-section">
		<div class="mol-container mol-video-grid">
			<?php foreach ( $mollura_videos as $mollura_video ) : ?>
				<button type="button" class="mol-video-card" data-mol-video-trigger data-youtube-id="<?php echo esc_attr( $mollura_video['youtube_id'] ); ?>" data-video-title="<?php echo esc_attr( $mollura_video['title'] ); ?>">
					<div class="mol-video-card__media">
						<img src="<?php echo esc_url( $img . $mollura_video['image'] ); ?>" alt="<?php echo esc_attr( $mollura_video['title'] ); ?>">
						<span class="mol-video-card__play" aria-hidden="true">
							<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
						</span>
						<span class="mol-video-card__duration"><?php echo esc_html( $mollura_video['duration'] ); ?></span>
					</div>
					<div class="mol-video-card__title"><?php echo esc_html( $mollura_video['title'] ); ?></div>
				</button>
			<?php endforeach; ?>
		</div>
	</section>

	<?php get_template_part( 'template-parts/testimonials' ); ?>
	<?php get_template_part( 'template-parts/closing-cta' ); ?>

</main>

<!-- Video lightbox -->
<div class="mol-video-modal" id="mol-video-modal" role="dialog" aria-modal="true" aria-label="Video player" hidden>
	<div class="mol-video-modal__overlay" data-mol-video-modal-close></div>
	<div class="mol-video-modal__panel">
		<button class="mol-video-modal__close" type="button" aria-label="Close video" data-mol-video-modal-close>
			<svg width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 1l14 14M15 1L1 15"/></svg>
		</button>
		<div class="mol-video-modal__frame">
			<iframe id="mol-video-modal-iframe" src="" title="" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
		</div>
		<button class="mol-video-modal__arrow mol-video-modal__arrow--prev" type="button" aria-label="Previous video" data-mol-video-modal-prev>
			<svg width="14" height="22" viewBox="0 0 14 22" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 1L2 11l10 10"/></svg>
		</button>
		<button class="mol-video-modal__arrow mol-video-modal__arrow--next" type="button" aria-label="Next video" data-mol-video-modal-next>
			<svg width="14" height="22" viewBox="0 0 14 22" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 1l10 10-10 10"/></svg>
		</button>
	</div>
</div>
