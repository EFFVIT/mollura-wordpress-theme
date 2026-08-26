<?php
/**
 * "Hair Restoration Video FAQs" page ("Ask the Doc" in the nav). Titles,
 * durations, and real YouTube thumbnails ported verbatim from the live
 * site (mollurahairtransplant.com/transplant-restoration-video-faqs/).
 *
 * Each card links to the live site's own /video/{slug}/ page (a separate
 * content type outside this rebuild's page scope), same scope decision
 * as the Case Studies index -- see project memory.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$img = get_template_directory_uri() . '/assets/images/';

$mollura_videos = array(
	array( 'image' => 'learn/video-faq-1.jpg', 'title' => 'Hair Transplant Recovery Time', 'duration' => '00:19', 'href' => 'https://mollurahairtransplant.com/video/hair-transplant-recovery-time/' ),
	array( 'image' => 'learn/video-faq-2.jpg', 'title' => 'Will A Hair Transplant Look Natural?', 'duration' => '00:19', 'href' => 'https://mollurahairtransplant.com/video/will-a-hair-transplant-look-natural/' ),
	array( 'image' => 'learn/video-faq-3.jpg', 'title' => 'The Artistic Aspect of Hair Restoration', 'duration' => '00:44', 'href' => 'https://mollurahairtransplant.com/video/the-artistic-aspect-of-hair-restoration/' ),
	array( 'image' => 'learn/video-faq-4.jpg', 'title' => 'Non-Surgical Treatments', 'duration' => '00:46', 'href' => 'https://mollurahairtransplant.com/video/non-surgical-treatments/' ),
	array( 'image' => 'learn/video-faq-5.jpg', 'title' => 'What Is Traction Alopecia?', 'duration' => '00:51', 'href' => 'https://mollurahairtransplant.com/video/what-is-traction-alopecia/' ),
	array( 'image' => 'learn/video-faq-6.jpg', 'title' => 'THE HIDDEN RISKS OF TURKEY HAIR TRANSPLANTS', 'duration' => '02:00', 'href' => 'https://mollurahairtransplant.com/video/the-hidden-risks-of-turkey-hair-transplants/' ),
	array( 'image' => 'learn/video-faq-7.jpg', 'title' => 'Is a hair transplant permanent?', 'duration' => '01:22', 'href' => 'https://mollurahairtransplant.com/video/is-a-hair-transplant-permanent/' ),
	array( 'image' => 'learn/video-faq-8.jpg', 'title' => 'Hair Transplants VS Preventive Hair Loss Therapy', 'duration' => '00:36', 'href' => 'https://mollurahairtransplant.com/video/hair-transplants-vs-preventive-hair-loss-therapy/' ),
	array( 'image' => 'learn/video-faq-9.jpg', 'title' => 'Are Hair Transplant Procedures Painful?', 'duration' => '00:19', 'href' => 'https://mollurahairtransplant.com/video/are-hair-transplant-procedures-painful/' ),
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
				<a class="mol-video-card" href="<?php echo esc_url( $mollura_video['href'] ); ?>">
					<div class="mol-video-card__media">
						<img src="<?php echo esc_url( $img . $mollura_video['image'] ); ?>" alt="<?php echo esc_attr( $mollura_video['title'] ); ?>">
						<span class="mol-video-card__play" aria-hidden="true">
							<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
						</span>
						<span class="mol-video-card__duration"><?php echo esc_html( $mollura_video['duration'] ); ?></span>
					</div>
					<div class="mol-video-card__title"><?php echo esc_html( $mollura_video['title'] ); ?></div>
				</a>
			<?php endforeach; ?>
		</div>
	</section>

	<?php get_template_part( 'template-parts/testimonials' ); ?>
	<?php get_template_part( 'template-parts/closing-cta' ); ?>

</main>
