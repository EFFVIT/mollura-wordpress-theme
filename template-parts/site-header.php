<?php
/**
 * Site header: topbar (address/phone/social) + logo + primary nav.
 * Nav data ported verbatim from the live site's real menu — see mollura_primary_nav().
 */
$mollura_nav = mollura_primary_nav();
?>
<a class="mol-skip-link" href="#main">Skip to main content</a>

<div class="mol-topbar">
	<div class="mol-container mol-topbar__inner">
		<div class="mol-topbar__address">
			393 Franklin Avenue Suite 105, Franklin Square, NY 11010 |
			<a href="tel:+15163543876">516-354-3876</a>
		</div>
		<div class="mol-topbar__social">
			<a href="https://www.instagram.com/molluramedical/" target="_blank" rel="noopener" aria-label="Instagram">
				<svg width="18" height="18" viewBox="0 0 18 18" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12.7498 1.49983H5.24983C3.17877 1.49983 1.49983 3.17877 1.49983 5.24983V12.7498C1.49983 14.8209 3.17877 16.4998 5.24983 16.4998H12.7498C14.8209 16.4998 16.4998 14.8209 16.4998 12.7498V5.24983C16.4998 3.17877 14.8209 1.49983 12.7498 1.49983Z"/><path d="M8.99967 11.9993C10.6563 11.9993 11.9993 10.6563 11.9993 8.99967C11.9993 7.343 10.6563 6 8.99967 6C7.343 6 6 7.343 6 8.99967C6 10.6563 7.343 11.9993 8.99967 11.9993Z"/><path d="M13.1249 5.62483C13.5391 5.62483 13.8748 5.28908 13.8748 4.87492C13.8748 4.46075 13.5391 4.125 13.1249 4.125C12.7107 4.125 12.375 4.46075 12.375 4.87492C12.375 5.28908 12.7107 5.62483 13.1249 5.62483Z"/></svg>
			</a>
			<a href="https://www.facebook.com/" target="_blank" rel="noopener" aria-label="Facebook">
				<svg width="18" height="18" viewBox="0 0 18 18" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M13.5 1.5H11.25C10.2554 1.5 9.30161 1.89509 8.59835 2.59835C7.89509 3.30161 7.5 4.25544 7.5 5.25V7.5H5.25V10.5H7.5V16.5H10.5V10.5H12.75L13.5 7.5H10.5V5.25C10.5 5.05109 10.579 4.86032 10.7197 4.71967C10.8603 4.57902 11.0511 4.5 11.25 4.5H13.5V1.5Z"/></svg>
			</a>
			<a href="https://www.youtube.com/" target="_blank" rel="noopener" aria-label="YouTube">
				<svg width="18" height="18" viewBox="0 0 18 18" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M13.5 3.75H4.5C2.84315 3.75 1.5 5.09315 1.5 6.75V11.25C1.5 12.9069 2.84315 14.25 4.5 14.25H13.5C15.1569 14.25 16.5 12.9069 16.5 11.25V6.75C16.5 5.09315 15.1569 3.75 13.5 3.75Z"/><path d="M7.5 6.75L11.9995 8.99975L7.5 11.2495V6.75Z" fill="currentColor" stroke="none"/></svg>
			</a>
		</div>
	</div>
</div>

<header class="mol-header">
	<div class="mol-container mol-header__inner">
		<a class="mol-header__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="Mollura Medical Hair Restoration home">
			<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-color.png' ); ?>" alt="Mollura Medical Hair Restoration" width="167" height="129">
		</a>

		<button class="mol-nav-toggle" type="button" aria-expanded="false" aria-controls="mol-primary-nav" aria-label="Toggle navigation menu">
			<span></span><span></span><span></span>
		</button>

		<nav class="mol-nav" id="mol-primary-nav" aria-label="Main">
			<ul class="mol-nav__list">
				<?php foreach ( $mollura_nav as $item ) : ?>
					<li class="mol-nav__item<?php echo ! empty( $item['children'] ) ? ' mol-nav__item--has-children' : ''; ?>">
						<a class="mol-nav__link" href="<?php echo esc_url( $item['href'] ); ?>"><?php echo esc_html( $item['label'] ); ?></a>
						<?php if ( ! empty( $item['children'] ) ) : ?>
							<button class="mol-nav__caret" type="button" aria-label="Expand <?php echo esc_attr( $item['label'] ); ?> submenu" aria-expanded="false">
								<svg width="12" height="8" viewBox="0 0 12 8" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 1l5 5 5-5"/></svg>
							</button>
							<ul class="mol-nav__submenu">
								<?php foreach ( $item['children'] as $child ) : ?>
									<li><a href="<?php echo esc_url( $child['href'] ); ?>"><?php echo esc_html( $child['label'] ); ?></a></li>
								<?php endforeach; ?>
							</ul>
						<?php endif; ?>
					</li>
				<?php endforeach; ?>
			</ul>
			<a class="mol-btn mol-btn--primary mol-nav__cta" href="#book-consultation">Book a Consultation</a>
		</nav>
	</div>
</header>
