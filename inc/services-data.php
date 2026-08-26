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

		'fut-hair-transplant' => array(
			'banner_title'      => 'FUT Hair Transplant',
			'banner_image'      => 'services/fut-hair-transplant-banner.png',
			'intro_eyebrow'     => 'FUT Hair Transplant',
			'intro_heading'     => 'What is an FUT Hair Transplant?',
			'intro_image'       => 'services/fut-hair-transplant-intro.png',
			'intro_image_alt'   => 'Diagram of the FUT hair transplant process: strip harvesting, strip slivering, grafts dissection, and grafts insertion',
			'intro_body'        => array(
				'In Follicular Unit Transplantation (FUT) procedures, commonly referred to as the Strip Method, a strip of hair-bearing tissue is removed from the donor area. The donor area is then closed, leaving a thin, linear scar. The strip is dissected under high-powered microscopes to separate naturally occurring follicular units and then transplanted into the areas of need.',
			),
			'benefits_eyebrow'  => 'Benefits',
			'benefits_heading'  => 'Why Choose an FUT Hair Transplant?',
			'benefits_image'    => 'services/fut-hair-transplant-benefits.png',
			'benefits_image_alt'=> 'Surgeon marking the donor area before an FUT hair transplant procedure',
			'benefits_list'     => array(
				'Single-Day Procedure',
				'Long-Lasting Results and Natural Appearance',
				'No Need to Shave Donor Area',
				'Same Linear Scar Can Be Used For Multiple Procedures',
				'Donor Area Maintains Original Density',
				'More Affordable Option',
			),
			'faqs'              => array(
				array(
					'q' => 'How is FUT different from FUE Hair Transplants',
					'a' => 'The primary difference is the method of extracting hair follicles. FUT involves harvesting a strip of scalp, leaving a linear scar, whereas FUE extracts individual follicles, leaving tiny, dot-like scars.',
				),
				array(
					'q' => 'Am I a good candidate for a FUT Hair Transplant?',
					'a' => 'FUT is ideal for patients with significant hair loss who require many grafts and have sufficient donor hair in the back of the scalp. It is also suitable for those looking for the most cost-effective solution.',
				),
				array(
					'q' => 'What is the recovery time after a FUT Hair Transplant',
					'a' => 'Recovery may take slightly longer than with FUE due to the linear incision in the donor area. Stitches are typically removed after 10-14 days, and most patients resume normal activities within 1-2 weeks.',
				),
				array(
					'q' => 'Will the transplanted hair look natural?',
					'a' => 'Yes, FUT transplants produce natural-looking results. The hairline design, density, and placement of follicles are carefully planned to match your natural growth pattern.',
				),
				array(
					'q' => 'Is FUT a permanent solution for hair loss?',
					'a' => 'FUT transplants use donor hair that is naturally resistant to DHT, the hormone associated with hair loss, which is why results are designed to be long-lasting.',
				),
				array(
					'q' => 'What is the cost of an FUT Hair Transplant',
					'a' => 'The transplant cost will be determined during your consultation. The price can range based on the amount of hair (grafts) the patient needs to achieve the desired results. Financing options are available.',
				),
			),
		),

		'facial-hair-transplants' => array(
			'banner_title'      => 'Facial Hair Transplants',
			'banner_image'      => 'services/facial-hair-transplants-banner.png',
			'intro_eyebrow'     => 'Facial Hair Transplant',
			'intro_heading'     => 'What is a Facial Hair Transplant?',
			'intro_image'       => 'services/facial-hair-transplants-intro.png',
			'intro_image_alt'   => 'Surgeon marking the beard area before a facial hair transplant procedure',
			'intro_body'        => array(
				'A facial hair transplant is a cosmetic procedure that can enhance facial hair growth in areas such as the beard, eyebrows, or sideburns. It involves transplanting hair follicles from the donor area in the back of the head to the desired facial region, creating a denser, natural looking appearance.',
			),
			'benefits_eyebrow'  => 'Benefits',
			'benefits_heading'  => 'Why Choose a Facial Hair Transplant',
			'benefits_image'    => 'services/facial-hair-transplants-benefits.png',
			'benefits_image_alt'=> 'Portrait of a man with a full, natural-looking beard',
			'benefits_list'     => array(
				'Natural Results',
				'Permanent Solutions',
				'Customizable',
				'Minimal Downtime',
			),
			'faqs'              => array(
				array(
					'q' => 'Who is a good candidate?',
					'a' => 'Individuals with patchy or sparse facial hair growth. Those seeking to enhance the appearance of their beard, eyebrows, or sideburns',
				),
				array(
					'q' => 'Is a Facial Hair Transplant Permanent?',
					'a' => 'Yes, the transplanted hair is permanent.',
				),
				array(
					'q' => 'When will I see the results?',
					'a' => 'New growth typically begins within 3 to 4 months. Full results are visible after 12-14 months.',
				),
				array(
					'q' => 'Is a Facial Hair Transplant painful?',
					'a' => 'No. Patients are under local anesthesia and will not feel any pain during the procedure.',
				),
			),
		),

	);

	return isset( $services[ $slug ] ) ? $services[ $slug ] : null;
}
