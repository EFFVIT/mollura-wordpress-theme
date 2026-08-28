<?php
/**
 * Site footer: brand column, 3 nav columns, legal/disclaimer bar.
 * Ported verbatim from the approved static homepage rebuild.
 */
?>
<footer class="mol-footer">
	<div class="mol-container mol-footer__grid">
		<div class="mol-footer__brand">
			<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-white.png' ); ?>" alt="Mollura Medical Hair Restoration" width="152" height="118">
			<p>393 Franklin Avenue Suite 105<br>Franklin Square, NY 11010</p>
			<a href="tel:+15163543876">516-354-3876</a>
		</div>

		<nav class="mol-footer__col" aria-label="Services">
			<h4>Services</h4>
			<ul>
				<li><a href="/fue-hair-transplant/">FUE Transplant</a></li>
				<li><a href="/fut-hair-transplant/">FUT Transplant</a></li>
				<li><a href="/facial-hair-transplants/">Facial Hair Transplant</a></li>
				<li><a href="/female-hair-loss-treatment/">Female Hair Loss</a></li>
				<li><a href="/non-surgical-hair-restoration/">Non-Surgical Treatment</a></li>
			</ul>
		</nav>

		<nav class="mol-footer__col" aria-label="Learn More">
			<h4>Learn More</h4>
			<ul>
				<li><a href="/hair-transplant-faqs/">FAQs</a></li>
				<li><a href="/about-us/">About Us</a></li>
				<li><a href="/causes-of-hair-loss/">Causes of Hair Loss</a></li>
				<li><a href="/fue-hair-transplant-before-and-after/">FUE Gallery</a></li>
				<li><a href="/fut-hair-transplant-before-and-after/">FUT Gallery</a></li>
			</ul>
		</nav>

		<nav class="mol-footer__col" aria-label="Start Your Journey">
			<h4>Start Your Journey</h4>
			<ul>
				<li><a href="#book-consultation">Contact Us</a></li>
				<li><a href="#book-consultation">Book A Consult</a></li>
				<li><a href="/directions/">Directions</a></li>
				<li><a href="/financing/">Financing</a></li>
				<li><a href="tel:+15163543876">Call Our Office</a></li>
			</ul>
		</nav>
	</div>

	<div class="mol-container mol-footer__legal">
		<p class="mol-footer__copyright">
			&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> Mollura Medical Hair Restoration |
			<a href="<?php echo esc_url( home_url( '/cookie-policy' ) ); ?>">Cookie Policy</a> |
			<a href="<?php echo esc_url( home_url( '/privacy-policy' ) ); ?>">Privacy Policy</a> |
			<a href="/medical-disclaimer/">Medical Disclaimer</a> |
			<a href="/sitemap/">Sitemap</a>
		</p>
		<p class="mol-footer__disclaimer">The information provided on this website is for informational purposes only and does not constitute medical advice, diagnosis, or treatment. Results vary by individual. Always consult with a qualified physician before making any decisions regarding hair restoration or any other medical procedure. Mollura Medical Hair Restoration's surgical procedures are performed by Dr. Anthony Mollura, MD, a licensed physician. Schedule a consultation to discuss your specific situation.</p>
	</div>
</footer>
