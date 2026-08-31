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

// Full library, newest first (matches the live site's video post IDs) so the
// first entry can be pulled out as the "most recent" featured video above the grid.
$mollura_videos = array(
	array( 'image' => 'learn/video-faq-2.jpg', 'title' => 'Will A Hair Transplant Look Natural?', 'duration' => '00:19', 'youtube_id' => 'X_8jqfbURyY' ),
	array( 'image' => 'learn/video-faq-12.jpg', 'title' => 'The Importance of Hair Loss Management', 'duration' => '01:15', 'youtube_id' => 'qcSNNTRby8k' ),
	array( 'image' => 'learn/video-faq-6.jpg', 'title' => 'THE HIDDEN RISKS OF TURKEY HAIR TRANSPLANTS', 'duration' => '02:00', 'youtube_id' => 'L0TYdhuuMog' ),
	array( 'image' => 'learn/video-faq-3.jpg', 'title' => 'The Artistic Aspect of Hair Restoration', 'duration' => '00:44', 'youtube_id' => 'm5kaqcbO-i8' ),
	array( 'image' => 'learn/video-faq-13.jpg', 'title' => 'Real Patients. Real Reviews. Real Results!', 'duration' => '00:33', 'youtube_id' => 'Lp85aPK9hTI' ),
	array( 'image' => 'learn/video-faq-8.jpg', 'title' => 'Hair Transplants VS Preventive Hair Loss Therapy', 'duration' => '00:36', 'youtube_id' => 'RwSpWbxFxqA' ),
	array( 'image' => 'learn/video-faq-14.jpg', 'title' => 'How Long To See Results?', 'duration' => '00:25', 'youtube_id' => 'mYHBUlHKNyk' ),
	array( 'image' => 'learn/video-faq-7.jpg', 'title' => 'Is a hair transplant permanent?', 'duration' => '01:22', 'youtube_id' => 'vya4ZRu8OC0' ),
	array( 'image' => 'learn/video-faq-5.jpg', 'title' => 'What Is Traction Alopecia?', 'duration' => '00:51', 'youtube_id' => 'OHm1nugVm8g' ),
	array( 'image' => 'learn/video-faq-4.jpg', 'title' => 'Non-Surgical Treatments', 'duration' => '00:47', 'youtube_id' => 'iXPjN9DfOco' ),
	array( 'image' => 'learn/video-faq-9.jpg', 'title' => 'Are Hair Transplant Procedures Painful?', 'duration' => '00:19', 'youtube_id' => '-TpKSHnyN_g' ),
	array( 'image' => 'learn/video-faq-15.jpg', 'title' => 'What Hair Transplant Is Best For You?', 'duration' => '00:49', 'youtube_id' => 'iE4bhO6IQI4' ),
	array( 'image' => 'learn/video-faq-16.jpg', 'title' => 'Can Women Do Eyebrow Hair Transplants?', 'duration' => '00:35', 'youtube_id' => 'JxvdMq79Dqc' ),
	array( 'image' => 'learn/video-faq-11.jpg', 'title' => 'Seasonal Shedding Cycles During Summer', 'duration' => '00:41', 'youtube_id' => 'PFqpVLFgdHA' ),
	array( 'image' => 'learn/video-faq-10.jpg', 'title' => 'Beard Transplants & Chest Hair', 'duration' => '00:39', 'youtube_id' => 'wgqlvH9difQ' ),
	array( 'image' => 'learn/video-faq-1.jpg', 'title' => 'Hair Transplant Recovery Time', 'duration' => '00:19', 'youtube_id' => '5f3USQGc7GM' ),
);

$mollura_featured_video = $mollura_videos[0];
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

	<!-- Most recent video -->
	<section class="mol-content-section">
		<div class="mol-container">
			<h2 class="mol-h2 mol-video-featured-heading">Most Recent Video</h2>
			<button type="button" class="mol-video-featured" data-mol-video-trigger data-youtube-id="<?php echo esc_attr( $mollura_featured_video['youtube_id'] ); ?>" data-video-title="<?php echo esc_attr( $mollura_featured_video['title'] ); ?>">
				<div class="mol-video-featured__media">
					<img src="<?php echo esc_url( $img . $mollura_featured_video['image'] ); ?>" alt="<?php echo esc_attr( $mollura_featured_video['title'] ); ?>">
					<span class="mol-video-featured__play" aria-hidden="true">
						<svg width="26" height="26" viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
					</span>
					<span class="mol-video-featured__duration"><?php echo esc_html( $mollura_featured_video['duration'] ); ?></span>
				</div>
				<div class="mol-video-featured__body">
					<h2 class="mol-video-featured__title"><?php echo esc_html( $mollura_featured_video['title'] ); ?></h2>
					<p class="mol-video-featured__detail">Dr. Mollura answers our patients' most common questions in short, straight-to-the-point videos. Watch the latest one, then browse the full library below.</p>
					<span class="mol-video-featured__cta">Watch Now <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
				</div>
			</button>
		</div>
	</section>

	<!-- Video grid -->
	<section class="mol-content-section mol-content-section--flush-top">
		<div class="mol-container mol-video-grid">
			<?php foreach ( array_slice( $mollura_videos, 1 ) as $mollura_video ) : ?>
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
