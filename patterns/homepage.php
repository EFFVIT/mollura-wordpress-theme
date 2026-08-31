<?php
/**
 * Homepage section markup, ported verbatim (content + structure) from the
 * approved static rebuild at mollura-homepage-static/index.html.
 *
 * Two known content gaps carried over as-is, NOT invented around here:
 *  1. 3 of 9 testimonial cards are explicit "Placeholder —" filler quotes with
 *     "Add Patient Name" — need real patient testimonials before launch.
 *  2. The $1,000-off popup offer's copy says "valid through Labor Day" /
 *     "completed by September 7, 2026" — will be stale well before this site
 *     launches; needs a refreshed offer/date from the client before going live.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$img = get_template_directory_uri() . '/assets/images/';
?>
<main id="main">

	<!-- Hero -->
	<section class="mol-hero">
		<div class="mol-hero__media">
			<img src="<?php echo esc_url( $img . 'hero-photo.jpg' ); ?>" alt="Confident man with a full, healthy head of hair">
			<div class="mol-hero__overlay"></div>
		</div>
		<div class="mol-container mol-hero__content">
			<img class="mol-hero__logo-mark" src="<?php echo esc_url( $img . 'hero-logo-mark.png' ); ?>" alt="Mollura Medical Hair Restoration" width="155" height="156">
			<h1 class="mol-hero__title">Start Restoring<br>Your Hair Today!</h1>
			<p class="mol-hero__body">Mollura Medical Hair Restoration is one of Long Island&rsquo;s top clinics for surgical and non-surgical hair loss treatments including FUE, FUT, supplemental PRP, hair loss medications, and more. Our knowledgeable team will help you regain the hair you deserve.</p>
			<a class="mol-btn mol-btn--primary" href="#book-consultation">Contact Us</a>
		</div>
	</section>

	<!-- Office Hours / Consultation info bar -->
	<section class="mol-info-bar">
		<div class="mol-container mol-info-bar__grid">
			<div class="mol-info-bar__box">
				<span class="mol-icon-circle mol-icon-circle--on-dark" aria-hidden="true">
					<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3.5 2"/></svg>
				</span>
				<h3>Office Hours</h3>
				<p>Mon&ndash;Fri: 9am &ndash; 5pm (Wed until 7pm)<br>Sat: 10am &ndash; 2pm &middot; Sun: Closed</p>
			</div>
			<div class="mol-info-bar__box mol-info-bar__box--mid">
				<span class="mol-icon-circle mol-icon-circle--on-dark" aria-hidden="true">
					<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4.5" width="18" height="16" rx="2"/><path d="M16 2.5v4M8 2.5v4M3 10h18"/><path d="M9 15.5l2 2 4-4.5"/></svg>
				</span>
				<h3>Consultations</h3>
				<p>Available Virtually and In-Person</p>
			</div>
			<div class="mol-info-bar__box">
				<span class="mol-icon-circle mol-icon-circle--on-dark" aria-hidden="true">
					<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M12 8v8M8 12h8"/></svg>
				</span>
				<h3>Hair Loss Solutions</h3>
				<p>Surgical and Non-Surgical Hair Loss Treatment Available</p>
			</div>
		</div>
	</section>

	<!-- Cherry Financing Banner -->
	<section class="mol-cherry">
		<div class="mol-container mol-cherry__inner">
			<div class="mol-cherry__logo-chip">
				<img src="https://mollurahairtransplant.com/wp-content/uploads/2025/08/Logo-Primary_2x-1024x285_1-1.png" alt="Cherry Logo" height="70">
			</div>
			<div class="mol-cherry__content">
				<h2 class="mol-cherry__title">Flexible Payment Options with Cherry</h2>
				<p class="mol-cherry__body">We&rsquo;ve partnered with Cherry to make hair restoration more affordable. Get the treatment you want now and pay over time with simple monthly payments.</p>
				<a class="mol-btn mol-btn--primary" href="/financing/">Learn More About Financing</a>
			</div>
		</div>
	</section>

	<!-- Services -->
	<section class="mol-services">
		<div class="mol-container">
			<span class="mol-eyebrow">What We Do</span>
			<h2 class="mol-h2">Services</h2>
			<div class="mol-services__grid">

				<a class="mol-card mol-card--service" href="/fue-hair-transplant/">
					<div class="mol-card__top">
						<span class="mol-icon-circle" aria-hidden="true">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 2 4 4"/><path d="m17 7 3-3"/><path d="M19 9 8.7 19.3c-1 1-2.5 1-3.4 0l-.6-.6c-1-1-1-2.5 0-3.4L15 5"/><path d="m9 11 4 4"/><path d="m5 19-3 3"/><path d="m14 4 6 6"/></svg>
						</span>
						<h3>FUE Hair<br>Transplant</h3>
					</div>
					<div class="mol-card__reveal">
						<p>Advanced FUE Hair Restoration at a Top Long Island Clinic.</p>
						<span class="mol-card__link">More Info</span>
					</div>
				</a>

				<a class="mol-card mol-card--service" href="/laser-hair-therapy-device/">
					<div class="mol-card__top">
						<span class="mol-icon-circle" aria-hidden="true">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15.914 4a1.5 1.5 0 0 0-2.474-1.561l-9 9A1.5 1.5 0 0 0 5.5 14h4.002a.5.5 0 0 1 .471.666L8.086 20a1.5 1.5 0 0 0 2.475 1.56l9-9A1.5 1.5 0 0 0 18.5 10h-3.997a.5.5 0 0 1-.472-.667z"/></svg>
						</span>
						<h3>FUT Hair<br>Transplant</h3>
					</div>
					<div class="mol-card__reveal">
						<p>Low-level laser light therapy has been shown to help promote hair growth.</p>
						<span class="mol-card__link">More Info</span>
					</div>
				</a>

				<a class="mol-card mol-card--service" href="/eyebrow-hair-restoration/">
					<div class="mol-card__top">
						<span class="mol-icon-circle" aria-hidden="true">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"/><circle cx="12" cy="12" r="3"/></svg>
						</span>
						<h3>Eyebrow Hair<br>Restoration</h3>
					</div>
					<div class="mol-card__reveal">
						<p>Thinning or overplucked eyebrows can be revitalized.</p>
						<span class="mol-card__link">More Info</span>
					</div>
				</a>

				<a class="mol-card mol-card--service" href="/topical-hair-loss-serum/">
					<div class="mol-card__top">
						<span class="mol-icon-circle" aria-hidden="true">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22a7 7 0 0 0 7-7c0-2-1-3.9-3-5.5s-3.5-4-4-6.5c-.5 2.5-2 4.9-4 6.5C6 11.1 5 13 5 15a7 7 0 0 0 7 7z"/></svg>
						</span>
						<h3>Topical Hair<br>Loss Serum</h3>
					</div>
					<div class="mol-card__reveal">
						<p>Topical hair loss serums can be used on their own or in conjunction with hair transplantation.</p>
						<span class="mol-card__link">More Info</span>
					</div>
				</a>

				<a class="mol-card mol-card--service" href="/female-hair-loss-treatment/">
					<div class="mol-card__top">
						<span class="mol-icon-circle" aria-hidden="true">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
						</span>
						<h3>Female Hair<br>Loss Treatment</h3>
					</div>
					<div class="mol-card__reveal">
						<p>Stress, hormonal changes, age, and more can lead to hair loss in women. Our team can help you.</p>
						<span class="mol-card__link">More Info</span>
					</div>
				</a>

				<a class="mol-card mol-card--service" href="/non-surgical-hair-restoration/">
					<div class="mol-card__top">
						<span class="mol-icon-circle" aria-hidden="true">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg>
						</span>
						<h3>Non-Surgical Hair<br>Restoration</h3>
					</div>
					<div class="mol-card__reveal">
						<p>Non-Surgical options aim to slow or stop hair loss, make hair healthier and stronger, and provide minor hair growth.</p>
						<span class="mol-card__link">More Info</span>
					</div>
				</a>

			</div>
		</div>
	</section>

	<!-- Before / After -->
	<section class="mol-results">
		<div class="mol-container">
			<div class="mol-results__header">
				<span class="mol-eyebrow">Real Results</span>
				<h2 class="mol-h2">Before and After</h2>
				<p class="mol-results__intro">Seeing is believing. We are proud to show off the great work our doctor and team have done in revitalizing and regrowing hair for our clients. Take a look at some of our past clients and their progress regrowing hair post-treatment.</p>
			</div>

			<div class="mol-results__row">

				<ul class="mol-results__benefits">
					<li class="mol-results__benefit">
						<span class="mol-icon-circle" aria-hidden="true">
							<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>
						</span>
						<strong>Knowledgeable</strong>
						<p>With years of experience, our team can help diagnose and treat your hair loss issues.</p>
					</li>
					<li class="mol-results__benefit">
						<span class="mol-icon-circle" aria-hidden="true">
							<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>
						</span>
						<strong>Bespoke Treatment</strong>
						<p>Not all hair loss is the same. We create a customized treatment plan for each patient.</p>
					</li>
				</ul>

				<div class="mol-results__media">
				<div class="mol-ba-slider mol-ba-slider--circle" role="group" aria-label="Before and after result slider">
					<div class="mol-ba-slider__viewport">
					<div class="mol-ba-slider__track">

						<figure class="mol-ba-slider__slide">
							<div class="mol-ba-compare mol-ba-compare--circle" data-mol-ba-compare>
								<img class="mol-ba-compare__after" src="https://mollurahairtransplant.com/wp-content/uploads/2026/01/Rectangle-183.png" alt="After result">
								<div class="mol-ba-compare__before-wrap">
									<img class="mol-ba-compare__before" src="https://mollurahairtransplant.com/wp-content/uploads/2026/01/Rectangle-182.png" alt="Before result">
								</div>
								<input type="range" class="mol-ba-compare__range" min="0" max="100" value="50" aria-label="Drag to compare before and after">
								<div class="mol-ba-compare__handle" aria-hidden="true">
									<span class="mol-ba-compare__handle-grip">
										<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 8l-5 4 5 4M16 8l5 4-5 4"/></svg>
									</span>
								</div>
								<span class="mol-ba-compare__tag mol-ba-compare__tag--before">Before</span>
								<span class="mol-ba-compare__tag mol-ba-compare__tag--after">After</span>
							</div>
						</figure>

						<figure class="mol-ba-slider__slide">
							<div class="mol-ba-compare mol-ba-compare--circle" data-mol-ba-compare>
								<img class="mol-ba-compare__after" src="https://mollurahairtransplant.com/wp-content/uploads/2026/01/Rectangle-185.png" alt="After result">
								<div class="mol-ba-compare__before-wrap">
									<img class="mol-ba-compare__before" src="https://mollurahairtransplant.com/wp-content/uploads/2026/01/Rectangle-184.png" alt="Before result">
								</div>
								<input type="range" class="mol-ba-compare__range" min="0" max="100" value="50" aria-label="Drag to compare before and after">
								<div class="mol-ba-compare__handle" aria-hidden="true">
									<span class="mol-ba-compare__handle-grip">
										<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 8l-5 4 5 4M16 8l5 4-5 4"/></svg>
									</span>
								</div>
								<span class="mol-ba-compare__tag mol-ba-compare__tag--before">Before</span>
								<span class="mol-ba-compare__tag mol-ba-compare__tag--after">After</span>
							</div>
						</figure>

						<figure class="mol-ba-slider__slide">
							<div class="mol-ba-compare mol-ba-compare--circle" data-mol-ba-compare>
								<img class="mol-ba-compare__after" src="https://mollurahairtransplant.com/wp-content/uploads/2026/01/Rectangle-187.png" alt="After result">
								<div class="mol-ba-compare__before-wrap">
									<img class="mol-ba-compare__before" src="https://mollurahairtransplant.com/wp-content/uploads/2026/01/Rectangle-186.png" alt="Before result">
								</div>
								<input type="range" class="mol-ba-compare__range" min="0" max="100" value="50" aria-label="Drag to compare before and after">
								<div class="mol-ba-compare__handle" aria-hidden="true">
									<span class="mol-ba-compare__handle-grip">
										<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 8l-5 4 5 4M16 8l5 4-5 4"/></svg>
									</span>
								</div>
								<span class="mol-ba-compare__tag mol-ba-compare__tag--before">Before</span>
								<span class="mol-ba-compare__tag mol-ba-compare__tag--after">After</span>
							</div>
						</figure>

						<figure class="mol-ba-slider__slide">
							<div class="mol-ba-compare mol-ba-compare--circle" data-mol-ba-compare>
								<img class="mol-ba-compare__after" src="https://mollurahairtransplant.com/wp-content/uploads/2026/01/Rectangle-189.png" alt="After result">
								<div class="mol-ba-compare__before-wrap">
									<img class="mol-ba-compare__before" src="https://mollurahairtransplant.com/wp-content/uploads/2026/01/Rectangle-188.png" alt="Before result">
								</div>
								<input type="range" class="mol-ba-compare__range" min="0" max="100" value="50" aria-label="Drag to compare before and after">
								<div class="mol-ba-compare__handle" aria-hidden="true">
									<span class="mol-ba-compare__handle-grip">
										<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 8l-5 4 5 4M16 8l5 4-5 4"/></svg>
									</span>
								</div>
								<span class="mol-ba-compare__tag mol-ba-compare__tag--before">Before</span>
								<span class="mol-ba-compare__tag mol-ba-compare__tag--after">After</span>
							</div>
						</figure>

						<figure class="mol-ba-slider__slide">
							<div class="mol-ba-compare mol-ba-compare--circle" data-mol-ba-compare>
								<img class="mol-ba-compare__after" src="https://mollurahairtransplant.com/wp-content/uploads/2026/01/Rectangle-191.png" alt="After result">
								<div class="mol-ba-compare__before-wrap">
									<img class="mol-ba-compare__before" src="https://mollurahairtransplant.com/wp-content/uploads/2026/01/Rectangle-190.png" alt="Before result">
								</div>
								<input type="range" class="mol-ba-compare__range" min="0" max="100" value="50" aria-label="Drag to compare before and after">
								<div class="mol-ba-compare__handle" aria-hidden="true">
									<span class="mol-ba-compare__handle-grip">
										<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 8l-5 4 5 4M16 8l5 4-5 4"/></svg>
									</span>
								</div>
								<span class="mol-ba-compare__tag mol-ba-compare__tag--before">Before</span>
								<span class="mol-ba-compare__tag mol-ba-compare__tag--after">After</span>
							</div>
						</figure>

						<figure class="mol-ba-slider__slide">
							<div class="mol-ba-compare mol-ba-compare--circle" data-mol-ba-compare>
								<img class="mol-ba-compare__after" src="https://mollurahairtransplant.com/wp-content/uploads/2026/01/Rectangle-193.png" alt="After result">
								<div class="mol-ba-compare__before-wrap">
									<img class="mol-ba-compare__before" src="https://mollurahairtransplant.com/wp-content/uploads/2026/01/Rectangle-192.png" alt="Before result">
								</div>
								<input type="range" class="mol-ba-compare__range" min="0" max="100" value="50" aria-label="Drag to compare before and after">
								<div class="mol-ba-compare__handle" aria-hidden="true">
									<span class="mol-ba-compare__handle-grip">
										<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 8l-5 4 5 4M16 8l5 4-5 4"/></svg>
									</span>
								</div>
								<span class="mol-ba-compare__tag mol-ba-compare__tag--before">Before</span>
								<span class="mol-ba-compare__tag mol-ba-compare__tag--after">After</span>
							</div>
						</figure>

						<figure class="mol-ba-slider__slide">
							<div class="mol-ba-placeholder mol-ba-placeholder--circle">
								<svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="8.5" cy="10.5" r="1.5"/><path d="M21 15l-5-5L5 19"/></svg>
								<p class="mol-ba-placeholder__label">Before &amp; After Photos<br>Coming Soon</p>
							</div>
						</figure>

					</div>
					</div>

					<button class="mol-ba-slider__arrow mol-ba-slider__arrow--prev" type="button" aria-label="Previous result">
						<svg width="14" height="22" viewBox="0 0 14 22" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 1L2 11l10 10"/></svg>
					</button>
					<button class="mol-ba-slider__arrow mol-ba-slider__arrow--next" type="button" aria-label="Next result">
						<svg width="14" height="22" viewBox="0 0 14 22" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 1l10 10-10 10"/></svg>
					</button>

					<div class="mol-ba-slider__dots" role="tablist" aria-label="Result slides"></div>
				</div>
				</div>

				<ul class="mol-results__benefits">
					<li class="mol-results__benefit">
						<span class="mol-icon-circle" aria-hidden="true">
							<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>
						</span>
						<strong>Natural-Looking Results</strong>
						<p>We strive to make sure your hair growth and hairline design will have you looking your best.</p>
					</li>
					<li class="mol-results__benefit">
						<span class="mol-icon-circle" aria-hidden="true">
							<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>
						</span>
						<strong>Quick Recovery Time</strong>
						<p>No one wants to spend weeks recovering. You&rsquo;ll be back at work and life in practically no time.</p>
					</li>
				</ul>

			</div>
		</div>
	</section>

	<!-- Why Choose Mollura -->
	<section class="mol-why">
		<div class="mol-container mol-why__grid">
			<div class="mol-why__content">
				<span class="mol-eyebrow">About Us</span>
				<h2 class="mol-h2">Why Choose Mollura Medical Hair Restoration</h2>

				<ul class="mol-why__list">
					<li class="mol-why__item">
						<span class="mol-icon-circle" aria-hidden="true">
							<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>
						</span>
						<div>
							<strong>Knowledgeable</strong>
							<p>With years of experience, our team can help diagnose and treat your hair loss issues.</p>
						</div>
					</li>
					<li class="mol-why__item">
						<span class="mol-icon-circle" aria-hidden="true">
							<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>
						</span>
						<div>
							<strong>Bespoke Treatment</strong>
							<p>Not all hair loss is the same. We create a customized treatment plan for each patient.</p>
						</div>
					</li>
					<li class="mol-why__item">
						<span class="mol-icon-circle" aria-hidden="true">
							<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>
						</span>
						<div>
							<strong>Natural-Looking Results</strong>
							<p>We strive to make sure your hair growth and hairline design will have you looking your best.</p>
						</div>
					</li>
					<li class="mol-why__item">
						<span class="mol-icon-circle" aria-hidden="true">
							<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>
						</span>
						<div>
							<strong>Quick recovery Time</strong>
							<p>No one wants to spend weeks recovering. You&rsquo;ll be back at work and life in practically no time.</p>
						</div>
					</li>
				</ul>

				<a class="mol-btn mol-btn--primary" href="/about-us/">Learn More</a>
			</div>
			<div class="mol-why__image">
				<img src="https://mollurahairtransplant.com/wp-content/uploads/2025/01/Rectangle-129.png" alt="Professional Image">
			</div>
		</div>
	</section>

	<!-- Meet the Doctor -->
	<section class="mol-doctor">
		<div class="mol-container mol-doctor__grid">
			<div class="mol-doctor__image">
				<img src="<?php echo esc_url( $img . 'dr-mollura.jpg' ); ?>" alt="Dr. Anthony Mollura">
			</div>
			<div class="mol-doctor__content">
				<span class="mol-eyebrow mol-eyebrow--on-dark">Meet Our Team</span>
				<h2 class="mol-h2 mol-h2--on-dark">Dr. Anthony Mollura, MD</h2>
				<p class="mol-doctor__bio">Dr. Mollura is one of NY&rsquo;s most talented and experienced hair transplant surgeons. He has dedicated more than 20 years to the practice of hair restoration, earning a number of awards and honors from the ISHRS. Dr. Mollura&rsquo;s passion is hair restoration and takes pride in his artistic approach to composition and aesthetics within hairline design and transplantation to achieve the best results for his patients.</p>
				<ul class="mol-doctor__credentials">
					<li>
						<span class="mol-icon-circle mol-icon-circle--on-dark" aria-hidden="true">
							<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3.5 2"/></svg>
						</span>
						<span>20+ Years Experience</span>
					</li>
					<li>
						<span class="mol-icon-circle mol-icon-circle--on-dark" aria-hidden="true">
							<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="6"/><path d="M8.5 13.5 7 22l5-3 5 3-1.5-8.5"/></svg>
						</span>
						<span>ISHRS Honors</span>
					</li>
					<li>
						<span class="mol-icon-circle mol-icon-circle--on-dark" aria-hidden="true">
							<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12 3-1.9 5.8a2 2 0 0 1-1.287 1.288L3 12l5.8 1.9a2 2 0 0 1 1.288 1.287L12 21l1.9-5.8a2 2 0 0 1 1.287-1.288L21 12l-5.8-1.9a2 2 0 0 1-1.288-1.287Z"/></svg>
						</span>
						<span>Artistic Hairline Design</span>
					</li>
				</ul>
				<a class="mol-btn mol-btn--primary" href="/meet-the-team/">Learn More</a>
			</div>
		</div>
	</section>

	<!-- Book a Consultation -->
	<section class="mol-consultation" id="book-consultation">
		<div class="mol-container">
			<div class="mol-consultation__text">
				<span class="mol-eyebrow">Contact Us</span>
				<h2 class="mol-h2">Book a Consultation</h2>
				<p>If you&rsquo;ve been dealing with hair loss or thinning hair, considering hair restoration, or miss the full head of hair you had in your youth&hellip; the team at Mollura Medical Hair Restoration are waiting to hear from you. We offer in-person and virtual consultations that will help you better understand your type of hair loss and the wealth of options that exist to help slow, stop, and reverse balding.</p>
			</div>
			<div class="mol-consultation__row">
				<div class="mol-consultation__form">
					<iframe
						src="https://api.leadconnectorhq.com/widget/form/QLVtK3vV2NBrePgva4xK"
						style="width:100%;height:100%;min-height:530px;border:none;border-radius:10px"
						id="inline-QLVtK3vV2NBrePgva4xK"
						data-layout="{'id':'INLINE'}"
						data-trigger-type="alwaysShow"
						data-trigger-value=""
						data-activation-type="alwaysActivated"
						data-activation-value=""
						data-deactivation-type="neverDeactivate"
						data-deactivation-value=""
						data-form-name="Mollura Hair Website Home Page"
						data-height="530"
						data-layout-iframe-id="inline-QLVtK3vV2NBrePgva4xK"
						data-form-id="QLVtK3vV2NBrePgva4xK"
						title="Mollura Hair Website Home Page">
					</iframe>
				</div>
				<div class="mol-consultation__photos">
					<img class="mol-consultation__photo mol-consultation__photo--back" src="<?php echo esc_url( $img . 'consultation-photo-1.png' ); ?>" alt="Patient during a virtual consultation with Mollura Medical Hair Restoration">
					<img class="mol-consultation__photo mol-consultation__photo--front" src="<?php echo esc_url( $img . 'consultation-photo-2.png' ); ?>" alt="Patient shaking hands with a Mollura Medical Hair Restoration doctor">
				</div>
			</div>
		</div>
	</section>

	<!-- FUT vs FUE Comparison -->
	<section class="mol-comparison">
		<div class="mol-container">
			<span class="mol-eyebrow">Side-by-Side Comparison</span>
			<h2 class="mol-h2">FUT vs FUE</h2>

			<div class="mol-comparison__grid">
				<div class="mol-card mol-comparison__card">
					<div class="mol-comparison__image">
						<img src="<?php echo esc_url( $img . 'fut-strip.jpg' ); ?>" alt="Close-up representing the FUT donor-area technique">
					</div>
					<div class="mol-comparison__body">
						<h3>FUT</h3>
						<p>Follicular Unit Transplantation is the process of removing a strip from the donor area to prepare and replace follicular units.</p>
						<a class="mol-btn mol-btn--outline-dark" href="/fut-hair-transplant/">More Info</a>
					</div>
				</div>
				<div class="mol-card mol-comparison__card">
					<div class="mol-comparison__image">
						<img src="<?php echo esc_url( $img . 'fue-units.jpg' ); ?>" alt="Close-up representing the FUE individual follicular unit technique">
					</div>
					<div class="mol-comparison__body">
						<h3>FUE</h3>
						<p>Follicular Unit Extraction is the method of harvesting individual follicular units from across your donor area for transplantation.</p>
						<a class="mol-btn mol-btn--outline-dark" href="/fue-hair-transplant/">More Info</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part( 'template-parts/testimonials' ); ?>

	<?php get_template_part( 'template-parts/closing-cta' ); ?>

</main>

<!-- Limited Time Offer Popup (homepage only) -->
<div class="mol-popup" id="mol-popup" role="dialog" aria-modal="true" aria-labelledby="mol-popup-title" hidden>
	<div class="mol-popup__overlay" data-mol-popup-close></div>
	<div class="mol-popup__panel">
		<button class="mol-popup__close" type="button" aria-label="Close offer" data-mol-popup-close>
			<svg width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 1l14 14M15 1L1 15"/></svg>
		</button>
		<div class="mol-popup__image">
			<img src="https://mollurahairtransplant.com/wp-content/uploads/2026/06/mollura-1-1.png" alt="">
		</div>
		<div class="mol-popup__content">
			<p class="mol-popup__eyebrow">Limited Time Offer</p>
			<p class="mol-popup__amount" id="mol-popup-title">$1,000</p>
			<p class="mol-popup__subhead">Off Your Hair Transplant</p>
			<p class="mol-popup__body">Book your consultation today and receive $1,000 off your hair transplant procedure. Offer is valid when your procedure is completed on or before Labor Day.</p>
			<a class="mol-btn mol-btn--primary" href="#book-consultation" data-mol-popup-close>Schedule Your Free Consultation</a>
			<p class="mol-popup__fine">Offer valid through Labor Day. Procedure must be completed by September 7, 2026.<br>Subject to consultation and scheduling availability.</p>
		</div>
	</div>
</div>
