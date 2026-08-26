<?php
/**
 * "Sitemap" page. The live site generates this from a WP plugin (a live
 * alphabetical list of every published Page) rather than hand-authored
 * copy -- rebuilt the same way here with wp_list_pages() so it always
 * reflects this site's actual current pages instead of a frozen,
 * hand-transcribed snapshot.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<main id="main">

	<?php
	get_template_part( 'template-parts/inner-banner', null, array(
		'eyebrow' => '',
		'title'   => 'Sitemap',
		'image'   => '',
	) );
	?>

	<!-- Page list -->
	<section class="mol-content-section">
		<div class="mol-container">
			<h2 class="mol-h2">Pages</h2>
			<div class="mol-sitemap-list">
				<?php
				wp_list_pages( array(
					'sort_column' => 'post_title',
					'title_li'    => '',
					'exclude'     => get_option( 'page_on_front' ),
				) );
				?>
			</div>
		</div>
	</section>

	<?php get_template_part( 'template-parts/closing-cta' ); ?>

</main>
