<?php
/**
 * Fallback template. The theme currently only builds the homepage — any other
 * URL falls through to default WP content inside the shared header/footer
 * chrome rather than a hard 404 look.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header();
?>
<main id="main">
	<div class="mol-container" style="padding-top:var(--space-24);padding-bottom:var(--space-24);">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article <?php post_class(); ?>>
				<h1><?php the_title(); ?></h1>
				<div><?php the_content(); ?></div>
			</article>
		<?php endwhile; endif; ?>
	</div>
</main>
<?php
get_footer();
