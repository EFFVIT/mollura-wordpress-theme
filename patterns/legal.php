<?php
/**
 * Generic renderer for the legal pages (Cookie Policy, Privacy Policy,
 * Medical Disclaimer). Content comes from mollura_legal_data()
 * (inc/legal-data.php), keyed by the current page's slug -- same
 * data-driven mechanism as Service Detail / Gallery. Body is stored as
 * trusted static markup and echoed as-is (not user input).
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$mollura_legal = mollura_legal_data( get_post_field( 'post_name' ) );
if ( ! $mollura_legal ) {
	return;
}
$img = get_template_directory_uri() . '/assets/images/';
?>
<main id="main">

	<?php
	get_template_part( 'template-parts/inner-banner', null, array(
		'eyebrow'   => 'Mollura Medical Hair Restoration',
		'title'     => $mollura_legal['banner_title'],
		'image'     => $img . $mollura_legal['banner_image'],
		'image_alt' => $mollura_legal['banner_title'],
	) );
	?>

	<!-- Legal body -->
	<section class="mol-content-section">
		<div class="mol-container mol-legal">
			<?php echo $mollura_legal['body']; // phpcs:ignore -- trusted static content, not user input ?>
		</div>
	</section>

	<?php get_template_part( 'template-parts/closing-cta' ); ?>

</main>
