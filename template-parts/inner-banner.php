<?php
/**
 * Reusable page-header banner for interior pages.
 *
 * Expected $args: 'eyebrow', 'title', 'image' (theme-relative or absolute
 * URL), 'image_alt', 'cta_text' (optional), 'cta_href' (optional).
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$mol_banner_eyebrow   = array_key_exists( 'eyebrow', $args ) ? $args['eyebrow'] : 'Mollura Medical Hair Restoration';
$mol_banner_title     = $args['title'] ?? '';
$mol_banner_image     = $args['image'] ?? '';
$mol_banner_image_alt = $args['image_alt'] ?? '';
$mol_banner_cta_text  = $args['cta_text'] ?? '';
$mol_banner_cta_href  = $args['cta_href'] ?? '';
?>
<section class="mol-inner-banner<?php echo empty( $mol_banner_cta_text ) ? ' mol-inner-banner--compact' : ''; ?>">
	<?php if ( $mol_banner_image ) : ?>
	<div class="mol-inner-banner__media" aria-hidden="true">
		<img src="<?php echo esc_url( $mol_banner_image ); ?>" alt="<?php echo esc_attr( $mol_banner_image_alt ); ?>">
	</div>
	<?php endif; ?>
	<div class="mol-container mol-inner-banner__content">
		<?php if ( $mol_banner_eyebrow ) : ?>
			<span class="mol-eyebrow mol-eyebrow--on-dark"><?php echo esc_html( $mol_banner_eyebrow ); ?></span>
		<?php endif; ?>
		<h1 class="mol-inner-banner__title"><?php echo esc_html( $mol_banner_title ); ?></h1>
		<?php if ( $mol_banner_cta_text && $mol_banner_cta_href ) : ?>
			<a class="mol-btn mol-btn--primary" href="<?php echo esc_url( $mol_banner_cta_href ); ?>"><?php echo esc_html( $mol_banner_cta_text ); ?></a>
		<?php endif; ?>
	</div>
</section>
