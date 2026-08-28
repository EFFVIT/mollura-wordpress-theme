<?php
/**
 * "Page Not Found" content. Loaded by 404.php in the same inner-banner +
 * content-section + closing-cta shape as every other interior page (see
 * patterns/sitemap.php) -- no Page/DB record backs this, since 404.php is
 * served directly by WordPress's template hierarchy for any URL that
 * doesn't resolve to a real post/page.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<main id="main">

	<?php
	get_template_part( 'template-parts/inner-banner', null, array(
		'eyebrow' => 'Error 404',
		'title'   => 'Page Not Found',
		'image'   => '',
	) );
	?>

	<section class="mol-content-section mol-404">
		<div class="mol-container">
			<span class="mol-404__code" aria-hidden="true">404</span>
			<div class="mol-404__body">
				<p>The page you're looking for may have been moved, renamed, or no longer exists. Head back to the homepage, or use one of the links below to find what you need.</p>
			</div>
			<div class="mol-404__actions">
				<a class="mol-btn mol-btn--primary" href="<?php echo esc_url( home_url( '/' ) ); ?>">Back to Homepage</a>
				<a class="mol-btn mol-btn--outline-dark" href="tel:+15163543876">Call 516-354-3876</a>
			</div>
			<nav class="mol-404__links" aria-label="Popular pages">
				<a href="/hair-restoration-services/">Hair Restoration Services</a>
				<a href="/male-hair-transplant-before-and-after/">Before &amp; After Gallery</a>
				<a href="/about-us/">About Us</a>
				<a href="/contact/">Contact Us</a>
			</nav>
		</div>
	</section>

	<?php get_template_part( 'template-parts/closing-cta' ); ?>

</main>
