<?php
/**
 * Content for individual service detail pages, keyed by page slug.
 * Copy and image sourcing ported verbatim from the live site
 * (mollurahairtransplant.com/{slug}/) -- see project memory. Rendered by
 * patterns/service-detail.php via the shared "Service Detail" page template.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function mollura_service_data( $slug ) {
	$services = array(

		'fue-hair-transplant' => array(
			'banner_title'      => 'FUE Hair Transplant',
			'banner_image'      => 'services/fue-hair-transplant-banner.png',
			'intro_eyebrow'     => 'FUE Hair Transplant',
			'intro_heading'     => 'What is an FUE Hair Transplant?',
			'intro_image'       => 'services/fue-hair-transplant-intro.png',
			'intro_image_alt'   => 'Diagram of the FUE hair transplant process: punch incision, extraction of follicular units, harvesting of the grafts, and implantation of the grafts',
			'intro_body'        => array(
				'Follicular Unit Extraction (FUE) is a process of extracting donor hair for a follicular unit hair transplant. With this method, each individual follicular unit is extracted directly from the scalp.',
			),
			'benefits_eyebrow'  => 'Benefits',
			'benefits_heading'  => 'Why Choose an FUE Hair Transplant?',
			'benefits_image'    => 'services/fue-hair-transplant-benefits.png',
			'benefits_image_alt'=> 'Surgical instrument used in an FUE hair transplant procedure',
			'benefits_list'     => array(
				'Single-Day Procedure',
				'Permanant Results and Natural Appearance',
				'Minimally Invasive',
				'Virtually Painless',
				'Indiscernible Scarring and No Stitches',
				'Minimal Downtime',
			),
			'faqs'              => array(
				array(
					'q' => 'Am I a good candidate for a FUE hair transplant?',
					'a' => 'Candidates typically have stable hair loss patterns, sufficient donor hair density, and realistic expectations. A consultation with Mollura Medical will determine if FUE is right for you.',
				),
				array(
					'q' => 'What is the recovery time after a FUE Hair Transplant?',
					'a' => 'Recovery is relatively quick, with most patients returning to normal activities within 2-3 days. Minor redness and scabbing in the transplanted area typically resolve within a week or two.',
				),
				array(
					'q' => 'Will the transplanted hair look natural?',
					'a' => 'Yes, FUE transplants produce natural-looking results. The hairline design, density, and placement of follicles are carefully planned to match your natural growth pattern.',
				),
				array(
					'q' => 'How long will it take to see the results?',
					'a' => 'New growth begins around 3-4 months, with noticeable results at 6-9 months and full results at 12-14 months.',
				),
				array(
					'q' => 'Is FUE a permanent solution for hair loss?',
					'a' => 'Yes, the transplanted hair is resistant to the hormone (DHT) responsible for hair loss and should grow permanently in the new area.',
				),
				array(
					'q' => 'What is the cost of an FUE Hair Transplant',
					'a' => 'The transplant cost will be determined during your consultation. The price can range based on the amount of hair (grafts) the patient needs to achieve the desired results. Financing options are available.',
				),
			),
		),

	);

	return isset( $services[ $slug ] ) ? $services[ $slug ] : null;
}
